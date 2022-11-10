<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Variant\VariantInterface;

use function count;
use function explode;
use function sprintf;
use function strlen;
use function strtolower;
use function substr;

/**
 * Class AbstractLocale - The “root” locale, from which all others are derived.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
abstract class AbstractLocale
{
    // "Source" strings, when translating numbers
    protected const DECIMAL  = '.'; // The default decimal mark
    protected const GROUP    = ','; // The digit group separator
    protected const NEGATIVE = '-'; // Negative numbers

    // "Target" strings, when translating numbers
    protected const ADLM_GROUP   = '⹁';
    protected const ALM          = "\xD8\x9C"; // Arabic Letter Mark
    protected const APOSTROPHE   = '’';
    protected const ARAB_DECIMAL = "\xD9\xAB";
    protected const ARAB_GROUP   = "\xD9\xAC";
    protected const ARAB_PERCENT = "\xD9\xAA";
    protected const COMMA        = ',';
    protected const DOT          = '.';
    protected const HYPHEN       = '-';
    protected const LTR_MARK     = "\xE2\x80\x8E"; // Left-to-right marker
    protected const MINUS_SIGN   = "\xE2\x88\x92";
    protected const NARROW_NBSP  = "\xE2\x80\xAF"; // Narrow non-breaking space
    protected const NBSP         = "\xC2\xA0"; // Non-breaking space
    protected const RTL_MARK     = "\xE2\x80\x8F"; // Right-to-left marker

    // For formatting percentages
    protected const PERCENT     = '%%';
    protected const PLACEHOLDER = '%s';

    /**
     * Generate a linux locale code for this locale.  Examples include
     * "fr", “en_GB”, “ca_ES@valencia” and “sr@latin”.
     *
     * @return string
     */
    public function code(): string
    {
        $code   = $this->language()->code() . '_' . $this->territory()->code();
        $script = $this->script()->unicodeName();

        if ($script !== null && $this->script()->code() !== $this->language()->defaultScript()->code()) {
            $code .= '@' . strtolower($script);
        }

        if ($this->variant() !== null) {
            if ($this->variant()->code() === 'posix') {
                $code = 'POSIX';
            } else {
                $code .= '@' . $this->variant()->code();
            }
        }

        return $code;
    }

    /**
     * Which collation sequence should be used for this locale?
     * “unicode_ci” would mean use “utf8_unicode_ci”, “utf8mb4_unicode_ci”, etc.
     *
     * @link http://dev.mysql.com/doc/refman/5.7/en/charset-unicode-sets.html
     * @return string
     */
    public function collation(): string
    {
        return 'unicode_ci';
    }

    /**
     * Convert (Hindu-Arabic) digits into a localized form
     *
     * @param string $string e.g. "123.45"
     *
     * @return string
     */
    public function digits(string $string): string
    {
        return strtr($string, $this->numberSymbols() + $this->numerals());
    }

    /**
     * When writing large numbers place a separator after this number of digits.
     *
     * @return int
     */
    protected function digitsFirstGroup(): int
    {
        return 3;
    }

    /**
     * When writing large numbers place a separator after this number of digits.
     *
     * @return int
     */
    protected function digitsGroup(): int
    {
        return 3;
    }

    /**
     * Is text written left-to-right “ltr” or right-to-left “rtl”.
     * Most scripts are only written in one direction, but there are a few that
     * can be written in either direction.
     *
     * @return string “ltr” or “rtl”
     */
    public function direction(): string
    {
        return $this->script()->direction();
    }

    /**
     * The name of this locale, in its own language/script, and with the
     * customary capitalization of the locale.
     *
     * @return string
     */
    abstract public function endonym(): string;

    /**
     * A sortable version of the locale name.  For example, “British English”
     * might sort as “ENGLISH, BRITISH” to keep all the variants of English together.
     *
     * All-capitals makes sorting easier, as we can use a simple strcmp().
     *
     * @return string
     */
    public function endonymSortable(): string
    {
        return $this->endonym();
    }

    /**
     * Markup for an HTML element
     *
     * @return string e.g. lang="ar" dir="rtl"
     */
    public function htmlAttributes(): string
    {
        $direction = $this->direction();

        if ($direction === 'rtl' || $direction !== $this->script()->direction()) {
            return 'lang="' . $this->languageTag() . '" dir="' . $this->direction() . '"';
        }

        return 'lang="' . $this->languageTag() . '"';
    }

    /**
     * The language used by this locale.
     *
     * @return LanguageInterface
     */
    abstract public function language(): LanguageInterface;

    /**
     * The IETF language tag for the locale.  Examples include
     * “fr, “en-GB”, “ca-ES-valencia” and “sr-Latn”.
     *
     * @return string
     */
    public function languageTag(): string
    {
        $language_tag = $this->language()->code();
        if ($this->script()->code() !== $this->language()->defaultScript()->code()) {
            $language_tag .= '-' . $this->script()->code();
        }
        if ($this->territory()->code() !== $this->language()->defaultTerritory()->code()) {
            $language_tag .= '-' . $this->territory()->code();
        }
        if ($this->variant() !== null) {
            $language_tag .= '-' . $this->variant()->code();
        }

        return $language_tag;
    }

    /**
     * When using grouping digits in numbers, keep this many of digits together.
     *
     * @return int
     */
    protected function minimumGroupingDigits(): int
    {
        return 1;
    }

    /**
     * Convert (Hindu-Arabic) digits into a localized form
     *
     * @param float|int $number The number to be localized
     *
     * @return string
     */
    public function number(float|int $number): string
    {
        if ($number < 0) {
            $number   = -$number;
            $negative = self::NEGATIVE;
        } else {
            $negative = '';
        }
        $parts    = explode(self::DECIMAL, (string) $number, 2);
        $integers = $parts[0];
        if (strlen($integers) >= $this->digitsFirstGroup() + $this->minimumGroupingDigits()) {
            $todo     = substr($integers, 0, -$this->digitsFirstGroup());
            $integers = self::GROUP . substr($integers, -$this->digitsFirstGroup());
            while (strlen($todo) >= $this->digitsGroup() + $this->minimumGroupingDigits()) {
                $integers = self::GROUP . substr($todo, -$this->digitsGroup()) . $integers;
                $todo     = substr($todo, 0, -$this->digitsGroup());
            }
            $integers = $todo . $integers;
        }
        if (count($parts) > 1) {
            $decimals = self::DECIMAL . $parts[1];
        } else {
            $decimals = '';
        }

        return $this->digits($negative . $integers . $decimals);
    }

    /**
     * The symbols used to format numbers.
     *
     * @return array<string>
     */
    protected function numberSymbols(): array
    {
        return [];
    }

    /**
     * The numerals (0123456789) used by this locale.
     *
     * @return array<int,string>
     */
    protected function numerals(): array
    {
        return $this->script()->numerals();
    }

    /**
     * Convert (Hindu-Arabic) digits into a localized form
     *
     * @param float|int $number The number to be localized
     *
     * @return string
     */
    public function percent(float|int $number): string
    {
        return sprintf($this->percentFormat(), $this->number($number * 100.0));
    }

    /**
     * How to format a floating point number (%s) as a percentage.
     *
     * @return string
     */
    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }

    /**
     * Which plural rule is used in this locale
     *
     * @return PluralRuleInterface
     */
    public function pluralRule(): PluralRuleInterface
    {
        return $this->language()->pluralRule();
    }

    /**
     * The script used by this locale.
     *
     * @return ScriptInterface
     */
    public function script(): ScriptInterface
    {
        return $this->language()->defaultScript();
    }

    /**
     * The territory used by this locale.
     *
     * @return TerritoryInterface
     */
    public function territory(): TerritoryInterface
    {
        return $this->language()->defaultTerritory();
    }

    /**
     * The variant, if any of this locale.
     *
     * @return VariantInterface|null
     */
    public function variant(): ?VariantInterface
    {
        return null;
    }
}

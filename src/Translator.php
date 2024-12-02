<?php

declare(strict_types=1);

namespace Fisharebest\Localization;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;

use function count;
use function explode;

/**
 * Class Translator - use a translation to translate messages.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class Translator
{
    private array $translations;

    private PluralRuleInterface $plural_rule;

    /**
     * Create a translator
     *
     * @param array<string,string> $translations
     * @param PluralRuleInterface  $plural_rule
     */
    public function __construct(array $translations, PluralRuleInterface $plural_rule)
    {
        $this->translations = $translations;
        $this->plural_rule  = $plural_rule;
    }

    /**
     * Translate a message into another language.
     * Works the same as gettext().
     */
    public function translate(string $message): string
    {
        return $this->translations[$message] ?? $message;
    }

    /**
     * Translate a context-sensitive message into another language.
     * Works the same as pgettext().
     */
    public function translateContext(string $context, string $message): string
    {
        $key = $context . Translation::CONTEXT_SEPARATOR . $message;

        return $this->translations[$key] ?? $message;
    }

    /**
     * Translate a plural message into another language.
     * Works the same as ngettext().
     */
    public function translatePlural(string $singular, string $plural, int $number): string
    {
        $key = $singular . Translation::PLURAL_SEPARATOR . $plural;
        if (isset($this->translations[$key])) {
            $plurals = explode(Translation::PLURAL_SEPARATOR, $this->translations[$key]);
            if (count($plurals) === $this->plural_rule->plurals()) {
                return $plurals[$this->plural_rule->plural($number)];
            }
        }

        return $number === 1 ? $singular : $plural;
    }
}

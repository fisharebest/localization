<?php namespace Fisharebest\Localization;

/**
 * Class Locale - The “root” locale, from which all others are derived.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
abstract class Locale {
	const NBSP = ' '; // A non-breaking space;

	/**
	 * Generate a linux locale code for this locale.  Examples include
	 * “POSIX, “en_GB”, “ca_ES@valencia” and “sr_RS@latin”.
	 *
	 * @return string
	 */
	public function code() {
		$code = $this->language()->code() . '_' . $this->territory()->code();

		if ($this->script() != $this->language()->defaultScript()) {
			$code .= '@' . strtolower($this->script()->unicodeName());
		}

		if ($this->variant()) {
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
	 *
	 * @return string
	 */
	public function collation() {
		return 'unicode_ci';
	}

	/**
	 * Callback for PHP sort functions - allows lists of locales to be sorted.
	 *
	 * @param Locale $x
	 * @param Locale $y
	 *
	 * @return integer
	 */
	public static function compare(Locale $x, Locale $y) {
		return strcmp($x->endonymSortable(), $y->endonymSortable());
	}

	/**
	 * Convert (Hindu-Arabic) digits into a localized form
	 *
	 * @param string $string  e.g. "123.45"
	 *
	 * @return string
	 */
	public function convertDigits($string) {
		return strtr($string, $this->digits());
	}

	/**
	 * A format-string for use with the date() function.
	 *
	 * @return string
	 */
	public function dateFormatLong() {
		return 'c';
	}

	/**
	 * A format-string for use with the date() function.
	 *
	 * @return string
	 */
	public function dateFormatMedium() {
		return 'c';
	}

	/**
	 * A format-string for use with the date() function.
	 *
	 * @return string
	 */
	public function dateFormatShort() {
		return 'c';
	}

	/**
	 * When writing floating point numbers, this symbol separates the fraction part.
	 * Most countries have a national standard.
	 *
	 * @return string
	 */
	public function decimalMark() {
		return $this->territory()->decimalMark();
	}

	/**
	 * When writing large numbers place a separator after this number of digits.
	 * Most countries have a national standard.
	 *
	 * @return integer
	 */
	public function digitsFirstGroup() {
		return $this->territory()->digitsFirstGroup();
	}

	/**
	 * When writing large numbers place a separator after this number of digits.
	 * Most countries have a national standard.
	 *
	 * @return integer
	 */
	public function digitsGroup() {
		return $this->territory()->digitsGroup();
	}

	/**
	 * When writing large numbers place a separator after this number of digits.
	 * Most countries have a national standard.
	 *
	 * @return string
	 */
	public function digitsGroupSeparator() {
		return $this->territory()->digitsGroupSeparator();
	}

	/**
	 * The digits (0123456789) used by this locale.
	 *
	 * @return string[]
	 */
	public function digits() {
		return $this->script()->digits();
	}

	/**
	 * The name of this locale, in its own language/script, and with the
	 * customary capitalization of the locale.
	 *
	 * @return string
	 */
	abstract public function endonym();

	/**
	 * A sortable version of the locale name.  For example, “British English”
	 * might sort as “ENGLISH, BRITISH” to keep all the variants of English together.
	 *
	 * All-capitals makes sorting easier, as we can use a simple strcmp().
	 *
	 * @return string
	 */
	protected function endonymSortable() {
		return $this->endonym();
	}

	/**
	 * Convert (Hindu-Arabic) digits into a localized form
	 *
	 * @param float $number The number to be localized
	 *
	 * @return string
	 */
	public function formatNumber($number) {
		$parts    = explode('.', $number);
		$integers = $parts[0];
		if (strlen($integers) > $this->digitsFirstGroup()) {
			$todo     = substr($integers, 0, -$this->digitsFirstGroup());
			$integers = $this->digitsGroupSeparator() . substr($integers, -$this->digitsFirstGroup());
			while (strlen($todo) > $this->digitsGroup()) {
				$integers = $this->digitsGroupSeparator() . substr($todo, -$this->digitsGroup()) . $integers;
				$todo     = substr($todo, 0, -$this->digitsGroup());
			}
			$integers = $todo . $integers;
		}
		if (count($parts) > 1) {
			$decimals = $this->decimalMark() . $parts[1];
		} else {
			$decimals = '';
		}

		return $this->convertDigits($integers . $decimals);
	}

	/**
	 * The language used by this locale.
	 *
	 * @return Language
	 */
	abstract public function language();

	/**
	 * The IETF language tag for the locale.  Examples include
	 * “en-US-posix, “en-GB”, “ca-ES-valencia” and “sr-Latn-RS”.
	 *
	 * @return string
	 */
	public function languageTag() {
		$language_tag = $this->language()->code();
		if ($this->script() != $this->language()->defaultScript()) {
			$language_tag .= '-' . $this->script()->code();
		}
		if ($this->territory() != $this->language()->defaultTerritory()) {
			$language_tag .= '-' . $this->territory()->code();
		}
		if ($this->variant()) {
			$language_tag .= '-' . $this->variant()->code();
		}

		return $language_tag;
	}

	/**
	 * When using grouping separators in numbers, keep this number of digits together.
	 *
	 * @return integer
	 */
	public function minimumGroupingDigits() {
		return $this->territory()->minimumGroupingDigits();
	}

	/**
	 * The territory used by this locale.
	 *
	 * @return Territory
	 */
	public function territory() {
		return $this->language()->defaultTerritory();
	}

	/**
	 * The script used by this locale.
	 *
	 * @return Script
	 */
	public function script() {
		return $this->language()->defaultScript();
	}

	/**
	 * The variant, if any of this locale.
	 *
	 * @return Variant
	 */
	public function variant() {
		return null;
	}
}

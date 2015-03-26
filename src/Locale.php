<?php namespace Fisharebest\Localization;

use Fisharebest\Localization\Locale\LocaleInterface;

/**
 * Class Locale - Static functions to generate and compare locales.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class Locale {
	/**
	 * Callback for PHP sort functions - allows lists of locales to be sorted.
	 * Diacritics are removed and text is capitalized to allow fast/simple sorting.
	 *
	 * @param LocaleInterface $x
	 * @param LocaleInterface $y
	 *
	 * @return integer
	 */
	public static function compare(LocaleInterface $x, LocaleInterface $y) {
		return strcmp($x->endonymSortable(), $y->endonymSortable());
	}

	/**
	 * Create a locale from a language tag (or locale code).
	 *
	 * @param string $code
	 *
	 * @return LocaleInterface
	 * @throws \DomainException
	 */
	public static function create($code) {
		$class = __NAMESPACE__ . '\Locale\Locale' . implode(array_map(function ($x) {
			return ucfirst(strtolower($x));
		}, preg_split('/[^a-zA-Z0-9]+/', $code)));

		if (class_exists($class)) {
			return new $class;
		} else {
			throw new \DomainException($code);
		}
	}
}

<?php namespace Fisharebest\Localization;

/**
 * Class LocaleYoBj
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleYoBj extends LocaleYo {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryBj;
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return '.';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return ',';
	}
}

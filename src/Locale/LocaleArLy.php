<?php namespace Fisharebest\Localization;

/**
 * Class LocaleArLy
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleArLy extends LocaleAr {
	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '.';
	}

	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryLy;
	}
}

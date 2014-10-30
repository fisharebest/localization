<?php namespace Fisharebest\Localization;

/**
 * Class LocaleArEh
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleArEh extends LocaleAr {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '.';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return ',';
	}

	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryEh;
	}
}

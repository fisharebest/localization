<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnPk
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnPk extends LocaleEn {
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
		return new TerritoryPk;
	}
}

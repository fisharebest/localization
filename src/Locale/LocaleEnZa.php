<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnZa
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnZa extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryZa;
	}
}

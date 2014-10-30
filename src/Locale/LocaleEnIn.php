<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnIn
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnIn extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryIn;
	}
}

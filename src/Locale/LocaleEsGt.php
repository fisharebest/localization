<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEsGt
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEsGt extends LocaleEs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryGt;
	}
}

<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEsHn
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEsHn extends LocaleEs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryHn;
	}
}

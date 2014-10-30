<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEsPr
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEsPr extends LocaleEs {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryPr;
	}
}

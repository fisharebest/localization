<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFrLu
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFrLu extends LocaleFr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryLu;
	}
}

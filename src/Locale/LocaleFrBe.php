<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFrBe
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFrBe extends LocaleFr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryBe;
	}
}

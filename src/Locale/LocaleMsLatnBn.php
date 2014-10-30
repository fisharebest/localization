<?php namespace Fisharebest\Localization;

/**
 * Class LocaleMsLatnBn
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleMsLatnBn extends LocaleMsLatn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryBn;
	}
}

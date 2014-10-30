<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFrGq
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFrGq extends LocaleFr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryGq;
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return self::NBSP;
	}
}

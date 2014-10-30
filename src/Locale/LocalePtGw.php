<?php namespace Fisharebest\Localization;

/**
 * Class LocalePtGw
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePtGw extends LocalePt {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryGw;
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

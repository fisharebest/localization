<?php namespace Fisharebest\Localization;

/**
 * Class LocalePtMz
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePtMz extends LocalePt {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryMz;
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

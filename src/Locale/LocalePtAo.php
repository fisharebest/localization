<?php namespace Fisharebest\Localization;

/**
 * Class LocalePtAo
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePtAo extends LocalePt {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryAo;
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

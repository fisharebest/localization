<?php namespace Fisharebest\Localization;

/**
 * Class LocalePtSt
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePtSt extends LocalePt {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritorySt;
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

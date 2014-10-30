<?php namespace Fisharebest\Localization;

/**
 * Class LocalePtCv
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePtCv extends LocalePt {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryCv;
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

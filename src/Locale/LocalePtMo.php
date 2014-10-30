<?php namespace Fisharebest\Localization;

/**
 * Class LocalePtMo
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePtMo extends LocalePt {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryMo;
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

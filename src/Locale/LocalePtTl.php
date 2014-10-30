<?php namespace Fisharebest\Localization;

/**
 * Class LocalePtTl
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePtTl extends LocalePt {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryTl;
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

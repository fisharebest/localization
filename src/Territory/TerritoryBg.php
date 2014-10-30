<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory BG - Bulgaria.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryBg extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'BG';
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return self::NBSP;
	}

	/** {@inheritdoc} */
	public function minimumGroupingDigits() {
		return 2;
	}
}

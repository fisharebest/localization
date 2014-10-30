<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory PL - Poland.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryPl extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'PL';
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

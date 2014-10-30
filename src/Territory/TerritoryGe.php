<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory GE - Georgia.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryGe extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'GE';
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

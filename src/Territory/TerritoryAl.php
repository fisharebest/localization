<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory AL - Albania.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryAl extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'AL';
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

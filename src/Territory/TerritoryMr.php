<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory MR - Mauritania.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryMr extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'MR';
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

<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory NE - Niger.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryNe extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'NE';
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

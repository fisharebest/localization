<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory GN - Guinea.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryGn extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'GN';
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

<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory MC - Monaco.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryMc extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'MC';
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

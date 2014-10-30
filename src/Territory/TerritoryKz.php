<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory KZ - Kazakhstan.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryKz extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'KZ';
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

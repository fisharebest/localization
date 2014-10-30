<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory GP - Guadeloupe.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryGp extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'GP';
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

<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory CI - Côte d'Ivoire.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryCi extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'CI';
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

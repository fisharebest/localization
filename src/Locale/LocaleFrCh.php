<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFrCh - Swiss French
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFrCh extends LocaleFr {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '.';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return self::NBSP;
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'français suisse';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'FRANCAIS SUISSE';
	}

	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryCh;
	}
}

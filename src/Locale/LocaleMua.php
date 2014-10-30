<?php namespace Fisharebest\Localization;

/**
 * Class LocaleMua - Mundang
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleMua extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '.';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'MUNDAŊ';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'MUNDAŊ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageMua;
	}
}

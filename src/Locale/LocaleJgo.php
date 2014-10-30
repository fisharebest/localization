<?php namespace Fisharebest\Localization;

/**
 * Class LocaleJgo - Ngomba
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleJgo extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'Ndaꞌa';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'NDAꞋA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageJgo;
	}

	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '.';
	}
}

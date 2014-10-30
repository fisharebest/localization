<?php namespace Fisharebest\Localization;

/**
 * Class LocaleIa - Interlingua
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleIa extends Locale {
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
		return 'interlingua';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'INTERLINGUA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageIa;
	}
}

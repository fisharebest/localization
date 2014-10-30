<?php namespace Fisharebest\Localization;

/**
 * Class LocaleNnh - Ngiemboon
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleNnh extends Locale {
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
		return 'Shwóŋò ngiembɔɔn';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'SHWÓŊÒ NGIEMBƆƆN';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageNnh;
	}
}

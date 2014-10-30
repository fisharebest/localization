<?php namespace Fisharebest\Localization;

/**
 * Class LocaleRm - Romansh
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleRm extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '.';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '’';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'rumantsch';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'RUMANTSCH';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageRm;
	}
}

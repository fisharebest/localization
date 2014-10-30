<?php namespace Fisharebest\Localization;

/**
 * Class LocaleSmn - Inari Sami
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleSmn extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '.';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return ',';
	}


	/** {@inheritdoc} */
	public function endonym() {
		return 'anarâškielâ';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'ANARÂŠKIELÂ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageSmn;
	}
}

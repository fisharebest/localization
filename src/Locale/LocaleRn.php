<?php namespace Fisharebest\Localization;

/**
 * Class LocaleRn - Rundi
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleRn extends Locale {
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
		return 'Ikirundi';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'IKIRUNDI';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageRn;
	}
}

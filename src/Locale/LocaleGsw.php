<?php namespace Fisharebest\Localization;

/**
 * Class LocaleGsw - Swiss German
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleGsw extends Locale {
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
		return 'Schwiizertüütsch';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'SCHWIIZERTÜÜTSCH';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageGsw;
	}
}

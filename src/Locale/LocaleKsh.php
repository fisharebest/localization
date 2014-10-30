<?php namespace Fisharebest\Localization;

/**
 * Class LocaleKsh - Colognian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleKsh extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return self::NBSP;
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'Kölsch';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'KOLSCH';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageKsh;
	}
}

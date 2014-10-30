<?php namespace Fisharebest\Localization;

/**
 * Class LocaleKkj - Kako
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleKkj extends Locale {
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
		return 'kakɔ';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'KAKƆ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageKkj;
	}
}

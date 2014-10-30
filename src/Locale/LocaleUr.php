<?php namespace Fisharebest\Localization;

/**
 * Class LocaleUr - Urdu
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleUr extends Locale {
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
		return 'اردو';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageUr;
	}
}

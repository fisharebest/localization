<?php namespace Fisharebest\Localization;

/**
 * Class LocaleAr - Arabic
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleAr extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '٫';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '٬';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'العربية';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageAr;
	}
}

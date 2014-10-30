<?php namespace Fisharebest\Localization;

/**
 * Class LocaleHi - Hindi
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleHi extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'हिंदी';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageHi;
	}
}

<?php namespace Fisharebest\Localization;

/**
 * Class LocaleHe - Hebrew
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleHe extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'עברית';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageHe;
	}
}

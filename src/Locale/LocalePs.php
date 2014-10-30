<?php namespace Fisharebest\Localization;

/**
 * Class LocalePs - Pashto
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePs extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'پښتو';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguagePs;
	}
}

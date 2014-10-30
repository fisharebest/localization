<?php namespace Fisharebest\Localization;

/**
 * Class LocaleZgh - Standard Moroccan Tamazight
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleZgh extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'ⵜⴰⵎⴰⵣⵉⵖⵜ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageZgh;
	}
}

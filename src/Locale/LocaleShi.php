<?php namespace Fisharebest\Localization;

/**
 * Class LocaleShi - Tachelhit
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleShi extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'ⵜⴰⵎⴰⵣⵉⵖⵜ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageShi;
	}
}

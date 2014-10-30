<?php namespace Fisharebest\Localization;

/**
 * Class LocaleKl - Kalaallisut
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleKl extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'kalaallisut';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'KALAALLISUT';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageKl;
	}
}

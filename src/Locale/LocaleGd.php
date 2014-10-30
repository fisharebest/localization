<?php namespace Fisharebest\Localization;

/**
 * Class LocaleGd - Scottish Gaelic
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleGd extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'Gàidhlig';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'GÀIDHLIG';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageGd;
	}
}

<?php namespace Fisharebest\Localization;

/**
 * Class LocaleUz - Uzbek
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleUz extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'oʻzbekcha';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'OʻZBEKCHA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageUz;
	}
}

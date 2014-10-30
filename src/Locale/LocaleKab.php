<?php namespace Fisharebest\Localization;

/**
 * Class LocaleKab - Kabyle
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleKab extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'Taqbaylit';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'TAQBAYLIT';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageKab;
	}
}

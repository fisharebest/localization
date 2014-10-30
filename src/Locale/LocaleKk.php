<?php namespace Fisharebest\Localization;

/**
 * Class LocaleKk - Kazakh
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleKk extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'қазақ тілі';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'ҚАЗАҚ ТІЛІ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageKk;
	}
}

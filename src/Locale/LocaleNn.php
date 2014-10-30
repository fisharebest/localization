<?php namespace Fisharebest\Localization;

/**
 * Class LocaleNn - Norwegian Nynorsk
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleNn extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'nynorsk';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'NYNORSK';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageNn;
	}
}

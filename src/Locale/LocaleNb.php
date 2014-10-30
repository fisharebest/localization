<?php namespace Fisharebest\Localization;

/**
 * Class LocaleNb - Norwegian Bokmål
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleNb extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'norsk bokmål';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'NORSK BOKMÅL';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageNb;
	}
}

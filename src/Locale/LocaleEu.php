<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEu - Basque
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEu extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'euskara';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'EUSKARA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageEu;
	}
}

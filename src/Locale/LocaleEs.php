<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEs - Spanish
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEs extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'spanish_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'español';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'ESPAÑOL';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageEs;
	}

	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryEs;
	}
}

<?php namespace Fisharebest\Localization;

/**
 * Class LocaleRo - Romanian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleRo extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'romanian_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'română';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'ROMÂNĂ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageRo;
	}
}

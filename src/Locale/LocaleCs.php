<?php namespace Fisharebest\Localization;

/**
 * Class LocaleCs - Czech
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleCs extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'croatian_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'čeština';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'ČEŠTINA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageCs;
	}
}

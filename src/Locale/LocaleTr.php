<?php namespace Fisharebest\Localization;

/**
 * Class LocaleTr - Turkish
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleTr extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'turkish_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'Türkçe';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'TÜRKÇE';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageTr;
	}
}

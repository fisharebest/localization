<?php namespace Fisharebest\Localization;

/**
 * Class LocaleSe - Northern Sami
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleSe extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'davvisámegiella';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'DAVVISAMEGIELLA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageSe;
	}
}

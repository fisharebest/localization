<?php namespace Fisharebest\Localization;

/**
 * Class LocaleBas - Basaa
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleBas extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'Ɓàsàa';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'ƁÀSÀA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageBas;
	}
}

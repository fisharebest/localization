<?php namespace Fisharebest\Localization;

/**
 * Class LocaleBs - Bosnian
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleBs extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'bosanski';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'BOSANSKI';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageBs;
	}
}

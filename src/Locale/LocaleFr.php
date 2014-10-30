<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFr - French
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFr extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'français';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'FRANÇAIS';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageFr;
	}
}

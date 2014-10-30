<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFi - Finnish
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFi extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'suomi';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'SUOMI';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageFi;
	}
}

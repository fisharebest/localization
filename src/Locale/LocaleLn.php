<?php namespace Fisharebest\Localization;

/**
 * Class LocaleLn - Lingala
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleLn extends Locale {
	/** {@inheritdoc} */
	public function decimalMark() {
		return ',';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '.';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'lingála';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'LINGÁLA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageLn;
	}
}

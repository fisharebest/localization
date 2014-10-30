<?php namespace Fisharebest\Localization;

/**
 * Class LocalePt - Portuguese
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePt extends Locale {
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
		return 'português';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'PORTUGUÊS';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguagePt;
	}
}

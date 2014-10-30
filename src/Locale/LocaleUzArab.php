<?php namespace Fisharebest\Localization;

/**
 * Class LocaleUzArab
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleUzArab extends LocaleUz {
	/** {@inheritdoc} */
	public function decimalMark() {
		return '٫';
	}

	/** {@inheritdoc} */
	public function digitsGroupSeparator() {
		return '٬';
	}

	/** {@inheritdoc} */
	public function script() {
		return new ScriptArab;
	}
}

<?php namespace Fisharebest\Localization;

/**
 * Class LocalePaArab
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocalePaArab extends LocalePa {
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

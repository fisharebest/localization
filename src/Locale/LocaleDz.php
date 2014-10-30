<?php namespace Fisharebest\Localization;

/**
 * Class LocaleDz - Dzongkha
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleDz extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'རྫོང་ཁ';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageDz;
	}
}

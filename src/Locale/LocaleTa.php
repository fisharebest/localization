<?php namespace Fisharebest\Localization;

/**
 * Class LocaleTa - Tamil
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleTa extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'தமிழ்';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageTa;
	}
}

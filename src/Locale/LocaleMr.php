<?php namespace Fisharebest\Localization;

/**
 * Class LocaleMr - Marathi
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleMr extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'मराठी';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageMr;
	}
}

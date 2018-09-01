<?php namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritorySa;

/**
 * Class LanguageAr - Representation of the Najdi Arabic language.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LanguageArs extends LanguageAr {
	public function code() {
		return 'ars';
	}

	public function defaultTerritory()
    {
        return new TerritorySa();
    }
}

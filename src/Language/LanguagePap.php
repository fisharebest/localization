<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\Territory029;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguagePap - Representation of the Papiamentu language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguagePap extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pap';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new Territory029();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}

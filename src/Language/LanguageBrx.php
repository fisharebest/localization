<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryIn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageBrx - Representation of the Bodo (India) language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageBrx extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'brx';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}

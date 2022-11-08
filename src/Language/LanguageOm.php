<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryEt;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageOm - Representation of the Oromo language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageOm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'om';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryEt();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}

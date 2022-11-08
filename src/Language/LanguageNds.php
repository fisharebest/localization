<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryDe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageNds - Representation of the Low German language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageNds extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nds';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryDe();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}

<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryRu;

/**
 * Class LanguageSah - Representation of the Yakut language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSah extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sah';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}

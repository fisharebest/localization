<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryCn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageIi - Representation of the Sichuan Yi language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageIi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ii';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}

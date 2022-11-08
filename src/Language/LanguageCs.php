<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryCz;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageCs - Representation of the Czech language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageCs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'cs';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCz();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule8();
    }
}

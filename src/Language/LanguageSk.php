<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritorySk;

/**
 * Class LanguageSk - Representation of the Slovak language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sk';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritorySk();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule8();
    }
}

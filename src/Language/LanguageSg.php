<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryCf;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageSg - Representation of the Sango language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sg';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCf();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}

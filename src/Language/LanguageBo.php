<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryCn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageBo - Representation of the Tibetan language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageBo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bo';
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

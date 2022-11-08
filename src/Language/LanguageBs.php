<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryBa;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageBs - Representation of the Bosnian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageBs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bs';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBa();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule7();
    }
}

<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryFr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageBr - Representation of the Breton language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageBr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'br';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryFr();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}

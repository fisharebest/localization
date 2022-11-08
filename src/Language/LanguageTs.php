<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryZa;

/**
 * Class LanguageTs - Representation of the Tsonga language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageTs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ts';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryZa();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}

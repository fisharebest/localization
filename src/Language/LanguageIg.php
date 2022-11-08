<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LanguageIg - Representation of the Igbo language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageIg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ig';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryNg();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}

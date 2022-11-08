<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMy;

/**
 * Class LanguageMs - Representation of the Malay language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ms';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryMy();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}

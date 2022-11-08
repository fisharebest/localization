<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryIs;

/**
 * Class LanguageIs - Representation of the Icelandic language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageIs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'is';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIs();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule15();
    }
}

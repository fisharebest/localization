<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptOrya;
use Fisharebest\Localization\Territory\TerritoryIn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageOr - Representation of the Oriya language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageOr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'or';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptOrya();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}

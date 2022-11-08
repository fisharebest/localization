<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LanguageCkb - Representation of the Sorani language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageCkb extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ckb';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIq();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}

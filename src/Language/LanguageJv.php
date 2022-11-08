<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptJava;
use Fisharebest\Localization\Territory\TerritoryId;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageJv - Representation of the Javanese language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageJv extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'jv';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptJava();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryId();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}

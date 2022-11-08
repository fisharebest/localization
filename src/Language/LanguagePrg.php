<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule3;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;

/**
 * Class LanguagePrg - Representation of the Old Prussian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguagePrg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'prg';
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule3();
    }
}

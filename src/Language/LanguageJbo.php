<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;

/**
 * Class LanguageJbo - Representation of the Lojban language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageJbo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'jbo';
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}

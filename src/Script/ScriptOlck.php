<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOlck - Representation of the Ol Chiki (Ol Cemet’, Ol, Santali) script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOlck extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Olck';
    }

    public function numerals(): array
    {
        return ['᱐', '᱑', '᱒', '᱓', '᱔', '᱕', '᱖', '᱗', '᱘', '᱙'];
    }

    public function number(): string
    {
        return '261';
    }

    public function unicodeName(): ?string
    {
        return 'Ol_Chiki';
    }
}

<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSaur - Representation of the Saurashtra script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSaur extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Saur';
    }

    public function numerals(): array
    {
        return array('꣐', '꣑', '꣒', '꣓', '꣔', '꣕', '꣖', '꣗', '꣘', '꣙');
    }

    public function number(): string
    {
        return '344';
    }

    public function unicodeName(): ?string
    {
        return 'Saurashtra';
    }
}

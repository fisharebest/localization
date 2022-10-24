<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTibt - Representation of the Tibetan script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTibt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tibt';
    }

    public function numerals(): array
    {
        return array('༠', '༡', '༢', '༣', '༤', '༥', '༦', '༧', '༨', '༩');
    }

    public function number(): string
    {
        return '330';
    }

    public function unicodeName(): ?string
    {
        return 'Tibetan';
    }
}

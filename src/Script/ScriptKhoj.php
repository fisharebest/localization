<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKhoj - Representation of the Khojki script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKhoj extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Khoj';
    }

    public function number(): string
    {
        return '322';
    }

    public function unicodeName(): ?string
    {
        return 'Khojki';
    }
}

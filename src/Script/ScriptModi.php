<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptModi - Representation of the Modi, Moḍī script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptModi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Modi';
    }

    public function number(): string
    {
        return '324';
    }

    public function unicodeName(): ?string
    {
        return 'Modi';
    }
}

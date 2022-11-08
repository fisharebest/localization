<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBhks - Representation of the Bhaiksuki script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBhks extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bhks';
    }

    public function number(): string
    {
        return '334';
    }

    public function unicodeName(): ?string
    {
        return 'Bhaiksuki';
    }
}

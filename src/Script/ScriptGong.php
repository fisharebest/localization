<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGong - Representation of the Gunjala Gondi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGong extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Gong';
    }

    public function number(): string
    {
        return '312';
    }

    public function unicodeName(): ?string
    {
        return 'Gunjala_Gondi';
    }
}

<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptShrd - Representation of the Sharada, Śāradā script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptShrd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Shrd';
    }

    public function numerals(): array
    {
        return ['𑇐', '𑇑', '𑇒', '𑇓', '𑇔', '𑇕', '𑇖', '𑇗', '𑇘', '𑇙'];
    }

    public function number(): string
    {
        return '319';
    }

    public function unicodeName(): ?string
    {
        return 'Sharada';
    }
}

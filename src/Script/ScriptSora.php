<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSora - Representation of the Sora Sompeng script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSora extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sora';
    }

    public function numerals(): array
    {
        return ['𑃰', '𑃱', '𑃲', '𑃳', '𑃴', '𑃵', '𑃶', '𑃷', '𑃸', '𑃹'];
    }

    public function number(): string
    {
        return '398';
    }

    public function unicodeName(): ?string
    {
        return 'Sora_Sompeng';
    }
}

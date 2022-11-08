<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBrah - Representation of the Brahmi script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBrah extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Brah';
    }

    public function numerals(): array
    {
        return array('𑁦', '𑁧', '𑁨', '𑁩', '𑁪', '𑁫', '𑁬', '𑁭', '𑁮', '𑁯');
    }

    public function number(): string
    {
        return '300';
    }

    public function unicodeName(): ?string
    {
        return 'Brahmi';
    }
}

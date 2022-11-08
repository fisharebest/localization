<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

/**
 * Class LocaleTkCyrl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTkCyrl extends LocaleTk
{
    public function endonym(): string
    {
        return 'түркменче';
    }

    public function endonymSortable(): string
    {
        return 'түркменче';
    }
}

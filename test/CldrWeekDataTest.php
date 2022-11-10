<?php

namespace Fisharebest\LocalizationTest;

use PHPUnit\Framework\TestCase;

use function file_get_contents;
use function preg_split;
use function simplexml_load_string;
use function strtolower;
use function ucfirst;

use const PREG_SPLIT_NO_EMPTY;

/**
 * Tests for the CLDR
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @coversNothing
 */
class CldrWeekDataTest extends TestCase
{
    private const DAYS = [
        'sun' => 0,
        'mon' => 1,
        'tue' => 2,
        'wed' => 3,
        'thu' => 4,
        'fri' => 5,
        'sat' => 6,
    ];

    /**
     * Test weekData
     *
     * @medium
     */
    public function testWeekData(): void
    {
        $cldr = simplexml_load_string(file_get_contents(__DIR__ . '/data/cldr-42/supplemental/supplementalData.xml'));

        foreach ($cldr->weekData->firstDay as $xml) {
            if ($xml->attributes()->alt != 'variant') {
                $day         = self::DAYS[(string) $xml->attributes()->day];
                $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
                foreach ($territories as $code) {
                    $class     = '\\Fisharebest\\Localization\\Territory\\Territory' . ucfirst(strtolower($code));
                    $territory = new $class();
                    self::assertSame($day, $territory->firstDay(), $code);
                }
            }
        }

        foreach ($cldr->weekData->weekendStart as $xml) {
            $day         = self::DAYS[(string) $xml->attributes()->day];
            $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($territories as $code) {
                $class     = '\\Fisharebest\\Localization\\Territory\\Territory' . ucfirst(strtolower($code));
                $territory = new $class();
                self::assertSame($day, $territory->weekendStart(), $code);
            }
        }

        foreach ($cldr->weekData->weekendEnd as $xml) {
            $day         = self::DAYS[(string) $xml->attributes()->day];
            $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($territories as $code) {
                $class     = '\\Fisharebest\\Localization\\Territory\\Territory' . ucfirst(strtolower($code));
                $territory = new $class();
                self::assertSame($day, $territory->weekendEnd(), $code);
            }
        }
    }
}

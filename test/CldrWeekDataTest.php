<?php

namespace Fisharebest\Localization;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the CLDR
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class CldrWeekDataTest extends TestCase
{
    /**
     * Test weekData
     *
     * @medium
     */
    public function testWeekData()
    {
        $days = array(
            'sun' => 0,
            'mon' => 1,
            'tue' => 2,
            'wed' => 3,
            'thu' => 4,
            'fri' => 5,
            'sat' => 6,
        );

        $cldr = simplexml_load_string(file_get_contents(__DIR__ . '/data/cldr-34/supplemental/supplementalData.xml'));

        foreach ($cldr->weekData->firstDay as $xml) {
            if ($xml->attributes()->alt != 'variant') {
                $day         = $days[(string) $xml->attributes()->day];
                $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
                foreach ($territories as $code) {
                    $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                    $territory = new $class();
                    $this->assertSame($day, $territory->firstDay());
                }
            }
        }

        foreach ($cldr->weekData->weekendStart as $xml) {
            $day         = $days[(string) $xml->attributes()->day];
            $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($territories as $code) {
                $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                $territory = new $class();
                $this->assertSame($day, $territory->weekendStart());
            }
        }

        foreach ($cldr->weekData->weekendEnd as $xml) {
            $day         = $days[(string) $xml->attributes()->day];
            $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($territories as $code) {
                $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                $territory = new $class();
                $this->assertSame($day, $territory->weekendEnd());
            }
        }
    }
}

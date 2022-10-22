<?php

namespace Fisharebest\Localization;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the CLDR
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class CldrMeasurementDataTest extends TestCase
{
    /**
     * Test measurementData
     *
     * @medium
     */
    public function testMeasurementData()
    {
        $cldr = simplexml_load_string(file_get_contents(__DIR__ . '/data/cldr-39/supplemental/supplementalData.xml'));

        foreach ($cldr->measurementData->measurementSystem as $xml) {
            if ($xml->attributes()->category != 'temperature') {
                $type        = (string) $xml->attributes()->type;
                $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
                foreach ($territories as $code) {
                    $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                    $territory = new $class();
                    self::assertSame($type, $territory->measurementSystem(), $territory->code());
                }
            }
        }

        foreach ($cldr->measurementData->paperSize as $xml) {
            $type        = (string) $xml->attributes()->type;
            $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($territories as $code) {
                $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                $territory = new $class();
                self::assertSame($type, $territory->paperSize());
            }
        }
    }
}

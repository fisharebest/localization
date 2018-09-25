<?php

namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the CLDR
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
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
        $cldr = simplexml_load_file(__DIR__ . '/data/cldr-33.1/supplemental/supplementalData.xml');

        foreach ($cldr->measurementData->measurementSystem as $xml) {
            if ($xml->attributes()->category != 'temperature') {
                $type        = (string) $xml->attributes()->type;
                $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
                foreach ($territories as $code) {
                    $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                    $territory = new $class();
                    $this->assertSame($type, $territory->measurementSystem());
                }
            }
        }

        foreach ($cldr->measurementData->paperSize as $xml) {
            $type        = (string) $xml->attributes()->type;
            $territories = preg_split('/\s/', (string) $xml->attributes()->territories, -1, PREG_SPLIT_NO_EMPTY);
            foreach ($territories as $code) {
                $class     = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($code));
                $territory = new $class();
                $this->assertSame($type, $territory->paperSize());
            }
        }
    }
}

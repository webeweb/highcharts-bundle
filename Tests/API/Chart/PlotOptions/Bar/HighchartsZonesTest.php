<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Bar;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts zones test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Bar
 * @version 5.0.14
 */
final class HighchartsZonesTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bar\HighchartsZones(true);

        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getDashStyle());
        $this->assertNull($obj1->getFillColor());
        $this->assertNull($obj1->getValue());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bar\HighchartsZones(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bar\HighchartsZones(true);

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res1 = ["className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setDashStyle("5ad5e24042182b1974cdf57345defe8e");

        $res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setValue(80);

        $res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "value" => 80];
        $this->assertEquals($res5, $obj->toArray());
    }

}

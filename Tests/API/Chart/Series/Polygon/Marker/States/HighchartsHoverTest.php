<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Polygon\Marker\States;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts hover test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Polygon\Marker\States
 * @version 5.0.14
 */
final class HighchartsHoverTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsHover(true);

        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getFillColor());
        $this->assertNull($obj1->getLineColor());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLineWidthPlus());
        $this->assertNull($obj1->getRadius());
        $this->assertNull($obj1->getRadiusPlus());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsHover(false);

        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertNull($obj0->getFillColor());
        $this->assertEquals("#ffffff", $obj0->getLineColor());
        $this->assertEquals(0, $obj0->getLineWidth());
        $this->assertEquals(1, $obj0->getLineWidthPlus());
        $this->assertNull($obj0->getRadius());
        $this->assertEquals(2, $obj0->getRadiusPlus());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsHover(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsHover(true);

        $obj->setEnabled(1);

        $res1 = ["enabled" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res2 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res3 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setLineWidth(39);

        $res4 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 39];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setLineWidthPlus(74);

        $res5 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 39, "lineWidthPlus" => 74];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setRadius(38);

        $res6 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 39, "lineWidthPlus" => 74, "radius" => 38];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setRadiusPlus(75);

        $res7 = ["enabled" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 39, "lineWidthPlus" => 74, "radius" => 38, "radiusPlus" => 75];
        $this->assertEquals($res7, $obj->toArray());
    }

}

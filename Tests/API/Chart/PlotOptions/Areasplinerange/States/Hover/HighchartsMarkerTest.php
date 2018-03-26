<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Areasplinerange\States\Hover;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts marker test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Areasplinerange\States\Hover
 * @version 5.0.14
 */
final class HighchartsMarkerTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areasplinerange\States\Hover\HighchartsMarker(true);

        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getFillColor());
        $this->assertNull($obj1->getHeight());
        $this->assertNull($obj1->getLineColor());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getRadius());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getSymbol());
        $this->assertNull($obj1->getWidth());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areasplinerange\States\Hover\HighchartsMarker(false);

        $this->assertNull($obj0->getEnabled());
        $this->assertNull($obj0->getFillColor());
        $this->assertNull($obj0->getHeight());
        $this->assertEquals("#ffffff", $obj0->getLineColor());
        $this->assertEquals(0, $obj0->getLineWidth());
        $this->assertEquals(4, $obj0->getRadius());
        $this->assertNull($obj0->getStates());
        $this->assertNull($obj0->getSymbol());
        $this->assertNull($obj0->getWidth());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areasplinerange\States\Hover\HighchartsMarker(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areasplinerange\States\Hover\HighchartsMarker(true);

        $obj->setEnabled(0);

        $res1 = ["enabled" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res2 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setHeight(13);

        $res3 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 13];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res4 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 13, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setLineWidth(20);

        $res5 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 13, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setRadius(36);

        $res6 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 13, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20, "radius" => 36];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setStates("");

        $res7 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 13, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20, "radius" => 36, "states" => ""];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setSymbol("triangle-down");

        $res8 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 13, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20, "radius" => 36, "states" => "", "symbol" => "triangle-down"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setWidth(68);

        $res9 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 13, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 20, "radius" => 36, "states" => "", "symbol" => "triangle-down", "width" => 68];
        $this->assertEquals($res9, $obj->toArray());
    }

}

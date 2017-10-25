<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Areasplinerange\States\Hover;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts marker test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Areasplinerange\States\Hover
 * @version 5.0.14
 */
final class HighchartsMarkerTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areasplinerange\States\Hover\HighchartsMarker(true);

        $this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj1->getFillColor(), "The method getFillColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getHeight(), "The method getHeight() does not return the expected value");
        $this->assertEquals(null, $obj1->getLineColor(), "The method getLineColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getLineWidth(), "The method getLineWidth() does not return the expected value");
        $this->assertEquals(null, $obj1->getRadius(), "The method getRadius() does not return the expected value");
        $this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
        $this->assertEquals(null, $obj1->getSymbol(), "The method getSymbol() does not return the expected value");
        $this->assertEquals(null, $obj1->getWidth(), "The method getWidth() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areasplinerange\States\Hover\HighchartsMarker(false);

        $this->assertEquals(null, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj0->getFillColor(), "The method getFillColor() does not return the expected value");
        $this->assertEquals(null, $obj0->getHeight(), "The method getHeight() does not return the expected value");
        $this->assertEquals("#ffffff", $obj0->getLineColor(), "The method getLineColor() does not return the expected value");
        $this->assertEquals(0, $obj0->getLineWidth(), "The method getLineWidth() does not return the expected value");
        $this->assertEquals(4, $obj0->getRadius(), "The method getRadius() does not return the expected value");
        $this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
        $this->assertEquals(null, $obj0->getSymbol(), "The method getSymbol() does not return the expected value");
        $this->assertEquals(null, $obj0->getWidth(), "The method getWidth() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areasplinerange\States\Hover\HighchartsMarker(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areasplinerange\States\Hover\HighchartsMarker(true);

        $obj->setEnabled(0);

        $res1 = ["enabled" => 0];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res2 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with fill color");

        $obj->setHeight(54);

        $res3 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 54];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with height");

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res4 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 54, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with line color");

        $obj->setLineWidth(66);

        $res5 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 54, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 66];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with line width");

        $obj->setRadius(69);

        $res6 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 54, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 66, "radius" => 69];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with radius");

        $obj->setStates("");

        $res7 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 54, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 66, "radius" => 69, "states" => ""];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with states");

        $obj->setSymbol("triangle-down");

        $res8 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 54, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 66, "radius" => 69, "states" => "", "symbol" => "triangle-down"];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with symbol");

        $obj->setWidth(71);

        $res9 = ["enabled" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 54, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 66, "radius" => 69, "states" => "", "symbol" => "triangle-down", "width" => 71];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with width");
    }

}

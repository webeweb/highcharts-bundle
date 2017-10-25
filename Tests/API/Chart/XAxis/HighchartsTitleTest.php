<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\XAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts title test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsTitle(true);

        $this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
        $this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj1->getMargin(), "The method getMargin() does not return the expected value");
        $this->assertEquals(null, $obj1->getOffset(), "The method getOffset() does not return the expected value");
        $this->assertEquals(null, $obj1->getReserveSpace(), "The method getReserveSpace() does not return the expected value");
        $this->assertEquals(null, $obj1->getRotation(), "The method getRotation() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getText(), "The method getText() does not return the expected value");
        $this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
        $this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");

        $obj0 = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsTitle(false);

        $this->assertEquals("middle", $obj0->getAlign(), "The method getAlign() does not return the expected value");
        $this->assertEquals("middle", $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
        $this->assertEquals(null, $obj0->getMargin(), "The method getMargin() does not return the expected value");
        $this->assertEquals(null, $obj0->getOffset(), "The method getOffset() does not return the expected value");
        $this->assertEquals(true, $obj0->getReserveSpace(), "The method getReserveSpace() does not return the expected value");
        $this->assertEquals(0, $obj0->getRotation(), "The method getRotation() does not return the expected value");
        $this->assertEquals(["color" => "#666666"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj0->getText(), "The method getText() does not return the expected value");
        $this->assertEquals(0, $obj0->getX(), "The method getX() does not return the expected value");
        $this->assertEquals(null, $obj0->getY(), "The method getY() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsTitle(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\HighchartsBundle\API\Chart\XAxis\HighchartsTitle(true);

        $obj->setAlign("high");

        $res1 = ["align" => "high"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

        $obj->setEnabled("a10311459433adf322f2590a4987c423");

        $res2 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

        $obj->setMargin(22);

        $res3 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 22];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with margin");

        $obj->setOffset(68);

        $res4 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 22, "offset" => 68];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with offset");

        $obj->setReserveSpace(0);

        $res5 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 22, "offset" => 68, "reserveSpace" => 0];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with reserve space");

        $obj->setRotation(77);

        $res6 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 22, "offset" => 68, "reserveSpace" => 0, "rotation" => 77];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with rotation");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res7 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 22, "offset" => 68, "reserveSpace" => 0, "rotation" => 77, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with style");

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res8 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 22, "offset" => 68, "reserveSpace" => 0, "rotation" => 77, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with text");

        $obj->setX(88);

        $res9 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 22, "offset" => 68, "reserveSpace" => 0, "rotation" => 77, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "x" => 88];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with x");

        $obj->setY(28);

        $res10 = ["align" => "high", "enabled" => "a10311459433adf322f2590a4987c423", "margin" => 22, "offset" => 68, "reserveSpace" => 0, "rotation" => 77, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "x" => 88, "y" => 28];
        $this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with y");
    }

}

<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts subtitle test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsSubtitleTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle(true);

        $this->assertEquals(null, $obj1->getAlign(), "The method getAlign() does not return the expected value");
        $this->assertEquals(null, $obj1->getFloating(), "The method getFloating() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getText(), "The method getText() does not return the expected value");
        $this->assertEquals(null, $obj1->getUseHTML(), "The method getUseHTML() does not return the expected value");
        $this->assertEquals(null, $obj1->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
        $this->assertEquals(null, $obj1->getWidthAdjust(), "The method getWidthAdjust() does not return the expected value");
        $this->assertEquals(null, $obj1->getX(), "The method getX() does not return the expected value");
        $this->assertEquals(null, $obj1->getY(), "The method getY() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle(false);

        $this->assertEquals("center", $obj0->getAlign(), "The method getAlign() does not return the expected value");
        $this->assertEquals(false, $obj0->getFloating(), "The method getFloating() does not return the expected value");
        $this->assertEquals(["color" => "#666666"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj0->getText(), "The method getText() does not return the expected value");
        $this->assertEquals(false, $obj0->getUseHTML(), "The method getUseHTML() does not return the expected value");
        $this->assertEquals(null, $obj0->getVerticalAlign(), "The method getVerticalAlign() does not return the expected value");
        $this->assertEquals(-44, $obj0->getWidthAdjust(), "The method getWidthAdjust() does not return the expected value");
        $this->assertEquals(0, $obj0->getX(), "The method getX() does not return the expected value");
        $this->assertEquals(null, $obj0->getY(), "The method getY() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle(true);

        $obj->setAlign("right");

        $res1 = ["align" => "right"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with align");

        $obj->setFloating(1);

        $res2 = ["align" => "right", "floating" => 1];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with floating");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res3 = ["align" => "right", "floating" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with style");

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res4 = ["align" => "right", "floating" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with text");

        $obj->setUseHTML(0);

        $res5 = ["align" => "right", "floating" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with use HTML");

        $obj->setVerticalAlign("bottom");

        $res6 = ["align" => "right", "floating" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0, "verticalAlign" => "bottom"];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with vertical align");

        $obj->setWidthAdjust(72);

        $res7 = ["align" => "right", "floating" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0, "verticalAlign" => "bottom", "widthAdjust" => 72];
        $this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with width adjust");

        $obj->setX(32);

        $res8 = ["align" => "right", "floating" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0, "verticalAlign" => "bottom", "widthAdjust" => 72, "x" => 32];
        $this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with x");

        $obj->setY(96);

        $res9 = ["align" => "right", "floating" => 1, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0, "verticalAlign" => "bottom", "widthAdjust" => 72, "x" => 32, "y" => 96];
        $this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with y");
    }

}

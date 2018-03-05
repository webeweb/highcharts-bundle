<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts title test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle(true);

        $this->assertEquals(null, $obj1->getAlign());
        $this->assertEquals(null, $obj1->getFloating());
        $this->assertEquals(null, $obj1->getMargin());
        $this->assertEquals(null, $obj1->getStyle());
        $this->assertEquals(null, $obj1->getText());
        $this->assertEquals(null, $obj1->getUseHTML());
        $this->assertEquals(null, $obj1->getVerticalAlign());
        $this->assertEquals(null, $obj1->getWidthAdjust());
        $this->assertEquals(null, $obj1->getX());
        $this->assertEquals(null, $obj1->getY());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle(false);

        $this->assertEquals("center", $obj0->getAlign());
        $this->assertEquals(false, $obj0->getFloating());
        $this->assertEquals(15, $obj0->getMargin());
        $this->assertEquals(["color" => "#333333", "fontSize" => "18px"], $obj0->getStyle());
        $this->assertEquals("Chart title", $obj0->getText());
        $this->assertEquals(false, $obj0->getUseHTML());
        $this->assertEquals(null, $obj0->getVerticalAlign());
        $this->assertEquals(-44, $obj0->getWidthAdjust());
        $this->assertEquals(0, $obj0->getX());
        $this->assertEquals(null, $obj0->getY());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle(true);

        $obj->setAlign("right");

        $res1 = ["align" => "right"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setFloating(1);

        $res2 = ["align" => "right", "floating" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setMargin(81);

        $res3 = ["align" => "right", "floating" => 1, "margin" => 81];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res4 = ["align" => "right", "floating" => 1, "margin" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res5 = ["align" => "right", "floating" => 1, "margin" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setUseHTML(0);

        $res6 = ["align" => "right", "floating" => 1, "margin" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setVerticalAlign("bottom");

        $res7 = ["align" => "right", "floating" => 1, "margin" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0, "verticalAlign" => "bottom"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setWidthAdjust(3);

        $res8 = ["align" => "right", "floating" => 1, "margin" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0, "verticalAlign" => "bottom", "widthAdjust" => 3];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setX(33);

        $res9 = ["align" => "right", "floating" => 1, "margin" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0, "verticalAlign" => "bottom", "widthAdjust" => 3, "x" => 33];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setY(84);

        $res10 = ["align" => "right", "floating" => 1, "margin" => 81, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1", "useHTML" => 0, "verticalAlign" => "bottom", "widthAdjust" => 3, "x" => 33, "y" => 84];
        $this->assertEquals($res10, $obj->toArray());
    }

}

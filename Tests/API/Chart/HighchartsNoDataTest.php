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
 * Highcharts no data test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsNoDataTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData(true);

        $this->assertEquals(null, $obj1->getAttr(), "The method getAttr() does not return the expected value");
        $this->assertEquals(null, $obj1->getPosition(), "The method getPosition() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getUseHTML(), "The method getUseHTML() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData(false);

        $this->assertEquals(null, $obj0->getAttr(), "The method getAttr() does not return the expected value");
        $this->assertEquals(["x" => 0, "y" => 0, "align" => "center", "verticalAlign" => "middle"], $obj0->getPosition(), "The method getPosition() does not return the expected value");
        $this->assertEquals(["fontSize" => "12px", "fontWeight" => "bold", "color" => "#666666"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(false, $obj0->getUseHTML(), "The method getUseHTML() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData(true);

        $obj->setAttr(["attr" => "815be97df65d6c4b510cd07189c5347a"]);

        $res1 = ["attr" => ["attr" => "815be97df65d6c4b510cd07189c5347a"]];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with attr");

        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);

        $res2 = ["attr" => ["attr" => "815be97df65d6c4b510cd07189c5347a"], "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"]];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with position");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res3 = ["attr" => ["attr" => "815be97df65d6c4b510cd07189c5347a"], "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with style");

        $obj->setUseHTML(0);

        $res4 = ["attr" => ["attr" => "815be97df65d6c4b510cd07189c5347a"], "position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "useHTML" => 0];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with use HTML");
    }

}

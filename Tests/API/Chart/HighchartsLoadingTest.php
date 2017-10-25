<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts loading test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsLoadingTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\HighchartsBundle\API\Chart\HighchartsLoading(true);

        $this->assertEquals(null, $obj1->getHideDuration(), "The method getHideDuration() does not return the expected value");
        $this->assertEquals(null, $obj1->getLabelStyle(), "The method getLabelStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getShowDuration(), "The method getShowDuration() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");

        $obj0 = new \WBW\HighchartsBundle\API\Chart\HighchartsLoading(false);

        $this->assertEquals(100, $obj0->getHideDuration(), "The method getHideDuration() does not return the expected value");
        $this->assertEquals(["fontWeight" => "bold", "position" => "relative", "top" => "45%"], $obj0->getLabelStyle(), "The method getLabelStyle() does not return the expected value");
        $this->assertEquals(100, $obj0->getShowDuration(), "The method getShowDuration() does not return the expected value");
        $this->assertEquals(["position" => "absolute", "backgroundColor" => "#ffffff", "opacity" => 0.5, "textAlign" => "center"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsLoading(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsLoading(true);

        $obj->setHideDuration(44);

        $res1 = ["hideDuration" => 44];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with hide duration");

        $obj->setLabelStyle(["labelStyle" => "00faa433bf869443728e502b4f7c6850"]);

        $res2 = ["hideDuration" => 44, "labelStyle" => ["labelStyle" => "00faa433bf869443728e502b4f7c6850"]];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with label style");

        $obj->setShowDuration(14);

        $res3 = ["hideDuration" => 44, "labelStyle" => ["labelStyle" => "00faa433bf869443728e502b4f7c6850"], "showDuration" => 14];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with show duration");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res4 = ["hideDuration" => 44, "labelStyle" => ["labelStyle" => "00faa433bf869443728e502b4f7c6850"], "showDuration" => 14, "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with style");
    }

}

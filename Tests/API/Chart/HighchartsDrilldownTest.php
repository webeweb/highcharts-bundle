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
 * Highcharts drilldown test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsDrilldownTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\HighchartsBundle\API\Chart\HighchartsDrilldown(true);

        $this->assertEquals(null, $obj1->getActiveAxisLabelStyle(), "The method getActiveAxisLabelStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getActiveDataLabelStyle(), "The method getActiveDataLabelStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getAllowPointDrilldown(), "The method getAllowPointDrilldown() does not return the expected value");
        $this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj1->getDrillUpButton(), "The method getDrillUpButton() does not return the expected value");
        $this->assertEquals(null, $obj1->getSeries(), "The method getSeries() does not return the expected value");

        $obj0 = new \WBW\HighchartsBundle\API\Chart\HighchartsDrilldown(false);

        $this->assertEquals(["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], $obj0->getActiveAxisLabelStyle(), "The method getActiveAxisLabelStyle() does not return the expected value");
        $this->assertEquals(["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], $obj0->getActiveDataLabelStyle(), "The method getActiveDataLabelStyle() does not return the expected value");
        $this->assertEquals(true, $obj0->getAllowPointDrilldown(), "The method getAllowPointDrilldown() does not return the expected value");
        $this->assertEquals(null, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
        $this->assertEquals(null, $obj0->getDrillUpButton(), "The method getDrillUpButton() does not return the expected value");
        $this->assertEquals(null, $obj0->getSeries(), "The method getSeries() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsDrilldown(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\HighchartsBundle\API\Chart\HighchartsDrilldown(true);

        $obj->setActiveAxisLabelStyle(["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"]);

        $res1 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"]];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with active axis label style");

        $obj->setActiveDataLabelStyle(["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"]);

        $res2 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"]];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with active data label style");

        $obj->setAllowPointDrilldown(1);

        $res3 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], "allowPointDrilldown" => 1];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with allow point drilldown");

        $obj->setAnimation(1);

        $res4 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], "allowPointDrilldown" => 1, "animation" => 1];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with animation");

        $obj->setDrillUpButton(["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"]);

        $res5 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], "allowPointDrilldown" => 1, "animation" => 1, "drillUpButton" => ["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"]];
        $this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with drill up button");

        $obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);

        $res6 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], "allowPointDrilldown" => 1, "animation" => 1, "drillUpButton" => ["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"], "series" => ["series" => "bef99584217af744e404ed44a33af589"]];
        $this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with series");
    }

}

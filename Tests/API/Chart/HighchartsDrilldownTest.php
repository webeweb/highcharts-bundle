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
 * Highcharts drilldown test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsDrilldownTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown(true);

        $this->assertNull($obj1->getActiveAxisLabelStyle());
        $this->assertNull($obj1->getActiveDataLabelStyle());
        $this->assertNull($obj1->getAllowPointDrilldown());
        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getDrillUpButton());
        $this->assertNull($obj1->getSeries());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown(false);

        $this->assertEquals(["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], $obj0->getActiveAxisLabelStyle());
        $this->assertEquals(["cursor" => "pointer", "color" => "#003399", "fontWeight" => "bold", "textDecoration" => "underline"], $obj0->getActiveDataLabelStyle());
        $this->assertEquals(true, $obj0->getAllowPointDrilldown());
        $this->assertNull($obj0->getAnimation());
        $this->assertNull($obj0->getDrillUpButton());
        $this->assertNull($obj0->getSeries());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown(true);

        $obj->setActiveAxisLabelStyle(["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"]);

        $res1 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"]];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setActiveDataLabelStyle(["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"]);

        $res2 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"]];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAllowPointDrilldown(1);

        $res3 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], "allowPointDrilldown" => 1];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setAnimation(0);

        $res4 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], "allowPointDrilldown" => 1, "animation" => 0];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setDrillUpButton(["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"]);

        $res5 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], "allowPointDrilldown" => 1, "animation" => 0, "drillUpButton" => ["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"]];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);

        $res6 = ["activeAxisLabelStyle" => ["activeAxisLabelStyle" => "f6426021dea292777130e7d2cc629230"], "activeDataLabelStyle" => ["activeDataLabelStyle" => "6bbd917f9c79f378651e96cac7e7dcf8"], "allowPointDrilldown" => 1, "animation" => 0, "drillUpButton" => ["drillUpButton" => "096589e2a6ac96efa1520bbe5ff3e68b"], "series" => ["series" => "bef99584217af744e404ed44a33af589"]];
        $this->assertEquals($res6, $obj->toArray());
    }

}

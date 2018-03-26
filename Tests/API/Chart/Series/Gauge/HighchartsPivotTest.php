<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Gauge;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts pivot test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Gauge
 * @version 5.0.14
 */
final class HighchartsPivotTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPivot(true);

        $this->assertNull($obj1->getBackgroundColor());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getRadius());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPivot(false);

        $this->assertEquals("#000000", $obj0->getBackgroundColor());
        $this->assertEquals("#cccccc", $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderWidth());
        $this->assertEquals(5, $obj0->getRadius());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPivot(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPivot(true);

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

        $res1 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res2 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBorderWidth(54);

        $res3 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 54];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setRadius(85);

        $res4 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 54, "radius" => 85];
        $this->assertEquals($res4, $obj->toArray());
    }

}

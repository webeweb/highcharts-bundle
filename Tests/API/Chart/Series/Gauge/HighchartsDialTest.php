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
 * Highcharts dial test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Gauge
 * @version 5.0.14
 */
final class HighchartsDialTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDial(true);

        $this->assertNull($obj1->getBackgroundColor());
        $this->assertNull($obj1->getBaseLength());
        $this->assertNull($obj1->getBaseWidth());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getRadius());
        $this->assertNull($obj1->getRearLength());
        $this->assertNull($obj1->getTopWidth());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDial(false);

        $this->assertEquals("#000000", $obj0->getBackgroundColor());
        $this->assertEquals("70%", $obj0->getBaseLength());
        $this->assertEquals(3, $obj0->getBaseWidth());
        $this->assertEquals("#cccccc", $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderWidth());
        $this->assertEquals("80%", $obj0->getRadius());
        $this->assertEquals("10%", $obj0->getRearLength());
        $this->assertEquals(1, $obj0->getTopWidth());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDial(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDial(true);

        $obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

        $res1 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBaseLength("908389f95bb7d5ec0ee86df707120146");

        $res2 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBaseWidth(47);

        $res3 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 47];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 47, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderWidth(12);

        $res5 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 47, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 12];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setRadius("fc021d54683383e5078ab9fefc4d53c8");

        $res6 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 47, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 12, "radius" => "fc021d54683383e5078ab9fefc4d53c8"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setRearLength("cfeff8818f149d68732253aca8a5c4bf");

        $res7 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 47, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 12, "radius" => "fc021d54683383e5078ab9fefc4d53c8", "rearLength" => "cfeff8818f149d68732253aca8a5c4bf"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setTopWidth(30);

        $res8 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 47, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 12, "radius" => "fc021d54683383e5078ab9fefc4d53c8", "rearLength" => "cfeff8818f149d68732253aca8a5c4bf", "topWidth" => 30];
        $this->assertEquals($res8, $obj->toArray());
    }

}

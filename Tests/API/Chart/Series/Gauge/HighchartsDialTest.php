<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Gauge;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts dial test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
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

        $this->assertEquals(null, $obj1->getBackgroundColor());
        $this->assertEquals(null, $obj1->getBaseLength());
        $this->assertEquals(null, $obj1->getBaseWidth());
        $this->assertEquals(null, $obj1->getBorderColor());
        $this->assertEquals(null, $obj1->getBorderWidth());
        $this->assertEquals(null, $obj1->getRadius());
        $this->assertEquals(null, $obj1->getRearLength());
        $this->assertEquals(null, $obj1->getTopWidth());

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

        $obj->setBaseWidth(54);

        $res3 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 54];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 54, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderWidth(10);

        $res5 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 54, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 10];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setRadius("fc021d54683383e5078ab9fefc4d53c8");

        $res6 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 54, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 10, "radius" => "fc021d54683383e5078ab9fefc4d53c8"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setRearLength("cfeff8818f149d68732253aca8a5c4bf");

        $res7 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 54, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 10, "radius" => "fc021d54683383e5078ab9fefc4d53c8", "rearLength" => "cfeff8818f149d68732253aca8a5c4bf"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setTopWidth(92);

        $res8 = ["backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "baseLength" => "908389f95bb7d5ec0ee86df707120146", "baseWidth" => 54, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 10, "radius" => "fc021d54683383e5078ab9fefc4d53c8", "rearLength" => "cfeff8818f149d68732253aca8a5c4bf", "topWidth" => 92];
        $this->assertEquals($res8, $obj->toArray());
    }

}

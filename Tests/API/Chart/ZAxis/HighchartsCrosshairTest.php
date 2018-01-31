<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts crosshair test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\ZAxis
 * @version 5.0.14
 */
final class HighchartsCrosshairTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair(true);

        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getColor());
        $this->assertEquals(null, $obj1->getDashStyle());
        $this->assertEquals(null, $obj1->getSnap());
        $this->assertEquals(null, $obj1->getWidth());
        $this->assertEquals(null, $obj1->getZIndex());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair(false);

        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getColor());
        $this->assertEquals("Solid", $obj0->getDashStyle());
        $this->assertEquals(true, $obj0->getSnap());
        $this->assertEquals(null, $obj0->getWidth());
        $this->assertEquals(2, $obj0->getZIndex());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\ZAxis\HighchartsCrosshair(true);

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res1 = ["className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res2 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setDashStyle("LongDashDotDot");

        $res3 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setSnap(1);

        $res4 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "snap" => 1];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setWidth(62);

        $res5 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "snap" => 1, "width" => 62];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setZIndex(73);

        $res6 = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "dashStyle" => "LongDashDotDot", "snap" => 1, "width" => 62, "zIndex" => 73];
        $this->assertEquals($res6, $obj->toArray());
    }

}

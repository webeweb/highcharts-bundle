<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\Options3d\Frame;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts bottom test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 */
final class HighchartsBottomTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom(true);

        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getSize());
        $this->assertNull($obj1->getVisible());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom(false);

        $this->assertEquals("transparent", $obj0->getColor());
        $this->assertEquals(1, $obj0->getSize());
        $this->assertEquals("default", $obj0->getVisible());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom(true);

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res1 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setSize(80);

        $res2 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd", "size" => 80];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setVisible(false);

        $res3 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd", "size" => 80, "visible" => false];
        $this->assertEquals($res3, $obj->toArray());
    }

}

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
 * Highcharts top test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 */
final class HighchartsTopTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsTop(true);

        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getSize());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsTop(false);

        $this->assertEquals("transparent", $obj0->getColor());
        $this->assertEquals(1, $obj0->getSize());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsTop(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsTop(true);

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res1 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setSize(94);

        $res2 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd", "size" => 94];
        $this->assertEquals($res2, $obj->toArray());
    }

}

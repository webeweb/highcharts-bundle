<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart\Options3d\Frame;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts side test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 */
final class HighchartsSideTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide(true);

        $this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(null, $obj1->getSize(), "The method getSize() does not return the expected value");

        $obj0 = new \WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide(false);

        $this->assertEquals("transparent", $obj0->getColor(), "The method getColor() does not return the expected value");
        $this->assertEquals(1, $obj0->getSize(), "The method getSize() does not return the expected value");
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide(true);

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res1 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with color");

        $obj->setSize(92);

        $res2 = ["color" => "70dda5dfb8053dc6d1c492574bce9bfd", "size" => 92];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with size");
    }

}

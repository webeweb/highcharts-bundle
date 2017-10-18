<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\Options3d;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts frame test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\Options3d
 * @version 5.0.14
 */
final class HighchartsFrameTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(true);

        $this->assertEquals(null, $obj1->getBack(), "The method getBack() does not return the expected value");
        $this->assertEquals(null, $obj1->getBottom(), "The method getBottom() does not return the expected value");
        $this->assertEquals(null, $obj1->getSide(), "The method getSide() does not return the expected value");
        $this->assertEquals(null, $obj1->getTop(), "The method getTop() does not return the expected value");
    }

    /**
     * Test the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $obj->newBack();
        $obj->newBottom();
        $obj->newSide();

        $obj->clear();

        $res = ["back" => [], "bottom" => [], "side" => []];
        $this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newBack() method.
     *
     * @return void.
     */
    public function testNewBack() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $res = $obj->newBack();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack::class, $res, "The method newBack() does not return the expected object");
    }

    /**
     * Tests the newBottom() method.
     *
     * @return void.
     */
    public function testNewBottom() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $res = $obj->newBottom();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom::class, $res, "The method newBottom() does not return the expected object");
    }

    /**
     * Tests the newSide() method.
     *
     * @return void.
     */
    public function testNewSide() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $res = $obj->newSide();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide::class, $res, "The method newSide() does not return the expected object");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(true);

        $obj->setBack(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack());

        $res1 = ["back" => []];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with back");

        $obj->setBottom(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom());

        $res2 = ["back" => [], "bottom" => []];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with bottom");

        $obj->setSide(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide());

        $res3 = ["back" => [], "bottom" => [], "side" => []];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with side");

        $obj->setTop(["top" => "b28354b543375bfa94dabaeda722927f"]);

        $res4 = ["back" => [], "bottom" => [], "side" => [], "top" => ["top" => "b28354b543375bfa94dabaeda722927f"]];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with top");
    }

}

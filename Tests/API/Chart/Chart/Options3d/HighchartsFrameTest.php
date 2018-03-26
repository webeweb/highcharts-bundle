<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\Options3d;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts frame test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\Options3d
 * @version 5.0.14
 */
final class HighchartsFrameTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(true);

        $this->assertNull($obj1->getBack());
        $this->assertNull($obj1->getBottom());
        $this->assertNull($obj1->getSide());
        $this->assertNull($obj1->getTop());
    }

    /**
     * Tests the clear() method.
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
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newBack() method.
     *
     * @return void.
     */
    public function testNewBack() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $res = $obj->newBack();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack::class, $res);
    }

    /**
     * Tests the newBottom() method.
     *
     * @return void.
     */
    public function testNewBottom() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $res = $obj->newBottom();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom::class, $res);
    }

    /**
     * Tests the newSide() method.
     *
     * @return void.
     */
    public function testNewSide() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $res = $obj->newSide();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(true);

        $obj->setBack(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack());

        $res1 = ["back" => []];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setBottom(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom());

        $res2 = ["back" => [], "bottom" => []];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setSide(new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide());

        $res3 = ["back" => [], "bottom" => [], "side" => []];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setTop(["top" => "b28354b543375bfa94dabaeda722927f"]);

        $res4 = ["back" => [], "bottom" => [], "side" => [], "top" => ["top" => "b28354b543375bfa94dabaeda722927f"]];
        $this->assertEquals($res4, $obj->toArray());
    }

}

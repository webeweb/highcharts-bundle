<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\Options3d;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts frame test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart\Options3d
 * @version 5.0.14
 */
final class HighchartsFrameTest extends AbstractTestCase {

    /**
     * Tests clear()
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
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests newBack()
     *
     * @return void.
     */
    public function testNewBack() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $res = $obj->newBack();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack::class, $res);
    }

    /**
     * Tests newBottom()
     *
     * @return void.
     */
    public function testNewBottom() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $res = $obj->newBottom();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom::class, $res);
    }

    /**
     * Tests newSide()
     *
     * @return void.
     */
    public function testNewSide() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(false);

        $res = $obj->newSide();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide::class, $res);
    }

    /**
     * Tests toArray()
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

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\Options3d\HighchartsFrame(true);

        $this->assertNull($obj1->getBack());
        $this->assertNull($obj1->getBottom());
        $this->assertNull($obj1->getSide());
        $this->assertNull($obj1->getTop());
    }

}

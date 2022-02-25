<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Scatter\Marker;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts states test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Scatter\Marker
 * @version 5.0.14
 */
final class HighchartsStatesTest extends AbstractTestCase {

    /**
     * Tests clear()
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\HighchartsStates(false);

        $obj->newHover();
        $obj->newSelect();

        $obj->clear();

        $res = ["hover" => [], "select" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\HighchartsStates(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests newHover()
     *
     * @return void.
     */
    public function testNewHover() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\HighchartsStates(false);

        $res = $obj->newHover();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\States\HighchartsHover::class, $res);
    }

    /**
     * Tests newSelect()
     *
     * @return void.
     */
    public function testNewSelect() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\HighchartsStates(false);

        $res = $obj->newSelect();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\States\HighchartsSelect::class, $res);
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\HighchartsStates(true);

        $obj->setHover(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\States\HighchartsHover());

        $res1 = ["hover" => []];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setSelect(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\States\HighchartsSelect());

        $res2 = ["hover" => [], "select" => []];
        $this->assertEquals($res2, $obj->toArray());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Scatter\Marker\HighchartsStates(true);

        $this->assertNull($obj1->getHover());
        $this->assertNull($obj1->getSelect());
    }

}

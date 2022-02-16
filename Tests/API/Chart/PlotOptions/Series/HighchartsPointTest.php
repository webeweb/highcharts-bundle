<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Series;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts point test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions\Series
 * @version 5.0.14
 */
final class HighchartsPointTest extends AbstractTestCase {

    /**
     * Tests clear()
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Series\HighchartsPoint(false);

        $obj->newEvents();

        $obj->clear();

        $res = ["events" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Series\HighchartsPoint(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Series\HighchartsPoint(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Series\Point\HighchartsEvents::class, $res);
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Series\HighchartsPoint(true);

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Series\Point\HighchartsEvents());

        $res1 = ["events" => []];
        $this->assertEquals($res1, $obj->toArray());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Series\HighchartsPoint(true);

        $this->assertNull($obj1->getEvents());
    }

}

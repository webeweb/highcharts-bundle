<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts responsive test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsResponsiveTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive(true);

        $obj->setRules(["rules" => "a4f86f7bfc24194b276c22e0ef158197"]);

        $res1 = ["rules" => ["rules" => "a4f86f7bfc24194b276c22e0ef158197"]];
        $this->assertEquals($res1, $obj->toArray());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive(true);

        $this->assertNull($obj1->getRules());
    }

}

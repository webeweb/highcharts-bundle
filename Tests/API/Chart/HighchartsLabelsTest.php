<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts labels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsLabelsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels(true);

        $this->assertNull($obj1->getItems());
        $this->assertNull($obj1->getStyle());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels(false);

        $this->assertNull($obj0->getItems());
        $this->assertEquals(["color" => "#333333"], $obj0->getStyle());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels(true);

        $obj->setItems(["items" => "691d502cfd0e0626cd3b058e5682ad1c"]);

        $res1 = ["items" => ["items" => "691d502cfd0e0626cd3b058e5682ad1c"]];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res2 = ["items" => ["items" => "691d502cfd0e0626cd3b058e5682ad1c"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res2, $obj->toArray());
    }

}

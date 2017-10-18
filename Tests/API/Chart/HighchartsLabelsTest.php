<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts labels test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsLabelsTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels(true);

        $this->assertEquals(null, $obj1->getItems(), "The method getItems() does not return the expected value");
        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels(false);

        $this->assertEquals(null, $obj0->getItems(), "The method getItems() does not return the expected value");
        $this->assertEquals(["color" => "#333333"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels(true);

        $obj->setItems(["items" => "691d502cfd0e0626cd3b058e5682ad1c"]);

        $res1 = ["items" => ["items" => "691d502cfd0e0626cd3b058e5682ad1c"]];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with items");

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res2 = ["items" => ["items" => "691d502cfd0e0626cd3b058e5682ad1c"], "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with style");
    }

}

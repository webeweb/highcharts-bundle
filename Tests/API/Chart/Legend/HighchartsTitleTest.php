<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Legend;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts title test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Legend
 * @version 5.0.14
 */
final class HighchartsTitleTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle(true);

        $this->assertEquals(null, $obj1->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getText(), "The method getText() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle(false);

        $this->assertEquals(["fontWeight" => "bold"], $obj0->getStyle(), "The method getStyle() does not return the expected value");
        $this->assertEquals(null, $obj0->getText(), "The method getText() does not return the expected value");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle(true);

        $obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

        $res1 = ["style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with style");

        $obj->setText("1cb251ec0d568de6a929b520c4aed8d1");

        $res2 = ["style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"], "text" => "1cb251ec0d568de6a929b520c4aed8d1"];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with text");
    }

}

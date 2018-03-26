<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts reset zoom button test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Chart
 * @version 5.0.14
 */
final class HighchartsResetZoomButtonTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton(true);

        $this->assertNull($obj1->getPosition());
        $this->assertNull($obj1->getRelativeTo());
        $this->assertNull($obj1->getTheme());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton(false);

        $this->assertNull($obj0->getPosition());
        $this->assertEquals("plot", $obj0->getRelativeTo());
        $this->assertNull($obj0->getTheme());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton(true);

        $obj->setPosition(["position" => "4757fe07fd492a8be0ea6a760d683d6e"]);

        $res1 = ["position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"]];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setRelativeTo("chart");

        $res2 = ["position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "relativeTo" => "chart"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setTheme(["theme" => "f484570d7cf557020e11ace406901b10"]);

        $res3 = ["position" => ["position" => "4757fe07fd492a8be0ea6a760d683d6e"], "relativeTo" => "chart", "theme" => ["theme" => "f484570d7cf557020e11ace406901b10"]];
        $this->assertEquals($res3, $obj->toArray());
    }

}

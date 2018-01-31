<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts pane test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsPaneTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPane(true);

        $this->assertEquals(null, $obj1->getBackground());
        $this->assertEquals(null, $obj1->getCenter());
        $this->assertEquals(null, $obj1->getEndAngle());
        $this->assertEquals(null, $obj1->getSize());
        $this->assertEquals(null, $obj1->getStartAngle());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPane(false);

        $this->assertEquals(null, $obj0->getBackground());
        $this->assertEquals(["50%", "50%"], $obj0->getCenter());
        $this->assertEquals(null, $obj0->getEndAngle());
        $this->assertEquals("85%", $obj0->getSize());
        $this->assertEquals(null, $obj0->getStartAngle());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPane(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPane(true);

        $obj->setBackground(["background" => "d229bbf31eaeebc7c88897732d8b932d"]);

        $res1 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"]];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);

        $res2 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "center" => ["center" => "adb115059e28d960fa8badfac5516667"]];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setEndAngle(87);

        $res3 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "endAngle" => 87];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setSize(60);

        $res4 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "endAngle" => 87, "size" => 60];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setStartAngle(59);

        $res5 = ["background" => ["background" => "d229bbf31eaeebc7c88897732d8b932d"], "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "endAngle" => 87, "size" => 60, "startAngle" => 59];
        $this->assertEquals($res5, $obj->toArray());
    }

}

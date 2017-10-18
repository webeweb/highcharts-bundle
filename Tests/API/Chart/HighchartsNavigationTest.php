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
 * Highcharts navigation test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsNavigationTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(true);

        $this->assertEquals(null, $obj1->getButtonOptions(), "The method getButtonOptions() does not return the expected value");
        $this->assertEquals(null, $obj1->getMenuItemHoverStyle(), "The method getMenuItemHoverStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getMenuItemStyle(), "The method getMenuItemStyle() does not return the expected value");
        $this->assertEquals(null, $obj1->getMenuStyle(), "The method getMenuStyle() does not return the expected value");

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(false);

        $this->assertEquals(null, $obj0->getButtonOptions(), "The method getButtonOptions() does not return the expected value");
        $this->assertEquals(["background" => "#335cad", "color" => "#ffffff"], $obj0->getMenuItemHoverStyle(), "The method getMenuItemHoverStyle() does not return the expected value");
        $this->assertEquals(["padding" => "0.5em 1em", "color" => "#333333", "background" => "none"], $obj0->getMenuItemStyle(), "The method getMenuItemStyle() does not return the expected value");
        $this->assertEquals(["border" => "1px solid #999999", "background" => "#ffffff", "padding" => "5px 0"], $obj0->getMenuStyle(), "The method getMenuStyle() does not return the expected value");
    }

    /**
     * Test the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(false);

        $obj->newButtonOptions();

        $obj->clear();

        $res = ["buttonOptions" => []];
        $this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
    }

    /**
     * Test the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(true);

        $this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
    }

    /**
     * Tests the newButtonOptions() method.
     *
     * @return void.
     */
    public function testNewButtonOptions() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(false);

        $res = $obj->newButtonOptions();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions::class, $res, "The method newButtonOptions() does not return the expected object");
    }

    /**
     * Test the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(true);

        $obj->setButtonOptions(new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions());

        $res1 = ["buttonOptions" => []];
        $this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with button options");

        $obj->setMenuItemHoverStyle(["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"]);

        $res2 = ["buttonOptions" => [], "menuItemHoverStyle" => ["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"]];
        $this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with menu item hover style");

        $obj->setMenuItemStyle(["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"]);

        $res3 = ["buttonOptions" => [], "menuItemHoverStyle" => ["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"], "menuItemStyle" => ["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"]];
        $this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with menu item style");

        $obj->setMenuStyle(["menuStyle" => "3d01f86004efb7ca78ff6e1d90c86b27"]);

        $res4 = ["buttonOptions" => [], "menuItemHoverStyle" => ["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"], "menuItemStyle" => ["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"], "menuStyle" => ["menuStyle" => "3d01f86004efb7ca78ff6e1d90c86b27"]];
        $this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with menu style");
    }

}

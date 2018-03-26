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
 * Highcharts navigation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsNavigationTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(true);

        $this->assertNull($obj1->getButtonOptions());
        $this->assertNull($obj1->getMenuItemHoverStyle());
        $this->assertNull($obj1->getMenuItemStyle());
        $this->assertNull($obj1->getMenuStyle());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(false);

        $this->assertNull($obj0->getButtonOptions());
        $this->assertEquals(["background" => "#335cad", "color" => "#ffffff"], $obj0->getMenuItemHoverStyle());
        $this->assertEquals(["padding" => "0.5em 1em", "color" => "#333333", "background" => "none"], $obj0->getMenuItemStyle());
        $this->assertEquals(["border" => "1px solid #999999", "background" => "#ffffff", "padding" => "5px 0"], $obj0->getMenuStyle());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(false);

        $obj->newButtonOptions();

        $obj->clear();

        $res = ["buttonOptions" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newButtonOptions() method.
     *
     * @return void.
     */
    public function testNewButtonOptions() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(false);

        $res = $obj->newButtonOptions();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation(true);

        $obj->setButtonOptions(new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions());

        $res1 = ["buttonOptions" => []];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setMenuItemHoverStyle(["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"]);

        $res2 = ["buttonOptions" => [], "menuItemHoverStyle" => ["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"]];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setMenuItemStyle(["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"]);

        $res3 = ["buttonOptions" => [], "menuItemHoverStyle" => ["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"], "menuItemStyle" => ["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setMenuStyle(["menuStyle" => "3d01f86004efb7ca78ff6e1d90c86b27"]);

        $res4 = ["buttonOptions" => [], "menuItemHoverStyle" => ["menuItemHoverStyle" => "738353ce3a8073c77c55688c6c6b93a7"], "menuItemStyle" => ["menuItemStyle" => "7f4568e3984521d6ee378690e14b6ddd"], "menuStyle" => ["menuStyle" => "3d01f86004efb7ca78ff6e1d90c86b27"]];
        $this->assertEquals($res4, $obj->toArray());
    }

}

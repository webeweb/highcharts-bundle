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
 * Highcharts accessibility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsAccessibilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility(true);

        $this->assertNull($obj1->getDescribeSingleSeries());
        $this->assertNull($obj1->getEnabled());
        $this->assertNull($obj1->getKeyboardNavigation());
        $this->assertNull($obj1->getOnTableAnchorClick());
        $this->assertNull($obj1->getPointDateFormat());
        $this->assertNull($obj1->getPointDateFormatter());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getPointDescriptionThreshold());
        $this->assertNull($obj1->getScreenReaderSectionFormatter());
        $this->assertNull($obj1->getSeriesDescriptionFormatter());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility(false);

        $this->assertEquals(false, $obj0->getDescribeSingleSeries());
        $this->assertEquals(true, $obj0->getEnabled());
        $this->assertNull($obj0->getKeyboardNavigation());
        $this->assertNull($obj0->getOnTableAnchorClick());
        $this->assertNull($obj0->getPointDateFormat());
        $this->assertNull($obj0->getPointDateFormatter());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(30, $obj0->getPointDescriptionThreshold());
        $this->assertNull($obj0->getScreenReaderSectionFormatter());
        $this->assertNull($obj0->getSeriesDescriptionFormatter());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility(true);

        $obj->setDescribeSingleSeries(1);

        $res1 = ["describeSingleSeries" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setEnabled(1);

        $res2 = ["describeSingleSeries" => 1, "enabled" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setKeyboardNavigation(["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"]);

        $res3 = ["describeSingleSeries" => 1, "enabled" => 1, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"]];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setOnTableAnchorClick("65528797add8c35fe2ed3ba46ec9e1ee");

        $res4 = ["describeSingleSeries" => 1, "enabled" => 1, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setPointDateFormat("2a505d87116bc7c91a57716b84e2eb8e");

        $res5 = ["describeSingleSeries" => 1, "enabled" => 1, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setPointDateFormatter("7f0aa6cf2926725674efea2c087a716e");

        $res6 = ["describeSingleSeries" => 1, "enabled" => 1, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res7 = ["describeSingleSeries" => 1, "enabled" => 1, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setPointDescriptionThreshold(6);

        $res8 = ["describeSingleSeries" => 1, "enabled" => 1, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointDescriptionThreshold" => 6];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setScreenReaderSectionFormatter("73356fbe3da4d20b3022c13763b1973b");

        $res9 = ["describeSingleSeries" => 1, "enabled" => 1, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointDescriptionThreshold" => 6, "screenReaderSectionFormatter" => "73356fbe3da4d20b3022c13763b1973b"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setSeriesDescriptionFormatter("3ce4fcfe8febdd161d40ae4f253e827f");

        $res10 = ["describeSingleSeries" => 1, "enabled" => 1, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointDescriptionThreshold" => 6, "screenReaderSectionFormatter" => "73356fbe3da4d20b3022c13763b1973b", "seriesDescriptionFormatter" => "3ce4fcfe8febdd161d40ae4f253e827f"];
        $this->assertEquals($res10, $obj->toArray());
    }

}

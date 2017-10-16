<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts accessibility test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsAccessibilityTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\HighchartsAccessibility(true);

		$this->assertEquals(null, $obj1->getDescribeSingleSeries(), "The method getDescribeSingleSeries() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj1->getKeyboardNavigation(), "The method getKeyboardNavigation() does not return the expected value");
		$this->assertEquals(null, $obj1->getOnTableAnchorClick(), "The method getOnTableAnchorClick() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointDateFormat(), "The method getPointDateFormat() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointDateFormatter(), "The method getPointDateFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointDescriptionThreshold(), "The method getPointDescriptionThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getScreenReaderSectionFormatter(), "The method getScreenReaderSectionFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getSeriesDescriptionFormatter(), "The method getSeriesDescriptionFormatter() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\HighchartsAccessibility(false);

		$this->assertEquals(false, $obj0->getDescribeSingleSeries(), "The method getDescribeSingleSeries() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnabled(), "The method getEnabled() does not return the expected value");
		$this->assertEquals(null, $obj0->getKeyboardNavigation(), "The method getKeyboardNavigation() does not return the expected value");
		$this->assertEquals(null, $obj0->getOnTableAnchorClick(), "The method getOnTableAnchorClick() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointDateFormat(), "The method getPointDateFormat() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointDateFormatter(), "The method getPointDateFormatter() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(30, $obj0->getPointDescriptionThreshold(), "The method getPointDescriptionThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getScreenReaderSectionFormatter(), "The method getScreenReaderSectionFormatter() does not return the expected value");
		$this->assertEquals(null, $obj0->getSeriesDescriptionFormatter(), "The method getSeriesDescriptionFormatter() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsAccessibility(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\HighchartsAccessibility(true);

		$obj->setDescribeSingleSeries(1);

		$res1 = ["describeSingleSeries" => 1];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with describe single series");

		$obj->setEnabled(0);

		$res2 = ["describeSingleSeries" => 1, "enabled" => 0];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with enabled");

		$obj->setKeyboardNavigation(["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"]);

		$res3 = ["describeSingleSeries" => 1, "enabled" => 0, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"]];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with keyboard navigation");

		$obj->setOnTableAnchorClick("65528797add8c35fe2ed3ba46ec9e1ee");

		$res4 = ["describeSingleSeries" => 1, "enabled" => 0, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with on table anchor click");

		$obj->setPointDateFormat("2a505d87116bc7c91a57716b84e2eb8e");

		$res5 = ["describeSingleSeries" => 1, "enabled" => 0, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with point date format");

		$obj->setPointDateFormatter("7f0aa6cf2926725674efea2c087a716e");

		$res6 = ["describeSingleSeries" => 1, "enabled" => 0, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with point date formatter");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res7 = ["describeSingleSeries" => 1, "enabled" => 0, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointDescriptionThreshold(1);

		$res8 = ["describeSingleSeries" => 1, "enabled" => 0, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointDescriptionThreshold" => 1];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with point description threshold");

		$obj->setScreenReaderSectionFormatter("73356fbe3da4d20b3022c13763b1973b");

		$res9 = ["describeSingleSeries" => 1, "enabled" => 0, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointDescriptionThreshold" => 1, "screenReaderSectionFormatter" => "73356fbe3da4d20b3022c13763b1973b"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with screen reader section formatter");

		$obj->setSeriesDescriptionFormatter("3ce4fcfe8febdd161d40ae4f253e827f");

		$res10 = ["describeSingleSeries" => 1, "enabled" => 0, "keyboardNavigation" => ["keyboardNavigation" => "75e7fd90e03918c9d6c3a6c0e7ebb9b7"], "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointDescriptionThreshold" => 1, "screenReaderSectionFormatter" => "73356fbe3da4d20b3022c13763b1973b", "seriesDescriptionFormatter" => "3ce4fcfe8febdd161d40ae4f253e827f"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with series description formatter");
	}

}

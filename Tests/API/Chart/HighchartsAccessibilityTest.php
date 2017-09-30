<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart;

use WBW\HighchartsBundle\API\Chart\HighchartsAccessibility;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts accessibility test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsAccessibilityTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsAccessibility(false);

		$res = ["describeSingleSeries" => false, "enabled" => true, "pointDescriptionThreshold" => 30];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setOnTableAnchorClick("65528797add8c35fe2ed3ba46ec9e1ee");

		$res1 = ["describeSingleSeries" => false, "enabled" => true, "pointDescriptionThreshold" => 30, "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with on table anchor click');

		$obj->setPointDateFormat("2a505d87116bc7c91a57716b84e2eb8e");

		$res2 = ["describeSingleSeries" => false, "enabled" => true, "pointDescriptionThreshold" => 30, "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with point date format');

		$obj->setPointDateFormatter("7f0aa6cf2926725674efea2c087a716e");

		$res3 = ["describeSingleSeries" => false, "enabled" => true, "pointDescriptionThreshold" => 30, "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with point date formatter');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res4 = ["describeSingleSeries" => false, "enabled" => true, "pointDescriptionThreshold" => 30, "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setScreenReaderSectionFormatter("73356fbe3da4d20b3022c13763b1973b");

		$res5 = ["describeSingleSeries" => false, "enabled" => true, "pointDescriptionThreshold" => 30, "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "screenReaderSectionFormatter" => "73356fbe3da4d20b3022c13763b1973b"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with screen reader section formatter');

		$obj->setSeriesDescriptionFormatter("3ce4fcfe8febdd161d40ae4f253e827f");

		$res6 = ["describeSingleSeries" => false, "enabled" => true, "pointDescriptionThreshold" => 30, "onTableAnchorClick" => "65528797add8c35fe2ed3ba46ec9e1ee", "pointDateFormat" => "2a505d87116bc7c91a57716b84e2eb8e", "pointDateFormatter" => "7f0aa6cf2926725674efea2c087a716e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "screenReaderSectionFormatter" => "73356fbe3da4d20b3022c13763b1973b", "seriesDescriptionFormatter" => "3ce4fcfe8febdd161d40ae4f253e827f"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with series description formatter');
	}
}


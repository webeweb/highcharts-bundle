<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Gauge;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Series\Gauge\HighchartsDataLabels;

/**
 * Highcharts data labels test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series\Gauge
 * @version 5.0.14
 */
final class HighchartsDataLabelsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsDataLabels(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsDataLabels(false);

		$res = ["align" => "center", "allowOverlap" => false, "borderColor" => "#cccccc", "borderRadius" => 3, "borderWidth" => 1, "crop" => true, "defer" => true, "enabled" => false, "format" => "{y}", "overflow" => "justify", "padding" => 5, "rotation" => 0, "shadow" => false, "shape" => "square", "style" => ["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], "useHTML" => false, "verticalAlign" => "top", "x" => 0, "y" => 15, "zIndex" => 2];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setBackgroundColor("930f2a43179a7ae5fc25ed873223e99f");

		$res1 = ["align" => "center", "allowOverlap" => false, "borderColor" => "#cccccc", "borderRadius" => 3, "borderWidth" => 1, "crop" => true, "defer" => true, "enabled" => false, "format" => "{y}", "overflow" => "justify", "padding" => 5, "rotation" => 0, "shadow" => false, "shape" => "square", "style" => ["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], "useHTML" => false, "verticalAlign" => "top", "x" => 0, "y" => 15, "zIndex" => 2, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with background color");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["align" => "center", "allowOverlap" => false, "borderColor" => "#cccccc", "borderRadius" => 3, "borderWidth" => 1, "crop" => true, "defer" => true, "enabled" => false, "format" => "{y}", "overflow" => "justify", "padding" => 5, "rotation" => 0, "shadow" => false, "shape" => "square", "style" => ["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], "useHTML" => false, "verticalAlign" => "top", "x" => 0, "y" => 15, "zIndex" => 2, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["align" => "center", "allowOverlap" => false, "borderColor" => "#cccccc", "borderRadius" => 3, "borderWidth" => 1, "crop" => true, "defer" => true, "enabled" => false, "format" => "{y}", "overflow" => "justify", "padding" => 5, "rotation" => 0, "shadow" => false, "shape" => "square", "style" => ["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], "useHTML" => false, "verticalAlign" => "top", "x" => 0, "y" => 15, "zIndex" => 2, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res4 = ["align" => "center", "allowOverlap" => false, "borderColor" => "#cccccc", "borderRadius" => 3, "borderWidth" => 1, "crop" => true, "defer" => true, "enabled" => false, "format" => "{y}", "overflow" => "justify", "padding" => 5, "rotation" => 0, "shadow" => false, "shape" => "square", "style" => ["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], "useHTML" => false, "verticalAlign" => "top", "x" => 0, "y" => 15, "zIndex" => 2, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with formatter");

		$obj->setInside(0);

		$res5 = ["align" => "center", "allowOverlap" => false, "borderColor" => "#cccccc", "borderRadius" => 3, "borderWidth" => 1, "crop" => true, "defer" => true, "enabled" => false, "format" => "{y}", "overflow" => "justify", "padding" => 5, "rotation" => 0, "shadow" => false, "shape" => "square", "style" => ["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"], "useHTML" => false, "verticalAlign" => "top", "x" => 0, "y" => 15, "zIndex" => 2, "backgroundColor" => "930f2a43179a7ae5fc25ed873223e99f", "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "formatter" => "f2ffc59487832cbad265a8fef2133592", "inside" => 0];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with inside");
	}

}

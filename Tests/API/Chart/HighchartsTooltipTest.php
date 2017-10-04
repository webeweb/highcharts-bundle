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
use WBW\HighchartsBundle\API\Chart\HighchartsTooltip;

/**
 * Highcharts tooltip test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart
 * @version 5.0.14
 */
final class HighchartsTooltipTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsTooltip(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsTooltip(false);

		$res = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

		$res1 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with border color");

		$obj->setDateTimeLabelFormats(["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]);

		$res2 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with date time label formats");

		$obj->setFormatter("f2ffc59487832cbad265a8fef2133592");

		$res3 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "formatter" => "f2ffc59487832cbad265a8fef2133592"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with formatter");

		$obj->setHeaderFormat("937148825f6c7c8ed3376d1834b17ac6");

		$res4 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with header format");

		$obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");

		$res5 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with point formatter");

		$obj->setPositioner("97c873b8ea05a822237283662ba3c751");

		$res6 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with positioner");

		$obj->setSnap(49);

		$res7 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "snap" => 49];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with snap");

		$obj->setValueDecimals(54);

		$res8 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "snap" => 49, "valueDecimals" => 54];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with value decimals");

		$obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");

		$res9 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "snap" => 49, "valueDecimals" => 54, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with value prefix");

		$obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");

		$res10 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "snap" => 49, "valueDecimals" => 54, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with value suffix");

		$obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");

		$res11 = ["animation" => true, "backgroundColor" => "rgba(247,247,247,0.85)", "borderRadius" => 3, "borderWidth" => 1, "enabled" => true, "followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "hideDelay" => 500, "padding" => 8, "pointFormat" => "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>", "shadow" => true, "shape" => "callout", "shared" => false, "split" => false, "style" => ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"], "useHTML" => false, "borderColor" => "97da935a74593c55d78be9d1295aa994", "dateTimeLabelFormats" => ["dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"], "formatter" => "f2ffc59487832cbad265a8fef2133592", "headerFormat" => "937148825f6c7c8ed3376d1834b17ac6", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "positioner" => "97c873b8ea05a822237283662ba3c751", "snap" => 49, "valueDecimals" => 54, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db", "xDateFormat" => "e24debfa0bc8408e1dda05cbd537a072"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with x date format");
	}

}

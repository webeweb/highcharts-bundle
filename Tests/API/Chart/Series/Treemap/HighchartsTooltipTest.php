<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Treemap;

use WBW\HighchartsBundle\API\Chart\Series\Treemap\HighchartsTooltip;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts tooltip test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Series\Treemap
 * @version 5.0.14
 */
final class HighchartsTooltipTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsTooltip(false);

		$res = ["followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "headerFormat" => "\"\"", "hideDelay" => 500, "padding" => 8, "pointFormat" => "\"&#60;b&#62;{point.name}&#60;/b&#62;: {point.value}&#60;/b&#62;&#60;br/&#62;\"", "split" => false];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setDateTimeLabelFormats("e9db9b38c23127a66165e1d8cefd5ad8");

		$res1 = ["followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "headerFormat" => "\"\"", "hideDelay" => 500, "padding" => 8, "pointFormat" => "\"&#60;b&#62;{point.name}&#60;/b&#62;: {point.value}&#60;/b&#62;&#60;br/&#62;\"", "split" => false, "dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with date time label formats');

		$obj->setPointFormatter("d0b51d7b9a5189f718d161b366d33044");

		$res2 = ["followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "headerFormat" => "\"\"", "hideDelay" => 500, "padding" => 8, "pointFormat" => "\"&#60;b&#62;{point.name}&#60;/b&#62;: {point.value}&#60;/b&#62;&#60;br/&#62;\"", "split" => false, "dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with point formatter');

		$obj->setValueDecimals(74);

		$res3 = ["followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "headerFormat" => "\"\"", "hideDelay" => 500, "padding" => 8, "pointFormat" => "\"&#60;b&#62;{point.name}&#60;/b&#62;: {point.value}&#60;/b&#62;&#60;br/&#62;\"", "split" => false, "dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "valueDecimals" => 74];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with value decimals');

		$obj->setValuePrefix("5fde1c8b25eb2ea19ff8377e62564818");

		$res4 = ["followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "headerFormat" => "\"\"", "hideDelay" => 500, "padding" => 8, "pointFormat" => "\"&#60;b&#62;{point.name}&#60;/b&#62;: {point.value}&#60;/b&#62;&#60;br/&#62;\"", "split" => false, "dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "valueDecimals" => 74, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with value prefix');

		$obj->setValueSuffix("bf995908ddff004471c953d8062bd1db");

		$res5 = ["followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "headerFormat" => "\"\"", "hideDelay" => 500, "padding" => 8, "pointFormat" => "\"&#60;b&#62;{point.name}&#60;/b&#62;: {point.value}&#60;/b&#62;&#60;br/&#62;\"", "split" => false, "dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "valueDecimals" => 74, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with value suffix');

		$obj->setXDateFormat("e24debfa0bc8408e1dda05cbd537a072");

		$res6 = ["followPointer" => false, "followTouchMove" => true, "footerFormat" => "false", "headerFormat" => "\"\"", "hideDelay" => 500, "padding" => 8, "pointFormat" => "\"&#60;b&#62;{point.name}&#60;/b&#62;: {point.value}&#60;/b&#62;&#60;br/&#62;\"", "split" => false, "dateTimeLabelFormats" => "e9db9b38c23127a66165e1d8cefd5ad8", "pointFormatter" => "d0b51d7b9a5189f718d161b366d33044", "valueDecimals" => 74, "valuePrefix" => "5fde1c8b25eb2ea19ff8377e62564818", "valueSuffix" => "bf995908ddff004471c953d8062bd1db", "xDateFormat" => "e24debfa0bc8408e1dda05cbd537a072"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with x date format');
	}
}


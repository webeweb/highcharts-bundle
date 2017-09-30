<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API;

use WBW\HighchartsBundle\API\HighchartsChart;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts chart test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API
 * @version 5.0.14
 */
final class HighchartsChartTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsChart(false);

		$res = ["colors" => [ "#7cb5ec" , "#434348" , "#90ed7d" , "#f7a35c" , "#8085e9" , "#f15c80" , "#e4d354" , "#2b908f" , "#f45b5b" , "#91e8e1"]];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setDefs("cd8fc2597193b4c938e7ff50062936e3");

		$res1 = ["colors" => [ "#7cb5ec" , "#434348" , "#90ed7d" , "#f7a35c" , "#8085e9" , "#f15c80" , "#e4d354" , "#2b908f" , "#f45b5b" , "#91e8e1"], "defs" => "cd8fc2597193b4c938e7ff50062936e3"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with defs');

		$obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);

		$res2 = ["colors" => [ "#7cb5ec" , "#434348" , "#90ed7d" , "#f7a35c" , "#8085e9" , "#f15c80" , "#e4d354" , "#2b908f" , "#f45b5b" , "#91e8e1"], "defs" => "cd8fc2597193b4c938e7ff50062936e3", "series" => ["series" => "bef99584217af744e404ed44a33af589"]];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with series');

		$obj->setXAxis(["xAxis" => "b919a806dedef37999b45653bdde66c6"]);

		$res3 = ["colors" => [ "#7cb5ec" , "#434348" , "#90ed7d" , "#f7a35c" , "#8085e9" , "#f15c80" , "#e4d354" , "#2b908f" , "#f45b5b" , "#91e8e1"], "defs" => "cd8fc2597193b4c938e7ff50062936e3", "series" => ["series" => "bef99584217af744e404ed44a33af589"], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"]];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with x axis');

		$obj->setYAxis(["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]);

		$res4 = ["colors" => [ "#7cb5ec" , "#434348" , "#90ed7d" , "#f7a35c" , "#8085e9" , "#f15c80" , "#e4d354" , "#2b908f" , "#f45b5b" , "#91e8e1"], "defs" => "cd8fc2597193b4c938e7ff50062936e3", "series" => ["series" => "bef99584217af744e404ed44a33af589"], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"], "yAxis" => ["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with y axis');
	}
}


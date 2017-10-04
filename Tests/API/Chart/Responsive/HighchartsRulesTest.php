<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Responsive;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Responsive\HighchartsRules;

/**
 * Highcharts rules test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Responsive
 * @version 5.0.14
 */
final class HighchartsRulesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsRules(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsRules(false);

		$obj->setChartOptions(["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]);

		$res1 = ["chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"]];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with chart options");

		$obj->setCondition(["condition" => "3f9178c25b78ed8bed19091bcb62e266"]);

		$res2 = ["chartOptions" => ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"], "condition" => ["condition" => "3f9178c25b78ed8bed19091bcb62e266"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with condition");
	}

}

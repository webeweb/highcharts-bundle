<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Responsive;

use WBW\HighchartsBundle\API\Chart\Responsive\HighchartsRules;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts rules test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Responsive
 * @version 5.0.14
 */
final class HighchartsRulesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsRules(false);

		$obj->setChartOptions("0788f6dc968cd56a32e6d11f1134e345");

		$res1 = ["chartOptions" => "0788f6dc968cd56a32e6d11f1134e345"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with chart options');
	}
}


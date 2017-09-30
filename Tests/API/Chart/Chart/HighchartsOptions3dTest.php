<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Chart;

use WBW\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts options3d test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Chart
 * @version 5.0.14
 */
final class HighchartsOptions3dTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsOptions3d(false);

		$res = ["alpha" => 0, "beta" => 0, "depth" => 100, "enabled" => false, "fitToPlot" => true, "viewDistance" => 100];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAxisLabelPosition("f5be39961e2efb6763713e42abe9fe7b");

		$res1 = ["alpha" => 0, "beta" => 0, "depth" => 100, "enabled" => false, "fitToPlot" => true, "viewDistance" => 100, "axisLabelPosition" => "f5be39961e2efb6763713e42abe9fe7b"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with axis label position');
	}
}


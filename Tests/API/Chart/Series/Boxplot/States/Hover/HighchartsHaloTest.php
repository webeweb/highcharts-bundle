<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series\Boxplot\States\Hover;

use WBW\HighchartsBundle\API\Chart\Series\Boxplot\States\Hover\HighchartsHalo;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts halo test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Series\Boxplot\States\Hover
 * @version 5.0.14
 */
final class HighchartsHaloTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsHalo(false);

		$res = ["opacity" => 0.25, "size" => 10];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAttributes("736b91750e516139acc13c5eb6564f92");

		$res1 = ["opacity" => 0.25, "size" => 10, "attributes" => "736b91750e516139acc13c5eb6564f92"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with attributes');
	}
}


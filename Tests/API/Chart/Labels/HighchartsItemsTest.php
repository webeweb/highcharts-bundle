<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Labels;

use WBW\HighchartsBundle\API\Chart\Labels\HighchartsItems;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts items test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Labels
 * @version 5.0.14
 */
final class HighchartsItemsTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsItems(false);

		$obj->setHtml("fc35fdc70d5fc69d269883a822c7a53e");

		$res1 = ["html" => "fc35fdc70d5fc69d269883a822c7a53e"];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with html');

		$obj->setStyle(["style" => "a1b01e734b573fca08eb1a65e6df9a38"]);

		$res2 = ["html" => "fc35fdc70d5fc69d269883a822c7a53e", "style" => ["style" => "a1b01e734b573fca08eb1a65e6df9a38"]];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with style');
	}
}

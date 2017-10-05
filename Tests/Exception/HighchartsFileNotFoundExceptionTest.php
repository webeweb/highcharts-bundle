<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\Exception;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\Exception\HighchartsFileNotFoundException;

/**
 * Highcharts file not found exception test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Exception
 * @version 5.0.14
 * @final
 */
final class HighchartsFileNotFoundExceptionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new HighchartsFileNotFoundException("filepath");

		$res = "The file \"filepath\" was not found";
		$this->assertEquals($res, $obj->getMessage(), "The method getMessage() does not return the expected string");
	}

}

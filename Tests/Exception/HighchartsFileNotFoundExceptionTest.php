<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\Exception;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\HighchartsBundle\Exception\HighchartsFileNotFoundException;

/**
 * Highcharts file not found exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Exception
 * @final
 */
final class HighchartsFileNotFoundExceptionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new HighchartsFileNotFoundException("filepath");

		$res = "The file \"filepath\" was not found";
		$this->assertEquals($res, $obj->getMessage(), "The method getMessage() does not return the expected string");
	}

}

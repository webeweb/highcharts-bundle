<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\XAxis;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts breaks test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\XAxis
 * @version 5.0.14
 */
final class HighchartsBreaksTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(true);

		$this->assertEquals(null, $obj1->getBreakSize());
		$this->assertEquals(null, $obj1->getFrom());
		$this->assertEquals(null, $obj1->getRepeat());
		$this->assertEquals(null, $obj1->getTo());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(false);

		$this->assertEquals(0, $obj0->getBreakSize());
		$this->assertEquals(null, $obj0->getFrom());
		$this->assertEquals(0, $obj0->getRepeat());
		$this->assertEquals(null, $obj0->getTo());
    }

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsBreaks(true);

		$obj->setBreakSize(73);

		$res1 = ["breakSize" => 73];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setFrom(79);

		$res2 = ["breakSize" => 73, "from" => 79];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setRepeat(90);

		$res3 = ["breakSize" => 73, "from" => 79, "repeat" => 90];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setTo(7);

		$res4 = ["breakSize" => 73, "from" => 79, "repeat" => 90, "to" => 7];
		$this->assertEquals($res4, $obj->toArray());
	}

}

<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Columnrange\Point;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts events test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series\Columnrange\Point
 * @version 5.0.14
 */
final class HighchartsEventsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\Point\HighchartsEvents(true);

        $this->assertNull($obj1->getClick());
        $this->assertNull($obj1->getMouseOut());
        $this->assertNull($obj1->getMouseOver());
        $this->assertNull($obj1->getRemove());
        $this->assertNull($obj1->getSelect());
        $this->assertNull($obj1->getUnselect());
        $this->assertNull($obj1->getUpdate());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\Point\HighchartsEvents(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\Point\HighchartsEvents(true);

        $obj->setClick("a8affc088cbca89fa20dbd98c91362e4");

        $res1 = ["click" => "a8affc088cbca89fa20dbd98c91362e4"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setMouseOut("efc487f286f5bca976fafe58cb6e7895");

        $res2 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setMouseOver("1f1a5f011c50a092eb06446d724dd573");

        $res3 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setRemove("0f6969d7052da9261e31ddb6e88c136e");

        $res4 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "remove" => "0f6969d7052da9261e31ddb6e88c136e"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setSelect("99938282f04071859941e18f16efcf42");

        $res5 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "remove" => "0f6969d7052da9261e31ddb6e88c136e", "select" => "99938282f04071859941e18f16efcf42"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setUnselect("223f2d725e5f4ddb92b585d87421adbd");

        $res6 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "remove" => "0f6969d7052da9261e31ddb6e88c136e", "select" => "99938282f04071859941e18f16efcf42", "unselect" => "223f2d725e5f4ddb92b585d87421adbd"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setUpdate("3ac340832f29c11538fbe2d6f75e8bcc");

        $res7 = ["click" => "a8affc088cbca89fa20dbd98c91362e4", "mouseOut" => "efc487f286f5bca976fafe58cb6e7895", "mouseOver" => "1f1a5f011c50a092eb06446d724dd573", "remove" => "0f6969d7052da9261e31ddb6e88c136e", "select" => "99938282f04071859941e18f16efcf42", "unselect" => "223f2d725e5f4ddb92b585d87421adbd", "update" => "3ac340832f29c11538fbe2d6f75e8bcc"];
        $this->assertEquals($res7, $obj->toArray());
    }

}

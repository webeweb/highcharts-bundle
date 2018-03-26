<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Exporting;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts buttons test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Exporting
 * @version 5.0.14
 */
final class HighchartsButtonsTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons(true);

        $this->assertNull($obj1->getContextButton());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons(false);

        $obj->newContextButton();

        $obj->clear();

        $res = ["contextButton" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newContextButton() method.
     *
     * @return void.
     */
    public function testNewContextButton() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons(false);

        $res = $obj->newContextButton();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\HighchartsButtons(true);

        $obj->setContextButton(new \WBW\Bundle\HighchartsBundle\API\Chart\Exporting\Buttons\HighchartsContextButton());

        $res1 = ["contextButton" => []];
        $this->assertEquals($res1, $obj->toArray());
    }

}

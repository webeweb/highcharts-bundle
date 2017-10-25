<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\Wrapper;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\HighchartsBundle\Wrapper\HighchartsWrapper;

/**
 * Highcharts wrapper test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\Wrapper
 * @final
 */
final class HighchartsWrapperTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the unwrap() method.
     *
     * @return void
     */
    public function testUnwrap() {

        $obj = new HighchartsWrapper();

        $str1 = "\"" . HighchartsWrapper::WRAP . "string" . HighchartsWrapper::WRAP . "\"";
        $res1 = "string";
        $this->assertEquals($res1, $obj->unwrap($str1), "The method unwrapp() does not return the expected string");

        $str2 = "\"string\"";
        $res2 = "\"string\"";
        $this->assertEquals($res2, $obj->unwrap($str2), "The method unwrapp() does not return the expected string");
    }

    /**
     * Tests the wrap() method.
     *
     * @return void
     */
    public function testWrap() {

        $obj = new HighchartsWrapper();

        $str1 = "string";
        $res1 = HighchartsWrapper::WRAP . "string" . HighchartsWrapper::WRAP;
        $this->assertEquals($res1, $obj->wrap($str1), "The method wrapp() does not return the expected string");

        $str2 = "";
        $res2 = "";
        $this->assertEquals($res2, $obj->wrap($str2), "The method wrapp() does not return the expected string");
    }

}

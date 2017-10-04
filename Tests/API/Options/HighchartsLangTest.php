<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Options;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Options\HighchartsLang;

/**
 * Highcharts lang test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Options
 * @version 5.0.14
 */
final class HighchartsLangTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsLang(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsLang(false);

		$res = ["contextButtonTitle" => "Chart context menu", "decimalPoint" => ".", "downloadJPEG" => "Download JPEG image", "downloadPDF" => "Download PDF document", "downloadPNG" => "Download PNG image", "downloadSVG" => "Download SVG vector image", "drillUpText" => "Back to {series.name}", "loading" => "Loading...", "months" => ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "noData" => "No data to display", "numericSymbolMagnitude" => 1000, "numericSymbols" => ["k", "M", "G", "T", "P", "E"], "printChart" => "Print chart", "resetZoom" => "Reset zoom", "resetZoomTitle" => "Reset zoom level 1:1", "shortMonths" => ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "weekdays" => ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setInvalidDate("bdb500c6e404d6c0ca66ff50b8d61885");

		$res1 = ["contextButtonTitle" => "Chart context menu", "decimalPoint" => ".", "downloadJPEG" => "Download JPEG image", "downloadPDF" => "Download PDF document", "downloadPNG" => "Download PNG image", "downloadSVG" => "Download SVG vector image", "drillUpText" => "Back to {series.name}", "loading" => "Loading...", "months" => ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "noData" => "No data to display", "numericSymbolMagnitude" => 1000, "numericSymbols" => ["k", "M", "G", "T", "P", "E"], "printChart" => "Print chart", "resetZoom" => "Reset zoom", "resetZoomTitle" => "Reset zoom level 1:1", "shortMonths" => ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "weekdays" => ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with invalid date");

		$obj->setShortWeekdays(["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"]);

		$res2 = ["contextButtonTitle" => "Chart context menu", "decimalPoint" => ".", "downloadJPEG" => "Download JPEG image", "downloadPDF" => "Download PDF document", "downloadPNG" => "Download PNG image", "downloadSVG" => "Download SVG vector image", "drillUpText" => "Back to {series.name}", "loading" => "Loading...", "months" => ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "noData" => "No data to display", "numericSymbolMagnitude" => 1000, "numericSymbols" => ["k", "M", "G", "T", "P", "E"], "printChart" => "Print chart", "resetZoom" => "Reset zoom", "resetZoomTitle" => "Reset zoom level 1:1", "shortMonths" => ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "weekdays" => ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "shortWeekdays" => ["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"]];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with short weekdays");

		$obj->setThousandsSep("62ca5281092a9f16f951c5b81a9e25f9");

		$res3 = ["contextButtonTitle" => "Chart context menu", "decimalPoint" => ".", "downloadJPEG" => "Download JPEG image", "downloadPDF" => "Download PDF document", "downloadPNG" => "Download PNG image", "downloadSVG" => "Download SVG vector image", "drillUpText" => "Back to {series.name}", "loading" => "Loading...", "months" => ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "noData" => "No data to display", "numericSymbolMagnitude" => 1000, "numericSymbols" => ["k", "M", "G", "T", "P", "E"], "printChart" => "Print chart", "resetZoom" => "Reset zoom", "resetZoomTitle" => "Reset zoom level 1:1", "shortMonths" => ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "weekdays" => ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "shortWeekdays" => ["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"], "thousandsSep" => "62ca5281092a9f16f951c5b81a9e25f9"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with thousands sep");
	}

}

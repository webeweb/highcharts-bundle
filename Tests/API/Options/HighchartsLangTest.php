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

/**
 * Highcharts lang test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Options
 * @version 5.0.14
 */
final class HighchartsLangTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Options\HighchartsLang(true);

		$this->assertEquals(null, $obj1->getContextButtonTitle(), "The method getContextButtonTitle() does not return the expected value");
		$this->assertEquals(null, $obj1->getDecimalPoint(), "The method getDecimalPoint() does not return the expected value");
		$this->assertEquals(null, $obj1->getDownloadJPEG(), "The method getDownloadJPEG() does not return the expected value");
		$this->assertEquals(null, $obj1->getDownloadPDF(), "The method getDownloadPDF() does not return the expected value");
		$this->assertEquals(null, $obj1->getDownloadPNG(), "The method getDownloadPNG() does not return the expected value");
		$this->assertEquals(null, $obj1->getDownloadSVG(), "The method getDownloadSVG() does not return the expected value");
		$this->assertEquals(null, $obj1->getDrillUpText(), "The method getDrillUpText() does not return the expected value");
		$this->assertEquals(null, $obj1->getInvalidDate(), "The method getInvalidDate() does not return the expected value");
		$this->assertEquals(null, $obj1->getLoading(), "The method getLoading() does not return the expected value");
		$this->assertEquals(null, $obj1->getMonths(), "The method getMonths() does not return the expected value");
		$this->assertEquals(null, $obj1->getNoData(), "The method getNoData() does not return the expected value");
		$this->assertEquals(null, $obj1->getNumericSymbolMagnitude(), "The method getNumericSymbolMagnitude() does not return the expected value");
		$this->assertEquals(null, $obj1->getNumericSymbols(), "The method getNumericSymbols() does not return the expected value");
		$this->assertEquals(null, $obj1->getPrintChart(), "The method getPrintChart() does not return the expected value");
		$this->assertEquals(null, $obj1->getResetZoom(), "The method getResetZoom() does not return the expected value");
		$this->assertEquals(null, $obj1->getResetZoomTitle(), "The method getResetZoomTitle() does not return the expected value");
		$this->assertEquals(null, $obj1->getShortMonths(), "The method getShortMonths() does not return the expected value");
		$this->assertEquals(null, $obj1->getShortWeekdays(), "The method getShortWeekdays() does not return the expected value");
		$this->assertEquals(null, $obj1->getThousandsSep(), "The method getThousandsSep() does not return the expected value");
		$this->assertEquals(null, $obj1->getWeekdays(), "The method getWeekdays() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Options\HighchartsLang(false);

		$this->assertEquals("Chart context menu", $obj0->getContextButtonTitle(), "The method getContextButtonTitle() does not return the expected value");
		$this->assertEquals(".", $obj0->getDecimalPoint(), "The method getDecimalPoint() does not return the expected value");
		$this->assertEquals("Download JPEG image", $obj0->getDownloadJPEG(), "The method getDownloadJPEG() does not return the expected value");
		$this->assertEquals("Download PDF document", $obj0->getDownloadPDF(), "The method getDownloadPDF() does not return the expected value");
		$this->assertEquals("Download PNG image", $obj0->getDownloadPNG(), "The method getDownloadPNG() does not return the expected value");
		$this->assertEquals("Download SVG vector image", $obj0->getDownloadSVG(), "The method getDownloadSVG() does not return the expected value");
		$this->assertEquals("Back to {series.name}", $obj0->getDrillUpText(), "The method getDrillUpText() does not return the expected value");
		$this->assertEquals(null, $obj0->getInvalidDate(), "The method getInvalidDate() does not return the expected value");
		$this->assertEquals("Loading...", $obj0->getLoading(), "The method getLoading() does not return the expected value");
		$this->assertEquals(["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], $obj0->getMonths(), "The method getMonths() does not return the expected value");
		$this->assertEquals("No data to display", $obj0->getNoData(), "The method getNoData() does not return the expected value");
		$this->assertEquals(1000, $obj0->getNumericSymbolMagnitude(), "The method getNumericSymbolMagnitude() does not return the expected value");
		$this->assertEquals(["k", "M", "G", "T", "P", "E"], $obj0->getNumericSymbols(), "The method getNumericSymbols() does not return the expected value");
		$this->assertEquals("Print chart", $obj0->getPrintChart(), "The method getPrintChart() does not return the expected value");
		$this->assertEquals("Reset zoom", $obj0->getResetZoom(), "The method getResetZoom() does not return the expected value");
		$this->assertEquals("Reset zoom level 1:1", $obj0->getResetZoomTitle(), "The method getResetZoomTitle() does not return the expected value");
		$this->assertEquals(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], $obj0->getShortMonths(), "The method getShortMonths() does not return the expected value");
		$this->assertEquals(null, $obj0->getShortWeekdays(), "The method getShortWeekdays() does not return the expected value");
		$this->assertEquals(null, $obj0->getThousandsSep(), "The method getThousandsSep() does not return the expected value");
		$this->assertEquals(["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], $obj0->getWeekdays(), "The method getWeekdays() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Options\HighchartsLang(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Options\HighchartsLang(true);

		$obj->setContextButtonTitle("7a5efd58f7f05365b0f3f4b9573d73a9");

		$res1 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9"];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with context button title");

		$obj->setDecimalPoint("7d9af7a21241609a979bda8ca517044c");

		$res2 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with decimal point");

		$obj->setDownloadJPEG("35ef8afd48b58aed282a3dbcc908d9f6");

		$res3 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with download JPEG");

		$obj->setDownloadPDF("aa023eae5abd2e0879bec81e092e66d5");

		$res4 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with download PDF");

		$obj->setDownloadPNG("e1df48f80c5798d2f9c4d6d547716ae0");

		$res5 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with download PNG");

		$obj->setDownloadSVG("003855f2b7922a03bcb46e7b43b22bc7");

		$res6 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with download SVG");

		$obj->setDrillUpText("7398f774f17ac4f9f0eb0b21c9a88990");

		$res7 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with drill up text");

		$obj->setInvalidDate("bdb500c6e404d6c0ca66ff50b8d61885");

		$res8 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with invalid date");

		$obj->setLoading("a14fa2166ed698f3d04061f57e5ab9b9");

		$res9 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with loading");

		$obj->setMonths(["months" => "da36cfaf48b9e19896e23e1207040d1e"]);

		$res10 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"]];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with months");

		$obj->setNoData("a63552597cd61a815eed873c5235c18e");

		$res11 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with no data");

		$obj->setNumericSymbolMagnitude(89);

		$res12 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 89];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with numeric symbol magnitude");

		$obj->setNumericSymbols(["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"]);

		$res13 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 89, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"]];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with numeric symbols");

		$obj->setPrintChart("864d4f633659213ec0e69fc169a4bac1");

		$res14 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 89, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with print chart");

		$obj->setResetZoom("3b4f63d9335b37193695773c54d06634");

		$res15 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 89, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634"];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with reset zoom");

		$obj->setResetZoomTitle("4644b6dcf8cb64bc947a3d7617d98cdd");

		$res16 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 89, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd"];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with reset zoom title");

		$obj->setShortMonths(["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"]);

		$res17 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 89, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd", "shortMonths" => ["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"]];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with short months");

		$obj->setShortWeekdays(["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"]);

		$res18 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 89, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd", "shortMonths" => ["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"], "shortWeekdays" => ["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"]];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with short weekdays");

		$obj->setThousandsSep("62ca5281092a9f16f951c5b81a9e25f9");

		$res19 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 89, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd", "shortMonths" => ["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"], "shortWeekdays" => ["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"], "thousandsSep" => "62ca5281092a9f16f951c5b81a9e25f9"];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with thousands sep");

		$obj->setWeekdays(["weekdays" => "92b9604ffb8fe10577de981be625a6d1"]);

		$res20 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 89, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd", "shortMonths" => ["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"], "shortWeekdays" => ["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"], "thousandsSep" => "62ca5281092a9f16f951c5b81a9e25f9", "weekdays" => ["weekdays" => "92b9604ffb8fe10577de981be625a6d1"]];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with weekdays");
	}

}

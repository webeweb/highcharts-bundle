<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Options;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts lang test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Options
 * @version 5.0.14
 */
final class HighchartsLangTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang(true);

        $this->assertNull($obj1->getContextButtonTitle());
        $this->assertNull($obj1->getDecimalPoint());
        $this->assertNull($obj1->getDownloadJPEG());
        $this->assertNull($obj1->getDownloadPDF());
        $this->assertNull($obj1->getDownloadPNG());
        $this->assertNull($obj1->getDownloadSVG());
        $this->assertNull($obj1->getDrillUpText());
        $this->assertNull($obj1->getInvalidDate());
        $this->assertNull($obj1->getLoading());
        $this->assertNull($obj1->getMonths());
        $this->assertNull($obj1->getNoData());
        $this->assertNull($obj1->getNumericSymbolMagnitude());
        $this->assertNull($obj1->getNumericSymbols());
        $this->assertNull($obj1->getPrintChart());
        $this->assertNull($obj1->getResetZoom());
        $this->assertNull($obj1->getResetZoomTitle());
        $this->assertNull($obj1->getShortMonths());
        $this->assertNull($obj1->getShortWeekdays());
        $this->assertNull($obj1->getThousandsSep());
        $this->assertNull($obj1->getWeekdays());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang(false);

        $this->assertEquals("Chart context menu", $obj0->getContextButtonTitle());
        $this->assertEquals(".", $obj0->getDecimalPoint());
        $this->assertEquals("Download JPEG image", $obj0->getDownloadJPEG());
        $this->assertEquals("Download PDF document", $obj0->getDownloadPDF());
        $this->assertEquals("Download PNG image", $obj0->getDownloadPNG());
        $this->assertEquals("Download SVG vector image", $obj0->getDownloadSVG());
        $this->assertEquals("Back to {series.name}", $obj0->getDrillUpText());
        $this->assertNull($obj0->getInvalidDate());
        $this->assertEquals("Loading...", $obj0->getLoading());
        $this->assertEquals(["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], $obj0->getMonths());
        $this->assertEquals("No data to display", $obj0->getNoData());
        $this->assertEquals(1000, $obj0->getNumericSymbolMagnitude());
        $this->assertEquals(["k", "M", "G", "T", "P", "E"], $obj0->getNumericSymbols());
        $this->assertEquals("Print chart", $obj0->getPrintChart());
        $this->assertEquals("Reset zoom", $obj0->getResetZoom());
        $this->assertEquals("Reset zoom level 1:1", $obj0->getResetZoomTitle());
        $this->assertEquals(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], $obj0->getShortMonths());
        $this->assertNull($obj0->getShortWeekdays());
        $this->assertNull($obj0->getThousandsSep());
        $this->assertEquals(["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], $obj0->getWeekdays());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang(true);

        $obj->setContextButtonTitle("7a5efd58f7f05365b0f3f4b9573d73a9");

        $res1 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setDecimalPoint("7d9af7a21241609a979bda8ca517044c");

        $res2 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c"];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setDownloadJPEG("35ef8afd48b58aed282a3dbcc908d9f6");

        $res3 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setDownloadPDF("aa023eae5abd2e0879bec81e092e66d5");

        $res4 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setDownloadPNG("e1df48f80c5798d2f9c4d6d547716ae0");

        $res5 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setDownloadSVG("003855f2b7922a03bcb46e7b43b22bc7");

        $res6 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setDrillUpText("7398f774f17ac4f9f0eb0b21c9a88990");

        $res7 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setInvalidDate("bdb500c6e404d6c0ca66ff50b8d61885");

        $res8 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setLoading("a14fa2166ed698f3d04061f57e5ab9b9");

        $res9 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setMonths(["months" => "da36cfaf48b9e19896e23e1207040d1e"]);

        $res10 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"]];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setNoData("a63552597cd61a815eed873c5235c18e");

        $res11 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setNumericSymbolMagnitude(60);

        $res12 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 60];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setNumericSymbols(["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"]);

        $res13 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 60, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"]];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setPrintChart("864d4f633659213ec0e69fc169a4bac1");

        $res14 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 60, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setResetZoom("3b4f63d9335b37193695773c54d06634");

        $res15 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 60, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setResetZoomTitle("4644b6dcf8cb64bc947a3d7617d98cdd");

        $res16 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 60, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd"];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setShortMonths(["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"]);

        $res17 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 60, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd", "shortMonths" => ["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"]];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setShortWeekdays(["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"]);

        $res18 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 60, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd", "shortMonths" => ["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"], "shortWeekdays" => ["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"]];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setThousandsSep("62ca5281092a9f16f951c5b81a9e25f9");

        $res19 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 60, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd", "shortMonths" => ["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"], "shortWeekdays" => ["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"], "thousandsSep" => "62ca5281092a9f16f951c5b81a9e25f9"];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setWeekdays(["weekdays" => "92b9604ffb8fe10577de981be625a6d1"]);

        $res20 = ["contextButtonTitle" => "7a5efd58f7f05365b0f3f4b9573d73a9", "decimalPoint" => "7d9af7a21241609a979bda8ca517044c", "downloadJPEG" => "35ef8afd48b58aed282a3dbcc908d9f6", "downloadPDF" => "aa023eae5abd2e0879bec81e092e66d5", "downloadPNG" => "e1df48f80c5798d2f9c4d6d547716ae0", "downloadSVG" => "003855f2b7922a03bcb46e7b43b22bc7", "drillUpText" => "7398f774f17ac4f9f0eb0b21c9a88990", "invalidDate" => "bdb500c6e404d6c0ca66ff50b8d61885", "loading" => "a14fa2166ed698f3d04061f57e5ab9b9", "months" => ["months" => "da36cfaf48b9e19896e23e1207040d1e"], "noData" => "a63552597cd61a815eed873c5235c18e", "numericSymbolMagnitude" => 60, "numericSymbols" => ["numericSymbols" => "e1dfcadcb412bd09f22c6686e6801994"], "printChart" => "864d4f633659213ec0e69fc169a4bac1", "resetZoom" => "3b4f63d9335b37193695773c54d06634", "resetZoomTitle" => "4644b6dcf8cb64bc947a3d7617d98cdd", "shortMonths" => ["shortMonths" => "7cfa6eb2e9f41003ac5c121106dc32c1"], "shortWeekdays" => ["shortWeekdays" => "f232077d652edee073a547d6f8c9dbaa"], "thousandsSep" => "62ca5281092a9f16f951c5b81a9e25f9", "weekdays" => ["weekdays" => "92b9604ffb8fe10577de981be625a6d1"]];
        $this->assertEquals($res20, $obj->toArray());
    }

}

<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\Provider;

use PHPUnit_Framework_TestCase;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Yaml\Yaml;
use WBW\Bundle\HighchartsBundle\Provider\HighchartsLangProvider;
use WBW\Library\Core\Utility\IO\FileUtility;

/**
 * Highcharts lang provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\Provider
 * @final
 */
final class HighchartsLangProviderTest extends PHPUnit_Framework_TestCase {

    /**
     * Locale.
     *
     * @var string
     */
    private $locale;

    /**
     * Translator.
     *
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        // Define the necessary callback functions.
        $getLocale = function() {
            return $this->locale;
        };
        $translate = function ($id, array $parameters = [], $domain = null, $locale = null) {

            // Initialize the YAML filename.
            $filename = getcwd() . "/Resources/translations/" . implode(".", [$domain, $locale, "yml"]);

            // Parse the YAML file.
            $contents = Yaml::parse(FileUtility::getContents($filename));

            // Define the necessary variables.
            $keys  = explode(".", $id);
            $count = count($keys);
            $trans = $contents;

            // Handle each key.
            for ($i = 0; $i < $count; ++$i) {
                if (!array_key_exists($keys[$i], $trans)) {
                    return $id;
                }
                $trans = $trans[$keys[$i]];
            }

            // Return.
            return $trans;
        };

        // Set the mocks.
        $this->translator = $this->getMockBuilder(TranslatorInterface::class)->getMock();
        $this->translator->expects($this->any())->method("getLocale")->willReturnCallback($getLocale);
        $this->translator->expects($this->any())->method("trans")->willReturnCallback($translate);
    }

    /**
     * Tests the getMonths() method.
     *
     * @return void.
     */
    public function testGetHighchartsLang() {

        $obj = new HighchartsLangProvider($this->translator);

        $this->locale = "en";

        $res0 = $obj->getHighchartsLang();
        $this->assertEquals("Chart context menu", $res0->getContextButtonTitle());
        $this->assertEquals("Download JPEG image", $res0->getDownloadJPEG());
        $this->assertEquals("Download PDF document", $res0->getDownloadPDF());
        $this->assertEquals("Download PNG image", $res0->getDownloadPNG());
        $this->assertEquals("Download SVG vector image", $res0->getDownloadSVG());
        $this->assertEquals("Back to {series.name}", $res0->getDrillUpText());
        $this->assertEquals("Loading...", $res0->getLoading());
        $this->assertEquals("No data to display", $res0->getNoData());
        $this->assertEquals("Print chart", $res0->getPrintChart());
        $this->assertEquals("Reset zoom", $res0->getResetZoom());
        $this->assertEquals("Reset zoom level 1:1", $res0->getResetZoomTitle());

        $this->locale = "fr";

        $res1 = $obj->getHighchartsLang();
        $this->assertEquals("Options", $res1->getContextButtonTitle());
        $this->assertEquals("Télécharger JPEG", $res1->getDownloadJPEG());
        $this->assertEquals("Télécharger PDF", $res1->getDownloadPDF());
        $this->assertEquals("Télécharger PNG", $res1->getDownloadPNG());
        $this->assertEquals("Télécharger SVG (image vectorielle)", $res1->getDownloadSVG());
        $this->assertEquals("Retour à {series.name}", $res1->getDrillUpText());
        $this->assertEquals("Chargement...", $res1->getLoading());
        $this->assertEquals("Aucune donnée à afficher", $res1->getNoData());
        $this->assertEquals("Imprimer le graphique", $res1->getPrintChart());
        $this->assertEquals("Réinitialiser le zoom", $res1->getResetZoom());
        $this->assertEquals("Réinitialiser le zoom à l'échelle 1:1", $res1->getResetZoomTitle());
    }

    /**
     * Tests the getMonths() method.
     *
     * @return void.
     */
    public function testGetMonths() {

        $obj = new HighchartsLangProvider($this->translator);

        $this->locale = "en";

        $res0 = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        $this->assertEquals($res0, $obj->getMonths());

        $this->locale = "fr";

        $res1 = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        $this->assertEquals($res1, $obj->getMonths());
    }

    /**
     * Tests the getShortMonths() method.
     *
     * @return void.
     */
    public function testGetShortMonths() {

        $obj = new HighchartsLangProvider($this->translator);

        $this->locale = "en";

        $res0 = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        $this->assertEquals($res0, $obj->getShortMonths());

        $this->locale = "fr";

        $res1 = ["Jan", "Fév", "Mar", "Avr", "Mai", "Jui", "Juil", "Aou", "Sep", "Oct", "Nov", "Déc"];
        $this->assertEquals($res1, $obj->getShortMonths());
    }

    /**
     * Tests the getWeekdays() method.
     *
     * @return void.
     */
    public function testGetWeekdays() {

        $obj = new HighchartsLangProvider($this->translator);

        $this->locale = "en";

        $res0 = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        $this->assertEquals($res0, $obj->getWeekdays());

        $this->locale = "fr";

        $res1 = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
        $this->assertEquals($res1, $obj->getWeekdays());
    }

}

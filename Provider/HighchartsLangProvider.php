<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Provider;

use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\HighchartsBundle\API\Options\HighchartsLang;

/**
 * Highcharts lang provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Provider
 * @final
 */
final class HighchartsLangProvider {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.highchartsbundle.provider.highchartslang";

    /**
     * Translator.
     *
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator service.
     */
    public function __construct(TranslatorInterface $translator) {
        $this->translator = $translator;
    }

    /**
     * Get the Highcharts lang.
     *
     * @return HighchartsLang Returns the Highcharts lang.
     */
    public function getHighchartsLang() {

        // Initialize the Highcharts lang.
        $lang = new HighchartsLang();
        $lang->setContextButtonTitle($this->translator->trans("options.lang.contextButtonTitle", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setDownloadJPEG($this->translator->trans("options.lang.downloadJPEG", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setDownloadPDF($this->translator->trans("options.lang.downloadPDF", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setDownloadPNG($this->translator->trans("options.lang.downloadPNG", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setDownloadSVG($this->translator->trans("options.lang.downloadSVG", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setDrillUpText($this->translator->trans("options.lang.drillUpText", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setLoading($this->translator->trans("options.lang.loading", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setMonths($this->getMonths());
        $lang->setNoData($this->translator->trans("options.lang.noData", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setPrintChart($this->translator->trans("options.lang.printChart", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setResetZoom($this->translator->trans("options.lang.resetZoom", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setResetZoomTitle($this->translator->trans("options.lang.resetZoomTitle", [], "HighchartsBundle", $this->translator->getLocale()));
        $lang->setShortMonths($this->getShortMonths());
        $lang->setWeekdays($this->getWeekdays());

        // Return the Highcharts lang.
        return $lang;
    }

    /**
     * Get the months.
     *
     * @return array Returns the translated months.
     */
    public function getMonths() {

        // Translate the months.
        $months   = [];
        $months[] = $this->translator->trans("options.lang.months.january", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.february", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.march", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.april", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.may", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.june", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.july", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.august", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.september", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.october", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.november", [], "HighchartsBundle", $this->translator->getLocale());
        $months[] = $this->translator->trans("options.lang.months.december", [], "HighchartsBundle", $this->translator->getLocale());

        // Return the months.
        return $months;
    }

    /**
     * Get the short months.
     *
     * @return array Returns the translated short months.
     */
    public function getShortMonths() {

        // Initialize the short months.
        $shortMonths   = [];
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.jan", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.feb", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.mar", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.apr", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.may", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.jun", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.jul", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.aug", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.sep", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.oct", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.nov", [], "HighchartsBundle", $this->translator->getLocale());
        $shortMonths[] = $this->translator->trans("options.lang.shortMonths.dec", [], "HighchartsBundle", $this->translator->getLocale());

        // Return the short months.
        return $shortMonths;
    }

    /**
     * Get the weekdays.
     *
     * @return array Returns the translated weekdays.
     */
    public function getWeekdays() {

        // Initialise the weekdays.
        $weekdays   = [];
        $weekdays[] = $this->translator->trans("options.lang.weekdays.sunday", [], "HighchartsBundle", $this->translator->getLocale());
        $weekdays[] = $this->translator->trans("options.lang.weekdays.monday", [], "HighchartsBundle", $this->translator->getLocale());
        $weekdays[] = $this->translator->trans("options.lang.weekdays.tuesday", [], "HighchartsBundle", $this->translator->getLocale());
        $weekdays[] = $this->translator->trans("options.lang.weekdays.wednesday", [], "HighchartsBundle", $this->translator->getLocale());
        $weekdays[] = $this->translator->trans("options.lang.weekdays.thursday", [], "HighchartsBundle", $this->translator->getLocale());
        $weekdays[] = $this->translator->trans("options.lang.weekdays.friday", [], "HighchartsBundle", $this->translator->getLocale());
        $weekdays[] = $this->translator->trans("options.lang.weekdays.saturday", [], "HighchartsBundle", $this->translator->getLocale());

        // Return the weekdays.
        return $weekdays;
    }

}

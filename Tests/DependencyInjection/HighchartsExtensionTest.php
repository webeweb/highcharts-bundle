<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\DependencyInjection;

use PHPUnit_Framework_TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\HighchartsBundle\DependencyInjection\HighchartsExtension;
use WBW\Bundle\HighchartsBundle\Provider\HighchartsLangProvider;
use WBW\Bundle\HighchartsBundle\Twig\Extension\HighchartsTwigExtension;

/**
 * Highcharts extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\DependencyInjection
 * @final
 */
final class HighchartsExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoad() {

        // Set the mocks.
        $kernel     = $this->getMockBuilder(KernelInterface::class)->getMock();
        $translator = $this->getMockBuilder(TranslatorInterface::class)->getMock();

        // We set a container builder with only the necessary.
        $container = new ContainerBuilder(new ParameterBag(["kernel.environment" => "dev"]));
        $container->set("kernel", $kernel);
        $container->set("translator", $translator);

        $obj = new HighchartsExtension();

        $obj->load([], $container);
        $this->assertInstanceOf(HighchartsTwigExtension::class, $container->get(HighchartsTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(HighchartsLangProvider::class, $container->get(HighchartsLangProvider::SERVICE_NAME));
    }

}

<?php
namespace  Zogxray\WayForPay\Test;
use  Zogxray\WayForPay\TestCase as OrchestraTestCase;
use Zogxray\WayForPay\WayForPayFacade;
use Zogxray\WayForPay\WayForPayServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return lasselehtinen\MyPackage\MyPackageServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [WayForPayServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'WayForPay' => WayForPayFacade::class,
        ];
    }
}
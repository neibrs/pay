<?php

declare(strict_types=1);

namespace Yansongda\Pay\Plugin\Alipay\Trade;

use Yansongda\Pay\Exception\ContainerException;
use Yansongda\Pay\Exception\ServiceNotFoundException;
use Yansongda\Pay\Plugin\Alipay\GeneralPlugin;
use Yansongda\Pay\Rocket;
use Yansongda\Pay\Traits\SupportServiceProviderTrait;

/**
 * @see https://opendocs.alipay.com/open/02ekfg?scene=common
 */
class PreCreatePlugin extends GeneralPlugin
{
    use SupportServiceProviderTrait;

    /**
     * @throws ContainerException
     * @throws ServiceNotFoundException
     */
    protected function doSomethingBefore(Rocket $rocket): void
    {
        $this->loadAlipayServiceProvider($rocket);
    }

    protected function getMethod(): string
    {
        return 'alipay.trade.precreate';
    }
}

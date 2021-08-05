<?php

namespace ZnCore\Contract\Kernel\Interfaces;

use ZnCore\Base\Libs\Container\ContainerAttributeInterface;

interface KernelInterface extends ContainerAttributeInterface
{

    public function loadAppConfig(): array;
}

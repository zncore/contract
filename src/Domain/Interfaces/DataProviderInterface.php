<?php

namespace ZnCore\Contract\Domain\Interfaces;

use Illuminate\Support\Collection;
use ZnCore\Domain\Libs\Query;

interface DataProviderInterface
{

    public function getCollection(): Collection;

    public function getTotalCount(): int;
}
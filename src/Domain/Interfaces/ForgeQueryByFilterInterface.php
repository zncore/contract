<?php

namespace ZnCore\Contract\Domain\Interfaces;

use ZnCore\Domain\Libs\Query;

/**
 * Формирование параметров запроса из фильтра
 */
interface ForgeQueryByFilterInterface
{

    /**
     * Формирование параметров запроса из фильтра
     * @param object $filterModel
     * @param Query $query
     * @return mixed
     */
    public function forgeQueryByFilter(object $filterModel, Query $query);
}
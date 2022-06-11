<?php

namespace ZnCore\Contract\Domain\Interfaces;

use Illuminate\Support\Collection;
use ZnCore\Domain\Libs\Query;

/**
 * Провайдер данных
 * 
 * Используется при выборке коллекции сущностей и параметров пагинации
 */
interface DataProviderInterface
{

    /**
     * Получить коллекцию сущностей
     * @return Collection
     */
    public function getCollection(): Collection;

    /**
     * Получить общее колличество записей в хранилище
     * @return int
     */
    public function getTotalCount(): int;
}
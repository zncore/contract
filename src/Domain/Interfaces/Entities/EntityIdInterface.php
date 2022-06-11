<?php

namespace ZnCore\Contract\Domain\Interfaces\Entities;

/**
 * Интерфейс атрибута "ID"
 * 
 * CRUD-сушности можно узнать по наиличию а данного интерфейса
 */
interface EntityIdInterface
{

    /**
     * @param int $id
     * @return void
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getId();
}

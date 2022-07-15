<?php

namespace ZnCore\Contract\User\Interfaces\Entities;

/**
 * Интерфейс сущности персоны пользователя
 */
interface PersonEntityInterface
{

    /**
     * ФИО пользователя
     * @return string
     */
    public function getTitle(): string;
}

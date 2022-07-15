<?php

namespace ZnCore\Contract\User\Interfaces\Entities;

use ZnDomain\Entity\Interfaces\EntityIdInterface;

/**
 * Интерфейс сущности персоны пользователя
 */
interface PersonEntityInterface extends EntityIdInterface
{

    /**
     * ФИО пользователя
     * @return string
     */
    public function getTitle(): string;
}

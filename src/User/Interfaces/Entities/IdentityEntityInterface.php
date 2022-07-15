<?php

namespace ZnCore\Contract\User\Interfaces\Entities;

use ZnDomain\Entity\Interfaces\EntityIdInterface;

/**
 * Интерфейс сущности аккаунта пользователя
 */
interface IdentityEntityInterface extends EntityIdInterface
{

    /**
     * ФИО или логин пользователя
     * @return string
     */
    public function getUsername(): string;

    /**
     * Сущность персоны
     * @return PersonEntityInterface|null
     */
    public function getPerson(): ?PersonEntityInterface;
}

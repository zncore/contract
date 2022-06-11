<?php

namespace ZnCore\Contract\User\Traits;

use Symfony\Component\Security\Core\Security;
use ZnCore\Contract\User\Interfaces\Entities\IdentityEntityInterface;

/**
 * Работа с сущностью аутентифицированного пользователя
 * 
 * Используется упрощения работы с пользователем в классах.
 */
trait GetUserTrait
{

    private $user;

    /**
     * Получить сущность аккаунта
     * @return IdentityEntityInterface
     */
    public function getUser(): IdentityEntityInterface
    {
        return $this->user;
    }

    /**
     * Назначение общего хранилища аккаунта и его токена
     * 
     * Обычно, его назначают в конструкторе класса
     * @param Security $security
     */
    public function setSecurity(Security $security) {
        $this->user = $security->getToken()->getUser();
    }
}

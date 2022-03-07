<?php

namespace ZnCore\Contract\User\Traits;

use Symfony\Component\Security\Core\Security;
use ZnCore\Contract\User\Interfaces\Entities\IdentityEntityInterface;

trait GetUserTrait
{

    private $user;

    public function getUser(): IdentityEntityInterface
    {
        return $this->user;
    }

    public function setSecurity(Security $security) {
        $this->user = $security->getToken()->getUser();
    }
}

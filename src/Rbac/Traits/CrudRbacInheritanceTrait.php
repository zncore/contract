<?php

namespace ZnCore\Contract\Rbac\Traits;

trait CrudRbacInheritanceTrait
{

    public static function getInheritance()
    {
        return [
            self::CRUD => [
                self::ALL,
                self::ONE,
                self::CREATE,
                self::UPDATE ,
                self::DELETE,
//                self::RESTORE,
            ],
        ];
    }
}

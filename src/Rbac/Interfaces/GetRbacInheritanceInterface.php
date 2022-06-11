<?php

namespace ZnCore\Contract\Rbac\Interfaces;

/**
 * Возможность получения древа наследования полномочий RBAC
 * 
 * Например, можно заранее определить все CRUD-полномочия в один и далее компактно и лаконично его использовать
 */
interface GetRbacInheritanceInterface
{

    /**
     * Получить древо наследования
     * @return array
     */
    public static function getInheritance();
}

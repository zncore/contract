<?php

namespace ZnCore\Contract\Domain\Interfaces\Entities;

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

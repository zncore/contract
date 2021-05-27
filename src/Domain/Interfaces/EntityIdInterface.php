<?php

namespace ZnCore\Contract\Domain\Interfaces;

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

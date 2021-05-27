<?php

namespace ZnCore\Contract\Mapper\Interfaces;

interface MapperInterface
{

    public function encode(object $entity): array;
    
    public function decode(array $row): object;
}

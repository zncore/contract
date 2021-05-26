<?php

namespace ZnCore\Contract\Mapper;

interface MapperInterface
{

    public function encode(object $entity): array;
    
    public function decode(array $row): object;
}

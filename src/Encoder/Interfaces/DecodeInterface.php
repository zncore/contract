<?php

namespace ZnCore\Contract\Encoder\Interfaces;

interface DecodeInterface
{

    /**
     * Декодирование данных
     * 
     * @param mixed $encodedData Закодированные данные
     * @return mixed
     */
    public function decode($encodedData);

}

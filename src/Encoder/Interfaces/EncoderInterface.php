<?php

namespace ZnCore\Contract\Encoder\Interfaces;

/**
 * Возможность кодирования/декодирования данных
 * 
 * Другими словами: сериализация/десериализация данных
 */
interface EncoderInterface
{

    /**
     * Кодирование данных
     * @param $data
     * @return mixed
     */
    public function encode($data);

    /**
     * Декодирование данных
     * @param $encodedData
     * @return mixed
     */
    public function decode($encodedData);
}

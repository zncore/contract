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
     *
     * @param $data Исходные данные
     * @return mixed
     */
    public function encode($data);

    /**
     * Декодирование данных
     * 
     * @param $encodedData Закодированные данные
     * @return mixed
     */
    public function decode($encodedData);
}

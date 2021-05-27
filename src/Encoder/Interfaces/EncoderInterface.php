<?php

namespace ZnCore\Contract\Encoder\Interfaces;

interface EncoderInterface
{

    public function encode($data);

    public function decode($encodedData);
}

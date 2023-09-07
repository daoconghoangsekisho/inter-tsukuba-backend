<?php


namespace Src\Common\Domain\Model;


abstract class Model
{
    abstract public function toArray(): array;
}

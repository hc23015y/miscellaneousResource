<?php
/**
source: http://asika.windspeaker.co/post/3502-strong-php-1-defensive-programming

這是一個連送進 foreach 都不會炸掉的 NullObject。
**/
class NullObject implement IteratorAggregate
{
    public function __get($name)
    {
        return null;
    }

    public function __set($name)
    {
    }

    public function __call($name, $args)
    {
        return null;
    }

    public function isNull()
    {
        return true;
    }

    public function getItrator()
    {
        return new ArrayIterator(array());
    }
}
?>
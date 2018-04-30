<?php
namespace Bregananta\Laramootaco\Exceptions;

class MootaConfigEmptyException extends \Exception
{
    protected $key;

    public function __construct ($message = null, $code)
    {
        $this->key = $code;
        $this->message = "The config with key: `{$this->key}` is empty";
    }
}

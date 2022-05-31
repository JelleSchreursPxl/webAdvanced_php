<?php namespace model;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use Throwable;

class ModelException extends \Exception
{
  public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
  {
    parent::__construct($message, $code, $previous);
  }
}
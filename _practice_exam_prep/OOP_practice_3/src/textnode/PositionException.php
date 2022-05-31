<?php

namespace textnode;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use Throwable;

class PositionException extends \Exception
{
  public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
  {
    parent::__construct($message, $code, $previous);
  }

  public function __toString(): string
  {
    parent::__toString();
  }
}
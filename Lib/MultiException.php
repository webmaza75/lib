<?php

namespace Lib;

/**
 * Class MultiException
 * @package Lib
 */
class MultiException extends \Exception
    implements \ArrayAccess, \Iterator
{
    use TCollection;
}
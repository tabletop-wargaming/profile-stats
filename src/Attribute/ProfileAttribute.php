<?php

namespace TabletopWargaming\Profile\Attribute;

use TabletopWargaming\Profile\Attribute;

final class ProfileAttribute implements Attribute
{
    private $name;

    private $code;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    public function name()
    {
        return $this->name;
    }

    public function code()
    {
        return $this->code;
    }

    public function __toString()
    {
        return $this->code();
    }
}

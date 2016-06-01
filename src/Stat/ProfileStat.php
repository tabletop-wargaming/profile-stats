<?php

namespace TabletopWargaming\Profile\Stat;

use TabletopWargaming\Profile\Attribute;
use TabletopWargaming\Profile\Stat;

final class ProfileStat implements Stat
{
    private $attribute;

    private $value;

    public function __construct(Attribute $attribute, $value)
    {
        $this->attribute = $attribute;
        $this->value = $value;
    }

    public function val()
    {
        return $this->value;
    }

    public function attr()
    {
        return $this->attribute;
    }

    public function is(Attribute $attr)
    {
        return ($this->attr() === $attr);
    }
}

<?php

namespace TabletopWargaming\Profile;

use TabletopWargaming\Profile\Attribute;

interface Stat
{
    public function val();

    public function attr();

    public function is(Attribute $attribute);
}

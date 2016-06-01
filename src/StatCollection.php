<?php

namespace TabletopWargaming\Profile;

use \ArrayAccess;
use TabletopWargaming\Profile\Attribute;

interface StatCollection extends ArrayAccess
{
    public function statFor(Attribute $attribute);
}

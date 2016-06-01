<?php

namespace TabletopWargaming\Profile;

interface Attribute
{
    public function name();

    public function code();

    public function __toString();
}

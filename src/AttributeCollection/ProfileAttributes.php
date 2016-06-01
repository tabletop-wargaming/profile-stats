<?php

namespace TabletopWargaming\Profile\AttributeCollection;

use ArrayObject;
use TabletopWargaming\Profile\Attribute;
use TabletopWargaming\Profile\AttributeCollection;

class ProfileAttributes implements AttributeCollection
{
    private $attributes;

    public function __construct(array $attributes = array())
    {
        $this->attributes = new ArrayObject();

        foreach ($attributes as $key => $attr) {
          $this->addAttribute($attr);
        }
    }

    public function offsetExists($code)
    {
        return $this->attributes->offsetExists($code);
    }

    public function offsetGet($code)
    {
        return $this->attributeByCode($code);
    }

    public function offsetSet($code, $attribute)
    {

    }

    public function offsetUnset($code)
    {

    }

    public function attributeByCode($code)
    {
        return $this->attributes->offsetGet($code);
    }

    private function addAttribute(Attribute $attr)
    {
        $this->attributes->offsetSet($attr->code(), $attr);
    }
}

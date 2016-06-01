<?php

namespace spec\TabletopWargaming\Profile\AttributeCollection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use TabletopWargaming\Profile\Attribute;

class ProfileAttributesSpec extends ObjectBehavior
{

    function it_returns_an_attribute_by_code(Attribute $attr)
    {
        $code = 'WS';
        $attr->code()->willReturn($code);
        $this->beConstructedWith(array($attr));
        $this->attributeByCode($code)->shouldReturn($attr);
    }

    function it_behaves_like_an_array(Attribute $attr1, Attribute $attr2)
    {
        $this->beConstructedWith(array($attr1, $attr2));
        $code = 'T';
        $attr2->code()->willReturn($code);
        $this[$code]->shouldReturn($attr2);
    }
}

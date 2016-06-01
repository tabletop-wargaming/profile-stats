<?php

namespace spec\TabletopWargaming\Profile\Stat;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use TabletopWargaming\Profile\Attribute;

class ProfileStatSpec extends ObjectBehavior
{
    private $value = 15;

    function let(Attribute $attribute)
    {
      $this->beConstructedWith($attribute, $this->value);
    }

    function it_has_a_value()
    {
        $this->val()->shouldReturn($this->value);
    }

    function it_has_an_attribute($attribute)
    {
      $this->attr()->shouldReturn($attribute);
    }

    function it_returns_true_if_it_is_of_type($attribute)
    {
      $this->is($attribute)->shouldReturn(true);
    }

    function it_returns_false_if_it_is_not_of_type(Attribute $attr)
    {
      $this->is($attr)->shouldReturn(false);
    }
}

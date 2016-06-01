<?php

namespace spec\TabletopWargaming\Profile\Attribute;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProfileAttributeSpec extends ObjectBehavior
{
    private $name = 'Close Combat';

    private $code = 'CC';

    function let()
    {
        $this->beConstructedWith(
            $this->name,
            $this->code
        );
    }

    function it_has_a_name()
    {
        $this->name()->shouldReturn($this->name);
    }

    function it_is_has_a_code()
    {
        $this->code()->shouldReturn($this->code);
    }

    function it_renders_as_its_code()
    {
        $this->__toString()->shouldReturn($this->code);
    }
}

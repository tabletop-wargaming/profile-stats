<?php

namespace spec\TabletopWargaming\Profile\StatCollection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use TabletopWargaming\Profile\Attribute;
use TabletopWargaming\Profile\Stat;

class ProfileStatsSpec extends ObjectBehavior
{
    function let(
        Attribute $attrCC,
        Attribute $attrBS,
        Stat $statCC,
        Stat $statBS
    ) {
        $statCC->attr()->willReturn($attrCC);
        $statBS->attr()->willReturn($attrBS);
        $this->beConstructedWith(array($statCC, $statBS));
    }

    function it_returns_a_stat_by_attribute($attrCC, $statCC)
    {
        $this->statFor($attrCC)->shouldReturn($statCC);
    }

    function it_is_iterable(Attribute $attrBS, $statBS)
    {
        $this[$attrBS]->shouldReturn($statBS);
    }

    function it_returns_a_new_version_of_itself_when_you_add_an_attribute(
        Attribute $attr,
        Stat $stat
    ) {
        //$stat->attr()->willReturn($attr);
        //$this->offsetSet($attr, $stat)->shouldBeAnInstanceOf('TabletopWargaming\Profile\StatCollection');
    }

}

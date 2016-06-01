<?php

namespace TabletopWargaming\Profile\StatCollection;

use TabletopWargaming\Profile\Attribute;
use TabletopWargaming\Profile\Stat;
use TabletopWargaming\Profile\StatCollection;

final class ProfileStats implements StatCollection
{
    private $stats;

    public function __construct(array $stats = array())
    {
        $this->stats = new \SplObjectStorage;

        foreach ($stats as $stat) {
          $this->addStat($stat);
        }
    }

    public function statFor(Attribute $attribute)
    {
        return $this->stats->offsetGet($attribute);
    }

    public function offsetGet($attr)
    {
        return $this->statFor($attr);
    }

    public function offsetExists($attr)
    {
        return $this->stats->contains($attr);
    }

    public function offsetSet($attr, $stat)
    {
        $stats = $this->stats();
        $stats[] = $stat;
        
        return new self($stats);
    }


    public function offsetUnset($attr)
    {

    }

    private function addStat(Stat $stat)
    {
        $this->stats->attach($stat->attr(), $stat);
    }

    private function stats()
    {
        $stats = [];
        foreach ($this->stats as $attr => $stat) {
          $stats[] = $stat;
        }
        return $stats;
    }

}

<?php
declare(strict_types=1);

namespace Libraries;

// There are no errors when IterableAggregate is directly implemented,
// the bug only occurs implementing interface which extends IterableAggregate.
class Collection implements CollectionInterface
{
    public function getIterator()
    {
        return new \EmptyIterator();
    }
}

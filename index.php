<?php
declare(strict_types=1);

/**
 * corresponds to IterableAggregate
 * @template TKey
 * @template TValue
 */
interface CollectionInterface {}

// Library like Illuminate\Support\Collection, excluded from analyze
// @phpstan-ignore-next-line
class Collection implements CollectionInterface {}

/**
 * @template TKey
 * @template TValue
 * @implements CollectionInterface<TKey, TValue>
 */
class ExtendedCollection implements CollectionInterface {}

class Announcement {}

/**
 * @extends ExtendedCollection<int, Announcement>
 */
class Announcements extends ExtendedCollection {}

/** @var Announcements */
$announcements = [];

<?php
declare(strict_types=1);

use Illuminate\Support\Collection;

class Announcement {}

/**
 * @extends Collection<int, Announcement>
 */
class Announcements extends Collection {}

abstract class AnnouncementsStore {
    abstract public static function get(): Announcements;
}

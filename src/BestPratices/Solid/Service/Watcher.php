<?php

namespace Lucasjb\AluraClassBackend\BestPratices\Solid\Service;

use Lucasjb\AluraClassBackend\BestPratices\Solid\Model\Watchable;

class Watcher
{
    // Use abstraction to simplify the usage of Classes
    public function watchWatchables(Watchable $watchable)
    {
        $watchable->watch();
    }

    // public function watchCourse(Course $course)
    // {
    //     $course->watch();
    // }

    // public function assisteAluraMais(AluraPlus $aluraPlus)
    // {
    //     $aluraPlus->watch();
    // }
}
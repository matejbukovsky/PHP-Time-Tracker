<?php

namespace Tracker;

/**
 * @author Matej Bukovsky <matejbukovsky@gmail.com>
 */
class TimeTracker
{
    private $start;

    public function __construct() {
        $this->start = microtime(true);
    }

    public function reset() {
        $this->start = microtime(true);
    }

    public function segs() {
        return microtime(true) - $this->start;
    }

    public function getTime() {
        $segs = $this->segs();
        $days = floor($segs / 86400);
        $segs -= $days * 86400;
        $hours = floor($segs / 3600);
        $segs -= $hours * 3600;
        $mins = floor($segs / 60);
        $segs -= $mins * 60;
        $microsegs = ($segs - floor($segs)) * 1000;
        $segs = floor($segs);

        return
            (empty($days) ? "" : $days . "d ") .
            (empty($hours) ? "" : $hours . "h ") .
            (empty($mins) ? "" : $mins . "m ") .
            $segs . "s " .
            $microsegs . "ms";
    }

}

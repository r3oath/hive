<?php

namespace R\Hive\Contracts\Observers;

interface GenericObserver
{
    /**
     * A unique string-serial that identifies this observer.
     * eg: "notify_book_authors"
     * @return string The serial.
     */
    public function serial();
}

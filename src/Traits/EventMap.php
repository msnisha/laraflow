<?php

namespace msnisha\Laraflow\Traits;

use msnisha\Laraflow\Events\LaraflowEvents;
use msnisha\Laraflow\Listeners\LaraflowHistoryManager;

trait EventMap
{
    /**
     * All of the Laraflow event / listener mappings.
     *
     * @var array
     */
    protected $events = [
        LaraflowEvents::POST_TRANSITION => [
            LaraflowHistoryManager::class,
        ],

        LaraflowEvents::PRE_TRANSITION => [
            //
        ],

        LaraflowEvents::CAN_TRANSITION => [
            //
        ]
    ];
}

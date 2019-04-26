<?php

namespace msnisha\Laraflow;

use msnisha\Laraflow\Events\LaraflowTransitionEvents;

interface LaraflowCallbackInterface
{
    public function handle(LaraflowTransitionEvents $event);
}

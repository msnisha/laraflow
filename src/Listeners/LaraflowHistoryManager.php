<?php

namespace msnisha\Laraflow\Listeners;

use msnisha\Laraflow\Events\LaraflowTransitionEvents;

class LaraflowHistoryManager
{
    /**
     * Handle the event.
     *
     * @param LaraflowTransitionEvents $event
     * @return void
     */
    public function handle(LaraflowTransitionEvents $event)
    {
        $sm = $event->getStateMachine();
        $model = $sm->getObject();

        $model->addHistoryLine([
            'transition' => $event->getTransition(),
            'to' => $sm->getActualStep()
        ]);
    }
}

<?php

use App\Events\RenderingHeader;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->listen(RenderingHeader::class, function ($event) {
        $html = view('BigCake\pwa_manifest::snippet', [
            'location' => option('Location'),
        ])->render();
        $event->addContent($html);
    });
};

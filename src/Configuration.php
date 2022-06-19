<?php

namespace BigCake\pwa_manifest;

use App\Services\OptionForm;
use Option;

class Configuration
{
    public function render()
    {
        $form = Option::form('PWA Manifest', 'Location', function (OptionForm $form) {
            $form->text('location', trans('BigCake\pwa_manifest::config.location'));
        })->handle();

        return view('BigCake\pwa_manifest::config', ['form' => $form]);
    }
}

<?php

namespace EtsvThor\LaravelLivewireForms\Http\Controllers;

class FileUploadController
{
    public function __invoke()
    {
        return call_user_func([request()->input('component'), 'fileUpload']);
    }
}

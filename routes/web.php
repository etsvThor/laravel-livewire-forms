<?php
use \EtsvThor\LaravelLivewireForms\Controllers\FileUploadController;

Route::group(['middleware' => 'web'], function () {
    Route::post('/laravel-livewire-forms/file-upload', FileUploadController::class)
        ->name('laravel-livewire-forms.file-upload');
});

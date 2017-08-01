<?php

Route::middleware(['web', 'auth', 'core'])
    ->namespace('LaravelEnso\DocumentsManager\app\Http\Controllers')
    ->group(function () {
        Route::prefix('core/documents')->as('core.documents.')
            ->group(function () {
                Route::post('upload/{type}/{id}', 'DocumentController@store')
                    ->name('upload');
                Route::get('show/{document}', 'DocumentController@show')
                    ->name('show');
                Route::get('download/{document}', 'DocumentController@download')
                    ->name('download');
                Route::delete('destroy/{document}', 'DocumentController@destroy')
                    ->name('destroy');
                Route::get('/{type}/{id}', 'DocumentController@index')
                    ->name('index');
            });
    });

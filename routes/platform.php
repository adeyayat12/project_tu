<?php

use App\Orchid\Screens\TaskScreen;
use Tabuna\Breadcrumbs\Trail;

Route::screen('task', TaskScreen::class)
    ->name('platform.task')
    ->breadcrumbs(function (Trail $trail){
        return $trail
            ->parent('platform.index')
            ->push('Task');
    });

?>

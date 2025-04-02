<?php
// Controllers
use App\Http\Controllers\Modules\ChatController;

// Packages
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'chat'],function(){
    Route::get('/',[ChatController::class,'index'])->name('chat.index');
});


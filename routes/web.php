<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/menu', function () {
    $mealPlans = [
        (object)[ 'name' => 'Diet Plan', 'price' => 30000, 'description' => 'Menu seimbang untuk diet sehat.', 'image' => 'diet.png' ],
        (object)[ 'name' => 'Protein Plan', 'price' => 40000, 'description' => 'Tinggi protein untuk olahraga dan otot.', 'image' => 'protein.png' ],
        (object)[ 'name' => 'Royal Plan', 'price' => 60000, 'description' => 'Paket lengkap dengan kualitas premium.', 'image' => 'royal.png' ],
    ];
    return view('menu', compact('mealPlans'));
});

Route::get('/subscription', function () {
    return view('subscription');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

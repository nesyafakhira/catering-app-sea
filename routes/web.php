<?php

use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/debug-auth-config', function () {
    dd(config('auth'));
});

Route::get('/', function () {
    $testimonials = Testimonial::latest()->take(6)->get();
    return view('index', compact('testimonials'));
});

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/menu', function () {
    $mealPlans = [
        (object)[ 'name' => 'Diet Plan', 'price' => 30000, 'description' => 'Menu seimbang untuk diet sehat.', 'image' => 'diet.png' ],
        (object)[ 'name' => 'Protein Plan', 'price' => 40000, 'description' => 'Tinggi protein untuk olahraga dan otot.', 'image' => 'protein.png' ],
        (object)[ 'name' => 'Royal Plan', 'price' => 60000, 'description' => 'Paket lengkap dengan kualitas premium.', 'image' => 'royal.png' ],
    ];
    return view('menu', compact('mealPlans'));
});


Route::middleware(['auth'])->group(function () {
    Route::get('/subscribe', [SubscriptionController::class, 'create'])->name('subscribe.form');
    Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');

    Route::get('/my-subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
});


// Route::get('/subscribe', [SubscriptionController::class, 'create'])->name('subscribe.form');
// Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');


Route::post('/testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

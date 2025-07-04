<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PartsController;
use App\Http\Controllers\ServiceController;
use PHPUnit\Architecture\Services\ServiceContainer;

use function Pest\Laravel\get;

Route::get('/', function () {
return view('welcome');
});
Route::get('/index', function () {
    return view('home.index');
});
Route::get('/cars', function () {
    return view('home.cars');
});

route::get('products',[HomeController::class, 'products'])-> middleware(['auth', 'admin']);

       

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('home.index',[IndexController::class, 'index'])->name('index');
route::get('home.cars',[CarsController::class, 'cars'])->name('cars');
route::get('home.about',[AboutController::class, 'about'])->name('about');
route::get('home.parts',[PartsController::class, 'parts'])->name('parts');
route::get('home.blog',[BlogController::class, 'blog'])->name('blog');
route::get('home.service',[ServiceController::class, 'service'])->name('service');

// code for add to cart page

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
use Faker\Guesser\Name;
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products-list', [ProductController::class, 'index']);  
Route::get('/cart-list', [ProductController::class, 'movieCart']);
Route::post('add-to-cart', [ProductController::class, 'addMovieToCart'])->name('add-product-to-rent-car');
Route::delete('/delete-cart-item', [ProductController::class, 'deleteItem'])->name('delete.cart.item');


//stripe payment system

route::post('/session', [StripeController::class,'session'])->name('session');
route::get('/success', [StripeController::class, 'success'])->name('success');
route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
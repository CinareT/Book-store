<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\SearchController;
use App\Http\Controllers\front\ShoppingCartController;
use App\Http\Controllers\front\CheckoutController;
use App\Http\Controllers\front\UserController;
use App\Http\Controllers\front\CurrencyController;
use App\Http\Controllers\front\ProductController;
use App\Http\Controllers\front\ShopController;
use App\Http\Controllers\front\LoginController;
use App\Http\Controllers\front\AccountController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\FaqController;
use App\Http\Controllers\front\OrderController;
use App\Http\Controllers\front\WishlistController;
use App\Http\Controllers\front\RegistrationController;
use App\Http\Controllers\front\LogoutController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\AdminProductsController;
use App\Http\Controllers\admin\BrandsController;
use App\Http\Controllers\admin\AdminContactController;

use App\Http\Controllers\admin\LanguageLineController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\MailController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale() . '', 'as' => 'client.'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');
    Route::get('/shop/{slug?}', [ShopController::class, 'index'])->name('shop');
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::post('/order', [OrderController::class, 'placeOrder'])->name('order');
    // Route::get('/bestsellers', [OrderController::class, 'getBestsellers'])->name('client.bestsellers');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    //Route::get('/client/home', 'HomeController::class')->name('client.home');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    

}
);

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    // Diğer route tanımları...

    Route::post('update-password', [UserController::class, 'updatePassword'])->name('user.updatePassword');
});


    Route::group(['middleware' => 'checkAuth', 'prefix' => '', 'as' => 'auth.'], function(){
        Route::get('/signin', [LoginController::class, 'index'])->name('signin');
        Route::post('/login', [LoginController::class, 'login'])->name('login');


        Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
        Route::post('/register', [RegistrationController::class, 'register'])->name('register');



    });


  
    // Route::group([ 'prefix' => LaravelLocalization::setLocale() . '/store', 'as' => 'store.'], function() {
        
    // });



      
    Route::group([ 'prefix' => LaravelLocalization::setLocale() . '/store', 'middleware'=>['auth'], 'as' => 'store.'], function(){
        
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('/categories', CategoriesController::class);
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        
        Route::resource('/products', AdminProductsController::class);
        Route::get('/products/add_images/{id}', [AdminProductsController::class, 'products_add_image'])->name('products_add_image');
        Route::post('/products/store_images/{id}', [AdminProductsController::class, 'products_store_image'])->name('products_store_image');
        Route::get('/product_images/{id}', [AdminProductsController::class, 'product_images'])->name('product_images');
        Route::get('/images/main{id}/{product_id}', [AdminProductsController::class, 'add_main_image'])->name('add_main_image');

        
        Route::resource('/brands', BrandsController::class);
    
        Route::resource('/contacts', AdminContactController::class);
        Route::get('/contacts/create', [AdminContactController::class, 'create'])->name('contacts.create');
        Route::get('/contacts/{id}/edit', [AdminContactController::class, 'edit'])->name('contacts.edit');
        Route::patch('/contacts/{id}', [AdminContactController::class, 'update'])->name('contacts.update');
    
        Route::post('/contacts', [AdminContactController::class, 'store'])->name('contacts.store');
    

    });

    Route::middleware(['web', 'guest'])->controller(AuthController::class)->group(function(){
        Route::get('/store/adminLogin', 'index')->name('adminLogin');
       Route::post('/store/adminLogin', 'auth')->name('auth');
    });

   //Route::any('/wishlist/add',[WishlistController::class,'addProductToWishlist'])->name('wishlist.store');


Route::get('/wishlist/{id}', [WishlistController::class, 'index'])->name('wishlist-add');
Route::get('/remove-wishitem/{id}', [WishlistController::class, 'remove'])->name('wishitem-remove');

    Route::prefix('language-line')->controller(LanguageLineController::class)->group(function () {
        Route::get('/', 'index')->name('languageLine.index');
        Route::get('/create', 'create')->name('languageLine.create');
        Route::post('/store', 'store')->name('languageLine.store');
        Route::get('/{languageLine}', 'destroy')->name('languageLine.destroy');
        Route::get('/{languageLine}/edit', 'edit')->name('languageLine.edit');
        Route::put('/{languageLine}', 'update')->name('languageLine.update');
    });
    
  //  Route::get('/hi', [SayHelloController::class, 'index']);

  Route::get('/client', [ContactController::class, 'index']);

  Route::post('/send', [MailController::class, 'sendMail'])->name('sendMail');

Route::get('send/email', function(){
    $send_mail = 'cinare@gmail.com';

    dispatch(new App\Jobs\SendEmailQueueJob($send_mail));
    dispatch(new App\Jobs\SendEmailQueueJob('tapdiqlicinre32@gmail.com'));
    dispatch(new App\Jobs\SendEmailQueueJob('test1@gmail.com'));
    dispatch(new App\Jobs\SendEmailQueueJob('test2@gmail.com'));
    dispatch(new App\Jobs\SendEmailQueueJob('tes3@gmail.com'));

    dd('sent');

});
Route::get("/add-to-cart{id}", [ShoppingCartController::class, "add"])->name("add");
Route::get('/cart/increase/{rowId}', [ShoppingCartController::class, 'increase'])->name('cart.increase');

Route::get("/remove-from-cart{id}", [ShoppingCartController::class, "remove"])->name("remove");
Route::get("/clear-cart", [ShoppingCartController::class, "destroy"])->name("clear");
Route::get("/currency", [currencyController::class, "index"])->name("currency");
// routes/web.php

Route::post('/cart/add', 'CartController@addToCart')->name('cart.add');
// routes/web.php

// Route::get('/cart/remove/{id}', 'ShoppingCartController@remove')->name('cart.remove');
Route::get("/cart/remove/{id}", [ShoppingCartController::class, "remove"])->name("cart.remove");


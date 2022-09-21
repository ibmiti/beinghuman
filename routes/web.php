<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\RecommendedReadingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\UsersController;
// use App\Http\Controllers\ProductsController; // remove after store work has been completed
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

// SUBSCRIPTION ROUTES ( COMMUNICATED WITH MAILCHIMP )
Route::post('newsletter', function(){
    request()->validate(['email' => 'required|email']);
    $mailchimp = new \MailchimpMarketing\ApiClient();
    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us14'
    ]);

    try {
    $response = $mailchimp->lists->addListMember('9a965b44ed', [
        'email_address' => request('email'),
        'status' => 'subscribed'
    ]);
    } catch (\Exception $e) {
        throw \Illuminate\Validation\ValidationException::withMessages(
            [
                'email' => 'This email could not be added to our newsletter list. or you are already subscribed'
            ]

        );
    }
    return redirect('/')->with('success', 'You are now signed up for our newsletter');
});
// END OF SUBSCRIPTION RELATED ROUTES


Route::get('/', function () {
    return view('welcome');
});
/*
|-----------------------------------------------------------------
|  Admin + Auth related routes
|-----------------------------------------------------------------
*/
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// AUTH/ADMIN RELATED ROUTES
Route::get('dashboard', [SessionsController::class, 'dashboard'])->middleware('auth');


/*
|-----------------------------------------------------------------
|   related routes
|-----------------------------------------------------------------
*/
Route::get('/about', [ArticlesController::class, 'about']);

/*
|--------------------------------------------------------------------------
| Contact related routes
|--------------------------------------------------------------------------
*/
Route::get('/contact', [ContactController::class, 'show']);

/*
|--------------------------------------------------------------------------
| RecommendedReads related routes ( index routes )
|--------------------------------------------------------------------------
*/
Route::get('/recommended-reads', [RecommendedReadingController::class, 'index']);
Route::get('/children-books', [ArticlesController::class, 'showAllChildrenBookArticles']); // TODO: switch to using RecommendedArticlesController::class later.
Route::get('/fiction', [ArticlesController::class, 'showAllFictionArticles']);
Route::get('/non-fiction', [ArticlesController::class, 'showAllNonFictionArticles']); // error 1. -> this function needs to send all. related articles to nonFiction.blade.
Route::get('/stem', [ArticlesController::class, 'showAllStemArticles']);
Route::get('/literature-and-arts', [ArticlesController::class, 'showAllLiteraryAndArtsArticles']);

// Show related routes
Route::get('/children-books/{id}', [ArticlesController::class, 'showSingleArticle']);
Route::get('/fiction/{id}', [ArticlesController::class, 'showSingleArticle']);
Route::get('/non-fiction/{id}', [ArticlesController::class, 'showSingleArticle']);
Route::get('/stem/{id}', [ArticlesController::class, 'showSingleArticle']);
Route::get('/literature-and-arts/{id}', [ArticlesController::class, 'showSingleArticle']);

/*
|------------------------------------------------------------------
| Article related routes
|------------------------------------------------------------------
*/
Route::get('articles/create', [ArticlesController::class, 'showAuthoringView']);
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles');
Route::post('/create-article', [ArticlesController::class, 'confirmAndCreateArticle']); //
Route::post('/update/{articleId}', [ArticlesController::class, 'update'])->name('update');

// show all available articles to edit
Route::get('/articles/edit/index', [ArticlesController::class, 'editSelection']);
// Route::get('/article', [ArticlesController::class, 'editSelection']); // returns view which allows user to select article type
Route::get('/deleteArticle/{articleId}', [ArticlesController::class,'destroy'])->name('deleteArticle');

// Edit article route
Route::get('edit/{articleId}',[ArticlesController::class, 'edit']);

/*
|------------------------------------------------------------------
| Baby Article related routes
|------------------------------------------------------------------
| will need to change some of these routes
*/
Route::get('/babies', [ArticlesController::class,'showAllBabyArticles'])->name('babies');
Route::get('/babyArticle/{babyArticleId}', [ArticlesController::class,'showSingleArticle']); // TODO: add this to all article types where not found.

// CRUD Related Routes
// Route::get('/createBabyArticle', [ArticlesController::class, 'createBaby']);
Route::get('/editBabyArticle/{babyArticleId}/edit', [ArticlesController::class, 'edit'])->name('editBaby');
Route::post('/updateBabyArticle', [ArticlesController::class, 'updateBaby'])->name('updateBabyArticle');
Route::get('/deleteBabyArticle/{babyArticleId}/delete', [ArticlesController::class, 'destroyBaby'])->name('deleteBabyArticle');

/*
|-----------------------------------------------------------------
| Health Article related routes
|-----------------------------------------------------------------
 */
Route::get('/health', [ArticlesController::class, 'showAllHealthArticles'])->name('Health');
Route::get('/healthArticle/{healthArticleId}', [ArticlesController::class,'showSingleArticle']);

// CRUD Related Routes
// Route::get('/createchildArticle', [ArticlesController::class, 'create'])->name('createChildArticle ');
Route::post('/storeChildArticle', [ArticlesController::class, 'store'])->name('storeChildArticle');
Route::get('/editChildArticle/{childArticleId}/edit', [ArticlesController::class, 'edit']);
Route::post('/updateChildArticle', [ArticlesController::class, 'update'])->name('updateChildArticle');
Route::get('/deleteChildArticle/{childId}/delete', [ArticlesController::class, 'destroy'])->name('deleteChildArticle');

/*
|------------------------------------------------------------------
| Joyful Article related routes
|------------------------------------------------------------------
|
*/
Route::get('/joyful', [ArticlesController::class, 'showAllJoyfulArticles'])->name('joyful');
Route::get('/joyfulArticle/{joyfulArticleId}', [ArticlesController::class, 'showSingleArticle']);

/*
|------------------------------------------------------------------
| Human Article related routes
|------------------------------------------------------------------
|
*/
Route::get('/human', [ArticlesController::class, 'showAllHumanArticles'])->name('human');
Route::get('/humanArticle/{humanArticleId}', [ArticlesController::class, 'showSingleArticle']);

/*
|------------------------------------------------------------------
| Media related routes
|------------------------------------------------------------------
|
*/
Route::get('/upload', [MediaController::class, 'show']);
Route::post('/upload_media', [MediaController::class, 'upload'])->name('upload');

/*
|------------------------------------------------------------------
| video related routes
|------------------------------------------------------------------
|
*/
Route::get('/videos', [VideoController::class, 'show']);


/*
|-------------
| User routes
|
*/
Route::get('/auth/admin/users', [UsersController::class, 'index']);
Route::post('/permissions/store', [UsersController::class, 'createRole']); // storing role in table







/*
|-------------
| Product/Ecommerce routes
|
*/
Route::get('/auth/admin/ecommerce/admin', [ProductsController::class, 'showAdminView']);
Route::get('/auth/admin/ecommerce/create', [ProductController::class, 'create']); // show all products.
Route::post('/auth/admin/ecommerce/store', [ProductController::class, 'store']);
Route::get("/auth/admin/ecommerce/view/update", [ProductController::class, 'returnUpdateProductView']);
Route::post("/auth/admin/ecommerce/update", [ProductController::class, 'updateProduct']);
Route::get('/auth/admin/ecommerce/view/delete', [ProducController::class, 'returnDeleteProductView']);
Route::post('/auth/admin/ecommerce/delete', [ProductController::class, 'deleteProduct']);


// //  TODO : remove any unused routes from belows list
// Route::get('ecommerce/products', [ProductsController::class, 'index']); // showing all products




    // ECOMMERCE SPECIFIC ROUTES
Route::get('ecommerce/products', [ProductController::class, 'productList'])->name('products.list');
Route::get('/product/{id}', [CartController::class, 'showProduct']); // show single product, can now add product to cart from here.
    // CART ROUTES
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    // CHECKOUT ROUTES
Route::get('checkout', [CartController::class, 'checkoutCreate']);

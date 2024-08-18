<?php use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Blog Routes
Route::get('/load-more-blogs', [FrontendController::class, 'loadMore'])->name('blogs.loadMore');
Route::get('/reset-blogs', [FrontendController::class, 'initial'])->name('blogs.initial');

Route::get('/blogss', [FrontendController::class, 'index']);

Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/blogs/create', [BlogController::class, 'create']);
Route::post('/blogs/store', [BlogController::class, 'store']);
Route::get('/blogs/delete/{id}', [BlogController::class, 'destroy']);
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit']);
Route::put('/blogs/update/{id}', [BlogController::class, 'update']);
// Display a single blog post
Route::get('/blog/{id}', [BlogController::class, 'display'])->name('blog.display');




// Category Routes
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);

Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']);
Route::post('/category/store', [CategoryController::class, 'store']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']); // Changed from POST to PUT
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');


Route::get('/test', [CategoryController::class, 'index'])->middleware(['auth', 'verified']);





// Contact Page Route
Route::get('contact', function () {
    return view('frontend.contact');
});

// Dashboard Route
Route::get('dashboard', function () {
    return 'Login successfully'; 
});

// Test Page for Logged-In Users
// Route::get('test', function () {
//     return view('backend.category.index');
// })->middleware(['auth', 'verified']);

// About Page Route
Route::get('about', function () {
    return view('backend.pages.about');
});

// Include additional route files
require __DIR__.'/auth.php';
require __DIR__.'/api.php';
?>
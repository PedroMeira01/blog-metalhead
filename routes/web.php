<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('home');
// Route::get('/posts/{id}', PostController::class, 'show')->name('showPost');

// Route::get('posts/create', PostController::class, 'create')->name('createPost');
// Route::post('posts', PostController::class, 'store')->name('storePost');
// Route::get('posts/{id}/edit', PostController::class, 'edit')->name('editPost');
// Route::put('posts/{id}', PostController::class, 'update')->name('updatePost');
// Route::delete('posts/{id}', PostController::class, 'delete')->name('deletePost');

// Route::get('/categories', [CategoryController::class, 'index'])->name('listCategories');
// Route::get('/categories/{id}', CategoryController::class, 'show')->name('showCategory');
// Route::get('categories/create', CategoryController::class, 'create')->name('createCategory');
// Route::post('categories', CategoryController::class, 'store')->name('storeCategory');
// Route::get('categories/{id}/edit', CategoryController::class, 'edit')->name('editCategory');
// Route::put('categories/{id}', CategoryController::class, 'update')->name('updateCategory');
// Route::delete('categories/{id}', CategoryController::class, 'delete')->name('deleteCategory');

// Route::get('/tags', [TagController::class, 'index'])->name('listTags');
// Route::get('/tags/{id}', TagController::class, 'show')->name('showTag');
// Route::get('tags/create', TagController::class, 'create')->name('createTag');
// Route::post('tags', TagController::class, 'store')->name('storeTag');
// Route::get('tags/{id}/edit', TagController::class, 'edit')->name('editTag');
// Route::put('tags/{id}', TagController::class, 'update')->name('updateTag');
// Route::delete('tags/{id}', TagController::class, 'delete')->name('deleteTag');

// Route::get('/comments', [CommentController::class, 'index'])->name('listComments');
// Route::get('/comments/{id}', CommentController::class, 'show')->name('showComment');
// Route::get('comments/create', CommentController::class, 'create')->name('createComment');
// Route::post('comments', CommentController::class, 'store')->name('storeComment');
// Route::get('comments/{id}/edit', CommentController::class, 'edit')->name('editComment');
// Route::put('comments/{id}', CommentController::class, 'update')->name('updateComment');
// Route::delete('comments/{id}', CommentController::class, 'delete')->name('deleteComment');







<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// ROUTES FOR Category //

Route::get('categories',[
    'uses' => 'CategoryController@index',
    'as' => 'categ.list'
]);


Route::get('categories/{categoryId}/mangas',[
    'uses' => 'CategoryController@show',
    'as' => 'categ.manga.single'
]);


Route::post('categories/post',[
    'uses' => 'CategoryController@store',
    'as' => 'categ.manga.post'
]);

Route::put('categories/{categoryId}',[
    'uses' => 'CategoryController@update',
    'as' => 'categ.manga.put'
]);


Route::delete('categories/{categoryId}',[
    'uses' => 'CategoryController@destroy',
    'as' => 'categ.manga.delete'
]);

















// ROUTES FOR MANGA //

Route::get('mangas',[
    'uses' => 'MangaController@index',
    'as' => 'manga.list'
]);


Route::get('categories/{categoryId}/mangas',[
    'uses' => 'MangaController@index',
    'as' => 'manga.categ'
]);


Route::get('categories/{categoryId}/mangas/{mangaId}',[
    'uses' => 'MangaController@show',
    'as' => 'manga.categ.single'
]);


Route::post('categories/{categoryId}/mangas',[
    'uses' => 'MangaController@store',
    'as' => 'manga.categ.post'
]);

Route::put('categories/{categoryId}/mangas/{mangaId}',[
    'uses' => 'MangaController@update',
    'as' => 'manga.categ.put'
]);


Route::delete('categories/{categoryId}/mangas/{mangaId}',[
    'uses' => 'MangaController@destroy',
    'as' => 'manga.categ.delete'
]);
























// ROUTES FOR Chapter //


Route::get('categories/{categoryId}/mangas/{mangaId}/chapters',[
    'uses' => 'ChapterController@index',
    'as' => 'chapter.list'
]);


Route::get('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}',[
    'uses' => 'ChapterController@show',
    'as' => 'chapter.categ.single'
]);


Route::post('categories/{categoryId}/mangas/{mangaId}/chapters',[
    'uses' => 'ChapterController@store',
    'as' => 'chapter.categ.post'
]);

Route::put('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}',[
    'uses' => 'ChapterController@update',
    'as' => 'chapter.categ.put'
]);


Route::delete('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}',[
    'uses' => 'ChapterController@destroy',
    'as' => 'chapter.categ.delete'
]);











// ROUTES FOR Contentchap //


Route::get('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/contentchap',[
    'uses' => 'ContentchapController@index',
    'as' => 'contentchap.list'
]);


Route::get('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/contentchap/{contentchapId}',[
    'uses' => 'ContentchapController@show',
    'as' => 'contentchap.categ.single'
]);


Route::post('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/contentchap',[
    'uses' => 'ContentchapController@store',
    'as' => 'contentchap.categ.post'
]);

Route::put('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/contentchap/{contentchapId}',[
    'uses' => 'ContentchapController@update',
    'as' => 'contentchap.categ.put'
]);


Route::delete('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/contentchap/{contentchapId}',[
    'uses' => 'ContentchapController@destroy',
    'as' => 'contentchap.categ.delete'
]);
















// ROUTES FOR Comments //


Route::get('categories/{categoryId}/mangas/{mangaId}/comments',[
    'uses' => 'CommentController@index',
    'as' => 'comment.manga.list'
]);



Route::get('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/comments/{commentId}',[
    'uses' => 'CommentController@show',
    'as' => 'comment.chapter.single'
]);



Route::post('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/comments/{userId}',[
    'uses' => 'CommentController@store',
    'as' => 'comment.chapter.post'
]);



Route::put('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/comments/{commentId}/{userId}',[
    'uses' => 'CommentController@update',
    'as' => 'comment.chapter.put'
]);


Route::delete('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/comments/{commentId}',[
    'uses' => 'CommentController@destroychapter',
    'as' => 'comment.chapter.delete'
]);












// ROUTE FOR ROLES


Route::get('roles',[
    'uses' => 'RoleController@index',
    'as' => 'role.list'
]);


Route::get('roles/{roleId}',[
    'uses' => 'RoleController@show',
    'as' => 'role.single'
]);


Route::post('roles/post',[
    'uses' => 'RoleController@store',
    'as' => 'role.post'
]);

Route::put('roles/{roleId}/put',[
    'uses' => 'RoleController@update',
    'as' => 'role.put'
]);


Route::delete('roles/{roleId}/delete',[
    'uses' => 'RoleController@destroy',
    'as' => 'role.delete'
]);











// ROUTE FOR USERS


Route::get('users',[
    'uses' => 'UserController@index',
    'as' => 'user.list'
]);


Route::get('users/{userId}',[
    'uses' => 'UserController@show',
    'as' => 'user.single'
]);


Route::post('users/post',[
    'uses' => 'UserController@store',
    'as' => 'user.post'
]);

Route::put('users/{userId}/put',[
    'uses' => 'UserController@update',
    'as' => 'user.put'
]);


Route::delete('users/{userId}/delete',[
    'uses' => 'UserController@destroy',
    'as' => 'user.delete'
]);










// ROUTE FOR Likes


Route::get('likes/{likeId}',[
    'uses' => 'LikeController@index',
    'as' => 'Like.list'
]);


Route::get('likes/{likeId}',[
    'uses' => 'LikeController@show',
    'as' => 'Like.single'
]);


Route::post('categories/{categoryId}/mangas/{mangaId}/chapters/{chapterId}/comments/{userId}/likes',[
    'uses' => 'LikeController@store',
    'as' => 'Like.post'
]);

Route::put('likes/{likeId}/put',[
    'uses' => 'LikeController@update',
    'as' => 'Like.put'
]);


Route::delete('likes/likeId}/delete',[
    'uses' => 'LikeController@destroy',
    'as' => 'Like.delete'
]);






// Route Login / Register
Route::post('login',[
    'uses' => 'AuthController@login',
    'as' => 'login.post'
]);


Route::post('register',[
    'uses' => 'AuthController@register',
    'as' => 'Auth.post'
]);

// Route::middleware('auth:api')->
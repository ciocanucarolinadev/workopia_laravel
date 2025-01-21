<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
// use Illuminate\Http\Request;
// use Illuminate\Http\Response;

Route::get('/', [HomeController::class, 'index']);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);

// Route::get('/posts/{id}', function(string $id) {
//     return 'Post ' . $id;
// })->whereAlpha('id');

// Route::get('/posts/{id}/comments/{commentId}', function(string $id, string $commentId) {
//     return 'Post ' . $id . ' Comment ' . $commentId;
// });

// Route::get('/test', function() {
//     return response()->json(['name' => 'John Doe'])->cookie('name', 'Brad');
// });

// Route::get('/download', function() {
//     return response()->download(public_path('favicon.ico'));
// });

// Route::get('/read-cookie', function(Request $request) {
//     $cookieValue = $request->cookie('name');

//     return response()->json(['cookie' => $cookieValue]);
// });

// Route::get('/notfound', function() {
//     return response('Page Not Found', 404);
// });


// Route::get('/test', function(Request $request) {
//     return [
//         'method' => $request->method(),
//         'url' => $request->url(),
//         'path' => $request->path(),
//         'fullUrl' => $request->fullUrl(),
//         'ip' => $request->ip(),
//         'userAgent' => $request->userAgent(),
//         'header' => $request->header(),
//     ];
// });

// Route::get('/users', function(Request $request) {
//     return $request->except(['name']);
// });

// Route::any('/submit', function() {
//     return 'Submitted';
// });

// Route::get('/test', function() {
//     $url = route('jobs');
//     return "<a href='$url'>Click Here</a>";
// });

// Route::get('/api/users', function() {
//     return [
//         'name' => 'John Doe',
//         'email' => 'John@email.com'
//     ];
// });
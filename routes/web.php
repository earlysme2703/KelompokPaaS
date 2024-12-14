<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('/');

// routes/web.php
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('/aboutus');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/dashboard', function () {
    return redirect('/dashboard');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', function () {
    return redirect('/login');
});


// Route::get('/posts', [PostController::class, 'index']);

// Route::get('/about', function () {
//     $posts = Post::all(); // Mengambil semua data dari tabel 'posts'
//     return view('about', compact('posts')); // Mengarahkan ke 'about.blade.php'
// })->name('about.index');

// Route untuk menampilkan semua post
Route::get('/about', function () {
    $posts = Post::all(); // Mengambil semua data dari tabel 'posts'
    return view('about', compact('posts')); // Mengarahkan ke 'about.blade.php'
})->name('about.index');

// Route untuk menambah post baru (create)
Route::get('/create', function () {
    return view('create'); // Menampilkan form untuk membuat post baru
})->name('about.create');

// Route untuk menyimpan post baru (store)
Route::post('/about', function () {
    // Validasi dan simpan post baru
    request()->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    Post::create([
        'title' => request('title'),
        'content' => request('content'),
    ]);

    return redirect()->route('about.index');
})->name('about.store');

// Route untuk menghapus post
Route::delete('/about/{post}', function (Post $post) {
    $post->delete(); // Menghapus post
    return redirect()->route('about.index');
})->name('about.delete');

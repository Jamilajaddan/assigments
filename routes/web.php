<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Controllers\PostController;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\DivisionController;


Route::get('/book_list', function () {
    return view('create');
});

Route::post('/book_list', function (Request $request) {

    $request->validate([
        'book_title' => 'required|string|max:255',
        'book_price' => 'required|numeric|min:0',
        'author'     => 'required|string|max:255',
        'user_image' => 'nullable|image|max:2048',
    ]);

    $path = $request->hasFile('user_image')
        ? $request->file('user_image')->store('image', 'public')
        : null;

    Book::create([
        'book_title' => $request->book_title,
        'book_price' => $request->book_price,
        'author'     => $request->author,
        'user_image' => $path,
    ]);

    return "Book saved successfully!";
});

Route::get('/table', function () {
    $books = Book::all();
    return view('first', compact('books'));
});



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/division', [DivisionController::class, 'index']);
Route::post('/division', [DivisionController::class, 'divide']);

Route::get('/send-welcome', function () {

    $recipientEmail = 'qadirkhm941@gmail.com';
    $name = 'jamila jaddan';

    Mail::to($recipientEmail)->send(new WelcomeEmail($name));

    return 'Email successfully sent!';
});
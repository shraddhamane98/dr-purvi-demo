<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/clear', function () {
    //\Artisan::call('key:generate');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

// service page
Route::get('/physiotherapy', function () {
    return view('services.physiotherapy');
})->name('physiotherapy');

Route::get('/rehabilitation', function () {
    return view('services.rehabilitation');
})->name('rehabilitation');

Route::get('/electrotherapy', function () {
    return view('services.electrotherapy');
})->name('electrotherapy');


// treatment page
Route::get('/arthritis', function () {
    return view('treatments.arthritis');
})->name('arthritis');

Route::get('/fracture', function () {
    return view('treatments.fracture');
})->name('fracture');

Route::get('/back-pain', function () {
    return view('treatments.back-pain');
})->name('back-pain');

Route::get('/neck-pain', function () {
    return view('treatments.neck-pain');
})->name('neck-pain');

Route::get('/frozen-shoulder', function () {
    return view('treatments.frozen-shoulder');
})->name('frozen-shoulder');


Route::get('/postural-correction', function () {
    return view('treatments.postural-correction');
})->name('postural-correction');

Route::get('/sports-injuries', function () {
    return view('treatments.sports-injuries');
})->name('sports-injuries');

Route::get('/joint-pain-strengthening', function () {
    return view('treatments.joint-pain-strengthening');
})->name('joint-pain-strengthening');

Route::get('/post-surgical-treatment', function () {
    return view('treatments.post-surgical-treatment');
})->name('post-surgical-treatment');

Route::get('/neuro-rehab', function () {
    return view('treatments.neuro-rehab');
})->name('neuro-rehab');

Route::get('/pain-relief', function () {
    return view('treatments.pain-relief');
})->name('pain-relief');

Route::get('/strength-training', function () {
    return view('treatments.strength-training');
})->name('strength-training');

Route::get('/post-operative-conditions-rehabilitation', function () {
    return view('treatments.post-operative-conditions-rehabilitation');
})->name('post-operative-conditions-rehabilitation');

Route::get('/paralysis', function () {
    return view('treatments.paralysis');
})->name('paralysis');

Route::get('/facial-palsy', function () {
    return view('treatments.facial-palsy');
})->name('facial-palsy');

Route::get('/pediatric-disabilities', function () {
    return view('treatments.pediatric-disabilities');
})->name('pediatric-disabilities');

Route::get('/slip-disc', function () {
    return view('treatments.slip-disc');
})->name('slip-disc');

Route::get('/women-health', function () {
    return view('treatments.women-health');
})->name('women-health');

Route::get('/demo', function () {
    return view('treatments.demo');
})->name('demo');








// Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

// Route::get('/admission',[ContactController::class, 'bookAppointment'])->name('admission');
// Route::get('/contact-us', [ContactController::class, 'viewForm'])->name('contact');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');
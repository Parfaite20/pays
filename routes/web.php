<?php

//controller
use App\Http\Controllers\auteur\PostController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\SouscriptionController;

use App\Http\Controllers\users\PageAuteurController;

//component
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Auteur\AddpostComponent;
use App\Http\Livewire\Auteur\AuteurDashboardComponent;
use App\Http\Livewire\Auteur\CategorieComponent;
use App\Http\Livewire\Auteur\EditcategorieComponent;
use App\Http\Livewire\Auteur\PostComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\BlogcateComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProfileComponent;
use App\Http\Livewire\EditprofileComponent;
use App\Http\Livewire\DetailpostComponent;
use App\Http\Livewire\RechercheComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserlistComponent;

use Illuminate\Support\Facades\Route;
//use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/

Route::get('/', HomeComponent::class);


//user
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
        Route::get('/users/pageAuteur', [PageAuteurController::class, 'index'])->name('page.pageAuteur');
});

//auteur
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'authauteur'])
    ->group(function () {
        Route::get('/auteur/dashboard', AuteurDashboardComponent::class)->name('auteur.dashboard');
});

//admin
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'authadmin'])
    ->group(function () {
        Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
        Route::get('/admin/contact-us', AdminContactComponent::class)->name('admin.contact');

});

Route::middleware(['auth:sanctum', config('jetstream.auth_session')])
    ->group(function () {

    //admin, auteur

    //controller
    Route::resource('auteurs', PostController::class);
    Route::get('/commentes', [CommentaireController::class, 'index'])->name('comm.index');
    Route::get('/users/paiement', [SouscriptionController::class, 'index'])->name('paie');

    //component
    Route::get('/auteur/post', PostComponent::class)->name('auteur.post');
    Route::get('/auteur/addpost', AddpostComponent::class)->name('auteur.ajoutpost');
    Route::get('/auteur/categorie', CategorieComponent::class)->name('auteur.cate');
    //Route::get('/auteur/editcategorie/{categorie_slug}', EditcategorieComponent::class)->name('auteur.edit');


    //admin, users
    Route::get('/user/userlist', UserlistComponent::class)->name('user.list');

    //admin, auteur, user
    Route::get('/profile', ProfileComponent::class)->name('profile');
    Route::get('/profile/edit/{profile_id?}', EditprofileComponent::class)->name('profile.editprofile');

});


//verification email
/*Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');*/

//controller
Route::post('/posts/{post_id}', [CommentaireController::class, 'store'])->name('comm.store');
Route::post('/layouts/head', [HeadController::class, 'index']);
 
//component
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/blog', BlogComponent::class);
Route::get('/detailpost/{post_id}', DetailpostComponent::class)->name('detail');
Route::get('/blogcate/{categorie_nam}', BlogcateComponent::class)->name('blog.cate');
Route::get('/recherche', RechercheComponent::class)->name('post.recherche');


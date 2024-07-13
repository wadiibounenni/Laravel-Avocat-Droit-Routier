<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\frontend\DomaineInterventionController;
use App\Http\Controllers\frontend\InfractionCodeController;
use App\Http\Controllers\frontend\BlogController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/plan-de-site', function () {
    return view('frontend.plan_de_site');
})->name('plan.de.site');
Route::get('/avocat-automobile', function () {
    return view('frontend.avocat_automobile');
})->name('avocat.automobile');



//All Admin Routes
Route::controller(AdminController::class)->group (function() {
    Route::get('admin/logout', 'destroy')->name('admin.logout');
    Route::get('admin/profil', 'profil')->name('admin.profil');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');

});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//All Domaine d'Intervention Routes
Route::controller(DomaineInterventionController::class)->group (function() {
    Route::get('/domaine/intervention', 'ListeDomaines')->name('liste.domaine.intervention');
    Route::get('/ajouter/domaine/intervention', 'AjouterDomaine')->name('ajouter.domaine.intervention');
    Route::post('/store/domaine/intervention', 'StoreDomaine')->name('store.domaine.intervention');
    Route::get('/editer/domaine/intervention/{id}', 'EditerDomaine')->name('editer.domaine.intervention');
    Route::post('/update/domaine/intervention', 'UpdateDomaine')->name('update.domaine.intervention');
    Route::get('/supprimer/domaine/intervention/{id}', 'SupprimerDomaine')->name('supprimer.domaine.intervention');
    Route::get('/domaines-intervention/{slug}', 'DomaineDetails')->name('domaine.intervention.details');

});

//All Infractions au code de la route Routes
Route::controller(InfractionCodeController::class)->group (function() {
    Route::get('/infraction/code', 'ListeInfractions')->name('liste.infractions.code');
    Route::get('/ajouter/infraction/code', 'AjouterInfraction')->name('ajouter.infraction.code');
    Route::post('/store/infraction/code', 'StoreInfraction')->name('store.infraction.code');
    Route::get('/editer/infraction/code/{id}', 'EditerInfraction')->name('editer.infraction.code');
    Route::post('/update/infraction/code', 'UpdateInfraction')->name('update.infraction.code');
    Route::get('/supprimer/infraction/code/{id}', 'SupprimerInfraction')->name('supprimer.infraction.code');
    Route::get('/infractions-code-route/{slug}', 'InfractionDetails')->name('infraction.code.details');
    Route::get('/infractions-code-route', 'ListeInfractionsCode')->name('infractions.code.sidebar');

});

//All Blog Routes
Route::controller(BlogController::class)->group (function() {
    Route::get('/liste/articles', 'ListeArticles')->name('liste.articles');
    Route::get('/blog', 'PaginateArticles')->name('paginate.articles');
    Route::get('/ajouter/article', 'AjouterArticle')->name('ajouter.article');
    Route::post('/store/article', 'StoreArticle')->name('store.article');
    Route::get('/editer/article/{id}', 'EditerArticle')->name('editer.article');
    Route::post('/update/article', 'UpdateArticle')->name('update.article');
    Route::get('/supprimer/article/{id}', 'SupprimerArticle')->name('supprimer.article');
    Route::get('/blog/{slug}', 'ArticleDetails')->name('article.details');



});



require __DIR__.'/auth.php';

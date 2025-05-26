<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaqueController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlerteController;
use App\Http\Controllers\Security\RoleController;
use App\Http\Controllers\Security\PermissionController;
use App\Http\Controllers\Security\RolePermission;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PlanningController;



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

require __DIR__ . '/auth.php';










// Route::get('/user_list',[HomeController::class, 'user_list'])->name('userlist');

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('index');

Route::get('userlist', [HomeController::class, 'userlist'])->name('userlist');
Route::group(['middleware' => 'auth'], function () {
  Route::resource('/alerte', AlerteController::class);

Route::get('/scrape-and-solve/{license_plate}', [CaptchaController::class, 'scrapeAndSolve']);
Route::get('plaques/archives', [PlaqueController::class, 'archives'])->name('plaques.archives');
Route::get('plaques/archive/{plaque}', [PlaqueController::class, 'archive'])->name('plaques.archive');;
Route::resource('plaques', PlaqueController::class);
Route::get('plaques/relance/{plaque}', [PlaqueController::class, 'relance'])->name('plaques.relance');;;

Route::get('historiques/{plaque}', [HistoriqueController::class, 'index']);

Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('/accounts/admins', [AccountController::class, 'admin'])->name('accounts.admin');
Route::get('/accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::put('/accounts/{user}/toggle-status', [AccountController::class, 'toggleStatus'])->name('accounts.toggleStatus');
Route::get('/accounts/{user}/edit', [AccountController::class, 'edit'])->name('accounts.edit');
Route::put('/accounts/{user}', [AccountController::class, 'update'])->name('accounts.update');
Route::delete('/accounts/{user}', [AccountController::class, 'destroy'])->name('accounts.destroy');
Route::put('/users/{user}/update-frequence', [AccountController::class, 'updateFrequence'])->name('accounts.update.frequence');
Route::post('/accounts', [AccountController::class, 'store'])->name('accounts.store');

Route::get('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');


Route::resource('companies', CompanyController::class);
  // Permission Module
  Route::get('/permission-role', [RolePermission::class, 'index'])->name('permission-role.list');
  Route::post('/permission-role/store', [RolePermission::class, 'store'])->name('permission-role.store');
  Route::resource('permission', PermissionController::class);
  Route::resource('role', RoleController::class);

  Route::resource('/users', UserController::class);
  Route::get('/changePassword', [UserController::class, 'showchangepasswordget'])->name('changepasswordget');
  Route::put('/changePassword/{id}', [UserController::class, 'changepasswordpost'])->name('changepasswordpost');

  Route::get('/', [HomeController::class, 'index'])->name('index');
});
// Dashboard Routes
Route::get('customer', [HomeController::class, 'customer'])->name('customer');
Route::get('customerAdd', [HomeController::class, 'customerAdd'])->name('customerAdd');
Route::get('customerEdit', [HomeController::class, 'customerEdit'])->name('customerEdit');
Route::get('customerView', [HomeController::class, 'customerView'])->name('customerView');
Route::get('product', [HomeController::class, 'product'])->name('product');
Route::get('productAdd', [HomeController::class, 'productAdd'])->name('productAdd');
Route::get('order', [HomeController::class, 'order'])->name('order');
Route::get('orderDetails', [HomeController::class, 'orderDetails'])->name('orderDetails');
Route::get('orderNew', [HomeController::class, 'orderNew'])->name('orderNew');
Route::get('orderAdd', [HomeController::class, 'orderAdd'])->name('orderAdd');
Route::get('icon', [HomeController::class, 'icon'])->name('icon');
Route::get('todo', [HomeController::class, 'todo'])->name('todo');
Route::get('invoice', [HomeController::class, 'invoice'])->name('invoice');
Route::get('invoiceView', [HomeController::class, 'invoiceView'])->name('invoiceView');
Route::get('calendar', [HomeController::class, 'calendar'])->name('calendar');
Route::get('chatPage', [HomeController::class, 'chatPage'])->name('chatPage');
Route::get('userProfile', [HomeController::class, 'userProfile'])->name('userProfile');
Route::get('blankpage', [HomeController::class, 'blankpage'])->name('blankpage');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('timeline', [HomeController::class, 'timeline'])->name('timeline');
Route::get('chart', [HomeController::class, 'chart'])->name('chart');
Route::get('comingsoon', [HomeController::class, 'comingsoon'])->name('comingsoon');
Route::get('maintenance', [HomeController::class, 'maintenance'])->name('maintenance');
Route::get('error404', [HomeController::class, 'error404'])->name('error404');
Route::get('error500', [HomeController::class, 'error500'])->name('error500');

Route::get('privacypolicy', [HomeController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('termsofservice', [HomeController::class, 'termsofservice'])->name('termsofservice');

// AUTH Pages
Route::get('logins', [HomeController::class, 'login'])->name('logins');
Route::get('registers', [HomeController::class, 'registers'])->name('registers');
Route::get('recovers', [HomeController::class, 'recovers'])->name('recovers');
Route::get('confirmmail', [HomeController::class, 'confirmmail'])->name('confirmmail');
Route::get('lockscreen', [HomeController::class, 'lockscreen'])->name('lockscreen');
Route::get('userprofileedit', [HomeController::class, 'userprofileedit'])->name('userprofileedit');
Route::get('useraccountsetting', [HomeController::class, 'useraccountsetting'])->name('useraccountsetting');
Route::get('userprivacysetting', [HomeController::class, 'userprivacysetting'])->name('userprivacysetting');




Route::put('/companies/{company}/planning', [PlanningController::class, 'update'])->name('companies.update.planning');





// Forms Pages
Route::group(['prefix' => 'form'], function () {
  Route::get('elements', [HomeController::class, 'elements'])->name('elements');
  Route::get('input', [HomeController::class, 'input'])->name('input');
  Route::get('validation', [HomeController::class, 'validation'])->name('validation');
  Route::get('switch', [HomeController::class, 'switch'])->name('switch');
  Route::get('checkbox', [HomeController::class, 'checkbox'])->name('checkbox');
  Route::get('radio', [HomeController::class, 'radio'])->name('radio');
  Route::get('textarea', [HomeController::class, 'textarea'])->name('textarea');
  Route::get('datepicker', [HomeController::class, 'datepicker'])->name('datepicker');
  Route::get('select2', [HomeController::class, 'select2'])->name('select2');
  Route::get('fileuploader', [HomeController::class, 'fileuploader'])->name('fileuploader');
  Route::get('quill', [HomeController::class, 'quill'])->name('quill');
});


//UI pages
Route::group(['prefix' => 'ui'], function () {
  Route::get('avatars', [HomeController::class, 'avatars'])->name('avatars');
  Route::get('alerts', [HomeController::class, 'alerts'])->name('alerts');
  Route::get('badges', [HomeController::class, 'badges'])->name('badges');
  Route::get('breadcrumb', [HomeController::class, 'breadcrumb'])->name('breadcrumb');
  Route::get('buttons', [HomeController::class, 'buttons'])->name('buttons');
  Route::get('buttonsGroup', [HomeController::class, 'buttonsGroup'])->name('buttonsGroup');
  Route::get('boxShadow', [HomeController::class, 'boxShadow'])->name('boxShadow');
  Route::get('color', [HomeController::class, 'color'])->name('color');
  Route::get('cards', [HomeController::class, 'cards'])->name('cards');
  Route::get('carousels', [HomeController::class, 'carousels'])->name('carousels');
  Route::get('grid', [HomeController::class, 'grid'])->name('grid');
  Route::get('image', [HomeController::class, 'image'])->name('image');
  Route::get('listGroup', [HomeController::class, 'listGroup'])->name('listGroup');
  Route::get('modal', [HomeController::class, 'modal'])->name('modal');
  Route::get('notification', [HomeController::class, 'notification'])->name('notification');
  Route::get('pagination', [HomeController::class, 'pagination'])->name('pagination');
  Route::get('popovers', [HomeController::class, 'popovers'])->name('popovers');
  Route::get('progressbars', [HomeController::class, 'progressbars'])->name('progressbars');
  Route::get('typography', [HomeController::class, 'typography'])->name('typography');
  Route::get('tabs', [HomeController::class, 'tabs'])->name('tabs');
  Route::get('tooltips', [HomeController::class, 'tooltips'])->name('tooltips');
  Route::get('embedVideo', [HomeController::class, 'embedVideo'])->name('embedVideo');
});

//table pages
Route::group(['prefix' => 'table'], function () {
  Route::get('basictable', [HomeController::class, 'basictable'])->name('basictable');
  Route::get('datatable', [HomeController::class, 'datatable'])->name('datatable');
  Route::get('edittable', [HomeController::class, 'edittable'])->name('edittable');
});


//footer pages
Route::group(['prefix' => 'footer'], function () {
  Route::get('privacypolicy', [HomeController::class, 'privacypolicy'])->name('footer.privacypolicy');
  Route::get('termsofservice', [HomeController::class, 'termsofservice'])->name('footer.termsofservice');
});


//modules
if (file_exists(__DIR__ . '/modules/chat.php')) require __DIR__ . '/modules/chat.php';

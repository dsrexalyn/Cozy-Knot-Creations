<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\BottomController;
use App\Http\Controllers\AddCartController;
use App\Http\Controllers\AddCartBagsController;
use App\Http\Controllers\AddCartWalletController;
use App\Http\Controllers\AddcartFlowersController;
use App\Http\Controllers\AddCartOtherProductController;





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

Route::get('/', [HomeController::class, 'index']);
Route::get('keychains', [ProductsController::class, 'keychains']);
Route::get('bags', [ProductsController::class, 'bags']);
Route::get('wallets', [ProductsController::class, 'wallets']);
Route::get('flowers', [ProductsController::class, 'flowers']);
Route::get('otherproducts', [ProductsController::class, 'otherproducts']);
Route::get('bandanas', [ProductsController::class, 'bandanas']);
Route::get('scarfs', [ProductsController::class, 'scarfs']);
Route::get('croptops', [ProductsController::class, 'croptops']);
Route::get('sweaters', [ProductsController::class, 'sweaters']);
Route::get('contacts', [ContactController::class, 'contacts']);
Route::get('aboutus', [AboutUsController::class, 'aboutus']);
Route::get('signin', [SigninController::class, 'signin']);
Route::get('addcart', [ProductsController::class, 'addcart']);
Route::get('addcartmushroom', [AddCartController::class, 'addcartmushroom']);
Route::get('addcartribbon', [AddCartController::class, 'addcartribbon']);
Route::get('addcartflowercharms', [AddCartController::class, 'addcartflowercharms']);
Route::get('addcartheartbutterflycharms', [AddCartController::class, 'addcartheartbutterflycharms']);
Route::get('addcartsunflowercharms', [AddCartController::class, 'addcartsunflowercharms']);
Route::get('addcartchimmy', [AddCartController::class, 'addcartchimmy']);
Route::get('addcarttotoro', [AddCartController::class, 'addcarttotoro']);
Route::get('addcartbarebears', [AddCartController::class, 'addcartbarebears']);
Route::get('addcarttotoro', [AddCartController::class, 'addcarttotoro']);
Route::get('addcarttotebag', [AddCartBagsController::class, 'addcarttotebag']);
Route::get('addcartgrannybag', [AddCartBagsController::class, 'addcartgrannybag']);
Route::get('addcartminibag', [AddCartBagsController::class, 'addcartminibag']);
Route::get('addcartbodybag', [AddCartBagsController::class, 'addcartbodybag']);
Route::get('addcartcellphonebags', [AddCartBagsController::class, 'addcartcellphonebags']);
Route::get('addcartwalletcellphonepouch', [AddCartWalletController::class, 'addcartwalletcellphonepouch']);
Route::get('addcartwomenfashionbagswallet', [AddCartWalletController::class, 'addcartwomenfashionbagswallet']);
Route::get('addcartcheckeredcardholderwallet', [AddCartWalletController::class, 'addcartcheckeredcardholderwallet']);
Route::get('addcartlily', [AddCartFlowersController::class, 'addcartlily']);
Route::get('addcartdaisy', [AddCartFlowersController::class, 'addcartdaisy']);
Route::get('addcartsunflower', [AddCartFlowersController::class, 'addcartsunflower']);
Route::get('addcarttulipsbouquet', [AddCartFlowersController::class, 'addcarttulipsbouquet']);
Route::get('addcarttulipsanddaisybouquet',[AddcartFlowersController::class, 'addcarttulipsanddaisybouquet']);
Route::get('addcartflowerbouquet',[AddcartFlowersController::class, 'addcartflowerbouquet']);
Route::get('addcartbandana',[AddCartOtherProductController::class, 'addcartbandana']);
Route::get('addcartphonecase',[AddCartOtherProductController::class, 'addcartphonecase']);
Route::get('addcartheadband',[AddCartOtherProductController::class, 'addcartheadband']);
Route::get('addcartcroptop',[AddCartOtherProductController::class, 'addcartcroptop']);
Route::get('addcartblanket',[AddCartOtherProductController::class, 'addcartblanket']);
Route::get('addcartsweater',[AddCartOtherProductController::class, 'addcartsweater']);

Route::get('privacypolicy', [BottomController::class, 'privacypolicy']);
Route::get('licensing', [BottomController::class, 'licensing']);
Route::get('termsandcondition', [BottomController::class, 'termsandcondition']);

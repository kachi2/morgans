<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/', [PageController::class, 'HomePage'])->name('index');
Route::get('/services/tmcacademy', [PageController::class, 'Academy'])->name('tmc.academy');
Route::get('/services/financial-services-regulation-risk-compliance', [PageController::class, 'RiskRegulations'])->name('risk.regulations');
Route::get('/services/background-check-vetting-screening', [PageController::class, 'VettingScreening'])->name('vetting.screening');
Route::get('/services/financial-accounting-audit-tax-advisory', [PageController::class, 'TaxAdvisory'])->name('tax.advisory');
Route::get('/services/fca-authorization-for-uk', [PageController::class, 'FAC_Authorization'])->name('fca.authorization');
Route::get('/services/documenttation-manuals', [PageController::class, 'documenttationManuals'])->name('documentation.manuals');
Route::get('/services/outsourcing/', [PageController::class, 'Outsourcing'])->name('outsourcing');
Route::get('/services/managed-shared-services-and-solution-delivery', [PageController::class, 'solutionDelivery'])->name('solution.delivery');

Route::get('/about/company', [PageController::class, 'Company'])->name('the.company');
Route::get('/about/location', [PageController::class, 'Location'])->name('location');
Route::get('/about/privacy-policy', [PageController::class, 'Privacy'])->name('privacy');
Route::get('/about/our-team', [PageController::class, 'Team'])->name('team');
Route::get('/about/contact-us', [PageController::class, 'Contact'])->name('contact');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

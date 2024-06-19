<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUser\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Admin\AdminAuthController;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // Admin authentication routes
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('adminLogout');

    // Admin dashboard route
    Route::get('/', function () {
        return view('welcome');
    })->name('adminDashboard');

    // Other admin routes...
    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['throttle:6,1'])
        ->name('verification.send');

    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');

    Route::get('/user-profile', [UserController::class, 'index'])->name('user-profile');
    Route::post('/user-profile', [UserController::class, 'saveUserProfile'])->name('user-profile');
    Route::get('/profile-pengguna', [ProfileController::class, 'showProfile'])->name('profile-pengguna');
    Route::get('/user-management', function(){
        return view('admin.pages.laravel-examples.user-management');
    })->name('user-management');
    Route::get('/tables', function(){
        return view('admin.pages.tables');
    })->name('tables');
    Route::get('/billing', function(){
        return view('admin.pages.billing');
    })->name('billing');
    Route::get('/virtual-reality', function(){
        return view('admin.pages.virtual-reality');
    })->name('virtual-reality');
    Route::get('/rtl', function(){
        return view('admin.pages.rtl');
    })->name('rtl');
    Route::get('/notifications', function(){
        return view('admin.pages.notifications');
    })->name('notifications');
    Route::get('/profile', function(){
        return view('admin.pages.profile');
    })->name('profile');
    Route::get('/static-sign-in', function(){
        return view('admin.pages.static-sign-in');
    })->name('static-sign-in');
    Route::get('/static-sign-up', function(){
        return view('admin.pages.static-sign-up');
    })->name('static-sign-up');
    Route::get('/components/admin-layout', function(){
        return view('components.admin-layout', ['bodyClass' => 'body']);
    })->name('admin-layout');

    Route::get('/', function () {
        return redirect()->route('home');
    })->name('welcome');
    Route::get('/home', function () {
        return view('index');
    })->name('home');
    Route::get('/vision_and_mission', function () {
        return view('vision_and_mission');
    })->name('vision_and_mission');
    Route::get('/organizational_chart', function () {
        return view('organizational_chart');
    })->name('organizational_chart');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/public', function () {
        return view('public');
    })->name('public');
    Route::get('/calendar', function () {
        return view('calendar');
    })->name('calendar');
    Route::get('/appointment', function () {
        return view('appointment');
    })->name('appointment');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    Route::get('/falsafah', function () {
        return view('falsafah');
    })->name('falsafah');
    Route::get('/piagam_pelanggan', function () {
        return view('piagam_pelanggan');
    })->name('piagam_pelanggan');
    Route::get('/pra_sekolah', function () {
        return view('pra_sekolah');
    })->name('pra_sekolah');
    Route::get('/sek_rendah', function () {
        return view('sek_rendah');
    })->name('sek_rendah');
    Route::get('/sek_menengah', function () {
        return view('sek_menengah');
    })->name('sek_menengah');
    Route::get('/lepas_menengah', function () {
        return view('lepas_menengah');
    })->name('lepas_menengah');
    Route::get('/tvet', function () {
        return view('tvet');
    })->name('tvet');
    Route::get('/swasta', function () {
        return view('swasta');
    })->name('swasta');
    Route::get('/pen_khas', function () {
        return view('pen_khas');
    })->name('pen_khas');
    Route::get('/prasekolah/objektif', function () {
        return view('prasekolah.objektif');
    })->name('objektif');
    Route::get('takwim', function () {
        return view('takwim');
    })->name('takwim');
    Route::get('pelan_strategik', function () {
        return view('pelan_strategik');
    })->name('pelan_strategik');
    Route::get('sejarah', function () {
        return view('sejarah');
    })->name('sejarah');
    Route::get('staf_ppd', function () {
        return view('staf_ppd');
    })->name('staf_ppd');
    Route::get('direktori', function () {
        return view('direktori');
    })->name('direktori');
    
    /*sektor-sektor */
    Route::get('/sektor/sektor_perancangan', function () {
        return view('sektor.sektor_perancangan');
    })->name('sektor_perancangan');
    Route::get('/sektor/sektor_pembelajaran', function () {
        return view('sektor.sektor_pembelajaran');
    })->name('sektor_pembelajaran');
    Route::get('/sektor/sektor_pengurusan_sekolah', function () {
        return view('sektor.sektor_pengurusan_sekolah');
    })->name('sektor_pengurusan_sekolah');
    Route::get('/sektor/sektor_pembangunan_murid', function () {
        return view('sektor.sektor_pembangunan_murid');
    })->name('sektor_pembangunan_murid');
    Route::get('/sektor/sektor_psikologi', function () {
        return view('sektor.sektor_psikologi');
    })->name('sektor_psikologi');
    Route::get('/sektor/sektor_pentaksiran', function () {
        return view('sektor.sektor_pentaksiran');
    })->name('sektor_pentaksiran');
    Route::get('/sektor/sektor_pengurusan', function () {
        return view('sektor.sektor_pengurusan');
    })->name('sektor_pengurusan');

     /* folder pra sekolah */
     Route::get('/prasekolah/objektif', function () {
        return view('prasekolah.objektif');
    })->name('objektif');
    Route::get('/prasekolah/latar_belakang', function () {
        return view('prasekolah.latar_belakang');
    })->name('latar_belakang');
    Route::get('/prasekolah/matlamat', function () {
        return view('prasekolah.matlamat');
    })->name('matlamat');
    Route::get('/prasekolah/dasar_pra', function () {
        return view('prasekolah.dasar_pra');
    })->name('dasar_pra');
    Route::get('/prasekolah/konsep', function () {
        return view('prasekolah.konsep');
    })->name('konsep');
    Route::get('/prasekolah/keputusan', function () {
        return view('prasekolah.keputusan');
    })->name('keputusan');
    Route::get('/prasekolah/permohonan', function () {
        return view('prasekolah.permohonan');
    })->name('permohonan');
    Route::get('/prasekolah/maklumat_pra', function () {
        return view('prasekolah.maklumat_pra');
    })->name('maklumat_pra');
    Route::get('/prasekolah/pemilihan', function () {
        return view('prasekolah.pemilihan');
    })->name('pemilihan');
    Route::get('/prasekolah/sistem', function () {
        return view('prasekolah.sistem');
    })->name('sistem');

    /* folder sekolah rendah */
    Route::get('/sekolah_rendah/pendaftaran', function () {
        return view('sekolah_rendah.pendaftaran');
    })->name('pendaftaran');
    Route::get('/sekolah_rendah/dasar_op', function () {
        return view('sekolah_rendah.dasar_op');
    })->name('dasar_op');
    Route::get('/sekolah_rendah/dasar_pengecualian', function () {
        return view('sekolah_rendah.dasar_pengecualian');
    })->name('dasar_pengecualian');
    Route::get('/sekolah_rendah/dasar_kemasukan_awal', function () {
        return view('sekolah_rendah.dasar_kemasukan_awal');
    })->name('dasar_kemasukan_awal');
    Route::get('/sekolah_rendah/home_school', function () {
        return view('sekolah_rendah.home_school');
    })->name('home_school');

    /* folder sekolah menengah */
    Route::get('/sekolah_menengah/pengenalan', function () {
        return view('sekolah_menengah.pengenalan');
    })->name('pengenalan');
    Route::get('/sekolah_menengah/menengah', function () {
        return view('sekolah_menengah.menengah');
    })->name('menengah');
    Route::get('/sekolah_menengah/pengurusan_asrama', function () {
        return view('sekolah_menengah.pengurusan_asrama');
    })->name('pengurusan_asrama');
    Route::get('/sekolah_menengah/program_kesihatan', function () {
        return view('sekolah_menengah.program_kesihatan');
    })->name('program_kesihatan');
    Route::get('/sekolah_menengah/kokurikulum', function () {
        return view('sekolah_menengah.kokurikulum');
    })->name('kokurikulum');

     /* folder lepas menengah */
     Route::get('/lepas_menengah/latar_lepas_menengah', function () {
        return view('lepas_menengah.latar_lepas_menengah');
    })->name('latar_lepas_menengah');
    Route::get('/lepas_menengah/objektif_lepas_menengah', function () {
        return view('lepas_menengah.objektif_lepas_menengah');
    })->name('objektif_lepas_menengah');
    Route::get('/lepas_menengah/matlamat', function () {
        return view('lepas_menengah.matlamat');
    })->name('matlamat');
    Route::get('/lepas_menengah/piagam', function () {
        return view('lepas_menengah.piagam');
    })->name('piagam');
    Route::get('/lepas_menengah/kerangka_konseptual', function () {
        return view('lepas_menengah.kerangka_konseptual');
    })->name('kerangka_konseptual');
    Route::get('/lepas_menengah/syarat', function () {
        return view('lepas_menengah.syarat');
    })->name('syarat');
    Route::get('/lepas_menengah/penjenamaan', function () {
        return view('lepas_menengah.penjenamaan');
    })->name('penjenamaan');
    Route::get('/lepas_menengah/tempoh', function () {
        return view('lepas_menengah.tempoh');
    })->name('tempoh');
    Route::get('/lepas_menengah/pusat_tingkatan6', function () {
        return view('lepas_menengah.pusat_tingkatan6');
    })->name('pusat_tingkatan6');
    Route::get('/lepas_menengah/kurikulum', function () {
        return view('lepas_menengah.kurikulum');
    })->name('kurikulum');
    Route::get('/lepas_menengah/kokurikulum', function () {
        return view('lepas_menengah.kokurikulum');
    })->name('kokurikulum');
    Route::get('/lepas_menengah/pentaksiran_yuran', function () {
        return view('lepas_menengah.pentaksiran_yuran');
    })->name('pentaksiran_yuran');

    /* tvet */
    Route::get('/tvet/maklumat_tvet', function () {
        return view('tvet.maklumat_tvet');
    })->name('maklumat_tvet');
    Route::get('/tvet/kv', function () {
        return view('tvet.kv');
    })->name('kv');

    /* pendidikan khas */
    Route::get('/pen_khas/pen_islam', function () {
        return view('pen_khas.pen_islam');
    })->name('pen_islam');
    Route::get('/pen_khas/integrasi', function () {
        return view('pen_khas.integrasi');
    })->name('integrasi');
    Route::get('/pen_khas/inklusif', function () {
        return view('pen_khas.inklusif');
    })->name('inklusif');
    Route::get('/pen_khas/PPK', function () {
        return view('pen_khas.PPK');
    })->name('PPK');
    Route::get('/pen_khas/rancangan', function () {
        return view('pen_khas.rancangan');
    })->name('rancangan');
    Route::get('/pen_khas/pusat_sumber', function () {
        return view('pen_khas.pusat_sumber');
    })->name('pusat_sumber');
    Route::get('/pen_khas/sek_khas', function () {
        return view('pen_khas.sek_khas');
    })->name('sek_khas');

    /* Direktori */
    Route::get('/Direktori/perancangan', function () {
        return view('Direktori.perancangan');
    })->name('perancangan');
    Route::get('/Direktori/pembelajaran', function () {
        return view('Direktori.pembelajaran');
    })->name('pembelajaran');
    Route::get('/Direktori/pengurusan_sekolah', function () {
        return view('Direktori.pengurusan_sekolah');
    })->name('pengurusan_sekolah');
    Route::get('/Direktori/pembangunan_murid', function () {
        return view('Direktori.pembangunan_murid');
    })->name('pembangunan_murid');
    Route::get('/Direktori/psikologi', function () {
        return view('Direktori.psikologi');
    })->name('psikologi');
    Route::get('/Direktori/pentaksiran', function () {
        return view('Direktori.pentaksiran');
    })->name('pentaksiran');
    Route::get('/Direktori/pengurusan', function () {
        return view('Direktori.pengurusan');
    })->name('pengurusan');
    Route::get('/Direktori/unit_ict', function () {
        return view('Direktori.unit_ict');
    })->name('unit_ict');
    
    // Add other authenticated routes here...

});
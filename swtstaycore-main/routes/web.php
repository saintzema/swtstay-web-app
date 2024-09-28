<?php

use App\Http\Middleware\CheckUserRole;
use App\Http\Middleware\EnsureHotelOwnerSetup;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\Guest;
use App\Livewire\Admin\Hotel as AdminHotel;
use App\Livewire\Admin\Payment;
use App\Livewire\Admin\Setting\Profile as AdminProfile;
use App\Livewire\Admin\Transactions;
use App\Livewire\Auth\CreateAccount;
use App\Livewire\User\Role;
use App\Livewire\User\Room;
use App\Livewire\Auth\Login;
use App\Livewire\User\Hotel;
use App\Livewire\User\Booking;
use App\Livewire\User\Dashboard;
use App\Livewire\Auth\VerifyEmail;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\HotelSetup;
use App\Livewire\Auth\SetupSuccess;
use App\Livewire\Auth\Success;
use App\Livewire\User\AvailableRoom;
use App\Livewire\User\BranchDetail;
use App\Livewire\User\Earning;
use App\Livewire\User\EditBranch;
use App\Livewire\User\OccupiedRoom;
use App\Livewire\User\Settings\Accounts;
use App\Livewire\User\Settings\ApiKey;
use App\Livewire\User\Settings\Contact;
use App\Livewire\User\Settings\Preference;
use App\Livewire\User\Settings\Profile;
use App\Livewire\User\Settings\Security;
use App\Livewire\User\Settings\Team;
use Illuminate\Support\Facades\Route;

Route::get('/ui', function () {
    return view('ui');
})->name('ui');

Route::middleware(['guest'])->group(function(){

    Route::get('/login', Login::class)->name('login');
    Route::get('/forgot-password', ForgotPassword::class)->name('password.request');
    Route::get('/password/reset/{token}', ResetPassword::class)->name('password.reset');

    Route::get('create-account', CreateAccount::class)->name('create-account');

});

Route::middleware(['auth'])->group(function(){

    Route::get('/success', Success::class)->name('create.account.success');

    Route::get('/hotel-setup', HotelSetup::class)->name('hotel.setup');
    Route::get('/setup-success', SetupSuccess::class)->name('setup.success');


    Route::get('email/verify/{id}/{hash}', [VerifyEmail::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerifyEmail::class, 'resendVerification'])->name('verification.resend');

    // regular user routes
    Route::middleware(['ensureHotelSetup', 'isUserCheck'])->group(function(){

        // dashboard section
        Route::get('/', Dashboard::class)->name('index');

        // management section
        Route::get('/manage/hotel', Hotel::class)->name('user.hotel');
        Route::get('/manage/hotel/branch/{branchId}/details', BranchDetail::class)->name('user.branch.detail');

        // management section for room
        Route::get('/manage/rooms', Room::class)->name('user.room');
        Route::get('/manage/rooms/available', AvailableRoom::class)->name('user.room.available');
        Route::get('/manage/rooms/occupied', OccupiedRoom::class)->name('user.room.occupied');

        // management section for bookings
        Route::get('/manage/bookings', Booking::class)->name('user.booking');

        //earning section
        Route::get('/earnings', Earning::class)->name('user.earning');

        // setting section
        Route::get('/settings/profile', Profile::class)->name('user.settings.profile');
        Route::get('/settings/staffs', Team::class)->name('user.settings.staff');
        Route::get('/settings/preference', Preference::class)->name('user.settings.preference');
        Route::get('/settings/contact', Contact::class)->name('user.settings.contact');
        Route::get('/settings/account', Accounts::class)->name('user.settings.account');
        Route::get('/settings/security', Security::class)->name('user.settings.security');
        Route::get('/settings/api-key', ApiKey::class)->name('user.settings.api-key');
    });

    // admin routes
    Route::middleware(['isAdminCheck'])->prefix('admin')->group(function(){
        Route::get('/', AdminDashboard::class)->name('admin.dashboard');
        Route::get('/manage/transactions', Transactions::class)->name('admin.transaction');
        Route::get('/manage/hotels', AdminHotel::class)->name('admin.hotel');
        Route::get('/manage/guests', Guest::class)->name('admin.guest');
        Route::get('/manage/payments', Payment::class)->name('admin.payment');

        // setting sections
        Route::get('/settings/profile', AdminProfile::class)->name('admin.settings.profile');
    });

});

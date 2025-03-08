<?php

use App\Livewire\Admin\AdminActivityReports;
use App\Livewire\Admin\AdminAttendanceReports;
use App\Livewire\Admin\AdminCreateAttendance;
use App\Livewire\Admin\AdminManageProfiles;
use App\Livewire\Admin\AdminWelcomePage;
use App\Livewire\Bns\BnsProfile;
use App\Livewire\Bns\BnsSubmitActivities;
use App\Livewire\Bns\BnsSubmitAttendance;
use App\Livewire\Bns\BnsViewActivities;
use App\Livewire\Bns\BnsViewAttendance;
use App\Livewire\Bns\BnsWelcomePage;
use App\Livewire\Home\BarangayProfile;
use App\Livewire\Home\BnsActivities;
use App\Livewire\Home\ContactUs;
use App\Livewire\Home\HomePage;
use App\Livewire\Auth\AuthLogin;
use App\Livewire\Home\AboutPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//AUTH
Route::get('/login', AuthLogin::class)->name('login');

//HOME
Route::get('/homepage', HomePage::class)->name('home');
Route::get('/homepage/about', AboutPage::class)->name('about');
Route::get('/homepage/barangay-profile', BarangayProfile::class)->name('barangay-profile');
Route::get('/homepage/bns-activities', BnsActivities::class)->name('bns-activities');
Route::get('/homepage/contact-us', ContactUs::class)->name('contact-us');

//BNS
Route::get('/bns/welcome', BnsWelcomePage::class)->name('welcome');
Route::get('/bns/submit-attendance', BnsSubmitAttendance::class)->name('submit-attendance');
Route::get('/bns/past-attendance', BnsViewAttendance::class)->name('attendance');
Route::get('/bns/submit-activities', BnsSubmitActivities::class)->name('submit-activities');
Route::get('/bns/past-activities', BnsViewActivities::class)->name('activities');
Route::get('/bns/profile', BnsProfile::class)->name('profile');

//ADMIN
Route::get('/admin/welcome', AdminWelcomePage::class)->name('a-welcome');
Route::get('/admin/create-attendance', AdminCreateAttendance::class)->name('a-create-attendance');
Route::get('/admin/attendance-reports', AdminAttendanceReports::class)->name('a-attendance-reports');
Route::get('/admin/activity-reports', AdminActivityReports::class)->name('a-activity-reports');
Route::get('/admin/manage-profiles', AdminManageProfiles::class)->name('a-manage-profiles');

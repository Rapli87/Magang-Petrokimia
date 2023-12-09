<?php

use App\Http\Controllers\Admin\{
    AuthUserController,
    ArticleController,
    BaganChampionshipController,
    CategoryController,
    CompetitionController,
    DataSekolahController,
    DashboardController,
    DetailBaganController,
    DetailJadwalController,
    DetailPemainController,
    GalleryController,
    GrubController,
    JadwalController,
    KlasemenController,
    LatestVideoController,
    ResultController,
    ResultSingleController,
    SponsorshipController,
    SubLatestVideoController,
    TestimonialController,
    TimelineController,
    UpcomingMatchController,
    UserController
};

use App\Http\Controllers\Admin\TambahUserController;
use App\Http\Controllers\Frontend\{
    ArticleController as FrontendArticleController,
    CategoryController as FrontendCategoryController,
    HomeController
};
use App\Http\Controllers\User\InformasiumumController;
use App\Http\Controllers\User\jurnalisController;
use App\Http\Controllers\User\ManajerController;
use App\Http\Controllers\User\OfficialController;
use App\Http\Controllers\User\PemainController;
use App\Http\Controllers\User\pjmedisController;
use App\Http\Controllers\User\PjsekolahController;
use App\Http\Controllers\User\pjsupporterguruController;
use App\Http\Controllers\User\PjtimController;
use App\Http\Controllers\User\PelatihController;
use App\Http\Controllers\User\pjsupportersiswaController;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;


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

// Frontend
Route::get('/', [HomeController::class, 'index'])
    ->name('index');
Route::get('blog', [HomeController::class, 'blog'])
    ->name('pages.blog');
Route::post('blog/articles/search', [FrontendArticleController::class, 'index'])
    ->name('search');
Route::get('blog/p/{slug}', [FrontendArticleController::class, 'show']);
Route::get('blog/articles', [FrontendArticleController::class, 'index']);
Route::get('blog/category/{slug}',[FrontendCategoryController::class,'index']);
// Route::get('blog-single', [HomeController::class, 'blog_single'])
//     ->name('pages.blog-single');
Route::get('competition', [HomeController::class, 'competition'])
    ->name('pages.competition');
Route::get('contact', [HomeController::class, 'contact'])
    ->name('pages.contact');
Route::get('details-club', [HomeController::class, 'details_club'])
    ->name('pages.details-club');
// Route::get('gallery', [HomeController::class, 'gallery'])
//     ->name('pages.gallery');
Route::get('about', [HomeController::class, 'about'])
    ->name('pages.about');
Route::get('klasemen', [HomeController::class, 'klasemen'])
    ->name('pages.klasemen');
Route::get('result', [HomeController::class, 'result'])
    ->name('pages.result');
// Route::get('result-single', [HomeController::class, 'result_single'])
//     ->name('pages.result-single');
Route::get('result-single/{result_id}', [HomeController::class, 'result_single'])
    ->name('pages.result-single');
Route::get('team', [HomeController::class, 'team'])
    ->name('pages.team');
Route::get('team-single', [HomeController::class, 'team_single'])
    ->name('pages.team-single');

// refferal 
// Route::group(['middleware' =>['is_login']], function(){
    Route::get('/register', [UserController::class, 'loadRegister'])->name('register');
    Route::post('/user-register', [UserController::class, 'registered'])->name('registered');
    Route::get('/referral-register',[UserController::class, 'loadReferralRegister']);
    Route::get('/email-verification/{token}',[UserController::class, 'emailVerification']);
    Route::get('/login', [UserController::class, 'loadLogin']);
    Route::post('/login', [UserController::class, 'userLogin'])->name('login');

    


// });

Route::group(['middleware' =>['is_logout']], function(){
    //dashboard utama admin (access 1)
    Route::get('admin/dashboard', [UserController::class, 'loadDashboardAdmin'])->name('dashboard-admin')-> middleware('UserAccess:1');
    //dashboard utama user
    Route::get('user/dashboard', [UserController::class, 'loadDashboardUser'])->name('dashboard-user')-> middleware('UserAccess:2');
    //dashboard blog
    Route::get('admin/dashboard-blog', [UserController::class, 'loadDashboardBlog'])->name('dashboard-blog')-> middleware('UserAccess:1');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    //pages
    Route::resource('admin/upcoming-match', UpcomingMatchController::class)-> middleware('UserAccess:1');
    //cms panel
    Route::resource('admin/articles', ArticleController::class)-> middleware('UserAccess:1');
    Route::resource('admin/categories', CategoryController::class) -> middleware('UserAccess:1');
    Route::resource('admin/testimonials', TestimonialController::class)-> middleware('UserAccess:1');
    Route::resource('admin/latest-videos', LatestVideoController::class)-> middleware('UserAccess:1');
    Route::resource('admin/sublatest-videos', SubLatestVideoController::class)-> middleware('UserAccess:1');
    Route::resource('admin/galleries', GalleryController::class)-> middleware('UserAccess:1');
    Route::resource('admin/sponsorships', SponsorshipController::class)-> middleware('UserAccess:1');
    Route::resource('admin/timelines', TimelineController::class)-> middleware('UserAccess:1');
    Route::resource('admin/group-klasemens', KlasemenController::class)-> middleware('UserAccess:1');
    Route::resource('admin/results', ResultController::class)->middleware('UserAccess:1');
    Route::resource('admin/result-singles', ResultSingleController::class)->middleware('UserAccess:1');
    Route::resource('admin/competitions', CompetitionController::class)->middleware('UserAccess:1');
    
  

    Route::get('admin/Data-Sekolah', [DataSekolahController::class, 'index'])->name('Data-Sekolah.index')-> middleware('UserAccess:1');
    Route::get('admin/Data-Sekolah/delete/{id}', [DataSekolahController::class, 'delete'])->name('Data-Sekolah.delete')-> middleware('UserAccess:1');
    Route::get('admin/Data-Sekolah/show/{id}', [DataSekolahController::class, 'show'])->name('Data-Sekolah.show')-> middleware('UserAccess:1');
    Route::Post('admin/Data-Sekolah/update/{id}', [DataSekolahController::class, 'update'])->name('Data-Sekolah.update')-> middleware('UserAccess:1');
    Route::delete('admin/Data-Sekolah/destroy/{id}', [DataSekolahController::class, 'destroy'])->name('Data-Sekolah.destroy')-> middleware('UserAccess:1');
    Route::get('admin/Data-Sekolah/create', [DataSekolahController::class, 'create'])->name('Data-Sekolah.create')-> middleware('UserAccess:1');
    Route::get('admin/Data-Sekolah/edit/{id}', [DataSekolahController::class, 'edit'])->name('Data-Sekolah.edit')-> middleware('UserAccess:1');
    Route::get('admin/Data-Sekolah/CetakDataSekolah', [DataSekolahController::class,'cetakdatasekolah'])->name('Data-Sekolah.CetakDataSekolah')-> middleware('UserAccess:1');
    Route::Post('admin/Data-Sekolah/store', [DataSekolahController::class, 'store'])->name('Data-Sekolah.store')-> middleware('UserAccess:1');


    Route::get('admin/Data-Sekolah/Pemain/show/{id}', [DetailPemainController::class, 'show'])->name('Data-Sekolah.Pemain.show')-> middleware('UserAccess:1');


    // Route::get('admin/Pj-Sekolah',[PjsekolahController::class,'index'])->name('Pj-Sekolah.index')-> middleware('UserAccess:2');
    // Route::get('admin/Pj-Sekolah/delete/{id}',[PjsekolahController::class, 'delete'])->name('Pj-Sekolah.delete')-> middleware('UserAccess:2');
    // Route::Post('admin/Pj-Sekolah/update/{id}',[PjsekolahController::class, 'update'])->name('Pj-Sekolah.update')-> middleware('UserAccess:2');
    // Route::delete('admin/Pj-Sekolah/destroy/{id}',[PjsekolahController::class, 'destroy'])->name('Pj-Sekolah.destroy')-> middleware('UserAccess:2');
    // Route::get('admin/Pj-Sekolah/create',[PjsekolahController::class, 'create'])->name('Pj-Sekolah.create')-> middleware('UserAccess:2');
    // Route::get('admin/Pj-Sekolah/edit/{id}',[PjsekolahController::class, 'edit'])->name('Pj-Sekolah.edit')-> middleware('UserAccess:2');
    // Route::Post('admin/Pj-Sekolah/store',[PjsekolahController::class, 'store'])->name('Pj-Sekolah.store')-> middleware('UserAccess:2');
    Route::resource('admin/user/Pj-Sekolah', PjsekolahController::class)->middleware('UserAccess:2');
Route::get('admin/user/Pj-Sekolah',[PjsekolahController::class,'index'])->name('Pj-Sekolah.index')-> middleware('UserAccess:2');
Route::post('admin/user/Pj-Sekolah/store', [PjsekolahController::class, 'store'])->name('Pj-Sekolah.store')-> middleware('UserAccess:2');
Route::get('admin/user/pj-Sekolah/edit/{id}', [PjsekolahController::class,'edit'])->name('Pj-Sekolah.edit')-> middleware('UserAccess:2');
Route::get('admin/user/pj-Sekolah/delete/{id}', [PjsekolahController::class,'delete'])->name('pj-sekolah.delete')-> middleware('UserAccess:2');
// Route::delete('admin/user/pj-Sekolah/delete/{id}', [PjsekolahController::class, 'delete'])->name('pj-sekolah.delete')->middleware('UserAccess:2');
Route::Post('admin/user/pj-Sekolah/update/{id}', [PjsekolahController::class,'update'])->name('Pj-Sekolah.update')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Sekolah/show/{id}',[PjsekolahController::class,'show'])->name('Pj-Sekolah.show')-> middleware('UserAccess:2');
Route::get('admin/user/pj-Sekolah/destroy/{id}', [PjsekolahController::class, 'destroy'])->name('pj-sekolah.destroy')->middleware('UserAccess:2');

    Route::resource('admin/user/Pj-Tim', PjtimController::class)->middleware('UserAccess:2');
    Route::get('admin/user/Pj-Tim', [PjtimController::class,'index'])->name('Pj-Tim.index')-> middleware('UserAccess:2');
    Route::post('admin/user/Pj-Tim/store', [PjtimController::class, 'store'])->name('Pj-Tim.store')-> middleware('UserAccess:2');
    Route::get('admin/user/Pj-Tim/edit/{id}', [PjtimController::class,'edit'])->name('Pj-Tim.edit')-> middleware('UserAccess:2');
    Route::get('admin/user/Pj-Tim/delete/{id}', [PjtimController::class,'delete'])->name('Pj-Tim.delete')-> middleware('UserAccess:2');
    Route::post('admin/user/Pj-Tim/update/{id}',[PjtimController::class,'update'])->name('Pj-Tim.update')-> middleware('UserAccess:2');
    Route::get('admin/user/Pj-Tim/show/{id}', [PjtimController::class,'show'])->name('Pj-Tim.show')-> middleware('UserAccess:2');
    Route::get('admin/user/pj-Tim/create/{id}', [PjtimController::class,'create'])->name('Pj-Tim.create')-> middleware('UserAccess:2');
    Route::get('admin/user/pj_Tim/destroy/{id}', [PjtimController::class, 'destroy'])->name('pj-tim.destroy')->middleware('UserAccess:2');
    Route::resource('admin/user/Pelatih', PelatihController::class)->middleware('UserAccess:2');
    Route::get('admin/user/Pelatih', [PelatihController::class,'index'])->name('Pelatih.index')-> middleware('UserAccess:2');
    Route::post('admin/user/Pelatih/store', [PelatihController::class, 'store'])->name('Pelatih.store')-> middleware('UserAccess:2');
    Route::get('admin/user/Pelatih/edit/{id}', [PelatihController::class,'edit'])->name('Pelatih.edit')-> middleware('UserAccess:2');
    Route::get('admin/user/Pelatih/delete/{id}', [PelatihController::class,'delete'])->name('Pelatih.delete')-> middleware('UserAccess:2');
    Route::post('admin/user/Pelatih/update/{id}',[PelatihController::class,'update'])->name('Pelatih.update')-> middleware('UserAccess:2');
    Route::get('admin/user/Pelatih/show/{id}', [PelatihController::class,'show'])->name('Pelatih.show')-> middleware('UserAccess:2');
    Route::get('admin/user/Pelatih/create/{id}', [PelatihController::class,'create'])->name('Pelatih.create')-> middleware('UserAccess:2');
    Route::get('admin/user/Pelatih/destroy/{id}', [PelatihController::class, 'destroy'])->name('Pelatih.destroy')->middleware('UserAccess:2');


    Route::resource('admin/user/Official', OfficialController::class)->middleware('UserAccess:2');
    Route::get('admin/user/Official', [OfficialController::class,'index'])->name('Official.index')-> middleware('UserAccess:2');
    Route::post('admin/user/Official/store', [OfficialController::class, 'store'])->name('Official.store')-> middleware('UserAccess:2');
    Route::get('admin/user/Official/edit/{id}', [OfficialController::class,'edit'])->name('Official.edit')-> middleware('UserAccess:2');
    Route::get('admin/user/Official/delete/{id}', [OfficialController::class,'delete'])->name('Official.delete')-> middleware('UserAccess:2');
    Route::post('admin/user/Official/update/{id}',[OfficialController::class,'update'])->name('Official.update')-> middleware('UserAccess:2');
    Route::get('admin/user/Official/show/{id}', [OfficialController::class,'show'])->name('Official.show')-> middleware('UserAccess:2');
    Route::get('admin/user/Official/create/{id}', [OfficialController::class,'create'])->name('Official.create')-> middleware('UserAccess:2');
    Route::get('admin/user/Official/destroy/{id}', [OfficialController::class, 'destroy'])->name('Official.destroy')->middleware('UserAccess:2');

Route::resource('admin/user/manajer',ManajerController::class)->middleware('UserAccess:2');
Route::get('admin/user/manajer', [ManajerController::class,'index'])->name('manajer.index')-> middleware('UserAccess:2');
Route::post('admin/user/manajer/store', [ManajerController::class, 'store'])->name('manajer.store')-> middleware('UserAccess:2');
Route::get('admin/user/manajer/edit/{id}', [ManajerController::class,'edit'])->name('manajer.edit')-> middleware('UserAccess:2');
Route::get('admin/user/manajer/delete/{id}', [ManajerController::class,'delete'])->name('manajer.delete')-> middleware('UserAccess:2');
Route::post('admin/user/manajer/update/{id}',[ManajerController::class,'update'])->name('manajer.update')-> middleware('UserAccess:2');
Route::get('admin/user/manajer/show/{id}', [ManajerController::class,'show'])->name('manajer.show')-> middleware('UserAccess:2');
Route::get('admin/user/manajer/create/{id}', [ManajerController::class,'create'])->name('manajer.create')-> middleware('UserAccess:2');
Route::get('admin/user/manajer/destroy/{id}', [ManajerController::class, 'destroy'])->name('manajer.destroy')->middleware('UserAccess:2');

Route::resource('admin/user/Pemain', PemainController::class)->middleware('UserAccess:2');
Route::post('admin/user/Pemain/store', [PemainController::class, 'store'])->name('pemain.store')-> middleware('UserAccess:2');
Route::get('admin/user/Pemain/edit/{id}', [PemainController::class,'edit'])->name('pemain.edit')-> middleware('UserAccess:2');
Route::get('admin/user/Pemain/delete/{id}', [PemainController::class,'delete'])->name('pemain.delete')-> middleware('UserAccess:2');
Route::post('admin/user/Pemain/update/{id}',[PemainController::class,'update'])->name('pemain.update')-> middleware('UserAccess:2');
Route::get('admin/user/Pemain/index}', [PemainController::class,'show'])->name('pemain.index')-> middleware('UserAccess:2');
Route::get('admin/user/Pemain/create/{id}', [PemainController::class,'create'])->name('pemain.create')-> middleware('UserAccess:2');
Route::get('admin/user/Pemain/destroy/{id}', [PemainController::class, 'destroy'])->name('pemain.destroy')->middleware('UserAccess:2');
Route::get('admin/user/Pemain/show/{id}', [PemainController::class,'show'])->name('pemain.show')-> middleware('UserAccess:2');



Route::resource('admin/user/Pj-Supporter-Guru', pjsupporterguruController::class)->middleware('UserAccess:2');
Route::post('admin/user/Pj-Supporter-Guru/store', [pjsupporterguruController::class, 'store'])->name('Pj-Supporter-Guru.store')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Guru/edit/{id}', [pjsupporterguruController::class,'edit'])->name('Pj-Supporter-Guru.edit')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Guru/delete/{id}', [pjsupporterguruController::class,'delete'])->name('Pj-Supporter-Guru.delete')-> middleware('UserAccess:2');
Route::post('admin/user/Pj-Supporter-Guru/update/{id}',[pjsupporterguruController::class,'update'])->name('Pj-Supporter-Guru.update')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Guru/show/{id}', [pjsupporterguruController::class,'show'])->name('Pj-Supporter-Guru.show')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Guru/create/{id}', [pjsupporterguruController::class,'create'])->name('Pj-Supporter-Guru.create')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Guru/destroy/{id}', [pjsupporterguruController::class, 'destroy'])->name('Pj-Supporter-Guru.destroy')->middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Guru/index', [pjsupporterguruController::class,'index'])->name('Pj-Supporter-Guru.index')-> middleware('UserAccess:2');

Route::resource('admin/user/Pj-Supporter-Siswa',pjsupportersiswaController::class)->middleware('UserAccess:2');
Route::post('admin/user/Pj-Supporter-Siswa/store', [pjsupportersiswaController::class, 'store'])->name('Pj-Supporter-Siswa.store')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Siswa/edit/{id}', [pjsupportersiswaController::class,'edit'])->name('Pj-Supporter-Siswa.edit')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Siswa/delete/{id}', [pjsupportersiswaController::class,'delete'])->name('Pj-Supporter-Siswa.delete')-> middleware('UserAccess:2');
Route::post('admin/user/Pj-Supporter-Siswa/update/{id}',[pjsupportersiswaController::class,'update'])->name('Pj-Supporter-Siswa.update')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Siswa/show/{id}', [pjsupportersiswaController::class,'show'])->name('Pj-Supporter-Siswa.show')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Siswa/create/{id}', [pjsupportersiswaController::class,'create'])->name('Pj-Supporter-Siswa.create')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Siswa/destroy/{id}', [pjsupportersiswaController::class, 'destroy'])->name('Pj-Supporter-Siswa.destroy')->middleware('UserAccess:2');
Route::get('admin/user/Pj-Supporter-Siswa/index', [pjsupportersiswaController::class,'index'])->name('Pj-Supporter-Siswa.index')-> middleware('UserAccess:2');

Route::resource('admin/user/Pj-Medis',pjmedisController::class)->middleware('UserAccess:2');
Route::post('admin/user/Pj-Medis/store', [pjmedisController::class, 'store'])->name('Pj-Medis.store')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Medis/edit/{id}', [pjmedisController::class,'edit'])->name('Pj-Medis.edit')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Medis/delete/{id}', [pjmedisController::class,'delete'])->name('Pj-Medis.delete')-> middleware('UserAccess:2');
Route::post('admin/user/Pj-Medis/update/{id}',[pjmedisController::class,'update'])->name('Pj-Medis.update')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Medis/show/{id}', [pjmedisController::class,'show'])->name('Pj-Medis.show')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Medis/create/{id}', [pjmedisController::class,'create'])->name('Pj-Medis.create')-> middleware('UserAccess:2');
Route::get('admin/user/Pj-Medis/destroy/{id}', [pjmedisController::class, 'destroy'])->name('Pj-Medis.destroy')->middleware('UserAccess:2');
Route::get('admin/user/Pj-Medis/index', [pjmedisController::class,'index'])->name('Pj-Medis.index')-> middleware('UserAccess:2');

Route::resource('admin/user/Jurnalis',jurnalisController::class)->middleware('UserAccess:2');
Route::post('admin/user/Jurnalis/store', [jurnalisController::class, 'store'])->name('Jurnalis.store')-> middleware('UserAccess:2');
Route::get('admin/user/Jurnalis/edit/{id}', [jurnalisController::class,'edit'])->name('Jurnalis.edit')-> middleware('UserAccess:2');
Route::get('admin/user/Jurnalis/delete/{id}', [jurnalisController::class,'delete'])->name('Jurnalis.delete')-> middleware('UserAccess:2');
Route::post('admin/user/Jurnalis/update/{id}',[jurnalisController::class,'update'])->name('Jurnalis.update')-> middleware('UserAccess:2');
Route::get('admin/user/Jurnalis/show/{id}', [jurnalisController::class,'show'])->name('Jurnalis.show')-> middleware('UserAccess:2');
Route::get('admin/user/Jurnalis/create/{id}', [jurnalisController::class,'create'])->name('Jurnalis.create')-> middleware('UserAccess:2');
Route::get('admin/user/Jurnalis/destroy/{id}', [jurnalisController::class, 'destroy'])->name('Jurnalis.destroy')->middleware('UserAccess:2');
Route::get('admin/user/Jurnalis/index',[jurnalisController::class,'index'])->name('Jurnalis.index')->middleware('UserAccess::2');


Route::resource('admin/user/informasiumum', InformasiumumController::class)->middleware('UserAccess:2');

    Route::get('admin/Bagan-Championship', [BaganChampionshipController::class, 'index'])->name('Bagan-Championship.index')-> middleware('UserAccess:1');
    Route::get('admin/Bagan-Championship/delete/{id}', [BaganChampionshipController::class, 'delete'])->name('Bagan-Championship.delete')-> middleware('UserAccess:1');
    Route::get('admin/Bagan-Championship/show/{id}', [BaganChampionshipController::class, 'show'])->name('Bagan-Championship.show')-> middleware('UserAccess:1');
    Route::Post('admin/Bagan-Championship/update/{id}', [BaganChampionshipController::class, 'update'])->name('Bagan-Championship.update')-> middleware('UserAccess:1');
    Route::delete('admin/Bagan-Championship/destroy/{id}', [BaganChampionshipController::class, 'destroy'])->name('Bagan-Championship.destroy')-> middleware('UserAccess:1');


    Route::get('admin/Bagan-Championship/create', [BaganChampionshipController::class, 'create'])->name('Bagan-Championship.create')-> middleware('UserAccess:1');
      Route::post('admin/Bagan-Championship/store', [BaganChampionshipController::class, 'store'])->name('Bagan-Championship.store')-> middleware('UserAccess:1');
    Route::get('admin/Bagan-Championship/index', [BaganChampionshipController::class, 'index'])->name('Bagan-Championship.index')-> middleware('UserAccess:1');
    Route::get('admin/Bagan-Championship/show', [BaganChampionshipController::class, 'show'])->name('Bagan-Championship.show')-> middleware('UserAccess:1');
    Route::get('admin/Bagan-Championship/edit/{id}', [BaganChampionshipController::class, 'edit'])->name('Bagan-Championship.edit')-> middleware('UserAccess:1');
    Route::post('admin/Bagan-Championship/update/{id}', [BaganChampionshipController::class, 'update'])->name('Bagan-Championship.update')-> middleware('UserAccess:1');
    Route::delete('admin/Bagan-Championship/destroy/{id}', [BaganChampionshipController::class, 'destroy'])->name('Bagan-Championship.destroy')-> middleware('UserAccess:1');
    Route::get('admin/Jadwal', [JadwalController::class, 'index'])->name('Jadwal.index')-> middleware('UserAccess:1');
    Route::get('admin/Jadwal/create', [JadwalController::class, 'create'])->name('Jadwal.create')-> middleware('UserAccess:1');
    Route::get('admin/Jadwal/show', [DetailJadwalController::class, 'show'])->name('Jadwal.show')-> middleware('UserAccess:1');
    Route::post('admin/Jadwal/store', [JadwalController::class, 'store'])->name('Jadwal.store')-> middleware('UserAccess:1');
    Route::get('admin/Jadwal/edit/{id}', [JadwalController::class, 'edit'])->name('Jadwal.edit')-> middleware('UserAccess:1');
    Route::Post('admin/Jadwal/update/{id}', [JadwalController::class, 'update'])->name('Jadwal.update')-> middleware('UserAccess:1');
    Route::delete('admin/Jadwal/destroy/{id}', [JadwalController::class, 'destroy'])->name('Jadwal.destroy')-> middleware('UserAccess:1');

    Route::get('admin/Auth-User', [AuthUserController::class, 'index'])->name('Auth-User.index')-> middleware('UserAccess:1');
Route::get('admin/Auth-User/show/{id}', [AuthUserController::class, 'show'])->name('Auth-User.show')-> middleware('UserAccess:1');
    Route::get('admin/Auth-User/delete/{id}',[AuthUserController::class, 'delete'])->name('Auth-User.delete')-> middleware('UserAccess:1');
    Route::put('admin/Auth-User/update/{id}', [AuthUserController::class, 'update'])->name('Auth-User.update')-> middleware('UserAccess:1');
    Route::post('admin/Auth-User/registered', [AuthUserController::class, 'registered'])->name('Auth-User.registered')-> middleware('UserAccess:1');
    Route::post('admin/Auth-User/loadReferralRegister',[AuthUserController::class, 'loadReferralRegister'])->name('Auth-User.loadReferralRegister')-> middleware('UserAccess:1');





        
    // Route::resource('admin/Group-klasmen', GrubController::class)-> middleware('UserAccess:1');
    // Route::get('admin/Group-klasmen/',[GrubController::class,'index'])->name('Group-klasmen.index')-> middleware('UserAccess:1');
    // Route::get('admin/Group-Klasmen/edit/{id}', [GrubController::class, 'edit'])->name('Group-klasmen.edit')-> middleware('UserAccess:1');
    // Route::Post('admin/Group-Klasmen/update/{id}', [GrubController::class, 'update'])->name('Group-klasmen.update')-> middleware('UserAccess:1');
    // Route::delete('admin/Group-Klasmen/destroy/{id}', [GrubController::class, 'destroy'])->name('Group-klasmen.destroy')-> middleware('UserAccess:1');
    // Route::get('admin/Group-klasmen', [GrubController::class, 'index'])->name('Group-klasmen.index')-> middleware('UserAccess:1');
    // Route::get('admin/Auth-User', [AuthUserController::class, 'index'])->name('Auth-User.index')-> middleware('UserAccess:1');






    
    // Route::get('/register', [UserController::class, 'loadRegister'])->name('register');
    // Route::post('/user-register', [UserController::class, 'registered'])->name('registered');
    // Route::get('/referral-register',[UserController::class, 'loadReferralRegister']);
    // Route::get('/email-verification/{token}',[UserController::class, 'emailVerification']);
    // Route::get('/login', [UserController::class, 'loadLogin']);
    // Route::post('/login', [UserController::class, 'userLogin'])->name('login');;

    //user admin
    Route::resource('admin/users', AuthUserController::class)-> middleware('UserAccess:1');
    Route::resource('user/users', UserController::class)-> middleware('UserAccess:2');
    //route unisharp
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    
    // Route::post('/user-register', [AuthUserController::class, 'registered'])->name('registered');
    // Route::get('/referral-register',[AuthUserController::class, 'loadReferralRegister']);
    // Route::get('/email-verification/{token}',[AuthUserController::class, 'emailVerification']);
});
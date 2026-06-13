<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\Web\WelcomeController;
use App\Http\Controllers\Website\Web\Sections\AuthenticationController;
use App\Http\Controllers\Website\Web\Pages\StoreController;
use App\Http\Controllers\Website\Web\Pages\ContactUsController;
use App\Http\Controllers\Website\Web\Pages\PrivacyPolicyController;
use App\Http\Controllers\Website\Web\Pages\EncryptionController;
use App\Http\Controllers\Website\Web\Sections\Benefits\GeneralController;
use App\Http\Controllers\Website\Web\Sections\Benefits\SpecialController;
use App\Http\Controllers\Website\Web\Sections\Benefits\BespokeController;
use App\Http\Controllers\Website\Dashbord\Pages\DashbordController;
use App\Http\Controllers\Website\Dashbord\Pages\ProjectController as WebProjectController;
use App\Http\Controllers\Website\Dashbord\Pages\DiscountCodeController;
use App\Http\Controllers\Website\Dashbord\Pages\ChatController as WebChatController;
use App\Http\Controllers\Website\Dashbord\Pages\InvoicesController;
use App\Http\Controllers\Website\Dashbord\Pages\SettingController as WebSettingController;
use App\Http\Controllers\Logins\Pages\LoginController;
use App\Http\Controllers\Company\Programmers\Pages\DashboardController as CompanyDashboardController;
use App\Http\Controllers\Company\Programmers\Pages\HistoryController;
use App\Http\Controllers\Company\Programmers\Pages\SectionsController;
use App\Http\Controllers\Company\Programmers\Pages\Chats\AddGroupController;
use App\Http\Controllers\Company\Programmers\Pages\Chats\ChatController as CompanyChatController;
use App\Http\Controllers\Company\Programmers\Pages\ArchiveController;
use App\Http\Controllers\Company\Programmers\Pages\Analytics\CompanyAnalyticsController;
use App\Http\Controllers\Company\Programmers\Pages\Analytics\BranchAnalyticsController;
use App\Http\Controllers\Company\Programmers\Pages\Analytics\EmployeeAnalysisController;
use App\Http\Controllers\Company\Programmers\Pages\Users\AddUsersController;
use App\Http\Controllers\Company\Programmers\Pages\Users\UsersController;
use App\Http\Controllers\Company\Programmers\Pages\Users\UserDetailsController;
use App\Http\Controllers\Company\Programmers\Pages\Users\PermissionsController;
use App\Http\Controllers\Company\Programmers\Pages\Users\PromotionsController;
use App\Http\Controllers\Company\Programmers\Pages\Clients\AddClientsController;
use App\Http\Controllers\Company\Programmers\Pages\Clients\ClientsController;
use App\Http\Controllers\Company\Programmers\Pages\Clients\ClientDetailsController;
use App\Http\Controllers\Company\Programmers\Pages\Clients\AccountsController;
use App\Http\Controllers\Company\Programmers\Pages\Reports\CompanyReportController;
use App\Http\Controllers\Company\Programmers\Pages\Reports\EmployeeReportController;
use App\Http\Controllers\Company\Programmers\Pages\Reports\BranchReportController;
use App\Http\Controllers\Company\Programmers\Pages\Reports\CustomerReportController;
use App\Http\Controllers\Company\Programmers\Pages\Reports\FinancialReportController;
use App\Http\Controllers\Company\Programmers\Pages\Requests\RequestsCompanyController;
use App\Http\Controllers\Company\Programmers\Pages\Requests\RequestsClientsController;
use App\Http\Controllers\Company\Programmers\Pages\Requests\RequestsPostsController;
use App\Http\Controllers\Company\Programmers\Pages\Tasks\TasksDetailsController;
use App\Http\Controllers\Company\Programmers\Pages\Tasks\ApprovalsController;
use App\Http\Controllers\Company\Programmers\Pages\Tasks\ProjectController as CompanyProjectController;
use App\Http\Controllers\Company\Programmers\Pages\ProjectDetailsController;
use App\Http\Controllers\Company\Programmers\Pages\TeamController;
use App\Http\Controllers\Company\Programmers\Pages\ProjectsController;
use App\Http\Controllers\Company\Calls\VideoCallController;
use App\Http\Controllers\Company\Calls\RoomController;
use App\Http\Controllers\Company\Programmers\Pages\WarningsController;
use App\Http\Controllers\Company\Programmers\Pages\PostsController;
use App\Http\Controllers\Company\Programmers\Pages\HostingController;
use App\Http\Controllers\Company\Programmers\Pages\CompanyAuthenticationController;
use App\Http\Controllers\Company\Programmers\Pages\RecoveryLogController;
use App\Http\Controllers\Company\Programmers\Pages\CompanyContactUsController;
use App\Http\Controllers\Company\Programmers\Pages\CompanySettingsController;

// Website Web Routes
Route::controller(WelcomeController::class)->group(function () {
  Route::get('/', 'index')->name('welcome');
});

Route::controller(AuthenticationController::class)->group(function () {
  Route::get('/authentication', 'index')->name('authentication');
});

Route::controller(StoreController::class)->group(function () {
  Route::get('/store', 'index')->name('store');
});

Route::controller(ContactUsController::class)->group(function () {
  Route::get('/contact-us', 'index')->name('contact-us');
});

Route::controller(PrivacyPolicyController::class)->group(function () {
  Route::get('/privacy-policy', 'index')->name('privacy-policy');
});

Route::controller(GeneralController::class)->group(function () {
  Route::get('/general', 'index')->name('general');
});

Route::controller(SpecialController::class)->group(function () {
  Route::get('/special', 'index')->name('special');
});

Route::controller(BespokeController::class)->group(function () {
  Route::get('/bespoke', 'index')->name('bespoke');
});

Route::controller(EncryptionController::class)->group(function () {
  Route::get('/encryption', 'index')->name('encryption');
});

// Website Dashboard Routes
Route::controller(DashbordController::class)->group(function () {
  Route::get('/dashbord', 'index')->name('dashbord');
});

Route::controller(WebProjectController::class)->group(function () {
  Route::get('/project', 'index')->name('project');
});

Route::controller(DiscountCodeController::class)->group(function () {
  Route::get('/discount-code', 'index')->name('discount-code');
});

Route::controller(WebChatController::class)->group(function () {
  Route::get('/chat', 'index')->name('chat');
});

Route::controller(InvoicesController::class)->group(function () {
  Route::get('/invoice', 'index')->name('invoice');
});

Route::controller(WebSettingController::class)->group(function () {
  Route::get('/setting', 'index')->name('setting');
});

// Login Route
Route::controller(LoginController::class)->group(function () {
  Route::get('/company/login', 'index')->name('company.login');
});

// Company Routes
Route::controller(CompanyDashboardController::class)->group(function () {
  Route::get('/company/dashbord', 'index')->name('company.dashbord');
});

Route::controller(HistoryController::class)->group(function () {
  Route::get('/company/history', 'index')->name('company.history');
});

Route::controller(SectionsController::class)->group(function () {
  Route::get('/company/sections', 'index')->name('company.sections');
});

Route::controller(AddGroupController::class)->group(function () {
  Route::get('/company/chats/add/group', 'index')->name('company.chats.add.group');
});

Route::controller(CompanyChatController::class)->group(function () {
  Route::get('/company/chats/chat', 'index')->name('company.chats.chat');
});

Route::controller(ArchiveController::class)->group(function () {
  Route::get('/company/archive', 'index')->name('company.archive');
});

Route::controller(CompanyAnalyticsController::class)->group(function () {
  Route::get('/company/analytics', 'index')->name('company.analytics');
});

Route::controller(BranchAnalyticsController::class)->group(function () {
  Route::get('/company/branch', 'index')->name('company.branch');
});

Route::controller(EmployeeAnalysisController::class)->group(function () {
  Route::get('/company/employee', 'index')->name('company.employee');
});

Route::controller(AddUsersController::class)->group(function () {
  Route::get('/company/add-users', 'index')->name('company.add-users');
});

Route::controller(UsersController::class)->group(function () {
  Route::get('/company/users', 'index')->name('company.users');
});

Route::controller(UserDetailsController::class)->group(function () {
  Route::get('/company/user-details', 'index')->name('company.user-details');
});

Route::controller(PermissionsController::class)->group(function () {
  Route::get('/company/permissions', 'index')->name('company.permissions');
});

Route::controller(PromotionsController::class)->group(function () {
  Route::get('/company/promotions', 'index')->name('company.promotions');
});

Route::controller(AddClientsController::class)->group(function () {
  Route::get('/company/add-clients', 'index')->name('company.add-clients');
});

Route::controller(ClientsController::class)->group(function () {
  Route::get('/company/clients', 'index')->name('company.clients');
});

Route::controller(ClientDetailsController::class)->group(function () {
  Route::get('/company/client-details', 'index')->name('company.client-details');
});

Route::controller(AccountsController::class)->group(function () {
  Route::get('/company/accounts', 'index')->name('company.accounts');
});

Route::controller(CompanyReportController::class)->group(function () {
  Route::get('/company/report-company', 'index')->name('company.report-company');
});

Route::controller(EmployeeReportController::class)->group(function () {
  Route::get('/company/report-employee', 'index')->name('company.report-employee');
});

Route::controller(BranchReportController::class)->group(function () {
  Route::get('/company/report-branch', 'index')->name('company.report-branch');
});

Route::controller(CustomerReportController::class)->group(function () {
  Route::get('/company/report-customer', 'index')->name('company.report-customer');
});

Route::controller(FinancialReportController::class)->group(function () {
  Route::get('/company/report-financial', 'index')->name('company.report-financial');
});

Route::controller(RequestsCompanyController::class)->group(function () {
  Route::get('/company/requests-company', 'index')->name('company.requests-company');
});

Route::controller(RequestsClientsController::class)->group(function () {
  Route::get('/company/requests-clients', 'index')->name('company.requests-clients');
});

Route::controller(RequestsPostsController::class)->group(function () {
  Route::get('/company/requests-posts', 'index')->name('company.requests-posts');
});

Route::controller(TasksDetailsController::class)->group(function () {
  Route::get('/company/tasks-details', 'index')->name('company.tasks-details');
});

Route::controller(ApprovalsController::class)->group(function () {
  Route::get('/company/approvals', 'index')->name('company.approvals');
});

Route::controller(CompanyProjectController::class)->group(function () {
  Route::get('/company/project', 'index')->name('company.project');
});

Route::controller(ProjectDetailsController::class)->group(function () {
  Route::get('/company/project-details', 'index')->name('company.project-details');
});

Route::controller(TeamController::class)->group(function () {
  Route::get('/company/team', 'index')->name('company.team');
});

Route::controller(ProjectsController::class)->group(function () {
  Route::get('/company/projects', 'index')->name('company.projects');
});

// Calls Routes
Route::controller(VideoCallController::class)->group(function () {
  Route::get('/call', 'index')->name('call');
});

Route::controller(RoomController::class)->group(function () {
  Route::get('/video-call/{roomId}', 'show')->name('video-call.room');
});

// Additional Company Routes
Route::controller(WarningsController::class)->group(function () {
  Route::get('/company/warnings', 'index')->name('company.warnings');
});

Route::controller(PostsController::class)->group(function () {
  Route::get('/company/posts', 'index')->name('company.posts');
});

Route::controller(HostingController::class)->group(function () {
  Route::get('/company/hosting', 'index')->name('company.hosting');
});

Route::controller(CompanyAuthenticationController::class)->group(function () {
  Route::get('/company/authentication', 'index')->name('company.authentication');
});

Route::controller(RecoveryLogController::class)->group(function () {
  Route::get('/company/recovery-log', 'index')->name('company.recovery-log');
});

Route::controller(CompanyContactUsController::class)->group(function () {
  Route::get('/company/contact-us', 'index')->name('company.contact-us');
});

Route::controller(CompanySettingsController::class)->group(function () {
  Route::get('/company/settings', 'index')->name('company.settings');
});

// Route::get('/test-403', function () {
//   return response()->view('errors.403', [], 403);
// });

<?php

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

use Illuminate\Support\Facades\Route;


//Clear Cache facade value:
Route::get('/cc', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Cashe</h1>';
});

Auth::routes();



Route::group(['middleware'=>'LogVisits'],function(){
Route::get('/', 'IndexController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/fact', 'IndexController@fact')->name('fact');
Route::get('/mission', 'IndexController@mission')->name('mission');
Route::get('/teaching', 'IndexController@teaching')->name('teaching');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/faculty', 'IndexController@faculty')->name('faculty');
Route::get('/doctor-profile/{id}', 'IndexController@doctorProfile')->name('doctor-profile');
Route::get('/gallery', 'IndexController@gallery')->name('gallery');

// appoinmant start one
Route::get('/appointment', 'AppointmentController@index')->name('appointment');
Route::get('/getConsultant/{id}', 'AppointmentController@getConsultant')->name('getConsultant');
Route::POST('saveAppointment', 'AppointmentController@saveAppointment')->name('saveAppointment');
Route::get('/appoinmentFinish/{id}', 'AppointmentController@appoinmentFinish')->name('appoinmentFinish');
Route::POST('finishAppointment', 'AppointmentController@finishAppointment')->name('finishAppointment');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/notices', 'NoticeController@index')->name('notices');
Route::get('/notice/{id}', 'NoticeController@singleNotice')->name('notice');
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
Route::get('/courses', 'CourseController@index')->name('courses');
Route::get('/course/{id}', 'CourseController@courseDetails')->name('courseDetails');

// online admission start here
Route::get('/admission', 'AdmissionController@index')->name('admission');
Route::get('/registration', 'AdmissionController@registration')->name('registration');
Route::POST('/registration', 'AdmissionController@registrationStore')->name('registration');
Route::get('/admissionPay/{id}', 'AdmissionController@admissionPay')->name('admissionPay');
});

Route::group(['namespace'=>'Admin'],function(){
    Route::GET('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::POST('admin-login','Auth\LoginController@login');
    Route::get('admin/home','HomeController@index')->name('admin.home');
    Route::resource('admin/course', 'CourseController');
    Route::resource('admin/notice', 'NoticeController');
    Route::resource('admin/faculty', 'FacultyController');
    Route::resource('admin/consultant', 'ConsultantController');
    Route::resource('admin/module', 'ModuleController');
    Route::resource('admin/patient', 'PatientController');
    Route::resource('admin/appointment', 'AppointmentController');
    Route::resource('admin/consultantavailabitiy', 'ConsultantavailabilityController');
    Route::resource('admin/quiz', 'QuizController');
    Route::resource('admin/group', 'GroupController');
    Route::resource('admin/grading', 'GradingController');
    Route::resource('admin/coursess', 'SessionController');
    Route::resource('admin/exam', 'ExamController');
    Route::resource('admin/examsess', 'ExamsessionController');
    Route::resource('admin/user', 'UserController');
    Route::get('/student/marksheet/download','UserController@downloadMarksheet')->name('download.student.marksheet');
    Route::post('/student/marksheet/download/pdf','UserController@marksheetDownload')->name('download.student.marksheet.pdf');
    Route::resource('admin/ranking', 'RankingController');
    Route::resource('admin/result', 'ResultController');
    Route::get('admin/userResult/{id}', 'ResultController@quizUserResult')->name('quiz.userResult');

    Route::get('admin/marksheet/', 'MarksheetController@index')->name('marksheet');
    Route::get('admin/userResultSheet/{id}', 'MarksheetController@quizUserResult')->name('marksheet.userResult');
    Route::get('admin/diplomaCourse/{id}', 'MarksheetController@diplomaCourse')->name('marksheet.diplomaCourse');
     Route::get('admin/marksheetModule/{id}/{user_id}', 'MarksheetController@QuizModuleByCourseId')->name('marksheet.getModule');

    Route::get('admin/getModule/{id}/{user_id}', 'ResultController@QuizModuleByCourseId')->name('quiz.getModule');
    Route::get('admin/quizList/{id}/{user_id}', 'ResultController@quizList')->name('quiz.quizList');

    Route::resource('admin/quizoption', 'QuizoptionController');
    Route::get('admin/question/{id}','QuizoptionController@questionList')->name('questionList');
    Route::get('admin/createQuestion/{id}/edit','QuizoptionController@createQuestion')->name('createQuestion');

    Route::get('admin/consDateTimeList/{id}','ConsdatetimeController@index')->name('consDateTimeList.index');
    Route::get('admin/consDateTime/{id}','ConsdatetimeController@create')->name('consDateTime.create');
    Route::post('admin/saveDateTime','ConsdatetimeController@store')->name('consDateTime.store');
    Route::get('admin/consDateTimeEdit/{id}','ConsdatetimeController@edit')->name('consDateTime.edit');
    Route::PATCH('admin/consDateTimeUpdate/{id}','ConsdatetimeController@update')->name('consDateTime.update');

    Route::get('admin/getCourse/{id}','ModuleController@getCourse')->name('admin.getCourse');

    //semester create route start
      Route::resource('semesters', 'SemesterController');
    //semester create route end

    //marksheet downloads start
      Route::get('download/student/marksheet','MarksheetDownloadController@getmarksheetView')->name('get.marksheet.view');
      Route::post('process/student/marksheet','MarksheetDownloadController@downloadmarksheetView')->name('process.marksheet.view');
    //marksheet downloads start


    //admin student admission 
    Route::post('admin/new/admit/{id}','UserController@newAdmission')->name('new_admit');


    //payment route start
     Route::get('/payment','PaymentController@index');
     Route::post('/success','PaymentController@success')->name('success');
     Route::post('/fail','PaymentController@fail')->name('fail');
    //payment route end
});

Route::group(['namespace'=>'User'],function(){
    Route::get('user/home','HomeController@index')->name('user.home');
    Route::get('user/history','HistoryController@index')->name('user.history');
    Route::get('user/answerDetails/{id}','HistoryController@answerDetails')->name('user.answerDetails');
    Route::get('user/startQuiz/{id}','QuizController@startQuiz')->name('user.startQuiz');
    Route::get('user/getModule/{id}','QuizController@QuizModuleByCourseId')->name('user.getModule');
    Route::get('student/getModule/{id}','QuizController@QuizModuleByCourseIdStudent')->name('user.getModule.student');
    Route::get('user/quizList/{id}','QuizController@quizList')->name('user.quizList');
    Route::post('user/saveQuiz','QuizController@saveQuiz')->name('user.saveQuiz');
    Route::get('user/view/course','HomeController@userCourse')->name('user.course');
    Route::get('user/course/payment/{semesterid}/{studentid}','HomeController@userCoursePayment');
});
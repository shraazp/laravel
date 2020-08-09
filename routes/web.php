<?php
use Illuminate\Support\Facades\Session;


use App\admin;
use App\mark;
use App\usr;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/Radmin', function () {
    return view('Admin/login');
});


Route::get('/dadmin', function () {
	if(Session::get('username'))
	{
		return view('Admin/dashboard');	
	}
    else
    {
    	return view('Admin/login');
    }
});




//Route::get('/madmin', function () {
  //  $res = mark::all();
   // return view('Admin/marku',compact('res'));
//});

  

//Route::get('edit/{id}','homecontroller@editmarks');

//Route::post('editqry','homecontroller@editqry');


Route::get('deleteusr/{id}','homecontroller@deleteusr');

Route::post('adminlogin','homecontroller@adminlogin');
Route::get('alogout','homecontroller@alogout');


Route::get('/Uuser', function () {
    return view('User/ulogin');
});

Route::get('ulogout','homecontroller@ulogout');


Route::get('/addusr', function () {
    return view('admin/addusr');
});
Route::post('addqry', 'homecontroller@addqry');

Route::get('/addusr', function () {
    $res = usr::all();
    return view('Admin/addusr',compact('res'));
});

Route::get('editusr/{sid}','Homecontroller@editusr');

Route::post('editusrqry','homecontroller@editusrqry');



// Route::get('/madmin', function () {
//     return view('admin/marku');
// });
Route::post('userlogin','homecontroller@userlogin');
Route::get('/marks', function () {
    if(Session::get('rno'))
    {
        $rno =Session::get('rno');
        $sid = usr::where('rno','=',$rno)->value('sid');
        $sdetails = usr::where('rno','=',$rno)->get(); 
        $marks = mark::where('student_id','=',$sid)->get();
        return view('User/marks',compact('marks','sdetails')); 
    }
    else
    {
        return view('User/ulogin');
    }
});

Route::get('marku/{sid}','Homecontroller@marku');
Route::get('viewmark/{sid}','Homecontroller@viewmark');


Route::get('editmark/{mid}','Homecontroller@editmark');

Route::post('editmarkqry','homecontroller@editmarkqry');

Route::get('deletemark/{mid}','homecontroller@deletemark');

    

   
Route::post('addmark', 'homecontroller@addmark');


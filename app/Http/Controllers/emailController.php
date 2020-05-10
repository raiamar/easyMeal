<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\resources\views\welcome;

class emailController extends Controller
{
        function index(){
    	return view ('welcome');
    }
    function send(Request $request){
    	$this ->validate($request, [
            'name' => ['required', 'min:3'],
    		'message' => ['required', 'min:5']
    	]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message,
        );

        Mail::to('raiamar021@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thank you for your precious feedback!!');
    }
}

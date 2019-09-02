<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                     
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
       $user = null;

		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		
    	return view('index',compact(['user']));
    }
	
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getAbout()
    {
       $user = null;

		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		
    	return view('about',compact(['user']));
    }
	
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getServices()
    {
       $user = null;

		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		
    	return view('services',compact(['user']));
    }
/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getGallery()
    {
       $user = null;

		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		
    	return view('gallery',compact(['user']));
    }
/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getContact()
    {
       $user = null;

		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		
    	return view('contact',compact(['user']));
    }


    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postContact(Request $request)
    {
    	if(Auth::check())
		{
			$user = Auth::user();
		}
		else
        {
        	return redirect()->intended('/');
        }
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'name' => 'required',
                             'phone' => 'required',
                             'email' => 'required|email',
                             'message' => 'required'                          
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
             $this->helpers->sendMessage($req);
	        Session::flash("contact-status","ok");
			return redirect()->intended('contact');
         }        
    }
	
	
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "1535561942737";
    	return $ret;
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getSSL()
    {
        $ret = "RIqwe9mJtCFq1vrMCjsFSz0zSzVc5uxdJLYJ5FW17B8.2in40QlX-Mu9nMilpG6Rhx8eWyhC5aMWleDfOBl19TU";
    	return $ret;
    }


}

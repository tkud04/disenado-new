<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class AdminController extends Controller {

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
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('admin?return=cobra');
        }
        
		$c = $this->helpers->categories;
		$transactions = $this->helpers->adminGetTransactions();
		$deals = $this->helpers->adminGetDeals();
		$auctions = $this->helpers->adminGetAuctions();
		$adminStats = $this->helpers->adminGetStats();
		$adminRecentOrders = $this->helpers->adminGetOrders();
		$adminRecentTransactions = $this->helpers->adminGetTransactions();
    	return view('admin.index',compact(['user','c','transactions','deals','auctions','adminStats','adminRecentOrders','adminRecentTransactions']));
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getUsers()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		$users = $this->helpers->adminGetUsers();
    	return view('admin.users',compact(['users','user','c']));
    }	
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getUser(Request $request)
    {
       $user = null;
       $account = null; 
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
            $req = $request->all();
           //dd($req);
          $em = (isset($req['email'])) ? $req['email'] : null; 
           
         $c = $this->helpers->categories;
		$account = $this->helpers->getUser($em); 
    	return view('admin.user',compact(['account','user','c']));
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
    }	
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getDeals()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		$deals = $this->helpers->adminGetDeals();
    	return view('admin.deals',compact(['user','c','deals']));
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getDeal()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		$deal = null;
    	return view('admin.deal',compact(['user','c','deal']));
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getAddDeal()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		#$deals = $this->helpers->adminGetDeals();
    	return view('admin.add-deal',compact(['user','c']));
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postAddDeal(Request $request)
    {
    	if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'name' => 'required',
                             'type' => 'required',
                             'category' => 'required',
                             'description' => 'required',
                             'amount' => 'required|numeric',
                             'images' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	#$req["user_id"] = $user->id; 
             $this->helpers->createDeal($req);
	        Session::flash("add-deal-status","ok");
			return redirect()->intended('cobra-deals');
         }        
    }
    
     /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getFundWallet(Request $request)
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');	

            $req = $request->all();
            $em = (isset($req['email'])) ? $req['email'] : ""; 
		    $c = $this->helpers->categories;
		   
       	return view('admin.fund-wallet',compact(['user','c','em']));	
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postFundWallet(Request $request)
    {
    	if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'email' => 'required',
                             'type' => 'required',
                             'amount' => 'required|numeric'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	#$req["user_id"] = $user->id; 
             $this->helpers->fundWallet($req);
	        Session::flash("fund-wallet-status","ok");
			return redirect()->intended('cobra-users');
         }        
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getAuctions()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		$auctions = $this->helpers->adminGetAuctions();
    	return view('admin.auctions',compact(['user','c','auctions']));
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getAuction()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		$auction = null;
    	return view('admin.auction',compact(['user','c','auctions']));
    }
    
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getAddAuction()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		
    	return view('admin.add-auction',compact(['user','c']));
    }
    

/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getTransactions()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		$transactions = $this->helpers->adminGetTransactions();
    	return view('admin.transactions',compact(['user','c','transactions']));
    }

    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getInvoice()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		$invoice = null; 
    	return view('admin.invoice',compact(['user','c','invoice']));
    }


    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getOrders()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		$orders = $this->helpers->adminGetOrders(); 
    	return view('admin.orders',compact(['user','c','orders']));
    }
    
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getOrder(Request $request)
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
        $req = $request->all();
			$validator = Validator::make($req, [
                             'on' => 'required',
             ]);
         
            if($validator->fails())
             {
                #$messages = $validator->messages();
                return redirect()->intended('cobra-orders');
            }
		$c = $this->helpers->categories;
		$order = $this->helpers->adminGetOrder($req['on']); 
    	return view('admin.order',compact(['user','c','order']));
    }
    
        /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
    public function postOrder(Request $request)
    {
    	if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'email' => 'required',
                             'type' => 'required',
                             'amount' => 'required|numeric'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	#$req["user_id"] = $user->id; 
             $this->helpers->fundWallet($req);
	        Session::flash("fund-wallet-status","ok");
			return redirect()->intended('cobra-users');
         }        
    }
    

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getRC()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
		$ratings = null; $comments = null; 
    	return view('admin.rc',compact(['user','c','ratings','comments']));
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getAddCoupon()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
    	return view('admin.add-coupon',compact(['user','c']));
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCoupon()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
    	return view('admin.coupon',compact(['user','c']));
    }	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getCoupons()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
    	return view('admin.coupons',compact(['user','c']));
    }	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getComments()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
    	return view('admin.comments',compact(['user','c']));
    }	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getComment()
    {
       $user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
            if($user->role != "admin") return redirect()->intended('dashboard');		
		}
		else
        {
        	return redirect()->intended('login?return=dashboard');
        }
        
		$c = $this->helpers->categories;
    	return view('admin.comment',compact(['user','c']));
    }

}

<?php namespace ecantina\Http\Controllers;
use ecantina\Config;


class HomeController extends Controller {

    protected $config;
    /*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
    public function index()
    {
            return view('home');
    }
    
    public function index_front(){
        $import = new \ecantina\Config();
        $css    = $import::callCss();
        $js     = $import::callJs();
        $img    = $import::callImg();
        $fnt    = $import::callFont();
        $plg    = $import::callPlugins();
        $pic    = $import::callPics();
        $ico    = $import::callIco();
        $data['css'] = $css;
        $data['js'] = $js;
        $data['img'] = $img;
        $data['fnt'] = $fnt;
        $data['plg'] = $plg;
        $data['pic'] = $pic;
        $data['ico'] = $ico;
        
        return view('frontEnd/_index',$data);
    }

    public function desktop()
    {
        $import = new \ecantina\Config();
        $css    = $import::callCss();
        $js     = $import::callJs();
        $img    = $import::callImg();
        $fnt    = $import::callFont();
        $plg    = $import::callPlugins();
        $pic    = $import::callPics();
        $ico    = $import::callIco();
        $data['css'] = $css;
        $data['js'] = $js;
        $data['img'] = $img;    
        $data['fnt'] = $fnt;
        $data['plg'] = $plg;
        $data['pic'] = $pic;
        $data['ico'] = $ico;

        return view('home1', $data);
    }

}

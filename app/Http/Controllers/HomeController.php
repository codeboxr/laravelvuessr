<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        
        $ssr = $this->render($request->path());
        return view('welcome', ['ssr' => $ssr]);
        // return view('home');
    }


  private function render($path) {
    
    $renderer_source = File::get(base_path('node_modules/vue-server-renderer/basic.js'));

    $app_source = File::get(public_path('/js/entry-server.js'));
    
    $v8 = new \V8Js();
    
    ob_start();
    $context['url'] = $path;
    $js =
    <<<EOT
    var process = { env: { VUE_ENV: "server", NODE_ENV: "production" } }; 
    this.global = { process: process };
    var url = "$path";
    var meta = " ";
    EOT;

    $v8->executeString($js);
    $v8->executeString($renderer_source);
    $v8->executeString($app_source);
    
    // write_log($v8->executeString($app_source));
    return ob_get_clean();

  }

}

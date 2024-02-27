<?php

namespace App\Http\Controllers;

use App\Traits\Helpers\ResponseTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use ResponseTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function testTrait($num){
        try {
            if($num > 10){
                return $this->customResponse([
                    'view' => 'home',
                    'data' => $num,
                    'message' => 'El numero es mayor a 10',
                    'success' => true,
                    'status' => 200
                ]);
            }
            throw new \Exception('Error, el numero no es mayor a 10');
        } catch (\Exception $e) {
            return $this->customResponse([
                'message' => $e->getMessage(),
                'success' => false,
                'status' => 500
            ]);
        }
    }
}

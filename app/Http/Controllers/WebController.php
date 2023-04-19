<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Servicemaster;
use DB;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index()
    {
        $services = Servicemaster::get();

        return view('welcome',compact('services'));
    }
    public function about()
    {

        return view('about');
    }
    public function services()
    {
        $services = Servicemaster::get();
        //dd($services);

        return view('services',compact('services'));
    }
    public function service_details($id){
        $services = Servicemaster::get();

        $servicedetail = DB::table('services')

        ->join('servicemasters', 'services.service_master_id', '=', 'servicemasters.id')

        ->where('services.service_master_id', $id)

        ->select('services.id','services.service_master_id','services.title','services.image','services.description')
        ->get();

        return view('service-detail',compact('services','servicedetail','id'));

    }

    public function contact(){
        return view('contact');
    }
    public function track(){
        return view('track');
    }

    public function quote(){
        return view('quote');
    }
}

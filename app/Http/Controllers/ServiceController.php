<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Banner;
use App\Models\Servicemaster;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:service-list|service-create|service-edit|service-delete', ['only' => ['index','show']]);
         $this->middleware('permission:service-create', ['only' => ['create','store']]);
         $this->middleware('permission:service-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:service-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->paginate(5);

        return view('service.index',compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $masterdata = Servicemaster::get();
        return view('service.create',compact('masterdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = array();
        if($file = $request->file('image')){

                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $uploade_path = 'uploads/images/service/';
                $image_url = $uploade_path.$image_full_name;
                $file->move($uploade_path,$image_full_name);
                $image[] = $image_url;



        }


        $servicedata = array('service_master_id'=>$request->master_id,
                            'title' =>$request->title,
                            'image' => implode(',',$image,) ,
                            'description'=>$request->description);


                            Service::create($servicedata);

        return redirect()->route('service.index')
                        ->with('success','Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('banner.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $masterdata = Servicemaster::get();
        return view('service.edit',compact('service','masterdata'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $image = array();
        if($file = $request->file('image')){

                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $uploade_path = 'uploads/images/service/';
                $image_url = $uploade_path.$image_full_name;
                $file->move($uploade_path,$image_full_name);
                $image[] = $image_url;



        }else{
            $image[] = $request->image_update;
        }
        $servicedata = array('service_master_id'=>$request->master_id,
                            'title' =>$request->title,
                            'image' => implode(',',$image,) ,
                            'description'=>$request->description);

        $service->update($servicedata);

        return redirect()->route('service.index')
                        ->with('success','Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('banner.index')
                        ->with('success','Banner deleted successfully');
    }

    public function masterindex(){

        $masterdata = Servicemaster::latest()->paginate(5);

        return view('service.masterindex',compact('masterdata'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function mastercreate(){
        return view('service.mastercreate');
    }
    public function masterstore(Request $request){

        $image = array();
        if($file = $request->file('image')){

                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $uploade_path = 'uploads/images/servicemaster/';
                $image_url = $uploade_path.$image_full_name;
                $file->move($uploade_path,$image_full_name);
                $image[] = $image_url;



        }
        $masterdata = array('name' =>$request->name,
                            'short_description'=>$request->short_description,
                            'image' => implode(',',$image) );


                            Servicemaster::create($masterdata);

        return redirect()->route('service.masterindex')
                        ->with('success','Service Master created successfully.');

    }
    public function masteredit($id)
    {
       $servicemaster =  Servicemaster::find($id);
        return view('service.masteredit',compact('servicemaster'));
    }
    public function masterupdate (Request $request)
    {
        $serviceItem = Servicemaster::findOrFail($request->id);
        $image = array();
        if($file = $request->file('image')){

                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $uploade_path = 'uploads/images/servicemaster/';
                $image_url = $uploade_path.$image_full_name;
                $file->move($uploade_path,$image_full_name);
                $image[] = $image_url;



        }else{
            $image[] = $request->image_update ;
        }
        $serviceItem['name'] = $request->name;
        $serviceItem['short_description'] = $request->short_description;
        $serviceItem['image'] = implode(',',$image) ;


                            $serviceItem->save();


        return redirect()->route('service.masterindex')
                        ->with('success','Master updated successfully');
    }
    public function masterdestroy($id)
    {
        Servicemaster:: where('id',$id)->delete();

        return redirect()->route('service.masterindex')
                        ->with('success','Service Master deleted successfully');
    }

}

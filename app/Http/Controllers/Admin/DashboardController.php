<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Models\Requests;
use App\Models\Role;
use App\Models\User;
use App\Models\Img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $image = false;
        if(request()->has('name')){
            // dd(request()->name);
            $data = Img::select()->where('name', request()->name)->first();
            // dd($data);
            if($data && $data->path){
                // session()->flash('newurl', route('admin.print', [$data->id]));
                // Redirect::to('/print')->with(['id' => [$data->id]]);
                // return redirect()->back();
                return redirect()->route('admin.print', [$data->id]);
            }else
                return redirect()->route('admin.dashboard')->with(['error'=>'Barcode Not Found']);
        }
        return view('admin.dashboard');
    }
    
    public function print($id)
    {
        $data = Img::select()->find($id);
        if($data && $data->path)
            $path = $data->path;
        return view('admin.print',compact('path'));
    }

    public function create()
    {
        // if(! Role::havePremission(['color_cr']))
        //     return redirect()->route('admin.dashboard');

        return view('admin.create');
    }

    public function store(Request $request)
    {
        // if(! Role::havePremission(['color_cr']))
        //     return redirect()->route('admin.dashboard');

        $request->validate([
            'name' => ['unique:imgs'],
        ],[
            'name.unique'=> 'Barcode is Unique',
        ]);

        // try {
            
            $request->request->add(['admin_id' =>  Auth::user()->id ]);
            $color= Img::create($request->except(['_token']));
            
            if ($request->has('image')){
                $image = $request->file('image');
                $imageName = "img_".str_replace(' ', '_', $color->id) . ".". $image->extension();
                $image->move(public_path('img'),$imageName);

                $color->update(['path' => "public/img/".$imageName ]);
            }
            
            if(isset($request->btn))
                if($request->btn =="saveAndNew")
                    return redirect()->route('admin.create')->with(['success'=>'تم الحفظ']);
        
            return redirect()->route('admin.create')->with(['success'=>'تم الحفظ']);
        // }catch (\Exception $ex){
        //     return redirect()->route('admin.create')->with(['error'=>'يوجد خطء']);
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }


}

<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Model\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('backend.banner.banners')->with('banners',$banners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'banner_name' => 'required',
           'banner_heading' => 'required',
           'banner_image' => 'required|mimes:jpeg,jpg',
        ]);

        $banner = $request->file('banner_image')->store('homepage/banners');

        Banner::create([
           'banner_name' => $request->banner_name,
           'banner_heading' => $request->banner_heading,
           'banner_image' => $banner,
        ]);

        $notification = array(
            'messege' => 'Banner Inserted Successful',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Banner::where('id',$id)->first();
        return view('backend.banner.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('banner_image')){
            $oldBanner = $request->old_image;
            Storage::delete($oldBanner);
            $newBanner = $request->file('banner_image')->store('homepage/banners');
            $update = Banner::findorfail($id);
            $update->banner_name = $request->banner_name;
            $update->banner_heading = $request->banner_heading;
            $update->banner_image = $newBanner;
            $update->save();


            $notification = array(
                'messege' => 'Banner Updated Successful',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }else{
            $update = Banner::findorfail($id);
            $update->banner_name = $request->banner_name;
            $update->banner_heading = $request->banner_heading;
            $update->save();

            $notification = array(
                'messege' => 'Banner Updated Successful',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Banner::findorfail($id);
        $Banner = $delete->banner_image;
        Storage::delete($Banner);
        $delete->delete();

        $notification = array(
            'messege' => 'Banner Deleted',
            'alert-type' => 'danger'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id){

        $data = array();
        $data['status'] = 0;
        DB::table('banners')->update($data);
        $active = Banner::findorfail($id);
        $active->status = 1;
        $active->save();

        $notification = array(
            'messege' => 'Banner Activated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function inactive($id){
        $inactive = Banner::findorfail($id);
        $inactive->status = 0;
        $inactive->save();

        $notification = array(
            'messege' => 'Banner Inactivated',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}

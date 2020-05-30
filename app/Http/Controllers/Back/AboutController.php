<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Model\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('backend.about.about_content',compact('about'));
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
           'homepage_title' => 'required',
           'page_heading' => 'required',
           'about_content' => 'required',
           'cover_image' => 'mimes:jpg,jpeg,gif,png'
        ]);

        if($request->hasFile('cover_image')){
            $cover = $request->file('cover_image')->store('about/covers');

            About::create([
                'homepage_title' => $request->homepage_title,
                'page_heading' => $request->page_heading,
                'about_content' => $request->about_content,
                'cover_image' => $cover,
            ]);
            $notification = array(
                'messege' => 'About Page Content Inserted',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        }else{
            About::create([
                'homepage_title' => $request->homepage_title,
                'page_heading' => $request->page_heading,
                'story_content' => $request->about_content,
            ]);

            $notification = array(
                'messege' => 'About Page Content Inserted',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        }

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
        $edit = About::where('id',$id)->first();
        return view('backend.about.edit',compact('edit'));
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
        if($request->hasFile('cover_image')){
            $oldCover = $request->old_image;
            Storage::delete($oldCover);
            $newCover = $request->file('cover_image')->store('about/covers');
            $update = About::findorfail($id);
            $update->homepage_title = $request->homepage_title;
            $update->page_heading = $request->page_heading;
            $update->about_content = $request->about_content;
            $update->cover_image = $newCover;
            $update->save();


            $notification = array(
                'messege' => 'Content Updated',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }else{
            $update = About::findorfail($id);
            $update->homepage_title = $request->homepage_title;
            $update->page_heading = $request->page_heading;
            $update->about_content = $request->about_content;
            $update->save();

            $notification = array(
                'messege' => 'Content Updated',
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
        $delete = About::findorfail($id);
        $image = $delete->cover_image;
        if($image){
            Storage::delete($image);
        }
        $delete->delete();


        $notification = array(
            'messege' => 'Content Deleted',
            'alert-type' => 'danger'
        );
        return redirect()->back()->with($notification);
    }



    public function active($id){

        $data = array();
        $data['status'] = 0;
        DB::table('abouts')->update($data);
        $active = About::findorfail($id);
        $active->status = 1;
        $active->save();

        $notification = array(
            'messege' => 'Content Set',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function inactive($id){
        $inactive = About::findorfail($id);
        $inactive->status = 0;
        $inactive->save();

        $notification = array(
            'messege' => 'Content Inactivated',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}

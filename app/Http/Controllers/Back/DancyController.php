<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Model\Dancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dancy = Dancy::all();
        return view('backend.dancy.dancy_content',compact('dancy'));
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
            'page_heading' => 'required',
            'dancy_content' => 'required',
            'cover_image' => 'mimes:jpg,jpeg,gif,png'
        ]);

        if($request->hasFile('cover_image')){
            $cover = $request->file('cover_image')->store('dancy/covers');

            Dancy::create([
                'page_heading' => $request->page_heading,
                'dancy_content' => $request->dancy_content,
                'cover_image' => $cover,
            ]);
            $notification = array(
                'messege' => 'Dancy Page Content Inserted',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        }else{
            Dancy::create([
                'page_heading' => $request->page_heading,
                'dancy_content' => $request->dancy_content,
            ]);

            $notification = array(
                'messege' => 'Dancy Page Content Inserted',
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
        $edit = Dancy::where('id',$id)->first();
        return view('backend.dancy.edit',compact('edit'));
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
            $newCover = $request->file('cover_image')->store('dancy/covers');
            $update = Dancy::findorfail($id);
            $update->page_heading = $request->page_heading;
            $update->dancy_content = $request->dancy_content;
            $update->cover_image = $newCover;
            $update->save();


            $notification = array(
                'messege' => 'Content Updated',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }else{
            $update = Dancy::findorfail($id);
            $update->page_heading = $request->page_heading;
            $update->dancy_content = $request->dancy_content;
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
        $delete = Dancy::findorfail($id);
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
        DB::table('dancies')->update($data);
        $active = Dancy::findorfail($id);
        $active->status = 1;
        $active->save();

        $notification = array(
            'messege' => 'Content Set',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function inactive($id){
        $inactive = Dancy::findorfail($id);
        $inactive->status = 0;
        $inactive->save();

        $notification = array(
            'messege' => 'Content Inactivated',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}

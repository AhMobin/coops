<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Model\JobInAmerica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AmericaJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = JobInAmerica::all();
        return view('backend.jobs.jobs_content',compact('jobs'));
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
            'american_job_content' => 'required',
            'cover_image' => 'mimes:jpg,jpeg,gif,png'
        ]);

        if($request->hasFile('cover_image')){
            $cover = $request->file('cover_image')->store('jobs/covers');

            JobInAmerica::create([
                'page_heading' => $request->page_heading,
                'american_job_content' => $request->american_job_content,
                'cover_image' => $cover,
            ]);
            $notification = array(
                'messege' => 'American Job Page Content Uploaded',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        }else{
            JobInAmerica::create([
                'page_heading' => $request->page_heading,
                'american_job_content' => $request->american_job_content,
            ]);

            $notification = array(
                'messege' => 'American Job Page Content Inserted',
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
        $edit = JobInAmerica::where('id',$id)->first();
        return view('backend.jobs.edit',compact('edit'));
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
            $newCover = $request->file('cover_image')->store('jobs/covers');
            $update = JobInAmerica::findorfail($id);
            $update->page_heading = $request->page_heading;
            $update->american_job_content = $request->american_job_content;
            $update->cover_image = $newCover;
            $update->save();


            $notification = array(
                'messege' => 'Content Updated',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }else{
            $update = JobInAmerica::findorfail($id);
            $update->page_heading = $request->page_heading;
            $update->american_job_content = $request->american_job_content;
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
        $delete = JobInAmerica::findorfail($id);
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
        DB::table('job_in_americas')->update($data);
        $active = JobInAmerica::findorfail($id);
        $active->status = 1;
        $active->save();

        $notification = array(
            'messege' => 'Content Set',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function inactive($id){
        $inactive = JobInAmerica::findorfail($id);
        $inactive->status = 0;
        $inactive->save();

        $notification = array(
            'messege' => 'Content Inactivated',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}

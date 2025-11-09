<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // ✅ Add this line
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = DB::table('galleries as g')
        ->select('g.image','g.user_id','g.id')
        ->where('g.user_id',auth()->id())
        ->get();
        // dd($galleries);
        return view("pages.gallery.index",compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $user = 
        return view('pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'image'=>'image'
        // ]);
        foreach($request->file('image') as $image){
            // dd($image);
            $image_path = $image->store('gallery','public');
            Gallery::create([
                'image'=>$image_path,
                'user_id'=>auth()->user()->id
            ]);
        }
        return redirect('/gallery/create')->with('success','image uplode successfull');

        // dd($request->file('image'));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        // $delete= Gallery::find($gallery);
        $gallery->delete();
        // dd("Delete");
        return redirect()->route('pages.gallery.index')->with('success',"Gallery Delete SuccessFully !");
    }
}

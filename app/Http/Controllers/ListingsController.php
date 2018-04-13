<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listing;

class ListingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::orderBY('created_at', 'desc')->get();
        return view('listings')->with('listings', $listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlisting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email'
        ]);

        // Create Listing

        $listing = new Listing;
        $listing->name = $request->input('name');
        $listing->email = $request->input('email');
        $listing->website = $request->input('website');
        $listing->CAC = $request->input('CAC');
        $listing->address = $request->input('address');
        $listing->phone = $request->input('phone');
        $listing->name = $request->input('bio');
        $listing->user_id = auth()->user()->id;

        $listing->save();

        return redirect('/dashboard')->with('success', 'buisness added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
        return view('showlisting')->with('listing', $listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $listing = Listing::find($id);
        return view('editlisting')->with('listing', $listing);

        $this->validate($request,[
            'name' => 'required',
            'email' => 'email'
        ]);

        // Create Listing

        $listing = Listing::find($id);
        $listing->name = $request->input('name');
        $listing->email = $request->input('email');
        $listing->website = $request->input('website');
        $listing->CAC = $request->input('CAC');
        $listing->address = $request->input('address');
        $listing->phone = $request->input('phone');
        $listing->name = $request->input('bio');
        $listing->user_id = auth()->user()->id;

        $listing->save();

        return redirect('/dashboard')->with('success', 'buisness listing updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();

        return redirect('/dashboard')->with('success', 'buisness name removed');
    }
}

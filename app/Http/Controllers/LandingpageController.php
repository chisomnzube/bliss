<?php

namespace App\Http\Controllers;

use App\CompanyInfo;
use App\Contact;
use App\PersonalDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use TCG\Voyager\Models\Post;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->get();

        return view('index')->with([
            'posts' => $posts,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'id' => 'required|max:10|min:10',
            'type' => ['required', Rule::in(['psn', 'csn'])],
        ]);

        $type = $request->input('type');


        if ($type == 'psn') 
            {
                $psn = $request->input('id');
                $result = PersonalDetail::where('psn', $psn)->where('featured', 1)->firstOrFail();

                return view('personal-search')->with([
                            'psn' => $result,
                        ]);
            }else
                {
                    $csn = $request->input('id');
                    $result = CompanyInfo::where('csn', $csn)->where('featured', 1)->firstOrFail();

                    return view('company-search')->with([
                                'csn' => $result,
                            ]);
                }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('hey');
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'body' => 'required',
        ]);

        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'body' => $request->input('body'),
        ]);

        return back()->with('success_message', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('status', 'PUBLISHED')->firstOrFail();

        return view('post-single')->with([
                    'post' => $post,
                ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

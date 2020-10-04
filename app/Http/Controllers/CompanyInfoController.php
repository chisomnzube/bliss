<?php

namespace App\Http\Controllers;

use App\CompanyInfo;
use App\Mail\CsnMail;
use App\PersonalDetail;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm()
    {
        return view('company-confirm');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $csn = $request->input('csn');
        $result = CompanyInfo::where('csn', $csn)->where('featured', 1)->firstOrFail();

        return view('company-search')->with([
                    'csn' => $result,
                ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function csnlogin(Request $request)
    {
        $request->validate([
            'csn' => 'required',
            'password' => 'required',
        ]);

        $csn = $request->input('csn');
        $password = $request->input('password');
        //dd($password);
        $check = CompanyInfo::where('csn', $csn)->first();
        

        if ($check) 
            {
                if (Hash::check($password, $check->password))
                    {
                        $getpsn = PersonalDetail::where('psn', $check->psn)->first();

                        $user = User::where('email', $getpsn->email)->first();
                        Auth::loginUsingId($user->id);
                        //dd($check->id);
                    } else
                        {
                            return back()->with('error_message', 'incorrect credentials');
                        }              
                
            }else
                {
                    return back()->with('error_message', 'incorrect credentials');
                }
        return redirect()->to('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check if he has already registered psn
        $psn = $request->input('psn');
        $checkpsn = PersonalDetail::where('psn', $psn)->first();
        if (!$checkpsn) 
            {
                return back()->with('error_message', 'Please register your personal details first');
            }

        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'security_question' => 'required',
            'security_answer' => 'required',
            'industry' => 'required',
            'toc' => 'required',
            'company_name' => 'required',
            'parent_company' => 'required',
            'office_address' => 'required',
            'branches' => 'required',
            'yoe' => 'required',
            'doi' => 'required',
            'employees' => 'required',
            'market' => 'required',
            'traded_as' => 'required',
            'stock_price' => 'required',
            'isin' => 'required',
            'rc' => 'required',
            'founded' => 'required',
            'founder' => 'required',
            'area_served' => 'required',
            'key_people' => 'required',
            'products' => 'required',
            'revenue' => 'required',
            'asc' => 'required',
            'market_cap' => 'required',
            'asset' => 'required',
            'equity' => 'required',
            'operating_income' => 'required',
            'net_income' => 'required',
            'subsidiary' => 'required',
            'website' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'reg_date' => 'required',
            'name' => 'required',
            'address' => 'required',
            'id_number' => 'required',
            'id_type' => 'required',
            'position' => 'required',
            'psn' => 'required',
            'security_status' => 'required',
            'document' => 'required',
        ]);

        $csn = mt_rand(1000000000,9999999999);
        $check = CompanyInfo::where('csn', $csn)->first();
        if ($check) 
            {
                $csn = mt_rand(1000000000,9999999999);
            }

        if($request->hasFile('document')) {
            // dd('has it oo');
            // Get filename with the extension
            $filenameWithExt = $request->file('document')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('document')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('document')->storeAs('public/data', $fileNameToStore); 
            
        }

        $name = $request->input('name');
        $email = $request->input('email');

        $data = CompanyInfo::create([
            'password' => Hash::make($request->input('password')),
            'security_question' => $request->input('security_question'),
            'security_answer' => $request->input('security_answer'),
            'industry' => $request->input('industry'),
            'toc' => $request->input('toc'),
            'company_name' => $request->input('company_name'),
            'parent_company' => $request->input('parent_company'),
            'office_address' => $request->input('office_address'),
            'branches' => $request->input('branches'),
            'yoe' => $request->input('yoe'),
            'doi' => $request->input('doi'),
            'employees' => $request->input('employees'),
            'others' => $request->input('others'),
            'market' => $request->input('market'),
            'traded_as' => $request->input('traded_as'),
            'stock_price' => $request->input('stock_price'),
            'isin' => $request->input('isin'),
            'rc' => $request->input('rc'),
            'founded' => $request->input('founded'),
            'founder' => $request->input('founder'),
            'area_served' => $request->input('area_served'),
            'key_people' => $request->input('key_people'),
            'products' => $request->input('products'),
            'revenue' => $request->input('revenue'),
            'asc' => $request->input('asc'),
            'market_cap' => $request->input('market_cap'),
            'asset' => $request->input('asset'),
            'equity' => $request->input('equity'),
            'operating_income' => $request->input('operating_income'),
            'net_income' => $request->input('net_income'),
            'subsidiary' => $request->input('subsidiary'),
            'website' => $request->input('website'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'reg_date' => $request->input('reg_date'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'id_number' => $request->input('id_number'),
            'id_type' => $request->input('id_type'),
            'position' => $request->input('position'),
            'psn' => $request->input('psn'),
            'security_status' => $request->input('security_status'),
            'document' => 'data/'.$fileNameToStore,
            'csn' => $csn,
        ]);

        //create an account
        // $user = User::where('email', $email)->first();
        // if (!$user) 
        //     {
        //         User::create([
        //             'name' => $request->input('name'),
        //             'email' => $request->input('email'),
        //             'password' => Hash::make($request->input('password')),
        //         ]);
        //     }
        

        //send email
        Mail::send(new CsnMail($name, $email, $csn));

        //return back
        return redirect()->route('company.confirm')->with('success_message', 'Successfull company registration!');
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
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $psn = PersonalDetail::where('email', auth()->user()->email)->first();
        $csn = CompanyInfo::where('psn', $psn->psn)->first();

        if (!$csn) 
            {
               return redirect()->route('company.index')->with('success_message', 'please fill in your company details'); 
            }

        return view('company-edit')->with([
                    'csn' => $csn,
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request->validate([
            'industry' => 'required',
            'toc' => 'required',
            'company_name' => 'required',
            'parent_company' => 'required',
            'office_address' => 'required',
            'branches' => 'required',
            'yoe' => 'required',
            'doi' => 'required',
            'employees' => 'required',
            'market' => 'required',
            'traded_as' => 'required',
            'stock_price' => 'required',
            'isin' => 'required',
            'rc' => 'required',
            'founded' => 'required',
            'founder' => 'required',
            'area_served' => 'required',
            'key_people' => 'required',
            'products' => 'required',
            'revenue' => 'required',
            'asc' => 'required',
            'market_cap' => 'required',
            'asset' => 'required',
            'equity' => 'required',
            'operating_income' => 'required',
            'net_income' => 'required',
            'subsidiary' => 'required',
            'website' => 'required',
            'phone' => 'required',
            'reg_date' => 'required',
            'name' => 'required',
            'address' => 'required',
            'id_number' => 'required',
            'id_type' => 'required',
            'position' => 'required',
            'security_status' => 'required',
        ]);

        $psn = PersonalDetail::where('email', auth()->user()->email)->first();

        if($request->hasFile('document')) {
            // dd('has it oo');
            // Get filename with the extension
            $filenameWithExt = $request->file('document')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('document')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('document')->storeAs('public/data', $fileNameToStore); 

            CompanyInfo::where('psn', $psn->psn)->update([
                'document' => 'data/'.$fileNameToStore,
            ]);
            
        }

        $name = $request->input('name');
        $email = $request->input('email');

        $data = CompanyInfo::where('psn', $psn->psn)->update([
            'industry' => $request->input('industry'),
            'toc' => $request->input('toc'),
            'company_name' => $request->input('company_name'),
            'parent_company' => $request->input('parent_company'),
            'office_address' => $request->input('office_address'),
            'branches' => $request->input('branches'),
            'yoe' => $request->input('yoe'),
            'doi' => $request->input('doi'),
            'employees' => $request->input('employees'),
            'others' => $request->input('others'),
            'market' => $request->input('market'),
            'traded_as' => $request->input('traded_as'),
            'stock_price' => $request->input('stock_price'),
            'isin' => $request->input('isin'),
            'rc' => $request->input('rc'),
            'founded' => $request->input('founded'),
            'founder' => $request->input('founder'),
            'area_served' => $request->input('area_served'),
            'key_people' => $request->input('key_people'),
            'products' => $request->input('products'),
            'revenue' => $request->input('revenue'),
            'asc' => $request->input('asc'),
            'market_cap' => $request->input('market_cap'),
            'asset' => $request->input('asset'),
            'equity' => $request->input('equity'),
            'operating_income' => $request->input('operating_income'),
            'net_income' => $request->input('net_income'),
            'subsidiary' => $request->input('subsidiary'),
            'website' => $request->input('website'),
            'phone' => $request->input('phone'),
            'reg_date' => $request->input('reg_date'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'id_number' => $request->input('id_number'),
            'id_type' => $request->input('id_type'),
            'position' => $request->input('position'),
            'security_status' => $request->input('security_status'),
        ]);

        //return back
        return back()->with('success_message', 'Successfull updated company information!');
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

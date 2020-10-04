<?php

namespace App\Http\Controllers;

use App\Mail\PsnMail;
use App\PersonalDetail;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PersonalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personal-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm()
    {
        return view('personal-confirm');
    }

    public function login()
    {
        return view('login');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function psnlogin(Request $request)
    {
        $request->validate([
            'psn' => 'required',
            'password' => 'required',
        ]);

        $psn = $request->input('psn');
        $password = $request->input('password');
        //dd($password);
        $check = PersonalDetail::where('psn', $psn)->first();
        

        if ($check) 
            {
                if (Hash::check($password, $check->password))
                    {
                        $user = User::where('email', $check->email)->first();
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
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'security_question' => 'required',
            'security_answer' => 'required',
            'title' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'median_name' => 'required',
            'marital_status' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'pob' => 'required',
            'state' => 'required',
            'lga' => 'required',
            'city' => 'required',
            'nationality' => 'required',
            'residence_status' => 'required',
            'native_lang' => 'required',
            'religion' => 'required',
            'education' => 'required',
            'employment_status' => 'required',
            'company' => 'required',
            'company_address' => 'required',
            'job_title' => 'required',
            'yoa' => 'required',
            'ecp' => 'required',
            'ecp_address' => 'required',
            'ecp_phone' => 'required',
            'relationship' => 'required',
            'health_status' => 'required',
            'security_status' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'id_type' => 'required',
            'id_number' => 'required',
            'bank_name' => 'required',
            'bank_address' => 'required',
            'sort_code' => 'required',
            'account_type' => 'required',
            'account_number' => 'required',
            'tax' => 'required',
            'passport' => 'required',
        ]);

        $psn = mt_rand(1000000000,9999999999);
        $check = PersonalDetail::where('psn', $psn)->first();
        if ($check) 
            {
                $psn = mt_rand(1000000000,9999999999);
            }

        if($request->hasFile('passport')) {
            // dd('has it oo');
            // Get filename with the extension
            $filenameWithExt = $request->file('passport')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('passport')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('passport')->storeAs('public/data', $fileNameToStore); 
            
        }

        $name = $request->input('fname');
        $email = $request->input('email');
        $data = PersonalDetail::create([
            'password' => Hash::make($request->input('password')),
            'security_question' => $request->input('security_question'),
            'security_answer' => $request->input('security_answer'),
            'title' => $request->input('title'),
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'mname' => $request->input('mname'),
            'median_name' => $request->input('median_name'),
            'marital_status' => $request->input('marital_status'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'pob' => $request->input('pob'),
            'state' => $request->input('state'),
            'lga' => $request->input('lga'),
            'city' => $request->input('city'),
            'nationality' => $request->input('nationality'),
            'residence_status' => $request->input('residence_status'),
            'native_lang' => $request->input('native_lang'),
            'other_lang' => $request->input('other_lang'),
            'religion' => $request->input('religion'),
            'education' => $request->input('education'),
            'employment_status' => $request->input('employment_status'),
            'company' => $request->input('company'),
            'company_address' => $request->input('company_address'),
            'job_title' => $request->input('job_title'),
            'yoa' => $request->input('yoa'),
            'ecp' => $request->input('ecp'),
            'ecp_address' => $request->input('ecp_address'),
            'ecp_phone' => $request->input('ecp_phone'),
            'ecp_psn' => $request->input('ecp_psn'),
            'relationship' => $request->input('relationship'),
            'health_status' => $request->input('health_status'),
            'security_status' => $request->input('security_status'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'linkedin' => $request->input('linkedin'),
            'instagram' => $request->input('instagram'),
            'id_type' => $request->input('id_type'),
            'id_number' => $request->input('id_number'),
            'bank_name' => $request->input('bank_name'),
            'bank_address' => $request->input('bank_address'),
            'sort_code' => $request->input('sort_code'),
            'account_type' => $request->input('account_type'),
            'account_number' => $request->input('account_number'),
            'tax' => $request->input('tax'),
            'passport' => 'data/'.$fileNameToStore,
            'psn' => $psn,
        ]);

        //create an account
        User::create([
            'name' => $request->input('fname').' '.$request->input('lname').' '.$request->input('mname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        //send email
        Mail::send(new PsnMail($name, $email, $psn));

        //return back
        return redirect()->route('personal.confirm')->with('success_message', 'Successfull registration!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $psn = $request->input('psn');
        $result = PersonalDetail::where('psn', $psn)->where('featured', 1)->firstOrFail();

        return view('personal-search')->with([
                    'psn' => $result,
                ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $psn = PersonalDetail::where('email', auth()->user()->email)->first();

        if (!$psn) 
            {
               return redirect()->route('personal.index')->with('success_message', 'please fill in your details'); 
            }

        return view('personal-edit')->with([
                    'psn' => $psn,
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
            'title' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'median_name' => 'required',
            'marital_status' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'pob' => 'required',
            'state' => 'required',
            'lga' => 'required',
            'city' => 'required',
            'nationality' => 'required',
            'residence_status' => 'required',
            'native_lang' => 'required',
            'religion' => 'required',
            'education' => 'required',
            'employment_status' => 'required',
            'company' => 'required',
            'company_address' => 'required',
            'job_title' => 'required',
            'yoa' => 'required',
            'ecp' => 'required',
            'ecp_address' => 'required',
            'ecp_phone' => 'required',
            'relationship' => 'required',
            'health_status' => 'required',
            'security_status' => 'required',
            'phone' => 'required',
            // 'email' => 'required',
            'id_type' => 'required',
            'id_number' => 'required',
            'bank_name' => 'required',
            'bank_address' => 'required',
            'sort_code' => 'required',
            'account_type' => 'required',
            'account_number' => 'required',
            'tax' => 'required',
        ]);


        if($request->hasFile('passport')) {
            // dd('has it oo');
            // Get filename with the extension
            $filenameWithExt = $request->file('passport')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('passport')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('passport')->storeAs('public/data', $fileNameToStore); 

            PersonalDetail::where('email', auth()->user()->email)->update([
                'passport' => 'data/'.$fileNameToStore,
            ]);
            
        }


        $data = PersonalDetail::where('email', auth()->user()->email)->update([
            'title' => $request->input('title'),
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'mname' => $request->input('mname'),
            'median_name' => $request->input('median_name'),
            'marital_status' => $request->input('marital_status'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'pob' => $request->input('pob'),
            'state' => $request->input('state'),
            'lga' => $request->input('lga'),
            'city' => $request->input('city'),
            'nationality' => $request->input('nationality'),
            'residence_status' => $request->input('residence_status'),
            'native_lang' => $request->input('native_lang'),
            'other_lang' => $request->input('other_lang'),
            'religion' => $request->input('religion'),
            'education' => $request->input('education'),
            'employment_status' => $request->input('employment_status'),
            'company' => $request->input('company'),
            'company_address' => $request->input('company_address'),
            'job_title' => $request->input('job_title'),
            'yoa' => $request->input('yoa'),
            'ecp' => $request->input('ecp'),
            'ecp_address' => $request->input('ecp_address'),
            'ecp_phone' => $request->input('ecp_phone'),
            'ecp_psn' => $request->input('ecp_psn'),
            'relationship' => $request->input('relationship'),
            'health_status' => $request->input('health_status'),
            'security_status' => $request->input('security_status'),
            'phone' => $request->input('phone'),
            // 'email' => $request->input('email'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'linkedin' => $request->input('linkedin'),
            'instagram' => $request->input('instagram'),
            'id_type' => $request->input('id_type'),
            'id_number' => $request->input('id_number'),
            'bank_name' => $request->input('bank_name'),
            'bank_address' => $request->input('bank_address'),
            'sort_code' => $request->input('sort_code'),
            'account_type' => $request->input('account_type'),
            'account_number' => $request->input('account_number'),
            'tax' => $request->input('tax'),
        ]);

        //create an account
        User::where('email', auth()->user()->email)->update([
            'name' => $request->input('fname').' '.$request->input('lname').' '.$request->input('mname'),
        ]);


        //return back
        return back()->with('success_message', 'Personal Data Updated Successfully');
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

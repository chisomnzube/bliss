<?php

namespace App\Http\Controllers;

use App\Particular;
use App\PersonalDetail;
use Illuminate\Http\Request;

class ParticularsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('particulars-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm()
    {
        return view('particulars-confirm');
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
            'lga' => 'required',
            'state' => 'required',
            'country' => 'required',
            'address' => 'required',
            'occupation' => 'required',
            'dob' => 'required',
            'psn' => 'required',
            'tax' => 'required',
            'class' => 'required',
            'type' => 'required',
            'licence_number' => 'required',
            'por' => 'required',
            'model' => 'required',
            'model_code' => 'required',
            'manufactured_year' => 'required',
            'status' => 'required',
            'engine_number' => 'required',
            'chassis_number' => 'required',
            'color' => 'required',
            'body_type' => 'required',
            'origin' => 'required',
            'cylinder_capacity' => 'required',
            'rated_power' => 'required',
            'seating_capacity' => 'required',
            'propulsion' => 'required',
            'steering' => 'required',
            'tire_no' => 'required',
            'gps' => 'required',
            'airbag' => 'required',
            'tracker' => 'required',
            'insurance_company' => 'required',
            'policy_holder' => 'required',
            'policy_note' => 'required',
            'effective_date_from' => 'required',
            'effective_date_to' => 'required',
            'ecp_name' => 'required',
            'ecp_phone' => 'required',
            'ecp_email' => 'required',
            'ecp_city' => 'required',
            'ecp_lga' => 'required',
            'ecp_state' => 'required',
            'ecp_country' => 'required',
            'ecp_address' => 'required',
            'document' => 'required',
        ]);

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

        $data = Particular::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'city' => $request->input('city'),
            'lga' => $request->input('lga'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
            'address' => $request->input('address'),
            'occupation' => $request->input('occupation'),
            'dob' => $request->input('dob'),
            'psn' => $request->input('psn'),
            'tax' => $request->input('tax'),
            'class' => $request->input('class'),
            'type' => $request->input('type'),
            'licence_number' => $request->input('licence_number'),
            'por' => $request->input('por'),
            'model' => $request->input('model'),
            'model_code' => $request->input('model_code'),
            'manufactured_year' => $request->input('manufactured_year'),
            'status' => $request->input('status'),
            'engine_number' => $request->input('engine_number'),
            'chassis_number' => $request->input('chassis_number'),
            'color' => $request->input('color'),
            'body_type' => $request->input('body_type'),
            'origin' => $request->input('origin'),
            'cylinder_capacity' => $request->input('cylinder_capacity'),
            'rated_power' => $request->input('rated_power'),
            'seating_capacity' => $request->input('seating_capacity'),
            'propulsion' => $request->input('propulsion'),
            'steering' => $request->input('steering'),
            'tire_no' => $request->input('tire_no'),
            'door_no' => $request->input('door_no'),
            'gps' => $request->input('gps'),
            'airbag' => $request->input('airbag'),
            'tracker' => $request->input('tracker'),
            'insurance_company' => $request->input('insurance_company'),
            'policy_holder' => $request->input('policy_holder'),
            'policy_note' => $request->input('policy_note'),
            'effective_date_from' => $request->input('effective_date_from'),
            'effective_date_to' => $request->input('effective_date_to'),
            'ecp_name' => $request->input('ecp_name'),
            'ecp_phone' => $request->input('ecp_phone'),
            'ecp_email' => $request->input('ecp_email'),
            'ecp_city' => $request->input('ecp_city'),
            'ecp_lga' => $request->input('ecp_lga'),
            'ecp_state' => $request->input('ecp_state'),
            'ecp_country' => $request->input('ecp_country'),
            'ecp_address' => $request->input('ecp_address'),
            'document' => 'data/'.$fileNameToStore,
        ]);

        //return back
        return redirect()->route('particulars.confirm')->with('success_message', 'Successfully registered pariculars info!');
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
        

        if (!$psn) 
            {
                return redirect()->route('particulars.index')->with('success_message', 'please fill in your personal details'); 
            }
         $pat = Particular::where('psn', $psn->psn)->first();   
        if (!$pat) 
            {
               return redirect()->route('particulars.index')->with('success_message', 'please fill in your particulars details'); 
            }

        return view('particulars-edit')->with([
                    'pat' => $pat,
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
            'lga' => 'required',
            'state' => 'required',
            'country' => 'required',
            'address' => 'required',
            'occupation' => 'required',
            'dob' => 'required',
            'tax' => 'required',
            'class' => 'required',
            'type' => 'required',
            'licence_number' => 'required',
            'por' => 'required',
            'model' => 'required',
            'model_code' => 'required',
            'manufactured_year' => 'required',
            'status' => 'required',
            'engine_number' => 'required',
            'chassis_number' => 'required',
            'color' => 'required',
            'body_type' => 'required',
            'origin' => 'required',
            'cylinder_capacity' => 'required',
            'rated_power' => 'required',
            'seating_capacity' => 'required',
            'propulsion' => 'required',
            'steering' => 'required',
            'tire_no' => 'required',
            'gps' => 'required',
            'airbag' => 'required',
            'tracker' => 'required',
            'insurance_company' => 'required',
            'policy_holder' => 'required',
            'policy_note' => 'required',
            'effective_date_from' => 'required',
            'effective_date_to' => 'required',
            'ecp_name' => 'required',
            'ecp_phone' => 'required',
            'ecp_email' => 'required',
            'ecp_city' => 'required',
            'ecp_lga' => 'required',
            'ecp_state' => 'required',
            'ecp_country' => 'required',
            'ecp_address' => 'required',
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

            Particular::where('psn', $psn->psn)->update([
                'document' => 'data/'.$fileNameToStore,
            ]);
            
        }

        $data = Particular::where('psn', $psn->psn)->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'city' => $request->input('city'),
            'lga' => $request->input('lga'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
            'address' => $request->input('address'),
            'occupation' => $request->input('occupation'),
            'dob' => $request->input('dob'),
            'tax' => $request->input('tax'),
            'class' => $request->input('class'),
            'type' => $request->input('type'),
            'licence_number' => $request->input('licence_number'),
            'por' => $request->input('por'),
            'model' => $request->input('model'),
            'model_code' => $request->input('model_code'),
            'manufactured_year' => $request->input('manufactured_year'),
            'status' => $request->input('status'),
            'engine_number' => $request->input('engine_number'),
            'chassis_number' => $request->input('chassis_number'),
            'color' => $request->input('color'),
            'body_type' => $request->input('body_type'),
            'origin' => $request->input('origin'),
            'cylinder_capacity' => $request->input('cylinder_capacity'),
            'rated_power' => $request->input('rated_power'),
            'seating_capacity' => $request->input('seating_capacity'),
            'propulsion' => $request->input('propulsion'),
            'steering' => $request->input('steering'),
            'tire_no' => $request->input('tire_no'),
            'door_no' => $request->input('door_no'),
            'gps' => $request->input('gps'),
            'airbag' => $request->input('airbag'),
            'tracker' => $request->input('tracker'),
            'insurance_company' => $request->input('insurance_company'),
            'policy_holder' => $request->input('policy_holder'),
            'policy_note' => $request->input('policy_note'),
            'effective_date_from' => $request->input('effective_date_from'),
            'effective_date_to' => $request->input('effective_date_to'),
            'ecp_name' => $request->input('ecp_name'),
            'ecp_phone' => $request->input('ecp_phone'),
            'ecp_email' => $request->input('ecp_email'),
            'ecp_city' => $request->input('ecp_city'),
            'ecp_lga' => $request->input('ecp_lga'),
            'ecp_state' => $request->input('ecp_state'),
            'ecp_country' => $request->input('ecp_country'),
            'ecp_address' => $request->input('ecp_address'),
        ]);

        //return back
        return back()->with('success_message', 'Successfully updated pariculars info!');
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

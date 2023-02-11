<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\SiteSetting;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /* angency register */


    public function angencyRegister(){

       $data['setting']= SiteSetting::findOrFail(1);
        return view('agency.register',$data);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'student_name' => ['nullable', 'string', 'max:255'],
            'agency_name' => ['nullable', 'string', 'max:255'],
            'institute_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile_number' => ['required', 'numeric'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        

        $user = User::create([
            'name' => $request->name,
            'student_name' => $request->student_name,
            'agency_name' => $request->agency_name,
            'institute_name' => $request->institute_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'password' => Hash::make($request->password),
        ]);
        if($user->name=='student'){
            //dd($user->name);
            $license_type ='ST1';
            $generate_id = generate_number($user->id, 4, $license_type);
            User::find($user->id)->update(['generated_id' => $generate_id]);
            $user->assignRole('student');

        }elseif($user->name=='agency'){

            $license_type ='AG1';
            $generate_id = generate_number($user->id, 4, $license_type);
            //dd($generate_id);        
             User::find($user->id)->update(['generated_id' => $generate_id,'status'=>'0']);
            $user->assignRole('agency');

        }else{

           $license_type ='IN1';
           $generate_id = generate_number($user->id, 4, $license_type);
           User::find($user->id)->update(['generated_id' => $generate_id,'status'=>'0']);
           $user->assignRole('institute');

        }
      
        event(new Registered($user));

       // Auth::login($user);

        //return redirect(RouteServiceProvider::HOME);
        //return redirect(RouteServiceProvider::LOGIN);
         $notification = array(
            'message' => 'Registration Successfully Completed',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }
}

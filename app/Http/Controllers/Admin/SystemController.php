<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SystemController extends Controller
{
   public function SiteSetting(){

        $edit_data = SiteSetting::find(1);
        return view('admin.setting.setting_update',compact('edit_data'));
    }


   public function SiteSettingUpdate(Request $request){

      $setting_data =$this->siteSettingValidation();
       //dd($setting_data);
        
        $setting_id = $setting_data['id'];
        //dd($setting_id);
         

        if ($request->file('logo')) {

           

          if (!empty($request->file('logo'))) {
            $logos = uniqid() . '.' . $request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('uploads/logo/'), $logos);
            //dd($logo);
            $setting_data['logo'] = $logos;
           
        }

         
        //$image = $request->file('logo');
        //$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        //Image::make($image)->resize(139,36)->save('upload/logo/'.$name_gen);
        //$save_url = 'upload/logo/'.$name_gen;

    SiteSetting::findOrFail($setting_id)->update($setting_data);

        $notification = array(
            'message' => 'Setting Updated with Image Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

        }else{

            if (!empty($request->file('logo'))) {
            $logos = uniqid() . '.' . $request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('uploads/logo/'), $logos);
            //dd($logo);
            $setting_data['logo'] = $logos;
            //dd($setting_data['logo']);
            //dd($agreement['signature_image']);
        }

        SiteSetting::findOrFail($setting_id)->update($setting_data);

        $notification = array(
            'message' => 'Setting Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

        } // end else 
    } // end method 



    public function SeoSetting(){

        $seo = Seo::find(1);
        return view('backend.setting.seo_update',compact('seo'));
    }
 

    public function SeoSettingUpdate(Request $request){

        $seo_id = $request->id;

        Seo::findOrFail($seo_id)->update([
        'meta_title' => $request->meta_title,
        'meta_author' => $request->meta_author,
        'meta_keyword' => $request->meta_keyword,
        'meta_description' => $request->meta_description,
        'google_analytics' => $request->google_analytics,        

        ]);

        $notification = array(
            'message' => 'Seo Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    } // end mehtod 


public function siteSettingValidation()
    {
        return request()->validate([
            'id'=>'nullable|string|max:255',
            'phone_one' => 'nullable|string|max:255',
            'site_name'=>'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'company_address' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'logo' => 'nullable|file',
         
        ]);
    }
}

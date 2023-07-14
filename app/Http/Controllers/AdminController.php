<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{

    public function HomePage()
    {
        $data =  DB::table('homepage')->where('section','section1')->first();
        $Tourist =  DB::table('homepage')->where('section','tourist')->first();
        $Multifunction =  DB::table('homepage')->where('section','multifunction')->first();
        $Team  =  DB::table('team')->limit(2)->get();
        $TeamSlide  =  DB::table('team')->get();
        $footer =  DB::table('homepage')->where('section','download')->first();
        $Benefit =  DB::table('homepage')->where('section','benefit')->first();
        $Benefitbottom =  DB::table('homepage')->where('section','benefitbottom')->first();
        $company =  DB::table('homepage')->where('section','company')->first();
        $header =  DB::table('homepage')->where('section','header')->first();
        $feature =  DB::table('homepage')->where('section','feature')->first();
        $featureist =  DB::table('homepage')->where('section','feature_1')->first();

        return view('index',compact('data','Tourist','Multifunction','Team','TeamSlide','footer','Benefit','Benefitbottom','company','header','feature','featureist'));

    }

    public function Homesection()
    {
        $data =  DB::table('homepage')->where('section','section1')->first();

        return view('admin/page-content/index',compact('data'));

    }
    public function AddHomesection(Request $request){
       


        $data =  DB::table('homepage')->where('section',$request->section)->first();

        if($request->logo)
        {
            $filename = $this->sendimagetodirectory($request->logo);
        }else{

            $filename = $request->oldimage;
        }

        if($request->btn_logo)
        {
            $filename_1 = $this->sendimagetodirectory($request->btn_logo);
        }else{

            $filename_1 = $request->oldimage_1;
        }

        if($request->btn_logo_1)
        {
            $filename_2 = $this->sendimagetodirectory($request->btn_logo_1);
        }else{

            $filename_2 = $request->oldimage_2;
        }

         if($data){
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'heading' => $request->heading,
             'detail' => $request->detail,
             'btn_link' => $request->btn_link,
             'btn_link_1' => $request->btn_link_1,
             'btn_text' =>  $filename_1,
             'btn_text_1' => $filename_2,
             'logo' => $filename,

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'heading' => $request->heading,
            'detail' => $request->detail,
            'btn_link' => $request->btn_link,
            'btn_link_1' => $request->btn_link_1,
            'btn_text' =>  $filename_1,
            'btn_text_1' => $filename_2,
            'logo' => $filename,


    
         ]);
 
 
     }
     
         return redirect()->back()->with('msg','About Us Updated successfully..!!');
     
     }


     

     public function Touristsection()
     {
         $data =  DB::table('homepage')->where('section','tourist')->first();
 
         return view('admin/page-content/Tourists',compact('data'));
 
     }


     public function AddTouristsection(Request $request){
       

       



        $data =  DB::table('homepage')->where('section',$request->section)->first();

        if($request->logo)
        {
            $filename = $this->sendimagetodirectory($request->logo);
        }else{

            $filename = $request->oldimage;
        }

        if($request->btn_logo)
        {
            $filename_1 = $this->sendimagetodirectory($request->btn_logo);
        }else{

            $filename_1 = $request->oldimage_1;
        }

        if($request->btn_logo_1)
        {
            $filename_2 = $this->sendimagetodirectory($request->btn_logo_1);
        }else{

            $filename_2 = $request->oldimage_2;
        }

         if($data)
         {
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'heading' => $request->heading,
             'sub_heading' => $request->sub_heading,
             'detail' => $request->detail,
             'btn_link' => $request->btn_link,
             'btn_link_1' => $request->btn_link_1,
             'btn_text' =>  $filename_1,
             'btn_text_1' => $filename_2,
             'logo' => $filename,

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'sub_heading' => $request->sub_heading,
            'heading' => $request->heading,
            'detail' => $request->detail,
            'btn_link' => $request->btn_link,
            'btn_link_1' => $request->btn_link_1,
            'btn_text' =>  $filename_1,
            'btn_text_1' => $filename_2,
            'logo' => $filename,


    
         ]);
 
 
     }
     
         return redirect()->back()->with('msg','Tourist Updated successfully..!!');
     
     }

     public function MULTIFUNCTION()
     {

        $data =  DB::table('homepage')->where('section','multifunction')->first();

         return view('admin/page-content/multifunction',compact('data'));
 
     }
     

 

     public function AddMultifunction(Request $request){
       

        $oldtrainingdocument = $request->post('oldimage');
        if ($request->has('logo')) {
            if ($oldtrainingdocument != "") {
                $Path = public_path('/assets/') . '/' . $oldtrainingdocument;
    
                if (file_exists($Path)) {
    
                   unlink($Path);
                }
            }
    
        
            $filename = "";
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path=public_path();
            $file->move($path.'/assets/' , $filename);
           
        } else {
            if ($request['oldimage'] != "") {
                $filename = $request['oldimage'];
            }
    }

  


        $data =  DB::table('homepage')->where('section',$request->section)->first();


         if($data){
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'logo' => $filename,

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'logo' => $filename,


    
         ]);
 
 
     }
     return redirect()->back()->with('msg','Tourist Updated successfully..!!');


    }

    public static function sendimagetodirectory($imagename)

    {

        $file = $imagename;

        $filename = rand() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('assets'), $filename);

        return $filename;

    }

    
    public function SectionTeam()
    {

        $Team  =  DB::table('team')->get();

        return view('admin/page-content/team',compact('Team'));

    }

    
    public function AddTeam(Request $request)
    {
       
        if($request->has('logo'))
        {
            $filename = $this->sendimagetodirectory($request->logo);
        }
    
         DB::table('team')
         ->insert([
            'name' => $request->name,
             'role' => $request->designation,
             'image' => $filename,

         ]);
     
   
     return redirect()->back()->with('msg','Team Updated successfully..!!');


    }

    public function EditTeam(Request $request)
    {
       
        if($request->logo)
        {
            $filename = $this->sendimagetodirectory($request->logo);
        }else{

            $filename = $request->image;
        }
    
         DB::table('team')->where('id',$request->id)
         ->update([
            'name' => $request->name,
            'role' => $request->designation,
            'image' => $filename,

         ]);
     
   
     return redirect()->back()->with('msg','Team Updated successfully..!!');


    }

    public function DownloadSection()
    {

       $data =  DB::table('homepage')->where('section','download')->first();

        return view('admin/page-content/download',compact('data'));

    }

    public function AddDownloadsection(Request $request){
       


        $data =  DB::table('homepage')->where('section',$request->section)->first();

    

        if($request->btn_logo)
        {
            $filename_1 = $this->sendimagetodirectory($request->btn_logo);
        }else{

            $filename_1 = $request->oldimage_1;
        }

        if($request->btn_logo_1)
        {
            $filename_2 = $this->sendimagetodirectory($request->btn_logo_1);
        }else{

            $filename_2 = $request->oldimage_2;
        }

         if($data)
         {
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'heading' => $request->heading,
             'detail' => $request->detail,
             'btn_link' => $request->btn_link,
             'btn_link_1' => $request->btn_link_1,
             'btn_text' =>  $filename_1,
             'btn_text_1' => $filename_2,
             'footer_link' => $request->footer_link,
             'footer_link_1' => $request->footer_link_1,
             'footer_link_2' => $request->footer_link_2,
             'footer_link_3' => $request->footer_link_3,

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'heading' => $request->heading,
            'detail' => $request->detail,
            'btn_link' => $request->btn_link,
            'btn_link_1' => $request->btn_link_1,
            'btn_text' =>  $filename_1,
            'btn_text_1' => $filename_2,
            'footer_link' => $request->footer_link,
            'footer_link_1' => $request->footer_link_1,
            'footer_link_2' => $request->footer_link_2,
            'footer_link_3' => $request->footer_link_3,



    
         ]);
 
 
     }
     
         return redirect()->back()->with('msg','About Us Updated successfully..!!');
     
     }

     public function SectionBenifit()
     {
 
        $data =  DB::table('homepage')->where('section','benefit')->first();
        $Benefitbottom =  DB::table('homepage')->where('section','benefitbottom')->first();

         return view('admin/page-content/benefit',compact('data','Benefitbottom'));
 
     }

     
    public function AddBenefitsection(Request $request){
       

        
        $data =  DB::table('homepage')->where('section',$request->section)->first();

    

         if($data)
         {
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'heading' => $request->heading,
             'sub_heading' => $request->sub_heading,
             'benefit_feild' => $request->benefit_feild,
             'benefit_feild_1' => $request->benefit_feild_1,
             'benefit_feild_2' => $request->benefit_feild_2,
             'benefit_feild_3' =>  $request->benefit_feild_3,
             

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'sub_heading' => $request->sub_heading,
            'heading' => $request->heading,
            'benefit_feild' => $request->benefit_feild,
            'benefit_feild_1' => $request->benefit_feild_1,
            'benefit_feild_2' => $request->benefit_feild_2,
            'benefit_feild_3' =>  $request->benefit_feild_3,
       

    
         ]);
 
 
     }

     if($request->benefit_logo)

     {
         foreach($request->benefit_logo  as $key => $value)
         {
         DB::table('benefit_top_image')
         ->insert([
            'section' => $request->section,
            'logo' => $this->sendimagetodirectory($request->benefit_logo[$key]),
    
         ]);
         }

     }

     if($request->has('benfit_old_logo'))

     {
         foreach($request['benfit_old_logo']  as $key => $value)
         {
         DB::table('benefit_top_image')
         ->where('id',$request->benfit_old_logo_id[$key])
         ->update([

            'logo' => $this->sendimagetodirectory($request->benfit_old_logo[$key]),
    
         ]);
         }

     }
     
         return redirect()->back()->with('msg','Section Updated successfully..!!');
     
     }

     public function AddBenefitsectionBottom(Request $request){
       

        
        $data =  DB::table('homepage')->where('section',$request->section)->first();

    

         if($data)
         {
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'heading' => $request->heading,
             'sub_heading' => $request->sub_heading,
             'benefit_feild' => $request->benefit_feild,
             'benefit_feild_1' => $request->benefit_feild_1,
             'benefit_feild_2' => $request->benefit_feild_2,
             'benefit_feild_3' =>  $request->benefit_feild_3,
         

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'sub_heading' => $request->sub_heading,
            'heading' => $request->heading,
            'benefit_feild' => $request->benefit_feild,
            'benefit_feild_1' => $request->benefit_feild_1,
            'benefit_feild_2' => $request->benefit_feild_2,
            'benefit_feild_3' =>  $request->benefit_feild_3,
         


    
         ]);
 
 
     }

     if($request->benefit_logo_bottom)

     {
         foreach($request->benefit_logo_bottom  as $key => $value)
         {
         DB::table('benefit_top_image')
         ->insert([
            'section' => $request->section,
            'logo' => $this->sendimagetodirectory($request->benefit_logo_bottom[$key]),
    
         ]);
         }

     }

     if($request->has('benfit_old_logo_bottom'))

     {
         foreach($request['benfit_old_logo_bottom']  as $key => $value)
         {
         DB::table('benefit_top_image')
         ->where('id',$request->benfit_old_logo_bottom_id[$key])
         ->update([

            'logo' => $this->sendimagetodirectory($request->benfit_old_logo[$key]),
    
         ]);
         }

     }
     
         return redirect()->back()->with('msg','Section Updated successfully..!!');
     
     }

     public function CompanyInfo()
     {
         $data =  DB::table('homepage')->where('section','company')->first();
 
         return view('admin/page-content/company',compact('data'));
 
     }

     
     public function AddCompanyInfo(Request $request){
       

        $data =  DB::table('homepage')->where('section',$request->section)->first();

        if($request->company_logo)
        {
            $filename = $this->sendimagetodirectory($request->company_logo);
        }else{

            $filename = $request->oldimage;
        }

        if($request->develope_logo)
        {
            $filename_1 = $this->sendimagetodirectory($request->develope_logo);
        }else{

            $filename_1 = $request->olddevelopelogo;
        }

         if($data)
         {
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'company_logo' => $filename,
             'develope_logo' =>$filename_1, 

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'company_logo' => $filename,
            'develope_logo' =>$filename_1, 



    
         ]);
 
 
     }
     return redirect()->back()->with('msg','Section Updated successfully..!!');


    }

    public function HeaderSection()
    {
        $data =  DB::table('homepage')->where('section','header')->first();

        return view('admin/page-content/header',compact('data'));

    }

    public function AddHeaderSection(Request $request){
       

        
    $data =  DB::table('homepage')->where('section',$request->section)->first();

    

         if($data)
         {
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'header_link' => $request->header_link,
             'header_link_1' => $request->header_link_1,
             'header_link_2' => $request->header_link_2,
             'header_link_3' =>  $request->header_link_3,
             'header_btn' =>  $request->header_btn,
             'header_btn_link' => $request->header_btn_link,

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'header_link' => $request->header_link,
            'header_link_1' => $request->header_link_1,
            'header_link_2' => $request->header_link_2,
            'header_link_3' =>  $request->header_link_3,
            'header_btn' =>  $request->header_btn,
            'header_btn_link' => $request->header_btn_link,
    
         ]);
 
 
     }
     
         return redirect()->back()->with('msg','Section Updated successfully..!!');
     
     }

     public function Featuresection()
     {
         $data =  DB::table('homepage')->where('section','feature')->first();
 
         return view('admin/page-content/feature_section',compact('data'));
 
     }


     public function AddFeaturesection(Request $request){
       


        $data =  DB::table('homepage')->where('section',$request->section)->first();


        if($request->logo)
        {
            $filename = $this->sendimagetodirectory($request->logo);
        }else{

            $filename = $request->oldimage;
        }

        if($request->btn_logo)
        {
            $filename_1 = $this->sendimagetodirectory($request->btn_logo);
        }else{

            $filename_1 = $request->oldimage_1;
        }

        if($request->btn_logo_1)
        {
            $filename_2 = $this->sendimagetodirectory($request->btn_logo_1);
        }else{

            $filename_2 = $request->oldimage_2;
        }
         if($data){
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'heading' => $request->heading,
             'sub_heading' => $request->sub_heading,
             'detail' => $request->detail,
             'btn_link' => $request->btn_link,
             'btn_link_1' => $request->btn_link_1,
             'btn_text' =>  $filename_1,
             'btn_text_1' => $filename_2,
             'logo' => $filename,

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'sub_heading' => $request->sub_heading,
            'heading' => $request->heading,
            'detail' => $request->detail,
            'btn_link' => $request->btn_link,
            'btn_link_1' => $request->btn_link_1,
            'btn_text' =>  $filename_1,
            'btn_text_1' => $filename_2,
            'logo' => $filename,


    
         ]);
 
 
     }
     
         return redirect()->back()->with('msg','Section Updated successfully..!!');
     
     }

     public function FeturesectionIst()
     {
         $data =  DB::table('homepage')->where('section','feature_1')->first();
 
         return view('admin/page-content/feature_section_1',compact('data'));
 
     }


     public function AddFeturesectionIst(Request $request){
       

  

        $data =  DB::table('homepage')->where('section',$request->section)->first();

        if($request->logo)
        {
            $filename = $this->sendimagetodirectory($request->logo);
        }else{

            $filename = $request->oldimage;
        }

        if($request->btn_logo)
        {
            $filename_1 = $this->sendimagetodirectory($request->btn_logo);
        }else{

            $filename_1 = $request->oldimage_1;
        }

        if($request->btn_logo_1)
        {
            $filename_2 = $this->sendimagetodirectory($request->btn_logo_1);
        }else{

            $filename_2 = $request->oldimage_2;
        }

         if($data){
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'heading' => $request->heading,
             'sub_heading' => $request->sub_heading,
             'detail' => $request->detail,
             'btn_link' => $request->btn_link,
             'btn_link_1' => $request->btn_link_1,
             'btn_text' =>  $filename_1,
             'btn_text_1' => $filename_2,
             'logo' => $filename,

         ]);
     
     }else{
 
         DB::table('homepage')
         ->insert([
            'section' => $request->section,
            'sub_heading' => $request->sub_heading,
            'heading' => $request->heading,
            'detail' => $request->detail,
            'btn_link' => $request->btn_link,
            'btn_link_1' => $request->btn_link_1,
            'btn_text' =>  $filename_1,
            'btn_text_1' => $filename_2,
            'logo' => $filename,


    
         ]);
 
 
     }
     
         return redirect()->back()->with('msg','Tourist Updated successfully..!!');
     
     }


 
}

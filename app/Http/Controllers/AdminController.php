<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{

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

  



$faviIcon = $request->post('oldimage_1');
if ($request->has('btn_logo')) {
    if ($faviIcon != "") {
        $Path = public_path('/assets') . '/' . $faviIcon;

        if (file_exists($Path)) {

           unlink($Path);
        }
    }


    $filename1 = "";
    $file = $request->file('btn_logo');
    $extension = $file->getClientOriginalExtension();
    $filename1 = time().'.'.$extension;
    $path=public_path();
    $file->move($path.'/assets' , $filename1);
   
} else {
    if ($request['oldimage_1'] != "") {
        $filename1 = $request['oldimage_1'];
    }
}


$favi = $request->post('oldimage_2');
if ($request->has('btn_logo_1')) {
    if ($favi != "") {
        $Path = public_path('/assets') . '/' . $favi;

        if (file_exists($Path)) {

           unlink($Path);
        }
    }


    $filename2 = "";
    $file = $request->file('btn_logo_1');
    $extension = $file->getClientOriginalExtension();
    $filename2 = time().'.'.$extension;
    $path=public_path();
    $file->move($path.'/assets' , $filename2);
   
} else {
    if ($request['oldimage_2'] != "") {
        $filename2 = $request['oldimage_2'];
    }
}

        $data =  DB::table('homepage')->where('section',$request->section)->first();


         if($data){
         DB::table('homepage')->where('section',$request->section)
         ->update([
             'heading' => $request->heading,
             'sub_heading' => $request->sub_heading,
             'detail' => $request->detail,
             'btn_link' => $request->btn_link,
             'btn_link_1' => $request->btn_link_1,
             'btn_text' =>  $filename1,
             'btn_text_1' => $filename2,
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
            'btn_text' =>  $filename1,
            'btn_text_1' => $filename2,
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
     

     public function HomePage()
     {
         $data =  DB::table('homepage')->where('section','section1')->first();
         $Tourist =  DB::table('homepage')->where('section','tourist')->first();
         $Multifunction =  DB::table('homepage')->where('section','multifunction')->first();
         $Team  =  DB::table('team')->limit(2)->get();
         $TeamSlide  =  DB::table('team')->get();
         $footer =  DB::table('homepage')->where('section','download')->first();

         return view('index',compact('data','Tourist','Multifunction','Team','TeamSlide','footer'));
 
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


    
         ]);
 
 
     }
     
         return redirect()->back()->with('msg','About Us Updated successfully..!!');
     
     }
}

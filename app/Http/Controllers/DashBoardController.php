<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuModel;
use App\OurServiceDetail;
use App\OracleSolutionDetail;
use App\BiometricSolutionDetail;
use App\FireModelDetail;
use App\UpsModelDetail;
use App\SpecificModel;
use App\SubModel;
use App\FooterModel;
use App\UpperModel;
use App\BannerModel;
use App\ServiceModel;
use App\SolutionModel;
use App\GTSolutionModel;
use App\CadSolutionModel;
use App\FireModel;
use App\Biometric;
use App\UpsModel;
use App\EventModel;
use App\PartnerModel;
use Carbon\Carbon;
use Image;

class DashBoardController extends Controller
{

 public function __construct()
 {
     $this->middleware('auth');
 }

    public function dashboard()
    {
    return view('dashboard');
    }










    public function texteditor()
    {
              return view('Dashboard_page/texteditor');
    }
    //=========================================================== Uper Head==============================================================================

public function upper()
{     $attach= UpperModel::all();
       $sl=1;
       return view('Dashboard_page/Upperhead',compact('attach','sl'));
}
public function upperinsert(Request $request)
{
  UpperModel::insert([
    'phone1'=>$request->phone1,
    'phone2'=>$request->phone2,
    'email'=>$request->email,
    'icon'=>$request->icon,
    'link'=>$request->link,
    'created_at'=>Carbon::now(),
  ]);
  return back();
}
public function UU(Request $request)
{
  UpperModel::findOrFail($request->all_id)->update([
    'phone1'=>$request->phone1,
    'phone2'=>$request->phone2,
    'email'=>$request->email,
    'icon'=>$request->icon,
    'link'=>$request->link,
    'created_at'=>Carbon::now(),
  ]);
return redirect()->route('upper');
}
//=========================================================== SUB  MENU==============================================================================
    public function sub()
    {     $attach=SubModel::all();
          $attach2=MenuModel::all();
           $sl=1;
         return view('Dashboard_page/submenu',compact('attach','attach2','sl'));
    }
    public function subinsert(Request $request)
    {
      SubModel::insert([
        'title'=>$request->title,
        'link'=>$request->link,
        'menu_id'=>$request->menu_id,
        'created_at'=>Carbon::now(),
      ]);
      return back();
    }


    public function UPP(Request $request)
    {
      SubModel::findOrFail($request->all_id)->update([
        'title'=>$request->title,
        'link'=>$request->link,
        'menu_id'=>$request->menu_id,
        'created_at'=>Carbon::now(),
      ]);
    return redirect()->route('sub');
    }

    //=========================================================== MENU==============================================================================
    public function menu()
    {     $attach=MenuModel::all();
           $sl=1;
           return view('Dashboard_page/Menu',compact('attach','sl'));
    }
    public function menuinsert(Request $request)
    {
      MenuModel::insert([
        'title'=>$request->title,
        'link'=>$request->link,
        'created_at'=>Carbon::now(),
      ]);
      return back();
    }
    public function Um(Request $request)
    {
      MenuModel::findOrFail($request->all_id)->update([
        'title'=>$request->title,
        'link'=>$request->link,
        'created_at'=>Carbon::now(),
      ]);
    return redirect()->route('menu');
    }

    //===========================================================banner=============================================================================
    public function banner()
    {     $attach=BannerModel::all();
           $sl=1;
           return view('Dashboard_page/banner',compact('attach','sl'));
    }


    public function bannerinsert(Request $request)
    {
      if($request->hasFile('allimg')){
       $product_image=$request->file('allimg');
       $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
       Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),100);
       BannerModel::insert([
         'title'=>$request->title,
         'text'=>$request->text,
         'allimg'=>'all_img/'.$filename,
         'created_at'=>Carbon::now(),
       ]);
       return back()->with('success','Data Insert Successfully');
     }else{
       BannerModel::insert([
         'title'=>$request->title,
         'text'=>$request->text,
         'allimg'=>'all_img/default.png',
       ]);
          return back()->with('success','Data Insert Successfully');
    }

}




//=========================================================== SERVICE==============================================================================

public function service()
{     $attach=ServiceModel::all();
       $sl=1;
       return view('Dashboard_page/service',compact('attach','sl'));
}

public function serviceinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(500, 400)->save(base_path('public/all_img/'.$filename),100);
   ServiceModel::insert([
     'ttile'=>$request->ttile,
     'detail'=>$request->detail,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   ServiceModel::insert([
     'ttile'=>$request->ttile,
     'detail'=>$request->detail,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}
}


public function OurServiceDetail()
{
  $attach=OurServiceDetail::all()->unique('title');
   return view('Dashboard_page/OurServiceDetail',compact('attach'));
}
public function OurServiceDetailinsert(Request $request)
{
  $detail=$request->summernoteInput;

  $dom = new \domdocument();
  $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
  $images = $dom->getelementsbytagname('img');

  //loop over img elements, decode their base64 src and save them to public folder,
  //and then replace base64 src with stored image URL.
  foreach($images as $k => $img){
      $data = $img->getattribute('src');

      list($type, $data) = explode(';', $data);
      list(, $data)      = explode(',', $data);

      $data = base64_decode($data);
      $image_name= time().$k.'.png';
      $path = public_path() .'/'. $image_name;

      file_put_contents($path, $data);

      $img->removeattribute('src');
      $img->setattribute('src', '/'.$image_name);
  }

  $detail = $dom->savehtml();
  $summernote = new OurServiceDetail;
  $summernote->content = $detail;
  $summernote->save();
  // return view('summernote_display',compact('summernote'));
  //Summernote::truncate();
  return back();
}



public function OurServiceDetailUpdate(Request $request)
{
  if($request->hasFile('all_img')){
   $product_image=$request->file('all_img');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(500, 400)->save(base_path('public/all_img/'.$filename),100);

 for($i=0; $i<count($request->list)-1; $i++){
    OurServiceDetail::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'list'=>$request->list[$i],
     'all_img'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
 }
        return redirect()->route('OurServiceDetail');
  }
  else{
  for($i=0; $i<count($request->list)-1; $i++){
    OurServiceDetail::findOrFail($request->all_id)->update([
      'title'=>$request->title,
      'text'=>$request->text,
      'list'=>$request->list[$i],
     'all_img'=>'all_img/default.png',
   ]);
 }
     return redirect()->route('OurServiceDetail');
  }
}


public function SpecificServiceDetail()
{
  $attach=ServiceModel::all();
  $attach2=SpecificModel::all();
   return view('Dashboard_page/SpecificServiceDetail',compact('attach','attach2'));
}


public function SpecificUpdate(Request $request)
{
  if($request->hasFile('all_img')){
   $product_image=$request->file('all_img');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(500, 400)->save(base_path('public/all_img/'.$filename),100);

 for($i=0; $i<count($request->list)-1; $i++){
    SpecificModel::insert([
     'title'=>$request->title,
     'ctg'=>$request->ctg,
     'text'=>$request->text,
     'list'=>$request->list[$i],
     'all_img'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
 }
   return back()->with('success','Data Insert Successfully');
  }
  else{
  for($i=0; $i<count($request->list)-1; $i++){
    SpecificModel::insert([
      'title'=>$request->title,
      'text'=>$request->text,
      'ctg'=>$request->ctg,
      'list'=>$request->list[$i],
     'all_img'=>'all_img/default.png',
   ]);
 }
      return back()->with('success','Data Insert Successfully');
  }
}





public function Specificinput3()
{
  $attach=SolutionModel::all();
  $ora= OracleSolutionDetail::all();
  $bio=BiometricSolutionDetail::all();
  $attach2=Biometric::all();
   return view('Dashboard_page/3serviceInput',compact('attach','attach2','ora','bio'));
}








public function Specificinput2()
{
  $attach=UpsModel::all();
  $fir=FireModelDetail::all();
  $up=UpsModelDetail::all();
  $attach2=FireModel::all();
   return view('Dashboard_page/2ServiceInput',compact('attach','attach2','fir','up'));
}


public function SpecificUpdateThree(Request $request)
{

  if($request->thing=="oracle"){
    if($request->hasFile('all_img')){
     $product_image=$request->file('all_img');
     $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
     Image::make($product_image)->resize(500, 400)->save(base_path('public/all_img/'.$filename),100);
    OracleSolutionDetail::insert([
       'title'=>$request->title,
       'ctg'=>$request->ctg,
       'text'=>$request->text,
       'full_text'=>$request->full_text,
       'all_img'=>'all_img/'.$filename,
       'created_at'=>Carbon::now(),
     ]);
     return back()->with('success','Data Insert Successfully');
   }else{
     OracleSolutionDetail::insert([
       'title'=>$request->title,
       'ctg'=>$request->ctg,
       'text'=>$request->text,
       'full_text'=>$request->full_text,
       'all_img'=>'all_img/default.png',
     ]);
        return back()->with('success','Data Insert Successfully');
  }

  }
  else{
    if($request->hasFile('all_img')){
     $product_image=$request->file('all_img');
     $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
     Image::make($product_image)->resize(500, 400)->save(base_path('public/all_img/'.$filename),100);
    BiometricSolutionDetail::insert([
       'title'=>$request->title,
       'ctg1'=>$request->ctg1,
       'text'=>$request->text,
       'full_text'=>$request->full_text,
       'all_img'=>'all_img/'.$filename,
       'created_at'=>Carbon::now(),
     ]);
     return back()->with('success','Data Insert Successfully');
   }else{
     BiometricSolutionDetail::insert([
       'title'=>$request->title,
       'ctg1'=>$request->ctg1,
       'text'=>$request->text,
       'full_text'=>$request->full_text,
       'all_img'=>'all_img/default.png',
     ]);
        return back()->with('success','Data Insert Successfully');
  }

  }

}




public function SpecificUpdateTwo(Request $request)
{

  if($request->thing=="oracle"){
    if($request->hasFile('all_img')){
     $product_image=$request->file('all_img');
     $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
     Image::make($product_image)->resize(500, 400)->save(base_path('public/all_img/'.$filename),100);
    FireModelDetail::insert([
       'title'=>$request->title,
       'ctg'=>$request->ctg,
       'text'=>$request->text,
       'full_text'=>$request->full_text,
       'all_img'=>'all_img/'.$filename,
       'created_at'=>Carbon::now(),
     ]);
     return back()->with('success','Data Insert Successfully');
   }else{
     FireModelDetail::insert([
       'title'=>$request->title,
       'ctg'=>$request->ctg,
       'text'=>$request->text,
       'full_text'=>$request->full_text,
       'all_img'=>'all_img/default.png',
     ]);
        return back()->with('success','Data Insert Successfully');
  }

  }
  else{
    if($request->hasFile('all_img')){
     $product_image=$request->file('all_img');
     $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
     Image::make($product_image)->resize(500, 400)->save(base_path('public/all_img/'.$filename),100);
    UpsModelDetail::insert([
       'title'=>$request->title,
       'ctg1'=>$request->ctg1,
       'text'=>$request->text,
       'full_text'=>$request->full_text,
       'all_img'=>'all_img/'.$filename,
       'created_at'=>Carbon::now(),
     ]);
     return back()->with('success','Data Insert Successfully');
   }else{
     UpsModelDetail::insert([
       'title'=>$request->title,
       'ctg1'=>$request->ctg1,
       'text'=>$request->text,
       'full_text'=>$request->full_text,
       'all_img'=>'all_img/default.png',
     ]);
        return back()->with('success','Data Insert Successfully');
  }

  }

}

















































//=========================================================== SOLUTION==============================================================================


public function solution()
{     $attach=SolutionModel::all();
       $sl=1;
       return view('Dashboard_page/solution',compact('attach','sl'));
}

public function solutioninsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(150, 150)->save(base_path('public/all_img/'.$filename),100);
   SolutionModel::insert([

     'title'=>$request->title,
     'detail'=>$request->detail,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   SolutionModel::insert([

     'title'=>$request->title,
     'detail'=>$request->detail,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}

//=========================================================== SOLUTION==============================================================================


public function gtsolution()
{     $attach=GTSolutionModel ::all();
       $sl=1;
       return view('Dashboard_page/GTsolution',compact('attach','sl'));
}

public function gtsolutioninsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(150, 150)->save(base_path('public/all_img/'.$filename),100);
  GTSolutionModel::insert([

     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   GTSolutionModel::insert([

     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}
//===========================================================CAD SOLUTION==============================================================================


public function cadsolution()
{     $attach=CadSolutionModel::all();
       $sl=1;
       return view('Dashboard_page/Cadsolution',compact('attach','sl'));
}

public function cadsolutioninsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(50, 100)->save(base_path('public/all_img/'.$filename),100);
  CadSolutionModel::insert([

     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   CadSolutionModel::insert([

     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/d1.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}

//===========================================================Biometric SOLUTION==============================================================================


public function biometric()
{     $attach=Biometric::all();
       $sl=1;
       return view('Dashboard_page/Biometric',compact('attach','sl'));
}

public function biometricinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(400, 400)->save(base_path('public/all_img/'.$filename),100);
  Biometric::insert([
     'title'=>$request->title,
     'detail'=>$request->detail,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   Biometric::insert([

     'title'=>$request->title,
     'detail'=>$request->detail,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
     'created_at'=>Carbon::now(),

   ]);
      return back()->with('success','Data Insert Successfully');
}

}
//===========================================================UPS  ==============================================================================


public function ups()
{     $attach=UpsModel::all();
       $sl=1;
       return view('Dashboard_page/Ups',compact('attach','sl'));
}

public function upsinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(400, 400)->save(base_path('public/all_img/'.$filename),100);
  UpsModel::insert([

     'title'=>$request->title,
     'detail'=>$request->detail,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   UpsModel::insert([

     'title'=>$request->title,
      'detail'=>$request->detail,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}


//===========================================================Fire SOLUTION==============================================================================


public function fire()
{     $attach=FireModel::all();
       $sl=1;
       return view('Dashboard_page/Fire',compact('attach','sl'));
}

public function fireinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');

   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();

   Image::make($product_image)->resize(400, 400)->save(base_path('public/all_img/'.$filename),100);

  FireModel::insert([
     'title'=>$request->title,
      'detail'=>$request->detail,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   FireModel::insert([
     'title'=>$request->title,
      'detail'=>$request->detail,
     'allimg'=>'all_img/default.png',

   ]);
      return back()->with('success','Data Insert Successfully');
}

}

//===========================================================Event  ==============================================================================


public function event()
{     $attach=EventModel::all();
       $sl=1;
       return view('Dashboard_page/Event',compact('attach','sl'));
}

public function eventinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(400, 300)->save(base_path('public/all_img/'.$filename),100);
  EventModel::insert([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   EventModel::insert([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}
//===========================================================partner ==============================================================================


public function partner()
{     $attach=PartnerModel::all();
       $sl=1;
       return view('Dashboard_page/partner',compact('attach','sl'));
}

public function Partnerinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(300, 300)->save(base_path('public/all_img/'.$filename),100);
  PartnerModel::insert([
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
  PartnerModel::insert([
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}





//===========================================================footer ==============================================================================


public function footer()
{     $attach=FooterModel::all();
       $sl=1;
       return view('Dashboard_page/footer',compact('attach','sl'));
}


public function footerinsert(Request $request)
{
      FooterModel::insert([
        'detail'=>$request->detail,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
}



// ==================================================ALL EDIT===============================================================

function ESD($id){
$attach= OurServiceDetail::findOrFail($id);
$title = OurServiceDetail::select('title')->distinct()->get();
return view('Dashboard_page/OurServiceDetailUpdate',compact('attach','title'));
}
function SUBM($id){
  $menu=MenuModel::all();
 $attach= SubModel::findOrFail($id);
return view('Dashboard_page/updatesubmenu',compact('attach','menu'));
}
function ESS($id){
 $attach= ServiceModel::findOrFail($id);

return view('Dashboard_page/ServiceUpdate',compact('attach'));
}
function E0($id){
 $attach= MenuModel::findOrFail($id);

return view('Dashboard_page/menuupdate',compact('attach'));
}
function EU($id){
 $attach= UpperModel::findOrFail($id);

return view('Dashboard_page/Upperheadupdate',compact('attach'));
}
function E1($id){
 $attach= BannerModel::findOrFail($id);

return view('Dashboard_page/BannerUpdate',compact('attach'));
}
function E2($id){
 $attach= GTSolutionModel::findOrFail($id);

return view('Dashboard_page/Gt_solutionupdate',compact('attach'));
}
function E3($id){
 $attach= CadSolutionModel::findOrFail($id);

return view('Dashboard_page/Cadsolutionupdate',compact('attach'));
}
function E4($id){
 $attach= Biometric::findOrFail($id);

return view('Dashboard_page/BiometricUpdate',compact('attach'));
}
function E5($id){
 $attach= EventModel::findOrFail($id);
return view('Dashboard_page/EventUpdate',compact('attach'));
}
function U1(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),100);
   BannerModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return redirect()->route('banner');
 }else{
   BannerModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('banner');
}
function U2(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),100);
   GTSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'detail'=>$request->detail,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
return redirect()->route('gtsolution');
 }else{
   GTSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
      'detail'=>$request->detail,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('gtsolution');

}


function U3(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),100);
   CadSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
    return redirect()->route('cadsolution');
 }else{
   CadSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('cadsolution');

}
function U4(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),100);
   GTSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
return redirect()->route('gtsolution');
 }else{
   GTSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('gtsolution');

}
function U5(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),100);
   EventModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
return redirect()->route('event');
 }else{
   EventModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('event');

}






function USS(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(500, 400)->save(base_path('public/all_img/'.$filename),100);
   ServiceModel::findOrFail($request->all_id)->update([
     'ttile'=>$request->ttile,
     'detail'=>$request->detail,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
return redirect()->route('service');
 }else{
   ServiceModel::findOrFail($request->all_id)->update([
     'ttile'=>$request->ttile,
     'detail'=>$request->detail,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('service');

}





// ============================================ALL DELETE===================================================================
function D1($id){
BannerModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D2($id){
ServiceModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D3($id){
SolutionModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}

function D4($id){
GTSolutionModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D5($id){
CadSolutionModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D6($id){
Biometric::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D8($id){
UpsModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D9($id){
FireModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D10($id){
EventModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D11($id){
PartnerModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D17($id){
 UpperModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function menudelete($id){
MenuModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D999($id){
 FooterModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function tt($id){
 SubModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function DSD($id){
 OurServiceDetail::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}

function DSDD($id){
 BiometricSolutionDetail::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}

function DSDDD($id){
 OracleSolutionDetail::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}


















}

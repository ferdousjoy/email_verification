<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BannerModel;
use App\OurServiceDetail;
use App\OracleSolutionDetail;
use App\BiometricSolutionDetail;
use App\SpecificModel;
use App\FireModelDetail;
use App\UpsModelDetail;
use App\MenuModel;
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


class SiteController extends Controller
{
    function website()
    {
      $banner=BannerModel::all();
      $ser=ServiceModel::all();
      $sol=SolutionModel::all();
      $gt=GTSolutionModel::all();
      $cad=CadSolutionModel::all();
      $fir=FireModel::all();
      $bio=Biometric::all();
      $ups=UpsModel::all();
      $eve=EventModel::all();
      $par=PartnerModel::all();
      $menu=MenuModel::all();
       return view('website',compact('bio','ups','eve','par','banner','ser','sol','gt','cad','fir','menu'));
    }

    function detailservice()

    {
    $attach= OurServiceDetail::all();
     return view('Service_detail', compact('attach'));
    }


    function servicedetail($id)
    {
      $service=ServiceModel::find($id);
      $data = SpecificModel::where('ctg',$id)->get();
      $title = SpecificModel::select('title')->distinct()->get();
      return view('blogdetail',compact('data','title','service'));
    }




    function solutiondetail($id)
    {
      $ora=OracleSolutionDetail::where('ctg', $id)->get();
      return view('detail',compact('ora'));
    }





    function biometricdetail($id)
    {
      $bio=BiometricSolutionDetail::where('ctg1', $id)->get();
      return view('Biodetail',compact('bio'));
    }




























     function updetail($id)
     {
       $data = UpsModelDetail::where('ctg1',$id)->get();
       return view('updetail',compact('data'));
     }
     function firedetail($id)
     {
       $data = FireModelDetail::where('ctg',$id)->get();
       return view('firedetail',compact('data'));
     }


}

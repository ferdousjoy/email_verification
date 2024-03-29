<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summernote;

class SummernoteController extends Controller
{
  public function store(Request $request)
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
      $summernote = new Summernote;
      $summernote->content = $detail;
      $summernote->save();
      // return view('summernote_display',compact('summernote'));
      //Summernote::truncate();
      return back();
  }
}

<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Portfolio;
use Chumper\Zipper\Facades\Zipper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller {

   public function getProfile(){
      return view('pages.profile');
   }

   public function getSkills(){
      return view('pages.skills');
   }

   public function getPortfolio(){
      $portfolios = Portfolio::all();
      return view('pages.portfolio', compact('portfolios'));
   }

   public function getResume(){
      return view('pages.resume');
   }

   public function downloadResume(){
      $files = glob(public_path('download/*'));
      Zipper::make(public_path('download/resume.zip'))->add($files)->close();
      return response()->download(public_path('download/resume.zip'))->deleteFileAfterSend(true);
   }

   public function contact(Request $request){
      App::setLocale($request->get('lang', 'en'));
      $validator = Validator::make($request->all(), [
         'name' => 'required|min:2|max:15|',
         'email' => 'required|email',
         'message' => 'required|min:10|max:300'
      ]);

      if ($validator->passes()) {
         Mail::to('evgenyweb92@gmail.com')->send(new Contact($request));
         return response()->json(['success'=>'Message sent successfully!']);
      }
      return response()->json(['error'=>$validator->errors()->all()]);
   }
}

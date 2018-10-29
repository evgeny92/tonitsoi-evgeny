<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PortfolioRequest;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use TJGazel\Toastr\Facades\Toastr;

class PortfolioController extends Controller {

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(){

      $portfolios = Portfolio::latest()->get();
      return view('dashboard.portfolio.index', compact('portfolios'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(){
      return view('dashboard.portfolio.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request){

      $validator = Validator::make($request->all(), [
         'translation.*.title' => 'required|min:10|max:100|unique:portfolio_translations,title',
         'image' => 'required|image|max:1024',
         'link' => 'required|url|min:4|max:50',
         'translation.*.content' => 'required|min:20|max:5000',
      ]);

      if ($validator->fails()) {
         foreach($validator->errors()->all() as $error) {
            Toastr::error($error);
         }
         return back()->withInput();
      }

      $portfolio = new Portfolio;
      foreach(config('translatable.locales') as $locale){
         $portfolio->fill([
            $locale => [
               'title' => $request->get('translation')[$locale]['title'],
               'content' => $request->get('translation')[$locale]['content'],
            ],
         ]);
      }

      $portfolio->link = $request->link;

      if($request->hasFile('image')){
         $portfolio_image = $request->file('image');
         $filename = time() . '.' . $portfolio_image->getClientOriginalExtension();
         $path = public_path('images/portfolio/' . $filename);
         Image::make($portfolio_image)->save($path);
         $portfolio->image = $filename;
      }
      $portfolio->save();

      Toastr::success('Portfolio successfully added');
      return redirect()->route('portfolio.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function show($id){
      $portfolio = Portfolio::findOrFail($id);
      return view('dashboard.portfolio.show', compact('portfolio'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id){
      $portfolio = Portfolio::findOrFail($id);
      return view('dashboard.portfolio.edit', compact('portfolio'));
   }

   /**a
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id){

      $validator = Validator::make($request->all(), [
         'translation.*.title' => 'min:10|max:100',
         'image' => 'image|max:1024',
         'link' => 'url|min:4|max:50',
         'translation.*.content' => 'min:10|max:5000',
      ]);

      if ($validator->fails()) {
         foreach($validator->errors()->all() as $error) {
            Toastr::error($error);
         }
         return back()->withInput();
      }

      $portfolio = Portfolio::findOrFail($id);
      foreach(config('translatable.locales') as $locale){
         $portfolio->fill([
            $locale => [
               'title' => $request->get('translation')[$locale]['title'],
               'content' => $request->get('translation')[$locale]['content'],
            ],
         ]);
      }

      $portfolio->link = $request->link;

      if($request->hasFile('image')){
         $portfolio_image = $request->file('image');
         $filename = time() . '.' . $portfolio_image->getClientOriginalExtension();
         $path = public_path('images/portfolio/' . $filename);
         Image::make($portfolio_image)->save($path);
         $oldFileName = $portfolio->image;
         $portfolio->image = $filename;
         File::delete(public_path('images/portfolio/' . $oldFileName));
      }
      $portfolio->save();

      Toastr::success('Portfolio successfully edited');
      return redirect()->route('portfolio.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id){
      $portfolio = Portfolio::findOrFail($id);
      File::delete(public_path('images/portfolio/' . $portfolio->image));
      $portfolio->delete();
      Toastr::success('Portfolio successfully deleted');
      return redirect()->route('portfolio.index');
   }
}

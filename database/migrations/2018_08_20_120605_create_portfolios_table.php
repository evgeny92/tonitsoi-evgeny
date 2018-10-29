<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration {
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){

      Schema::create('portfolios', function(Blueprint $table){
         $table->increments('id');
         $table->string('image');
         $table->timestamps();
      });

      Schema::create('portfolio_translations', function(Blueprint $table)
      {
         $table->increments('id');
         $table->integer('portfolio_id')->unsigned();
         $table->string('locale')->index();
         $table->string('title');
         $table->text('content');

         $table->unique(['portfolio_id','locale']);
         $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down(){
      Schema::dropIfExists('portfolios');
      Schema::dropIfExists('portfolio_translations');
   }
}

<?php

namespace App\Console\Commands;

use App\Portfolio;
use Illuminate\Console\Command;

class AddData extends Command {
   /**
    * The name and signature of the console command.
    *
    * @var string
    */
   protected $signature = 'portfolio:add';

   /**
    * The console command description.
    *
    * @var string
    */
   protected $description = 'Command description';

   /**
    * Create a new command instance.
    *
    * @return void
    */
   public function __construct(){
      parent::__construct();
   }

   /**
    * Execute the console command.
    *
    * @return mixed
    */
   public function handle(){

      app()->setLocale('en');

      $portfolio1 = new Portfolio();
      $portfolio1->title = 'My Awesome Post';
      $portfolio1->content = 'This is some cool paragraph';
      $portfolio1->image = 'portfolio1.png';
      $portfolio1->save();

      $portfolio2 = new Portfolio();
      $portfolio2->title = 'The Second Amazing Subject';
      $portfolio2->content = 'A very nice text about how things work somewhere';
      $portfolio2->image = 'portfolio2.png';
      $portfolio2->save();

      app()->setLocale('ru');

      $portfolio1->title = 'Mon Super Article';
      $portfolio1->content = 'Ceci est le contenu stylé de mon article';
      $portfolio1->image = 'portfolio1.png';
      $portfolio1->save();

      $portfolio2->title = 'Le Deuxième sujet génial';
      $portfolio2->content = 'Un chouette texte qui vous raconte des choses';
      $portfolio2->image = 'portfolio2.png';
      $portfolio2->save();
   }
}

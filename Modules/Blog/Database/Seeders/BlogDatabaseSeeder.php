<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Entities\Category;

class BlogDatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();

    Category::create(['name' => 'Laravel', 'slug' => 'laravel', 'color' => 'bg-red-500']);
    Category::create(['name' => 'React', 'slug' => 'react', 'color' => 'bg-blue-500']);
    Category::create(['name' => 'VueJS', 'slug' => 'vue-js', 'color' => 'bg-yellow-500']);
    Category::create(['name' => 'JavaScript', 'slug' => 'javascript', 'color' => 'bg-indigo-500']);
    Category::create(['name' => 'Hosting', 'slug' => 'hosting', 'color' => 'bg-purple-500']);
    Category::create(['name' => 'Astuces', 'slug' => 'astuces-developpeur', 'color' => 'bg-pink-500']);

    // $this->call("OthersTableSeeder");
  }
}

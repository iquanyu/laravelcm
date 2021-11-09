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

    Category::create(['name' => 'Laravel', 'slug' => 'laravel', 'color' => 'red']);
    Category::create(['name' => 'React', 'slug' => 'react', 'color' => 'blue']);
    Category::create(['name' => 'VueJS', 'slug' => 'vue-js', 'color' => 'yellow']);
    Category::create(['name' => 'JavaScript', 'slug' => 'javascript', 'color' => 'indigo']);
    Category::create(['name' => 'Hosting', 'slug' => 'hosting', 'color' => 'purple']);
    Category::create(['name' => 'Astuces', 'slug' => 'astuces-developpeur', 'color' => 'pink']);

    // $this->call("OthersTableSeeder");
  }
}

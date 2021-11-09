<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Post;

class BlogController extends Controller
{
  /**
   * Display a listing of the resource.
   * @return Renderable
   */
  public function index()
  {

    /*Post::where('visits', 0)->delete();

    $user = User::find(1);

    $po = Post::create([
      'title' => 'Laravel Cameroun Redesign (uses)',
      'body'  => '<div>Laravel Cameroun est le site officiel de la Communauté Laravel & PHP au Cameroun. La communauté entre dans sans 2e année, et une conversation avec un ami (Fabrice Yopa) au vu de la popularité que gagnait le Framework dans notre pays et des offres</div>',
      'status' => Post::STATUS_PUBLISHED,
      'published_at' => now()
    ]);

    $po->creator()->associate($user);
    $po->propose()->associate($user);
    $po->category()->associate(Category::find(1));

    $po->save();*/

    $categories = Category::get();
    //$posts      = Post::publish()->with(['creator'])->orderBy('published_at', 'desc')->paginate();

    return view('blog::posts.index', [
      'categories' => $categories,
      'category'   => null,
      //'posts'      => $posts
    ]);
  }

  public function category(String $slug)
  {
    $category = Category::with('posts')->where('slug', $slug)->firstOrFail();
    $posts = $category->posts;

    $breadcrumbs = [
      ['name' => 'Home', 'url' => route('home')],
      ['name' => config('blog.name'), 'url' => route('blog.index')],
      ['name' => $category->name, 'url' => ''],
    ];
    //dd($breadcrumbs);
    return view('blog::category', [
      'breadcrumbs' => $breadcrumbs,
      'category'    => $category,
      'posts'       => $posts,
    ]);
  }

  /**
   * Show the specified resource.
   * @param Object $post
   * @return Renderable
   */
  public function post(Post $post)
  {
    if (!$post) {
      abort('404', "no post.");
    }

    $post->with(['category', 'creator']);

    $post->increment('visits');




    $breadcrumbs = [
      ['name' => 'Home', 'url' => route('home')],
      ['name' => config('blog.name'), 'url' => route('blog.index')],
      ['name' => $post->title, 'url' => ''],
    ];

    return view('blog::posts.show', ['post' => $post, 'breadcrumbs' => $breadcrumbs]);
  }

  /**
   * Show the form for editing the specified resource.
   * @param int $id
   * @return Renderable
   */
  public function edit($id)
  {
    return view('blog::edit');
  }

  /**
   * Update the specified resource in storage.
   * @param Request $request
   * @param int $id
   * @return Renderable
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   * @param int $id
   * @return Renderable
   */
  public function destroy($id)
  {
    //
  }
}

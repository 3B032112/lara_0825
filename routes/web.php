<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $post = new Post();
    // $post->title = 'title';
    // $post->content = 'content';
    // $post->save();
    // return 'post save !';

    // $post = Post::find(1);
    // echo '標題: '.$post->title.'<br>';
    // echo '內容: '.$post->content.'<br>';
    // dd($post);

    // $posts = Post::all();
    // foreach ($posts as $post) {
    //     echo '編號: ' . $post->id . '<br>';
    //     echo '標題: ' . $post->title . '<br>';
    //     echo '內容: ' . $post->content . '<br>';
    //     echo '張貼時間: ' . $post->created_at . '<br>';
    // }
    // dd($post);
    // return 'Saved, OK!';

    // $post = Post::where('id', '<', 10)->orderby('id', 'desc')->get();
    // dd($post);

    // $post = Post::find(1);
    // $post->update([
    //     'title' => 'updated title',
    //     'content' => 'updated content',
    // ]);
    // return 'updated';

    // $post = Post::find(1);
    // $post->title = "saved title";
    // $post->content = "saved content";
    // $post->save();
    // return 'saved';

    $post = Post::find(1);
    $post->delete();
    Post::destroy(2);
    Post::destroy(3, 5, 7);
    return 'deleted';
});

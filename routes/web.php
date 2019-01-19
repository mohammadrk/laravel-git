<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/about/{id?}', function ($id=null) {
$url=route('about');
return $url;
/* return "درباره ما " . $id;*/
/*
})->name('about');
Route::prefix('admin')->group(function (){
    Route::get('login', function () {
        return "login";
   });
    Route::get('register', function () {
        return "register";
    });
});*/


/*Route::get('/posts/{id?}','PostsController@index');*/

/*
Route::resource('/posts', 'PostsController@index');
Route::get('/show/{id}/{name}', 'PostsController@showMyView');
Route::get('/content', 'PostsController@content');
Route::get('/insert', 'PostsController@insert');
Route::get('/select', 'PostsController@select');
Route::get('/update', 'PostsController@titleupdate');
Route::get('/delete', 'PostsController@delete');
Route::get('/post', 'PostsController@getAllPost');
Route::get('/savepost', 'PostsController@savepost');
Route::get('/deletepost', 'PostsController@deletepost');
Route::get('/user/{id}/post', function ($id) {
    $user = \App\User::find($id)->post;
    return $user;
});
Route::get('/post/{id}/user', function ($id) {
    $post = \App\Post::find($id)->user;
    return $post;
});
Route::get('/posts/{id}/user', function ($id) {
    $user_post = \App\User::find($id)->posts;
    foreach ($user_post as $post) {
        echo $post->title;
        echo "<br>";
    }

});*/
/*Route::get('/users/{id}/role', function ($id) {
    $user_role = \App\User::find($id);
    foreach ($user_role->roles as $role) {
        echo $role->name;
        echo "<br>";
    }
});
Route::get('/users/{id}/created', function ($id) {
    $user_role = \App\User::find($id);
    foreach ($user_role->roles as $role) {
        echo $role->pivot->created_at;
        echo "<br>";
    }
});
Route::get('user/{id}/country', function ($id) {
    $user_country = \App\Country::find($id);
    foreach ($user_country->posts as $post) {
        echo $post->title;
        echo "<br>";
    }
});

Route::get('user/photos', function () {
    $user = \App\User::find(1);
    foreach ($user->photos as $photo) {
        echo $photo->path;
        echo "<br/>";
    }
});*/
/*Route::get('post/{id}/photos', function ($id) {
    $post = \App\Post::find($id);
    foreach ($post->photos as $photo) {
        echo $photo->path;
        echo "<br>";
    }
});*/
/*Route::get('photo/{id}/post', function ($id) {
    $photo = \App\Photo::find($id);
    return $photo->imageable;
});*/
/*
Route::get('video/{id}/tag', function ($id) {
    $video = \App\Video::find($id);
    foreach ($video->tags as $tag) {
        echo $tag->name;
        echo "<br>";
    }
});
Route::get('post/{id}/tag', function ($id) {
    $post = \App\Post::find($id);
    foreach ($post->tags as $tag) {
        echo $tag->name;
        echo "<br>";
    }
});*/
/*Route::get('tag/{id}/post', function ($id) {
    $tag = \App\Tag::find($id);
    foreach ($tag->posts as $post) {
        echo $post->title;
    }
});*/
/*
Route::get('/create', function () {
    $user = \App\User::find(1);
    $post = new \App\Post();
    $post->title = "آموزش وردپرس";
    $post->content = "آموزش 0 تا 100";
    $user->posts()->save($post);
});
Route::get('/read', function () {
    $user = \App\User::find(1);
    foreach ($user->posts as $post) {
        echo $post->title;
        echo "</br>";
    }
});
Route::get('/upadte', function () {
    $user = \App\User::find(1);
    $user->posts()->whereId(16)->update(['title'=>'تست crud','content'=>'کانتنت crud']);
});
Route::get('/delete',function (){
   $user=\App\User::find(1);
   $user->posts()->whereId(15)->delete();
});*/

/*Route::get('/create', function () {
    $user = \App\User::find(1);
    $role = new \App\Role;
    $role->name = "مشتری";
    $user->roles()->save($role);
});
Route::get('/read', function () {
    $user = \App\User::find(1);
    foreach ($user->roles as $role) {
        echo $role->name;
        echo "<br/>";
    }
});
Route::get('/update', function () {
    $user = \App\User::find(1);
    if ($user->has('roles')) {
        foreach ($user->roles as $role) {
            if ($role->name == 'مشتری') {
                $role->name = 'نویسنده';
                $role->save();
            }
        }

    }
});
Route::get('/delete', function () {
    $user = \App\User::find(1);
    foreach ($user->roles as $role) {
        if ($role->name == 'نویسنده') {
            $role->delete();
        }
    }
});
Route::get('/detach', function () {
    $user = \App\User::find(1);
    $user->roles()->detach();
});*/
/*Route::get('/create', function () {
    $video=\App\Video::find(1);
    $video->tags()->create(['name'=>'morph']);
});
Route::get('/read', function () {
    $video=\App\Video::find(1);
    foreach ($video->tags as $tag){
        echo $tag->name;
        echo "<br>";
    }
});
Route::get('/update', function () {
    $video=\App\Video::find(1);
    $tag=$video->tags;
    $newtags=$tag->where('id',3)->first();
    $newtags->name='تگ جدید';
    $newtags->save();
});
Route::get('/delete', function () {
    $video=\App\Video::find(1);
    $tag=$video->tags;
    $newtags=$tag->where('id',3)->first();
    $newtags->delete();
});*/

Route::resource('/posts', 'PostsController');
Route::get('file', function () {
    /*   $file=\Illuminate\Support\Facades\Storage::disk('public')->get('images/sKQQSY2X3yXZ0aDieB7m0xaXKOa7cQ2vSzNb8JpW.jpeg');
       echo $file;*/
    return \Illuminate\Support\Facades\Storage::disk('public')->download('images/sKQQSY2X3yXZ0aDieB7m0xaXKOa7cQ2vSzNb8JpW.jpeg');
});

Auth::routes(['verify' => 'true']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', function () {
    /*    $user=Auth::user();
      if (Auth::check()){
          echo "User : ".$user->name;
      }else{
          echo "user signin";
          return redirect()->to('home');
      }*/
  /*  $email = 'kian@gmail.com';
    $password = '13773256';
    $user = Auth::attempt(['email' => $email, 'password' => $password]);
    dd($user);*/
 /* Auth::logout();*/
  /*  \Illuminate\Support\Facades\Auth::loginUsingId(8);*/
});

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Passport;
use App\Models\Lesson;
use App\Models\City;
use App\Models\Forum;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        // dd(City::find(1)->forums);
        $user = User::with('Forums')->where('id', $id)->first();
        return view('user.profile', ['user' => $user]);
    }

    public function showPassport($id)
    {
        return view('user.passport', ['passport' => passport::findOrFail($id)]);
    }

    public function showLesson($id)
    {
        return view('user.lesson', ['lesson' => Lesson::findOrFail($id)]);
    }

    public function createForum()
    {
      $user = User::find(2);
      $user->forums()->create([
        'title' => 'judul Forum Baru',
        'body'  => 'Body Forum Baru',
      ]);
    }

    public function createLesson()
    {
      $user = User::find(1);
      $user->lessons()->attach(3);
    }

    public function deleteLesson()
    {
      $user = User::find(1);
      $user->lessons()->detach(3);
    }
}

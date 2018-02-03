<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=App\User::create([
          'name'=>'Сонинхангай',
          'email'=>'hangai247@gmail.com',
          'avatar'=>'uploads/avatars/1.jpg',
          'password'=>bcrypt('danieldad'),
          'admin'=>1,
        ]);

        App\Profile::create([
          'user_id'=>$user->id,
          'about'=>'Би шинийг эрэлхийлэгч, илэрхийлэгч, гэгээрүүлэгч, байлдан дагуулагч',
          'facebook'=>'www.facebook.com/hangai247',
          'youtube'=>'www.youtube.com/user/hangai247'
        ]);
        $user=App\User::create([
          'name'=>'Анударь',
          'email'=>'hangai_247@yahoo.com',
          'avatar'=>'uploads/default_avatar.jpg',
          'password'=>bcrypt('danieldad'),
          'admin'=>0,
        ]);

        App\Profile::create([
          'user_id'=>$user->id,
          'about'=>'Oh my sweet summer child, what do you know of winter?',
          'facebook'=>'www.facebook.com/hangai247',
          'youtube'=>'www.youtube.com/user/hangai247'
        ]);
    }
}

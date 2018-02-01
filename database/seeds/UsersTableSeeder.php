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
          'password'=>bcrypt('danieldad'),
          'admin'=>1,
        ]);

        App\Profile::create([
          'user_id'=>$user->id,
          'avatar'=>'uploads/avatars/1.jpg',
          'about'=>'Би шинийг эрэлхийлэгч, илэрхийлэгч, гэгээрүүлэгч, байлдан дагуулагч',
          'facebook'=>'www.facebook.com/hangai247',
          'youtube'=>'www.youtube.com/user/hangai247'
        ]);
    }
}

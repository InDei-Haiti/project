<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Channel::create([
        'name'=>'Сагсан бөмбөг',
      ]);
      App\Channel::create([
        'name'=>'Хөлбөмбөг',
      ]);
      App\Channel::create([
        'name'=>'Программ',
      ]);
      App\Channel::create([
        'name'=>'Хиймэл оюун ухаан',
      ]);
    }
}

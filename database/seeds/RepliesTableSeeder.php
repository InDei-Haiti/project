<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Reply::create([
          'user_id'=>1,
          'discussion_id'=>3,
          'content'=>'Morbi Vitae Nisl Ac Mi Luctus Aliquet A Vitae Libero'
        ]);
        App\Reply::create([
          'user_id'=>2,
          'discussion_id'=>3,
          'content'=>'Morbi Vitae Nisl Ac Mi Luctus Aliquet A Vitae Libero'
        ]);
        App\Reply::create([
          'user_id'=>2,
          'discussion_id'=>3,
          'content'=>'Morbi Vitae Nisl Ac Mi Luctus Aliquet A Vitae Libero'
        ]);
        App\Reply::create([
          'user_id'=>1,
          'discussion_id'=>4,
          'content'=>'Morbi Vitae Nisl Ac Mi Luctus Aliquet A Vitae Libero'
        ]);
        App\Reply::create([
          'user_id'=>2,
          'discussion_id'=>4,
          'content'=>'Morbi Vitae Nisl Ac Mi Luctus Aliquet A Vitae Libero'
        ]);
    }
}

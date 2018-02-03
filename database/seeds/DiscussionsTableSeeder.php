<?php

use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Discussion::create([
          'user_id'=>1,
          'title'=>'Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit',
          'channel_id'=>1,
          'content'=>'Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit'
        ]);
        App\Discussion::create([
          'user_id'=>1,
          'title'=>'Fusce Ullamcorper Elit At Felis Cursus Suscipit',
          'channel_id'=>2,
          'content'=>'Fusce Ullamcorper Elit At Felis Cursus Suscipit'
        ]);
        App\Discussion::create([
          'user_id'=>2,
          'title'=>'Aliquam Et Metus Convallis Tincidunt Velit Ut Rhoncus Dolor',
          'channel_id'=>2,
          'content'=>'Aliquam Et Metus Convallis Tincidunt Velit Ut Rhoncus Dolor'
        ]);
        App\Discussion::create([
          'user_id'=>2,
          'title'=>'Dui Augue Facilisis Lacus Fringilla Pulvinar Massa Felis Quis Velit',
          'channel_id'=>4,
          'content'=>'Dui Augue Facilisis Lacus Fringilla Pulvinar Massa Felis Quis Velit'
        ]);
        App\Discussion::create([
          'user_id'=>1,
          'title'=>'Neque Est Semper Nulla, Ac Elementum Risus Quam A Enim',
          'channel_id'=>3,
          'content'=>'Neque Est Semper Nulla, Ac Elementum Risus Quam A Enim'
        ]);
        App\Discussion::create([
          'user_id'=>2,
          'title'=>'Morbi Vitae Nisl Ac Mi Luctus Aliquet A Vitae Libero',
          'channel_id'=>3,
          'content'=>'Morbi Vitae Nisl Ac Mi Luctus Aliquet A Vitae Libero'
        ]);
    }
}

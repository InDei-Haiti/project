<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
          'site_name'=>'Ирлээ.NET',
          'mission'=>'Монголын оюунлаг залуусын чөлөөт цагийг зөв боловсон өнгөрөөх, орчин үеийн мэдээлэл технологийн шаардлагыг бүрэн хангасан нийгмийн сүлжээг бий болгох',
          'about'=>'Ирлээ.NET сайт нь 2018 оны 1 сарын 1-нээс эхлэн хөгжүүлж эхэлсэн бөгөөд олон улсын болон дотоодын сонин содон, сонирхолтой, сургамжтай, гэрэл гэгээтэй мэдээллийг фото зургийн хамт цаг алдалгүй хүргэдэг энтертаймент сайт билээ',
          'contact_number'=>'080 4293 4067',
          'contact_email'=>'hangai247@gmail.com',
          'address'=>'Inage Ku, Midoricho 1-19-11 Japan, Chiba 263-0023'
        ]);
    }
}

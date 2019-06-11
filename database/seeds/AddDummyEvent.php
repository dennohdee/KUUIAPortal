<?php

use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            
            ['event'=>'Opening Meeting', 'email'=>'dekingetich@gmail.com', 'time'=>'2019-03-15', 'venue'=>'ABC 212','description'=>'All members in'],
            ['event'=>'Devtalk', 'email'=>'johndoe@gmail.com', 'time'=>'2019-03-25','venue'=>'ABC 212','description'=>'All members in'],
            ['event'=>'Super Event', 'email'=>'denniskiprotich0@gmail.com', 'time'=>'2019-03-24','venue'=>'ABC 212','description'=>'All members in'],
            ['event'=>'wtf event', 'email'=>'christinenjuha@@gmail.com', 'time'=>'2019-03-27','venue'=>'ABC 212','description'=>'All members in'],
           ];
           \DB::table('calendars')->insert($data);
    }
}

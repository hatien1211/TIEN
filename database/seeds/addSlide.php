<?php

use Illuminate\Database\Seeder;

class addSlide extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
        	[
        		'slide_ten' => 'Cảnh đẹp',
        		'slide_img' => 'hero_1.jpg',
        	],[
        		'slide_ten' => 'Cảnh xinh',
        		'slide_img' => 'hero_2.jpg',
        	],[
        		'slide_ten' => 'Cảnh phòng',
        		'slide_img' => 'hero_3.jpg',

        	]

        ];
        DB::table('slide')->insert($arr);
    }
}

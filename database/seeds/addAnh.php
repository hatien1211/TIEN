<?php

use Illuminate\Database\Seeder;

class addAnh extends Seeder
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
				'p_id' => 1,
				'imglq_img' => 'D-2.jpg'
				],[
				'p_id' => 1,
				'imglq_img' => 'D-3.jpg'
				],[
				'p_id' => 1,
				'imglq_img' => 'D-4.jpg'
				],[
				'p_id' => 1,
				'imglq_img' => 'D-5.jpg'
				],[
				'p_id' => 1,
				'imglq_img' => 'D-6.jpg'
				],[
				'p_id' => 2,
				'imglq_img' => 'S-2.jpg'
				],[
				'p_id' => 2,
				'imglq_img' => 'S-3.jpg'
				],[
				'p_id' => 2,
				'imglq_img' => 'S-4.jpg'
				],[
				'p_id' => 2,
				'imglq_img' => 'S-5.jpg'
				],[
				
				'p_id' => 2,
				'imglq_img' => 'S-6.jpg'
				],[
				
				'p_id' => 3,
				'imglq_img' => 'SU-2.jpg'
				],[
			
				'p_id' => 3,
				'imglq_img' => 'SU-3.jpg'
				],[
			
				'p_id' => 3,
				'imglq_img' => 'SU-4.jpg'
				],[
			
				'p_id' => 3,
				'imglq_img' => 'SU-5.jpg'
				],[
				
				'p_id' => 3,
				'imglq_img' => 'SU-6.jpg'
				],[
				
				'p_id' => 3,
				'imglq_img' => 'SU-7.jpg'
				]

		];
		DB::table('anhlienquan')->insert($arr);
    }
}

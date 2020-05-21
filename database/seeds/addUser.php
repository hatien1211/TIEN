<?php

use Illuminate\Database\Seeder;

class addUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr =[
			['username'=>'tienhong1211',
			'password'=>bcrypt('matkhau123'),
			'hoten'=>'anhtien1',
			'ngaysinh'=>'1998-11-12',
			'gioitinh'=>'1',
			'sdt'=>'0354546137',
			'cmnd'=>'366240658',
			'quyen'=>'1'

			],[

			'username'=>'maria2020',
			'password'=>bcrypt('matkhau123'),
			'hoten'=>'anhtien2',
			'ngaysinh'=>'1999-6-12',
			'gioitinh'=>'0',
			'sdt'=>'0356786137',
			'cmnd'=>'366555658',
			'quyen'=>'1'

			],[

			'username'=>'hong1301',
			'password'=>bcrypt('matkhau123'),
			'hoten'=>'anhtien3',
			'ngaysinh'=>'1998-11-13',
			'gioitinh'=>'0',
			'sdt'=>'0354547897',
			'cmnd'=>'366240658',
			'quyen'=>'1'

			],[

			'username'=>'tien12111998',
			'password'=>bcrypt('matkhau123'),
			'hoten'=>'anhtien4',
			'ngaysinh'=>'1998-11-10',
			'gioitinh'=>'1',
			'sdt'=>'0536546137',
			'cmnd'=>'344440658',
			'quyen'=>'1'

			],[

			'username'=>'tienhong'
			,'password'=>bcrypt('matkhau123'),
			'hoten'=>'anhtien5',
			'ngaysinh'=>'1988-10-12',
			'gioitinh'=>'1',
			'sdt'=>'0354545537',
			'cmnd'=>'366255658',
			'quyen'=>'0'

			],[

			'username'=>'tien11',
			'password'=>bcrypt('matkhau123'),
			'hoten'=>'anhtien6',
			'ngaysinh'=>'1998-11-04',
			'gioitinh'=>'0',
			'sdt'=>'0354556137',
			'cmnd'=>'366640658',
			'quyen'=>'0'

			],[

			'username'=>'alibaba123',
			'password'=>bcrypt('matkhau123'),
			'hoten'=>'anhtien7',
			'ngaysinh'=>'1998-8-12',
			'gioitinh'=>'1',
			'sdt'=>'0354596137',
			'cmnd'=>'366244358',
			'quyen'=>'0'

			],[

			'username'=>'anhtien',
			'password'=>bcrypt('matkhau123'),
			'hoten'=>'tienhong8',
			'ngaysinh'=>'1998-11-12',
			'gioitinh'=>'1',
			'sdt'=>'0382979491',
			'cmnd'=>'366240586',
			'quyen'=>'0'
			]
		];
		DB::table('users')->insert($arr);
	}
    
}

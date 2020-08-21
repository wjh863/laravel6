<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('area')->insert([[
			'name' => '北京市',
			'adcode' => '110000',
			'areaId'=>'',
			'citycode' => '010',
			'level' => 'province',
			'parent' => '0'
		],[
			'name' => '西城区',
			'adcode' => '110102',
			'areaId'=>'',
			'citycode' => '010',
			'level' => 'district',
			'parent' => '110100'
		],]);
		
		//
		// DB::table('area')->insertGetId([
			// 'name' => '北京市市辖区',
			// 'adcode' => '110100',
			// 'areaId'=>'',
			// 'citycode' => '010',
			// 'level' => 'city',
			// 'parent' => '110000'
		// ]);
		
		// //
		// DB::table('area')->insertGetId([
			// 'name' => '东城区',
			// 'adcode' => '110101',
			// 'citycode' => '010',
			// 'level' => 'district',
			// 'parent' => '110100'
		// ]);
    }
}

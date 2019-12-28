<?php

use Illuminate\Database\Seeder;

class JurusansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('jurusans')->insert([
			['kode_jurusan' => '01', 'nama' => 'Sistem Informasi'],
			['kode_jurusan' => '02', 'nama' => 'Teknik Informatika']
        ]);
    }
}

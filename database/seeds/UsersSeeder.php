<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $professionId=DB::table('professions')->where('title','Desarrollador Back-End')->value('id');
        $professionId=DB::table('professions')->select('id')->where(['title'=>'Desarrollador Back-End'])->first();
       // dd($professionId->id);
        DB::table('users')->insert([
            'name'=> 'Crhistian Mendoza',
            'email'=> 'prueba@prueba.com',
            'password'=>bcrypt('prueba'),
            'profession_id'=>$professionId->id
        ]);
    }
}

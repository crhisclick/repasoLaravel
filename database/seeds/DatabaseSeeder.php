<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable([
            'professions',
            'users'
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(UsersSeeder::class);
    }
    public function truncateTable($tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');//cancelar revision de claves foraneas
        foreach($tables as $table){
            DB::table($table)->truncate();//vacia la tabla
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');//activar revision de claves foraneas
    }
}

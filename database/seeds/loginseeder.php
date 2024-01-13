<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loginseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data=[  
        'name'=>'admin',
       'email'=>'admin@gmail.com',
        'password'=>bcrypt('123456789')
    ];
      
    DB::table('users')->insert($data);

    }
}

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
       // $data=[  'Username'=>'admin',
       // 'Email'=>'admin@gmail.com',
        //'Password'=>bcrypt('123456789')
    //];
      
DB::table('logins')->insert($data);

    }
}

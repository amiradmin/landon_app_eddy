<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(

            [
           
            'title'=>'',
            'name'=>'',
            'last_name'=>'',
            'address'=>'',
            'zip_code'=>'',
            'city'=>'',
            'state'=>'',
            'email'=>'',
                
            ]

        );

        DB::table('clients')->insert(

            [
           
            'title'=>'mr',
            'name'=>'Amir',
            'last_name'=>'Behvandi',
            'address'=>'Tehran',
            'zip_code'=>'0098',
            'city'=>'Tehran',
            'state'=>'tehran',
            'email'=>'amirbhevand@gg.com',
                
            ]

        );
    }
}

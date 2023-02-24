<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => ucwords('viswa'),
            'last_name' => ucwords('viswa'),
            'email' => 'viswa@gmail.com',
            'mobile_no' => '7867997754',
            'office_no' =>'9994370908',
            'address' =>'Ramalingam Colony,Saibaba Colony,Coimbatore-48.',
            'username' => 'viswa',
            'password' => Hash::make('7867997754'),
            'password_text' =>'7867997754',
            'profile' => 'avatar.jpg',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.974894254266!2d76.9511591!3d11.0203318!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6bf55a9aab56f1f8!2sViswa%20Technology%20Solutions!5e0!3m2!1sen!2sin!4v1653485457162!5m2!1sen!2sin',
            'web_url' =>'https://viswatechnologysolutions.com',
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s"),
        ]);
    }
}

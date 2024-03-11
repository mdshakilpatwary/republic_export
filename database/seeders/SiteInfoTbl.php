<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteInfo;
class SiteInfoTbl extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteInfo::insert([
            // site info data
        [
            'name' => 'TestSite',
            'email' => 'hello@gmail.com',
            'type' => 'active_siteInfo',
            'phone_1' => '01858*****',
            'address_1' => 'Dhanmondi, Dhaka, Bangladesh',
        ]
        ]);
    }
}

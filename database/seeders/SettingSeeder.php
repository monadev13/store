<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'logo'       => 'https://www.pngkey.com/png/detail/239-2398314_logo-store-png-e-store.png',
            'ficon'      => 'https://cdn-icons-png.flaticon.com/512/2697/2697432.png',
            'title_site' => 'StoreNew',
            'address'    =>'القاهره مصر الجديده شارع مترو حسن مخمود',
            'twitter'    =>'https://twitter.com/?lang=ar',
            'instagram'  =>'https://www.instagram.com/',
            'facebook'   =>'https://www.facebook.com/',
            'linkedin'   =>'https://www.linkedin.com/',
            'youtube'    =>'https://www.youtube.com/',
            'whats_up'    =>'1234567890',
            'email'      =>'monafayed874@gmail.com',
            'phone'      =>'0987654321',
            'map'        =>'https://www.google.com/maps/@30.3071232,31.7325312,13z?entry=ttu'

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([


            [
                'name'=>"Dell 27 curved",
                'price'=>"79,319.00",
                'description'=>"68.58cm (27 inch) QHD Curved Gaming Monitor with 1ms (MPRT)/ 2ms (gray to gray) response time, 165Hz refresh rate and 99% sRGB colour for sharp gaming visuals and immersive gameplay.",
                'category'=>"monitor",
                "gallary"=>"carousel_one.png"
            ],

            [
                'name'=>"ALIENWARE 27 GAMING MONITOR - AW2721D",
                'price'=>"1,37,210.05",
                'description'=>"68.58 cms (27 inch) QHD monitor with InfinityEdge screen, lightning-fast 240Hz refresh rate and NVIDIA® G-SYNC® ULTIMATE that takes your game to the next level.",
                'category'=>"monitor",
                "gallary"=>"carousel_two.png"
            ],




        ]);
        
    }
}

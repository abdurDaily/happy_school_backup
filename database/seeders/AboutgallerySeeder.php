<?php

namespace Database\Seeders;

use App\Models\Admin\Aboutgallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutgallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $aboutGalleryData =  new Aboutgallery();
      $aboutGalleryData->about_galary_text = "The Best Global
      Experts";
      $aboutGalleryData->about_institute = "There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour words which don't look even slightly believable. Lorem Ipsn gravida nibh vel velit auctor aliquetn auci elit cons.";
      $aboutGalleryData->about_galary_img = asset('custom_img/about.jpg');
      $aboutGalleryData->status = 1;
      $aboutGalleryData->save();
    }
}

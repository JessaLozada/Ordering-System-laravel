<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Pink Grapefruit And Apricot Naturals Body Spritzes 100mL',
                "price"=>"200",
                "category"=>"Fragrance",
                "description"=>"Nature-Inspired Summer Delights",
                "gallery"=>"https://www.avon.ph/dam/jcr:1302b1c0-5494-4ed8-8c73-72755f400783/Pink-Grapefruit-and-Apricot-Naturals-Body-Spritzes-100mL.jpg"
            ],
            [
                'name'=>'Apple And Honeysuckle Naturals Body Spritzes 100mL',
                "price"=>"200",
                "category"=>"Fragrance",
                "description"=>"Nature-inspired Summer Delight",
                "gallery"=>"https://www.avon.ph/dam/jcr:5adf09e1-2487-4222-b1a2-6a852ec35716/Apple-and-Honeysuckle-Body-Spritz-100mL.jpg"
            ],
            [
                'name'=>'Be Cool Body Spritz 100 ML',
                "price"=>"200",
                "category"=>"Fragrance",
                "description"=>"Floral Fruity",
                "gallery"=>"https://www.avon.ph/dam/jcr:5b21d63c-927b-4741-97fe-9a7a01386fef/2121011.jpg"
            ],
            [
                'name'=>'Be Fearless Body Spritz 100 ML',
                "price"=>"200",
                "category"=>"Fragrance",
                "description"=>"Oriental Fruity Floral",
                "gallery"=>"https://www.avon.ph/dam/jcr:76017871-b1fd-468e-ac38-1ddb3730944b/2151054.jpg"
            ],
            [
                'name'=>'Sheer Passion So Alluring Fragrance Mist 200 ML',
                "price"=>"350",
                "category"=>"Fragrance",
                "description"=>"Persian lime is a tart contrast to velvet peach and spicy vanilla and tonka beans.
                Olfactive: Floral oriental
                ",
                "gallery"=>"https://www.avon.ph/dam/jcr:6d9d03db-fe55-4fc5-a567-1e33b931a446/1079136.jpg"
            ],
            [
                'name'=>'Sheer Passion Very Captivating Fragrance Mist 200 ML',
                "price"=>"350",
                "category"=>"Fragrance",
                "description"=>"Elegant florals harmonize with the sensuality of decadent fruits or warm luxury.
                Olfactive: Floral fruity",
                "gallery"=>"https://www.avon.ph/dam/jcr:d2b85ef7-73e5-46a2-bd3f-323578d706d1/1079138.jpg"
            ],
            [
                'name'=>'Anew Reversalist Complete Renewal Foaming Cleanser 30mL',
                "price"=>"150",
                "category"=>"Skin Care",
                "description"=>"Formulated with additional ingredients to help reduce moisture loss and prepare skin for Reversalist regimen. For best results, use with other Anew Reversalist Complete Renewal products.",
                "gallery"=>"https://www.avon.ph/dam/jcr:8b4021b2-6df1-47c6-bcc0-cd274249fdde/5141253_1.jpg"
            ],
            [
                'name'=>'Naturals Lime Peeling Exfoliator 100mL',
                "price"=>"200",
                "category"=>"Skin Care",
                "description"=>"For all skin types. Suitable for everyday use. Can be used to remove light makeup. Allergy and dermatologist-tested.",
                "gallery"=>"https://www.avon.ph/dam/jcr:ea01b9a6-43f7-4ff5-9e19-a1246ddc282c/1253277.jpg"
            ],
            [
                'name'=>'Naturals Papaya Whitening 3-In-1 Cleanser Scrub Mask 100g',
                "price"=>"400",
                "category"=>"Skin Care",
                "description"=>"For brighter & softer skin.",
                "gallery"=>"https://www.avon.ph/dam/jcr:456709ab-a9a4-43aa-b3a1-a1660df3a917/naturals_papaya_whitening_3-in-1_cleanser_scrub_mask_100_g.jpg"
            ],
            [
                'name'=>'Naturals Papaya Whitening Cleanser 50g',
                "price"=>"100",
                "category"=>"Skin Care",
                "description"=>"Papaya removes rough skin texture and leaves skin looking brighter, softer and smoother.",
                "gallery"=>"https://www.avon.ph/dam/jcr:bb351356-33e4-4b11-9753-90602db2f3cc/naturals_papaya_whitening_cleanser_50_g.jpg"
            ],
            [
                'name'=>'Naturals Aloe Vera Mask',
                "price"=>"350",
                "category"=>"Skin Care",
                "description"=>"Naturals Aloe Vera Mask.",
                "gallery"=>"https://www.avon.ph/dam/jcr:194edb04-4aea-4fd8-81ef-3472700c99ff/prod_1222464.jpg"
            ],
            [
                'name'=>'Clearskin Blemish Clearing Jelly Mask',
                "price"=>"350",
                "category"=>"Skin Care",
                "description"=>"Clearskin Blemish Clearing Jelly Mask",
                "gallery"=>"https://www.avon.ph/dam/jcr:03e3c4e4-7c94-4709-be52-9077c9be73d0/prod_1201475.jpg"
            ],
            [
                'name'=>'Janina Tank And Shorts Set',
                "price"=>"450",
                "category"=>"Intimate Apparel",
                "description"=>"Color: Zebra Print
                Available Sizes: S/M, M/L",
                "gallery"=>"https://www.avon.ph/dam/jcr:d71bf6c4-7cea-4729-a577-f477a84ac8ba/Janina-Tank-and-Capri-Set.jpg"
            ],
            [
                'name'=>'Jocelyn Tank And Capri',
                "price"=>"500",
                "category"=>"Intimate Apparel",
                "description"=>"Color: Peanut Flower Print
                Available Sizes: S/M, M/L",
                "gallery"=>"https://www.avon.ph/dam/jcr:8347f89c-3300-4906-80fc-72617f1156e3/Jocelyn-Tank-and-Capri.jpg"
            ],
            [
                'name'=>'Michelle Tank And Capri',
                "price"=>"500",
                "category"=>"Intimate Apparel",
                "description"=>"Color: Color Block
                Available Sizes: S/M, M/L",
                "gallery"=>"https://www.avon.ph/dam/jcr:27bc01f0-dc6f-469b-aa8d-a8cb17e762de/Michelle-Tank-and-Capri.jpg"
            ]
        ]);
    }
}
<?php

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
        		'name' => "Pertandingan NUDC vs SANSLombok",
        		'kategori' => "Bola Besar",
        		'gambar' => "https://statik.tempo.co/data/2013/01/18/id_162446/162446_620.jpg",
        		'deskripsi' => "Pertandingan ini adalah pertandingan kelima setelah NUDC mengalahkan SANSLombok di kandangnya sendiri",
        		'tempat' => "Gor Turide",
        		'jadwal' => "17 agustus 2020 pukul: 12.00 WIB"


        	]);
          DB::table('produks')->insert([
				'name' => "Paris Saint-Germain vs Olympique Lyon",
				'kategori' => "Bola Besar",
        		'gambar' => "https://images.daznservices.com/di/library/GOAL/6e/1d/jadwal-tv-siaran-langsung-sepakbola_14smri9osv7l51ny0fmb9791e8.jpeg?t=35872979&amp;quality=60&amp;w=700",
        		'deskripsi' => "Ini merupakan kopetisi Coupe de la Ligue",
        		'tempat' => "Allianz Stadium",
        		'jadwal' => "3 agustus 2020 pukul: 02.10 WIB"


        	]);

            DB::table('produks')->insert([
				'name' => "Brescia vs Sampdoria",
				'kategori' => "Bola Besar",
        		'gambar' => "https://media.vivagoal.com/2019/07/Dennis-Praet.jpg",
        		'deskripsi' => "Pertandingan ini adalah pertandingan liga italia",
        		'tempat' => "Stadion Luigi Ferraris",
        		'jadwal' => "4 agustus 2020 pukul: 23.00 WIB"
        	]);

            DB::table('produks')->insert([
				'name' => "Liem Swie King vs Chen Long",
				'kategori' => "Bola Kecil",
        		'gambar' => "https://2.bp.blogspot.com/-dytGAmKPjzY/W9Z6gBnmkUI/AAAAAAAADhQ/p3B0chHBscwcS85mIzHNSbWPWSaOq-zaACLcBGAs/s1600/daftar-pemain-bulu-tangkis-jepang-2018-terbaru.JPG",
        		'deskripsi' => "Ajang tanding pada Badminton Asia Championships 2020",
				'tempat' => "Kuala Lumpur, Malaysia",
				'jadwal' => "21-26 April pukul: 10.00 WIB"
        	]);

            DB::table('produks')->insert([
				'name' => "Lomba lari 2020",
				'kategori' => "Atletik",
        		'gambar' => "https://awsimages.detik.net.id/community/media/visual/2018/10/09/23354c25-f4dd-4e4a-bc54-b9c20bf59aa1.jpeg?w=700&q=80",
        		'deskripsi' => "ini sering di adakan padapertengahan musim panas di canada",
				'tempat' => "Yukon , Canada",
				'jadwal' => "2 April pukul: 08.00 WIB"
        	]);
    }
}

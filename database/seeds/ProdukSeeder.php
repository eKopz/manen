<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $foto = [
            'http://127.0.0.1:8000/images/produk/bawangmerah.jpg',
            'http://127.0.0.1:8000/images/produk/tomat.jpg',
            'http://127.0.0.1:8000/images/produk/selada.jpg',
            'http://127.0.0.1:8000/images/produk/jahe.jpg',
            'http://127.0.0.1:8000/images/produk/lada.jpg',
            'http://127.0.0.1:8000/images/produk/kunyit.jpg',
            'http://127.0.0.1:8000/images/produk/jagung.jpg',
            'http://127.0.0.1:8000/images/produk/daunbawang.jpg',
            'http://127.0.0.1:8000/images/produk/terung.jpg'
        ];

        $nama = [
            'bawangmerah',
            'tomat',
            'selada',
            'jahe',
            'lada',
            'kunyit',
            'jagung',
            'daunbawang',
            'terung'
        ];

        $umur = [
            '110',
            '100',
            '40',
            '240',
            '1065',
            '330',
            '60',
            '75',
            '120'
        ];

        $kelembapan = [
            $faker->numberBetween($min = 50, $max = 70),
            '25',
            $faker->numberBetween($min = 60, $max = 100),
            $faker->numberBetween($min = 60, $max = 90),
            $faker->numberBetween($min = 60, $max = 80),
            $faker->numberBetween($min = 60, $max = 100),
            $faker->numberBetween($min = 80, $max = 90),
            $faker->numberBetween($min = 80, $max = 90),
            $faker->numberBetween($min = 60, $max = 70)
        ];

        $temperatur = [
            '22',
            $faker->numberBetween($min = 18, $max = 27),
            $faker->numberBetween($min = 18, $max = 20),
            $faker->numberBetween($min = 20, $max = 25),
            $faker->numberBetween($min = 20, $max = 34),
            $faker->numberBetween($min = 19, $max = 30),
            $faker->numberBetween($min = 20, $max = 33),
            $faker->numberBetween($min = 18, $max = 25),
            $faker->numberBetween($min = 22, $max = 30)
        ];

        $curah_hujan = [
            $faker->numberBetween($min = 300, $max = 2500),
            $faker->numberBetween($min = 750, $max = 1250),
            $faker->numberBetween($min = 1000, $max = 1500),
            $faker->numberBetween($min = 2500, $max = 4000),
            $faker->numberBetween($min = 2000, $max = 3000),
            $faker->numberBetween($min = 1000, $max = 4000),
            $faker->numberBetween($min = 807, $max = 1200),
            $faker->numberBetween($min = 1500, $max = 2000),
            $faker->numberBetween($min = 1000, $max = 1500)
        ];

        $berat = [
            '250',
            '1000',
            '250',
            '1000',
            '30',
            '1000',
            '1000',
            '1000',
            '1000'
        ];

        $harga_jual = [
            '6000',
            '14000',
            '7200',
            '23400',
            '5100',
            '5100',
            '3600',
            '8400',
            '8400'
        ];

        $harga_beli = [
            '10000',
            '24000',
            '12000',
            '39000',
            '8500',
            '8500',
            '9000',
            '14000',
            '14000'
        ];


        $deskripsi = [
            'Bawang merah adalah salah satu bumbu masak utama dunia yang berasal dari Iran Pakistan dan pegunungan-pegunungan di sebelah utaranya tetapi kemudian menyebar ke berbagai penjuru dunia baik sub-tropis maupun tropis',
            'Tomat adalah tumbuhan dari keluarga Solanaceae tumbuhan asli Amerika Tengah dan Selatan dari Meksiko sampai Peru. Tomat merupakan tumbuhan siklus hidup singkat dapat tumbuh setinggi 1 sampai 3 meter.',
            'Selada atau daun sla adalah tumbuhan sayur yang biasa ditanam di daerah beriklim sedang maupun daerah tropika. Kegunaan utama adalah sebagai salad. Produksi selada dunia diperkirakan sekitar 3 juta ton yang ditanam pada lebih dari 300.000 ha lahan.',
            'Jahe adalah tanaman rimpang yang sangat populer sebagai rempah-rempah dan bahan obat. Rimpangnya berbentuk jemari yang menggembung di ruas-ruas tengah. Rasa dominan pedas disebabkan senyawa keton bernama zingeron. Jahe termasuk suku Zingiberaceae',
            'Lada disebut juga merica atau sahang yang mempunyai nama Latin Piper nigrum adalah sebuah tanaman yang kaya akan kandungan kimia seperti minyak lada minyak lemak juga pati. Lada bersifat sedikit pahit pedas hangat dan antipiretik. Tanaman ini sudah mulai ditemukan dan dikenal sejak puluhan abad yang lalu.',
            'Kunyit atau kunir adalah termasuk salah satu tanaman rempah-rempah dan obat asli dari wilayah Asia Tenggara. Tanaman ini kemudian mengalami penyebaran ke daerah Malaysia Indonesia Australia bahkan Afrika.',
            'Jagung adalah salah satu tanaman pangan penghasil karbohidrat yang terpenting di dunia selain gandum dan padi. Bagi penduduk Amerika Tengah dan Selatan bulir jagung adalah pangan pokok sebagaimana bagi sebagian penduduk Afrika dan beberapa daerah di Indonesia.',
            'Daun bawang merupakan jenis sayuran dari kelompok bawang yang banyak digunakan dalam masakan. Dalam masakan Indonesia daun bawang bisa ditemukan misalnya dalam martabak telur sebagai bagian dari sup atau sebagai bumbu tabur seperti pada soto',
            'Terung adalah tumbuhan penghasil buah yang dijadikan sayur-sayuran. Asalnya adalah India dan Sri Lanka. Terung berkerabat dekat dengan kentang dan leunca dan agak jauh dari tomat. Terung ialah terna yang sering ditanam secara tahunan. Tanaman ini tumbuh hingga 40–150 cm tingginya.'
        ];

        $id_kategori = [
            '1','2','1','3','3','3','2','1','2'
        ];

        for ($i=0; $i < 9; $i++) { 
            DB::table('produk')->insert([
                'nama' => $nama[$i],
                'umur' => $umur[$i],
                'tekanan' => $faker->numberBetween($min = 100, $max = 1000),
                'kelembapan' => $kelembapan[$i],
                'temperatur' => $temperatur[$i],
                'titik_embun'=> $curah_hujan[$i],
                'sinar_uv' => $faker->numberBetween($min = 100, $max = 1000),
                'berat' => $berat[$i],
                'harga_jual' => $harga_jual[$i],
                'harga_beli' => $harga_beli[$i],
                'stok' => $faker->numberBetween($min = 1000, $max = 5000),
                'deskripsi' => $deskripsi[$i],
                'foto' => $foto[$i],
                'id_kategori' => $id_kategori[$i],
            ]);
        }
        

        


    }
}

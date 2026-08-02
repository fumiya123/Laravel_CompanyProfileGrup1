<?php

namespace Database\Seeders;

use App\Models\Artikel;
//use App\Models\User;       
//use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Panggil Seeder User dan Category TERLEBIH DAHULU
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            LevelSeeder::class,
        ]);

        // 2. Ambil satu ID secara acak dari database untuk dimasukkan ke artikel
        //$random_user_id = User::inRandomOrder()->first()->id;
        //$random_category_id = Category::inRandomOrder()->first()->id;

        // 3. Setelah User dan Category selesai, baru masukkan data Artikel
        $data_artikel = [
            [
                'title' => 'Google Sebut AI Berpotensi Tambah Rp 910 Triliun ke Ekonomi Indonesia',
                'author_id' => 8,
                'category_id' => 5,
                'level_id' => 1,
                'slug' => 'google-sebut-ai-berpotensi-tambah-Rp-910-triliun-ke-ekonomi-indonesia',
                'body' => <<<'TEXT'
                            Google menilai Indonesia memiliki peluang besar memanfaatkan akal imitasi (AI) untuk mendorong pertumbuhan ekonomi. Namun, potensi ini belum dimanfaatkan secara optimal, khususnya oleh pelaku usaha mikro, kecil, dan menengah (UMKM) yang menjadi salah satu tulang punggung penggerak ekonomi. “Saat ini baru 14,5% UMKM yang memanfaatkan AI. Jadi peluang besar ada di depan kita,” kata Vice President Government Affairs and Public Policy Centers of Excellence Google Markham Erickson dalam acara Google AI & YouTube untuk Ekonomi Kreatif di Jakarta, Kamis (23/7).

                            Padahal, menurut dia, penerapan AI secara luas di sektor UMKM dapat menambah nilai ekonomi hingga Rp 910 triliun. Angka ini bisa hampir mencapai 4% terhadap produk domestik bruto atau PDB Indonesia. Teknologi ini juga diperkirakan mampu menciptakan lebih dari 510 ribu lapangan kerja baru.

                            Oleh karena itu, Erickson  mengatakan peningkatan produktivitas melalui AI bisa memberikan dampak ekonomi yang signifikan. Menurutnya, AI tidak hanya membantu meningkatkan efisiensi pelaku usaha, tetapi juga membuka peluang lahirnya produk, layanan, hingga jenis pekerjaan baru.

                            "AI bukan hanya melengkapi pekerjaan yang ada, tetapi juga menciptakan industri dan lapangan kerja yang sama sekali baru," ujarnya.

                            Indonesia Jadi Pengguna AI Generatif Terdepan di ASEAN 
                            
                            Di tengah rendahnya pemanfaatan AI oleh UMKM, Google melihat antusiasme masyarakat Indonesia terhadap AI generatif justru sangat tinggi. Country Director Google Indonesia Veronica Utami mengatakan kreator di Indonesia kini menghasilkan hampir 9 juta gambar berbasis AI setiap hari. 
                            
                            Angka itu merupakan yang tertinggi di Asia Tenggara. Menuruetnya, tingginya penggunaan AI generatif menunjukkan Indonesia bukan hanya menjadi pasar teknologi, tetapi juga mulai memanfaatkannya untuk menghasilkan karya kreatif. "Ini sangat luar biasa, tidak hanya produktif tapi juga kreatif,” ujarnya.

                            Google juga mencatat perkembangan ekonomi kreator di Indonesia semakin pesat. Berdasarkan YouTube Impact Report, ekosistem YouTube menyumbang lebih dari Rp 8,4 triliun terhadap PDB Indonesia pada 2023. 

                            Selain itu, aktivitas para kreator di platform tersebut menopang lebih dari 190 ribu lapangan pekerjaan. Sekitar 81% kreator Indonesia bahkan memperoleh pendapatan dari penonton di luar negeri, menunjukkan konten lokal semakin mampu menembus pasar global.
                            TEXT
            ],
            [
                'title' => 'Bahaya penyakit akibat paparan asbes yang sulit dideteksi',
                'author_id' => 1,
                'category_id' => 1,
                'level_id' => 2,
                'slug' => 'bahaya-penyakit-akibat-paparan-asbes-yang-sulit-dideteksi',
                'body' => <<<'TEXT'
                            WHO sudah melarang penggunaan asbes dalam bentuk apa pun, karena material ini terbukti bersifat karsinogenik.

                            Namun di Indonesia, belum ada aturan yang melarang penggunaan asbes.

                            Penyakit karena asbes, salah satunya asbestosis, memang tidak mudah dideteksi, karena gejalanya mirip penyakit pernapasan lainnya.

                            Perlu waktu lama dari awal terpapar asbes hingga muncul gejala penyakit.

                            BBC News Indonesia mewawancarai beberapa pekerja pabrik asbes yang paru-parunya rusak.
                            TEXT
            ],
          [
                'title' => 'Bank Indonesia Holds Benchmark Rate at 5.75% While Expanding Measures to Support Rupiah Stability and Economic Growth',
                'author_id' => 1,
                'category_id' => 3,
                'level_id' => 3,
                'slug' => 'bank-indonesia-holds-benchmark-rate-at',
                'body' => <<<'TEXT'
                            Bank Indonesia (BI) has maintained its benchmark BI-Rate at 5.75%, along with the Deposit Facility rate at 4.75% and the Lending Facility rate at 6.50%, while introducing new incentives to attract foreign portfolio inflows and strengthen rupiah stability amid persistent global uncertainty.

                            The decision, announced following the Bank Indonesia Board of Governors Meeting (RDG) on July 21–22, 2026, reflects the central bank's integrated policy mix aimed at maintaining rupiah stability, keeping inflation within the government's target range of 2.5% ± 1% in 2026 and 2027, and supporting sustainable economic growth.

                            "The BI-Rate decision and these accompanying policy measures form an integrated policy mix aimed at further strengthening rupiah stability amid persistent global uncertainty, while keeping inflation within the target range in 2026 and 2027," Governor Perry Warjiyo said, as quoted by Jakarta Globe.

                            Instead of raising interest rates again, BI introduced broader incentive schemes, including lower foreign exchange hedging costs and expanded incentives for foreign portfolio investors. According to Perry, the central bank considered another rate hike but opted for incentives to avoid increasing domestic borrowing costs.

                            "These incentives are more effective to attract foreign investment and control the exchange rate without impacting domestic interest rates. This is what we chose," he said, as quoted by Reuters.

                            The move follows a cumulative 100-basis-point increase in the benchmark rate since May. The decision came as global uncertainty remained elevated due to renewed tensions in the Middle East, rising oil prices, and expectations of tighter U.S. monetary policy, all of which have increased pressure on emerging market currencies.

                            Bank Indonesia reported that the rupiah has stabilized at around IDR 17,885 per USD 1 after reaching a record low of IDR 18,190 per USD 1 in June. Indonesia's foreign exchange reserves also increased to USD 145.6 billion at the end of June, while foreign ownership of BI's Rupiah Securities (SRBI) continued to rise.

                            Despite external risks, BI maintained its outlook for Indonesia's economic growth at 4.9%–5.7% in 2026 and expects inflation to remain under control. Headline inflation stood at 3.34% year-on-year in June, while bank lending grew 12.67% year-on-year, reflecting continued resilience in domestic economic activity.

                            Economists broadly supported the decision to keep rates unchanged. Permata Bank Chief Economist Josua Pardede said BI should preserve policy flexibility while coordinating closely with the government, noting that fiscal support and policy certainty remain essential so that exchange rate stabilization does not rely solely on monetary policy, as quoted by Jakarta Globe. Meanwhile, University of Indonesia economist Teuku Riefky said BI should continue assessing the impact of previous rate hikes before considering further tightening, as quoted by Jakarta Globe.
                            TEXT
            ],
            [
                'title' => 'Menko AHY: Dekarbonisasi Transportasi Bukan Sekadar Kurangi Emisi, Melainkan untuk Masa Depan Generasi Indonesia',
                'author_id' => 1,
                'category_id' => 4,
                'level_id' => 4,
                'slug' => 'menko-ahy-dekarbonisasi-transportasi-bukan-sekadar-kurangi-emisi',
                'body' => <<<'TEXT'
                            JAKARTA – Sebagai upaya dekarbonisasi sektor transportasi, Menteri Koordinator Bidang Infrastruktur dan Pembangunan Kewilayahan Agus Harimurti Yudhoyono (AHY) menegaskan upaya tersebut bukan hanya agenda lingkungan hidup, melainkan bagian dari ikhtiar pemerintah menjaga ketahanan energi nasional, menekan biaya logistik, serta melindungi kesejahteraan masyarakat di tengah ketidakpastian ekonomi global.

                            Hal tersebut disampaikan Menko AHY saat menghadiri Indonesia Zero Emission Heavy Duty Vehicle (IZEHDV) Forum di Hotel St. Regis, Jakarta, Kamis (23/7/2029).

                            Menurut Menko AHY, masyarakat saat ini menghadapi tantangan yang tidak ringan. Konflik geopolitik di berbagai belahan dunia telah memicu gangguan rantai pasok energi global, mendorong kenaikan harga minyak, hingga berdampak pada harga berbagai kebutuhan pokok. Karena itu, Indonesia harus terus memperkuat kemandirian energi agar tidak semakin rentan terhadap gejolak eksternal.

                            “Di tengah dinamika dunia yang penuh ketidakpastian, Indonesia harus memiliki semangat mewujudkan kemandirian energi. Ketahanan energi menjadi fondasi penting bagi lebih dari 280 juta penduduk Indonesia agar pertumbuhan ekonomi tetap berjalan, industri terus berkembang, dan kesejahteraan masyarakat dapat meningkat dengan pasokan energi yang cukup, terjangkau, dan tidak terganggu,” ujar Menko AHY.

                            Namun demikian, Menko AHY mengingatkan meningkatnya kebutuhan energi juga diikuti dengan meningkatnya emisi karbon yang berdampak terhadap kualitas lingkungan dan kesehatan masyarakat. Oleh sebab itu, transisi menuju energi baru terbarukan harus dilakukan secara bertanggung jawab.

                            “Yang kita lakukan hari ini tidak hanya untuk memenuhi kebutuhan pembangunan saat ini, tetapi juga sebagai bentuk tanggung jawab kita kepada anak cucu di masa depan. Pembangunan tidak boleh berhenti, tetapi juga harus tetap menjaga bumi yang kita wariskan,” tegas Menko AHY.

                            Menko AHY menjelaskan sekitar 55 persen emisi karbon Indonesia berasal dari sektor energi. Dari jumlah tersebut, sekitar 22 persen berasal dari sektor transportasi, dan sekitar 89 persen di antaranya disumbang oleh transportasi darat. Kendaraan berat memang hanya sekitar tiga juta unit, namun berkontribusi sekitar 31 persen terhadap emisi karbon sektor transportasi darat.

                            Karena itu, pemerintah terus mendorong berbagai langkah dekarbonisasi, mulai dari peningkatan efisiensi energi, percepatan elektrifikasi kendaraan, hingga pengembangan kendaraan listrik nasional, termasuk truk dan bus listrik.

                            “Elektrifikasi kendaraan memerlukan dukungan kebijakan, edukasi kepada masyarakat, serta insentif yang tepat. Di saat yang sama, kita juga ingin industri kendaraan listrik dalam negeri terus berkembang sehingga memberikan manfaat ekonomi yang lebih luas,” kata Menko AHY.

                            Selain elektrifikasi, pemerintah juga terus memperluas penggunaan biodiesel B50 sebagai bagian dari strategi mengurangi ketergantungan terhadap impor bahan bakar minyak.

                            Menurut Menko AHY, semakin besar pasokan energi yang berasal dari dalam negeri, semakin kecil pula ketergantungan Indonesia terhadap fluktuasi harga minyak dunia yang dipengaruhi situasi geopolitik internasional.

                            “Ketika terjadi konflik atau gangguan jalur distribusi energi dunia, dampaknya langsung terasa pada harga dan pasokan energi. Karena itu, penguatan elektrifikasi maupun pemanfaatan biodiesel merupakan bagian dari upaya memperkuat keamanan energi nasional sekaligus mengurangi beban impor,” jelasnya.

                            Dalam kesempatan tersebut, Menko AHY juga menegaskan komitmen pemerintah untuk menata persoalan kendaraan Over Dimension Over Loading (ODOL) yang selama bertahun-tahun menjadi tantangan serius bagi keselamatan transportasi nasional.

                            Menurutnya, praktik ODOL tidak hanya meningkatkan risiko kecelakaan lalu lintas yang merenggut korban jiwa, tetapi juga mempercepat kerusakan infrastruktur jalan yang setiap tahunnya membutuhkan anggaran puluhan triliun rupiah untuk perbaikan.

                            “Kendaraan ODOL membahayakan keselamatan pengguna jalan dan menyebabkan kerusakan jalan yang sangat besar. Setiap tahun pemerintah harus mengalokasikan lebih dari Rp40 triliun untuk preservasi jalan yang rusak akibat kendaraan yang melebihi dimensi dan muatan,” ungkapnya.

                            Menko AHY menekankan penanganan ODOL harus dilakukan secara bertahap, tegas, dan berkeadilan dengan melibatkan seluruh pemangku kepentingan, mulai dari Kementerian Perhubungan, Kementerian Perindustrian, Kepolisian Negara Republik Indonesia, hingga pelaku usaha.

                            Di sisi lain, pemerintah juga menyiapkan solusi jangka panjang melalui pengembangan moda angkutan logistik yang lebih efisien, seperti optimalisasi jalur kereta api logistik dan peningkatan kapasitas logistik maritim agar ketergantungan terhadap angkutan jalan dapat dikurangi.

                            “Ketika kita mampu mengurangi kendaraan ODOL, kita bukan hanya menekan emisi karbon, melainkan juga mengurangi angka kecelakaan, menghemat biaya perbaikan jalan, sekaligus menciptakan sistem logistik nasional yang lebih efisien dan berdaya saing. Semua ini pada akhirnya kembali kepada kepentingan masyarakat, agar biaya logistik turun, distribusi barang semakin lancar, dan harga kebutuhan masyarakat semakin terkendali,” tutup Menko AHY.

                            Dalam kesempatan yang sama, Country Director WRI Indonesia Nirarta Samadhi menyampaikan semua pihak harus mewujudkan kemandirian energi melalui transformasi di sektor transportasi.

                            “Jumlahnya memang sedikit, tapi dampaknya terhadap konstruksi energi dan emisi, sangat besar. Kabar baiknya, saat ini Indonesia sudah memiliki kemampuan untuk membangun bis dan truk listrik,” pungkas Nirarta.

                            Turut hadir dalam kegiatan tersebut Senior Anchor and Director CNN Indonesia Desi Anwar, Staf Ahli Bidang Kawasan dan Lingkungan Kementerian Perhubungan Robby Kurniawan, serta Direktur Retail dan Niaga PT PLN Fahrur Rozy.

                            Menko AHY dalam kesempatan tersebut didampingi Deputi Bidang Koordinasi Pemerataan Pembangunan Wilayah, Agraria, dan Tata Ruang Nazib Faizal serta Staf Khusus Bidang Manajemen dan Kerja Sama Antar Lembaga Agust Jovan Latuconsina.
                            TEXT
            ],
            [
                'title' => 'Jalan Rusak di Deli Serdang Sering Bikin Warga Kecelakaan',
                'author_id' => 1,
                'category_id' => 4,
                'level_id' => 1,
                'slug' => 'jalan-rusak-di-deli-serdang-sering-bikin-warga-kecelakaan',
                'body' => <<<'TEXT'
                            Deli Serdang - Jalan Veteran Pasar 9, Desa Manunggal, Kecamatan Helvetia, Kabupaten Deli Serdang, Sumatera Utara, kerap memakan korban jiwa lantaran rusak parah dan berlubang. Melihat kondisi tersebut, warga menimbun jalan itu dengan bantuan dari warga lain pakai dana pribadi.

                            Berdasarkan pantauan detikSumut dilokasi, jalan tersebut terlihat sebagian telah ditimbun dan sebagian belum ditimbun serta masih ada yang genangan air. Terpantau para pengendara tampak kesusahan ketika melewati jalan rusak tersebut.

                            Kepala Dusun 6 Desa Manunggal, Kecamatan Helvetia, Kabupaten Deli Serdang, Sumatera Utara, Aris Setiawan mengatakan jalan tersebut tadi malam telah ditimbun oleh warga setempat. Penimbunan menggunakan bahan bangunan berupa campuran alami dari pasir dan batu (sirtu).

                            "Iya semalam sudah ditimbun warga dan pemuda setempat jalan itu, sebanyak 10 dump truck. Untuk dana bantuannya berasal dari warga bernama Buk Mery merupakan pemilik Panti dan seorang pengusaha," ucap Aris kepada detikSumut di dekat lokasi jalan rusak, Minggu (26/7/2026) siang.

                            Aris mengatakan, minggu depan akan ada lagi penimbunan jalan rusak sebanyak 10 dump truck. Ia menyebut, upaya penimbunan tersebut sangat membantu menghindari kecelakaan ketika melintasi jalan rusak dan becek.

                            "Nah, untuk saat ini itulah yang membantu memperbaiki jalan ataupun menimbun untuk menghindari kecelakaan. Korban sudah banyak akibat jalan rusak itu," tambah Aris.

                            Lebih lanjut, ia menyebut jalan tersebut sudah selayaknya diperbaiki oleh pemerintah karena jalan rusak itu merupakan jalan Provinsi Sumatera Utara.

                            "Sebenarnya sudah pantas jalan itu diperbaiki, aspal sudah 10 tahunan, drainase lebih dari 20 tahun enggak diperbaiki. Jalan tersebut pernah diusulkan untuk diperbaiki tapi belum ada diperbaiki, kita tunggu saja yang terpenting sudah ada yang membantu menimbun," tambahnya.

                            Sementara itu, warga setempat Alex mengatakan ia bersama warga lainnya tadi malam yang menimbun jalan rusak tersebut. Ia mengatakan pengerjaan penimbunan dilakukan bersama warga dilakukan selama setengah hari lamanya. Sedangkan penimbunan trip kedua pada malam hari.

                            "Kita menimbun jalan rusak itu dari pukul 09.00 - 13.00 WIB. Ada masyarakat yang nyumbang lantaran jalan jelek, kita perbaiki lah karena untuk jalan kita juga," tambahnya.

                            Meskipun jalan tersebut sudah ditimbun, namun jalan tersebut masih perlu diperbaiki dan membangun drainase agar air tidak menggenang ke jalan raya. Ia sebagai warga juga kawatir dengan kondisi jalan yang sering kali ada yang jatuh.

                            "Sering juga ada orang jatuh lantaran macet. Kalau harapan, ya kalau bisa jalan rusak tersebut diaspal lama dan cepat dikerjakan," pintanya.

                            Sebelumnya, video penimbunan jalan rusak ini telah viral di media sosial dan menyita banyak perhatian netizen. Video tersebut viral, lantaran menyebut jalan ditimbun menggunakan dana pribadi dan minimnya perhatian dari pemerintah.
                            TEXT
            ],
            [
                'title' => 'Kisah 100 rumah sakit pakai bolpoin dan kertas demi kalahkan serangan siber',
                'author_id' => 8,
                'category_id' => 1,
                'level_id' => 2,
                'slug' => 'kisah-100-rumah-sakit-pakai-bolpoin-dan-kertas-demi-kalahkan-serangan-siber',
                'body' => <<<'TEXT'
                            Satu demi satu panggilan masuk dari rumah sakit. Para penjahat membobol jaringan komputer dalam peretasan massal yang membahayakan banyak nyawa.

                            Di pusat keamanan siber nasional Bucharest (DNSC), mereka menyaksikan tanpa daya saat para peretas menyerang seluruh Rumania melalui perangkat lunak yang banyak digunakan layanan kesehatan.

                            Kepala siber Rumania, Dan Cimpean, menghadapi keputusan sulit. Tetapi itu satu‑satunya pilihan yang mereka miliki.

                            Perintah dikirim ke lebih dari 100 rumah sakit.

                            Putuskan koneksi dari internet, sekarang.

                            Serangan siber terhadap sejumlah rumah sakit di Rumania pada Februari 2024 merupakan salah satu yang terburuk. Serangan itu menargetkan sistem kesehatan di seluruh dunia, tetapi insiden seperti ini menjadi semakin umum.

                            Layanan kesehatan kini menjadi sektor infrastruktur nasional kritis yang paling banyak menjadi sasaran, kata FBI baru‑baru ini.

                            Memutus koneksi 100 rumah sakit di Rumania dari internet menghentikan langkah para peretas sekaligus memberi waktu bagi aparat untuk mengetahui seberapa parah serangan tersebut.

                            Namun, akibatnya tidak ada perangkat elektronik yang terhubung, email, atau peramban situs.

                            Para tenaga medis harus beralih ke bolpoin dan kertas, selagi tim TI bekerja keras dan pusat respons siber nasional berusaha mengetahui bagaimana menghentikan peretas.

                            Tindakan mereka selama empat hari sejak 10 Februari 2024, serta para dokter dan perawat, mendapat banyak pujian.

                            Bagaimana mereka bereaksi dan mengatasinya kini menjadi contoh bagi perencana penanggulangan bencana secara internasional, ketika para pejabat mencari panduan dalam merespons peretasan massal rumah sakit.

                            Ahli bedah Oana Goidescu sedang bertugas di Rumah Sakit Buzău, 120 kilometer sebelah timur laut Bucharest, ketika peringatan datang bahwa para peretas telah membobol perusahaan perangkat lunak yang berbasis di Bucharest, RSC, dan menyusup ke dalam sistem medis yang banyak digunakan bernama Hippocrates.

                            "Pengalaman itu cukup tidak menyenangkan, karena catatan TI bukan sekadar daftar pasien," katanya.

                            "Untuk setiap pasien, terdapat tes laboratorium, radiologi, obat‑obatan, dan perlengkapan. Semua itu hilang."

                            Hippocrates digunakan oleh dokter, perawat, dan ahli bedah untuk mengelola segala hal: mulai dari penerimaan pasien hingga penggajian, logistik farmasi, dan hasil tes.

                            Secara diam‑diam, para penyerang siber mulai menginfeksi rumah sakit di seluruh Rumania yang menggunakan sistem tersebut dengan jenis ransomware bernama BackMyData.

                            Berkas‑berkas diacak menjadi tidak terbaca dan tuntutannya adalah tebusan dalam bentuk bitcoin.

                            Staf di rumah sakit anak Pitești, barat laut Bucharest, menjadi yang pertama menyadari kesalahan pada Minggu pagi, sehari setelah serangan dimulai.

                            Menjelang fajar pada Senin, banyak rumah sakit lain melaporkan sistem Hippocrates tidak berfungsi.

                            Ketika rumah sakit berada dalam kondisi offline, para ahli siber bekerja sama dengan pembuat Hippocrates untuk mengetahui berapa banyak sistem yang telah terinfeksi dan mengusir para peretas.

                            Dokter rumah sakit merespons dengan menciptakan solusi untuk melindungi pasien hingga sistem kembali online.

                            "Ketika kami melihat sistem tidak akan segera diperbaiki, kami mengembangkan metode offline agar kami bisa mencatat setiap pasien," kata Vlad Paic dari Rumah Sakit Carol Davila di Bucharest.

                            "Kami meminta laboratorium memberikan hasil dalam bentuk kertas. Kami menggunakan Excel dan alat offline lainnya untuk memastikan perawatan tidak terpengaruh."

                            Beberapa dokter mengatakan bahwa kembali ke proses yang lebih analog terbantu oleh peralihan Rumania ke sistem digital yang relatif baru.

                            Penyelidik siber bekerja sepanjang malam dan menemukan 26 rumah sakit telah terinfeksi BackMyData.

                            Keesokan harinya, rumah sakit yang tidak terinfeksi kembali dihubungkan dengan perlindungan tambahan.

                            DNSC mengatakan sebagian keberhasilan operasi tersebut adalah cara mereka menggunakan media untuk berkomunikasi dengan rumah sakit dan publik.

                            Pesan kepada publik mendorong pasien untuk menghindari rumah sakit kecuali jika perlu.

                            Namun ruang tunggu tetap dipenuhi dan Dr Goidescu mengatakan beberapa pasien yang frustrasi melampiaskan kemarahan mereka kepada staf.

                            "Kami ditanya, 'Bagaimana jika itu ibu Anda?' Mereka berhak marah, tetapi kami mencoba menjelaskan bahwa itu bukan kesalahan kami," katanya.

                            Pesan penting lainnya adalah bahwa rumah sakit tidak boleh menghubungi para peretas atau membayar tebusan.

                            Para peretas menuntut €160.000 dalam bentuk bitcoin, tetapi pemerintah Rumania memutuskan untuk tidak membayar tebusan.

                            Di rumah sakit yang masih offline, tim TI berupaya memulihkan sistem dari cadangan data.

                            Sebagian besar memiliki salinan data yang relatif baru—pelajaran penting. Cadangan data yang dibuat secara rutin memungkinkan organisasi pulih lebih cepat.

                            Dalam lima hari, sebagian besar rumah sakit kembali online dan beroperasi hampir normal, tanpa laporan kematian atau dampak serius pada pasien.

                            Diperlukan waktu berminggu‑minggu untuk memasukkan semua informasi baru yang dicatat di atas kertas selama gangguan.

                            Sebagian data hilang selamanya.

                            Polisi tidak mengomentari penyelidikan mereka tentang siapa yang berada di balik serangan tersebut.

                            Namun, tahun lalu situs sebuah kelompok ransomware yang terkait dengan BackMyData ditutup dalam operasi internasional.

                            Empat warga Rusia ditangkap di luar Rusia, yang otoritasnya tidak bekerja sama dengan penegak hukum Barat.

                            Cimpean mengatakan serangan tersebut bisa terjadi di mana saja.

                            "Semakin banyak teknologi yang Anda miliki, semakin Anda terdigitalisasi, semakin besar risikonya," katanya.

                            Tahun lalu, Layanan Kesehatan UK (NHS) mengonfirmasi bahwa peretasan terhadap sebuah perusahaan tes darah yang memengaruhi belasan pusat medis di London turut berkontribusi pada kematian seorang pasien.

                            Itu merupakan kasus pertama kematian yang secara resmi dikaitkan dengan serangan siber.

                            Pada waktu yang hampir bersamaan, Change Healthcare di AS diretas, yang menyebabkan gangguan luas.

                            Perusahaan tersebut membayar tebusan sebesar US$22 juta kepada para peretas.

                            Para peretas juga menyebabkan kekacauan di akhir tahun dengan serangan terhadap penyedia layanan kesehatan lain di AS bernama Ascension.

                            Alina Bîzgă dari perusahaan keamanan siber Bitdefender yang berbasis di Bucharest mengatakan serangan terhadap rumah sakit menarik bagi penjahat yang berusaha menciptakan kekacauan demi uang.

                            "Rumah sakit menangani layanan kritis, dan para penjahat berpikir bahwa semakin besar gangguan yang dapat ditimbulkan, semakin besar kemungkinan mereka dibayar tebusan," katanya.
                            TEXT
            ],
            [
                'title' => '2026 GEM Report',
                'author_id' => 2,
                'category_id' => 2,
                'level_id' => 3,
                'slug' => '2026-gem-report',
                'body' => <<<'TEXT'
                            #YourStoryCounts
                            
                            Time is running out. 2030 is around the corner. Yet 273 million children and youth are still out of school. The clock is counting down for us to help children learn and we have less than 5 years left to reach our global education goal SDG 4. Every two seconds, one more child needs to enter school just to stay on track. But the idea that progress is not possible no longer holds. Across the world, the report tells the stories of countries proving that access can expand at scale. Their journeys remind us: when equity is prioritized, when policies are sustained, and when systems focus on those furthest behind, change is possible. It calls for a renewed focus on listening to countries’ stories of change. By focusing on their paths to success, we can find new solutions for others. Because every education story matters. Join Eliud Kipchoge, SEVENTEEN and Claire Danes in sharing yours: #YourStoryCounts

                            The three major global education agendas – universal access to primary education declared in 1990; universal completion of primary education in 2000; and universal completion of secondary education in 2015 – increased levels of ambition faster than education system expansion, undermining the credibility of these agendas.
                            
                            Behind the numbers of those out of school is a more encouraging story of surging enrolment. With 1.4 billion students enrolled in school in 2024, enrolment had increased by 327 million, or 30%, in primary and secondary education since 2000. It also increased by 45% in pre-primary and by 161% in post-secondary education.
                            
                            Countries have also transformed their policy approach to education equity and inclusion. Governments support disadvantaged regions and groups, and have leveraged investments in technology, transport, energy and health to expand education access.

                            After falling by 33% between 2000 and 2015, the out-of-school population has risen for a seventh year in a row, up 3% since 2015 and reaching 273 million in 2024. This means that one in six children, adolescents and youth worldwide are excluded from education.

                            This population is undercounted by at least 13 million if supplementary information from humanitarian sources is used to correct data gaps in the 10 countries most affected by conflict.
        
                            Progress is possible. Some countries have reduced out-of-school rates by at least 80% since 2000, such as Madagascar and Togo among children, Morocco and Viet Nam among adolescents, and Georgia and Türkiye among youth.
                            TEXT
            ],
            [
                'title' => 'Launch of the 2023 UNESCO GEM Report: Transforming Education with Technology in Southeast Asia',
                'author_id' => 2,
                'category_id' => 2,
                'level_id' => 4,
                'slug' => 'launch-2023-unesco-gem-report-transforming-education-technology-southeast-asia',
                'body' => <<<'TEXT'
                            Launch of the 2023 UNESCO GEM Report in Indonesia calls for technology to be used on learners’ terms, highlighting technology as a Tool for Educational Transformation in Southeast Asia.

                            A new report by the Global Education Monitoring (GEM) Report, UNESCO,  and the Southeast Asia Ministers of Education Organization (SEAMEO) shows that technology is changing the way education is being delivered in Southeast Asia. The report was presented for the first time in Indonesia at an event organized by the SEAMEO Regional Open Learning Centre (SEAMOLEC) in collaboration with UNESCO and the SEAMEO Secretariat on February 27, 2025, at the Ministry of Primary and Secondary Education of Indonesia. During the event, the summary version of the report in Bahasa Indonesia was also launched. 

                            The report, titled "A tool on whose terms?" highlights how technology has improved access to learning for students in remote areas and emergency situations, while it also cautions that technology is not a universal solution to all educational challenges. There are now some 400 million internet users in the region; in 2020, about 40 million went online for the first time. With almost 3 million enrolments, Indonesia, the Philippines, and Vietnam had the highest growth rate of new learners in Coursera, a massive open online course provider in 2021.

                            "Technology in education is not merely about digitizing content or introducing new tools; it is about creating meaningful learning experiences that empower every learner, regardless of their background. As we launch the 2023 GEM Report in Indonesia, our focus remains clear: to ensure that technology serves as an enabler of inclusion, equity, and quality in education." - Maki Katsuno-Hayashikawa

                            However, without adequate digital literacy, technology use will not be effective. The report emphasizes the crucial role played by educators in shaping future individuals who are not only capable of using technology but are also fully responsible and better prepared to face the challenges of the digital era.

                            In Indonesia, the use of technology in education has opened new opportunities to improve access, quality, and efficiency in learning. However, as an archipelagic nation with over 17,000 islands, Indonesia still faces significant challenges in uneven digital infrastructure. Currently, The Ministry is developing Rumah Pendidikan (Education Home), an integrated digital platform to support the education ecosystem in Indonesia. This innovation is designed to connect various educational services into one system, making access easier for stakeholders. Key features of Rumah Pendidikan include facilities for students, parents, schools, and the public.

                            The national launch in Indonesia was attended by officials from the Ministry of Primary and Secondary Education and its main units, representatives from major universities in Indonesia, SEAMEO centers in Indonesia, and others in the education sector. Three representatives from the Ministry of Education participated from the Agency for Educational Standards, Curriculum, and Assessment, the Center for Data and Information and the Directorate General of Teachers and Education Personnel. They discussed the way that policies and curricula could support the use of technology in education in the country, new innovations and ways to support Indonesian teachers in leveraging technology to teach.
                            TEXT
            ],
            [
                'title' => 'Golden Vision 2045: Reaping the Gains from Trade',
                'author_id' => 2,
                'category_id' => 3,
                'level_id' => 1,
                'slug' => 'golden-vision-2045-reaping-the-gains-from-trade-573708',
                'body' => <<<'TEXT'
                            Indonesia has been pursuing a broad push towards greater trade openness with regional and global partners, seeking to leverage external demand to reach high-income status by 2045. This welcome and timely effort comes amid ongoing trade policy shocks. Our analysis suggests that deeper trade integration, focusing on reducing non-tariff barriers, along with complementary structural reforms, can generate significant GDP gains for Indonesia. These gains can come from unilateral actions on reducing non-tariff barriers affecting imports, which would be amplified by increasing market access in the context of trade agreements with major partners. Alongside trade policy, structural reforms in other areas—such as human capital and logistics—can further enhance trade integration. These reforms can reduce trade costs on their own, while also complement trade policy by helping Indonesia to broaden comparative advantage across sectors. Such an ambitious trade liberalization and structural reform program could make Indonesia ‘open for business’ amid shifting global supply chains; the resulting GVC-integration, supported by FDI, could drive gains beyond this paper’s estimates.
                            TEXT
            ],
            [
                'title' => 'Menkomdigi: Tanpa Keterampilan Inklusif, Transformasi Digital Bisa Perlebar Ketimpangan',
                'author_id' => 2,
                'category_id' => 5,
                'level_id' => 2,
                'slug' => 'menkomdigi-tanpa-keterampilan-inklusif-transformasi-digital-bisa-perlebar-ketimpangan',
                'body' => <<<'TEXT'
                            Menteri Komunikasi dan Digital (Menkomdigi) Meutya Hafid mengingatkan bahwa transformasi digital dan perkembangan teknologi global tidak otomatis membawa manfaat bagi semua orang. Tanpa kebijakan pengembangan keterampilan yang inklusif, perubahan dunia kerja justru berisiko memperlebar ketimpangan sosial.

                            Pernyataan tersebut disampaikan Meutya dalam sesi Crisis or Opportunity? Skills for a 2030 Workforce di Indonesia Pavilion, World Economic Forum (WEF) 2026, Davos, Swiss, Selasa (20/01/2026).

                            Menurut Meutya, tantangan utama dunia kerja saat ini bukan sekadar hilangnya pekerjaan, melainkan kesenjangan antara keterampilan yang dimiliki tenaga kerja dan kebutuhan ekonomi masa depan.

                            “Pekerjaan tidak benar-benar hilang. Yang berubah adalah keterampilan. Jika negara gagal menyiapkan warganya secara merata, transformasi teknologi justru akan meninggalkan banyak orang di belakang,” ujar Meutya.

                            Meutya mengutip laporan Future of Jobs Report World Economic Forum yang memproyeksikan terciptanya sekitar 170 juta pekerjaan baru secara global hingga 2030, meski 92 juta peran lama akan tergeser. Perubahan ini menuntut proses reskilling dan upskilling dalam skala besar agar peluang kerja baru tidak hanya dinikmati oleh kelompok tertentu.

                            Sebagai negara demokrasi besar dengan lebih dari 230 juta pengguna internet dan populasi muda yang dominan, Indonesia memiliki potensi besar untuk memanfaatkan transformasi digital.

                            Namun Meutya menegaskan bahwa potensi tersebut hanya dapat diwujudkan jika investasi keterampilan menjangkau seluruh lapisan masyarakat.

                            “Generasi muda, perempuan, pekerja sektor informal, dan kelompok dengan akses terbatas harus menjadi bagian dari agenda keterampilan nasional. Inklusi bukan tambahan, tetapi syarat utama agar transformasi digital menghasilkan keadilan sosial,” katanya.

                            Menkomdigi menjelaskan bahwa pemerintah Indonesia memprioritaskan pengembangan keterampilan digital, pembelajaran sepanjang hayat, serta kebijakan yang adaptif terhadap perubahan teknologi. Pendekatan ini diarahkan untuk memastikan kemajuan teknologi meningkatkan mobilitas sosial dan memperkuat daya saing nasional, bukan menciptakan jurang baru di masyarakat.

                            “Keterampilan digital harus berjalan seiring dengan kemampuan manusia seperti berpikir kritis, adaptasi, dan kolaborasi. Di situlah masa depan kerja ditentukan,” kata Meutya.

                            Menutup pernyataannya, Meutya menegaskan bahwa dekade ini akan menjadi periode penentu bagi arah pembangunan sumber daya manusia Indonesia.

                            “Pilihan kebijakan hari ini akan menentukan apakah transformasi digital menjadi jalan naik kelas bersama, atau justru memperlebar ketimpangan. Indonesia memilih menyiapkan seluruh warganya agar siap menghadapi perubahan,” ujarnya.

                            Sesi diskusi ini turut menghadirkan Founder dan CEO AI Academy Asia Bolor Erdene Battsengel serta CEO dan Co-Founder Teach For All Wendy Kopp. Diskusi menekankan pentingnya kolaborasi antara pemerintah, dunia usaha, dan sektor pendidikan untuk membangun ekosistem keterampilan yang inklusif dan relevan dengan kebutuhan masa depan.
                            TEXT
            ],
            [
                'title' => 'Menkomdigi Tawarkan Model Transformasi Digital Indonesia yang Aman dan Beretika Pada Forum PBB WSIS 2026',
                'author_id' => 9,
                'category_id' => 5,
                'level_id' => 3,
                'slug' => 'menkomdigi-tawarkan-model-transformasi-digital-indonesia-yang-aman-dan-beretika-pada-forum-pbb-wsis-2026',
                'body' => <<<'TEXT'
                            Menteri Komunikasi dan Digital Meutya Hafid menawarkan model transformasi digital Indonesia yang mengedepankan keseimbangan antara konektivitas, pertumbuhan ekonomi digital, dan pelindungan masyarakat dalam Forum Perserikatan Bangsa-Bangsa (PBB)  World Summit on the Information Society (WSIS) Forum 2026 : Leaders SummitX. Menurutnya, transformasi digital harus dibangun di atas tiga pilar utama, yakni Terhubung, Tumbuh, dan Terjaga, agar kemajuan teknologi tidak hanya mempercepat pembangunan, tetapi juga melindungi masyarakat.

                            Di hadapan para pemimpin, regulator, dan pemangku kepentingan digital dari berbagai negara, Meutya Hafid menegaskan pengalaman Indonesia menunjukkan transformasi digital tidak dapat hanya diukur dari jumlah pengguna internet atau besarnya ekonomi digital. Hal yang lebih penting adalah bagaimana teknologi mampu menciptakan ruang digital yang aman, inklusif, dan terpercaya.

                            Pilar Terhubung menjadi fondasi utama melalui pemerataan akses digital di seluruh Indonesia. Pemerintah terus memperkuat infrastruktur dengan menghadirkan Satelit SATRIA-1 yang kini menghubungkan lebih dari 31.000 fasilitas layanan publik, serta memperluas layanan broadband melalui penyediaan spektrum frekuensi untuk jaringan 5G hingga menjangkau wilayah di lebih dari 17.000 pulau.

                            "Di bawah pilar Terhubung, kami percaya akses digital adalah hak dasar setiap warga negara. Tidak boleh ada masyarakat yang tertinggal hanya karena keterbatasan konektivitas," ujar Meutya, Kamis (09/07/2026).

                            Namun, Meutya mengingatkan bahwa konektivitas tanpa pelindungan berpotensi melahirkan risiko baru, terutama bagi anak-anak. Karena itu, Indonesia menempatkan Terjaga sebagai pilar yang memastikan kemajuan teknologi tetap berpusat pada keselamatan manusia.

                            Sebagai implementasi pilar tersebut, pemerintah telah memberlakukan regulasi pelindungan anak di ruang digital yang mewajibkan Penyelenggara Sistem Elektronik (PSE) berisiko tinggi menerapkan pembatasan usia secara ketat. Melalui kebijakan ini, anak di bawah usia 16 tahun tidak lagi diperbolehkan membuka akun digital secara mandiri.

                            Meutya mengungkapkan bahwa dalam bulan-bulan awal penerapan kebijakan tersebut, lebih dari 5 juta akun anak telah ditutup atau dinonaktifkan setelah platform melakukan penyesuaian terhadap ketentuan baru. Langkah ini menjadi bagian dari upaya memastikan ruang digital yang lebih aman sekaligus mendorong platform menjalankan tanggung jawabnya dalam melindungi anak.

                            "Keselamatan anak tidak boleh hanya bergantung pada kebijakan sukarela platform. Negara harus hadir menetapkan standar yang jelas, sementara platform wajib menjalankannya secara konsisten," tegasnya.

                            Selain memperkuat pelindungan anak, pemerintah juga terus mendorong transparansi dan akuntabilitas platform digital agar tata kelola ruang digital semakin dipercaya publik. Menurut Meutya, kepercayaan masyarakat merupakan modal utama bagi pertumbuhan ekonomi digital yang berkelanjutan.

                            Melalui pilar Tumbuh, Indonesia memanfaatkan bonus demografi sebagai kekuatan utama dalam membangun ekonomi digital. Sebanyak 68 persen penduduk Indonesia berada pada usia produktif. Indonesia juga tercatat masuk dalam 10 besar dunia untuk minat terhadap AI generatif, sementara lebih dari 70 persen organisasi telah mengadopsi teknologi kecerdasan artifisial dalam berbagai aktivitasnya.

                            Untuk memastikan perkembangan AI berlangsung secara etis dan bertanggung jawab, pemerintah tengah menyelesaikan Peraturan Presiden tentang Tata Kelola AI yang akan menjadi dasar Peta Jalan AI Nasional. Regulasi tersebut diharapkan memberikan kepastian hukum bagi inovasi dan investasi, sekaligus memastikan pemanfaatan AI tetap selaras dengan nilai-nilai Indonesia dan berorientasi pada kepentingan publik.

                            "Tujuan kami bukan hanya menciptakan pengguna AI. Kami ingin melahirkan inovator, pencipta, dan pemimpin AI yang bertanggung jawab. Indonesia ingin menjadi bagian dari pembentuk masa depan digital dunia, bukan sekadar menjadi pasar teknologi," pungkas Meutya.
                            TEXT
            ],
            [
                'title' => 'North Hub Bidik Produksi 1.000 MMSCFD Gas, Buka Lebih dari 8.000 Lapangan Kerja',
                'author_id' => 9,
                'category_id' => 3,
                'level_id' => 4,
                'slug' => 'north-hub-bidik-produksi-1000-mmscfd-gas-buka-lebih-dari-8000-lapangan-kerja',
                'body' => <<<'TEXT'
                            TANJUNG BALAI KARIMUN - Di tengah aktivitas galangan kapal di Tanjung Balai Karimun, pemotongan baja pertama menjadi penanda dimulainya pembangunan FPSO Bahtera Haluan Lestari, fasilitas kunci dalam North Hub Development Project. Proyek gas bernilai US$11,8 miliar ini ditargetkan mampu memproduksi 1.000 MMSCFD gas dan 80.000 BCPD kondensat pada kuartal IV 2028, serta membuka lebih dari 8.000 lapangan kerja bagi masyarakat Indonesia.

                            Kepala SKK Migas Djoko Siswanto mengatakan produksi North Hub diharapkan menjadi salah satu penopang pencapaian target produksi minyak dan gas bumi nasional pada 2030. Pemerintah menargetkan produksi nasional mencapai 1 juta barel minyak per hari dan 12 miliar kaki kubik gas per hari.

                            "Kita berharap proyek ini tidak hanya membantu, tetapi menjadi mesin penggerak utama dalam mencapai target produksi nasional di tahun 2030 yang telah ditetapkan Pemerintah, yaitu 1 juta barel minyak per hari dan 12 miliar kaki kubik gas per hari," kata Djoko di Tanjung Balai Karimun, Kepulauan Riau, Kamis (23/7/2026).

                            North Hub Development Project mengintegrasikan pengembangan Lapangan Geng North dan Lapangan Gehem di Cekungan Kutai, lepas pantai Kalimantan Timur. Proyek hulu migas ultra-dalam tersebut memiliki total nilai investasi US$11,8 miliar.

                            Dari total investasi itu, sekitar US$2,9 miliar dialokasikan untuk pembangunan Floating Production Storage and Offloading atau FPSO Bahtera Haluan Lestari. Pembangunan fasilitas tersebut telah memasuki fase konstruksi yang ditandai dengan pemotongan baja pertama bagian topside di Tanjung Balai Karimun.

                            Menurut Djoko, nilai investasi tersebut menunjukkan sektor hulu migas Indonesia masih memiliki daya tarik bagi investor. Keterlibatan industri fabrikasi dalam negeri juga dinilai mencerminkan kemampuan nasional dalam mengerjakan proyek berskala besar dan berteknologi tinggi.

                            "North Hub Development Project Selat Makassar merupakan Proyek Strategis Nasional (PSN) hulu migas yang pengembangannya tidak hanya berperan dalam memperkuat ketahanan energi nasional, tetapi juga mendorong pertumbuhan ekonomi, menciptakan lapangan kerja, serta meningkatkan kapasitas industri fabrikasi lepas pantai di dalam negeri. Pengembangan proyek ini juga membuka lebih dari 8.000 lapangan kerja baru bagi masyarakat Indonesia," jelasnya.

                            Direktur Eni North Ganal Ltd Mirko Araldi mengatakan pihaknya berkomitmen memenuhi target produksi perdana pada 2028. Menurut dia, pencapaian proyek hingga memasuki tahap konstruksi merupakan hasil kerja sama berbagai pihak untuk menghadirkan pasokan energi yang andal bagi Indonesia.

                            Pemerintah melalui Kementerian ESDM akan terus mendorong pengembangan lapangan migas strategis, terutama sumber daya gas yang berperan sebagai energi transisi. Ketepatan jadwal pembangunan North Hub akan menentukan kontribusi proyek tersebut terhadap ketahanan energi dan pencapaian target produksi migas nasional.
                            TEXT
            ],
            [
                'title' => 'Bus H2 DDF dan Koridor Jakarta–Patimban, Tandai Babak Baru Ekosistem Hidrogen Indonesia',
                'author_id' => 3,
                'category_id' => 4,
                'level_id' => 1,
                'slug' => 'bus-h2-ddf-dan-koridor-jakarta-patimban-tandai-babak-baru-ekosistem-hidrogen-indonesia',
                'body' => <<<'TEXT'
                            JAKARTA - Dari armada bus diesel yang dimodifikasi hingga koridor hidrogen sepanjang 194 kilometer, Indonesia mulai membawa pengembangan hidrogen dari tahap perencanaan menuju penerapan di lapangan. Langkah itu ditandai dengan peluncuran Pilot Bus Hidrogen Diesel Dual Fuel atau Bus H2 DDF serta pengembangan Green Hydrogen Corridor yang menghubungkan Jakarta, Karawang, dan Patimban.

                            Kedua inisiatif tersebut diperkenalkan dalam Global Hydrogen Ecosystem Summit (GHES) 2026 yang berlangsung pada 21-23 Juli 2026 di Jakarta International Convention Center (JICC). Forum ini mempertemukan pemerintah, badan usaha, industri, akademisi, investor, lembaga riset, dan mitra internasional untuk mempercepat pembangunan ekosistem hidrogen nasional. Selasa (21/7).

                            Menteri Energi dan Sumber Daya Mineral (ESDM) Bahlil Lahadalia menilai hidrogen tidak hanya berperan dalam transisi energi, tetapi juga berpotensi memperkuat kemandirian dan swasembada energi nasional serta penguatan hilirisasi dan industrialisasi nasional.

                            "Pengembangan hidrogen selaras dengan arahan Asta Cita Presiden Prabowo Subianto. Hidrogen merupakan energi alternatif yang sangat penting di tengah kondisi geopolitik global yang tidak menentu, seperti konflik di Timur Tengah yang melahirkan ketidakpastian. Kondisi ini memaksa setiap negara untuk memproteksi kebutuhan energi nasionalnya dengan memanfaatkan keunggulan komparatif masing-masing," ujar Bahlil mengawali sambutannya.

                            Menurut Bahlil, melalui pembangunan ekosistem hidrogen yang terintegrasi dari hulu hingga hilir, Indonesia tidak hanya menghasilkan energi bersih, tetapi juga menciptakan nilai tambah di dalam negeri, meningkatkan daya saing industri nasional, menarik investasi, serta membuka peluang kerja dan pertumbuhan ekonomi baru yang berkelanjutan.

                            Namun, Bahlil mengakui pengembangan hidrogen masih menghadapi tantangan, terutama biaya yang belum kompetitif dibandingkan dengan sumber energi lain, termasuk bahan bakar B50.

                            "Masih mahalnya energi berbasis hidrogen menjadi tantangan untuk kita semua dalam rangka bagaimana mendapatkan teknologi yang lebih efisien agar lebih kompetitif. Tetapi keyakinan saya dengan perang terus terjadi, dengan geopolitik yang tidak menentu dan tidak lagi gampang untuk kita mendapatkan minyak di blok-blok yang baru, maka tidak akan lama lagi harga hidrogen akan jauh lebih kompetitif dengan sumber-sumber BBM minyak lainnya," jelas Bahlil.

                            Direktur Jenderal Energi Baru, Terbarukan, dan Konservasi Energi (EBTKE) Eniya Listiani Dewi mengatakan pengembangan hidrogen diarahkan untuk mendukung dekarbonisasi sektor industri, transportasi, dan ketenagalistrikan, sekaligus mengurangi ketergantungan terhadap bahan bakar fosil.

                            "Saat ini kami mempunyai 93 inisiatif pengembangan ekosistem hidrogen yang proyek-proyeknya tersebar di seluruh Indonesia dan melahirkan investasi sebesar Rp32 triliun," ujar Eniya.

                            Pemerintah juga mendorong proyek hidrogen dalam program dedieselisasi, antara lain di Sumba yang ditargetkan mencapai commercial operation date (COD) pada 2028 serta di Pulau Rote melalui kerja sama dengan PLN. Program tersebut diproyeksikan menurunkan biaya produksi listrik dari 1 dollar AS menjadi 25 sen dollar AS per kilowatt hour.

                            Bus H2 DDF Jadi Langkah Awal Transportasi Hidrogen

                            Salah satu penerapan teknologi yang diperkenalkan dalam GHES 2026 ialah Pilot Bus H2 DDF. Bus bermesin diesel milik Perum DAMRI tersebut dimodifikasi agar dapat menggunakan kombinasi bahan bakar solar dan gas hidrogen.

                            Program itu dikembangkan melalui kerja sama Kementerian ESDM, PT PLN (Persero), dan Perum DAMRI. Pelaksanaannya didukung PT SUCOFINDO (Persero) sebagai lembaga pengujian, inspeksi, dan sertifikasi independen serta PT Tritunggal Prakarsa Global sebagai pelaksana proyek percontohan bus.

                            Direktur Utama PT SUCOFINDO (Persero) Sandry Pasambuna mengatakan pihaknya bertugas memastikan penerapan teknologi H2 DDF pada bus DAMRI memenuhi aspek keselamatan, keandalan, dan kesesuaian teknis.

                            "Sebagai perusahaan Testing, Inspection, Certification and Consultation (TICC), SUCOFINDO berperan sebagai pihak independen yang memastikan implementasi teknologi H2 DDF pada Bus DAMRI memenuhi aspek keselamatan, keandalan, dan kesesuaian teknis," ujar Sandry.

                            Menurut Sandry, proses verifikasi dan assurance diperlukan agar teknologi hidrogen dapat diterapkan secara aman, terukur, dan sesuai dengan standar yang berlaku.

                            Bus H2 DDF dilengkapi 16 tabung penyimpanan hidrogen berkapasitas masing-masing 50 liter. Tabung itu memiliki tekanan nominal 200 bar dan tekanan kerja 150 bar, sementara sistem hidrogen dipasang pada bus Hino bermesin diesel enam silinder berkapasitas 7.684 cc.

                            Berdasarkan pengujian PT SUCOFINDO (Persero), sistem H2 DDF dilaporkan menurunkan emisi opasitas sebesar 57,66 persen, karbon monoksida sebesar 45,45 persen, karbon dioksida sebesar 39,37 persen, serta nitrogen oksida sebesar 21,16 persen.

                            Pilot bus tersebut dikembangkan untuk mengurangi penggunaan BBM solar, menggantikan sebagian bahan bakar fosil dengan hidrogen, dan menekan emisi gas buang tanpa harus langsung mengganti seluruh armada yang telah beroperasi.
                            TEXT
            ],
            [
                'title' => 'Gas Masela Mengalir, Pemerintah Tetapkan Minimal 60 Persen Gas untuk Domestik',
                'author_id' => 3,
                'category_id' => 3,
                'level_id' => 2,
                'slug' => 'gas-masela-mengalir-pemerintah-tetapkan-minimal-60-persen-gas-untuk-domestik',
                'body' => <<<'TEXT'
                            SAUMLAKI-KEPULAUAN TANIMBAR - Dari kawasan Laut Arafura, gas Lapangan Abadi Blok Masela dipersiapkan untuk menggerakkan kebutuhan energi dan industri di dalam negeri. Pemerintah menetapkan sedikitnya 60 persen produksi gas proyek tersebut dialokasikan untuk kebutuhan domestik, termasuk industri pupuk, kelistrikan, dan hilirisasi, sementara porsi ekspor dibatasi maksimal 40 persen.

                            Menteri Energi dan Sumber Daya Mineral (ESDM) Bahlil Lahdalia menyampaikan kebijakan tersebut dalam laporannya kepada Presiden sebelum pelaksanaan peletakan batu pertama Proyek LNG Abadi Masela di Pulau Yamdena, Kabupaten Kepulauan Tanimbar, Maluku, Kamis (16/7).

                            "Kita akan alokasikan produksi gas Blok Masela 60 persen minimal untuk memenuhi kebutuhan domestik dan 40 persen maksimal untuk kita melakukan ekspor. Di mana sebagian kita akan memakai untuk hilirisasi daripada PT Pupuk yang berencana akan membangun industri hilirisasi di sini," ujar Bahlil.

                            Selain untuk mendukung industri pupuk, sebagian gas Blok Masela juga akan dialokasikan kepada PT PLN, PGN, dan sejumlah perusahaan swasta. Pemanfaatan gas tersebut diarahkan untuk meningkatkan nilai tambah serta mendorong pertumbuhan ekonomi di daerah.

                            "Setelah pupuk, kemudian kita akan menyerahkan sebagian kepada PLN, PGN, dan beberapa perusahaan swasta yang sekaligus untuk meningkatkan nilai tambah dalam rangka mendorong penciptaan nilai ekonomi di daerah," lanjutnya.

                            Kementerian Energi dan Sumber Daya Mineral bersama SKK Migas memastikan alokasi gas domestik telah masuk dalam rencana pengembangan lapangan atau Plan of Development (PoD) untuk memenuhi peningkatan kebutuhan gas bumi, terutama sektor industri, pupuk, dan pembangkit listrik.

                            Lapangan Gas Abadi Blok Masela merupakan salah satu Proyek Strategis Nasional yang berlokasi sekitar 180 kilometer lepas pantai Pulau Yamdena, Laut Arafura, dengan kedalaman laut 400-800 meter. Kontrak Kerja Sama (PSC) Wilayah Kerja Masela berlaku sejak 1998 hingga 2055. Lapangan ini direncanakan menghasilkan 9,5 juta ton LNG per tahun atau million tonnes per annum (MTPA), 150 juta kaki kubik standar gas pipa per hari atau million standard cubic feet per day (MMSCFD), serta 35.000 barel kondensat per hari.

                            Pengembangan Blok Masela mencakup sistem pengeboran dan produksi bawah laut, fasilitas Floating Production Storage and Offloading (FPSO), pipa gas ekspor sepanjang sekitar 175 kilometer, serta kilang LNG di darat. Proyek ini juga direncanakan menerapkan teknologi Carbon Capture and Storage (CCS) dalam produksi LNG untuk mendukung pengurangan emisi karbon dan upaya pemerintah menjalankan transisi energi.

                            Dengan komposisi alokasi yang telah disiapkan, produksi gas Blok Masela diharapkan dapat memenuhi kebutuhan sejumlah sektor di dalam negeri tanpa menutup peluang ekspor. Pelaksanaannya tetap bergantung pada kesiapan proyek, realisasi fasilitas pengolahan, dan penyerapan gas oleh calon pengguna domestik.
                            TEXT
            ],
            [
                'title' => 'Indonesia Accelerates Digital Transformation with Focus on Public Impact',
                'author_id' => 3,
                'category_id' => 5,
                'level_id' => 3,
                'slug' => 'indonesia-accelerates-digital-transformation-with-focus-on-public-impact',
                'body' => <<<'TEXT'
                            Jakarta: Indonesia’s Ministry of Communication and Digital Affairs will accelerate its national digital transformation agenda in 2026, prioritizing the optimization of existing infrastructure to deliver programs with direct and measurable benefits for the public, Deputy Minister Nezar Patria said.

                            Patria said the ministry has established a solid policy foundation and must now move swiftly to execution, calling for faster, more precise and bolder decision-making while maintaining accountability.

                            “We must work faster, more precisely, and be bolder in our decisions, while still upholding accountability,” Patria said in a statement, as quoted by Antara on Friday.

                            He emphasized that digital infrastructure should function as a key driver of economic growth and a tool to improve the quality of human resources across regions.

                            To achieve these goals, Patria said the ministry must encourage a shift in bureaucratic culture toward greater responsiveness, adaptability and a stronger focus on measurable outcomes.

                            Among the remaining priorities, he highlighted the expansion of 4G cellular coverage in remote and underserved villages, as well as the strengthening of digital talent development, particularly in the field of artificial intelligence.

                            Patria added that supervision of the digital space will also be reinforced, alongside the full implementation of Government Regulation No. 17 of 2025 on electronic system governance for child protection.

                            To ensure the 2026 agenda stays on track, the ministry has carried out internal consolidation through the signing of Performance Agreements and Employee Performance Targets for the year.

                            The agreements are intended to ensure that budget spending results in clear, measurable outputs that directly benefit the public.

                            Ministry Secretary General Ismail said signing the documents early in the year is a strategic step to align all work units with shared priorities.

                            “These documents ensure that from the start of 2026, every employee understands their targets and what must be delivered,” Ismail said.

                            He added that the ministry remains committed to implementing the president’s vision and policies as outlined in the 2025–2029 National Medium-Term Development Plan and the ministry’s strategic plan.
                            TEXT
            ],
            [
                'title' => 'Ekonomi Eropa Terancam Resesi',
                'author_id' => 10,
                'category_id' => 3,
                'level_id' => 4,
                'slug' => 'ekonomi-eropa-terancam-resesi',
                'body' => <<<'TEXT'
                            Brussel: Ekonomi Eropa mendekati titik kritis karena inflasi energi yang kembali meningkat, aktivitas manufaktur yang melambat, dan dukungan fiskal yang terbatas meningkatkan risiko resesi teknis.

                            Menurut BCA Research yang dilansir dari Investing, Minggu, 26 Juli 2026, prospek Eropa tetap seimbang. Satu skenario menunjukkan dua kuartal berturut-turut mengalami kontraksi, meskipun beberapa sumber ketahanan dapat menjaga pertumbuhan tetap sedikit positif.

                            Zona euro memasuki guncangan energi terbaru dalam posisi yang lebih lemah dibandingkan tahun 2022. Konsensus memperkirakan pertumbuhan tahun 2026 mendekati 1,2 persen sebelum konflik yang kembali terjadi di sekitar Selat Hormuz mendorong harga minyak dan gas alam lebih tinggi.

                            Aktivitas manufaktur sejak itu melambat, dengan indeks manajer pembelian komposit sekarang konsisten dengan penurunan triwulanan dalam produk domestik bruto. Pemerintah Eropa telah mengalokasikan kurang dari 12 miliar euro pada pertengahan Juni untuk melindungi rumah tangga dari kenaikan biaya energi, jauh di bawah dukungan yang ditawarkan selama krisis sebelumnya.

                            Inflasi juga mungkin terbukti lebih persisten daripada yang diperkirakan. Harga gas alam TTF Belanda telah meningkat lebih dari dua kali lipat sejak awal tahun, dengan kekurangan pupuk dan El Niño yang kuat mengancam tekanan harga pangan lebih lanjut.

                            Konsumen tampaknya tidak mungkin mengimbangi aktivitas yang lebih lemah. Pertumbuhan upah riil secara umum datar selama kuartal pertama dan dapat menjadi negatif karena inflasi mengikis daya beli. Pasar tenaga kerja yang lebih lemah juga dapat mendorong rumah tangga untuk membatasi pengeluaran.

                            Eropa masih memiliki beberapa pertahanan
                            
                            Neraca keuangan rumah tangga dan perusahaan lebih kuat daripada sebelum krisis keuangan global, didukung oleh biaya pembayaran utang yang lebih rendah dan kepemilikan aset likuid yang lebih tinggi.

                            Gangguan energi tahun ini juga kurang parah dibandingkan guncangan tahun 2022. Harga gas Eropa mencapai puncaknya di 62 euro per megawatt-jam, dibandingkan dengan 339 euro pada Agustus 2022, tanpa kekurangan pasokan yang nyata.

                            Siklus manufaktur global yang tangguh dan investasi terkait AI mendukung produsen barang modal Eropa. Perbaikan dinamika neraca pembayaran juga dapat menyisakan lebih banyak dana yang tersedia untuk aktivitas domestik.

                            Momentum ekuitas jangka pendek tetap konstruktif, meskipun risiko jangka menengah lebih menguntungkan sektor Energi, Farmasi, dan Utilitas. EUR/USD dapat turun menuju 1,10 hingga 1,12 karena pertumbuhan AS yang lebih kuat terus mendukung dolar.
                            TEXT
            ],
            [
                'title' => 'Akselerasi Industri Hijau, Pemerintah Disarankan Beri Insentif',
                'author_id' => 10,
                'category_id' => 3,
                'level_id' => 1,
                'slug' => 'akselerasi-industri-hijau-pemerintah-disarankan-beri-insentif',
                'body' => <<<'TEXT'
                            Jakarta: Direktur Eksekutif Center of Economic and Law Studies (Celios) Bhima Yudhistira menilai percepatan transformasi industri hijau, khususnya di industri kecil dan menengah (IKM), membutuhkan pendekatan berbasis insentif agar mengakselerasi transisi dari para pengusaha IKM.

                            Bhima menyampaikan pemerintah perlu menghadirkan dukungan konkret bagi IKM melalui berbagai instrumen, seperti pembiayaan berbunga rendah untuk investasi mesin hemat energi, dukungan sertifikasi hijau yang masih memiliki biaya tinggi, hingga pemberian insentif pajak bagi pelaku usaha yang mampu menekan emisi maupun limbah.

                            "Karena itu, pendekatannya tidak bisa hanya berupa regulasi atau kampanye, tetapi harus diikuti insentif yang tepat sasaran," katanya dikutip dari Antara di Jakarta, Minggu, 26 Juli 2026.

                            Bhima menyampaikan IKM memiliki peran strategis dalam mendorong industri hijau yang inklusif, mengingat sektor tersebut memiliki kontribusi besar terhadap penyerapan tenaga kerja serta berpotensi masuk dalam rantai pasok global.

                            "IKM jadi kunci percepatan transformasi industri hijau yang padat karya. Potensinya besar untuk pasar ekspor terutama di rantai pasok makanan minuman sampai komponen otomotif yang rendah karbon," ujarnya.

                            Penguatan SDM hingga pemanfaatan teknologi
                            
                            Selain dukungan finansial, ia menilai penguatan kapasitas sumber daya manusia juga menjadi faktor penting dalam mempercepat transformasi hijau IKM.

                            Banyak pelaku usaha yang masih membutuhkan pendampingan dalam menghitung efisiensi energi, mengelola limbah, serta menerapkan prinsip produksi sirkular.

                            Bhima juga melihat pemanfaatan teknologi digital dan kecerdasan buatan (AI) dapat membantu IKM mengoptimalkan penggunaan energi dan bahan baku secara lebih efisien.

                            Bhima menyampaikan pemerintah perlu menghadirkan dukungan konkret bagi IKM melalui berbagai instrumen, seperti pembiayaan berbunga rendah untuk investasi mesin hemat energi, dukungan sertifikasi hijau yang masih memiliki biaya tinggi, hingga pemberian insentif pajak bagi pelaku usaha yang mampu menekan emisi maupun limbah.

                            "Karena itu, pendekatannya tidak bisa hanya berupa regulasi atau kampanye, tetapi harus diikuti insentif yang tepat sasaran," katanya dikutip dari Antara di Jakarta, Minggu, 26 Juli 2026.

                            Bhima menyampaikan IKM memiliki peran strategis dalam mendorong industri hijau yang inklusif, mengingat sektor tersebut memiliki kontribusi besar terhadap penyerapan tenaga kerja serta berpotensi masuk dalam rantai pasok global.

                            "IKM jadi kunci percepatan transformasi industri hijau yang padat karya. Potensinya besar untuk pasar ekspor terutama di rantai pasok makanan minuman sampai komponen otomotif yang rendah karbon," ujarnya.

                            Penguatan SDM hingga pemanfaatan teknologi
                            
                            Selain dukungan finansial, ia menilai penguatan kapasitas sumber daya manusia juga menjadi faktor penting dalam mempercepat transformasi hijau IKM.

                            Banyak pelaku usaha yang masih membutuhkan pendampingan dalam menghitung efisiensi energi, mengelola limbah, serta menerapkan prinsip produksi sirkular.

                            Bhima juga melihat pemanfaatan teknologi digital dan kecerdasan buatan (AI) dapat membantu IKM mengoptimalkan penggunaan energi dan bahan baku secara lebih efisien.
                            TEXT
            ],
            [
                'title' => 'Hari Mangrove Sedunia 2026, BRI Peduli Libatkan Kelompok Tani Lokal Tanam 24.000 Mangrove untuk Pulihkan Ekosistem Pesisir',
                'author_id' => 4,
                'category_id' => 4,
                'level_id' => 2,
                'slug' => 'hari-mangrove-sedunia-2026-bri-peduli-libatkan-kelompok-tani-lokal-tanam-24-000-mangrove-untuk-pulihkan-ekosistem-pesisir',
                'body' => <<<'TEXT'
                            Karawang: Dalam rangka memperingati Hari Mangrove Sedunia yang diperingati setiap 26 Juli, BRI Peduli selaku payung dari Program Tanggung Jawab Sosial dan Lingkungan (TJSL) PT Bank Rakyat Indonesia (Persero) Tbk kembali menegaskan komitmennya terhadap keberlanjutan lingkungan melalui penanaman 24.000 pohon mangrove.  

                            Kegiatan ini dilaksanakan di kawasan pesisir Dusun Sompek, Desa Tanjungpakis, Kec. Pakisjaya, Kabupaten Karawang, Jawa Barat dan melibatkan kelompok tani setempat, yaitu Kelompok Tani dan Nelayan Cemara Laut. 

                            Program ini bertujuan memulihkan kawasan pesisir yang mengalami abrasi serta membangun benteng alami guna mencegah erosi, gelombang pasang, dan intrusi air laut, mengoptimalkan fungsi mangrove sebagai penyerap karbon biru (blue carbon) yang efektif guna mendukung target iklim nasional dan penerapan prinsip Environmental, Social, and Governance (ESG).

                            Selain itu, kegiatan ini juga diharapkan dapat menjaga, serta meningkatkan keberlanjutan mata pencaharian nelayan dan petambak lokal melalui keterlibatan langsung dalam kegiatan penanaman dan pemeliharaan.

                            Sebagai informasi, penanaman mangrove di kawasan pesisir Karawang merupakan bagian dari program BRI Menanam-Grow & Green dari BRI Peduli dimana hingga saat ini tercatat sebanyak 99.500 pohon mangrove dan cemara laut telah ditanam di wilayah Muara Gembong, Tuban, Rote Ndao dan Tanjung Pakis Karawang. 

                            Secara keseluruhan, program ini memberi dampak pada potensi penurunan emisi karbon sebesar 55.84 ton/55.84661 kilogram sekaligus mempertegas komitmen BRI dalam menerapkan prinsip ESG sekaligus memberikan kontribusi nyata bagi pemulihan ekosistem pesisir Indonesia.

                            Ketua Kelompok Tani Cemara Laut Karawang Atam mengungkapkan, kolaborasi dengan BRI memperkuat semangat masyarakat dalam menjaga lingkungan pesisir secara gotong royong. Melalui program BRI Peduli-Grow & Green, kelompoknya tidak hanya memperoleh dukungan dalam kegiatan penanaman mangrove, tetapi juga semakin termotivasi untuk terus merawat mangrove yang telah ditanam.

                            Bagi Atam, mangrove bukan sekadar tanaman yang tumbuh di tepi pantai. Keberadaannya menjadi pelindung alami yang mampu mengurangi abrasi, meredam gelombang laut, sekaligus menjadi habitat bagi berbagai biota pesisir yang mendukung kehidupan masyarakat nelayan.

                            "Saya tinggal di sini sudah cukup lama. Dahulu ombaknya masih terasa kecil. Semakin ke sini, semakin dekat dan semakin besar. Jadi bagi kami mangrove itu penting karena mencegah abrasi di sepanjang pesisir pantai, meredam gelombang laut, dan menjaga biota laut," ungkap Atam.

                            Atam juga menambahkan, BRI Peduli 'Grow & Green' bukan hanya menjadi program penanaman mangrove, tetapi juga menjadi penguat semangat masyarakat dalam menjaga lingkungan pesisir. Kolaborasi ini diharapkan terus menghadirkan manfaat bagi ekosistem mangrove, melindungi kawasan pantai dari abrasi, serta mewariskan lingkungan yang lebih hijau dan lestari bagi generasi mendatang.

                            "Alhamdulillah, BRI Peduli datang lewat program Grow & Green. Kami jadi merasa tidak sendiri. Bersama program ini, kami dan kawan-kawan bisa merawat dan menanam mangrove," ujar Atam.

                            Ia berharap kolaborasi yang telah dibangun oleh kelompok tani setempat dengan BRI Peduli melalui program ini bisa terus dijaga dan dipelihara oleh masyarakat setempat hingga akhirnya bisa berguna bagi keberlanjutan hidup generasi penerus dan anak cucu di wilayahnya.

                            Pada kesempatan terpisah, Corporate Secretary BRI Dhanny mengungkapkan BRI secara konsisten terus mendukung pelestarian alam dalam menjaga pesisir pantai dari abrasi serta mengembalikan habitat hutan mangrove yang ada di Tanah Air. 

                            "Hutan mangrove bertindak sebagai benteng alami kawasan pesisir yang efektif mencegah abrasi pantai, menahan gelombang pasang, dan menanggulangi intrusi air laut. Ini merupakan bentuk nyata komitmen BRI dalam menyelamatkan ekosistem pesisir dan tentunya juga memberikan manfaat bagi keberlanjutan kehidupan masyarakat sekitar," ungkap Dhanny.

                            Dhanny menambahkan, program ini tidak hanya berhenti pada kegiatan penanaman semata, namun juga terdapat monitoring dan pengawasan demi hasil maksimal dan berkelanjutan. Dalam pelaksanaannya, BRI berkolaborasi dengan berbagai pihak, termasuk organisasi non-profit dan masyarakat lokal dengan jangka waktu tertentu. Hal ini menunjukkan bentuk nyata dari inisiatif berkelanjutan yang terus dimonitor dan dievaluasi keberhasilannya.

                            "Kami juga memberdayakan kelompok tani setempat, harapannya, program ini menjadi wadah untuk mewujudkan praktik pembangunan berkelanjutan dengan tujuan melestarikan lingkungan, menyerap karbon, memberdayakan masyarakat, dan meningkatkan perekonomian," imbuh Dhanny.
                            TEXT
            ],
                        [
                'title' => 'Danantara Bangun Sistem SDM Terintegrasi di Seluruh Ekosistem BUMN',
                'author_id' => 4,
                'category_id' => 2,
                'level_id' => 3,
                'slug' => 'danantara-bangun-sistem-sdm-terintegrasi-di-seluruh-ekosistem-bumn',
                'body' => <<<'TEXT'
                            Jakarta: COO Danantara Dony Oskaria mengungkapkan saat ini pihaknya sedang membangun sistem pengelolaan sumber daya manusia (SDM) yang terintegrasi dan berstandar kelas dunia di seluruh ekosistem BUMN.

                            "Saya berharap nanti 2028 ke atas, itu seluruh direktur, CEO, dan lain sebagainya, itu adalah orang yang tumbuh dari dalam perusahaan. Inilah yang memastikan nanti keberlanjutan daripada perusahaan kita ke depan," kata Dony yang juga Kepala BP BUMN, dalam keterangan resminya yang dikutip dari Antara di Jakarta, Minggu, 26 Juli 2026.

                            Sistem tersebut diawali dengan penerapan Single Grading System dan Job Value untuk menyelaraskan sistem penilaian serta pengelompokan jabatan di seluruh grup perusahaan. Selain itu, Danantara juga menerapkan Job Requirement dan Competency Matrix sebagai dasar penempatan talenta.

                            Melalui sistem ini, setiap posisi akan diisi berdasarkan kompetensi, kualifikasi, dan hasil asesmen yang objektif sehingga praktik penempatan berdasarkan unsur preferensi tidak lagi memiliki ruang.

                            "Saya berharap nanti 2028 ke atas, itu seluruh direktur, CEO, dan lain sebagainya, itu adalah orang yang tumbuh dari dalam perusahaan. Inilah yang memastikan nanti keberlanjutan daripada perusahaan kita ke depan," kata Dony yang juga Kepala BP BUMN, dalam keterangan resminya yang dikutip dari Antara di Jakarta, Minggu, 26 Juli 2026.

                            Sistem tersebut diawali dengan penerapan Single Grading System dan Job Value untuk menyelaraskan sistem penilaian serta pengelompokan jabatan di seluruh grup perusahaan. Selain itu, Danantara juga menerapkan Job Requirement dan Competency Matrix sebagai dasar penempatan talenta.

                            Melalui sistem ini, setiap posisi akan diisi berdasarkan kompetensi, kualifikasi, dan hasil asesmen yang objektif sehingga praktik penempatan berdasarkan unsur preferensi tidak lagi memiliki ruang.
                            TEXT
            ],
                        [
                'title' => 'Hilirisasi Dinilai Perkuat Posisi RI di Rantai Pasok Global',
                'author_id' => 4,
                'category_id' => 4,
                'level_id' => 4,
                'slug' => 'hilirisasi-dinilai-perkuat-posisi-ri-di-rantai-pasok-global',
                'body' => <<<'TEXT'
                            Jakarta: Menteri Investasi dan Hilirisasi/Kepala BKPM sekaligus Chief Executive Officer Danantara Indonesia Rosan Roeslani mengungkapkan proyek hilirisasi memperkuat posisi Indonesia dalam rantai pasok global.

                            Ia mengatakan proyek hilirisasi yang dikembangkan Vale menunjukkan bahwa pembangunan industri berbasis sumber daya alam dapat menghasilkan nilai tambah yang lebih tinggi sekaligus memperkuat posisi Indonesia dalam rantai pasok global.

                            "Proyek hilirisasi Vale menempatkan standar baru dalam kolaborasi internasional yang selaras dengan kepentingan nasional, yakni membangun kedaulatan sumber daya, membuka lapangan kerja, serta menciptakan nilai tambah tinggi yang mendukung agenda Net Zero Emissions," kata Rosan dalam keterangannya di Jakarta, dikutip dari Antara, Minggu, 26 Juli 2026.

                            Menurutnya, pengembangan kawasan industri berbasis hilirisasi juga menjadi bagian dari strategi membangun ekosistem kendaraan listrik nasional yang mampu menciptakan lapangan kerja, memperkuat kemandirian industri, dan mendukung target transisi energi.

                            Dampak ekonomi proyek tersebut juga diharapkan semakin dirasakan di daerah penghasil nikel, khususnya Sulawesi Tengah.

                            Selain mendorong pertumbuhan industri, pengembangan kawasan industri dinilai dapat memperluas peluang usaha bagi pelaku usaha mikro, kecil, dan menengah (UMKM) serta meningkatkan aktivitas ekonomi masyarakat sekitar.

                            Penguatan rantai pasok industri kendaraan listrik nasional dinilai semakin bergantung pada percepatan hilirisasi nikel melalui pembangunan fasilitas pengolahan berteknologi tinggi.

                            Langkah tersebut tidak hanya meningkatkan nilai tambah mineral di dalam negeri, tetapi juga memperluas investasi, menciptakan lapangan kerja, dan menggerakkan ekonomi daerah.

                            Percepat program hilirisasi
                            
                            Salah satu perkembangan yang dinilai menjadi penanda percepatan hilirisasi adalah kemajuan pembangunan fasilitas High Pressure Acid Leaching (HPAL) Sambalagi milik PT Vale Indonesia, anggota Holding Industri Pertambangan Indonesia MIND ID, di Morowali, Sulawesi Tengah.

                            Proyek yang merupakan bagian dari Indonesia Growth Project (IGP) Morowali dengan nilai investasi sekitar USD2 miliar itu telah memasuki tahapan penting setelah kedatangan komponen utama autoclave. Fasilitas yang dibangun dalam tiga jalur produksi tersebut ditargetkan mencapai first mechanical completion pada akhir 2026.

                            Pengamat tambang dan energi Ferdy Hasiman menilai pembangunan fasilitas HPAL kini menjadi kebutuhan strategis bagi industri nikel seiring meningkatnya permintaan bahan baku baterai kendaraan listrik global.

                            Menurut dia, perusahaan yang mampu mengembangkan fasilitas pemrosesan mineral akan memiliki daya saing lebih tinggi dibandingkan perusahaan yang masih mengandalkan ekspor bahan mentah atau produk bernilai tambah rendah.

                            "Sebagian besar belanja modal perusahaan tambang saat ini memang diarahkan untuk pembangunan HPAL karena fasilitas ini akan menjadi tulang punggung ekosistem kendaraan listrik. Sejauh ini, MIND ID melalui Vale termasuk yang paling agresif mengembangkan proyek tersebut," ujar Ferdy.

                            Ia menambahkan pemerintah bersama Danantara Indonesia juga terus mempercepat agenda hilirisasi melalui dukungan investasi pada proyek-proyek strategis. Menurutnya, konsistensi investasi menjadi faktor penting untuk menjaga daya saing Indonesia di tengah persaingan global dalam industri baterai dan kendaraan listrik.

                            "Beberapa perusahaan nikel swasta memang tidak terlalu agresif dalam dua tahun terakhir, kemungkinan dipengaruhi dinamika regulasi. Karena itu, keberlanjutan proyek-proyek hilirisasi menjadi penting untuk menjaga momentum investasi," katanya.

                            Selain memperkuat industri pengolahan mineral, proyek hilirisasi juga dinilai memiliki dampak ekonomi yang lebih luas melalui peningkatan aktivitas usaha di daerah, penyerapan tenaga kerja, serta tumbuhnya rantai pasok lokal yang melibatkan pelaku usaha domestik.
                            TEXT
            ],
                        [
                'title' => 'Penguatan Transformasi Tata Kelola Pendidikan melalui Manajamen Berbasis Sekolahh',
                'author_id' => 6,
                'category_id' => 2,
                'level_id' => 1,
                'slug' => 'penguatan-transformasi-tata-kelola-pendidikan-melalui-manajamen-berbasis-sekolahh',
                'body' => <<<'TEXT'
                            Jakarta, Kemendikdasmen – Kementerian Pendidikan Dasar dan Menengah (Kemendikdasmen) terus memperkuat implementasi Manajemen Berbasis Sekolah (MBS) sebagai fondasi transformasi tata kelola satuan pendidikan. Upaya tersebut dilakukan melalui Webinar Seri Manajemen Berbasis Sekolah Jenjang SMP Tahun 2026 bertajuk "Mengenal MBS, Memahami Konsep Pengelolaan Sekolah yang Berkualitas" yang diselenggarakan oleh Direktorat Sekolah Menengah Pertama (Direktorat SMP) pada Jumat (10/7). 

                            Sebagai pembicara kunci, Direktur Jenderal Pendidikan Anak Usia Dini, Pendidikan Dasar, dan Pendidikan Nonformal (Dirjen PAUD PNFI), Gogot Suharwoto menegaskan bahwa kualitas pendidikan di Indonesia masih menghadapi berbagai tantangan sehingga transformasi pendidikan perlu terus diperkuat. Salah satu fondasi penting dalam transformasi tersebut adalah MBS yang memberikan ruang lebih luas kepada satuan pendidikan untuk mengelola pembelajaran sesuai karakteristik, kebutuhan, dan potensi masing-masing sekolah.

                            "MBS merupakan salah satu fondasi penting dalam transformasi pendidikan. Sejalan dengan hal tersebut, diperlukan ruang yang lebih luas bagi satuan pendidikan untuk mengelola pembelajaran sesuai dengan karakteristik masing-masing. Oleh karena itu, diperlukan reorientasi penyelenggaraan pendidikan dari pendekatan yang bersifat sentralistik menuju Manajemen Berbasis Sekolah," ungkap Dirjen PAUD PNFI, Gogot Suharwoto.

                            Gogot menambahkan, implementasi MBS juga mendorong perubahan paradigma kepemimpinan kepala sekolah dari pengelola administrasi menjadi pemimpin transformasional yang mampu membangun visi sekolah, mengambil keputusan berbasis data, mengelola inovasi, dan membangun budaya mutu yang positif. Penerapan MBS mengacu pada lima prinsip utama sebagaimana diatur dalam Peraturan Menteri Pendidikan Dasar dan Menengah (Permendikdasmen) Nomor 26 Tahun 2025 tentang Standar Pengelolaan, yaitu kemandirian, kemitraan, partisipasi, keterbukaan, dan akuntabilitas.

                            Selanjutnya, Direktur Sekolah Menengah Pertama, Maulani Mega Hapsari dalam sambutannya mengatakan bahwa MBS bukan merupakan konsep baru, melainkan pendekatan yang terus berkembang mengikuti perubahan kondisi pembelajaran, perkembangan teknologi, serta dinamika masyarakat. Karena itu, Direktorat SMP menghadirkan konsep MBS Reborn sebagai pembaruan implementasi MBS yang mengintegrasikan penguatan karakter, 7 Kebiasaan Anak Indonesia Hebat, Pagi Ceria, kecerdasan artifisial (Artificial Intelligence/AI), dan pemrograman (coding), dan berbagai kebijakan strategis lainnya.

                            "MBS bukanlah konsep yang statis, menyesuaikan dengan perkembangan zaman, karena harus mengikuti apa yang ada di masyarakat dan kebutuhan pendidikan sehingga kebermanfaatannya dapat dirasakan secara optimal oleh seluruh satuan pendidikan," ujar Maulani.

                            Pada pemaparan materi, narasumber Hadiyanto menjelaskan bahwa MBS merupakan pendekatan pengelolaan pendidikan yang menempatkan sekolah sebagai pusat pengambilan keputusan melalui keseimbangan antara otonomi dan akuntabilitas. “Keberhasilan implementasi MBS ditentukan oleh kepemimpinan kepala sekolah, partisipasi warga sekolah dan masyarakat, serta kolaborasi seluruh pemangku kepentingan untuk meningkatkan mutu pembelajaran dan hasil belajar peserta didik,” ujar Hadiyanto.

                            Selain itu, narasumber lainnya Salman Alfarisy Totalia menegaskan bahwa implementasi MBS telah memiliki dasar hukum yang kuat, mulai dari Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional, Peraturan Pemerintah tentang Standar Nasional Pendidikan, hingga Permendikdasmen Nomor 26 Tahun 2025 tentang Standar Pengelolaan. Untuk mendukung implementasinya di satuan pendidikan, Direktorat SMP juga telah menyiapkan buku induk, panduan teknis, bimbingan teknis, dan webinar sebagai media penguatan kapasitas kepala sekolah.

                            Melalui penyelenggaraan Webinar Seri Manajemen Berbasis Sekolah Tahun 2026, Direktorat SMP berharap pemahaman kepala sekolah, pengawas sekolah, pemerintah daerah, dan pemangku kepentingan pendidikan terhadap implementasi MBS semakin kuat. Dengan demikian, satuan pendidikan diharapkan mampu menerapkan tata kelola yang lebih mandiri, partisipatif, transparan, dan akuntabel guna mendukung peningkatan mutu pembelajaran sesuai karakteristik dan kebutuhan masing-masing sekolah.
                            TEXT
            ],
                        [
                'title' => 'Murid Indonesia Raih Empat Medali Perunggu pada International Mathematical Olympiad 2026 di Tiongkok',
                'author_id' => 7,
                'category_id' => 2,
                'level_id' => 2,
                'slug' => 'murid-indonesia-raih-empat-medali-perunggu-pada-internationa',
                'body' => <<<'TEXT'
                            Shanghai, Tiongkok, 25 Juli 2026 – Indonesia kembali mencatatkan prestasi membanggakan di ajang olimpiade sains internasional. Pada 67th International Mathematical Olympiad (IMO) 2026 yang berlangsung di Shanghai, Tiongkok, 10 s.d. 21 Juli 2026, delegasi Indonesia sukses meraih empat medali perunggu dan satu Honorable Mention . Hasil tersebut memperkuat rekam jejak pembinaan talenta matematika yang terus dikembangkan oleh Kementerian Pendidikan Dasar dan Menengah (Kemendikdasmen) melalui Pusat Prestasi Nasional (Puspresnas) di ajang internasional. 

                            Kepala Puspresnas Kemendikdasmen, Maria Veronica Irene Herdjiono, menyampaikan apresiasi atas perjuangan seluruh anggota tim yang telah menunjukkan semangat pantang menyerah, integritas, dan kemampuan terbaiknya selama kompetisi. "Selamat kepada seluruh delegasi Indonesia yang telah mengharumkan nama bangsa pada ajang International Mathematical Olympiad 2026. Setiap capaian yang diraih merupakan buah dari kerja keras para murid, dedikasi para pembina, dukungan sekolah, orang tua, dan seluruh pihak yang telah membersamai proses pembinaan talenta secara berkelanjutan," jelas Irene, Sabtu (25/7). 

                            Empat medali perunggu tersebut dipersembahkan oleh Jayden Jurianto, murid SMAK 1 Penabur Jakarta, Steven Abiel Cahyono, murid SMA Katolik St. Louis 1 Surabaya, Jawa Timur, Danica Odelia, murid SMAK Penabur Gading Serpong, Banten, dan Yusril Ihsan Adinatanegara, murid SMA Negeri 1 Glagah, Banyuwangi, Jawa Timur. Sementara itu, Honorable Mention diraih oleh Matthew Ravanelli Tjiptono, murid SMAK Penabur Banda, Jawa Barat.

                            Sebelum mengikuti IMO 2026, seluruh peserta telah menjalani proses seleksi berjenjang melalui Olimpiade Sains Nasional (OSN) dan mengikuti serangkaian program pembinaan intensif yang diselenggarakan oleh Puspresnas. Pembinaan tersebut dirancang untuk memperkuat penguasaan materi, strategi penyelesaian soal, dan kesiapan mental dalam menghadapi kompetisi internasional.

                            Beberapa waktu lalu, koordinator Pembina IMO 2026, Aleams Barra dari Institut Teknologi Bandung (ITB), mengungkapkan bahwa tingkat kesulitan soal pada IMO 2026 menjadi tantangan tersendiri bagi seluruh peserta dari berbagai negara. Meski demikian, ia mengapresiasi perjuangan para murid Indonesia yang mampu menunjukkan performa terbaiknya. “Tahun ini soal yang diberikan cukup sulit dan menantang. Puji syukur anak-anak bisa mendapatkan empat medali. Kami belajar dari pengalaman tahun ini untuk memperbaiki agar tahun depan bisa lebih baik lagi,” tutur Barra. 

                            Pengalaman mengesankan, disampaikan oleh Jayden Jurianto dari SMAK 1 Penabur Jakarta. Ia menyampaikan bahwa tahun lalu ia meraih medali perunggu International Olympiad in Artificial Intelligence (IOAI) dan sekarang ia berhasil meraih medali perunggu di ajang IMO 2026. 

                            “Bangga bisa berkesempatan mewakili Indonesia kembali ke ajang internasional. Untuk IMO tes dilakukan secara dua hari berturut-turut. Setiap hari itu ada tiga soal,” ungkap Jayden.

                            Hal senada juga diungkapkan oleh Danica Odelia dari SMAK Penabur Gading Serpong, Banten. “Tes berlangsung kondusif dan lancar. Terima kasih kepada Kemendikdasmen dan Puspresnas yang sudah memfasilitasi kami untuk berprestasi hingga ke tingkat internasional,” ujarnya. 

                            Sementara itu, Yusril Ihsan Adinatanegara dari SMA Negeri 1 Glagah, Banyuwangi, juga mengungkapkan rasa syukurnya setiba pulang ke tanah air. “Saya sempat khawatir tidak memperoleh medali tetapi puji syukur saya senang sekali akhirnya bisa meraih medali perunggu di IMO 2026,” kata Yusril. 

                            International Mathematical Olympiad (IMO) merupakan kompetisi matematika paling bergengsi bagi murid jenjang pendidikan menengah di dunia. Pada penyelenggaraan ke-67 tahun ini, kompetisi diikuti oleh 685 peserta dari 119 negara yang bersaing menyelesaikan enam soal matematika tingkat lanjut selama dua hari pelaksanaan.

                            Capaian Indonesia pada IMO 2026 semakin mempertegas komitmen Kemendikdasmen untuk terus membangun ekosistem pembinaan talenta yang berkelanjutan. Melalui dukungan seluruh pemangku kepentingan, diharapkan semakin banyak talenta muda Indonesia yang mampu mengharumkan nama bangsa dan berkontribusi dalam kemajuan ilmu pengetahuan di tingkat global.
                            TEXT
            ],
                        [
                'title' => 'Benchmarking SMK Batam: Upaya Kemendikdasmen Tingkatkan SDM SMK dan Penguatan Kerja Sama Industri',
                'author_id' => 5,
                'category_id' => 2,
                'level_id' => 3,
                'slug' => 'benchmarking-smk-batam-upaya-kemendikdasmen-tingkatkan-sdm-s',
                'body' => <<<'TEXT'
                            Batam, Kepulauan Riau, 25 Juli 2026 – Kementerian Pendidikan Dasar dan Menengah (Kemendikdasmen) melalui Direktorat Sekolah Menengah Kejuruan terus berkomitmen memperkuat pendidikan vokasi, melalui penguatan kerja sama antara Sekolah Menengah Kejuruan (SMK) dengan dunia Industri. 

                            Sebanyak 131 Kepala Sekolah dan Wakil Kepala Sekolah SMK dari Aceh, Sumatra Utara dan Sumatra Barat serta Kota Batam turut berpartisipasi dalam kegiatan Benchmarking SMK Batam. Kegiatan ini menjadi momentum untuk melihat langsung apa yang dibutuhkan dunia industri. Peran aktif dari industri dinilai menjadi kunci dalam percepatan peningkatan mutu Sumber Daya Manusia (SDM) yang siap ke dunia kerja.

                            Kebutuhan industri akan tenaga kerja siap pakai menekankan pada pentingnya penguasaan kompetensi dasar sejak di bangku sekolah. Kepala Bengkel Astra Daihatsu Batam, Andi Suprapto menjelaskan bahwa industri membutuhkan lulusan yang telah memiliki fondasi kuat agar proses adaptasi di dunia kerja berjalan lebih cepat. 

                            "Yang kami butuhkan adalah lulusan yang telah memiliki kemampuan dasar, khususnya pada bidang Teknik Kendaraan Ringan (TKR) dan body repair. Dengan bekal pengetahuan dan keterampilan dasar tersebut, proses pendidikan dan pelatihan di perusahaan dapat berlangsung lebih efektif dan tidak memerlukan waktu yang terlalu lama," jelas Andi saat menerima kunjungan peserta Benchmarking SMK di Batam, Jumat (24/7). 

                            Andi berharap ke depannya lebih banyak lagi SDM unggulan dari SMK yang dapat bergabung di dunia industri. "Harapannya, kami dapat menerima lebih banyak peserta magang dari SMK. Selain kompetensi di bidang Teknik Kendaraan Ringan (TKR), kami juga membutuhkan lulusan pada bidang administrasi, khususnya Administrasi Bisnis. Di Batam, kebutuhan tenaga administrasi cukup tinggi karena banyaknya kawasan pergudangan yang memerlukan tenaga administrasi pergudangan," jelas Andi. 

                            Manajer Virtual Learning PT Labtech Penta Internasional, Ferry, menyatakan dukungannya terhadap berbagai program penguatan kompetensi yang melibatkan dunia industri. Menurutnya, kegiatan Praktik Kerja Lapangan (PKL) merupakan program yang sangat baik karena memberikan kesempatan bagi peserta didik untuk memperoleh pengalaman belajar langsung di lingkungan kerja. Ia juga mengapresiasi berbagai program pemerintah yang bertujuan meningkatkan kompetensi, khususnya bagi peserta didik SMK.

                            "Menurut saya, program ini sangat baik karena mendukung upaya pemerintah dalam meningkatkan kualitas pendidikan vokasi. Program ini juga mendorong peran aktif dunia industri, pemerintah, dan berbagai pemangku kepentingan lainnya untuk berkolaborasi. Pada akhirnya, tujuan utamanya adalah meningkatkan mutu sumber daya manusia (SDM)," jelas Ferry.

                            Dari sisi sekolah, pemenuhan sarana dan prasarana pembelajaran yang relevan dengan perkembangan teknologi menjadi salah satu fokus utama. Selain pengadaan peralatan praktik, pemanfaatan Papan Interaktif Digital (PID) dan simulator berbasis digital juga menjadi alternatif untuk mendukung pembelajaran praktik selama pemenuhan sarana dilakukan secara bertahap.

                            Kepala SMKS Kafilul Yatim Aceh Utara, Fakhrurrazi mengungkapkan bahwa setelah melihat langsung industri-industri di Batam, ternyata masih banyak alat praktik yang belum dimiliki oleh sekolah. "Kami berharap, melalui dukungan Kemendikdasmen, pemerintah daerah, serta berbagai pemangku kepentingan, pemenuhan peralatan praktik di sekolah dapat semakin optimal sehingga pembelajaran yang kami selenggarakan semakin selaras dengan kebutuhan industri," ungkap Fakhrurrazi.

                            Fakhrurrazi juga berharap semakin banyak kerja sama antara SMK dan dunia industri untuk memperluas kesempatan Praktik Kerja Lapangan (PKL) bagi peserta didik. "Kami berharap ke depan semakin banyak kerja sama dengan industri di Batam melalui berbagai bentuk kemitraan sehingga semakin banyak peserta didik SMK yang memperoleh kesempatan mengikuti PKL di berbagai bidang keahlian," harap Fakhrurrazi.

                            Manfaat sinergi antara SMK dan dunia industri juga dirasakan langsung oleh peserta didik yang mengikuti PKL, salah satunya disampaikan oleh Joshua, siswa SMKN 5 Batam, yang mengaku memperoleh pengalaman belajar yang lebih nyata melalui keterlibatan langsung di lingkungan industri. Menurutnya, pembelajaran di dunia kerja memberikan pemahaman yang lebih mendalam dibandingkan hanya mempelajari teori di kelas.

                            "Seru karena saya mendapatkan banyak ilmu baru. Kalau di sekolah, saat praktik terkadang masih terasa sulit dipahami. Namun, ketika belajar langsung di industri, saya bisa melihat dan mencoba proses kerjanya secara langsung sehingga lebih mudah dipahami sedikit demi sedikit," ungkap Joshua dengan penuh semangat.

                            Sejalan dengan arahan Presiden Republik Indonesia mengenai percepatan digitalisasi pembelajaran sebagai bagian dari transformasi pendidikan nasional, Direktorat Sekolah Menengah Kejuruan terus mendorong pemanfaatan teknologi digital untuk memperluas akses sekaligus meningkatkan mutu, relevansi, dan efisiensi pembelajaran praktik di SMK.

                            Salah satu implementasinya adalah mengoptimalkan pemanfaatan Papan Interaktif Digital (PID) sebagai sarana pembelajaran yang tidak hanya digunakan untuk penyampaian materi, tetapi juga sebagai media untuk menjalankan simulator pembelajaran berbasis digital yang mereplikasi proses kerja, peralatan, dan teknologi sesuai kebutuhan dunia usaha dan dunia industri (DUDI).

                            Pemanfaatan simulator digital melalui PID menjadi strategi komplementer dalam pemenuhan sarana praktik SMK, terutama ketika penyediaan peralatan, ruang praktik, dan infrastruktur pendukung dilakukan secara bertahap. Melalui pendekatan ini, peserta didik tetap memperoleh pengalaman belajar yang interaktif, kontekstual, aman, adaptif, dan relevan dengan perkembangan teknologi industri, sebelum memperkuat kompetensinya melalui praktik langsung menggunakan peralatan nyata.

                            Dengan demikian, digitalisasi pembelajaran di SMK tidak dimaknai sekadar sebagai penyediaan perangkat teknologi, tetapi sebagai transformasi proses pembelajaran yang mengintegrasikan pembelajaran digital, simulasi, dan praktik nyata. Pendekatan ini diharapkan mampu meningkatkan efektivitas pemanfaatan sarana pendidikan, memperluas akses terhadap teknologi industri, serta memperkuat kesiapan kompetensi murid agar semakin selaras dengan kebutuhan DUDI.
                            TEXT
            ],
                        [
                'title' => 'Jadwal Perbaikan Tol Jakarta-Cikampek Juli 2026',
                'author_id' => 5,
                'category_id' => 4,
                'level_id' => 4,
                'slug' => 'jadwal-perbaikan-tol-jakarta-cikampek-juli-2026',
                'body' => <<<'TEXT'
                            PT JASAMARGA Transjawa Tol (JTT) melakukan perbaikan jalan tol Jakarta-Cikampek sejak 24-31 Juli 2026. Pekerjaan rekonstruksi perkerasan jalan dilakukan di sejumlah titik pada hari yang berbeda.

                            Senior Manager Representative Office 1 Jasamarga Transjawa Tol Jauzy Anbiya mengatakan perkerasan jalan merupakan bagian dari pemeliharaan rutin. “Untuk menjaga standar pelayanan dan keselamatan pengguna jalan,” katanya dalam keterangan tertulis pada Sabtu, 25 Juli 2026.

                            JTT menyiapkan rekayasa lalu lintas secara situasional dan di sekitar area pekerjaan dilengkapi perlengkapan keselamatan sesuai standar operasional. Informasi perihal perbaikan jalan akan disampaikan melalui Dynamic Message Sign (DMS), media sosial resmi Jasa Marga Group, maupun spanduk imbauan di sekitar lokasi.

                            “JTT terus berupaya melaksanakan pekerjaan secara efektif dengan tetap memperhatikan kelancaran arus lalu lintas di sekitar lokasi pekerjaan,” ujar Jauzy. Berikut lokasi perbaikan jalan di sejumlah titik tol Jakarta-Cikampek beserta jadwalnya:

                            1. On Ramp Cikarang Utara lajur 2: Jumat, 24 Juli, pukul 21.00 WIB hingga Senin, 27 Juli pukul 06.00 WIB.
                            
                            2. On Ramp Cikarang Utara arah Jakarta lajur 1: Jumat, 24 Juli pukul 21.00 WIB hingga Senin, 27 Juli pukul 07.00 WIB.
                            
                            3. KM 26+895 s.d KM 27+075 arah Cikampek lajur 2: Sabtu, 25 Juli pukul 09.00 WIB hingga Jumat, 31 Juli pukul 11.00 WIB.
                            
                            4. KM 34+100 s.d KM 34+317 arah Cikampek lajur 1: Sabtu, 25 Juli pukul 09.00 WIB hingga Jumat, 31 Juli pukul 11.00 WIB.
                            
                            5. KM 31+700 s.d KM 31+568 arah Jakarta lajur 2 dalam: Senin, 27 Juli pukul 00.00 WIB hingga Jumat, 31 Juli pukul 14.00 WIB.
                            
                            Manajemen meminta maaf atas potensi ketidaknyamanan yang dirasakan selama pekerjaan berlangsung. Pengguna jalan diimbau untuk merencanakan perjalanan lebih baik, memastikan kendaraan dan pengemudi dalam kondisi prima, menjaga jarak aman, mematuhi rambu lalu lintas, dan mematuhi arahan petugas.
                            TEXT
            ],
                        [
                'title' => 'Di Forum PBB, Indonesia Dorong Anak Muda Jadi Inovator AI dan Perkuat Perlindungan Anak di Ruang Digital',
                'author_id' => 5,
                'category_id' => 5,
                'level_id' => 1,
                'slug' => 'di-forum-pbb-indonesia-dorong-anak-muda-jadi-inovator-ai-dan-perkuat-perlindungan-anak-di-ruang-digital',
                'body' => <<<'TEXT'
                            Jenewa, 10 Juli 2026 – Indonesia membawa dua agenda besar ke panggung dunia: menyiapkan generasi muda sebagai pencipta teknologi kecerdasan buatan (AI) dan memperkuat perlindungan anak di ruang digital. Di tengah pesatnya adopsi AI dan bonus demografi yang dimiliki, pemerintah menegaskan bahwa transformasi digital harus tumbuh seiring dengan tata kelola yang aman dan bertanggung jawab.

                            Pesan tersebut disampaikan Menteri Komunikasi dan Digital (Menkomdigi) Meutya Hafid saat mewakili Indonesia dalam sesi Leaders TalkX 9 bertema Cyber Confidence: Enhancing Security in the Digital Age pada ajang World Summit on the Information Society (WSIS) Forum 2026 di Jenewa, Swiss, Kamis (9/7/2026).

                            Menurut Meutya, sekitar 68 persen penduduk Indonesia berada pada usia produktif. Modal demografi ini menjadi peluang besar untuk melahirkan talenta digital yang tidak hanya mampu memanfaatkan AI, tetapi juga menciptakan inovasi dan memimpin pengembangannya di tingkat global.

                            “Tujuan akhir kami bukan hanya mempersiapkan generasi muda Indonesia untuk menggunakan AI, tetapi juga memberdayakan mereka untuk mencipta, berinovasi, dan menjadi pemimpin yang bertanggung jawab dalam ekosistem AI dunia,” ujarnya.

                            Saat ini Indonesia telah masuk dalam peringkat 10 besar dunia untuk minat pencarian AI harian. Di dalam negeri, lebih dari 70 persen organisasi dan korporasi lokal juga telah mengadopsi teknologi Generative AI dalam operasional mereka.

                            Untuk memastikan pemanfaatan AI berjalan secara aman dan etis, pemerintah tengah memfinalisasi Peraturan Presiden tentang Tata Kelola AI. Regulasi tersebut akan menjadi pedoman pengembangan ekosistem AI nasional sekaligus memberikan kepastian bagi inovasi dan investasi.

                            Dalam forum yang sama, Indonesia juga menegaskan komitmen memperkuat perlindungan anak di ruang digital. Pemerintah mewajibkan platform digital kategori risiko tinggi menerapkan pembatasan usia, termasuk larangan bagi anak di bawah 16 tahun untuk membuka akun secara mandiri tanpa pengawasan.

                            Sebagai langkah awal implementasi kebijakan tersebut, lebih dari lima juta akun anak-anak telah dinonaktifkan oleh platform digital atas permintaan pemerintah.

                            “Koneksi tanpa perlindungan tidak akan berkelanjutan. Kami tidak hanya membangun ekonomi digital yang lebih cepat, tetapi juga ingin membangun ekosistem dengan tata kelola yang baik dan melindungi warga negara kita,” kata Meutya.

                            Menurut Meutya, pendekatan Indonesia dibangun di atas tiga pilar transformasi digital, yakni konektivitas (connected), pertumbuhan (growing), dan perlindungan (protected). Ketiga pilar tersebut menjadi landasan Indonesia untuk memastikan kemajuan teknologi menghadirkan manfaat ekonomi sekaligus menjamin keamanan dan kesejahteraan masyarakat.
                            TEXT
            ],
            [
                'title' => 'GHES 2026: Tegaskan Komitmen, PLN Terus Bangun Ekosistem Hidrogen Nasional',
                'author_id' => 6,
                'category_id' => 4,
                'level_id' => 2,
                'slug' => 'ghes-2026-tegaskan-komitmen-pln-terus-bangun-ekosistem-hidrogen-nasional',
                'body' => <<<'TEXT'
                            Jakarta (ANTARA) - PT PLN (Persero) menegaskan komitmennya dalam mendorong pengembangan Energi Baru dan Terbarukan (EBT) sekaligus mendukung visi swasembada energi Presiden RI melalui pembangunan ekosistem hidrogen di Tanah Air. Komitmen ini tercermin dalam agenda Global Hydrogren Ecosystem Summit and Exhibition (GHES) 2026 di Jakarta pada Selasa (21/7).

                            Menteri Energi dan Sumber Daya Mineral (ESDM), Bahlil Lahadalia menyampaikan bahwa hidrogen merupakan salah satu alternatif energi yang memiliki peran strategis dalam mendukung transisi dan kemandirian energi sekaligus mendorong hilirisasi sumber daya nasional sesuai Asta Cita Presiden Prabowo Subianto.

                            "Pengembangan hidrogen sejalan dengan arahan Asta Cita Bapak Presiden Prabowo. Hidrogen merupakan energi alternatif yang sangat penting di tengah kondisi geopolitik global yang tidak menentu. Karena hidrogen ini dihasilkan dari air, gas, batu bara, biomassa, bahan baku hidrogen yang ada pada bangsa kita itu tidak perlu diragukan lagi,” ucap Bahlil.

                            Menurut Bahlil, melalui pembangunan ekosistem hidrogen yang terintegrasi dari hulu hingga hilir, Indonesia tidak hanya menghasilkan energi bersih, tetapi juga menciptakan nilai tambah di dalam negeri, meningkatkan daya saing industri nasional, menarik investasi, serta membuka peluang kerja dan pertumbuhan ekonomi baru yang berkelanjutan. Namun, lanjut Bahlil, percepatan pengembangan ekosistem hidrogen nasional juga memerlukan dukungan dari empat faktor utama, yakni kesiapan teknologi, terbentuknya pasar, ketersediaan investasi, serta regulasi yang mampu mempercepat implementasinya.

                            "Yang pertama adalah memang teknologi, yang kedua adalah pasar, yang ketiga memang kita butuh investor, dan yang keempat dalam rangka melakukan percepatan itu dibutuhkan regulasi. Nah pada konteks ini, silakan kita Pemerintah, khususnya Kementerian ESDM, sangat terbuka dalam rangka melakukan diskusi-diskusi, regulasi apa yang dibutuhkan untuk melakukan percepatan yang lebih efisien," jelas Bahlil.

                            Sejalan dengan arah kebijakan tersebut, Direktur Jenderal Energi Baru, Terbarukan, dan Konservasi Energi (EBTKE), Eniya Listiani Dewi menyampaikan, pengembangan hidrogen nasional didorong guna mendukung dekarbonisasi sektor industri, transportasi, dan ketenagalistrikan, sekaligus mengurangi ketergantungan terhadap bahan bakar fosil. 

                            "Saat ini kami mempunyai 93 inisiatif pengembangan ekosistem hidrogen yang proyek-proyeknya tersebar di seluruh Indonesia dan melahirkan investasi sebesar Rp32 triliun," ujar Eniya.

                            Selaras dengan agenda pemerintah, Direktur Utama PLN, Darmawan Prasodjo menjelaskan bahwa pengembangan hidrogen merupakan wujud komitmen PLN dalam mendukung visi besar Presiden Prabowo untuk mencapai swasembada energi nasional.

                            ”Hidrogen merupakan solusi transisi dari energi fosil ke energi masa depan. PLN siap memimpin pengembangan ekosistem hidrogen nasional secara terintegrasi melalui kolaborasi dengan pemerintah, Badan Usaha Milik Negara (BUMN), pelaku industri, akademisi, hingga mitra internasional,” jelas Darmawan.

                            Sebagai upaya konkret, sejak 2023 PLN telah mengoperasikan Green Hydrogen Plant (GHP) pertama di Indonesia yang berada di Pembangkit Listrik Tenaga Gas dan Uap (PLTGU) Muara Karang, Jakarta. Hingga saat ini, total sebanyak 24 GHP di lokasi tersebar se-Indonesia telah dioperasikan.

                            Darmawan menjelaskan, dari seluruh GHP tersebut, PLN dapat memproduksi hidrogen hijau hingga 203,6 ton per tahun, di mana sebanyak 75 ton per tahun dimanfaatkan untuk kebutuhan pendingin generator pembangkit. Sementara selebihnya, sebanyak 128 ton per tahun siap digunakan untuk mendukung berbagai sektor strategis.

                            "PLN siap all out mengekspansi apa yang sudah kami awali di setiap lini, sehingga ekosistem hidrogen nasional dapat terakselerasi. Ini adalah komitmen PLN sebagai pionir ekosistem hidrogen end-to-end di Indonesia,” ujar Darmawan.

                            Tidak hanya menjadi produsen hidrogen hijau, lanjut Darmawan, PLN juga membangun infrastruktur pendukung lain, seperti Hydrogen Refueling Station (HRS) sebagai stasiun pengisian hidrogen dan Hydrogen Center sebagai pusat kompetensi hidrogen pertama di Indonesia. Kolaborasi pun terus dilakukan, salah satunya kerja sama produksi green ammonia dengan Pupuk Kujang, yang kemudian dimanfaatkan pada co-firing di Pembangkit Listrik Tenaga Uap (PLTU) Labuan, Banten.

                            Untuk mengakselerasi ekosistem green hydrogen di Indonesia, PLN juga melakukan beberapa joint study, seperti pengembangan Jakarta Hydrogen Mobility bersama KESDM, TransJakarta, dan DAMRI, serta joint study untuk produksi green hydrogen di Jambi dan Gresik bersama mitra dan Pupuk Indonesia.

                            Darmawan menambahkan, ke depan, PLN akan terus berkolaborasi dengan berbagai pihak guna mengakselerasi pengembangan ekosistem hidrogen di Tanah Air. Melalui langkah kolaboratif, pengembangan hidrogen nantinya dapat mendorong penciptaan peluang ekonomi baru, lapangan kerja ramah lingkungan, serta peningkatan kesejahteraan masyarakat.

                            "Bagi PLN, hidrogen bukan sekadar energi bersih, tetapi industri masa depan yang akan memperkuat ketahanan energi, menarik investasi, dan meningkatkan daya saing Indonesia. Karena itu, kami terus mempercepat kolaborasi agar Indonesia menjadi pemain utama dalam ekonomi hidrogen global,” pungkas Darmawan.
                            TEXT
            ],
            [
                'title' => 'PLN EPI Bidik Pakai Biomassa 10 Juta Ton pada 2030',
                'author_id' => 7,
                'category_id' => 3,
                'level_id' => 3,
                'slug' => 'pln-epi-bidik-pakai-biomassa-10-juta-ton-pada-2030',
                'body' => <<<'TEXT'
                            JAKARTA — PT PLN Energi Primer Indonesia (PLN EPI) membidik peningkatan pemanfaatan biomassa hingga 10 juta ton pada 2030 mendatang.  

                            Direktur Biomassa PLN EPI Hokkop Situngkir mengatakan hingga Juni 2026, perusahaan telah mengimplementasikan pemanfaatan biomassa pada 52 pembangkit listrik tenaga uap (PLTU). Realisasi penggunaan biomassa hingga periode tersebut mencapai 932.906 ton. 

                            Kualitas biomassa yang dimanfaatkan juga terus meningkat. Hokkop menuturkan nilai kalor rata-rata biomassa yang digunakan kini mencapai 3.263 kkal per kilogram dengan memanfaatkan 16 jenis biomassa yang berasal dari limbah pertanian dan kehutanan. 

                            Ke depannya, PLN EPI menargetkan pemanfaatan biomassa mencapai 3,7 juta ton pada 2026 dan meningkat hampir tiga kali lipat menjadi 10 juta ton pada 2030.

                            "Pencapaian tersebut diproyeksikan mampu menghasilkan nilai ekonomi sekitar Rp5,1 triliun," ujar Hokkop dikutip dari keterangan resminya, Kamis (23/7/2026) 

                            Selain itu, target tersebut juga diperkirakan dapat mengurangi emisi hingga 12 juta ton CO₂ ekuivalen per tahun, memanfaatkan sekitar 20 juta ton limbah biomassa setiap tahun, serta menciptakan sekitar 150.000 lapangan kerja hijau di berbagai daerah.

                            Untuk mengejar target tersebut, PLN EPI memperkuat pengembangan ekosistem biomassa melalui pembangunan jaringan hub dan main hub biomassa, pengembangan fasilitas produksi, digitalisasi rantai pasok, serta kemitraan dengan koperasi, kelompok tani, BUMDes, dan pelaku usaha di berbagai wilayah. 

                            Langkah tersebut ditempuh untuk memastikan pasokan biomassa tetap andal dan berkualitas seiring meningkatnya kebutuhan cofiring biomassa di pembangkit listrik. 

                            Adapun, Hokkop menambahkan, kepastian pasar menjadi faktor krusial untuk membangun rantai pasok biomassa yang sehat dan berkelanjutan. Oleh karena itu, PLN EPI membuka peluang kontrak pembelian biomassa hingga lima tahun bagi pemasok yang mampu menjaga kualitas dan kontinuitas pasokan. 

                            "Apabila kualitas biomassa dapat dijaga, baik dari sisi nilai kalor maupun kontinuitas pasokan, PLN EPI dapat memberikan kontrak pembelian hingga lima tahun. Dengan demikian, pelaku usaha memiliki kepastian untuk berinvestasi dan meningkatkan kapasitas produksinya," ujar Hokkop. 

                            Menurutnya, jaminan pembelian jangka panjang akan memberikan ruang bagi pelaku usaha untuk meningkatkan kapasitas produksi sekaligus menjaga standar kualitas biomassa yang dibutuhkan pembangkit listrik. 

                            PLN EPI menerapkan skema pengadaan biomassa sesuai ketentuan yang berlaku dengan mengutamakan kualitas produk. Biomassa dengan nilai kalor lebih tinggi dan mampu dipasok secara konsisten berpeluang memperoleh skema harga yang lebih kompetitif. 
                            Hokkop menuturkan kepastian pasar tidak hanya memberikan manfaat bagi pemasok biomassa, tetapi juga menjadi fondasi pembentukan ekosistem bioenergi nasional yang melibatkan petani, koperasi, badan usaha milik desa (BUMDes), hingga industri pengolahan biomassa. 

                            "Kami ingin membangun industri biomassa yang sehat. Ekspor tetap menjadi peluang, tetapi pada saat yang sama kebutuhan domestik juga harus terjamin agar transisi energi nasional dapat berjalan secara berkelanjutan," katanya.
                            TEXT
            ],
            // [
            //     'title' => '',
            //     'author_id' => ,
            //     'category_id' => ,
            //     'slug' => '',
            //     'body' => <<<'TEXT'
                            
            //                 TEXT
            // ],

        ];
        
        // untuk insert ke DB
        foreach ($data_artikel as $item) {
            Artikel::create($item);
        }
    }
}

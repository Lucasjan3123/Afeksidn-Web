<?php

namespace Database\Seeders;

use App\Models\internshipPosition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_posisi' => 'Human Resources',
                'slug' => "human-resources",
                'tipe' => 'Internship',
                'tempat' => 'Surabaya, Indonesia',
                'jobdesc' => 
                "<ul>
                    <li>Membantu keterikatan setiap pihak</li>
                    <li>Membuat acara untuk mencapai bonding</li>
                    <li>Menyelesaikan konflik di internal</li>
                    <li>Merencanakan, mengeksekusi, dan mengevaluasi proses recruitment, serta membantu setiap pihak internal untuk mengembangkan skill dengan lebih baik</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Senang bertemu, mengobrol, dan dapat menjadi teman bagi siapa saja</li>
                    <li>Ketertarikan dengan dunia startup dan kesehatan mental</li>
                    <li>Memiliki sifat simpati dan empati, mampu memecahkan masalah serta menjadi penengah dalam konflik</li>
                    <li>Memiliki pengalaman di bidang human resources maupun memiliki banyak ide kreatif untuk menjalin keterikatan dalam perusahaan</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'UI/UX Designer',
                'slug' => "uiux-designer",
                'tipe' => 'Internship',
                 'tempat' => 'Surabaya, Indonesia',
                'jobdesc' => 
                "<ul>
                    <li>Membantu membuat prototipe aplikasi web dan material desain untuk website</li>
                    <li>Mampu membuat prototype dan interaksi di figma dan framer</li>
                    <li>Mampu memanage page project agar terlihat rapi</li>
                    <li>Berkolaborasi dengan front end developer & back end developer</li>
                    <li>Mengerti perihal testing desain menggunakan maze</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Mahasiswa aktif jurusan Desain dan IT</li>
                    <li>Terbiasa menggunakan aplikasi desain seperti Figma dan framer</li>
                    <li>Kreatif dan memiliki passion di bidang desain</li>
                    <li>Memiliki kemampuan Usability,Problem Solving,User Research,Analytical Thinking,UI Design, Komunikasi dan kolaborasi.</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'Front End Developer',
                'slug' => "frontend-developer",
                 'tempat' => 'Surabaya, Indonesia',
                'tipe' => 'Internship',
                'jobdesc' => 
                "<ul>
                    <li>Membuat dan mengembangkan website</li>
                    <li>Berkolaborasi dengan ui/ux designer, backend developer, dan innovator program</li>
                    <li>Melakukan testing website</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Mahasiswa aktif jurusan Teknik Informatika, Sistem Informasi</li>
                    <li>Memahami bahasa pemrograman php,html,css,javascript</li>
                    <li>Menguasai framework CSS dan JavaScript</li>
                    <li>Memiliki passion yang tinggi dalam programming</li>
                    <li>Dapat bekerjasama dengan tim</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'Back End Developer',
                'slug' => "backend-developer",
                 'tempat' => 'Surabaya, Indonesia',
                'tipe' => 'Internship',
                'jobdesc' => 
                "<ul>
                    <li>Membangun website afeksi</li>
                    <li>Berkolaborasi dengan UI/UX designer, front end developer, dan innovator program</li>
                    <li>Melakukan testing website</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Mahasiswa aktif jurusan Teknik Informatika, Sistem Informasi</li>
                    <li>Memahami bahasa pemrograman php,phyton</li>
                    <li>Memahami pengelolaan database SQL</li>
                    <li>Memiliki passion yang tinggi dalam programming</li> 
                    <li>Dapat bekerjasama dengan tim</li>
                    <li>Memiliki pengalaman dalam API</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'Public Relation',
                'slug' => "public-relation",
                 'tempat' => 'Surabaya, Indonesia',
                'tipe' => 'Internship',
                'jobdesc' => 
                "<ul>
                    <li>Berkoordinasi dan menjalin komunikasi yang baik dengan media partner, lembaga, dan pihak eksternal lainnya</li>
                    <li>Menjaga hubungan baik dengan pihak eksternal</li>
                    <li>Bersama dengan divisi marketing meningkatkan brand awareness bisnis</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Mahasiswa aktif dari segala jurusan</li>
                    <li>Memiliki kemampuan komunikasi verbal dan tertulis yang baik</li>
                    <li>Memiliki manajemen waktu yang bagus dan mampu menganalisis masalah</li>
                    <li>Memiliki keahlian membangun dan mengembangkan jaringan</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'Graphic Designer',
                'slug' => "grapich-designer",
                 'tempat' => 'Surabaya, Indonesia',
                'tipe' => 'Internship',
                'jobdesc' => 
                "<ul>
                    <li>Membuat dan mendesain kebutuhan digital bisnis (foto dan video)</li>
                    <li>Melakukan riset dan trend baru dalam hal desain</li>
                    <li>Merancang dan membangun brand image bisnis</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Mahasiswa aktif dari segala jurusan</li>
                    <li>Memiliki keterampilan dalam menggunakan software editing grafis (Adobe Photoshop, Figma, Canva,dll)</li>
                    <li>Memiliki kemampuan untuk mengembangkan, membuat dan mengedit konten promosi</li>
                    <li>Memiliki kreativitas yang tinggi dan dapat menghasilkan desain yang inovatif dan menarik</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'Marketing and Communication',
                'slug' => "marketing-and-communication",
                 'tempat' => 'Surabaya, Indonesia',
                'tipe' => 'Internship',
                'jobdesc' => 
                "<ul>
                    <li>Membuat strategi dan brief konten yang akan ditayangkan</li>
                    <li>Menghandle akun Instagram, Tiktok, Twitter, dan LinkedIn Afeksi</li>
                    <li>Bertanggung jawab dan berkontribusi atas pengembangan citra bisnis</li>
                    <li>Meningkatkan brand awareness bisnis</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Mahasiswa aktif dari segala jurusan</li>
                    <li>Bisa membuat konten yang menarik dan efektif</li>
                    <li>Memiliki kemampuan copywriting yang baik</li>
                    <li>Tertarik dengan isu terkait psikologi relasi</li>
                    <li>Update dengan trend terkini</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'Product Development',
                'slug' => "product-development",
                 'tempat' => 'Surabaya, Indonesia',
                'tipe' => 'Internship',
                'jobdesc' => 
                "<ul>
                    <li>Membuat dan mendesain kebutuhan digital bisnis (foto dan video)</li>
                    <li>Melakukan riset dan trend baru dalam hal desain</li>
                    <li>Merancang dan membangun brand image bisnis</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Jurusan psikologi atau tertarik dengan dunia psikologi</li>
                    <li>Senang melakukan research dan membantu pengembangan produk</li>
                    <li>Memiliki kemampuan analisis yang baik</li>
                    <li>Ketertarikan dengan dunia start up dan kesehatan mental</li>
                    <li>Percaya diri, kreatif dan memiliki inisiatif yang tinggi</li>
                    <li>Mampu mengungkapkan ide secara terbuka</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'Bussiness Development',
                'slug' => "bussiness-development",
                'tempat' => 'Surabaya, Indonesia',
                'tipe' => 'Internship',
                'jobdesc' => 
                "<ul>
                    <li>Memahami produk & layanan perusahaan, kompetitor, dan posisi perusahaan dalam persaingan.</li>
                    <li>Melakukan perencanaan, riset, dan eksekusi pengembangan bisnis perusahaan</li>
                    <li>Melakukan pemeliharaan dan update leads database perusahaan</li>
                    <li>Mencari & memelihara hubungan dengan calon konsumen maupun mitra potensial perusahaan</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Senang bertemu dengan orang baru dan dapat mempresentasikan sesuatu dengan percaya diri</li>
                    <li>Memiliki pemahaman terkait pengembangan bisnis dan kebutuhan konsumen</li>
                    <li>Memiliki minat di dunia startup dan dunia kesehatan mental</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'Program Innovator',
                'slug' => "program-innovator",
                'tempat' => 'Surabaya, Indonesia',
                'tipe' => 'Internship',
                'jobdesc' => 
                "<ul>
                    <li>Merencanakan, mengeksekusi, dan mengevaluasi program kerja untuk mengedukasi masyarakat terkait psikologi</li>
                    <li>Menghubungi stakeholder terkait dengan program kerja yang dilaksanakan </li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Jurusan psikologi atau tertarik dengan dunia psikologi</li>
                    <li>Jurusan psikologi atau tertarik dengan dunia psikologi</li>
                    <li>Ketertarikan dengan dunia start up dan kesehatan mental</li>
                    <li>Percaya diri, kreatif dan memiliki inisiatif yang tinggi</li>
                    <li>Mampu mengungkapkan ide secara terbuka</li>
                </ul> 
                "
            ],
            [
                'nama_posisi' => 'Content Writer',
                'slug' => "content-writer",
                 'tempat' => 'Surabaya, Indonesia',
                'tipe' => 'Internship',
                'jobdesc' => 
                "<ul>
                    <li>Membuat tulisan artikel maupun ebook digital bertema kesehatan mental berdasarkan referensi jurnal ilmiah maupun buku</li>
                    <li>Memberikan saran konten</li>
                    <li>Melakukan riset konten tentang relationship di TikTok dan instagram.</li>
                </ul> 
                ",
                'status' => "AKTIF",
                'kualifikasi' => 
                "<ul>
                    <li>Memiliki kemampuan untuk meneliti dan menganalisis yang baik</li>
                    <li>Memiliki Passion untuk membaca buku, artikel, ataupun jurnal</li>
                    <li>Memiliki kemampuan untuk menulis artikel bertema kesehatan hubungan dengan baik dan menarik</li>
                    <li>Mempunyai vibes yang ceria</li>
                    <li>Memiliki Growth mindset</li>
                </ul> 
                "
            ],
        ];

        for ($i=0; $i < 11 ; $i++) { 
            internshipPosition::create([
                'nama_posisi' => $data[$i]['nama_posisi'],
                'tipe_kerja' => $data[$i]['tipe'],
                'tempat' => $data[$i]['tempat'],
                'slug' => $data[$i]['slug'],
                'jobdesc' => $data[$i]['jobdesc'],
                'status' => $data[$i]['status'],
                'kualifikasi' => $data[$i]['kualifikasi']
            ]);
        }
    }
}

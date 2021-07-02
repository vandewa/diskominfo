<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu')->delete();
        
        \DB::table('menu')->insert(array (
            0 => 
            array (
                'id' => 47,
                'parent' => 'profil',
                'nama' => 'Profil',
                'url' => '',
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1,
                'parent' => '0',
                'nama' => 'Profil OPD',
                'url' => 'profil',
                'lampiran' => 'n',
            'isi_posting' => '<p>Dinas Komunikasi dan Informatika ( Dinas Kominfo ) Kabupaten Wonosobo lahir berdasarkan Peraturan Daerah Kabupaten Wonosobo Nomor 12 Tahun 2016 Tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Wonosobo. Sebelum menjadi Dinas tersendiri, urusan komunikasi dan informatika ditangani oleh Dinas Perhubungan dengan nama Dinas Perhubungan, Telekomunikasi dan Informatika. Setelah terbit Perda Nomor 3 Tahun 2014 tentang Organisasi Perangkat Darah Pemerintah Kabupaten Wonosobo, urusan komunikasi dan informatika menjadi salah satu bagian dalam Sekretariat Daerah yaitu Bagian Komunikasi dan Telematika Sekretariat Daerah Kabupaten Wonosobo.</p>

<p>Seperti disebutkan dalam Peraturan Daerah Kabupaten Wonosobo Nomor 12 Tahun 2016&nbsp; tersebut, Dinas Kominfo merupakan Dinas Type C&nbsp; menyelenggarakan urusan pemerintahan Bidang Komunikasi dan Informatika, Bidang Persandian dan Bidang Statistik.&nbsp; Sebagai salah satu pilar Pemerintah Daerah Kabupaten Wonosobo, Dinas Kominfo berkewajiban untuk mensukseskan Visi dan Misi Kabupaten Wonosobo sebagaimana termuat dalam RPJMD Tahun 2016 - 2021 yaitu <strong>&ldquo;TERWUJUDNYA WONOSOBO BERSATU UNTUK MAJU, MANDIRI DAN SEJAHTERA UNTUK SEMUA&rdquo;.</strong></p>

<p>Sebagai instansi baru, Dinas Kominfo Kabupaten Wonosobo dituntut untuk segera menyesuaikan diri dengan instansi lain agar irama pembangunan tidak berjalan pincang.</p>

<p>Sebagai tindak lanjut untuk mensukseskan Visi dan Misi tahun Bupati dan Wakil terpilih priode 2016-2021, Dinas Kominfo Kabupaten Wonosobo membuat Rencana Strategis ( RENSTRA ) 2016 - 2021 dengan mengacu pada RPJMN dan RPJMD&nbsp; yang sudah ditetapkan.</p>

<p>Salah satu diantara permasalahan yang disebut dalam RPJMD Kabupaten Wonosobo 2016 - 2021 adalah permasalahan Reformasi Birokrasi dan Tata Kelola Pemerintahan, sedangkan salah satu isu strategisnya adalah Pengembangan Teknologi Informasi dan Komunikasi.</p>

<p>Pemanfaatan Teknologi Informasi dan Komunikasi (TIK) saat ini telah menjadi fasilitas utama di berbagai sektor kehidupan masyarakat dan menjadi bagian yang tak terpisahkan dari penyelenggaraan pemerintahan. Peran Teknologi Informasi dan Komunikasi baik secara langsung maupun tidak langsung telah mengubah cara kita hidup, cara kita belajar, cara kita bekerja dan cara kita bermain. Seiring dengan perkembangan TIK yang begitu pesat, mendorong berbagai kota di belahan dunia untuk menciptakan berbagai peluang dan industri TIK sebagai salah satu bentuk indikator peradaban masyarakat yang maju. Bahkan pemanfaatan dan perkembangan industri TIK diyakini dapat berperan sebagai penyumbang Pendapatan Asli Daerah (PAD) yang signifikan.</p>

<p>Dalam hal ini Dinas Komunikasi dan Informatika mempunyai peran untuk membangun sistem informasi yang terintegrasi untuk mewujudkan <em>e-government</em> menuju Wonosobo <em>Smart Regency</em>. Sistem informasi yang terintegrasi merupakan penyatuan berbagai macam aplikasi layanan pemerintahan untuk memudahkan pertukaran data antar instansi pemerintahan sebagai perwujudan layanan <em>e-government</em> bagi masyarakat.</p>

<p>Harapan dari ini semua tidak lain adalah terciptanya layanan informasi kepada masyarakat secara luas, transparan dan akuntable sebagai wujud dari pertanggung jawaban pemerintah, khususnya Pemerintah Daerah Kabupaten Wonosobo kepada masyarakat.</p>',
                'sampul' => '20180404021415_profil.jpg',
                'file_name' => '',
                'created_at' => NULL,
                'updated_at' => '2021-05-19 23:28:02',
            ),
            2 => 
            array (
                'id' => 2,
                'parent' => '0',
                'nama' => 'Profil Pimpinan OPD',
                'url' => '',
                'lampiran' => 'n',
                'isi_posting' => '<p>VISI</p>

<p>&ldquo;TERWUJUDNYA WONOSOBO BERSATU UNTUK MAJU, MANDIRI DAN SEJAHTERA UNTUK SEMUA&rdquo;</p>

<hr />
<p>MISI</p>

<ol>
<li>
<p>Meningkatkan produktifitas dan pendapatan masyarakat melalui kebijakan ekonomi kerakyatan dan peningkatan infrastruktur pedesaan dan perkotaan;</p>
</li>
<li>
<p>Pengembangan perekonomian yang bertumpu pada perluasan pembangunan infrastruktur perdesaan dan perkotaan untuk pengembangan pertanian, perkebunan, peternakan, dan perikanan, dengan penekanan pada peningkatan pendapatan masyarakat;</p>
</li>
<li>
<p>Pemerataan dan keseimbangan pembangunan secara berkelanjutan dengan meningkatkan investasi dan pemanfaatan sumberdaya alam secara rasional, efektif dan efisien untuk mengurangi kesenjangan antar wilayah dan memperluas lapangan kerja;</p>
</li>
<li>
<p>Meningkatkan sumber daya manusia yang unggul, sehat dan berkualitas melalui program pendidikian dan kesehatan serta berprestasi di berbagai aspek kehidupan.</p>
</li>
<li>
<p>Mewujudkan manajemen pemerintahan daerah yang profesional, kepemimpinan daerah yang efektif, kepemimpinan yang amanah dan pelayanan publik yang berkualitas.</p>
</li>
</ol>',
                'sampul' => NULL,
                'file_name' => '',
                'created_at' => NULL,
                'updated_at' => '2021-05-19 23:35:11',
            ),
            3 => 
            array (
                'id' => 3,
                'parent' => '0',
                'nama' => 'Visi Misi',
                'url' => 'visimisi',
                'lampiran' => 'n',
                'isi_posting' => '<h1>&nbsp;</h1><p>VISI</p><p>&nbsp;</p><h3>&nbsp;</h3><p>&ldquo;TERWUJUDNYA WONOSOBO BERSATU UNTUK MAJU, MANDIRI DAN SEJAHTERA UNTUK SEMUA&rdquo;</p><p>&nbsp;</p><hr /><p>&nbsp;</p><h1>&nbsp;</h1><p>MISI</p><p>&nbsp;</p><ol>	<li>	<h3>Meningkatkan produktifitas dan pendapatan masyarakat melalui kebijakan ekonomi kerakyatan dan peningkatan infrastruktur pedesaan dan perkotaan;</h3>	</li>	<li>	<h3>Pengembangan perekonomian yang bertumpu pada perluasan pembangunan infrastruktur perdesaan dan perkotaan untuk pengembangan pertanian, perkebunan, peternakan, dan perikanan, dengan penekanan pada peningkatan pendapatan masyarakat;</h3>	</li>	<li>	<h3>Pemerataan dan keseimbangan pembangunan secara berkelanjutan dengan meningkatkan investasi dan pemanfaatan sumberdaya alam secara rasional, efektif dan efisien untuk mengurangi kesenjangan antar wilayah dan memperluas lapangan kerja;</h3>	</li>	<li>	<h3>Meningkatkan sumber daya manusia yang unggul, sehat dan berkualitas melalui program pendidikian dan kesehatan serta berprestasi di berbagai aspek kehidupan.</h3>	</li>	<li>	<h3>Mewujudkan manajemen pemerintahan daerah yang profesional, kepemimpinan daerah yang efektif, kepemimpinan yang amanah dan pelayanan publik yang berkualitas.</h3>	</li></ol>',
                'sampul' => '20180404021606_visi-misi.jpg',
                'file_name' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 4,
                'parent' => '0',
                'nama' => 'Tupoksi',
                'url' => 'tupoksi',
                'lampiran' => 'y',
                'isi_posting' => '<p>Dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 4 Peraturan Bupati Wonosobo Nomor 75 Tahun 2016, Dinas Komunikasi dan Informatika mempunyai fungsi :</p><p>a. Perumusan kebijakan teknis di bidang informasi komunikasi publik, dan informatika serta kesekretariatan;</p><p>b. Pelaksanaan koordinasi kebijakan di bidang informasi komunikasi publik;</p><p>c. Pelaksanaan kebijakan di bidang informasi komunikasi publik;</p><p>d. Pelaksanaan evaluasi dan pelaporan di bidang informasi komunikasi publik dan informatika;</p><p>e. Pelaksanaan pelayanan komunikasi dan informatika;</p><p>f. Pelaksanaan fungsi kesekretariatan dinas;</p><p>g. Pengendaliaan penyelenggaraan tugas unit pelaksana teknis dinas; dan</p><p>h. Pelaksanaan tugas kedinasan lain atas perintah apapun.</p>',
                'sampul' => '20180404020757_tupoksi.jpg',
                'file_name' => '',
                'created_at' => NULL,
                'updated_at' => '2021-05-04 09:27:18',
            ),
            5 => 
            array (
                'id' => 5,
                'parent' => '0',
                'nama' => 'Perjanjian Kinerja',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 09:33:06',
            ),
            6 => 
            array (
                'id' => 6,
                'parent' => '0',
                'nama' => 'Personil',
                'url' => 'personil',
                'lampiran' => 'n',
                'isi_posting' => '<table align="" border="0" cellpadding="0" cellspacing="0" style="width:745px">	<tbody>		<tr>			<td rowspan="3" style="height:41px; width:33px"><strong>No</strong></td>			<td rowspan="3" style="width:220px"><strong>Nama</strong></td>			<td rowspan="3" style="width:7px">&nbsp;</td>			<td rowspan="3" style="width:511px"><strong>Jabatan</strong></td>		</tr>		<tr>		</tr>		<tr>		</tr>		<tr>			<td style="height:20px; width:33px">1</td>			<td style="width:195px">Eko Suryantoro, S.Sos., M.Si.</td>			<td style="width:7px">:</td>			<td style="width:511px">Kepala Dinas</td>		</tr>		<tr>			<td style="height:20px; width:33px">2</td>			<td style="width:195px">Winarningsih, S.H.</td>			<td style="width:7px">:</td>			<td style="width:511px">Sekretaris</td>		</tr>		<tr>			<td style="height:20px; width:33px">3</td>			<td style="width:195px">Bambang Sutejo, S.Kar., M.M.</td>			<td style="width:7px">:</td>			<td style="width:511px">Kepala Bidang Informasi dan Komunikasi Publik</td>		</tr>		<tr>			<td style="height:20px; width:33px">4</td>			<td style="width:195px">Sulistiani, S. Sos., M. Si.</td>			<td style="width:7px">:</td>			<td style="width:511px">Kepala Bidang Informatika</td>		</tr>		<tr>			<td style="height:20px; width:33px">5</td>			<td style="width:195px">Nining Endah C, S.Sos.</td>			<td style="width:7px">:</td>			<td style="width:511px">Kasubag Umum, Kepegawaian dan Keuangan</td>		</tr>		<tr>			<td style="height:20px; width:33px">6</td>			<td style="width:195px">Noor Abdillah, S.Kom.</td>			<td style="width:7px">:</td>			<td style="width:511px">Kasubag Perencanaan, Evaluasi dan Pelaporan</td>		</tr>		<tr>			<td style="height:20px; width:33px">7</td>			<td style="width:195px">Priyo Cahyono, S.STP</td>			<td style="width:7px">:</td>			<td style="width:511px">Kepala Seksi Pengelolaan Informasi Publik</td>		</tr>		<tr>			<td style="height:20px; width:33px">8</td>			<td style="width:195px">Drs. Ganeswara Wibawa, M.M.</td>			<td style="width:7px">:</td>			<td style="width:511px">Kepala Seksi Pelayanan Informasi Publik dan Pemberdayaan Komunikasi Sosial</td>		</tr>		<tr>			<td style="height:20px; width:33px">9</td>			<td style="width:195px">Fahrudin Aziz, S.Sn.</td>			<td style="width:7px">:</td>			<td style="width:511px">Kepala Seksi Pengembangan Sumber Daya Manusia dan Kerjasama Media</td>		</tr>		<tr>			<td style="height:20px; width:33px">10</td>			<td style="width:195px">Wajiran, S.Ip., M.P.H.</td>			<td style="width:7px">:</td>			<td style="width:511px">Kepala Seksi Teknik Komunikasi dan Persandian</td>		</tr>		<tr>			<td style="height:20px; width:33px">11</td>			<td style="width:195px">Priyo Cahyono, S.STP</td>			<td style="width:7px">:</td>			<td style="width:511px">Kepala Seksi Pengembangan Aplikasi dan Telematika</td>		</tr>		<tr>			<td style="height:20px; width:33px">12</td>			<td style="width:195px">Ratna Sulistiyani, S.Kom., M.M.</td>			<td style="width:7px">:</td>			<td style="width:511px">Kepala Seksi Tata Kelola Teknologi Informasi dan Kemitraan</td>		</tr>		<tr>			<td style="height:20px; width:33px">13</td>			<td style="width:195px">Danang Hari Purnomo, S.Kom</td>			<td style="width:7px">:</td>			<td style="width:511px">Pejabat Fungsional</td>		</tr>		<tr>			<td style="height:20px; width:33px">14</td>			<td style="width:195px">Yuni Muji Lestari, A.Md</td>			<td style="width:7px">:</td>			<td style="width:511px">Pejabat Fungsional</td>		</tr>		<tr>			<td style="height:20px; width:33px">15</td>			<td style="width:195px">Suwarti</td>			<td style="width:7px">:</td>			<td style="width:511px">Pelaksana</td>		</tr>		<tr>			<td style="height:21px; width:33px">16</td>			<td style="width:195px">Retno Lestari</td>			<td style="width:7px">:</td>			<td style="width:511px">Pelaksana</td>		</tr>		<tr>			<td style="height:20px; width:33px">17</td>			<td style="width:195px">Anita Martilofa, A.Md</td>			<td style="width:7px">:</td>			<td style="width:511px">Pelaksana</td>		</tr>		<tr>			<td style="height:20px; width:33px">18</td>			<td style="width:195px">Agung Wibawanto</td>			<td style="width:7px">:</td>			<td style="width:511px">Pelaksana</td>		</tr>		<tr>			<td style="height:20px; width:33px">19</td>			<td style="width:195px">Richard Riyanto</td>			<td style="width:7px">:</td>			<td style="width:511px">Pelaksana</td>		</tr>		<tr>			<td style="height:20px; width:33px">20</td>			<td style="width:195px">Usman Rifai</td>			<td style="width:7px">:</td>			<td style="width:511px">Pelaksana</td>		</tr>		<tr>			<td style="height:20px; width:33px">21</td>			<td style="width:195px">Sukarno</td>			<td style="width:7px">:</td>			<td style="width:511px">Pelaksana</td>		</tr>		<tr>			<td style="height:20px; width:33px">&nbsp;</td>			<td style="width:195px">&nbsp;</td>			<td style="width:7px">&nbsp;</td>			<td style="width:511px">&nbsp;</td>		</tr>		<tr>			<td style="height:20px; width:33px">&nbsp;</td>			<td style="width:195px">&nbsp;</td>			<td style="width:7px">&nbsp;</td>			<td style="width:511px">&nbsp;</td>		</tr>	</tbody></table',
                'sampul' => '20190315090115_20180810100304_profil-pejabat1.jpg',
                'file_name' => '',
                'created_at' => '2021-05-19 10:31:11',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 7,
                'parent' => '0',
                'nama' => 'Wonosobo Menuju Smartcity',
                'url' => 'uploads/20190528110502_smartcity_menuju_wonosobo.png',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => '20190528110502_smartcity_menuju_wonosobo.png',
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 09:34:14',
            ),
            8 => 
            array (
                'id' => 8,
                'parent' => '5',
                'nama' => 'Perjanjian Kinerja 2020',
                'url' => 'uploads/lampiran/20200629095040_787.rar',
                'lampiran' => 'y',
                'isi_posting' => '<p>Download file perjanjian kinerja</p>
<p><a href="https://devandewa.wonosobokab.go.id/uploads/lampiran/20200629095040_787.rar" target="_blank">&nbsp;Perjanjian Kinerja 2020</a></p>
',
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-19 22:15:21',
            ),
            9 => 
            array (
                'id' => 9,
                'parent' => 'transparansi',
                'nama' => 'Transparansi Anggaran',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'parent' => '9',
                'nama' => 'Laporan Aset',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'parent' => '9',
                'nama' => 'RENJA',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'parent' => '9',
                'nama' => 'RENSTRA',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'parent' => '9',
                'nama' => 'POBL',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'parent' => '9',
                'nama' => 'Program Kegiatan',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'parent' => '9',
                'nama' => 'Realisasi Anggaran',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'parent' => '9',
                'nama' => 'LKJLP',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'parent' => '11',
                'nama' => 'Laporan Aset 2017',
                'url' => 'uploads/20180608095100_Laporan_Aset_2017.pdf',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 11:04:21',
            ),
            18 => 
            array (
                'id' => 20,
                'parent' => '11',
                'nama' => 'Laporan Aset 2018',
                'url' => 'uploads/20190402094835_20190313040002_rptbi_gabungan1.pdf',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 12:28:20',
            ),
            19 => 
            array (
                'id' => 21,
                'parent' => '12',
                'nama' => 'RENJA 2017',
                'url' => 'uploads/20180830105003_Renja_2017.pdf',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 12:29:15',
            ),
            20 => 
            array (
                'id' => 22,
                'parent' => '12',
                'nama' => 'RENJA 2018',
                'url' => 'uploads/20180608102038_Renja_2018.rar',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:08:28',
            ),
            21 => 
            array (
                'id' => 23,
                'parent' => '12',
                'nama' => 'RENJA 2019',
                'url' => 'uploads/20190312031507_BAB_III_Tabel.docx',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:12:01',
            ),
            22 => 
            array (
                'id' => 24,
                'parent' => '13',
                'nama' => 'RENSTRA 2016 -2021',
                'url' => 'uploads/20180830105658_Renstra_2017-2021.rar',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:13:20',
            ),
            23 => 
            array (
                'id' => 25,
                'parent' => '14',
                'nama' => 'POBL 2018',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'parent' => '14',
                'nama' => 'POBL 2019',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'parent' => '25',
                'nama' => 'POBL Juli',
                'url' => 'uploads/20180830103825_POBL_Juli_2018.pdf',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:16:33',
            ),
            26 => 
            array (
                'id' => 28,
                'parent' => '25',
                'nama' => 'POBL Agustus',
                'url' => 'uploads/20180905030738_POBL_Agustus_2018.pdf',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:17:54',
            ),
            27 => 
            array (
                'id' => 29,
                'parent' => '26',
                'nama' => 'POBL Februari',
                'url' => 'uploads/20190402095447_20190313035640_POBL_Februari_20191.xlsx',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:19:07',
            ),
            28 => 
            array (
                'id' => 30,
                'parent' => '15',
                'nama' => 'Program Kegiatan 2017',
                'url' => 'uploads/20180830101856_Program_Kegiatan_2017.pdf',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:20:08',
            ),
            29 => 
            array (
                'id' => 31,
                'parent' => '15',
                'nama' => 'Program Kegiatan 2018',
                'url' => 'uploads/20180830103056_Program_Kegiatan_2018.pdf',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:22:58',
            ),
            30 => 
            array (
                'id' => 32,
                'parent' => '15',
                'nama' => 'Program Kegiatan 2019',
                'url' => 'uploads/20190312032030_Kegiatan_Dinas_Kominfo_2019_FINAL.xlsx',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:24:35',
            ),
            31 => 
            array (
                'id' => 33,
                'parent' => '16',
                'nama' => 'Realisasi Anggaran 2017',
                'url' => 'uploads/20190402100030_Tabel_realisasi_anggaran_2017.xlsx',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:25:24',
            ),
            32 => 
            array (
                'id' => 34,
                'parent' => '16',
                'nama' => 'Realisasi Anggaran 2018',
                'url' => 'uploads/20190315084003_Tabel_Realisasi_Anggaran_Upload.xlsx',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:26:41',
            ),
            33 => 
            array (
                'id' => 35,
                'parent' => '17',
                'nama' => 'LKJLP 2019',
                'url' => 'uploads/20200629092147_787.pdf',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => '2021-05-04 14:27:34',
            ),
            34 => 
            array (
                'id' => 36,
                'parent' => '17',
                'nama' => 'LKJLP 2020',
                'url' => 'uploads/lampiran/60A36A9DCDED7.pdf',
                'lampiran' => 'y',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => '2021-05-19 22:07:19',
                'updated_at' => '2021-05-19 22:07:19',
            ),
            35 => 
            array (
                'id' => 38,
                'parent' => '2',
                'nama' => 'Profil Pimpinan',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => '2021-05-27 20:16:59',
                'updated_at' => '2021-05-27 20:16:59',
            ),
            36 => 
            array (
                'id' => 39,
                'parent' => '2',
                'nama' => 'LHKPN',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => '2021-05-27 20:17:28',
                'updated_at' => '2021-05-27 20:17:28',
            ),
            37 => 
            array (
                'id' => 40,
                'parent' => '2',
                'nama' => 'LHKSN',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => '2021-05-27 20:17:54',
                'updated_at' => '2021-05-27 20:17:54',
            ),
            38 => 
            array (
                'id' => 41,
                'parent' => '2',
                'nama' => 'Agenda Pimpinan',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => '2021-05-27 20:18:11',
                'updated_at' => '2021-05-27 20:18:11',
            ),
            39 => 
            array (
                'id' => 42,
                'parent' => '2',
                'nama' => 'SK Pimpinan',
                'url' => 'uploads/lampiran/20200629094343_787.pdf',
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => '2021-05-27 20:18:50',
                'updated_at' => '2021-05-27 20:25:14',
            ),
            40 => 
            array (
                'id' => 43,
                'parent' => 'ppid',
                'nama' => 'PPID',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 44,
                'parent' => '43',
                'nama' => 'Profil PPID',
                'url' => NULL,
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => '2021-06-07 10:09:29',
                'updated_at' => '2021-06-07 10:09:29',
            ),
            42 => 
            array (
                'id' => 45,
                'parent' => '44',
                'nama' => 'Tugas PPID',
                'url' => 'tugasppid',
                'lampiran' => 'n',
                'isi_posting' => '<p>&nbsp;</p>

<p><strong>PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI</strong></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><strong>TUGAS DAN TANGGUNG JAWAB</strong></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>(Peraturan Pemerintah No. 61 Tahun 2010)</p>

<p>&nbsp;</p>

<ol>
<li>Penyediaan Informasi;</li>
<li>Penyimpanan;</li>
<li>Pendokumentasian; dan</li>
<li>Pengamanan Informasi;</li>
<li>Pelayanan informasi yang cepat, tepat dan sederhana sesuai dengan aturan yang berlaku;</li>
<li>Penetapan Prosedur Operasional Penyebarluasan Informasi Publik;</li>
<li>Pengujian konsekuensi;</li>
<li>Pengklasifikasian informasi dan/ atau pengubahannya;</li>
<li>Penetapan informasi yang dikecualikan yang telah habis jangka waktu pengecualiannya sebagai informasi publik yang dapat diakses;</li>
<li>Penetapan pertimbangan tertulis atas setiap kebijakan yang diambil untuk memenuhi hak setiap orang atas Informasi Publik.</li>
</ol>

<hr />
<p>&nbsp;</p>

<p><strong>TUGAS PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI PEMBANTU</strong></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>(Peraturan Gubernur Jawa Tengah No. 12 Tahun 2015)</p>

<p>&nbsp;</p>

<ol>
<li>Pengklasifikasian informasi terdiri dari :
<ul>
<li>Informasi yang wajib disediakan dan diumumkan secara berkala;</li>
<li>Informasi yang wajib diumumkan secara serta merta;</li>
<li>Informasi yang wajib tersedia setiap saat;</li>
<li>Informasi yang dikcualikan.</li>
</ul>
</li>
<li>Mengkoordinasikan dan mengkonsolidasikan pengumpulan bahan informasi dan dokumentasi yang ada dilingkungannya;</li>
<li>Menyimpan, mendokumentasikan, mnyediakan dan memberi pelayanan informasi yang ada dilingkungannya kepada publik;</li>
<li>Melakukan verifiksai bahan informsai publik yang ada dilingkungannya.</li>
<li>Mlakukan pemutakhiran informasi dan dokumentaaasi yang ada dilingkuangannya;</li>
<li>Menyediakan informasi dan dokumentasi yang ada dilingkungannya untuk diakses oleh masyarakat;</li>
<li>Melakukan inventarisai iniformasi yang dikecualikan untuk disampaikan kepada PPID Utama;</li>
<li>Memberikan laporan tentang pengelolaan informasi yang ada dilingkungannya kepada PPID Utama secara berkala.</li>
</ol>',
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => '2021-06-07 10:20:21',
                'updated_at' => '2021-06-07 10:21:25',
            ),
            43 => 
            array (
                'id' => 46,
                'parent' => '44',
                'nama' => 'Struktur PPID',
                'url' => 'strukturppid',
                'lampiran' => 'n',
                'isi_posting' => NULL,
                'sampul' => NULL,
                'file_name' => NULL,
                'created_at' => '2021-06-07 10:46:18',
                'updated_at' => '2021-06-07 10:46:18',
            ),
        ));
        
        
    }
}
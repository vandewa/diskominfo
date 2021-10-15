<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LampiranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lampiran')->delete();
        
        \DB::table('lampiran')->insert(array (
            0 => 
            array (
                'id' => 4,
                'nama_lampiran' => '20180608095100_Laporan_Aset_2017.pdf',
                'keterangan' => 'Aset Tahun 2017',
                'created_at' => '2021-04-13 13:20:51',
                'updated_at' => '2021-04-13 16:55:48',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'nama_lampiran' => '20190402094835_20190313040002_rptbi_gabungan1.pdf',
                'keterangan' => 'Aset Tahun 2018',
                'created_at' => '2021-04-13 17:02:49',
                'updated_at' => '2021-04-13 17:02:49',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'nama_lampiran' => '20180830105003_Renja_2017.pdf',
                'keterangan' => 'Renja Tahun 2017',
                'created_at' => '2021-04-13 17:07:55',
                'updated_at' => '2021-04-13 17:07:55',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'nama_lampiran' => '20180608102038_Renja_2018.rar',
                'keterangan' => 'Renja Tahun 2018',
                'created_at' => '2021-04-13 17:12:51',
                'updated_at' => '2021-04-13 17:12:51',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'nama_lampiran' => '20190312031507_BAB_III_Tabel.docx',
                'keterangan' => 'Renja Tahun 2019',
                'created_at' => '2021-04-13 17:19:27',
                'updated_at' => '2021-04-13 17:19:27',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            5 => 
            array (
                'id' => 10,
                'nama_lampiran' => '20180830105658_Renstra_2017-2021.rar',
                'keterangan' => 'Dokumen Rencana Strategi 2016-2021',
                'created_at' => '2021-04-13 17:25:07',
                'updated_at' => '2021-04-13 17:25:07',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'nama_lampiran' => '20180830103825_POBL_Juli_2018.pdf',
                'keterangan' => 'Dokumen POBL Juli 2018',
                'created_at' => '2021-04-13 17:27:34',
                'updated_at' => '2021-04-13 17:27:34',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            7 => 
            array (
                'id' => 12,
                'nama_lampiran' => '20180905030738_POBL_Agustus_2018.pdf',
                'keterangan' => 'Dokumen POBL Agustus 2018',
                'created_at' => '2021-04-13 17:27:47',
                'updated_at' => '2021-04-13 17:27:47',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            8 => 
            array (
                'id' => 13,
                'nama_lampiran' => '20190402095447_20190313035640_POBL_Februari_20191.xlsx',
                'keterangan' => 'Dokumen POBL Februari 2019',
                'created_at' => '2021-04-13 17:28:40',
                'updated_at' => '2021-04-13 17:28:40',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            9 => 
            array (
                'id' => 14,
                'nama_lampiran' => '20180830101856_Program_Kegiatan_2017.pdf',
                'keterangan' => 'Dokumen Program Kegiatan 2017',
                'created_at' => '2021-04-13 17:30:43',
                'updated_at' => '2021-04-13 17:30:43',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            10 => 
            array (
                'id' => 15,
                'nama_lampiran' => '20180830103056_Program_Kegiatan_2018.pdf',
                'keterangan' => 'Dokumen Program Kegiatan 2018',
                'created_at' => '2021-04-13 17:31:37',
                'updated_at' => '2021-04-13 17:31:37',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            11 => 
            array (
                'id' => 16,
                'nama_lampiran' => '20190312032030_Kegiatan_Dinas_Kominfo_2019_FINAL.xlsx',
                'keterangan' => 'Dokumen Program Kegiatan 2019',
                'created_at' => '2021-04-13 17:32:08',
                'updated_at' => '2021-04-13 17:32:08',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            12 => 
            array (
                'id' => 17,
                'nama_lampiran' => '20190402100030_Tabel_realisasi_anggaran_2017.xlsx',
                'keterangan' => 'Realisasi Anggaran 2017',
                'created_at' => '2021-04-13 17:33:56',
                'updated_at' => '2021-04-13 17:33:56',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            13 => 
            array (
                'id' => 18,
                'nama_lampiran' => '20190315084003_Tabel_Realisasi_Anggaran_Upload.xlsx',
                'keterangan' => 'Realisasi Anggaran 2018',
                'created_at' => '2021-04-13 17:34:17',
                'updated_at' => '2021-04-13 17:34:17',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            14 => 
            array (
                'id' => 19,
                'nama_lampiran' => '20200629092147_787.pdf',
                'keterangan' => 'LKjIP 2019',
                'created_at' => '2021-04-13 17:35:28',
                'updated_at' => '2021-04-13 17:35:28',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            15 => 
            array (
                'id' => 20,
                'nama_lampiran' => '20191121025534_787.rar',
                'keterangan' => 'Materi Pelatihan Public Speaking',
                'created_at' => '2021-04-13 17:42:41',
                'updated_at' => '2021-04-13 17:42:41',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            16 => 
            array (
                'id' => 21,
                'nama_lampiran' => '20200319115302_787.pdf',
                'keterangan' => 'KHUTBAH JUMAT MERENUNGKAN KEHENDAK ALLAH DI BALIK VIRUS CORONA',
                'created_at' => '2021-04-13 17:44:57',
                'updated_at' => '2021-04-13 17:44:57',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            17 => 
            array (
                'id' => 22,
                'nama_lampiran' => '20200319115320_787.pdf',
                'keterangan' => 'PEDOMAN PELAKSANAAN SHALAT JUMAH DALAM SITUASI TERJADI WABAH CORONA',
                'created_at' => '2021-04-13 17:45:33',
                'updated_at' => '2021-04-13 17:45:33',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            18 => 
            array (
                'id' => 23,
                'nama_lampiran' => '20200319115335_787.pdf',
                'keterangan' => 'AUSHIYAH DP MUI TENTANG Virus Corona 3 Februari 2020',
                'created_at' => '2021-04-13 17:46:19',
                'updated_at' => '2021-04-13 17:46:19',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            19 => 
            array (
                'id' => 24,
                'nama_lampiran' => '20200319123454_787.pdf',
                'keterangan' => 'Panduan Pencegahan Penularan COVID-19',
                'created_at' => '2021-04-13 17:47:34',
                'updated_at' => '2021-04-13 17:47:34',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            20 => 
            array (
                'id' => 26,
                'nama_lampiran' => '20190625012811_Bahan_Bimtek_I.rar',
                'keterangan' => 'Bimtek Smart City 24 Juni 2019',
                'created_at' => '2021-04-13 21:57:22',
                'updated_at' => '2021-04-13 21:57:22',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            21 => 
            array (
                'id' => 27,
                'nama_lampiran' => '20190717025041_SK_Kabupaten_Wonosobo.zip',
                'keterangan' => 'SK Dewan dan Tim Pelaksana Smart City',
                'created_at' => '2021-04-13 21:58:17',
                'updated_at' => '2021-04-13 21:58:17',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            22 => 
            array (
                'id' => 28,
                'nama_lampiran' => '20190625013047_CONTOH_QUICK_WINS.docx',
                'keterangan' => 'Contoh Quick Win',
                'created_at' => '2021-04-13 21:59:20',
                'updated_at' => '2021-04-13 21:59:20',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            23 => 
            array (
                'id' => 29,
                'nama_lampiran' => '20190625013058_Kertas_Kerja_Rencana_Program_Pembangunan.docx',
                'keterangan' => 'Kertas Kerja Rencana Program Pembangunan',
                'created_at' => '2021-04-13 21:59:37',
                'updated_at' => '2021-04-13 21:59:37',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
            24 => 
            array (
                'id' => 30,
                'nama_lampiran' => '20190619032015_Materi_Bimtek_Smart_City.rar',
                'keterangan' => 'Materi Bimtek Penyusunan Masterplan Smart City Tahun 2019',
                'created_at' => '2021-04-13 22:00:36',
                'updated_at' => '2021-04-13 22:00:36',
                'created_by' => '1',
                'updated_by' => NULL,
            ),
        ));
        
        
    }
}
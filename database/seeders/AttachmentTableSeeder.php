<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttachmentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attachment')->delete();
        
        \DB::table('attachment')->insert(array (
            0 => 
            array (
                'id_attachment' => 166,
                'id_tabel' => 0,
            'file_name' => '20170123042042_MUJIB_BUROHMAN_(805_M).rar',
                'temp' => '20170123094459_8',
                'created_at' => '2017-01-23 16:20:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            1 => 
            array (
                'id_attachment' => 171,
                'id_tabel' => 0,
                'file_name' => '20170125021803_DARSO.rar',
                'temp' => '20170124101330_8',
                'created_at' => '2017-01-25 14:18:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            2 => 
            array (
                'id_attachment' => 234,
                'id_tabel' => 0,
                'file_name' => '20170223031613_UNTUNG_SLAMET.rar',
                'temp' => '20170223115226_10',
                'created_at' => '2017-02-23 15:16:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            3 => 
            array (
                'id_attachment' => 260,
                'id_tabel' => 0,
                'file_name' => '20170307112714_ROIS_AHMAD_ROMADHON.rar',
                'temp' => '20170306100301_10',
                'created_at' => '2017-03-07 11:27:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            4 => 
            array (
                'id_attachment' => 296,
                'id_tabel' => 0,
                'file_name' => '20170406121252_SK_IMB_MILLA_002.doc',
                'temp' => '2017-04-06-11:05:0238',
                'created_at' => '2017-04-06 12:12:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            5 => 
            array (
                'id_attachment' => 325,
                'id_tabel' => 0,
                'file_name' => '20170510010855_fc_imb_an.pemohon_Iksan_Mubarok10052017',
                'temp' => '2017-05-10-10:05:14362',
                'created_at' => '2017-05-10 13:08:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            6 => 
            array (
                'id_attachment' => 352,
                'id_tabel' => 0,
                'file_name' => '20170529012527_PULYONO.rar',
                'temp' => '20170523132646_10',
                'created_at' => '2017-05-29 13:25:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            7 => 
            array (
                'id_attachment' => 414,
                'id_tabel' => 0,
            'file_name' => '20170804114828_NOVAL_AZMI_(_779).rar',
                'temp' => '20170731092839_10',
                'created_at' => '2017-08-04 11:48:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            8 => 
            array (
                'id_attachment' => 425,
                'id_tabel' => 0,
            'file_name' => '20170807010802_IDA_SULISTYANI_1_(425).rar',
                'temp' => '20170614105955_10',
                'created_at' => '2017-08-07 13:08:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            9 => 
            array (
                'id_attachment' => 489,
                'id_tabel' => 0,
                'file_name' => '20171023013350_GUNAWAN_SETYO_WIDODO.rar',
                'temp' => '20171019121041_10',
                'created_at' => '2017-10-23 13:33:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            10 => 
            array (
                'id_attachment' => 502,
                'id_tabel' => 0,
                'file_name' => '20171114103407_SUPRIYANTO.rar',
                'temp' => '20171103084710_8',
                'created_at' => '2017-11-14 10:34:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            11 => 
            array (
                'id_attachment' => 503,
                'id_tabel' => 0,
                'file_name' => '20171114105540_SUPRIYANTO.rar',
                'temp' => '20171103084710_8',
                'created_at' => '2017-11-14 10:55:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            12 => 
            array (
                'id_attachment' => 621,
                'id_tabel' => 0,
                'file_name' => '20171130012350_IMG_0751.JPG',
                'temp' => '0.5150301223889253',
                'created_at' => '2017-11-30 13:23:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            13 => 
            array (
                'id_attachment' => 661,
                'id_tabel' => 323,
            'file_name' => '20171201112720_semayu-2011_(2).jpg',
                'temp' => '0.7461644500382576',
                'created_at' => '2017-12-01 11:27:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            14 => 
            array (
                'id_attachment' => 735,
                'id_tabel' => 1017,
                'file_name' => '20171204010709_jenggot_2.jpg',
                'temp' => '0.31360982445136254',
                'created_at' => '2017-12-04 13:07:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            15 => 
            array (
                'id_attachment' => 796,
                'id_tabel' => 1475,
                'file_name' => '20171206095437_IMG-20171021-WA0064.jpg',
                'temp' => '0.38802217869016564',
                'created_at' => '2017-12-06 09:54:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            16 => 
            array (
                'id_attachment' => 797,
                'id_tabel' => 0,
                'file_name' => '20171206100045_IMG_20170922_194118.jpg',
                'temp' => '0.38802217869016564',
                'created_at' => '2017-12-06 10:00:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            17 => 
            array (
                'id_attachment' => 802,
                'id_tabel' => 308,
                'file_name' => '20171206111652_DSC_1074.JPG',
                'temp' => '0.703334387302754',
                'created_at' => '2017-12-06 11:16:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            18 => 
            array (
                'id_attachment' => 881,
                'id_tabel' => 0,
                'file_name' => '20180104114634_MISKIYAH.rar',
                'temp' => '20180102142543_10',
                'created_at' => '2018-01-04 11:46:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            19 => 
            array (
                'id_attachment' => 890,
                'id_tabel' => 0,
                'file_name' => '20180115112932_fc_ektp_imb_an._Satriyo_Yudiarto',
                'temp' => '2017-12-20-13:29:11362',
                'created_at' => '2018-01-15 11:29:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            20 => 
            array (
                'id_attachment' => 892,
                'id_tabel' => 0,
                'file_name' => '20180115114701_Fc_sertifikat_an._H_Satriyo_Yudiarto',
                'temp' => '2017-12-20-13:29:11362',
                'created_at' => '2018-01-15 11:47:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            21 => 
            array (
                'id_attachment' => 893,
                'id_tabel' => 0,
                'file_name' => '20180115011353_Fc_Srt_ket_kehil_IMB_an._Adi_Luliansyah',
                'temp' => '2017-12-20-13:29:11362',
                'created_at' => '2018-01-15 13:13:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            22 => 
            array (
                'id_attachment' => 894,
                'id_tabel' => 0,
                'file_name' => '20180116021242_Fc_eKTP_IMB_Perpus_SD_an._Yudiyanti',
                'temp' => '2018-01-15-14:59:39362',
                'created_at' => '2018-01-16 14:12:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            23 => 
            array (
                'id_attachment' => 895,
                'id_tabel' => 0,
                'file_name' => '20180116022031_Fc_eKTP_IMB_Perpus_SD_an._Yudiyanti',
                'temp' => '2018-01-15-14:59:39362',
                'created_at' => '2018-01-16 14:20:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            24 => 
            array (
                'id_attachment' => 896,
                'id_tabel' => 0,
                'file_name' => '20180116022655_Fc_NPWP_SD_N_Wulungsari.rar',
                'temp' => '2018-01-15-14:59:39362',
                'created_at' => '2018-01-16 14:26:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            25 => 
            array (
                'id_attachment' => 897,
                'id_tabel' => 0,
                'file_name' => '20180116023523_Fc_gambar_Pepus_SD_N_Wulungsari.rar',
                'temp' => '2018-01-15-14:59:39362',
                'created_at' => '2018-01-16 14:35:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            26 => 
            array (
                'id_attachment' => 898,
                'id_tabel' => 0,
                'file_name' => '20180116024418_Fc_RAB_Pepus_SD_N_Wulungsari.rar',
                'temp' => '2018-01-15-14:59:39362',
                'created_at' => '2018-01-16 14:44:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            27 => 
            array (
                'id_attachment' => 901,
                'id_tabel' => 0,
                'file_name' => '20180117102630_FC_eKTP_IMB_an._Nur_Rohim',
                'temp' => '2018-01-16-15:32:36362',
                'created_at' => '2018-01-17 10:26:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            28 => 
            array (
                'id_attachment' => 904,
                'id_tabel' => 0,
            'file_name' => '20180117110018_FC_Sertifikat_an._Fitriyani_(istri_Nur_Rohim)',
                'temp' => '2018-01-16-15:32:36362',
                'created_at' => '2018-01-17 11:00:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            29 => 
            array (
                'id_attachment' => 1011,
                'id_tabel' => 1900,
                'file_name' => '20180314033019_Melihat_Sesorah_Basa_Jawa_Program_Dinas_Kominfo_Untuk_Mendidik_Pegawai_Agar_Lancar_Berbahasa_Jawa_Yang_Baik_dan_Benar.jpg',
                'temp' => '0.8581626739533148',
                'created_at' => '2018-03-14 15:30:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            30 => 
            array (
                'id_attachment' => 1013,
                'id_tabel' => 1902,
                'file_name' => '20180314034557_Wonosobo_Tuan_Rumah_Musrenbang_Wilayah_Eks_Karesidenan_Kedu.jpg',
                'temp' => '0.33624210716857594',
                'created_at' => '2018-03-14 15:45:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            31 => 
            array (
                'id_attachment' => 1014,
                'id_tabel' => 1903,
                'file_name' => '20180314035715_PENJABARAN_LRA_dinas_komunikasi_dan_informatika.png',
                'temp' => '0.33282307447009774',
                'created_at' => '2018-03-14 15:57:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            32 => 
            array (
                'id_attachment' => 1015,
                'id_tabel' => 1903,
                'file_name' => '20180314041039_20180312042751_PENJABARAN_LRA_dinas_komunikasi_dan_informatika.pdf',
                'temp' => '0.5049184093016317',
                'created_at' => '2018-03-14 16:10:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            33 => 
            array (
                'id_attachment' => 1016,
                'id_tabel' => 4,
                'file_name' => '20180314044901_27709795_1361319553973422_1298045270760353499_o.jpg',
                'temp' => '0.6240175999731477',
                'created_at' => '2018-03-14 16:49:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            34 => 
            array (
                'id_attachment' => 1030,
                'id_tabel' => 0,
                'file_name' => '20180319011239_UMAR_FATAHILAH,_S.Pd,_M',
                'temp' => '20180316090524_8',
                'created_at' => '2018-03-19 13:12:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            35 => 
            array (
                'id_attachment' => 1044,
                'id_tabel' => 84,
                'file_name' => '20180319040903_bannerSatuData.png',
                'temp' => '',
                'created_at' => '2018-03-19 16:09:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            36 => 
            array (
                'id_attachment' => 1081,
                'id_tabel' => 1971,
                'file_name' => '20180321120731_ilustrasi-website.jpg',
                'temp' => '0.43905091626084336',
                'created_at' => '2018-03-21 12:07:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            37 => 
            array (
                'id_attachment' => 1086,
                'id_tabel' => 84,
                'file_name' => '20180322075723_Document1_-_Microsoft_Word_2018-03-22_07.56',
                'temp' => '',
                'created_at' => '2018-03-22 07:57:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            38 => 
            array (
                'id_attachment' => 1087,
                'id_tabel' => 84,
                'file_name' => '20180322075854_lapor_bupati_wonosobo.png',
                'temp' => '',
                'created_at' => '2018-03-22 07:58:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            39 => 
            array (
                'id_attachment' => 1158,
                'id_tabel' => 2029,
                'file_name' => '20180328114334_IMG20180326105247.jpg',
                'temp' => '0.36316286080192417',
                'created_at' => '2018-03-28 11:43:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            40 => 
            array (
                'id_attachment' => 1159,
                'id_tabel' => 2032,
                'file_name' => '20180329074452_pengurus-kim-kab-wonosobo.jpg',
                'temp' => '0.3380698894650678',
                'created_at' => '2018-03-29 07:44:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            41 => 
            array (
                'id_attachment' => 1160,
                'id_tabel' => 2033,
                'file_name' => '20180329075817_admin-medsos-diajak-perangi-hoax.jpg',
                'temp' => '0.6168267186665077',
                'created_at' => '2018-03-29 07:58:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            42 => 
            array (
                'id_attachment' => 1165,
                'id_tabel' => 2038,
                'file_name' => '20180329114643_IMG-20180329-WA0013.jpg',
                'temp' => '0.48981377813029925',
                'created_at' => '2018-03-29 11:46:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            43 => 
            array (
                'id_attachment' => 1167,
                'id_tabel' => 2042,
                'file_name' => '20180329120911_Untitled.png',
                'temp' => '0.21044738362435444',
                'created_at' => '2018-03-29 12:09:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            44 => 
            array (
                'id_attachment' => 1169,
                'id_tabel' => 2044,
                'file_name' => '20180329121617_Untitled.png',
                'temp' => '0.31411496452537324',
                'created_at' => '2018-03-29 12:16:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            45 => 
            array (
                'id_attachment' => 1171,
                'id_tabel' => 2045,
                'file_name' => '20180329034510_IMG-20180314-WA0010.jpg',
                'temp' => '0.6393237064061528',
                'created_at' => '2018-03-29 15:45:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            46 => 
            array (
                'id_attachment' => 1174,
                'id_tabel' => 2047,
                'file_name' => '20180402091453_evaluasi_sistem_pemerintah_berbasis_elektronik_tahun_2018.png',
                'temp' => '0.07266614322433296',
                'created_at' => '2018-04-02 09:14:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            47 => 
            array (
                'id_attachment' => 1175,
                'id_tabel' => 2047,
                'file_name' => '20180402092234_permenpan_nomor_5_tahun_2018.pdf',
                'temp' => '0.07266614322433296',
                'created_at' => '2018-04-02 09:22:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            48 => 
            array (
                'id_attachment' => 1177,
                'id_tabel' => 2047,
                'file_name' => '20180402092813_Paparan-Sosialisasi-Eva-SPBE-2018_V2.pdf',
                'temp' => '0.07266614322433296',
                'created_at' => '2018-04-02 09:28:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            49 => 
            array (
                'id_attachment' => 1178,
                'id_tabel' => 2047,
                'file_name' => '20180402093051_Paparan-Pedoman-Aplikasi-V2.pdf',
                'temp' => '0.07266614322433296',
                'created_at' => '2018-04-02 09:30:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            50 => 
            array (
                'id_attachment' => 1179,
                'id_tabel' => 2047,
                'file_name' => '20180402093244_Buku_Pedoman_Evaluasi_SPBE_2018_V.1',
                'temp' => '0.07266614322433296',
                'created_at' => '2018-04-02 09:32:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            51 => 
            array (
                'id_attachment' => 1180,
                'id_tabel' => 2047,
                'file_name' => '20180402093517_Buku_panduan_evaluasi_sistem_pemerintah_berbasis_elektronik_tahun_2018.png',
                'temp' => '0.07266614322433296',
                'created_at' => '2018-04-02 09:35:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            52 => 
            array (
                'id_attachment' => 1181,
                'id_tabel' => 2047,
                'file_name' => '20180402094423_3._FORMAT_PERTANYAAN_TINGKAT_KEMATANGAN_V',
                'temp' => '0.07266614322433296',
                'created_at' => '2018-04-02 09:44:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            53 => 
            array (
                'id_attachment' => 1184,
                'id_tabel' => 2048,
                'file_name' => '20180402024514_IMG-20180402-WA0007.jpg',
                'temp' => '0.10064030092630838',
                'created_at' => '2018-04-02 14:45:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            54 => 
            array (
                'id_attachment' => 1196,
                'id_tabel' => 84,
                'file_name' => '20180403040717_Sobo_News_-_Apps_on_Google_Play_-_Google_Chrome_2018-04-03_16.05',
                'temp' => '',
                'created_at' => '2018-04-03 16:07:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            55 => 
            array (
                'id_attachment' => 1197,
                'id_tabel' => 84,
                'file_name' => '20180403041241_Wonosobo_Smart.png',
                'temp' => '',
                'created_at' => '2018-04-03 16:12:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            56 => 
            array (
                'id_attachment' => 1198,
                'id_tabel' => 84,
                'file_name' => '20180403041446_E-KINERJA_WONOSOBO_-_Apps_on_Google_Play_-_Google_Chrome_2018-04-03_16.15',
                'temp' => '',
                'created_at' => '2018-04-03 16:14:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            57 => 
            array (
                'id_attachment' => 1199,
                'id_tabel' => 84,
                'file_name' => '20180403041518_e_kinerja_wonosobo.png',
                'temp' => '',
                'created_at' => '2018-04-03 16:15:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            58 => 
            array (
                'id_attachment' => 1200,
                'id_tabel' => 84,
                'file_name' => '20180404084846_One_Touch_Statistics_Wonosobo.png',
                'temp' => '',
                'created_at' => '2018-04-04 08:48:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            59 => 
            array (
                'id_attachment' => 1203,
                'id_tabel' => 1892,
                'file_name' => '20180404095225_gst-faq.jpg',
                'temp' => '0.06974468164715653',
                'created_at' => '2018-04-04 09:52:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            60 => 
            array (
                'id_attachment' => 1205,
                'id_tabel' => 2086,
                'file_name' => '20180404100422_Bagaimana_cara_menyisipkan_Gambar_pada_Posting_di_Website_1.png',
                'temp' => '0.7253925815901774',
                'created_at' => '2018-04-04 10:04:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            61 => 
            array (
                'id_attachment' => 1206,
                'id_tabel' => 2086,
                'file_name' => '20180404100439_Bagaimana_cara_menyisipkan_Gambar_pada_Posting_di_Website_2.png',
                'temp' => '0.7253925815901774',
                'created_at' => '2018-04-04 10:04:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            62 => 
            array (
                'id_attachment' => 1207,
                'id_tabel' => 2086,
                'file_name' => '20180404100448_Bagaimana_cara_menyisipkan_Gambar_pada_Posting_di_Website_3.png',
                'temp' => '0.7253925815901774',
                'created_at' => '2018-04-04 10:04:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            63 => 
            array (
                'id_attachment' => 1208,
                'id_tabel' => 2086,
                'file_name' => '20180404102438_Bagaimana_cara_menyisipkan_Gambar_pada_Posting_di_Website_diskominfo_wonosobo_4.png',
                'temp' => '0.7253925815901774',
                'created_at' => '2018-04-04 10:24:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            64 => 
            array (
                'id_attachment' => 1211,
                'id_tabel' => 2043,
                'file_name' => '20180404115019_capture-sukseskan-survey-biaya-hidup.JPG',
                'temp' => '0.6228951981020174',
                'created_at' => '2018-04-04 11:50:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            65 => 
            array (
                'id_attachment' => 1219,
                'id_tabel' => 1888,
                'file_name' => '20180404020757_tupoksi.jpg',
                'temp' => '0.4435320376742222',
                'created_at' => '2018-04-04 14:07:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            66 => 
            array (
                'id_attachment' => 1223,
                'id_tabel' => 1886,
                'file_name' => '20180404021415_profil.jpg',
                'temp' => '0.4435320376742222',
                'created_at' => '2018-04-04 14:14:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            67 => 
            array (
                'id_attachment' => 1224,
                'id_tabel' => 1887,
                'file_name' => '20180404021606_visi-misi.jpg',
                'temp' => '0.4435320376742222',
                'created_at' => '2018-04-04 14:16:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            68 => 
            array (
                'id_attachment' => 1225,
                'id_tabel' => 1904,
                'file_name' => '20180404023546_artikel.jpg',
                'temp' => '0.4435320376742222',
                'created_at' => '2018-04-04 14:35:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            69 => 
            array (
                'id_attachment' => 1228,
                'id_tabel' => 2106,
                'file_name' => '20180405092114_peserta-sesorah-basa-jawa-pelajari-ngadi-saliro-ngedi-busono.jpg',
                'temp' => '0.5614974708407912',
                'created_at' => '2018-04-05 09:21:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            70 => 
            array (
                'id_attachment' => 1238,
                'id_tabel' => 2030,
                'file_name' => '20180405114736_download-area.jpg',
                'temp' => '0.11392825017755359',
                'created_at' => '2018-04-05 11:47:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            71 => 
            array (
                'id_attachment' => 1249,
                'id_tabel' => 1895,
                'file_name' => '20180405014755_pengaduan-masyarakat.jpg',
                'temp' => '0.4771525768036893',
                'created_at' => '2018-04-05 13:47:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            72 => 
            array (
                'id_attachment' => 1250,
                'id_tabel' => 1896,
                'file_name' => '20180405014829_permohonan-informasi.jpg',
                'temp' => '0.4771525768036893',
                'created_at' => '2018-04-05 13:48:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            73 => 
            array (
                'id_attachment' => 1252,
                'id_tabel' => 1897,
                'file_name' => '20180405015308_sppl.jpg',
                'temp' => '0.4771525768036893',
                'created_at' => '2018-04-05 13:53:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            74 => 
            array (
                'id_attachment' => 1253,
                'id_tabel' => 1898,
                'file_name' => '20180405015341_ukl-upl.jpg',
                'temp' => '0.4771525768036893',
                'created_at' => '2018-04-05 13:53:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            75 => 
            array (
                'id_attachment' => 1255,
                'id_tabel' => 1899,
                'file_name' => '20180405015415_amdal.jpg',
                'temp' => '0.4771525768036893',
                'created_at' => '2018-04-05 13:54:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            76 => 
            array (
                'id_attachment' => 1258,
                'id_tabel' => 2114,
                'file_name' => '20180406032538_surat-edaran-bupati-tentang-penyelenggaraan-usaha-pariwisata.pdf',
                'temp' => '0.7717284694070954',
                'created_at' => '2018-04-06 15:25:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            77 => 
            array (
                'id_attachment' => 1264,
                'id_tabel' => 2116,
                'file_name' => '20180409111340_accountsIcon-300x300.png',
                'temp' => '0.40068010331422854',
                'created_at' => '2018-04-09 11:13:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            78 => 
            array (
                'id_attachment' => 1271,
                'id_tabel' => 2116,
                'file_name' => '20180409025807_logo_sobo1.png',
                'temp' => '0.6095763790176869',
                'created_at' => '2018-04-09 14:58:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            79 => 
            array (
                'id_attachment' => 1275,
                'id_tabel' => 0,
                'file_name' => '20180409035202_tampil_data_posting_dilengkapi_filter_dan_paging.png',
                'temp' => '0.5469388348391268',
                'created_at' => '2018-04-09 15:52:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            80 => 
            array (
                'id_attachment' => 1276,
                'id_tabel' => 0,
                'file_name' => '20180409035225_tampil_arsip_posting_dilenkapi_filter_dan_paging.png',
                'temp' => '0.5469388348391268',
                'created_at' => '2018-04-09 15:52:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            81 => 
            array (
                'id_attachment' => 1277,
                'id_tabel' => 0,
                'file_name' => '20180409035253_tampil_data_posting_.png',
                'temp' => '0.5469388348391268',
                'created_at' => '2018-04-09 15:52:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            82 => 
            array (
                'id_attachment' => 1278,
                'id_tabel' => 0,
                'file_name' => '20180409035518_tampil_data_posting_dilengkapi_filter_dan_paging.png',
                'temp' => '0.7739962502971872',
                'created_at' => '2018-04-09 15:55:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            83 => 
            array (
                'id_attachment' => 1279,
                'id_tabel' => 0,
                'file_name' => '20180409035537_tampil_arsip_posting_dilenkapi_filter_dan_paging.png',
                'temp' => '0.7739962502971872',
                'created_at' => '2018-04-09 15:55:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            84 => 
            array (
                'id_attachment' => 1280,
                'id_tabel' => 0,
                'file_name' => '20180409035555_tampil_data_posting_.png',
                'temp' => '0.7739962502971872',
                'created_at' => '2018-04-09 15:55:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            85 => 
            array (
                'id_attachment' => 1281,
                'id_tabel' => 2118,
                'file_name' => '20180409040138_tampil_data_posting_dilengkapi_filter_dan_paging.png',
                'temp' => '0.04986990243124367',
                'created_at' => '2018-04-09 16:01:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            86 => 
            array (
                'id_attachment' => 1282,
                'id_tabel' => 2118,
                'file_name' => '20180409040152_tampil_arsip_posting_dilenkapi_filter_dan_paging.png',
                'temp' => '0.04986990243124367',
                'created_at' => '2018-04-09 16:01:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            87 => 
            array (
                'id_attachment' => 1283,
                'id_tabel' => 2118,
                'file_name' => '20180409040201_tampil_arsip_posting.png',
                'temp' => '0.04986990243124367',
                'created_at' => '2018-04-09 16:02:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            88 => 
            array (
                'id_attachment' => 1416,
                'id_tabel' => 1028813,
                'file_name' => '20180424091715_IMG201804230935301.jpg',
                'temp' => '0.7144830948849703',
                'created_at' => '2018-04-24 09:17:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            89 => 
            array (
                'id_attachment' => 1417,
                'id_tabel' => 1028815,
                'file_name' => '20180424093755_IMG-20180419-WA00401.jpeg',
                'temp' => '0.7412517125587592',
                'created_at' => '2018-04-24 09:37:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            90 => 
            array (
                'id_attachment' => 1430,
                'id_tabel' => 1028832,
                'file_name' => '20180425035540_IMG20180424102311.jpg',
                'temp' => '0.4018289072108894',
                'created_at' => '2018-04-25 15:55:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            91 => 
            array (
                'id_attachment' => 1432,
                'id_tabel' => 1028833,
                'file_name' => '20180426013938_peserta-kelas-sesorah-basa-antusias-pelajari-pamedhar-sabda.jpg',
                'temp' => '0.06925113381995662',
                'created_at' => '2018-04-26 13:39:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            92 => 
            array (
                'id_attachment' => 1433,
                'id_tabel' => 1890,
                'file_name' => '20180426014349_berita.jpg',
                'temp' => '0.39160003127074305',
                'created_at' => '2018-04-26 13:43:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            93 => 
            array (
                'id_attachment' => 1437,
                'id_tabel' => 1028842,
                'file_name' => '20180430012826_selamat-hari-keterbukaan-informasi-nasional.jpg',
                'temp' => '0.6784532457657986',
                'created_at' => '2018-04-30 13:28:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            94 => 
            array (
                'id_attachment' => 1444,
                'id_tabel' => 1028844,
                'file_name' => '20180501043116_20180405090615_template-foto-tanpa-foto-copy1.jpg',
                'temp' => '0.04574497787026366',
                'created_at' => '2018-05-01 16:31:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            95 => 
            array (
                'id_attachment' => 1445,
                'id_tabel' => 1028844,
                'file_name' => '20180501043134_sambutan-hari-pendidikan-nasional-tahun-2018.docx',
                'temp' => '0.04574497787026366',
                'created_at' => '2018-05-01 16:31:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            96 => 
            array (
                'id_attachment' => 1567,
                'id_tabel' => 2030,
                'file_name' => '20180507034132_STANDARISASI_PENYAJIAN_STATISTIK_DATA_SEKTORAL.pptx',
                'temp' => '0.9362767463568471',
                'created_at' => '2018-05-07 15:41:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            97 => 
            array (
                'id_attachment' => 1568,
                'id_tabel' => 2030,
                'file_name' => '20180507034928_Panduan_Penggunaan_Satu_Data_Wonosobo.pptx',
                'temp' => '0.22232650533755627',
                'created_at' => '2018-05-07 15:49:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            98 => 
            array (
                'id_attachment' => 1572,
                'id_tabel' => 1028944,
                'file_name' => '20180508014134_Koordinasi_statistik_sektoral_kabupaten_Wonosobo.ppt',
                'temp' => '0.35503464387426376',
                'created_at' => '2018-05-08 13:41:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            99 => 
            array (
                'id_attachment' => 1573,
                'id_tabel' => 1028944,
                'file_name' => '20180508014156_Dasar_Statistik_SEKTORAL.pptx',
                'temp' => '0.35503464387426376',
                'created_at' => '2018-05-08 13:41:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            100 => 
            array (
                'id_attachment' => 1574,
                'id_tabel' => 2030,
                'file_name' => '20180508015552_Koordinasi_statistik_sektoral_kabupaten_Wonosobo.ppt',
                'temp' => '0.6374921125170064',
                'created_at' => '2018-05-08 13:55:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            101 => 
            array (
                'id_attachment' => 1575,
                'id_tabel' => 2030,
                'file_name' => '20180508015853_Dasar_Statistik_SEKTORAL.pptx',
                'temp' => '0.6374921125170064',
                'created_at' => '2018-05-08 13:58:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            102 => 
            array (
                'id_attachment' => 1667,
                'id_tabel' => 1028977,
                'file_name' => '20180515041056_dinas-kominfo-temanggung-dan-wonosobo-tukar-pikiran-soal-tata-kelola-lppl.jpg',
                'temp' => '0.13578651041746537',
                'created_at' => '2018-05-15 16:10:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            103 => 
            array (
                'id_attachment' => 1670,
                'id_tabel' => 0,
                'file_name' => '20180518084801_huda_kidi.jpg',
                'temp' => '0.21738935649498337',
                'created_at' => '2018-05-18 08:48:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            104 => 
            array (
                'id_attachment' => 1678,
                'id_tabel' => 1028979,
                'file_name' => '20180521101640_kecamatan-garung-gandeng-hipmi-gelar-pelatihan-public-service-excellent.jpg',
                'temp' => '0.9677682883702563',
                'created_at' => '2018-05-21 10:16:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            105 => 
            array (
                'id_attachment' => 1681,
                'id_tabel' => 1028965,
                'file_name' => '20180521102217_diskominfo-gelar-pelatihan-manajemen-data.jpg',
                'temp' => '0.9677682883702563',
                'created_at' => '2018-05-21 10:22:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            106 => 
            array (
                'id_attachment' => 1682,
                'id_tabel' => 1028964,
                'file_name' => '20180521102259_gandeng-bps-sosialisasikan-statitik-sektoral.jpg',
                'temp' => '0.9677682883702563',
                'created_at' => '2018-05-21 10:22:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            107 => 
            array (
                'id_attachment' => 1683,
                'id_tabel' => 1028939,
                'file_name' => '20180521103054_20180507104855_11.jpg',
                'temp' => '0.9677682883702563',
                'created_at' => '2018-05-21 10:30:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            108 => 
            array (
                'id_attachment' => 1714,
                'id_tabel' => 1029045,
                'file_name' => '20180521021501_Panduan_Website.docx',
                'temp' => '0.9576126837290597',
                'created_at' => '2018-05-21 14:15:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            109 => 
            array (
                'id_attachment' => 1715,
                'id_tabel' => 1028950,
                'file_name' => '20180521023956_sk-ppid.jpg',
                'temp' => '0.843063537905189',
                'created_at' => '2018-05-21 14:39:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            110 => 
            array (
                'id_attachment' => 1718,
                'id_tabel' => 1028946,
                'file_name' => '20180522075315_20180405090615_template-foto-tanpa-foto-copy1.jpg',
                'temp' => '0.027088888634527963',
                'created_at' => '2018-05-22 07:53:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            111 => 
            array (
                'id_attachment' => 1720,
                'id_tabel' => 1028945,
                'file_name' => '20180522084042_20180405090615_template-foto-tanpa-foto-copy1.jpg',
                'temp' => '0.9847305431324398',
                'created_at' => '2018-05-22 08:40:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            112 => 
            array (
                'id_attachment' => 1722,
                'id_tabel' => 1028950,
                'file_name' => '20180522085558_SK_PPID.pdf',
                'temp' => '0.8249848594948805',
                'created_at' => '2018-05-22 08:55:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            113 => 
            array (
                'id_attachment' => 1724,
                'id_tabel' => 1028953,
                'file_name' => '20180522091157_galeri-ppid.jpg',
                'temp' => '0.8249848594948805',
                'created_at' => '2018-05-22 09:11:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            114 => 
            array (
                'id_attachment' => 1725,
                'id_tabel' => 1028952,
                'file_name' => '20180522091319_struktur-ppid.jpg',
                'temp' => '0.8249848594948805',
                'created_at' => '2018-05-22 09:13:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            115 => 
            array (
                'id_attachment' => 1726,
                'id_tabel' => 1028951,
                'file_name' => '20180522091427_info-publik.jpg',
                'temp' => '0.6480328780315083',
                'created_at' => '2018-05-22 09:14:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            116 => 
            array (
                'id_attachment' => 1728,
                'id_tabel' => 1028954,
                'file_name' => '20180522091945_informasi-berkala.jpg',
                'temp' => '0.6480328780315083',
                'created_at' => '2018-05-22 09:19:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            117 => 
            array (
                'id_attachment' => 1730,
                'id_tabel' => 1028954,
                'file_name' => '20180522092339_Renstra_2017-2021.rar',
                'temp' => '0.04841708942238898',
                'created_at' => '2018-05-22 09:23:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            118 => 
            array (
                'id_attachment' => 1731,
                'id_tabel' => 1028954,
                'file_name' => '20180522092458_Renja_2018.rar',
                'temp' => '0.04841708942238898',
                'created_at' => '2018-05-22 09:24:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            119 => 
            array (
                'id_attachment' => 1732,
                'id_tabel' => 1028954,
                'file_name' => '20180522092753_CALK_2017.pdf',
                'temp' => '0.5708700170986056',
                'created_at' => '2018-05-22 09:27:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            120 => 
            array (
                'id_attachment' => 1733,
                'id_tabel' => 1028954,
                'file_name' => '20180522093048_Laporan_Aset_2017.pdf',
                'temp' => '0.5708700170986056',
                'created_at' => '2018-05-22 09:30:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            121 => 
            array (
                'id_attachment' => 1734,
                'id_tabel' => 1028954,
                'file_name' => '20180522093430_DPA_DISKOMINFO_2018.pdf',
                'temp' => '0.5708700170986056',
                'created_at' => '2018-05-22 09:34:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            122 => 
            array (
                'id_attachment' => 1735,
                'id_tabel' => 1028954,
                'file_name' => '20180522094238_DPA_DISKOMINFO_2017.pdf',
                'temp' => '0.9763001626693626',
                'created_at' => '2018-05-22 09:42:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            123 => 
            array (
                'id_attachment' => 1736,
                'id_tabel' => 1028955,
                'file_name' => '20180522094526_tersedia-setiap-saat.jpg',
                'temp' => '0.9763001626693626',
                'created_at' => '2018-05-22 09:45:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            124 => 
            array (
                'id_attachment' => 1737,
                'id_tabel' => 1028956,
                'file_name' => '20180522094631_serta-merta.jpg',
                'temp' => '0.9763001626693626',
                'created_at' => '2018-05-22 09:46:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            125 => 
            array (
                'id_attachment' => 1738,
                'id_tabel' => 1028957,
                'file_name' => '20180522094727_dikecualikan.jpg',
                'temp' => '0.9763001626693626',
                'created_at' => '2018-05-22 09:47:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            126 => 
            array (
                'id_attachment' => 1754,
                'id_tabel' => 1028955,
                'file_name' => '20180522125728_Renstra_2017-2021.rar',
                'temp' => '0.00035181198389788726',
                'created_at' => '2018-05-22 12:57:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            127 => 
            array (
                'id_attachment' => 1755,
                'id_tabel' => 1028955,
                'file_name' => '20180522125808_Renja_2018.rar',
                'temp' => '0.00035181198389788726',
                'created_at' => '2018-05-22 12:58:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            128 => 
            array (
                'id_attachment' => 1756,
                'id_tabel' => 1028955,
                'file_name' => '20180522125909_CALK_2017.pdf',
                'temp' => '0.00035181198389788726',
                'created_at' => '2018-05-22 12:59:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            129 => 
            array (
                'id_attachment' => 1758,
                'id_tabel' => 1028955,
                'file_name' => '20180522010032_Laporan_Aset_2017.pdf',
                'temp' => '0.707561035471229',
                'created_at' => '2018-05-22 13:00:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            130 => 
            array (
                'id_attachment' => 1759,
                'id_tabel' => 1028955,
                'file_name' => '20180522010246_DPA_DISKOMINFO_2018.pdf',
                'temp' => '0.707561035471229',
                'created_at' => '2018-05-22 13:02:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            131 => 
            array (
                'id_attachment' => 1760,
                'id_tabel' => 1028955,
                'file_name' => '20180522010421_DPA_DISKOMINFO_2017.pdf',
                'temp' => '0.707561035471229',
                'created_at' => '2018-05-22 13:04:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            132 => 
            array (
                'id_attachment' => 1761,
                'id_tabel' => 1028955,
                'file_name' => '20180522010502_DIP.pdf',
                'temp' => '0.707561035471229',
                'created_at' => '2018-05-22 13:05:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            133 => 
            array (
                'id_attachment' => 1762,
                'id_tabel' => 1028955,
                'file_name' => '20180522010925_Daftar_Website_OPD_se-Kab._Wonosobo',
                'temp' => '0.707561035471229',
                'created_at' => '2018-05-22 13:09:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            134 => 
            array (
                'id_attachment' => 1787,
                'id_tabel' => 1029129,
                'file_name' => '20180523101052_Cara_Menambahkan_Timeline_Twitter_di_Website_1.png',
                'temp' => '0.8095352776130633',
                'created_at' => '2018-05-23 10:10:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            135 => 
            array (
                'id_attachment' => 1788,
                'id_tabel' => 1029129,
                'file_name' => '20180523101100_Cara_Menambahkan_Timeline_Twitter_di_Website_2.png',
                'temp' => '0.8095352776130633',
                'created_at' => '2018-05-23 10:11:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            136 => 
            array (
                'id_attachment' => 1789,
                'id_tabel' => 1029129,
                'file_name' => '20180523101112_Cara_Menambahkan_Timeline_Twitter_di_Website_3.png',
                'temp' => '0.8095352776130633',
                'created_at' => '2018-05-23 10:11:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            137 => 
            array (
                'id_attachment' => 1790,
                'id_tabel' => 1029129,
                'file_name' => '20180523101119_Cara_Menambahkan_Timeline_Twitter_di_Website_4.png',
                'temp' => '0.8095352776130633',
                'created_at' => '2018-05-23 10:11:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            138 => 
            array (
                'id_attachment' => 1791,
                'id_tabel' => 1029129,
                'file_name' => '20180523101129_Cara_Menambahkan_Timeline_Twitter_di_Website_5.png',
                'temp' => '0.8095352776130633',
                'created_at' => '2018-05-23 10:11:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            139 => 
            array (
                'id_attachment' => 1792,
                'id_tabel' => 1029129,
                'file_name' => '20180523102659_Cara_Menambahkan_Timeline_Twitter_di_Website_7.png',
                'temp' => '0.693320801254844',
                'created_at' => '2018-05-23 10:26:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            140 => 
            array (
                'id_attachment' => 1793,
                'id_tabel' => 1029129,
                'file_name' => '20180523102714_Cara_Menambahkan_Timeline_Twitter_di_Website_6.png',
                'temp' => '0.693320801254844',
                'created_at' => '2018-05-23 10:27:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            141 => 
            array (
                'id_attachment' => 1808,
                'id_tabel' => 1927,
                'file_name' => '20180525074552_smart-city.jpg',
                'temp' => '0.738499408337844',
                'created_at' => '2018-05-25 07:45:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            142 => 
            array (
                'id_attachment' => 1809,
                'id_tabel' => 1901,
                'file_name' => '20180525075221_SOSIALISASI_DAN_PELATIHAN_OPEN_DATA_KABUPATEN_WONOSOBO.jpg',
                'temp' => '0.6113053569248528',
                'created_at' => '2018-05-25 07:52:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            143 => 
            array (
                'id_attachment' => 1810,
                'id_tabel' => 1029195,
                'file_name' => '20180525085909_sosialisasi-dan-pelatihan-open-data-kabupaten-wonosobo.jpg',
                'temp' => '0.28698007050951957',
                'created_at' => '2018-05-25 08:59:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            144 => 
            array (
                'id_attachment' => 1814,
                'id_tabel' => 1028955,
                'file_name' => '20180525103033_struktur-organisasi.jpg',
                'temp' => '0.19985734133161137',
                'created_at' => '2018-05-25 10:30:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            145 => 
            array (
                'id_attachment' => 1818,
                'id_tabel' => 1029197,
                'file_name' => '20180527101258_Undangan_Desk_PPID.pdf',
                'temp' => '0.748351160697787',
                'created_at' => '2018-05-27 22:12:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            146 => 
            array (
                'id_attachment' => 1828,
                'id_tabel' => 1029196,
                'file_name' => '20180528082745_info.jpg',
                'temp' => '0.2607648291123943',
                'created_at' => '2018-05-28 08:27:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            147 => 
            array (
                'id_attachment' => 1859,
                'id_tabel' => 1029308,
                'file_name' => '20180531110800_IMG-20180531-WA00151.jpg',
                'temp' => '0.9462046782138573',
                'created_at' => '2018-05-31 11:08:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            148 => 
            array (
                'id_attachment' => 1890,
                'id_tabel' => 1029358,
                'file_name' => '20180604113446_Desert.jpg',
                'temp' => '0.7435398921964098',
                'created_at' => '2018-06-04 11:34:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            149 => 
            array (
                'id_attachment' => 1892,
                'id_tabel' => 1029358,
                'file_name' => '20180604113507_Penguins.jpg',
                'temp' => '0.7435398921964098',
                'created_at' => '2018-06-04 11:35:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            150 => 
            array (
                'id_attachment' => 1984,
                'id_tabel' => 84,
                'file_name' => '20180607115636_JATENG.png',
                'temp' => '',
                'created_at' => '2018-06-07 11:56:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            151 => 
            array (
                'id_attachment' => 1994,
                'id_tabel' => 1029508,
                'file_name' => '20180607010211_Untitled1.png',
                'temp' => '0.2501106363388623',
                'created_at' => '2018-06-07 13:02:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            152 => 
            array (
                'id_attachment' => 1996,
                'id_tabel' => 1028950,
                'file_name' => '20180607011010_sk-ppid-pic.jpg',
                'temp' => '0.6882436179141767',
                'created_at' => '2018-06-07 13:10:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            153 => 
            array (
                'id_attachment' => 2010,
                'id_tabel' => 1028959,
                'file_name' => '20180608094825_laporan-aset-2017-hal-1.jpg',
                'temp' => '0.0836337767344586',
                'created_at' => '2018-06-08 09:48:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            154 => 
            array (
                'id_attachment' => 2011,
                'id_tabel' => 1028959,
                'file_name' => '20180608094836_laporan-aset-2017-hal-2.jpg',
                'temp' => '0.0836337767344586',
                'created_at' => '2018-06-08 09:48:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            155 => 
            array (
                'id_attachment' => 2012,
                'id_tabel' => 1028959,
                'file_name' => '20180608095100_Laporan_Aset_2017.pdf',
                'temp' => '0.0836337767344586',
                'created_at' => '2018-06-08 09:51:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            156 => 
            array (
                'id_attachment' => 2013,
                'id_tabel' => 1028767,
                'file_name' => '20180608100955_DPA_DISKOMINFO_2017.pdf',
                'temp' => '0.6387644467512676',
                'created_at' => '2018-06-08 10:09:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            157 => 
            array (
                'id_attachment' => 2014,
                'id_tabel' => 1028767,
                'file_name' => '20180608101213_dpa-2017-hal-1.jpg',
                'temp' => '0.6387644467512676',
                'created_at' => '2018-06-08 10:12:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            158 => 
            array (
                'id_attachment' => 2015,
                'id_tabel' => 1028767,
                'file_name' => '20180608101235_dpa-2017-hal-2.jpg',
                'temp' => '0.6387644467512676',
                'created_at' => '2018-06-08 10:12:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            159 => 
            array (
                'id_attachment' => 2055,
                'id_tabel' => 1029536,
                'file_name' => '20180626095625_tim-desk-pilkada-lakukan-pantauan-kesiapan-pelaksanaan-pilgub-2018.jpg',
                'temp' => '0.7438517441327688',
                'created_at' => '2018-06-26 21:56:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            160 => 
            array (
                'id_attachment' => 2129,
                'id_tabel' => 1029566,
                'file_name' => '20180629091740_10-inovasi-penyelenggaraan-haji-1439h-2018m.jpeg',
                'temp' => '0.029871693923793963',
                'created_at' => '2018-06-29 09:17:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            161 => 
            array (
                'id_attachment' => 2147,
                'id_tabel' => 1891,
                'file_name' => '20180629023120_TRANSPARANSI_ANGGARAN.png',
                'temp' => '0.35784752233064965',
                'created_at' => '2018-06-29 14:31:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            162 => 
            array (
                'id_attachment' => 2148,
                'id_tabel' => 84,
                'file_name' => '20180629024618_diskomino.jpg',
                'temp' => '',
                'created_at' => '2018-06-29 14:46:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            163 => 
            array (
                'id_attachment' => 2158,
                'id_tabel' => 1029570,
                'file_name' => '20180701031504_kawasan-tertib-alun-alun.jpg',
                'temp' => '0.004722467457328516',
                'created_at' => '2018-07-01 15:15:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            164 => 
            array (
                'id_attachment' => 2160,
                'id_tabel' => 1029570,
                'file_name' => '20180701032158_kawasan-tertib-alun-alun-2.jpg',
                'temp' => '0.5076160368508573',
                'created_at' => '2018-07-01 15:21:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            165 => 
            array (
                'id_attachment' => 2161,
                'id_tabel' => 1029571,
                'file_name' => '20180702081034_masyarakat-diimbau-turut-jaga-ketertiban-alun-alun-kota.jpg',
                'temp' => '0.5596799898964206',
                'created_at' => '2018-07-02 08:10:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            166 => 
            array (
                'id_attachment' => 2203,
                'id_tabel' => 84,
                'file_name' => '20180703091239_diskomino.jpg',
                'temp' => '',
                'created_at' => '2018-07-03 09:12:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            167 => 
            array (
                'id_attachment' => 2348,
                'id_tabel' => 1029665,
                'file_name' => '20180710093308_Apkasi_Otonom.jpg',
                'temp' => '0.2248506971870683',
                'created_at' => '2018-07-10 09:33:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            168 => 
            array (
                'id_attachment' => 2349,
                'id_tabel' => 1029666,
                'file_name' => '20180710094732_Pixabay-child-3264751_960_720.jpg',
                'temp' => '0.14554652808873403',
                'created_at' => '2018-07-10 09:47:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            169 => 
            array (
                'id_attachment' => 2350,
                'id_tabel' => 1029667,
                'file_name' => '20180710100658_perpus.jpg',
                'temp' => '0.20840020693716932',
                'created_at' => '2018-07-10 10:06:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            170 => 
            array (
                'id_attachment' => 2398,
                'id_tabel' => 1029705,
                'file_name' => '20180710035729_admin-sistem-informasi-pemkab-dilatih-tangkal-serangan-siber.jpg',
                'temp' => '0.024204823145727028',
                'created_at' => '2018-07-10 15:57:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            171 => 
            array (
                'id_attachment' => 2465,
                'id_tabel' => 1029714,
                'file_name' => '20180712043112_jadwal-rangkaian-hari-jadi-kabupaten-wonosobo-ke-193.jpg',
                'temp' => '0.9369027344175231',
                'created_at' => '2018-07-12 04:31:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            172 => 
            array (
                'id_attachment' => 2466,
                'id_tabel' => 1029714,
                'file_name' => '20180712043342_rangkaian-hari-jadi-kabupaten-wonosobo-ke-193.jpg',
                'temp' => '0.9369027344175231',
                'created_at' => '2018-07-12 04:33:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            173 => 
            array (
                'id_attachment' => 2467,
                'id_tabel' => 1029737,
                'file_name' => '20180712044041_resmi-dilepas-pemkab-783-calon-haji-jalani-manasik-terakhir-di-mendolo.jpg',
                'temp' => '0.82392982745359',
                'created_at' => '2018-07-12 04:40:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            174 => 
            array (
                'id_attachment' => 2468,
                'id_tabel' => 1029738,
                'file_name' => '20180712044256_sesorah-basa-jawa-kembali-digelar.jpg',
                'temp' => '0.4362880332676409',
                'created_at' => '2018-07-12 04:42:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            175 => 
            array (
                'id_attachment' => 2483,
                'id_tabel' => 1029744,
                'file_name' => '20180712045339_berkali-kali-nihil-razia-rokok-bercukai-illegal-jalan-terus.jpg',
                'temp' => '0.7649009589723457',
                'created_at' => '2018-07-12 16:53:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            176 => 
            array (
                'id_attachment' => 2484,
                'id_tabel' => 1029745,
                'file_name' => '20180712050738_overload-dan-mengganggu-lalu-lintas-tps-kali-sideng-akan-ditutup-permanen_copy.jpg',
                'temp' => '0.137703751622255',
                'created_at' => '2018-07-12 17:07:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            177 => 
            array (
                'id_attachment' => 2507,
                'id_tabel' => 1029758,
                'file_name' => '20180716011413_pelatihan-sistem-informasi-desa.jpg',
                'temp' => '0.03655731437778753',
                'created_at' => '2018-07-16 13:14:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            178 => 
            array (
                'id_attachment' => 2508,
                'id_tabel' => 1029760,
                'file_name' => '20180716012319_gelar-budaya-wujud-ekspresi-seni-budaya-daerah.jpg',
                'temp' => '0.23077799001502708',
                'created_at' => '2018-07-16 13:23:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            179 => 
            array (
                'id_attachment' => 2509,
                'id_tabel' => 1029761,
                'file_name' => '20180716013006_ribuan-bikers-brotherhood-motorcycles-club-indonesia-sambangi-wonosobo.jpg',
                'temp' => '0.968622846396473',
                'created_at' => '2018-07-16 13:30:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            180 => 
            array (
                'id_attachment' => 2510,
                'id_tabel' => 1029762,
                'file_name' => '20180716013333_ratusan-pengurus-dan-pengawasan-koperasi-ikuti-sarasehan-koperasi.jpg',
                'temp' => '0.1710971051735377',
                'created_at' => '2018-07-16 13:33:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            181 => 
            array (
                'id_attachment' => 2511,
                'id_tabel' => 1029763,
                'file_name' => '20180716013709_bbmc-meriahkan-tradisi-ruwat-rambut-gembel.jpg',
                'temp' => '0.7507891728237841',
                'created_at' => '2018-07-16 13:37:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            182 => 
            array (
                'id_attachment' => 2512,
                'id_tabel' => 1029764,
                'file_name' => '20180716015822_mengikuti-acara-kerabat-ngopi-jogja-di-dempes-kaliwiro-pemilik-izinkan-peserta-bermalam-dan-petik-kopi-di-kebun.jpg',
                'temp' => '0.8565695930611583',
                'created_at' => '2018-07-16 13:58:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            183 => 
            array (
                'id_attachment' => 2526,
                'id_tabel' => 1029775,
                'file_name' => '20180717034937_kecuali-untuk-beli-seragam-tp-pkk-boleh-akses-dana-desa.jpg',
                'temp' => '0.21112754948471824',
                'created_at' => '2018-07-17 15:49:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            184 => 
            array (
                'id_attachment' => 2563,
                'id_tabel' => 1029826,
                'file_name' => '20180718031341_ziarah-dan-tabur-bunga-makam-tokoh-dan-ulama-wonosobo.jpg',
                'temp' => '0.5768060784975186',
                'created_at' => '2018-07-18 15:13:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            185 => 
            array (
                'id_attachment' => 2575,
                'id_tabel' => 1029835,
                'file_name' => '20180718041309_peringati-hari-jadi-ke-193-bupati-ziarah-ke-makam-kh-muntaha.jpg',
                'temp' => '0.45940583198220586',
                'created_at' => '2018-07-18 16:13:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            186 => 
            array (
                'id_attachment' => 2577,
                'id_tabel' => 1029837,
                'file_name' => '20180718042000_layanan-konseling-gratis-wonosobo-anti-galau-resmi-diluncurkan.jpg',
                'temp' => '0.6499892983119406',
                'created_at' => '2018-07-18 16:20:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            187 => 
            array (
                'id_attachment' => 2578,
                'id_tabel' => 1029838,
                'file_name' => '20180718042612_fungsi-keluarga-kuatkan-mental-anak-sejak-dini.jpg',
                'temp' => '0.584252790211333',
                'created_at' => '2018-07-18 16:26:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            188 => 
            array (
                'id_attachment' => 2580,
                'id_tabel' => 1029839,
                'file_name' => '20180718045249_lomba-gapura.jpg',
                'temp' => '0.970337902257614',
                'created_at' => '2018-07-18 16:52:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            189 => 
            array (
                'id_attachment' => 2628,
                'id_tabel' => 1029854,
                'file_name' => '20180719040819_jajaran-pimpinan-daerah-ziarahi-makam-krt-setjonegoro.jpg',
                'temp' => '0.3454206012543546',
                'created_at' => '2018-07-19 16:08:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            190 => 
            array (
                'id_attachment' => 2647,
                'id_tabel' => 1029871,
                'file_name' => '20180723080721_penanaman-48-ribu-pohon-untuk-wonosobo-asri.jpg',
                'temp' => '0.1947355068837766',
                'created_at' => '2018-07-23 08:07:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            191 => 
            array (
                'id_attachment' => 2655,
                'id_tabel' => 1029876,
                'file_name' => '20180723085744_forkopimda-ikut-sepeda-dan-jalan-santai.jpg',
                'temp' => '0.09801037981277361',
                'created_at' => '2018-07-23 08:57:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            192 => 
            array (
                'id_attachment' => 2657,
                'id_tabel' => 1029877,
                'file_name' => '20180723092732_ratusan-peserta-meriahkan-kompetisi-aerobic-dan-zumba-party.jpg',
                'temp' => '0.11867182857945036',
                'created_at' => '2018-07-23 09:27:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            193 => 
            array (
                'id_attachment' => 2658,
                'id_tabel' => 1029878,
                'file_name' => '20180723093902_koperasi-harus-berkembang-dengan-basis-online.jpg',
                'temp' => '0.3981136958335936',
                'created_at' => '2018-07-23 09:39:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            194 => 
            array (
                'id_attachment' => 2680,
                'id_tabel' => 1029890,
                'file_name' => '20180723034404_prosesi-bedhol-kedhaton-awali-puncak-hari-jadi-kabupaten-wonosobo.jpg',
                'temp' => '0.9939079769170738',
                'created_at' => '2018-07-23 15:44:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            195 => 
            array (
                'id_attachment' => 2683,
                'id_tabel' => 1029892,
                'file_name' => '20180723035259_300-anak-dapat-akte-kelahiran-gratis-di-puncak-han-2018.jpg',
                'temp' => '0.8217659556512529',
                'created_at' => '2018-07-23 15:52:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            196 => 
            array (
                'id_attachment' => 2696,
                'id_tabel' => 1029894,
                'file_name' => '20180724081443_hari-anak-untuk-semua-anak.jpg',
                'temp' => '0.9882056492576776',
                'created_at' => '2018-07-24 08:14:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            197 => 
            array (
                'id_attachment' => 2712,
                'id_tabel' => 0,
                'file_name' => '20180725075142_dinilai-kompak-dan-serasi-lengger-5000-penari-tuai-pujian-warga.jpg',
                'temp' => '0.7134929729185804',
                'created_at' => '2018-07-25 07:51:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            198 => 
            array (
                'id_attachment' => 2713,
                'id_tabel' => 1029899,
                'file_name' => '20180725075733_dinilai-kompak-dan-serasi-lengger-5000-penari-tuai-pujian-warga.jpg',
                'temp' => '0.9851832463782271',
                'created_at' => '2018-07-25 07:57:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            199 => 
            array (
                'id_attachment' => 2723,
                'id_tabel' => 1029930,
                'file_name' => '20180725063726_peseerta-sesorah-belajar-bedakan-busana-khas-solo-dan-jogja.jpg',
                'temp' => '0.4367968476532982',
                'created_at' => '2018-07-25 18:37:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            200 => 
            array (
                'id_attachment' => 2724,
                'id_tabel' => 1029931,
                'file_name' => '20180725064506_diserang-bun-upas-petani-kentang-rugi-ratuasn-juta-rupiah.jpg',
                'temp' => '0.7763760934877919',
                'created_at' => '2018-07-25 18:45:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            201 => 
            array (
                'id_attachment' => 2744,
                'id_tabel' => 1029945,
                'file_name' => '20180726121341_FGD_2_Roadmap_Smartcity.pdf',
                'temp' => '0.17050034376015488',
                'created_at' => '2018-07-26 12:13:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            202 => 
            array (
                'id_attachment' => 2751,
                'id_tabel' => 1029946,
                'file_name' => '20180727074900_fgd-1.jpg',
                'temp' => '0.12101896352100594',
                'created_at' => '2018-07-27 07:49:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            203 => 
            array (
                'id_attachment' => 2752,
                'id_tabel' => 1029946,
                'file_name' => '20180727075001_fgd-2.jpg',
                'temp' => '0.12101896352100594',
                'created_at' => '2018-07-27 07:50:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            204 => 
            array (
                'id_attachment' => 2755,
                'id_tabel' => 1029935,
                'file_name' => '20180727084737_Untitled-1.jpg',
                'temp' => '0.6326337380215932',
                'created_at' => '2018-07-27 08:47:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            205 => 
            array (
                'id_attachment' => 2756,
                'id_tabel' => 1029952,
                'file_name' => '20180727085952_cover-materi-karnaval-tematik.jpg',
                'temp' => '0.2663462790552422',
                'created_at' => '2018-07-27 08:59:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            206 => 
            array (
                'id_attachment' => 2764,
                'id_tabel' => 1029955,
                'file_name' => '20180727102512_karnaval-agustusan-angkat-3-tema-utama.jpg',
                'temp' => '0.8722793206413906',
                'created_at' => '2018-07-27 10:25:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            207 => 
            array (
                'id_attachment' => 2768,
                'id_tabel' => 1029957,
                'file_name' => '20180727025203_festival-domba-wonosobo.jpeg',
                'temp' => '0.7195994201883935',
                'created_at' => '2018-07-27 14:52:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            208 => 
            array (
                'id_attachment' => 2769,
                'id_tabel' => 1029958,
                'file_name' => '20180728063801_peran-di-desa-strategis-perempuan-didorong-berani-masuk-bpd.jpg',
                'temp' => '0.7077500615986196',
                'created_at' => '2018-07-28 06:38:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            209 => 
            array (
                'id_attachment' => 2781,
                'id_tabel' => 1029962,
                'file_name' => '20180728081936_ratusan-pegulat-ambil-bagian-dalam-kajati-cup-2018.jpg',
                'temp' => '0.6653926899044273',
                'created_at' => '2018-07-28 20:19:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            210 => 
            array (
                'id_attachment' => 2782,
                'id_tabel' => 1029962,
                'file_name' => '20180728081943_ratusan-pegulat-ambil-bagian-dalam-kajati-cup-2018-2.jpg',
                'temp' => '0.6653926899044273',
                'created_at' => '2018-07-28 20:19:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            211 => 
            array (
                'id_attachment' => 2783,
                'id_tabel' => 1029963,
                'file_name' => '20180729113511_peluang-beternak-dombos-masih-menjajikan.jpg',
                'temp' => '0.9924535587543293',
                'created_at' => '2018-07-29 11:35:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            212 => 
            array (
                'id_attachment' => 2811,
                'id_tabel' => 1029967,
                'file_name' => '20180730033716_carica-jadi-kebanggaan-warga-wonosobo.jpg',
                'temp' => '0.6254887945407452',
                'created_at' => '2018-07-30 15:37:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            213 => 
            array (
                'id_attachment' => 2812,
                'id_tabel' => 1029968,
                'file_name' => '20180730041348_bupati-resmikan-klinik-layanan-kesehatan-bagi-asn.jpg',
                'temp' => '0.9408654824638032',
                'created_at' => '2018-07-30 16:13:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            214 => 
            array (
                'id_attachment' => 2828,
                'id_tabel' => 1029984,
                'file_name' => '20180731035141_service-point-mudahkan-pelayanan-bagi-pensiunan.jpg',
                'temp' => '0.7400605746493707',
                'created_at' => '2018-07-31 15:51:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            215 => 
            array (
                'id_attachment' => 2830,
                'id_tabel' => 1029985,
                'file_name' => '20180731040023_program-pjas-untuk-sekolah-sehat.jpg',
                'temp' => '0.9934813738223982',
                'created_at' => '2018-07-31 16:00:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            216 => 
            array (
                'id_attachment' => 2834,
                'id_tabel' => 1029990,
                'file_name' => '20180801013153_untuk-hasil-sembelih-yang-asuh-35-pengurus-takmir-dilatih-jadi-juleha.jpg',
                'temp' => '0.29696452136614004',
                'created_at' => '2018-08-01 13:31:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            217 => 
            array (
                'id_attachment' => 2835,
                'id_tabel' => 1029991,
                'file_name' => '20180801015920_7-pns-dilantik-sebagai-pejabat-fungsional.jpg',
                'temp' => '0.11589193459140534',
                'created_at' => '2018-08-01 13:59:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            218 => 
            array (
                'id_attachment' => 2843,
                'id_tabel' => 0,
                'file_name' => '20180801032157_wonosobo.png',
                'temp' => '0.7707205061455967',
                'created_at' => '2018-08-01 15:21:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            219 => 
            array (
                'id_attachment' => 2909,
                'id_tabel' => 1030018,
                'file_name' => '20180803084747_calon-jamaah-haji-asal-sembungan-berupaya-atasi-panasnya-kota-madinah.jpg',
                'temp' => '0.13417100714472197',
                'created_at' => '2018-08-03 08:47:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            220 => 
            array (
                'id_attachment' => 2911,
                'id_tabel' => 1030019,
                'file_name' => '20180803085556_maju-ke-6-besar-lomba-fk-metra-tingkat-provinsi-wonosobo-bertekad-raih-juara.jpg',
                'temp' => '0.41630410051845734',
                'created_at' => '2018-08-03 08:55:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            221 => 
            array (
                'id_attachment' => 2943,
                'id_tabel' => 1030498,
                'file_name' => '20180807095942_maju-lomba-paar-tingkat-nasional.jpg',
                'temp' => '0.6783588978676443',
                'created_at' => '2018-08-07 09:59:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            222 => 
            array (
                'id_attachment' => 3005,
                'id_tabel' => 1030586,
                'file_name' => '20180807035546_jambore-kpm-desa-kuripan-kecamatan-garung.jpg',
                'temp' => '0.3112302741700539',
                'created_at' => '2018-08-07 15:55:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            223 => 
            array (
                'id_attachment' => 3035,
                'id_tabel' => 1030590,
                'file_name' => '20180808080513_admin-website-desa-dikenalkan-sid.jpg',
                'temp' => '0.0990713027842367',
                'created_at' => '2018-08-08 08:05:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            224 => 
            array (
                'id_attachment' => 3059,
                'id_tabel' => 1030606,
                'file_name' => '20180809083326_dinas-ppkbpppa-bersam-ugm-gelar-workshop-penelitian-industri-rumahan-berbasis-jagung.jpg',
                'temp' => '0.8435295079447278',
                'created_at' => '2018-08-09 08:33:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            225 => 
            array (
                'id_attachment' => 3078,
                'id_tabel' => 1030610,
                'file_name' => '20180809032614_pejabat-eselon-ii-dan-pimpinan-bumd-ikuti-bintek-lhkpn.jpg',
                'temp' => '0.6945449098849998',
                'created_at' => '2018-08-09 15:26:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            226 => 
            array (
                'id_attachment' => 3091,
                'id_tabel' => 1029909,
                'file_name' => '20180810094221_struktur-organisasi.jpg',
                'temp' => '0.6284308891110577',
                'created_at' => '2018-08-10 09:42:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            227 => 
            array (
                'id_attachment' => 3093,
                'id_tabel' => 1889,
                'file_name' => '20180810100304_profil-pejabat.jpg',
                'temp' => '0.205129149526589',
                'created_at' => '2018-08-10 10:03:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            228 => 
            array (
                'id_attachment' => 3117,
                'id_tabel' => 1030632,
                'file_name' => '20180813090053_implementasi-e-government-kabupaten-wonosobo-sudah-sesuai-roadmap-d.jpg',
                'temp' => '0.2581194284951336',
                'created_at' => '2018-08-13 09:00:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            229 => 
            array (
                'id_attachment' => 3118,
                'id_tabel' => 1030652,
                'file_name' => '20180813091626_907-atlet-taekwondo-ramaikan-wonosobo-taekwondo-championship-2018-d.jpg',
                'temp' => '0.09226386192081737',
                'created_at' => '2018-08-13 09:16:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            230 => 
            array (
                'id_attachment' => 3155,
                'id_tabel' => 1030687,
                'file_name' => '20180814075033_ribuan-pelajar-ikuti-lomba-gerak-jalan-hut-ri-ke-73.jpg',
                'temp' => '0.5706878887996369',
                'created_at' => '2018-08-14 07:50:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            231 => 
            array (
                'id_attachment' => 3156,
                'id_tabel' => 1030688,
                'file_name' => '20180814081634_mahasiswa-lintas-negara-pelajari-perda-perlindungan-tki-di-lipursari.jpg',
                'temp' => '0.057408896990896796',
                'created_at' => '2018-08-14 08:16:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            232 => 
            array (
                'id_attachment' => 3180,
                'id_tabel' => 1030701,
                'file_name' => '20180815101252_60-keluarga-penyandang-isabilitas-terima-bantuan.jpg',
                'temp' => '0.8878174121974147',
                'created_at' => '2018-08-15 10:12:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            233 => 
            array (
                'id_attachment' => 3182,
                'id_tabel' => 0,
                'file_name' => '20180815102140_bupati-pimpin-apel-besar-hari-pramuka.jpg',
                'temp' => '0.8698645752414518',
                'created_at' => '2018-08-15 10:21:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            234 => 
            array (
                'id_attachment' => 3186,
                'id_tabel' => 1030703,
                'file_name' => '20180816021646_man-2-wonosobo-wakili-jateng-maju-lomba-perpustakaan-sekolah-tingkat-nasional.jpg',
                'temp' => '0.15944289087842556',
                'created_at' => '2018-08-16 14:16:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            235 => 
            array (
                'id_attachment' => 3187,
                'id_tabel' => 1030704,
                'file_name' => '20180816022334_bupati-kukuhkan-paskibra-kabupaten-wonosobo.jpg',
                'temp' => '0.005043470572718922',
                'created_at' => '2018-08-16 14:23:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            236 => 
            array (
                'id_attachment' => 3190,
                'id_tabel' => 1030705,
                'file_name' => '20180816081102_digelar-agustus-rakons-pkk-dinilai-tepat.jpg',
                'temp' => '0.3921390978257664',
                'created_at' => '2018-08-16 20:11:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            237 => 
            array (
                'id_attachment' => 3194,
                'id_tabel' => 1030708,
                'file_name' => '20180817092637_negara-hadir-untuk-wujudkan-kesejahteraan-dan-keadilan-sosial-wakil-bupati-apresiasi-kedisiplinan-pns-wsb.jpg',
                'temp' => '0.3642431216447475',
                'created_at' => '2018-08-17 09:26:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            238 => 
            array (
                'id_attachment' => 3197,
                'id_tabel' => 1030710,
                'file_name' => '20180817042210_tim-gakda-kabupaten-pastikan-tempat-hiburan-malam-tak-langgar-perda.jpg',
                'temp' => '0.8235709135051563',
                'created_at' => '2018-08-17 16:22:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            239 => 
            array (
                'id_attachment' => 3205,
                'id_tabel' => 1030714,
                'file_name' => '20180820080656_karnaval-tematik-2018-semarak-kreatif-inovatif-promotif-dan-edukatif.jpg',
                'temp' => '0.957231624232137',
                'created_at' => '2018-08-20 08:06:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            240 => 
            array (
                'id_attachment' => 3215,
                'id_tabel' => 1030719,
                'file_name' => '20180821075532_jadikan-veteran-sebagai-figur-yang-inspiratif.jpg',
                'temp' => '0.8506441853829396',
                'created_at' => '2018-08-21 07:55:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            241 => 
            array (
                'id_attachment' => 3226,
                'id_tabel' => 1030722,
                'file_name' => '20180821021245_bupati-pimpin-rapat-umum-pemegang-saham-perusahaan-daerah-pt-bima-lukar-kabupaten-wonosobo.jpg',
                'temp' => '0.7428278768211589',
                'created_at' => '2018-08-21 14:12:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            242 => 
            array (
                'id_attachment' => 3240,
                'id_tabel' => 1030726,
                'file_name' => '20180823075011_kendaraan-hias-rsud-setjonegoro-raih-predikat-terbaik.jpg',
                'temp' => '0.3068171481297983',
                'created_at' => '2018-08-23 07:50:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            243 => 
            array (
                'id_attachment' => 3241,
                'id_tabel' => 0,
                'file_name' => '20180823080901_dandim-0707-sumbang-sapi-dan-kambing_di-hari-raya-idul-adha.jpg',
                'temp' => '0.6518724320996203',
                'created_at' => '2018-08-23 08:09:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            244 => 
            array (
                'id_attachment' => 3264,
                'id_tabel' => 1030734,
                'file_name' => '20180824103837_bupati-tunggu-hasil-analisa-puslabfor-polda.jpg',
                'temp' => '0.09783417237555181',
                'created_at' => '2018-08-24 10:38:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            245 => 
            array (
                'id_attachment' => 3275,
                'id_tabel' => 2030,
                'file_name' => '20180827022014_STANDARISASI_PENYAJIAN_STATISTIK_DATA_SEKTORAL.pptx',
                'temp' => '0.5909290101784892',
                'created_at' => '2018-08-27 14:20:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            246 => 
            array (
                'id_attachment' => 3276,
                'id_tabel' => 2030,
                'file_name' => '20180827022300_Panduan_Penggunaan_Satu_Data_Wonosobo.pptx',
                'temp' => '0.5909290101784892',
                'created_at' => '2018-08-27 14:23:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            247 => 
            array (
                'id_attachment' => 3281,
                'id_tabel' => 2030,
                'file_name' => '20180827040748_Dasar_Statistik_SEKTORAL.pptx',
                'temp' => '0.14935108385057538',
                'created_at' => '2018-08-27 16:07:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            248 => 
            array (
                'id_attachment' => 3282,
                'id_tabel' => 2030,
                'file_name' => '20180827043938_Koordinasi_statistik_sektoral_kabupaten_Wonosobo.ppt',
                'temp' => '0.695359549892725',
                'created_at' => '2018-08-27 16:39:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            249 => 
            array (
                'id_attachment' => 3283,
                'id_tabel' => 1030742,
                'file_name' => '20180828084646_grup-kesenian-fk-metra-wonosobo-tampil-maksimal-di-prpp.jpg',
                'temp' => '0.4660083935826733',
                'created_at' => '2018-08-28 08:46:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            250 => 
            array (
                'id_attachment' => 3335,
                'id_tabel' => 1030763,
                'file_name' => '20180830105658_Renstra_2017-2021.rar',
                'temp' => '0.32305463588491423',
                'created_at' => '2018-08-30 10:56:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            251 => 
            array (
                'id_attachment' => 3336,
                'id_tabel' => 1030765,
                'file_name' => '20180830123214_wabup-harapkan-survei-kepuasan-masyarakat-wsb.jpg',
                'temp' => '0.26247107281173143',
                'created_at' => '2018-08-30 12:32:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            252 => 
            array (
                'id_attachment' => 3337,
                'id_tabel' => 0,
                'file_name' => '20180830123946_wakil-bupati-tegaskan-kemiskinan-masih-menjadi-permasalahan-yang-harus-diselesaikan.jpg',
                'temp' => '0.3764331498618203',
                'created_at' => '2018-08-30 12:39:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            253 => 
            array (
                'id_attachment' => 3338,
                'id_tabel' => 1030766,
                'file_name' => '20180830124300_wakil-bupati-tegaskan-kemiskinan-masih-menjadi-permasalahan-yang-harus-diselesaikan.jpg',
                'temp' => '0.4396262270098781',
                'created_at' => '2018-08-30 12:43:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            254 => 
            array (
                'id_attachment' => 3339,
                'id_tabel' => 1030767,
                'file_name' => '20180830124944_bersama-komisi-a-pemkab-wonosobo-pantau-pelaksanaan-tes-pengisian-perangkat-desa.jpg',
                'temp' => '0.043263416312573355',
                'created_at' => '2018-08-30 12:49:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            255 => 
            array (
                'id_attachment' => 3340,
                'id_tabel' => 1030768,
                'file_name' => '20180830125633_ribuan-benih-ikan-ditebar-di-3-aliran-sungai.jpg',
                'temp' => '0.2790428459029626',
                'created_at' => '2018-08-30 12:56:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            256 => 
            array (
                'id_attachment' => 3341,
                'id_tabel' => 1030769,
                'file_name' => '20180830010510_bupati-serahkan-bantuan-korban-kebakaran.jpg',
                'temp' => '0.6264699374072287',
                'created_at' => '2018-08-30 13:05:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            257 => 
            array (
                'id_attachment' => 3342,
                'id_tabel' => 1030770,
                'file_name' => '20180830010941_setjen-wantanas-lakukan-pengkajian-daerah-di-wonosobo.jpg',
                'temp' => '0.9211588556664592',
                'created_at' => '2018-08-30 13:09:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            258 => 
            array (
                'id_attachment' => 3343,
                'id_tabel' => 1030771,
                'file_name' => '20180830011655_bregodo-ii-sesorah-basa-jawa-tuntaskan-gladen.jpg',
                'temp' => '0.020293617868359037',
                'created_at' => '2018-08-30 13:16:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            259 => 
            array (
                'id_attachment' => 3344,
                'id_tabel' => 1030772,
                'file_name' => '20180830020646_dinas-ppkbpppa-gelar-workshop-bagi-pengurus-basis-komunitas-se-kabupaten-wonosobo_.jpg',
                'temp' => '0.2992392119653333',
                'created_at' => '2018-08-30 14:06:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            260 => 
            array (
                'id_attachment' => 3356,
                'id_tabel' => 1030789,
                'file_name' => '20180831100841_20180830_103259.jpg',
                'temp' => '0.9184700895147269',
                'created_at' => '2018-08-31 10:08:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            261 => 
            array (
                'id_attachment' => 3357,
                'id_tabel' => 1030789,
                'file_name' => '20180831100912_20180830_103304.jpg',
                'temp' => '0.9184700895147269',
                'created_at' => '2018-08-31 10:09:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            262 => 
            array (
                'id_attachment' => 3358,
                'id_tabel' => 1030789,
                'file_name' => '20180831100939_20180830_103250.jpg',
                'temp' => '0.9184700895147269',
                'created_at' => '2018-08-31 10:09:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            263 => 
            array (
                'id_attachment' => 3363,
                'id_tabel' => 1030795,
                'file_name' => '20180831044804_IMG-20180831-WA0002.jpg',
                'temp' => '0.3568516920820972',
                'created_at' => '2018-08-31 16:48:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            264 => 
            array (
                'id_attachment' => 3368,
                'id_tabel' => 1030796,
                'file_name' => '20180903084229_dua-pemuda-ngoplos-terjaring-razia.jpg',
                'temp' => '0.5841468536022669',
                'created_at' => '2018-09-03 08:42:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            265 => 
            array (
                'id_attachment' => 3369,
                'id_tabel' => 1030797,
                'file_name' => '20180903084457_nihil-pernikahan-dini-kelurahan-wonoroto-percaya-diri-jadi-terbaik-paar-nasional.jpg',
                'temp' => '0.06204539635021744',
                'created_at' => '2018-09-03 08:44:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            266 => 
            array (
                'id_attachment' => 3373,
                'id_tabel' => 1030800,
                'file_name' => '20180903015611_galang-dana-swadaya-paguyuban-sopir-angkutan-perbaiki-200-meter-jalan-kabupaten.jpg',
                'temp' => '0.677996616389634',
                'created_at' => '2018-09-03 13:56:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            267 => 
            array (
                'id_attachment' => 3374,
                'id_tabel' => 1030801,
                'file_name' => '20180903020213_estafet-tunas-kelapa-2018-memasuki-kabupaten-wonosobo.jpg',
                'temp' => '0.7777575089984827',
                'created_at' => '2018-09-03 14:02:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            268 => 
            array (
                'id_attachment' => 3380,
                'id_tabel' => 1030816,
                'file_name' => '20180904033242_wabup-ingatkan-camat-pakta-integritas-percepatan-odf.jpg',
                'temp' => '0.24649398776075326',
                'created_at' => '2018-09-04 15:32:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            269 => 
            array (
                'id_attachment' => 3514,
                'id_tabel' => 1030895,
                'file_name' => '20180906032755_IMG-20180906-WA0071.jpg',
                'temp' => '0.03669561331275273',
                'created_at' => '2018-09-06 15:27:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            270 => 
            array (
                'id_attachment' => 3528,
                'id_tabel' => 1030917,
                'file_name' => '20180907081720_bupati-serahkan-bantuan-korban-kebakaran-rumah.jpg',
                'temp' => '0.7495740745350852',
                'created_at' => '2018-09-07 08:17:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            271 => 
            array (
                'id_attachment' => 3529,
                'id_tabel' => 1030918,
                'file_name' => '20180907082405_bupati-dorong-smart-city-terintegrasi-layanan-publik.jpg',
                'temp' => '0.48845392502803775',
                'created_at' => '2018-09-07 08:24:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            272 => 
            array (
                'id_attachment' => 3538,
                'id_tabel' => 1030922,
                'file_name' => '20180907090319_korban-kebakaran-wadaslintang-terima-bantuan.jpg',
                'temp' => '0.3719025559513085',
                'created_at' => '2018-09-07 09:03:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            273 => 
            array (
                'id_attachment' => 3739,
                'id_tabel' => 1030997,
                'file_name' => '20180914101940_8-pasien-bibir-sumbing-jalani-operasi.jpg',
                'temp' => '0.2781105112915192',
                'created_at' => '2018-09-14 10:19:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            274 => 
            array (
                'id_attachment' => 3743,
                'id_tabel' => 1030999,
                'file_name' => '20180914102726_240-pelajar-ikuti-lomba-mtq-tingkat-kabupaten-wonosobo.jpg',
                'temp' => '0.05384103633573889',
                'created_at' => '2018-09-14 10:27:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            275 => 
            array (
                'id_attachment' => 3744,
                'id_tabel' => 1031000,
                'file_name' => '20180914103301_pemkab-wonosobo-gelar-penilaian-lomba-inovasi-pelayanan-publik.jpg',
                'temp' => '0.646243035281425',
                'created_at' => '2018-09-14 10:33:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            276 => 
            array (
                'id_attachment' => 3745,
                'id_tabel' => 1031001,
                'file_name' => '20180914104033_kepala-sekolah-dituntut-fokus-untuk-tingkatkan-kualitas-pendidikan.jpg',
                'temp' => '0.1748017565672153',
                'created_at' => '2018-09-14 10:40:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            277 => 
            array (
                'id_attachment' => 3759,
                'id_tabel' => 1031009,
                'file_name' => '20180916072912_pengelolaan-layanan-aduan-masyarakat-merujuk-ke-bandung-command-centre.jpg',
                'temp' => '0.38001045770986486',
                'created_at' => '2018-09-16 19:29:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            278 => 
            array (
                'id_attachment' => 3760,
                'id_tabel' => 1031010,
                'file_name' => '20180916073815_bakti-sosial-operasi-katarak.jpg',
                'temp' => '0.19299197867602325',
                'created_at' => '2018-09-16 19:38:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            279 => 
            array (
                'id_attachment' => 3891,
                'id_tabel' => 1031115,
                'file_name' => '20180919023758_wsbPemKab.jpg',
                'temp' => '0.010231637081481892',
                'created_at' => '2018-09-19 14:37:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            280 => 
            array (
                'id_attachment' => 3930,
                'id_tabel' => 1031157,
                'file_name' => '20180920105920_asisten-administrasi-setda-minta-kades-untuk-proaktif.jpg',
                'temp' => '0.8503123009314912',
                'created_at' => '2018-09-20 10:59:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            281 => 
            array (
                'id_attachment' => 3991,
                'id_tabel' => 1031184,
                'file_name' => '20180920121452_Gelar_Informasi_dan_Pelayanan_Publik.jpg',
                'temp' => '0.1722038710519811',
                'created_at' => '2018-09-20 12:14:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            282 => 
            array (
                'id_attachment' => 4060,
                'id_tabel' => 1031216,
                'file_name' => '20180921074249_pemkab-buka-bukaan-di-gelar-informasi-dan-pelayanan-publik.jpg',
                'temp' => '0.5103377110108007',
                'created_at' => '2018-09-21 07:42:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            283 => 
            array (
                'id_attachment' => 4061,
                'id_tabel' => 1031217,
                'file_name' => '20180921074838_warga-wonosobo-bisa-mengadu-ke-ganjar-pranowo-lewat-aplikasi-laporgub.jpg',
                'temp' => '0.4996245921056379',
                'created_at' => '2018-09-21 07:48:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            284 => 
            array (
                'id_attachment' => 4120,
                'id_tabel' => 1031241,
                'file_name' => '20180924075312_bps-touring-bareng-sahabat-statistik-ke-bukit-seroja.jpg',
                'temp' => '0.6017274134141071',
                'created_at' => '2018-09-24 07:53:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            285 => 
            array (
                'id_attachment' => 4143,
                'id_tabel' => 1031256,
                'file_name' => '20180924033310_di-pentaskan-ki-bambang-sutejo-lakon-suryatmaja-surtikanthi-tuai-pujian-dari-turis-belanda.jpg',
                'temp' => '0.47797270952029347',
                'created_at' => '2018-09-24 15:33:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            286 => 
            array (
                'id_attachment' => 4160,
                'id_tabel' => 1031261,
                'file_name' => '20180924095252_sudah-90-persen-bpn-wonosobo-optimis-40-ribu-sertifikat-rampung-akhir-tahun.jpg',
                'temp' => '0.8056278323872548',
                'created_at' => '2018-09-24 21:52:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            287 => 
            array (
                'id_attachment' => 4161,
                'id_tabel' => 1031262,
                'file_name' => '20180924095721_kependudukan-baru-kki-dan-fapsedu-kabupaten-wonosobo-dikukuhkan.jpg',
                'temp' => '0.16919097578042952',
                'created_at' => '2018-09-24 21:57:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            288 => 
            array (
                'id_attachment' => 4186,
                'id_tabel' => 1031272,
                'file_name' => '20180925035335_ginpp.jpg',
                'temp' => '0.9499585800225232',
                'created_at' => '2018-09-25 15:53:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            289 => 
            array (
                'id_attachment' => 4188,
                'id_tabel' => 1031273,
                'file_name' => '20180925091635_wsbPemKab.jpg',
                'temp' => '0.07410788856128714',
                'created_at' => '2018-09-25 21:16:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            290 => 
            array (
                'id_attachment' => 4241,
                'id_tabel' => 1031309,
                'file_name' => '20180926015608_siswa-siswa-kelas-7b-sperosel-belajar-mengenali-proses-pengolahan-teh-dari-hulu-ke-hilir.jpg',
                'temp' => '0.18666589747409446',
                'created_at' => '2018-09-26 13:56:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            291 => 
            array (
                'id_attachment' => 4265,
                'id_tabel' => 1031326,
                'file_name' => '20180926034010_kalimendong-kandidat-juara-lbs-tingkat-jawa-tengah.jpg',
                'temp' => '0.917802533892931',
                'created_at' => '2018-09-26 15:40:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            292 => 
            array (
                'id_attachment' => 4339,
                'id_tabel' => 1031371,
                'file_name' => '20180927032852_bupati-wonosobo-terima-anugerah-kebudayaan-dari-kementerian-pendidikan-dan-kebudayaan.jpg',
                'temp' => '0.5145904534918493',
                'created_at' => '2018-09-27 15:28:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            293 => 
            array (
                'id_attachment' => 4355,
                'id_tabel' => 1031380,
                'file_name' => '20180928074008_kecamatan-kejajar-gelar-peningkatan-kapasitas-admin-website-desa-dan-kecamatan.jpg',
                'temp' => '0.5881147882310149',
                'created_at' => '2018-09-28 07:40:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            294 => 
            array (
                'id_attachment' => 4392,
                'id_tabel' => 1031411,
                'file_name' => '20180930033256_jaringan-internet-desa-segera-diperluas.jpg',
                'temp' => '0.18733263060653793',
                'created_at' => '2018-09-30 15:32:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            295 => 
            array (
                'id_attachment' => 4430,
                'id_tabel' => 1031272,
                'file_name' => '20181002082149_materi-gelar-informasi-dan-pelayanan-publik-2018.zip',
                'temp' => '0.7616049298478493',
                'created_at' => '2018-10-02 08:21:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            296 => 
            array (
                'id_attachment' => 4431,
                'id_tabel' => 1031425,
                'file_name' => '20181002082323_rokok-kadaluarsa-masih-beredar-di-pasar-konsumen-diminta-lebih-teliti.jpg',
                'temp' => '0.009505227060832011',
                'created_at' => '2018-10-02 08:23:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            297 => 
            array (
                'id_attachment' => 4462,
                'id_tabel' => 1031529,
                'file_name' => '20181002041359_bkd-imbau-pendaftar-cpns-manfaatkan-waktu-di-luar-jam-sibuk-siasati-kendala-akses.jpg',
                'temp' => '0.4601566045731529',
                'created_at' => '2018-10-02 16:13:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            298 => 
            array (
                'id_attachment' => 4656,
                'id_tabel' => 1031639,
                'file_name' => '20181004081423_sinergi-opd-diperlukan-kembangkan-industri-rumahan.jpg',
                'temp' => '0.9812792632166347',
                'created_at' => '2018-10-04 08:14:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            299 => 
            array (
                'id_attachment' => 4665,
                'id_tabel' => 1031646,
                'file_name' => '20181004094601_WhatsApp_Image_2018-10-03_at_11.47',
                'temp' => '0.22383165756010293',
                'created_at' => '2018-10-04 09:46:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            300 => 
            array (
                'id_attachment' => 4666,
                'id_tabel' => 1031646,
                'file_name' => '20181004094614_WhatsApp_Image_2018-10-03_at_11.47',
                'temp' => '0.22383165756010293',
                'created_at' => '2018-10-04 09:46:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            301 => 
            array (
                'id_attachment' => 4667,
                'id_tabel' => 1031646,
                'file_name' => '20181004094627_WhatsApp_Image_2018-10-03_at_11.47',
                'temp' => '0.22383165756010293',
                'created_at' => '2018-10-04 09:46:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            302 => 
            array (
                'id_attachment' => 4671,
                'id_tabel' => 1031650,
                'file_name' => '20181004095142_20180416_111924.jpg',
                'temp' => '0.5774903092548536',
                'created_at' => '2018-10-04 09:51:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            303 => 
            array (
                'id_attachment' => 4672,
                'id_tabel' => 1031649,
                'file_name' => '20181004095251_1.jpeg',
                'temp' => '0.2284320355713263',
                'created_at' => '2018-10-04 09:52:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            304 => 
            array (
                'id_attachment' => 4673,
                'id_tabel' => 1031649,
                'file_name' => '20181004095303_3.jpeg',
                'temp' => '0.2284320355713263',
                'created_at' => '2018-10-04 09:53:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            305 => 
            array (
                'id_attachment' => 4674,
                'id_tabel' => 1031649,
                'file_name' => '20181004095314_2.jpeg',
                'temp' => '0.2284320355713263',
                'created_at' => '2018-10-04 09:53:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            306 => 
            array (
                'id_attachment' => 4711,
                'id_tabel' => 1031704,
                'file_name' => '20181004030402_wonosobo-tuan-rumah-festival-ham-indonesia-2018.jpg',
                'temp' => '0.45008876847540913',
                'created_at' => '2018-10-04 15:04:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            307 => 
            array (
                'id_attachment' => 4795,
                'id_tabel' => 2030,
                'file_name' => '20181005084506_materi-cerdas-cermat.zip',
                'temp' => '0.19998573562481892',
                'created_at' => '2018-10-05 08:45:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            308 => 
            array (
                'id_attachment' => 4802,
                'id_tabel' => 1030851,
                'file_name' => '20181005093544_Contoh_Surat_Permohonan_Website_Surat_Kuasa.pdf',
                'temp' => '0.20651636376737104',
                'created_at' => '2018-10-05 09:35:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            309 => 
            array (
                'id_attachment' => 4839,
                'id_tabel' => 1031745,
                'file_name' => '20181008074522_peringati-tahun-baru-islam-wapub-ajak-masyarakat-jadi-pribadi-lebih-baik.jpg',
                'temp' => '0.7600954527733708',
                'created_at' => '2018-10-08 07:45:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            310 => 
            array (
                'id_attachment' => 4840,
                'id_tabel' => 1031746,
                'file_name' => '20181008075822_raih-pakarti-utama-i-wonosobo-antar-jateng-juara-umum-hkg-pkk-ke-46.jpg',
                'temp' => '0.5567650180258672',
                'created_at' => '2018-10-08 07:58:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            311 => 
            array (
                'id_attachment' => 4917,
                'id_tabel' => 1031800,
                'file_name' => '20181009102242_bupati-tebar-1000-benih-ikan-sidat-di-sungai-serayu.jpg',
                'temp' => '0.7033739842783164',
                'created_at' => '2018-10-09 10:22:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            312 => 
            array (
                'id_attachment' => 5046,
                'id_tabel' => 1031868,
                'file_name' => '20181010051525_penghimpunan-dana-capai-103-persen-bank-jateng-terus-harapkan-dukungan-masyarakat.jpg',
                'temp' => '0.4579950708197622',
                'created_at' => '2018-10-10 17:15:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            313 => 
            array (
                'id_attachment' => 5049,
                'id_tabel' => 1031870,
                'file_name' => '20181010052204_bupati-harapkan-sinergi-antar-pihak-demi-suksesnya-progam-kredit-usaha-rakyat-di-wonosobo.jpg',
                'temp' => '0.6123955952621878',
                'created_at' => '2018-10-10 17:22:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            314 => 
            array (
                'id_attachment' => 5054,
                'id_tabel' => 1031872,
                'file_name' => '20181010053514_kukuhkan-kontingen-porprov-bupati-janjikan-bonus-30-juta-untuk-peraih-mendali-emas.jpg',
                'temp' => '0.2241776113510665',
                'created_at' => '2018-10-10 17:35:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            315 => 
            array (
                'id_attachment' => 5055,
                'id_tabel' => 1031873,
                'file_name' => '20181010054223_kabupaten-trenggalek-belajar-pengelolaan-dbhcht-di-kabupaten-wonosobo.jpg',
                'temp' => '0.45460242266760953',
                'created_at' => '2018-10-10 17:42:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            316 => 
            array (
                'id_attachment' => 5527,
                'id_tabel' => 1032041,
                'file_name' => '20181012095143_gudep-sman-1-mojotengah-raih-juara-pramuka-peduli-award-2018.jpg',
                'temp' => '0.3101629727562871',
                'created_at' => '2018-10-12 21:51:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            317 => 
            array (
                'id_attachment' => 5538,
                'id_tabel' => 1032048,
                'file_name' => '20181015081508_bahayakan-jembatan-tambang-pasir-liar-di-13-sungai-diminta-stop.jpg',
                'temp' => '0.9123658284543947',
                'created_at' => '2018-10-15 08:15:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            318 => 
            array (
                'id_attachment' => 5541,
                'id_tabel' => 1032050,
                'file_name' => '20181015085942_gelar-informasi-dan-pelayanan-publik-dorong-transparansi-daerah.jpg',
                'temp' => '0.06750945717618162',
                'created_at' => '2018-10-15 08:59:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            319 => 
            array (
                'id_attachment' => 5544,
                'id_tabel' => 1032051,
                'file_name' => '20181015101653_Daftar_Pemenang.pdf',
                'temp' => '0.050393843450040166',
                'created_at' => '2018-10-15 10:16:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            320 => 
            array (
                'id_attachment' => 5547,
                'id_tabel' => 1032051,
                'file_name' => '20181015102152_Gelar_Informasi_dan_Pelayanan_Publik.jpg',
                'temp' => '0.15207288781199169',
                'created_at' => '2018-10-15 10:21:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            321 => 
            array (
                'id_attachment' => 5588,
                'id_tabel' => 1032064,
                'file_name' => '20181016084155_dinilai-paling-informatif-website-resmi-bkd-raih-predikat-terbaik.jpg',
                'temp' => '0.529051801235483',
                'created_at' => '2018-10-16 08:41:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            322 => 
            array (
                'id_attachment' => 5591,
                'id_tabel' => 1032067,
                'file_name' => '20181016123209_data_kuisioner_dinas_badan.xlsx',
                'temp' => '0.3251531468500355',
                'created_at' => '2018-10-16 12:32:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            323 => 
            array (
                'id_attachment' => 5607,
                'id_tabel' => 1032076,
                'file_name' => '20181017075925_standardisasi-aplikasi-opd-dimulai.jpg',
                'temp' => '0.803000090923095',
                'created_at' => '2018-10-17 07:59:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            324 => 
            array (
                'id_attachment' => 5754,
                'id_tabel' => 0,
                'file_name' => '20181023041907_1540286321057-1059189017.jpg',
                'temp' => '0.5117676068211712',
                'created_at' => '2018-10-23 16:19:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            325 => 
            array (
                'id_attachment' => 5792,
                'id_tabel' => 1032204,
                'file_name' => '20181024033900_wonosobo-jadi-juru-kunci-porprov-xv-ketua-koni-minta-maaf.jpg',
                'temp' => '0.7504442247514909',
                'created_at' => '2018-10-24 15:39:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            326 => 
            array (
                'id_attachment' => 5808,
                'id_tabel' => 1032222,
                'file_name' => '20181025034944_tambahan-tiga-emas-angkat-wonosobo-ke-peringkat-30.jpg',
                'temp' => '0.736513006238174',
                'created_at' => '2018-10-25 15:49:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            327 => 
            array (
                'id_attachment' => 5846,
                'id_tabel' => 1032234,
                'file_name' => '20181029080205_belum-ber-imb-pekerjaan-kontruksi-puluhan-bangunan-diminta-berhenti.jpg',
                'temp' => '0.5769729684656575',
                'created_at' => '2018-10-29 08:02:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            328 => 
            array (
                'id_attachment' => 5861,
                'id_tabel' => 1032265,
                'file_name' => '20181029085136_upacara-peringatan-hari-sumpah-pemuda-ke-90.jpg',
                'temp' => '0.7681430940569911',
                'created_at' => '2018-10-29 20:51:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            329 => 
            array (
                'id_attachment' => 5863,
                'id_tabel' => 1032266,
                'file_name' => '20181029090318_gandeng-kemenpan-rb-pemkab-targetkan-evaluasi-sakip-lebih-baik.jpg',
                'temp' => '0.7442603934672722',
                'created_at' => '2018-10-29 21:03:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            330 => 
            array (
                'id_attachment' => 5872,
                'id_tabel' => 1032273,
                'file_name' => '20181030034956_hidup-sehat-bermula-dari-pola-hidup-yang-sehat-.jpg',
                'temp' => '0.7783713657738707',
                'created_at' => '2018-10-30 15:49:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            331 => 
            array (
                'id_attachment' => 5932,
                'id_tabel' => 0,
                'file_name' => '20181101114002_Untitled.png',
                'temp' => '0.3205382098661276',
                'created_at' => '2018-11-01 11:40:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            332 => 
            array (
                'id_attachment' => 5984,
                'id_tabel' => 1032765,
                'file_name' => '20181102014825_bupati-wonosobo-launching-bpnt-dan-seltered-peduli-disabilitas.jpg',
                'temp' => '0.48370006250228514',
                'created_at' => '2018-11-02 13:48:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            333 => 
            array (
                'id_attachment' => 5985,
                'id_tabel' => 1032766,
                'file_name' => '20181102015655_libatkan-praktisi-seni-dan-budaya-ksbn-kabupaten-wonosobo-terbentuk.jpg',
                'temp' => '0.9551325594939766',
                'created_at' => '2018-11-02 13:56:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            334 => 
            array (
                'id_attachment' => 5986,
                'id_tabel' => 1032767,
                'file_name' => '20181102020435_peringati-hari-anak-sd-negeri-6-wonosobo-laksanakan-kegiatan-belajar-di-luar-kelas.jpg',
                'temp' => '0.45038356106517097',
                'created_at' => '2018-11-02 14:04:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            335 => 
            array (
                'id_attachment' => 5987,
                'id_tabel' => 1032768,
                'file_name' => '20181102021243_wakil-bupati-apresiasi-reaktor-emisi-kendaraan-roda-4-ramah-lingkungan.jpg',
                'temp' => '0.3585262204533519',
                'created_at' => '2018-11-02 14:12:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            336 => 
            array (
                'id_attachment' => 6093,
                'id_tabel' => 1033300,
                'file_name' => '20181105073626_peredaran-narkoba-di-kalangan-pelajar-diantisipasi.jpg',
                'temp' => '0.1090725902015488',
                'created_at' => '2018-11-05 19:36:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            337 => 
            array (
                'id_attachment' => 6094,
                'id_tabel' => 0,
                'file_name' => '20181105074631_pemkab-wonosobo-gelar-bhaksos-kesehatan-jiwa.jpg',
                'temp' => '0.055654357847706226',
                'created_at' => '2018-11-05 19:46:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            338 => 
            array (
                'id_attachment' => 6095,
                'id_tabel' => 1033301,
                'file_name' => '20181105075102_pemkab-wonosobo-gelar-bhaksos-kesehatan-jiwa.jpg',
                'temp' => '0.4951690102064257',
                'created_at' => '2018-11-05 19:51:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            339 => 
            array (
                'id_attachment' => 6106,
                'id_tabel' => 1033316,
                'file_name' => '20181106112051_wtp-2-tahun-beruntun-pemkab-terima-penghargaan-dari-menteri-keuangan.jpg',
                'temp' => '0.3802699235893243',
                'created_at' => '2018-11-06 11:20:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            340 => 
            array (
                'id_attachment' => 6110,
                'id_tabel' => 1033319,
                'file_name' => '20181106010202_138-admin-web-desa-sudah-ikuti-pelatihan.jpg',
                'temp' => '0.997567191826888',
                'created_at' => '2018-11-06 13:02:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            341 => 
            array (
                'id_attachment' => 6170,
                'id_tabel' => 1033340,
                'file_name' => '20181107024516_9538b61c-4b74-4724-bdc2-55bf2e664c0c.jpg',
                'temp' => '0.76341498444228',
                'created_at' => '2018-11-07 14:45:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            342 => 
            array (
                'id_attachment' => 6179,
                'id_tabel' => 1033376,
                'file_name' => '20181108035400_seminar-kebangsaan-sebagai-sarana-penyamaan-persepsi.jpg',
                'temp' => '0.5934076021880963',
                'created_at' => '2018-11-08 15:54:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            343 => 
            array (
                'id_attachment' => 6192,
                'id_tabel' => 1033400,
                'file_name' => '20181112082936_badan-kepegawaian-pendidikan-dan-pelatihan-kabupaten-klaten-studi-komparatif-di-wonosobo.jpg',
                'temp' => '0.7410022449808935',
                'created_at' => '2018-11-12 08:29:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            344 => 
            array (
                'id_attachment' => 6197,
                'id_tabel' => 1033401,
                'file_name' => '20181112093854_dua-pejabat-auditor-pertama-dilantik-wsb.jpg',
                'temp' => '0.6762591618855727',
                'created_at' => '2018-11-12 09:38:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            345 => 
            array (
                'id_attachment' => 6231,
                'id_tabel' => 1033414,
                'file_name' => '20181113110520_PS-tower.png',
                'temp' => '0.12497832461788638',
                'created_at' => '2018-11-13 11:05:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            346 => 
            array (
                'id_attachment' => 6232,
                'id_tabel' => 1033415,
                'file_name' => '20181113111534_Aqidatul_awam.pdf',
                'temp' => '0.17768508263836313',
                'created_at' => '2018-11-13 11:15:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            347 => 
            array (
                'id_attachment' => 6252,
                'id_tabel' => 1033421,
                'file_name' => '20181113015027_130-siswa-slta-ikuti-sosialisasi-bahaya-narkoba.jpg',
                'temp' => '0.05699907411811855',
                'created_at' => '2018-11-13 13:50:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            348 => 
            array (
                'id_attachment' => 6253,
                'id_tabel' => 1033422,
                'file_name' => '20181113020433_selamat-berjuang-peserta-perparprov-mtq-pelajar-dan-mapsi.jpg',
                'temp' => '0.30114307421293596',
                'created_at' => '2018-11-13 14:04:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            349 => 
            array (
                'id_attachment' => 6255,
                'id_tabel' => 1033424,
                'file_name' => '20181113034844_siswa-sma-wajib-tau-pendidikan-bela-negara.jpg',
                'temp' => '0.1942076961811927',
                'created_at' => '2018-11-13 15:48:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            350 => 
            array (
                'id_attachment' => 6256,
                'id_tabel' => 1033425,
                'file_name' => '20181113072759_pemkab-didorong-seriusi-pemberdayaan-pekerja-migran-purna.jpg',
                'temp' => '0.8196837580531542',
                'created_at' => '2018-11-13 19:27:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            351 => 
            array (
                'id_attachment' => 6304,
                'id_tabel' => 1033442,
                'file_name' => '20181115112652_akhiri-konferensi-deklarasi-ham-dibacakan.jpg',
                'temp' => '0.9931320724671802',
                'created_at' => '2018-11-15 11:26:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            352 => 
            array (
                'id_attachment' => 6310,
                'id_tabel' => 1033451,
                'file_name' => '20181115081346_delegasi-festival-ham-coba-jajanan-pasar-ting-njanti.jpg',
                'temp' => '0.6200615989586931',
                'created_at' => '2018-11-15 20:13:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            353 => 
            array (
                'id_attachment' => 6311,
                'id_tabel' => 1033452,
                'file_name' => '20181115082257_menjaga-generasi-muda-dari-hal-negatif-menjadi-tugas-bersama.jpg',
                'temp' => '0.8060474444653474',
                'created_at' => '2018-11-15 20:22:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            354 => 
            array (
                'id_attachment' => 6312,
                'id_tabel' => 1033453,
                'file_name' => '20181115083925_merawat-keragaman-memperkuat-solidaritas-menuju-indonesia-yang-inklusif-dan-berkeadlilan.jpg',
                'temp' => '0.7546499650357485',
                'created_at' => '2018-11-15 20:39:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            355 => 
            array (
                'id_attachment' => 6346,
                'id_tabel' => 1033482,
                'file_name' => '20181119125504_236-perempuan-terpilih-sebagai-anggota-bpd.jpg',
                'temp' => '0.4027068157370228',
                'created_at' => '2018-11-19 12:55:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            356 => 
            array (
                'id_attachment' => 6371,
                'id_tabel' => 1033502,
                'file_name' => '20181122094359_Desember.jpg',
                'temp' => '0.9520534505863247',
                'created_at' => '2018-11-22 09:43:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            357 => 
            array (
                'id_attachment' => 6372,
                'id_tabel' => 0,
                'file_name' => '20181122124138_demi-kesuksesan-pemilu-2019-sosialisasi-gencar-dilakukan.jpg',
                'temp' => '0.2069252625561775',
                'created_at' => '2018-11-22 12:41:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            358 => 
            array (
                'id_attachment' => 6373,
                'id_tabel' => 1033503,
                'file_name' => '20181122124429_demi-kesuksesan-pemilu-2019-sosialisasi-gencar-dilakukan.jpg',
                'temp' => '0.10428089309180355',
                'created_at' => '2018-11-22 12:44:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            359 => 
            array (
                'id_attachment' => 6409,
                'id_tabel' => 1033516,
                'file_name' => '20181127113915_pendidikan-bela-negara-jadikan-motivasi-bekerja-asn.jpg',
                'temp' => '0.2000503730014116',
                'created_at' => '2018-11-27 11:39:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            360 => 
            array (
                'id_attachment' => 6410,
                'id_tabel' => 1033517,
                'file_name' => '20181127114832_dua-sisi-bertolak-belakang-pemberlakukan-mea.jpg',
                'temp' => '0.03652426269670617',
                'created_at' => '2018-11-27 11:48:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            361 => 
            array (
                'id_attachment' => 6413,
                'id_tabel' => 1033519,
                'file_name' => '20181127074239_hari-aids-sedunia.jpg',
                'temp' => '0.7469227720009795',
                'created_at' => '2018-11-27 19:42:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            362 => 
            array (
                'id_attachment' => 6419,
                'id_tabel' => 1033524,
                'file_name' => '20181128103025_guru-bukan-orang-hebat-namun-banyak-orang-hebat-karena-seorang-guru.jpg',
                'temp' => '0.21973784394753193',
                'created_at' => '2018-11-28 22:30:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            363 => 
            array (
                'id_attachment' => 6420,
                'id_tabel' => 1033525,
                'file_name' => '20181128103644_pengurus-korpri-wonosobo-ziarahi-makam-sekda-pertama.jpg',
                'temp' => '0.11416040311803144',
                'created_at' => '2018-11-28 22:36:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            364 => 
            array (
                'id_attachment' => 6426,
                'id_tabel' => 1033529,
                'file_name' => '20181130080738_pemkab-wonosobo-gelar-upacara-hut-korpri-ke-47-tahun-2018.jpg',
                'temp' => '0.11885278790081233',
                'created_at' => '2018-11-30 08:07:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            365 => 
            array (
                'id_attachment' => 6428,
                'id_tabel' => 1033531,
                'file_name' => '20181130052640_bupati-beri-pembekalan-ratusan-taruna-akmil.jpg',
                'temp' => '0.45291326788541975',
                'created_at' => '2018-11-30 17:26:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            366 => 
            array (
                'id_attachment' => 6444,
                'id_tabel' => 1033544,
                'file_name' => '20181204081620_siswa-paket-c-vokasional-batik-jalani-uji-kompetensi.jpg',
                'temp' => '0.5552472235198942',
                'created_at' => '2018-12-04 08:16:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            367 => 
            array (
                'id_attachment' => 6445,
                'id_tabel' => 1033545,
                'file_name' => '20181204090735_komunitas-lintas-aksi-meriahkan-hari-aids-sedunia.jpg',
                'temp' => '0.5650361859664961',
                'created_at' => '2018-12-04 09:07:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            368 => 
            array (
                'id_attachment' => 6469,
                'id_tabel' => 1033553,
                'file_name' => '20181205030657_pengharagaan-bagi-15-desa-dengan-pengelolaan-keuangan-dan-administrasi-yang-baik-wsb.jpg',
                'temp' => '0.6927363599306993',
                'created_at' => '2018-12-05 15:06:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            369 => 
            array (
                'id_attachment' => 6513,
                'id_tabel' => 1033566,
                'file_name' => '20181210070647_semua-fasilitas-umum-harus-pro-disabilitas.jpg',
                'temp' => '0.4783160169931695',
                'created_at' => '2018-12-10 07:06:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            370 => 
            array (
                'id_attachment' => 6514,
                'id_tabel' => 0,
                'file_name' => '20181210072034_gladen-sesorah-basa-jawa-diharapkan-berlanjut.jpg',
                'temp' => '0.5605034745425248',
                'created_at' => '2018-12-10 07:20:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            371 => 
            array (
                'id_attachment' => 6515,
                'id_tabel' => 1033567,
                'file_name' => '20181210073133_gladen-sesorah-basa-jawa-diharapkan-berlanjut.jpg',
                'temp' => '0.7814524195264383',
                'created_at' => '2018-12-10 07:31:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            372 => 
            array (
                'id_attachment' => 6518,
                'id_tabel' => 1033568,
                'file_name' => '20181210084421_pdam.jpg',
                'temp' => '0.5667786667446195',
                'created_at' => '2018-12-10 08:44:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            373 => 
            array (
                'id_attachment' => 6519,
                'id_tabel' => 1033568,
                'file_name' => '20181210084724_PENGUMUMAN_SELEKSI_DIREKTUR_UTAMA_PDAM_2018.pdf',
                'temp' => '0.5667786667446195',
                'created_at' => '2018-12-10 08:47:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            374 => 
            array (
                'id_attachment' => 6531,
                'id_tabel' => 0,
                'file_name' => '20181211105027_sman-1-wonosobo-juara-lomba-cerdas-cermat-ham-tingkat-nasional.jpg',
                'temp' => '0.08448702092568272',
                'created_at' => '2018-12-11 10:50:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            375 => 
            array (
                'id_attachment' => 6533,
                'id_tabel' => 1033598,
                'file_name' => '20181211010009_sman-1-wonosobo-juara-lomba-cerdas-cermat-ham-tingkat-nasional.jpg',
                'temp' => '0.4611131959791719',
                'created_at' => '2018-12-11 13:00:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            376 => 
            array (
                'id_attachment' => 6534,
                'id_tabel' => 1033599,
                'file_name' => '20181212103027_99-kelompok-seni-dapatkan-bantuan-alat.jpg',
                'temp' => '0.6611982314073133',
                'created_at' => '2018-12-12 10:30:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            377 => 
            array (
                'id_attachment' => 6539,
                'id_tabel' => 1033625,
                'file_name' => '20181212033236_beraroma-khas-wagub-apresiasi-kopi-asli-desa-kapencar.jpg',
                'temp' => '0.1452459839698188',
                'created_at' => '2018-12-12 15:32:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            378 => 
            array (
                'id_attachment' => 6540,
                'id_tabel' => 1033626,
                'file_name' => '20181213080404_wagub-jateng-kunjungi-tps-pilkades-sebagai-edukasi-politik.jpg',
                'temp' => '0.6157206746787054',
                'created_at' => '2018-12-13 08:04:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            379 => 
            array (
                'id_attachment' => 6541,
                'id_tabel' => 1033627,
                'file_name' => '20181213081101_wabup-dorong-anak-anak-mardiyuwono-untuk-lebih-percaya-diri.jpg',
                'temp' => '0.43107850244599843',
                'created_at' => '2018-12-13 08:11:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            380 => 
            array (
                'id_attachment' => 6575,
                'id_tabel' => 1033645,
                'file_name' => '20181213035819_silaturahmi-tomas-toga-dan-forkopimda-kuatkan-sinergitas-bersama-menghadapi-pemilu.jpg',
                'temp' => '0.6777015050812227',
                'created_at' => '2018-12-13 15:58:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            381 => 
            array (
                'id_attachment' => 6578,
                'id_tabel' => 1033647,
                'file_name' => '20181214075753_lgn-ota-salurkan-bantuan-kepada-anak-asuh.jpg',
                'temp' => '0.6498745059324995',
                'created_at' => '2018-12-14 07:57:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            382 => 
            array (
                'id_attachment' => 6579,
                'id_tabel' => 1033648,
                'file_name' => '20181214081401_18-korban-bencana-alam-dan-kebakaran-terima-bantuan.jpg',
                'temp' => '0.0888158995637649',
                'created_at' => '2018-12-14 08:14:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            383 => 
            array (
                'id_attachment' => 6580,
                'id_tabel' => 1033650,
                'file_name' => '20181214090259_dari-pilkades-2018-desa-sudungdewo-kertek-harus-lakukan-pemilihan-ulang.jpg',
                'temp' => '0.16982092592302855',
                'created_at' => '2018-12-14 09:02:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            384 => 
            array (
                'id_attachment' => 6631,
                'id_tabel' => 1033671,
                'file_name' => '20181217024544_jelang-natal-dan-pergantian-tahun-2019.jpg',
                'temp' => '0.024271016385593258',
                'created_at' => '2018-12-17 14:45:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            385 => 
            array (
                'id_attachment' => 6675,
                'id_tabel' => 1033684,
                'file_name' => '20181218024350_masyarakat-harus-tau-dan-andil-dalam-pencegahan-tppo.jpg',
                'temp' => '0.6289748801635602',
                'created_at' => '2018-12-18 14:43:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            386 => 
            array (
                'id_attachment' => 6676,
                'id_tabel' => 1033685,
                'file_name' => '20181218025651_kota-tasikmalaya-belajar-seputar-ham-di-wonosobo.jpg',
                'temp' => '0.8092269363757925',
                'created_at' => '2018-12-18 14:56:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            387 => 
            array (
                'id_attachment' => 6677,
                'id_tabel' => 1033686,
                'file_name' => '20181218030523_ormas-dan-masyarakat-harus-terus-bersatu-untuk-kemajuan-wonosobo.jpg',
                'temp' => '0.41330064185752957',
                'created_at' => '2018-12-18 15:05:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            388 => 
            array (
                'id_attachment' => 6689,
                'id_tabel' => 1033692,
                'file_name' => '20181219024428_wonosobo-raih-anugerah-parahita-eka-praya-kategori-mentor.jpg',
                'temp' => '0.8562362610940577',
                'created_at' => '2018-12-19 14:44:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            389 => 
            array (
                'id_attachment' => 6690,
                'id_tabel' => 1033693,
                'file_name' => '20181219025758_lebih-dari-26-ribu-e-ktp-invalid-dimusnahkan.jpg',
                'temp' => '0.5082509213922615',
                'created_at' => '2018-12-19 14:57:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            390 => 
            array (
                'id_attachment' => 6711,
                'id_tabel' => 1033699,
                'file_name' => '20181220013431_kaum-perempuan-harus-terus-berinovasi-dan-berkreasi-untuk-menjadi-agen-perubahan-dalam-pembangunan.jpg',
                'temp' => '0.6287952800119327',
                'created_at' => '2018-12-20 13:34:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            391 => 
            array (
                'id_attachment' => 6800,
                'id_tabel' => 1033751,
                'file_name' => '20181227124550_311-penyandang-disabilitas-berat-terima-bantuan-asistensi-wsb.jpg',
                'temp' => '0.19593178752591345',
                'created_at' => '2018-12-27 12:45:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            392 => 
            array (
                'id_attachment' => 6815,
                'id_tabel' => 1033761,
                'file_name' => '20181231083221_menteri-perdagangan-ri-kunjungi-pasar-kertek-beras-medium-harus-tersedia.jpg',
                'temp' => '0.42685173875677274',
                'created_at' => '2018-12-31 08:32:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            393 => 
            array (
                'id_attachment' => 6818,
                'id_tabel' => 1033766,
                'file_name' => '20190102032129_Tidur.jpg',
                'temp' => '0.4784235632345468',
                'created_at' => '2019-01-02 15:21:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            394 => 
            array (
                'id_attachment' => 6819,
                'id_tabel' => 1033764,
                'file_name' => '20190102032837_kpud-lantik-ppk-pasca-keputusan-mk.jpg',
                'temp' => '0.5862723594582491',
                'created_at' => '2019-01-02 15:28:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            395 => 
            array (
                'id_attachment' => 6822,
                'id_tabel' => 1033767,
                'file_name' => '20190102034810_Makanan_Sehat.jpg',
                'temp' => '0.15107222230476136',
                'created_at' => '2019-01-02 15:48:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            396 => 
            array (
                'id_attachment' => 6823,
                'id_tabel' => 1033768,
                'file_name' => '20190102090128_suwarti-dapat-doorprize-cincin-emas.jpg',
                'temp' => '0.9325997033773801',
                'created_at' => '2019-01-02 21:01:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            397 => 
            array (
                'id_attachment' => 6824,
                'id_tabel' => 1033769,
                'file_name' => '20190102091302_pemkab-siapkan-armada-bantuan-hadapi-mogok-massal-angkutan-umum.jpg',
                'temp' => '0.2807720082005378',
                'created_at' => '2019-01-02 21:13:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            398 => 
            array (
                'id_attachment' => 6855,
                'id_tabel' => 1033779,
                'file_name' => '20190104075959_jadi-solusi-di-tengah-mogoknya-angkutan-umum-armada-bantuan-dipuji-warga-wsb.jpg',
                'temp' => '0.2548275643753459',
                'created_at' => '2019-01-04 07:59:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            399 => 
            array (
                'id_attachment' => 6859,
                'id_tabel' => 1033784,
                'file_name' => '20190108095906_Kelapa.jpeg',
                'temp' => '0.701349610062346',
                'created_at' => '2019-01-08 09:59:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
        ));
        \DB::table('attachment')->insert(array (
            0 => 
            array (
                'id_attachment' => 6861,
                'id_tabel' => 0,
                'file_name' => '20190108023141_PMI.jpg',
                'temp' => '0.47789901424100933',
                'created_at' => '2019-01-08 14:31:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            1 => 
            array (
                'id_attachment' => 6862,
                'id_tabel' => 1033788,
                'file_name' => '20190109081027_bupati-serahkan-bantuan-mocil-operasional-untuk-pmi.jpg',
                'temp' => '0.9588267340166543',
                'created_at' => '2019-01-09 08:10:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            2 => 
            array (
                'id_attachment' => 6863,
                'id_tabel' => 1033789,
                'file_name' => '20190109081859_dilarang-angkut-penumpang-boleh-antar-barang.jpg',
                'temp' => '0.731160528797717',
                'created_at' => '2019-01-09 08:18:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            3 => 
            array (
                'id_attachment' => 6890,
                'id_tabel' => 1033802,
                'file_name' => '20190109093914_Pengumuman_Hasil_Seleksi_Direktur_Utama_dan_Direktur_Administrasi_dan_Keuangan_PDAM_Kabupaten_Wonosobo.pdf',
                'temp' => '0.2053473416744942',
                'created_at' => '2019-01-09 21:39:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            4 => 
            array (
                'id_attachment' => 6891,
                'id_tabel' => 1033803,
                'file_name' => '20190110084046_target-penerbitan-sertifikat-ptl-2018-wonosobo-terpenuhi.jpg',
                'temp' => '0.6153976133485888',
                'created_at' => '2019-01-10 08:40:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            5 => 
            array (
                'id_attachment' => 6903,
                'id_tabel' => 1033809,
                'file_name' => '20190110114100_sugarglasses.gif',
                'temp' => '0.5205902348275238',
                'created_at' => '2019-01-10 11:41:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            6 => 
            array (
                'id_attachment' => 6904,
                'id_tabel' => 1033810,
                'file_name' => '20190110041237_calhaj-bertambah-pelayanan-penyelenggaraan-harus-terus-ditingkatkan.jpg',
                'temp' => '0.29975061538270653',
                'created_at' => '2019-01-10 16:12:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            7 => 
            array (
                'id_attachment' => 6981,
                'id_tabel' => 1033827,
                'file_name' => '20190117073052_bupati-lantik-direktur-administrasi-pdam.jpg',
                'temp' => '0.1966586775064505',
                'created_at' => '2019-01-17 07:30:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            8 => 
            array (
                'id_attachment' => 7009,
                'id_tabel' => 1033836,
                'file_name' => '20190121074205_mutasi-pejabat-pemkab-wonosobo.jpg',
                'temp' => '0.8686662019105118',
                'created_at' => '2019-01-21 07:42:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            9 => 
            array (
                'id_attachment' => 7016,
                'id_tabel' => 1033839,
                'file_name' => '20190121025151_Minum_Air_Hangat.jpg',
                'temp' => '0.4692480605382243',
                'created_at' => '2019-01-21 14:51:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            10 => 
            array (
                'id_attachment' => 7029,
                'id_tabel' => 1033849,
                'file_name' => '20190122071814_bupati-resmikan-ruang-unbk-smpn-3-wonosobo.jpg',
                'temp' => '0.5676614429780795',
                'created_at' => '2019-01-22 19:18:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            11 => 
            array (
                'id_attachment' => 7041,
                'id_tabel' => 1033857,
                'file_name' => '20190124051317_naik-trail-bupati-bareng-kapolres-tilik-desa-sambangi-kecamatan-kaliwiro.jpg',
                'temp' => '0.41963615796210996',
                'created_at' => '2019-01-24 17:13:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            12 => 
            array (
                'id_attachment' => 7049,
                'id_tabel' => 1033861,
                'file_name' => '20190128094102_10-cpns-dilingkungan-lp-kelas-iib-wonosobo-diangkat-menjadi-pns.jpg',
                'temp' => '0.44120529282033716',
                'created_at' => '2019-01-28 09:41:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            13 => 
            array (
                'id_attachment' => 7050,
                'id_tabel' => 0,
                'file_name' => '20190128094541_safari-jumat-di-sukoharjo-pemkab-bersama-forkopimda-beri-bantuan.jpg',
                'temp' => '0.44120529282033716',
                'created_at' => '2019-01-28 09:45:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            14 => 
            array (
                'id_attachment' => 7051,
                'id_tabel' => 1033862,
                'file_name' => '20190128095942_safari-jumat-di-sukoharjo-pemkab-bersama-forkopimda-beri-bantuan.jpg',
                'temp' => '0.9405071156083282',
                'created_at' => '2019-01-28 09:59:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            15 => 
            array (
                'id_attachment' => 7077,
                'id_tabel' => 1033878,
                'file_name' => '20190130091101_dewan-berharap-warga-optimalkan-manfaat-bpnt.jpg',
                'temp' => '0.9145695972626962',
                'created_at' => '2019-01-30 09:11:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            16 => 
            array (
                'id_attachment' => 7098,
                'id_tabel' => 1033886,
                'file_name' => '20190131075218_dinas-kominfo-sambut-dua-pejabat-baru.jpg',
                'temp' => '0.9635006588304404',
                'created_at' => '2019-01-31 07:52:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            17 => 
            array (
                'id_attachment' => 7099,
                'id_tabel' => 1033887,
                'file_name' => '20190131080302_pdam-wonosobo-gelar-rumatan-31-sumber-mata-air.jpg',
                'temp' => '0.13392451863915777',
                'created_at' => '2019-01-31 08:03:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            18 => 
            array (
                'id_attachment' => 7103,
                'id_tabel' => 1033891,
                'file_name' => '20190131023147_fasilitasi-bagi-kaum-difabel-dinilai-masih-kurang.jpg',
                'temp' => '0.526090205406424',
                'created_at' => '2019-01-31 14:31:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            19 => 
            array (
                'id_attachment' => 7113,
                'id_tabel' => 1033894,
                'file_name' => '20190131024837_bupati-wonsobo-buka-porsema-dan-oskanu-tingkat_wonosobo-tahun_2019.jpg',
                'temp' => '0.8999970020257673',
                'created_at' => '2019-01-31 14:48:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            20 => 
            array (
                'id_attachment' => 7114,
                'id_tabel' => 1033895,
                'file_name' => '20190131030348_bupati-beri-apresiasi-7-orang-pendonor-darah-sukarela-lebih-100-kali.jpg',
                'temp' => '0.8830332522844873',
                'created_at' => '2019-01-31 15:03:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            21 => 
            array (
                'id_attachment' => 7127,
                'id_tabel' => 1033902,
                'file_name' => '20190204075151_REKRUTMEN_WEB_TV.pdf',
                'temp' => '0.6242577894524073',
                'created_at' => '2019-02-04 19:51:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            22 => 
            array (
                'id_attachment' => 7143,
                'id_tabel' => 1033907,
                'file_name' => '20190206081110_43-tahun-pdam-tirta-aji-wonosobo-terus-berbenah.jpg',
                'temp' => '0.1997874149505512',
                'created_at' => '2019-02-06 08:11:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            23 => 
            array (
                'id_attachment' => 7144,
                'id_tabel' => 1033908,
                'file_name' => '20190206081946_jangan-golput-jamaah-kks-diajak-gunakan-hak-pilih-di-pileg-dan-pilpres.jpg',
                'temp' => '0.7760760098151043',
                'created_at' => '2019-02-06 08:19:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            24 => 
            array (
                'id_attachment' => 7184,
                'id_tabel' => 1033919,
                'file_name' => '20190211105739_relawan-demokrasi.jpeg',
                'temp' => '0.4706355524558581',
                'created_at' => '2019-02-11 10:57:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            25 => 
            array (
                'id_attachment' => 7215,
                'id_tabel' => 1033927,
                'file_name' => '20190212031548_dalam-rangka-partisipasi-perempuan-di-pemilu-2019-caleg-perempuan-kuatkan-kapasitas-diri.jpg',
                'temp' => '0.18768884522824436',
                'created_at' => '2019-02-12 15:15:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            26 => 
            array (
                'id_attachment' => 7216,
                'id_tabel' => 1340,
                'file_name' => '20190212041140_accountsIcon-300x300.png',
                'temp' => '0.4882324752982312',
                'created_at' => '2019-02-12 16:11:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            27 => 
            array (
                'id_attachment' => 7217,
                'id_tabel' => 1340,
                'file_name' => '20190212041541_accountsIcon-300x300.png',
                'temp' => '0.4882324752982312',
                'created_at' => '2019-02-12 16:15:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            28 => 
            array (
                'id_attachment' => 7218,
                'id_tabel' => 1340,
                'file_name' => '20190212041707_accountsIcon-300x300.png',
                'temp' => '0.4882324752982312',
                'created_at' => '2019-02-12 16:17:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            29 => 
            array (
                'id_attachment' => 7219,
                'id_tabel' => 1341,
                'file_name' => '20190212044410_mw_mobile_icon_rounded_corners.png',
                'temp' => '0.14170327504857316',
                'created_at' => '2019-02-12 16:44:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            30 => 
            array (
                'id_attachment' => 7220,
                'id_tabel' => 1341,
                'file_name' => '20190212044427_mw_mobile_icon_rounded_corners.png',
                'temp' => '0.14170327504857316',
                'created_at' => '2019-02-12 16:44:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            31 => 
            array (
                'id_attachment' => 7222,
                'id_tabel' => 1098,
                'file_name' => '20190213082759_IMG_20190115_141539.jpg',
                'temp' => '0.4044043515754694',
                'created_at' => '2019-02-13 08:27:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            32 => 
            array (
                'id_attachment' => 7223,
                'id_tabel' => 1101,
                'file_name' => '20190213083705_IMG_20190118_093521.jpg',
                'temp' => '0.46286624483594996',
                'created_at' => '2019-02-13 08:37:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            33 => 
            array (
                'id_attachment' => 7224,
                'id_tabel' => 1104,
                'file_name' => '20190213084038_IMG_20190121_151412.jpg',
                'temp' => '0.46286624483594996',
                'created_at' => '2019-02-13 08:40:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            34 => 
            array (
                'id_attachment' => 7225,
                'id_tabel' => 1126,
                'file_name' => '20190213084258_IMG_20190125_095532.jpg',
                'temp' => '0.1634321857164034',
                'created_at' => '2019-02-13 08:42:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            35 => 
            array (
                'id_attachment' => 7226,
                'id_tabel' => 1130,
                'file_name' => '20190213084442_IMG_20190128_103350.jpg',
                'temp' => '0.1634321857164034',
                'created_at' => '2019-02-13 08:44:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            36 => 
            array (
                'id_attachment' => 7227,
                'id_tabel' => 1137,
                'file_name' => '20190213084619_IMG_20190129_110313.jpg',
                'temp' => '0.7337329932753824',
                'created_at' => '2019-02-13 08:46:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            37 => 
            array (
                'id_attachment' => 7228,
                'id_tabel' => 1143,
                'file_name' => '20190213084831_IMG_20190130_134312.jpg',
                'temp' => '0.38883070131458575',
                'created_at' => '2019-02-13 08:48:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            38 => 
            array (
                'id_attachment' => 7229,
                'id_tabel' => 1144,
                'file_name' => '20190213084949_IMG_20190130_144237.jpg',
                'temp' => '0.38883070131458575',
                'created_at' => '2019-02-13 08:49:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            39 => 
            array (
                'id_attachment' => 7230,
                'id_tabel' => 1147,
                'file_name' => '20190213085427_IMG_20190131_090210.jpg',
                'temp' => '0.38883070131458575',
                'created_at' => '2019-02-13 08:54:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            40 => 
            array (
                'id_attachment' => 7231,
                'id_tabel' => 1150,
                'file_name' => '20190213085945_IMG_20190204_154809.jpg',
                'temp' => '0.38883070131458575',
                'created_at' => '2019-02-13 08:59:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            41 => 
            array (
                'id_attachment' => 7233,
                'id_tabel' => 1146,
                'file_name' => '20190213111122_IMG_20190131_113959.jpg',
                'temp' => '0.38883070131458575',
                'created_at' => '2019-02-13 11:11:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            42 => 
            array (
                'id_attachment' => 7234,
                'id_tabel' => 1033929,
                'file_name' => '20190214011101_akad-gelorakan-seangat-cinta-al-quran-masyarakat-wonosobo.jpg',
                'temp' => '0.9394185859028334',
                'created_at' => '2019-02-14 13:11:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            43 => 
            array (
                'id_attachment' => 7235,
                'id_tabel' => 1033930,
                'file_name' => '20190214013203_warga-karanganyar-wadaslintang-dapat-mobil-baru-dari-bank-jateng.jpg',
                'temp' => '0.41785271433393967',
                'created_at' => '2019-02-14 13:32:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            44 => 
            array (
                'id_attachment' => 7236,
                'id_tabel' => 1033931,
                'file_name' => '20190214015124_rutan-siap-sukseskan-visi-misi-kabupaten-wonosob.jpg',
                'temp' => '0.15845248123765976',
                'created_at' => '2019-02-14 13:51:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            45 => 
            array (
                'id_attachment' => 7237,
                'id_tabel' => 1033932,
                'file_name' => '20190214020004_puluhan-pkk-pejabat-pengadaan-barang-dan-jasa-ikuti-sosialisasi.jpg',
                'temp' => '0.5929851638463406',
                'created_at' => '2019-02-14 14:00:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            46 => 
            array (
                'id_attachment' => 7330,
                'id_tabel' => 1347,
                'file_name' => '20190220015834_IMG_20190204_154809.jpg',
                'temp' => '0.46708712918824813',
                'created_at' => '2019-02-20 13:58:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            47 => 
            array (
                'id_attachment' => 7331,
                'id_tabel' => 1357,
                'file_name' => '20190220020006_IMG_20190219_111447_HDR.jpg',
                'temp' => '0.8806255870545951',
                'created_at' => '2019-02-20 14:00:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            48 => 
            array (
                'id_attachment' => 7332,
                'id_tabel' => 1359,
                'file_name' => '20190220020057_IMG_20190220_103544.jpg',
                'temp' => '0.8806255870545951',
                'created_at' => '2019-02-20 14:00:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            49 => 
            array (
                'id_attachment' => 7352,
                'id_tabel' => 1361,
                'file_name' => '20190222090959_IMG_20190221_101425.jpg',
                'temp' => '0.38108858010134994',
                'created_at' => '2019-02-22 09:09:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            50 => 
            array (
                'id_attachment' => 7353,
                'id_tabel' => 1362,
                'file_name' => '20190222091120_IMG_20190221_110317.jpg',
                'temp' => '0.38108858010134994',
                'created_at' => '2019-02-22 09:11:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            51 => 
            array (
                'id_attachment' => 7363,
                'id_tabel' => 1369,
                'file_name' => '20190225025842_WhatsApp_Image_2019-02-25_at.jpeg',
                'temp' => '0.6867476348869777',
                'created_at' => '2019-02-25 14:58:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            52 => 
            array (
                'id_attachment' => 7470,
                'id_tabel' => 1377,
                'file_name' => '20190227123722_ngadikerso.jpeg',
                'temp' => '0.06326175826450253',
                'created_at' => '2019-02-27 12:37:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            53 => 
            array (
                'id_attachment' => 7509,
                'id_tabel' => 1034746,
                'file_name' => '20190228025639_IMG-20190227-WA0017.jpeg',
                'temp' => '0.5662545569746309',
                'created_at' => '2019-02-28 14:56:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            54 => 
            array (
                'id_attachment' => 7510,
                'id_tabel' => 1034746,
                'file_name' => '20190228025701_IMG-20190227-WA0019.jpeg',
                'temp' => '0.5662545569746309',
                'created_at' => '2019-02-28 14:57:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            55 => 
            array (
                'id_attachment' => 7538,
                'id_tabel' => 1379,
                'file_name' => '20190304091221_purwojiwo.jpeg',
                'temp' => '0.7171831641942215',
                'created_at' => '2019-03-04 09:12:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            56 => 
            array (
                'id_attachment' => 7540,
                'id_tabel' => 1381,
                'file_name' => '20190304091723_bomerto.jpeg',
                'temp' => '0.5717624630817337',
                'created_at' => '2019-03-04 09:17:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            57 => 
            array (
                'id_attachment' => 7592,
                'id_tabel' => 1035441,
            'file_name' => '20190306083001_Bupati_eko_Purnomo_berharap_dukungan_dan_komitmen_semua_pihak_dalam_upaya_mewujudkan_smart_city_(1).jpg',
                'temp' => '0.8153472331818379',
                'created_at' => '2019-03-06 08:30:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            58 => 
            array (
                'id_attachment' => 7593,
                'id_tabel' => 1035442,
                'file_name' => '20190306090341_DSC_4196.JPG',
                'temp' => '0.04829378213075475',
                'created_at' => '2019-03-06 09:03:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            59 => 
            array (
                'id_attachment' => 7594,
                'id_tabel' => 0,
                'file_name' => '20190306103014_DSC_4196.JPG',
                'temp' => '0.1425055283063832',
                'created_at' => '2019-03-06 10:30:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            60 => 
            array (
                'id_attachment' => 7595,
                'id_tabel' => 1035446,
                'file_name' => '20190306103331_Bupati_eko_Purnomo_menyerahkan_potongan_tumpeng_kepada_Kadiskominfo_Eko_Suryantoro.jpg',
                'temp' => '0.1256513457336761',
                'created_at' => '2019-03-06 10:33:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            61 => 
            array (
                'id_attachment' => 7609,
                'id_tabel' => 1388,
                'file_name' => '20190311020343_Ds_tegesewetan.jpeg',
                'temp' => '0.4343420296302576',
                'created_at' => '2019-03-11 14:03:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            62 => 
            array (
                'id_attachment' => 7610,
                'id_tabel' => 1391,
                'file_name' => '20190311020810_DinKes.jpeg',
                'temp' => '0.14447108306835843',
                'created_at' => '2019-03-11 14:08:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            63 => 
            array (
                'id_attachment' => 7611,
                'id_tabel' => 1392,
                'file_name' => '20190311020941_bomerto.jpeg',
                'temp' => '0.23874584081699934',
                'created_at' => '2019-03-11 14:09:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            64 => 
            array (
                'id_attachment' => 7612,
                'id_tabel' => 1035470,
                'file_name' => '20190311032802_346.JPG',
                'temp' => '0.5142953657187461',
                'created_at' => '2019-03-11 15:28:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            65 => 
            array (
                'id_attachment' => 7613,
                'id_tabel' => 1035471,
                'file_name' => '20190312015057_347.jpg',
                'temp' => '0.820535656393361',
                'created_at' => '2019-03-12 13:50:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            66 => 
            array (
                'id_attachment' => 7615,
                'id_tabel' => 1035472,
                'file_name' => '20190312020010_348.jpg',
                'temp' => '0.10063501769207961',
                'created_at' => '2019-03-12 14:00:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            67 => 
            array (
                'id_attachment' => 7619,
                'id_tabel' => 1035476,
                'file_name' => '20190312031507_BAB_III_Tabel.docx',
                'temp' => '0.8124617221622232',
                'created_at' => '2019-03-12 15:15:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            68 => 
            array (
                'id_attachment' => 7620,
                'id_tabel' => 1035477,
                'file_name' => '20190312032030_Kegiatan_Dinas_Kominfo_2019_FINAL.xlsx',
                'temp' => '0.07935422412108095',
                'created_at' => '2019-03-12 15:20:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            69 => 
            array (
                'id_attachment' => 7624,
                'id_tabel' => 1035482,
                'file_name' => '20190312040440_349.JPG',
                'temp' => '0.27034501073551387',
                'created_at' => '2019-03-12 16:04:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            70 => 
            array (
                'id_attachment' => 7633,
                'id_tabel' => 1035489,
                'file_name' => '20190313014035_350.jpg',
                'temp' => '0.7701566265544253',
                'created_at' => '2019-03-13 13:40:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            71 => 
            array (
                'id_attachment' => 7634,
                'id_tabel' => 1398,
                'file_name' => '20190313024806_ds_ngadimulyo.jpeg',
                'temp' => '0.20454580059265548',
                'created_at' => '2019-03-13 14:48:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            72 => 
            array (
                'id_attachment' => 7635,
                'id_tabel' => 1399,
                'file_name' => '20190313025149_ds_kemiriombo.jpeg',
                'temp' => '0.6671023953495945',
                'created_at' => '2019-03-13 14:51:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            73 => 
            array (
                'id_attachment' => 7636,
                'id_tabel' => 1400,
                'file_name' => '20190313025452_ds_pucungkerep.jpeg',
                'temp' => '0.6417631534890333',
                'created_at' => '2019-03-13 14:54:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            74 => 
            array (
                'id_attachment' => 7638,
                'id_tabel' => 1402,
                'file_name' => '20190313031714_ds_ngadimulyoo.jpeg',
                'temp' => '0.44066895587989685',
                'created_at' => '2019-03-13 15:17:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            75 => 
            array (
                'id_attachment' => 7647,
                'id_tabel' => 1035494,
                'file_name' => '20190314081044_351.jpg',
                'temp' => '0.899990866203102',
                'created_at' => '2019-03-14 08:10:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            76 => 
            array (
                'id_attachment' => 7649,
                'id_tabel' => 1035496,
                'file_name' => '20190314082712_352.jpeg',
                'temp' => '0.09026470193468494',
                'created_at' => '2019-03-14 08:27:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            77 => 
            array (
                'id_attachment' => 7650,
                'id_tabel' => 1035519,
                'file_name' => '20190314111458_353.JPG',
                'temp' => '0.9185396372469303',
                'created_at' => '2019-03-14 11:14:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            78 => 
            array (
                'id_attachment' => 7667,
                'id_tabel' => 1035527,
                'file_name' => '20190315084003_Tabel_Realisasi_Anggaran_Upload.xlsx',
                'temp' => '0.06137321892136405',
                'created_at' => '2019-03-15 08:40:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            79 => 
            array (
                'id_attachment' => 7670,
                'id_tabel' => 1889,
                'file_name' => '20190315090115_20180810100304_profil-pejabat1.jpg',
                'temp' => '0.27036174323523454',
                'created_at' => '2019-03-15 09:01:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            80 => 
            array (
                'id_attachment' => 7671,
                'id_tabel' => 1035529,
                'file_name' => '20190315091825_DPA_2019.rar',
                'temp' => '0.46179847145159325',
                'created_at' => '2019-03-15 09:18:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            81 => 
            array (
                'id_attachment' => 7680,
                'id_tabel' => 1035532,
                'file_name' => '20190318080355_354.jpeg',
                'temp' => '0.74471721107632',
                'created_at' => '2019-03-18 08:03:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            82 => 
            array (
                'id_attachment' => 7683,
                'id_tabel' => 1035533,
                'file_name' => '20190318093705_640.JPG',
                'temp' => '0.3621984121123276',
                'created_at' => '2019-03-18 09:37:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            83 => 
            array (
                'id_attachment' => 7697,
                'id_tabel' => 1035542,
                'file_name' => '20190319111218_DSC_7699.JPG',
                'temp' => '0.723561813794712',
                'created_at' => '2019-03-19 11:12:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            84 => 
            array (
                'id_attachment' => 7701,
                'id_tabel' => 1035545,
                'file_name' => '20190320091352_358.jpeg',
                'temp' => '0.3401555870031363',
                'created_at' => '2019-03-20 09:13:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            85 => 
            array (
                'id_attachment' => 7824,
                'id_tabel' => 1035557,
                'file_name' => '20190321014922_360.jpg',
                'temp' => '0.9032759187137982',
                'created_at' => '2019-03-21 13:49:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            86 => 
            array (
                'id_attachment' => 7856,
                'id_tabel' => 1035563,
                'file_name' => '20190325085547_363.jpg',
                'temp' => '0.7327023370464032',
                'created_at' => '2019-03-25 08:55:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            87 => 
            array (
                'id_attachment' => 7864,
                'id_tabel' => 1035570,
                'file_name' => '20190327083344_365.jpg',
                'temp' => '0.752458725850569',
                'created_at' => '2019-03-27 08:33:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            88 => 
            array (
                'id_attachment' => 7865,
                'id_tabel' => 1035571,
                'file_name' => '20190327090111_366.jpeg',
                'temp' => '0.3946427761275564',
                'created_at' => '2019-03-27 09:01:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            89 => 
            array (
                'id_attachment' => 7879,
                'id_tabel' => 1425,
                'file_name' => '20190327035553_Mungkung_27_Maret.jpeg',
                'temp' => '0.5672406357555924',
                'created_at' => '2019-03-27 15:55:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            90 => 
            array (
                'id_attachment' => 7880,
                'id_tabel' => 1426,
                'file_name' => '20190327035653_Mungkung_27_Maret.jpeg',
                'temp' => '0.5013336935162815',
                'created_at' => '2019-03-27 15:56:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            91 => 
            array (
                'id_attachment' => 7881,
                'id_tabel' => 1427,
                'file_name' => '20190327035745_Plodongan_27_Maret_2019.jpeg',
                'temp' => '0.8454929914677913',
                'created_at' => '2019-03-27 15:57:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            92 => 
            array (
                'id_attachment' => 7883,
                'id_tabel' => 1035586,
                'file_name' => '20190328093920_ujian-praktek-siswa-smp-4-kaliwiro-wajib-garap-drama-bahasa-jawa.jpg',
                'temp' => '0.06129531175176517',
                'created_at' => '2019-03-28 09:39:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            93 => 
            array (
                'id_attachment' => 7905,
                'id_tabel' => 1035619,
                'file_name' => '20190328033436_368.jpg',
                'temp' => '0.13117456536539662',
                'created_at' => '2019-03-28 15:34:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            94 => 
            array (
                'id_attachment' => 7927,
                'id_tabel' => 1035627,
                'file_name' => '20190329085559_369.jpeg',
                'temp' => '0.2013123972463029',
                'created_at' => '2019-03-29 08:55:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            95 => 
            array (
                'id_attachment' => 7930,
                'id_tabel' => 1035629,
                'file_name' => '20190329090858_370.jpeg',
                'temp' => '0.818966276901919',
                'created_at' => '2019-03-29 09:08:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            96 => 
            array (
                'id_attachment' => 7999,
                'id_tabel' => 1035654,
                'file_name' => '20190402093531_371.jpg',
                'temp' => '0.5793793276073174',
                'created_at' => '2019-04-02 09:35:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            97 => 
            array (
                'id_attachment' => 8000,
                'id_tabel' => 1035492,
                'file_name' => '20190402094835_20190313040002_rptbi_gabungan1.pdf',
                'temp' => '0.7229169857552191',
                'created_at' => '2019-04-02 09:48:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            98 => 
            array (
                'id_attachment' => 8001,
                'id_tabel' => 1035655,
                'file_name' => '20190402095447_20190313035640_POBL_Februari_20191.xlsx',
                'temp' => '0.1967476800517618',
                'created_at' => '2019-04-02 09:54:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            99 => 
            array (
                'id_attachment' => 8002,
                'id_tabel' => 1035656,
                'file_name' => '20190402100030_Tabel_realisasi_anggaran_2017.xlsx',
                'temp' => '0.34271728184505057',
                'created_at' => '2019-04-02 10:00:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            100 => 
            array (
                'id_attachment' => 8003,
                'id_tabel' => 1035657,
                'file_name' => '20190402103839_12.jpg',
                'temp' => '0.9460129510151336',
                'created_at' => '2019-04-02 10:38:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            101 => 
            array (
                'id_attachment' => 8004,
                'id_tabel' => 1035658,
                'file_name' => '20190402104533_372.jpeg',
                'temp' => '0.8585964050478831',
                'created_at' => '2019-04-02 10:45:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            102 => 
            array (
                'id_attachment' => 8005,
                'id_tabel' => 1421,
                'file_name' => '20190402110013_25_Maret_2019.jpeg',
                'temp' => '0.25616029346248603',
                'created_at' => '2019-04-02 11:00:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            103 => 
            array (
                'id_attachment' => 8006,
                'id_tabel' => 1422,
                'file_name' => '20190402110233_25_Maret_2019.jpeg',
                'temp' => '0.4377213818773298',
                'created_at' => '2019-04-02 11:02:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            104 => 
            array (
                'id_attachment' => 8007,
                'id_tabel' => 1424,
                'file_name' => '20190402110632_Naduretno_26_Maret_2019.jpeg',
                'temp' => '0.994562712758188',
                'created_at' => '2019-04-02 11:06:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            105 => 
            array (
                'id_attachment' => 8016,
                'id_tabel' => 1435,
                'file_name' => '20190402011636_Ahmad_rosyidin_kaliputoi.jpeg',
                'temp' => '0.5687885173402472',
                'created_at' => '2019-04-02 13:16:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            106 => 
            array (
                'id_attachment' => 8017,
                'id_tabel' => 1433,
                'file_name' => '20190402012346_Singgih_R_Pulosaren.jpeg',
                'temp' => '0.061229523476263426',
                'created_at' => '2019-04-02 13:23:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            107 => 
            array (
                'id_attachment' => 8018,
                'id_tabel' => 1431,
                'file_name' => '20190402012445_Safingudin_pakuncen.jpeg',
                'temp' => '0.8598419540670945',
                'created_at' => '2019-04-02 13:24:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            108 => 
            array (
                'id_attachment' => 8019,
                'id_tabel' => 1434,
                'file_name' => '20190402012700_Mugiono_Plobangan.jpeg',
                'temp' => '0.05595990446911836',
                'created_at' => '2019-04-02 13:27:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            109 => 
            array (
                'id_attachment' => 8060,
                'id_tabel' => 1035713,
                'file_name' => '20190408082123_373.JPG',
                'temp' => '0.21936224234853885',
                'created_at' => '2019-04-08 08:21:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            110 => 
            array (
                'id_attachment' => 8061,
                'id_tabel' => 1035714,
                'file_name' => '20190408083306_374.JPG',
                'temp' => '0.08146999278832623',
                'created_at' => '2019-04-08 08:33:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            111 => 
            array (
                'id_attachment' => 8091,
                'id_tabel' => 1035736,
                'file_name' => '20190408021616_Tata_Laksana_Statistik_Sektoral_bimtek.pptx',
                'temp' => '0.4206216347370937',
                'created_at' => '2019-04-08 14:16:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            112 => 
            array (
                'id_attachment' => 8092,
                'id_tabel' => 1035736,
                'file_name' => '20190408021649_Modul_3_Pengolahan_dan_Penyajian_Data.pptx',
                'temp' => '0.4206216347370937',
                'created_at' => '2019-04-08 14:16:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            113 => 
            array (
                'id_attachment' => 8097,
                'id_tabel' => 1035744,
                'file_name' => '20190409081511_376.JPG',
                'temp' => '0.965757604444806',
                'created_at' => '2019-04-09 08:15:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            114 => 
            array (
                'id_attachment' => 8098,
                'id_tabel' => 1035745,
                'file_name' => '20190409082154_377.jpeg',
                'temp' => '0.39027401673777873',
                'created_at' => '2019-04-09 08:21:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            115 => 
            array (
                'id_attachment' => 8107,
                'id_tabel' => 1035752,
                'file_name' => '20190409111654_WhatsApp_Image_2019-03-05_at_11.02',
                'temp' => '0.29751812065950656',
                'created_at' => '2019-04-09 11:16:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            116 => 
            array (
                'id_attachment' => 8118,
                'id_tabel' => 1447,
                'file_name' => '20190410081652_Desa_Menjer_9_April_2018.jpeg',
                'temp' => '0.5553709567216925',
                'created_at' => '2019-04-10 08:16:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            117 => 
            array (
                'id_attachment' => 8119,
                'id_tabel' => 1444,
                'file_name' => '20190410082919_Desa_Kalibening_5_APril_2019.jpeg',
                'temp' => '0.30921716761074425',
                'created_at' => '2019-04-10 08:29:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            118 => 
            array (
                'id_attachment' => 8122,
                'id_tabel' => 1035764,
                'file_name' => '20190410091123_378.jpeg',
                'temp' => '0.7048666759281697',
                'created_at' => '2019-04-10 09:11:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            119 => 
            array (
                'id_attachment' => 8130,
                'id_tabel' => 1035771,
                'file_name' => '20190410113408_WhatsApp_Image_2019-04-09_at_17.15',
                'temp' => '0.03377957186671887',
                'created_at' => '2019-04-10 11:34:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            120 => 
            array (
                'id_attachment' => 8150,
                'id_tabel' => 1035776,
                'file_name' => '20190411114543_379.jpg',
                'temp' => '0.7728896458101122',
                'created_at' => '2019-04-11 11:45:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            121 => 
            array (
                'id_attachment' => 8166,
                'id_tabel' => 1449,
                'file_name' => '20190411033941_Desa_Maduretno_11_pril_2019.jpeg',
                'temp' => '0.19707537892694416',
                'created_at' => '2019-04-11 15:39:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            122 => 
            array (
                'id_attachment' => 8170,
                'id_tabel' => 1035784,
                'file_name' => '20190412084959_380.JPG',
                'temp' => '0.12741931829427244',
                'created_at' => '2019-04-12 08:49:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            123 => 
            array (
                'id_attachment' => 8171,
                'id_tabel' => 1035785,
                'file_name' => '20190412091444_381.jpeg',
                'temp' => '0.63610668999428',
                'created_at' => '2019-04-12 09:14:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            124 => 
            array (
                'id_attachment' => 8172,
                'id_tabel' => 1035786,
                'file_name' => '20190412094150_382.JPG',
                'temp' => '0.31787518835412243',
                'created_at' => '2019-04-12 09:41:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            125 => 
            array (
                'id_attachment' => 8173,
                'id_tabel' => 1035787,
                'file_name' => '20190412095015_383.jpg',
                'temp' => '0.7198583662133029',
                'created_at' => '2019-04-12 09:50:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            126 => 
            array (
                'id_attachment' => 8174,
                'id_tabel' => 1035788,
                'file_name' => '20190412101558_SE_Pelayanan_Kantor-page-001.jpg',
                'temp' => '0.1292438984245674',
                'created_at' => '2019-04-12 10:15:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            127 => 
            array (
                'id_attachment' => 8175,
                'id_tabel' => 1035788,
                'file_name' => '20190412101622_SE_Pelayanan_Kantor-page-002.jpg',
                'temp' => '0.1292438984245674',
                'created_at' => '2019-04-12 10:16:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            128 => 
            array (
                'id_attachment' => 8226,
                'id_tabel' => 1035809,
                'file_name' => '20190418024014_384.jpg',
                'temp' => '0.610416155141672',
                'created_at' => '2019-04-18 14:40:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            129 => 
            array (
                'id_attachment' => 8227,
                'id_tabel' => 1035810,
                'file_name' => '20190418025242_385.jpg',
                'temp' => '0.5121093090674791',
                'created_at' => '2019-04-18 14:52:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            130 => 
            array (
                'id_attachment' => 8228,
                'id_tabel' => 1035811,
                'file_name' => '20190418030753_386.JPG',
                'temp' => '0.16856970406426552',
                'created_at' => '2019-04-18 15:07:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            131 => 
            array (
                'id_attachment' => 8229,
                'id_tabel' => 1035812,
                'file_name' => '20190422082957_387.JPG',
                'temp' => '0.7700981075424431',
                'created_at' => '2019-04-22 08:29:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            132 => 
            array (
                'id_attachment' => 8230,
                'id_tabel' => 1035813,
                'file_name' => '20190422083746_388.JPG',
                'temp' => '0.8671760850528882',
                'created_at' => '2019-04-22 08:37:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            133 => 
            array (
                'id_attachment' => 8231,
                'id_tabel' => 1035814,
                'file_name' => '20190422084710_709.jpeg',
                'temp' => '0.8124785138485406',
                'created_at' => '2019-04-22 08:47:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            134 => 
            array (
                'id_attachment' => 8232,
                'id_tabel' => 1035815,
                'file_name' => '20190422085740_389.JPG',
                'temp' => '0.3073122876291754',
                'created_at' => '2019-04-22 08:57:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            135 => 
            array (
                'id_attachment' => 8233,
                'id_tabel' => 1035816,
                'file_name' => '20190422092025_390.jpg',
                'temp' => '0.128441857768558',
                'created_at' => '2019-04-22 09:20:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            136 => 
            array (
                'id_attachment' => 8237,
                'id_tabel' => 1035819,
                'file_name' => '20190423083107_391.jpeg',
                'temp' => '0.8788940407273818',
                'created_at' => '2019-04-23 08:31:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            137 => 
            array (
                'id_attachment' => 8238,
                'id_tabel' => 1035820,
                'file_name' => '20190423085613_392.jpg',
                'temp' => '0.10243085165514376',
                'created_at' => '2019-04-23 08:56:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            138 => 
            array (
                'id_attachment' => 8239,
                'id_tabel' => 1035821,
                'file_name' => '20190423090737_393.JPG',
                'temp' => '0.9486142010033984',
                'created_at' => '2019-04-23 09:07:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            139 => 
            array (
                'id_attachment' => 8240,
                'id_tabel' => 1035822,
                'file_name' => '20190423091937_394.jpeg',
                'temp' => '0.5787965046172738',
                'created_at' => '2019-04-23 09:19:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            140 => 
            array (
                'id_attachment' => 8241,
                'id_tabel' => 1035823,
                'file_name' => '20190423092721_395.jpg',
                'temp' => '0.5519026711866761',
                'created_at' => '2019-04-23 09:27:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            141 => 
            array (
                'id_attachment' => 8265,
                'id_tabel' => 1035834,
                'file_name' => '20190424085733_396.JPG',
                'temp' => '0.5979374021139965',
                'created_at' => '2019-04-24 08:57:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            142 => 
            array (
                'id_attachment' => 8266,
                'id_tabel' => 1035835,
                'file_name' => '20190424114226_397.jpg',
                'temp' => '0.5345511319326819',
                'created_at' => '2019-04-24 11:42:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            143 => 
            array (
                'id_attachment' => 8292,
                'id_tabel' => 1035839,
                'file_name' => '20190425082505_398.jpg',
                'temp' => '0.370623331146829',
                'created_at' => '2019-04-25 08:25:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            144 => 
            array (
                'id_attachment' => 8373,
                'id_tabel' => 1035855,
                'file_name' => '20190425022429_399.JPG',
                'temp' => '0.7229990010400611',
                'created_at' => '2019-04-25 14:24:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            145 => 
            array (
                'id_attachment' => 8374,
                'id_tabel' => 1035856,
                'file_name' => '20190425022949_yt0.PNG',
                'temp' => '0.0636044406123506',
                'created_at' => '2019-04-25 14:29:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            146 => 
            array (
                'id_attachment' => 8375,
                'id_tabel' => 1035856,
                'file_name' => '20190425023000_yt.PNG',
                'temp' => '0.0636044406123506',
                'created_at' => '2019-04-25 14:30:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            147 => 
            array (
                'id_attachment' => 8376,
                'id_tabel' => 1035856,
                'file_name' => '20190425023015_yt1.PNG',
                'temp' => '0.0636044406123506',
                'created_at' => '2019-04-25 14:30:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            148 => 
            array (
                'id_attachment' => 8377,
                'id_tabel' => 1035856,
                'file_name' => '20190425023606_yt2.PNG',
                'temp' => '0.0636044406123506',
                'created_at' => '2019-04-25 14:36:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            149 => 
            array (
                'id_attachment' => 8417,
                'id_tabel' => 1035867,
                'file_name' => '20190430115834_400.jpeg',
                'temp' => '0.008864137825433716',
                'created_at' => '2019-04-30 11:58:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            150 => 
            array (
                'id_attachment' => 8418,
                'id_tabel' => 1035868,
                'file_name' => '20190430120448_401.jpg',
                'temp' => '0.017012102711940758',
                'created_at' => '2019-04-30 12:04:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            151 => 
            array (
                'id_attachment' => 8434,
                'id_tabel' => 0,
                'file_name' => '20190430022046_402.jpg',
                'temp' => '0.1131124673526609',
                'created_at' => '2019-04-30 14:20:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            152 => 
            array (
                'id_attachment' => 8463,
                'id_tabel' => 1035882,
                'file_name' => '20190502123412_1.png',
                'temp' => '0.9407127238313437',
                'created_at' => '2019-05-02 12:34:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            153 => 
            array (
                'id_attachment' => 8464,
                'id_tabel' => 1035882,
                'file_name' => '20190502123639_Tekan_Tombol_Windows+R.jpg',
                'temp' => '0.9407127238313437',
                'created_at' => '2019-05-02 12:36:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            154 => 
            array (
                'id_attachment' => 8465,
                'id_tabel' => 1035882,
                'file_name' => '20190502123837_2.png',
                'temp' => '0.9407127238313437',
                'created_at' => '2019-05-02 12:38:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            155 => 
            array (
                'id_attachment' => 8466,
                'id_tabel' => 1035882,
                'file_name' => '20190502124307_5.png',
                'temp' => '0.9407127238313437',
                'created_at' => '2019-05-02 12:43:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            156 => 
            array (
                'id_attachment' => 8467,
                'id_tabel' => 1035882,
                'file_name' => '20190502124546_6.png',
                'temp' => '0.9407127238313437',
                'created_at' => '2019-05-02 12:45:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            157 => 
            array (
                'id_attachment' => 8586,
                'id_tabel' => 1035912,
                'file_name' => '20190506093407_403.jpg',
                'temp' => '0.4228474988633444',
                'created_at' => '2019-05-06 09:34:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            158 => 
            array (
                'id_attachment' => 8587,
                'id_tabel' => 1035913,
                'file_name' => '20190506100238_723.JPG',
                'temp' => '0.31445424373814124',
                'created_at' => '2019-05-06 10:02:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            159 => 
            array (
                'id_attachment' => 8588,
                'id_tabel' => 1035914,
                'file_name' => '20190506101639_404.jpg',
                'temp' => '0.6990427974505931',
                'created_at' => '2019-05-06 10:16:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            160 => 
            array (
                'id_attachment' => 8667,
                'id_tabel' => 1035976,
                'file_name' => '20190507014332_405.JPG',
                'temp' => '0.1682638872193185',
                'created_at' => '2019-05-07 13:43:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            161 => 
            array (
                'id_attachment' => 8668,
                'id_tabel' => 1035977,
                'file_name' => '20190507015055_406.jpg',
                'temp' => '0.9089719320435503',
                'created_at' => '2019-05-07 13:50:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            162 => 
            array (
                'id_attachment' => 8669,
                'id_tabel' => 1035978,
                'file_name' => '20190507015829_407.jpg',
                'temp' => '0.10499205693187008',
                'created_at' => '2019-05-07 13:58:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            163 => 
            array (
                'id_attachment' => 8674,
                'id_tabel' => 1035980,
                'file_name' => '20190507021216_Existing_Smart_City_Wonosobo_.pdf',
                'temp' => '0.26012749039364635',
                'created_at' => '2019-05-07 14:12:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            164 => 
            array (
                'id_attachment' => 8675,
                'id_tabel' => 1035980,
                'file_name' => '20190507021425_Press_Smart_City_Wonosobo.pdf',
                'temp' => '0.26012749039364635',
                'created_at' => '2019-05-07 14:14:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            165 => 
            array (
                'id_attachment' => 8684,
                'id_tabel' => 1035989,
                'file_name' => '20190508085040_408.jpg',
                'temp' => '0.9060159139417538',
                'created_at' => '2019-05-08 08:50:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            166 => 
            array (
                'id_attachment' => 8702,
                'id_tabel' => 1035993,
                'file_name' => '20190508010505_409.JPG',
                'temp' => '0.321123433566173',
                'created_at' => '2019-05-08 13:05:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            167 => 
            array (
                'id_attachment' => 8712,
                'id_tabel' => 1036003,
                'file_name' => '20190510084649_410.jpeg',
                'temp' => '0.07920801353066675',
                'created_at' => '2019-05-10 08:46:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            168 => 
            array (
                'id_attachment' => 8731,
                'id_tabel' => 1036006,
                'file_name' => '20190510090355_411.JPG',
                'temp' => '0.306381113330056',
                'created_at' => '2019-05-10 09:03:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            169 => 
            array (
                'id_attachment' => 8735,
                'id_tabel' => 1036007,
                'file_name' => '20190510091209_412.jpg',
                'temp' => '0.0772978740231216',
                'created_at' => '2019-05-10 09:12:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            170 => 
            array (
                'id_attachment' => 8766,
                'id_tabel' => 1036024,
                'file_name' => '20190510103146_727.jpeg',
                'temp' => '0.9272778854855823',
                'created_at' => '2019-05-10 10:31:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            171 => 
            array (
                'id_attachment' => 8845,
                'id_tabel' => 1036080,
                'file_name' => '20190515092915_413.JPG',
                'temp' => '0.588999563882429',
                'created_at' => '2019-05-15 09:29:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            172 => 
            array (
                'id_attachment' => 8858,
                'id_tabel' => 1036088,
                'file_name' => '20190515013028_414.jpeg',
                'temp' => '0.11466671902754877',
                'created_at' => '2019-05-15 13:30:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            173 => 
            array (
                'id_attachment' => 8868,
                'id_tabel' => 1036093,
                'file_name' => '20190516102238_415.jpg',
                'temp' => '0.46923407075920176',
                'created_at' => '2019-05-16 10:22:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            174 => 
            array (
                'id_attachment' => 8886,
                'id_tabel' => 1036099,
                'file_name' => '20190520094802_416.jpg',
                'temp' => '0.2737554685068937',
                'created_at' => '2019-05-20 09:48:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            175 => 
            array (
                'id_attachment' => 8916,
                'id_tabel' => 1036108,
                'file_name' => '20190522082929_734.JPG',
                'temp' => '0.10898944280937628',
                'created_at' => '2019-05-22 08:29:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            176 => 
            array (
                'id_attachment' => 8917,
                'id_tabel' => 1036109,
                'file_name' => '20190522083907_735.JPG',
                'temp' => '0.709065476962307',
                'created_at' => '2019-05-22 08:39:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            177 => 
            array (
                'id_attachment' => 8939,
                'id_tabel' => 1036115,
                'file_name' => '20190523092433_417.JPG',
                'temp' => '0.060037155377174134',
                'created_at' => '2019-05-23 09:24:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            178 => 
            array (
                'id_attachment' => 8946,
                'id_tabel' => 1036119,
                'file_name' => '20190524083410_418.JPG',
                'temp' => '0.9600212211046741',
                'created_at' => '2019-05-24 08:34:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            179 => 
            array (
                'id_attachment' => 8947,
                'id_tabel' => 1036120,
                'file_name' => '20190524084204_419.jpg',
                'temp' => '0.29962898449779574',
                'created_at' => '2019-05-24 08:42:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            180 => 
            array (
                'id_attachment' => 8948,
                'id_tabel' => 1036121,
                'file_name' => '20190524084922_420.jpg',
                'temp' => '0.569121911123849',
                'created_at' => '2019-05-24 08:49:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            181 => 
            array (
                'id_attachment' => 8967,
                'id_tabel' => 1036130,
                'file_name' => '20190528084734_421.JPG',
                'temp' => '0.8790109886357846',
                'created_at' => '2019-05-28 08:47:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            182 => 
            array (
                'id_attachment' => 8973,
                'id_tabel' => 84,
                'file_name' => '20190528101752_event-banner-ss.png',
                'temp' => '',
                'created_at' => '2019-05-28 10:17:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            183 => 
            array (
                'id_attachment' => 8974,
                'id_tabel' => 1029836,
                'file_name' => '20190528110502_smartcity_menuju_wonosobo.png',
                'temp' => '0.18275240075346133',
                'created_at' => '2019-05-28 11:05:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            184 => 
            array (
                'id_attachment' => 8975,
                'id_tabel' => 1036132,
                'file_name' => '20190529074105_422.jpg',
                'temp' => '0.6417525057316971',
                'created_at' => '2019-05-29 07:41:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            185 => 
            array (
                'id_attachment' => 8977,
                'id_tabel' => 1036134,
                'file_name' => '20190529092253_423.jpg',
                'temp' => '0.3242037352142493',
                'created_at' => '2019-05-29 09:22:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            186 => 
            array (
                'id_attachment' => 8978,
                'id_tabel' => 1036135,
                'file_name' => '20190529092500_423.jpg',
                'temp' => '0.22828443109313',
                'created_at' => '2019-05-29 09:25:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            187 => 
            array (
                'id_attachment' => 8985,
                'id_tabel' => 1036140,
                'file_name' => '20190531081204_424.JPG',
                'temp' => '0.4123140901337963',
                'created_at' => '2019-05-31 08:12:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            188 => 
            array (
                'id_attachment' => 8986,
                'id_tabel' => 1036141,
                'file_name' => '20190531081808_425.jpg',
                'temp' => '0.21270844174156278',
                'created_at' => '2019-05-31 08:18:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            189 => 
            array (
                'id_attachment' => 9002,
                'id_tabel' => 1036149,
                'file_name' => '20190610082817_426.jpg',
                'temp' => '0.8701478807560048',
                'created_at' => '2019-06-10 08:28:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            190 => 
            array (
                'id_attachment' => 9003,
                'id_tabel' => 1036150,
                'file_name' => '20190610084233_746.jpeg',
                'temp' => '0.5968979790462201',
                'created_at' => '2019-06-10 08:42:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            191 => 
            array (
                'id_attachment' => 9015,
                'id_tabel' => 1036156,
                'file_name' => '20190611083225_748.jpeg',
                'temp' => '0.5281753170670234',
                'created_at' => '2019-06-11 08:32:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            192 => 
            array (
                'id_attachment' => 9016,
                'id_tabel' => 1036157,
                'file_name' => '20190611083823_427.jpg',
                'temp' => '0.6396092309611154',
                'created_at' => '2019-06-11 08:38:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            193 => 
            array (
                'id_attachment' => 9019,
                'id_tabel' => 1036159,
                'file_name' => '20190612101422_428.jpg',
                'temp' => '0.23896127202576745',
                'created_at' => '2019-06-12 10:14:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            194 => 
            array (
                'id_attachment' => 9020,
                'id_tabel' => 0,
                'file_name' => '20190612024030_press_release_PENERIMAAN_SISWA_BARU_2019.pdf',
                'temp' => '0.2408562457777157',
                'created_at' => '2019-06-12 14:40:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            195 => 
            array (
                'id_attachment' => 9023,
                'id_tabel' => 1036161,
                'file_name' => '20190612025133_429.jpg',
                'temp' => '0.5821830957372331',
                'created_at' => '2019-06-12 14:51:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            196 => 
            array (
                'id_attachment' => 9024,
                'id_tabel' => 1036161,
                'file_name' => '20190612025153_press_release_PENERIMAAN_SISWA_BARU_2019.pdf',
                'temp' => '0.5821830957372331',
                'created_at' => '2019-06-12 14:51:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            197 => 
            array (
                'id_attachment' => 9031,
                'id_tabel' => 1036163,
                'file_name' => '20190613091223_430.jpg',
                'temp' => '0.6793888634826277',
                'created_at' => '2019-06-13 09:12:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            198 => 
            array (
                'id_attachment' => 9034,
                'id_tabel' => 1036165,
                'file_name' => '20190613103224_logo_hut.png',
                'temp' => '0.31781707637818046',
                'created_at' => '2019-06-13 10:32:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            199 => 
            array (
                'id_attachment' => 9050,
                'id_tabel' => 1036168,
                'file_name' => '20190614082316_750.JPG',
                'temp' => '0.22222366187353115',
                'created_at' => '2019-06-14 08:23:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            200 => 
            array (
                'id_attachment' => 9086,
                'id_tabel' => 1036202,
                'file_name' => '20190617122306_431.JPG',
                'temp' => '0.7439709134947163',
                'created_at' => '2019-06-17 12:23:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            201 => 
            array (
                'id_attachment' => 9145,
                'id_tabel' => 1037342,
                'file_name' => '20190619080011_432.JPG',
                'temp' => '0.003979830887829161',
                'created_at' => '2019-06-19 08:00:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            202 => 
            array (
                'id_attachment' => 9170,
                'id_tabel' => 1037406,
                'file_name' => '20190619012113_433.jpg',
                'temp' => '0.972256753852788',
                'created_at' => '2019-06-19 13:21:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            203 => 
            array (
                'id_attachment' => 9171,
                'id_tabel' => 1037407,
                'file_name' => '20190619015331_434.JPG',
                'temp' => '0.8081120369730574',
                'created_at' => '2019-06-19 13:53:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            204 => 
            array (
                'id_attachment' => 9178,
                'id_tabel' => 1037416,
                'file_name' => '20190619031236_Bimtek_1.rar',
                'temp' => '0.45714817949932196',
                'created_at' => '2019-06-19 15:12:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            205 => 
            array (
                'id_attachment' => 9179,
                'id_tabel' => 1037417,
                'file_name' => '20190619032015_Materi_Bimtek_Smart_City.rar',
                'temp' => '0.591016930327031',
                'created_at' => '2019-06-19 15:20:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            206 => 
            array (
                'id_attachment' => 9183,
                'id_tabel' => 1037418,
                'file_name' => '20190619034452_435.JPG',
                'temp' => '0.3094150158632065',
                'created_at' => '2019-06-19 15:44:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            207 => 
            array (
                'id_attachment' => 9203,
                'id_tabel' => 1037434,
                'file_name' => '20190620015801_436.JPG',
                'temp' => '0.4913071794545434',
                'created_at' => '2019-06-20 13:58:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            208 => 
            array (
                'id_attachment' => 9262,
                'id_tabel' => 1037490,
                'file_name' => '20190624032429_Kesbangpol-2.jpg',
                'temp' => '0.14045602812202973',
                'created_at' => '2019-06-24 15:24:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            209 => 
            array (
                'id_attachment' => 9263,
                'id_tabel' => 1037491,
                'file_name' => '20190624041618_Smart-City.png',
                'temp' => '0.7222222687217685',
                'created_at' => '2019-06-24 16:16:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            210 => 
            array (
                'id_attachment' => 9288,
                'id_tabel' => 1037492,
                'file_name' => '20190625012645_logo-soul-900x0.jpg',
                'temp' => '0.6426006608660846',
                'created_at' => '2019-06-25 13:26:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            211 => 
            array (
                'id_attachment' => 9289,
                'id_tabel' => 1037492,
                'file_name' => '20190625012811_Bahan_Bimtek_I.rar',
                'temp' => '0.6426006608660846',
                'created_at' => '2019-06-25 13:28:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            212 => 
            array (
                'id_attachment' => 9296,
                'id_tabel' => 1037494,
                'file_name' => '20190625012944_logo-soul-900x0.jpg',
                'temp' => '0.12056813510890607',
                'created_at' => '2019-06-25 13:29:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            213 => 
            array (
                'id_attachment' => 9299,
                'id_tabel' => 1037494,
                'file_name' => '20190625013047_CONTOH_QUICK_WINS.docx',
                'temp' => '0.12056813510890607',
                'created_at' => '2019-06-25 13:30:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            214 => 
            array (
                'id_attachment' => 9301,
                'id_tabel' => 1037494,
                'file_name' => '20190625013058_Kertas_Kerja_Rencana_Program_Pembangunan.docx',
                'temp' => '0.12056813510890607',
                'created_at' => '2019-06-25 13:30:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            215 => 
            array (
                'id_attachment' => 9346,
                'id_tabel' => 1037553,
                'file_name' => '20190626033946_kejuaraan-paralayang.jpg',
                'temp' => '0.8632583683531669',
                'created_at' => '2019-06-26 15:39:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            216 => 
            array (
                'id_attachment' => 9354,
                'id_tabel' => 1037563,
                'file_name' => '20190627030713_Penyusunan_Masterplan_Kota_Cerdas_Mengerucut_Pada_6_Smart.jpg',
                'temp' => '0.00316965307910988',
                'created_at' => '2019-06-27 15:07:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            217 => 
            array (
                'id_attachment' => 9380,
                'id_tabel' => 1037574,
                'file_name' => '20190628055557_calhaj-wonosobo.jpg',
                'temp' => '0.32122468693677275',
                'created_at' => '2019-06-28 17:55:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            218 => 
            array (
                'id_attachment' => 9381,
                'id_tabel' => 1037575,
                'file_name' => '20190628060116_Studi_Referensi_LPPL,_Dinas_Kominfo_Kabupaten_Wonosobo_berkunjung_ke_Blitar.jpg',
                'temp' => '0.6482751726382794',
                'created_at' => '2019-06-28 18:01:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            219 => 
            array (
                'id_attachment' => 9395,
                'id_tabel' => 1037581,
                'file_name' => '20190701084603_437.JPG',
                'temp' => '0.8731868408238388',
                'created_at' => '2019-07-01 08:46:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            220 => 
            array (
                'id_attachment' => 9396,
                'id_tabel' => 1037583,
                'file_name' => '20190701092030_438.JPG',
                'temp' => '0.9666238096951378',
                'created_at' => '2019-07-01 09:20:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            221 => 
            array (
                'id_attachment' => 9397,
                'id_tabel' => 1037584,
                'file_name' => '20190701094305_439.JPG',
                'temp' => '0.4473456564153544',
                'created_at' => '2019-07-01 09:43:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            222 => 
            array (
                'id_attachment' => 9398,
                'id_tabel' => 1037585,
                'file_name' => '20190701100306_440.JPG',
                'temp' => '0.36912028005257036',
                'created_at' => '2019-07-01 10:03:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            223 => 
            array (
                'id_attachment' => 9399,
                'id_tabel' => 1037586,
                'file_name' => '20190701101005_441.JPG',
                'temp' => '0.17554794820768937',
                'created_at' => '2019-07-01 10:10:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            224 => 
            array (
                'id_attachment' => 9400,
                'id_tabel' => 1037587,
                'file_name' => '20190701112444_759.JPG',
                'temp' => '0.6445773803881938',
                'created_at' => '2019-07-01 11:24:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            225 => 
            array (
                'id_attachment' => 9401,
                'id_tabel' => 1037588,
                'file_name' => '20190701115440_760.jpeg',
                'temp' => '0.9169633374847059',
                'created_at' => '2019-07-01 11:54:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            226 => 
            array (
                'id_attachment' => 9409,
                'id_tabel' => 1037611,
                'file_name' => '20190701032029_442.JPG',
                'temp' => '0.7954184554481203',
                'created_at' => '2019-07-01 15:20:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            227 => 
            array (
                'id_attachment' => 9517,
                'id_tabel' => 1037747,
                'file_name' => '20190705090821_443.JPG',
                'temp' => '0.3131602224359342',
                'created_at' => '2019-07-05 09:08:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            228 => 
            array (
                'id_attachment' => 9518,
                'id_tabel' => 1037748,
                'file_name' => '20190705090948_Study-LPM.jpg',
                'temp' => '0.5890677959797692',
                'created_at' => '2019-07-05 09:09:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            229 => 
            array (
                'id_attachment' => 9606,
                'id_tabel' => 1037825,
                'file_name' => '20190710080007_444.JPG',
                'temp' => '0.817521191221229',
                'created_at' => '2019-07-10 08:00:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            230 => 
            array (
                'id_attachment' => 9607,
                'id_tabel' => 1037826,
                'file_name' => '20190710090438_445.JPG',
                'temp' => '0.8899737711629225',
                'created_at' => '2019-07-10 09:04:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            231 => 
            array (
                'id_attachment' => 9608,
                'id_tabel' => 1037828,
                'file_name' => '20190710093637_446.JPG',
                'temp' => '0.7110295616777809',
                'created_at' => '2019-07-10 09:36:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            232 => 
            array (
                'id_attachment' => 9643,
                'id_tabel' => 1029909,
                'file_name' => '20190711121153_struktur-organisasi-2019.jpg',
                'temp' => '0.5914678252157968',
                'created_at' => '2019-07-11 12:11:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            233 => 
            array (
                'id_attachment' => 9647,
                'id_tabel' => 1037863,
                'file_name' => '20190711012604_447.JPG',
                'temp' => '0.010552847356918305',
                'created_at' => '2019-07-11 13:26:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            234 => 
            array (
                'id_attachment' => 9652,
                'id_tabel' => 1037865,
                'file_name' => '20190711015523_448.jpg',
                'temp' => '0.029046060718575628',
                'created_at' => '2019-07-11 13:55:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            235 => 
            array (
                'id_attachment' => 9660,
                'id_tabel' => 1037868,
                'file_name' => '20190712082735_449.JPG',
                'temp' => '0.702160264866047',
                'created_at' => '2019-07-12 08:27:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            236 => 
            array (
                'id_attachment' => 9661,
                'id_tabel' => 1037869,
                'file_name' => '20190712085134_450.jpg',
                'temp' => '0.5116505781765097',
                'created_at' => '2019-07-12 08:51:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            237 => 
            array (
                'id_attachment' => 9691,
                'id_tabel' => 1037878,
                'file_name' => '20190715095323_451.jpg',
                'temp' => '0.8977892465152566',
                'created_at' => '2019-07-15 09:53:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            238 => 
            array (
                'id_attachment' => 9692,
                'id_tabel' => 446,
                'file_name' => '20190715100840_webtv.jpg',
                'temp' => '',
                'created_at' => '2019-07-15 10:08:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            239 => 
            array (
                'id_attachment' => 9695,
                'id_tabel' => 1037879,
                'file_name' => '20190716081941_771.JPG',
                'temp' => '0.3240770919057714',
                'created_at' => '2019-07-16 08:19:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            240 => 
            array (
                'id_attachment' => 9696,
                'id_tabel' => 1037880,
                'file_name' => '20190716085501_452.JPG',
                'temp' => '0.2562007869901062',
                'created_at' => '2019-07-16 08:55:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            241 => 
            array (
                'id_attachment' => 9697,
                'id_tabel' => 1037881,
                'file_name' => '20190716090048_453.JPG',
                'temp' => '0.8109741571491154',
                'created_at' => '2019-07-16 09:00:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            242 => 
            array (
                'id_attachment' => 9718,
                'id_tabel' => 1037898,
                'file_name' => '20190716025248_454.JPG',
                'temp' => '0.7533875201516589',
                'created_at' => '2019-07-16 14:52:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            243 => 
            array (
                'id_attachment' => 9770,
                'id_tabel' => 1037911,
                'file_name' => '20190717025041_SK_Kabupaten_Wonosobo.zip',
                'temp' => '0.9131695032261746',
                'created_at' => '2019-07-17 14:50:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            244 => 
            array (
                'id_attachment' => 9771,
                'id_tabel' => 1037912,
                'file_name' => '20190717031309_455.jpeg',
                'temp' => '0.38977801351820784',
                'created_at' => '2019-07-17 15:13:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            245 => 
            array (
                'id_attachment' => 9781,
                'id_tabel' => 1037918,
                'file_name' => '20190718084207_456.jpg',
                'temp' => '0.4166654184145726',
                'created_at' => '2019-07-18 08:42:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            246 => 
            array (
                'id_attachment' => 9782,
                'id_tabel' => 1037919,
                'file_name' => '20190718090743_457.JPG',
                'temp' => '0.8066300664701833',
                'created_at' => '2019-07-18 09:07:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            247 => 
            array (
                'id_attachment' => 9812,
                'id_tabel' => 1037936,
                'file_name' => '20190722083441_776.jpg',
                'temp' => '0.7008335505067105',
                'created_at' => '2019-07-22 08:34:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            248 => 
            array (
                'id_attachment' => 9813,
                'id_tabel' => 1037937,
                'file_name' => '20190722084034_458.jpeg',
                'temp' => '0.8656975216610425',
                'created_at' => '2019-07-22 08:40:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            249 => 
            array (
                'id_attachment' => 9815,
                'id_tabel' => 1037939,
                'file_name' => '20190722085105_459.JPG',
                'temp' => '0.03001002369815131',
                'created_at' => '2019-07-22 08:51:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            250 => 
            array (
                'id_attachment' => 9816,
                'id_tabel' => 1037940,
                'file_name' => '20190722090128_777.JPG',
                'temp' => '0.21255403686238172',
                'created_at' => '2019-07-22 09:01:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            251 => 
            array (
                'id_attachment' => 9871,
                'id_tabel' => 1037960,
                'file_name' => '20190723083030_460.jpeg',
                'temp' => '0.753893753795569',
                'created_at' => '2019-07-23 08:30:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            252 => 
            array (
                'id_attachment' => 9941,
                'id_tabel' => 1037979,
                'file_name' => '20190725085723_461.JPG',
                'temp' => '0.5627086255482037',
                'created_at' => '2019-07-25 08:57:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            253 => 
            array (
                'id_attachment' => 9942,
                'id_tabel' => 1037980,
                'file_name' => '20190725091203_462.JPG',
                'temp' => '0.5930925829193854',
                'created_at' => '2019-07-25 09:12:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            254 => 
            array (
                'id_attachment' => 9981,
                'id_tabel' => 1037989,
                'file_name' => '20190726100524_463.jpg',
                'temp' => '0.610380111508865',
                'created_at' => '2019-07-26 10:05:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            255 => 
            array (
                'id_attachment' => 10012,
                'id_tabel' => 1037998,
                'file_name' => '20190729100105_464.jpg',
                'temp' => '0.6586274437434183',
                'created_at' => '2019-07-29 10:01:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            256 => 
            array (
                'id_attachment' => 10016,
                'id_tabel' => 1037999,
                'file_name' => '20190729101705_781.JPG',
                'temp' => '0.37493424830750866',
                'created_at' => '2019-07-29 10:17:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            257 => 
            array (
                'id_attachment' => 10017,
                'id_tabel' => 1038000,
                'file_name' => '20190729102409_465.jpg',
                'temp' => '0.9552544886246741',
                'created_at' => '2019-07-29 10:24:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            258 => 
            array (
                'id_attachment' => 10028,
                'id_tabel' => 1038006,
                'file_name' => '20190730083907_466.JPG',
                'temp' => '0.9313867499911912',
                'created_at' => '2019-07-30 08:39:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            259 => 
            array (
                'id_attachment' => 10031,
                'id_tabel' => 1038007,
                'file_name' => '20190730084646_467.JPG',
                'temp' => '0.8589500296920209',
                'created_at' => '2019-07-30 08:46:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            260 => 
            array (
                'id_attachment' => 10053,
                'id_tabel' => 1038017,
                'file_name' => '20190730021411_468.jpg',
                'temp' => '0.21717638787429716',
                'created_at' => '2019-07-30 14:14:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            261 => 
            array (
                'id_attachment' => 10057,
                'id_tabel' => 1038021,
                'file_name' => '20190731080408_469.JPG',
                'temp' => '0.9530665366465829',
                'created_at' => '2019-07-31 08:04:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            262 => 
            array (
                'id_attachment' => 10063,
                'id_tabel' => 1038023,
                'file_name' => '20190731081021_470.jpg',
                'temp' => '0.33276162269816334',
                'created_at' => '2019-07-31 08:10:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            263 => 
            array (
                'id_attachment' => 10077,
                'id_tabel' => 1038024,
                'file_name' => '20190731082751_Kabupaten_Wonosobo.png',
                'temp' => '0.509139089207101',
                'created_at' => '2019-07-31 08:27:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            264 => 
            array (
                'id_attachment' => 10103,
                'id_tabel' => 1038047,
                'file_name' => '20190801085412_20190731081021_471.jpg',
                'temp' => '0.9410372346922324',
                'created_at' => '2019-08-01 08:54:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            265 => 
            array (
                'id_attachment' => 10104,
                'id_tabel' => 1038048,
                'file_name' => '20190801090232_471.jpg',
                'temp' => '0.5301312845547292',
                'created_at' => '2019-08-01 09:02:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            266 => 
            array (
                'id_attachment' => 10130,
                'id_tabel' => 1038067,
                'file_name' => '20190802084716_Untitled-1.jpg',
                'temp' => '0.6420576429476839',
                'created_at' => '2019-08-02 20:47:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            267 => 
            array (
                'id_attachment' => 10131,
                'id_tabel' => 1038024,
                'file_name' => '20190802092336_PETUNJUK_TEKNIS_KARNAVAL_TEMATIK_2019.pdf',
                'temp' => '0.911444202478694',
                'created_at' => '2019-08-02 21:23:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            268 => 
            array (
                'id_attachment' => 10169,
                'id_tabel' => 1038080,
                'file_name' => '20190805085127_472.JPG',
                'temp' => '0.7949639152034382',
                'created_at' => '2019-08-05 08:51:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            269 => 
            array (
                'id_attachment' => 10170,
                'id_tabel' => 0,
                'file_name' => '20190805085403_Kabupaten_Wonosobo.png',
                'temp' => '0.9613178547048562',
                'created_at' => '2019-08-05 08:54:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            270 => 
            array (
                'id_attachment' => 10176,
                'id_tabel' => 1038085,
                'file_name' => '20190805092727_Kabupaten_Wonosobo.png',
                'temp' => '0.8204398843593859',
                'created_at' => '2019-08-05 09:27:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            271 => 
            array (
                'id_attachment' => 10185,
                'id_tabel' => 0,
                'file_name' => '20190805102803_Kabupaten_Wonosobo.png',
                'temp' => '0.872226832150848',
                'created_at' => '2019-08-05 10:28:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            272 => 
            array (
                'id_attachment' => 10212,
                'id_tabel' => 1038101,
                'file_name' => '20190806024031_Media_Diajak_Kawal_Smart_City.jpg',
                'temp' => '0.2118152997321967',
                'created_at' => '2019-08-06 14:40:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            273 => 
            array (
                'id_attachment' => 10213,
                'id_tabel' => 1038102,
                'file_name' => '20190806024424_Smart_City_Butuh_Sinergi_Kuat,_OPD_Diminta_Hindari_Saling_Menyalahkan.jpg',
                'temp' => '0.5436440113114425',
                'created_at' => '2019-08-06 14:44:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            274 => 
            array (
                'id_attachment' => 10250,
                'id_tabel' => 1038118,
                'file_name' => '20190808092548_DSC_0141.JPG',
                'temp' => '0.008597768325157906',
                'created_at' => '2019-08-08 09:25:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            275 => 
            array (
                'id_attachment' => 10264,
                'id_tabel' => 1038125,
                'file_name' => '20190808040936_Wonosobo_Terima_Pengharagaan.jpeg',
                'temp' => '0.5411238789720598',
                'created_at' => '2019-08-08 16:09:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            276 => 
            array (
                'id_attachment' => 10283,
                'id_tabel' => 1038128,
                'file_name' => '20190809085329_785.JPG',
                'temp' => '0.09047871607073588',
                'created_at' => '2019-08-09 08:53:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            277 => 
            array (
                'id_attachment' => 10308,
                'id_tabel' => 0,
                'file_name' => '20190812075309_download.jpg',
                'temp' => '0.3219855338533708',
                'created_at' => '2019-08-12 07:53:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            278 => 
            array (
                'id_attachment' => 10309,
                'id_tabel' => 1769,
                'file_name' => '20190812085312_logowsb1.png',
                'temp' => '0.27040041912156865',
                'created_at' => '2019-08-12 08:53:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            279 => 
            array (
                'id_attachment' => 10310,
                'id_tabel' => 1770,
                'file_name' => '20190812085550_download.jpg',
                'temp' => '0.679153914693228',
                'created_at' => '2019-08-12 08:55:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            280 => 
            array (
                'id_attachment' => 10311,
                'id_tabel' => 1770,
                'file_name' => '20190812085604_4.-kebun-teh-tambi-dieng',
                'temp' => '0.679153914693228',
                'created_at' => '2019-08-12 08:56:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            281 => 
            array (
                'id_attachment' => 10312,
                'id_tabel' => 1770,
                'file_name' => '20190812085647_Apa_yang_dilakukan_orang.docx',
                'temp' => '0.679153914693228',
                'created_at' => '2019-08-12 08:56:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            282 => 
            array (
                'id_attachment' => 10313,
                'id_tabel' => 1038139,
                'file_name' => '20190812091213_alun-alun-sapuran-senam.jpg',
                'temp' => '0.3423480657014055',
                'created_at' => '2019-08-12 09:12:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            283 => 
            array (
                'id_attachment' => 10314,
                'id_tabel' => 1038140,
                'file_name' => '20190812091702_bupati-ajak-masyarakat-sesama.jpg',
                'temp' => '0.7480983990757617',
                'created_at' => '2019-08-12 09:17:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            284 => 
            array (
                'id_attachment' => 10316,
                'id_tabel' => 0,
                'file_name' => '20190812093859_PHBI_Permata_Hijau_Bagikan_400_Paket_Daging_Kurban.jpg',
                'temp' => '0.6803946400003891',
                'created_at' => '2019-08-12 09:38:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            285 => 
            array (
                'id_attachment' => 10317,
                'id_tabel' => 1038142,
                'file_name' => '20190812094320_PHBI_Permata_Hijau_Bagikan_400_Paket_Daging_Kurban.jpg',
                'temp' => '0.6846557210040454',
                'created_at' => '2019-08-12 09:43:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            286 => 
            array (
                'id_attachment' => 10342,
                'id_tabel' => 0,
                'file_name' => '20190812072941_paskibra-potong-rambut.jpg',
                'temp' => '0.25654461383932636',
                'created_at' => '2019-08-12 19:29:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            287 => 
            array (
                'id_attachment' => 10343,
                'id_tabel' => 1038147,
                'file_name' => '20190812073230_paskibra-potong-rambut.jpg',
                'temp' => '0.5861404351531123',
                'created_at' => '2019-08-12 19:32:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            288 => 
            array (
                'id_attachment' => 10373,
                'id_tabel' => 1038156,
                'file_name' => '20190814081912_476.jpeg',
                'temp' => '0.7992205677999149',
                'created_at' => '2019-08-14 08:19:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            289 => 
            array (
                'id_attachment' => 10375,
                'id_tabel' => 1038158,
                'file_name' => '20190814092523_787.jpeg',
                'temp' => '0.3859488937775186',
                'created_at' => '2019-08-14 09:25:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            290 => 
            array (
                'id_attachment' => 10376,
                'id_tabel' => 1038159,
                'file_name' => '20190814093658_481.JPG',
                'temp' => '0.32990969921668456',
                'created_at' => '2019-08-14 09:36:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            291 => 
            array (
                'id_attachment' => 10377,
                'id_tabel' => 1038160,
                'file_name' => '20190814094715_482.JPG',
                'temp' => '0.3214077101089077',
                'created_at' => '2019-08-14 09:47:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            292 => 
            array (
                'id_attachment' => 10382,
                'id_tabel' => 1038162,
                'file_name' => '20190814095327_483.jpg',
                'temp' => '0.6726592907271136',
                'created_at' => '2019-08-14 09:53:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            293 => 
            array (
                'id_attachment' => 10383,
                'id_tabel' => 1038163,
                'file_name' => '20190814095924_484.jpeg',
                'temp' => '0.5317478363321799',
                'created_at' => '2019-08-14 09:59:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            294 => 
            array (
                'id_attachment' => 10384,
                'id_tabel' => 1038164,
                'file_name' => '20190814030500_485.JPG',
                'temp' => '0.20763678740170066',
                'created_at' => '2019-08-14 15:05:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            295 => 
            array (
                'id_attachment' => 10416,
                'id_tabel' => 1038176,
                'file_name' => '20190816094733_486.JPG',
                'temp' => '0.7806314514866333',
                'created_at' => '2019-08-16 09:47:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            296 => 
            array (
                'id_attachment' => 10431,
                'id_tabel' => 1038180,
                'file_name' => '20190816043455_persiapan-karnaval.jpg',
                'temp' => '0.7081414572330451',
                'created_at' => '2019-08-16 16:34:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            297 => 
            array (
                'id_attachment' => 10432,
                'id_tabel' => 1038181,
                'file_name' => '20190816050935_lurik-jawa.jpg',
                'temp' => '0.7125601616102708',
                'created_at' => '2019-08-16 17:09:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            298 => 
            array (
                'id_attachment' => 10433,
                'id_tabel' => 1038182,
                'file_name' => '20190816081402_penandatangan-kontrak.jpg',
                'temp' => '0.6709382849433903',
                'created_at' => '2019-08-16 20:14:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            299 => 
            array (
                'id_attachment' => 10436,
                'id_tabel' => 1038183,
                'file_name' => '20190816084452_template-foto-tanpa-foto.jpg',
                'temp' => '0.39285504035917707',
                'created_at' => '2019-08-16 20:44:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            300 => 
            array (
                'id_attachment' => 10457,
                'id_tabel' => 1038188,
                'file_name' => '20190817051732_kemenkumham-beri-remisi.jpg',
                'temp' => '0.6209776416805521',
                'created_at' => '2019-08-17 17:17:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            301 => 
            array (
                'id_attachment' => 10467,
                'id_tabel' => 1038191,
                'file_name' => '20190819080140_487.JPG',
                'temp' => '0.36028700601365515',
                'created_at' => '2019-08-19 08:01:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            302 => 
            array (
                'id_attachment' => 10468,
                'id_tabel' => 1038192,
                'file_name' => '20190819082830_489.jpg',
                'temp' => '0.24598443962742045',
                'created_at' => '2019-08-19 08:28:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            303 => 
            array (
                'id_attachment' => 10469,
                'id_tabel' => 1038193,
                'file_name' => '20190819085207_789.jpeg',
                'temp' => '0.6744858149831814',
                'created_at' => '2019-08-19 08:52:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            304 => 
            array (
                'id_attachment' => 10470,
                'id_tabel' => 1038194,
                'file_name' => '20190819090322_491.JPG',
                'temp' => '0.8326420204755702',
                'created_at' => '2019-08-19 09:03:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            305 => 
            array (
                'id_attachment' => 10482,
                'id_tabel' => 1038196,
                'file_name' => '20190819092010_790.JPG',
                'temp' => '0.6629181089249823',
                'created_at' => '2019-08-19 09:20:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            306 => 
            array (
                'id_attachment' => 10487,
                'id_tabel' => 1038197,
                'file_name' => '20190819094754_492.JPG',
                'temp' => '0.3186887628371826',
                'created_at' => '2019-08-19 09:47:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            307 => 
            array (
                'id_attachment' => 10524,
                'id_tabel' => 1038216,
                'file_name' => '20190820124031_kartu-tani.jpg',
                'temp' => '0.15847244892274914',
                'created_at' => '2019-08-20 12:40:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            308 => 
            array (
                'id_attachment' => 10530,
                'id_tabel' => 1038219,
                'file_name' => '20190821081515_493.JPG',
                'temp' => '0.14407610985225494',
                'created_at' => '2019-08-21 08:15:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            309 => 
            array (
                'id_attachment' => 10549,
                'id_tabel' => 0,
                'file_name' => '20190823082331_494.JPG',
                'temp' => '0.7260100308204325',
                'created_at' => '2019-08-23 08:23:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            310 => 
            array (
                'id_attachment' => 10550,
                'id_tabel' => 1038230,
                'file_name' => '20190823082523_494.JPG',
                'temp' => '0.6007750182704694',
                'created_at' => '2019-08-23 08:25:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            311 => 
            array (
                'id_attachment' => 10551,
                'id_tabel' => 1038231,
                'file_name' => '20190823083341_495.jpg',
                'temp' => '0.6911353922198076',
                'created_at' => '2019-08-23 08:33:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            312 => 
            array (
                'id_attachment' => 10567,
                'id_tabel' => 1038239,
                'file_name' => '20190823103935_peletakan-batu-pertama.jpg',
                'temp' => '0.970909000588916',
                'created_at' => '2019-08-23 22:39:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            313 => 
            array (
                'id_attachment' => 10672,
                'id_tabel' => 1038257,
                'file_name' => '20190828080259_497.JPG',
                'temp' => '0.17843121462021094',
                'created_at' => '2019-08-28 08:02:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            314 => 
            array (
                'id_attachment' => 10683,
                'id_tabel' => 1038263,
                'file_name' => '20190829083943_498.jpg',
                'temp' => '0.4664774034047505',
                'created_at' => '2019-08-29 08:39:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            315 => 
            array (
                'id_attachment' => 10684,
                'id_tabel' => 1038264,
                'file_name' => '20190829084944_499.JPG',
                'temp' => '0.6158266899089246',
                'created_at' => '2019-08-29 08:49:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            316 => 
            array (
                'id_attachment' => 10703,
                'id_tabel' => 1038273,
                'file_name' => '20190830081032_500.jpg',
                'temp' => '0.7487099457245916',
                'created_at' => '2019-08-30 08:10:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            317 => 
            array (
                'id_attachment' => 10704,
                'id_tabel' => 1038274,
                'file_name' => '20190830083008_501.JPG',
                'temp' => '0.6331675353294024',
                'created_at' => '2019-08-30 08:30:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            318 => 
            array (
                'id_attachment' => 10705,
                'id_tabel' => 1038275,
                'file_name' => '20190830083229_501.JPG',
                'temp' => '0.3922528331003803',
                'created_at' => '2019-08-30 08:32:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            319 => 
            array (
                'id_attachment' => 10706,
                'id_tabel' => 1038276,
                'file_name' => '20190830084523_502.JPG',
                'temp' => '0.9937191356539721',
                'created_at' => '2019-08-30 08:45:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            320 => 
            array (
                'id_attachment' => 10735,
                'id_tabel' => 1038287,
                'file_name' => '20190903113529_793.JPG',
                'temp' => '0.09821541399617306',
                'created_at' => '2019-09-03 11:35:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            321 => 
            array (
                'id_attachment' => 10737,
                'id_tabel' => 1038289,
                'file_name' => '20190903114943_503.JPG',
                'temp' => '0.5160671659163161',
                'created_at' => '2019-09-03 11:49:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            322 => 
            array (
                'id_attachment' => 10916,
                'id_tabel' => 1038359,
                'file_name' => '20190909064856_gid.jpg',
                'temp' => '0.6950607559661626',
                'created_at' => '2019-09-09 18:48:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            323 => 
            array (
                'id_attachment' => 10917,
                'id_tabel' => 1038360,
                'file_name' => '20190909073119_Wonosobo_Kembali_Raih_Prestasi_Nasional.jpg',
                'temp' => '0.5640595451975476',
                'created_at' => '2019-09-09 19:31:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            324 => 
            array (
                'id_attachment' => 10918,
                'id_tabel' => 1038361,
                'file_name' => '20190909075320_Wonosobo_Tuan_Rumah_Peringatan_Haornas_Jateng_2019.jpg',
                'temp' => '0.7011680716228463',
                'created_at' => '2019-09-09 19:53:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            325 => 
            array (
                'id_attachment' => 10919,
                'id_tabel' => 1038362,
                'file_name' => '20190909080927_Inovasi_Untuk_Pelayanan_Publik_Yang_Sesuai_Harapan.jpg',
                'temp' => '0.8275585531205032',
                'created_at' => '2019-09-09 20:09:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            326 => 
            array (
                'id_attachment' => 11184,
                'id_tabel' => 0,
                'file_name' => '20190912033353_New_Tab.pdf',
                'temp' => '0.4385439087134644',
                'created_at' => '2019-09-12 15:33:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            327 => 
            array (
                'id_attachment' => 11185,
                'id_tabel' => 1884,
                'file_name' => '20190912041556_seto.jpeg',
                'temp' => '0.9113470134950321',
                'created_at' => '2019-09-12 16:15:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            328 => 
            array (
                'id_attachment' => 11187,
                'id_tabel' => 1038489,
                'file_name' => '20190912072029_Untitled-1.jpg',
                'temp' => '0.9875497096117292',
                'created_at' => '2019-09-12 19:20:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            329 => 
            array (
                'id_attachment' => 11188,
                'id_tabel' => 1038490,
                'file_name' => '20190912072152_Untitled-1.jpg',
                'temp' => '0.31300674747579693',
                'created_at' => '2019-09-12 19:21:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            330 => 
            array (
                'id_attachment' => 11594,
                'id_tabel' => 1038646,
                'file_name' => '20190916105848_Peringatan_Satu_Dasawarsa_TKSK_Dipusatkan_Di_Kawasan_Telaga_Menjer.jpg',
                'temp' => '0.5036895125432241',
                'created_at' => '2019-09-16 10:58:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            331 => 
            array (
                'id_attachment' => 12009,
                'id_tabel' => 1903,
                'file_name' => '20190917120658_IMG_20190917_115043.jpg',
                'temp' => '0.05860953887742748',
                'created_at' => '2019-09-17 12:06:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            332 => 
            array (
                'id_attachment' => 12028,
                'id_tabel' => 1038786,
                'file_name' => '20190918031144_Pramuka_Lakukan_Bakti_Masyarakat_di_Slukatan.jpg',
                'temp' => '0.9508534442397043',
                'created_at' => '2019-09-18 03:11:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            333 => 
            array (
                'id_attachment' => 12047,
                'id_tabel' => 1038793,
                'file_name' => '20190919063042_satu-dasa-warta.jpg',
                'temp' => '0.24760511716061595',
                'created_at' => '2019-09-19 18:30:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            334 => 
            array (
                'id_attachment' => 12048,
                'id_tabel' => 1038794,
                'file_name' => '20190919063807_semar-mbangun.jpg',
                'temp' => '0.22938365776841696',
                'created_at' => '2019-09-19 18:38:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            335 => 
            array (
                'id_attachment' => 12049,
                'id_tabel' => 1038795,
                'file_name' => '20190919064524_Desk_dan_Validasi_SKJ_Di_Kabupaten_Wonosobo.jpg',
                'temp' => '0.43467645670182997',
                'created_at' => '2019-09-19 18:45:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            336 => 
            array (
                'id_attachment' => 12109,
                'id_tabel' => 1038816,
                'file_name' => '20190925094006_512.JPG',
                'temp' => '0.9630686670537911',
                'created_at' => '2019-09-25 09:40:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            337 => 
            array (
                'id_attachment' => 12110,
                'id_tabel' => 1038817,
                'file_name' => '20190925094813_513.jpg',
                'temp' => '0.4365155689627227',
                'created_at' => '2019-09-25 09:48:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            338 => 
            array (
                'id_attachment' => 12115,
                'id_tabel' => 1038828,
                'file_name' => '20190925080949_Untitled-1.jpg',
                'temp' => '0.7054496310766256',
                'created_at' => '2019-09-25 20:09:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            339 => 
            array (
                'id_attachment' => 12116,
                'id_tabel' => 1038829,
                'file_name' => '20190925081936_Untitled-1.jpg',
                'temp' => '0.8676627002845689',
                'created_at' => '2019-09-25 20:19:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            340 => 
            array (
                'id_attachment' => 12131,
                'id_tabel' => 1038841,
                'file_name' => '20190926045256_Untitled-1.jpg',
                'temp' => '0.18372672254238864',
                'created_at' => '2019-09-26 16:52:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            341 => 
            array (
                'id_attachment' => 12132,
                'id_tabel' => 1038842,
                'file_name' => '20190926050633_21_Rumah_Di_Butuh_Kidul_Rusak_Disapu_Puting_Beliung.jpg',
                'temp' => '0.8274866480836842',
                'created_at' => '2019-09-26 17:06:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            342 => 
            array (
                'id_attachment' => 12133,
                'id_tabel' => 1038843,
                'file_name' => '20190926051045_Bupati_Berikan_Bantuan_Kepada_Korban_Angin_Puting_Beliung.jpg',
                'temp' => '0.025507227870688487',
                'created_at' => '2019-09-26 17:10:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            343 => 
            array (
                'id_attachment' => 12134,
                'id_tabel' => 1038844,
                'file_name' => '20190926052555_Ojek_Wisata_Gunung_Sumbing_Diimbau_Tak_Main_Api.jpg',
                'temp' => '0.4981811429311471',
                'created_at' => '2019-09-26 17:25:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            344 => 
            array (
                'id_attachment' => 12174,
                'id_tabel' => 1038869,
                'file_name' => '20190928084122_KANTOR-POS.jpg',
                'temp' => '0.2803220386912233',
                'created_at' => '2019-09-28 20:41:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            345 => 
            array (
                'id_attachment' => 12176,
                'id_tabel' => 1038877,
                'file_name' => '20190930080107_dombos-edukatif.jpg',
                'temp' => '0.08189145446546275',
                'created_at' => '2019-09-30 08:01:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            346 => 
            array (
                'id_attachment' => 12228,
                'id_tabel' => 1038966,
                'file_name' => '20191001041714_Untitled-1.jpg',
                'temp' => '0.04569333682286003',
                'created_at' => '2019-10-01 16:17:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            347 => 
            array (
                'id_attachment' => 12229,
                'id_tabel' => 1038967,
                'file_name' => '20191001042542_Wakil_Bupati_Buka_Workshop_Penyandang_Disabilitas.jpg',
                'temp' => '0.5676877529472784',
                'created_at' => '2019-10-01 16:25:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            348 => 
            array (
                'id_attachment' => 12331,
                'id_tabel' => 1039035,
                'file_name' => '20191002103245_Untitled-1.jpg',
                'temp' => '0.8304501124609571',
                'created_at' => '2019-10-02 22:32:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            349 => 
            array (
                'id_attachment' => 12337,
                'id_tabel' => 1039037,
                'file_name' => '20191003082603_523.jpg',
                'temp' => '0.332178647670907',
                'created_at' => '2019-10-03 08:26:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            350 => 
            array (
                'id_attachment' => 12341,
                'id_tabel' => 1039038,
                'file_name' => '20191003084414_524.jpg',
                'temp' => '0.2735523378222948',
                'created_at' => '2019-10-03 08:44:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            351 => 
            array (
                'id_attachment' => 12996,
                'id_tabel' => 1039328,
                'file_name' => '20191007092247_Bupati_Minta_Kepada_OPD_Agar_Terus_Kembangkan_Birokrasi_Yang_Inovatif.jpg',
                'temp' => '0.3543704200385174',
                'created_at' => '2019-10-07 21:22:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            352 => 
            array (
                'id_attachment' => 12997,
                'id_tabel' => 1039329,
                'file_name' => '20191007093654_2_Pelajar_Wonosobo_Ikuti_PENTAS_PAI_Tingkat_Nasional.jpg',
                'temp' => '0.5485421407035245',
                'created_at' => '2019-10-07 21:36:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            353 => 
            array (
                'id_attachment' => 13083,
                'id_tabel' => 1039335,
                'file_name' => '20191008032731_Tahap_Akhir_Masterplan_Smartcity,_Pemkab_Teken_Komitmen_Bersama_Lintas_Elemen.jpg',
                'temp' => '0.20666961511476134',
                'created_at' => '2019-10-08 15:27:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            354 => 
            array (
                'id_attachment' => 13102,
                'id_tabel' => 1039336,
                'file_name' => '20191009082250_PMI_Berikan_Penghargaan_Kepada_Pendonor_Terbanyak.jpg',
                'temp' => '0.9584511057198954',
                'created_at' => '2019-10-09 08:22:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            355 => 
            array (
                'id_attachment' => 13144,
                'id_tabel' => 1039356,
                'file_name' => '20191011093418_Pemberian_Bantuan_Pasca_Kebakaran_Rumah.jpg',
                'temp' => '0.29691691576673795',
                'created_at' => '2019-10-11 09:34:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            356 => 
            array (
                'id_attachment' => 13150,
                'id_tabel' => 1039361,
                'file_name' => '20191015061201_gambar-1.jpg',
                'temp' => '0.07990948993601976',
                'created_at' => '2019-10-15 18:12:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            357 => 
            array (
                'id_attachment' => 13151,
                'id_tabel' => 1039362,
                'file_name' => '20191015062036_gambar-inovasi.jpg',
                'temp' => '0.6538027207250863',
                'created_at' => '2019-10-15 18:20:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            358 => 
            array (
                'id_attachment' => 13168,
                'id_tabel' => 1039369,
                'file_name' => '20191016070301_TDUP-Diskominfo.jpg',
                'temp' => '0.4142837259524643',
                'created_at' => '2019-10-16 19:03:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            359 => 
            array (
                'id_attachment' => 13169,
                'id_tabel' => 1039370,
                'file_name' => '20191016071600_7-pkk-baru.jpg',
                'temp' => '0.5589238022881271',
                'created_at' => '2019-10-16 19:16:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            360 => 
            array (
                'id_attachment' => 13187,
                'id_tabel' => 1039375,
                'file_name' => '20191019110455_sd-muhi.jpg',
                'temp' => '0.9141626544478967',
                'created_at' => '2019-10-19 23:04:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            361 => 
            array (
                'id_attachment' => 13234,
                'id_tabel' => 1039386,
                'file_name' => '20191020095040_lomba-likis.jpg',
                'temp' => '0.4957308959846023',
                'created_at' => '2019-10-20 21:50:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            362 => 
            array (
                'id_attachment' => 13464,
                'id_tabel' => 1039479,
                'file_name' => '20191022040725_bupati.jpg',
                'temp' => '0.01832916800505191',
                'created_at' => '2019-10-22 16:07:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            363 => 
            array (
                'id_attachment' => 13486,
                'id_tabel' => 1039489,
                'file_name' => '20191023023703_Pengelola_Website_Desa_Se-Kertek_Didorong_Aktif_Mutakhirkan_Konten.jpg',
                'temp' => '0.8769641088361919',
                'created_at' => '2019-10-23 14:37:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            364 => 
            array (
                'id_attachment' => 13488,
                'id_tabel' => 1039491,
                'file_name' => '20191023033743_lesus-desa-bugel.jpg',
                'temp' => '0.33211797541684107',
                'created_at' => '2019-10-23 15:37:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            365 => 
            array (
                'id_attachment' => 13546,
                'id_tabel' => 1039510,
                'file_name' => '20191024033951_539.JPG',
                'temp' => '0.010264799444428707',
                'created_at' => '2019-10-24 15:39:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            366 => 
            array (
                'id_attachment' => 13570,
                'id_tabel' => 1039520,
                'file_name' => '20191025035512_smoteng-jati-diri.jpg',
                'temp' => '0.005448551361527443',
                'created_at' => '2019-10-25 15:55:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            367 => 
            array (
                'id_attachment' => 13573,
                'id_tabel' => 1039523,
                'file_name' => '20191028075159_Muhibah_Budaya,_Wujud_Dukungan_Hamengku_Buwono_X_Kepada_Bupati_Wonosobo_Dalam_Pemajuan_Kebudayaan.jpg',
                'temp' => '0.37848015020261205',
                'created_at' => '2019-10-28 07:51:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            368 => 
            array (
                'id_attachment' => 13582,
                'id_tabel' => 1039536,
                'file_name' => '20191028042441_Wonosobo_Kirim_10_Desa_Di_Uji_Publik_Keterbukaan_Informasi_Tingkat_Jawa_Tengah.jpg',
                'temp' => '0.6734912969501488',
                'created_at' => '2019-10-28 16:24:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            369 => 
            array (
                'id_attachment' => 13584,
                'id_tabel' => 1039538,
                'file_name' => '20191028044221_Ragam_Inovasi_“Out_Of_The_Box”_Antar_Bawaslu_Wonosobo_Raih_Predikat_Terbaik_Nasional.jpg',
                'temp' => '0.3009400904655801',
                'created_at' => '2019-10-28 16:42:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            370 => 
            array (
                'id_attachment' => 13585,
                'id_tabel' => 1039537,
                'file_name' => '20191028044344_Peringatan_Sumpah_Pemuda_Motivasi_Memperkokoh_Persatuan_dan_Kesatuan_Bangsa.jpg',
                'temp' => '0.3009400904655801',
                'created_at' => '2019-10-28 16:43:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            371 => 
            array (
                'id_attachment' => 14049,
                'id_tabel' => 1039884,
                'file_name' => '20191104091751_penanggulangan_kemiskinan_2.jpg',
                'temp' => '0.8735352033359955',
                'created_at' => '2019-11-04 09:17:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            372 => 
            array (
                'id_attachment' => 14050,
                'id_tabel' => 1039884,
                'file_name' => '20191104091800_penanggulangan_kemiskinan.jpg',
                'temp' => '0.8735352033359955',
                'created_at' => '2019-11-04 09:18:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            373 => 
            array (
                'id_attachment' => 14109,
                'id_tabel' => 1039964,
                'file_name' => '20191105020433_546.jpg',
                'temp' => '0.8910891382503727',
                'created_at' => '2019-11-05 14:04:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            374 => 
            array (
                'id_attachment' => 14150,
                'id_tabel' => 1039979,
                'file_name' => '20191106112626_MasterPlan_SmartCity_Wonosobo.jpeg',
                'temp' => '0.8274704044502503',
                'created_at' => '2019-11-06 11:26:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            375 => 
            array (
                'id_attachment' => 14171,
                'id_tabel' => 1039986,
                'file_name' => '20191106081742_Wakil_Bupati_Launching_Sobo_Kolam_Susu_-_2.jpg',
                'temp' => '0.929768732352384',
                'created_at' => '2019-11-06 20:17:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            376 => 
            array (
                'id_attachment' => 14172,
                'id_tabel' => 1039986,
                'file_name' => '20191106081751_Wakil_Bupati_Launching_Sobo_Kolam_Susu.jpg',
                'temp' => '0.929768732352384',
                'created_at' => '2019-11-06 20:17:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            377 => 
            array (
                'id_attachment' => 14173,
                'id_tabel' => 1039986,
                'file_name' => '20191106081800_Wakil_Bupati_Launching_Sobo_Kolam_Susu_-_3.jpg',
                'temp' => '0.929768732352384',
                'created_at' => '2019-11-06 20:18:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            378 => 
            array (
                'id_attachment' => 14176,
                'id_tabel' => 1039989,
                'file_name' => '20191106083338_130_Pelajar_SLTA_Ikuti_Sosialisasi_Bahaya_Narkoba_-_3.jpg',
                'temp' => '0.4834329261826553',
                'created_at' => '2019-11-06 20:33:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            379 => 
            array (
                'id_attachment' => 14206,
                'id_tabel' => 1040003,
                'file_name' => '20191107034902_Melaju_di_Kompetisi_Keterbukaan_Informasi,_8_Desa_Bersiap_Terima_Visitasi_KI_Provinsi.jpg',
                'temp' => '0.06606265324680027',
                'created_at' => '2019-11-07 15:49:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            380 => 
            array (
                'id_attachment' => 14207,
                'id_tabel' => 1040003,
                'file_name' => '20191107034926__Melaju_di_Kompetisi_Keterbukaan_Informasi,_8_Desa_Bersiap_Terima_Visitasi_KI_Provinsi_-_1.jpg',
                'temp' => '0.06606265324680027',
                'created_at' => '2019-11-07 15:49:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            381 => 
            array (
                'id_attachment' => 14222,
                'id_tabel' => 1040016,
                'file_name' => '20191108105716_Razia_Sekolah,_Banyak_Ditemukan_Kosmetik_Di_Dalam_Tas_Siswi_-_1.jpg',
                'temp' => '0.05827891550722164',
                'created_at' => '2019-11-08 10:57:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            382 => 
            array (
                'id_attachment' => 14244,
                'id_tabel' => 1040022,
                'file_name' => '20191111082606_Bupati_Ajak_Masyarakat_Giatkan_Gotong_Royong_Dan_Menjaga_Saluran_Air_Agar_Bebas_Sampah.jpg',
                'temp' => '0.5258446992930674',
                'created_at' => '2019-11-11 08:26:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            383 => 
            array (
                'id_attachment' => 14257,
                'id_tabel' => 1040029,
                'file_name' => '20191111014402_pengumuman-cpns-pemerintah-kabupaten-wonosobo-tahun-2019.jpg',
                'temp' => '0.8417187370725328',
                'created_at' => '2019-11-11 13:44:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            384 => 
            array (
                'id_attachment' => 14265,
                'id_tabel' => 1040036,
                'file_name' => '20191111033724_Belasan_Ribu_Keping_KIA_Diterbitkan.jpg',
                'temp' => '0.7694280780120135',
                'created_at' => '2019-11-11 15:37:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            385 => 
            array (
                'id_attachment' => 14266,
                'id_tabel' => 1040036,
                'file_name' => '20191111033730_Belasan_Ribu_Keping_KIA_Diterbitkan_-_2.jpg',
                'temp' => '0.7694280780120135',
                'created_at' => '2019-11-11 15:37:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            386 => 
            array (
                'id_attachment' => 14294,
                'id_tabel' => 1040054,
                'file_name' => '20191113120227_Pemkab_Wonosobo_Sediakan_WiFi_Gratis_Bagi_Pendaftar_CPNS.jpg',
                'temp' => '0.756035785722414',
                'created_at' => '2019-11-13 00:02:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            387 => 
            array (
                'id_attachment' => 14296,
                'id_tabel' => 1040056,
                'file_name' => '20191113120703_Kafilah_Wonosobo_Kembali_Kirimkan_Kontingen_MAPSI_Tingkat_Provinsi_Jateng.jpg',
                'temp' => '0.8556419825577237',
                'created_at' => '2019-11-13 00:07:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            388 => 
            array (
                'id_attachment' => 14299,
                'id_tabel' => 1040058,
                'file_name' => '20191113122344_Usaha_Karaoke_Tidak_Dilarang,_Asal_Berijin_Dan_Sesuai_Aturan.jpg',
                'temp' => '0.8999527429223673',
                'created_at' => '2019-11-13 00:23:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            389 => 
            array (
                'id_attachment' => 14331,
                'id_tabel' => 1040075,
                'file_name' => '20191113062339_Baznas_Tasyarufkan_Untuk_Modal_Ekonomi_Produktif.jpg',
                'temp' => '0.6103706430779092',
                'created_at' => '2019-11-13 18:23:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            390 => 
            array (
                'id_attachment' => 14333,
                'id_tabel' => 1040075,
                'file_name' => '20191113062543_Baznas_Tasyarufkan_Untuk_Modal_Ekonomi_Produktif_ppid.jpg',
                'temp' => '0.6103706430779092',
                'created_at' => '2019-11-13 18:25:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            391 => 
            array (
                'id_attachment' => 14340,
                'id_tabel' => 1040077,
                'file_name' => '20191113065449_Komisi_Informasi_Dorong_Desa_Optimalkan_Fungsi_Website_Untuk_Promosi_Potensi_-_2.jpg',
                'temp' => '0.41323715727183674',
                'created_at' => '2019-11-13 18:54:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            392 => 
            array (
                'id_attachment' => 14341,
                'id_tabel' => 1040077,
                'file_name' => '20191113065502_Komisi_Informasi_Dorong_Desa_Optimalkan_Fungsi_Website_Untuk_Promosi_Potensi.jpg',
                'temp' => '0.41323715727183674',
                'created_at' => '2019-11-13 18:55:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            393 => 
            array (
                'id_attachment' => 14342,
                'id_tabel' => 1040077,
                'file_name' => '20191113065507_Komisi_Informasi_Dorong_Desa_Optimalkan_Fungsi_Website_Untuk_Promosi_Potensi_-_3.jpg',
                'temp' => '0.41323715727183674',
                'created_at' => '2019-11-13 18:55:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            394 => 
            array (
                'id_attachment' => 14401,
                'id_tabel' => 1040112,
                'file_name' => '20191119075808_Pembangunan_STIKES_Muhammadiyah_Wonosobo_Dimulai.jpg',
                'temp' => '0.7140638408817537',
                'created_at' => '2019-11-19 07:58:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            395 => 
            array (
                'id_attachment' => 14403,
                'id_tabel' => 1028939,
                'file_name' => '20191119030531_STADA_FINAL_Tahun_2017.pdf',
                'temp' => '0.9491889929474204',
                'created_at' => '2019-11-19 15:05:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            396 => 
            array (
                'id_attachment' => 14404,
                'id_tabel' => 1040114,
                'file_name' => '20191119032821_STADA_FINAL_Tahun_2018.pdf',
                'temp' => '0.36893302622861635',
                'created_at' => '2019-11-19 15:28:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            397 => 
            array (
                'id_attachment' => 14420,
                'id_tabel' => 0,
                'file_name' => '20191120012344_front_job.png',
                'temp' => '0.3326854871376478',
                'created_at' => '2019-11-20 13:23:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            398 => 
            array (
                'id_attachment' => 14424,
                'id_tabel' => 1,
                'file_name' => '20191120023508_551.png',
                'temp' => '0.12036200588525425',
                'created_at' => '2019-11-20 14:35:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            399 => 
            array (
                'id_attachment' => 14425,
                'id_tabel' => 0,
                'file_name' => '20191120024427_551.png',
                'temp' => '0.9535938264818296',
                'created_at' => '2019-11-20 14:44:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
        ));
        \DB::table('attachment')->insert(array (
            0 => 
            array (
                'id_attachment' => 14426,
                'id_tabel' => 1,
                'file_name' => '20191120044132_551.png',
                'temp' => '0.7865286546342289',
                'created_at' => '2019-11-20 16:41:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            1 => 
            array (
                'id_attachment' => 14431,
                'id_tabel' => 1040125,
                'file_name' => '20191121075449_577.jpg',
                'temp' => '0.5753881863245724',
                'created_at' => '2019-11-21 07:54:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            2 => 
            array (
                'id_attachment' => 14433,
                'id_tabel' => 1040128,
                'file_name' => '20191121080615_577.jpg',
                'temp' => '0.252192072769613',
                'created_at' => '2019-11-21 08:06:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            3 => 
            array (
                'id_attachment' => 14442,
                'id_tabel' => 2,
                'file_name' => '20191121084115_551.png',
                'temp' => '0.30596694697891014',
                'created_at' => '2019-11-21 08:41:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            4 => 
            array (
                'id_attachment' => 14447,
                'id_tabel' => 0,
                'file_name' => '20191121011224_.png',
                'temp' => '0.4955961125986543',
                'created_at' => '2019-11-21 13:12:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            5 => 
            array (
                'id_attachment' => 14448,
                'id_tabel' => 2,
                'file_name' => '20191121011445_551.png',
                'temp' => '0.46836263924272337',
                'created_at' => '2019-11-21 13:14:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            6 => 
            array (
                'id_attachment' => 14452,
                'id_tabel' => 3,
                'file_name' => '20191121012735_551.png',
                'temp' => '0.794822249862297',
                'created_at' => '2019-11-21 13:27:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            7 => 
            array (
                'id_attachment' => 14453,
                'id_tabel' => 3,
                'file_name' => '20191121013614_551.png',
                'temp' => '0.41704764021756313',
                'created_at' => '2019-11-21 13:36:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            8 => 
            array (
                'id_attachment' => 14465,
                'id_tabel' => 4,
                'file_name' => '20191121020756_551.png',
                'temp' => '0.028103350606933697',
                'created_at' => '2019-11-21 14:07:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            9 => 
            array (
                'id_attachment' => 14466,
                'id_tabel' => 4,
                'file_name' => '20191121020832_551.png',
                'temp' => '0.23300520041614314',
                'created_at' => '2019-11-21 14:08:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            10 => 
            array (
                'id_attachment' => 14467,
                'id_tabel' => 5,
                'file_name' => '20191121023043_551.png',
                'temp' => '0.299966280994161',
                'created_at' => '2019-11-21 14:30:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            11 => 
            array (
                'id_attachment' => 14468,
                'id_tabel' => 1040138,
                'file_name' => '20191121025534_787.rar',
                'temp' => '0.2374241131185033',
                'created_at' => '2019-11-21 14:55:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            12 => 
            array (
                'id_attachment' => 14473,
                'id_tabel' => 1040142,
                'file_name' => '20191122080003_577.jpg',
                'temp' => '0.005667213038930363',
                'created_at' => '2019-11-22 08:00:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            13 => 
            array (
                'id_attachment' => 14475,
                'id_tabel' => 1040143,
                'file_name' => '20191122081527_577.jpg',
                'temp' => '0.6956003611517878',
                'created_at' => '2019-11-22 08:15:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            14 => 
            array (
                'id_attachment' => 14486,
                'id_tabel' => 1040146,
                'file_name' => '20191122111242_577.jpg',
                'temp' => '0.5215445823318057',
                'created_at' => '2019-11-22 11:12:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            15 => 
            array (
                'id_attachment' => 14591,
                'id_tabel' => 1040192,
                'file_name' => '20191127044225_577.jpg',
                'temp' => '0.28453317124433064',
                'created_at' => '2019-11-27 16:42:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            16 => 
            array (
                'id_attachment' => 14619,
                'id_tabel' => 1040204,
                'file_name' => '20191128111254_577.jpg',
                'temp' => '0.7687248089249343',
                'created_at' => '2019-11-28 23:12:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            17 => 
            array (
                'id_attachment' => 14636,
                'id_tabel' => 1040209,
                'file_name' => '20191129025931_577.jpg',
                'temp' => '0.2746346121319416',
                'created_at' => '2019-11-29 14:59:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            18 => 
            array (
                'id_attachment' => 14645,
                'id_tabel' => 1040215,
                'file_name' => '20191201113527_577.jpg',
                'temp' => '0.9887841383712317',
                'created_at' => '2019-12-01 23:35:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            19 => 
            array (
                'id_attachment' => 14668,
                'id_tabel' => 1040226,
                'file_name' => '20191205074342_.jpg',
                'temp' => '0.19764723025922737',
                'created_at' => '2019-12-05 07:43:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            20 => 
            array (
                'id_attachment' => 14669,
                'id_tabel' => 1037857,
                'file_name' => '20191204020025_577.jpg',
                'temp' => '0.09053613110525016',
                'created_at' => '2019-12-04 14:00:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            21 => 
            array (
                'id_attachment' => 14670,
                'id_tabel' => 1040227,
                'file_name' => '20191205072815_577.jpg',
                'temp' => '0.7931675384932759',
                'created_at' => '2019-12-05 07:28:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            22 => 
            array (
                'id_attachment' => 14671,
                'id_tabel' => 1040228,
                'file_name' => '20191205073618_577.jpg',
                'temp' => '0.3154141129437049',
                'created_at' => '2019-12-05 07:36:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            23 => 
            array (
                'id_attachment' => 14759,
                'id_tabel' => 1040258,
                'file_name' => '20191209041305_577.jpg',
                'temp' => '0.2229334683779447',
                'created_at' => '2019-12-09 16:13:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            24 => 
            array (
                'id_attachment' => 14772,
                'id_tabel' => 1040266,
                'file_name' => '20191210034926_577.jpg',
                'temp' => '0.8805852109800749',
                'created_at' => '2019-12-10 15:49:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            25 => 
            array (
                'id_attachment' => 14773,
                'id_tabel' => 1,
                'file_name' => '20191211103030_551.png',
                'temp' => '0.6656926274667754',
                'created_at' => '2019-12-11 10:30:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            26 => 
            array (
                'id_attachment' => 14774,
                'id_tabel' => 2,
                'file_name' => '20191211104354_551.png',
                'temp' => '0.9090996316575941',
                'created_at' => '2019-12-11 10:43:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            27 => 
            array (
                'id_attachment' => 14775,
                'id_tabel' => 3,
                'file_name' => '20191211104714_551.png',
                'temp' => '0.7555428252223197',
                'created_at' => '2019-12-11 10:47:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            28 => 
            array (
                'id_attachment' => 14776,
                'id_tabel' => 5,
                'file_name' => '20191211010322_551.png',
                'temp' => '0.09753866536687594',
                'created_at' => '2019-12-11 13:03:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            29 => 
            array (
                'id_attachment' => 14777,
                'id_tabel' => 5,
                'file_name' => '20191211010508_551.png',
                'temp' => '0.09753866536687594',
                'created_at' => '2019-12-11 13:05:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            30 => 
            array (
                'id_attachment' => 14778,
                'id_tabel' => 6,
                'file_name' => '20191211010727_551.png',
                'temp' => '0.21853409273182978',
                'created_at' => '2019-12-11 13:07:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            31 => 
            array (
                'id_attachment' => 14779,
                'id_tabel' => 7,
                'file_name' => '20191211010903_551.png',
                'temp' => '0.5495167414730429',
                'created_at' => '2019-12-11 13:09:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            32 => 
            array (
                'id_attachment' => 14780,
                'id_tabel' => 8,
                'file_name' => '20191211011051_551.png',
                'temp' => '0.06987319924852575',
                'created_at' => '2019-12-11 13:10:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            33 => 
            array (
                'id_attachment' => 14781,
                'id_tabel' => 1040267,
                'file_name' => '20191212082944_787.jpg',
                'temp' => '0.2522584731270341',
                'created_at' => '2019-12-12 08:29:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            34 => 
            array (
                'id_attachment' => 14782,
                'id_tabel' => 1040268,
                'file_name' => '20191212084115_787.JPG',
                'temp' => '0.8983371007183008',
                'created_at' => '2019-12-12 08:41:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            35 => 
            array (
                'id_attachment' => 14786,
                'id_tabel' => 0,
                'file_name' => '20191213075230_787.jpeg',
                'temp' => '0.20175541456710078',
                'created_at' => '2019-12-13 07:52:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            36 => 
            array (
                'id_attachment' => 14787,
                'id_tabel' => 1040270,
                'file_name' => '20191213075313_577.jpg',
                'temp' => '0.9566711113385951',
                'created_at' => '2019-12-13 07:53:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            37 => 
            array (
                'id_attachment' => 14801,
                'id_tabel' => 1040281,
                'file_name' => '20191216021339_577.jpg',
                'temp' => '0.7633432395801925',
                'created_at' => '2019-12-16 14:13:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            38 => 
            array (
                'id_attachment' => 14819,
                'id_tabel' => 1040287,
                'file_name' => '20191218123017_577.jpg',
                'temp' => '0.1908253930544006',
                'created_at' => '2019-12-18 00:30:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            39 => 
            array (
                'id_attachment' => 14853,
                'id_tabel' => 1040328,
                'file_name' => '20191219074848_577.jpg',
                'temp' => '0.8413517868128018',
                'created_at' => '2019-12-19 07:48:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            40 => 
            array (
                'id_attachment' => 14865,
                'id_tabel' => 1040332,
                'file_name' => '20191220080528_577.jpg',
                'temp' => '0.06996477821801883',
                'created_at' => '2019-12-20 08:05:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            41 => 
            array (
                'id_attachment' => 14869,
                'id_tabel' => 1040335,
                'file_name' => '20191220090115_577.jpg',
                'temp' => '0.4513079946647678',
                'created_at' => '2019-12-20 09:01:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            42 => 
            array (
                'id_attachment' => 14875,
                'id_tabel' => 1040338,
                'file_name' => '20191220124911_577.jpg',
                'temp' => '0.1634499841957393',
                'created_at' => '2019-12-20 12:49:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            43 => 
            array (
                'id_attachment' => 14908,
                'id_tabel' => 1040353,
                'file_name' => '20191225091551_577.jpg',
                'temp' => '0.5235658195432706',
                'created_at' => '2019-12-25 09:15:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            44 => 
            array (
                'id_attachment' => 14914,
                'id_tabel' => 1040357,
                'file_name' => '20191227083302_577.jpg',
                'temp' => '0.7805870776625832',
                'created_at' => '2019-12-27 08:33:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            45 => 
            array (
                'id_attachment' => 14933,
                'id_tabel' => 1040375,
                'file_name' => '20191231015925_787.jpg',
                'temp' => '0.15740952991537727',
                'created_at' => '2019-12-31 13:59:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            46 => 
            array (
                'id_attachment' => 14935,
                'id_tabel' => 1040375,
                'file_name' => '20200102085332_787.pdf',
                'temp' => '0.6017317993817539',
                'created_at' => '2020-01-02 08:53:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            47 => 
            array (
                'id_attachment' => 14937,
                'id_tabel' => 1040377,
                'file_name' => '20200103084415_787.JPG',
                'temp' => '0.052673685654464064',
                'created_at' => '2020-01-03 08:44:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            48 => 
            array (
                'id_attachment' => 14944,
                'id_tabel' => 1040384,
                'file_name' => '20200106041731_577.jpg',
                'temp' => '0.7146912594949801',
                'created_at' => '2020-01-06 16:17:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            49 => 
            array (
                'id_attachment' => 14945,
                'id_tabel' => 1040385,
                'file_name' => '20200107030316_577.jpg',
                'temp' => '0.8578315832548331',
                'created_at' => '2020-01-07 15:03:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            50 => 
            array (
                'id_attachment' => 14948,
                'id_tabel' => 0,
                'file_name' => '20200108100547_787.jpeg',
                'temp' => '0.5224838396102898',
                'created_at' => '2020-01-08 10:05:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            51 => 
            array (
                'id_attachment' => 14949,
                'id_tabel' => 1040387,
                'file_name' => '20200108125218_787.jpeg',
                'temp' => '0.2176400943437924',
                'created_at' => '2020-01-08 12:52:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            52 => 
            array (
                'id_attachment' => 14963,
                'id_tabel' => 1040389,
                'file_name' => '20200110085451_787.jpeg',
                'temp' => '0.030564171246926897',
                'created_at' => '2020-01-10 08:54:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            53 => 
            array (
                'id_attachment' => 15094,
                'id_tabel' => 1040412,
                'file_name' => '20200116082508_577.jpg',
                'temp' => '0.794386035438037',
                'created_at' => '2020-01-16 08:25:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            54 => 
            array (
                'id_attachment' => 15106,
                'id_tabel' => 1040415,
                'file_name' => '20200120095837_787.jpg',
                'temp' => '0.16404930551442276',
                'created_at' => '2020-01-20 09:58:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            55 => 
            array (
                'id_attachment' => 15146,
                'id_tabel' => 1040427,
                'file_name' => '20200127084417_787.JPG',
                'temp' => '0.21768880242391497',
                'created_at' => '2020-01-27 08:44:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            56 => 
            array (
                'id_attachment' => 15147,
                'id_tabel' => 1040432,
                'file_name' => '20200128102039_578.jpg',
                'temp' => '0.40577848213055345',
                'created_at' => '2020-01-28 10:20:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            57 => 
            array (
                'id_attachment' => 15176,
                'id_tabel' => 1040441,
                'file_name' => '20200129050139_577.jpg',
                'temp' => '0.1441400953256997',
                'created_at' => '2020-01-29 17:01:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            58 => 
            array (
                'id_attachment' => 15195,
                'id_tabel' => 1040446,
                'file_name' => '20200130033752_577.jpg',
                'temp' => '0.0372875726348989',
                'created_at' => '2020-01-30 15:37:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            59 => 
            array (
                'id_attachment' => 15239,
                'id_tabel' => 1040459,
                'file_name' => '20200205045402_577.jpg',
                'temp' => '0.07658512314772459',
                'created_at' => '2020-02-05 16:54:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            60 => 
            array (
                'id_attachment' => 15257,
                'id_tabel' => 0,
                'file_name' => '20200211042404_577.jpg',
                'temp' => '0.009435831276288775',
                'created_at' => '2020-02-11 16:24:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            61 => 
            array (
                'id_attachment' => 15259,
                'id_tabel' => 0,
                'file_name' => '20200211043839_577.jpg',
                'temp' => '0.903246627159469',
                'created_at' => '2020-02-11 16:38:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            62 => 
            array (
                'id_attachment' => 15260,
                'id_tabel' => 1040468,
                'file_name' => '20200211043927_577.jpg',
                'temp' => '0.03357509802663028',
                'created_at' => '2020-02-11 16:39:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            63 => 
            array (
                'id_attachment' => 15261,
                'id_tabel' => 1040469,
                'file_name' => '20200212074646_787.jpeg',
                'temp' => '0.24329472100431349',
                'created_at' => '2020-02-12 07:46:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            64 => 
            array (
                'id_attachment' => 15270,
                'id_tabel' => 1040473,
                'file_name' => '20200214075513_787.jpeg',
                'temp' => '0.32155655084748513',
                'created_at' => '2020-02-14 07:55:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            65 => 
            array (
                'id_attachment' => 15271,
                'id_tabel' => 1040474,
                'file_name' => '20200214075644_787.jpeg',
                'temp' => '0.9827202224977869',
                'created_at' => '2020-02-14 07:56:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            66 => 
            array (
                'id_attachment' => 15289,
                'id_tabel' => 1040481,
                'file_name' => '20200218080409_787.JPG',
                'temp' => '0.8734506143243317',
                'created_at' => '2020-02-18 08:04:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            67 => 
            array (
                'id_attachment' => 15338,
                'id_tabel' => 1040489,
                'file_name' => '20200218010227_787.JPG',
                'temp' => '0.33163176144201323',
                'created_at' => '2020-02-18 13:02:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            68 => 
            array (
                'id_attachment' => 15343,
                'id_tabel' => 1040495,
                'file_name' => '20200219075615_787.JPG',
                'temp' => '0.38414819481258755',
                'created_at' => '2020-02-19 07:56:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            69 => 
            array (
                'id_attachment' => 15395,
                'id_tabel' => 1040515,
                'file_name' => '20200221094839_787.jpg',
                'temp' => '0.3638345355270123',
                'created_at' => '2020-02-21 09:48:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            70 => 
            array (
                'id_attachment' => 15396,
                'id_tabel' => 1040516,
                'file_name' => '20200224074209_787.jpg',
                'temp' => '0.8367902805410323',
                'created_at' => '2020-02-24 07:42:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            71 => 
            array (
                'id_attachment' => 15397,
                'id_tabel' => 1040517,
                'file_name' => '20200224075331_787.jpg',
                'temp' => '0.8080145397521317',
                'created_at' => '2020-02-24 07:53:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            72 => 
            array (
                'id_attachment' => 15403,
                'id_tabel' => 1040522,
                'file_name' => '20200225075445_787.jpeg',
                'temp' => '0.24851077896381102',
                'created_at' => '2020-02-25 07:54:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            73 => 
            array (
                'id_attachment' => 15404,
                'id_tabel' => 1040523,
                'file_name' => '20200225080836_787.JPG',
                'temp' => '0.17781900043413423',
                'created_at' => '2020-02-25 08:08:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            74 => 
            array (
                'id_attachment' => 15405,
                'id_tabel' => 1040525,
                'file_name' => '20200225093620_577.jpg',
                'temp' => '0.38298973277956216',
                'created_at' => '2020-02-25 09:36:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            75 => 
            array (
                'id_attachment' => 15406,
                'id_tabel' => 1040526,
                'file_name' => '20200225093811_577.jpg',
                'temp' => '0.5981695876165758',
                'created_at' => '2020-02-25 09:38:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            76 => 
            array (
                'id_attachment' => 15415,
                'id_tabel' => 1040532,
                'file_name' => '20200226080853_787.jpg',
                'temp' => '0.8622741647294736',
                'created_at' => '2020-02-26 08:08:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            77 => 
            array (
                'id_attachment' => 15416,
                'id_tabel' => 1040533,
                'file_name' => '20200226082053_787.jpg',
                'temp' => '0.2527146486908234',
                'created_at' => '2020-02-26 08:20:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            78 => 
            array (
                'id_attachment' => 15417,
                'id_tabel' => 1040534,
                'file_name' => '20200226084022_787.jpg',
                'temp' => '0.06728819279057485',
                'created_at' => '2020-02-26 08:40:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            79 => 
            array (
                'id_attachment' => 15422,
                'id_tabel' => 1040538,
                'file_name' => '20200226125021_577.jpg',
                'temp' => '0.03418562810367165',
                'created_at' => '2020-02-26 12:50:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            80 => 
            array (
                'id_attachment' => 15427,
                'id_tabel' => 1040541,
                'file_name' => '20200226045440_577.jpg',
                'temp' => '0.9703010703155004',
                'created_at' => '2020-02-26 16:54:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            81 => 
            array (
                'id_attachment' => 15429,
                'id_tabel' => 1040543,
                'file_name' => '20200226050413_577.jpg',
                'temp' => '0.0036073355559633757',
                'created_at' => '2020-02-26 17:04:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            82 => 
            array (
                'id_attachment' => 15431,
                'id_tabel' => 1040545,
                'file_name' => '20200226050954_577.jpg',
                'temp' => '0.4507468692242478',
                'created_at' => '2020-02-26 17:09:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            83 => 
            array (
                'id_attachment' => 15447,
                'id_tabel' => 1040556,
                'file_name' => '20200228082730_787.JPG',
                'temp' => '0.4815146281830438',
                'created_at' => '2020-02-28 08:27:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            84 => 
            array (
                'id_attachment' => 15522,
                'id_tabel' => 1040586,
                'file_name' => '20200303014903_577.jpg',
                'temp' => '0.03247022173948988',
                'created_at' => '2020-03-03 13:49:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            85 => 
            array (
                'id_attachment' => 15548,
                'id_tabel' => 1040591,
                'file_name' => '20200305090648_787.jpg',
                'temp' => '0.6327182001474203',
                'created_at' => '2020-03-05 09:06:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            86 => 
            array (
                'id_attachment' => 15549,
                'id_tabel' => 1040595,
                'file_name' => '20200305103922_787.jpg',
                'temp' => '0.220701953784874',
                'created_at' => '2020-03-05 10:39:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            87 => 
            array (
                'id_attachment' => 15553,
                'id_tabel' => 1040598,
                'file_name' => '20200306081026_787.jpg',
                'temp' => '0.4199291444284283',
                'created_at' => '2020-03-06 08:10:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            88 => 
            array (
                'id_attachment' => 15583,
                'id_tabel' => 1040611,
                'file_name' => '20200309081712_787.jpeg',
                'temp' => '0.7407271964818738',
                'created_at' => '2020-03-09 08:17:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            89 => 
            array (
                'id_attachment' => 15598,
                'id_tabel' => 1040621,
                'file_name' => '20200310111438_787.png',
                'temp' => '0.5124147567487118',
                'created_at' => '2020-03-10 11:14:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            90 => 
            array (
                'id_attachment' => 15600,
                'id_tabel' => 1040623,
                'file_name' => '20200310031034_577.jpg',
                'temp' => '0.24563893613114418',
                'created_at' => '2020-03-10 15:10:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            91 => 
            array (
                'id_attachment' => 15613,
                'id_tabel' => 1040626,
                'file_name' => '20200311045834_577.jpg',
                'temp' => '0.7379877387572151',
                'created_at' => '2020-03-11 16:58:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            92 => 
            array (
                'id_attachment' => 15623,
                'id_tabel' => 1040635,
                'file_name' => '20200312023135_577.jpg',
                'temp' => '0.24966497461625914',
                'created_at' => '2020-03-12 14:31:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            93 => 
            array (
                'id_attachment' => 15624,
                'id_tabel' => 0,
                'file_name' => '20200313011912_.jpeg',
                'temp' => '0.6440536199557882',
                'created_at' => '2020-03-13 01:19:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            94 => 
            array (
                'id_attachment' => 15626,
                'id_tabel' => 1040636,
                'file_name' => '20200313073859_787.JPG',
                'temp' => '0.6724800830635267',
                'created_at' => '2020-03-13 07:38:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            95 => 
            array (
                'id_attachment' => 15627,
                'id_tabel' => 1040637,
                'file_name' => '20200313074631_787.jpeg',
                'temp' => '0.3896991378618535',
                'created_at' => '2020-03-13 07:46:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            96 => 
            array (
                'id_attachment' => 15636,
                'id_tabel' => 1040639,
                'file_name' => '20200313084736_577.jpg',
                'temp' => '0.33244666534674594',
                'created_at' => '2020-03-13 08:47:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            97 => 
            array (
                'id_attachment' => 15641,
                'id_tabel' => 1040646,
                'file_name' => '20200316115554_787.JPG',
                'temp' => '0.9730992945966248',
                'created_at' => '2020-03-16 11:55:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            98 => 
            array (
                'id_attachment' => 15649,
                'id_tabel' => 1040649,
                'file_name' => '20200317080337_787.jpeg',
                'temp' => '0.1339234714361217',
                'created_at' => '2020-03-17 08:03:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            99 => 
            array (
                'id_attachment' => 15650,
                'id_tabel' => 1040650,
                'file_name' => '20200317081009_787.jpg',
                'temp' => '0.41191435357475736',
                'created_at' => '2020-03-17 08:10:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            100 => 
            array (
                'id_attachment' => 15651,
                'id_tabel' => 1040651,
                'file_name' => '20200317082115_787.jpg',
                'temp' => '0.04584045353021904',
                'created_at' => '2020-03-17 08:21:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            101 => 
            array (
                'id_attachment' => 15662,
                'id_tabel' => 1040655,
                'file_name' => '20200318102743_577.jpg',
                'temp' => '0.4050437194140968',
                'created_at' => '2020-03-18 10:27:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            102 => 
            array (
                'id_attachment' => 15669,
                'id_tabel' => 0,
                'file_name' => '20200318030455_.pdf',
                'temp' => '0.7049904279478203',
                'created_at' => '2020-03-18 15:04:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            103 => 
            array (
                'id_attachment' => 15670,
                'id_tabel' => 0,
                'file_name' => '20200318030656_.jpg',
                'temp' => '0.7049904279478203',
                'created_at' => '2020-03-18 15:06:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            104 => 
            array (
                'id_attachment' => 15671,
                'id_tabel' => 1040664,
                'file_name' => '20200318030929_577.jpg',
                'temp' => '0.10775313767619688',
                'created_at' => '2020-03-18 15:09:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            105 => 
            array (
                'id_attachment' => 15679,
                'id_tabel' => 1040668,
                'file_name' => '20200318104010_577.jpg',
                'temp' => '0.13267831565766142',
                'created_at' => '2020-03-18 22:40:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            106 => 
            array (
                'id_attachment' => 15689,
                'id_tabel' => 1040680,
                'file_name' => '20200319115302_787.pdf',
                'temp' => '0.1931516538962348',
                'created_at' => '2020-03-19 11:53:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            107 => 
            array (
                'id_attachment' => 15690,
                'id_tabel' => 1040680,
                'file_name' => '20200319115320_787.pdf',
                'temp' => '0.1931516538962348',
                'created_at' => '2020-03-19 11:53:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            108 => 
            array (
                'id_attachment' => 15691,
                'id_tabel' => 1040680,
                'file_name' => '20200319115335_787.pdf',
                'temp' => '0.1931516538962348',
                'created_at' => '2020-03-19 11:53:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            109 => 
            array (
                'id_attachment' => 15693,
                'id_tabel' => 1040681,
                'file_name' => '20200319123029_787.PNG',
                'temp' => '0.5284684996756801',
                'created_at' => '2020-03-19 12:30:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            110 => 
            array (
                'id_attachment' => 15694,
                'id_tabel' => 1040681,
                'file_name' => '20200319123454_787.pdf',
                'temp' => '0.41111459128882455',
                'created_at' => '2020-03-19 12:34:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            111 => 
            array (
                'id_attachment' => 15696,
                'id_tabel' => 1040682,
                'file_name' => '20200320081742_577.jpg',
                'temp' => '0.04816322712435883',
                'created_at' => '2020-03-20 08:17:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            112 => 
            array (
                'id_attachment' => 15700,
                'id_tabel' => 1040685,
                'file_name' => '20200320085852_577.jpg',
                'temp' => '0.3282169519274576',
                'created_at' => '2020-03-20 08:58:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            113 => 
            array (
                'id_attachment' => 15703,
                'id_tabel' => 1040688,
                'file_name' => '20200320091829_577.jpg',
                'temp' => '0.45094307472287887',
                'created_at' => '2020-03-20 09:18:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            114 => 
            array (
                'id_attachment' => 15710,
                'id_tabel' => 1040695,
                'file_name' => '20200323023730_577.jpg',
                'temp' => '0.49703622193383823',
                'created_at' => '2020-03-23 14:37:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            115 => 
            array (
                'id_attachment' => 15712,
                'id_tabel' => 1040703,
                'file_name' => '20200323024648_577.jpg',
                'temp' => '0.587516520474302',
                'created_at' => '2020-03-23 14:46:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            116 => 
            array (
                'id_attachment' => 15714,
                'id_tabel' => 1040705,
                'file_name' => '20200323025154_577.jpg',
                'temp' => '0.06750387456163454',
                'created_at' => '2020-03-23 14:51:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            117 => 
            array (
                'id_attachment' => 15716,
                'id_tabel' => 1040707,
                'file_name' => '20200323025925_577.jpg',
                'temp' => '0.18027534569809345',
                'created_at' => '2020-03-23 14:59:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            118 => 
            array (
                'id_attachment' => 15726,
                'id_tabel' => 1040712,
                'file_name' => '20200324030829_577.jpg',
                'temp' => '0.7201999969121684',
                'created_at' => '2020-03-24 15:08:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            119 => 
            array (
                'id_attachment' => 15743,
                'id_tabel' => 1040717,
                'file_name' => '20200324043715_577.jpg',
                'temp' => '0.9829204095277129',
                'created_at' => '2020-03-24 16:37:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            120 => 
            array (
                'id_attachment' => 15745,
                'id_tabel' => 1040720,
                'file_name' => '20200326084430_787.jpg',
                'temp' => '0.19981929363288087',
                'created_at' => '2020-03-26 08:44:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            121 => 
            array (
                'id_attachment' => 15746,
                'id_tabel' => 1040721,
                'file_name' => '20200326085441_787.jpeg',
                'temp' => '0.345726136976894',
                'created_at' => '2020-03-26 08:54:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            122 => 
            array (
                'id_attachment' => 15747,
                'id_tabel' => 1040722,
                'file_name' => '20200326091508_787.jpg',
                'temp' => '0.29280719186741155',
                'created_at' => '2020-03-26 09:15:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            123 => 
            array (
                'id_attachment' => 15772,
                'id_tabel' => 1040730,
                'file_name' => '20200327082822_577.jpg',
                'temp' => '0.573798863150385',
                'created_at' => '2020-03-27 08:28:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            124 => 
            array (
                'id_attachment' => 15782,
                'id_tabel' => 1040734,
                'file_name' => '20200327124711_577.jpg',
                'temp' => '0.526652797633504',
                'created_at' => '2020-03-27 12:47:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            125 => 
            array (
                'id_attachment' => 15783,
                'id_tabel' => 1040735,
                'file_name' => '20200328110811_577.jpg',
                'temp' => '0.27652317881102917',
                'created_at' => '2020-03-28 23:08:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            126 => 
            array (
                'id_attachment' => 15785,
                'id_tabel' => 1040737,
                'file_name' => '20200328111211_577.jpg',
                'temp' => '0.4955382128186845',
                'created_at' => '2020-03-28 23:12:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            127 => 
            array (
                'id_attachment' => 15787,
                'id_tabel' => 1040739,
                'file_name' => '20200330082639_787.jpg',
                'temp' => '0.623676484432522',
                'created_at' => '2020-03-30 08:26:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            128 => 
            array (
                'id_attachment' => 15788,
                'id_tabel' => 1040740,
                'file_name' => '20200330083351_787.jpg',
                'temp' => '0.39712428136099565',
                'created_at' => '2020-03-30 08:33:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            129 => 
            array (
                'id_attachment' => 15795,
                'id_tabel' => 1040744,
                'file_name' => '20200330023814_787.jpeg',
                'temp' => '0.08855361868920153',
                'created_at' => '2020-03-30 14:38:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            130 => 
            array (
                'id_attachment' => 15798,
                'id_tabel' => 1040748,
                'file_name' => '20200331055014_577.jpg',
                'temp' => '0.3722722079641536',
                'created_at' => '2020-03-31 17:50:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            131 => 
            array (
                'id_attachment' => 15800,
                'id_tabel' => 1040750,
                'file_name' => '20200331062007_577.jpg',
                'temp' => '0.04875853441217015',
                'created_at' => '2020-03-31 18:20:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            132 => 
            array (
                'id_attachment' => 15802,
                'id_tabel' => 1040752,
                'file_name' => '20200401083533_787.jpg',
                'temp' => '0.7612421889282943',
                'created_at' => '2020-04-01 08:35:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            133 => 
            array (
                'id_attachment' => 15806,
                'id_tabel' => 1040754,
                'file_name' => '20200401092035_787.PDF',
                'temp' => '0.9294332414975663',
                'created_at' => '2020-04-01 09:20:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            134 => 
            array (
                'id_attachment' => 15808,
                'id_tabel' => 1040754,
                'file_name' => '20200401092114_787.pdf',
                'temp' => '0.9294332414975663',
                'created_at' => '2020-04-01 09:21:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            135 => 
            array (
                'id_attachment' => 15809,
                'id_tabel' => 1040754,
                'file_name' => '20200401092125_787.pdf',
                'temp' => '0.9294332414975663',
                'created_at' => '2020-04-01 09:21:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            136 => 
            array (
                'id_attachment' => 15810,
                'id_tabel' => 1040754,
                'file_name' => '20200401092142_787.pdf',
                'temp' => '0.9294332414975663',
                'created_at' => '2020-04-01 09:21:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            137 => 
            array (
                'id_attachment' => 15811,
                'id_tabel' => 1040754,
                'file_name' => '20200401092153_787.pdf',
                'temp' => '0.9294332414975663',
                'created_at' => '2020-04-01 09:21:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            138 => 
            array (
                'id_attachment' => 15813,
                'id_tabel' => 1040754,
                'file_name' => '20200401093340_787.pdf',
                'temp' => '0.9294332414975663',
                'created_at' => '2020-04-01 09:33:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            139 => 
            array (
                'id_attachment' => 15814,
                'id_tabel' => 1040754,
                'file_name' => '20200401093446_787.pdf',
                'temp' => '0.812705194640909',
                'created_at' => '2020-04-01 09:34:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            140 => 
            array (
                'id_attachment' => 15819,
                'id_tabel' => 0,
                'file_name' => '20200402082143_577.jpg',
                'temp' => '0.35665950624220666',
                'created_at' => '2020-04-02 08:21:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            141 => 
            array (
                'id_attachment' => 15822,
                'id_tabel' => 1040758,
                'file_name' => '20200402085203_787.png',
                'temp' => '0.6126956427587089',
                'created_at' => '2020-04-02 08:52:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            142 => 
            array (
                'id_attachment' => 15823,
                'id_tabel' => 1040759,
                'file_name' => '20200402090353_577.jpg',
                'temp' => '0.6049345808368896',
                'created_at' => '2020-04-02 09:03:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            143 => 
            array (
                'id_attachment' => 15835,
                'id_tabel' => 1040767,
                'file_name' => '20200404095119_577.jpg',
                'temp' => '0.03923520220685939',
                'created_at' => '2020-04-04 09:51:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            144 => 
            array (
                'id_attachment' => 15836,
                'id_tabel' => 1040770,
                'file_name' => '20200404095809_577.jpg',
                'temp' => '0.5570409392707962',
                'created_at' => '2020-04-04 09:58:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            145 => 
            array (
                'id_attachment' => 15838,
                'id_tabel' => 1040771,
                'file_name' => '20200405103856_577.jpg',
                'temp' => '0.9559985168260854',
                'created_at' => '2020-04-05 22:38:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            146 => 
            array (
                'id_attachment' => 15840,
                'id_tabel' => 1040773,
                'file_name' => '20200405112131_577.jpg',
                'temp' => '0.744557427906243',
                'created_at' => '2020-04-05 23:21:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            147 => 
            array (
                'id_attachment' => 15845,
                'id_tabel' => 1040778,
                'file_name' => '20200407082417_577.jpg',
                'temp' => '0.006124661995389191',
                'created_at' => '2020-04-07 20:24:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            148 => 
            array (
                'id_attachment' => 15852,
                'id_tabel' => 1040783,
                'file_name' => '20200409085713_577.jpg',
                'temp' => '0.06241431281590981',
                'created_at' => '2020-04-09 08:57:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            149 => 
            array (
                'id_attachment' => 15854,
                'id_tabel' => 1040785,
                'file_name' => '20200409092353_577.jpg',
                'temp' => '0.8379895595991274',
                'created_at' => '2020-04-09 09:23:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            150 => 
            array (
                'id_attachment' => 15856,
                'id_tabel' => 1040787,
                'file_name' => '20200409094621_577.jpg',
                'temp' => '0.7398700241180025',
                'created_at' => '2020-04-09 09:46:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            151 => 
            array (
                'id_attachment' => 15858,
                'id_tabel' => 1040790,
                'file_name' => '20200409030225_577.jpg',
                'temp' => '0.41369932701652257',
                'created_at' => '2020-04-09 15:02:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            152 => 
            array (
                'id_attachment' => 15860,
                'id_tabel' => 1040794,
                'file_name' => '20200410082127_577.jpg',
                'temp' => '0.7593066780277722',
                'created_at' => '2020-04-10 08:21:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            153 => 
            array (
                'id_attachment' => 15866,
                'id_tabel' => 1040796,
                'file_name' => '20200411013108_577.jpg',
                'temp' => '0.5757360877752822',
                'created_at' => '2020-04-11 13:31:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            154 => 
            array (
                'id_attachment' => 15933,
                'id_tabel' => 1040813,
                'file_name' => '20200413035951_787.png',
                'temp' => '0.6079401491535605',
                'created_at' => '2020-04-13 15:59:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            155 => 
            array (
                'id_attachment' => 15960,
                'id_tabel' => 1040815,
                'file_name' => '20200414035928_577.jpg',
                'temp' => '0.8036992226700637',
                'created_at' => '2020-04-14 15:59:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            156 => 
            array (
                'id_attachment' => 15968,
                'id_tabel' => 1040818,
                'file_name' => '20200415013848_787.jpg',
                'temp' => '0.6555311785907272',
                'created_at' => '2020-04-15 13:38:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            157 => 
            array (
                'id_attachment' => 15975,
                'id_tabel' => 1040822,
                'file_name' => '20200416113313_577.jpg',
                'temp' => '0.7888871773808628',
                'created_at' => '2020-04-16 11:33:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            158 => 
            array (
                'id_attachment' => 15983,
                'id_tabel' => 1040828,
                'file_name' => '20200417080640_787.jpg',
                'temp' => '0.5108383678591555',
                'created_at' => '2020-04-17 08:06:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            159 => 
            array (
                'id_attachment' => 15984,
                'id_tabel' => 1040829,
                'file_name' => '20200417080826_787.jpeg',
                'temp' => '0.5578334042298605',
                'created_at' => '2020-04-17 08:08:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            160 => 
            array (
                'id_attachment' => 15999,
                'id_tabel' => 1040832,
                'file_name' => '20200420083623_787.jpg',
                'temp' => '0.20699187351709858',
                'created_at' => '2020-04-20 08:36:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            161 => 
            array (
                'id_attachment' => 16000,
                'id_tabel' => 1040833,
                'file_name' => '20200420084523_787.jpg',
                'temp' => '0.9121731145737553',
                'created_at' => '2020-04-20 08:45:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            162 => 
            array (
                'id_attachment' => 16001,
                'id_tabel' => 1040834,
                'file_name' => '20200420085148_787.jpg',
                'temp' => '0.20156402222343628',
                'created_at' => '2020-04-20 08:51:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            163 => 
            array (
                'id_attachment' => 16002,
                'id_tabel' => 1040835,
                'file_name' => '20200420090048_787.jpg',
                'temp' => '0.25156288929511694',
                'created_at' => '2020-04-20 09:00:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            164 => 
            array (
                'id_attachment' => 16006,
                'id_tabel' => 1040839,
                'file_name' => '20200420030038_577.jpg',
                'temp' => '0.9650394563735556',
                'created_at' => '2020-04-20 15:00:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            165 => 
            array (
                'id_attachment' => 16008,
                'id_tabel' => 1040841,
                'file_name' => '20200421104417_577.jpg',
                'temp' => '0.8975004226252032',
                'created_at' => '2020-04-21 10:44:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            166 => 
            array (
                'id_attachment' => 16010,
                'id_tabel' => 1032065,
                'file_name' => '20200421013552_.pdf',
                'temp' => '0.4915547151750512',
                'created_at' => '2020-04-21 13:35:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            167 => 
            array (
                'id_attachment' => 16011,
                'id_tabel' => 1032065,
                'file_name' => '20200421013743_.pdf',
                'temp' => '0.4915547151750512',
                'created_at' => '2020-04-21 13:37:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            168 => 
            array (
                'id_attachment' => 16016,
                'id_tabel' => 1040846,
                'file_name' => '20200421021131_577.jpg',
                'temp' => '0.1873046121005142',
                'created_at' => '2020-04-21 14:11:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            169 => 
            array (
                'id_attachment' => 16019,
                'id_tabel' => 1040849,
                'file_name' => '20200421030939_577.jpg',
                'temp' => '0.5554969889497763',
                'created_at' => '2020-04-21 15:09:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            170 => 
            array (
                'id_attachment' => 16021,
                'id_tabel' => 1040850,
                'file_name' => '20200421053520_577.jpg',
                'temp' => '0.6495447584847542',
                'created_at' => '2020-04-21 17:35:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            171 => 
            array (
                'id_attachment' => 16045,
                'id_tabel' => 1040853,
                'file_name' => '20200424125759_577.jpg',
                'temp' => '0.8845802088927919',
                'created_at' => '2020-04-24 00:57:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            172 => 
            array (
                'id_attachment' => 16047,
                'id_tabel' => 1040855,
                'file_name' => '20200424011234_577.jpg',
                'temp' => '0.4509454585804997',
                'created_at' => '2020-04-24 01:12:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            173 => 
            array (
                'id_attachment' => 16053,
                'id_tabel' => 1040858,
                'file_name' => '20200427090833_577.jpg',
                'temp' => '0.32351847826413427',
                'created_at' => '2020-04-27 09:08:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            174 => 
            array (
                'id_attachment' => 16062,
                'id_tabel' => 1040869,
                'file_name' => '20200430084825_577.jpg',
                'temp' => '0.32362530118073507',
                'created_at' => '2020-04-30 08:48:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            175 => 
            array (
                'id_attachment' => 16069,
                'id_tabel' => 1040874,
                'file_name' => '20200430114834_577.jpg',
                'temp' => '0.8992097356729873',
                'created_at' => '2020-04-30 11:48:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            176 => 
            array (
                'id_attachment' => 16073,
                'id_tabel' => 1040876,
                'file_name' => '20200430040456_577.jpg',
                'temp' => '0.2669029918018544',
                'created_at' => '2020-04-30 16:04:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            177 => 
            array (
                'id_attachment' => 16078,
                'id_tabel' => 1040879,
                'file_name' => '20200504080115_787.jpg',
                'temp' => '0.6749162199889662',
                'created_at' => '2020-05-04 08:01:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            178 => 
            array (
                'id_attachment' => 16079,
                'id_tabel' => 1040880,
                'file_name' => '20200504081135_787.jpg',
                'temp' => '0.7976499325828939',
                'created_at' => '2020-05-04 08:11:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            179 => 
            array (
                'id_attachment' => 16103,
                'id_tabel' => 1040883,
                'file_name' => '20200505124003_577.jpeg',
                'temp' => '0.7360717770496934',
                'created_at' => '2020-05-05 12:40:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            180 => 
            array (
                'id_attachment' => 16118,
                'id_tabel' => 1040885,
                'file_name' => '20200508081337_787.png',
                'temp' => '0.12532143189363976',
                'created_at' => '2020-05-08 08:13:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            181 => 
            array (
                'id_attachment' => 16122,
                'id_tabel' => 1040889,
                'file_name' => '20200511104727_577.jpg',
                'temp' => '0.4787320179359449',
                'created_at' => '2020-05-11 10:47:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            182 => 
            array (
                'id_attachment' => 16123,
                'id_tabel' => 1040888,
                'file_name' => '20200511105035_577.jpg',
                'temp' => '0.47906860833283216',
                'created_at' => '2020-05-11 10:50:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            183 => 
            array (
                'id_attachment' => 16124,
                'id_tabel' => 1040890,
                'file_name' => '20200512090033_577.jpg',
                'temp' => '0.43132801734824633',
                'created_at' => '2020-05-12 09:00:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            184 => 
            array (
                'id_attachment' => 16126,
                'id_tabel' => 1040892,
                'file_name' => '20200512095554_577.jpg',
                'temp' => '0.07473232259556095',
                'created_at' => '2020-05-12 09:55:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            185 => 
            array (
                'id_attachment' => 16150,
                'id_tabel' => 1040899,
                'file_name' => '20200514102206_577.jpg',
                'temp' => '0.9532647143168629',
                'created_at' => '2020-05-14 22:22:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            186 => 
            array (
                'id_attachment' => 16153,
                'id_tabel' => 1040902,
                'file_name' => '20200514105233_577.jpg',
                'temp' => '0.15961974277892832',
                'created_at' => '2020-05-14 22:52:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            187 => 
            array (
                'id_attachment' => 16156,
                'id_tabel' => 1040905,
                'file_name' => '20200515051925_577.jpg',
                'temp' => '0.4486606585640671',
                'created_at' => '2020-05-15 05:19:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            188 => 
            array (
                'id_attachment' => 16157,
                'id_tabel' => 1040906,
                'file_name' => '20200515052036_577.jpg',
                'temp' => '0.985617150713934',
                'created_at' => '2020-05-15 05:20:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            189 => 
            array (
                'id_attachment' => 16158,
                'id_tabel' => 1040907,
                'file_name' => '20200516114850_577.jpg',
                'temp' => '0.30433350947585946',
                'created_at' => '2020-05-16 11:48:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            190 => 
            array (
                'id_attachment' => 16161,
                'id_tabel' => 1040910,
                'file_name' => '20200516024107_577.jpg',
                'temp' => '0.3117027659409808',
                'created_at' => '2020-05-16 14:41:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            191 => 
            array (
                'id_attachment' => 16170,
                'id_tabel' => 1040912,
                'file_name' => '20200517044916_577.jpg',
                'temp' => '0.22906209817706547',
                'created_at' => '2020-05-17 16:49:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            192 => 
            array (
                'id_attachment' => 16172,
                'id_tabel' => 1040914,
                'file_name' => '20200517091230_577.jpg',
                'temp' => '0.008974806412865188',
                'created_at' => '2020-05-17 21:12:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            193 => 
            array (
                'id_attachment' => 16188,
                'id_tabel' => 1040917,
                'file_name' => '20200518082918_577.jpg',
                'temp' => '0.410431735142019',
                'created_at' => '2020-05-18 20:29:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            194 => 
            array (
                'id_attachment' => 16190,
                'id_tabel' => 1040919,
                'file_name' => '20200520090245_577.jpg',
                'temp' => '0.6534355965683061',
                'created_at' => '2020-05-20 09:02:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            195 => 
            array (
                'id_attachment' => 16196,
                'id_tabel' => 1040923,
                'file_name' => '20200521011534_577.jpg',
                'temp' => '0.03683862646136382',
                'created_at' => '2020-05-21 13:15:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            196 => 
            array (
                'id_attachment' => 16198,
                'id_tabel' => 1040925,
                'file_name' => '20200521082355_577.jpg',
                'temp' => '0.7171169493070693',
                'created_at' => '2020-05-21 20:23:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            197 => 
            array (
                'id_attachment' => 16200,
                'id_tabel' => 1040927,
                'file_name' => '20200521084547_577.jpg',
                'temp' => '0.8927039489367803',
                'created_at' => '2020-05-21 20:45:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            198 => 
            array (
                'id_attachment' => 16202,
                'id_tabel' => 1040929,
                'file_name' => '20200522104019_787.jpg',
                'temp' => '0.8325198496175696',
                'created_at' => '2020-05-22 10:40:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            199 => 
            array (
                'id_attachment' => 16206,
                'id_tabel' => 1040933,
                'file_name' => '20200522021516_577.jpg',
                'temp' => '0.6628606287124126',
                'created_at' => '2020-05-22 14:15:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            200 => 
            array (
                'id_attachment' => 16207,
                'id_tabel' => 1040935,
                'file_name' => '20200525045819_577.jpg',
                'temp' => '0.48545459439576977',
                'created_at' => '2020-05-25 16:58:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            201 => 
            array (
                'id_attachment' => 16209,
                'id_tabel' => 1040936,
                'file_name' => '20200526041248_577.jpg',
                'temp' => '0.8166904842366651',
                'created_at' => '2020-05-26 16:12:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            202 => 
            array (
                'id_attachment' => 16215,
                'id_tabel' => 1040940,
                'file_name' => '20200528081620_577.jpg',
                'temp' => '0.9903584240364733',
                'created_at' => '2020-05-28 08:16:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            203 => 
            array (
                'id_attachment' => 16247,
                'id_tabel' => 1040947,
                'file_name' => '20200528013641_577.jpg',
                'temp' => '0.41230713550897025',
                'created_at' => '2020-05-28 13:36:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            204 => 
            array (
                'id_attachment' => 16249,
                'id_tabel' => 1040949,
                'file_name' => '20200528014709_577.jpg',
                'temp' => '0.9039744857105356',
                'created_at' => '2020-05-28 13:47:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            205 => 
            array (
                'id_attachment' => 16252,
                'id_tabel' => 1040952,
                'file_name' => '20200528033736_577.jpg',
                'temp' => '0.14432355678041797',
                'created_at' => '2020-05-28 15:37:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            206 => 
            array (
                'id_attachment' => 16258,
                'id_tabel' => 1040955,
                'file_name' => '20200528040954_577.jpg',
                'temp' => '0.1558988637833112',
                'created_at' => '2020-05-28 16:09:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            207 => 
            array (
                'id_attachment' => 16260,
                'id_tabel' => 1040957,
                'file_name' => '20200529061730_577.jpg',
                'temp' => '0.6290813919553777',
                'created_at' => '2020-05-29 06:17:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            208 => 
            array (
                'id_attachment' => 16263,
                'id_tabel' => 1040959,
                'file_name' => '20200529104407_787.jpg',
                'temp' => '0.4860140293711872',
                'created_at' => '2020-05-29 10:44:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            209 => 
            array (
                'id_attachment' => 16264,
                'id_tabel' => 1040960,
                'file_name' => '20200529010448_577.jpg',
                'temp' => '0.8635712840047183',
                'created_at' => '2020-05-29 13:04:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            210 => 
            array (
                'id_attachment' => 16266,
                'id_tabel' => 1040963,
                'file_name' => '20200529010711_577.jpg',
                'temp' => '0.442549762531222',
                'created_at' => '2020-05-29 13:07:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            211 => 
            array (
                'id_attachment' => 16275,
                'id_tabel' => 1040966,
                'file_name' => '20200529054509_577.jpg',
                'temp' => '0.9389328871909655',
                'created_at' => '2020-05-29 17:45:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            212 => 
            array (
                'id_attachment' => 16277,
                'id_tabel' => 1040967,
                'file_name' => '20200530113416_577.jpg',
                'temp' => '0.19175057351181213',
                'created_at' => '2020-05-30 11:34:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            213 => 
            array (
                'id_attachment' => 16280,
                'id_tabel' => 1040970,
                'file_name' => '20200530050817_577.jpg',
                'temp' => '0.2576728747639856',
                'created_at' => '2020-05-30 17:08:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            214 => 
            array (
                'id_attachment' => 16282,
                'id_tabel' => 1040972,
                'file_name' => '20200531070233_577.jpg',
                'temp' => '0.9511999182868782',
                'created_at' => '2020-05-31 07:02:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            215 => 
            array (
                'id_attachment' => 16290,
                'id_tabel' => 1040974,
                'file_name' => '20200531025603_577.jpg',
                'temp' => '0.057851129006640356',
                'created_at' => '2020-05-31 14:56:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            216 => 
            array (
                'id_attachment' => 16296,
                'id_tabel' => 1040977,
                'file_name' => '20200601053727_577.jpg',
                'temp' => '0.07198162890125026',
                'created_at' => '2020-06-01 17:37:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            217 => 
            array (
                'id_attachment' => 16300,
                'id_tabel' => 1040979,
                'file_name' => '20200602031718_577.jpg',
                'temp' => '0.3191877791802773',
                'created_at' => '2020-06-02 15:17:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            218 => 
            array (
                'id_attachment' => 16303,
                'id_tabel' => 1040981,
                'file_name' => '20200602040540_577.jpg',
                'temp' => '0.37809678199989616',
                'created_at' => '2020-06-02 16:05:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            219 => 
            array (
                'id_attachment' => 16309,
                'id_tabel' => 1040984,
                'file_name' => '20200603112029_577.jpg',
                'temp' => '0.7967188404066403',
                'created_at' => '2020-06-03 11:20:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            220 => 
            array (
                'id_attachment' => 16311,
                'id_tabel' => 1040986,
                'file_name' => '20200603072451_577.jpg',
                'temp' => '0.7775488616706281',
                'created_at' => '2020-06-03 19:24:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            221 => 
            array (
                'id_attachment' => 16314,
                'id_tabel' => 1040989,
                'file_name' => '20200604113831_577.jpg',
                'temp' => '0.8989793981723182',
                'created_at' => '2020-06-04 11:38:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            222 => 
            array (
                'id_attachment' => 16316,
                'id_tabel' => 1040991,
                'file_name' => '20200604122302_787.jpg',
                'temp' => '0.21904101492132644',
                'created_at' => '2020-06-04 12:23:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            223 => 
            array (
                'id_attachment' => 16317,
                'id_tabel' => 1040991,
                'file_name' => '20200604122323_787.jpg',
                'temp' => '0.21904101492132644',
                'created_at' => '2020-06-04 12:23:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            224 => 
            array (
                'id_attachment' => 16318,
                'id_tabel' => 1040991,
                'file_name' => '20200604122332_787.jpg',
                'temp' => '0.21904101492132644',
                'created_at' => '2020-06-04 12:23:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            225 => 
            array (
                'id_attachment' => 16319,
                'id_tabel' => 1040992,
                'file_name' => '20200604012904_577.jpg',
                'temp' => '0.15467912650323545',
                'created_at' => '2020-06-04 13:29:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            226 => 
            array (
                'id_attachment' => 16321,
                'id_tabel' => 1040994,
                'file_name' => '20200604014056_577.jpg',
                'temp' => '0.2112537656724336',
                'created_at' => '2020-06-04 13:40:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            227 => 
            array (
                'id_attachment' => 16323,
                'id_tabel' => 1040996,
                'file_name' => '20200604064028_577.jpg',
                'temp' => '0.24091618953095972',
                'created_at' => '2020-06-04 18:40:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            228 => 
            array (
                'id_attachment' => 16325,
                'id_tabel' => 1040998,
                'file_name' => '20200604064323_577.jpg',
                'temp' => '0.03251100149922315',
                'created_at' => '2020-06-04 18:43:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            229 => 
            array (
                'id_attachment' => 16327,
                'id_tabel' => 1041001,
                'file_name' => '20200604083019_577.jpg',
                'temp' => '0.44666869041481116',
                'created_at' => '2020-06-04 20:30:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            230 => 
            array (
                'id_attachment' => 16330,
                'id_tabel' => 1041002,
                'file_name' => '20200604085457_577.jpg',
                'temp' => '0.3609575113242538',
                'created_at' => '2020-06-04 20:54:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            231 => 
            array (
                'id_attachment' => 16333,
                'id_tabel' => 1041005,
                'file_name' => '20200605114409_577.jpg',
                'temp' => '0.9242263242526512',
                'created_at' => '2020-06-05 11:44:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            232 => 
            array (
                'id_attachment' => 16335,
                'id_tabel' => 1041007,
                'file_name' => '20200605061603_577.jpg',
                'temp' => '0.27953231009333956',
                'created_at' => '2020-06-05 18:16:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            233 => 
            array (
                'id_attachment' => 16337,
                'id_tabel' => 1041009,
                'file_name' => '20200607073156_577.jpg',
                'temp' => '0.850996033875214',
                'created_at' => '2020-06-07 19:31:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            234 => 
            array (
                'id_attachment' => 16339,
                'id_tabel' => 0,
                'file_name' => '20200607073345_577.jpg',
                'temp' => '0.4454773924107185',
                'created_at' => '2020-06-07 19:33:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            235 => 
            array (
                'id_attachment' => 16341,
                'id_tabel' => 1041011,
                'file_name' => '20200607073530_577.jpg',
                'temp' => '0.6398037548496449',
                'created_at' => '2020-06-07 19:35:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            236 => 
            array (
                'id_attachment' => 16342,
                'id_tabel' => 1041013,
                'file_name' => '20200607073641_577.jpg',
                'temp' => '0.7231062424938044',
                'created_at' => '2020-06-07 19:36:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            237 => 
            array (
                'id_attachment' => 16348,
                'id_tabel' => 1041019,
                'file_name' => '20200609024611_577.jpg',
                'temp' => '0.7414447062587295',
                'created_at' => '2020-06-09 14:46:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            238 => 
            array (
                'id_attachment' => 16349,
                'id_tabel' => 1041020,
                'file_name' => '20200609025304_577.jpg',
                'temp' => '0.8899304120133353',
                'created_at' => '2020-06-09 14:53:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            239 => 
            array (
                'id_attachment' => 16352,
                'id_tabel' => 1041022,
                'file_name' => '20200609031758_577.jpg',
                'temp' => '0.16950843543613825',
                'created_at' => '2020-06-09 15:17:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            240 => 
            array (
                'id_attachment' => 16360,
                'id_tabel' => 1041026,
                'file_name' => '20200611033941_577.jpg',
                'temp' => '0.5791185515044786',
                'created_at' => '2020-06-11 15:39:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            241 => 
            array (
                'id_attachment' => 16364,
                'id_tabel' => 1041027,
                'file_name' => '20200611045049_577.jpg',
                'temp' => '0.771951521549614',
                'created_at' => '2020-06-11 16:50:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            242 => 
            array (
                'id_attachment' => 16366,
                'id_tabel' => 1041029,
                'file_name' => '20200611045242_577.jpg',
                'temp' => '0.9419832282053975',
                'created_at' => '2020-06-11 16:52:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            243 => 
            array (
                'id_attachment' => 16368,
                'id_tabel' => 1041031,
                'file_name' => '20200612104857_577.jpg',
                'temp' => '0.5344798149255741',
                'created_at' => '2020-06-12 22:48:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            244 => 
            array (
                'id_attachment' => 16370,
                'id_tabel' => 1041033,
                'file_name' => '20200612105209_577.jpg',
                'temp' => '0.8879017035109555',
                'created_at' => '2020-06-12 22:52:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            245 => 
            array (
                'id_attachment' => 16372,
                'id_tabel' => 1041035,
                'file_name' => '20200612105506_577.jpg',
                'temp' => '0.025602405082602475',
                'created_at' => '2020-06-12 22:55:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            246 => 
            array (
                'id_attachment' => 16374,
                'id_tabel' => 1041037,
                'file_name' => '20200612105928_577.jpg',
                'temp' => '0.5373741822070659',
                'created_at' => '2020-06-12 22:59:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            247 => 
            array (
                'id_attachment' => 16376,
                'id_tabel' => 1041039,
                'file_name' => '20200614112328_577.jpg',
                'temp' => '0.5726236865436549',
                'created_at' => '2020-06-14 11:23:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            248 => 
            array (
                'id_attachment' => 16378,
                'id_tabel' => 1041041,
                'file_name' => '20200614112657_577.jpg',
                'temp' => '0.47966346779571745',
                'created_at' => '2020-06-14 11:26:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            249 => 
            array (
                'id_attachment' => 16381,
                'id_tabel' => 1041043,
                'file_name' => '20200614080348_577.jpg',
                'temp' => '0.4753658820027362',
                'created_at' => '2020-06-14 20:03:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            250 => 
            array (
                'id_attachment' => 16382,
                'id_tabel' => 1041045,
                'file_name' => '20200614080529_577.jpg',
                'temp' => '0.37350709591676057',
                'created_at' => '2020-06-14 20:05:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            251 => 
            array (
                'id_attachment' => 16390,
                'id_tabel' => 1041050,
                'file_name' => '20200615091811_577.jpg',
                'temp' => '0.18586197014314387',
                'created_at' => '2020-06-15 21:18:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            252 => 
            array (
                'id_attachment' => 16394,
                'id_tabel' => 1041053,
                'file_name' => '20200616034658_577.jpg',
                'temp' => '0.07497695643827984',
                'created_at' => '2020-06-16 15:46:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            253 => 
            array (
                'id_attachment' => 16395,
                'id_tabel' => 1041054,
                'file_name' => '20200616043214_577.jpg',
                'temp' => '0.6547780521260997',
                'created_at' => '2020-06-16 16:32:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            254 => 
            array (
                'id_attachment' => 16399,
                'id_tabel' => 1041056,
                'file_name' => '20200617080351_787.JPG',
                'temp' => '0.2961349633990169',
                'created_at' => '2020-06-17 08:03:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            255 => 
            array (
                'id_attachment' => 16402,
                'id_tabel' => 1041059,
                'file_name' => '20200618090330_577.jpg',
                'temp' => '0.5299938306834302',
                'created_at' => '2020-06-18 09:03:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            256 => 
            array (
                'id_attachment' => 16403,
                'id_tabel' => 1041060,
                'file_name' => '20200618090426_787.jpeg',
                'temp' => '0.3367434226832329',
                'created_at' => '2020-06-18 09:04:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            257 => 
            array (
                'id_attachment' => 16404,
                'id_tabel' => 1041061,
                'file_name' => '20200618090635_577.jpg',
                'temp' => '0.1965286004600495',
                'created_at' => '2020-06-18 09:06:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            258 => 
            array (
                'id_attachment' => 16406,
                'id_tabel' => 1041063,
                'file_name' => '20200618112851_787.jpg',
                'temp' => '0.05135944714410212',
                'created_at' => '2020-06-18 11:28:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            259 => 
            array (
                'id_attachment' => 16407,
                'id_tabel' => 1041063,
                'file_name' => '20200618112934_787.pdf',
                'temp' => '0.05135944714410212',
                'created_at' => '2020-06-18 11:29:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            260 => 
            array (
                'id_attachment' => 16408,
                'id_tabel' => 1041063,
                'file_name' => '20200618113006_787.pdf',
                'temp' => '0.05135944714410212',
                'created_at' => '2020-06-18 11:30:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            261 => 
            array (
                'id_attachment' => 16414,
                'id_tabel' => 1041066,
                'file_name' => '20200619075356_577.jpg',
                'temp' => '0.05054415120017541',
                'created_at' => '2020-06-19 07:53:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            262 => 
            array (
                'id_attachment' => 16416,
                'id_tabel' => 1041068,
                'file_name' => '20200619080953_577.jpg',
                'temp' => '0.6819473003297107',
                'created_at' => '2020-06-19 08:09:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            263 => 
            array (
                'id_attachment' => 16418,
                'id_tabel' => 1041070,
                'file_name' => '20200619081509_577.jpg',
                'temp' => '0.7583358360184818',
                'created_at' => '2020-06-19 08:15:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            264 => 
            array (
                'id_attachment' => 16421,
                'id_tabel' => 1041072,
                'file_name' => '20200619102505_577.jpg',
                'temp' => '0.45812798421560985',
                'created_at' => '2020-06-19 22:25:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            265 => 
            array (
                'id_attachment' => 16422,
                'id_tabel' => 1041074,
                'file_name' => '20200619102558_577.jpg',
                'temp' => '0.8293355443489301',
                'created_at' => '2020-06-19 22:25:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            266 => 
            array (
                'id_attachment' => 16426,
                'id_tabel' => 1041076,
                'file_name' => '20200621010346_577.jpg',
                'temp' => '0.6424528030144867',
                'created_at' => '2020-06-21 13:03:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            267 => 
            array (
                'id_attachment' => 16428,
                'id_tabel' => 1041078,
                'file_name' => '20200622041804_577.jpg',
                'temp' => '0.6951032787625899',
                'created_at' => '2020-06-22 16:18:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            268 => 
            array (
                'id_attachment' => 16430,
                'id_tabel' => 1041080,
                'file_name' => '20200622042108_577.jpg',
                'temp' => '0.5502898793675304',
                'created_at' => '2020-06-22 16:21:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            269 => 
            array (
                'id_attachment' => 16441,
                'id_tabel' => 1041086,
                'file_name' => '20200623042109_577.jpg',
                'temp' => '0.903460349596712',
                'created_at' => '2020-06-23 16:21:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            270 => 
            array (
                'id_attachment' => 16443,
                'id_tabel' => 1041088,
                'file_name' => '20200624075015_787.jpg',
                'temp' => '0.38471926886667385',
                'created_at' => '2020-06-24 07:50:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            271 => 
            array (
                'id_attachment' => 16444,
                'id_tabel' => 1041089,
                'file_name' => '20200624080846_787.JPG',
                'temp' => '0.8682462896595253',
                'created_at' => '2020-06-24 08:08:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            272 => 
            array (
                'id_attachment' => 16446,
                'id_tabel' => 1041090,
                'file_name' => '20200624081909_577.jpg',
                'temp' => '0.44396767269085013',
                'created_at' => '2020-06-24 08:19:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            273 => 
            array (
                'id_attachment' => 16450,
                'id_tabel' => 1041094,
                'file_name' => '20200624041422_577.jpg',
                'temp' => '0.8134834279225223',
                'created_at' => '2020-06-24 16:14:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            274 => 
            array (
                'id_attachment' => 16452,
                'id_tabel' => 1041096,
                'file_name' => '20200625032243_577.jpg',
                'temp' => '0.5632635913058115',
                'created_at' => '2020-06-25 03:22:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            275 => 
            array (
                'id_attachment' => 16455,
                'id_tabel' => 1041099,
                'file_name' => '20200625040353_577.jpg',
                'temp' => '0.8598239429511434',
                'created_at' => '2020-06-25 16:03:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            276 => 
            array (
                'id_attachment' => 16456,
                'id_tabel' => 1041100,
                'file_name' => '20200626080631_577.jpg',
                'temp' => '0.8916037914793584',
                'created_at' => '2020-06-26 20:06:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            277 => 
            array (
                'id_attachment' => 16458,
                'id_tabel' => 1041102,
                'file_name' => '20200626080730_577.jpg',
                'temp' => '0.20998698440420815',
                'created_at' => '2020-06-26 20:07:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            278 => 
            array (
                'id_attachment' => 16463,
                'id_tabel' => 1041106,
                'file_name' => '20200627010152_577.jpg',
                'temp' => '0.3290065893454357',
                'created_at' => '2020-06-27 13:01:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            279 => 
            array (
                'id_attachment' => 16467,
                'id_tabel' => 1041108,
                'file_name' => '20200628011000_577.jpg',
                'temp' => '0.2852780039967977',
                'created_at' => '2020-06-28 13:10:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            280 => 
            array (
                'id_attachment' => 16472,
                'id_tabel' => 1041112,
                'file_name' => '20200629092147_787.pdf',
                'temp' => '0.6265998023881658',
                'created_at' => '2020-06-29 09:21:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            281 => 
            array (
                'id_attachment' => 16473,
                'id_tabel' => 1041115,
                'file_name' => '20200629094026_787.pdf',
                'temp' => '0.6177016041655523',
                'created_at' => '2020-06-29 09:40:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            282 => 
            array (
                'id_attachment' => 16474,
                'id_tabel' => 1041114,
                'file_name' => '20200629094343_787.pdf',
                'temp' => '0.3043361136097096',
                'created_at' => '2020-06-29 09:43:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            283 => 
            array (
                'id_attachment' => 16475,
                'id_tabel' => 1041117,
                'file_name' => '20200629095040_787.rar',
                'temp' => '0.11655037993990969',
                'created_at' => '2020-06-29 09:50:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            284 => 
            array (
                'id_attachment' => 16479,
                'id_tabel' => 1041119,
                'file_name' => '20200630081709_577.jpg',
                'temp' => '0.5752741377685584',
                'created_at' => '2020-06-30 08:17:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            285 => 
            array (
                'id_attachment' => 16480,
                'id_tabel' => 1041121,
                'file_name' => '20200630082938_577.jpg',
                'temp' => '0.9350489958667598',
                'created_at' => '2020-06-30 08:29:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            286 => 
            array (
                'id_attachment' => 16491,
                'id_tabel' => 1041123,
                'file_name' => '20200701085124_787.jpg',
                'temp' => '0.09616616592064897',
                'created_at' => '2020-07-01 08:51:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            287 => 
            array (
                'id_attachment' => 16494,
                'id_tabel' => 1041125,
                'file_name' => '20200701083030_577.jpg',
                'temp' => '0.36517315858379296',
                'created_at' => '2020-07-01 20:30:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            288 => 
            array (
                'id_attachment' => 16495,
                'id_tabel' => 0,
                'file_name' => '20200702091110_787.JPG',
                'temp' => '0.4536531508247965',
                'created_at' => '2020-07-02 09:11:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            289 => 
            array (
                'id_attachment' => 16496,
                'id_tabel' => 0,
                'file_name' => '20200702091110_787.JPG',
                'temp' => '0.4536531508247965',
                'created_at' => '2020-07-02 09:11:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            290 => 
            array (
                'id_attachment' => 16497,
                'id_tabel' => 1041127,
                'file_name' => '20200702091158_787.JPG',
                'temp' => '0.5175981918279127',
                'created_at' => '2020-07-02 09:11:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            291 => 
            array (
                'id_attachment' => 16499,
                'id_tabel' => 1041129,
                'file_name' => '20200703023641_577.jpg',
                'temp' => '0.034683576827455154',
                'created_at' => '2020-07-03 02:36:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            292 => 
            array (
                'id_attachment' => 16503,
                'id_tabel' => 1041132,
                'file_name' => '20200703110204_577.jpg',
                'temp' => '0.2707856178768622',
                'created_at' => '2020-07-03 11:02:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            293 => 
            array (
                'id_attachment' => 16506,
                'id_tabel' => 1041134,
                'file_name' => '20200705032404_577.jpg',
                'temp' => '0.8516411001298301',
                'created_at' => '2020-07-05 15:24:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            294 => 
            array (
                'id_attachment' => 16509,
                'id_tabel' => 1041136,
                'file_name' => '20200706023052_577.jpg',
                'temp' => '0.8359305964224562',
                'created_at' => '2020-07-06 14:30:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            295 => 
            array (
                'id_attachment' => 16520,
                'id_tabel' => 1041141,
                'file_name' => '20200708092427_577.jpg',
                'temp' => '0.6333646851805161',
                'created_at' => '2020-07-08 09:24:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            296 => 
            array (
                'id_attachment' => 16522,
                'id_tabel' => 1041145,
                'file_name' => '20200708011629_577.jpg',
                'temp' => '0.05038822976740498',
                'created_at' => '2020-07-08 13:16:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            297 => 
            array (
                'id_attachment' => 16523,
                'id_tabel' => 1041146,
                'file_name' => '20200709081923_787.jpg',
                'temp' => '0.22745471759613722',
                'created_at' => '2020-07-09 08:19:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            298 => 
            array (
                'id_attachment' => 16525,
                'id_tabel' => 1041147,
                'file_name' => '20200709083006_787.JPG',
                'temp' => '0.6342862390542352',
                'created_at' => '2020-07-09 08:30:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            299 => 
            array (
                'id_attachment' => 16527,
                'id_tabel' => 1041150,
                'file_name' => '20200709113916_577.jpg',
                'temp' => '0.4550812883431279',
                'created_at' => '2020-07-09 11:39:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            300 => 
            array (
                'id_attachment' => 16532,
                'id_tabel' => 1041152,
                'file_name' => '20200709042402_577.jpg',
                'temp' => '0.6139360241291676',
                'created_at' => '2020-07-09 16:24:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            301 => 
            array (
                'id_attachment' => 16547,
                'id_tabel' => 1041159,
                'file_name' => '20200713082318_577.jpg',
                'temp' => '0.6035289128973089',
                'created_at' => '2020-07-13 08:23:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            302 => 
            array (
                'id_attachment' => 16549,
                'id_tabel' => 1041161,
                'file_name' => '20200713082709_577.jpg',
                'temp' => '0.4609655178210825',
                'created_at' => '2020-07-13 08:27:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            303 => 
            array (
                'id_attachment' => 16552,
                'id_tabel' => 1041164,
                'file_name' => '20200713024923_577.jpg',
                'temp' => '0.9939791276323158',
                'created_at' => '2020-07-13 14:49:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            304 => 
            array (
                'id_attachment' => 16554,
                'id_tabel' => 1041166,
                'file_name' => '20200714033052_577.jpg',
                'temp' => '0.22374640739335727',
                'created_at' => '2020-07-14 15:30:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            305 => 
            array (
                'id_attachment' => 16558,
                'id_tabel' => 1041168,
                'file_name' => '20200715113643_787.jpg',
                'temp' => '0.5590934014882722',
                'created_at' => '2020-07-15 11:36:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            306 => 
            array (
                'id_attachment' => 16560,
                'id_tabel' => 1041170,
                'file_name' => '20200715020838_577.jpg',
                'temp' => '0.6640737772338603',
                'created_at' => '2020-07-15 14:08:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            307 => 
            array (
                'id_attachment' => 16561,
                'id_tabel' => 1041171,
                'file_name' => '20200716082022_787.jpeg',
                'temp' => '0.7257871796049582',
                'created_at' => '2020-07-16 08:20:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            308 => 
            array (
                'id_attachment' => 16562,
                'id_tabel' => 0,
                'file_name' => '20200716084212_577.jpg',
                'temp' => '0.039219364436052784',
                'created_at' => '2020-07-16 08:42:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            309 => 
            array (
                'id_attachment' => 16573,
                'id_tabel' => 1041176,
                'file_name' => '20200717101132_787.JPG',
                'temp' => '0.49086969061577235',
                'created_at' => '2020-07-17 10:11:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            310 => 
            array (
                'id_attachment' => 16578,
                'id_tabel' => 1041182,
                'file_name' => '20200720012955_787.jpg',
                'temp' => '0.7680162518256324',
                'created_at' => '2020-07-20 13:29:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            311 => 
            array (
                'id_attachment' => 16579,
                'id_tabel' => 1041182,
                'file_name' => '20200720013010_787.jpg',
                'temp' => '0.7680162518256324',
                'created_at' => '2020-07-20 13:30:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            312 => 
            array (
                'id_attachment' => 16580,
                'id_tabel' => 1041182,
                'file_name' => '20200720013020_787.jpg',
                'temp' => '0.7680162518256324',
                'created_at' => '2020-07-20 13:30:20',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            313 => 
            array (
                'id_attachment' => 16581,
                'id_tabel' => 1041182,
                'file_name' => '20200720013031_787.jpg',
                'temp' => '0.7680162518256324',
                'created_at' => '2020-07-20 13:30:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            314 => 
            array (
                'id_attachment' => 16582,
                'id_tabel' => 1041182,
                'file_name' => '20200720013038_787.jpg',
                'temp' => '0.7680162518256324',
                'created_at' => '2020-07-20 13:30:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            315 => 
            array (
                'id_attachment' => 16583,
                'id_tabel' => 1041182,
                'file_name' => '20200720013046_787.jpg',
                'temp' => '0.7680162518256324',
                'created_at' => '2020-07-20 13:30:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            316 => 
            array (
                'id_attachment' => 16584,
                'id_tabel' => 1041182,
                'file_name' => '20200720013107_787.pdf',
                'temp' => '0.7680162518256324',
                'created_at' => '2020-07-20 13:31:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            317 => 
            array (
                'id_attachment' => 16601,
                'id_tabel' => 1041183,
                'file_name' => '20200720042452_577.jpg',
                'temp' => '0.10239935383978072',
                'created_at' => '2020-07-20 16:24:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            318 => 
            array (
                'id_attachment' => 16603,
                'id_tabel' => 1041185,
                'file_name' => '20200720042647_577.jpg',
                'temp' => '0.47088426662298266',
                'created_at' => '2020-07-20 16:26:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            319 => 
            array (
                'id_attachment' => 16614,
                'id_tabel' => 1041187,
                'file_name' => '20200721033627_577.jpg',
                'temp' => '0.4530374573932665',
                'created_at' => '2020-07-21 15:36:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            320 => 
            array (
                'id_attachment' => 16621,
                'id_tabel' => 1041190,
                'file_name' => '20200723062638_577.jpg',
                'temp' => '0.272838077724076',
                'created_at' => '2020-07-23 06:26:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            321 => 
            array (
                'id_attachment' => 16623,
                'id_tabel' => 1041192,
                'file_name' => '20200723025129_577.jpg',
                'temp' => '0.1938745357770335',
                'created_at' => '2020-07-23 14:51:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            322 => 
            array (
                'id_attachment' => 16625,
                'id_tabel' => 1041195,
                'file_name' => '20200724074936_577.jpg',
                'temp' => '0.3443154294391879',
                'created_at' => '2020-07-24 07:49:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            323 => 
            array (
                'id_attachment' => 16629,
                'id_tabel' => 1041200,
                'file_name' => '20200725094129_577.jpg',
                'temp' => '0.060340702447856165',
                'created_at' => '2020-07-25 21:41:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            324 => 
            array (
                'id_attachment' => 16632,
                'id_tabel' => 1041204,
                'file_name' => '20200727084646_787.jpg',
                'temp' => '0.6789511832232433',
                'created_at' => '2020-07-27 08:46:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            325 => 
            array (
                'id_attachment' => 16633,
                'id_tabel' => 1041205,
                'file_name' => '20200727084751_787.jpg',
                'temp' => '0.745780312853878',
                'created_at' => '2020-07-27 08:47:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            326 => 
            array (
                'id_attachment' => 16634,
                'id_tabel' => 1041206,
                'file_name' => '20200727092036_787.jpg',
                'temp' => '0.06155770110734915',
                'created_at' => '2020-07-27 09:20:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            327 => 
            array (
                'id_attachment' => 16636,
                'id_tabel' => 1041207,
                'file_name' => '20200727094153_787.jpg',
                'temp' => '0.4038684546897211',
                'created_at' => '2020-07-27 09:41:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            328 => 
            array (
                'id_attachment' => 16637,
                'id_tabel' => 1041209,
                'file_name' => '20200727095329_787.jpg',
                'temp' => '0.05979343294747741',
                'created_at' => '2020-07-27 09:53:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            329 => 
            array (
                'id_attachment' => 16638,
                'id_tabel' => 1041210,
                'file_name' => '20200727101515_787.jpg',
                'temp' => '0.5689114926164425',
                'created_at' => '2020-07-27 10:15:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            330 => 
            array (
                'id_attachment' => 16639,
                'id_tabel' => 1041211,
                'file_name' => '20200727102429_787.jpg',
                'temp' => '0.3907184579999077',
                'created_at' => '2020-07-27 10:24:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            331 => 
            array (
                'id_attachment' => 16640,
                'id_tabel' => 1041212,
                'file_name' => '20200727102945_787.jpg',
                'temp' => '0.19791627827258318',
                'created_at' => '2020-07-27 10:29:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            332 => 
            array (
                'id_attachment' => 16643,
                'id_tabel' => 1041214,
                'file_name' => '20200728082113_787.JPG',
                'temp' => '0.14954599091992682',
                'created_at' => '2020-07-28 08:21:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            333 => 
            array (
                'id_attachment' => 16644,
                'id_tabel' => 1041215,
                'file_name' => '20200728083437_787.jpg',
                'temp' => '0.12498162036289973',
                'created_at' => '2020-07-28 08:34:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            334 => 
            array (
                'id_attachment' => 16674,
                'id_tabel' => 1041219,
                'file_name' => '20200728122254_787.jpg',
                'temp' => '0.45043695379622406',
                'created_at' => '2020-07-28 12:22:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            335 => 
            array (
                'id_attachment' => 16692,
                'id_tabel' => 1041234,
                'file_name' => '20200729035447_577.jpg',
                'temp' => '0.26262261722953095',
                'created_at' => '2020-07-29 15:54:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            336 => 
            array (
                'id_attachment' => 16693,
                'id_tabel' => 1041235,
                'file_name' => '20200729035542_577.jpg',
                'temp' => '0.9579320987520944',
                'created_at' => '2020-07-29 15:55:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            337 => 
            array (
                'id_attachment' => 16694,
                'id_tabel' => 1041236,
                'file_name' => '20200730083216_787.JPG',
                'temp' => '0.3567129247037528',
                'created_at' => '2020-07-30 08:32:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            338 => 
            array (
                'id_attachment' => 16696,
                'id_tabel' => 1041237,
                'file_name' => '20200730084715_787.jpg',
                'temp' => '0.22577404738973383',
                'created_at' => '2020-07-30 08:47:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            339 => 
            array (
                'id_attachment' => 16699,
                'id_tabel' => 1041240,
                'file_name' => '20200730115310_787.jpg',
                'temp' => '0.31906630931103663',
                'created_at' => '2020-07-30 11:53:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            340 => 
            array (
                'id_attachment' => 16701,
                'id_tabel' => 1041242,
                'file_name' => '20200801035503_577.jpg',
                'temp' => '0.9751158861760334',
                'created_at' => '2020-08-01 15:55:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            341 => 
            array (
                'id_attachment' => 16702,
                'id_tabel' => 1041243,
                'file_name' => '20200801035550_577.jpg',
                'temp' => '0.8727074046520473',
                'created_at' => '2020-08-01 15:55:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            342 => 
            array (
                'id_attachment' => 16704,
                'id_tabel' => 1041245,
                'file_name' => '20200803084124_787.jpg',
                'temp' => '0.46613478008927034',
                'created_at' => '2020-08-03 08:41:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            343 => 
            array (
                'id_attachment' => 16725,
                'id_tabel' => 1041252,
                'file_name' => '20200804024137_577.jpg',
                'temp' => '0.8294514889719133',
                'created_at' => '2020-08-04 14:41:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            344 => 
            array (
                'id_attachment' => 16726,
                'id_tabel' => 1041253,
                'file_name' => '20200804040342_787.JPG',
                'temp' => '0.885110193598527',
                'created_at' => '2020-08-04 16:03:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            345 => 
            array (
                'id_attachment' => 16728,
                'id_tabel' => 1041255,
                'file_name' => '20200804062332_577.jpg',
                'temp' => '0.49586904939611953',
                'created_at' => '2020-08-04 18:23:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            346 => 
            array (
                'id_attachment' => 16731,
                'id_tabel' => 1041258,
                'file_name' => '20200805085852_577.jpg',
                'temp' => '0.2174105775880344',
                'created_at' => '2020-08-05 08:58:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            347 => 
            array (
                'id_attachment' => 16739,
                'id_tabel' => 1041266,
                'file_name' => '20200805020552_577.jpg',
                'temp' => '0.013657808882193478',
                'created_at' => '2020-08-05 14:05:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            348 => 
            array (
                'id_attachment' => 16744,
                'id_tabel' => 1041271,
                'file_name' => '20200805070317_577.jpg',
                'temp' => '0.50266307398909',
                'created_at' => '2020-08-05 19:03:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            349 => 
            array (
                'id_attachment' => 16773,
                'id_tabel' => 1041282,
                'file_name' => '20200806081057_577.jpg',
                'temp' => '0.32334599289267296',
                'created_at' => '2020-08-06 20:10:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            350 => 
            array (
                'id_attachment' => 16794,
                'id_tabel' => 1041294,
                'file_name' => '20200807093112_577.jpg',
                'temp' => '0.5345818954543409',
                'created_at' => '2020-08-07 21:31:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            351 => 
            array (
                'id_attachment' => 16805,
                'id_tabel' => 1041299,
                'file_name' => '20200810091125_577.jpg',
                'temp' => '0.8393456830823023',
                'created_at' => '2020-08-10 09:11:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            352 => 
            array (
                'id_attachment' => 16806,
                'id_tabel' => 1041301,
                'file_name' => '20200810092428_787.jpeg',
                'temp' => '0.28702992399455507',
                'created_at' => '2020-08-10 09:24:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            353 => 
            array (
                'id_attachment' => 16829,
                'id_tabel' => 1041306,
                'file_name' => '20200811094421_787.jpg',
                'temp' => '0.6858102700541036',
                'created_at' => '2020-08-11 09:44:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            354 => 
            array (
                'id_attachment' => 16839,
                'id_tabel' => 0,
                'file_name' => '20200811031622_.mp4',
                'temp' => '0.4280812929470601',
                'created_at' => '2020-08-11 15:16:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            355 => 
            array (
                'id_attachment' => 16842,
                'id_tabel' => 1041314,
                'file_name' => '20200812080944_787.jpg',
                'temp' => '0.21823059093597297',
                'created_at' => '2020-08-12 08:09:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            356 => 
            array (
                'id_attachment' => 16864,
                'id_tabel' => 1041321,
                'file_name' => '20200812032302_577.jpg',
                'temp' => '0.5991045801885855',
                'created_at' => '2020-08-12 15:23:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            357 => 
            array (
                'id_attachment' => 16899,
                'id_tabel' => 1041325,
                'file_name' => '20200813081144_577.jpg',
                'temp' => '0.7948079698281945',
                'created_at' => '2020-08-13 20:11:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            358 => 
            array (
                'id_attachment' => 16900,
                'id_tabel' => 1041327,
                'file_name' => '20200813081248_577.jpg',
                'temp' => '0.37595608785244394',
                'created_at' => '2020-08-13 20:12:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            359 => 
            array (
                'id_attachment' => 16904,
                'id_tabel' => 1041330,
                'file_name' => '20200814105628_787.jpg',
                'temp' => '0.7061247169570983',
                'created_at' => '2020-08-14 10:56:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            360 => 
            array (
                'id_attachment' => 16940,
                'id_tabel' => 1041337,
                'file_name' => '20200818090746_787.jpg',
                'temp' => '0.6863051654951242',
                'created_at' => '2020-08-18 09:07:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            361 => 
            array (
                'id_attachment' => 16941,
                'id_tabel' => 1041338,
                'file_name' => '20200818091203_787.jpg',
                'temp' => '0.07096042968541494',
                'created_at' => '2020-08-18 09:12:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            362 => 
            array (
                'id_attachment' => 16945,
                'id_tabel' => 0,
                'file_name' => '20200818092718_577.jpg',
                'temp' => '0.6733448633079615',
                'created_at' => '2020-08-18 09:27:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            363 => 
            array (
                'id_attachment' => 16951,
                'id_tabel' => 1041346,
                'file_name' => '20200818021256_577.jpg',
                'temp' => '0.9897966092139003',
                'created_at' => '2020-08-18 14:12:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            364 => 
            array (
                'id_attachment' => 16959,
                'id_tabel' => 1041350,
                'file_name' => '20200818043215_577.jpg',
                'temp' => '0.7739617845002573',
                'created_at' => '2020-08-18 16:32:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            365 => 
            array (
                'id_attachment' => 16960,
                'id_tabel' => 1041352,
                'file_name' => '20200819051903_577.jpg',
                'temp' => '0.6269148232197164',
                'created_at' => '2020-08-19 17:19:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            366 => 
            array (
                'id_attachment' => 16964,
                'id_tabel' => 1041353,
                'file_name' => '20200819053501_577.jpg',
                'temp' => '0.8598887230143684',
                'created_at' => '2020-08-19 17:35:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            367 => 
            array (
                'id_attachment' => 16971,
                'id_tabel' => 1041357,
                'file_name' => '20200821014714_577.jpg',
                'temp' => '0.7272478905532314',
                'created_at' => '2020-08-21 13:47:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            368 => 
            array (
                'id_attachment' => 16980,
                'id_tabel' => 1041362,
                'file_name' => '20200823081531_577.jpg',
                'temp' => '0.5239398828999347',
                'created_at' => '2020-08-23 08:15:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            369 => 
            array (
                'id_attachment' => 16981,
                'id_tabel' => 1041363,
                'file_name' => '20200823081640_577.jpg',
                'temp' => '0.4354947851199391',
                'created_at' => '2020-08-23 08:16:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            370 => 
            array (
                'id_attachment' => 16986,
                'id_tabel' => 1041366,
                'file_name' => '20200824035636_577.jpg',
                'temp' => '0.7797020076017716',
                'created_at' => '2020-08-24 15:56:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            371 => 
            array (
                'id_attachment' => 16996,
                'id_tabel' => 0,
                'file_name' => '20200825124500_.jpg',
                'temp' => '0.2360941653225388',
                'created_at' => '2020-08-25 12:45:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            372 => 
            array (
                'id_attachment' => 17002,
                'id_tabel' => 1041372,
                'file_name' => '20200825044207_577.jpg',
                'temp' => '0.9179842757716168',
                'created_at' => '2020-08-25 16:42:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            373 => 
            array (
                'id_attachment' => 17004,
                'id_tabel' => 1041375,
                'file_name' => '20200825051843_577.jpg',
                'temp' => '0.3154173954411532',
                'created_at' => '2020-08-25 17:18:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            374 => 
            array (
                'id_attachment' => 17035,
                'id_tabel' => 1041389,
                'file_name' => '20200827090448_577.jpg',
                'temp' => '0.2057086416074716',
                'created_at' => '2020-08-27 09:04:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            375 => 
            array (
                'id_attachment' => 17037,
                'id_tabel' => 1041391,
                'file_name' => '20200827090808_577.jpg',
                'temp' => '0.3131042671176829',
                'created_at' => '2020-08-27 09:08:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            376 => 
            array (
                'id_attachment' => 17124,
                'id_tabel' => 1041416,
                'file_name' => '20200829022723_577.jpg',
                'temp' => '0.2386848259180976',
                'created_at' => '2020-08-29 14:27:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            377 => 
            array (
                'id_attachment' => 17136,
                'id_tabel' => 1041427,
                'file_name' => '20200901113827_577.jpg',
                'temp' => '0.40228595067531403',
                'created_at' => '2020-09-01 11:38:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            378 => 
            array (
                'id_attachment' => 17144,
                'id_tabel' => 1041434,
                'file_name' => '20200901033612_577.jpg',
                'temp' => '0.5500924492136288',
                'created_at' => '2020-09-01 15:36:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            379 => 
            array (
                'id_attachment' => 17160,
                'id_tabel' => 1041441,
                'file_name' => '20200902115347_577.jpg',
                'temp' => '0.7956356334131667',
                'created_at' => '2020-09-02 11:53:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            380 => 
            array (
                'id_attachment' => 17177,
                'id_tabel' => 1041448,
                'file_name' => '20200902015350_577.jpg',
                'temp' => '0.8459030658380062',
                'created_at' => '2020-09-02 13:53:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            381 => 
            array (
                'id_attachment' => 17216,
                'id_tabel' => 1041453,
                'file_name' => '20200902043233_577.jpg',
                'temp' => '0.8264682289447645',
                'created_at' => '2020-09-02 16:32:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            382 => 
            array (
                'id_attachment' => 17217,
                'id_tabel' => 0,
                'file_name' => '20200902050429_.jpeg',
                'temp' => '0.33617502116768216',
                'created_at' => '2020-09-02 17:04:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            383 => 
            array (
                'id_attachment' => 17236,
                'id_tabel' => 1041463,
                'file_name' => '20200903033955_577.jpg',
                'temp' => '0.8890495808914904',
                'created_at' => '2020-09-03 15:39:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            384 => 
            array (
                'id_attachment' => 17239,
                'id_tabel' => 1041464,
                'file_name' => '20200904081525_787.jpg',
                'temp' => '0.1333218727634906',
                'created_at' => '2020-09-04 08:15:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            385 => 
            array (
                'id_attachment' => 17302,
                'id_tabel' => 1041535,
                'file_name' => '20200907053308_577.jpg',
                'temp' => '0.568058492198755',
                'created_at' => '2020-09-07 17:33:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            386 => 
            array (
                'id_attachment' => 17304,
                'id_tabel' => 1041537,
                'file_name' => '20200907053603_577.jpg',
                'temp' => '0.5919313725436324',
                'created_at' => '2020-09-07 17:36:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            387 => 
            array (
                'id_attachment' => 17309,
                'id_tabel' => 1041541,
                'file_name' => '20200908081728_787.jpg',
                'temp' => '0.39638399028397076',
                'created_at' => '2020-09-08 08:17:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            388 => 
            array (
                'id_attachment' => 17324,
                'id_tabel' => 1041549,
                'file_name' => '20200909082432_787.jpg',
                'temp' => '0.7752820174003741',
                'created_at' => '2020-09-09 08:24:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            389 => 
            array (
                'id_attachment' => 17326,
                'id_tabel' => 0,
                'file_name' => '20200909010740_.jpeg',
                'temp' => '0.7713752616434255',
                'created_at' => '2020-09-09 13:07:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            390 => 
            array (
                'id_attachment' => 17353,
                'id_tabel' => 1041580,
                'file_name' => '20200913105614_577.jpg',
                'temp' => '0.7952025857653469',
                'created_at' => '2020-09-13 22:56:15',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            391 => 
            array (
                'id_attachment' => 17354,
                'id_tabel' => 0,
                'file_name' => '20200914073143_577.jpg',
                'temp' => '0.4921557439152049',
                'created_at' => '2020-09-14 07:31:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            392 => 
            array (
                'id_attachment' => 17358,
                'id_tabel' => 1041583,
                'file_name' => '20200914094951_577.jpg',
                'temp' => '0.5235403906470752',
                'created_at' => '2020-09-14 09:49:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            393 => 
            array (
                'id_attachment' => 17360,
                'id_tabel' => 1041584,
                'file_name' => '20200914095316_577.jpg',
                'temp' => '0.8511044819031277',
                'created_at' => '2020-09-14 09:53:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            394 => 
            array (
                'id_attachment' => 17367,
                'id_tabel' => 1041589,
                'file_name' => '20200915082230_577.jpg',
                'temp' => '0.9576904167955087',
                'created_at' => '2020-09-15 08:22:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            395 => 
            array (
                'id_attachment' => 17378,
                'id_tabel' => 1041594,
                'file_name' => '20200915042307_577.jpg',
                'temp' => '0.9664538062098365',
                'created_at' => '2020-09-15 16:23:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            396 => 
            array (
                'id_attachment' => 17382,
                'id_tabel' => 1041596,
                'file_name' => '20200915050619_577.jpg',
                'temp' => '0.8644466677271667',
                'created_at' => '2020-09-15 17:06:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            397 => 
            array (
                'id_attachment' => 17385,
                'id_tabel' => 1041599,
                'file_name' => '20200916023202_577.jpg',
                'temp' => '0.6947612905609926',
                'created_at' => '2020-09-16 14:32:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            398 => 
            array (
                'id_attachment' => 17391,
                'id_tabel' => 1041603,
                'file_name' => '20200916115424_577.jpg',
                'temp' => '0.9177907779621208',
                'created_at' => '2020-09-16 23:54:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            399 => 
            array (
                'id_attachment' => 17414,
                'id_tabel' => 1041609,
                'file_name' => '20200917025213_787.jpg',
                'temp' => '0.6861468469382754',
                'created_at' => '2020-09-17 14:52:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
        ));
        \DB::table('attachment')->insert(array (
            0 => 
            array (
                'id_attachment' => 17486,
                'id_tabel' => 1041616,
                'file_name' => '20200918031624_577.jpg',
                'temp' => '0.2474710499959667',
                'created_at' => '2020-09-18 15:16:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            1 => 
            array (
                'id_attachment' => 17504,
                'id_tabel' => 1041621,
                'file_name' => '20200920080944_577.jpg',
                'temp' => '0.2721084593505123',
                'created_at' => '2020-09-20 08:09:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            2 => 
            array (
                'id_attachment' => 17505,
                'id_tabel' => 1041622,
                'file_name' => '20200920081545_577.jpg',
                'temp' => '0.45140695619845106',
                'created_at' => '2020-09-20 08:15:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            3 => 
            array (
                'id_attachment' => 17507,
                'id_tabel' => 1041624,
                'file_name' => '20200920082403_577.jpg',
                'temp' => '0.20597273997095344',
                'created_at' => '2020-09-20 08:24:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            4 => 
            array (
                'id_attachment' => 17512,
                'id_tabel' => 1041629,
                'file_name' => '20200920075811_577.jpg',
                'temp' => '0.2635560460238955',
                'created_at' => '2020-09-20 19:58:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            5 => 
            array (
                'id_attachment' => 17528,
                'id_tabel' => 1041634,
                'file_name' => '20200921074514_577.jpg',
                'temp' => '0.5412976649446639',
                'created_at' => '2020-09-21 19:45:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            6 => 
            array (
                'id_attachment' => 17529,
                'id_tabel' => 1041636,
                'file_name' => '20200922021453_577.jpg',
                'temp' => '0.15966218418650957',
                'created_at' => '2020-09-22 02:14:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            7 => 
            array (
                'id_attachment' => 17531,
                'id_tabel' => 1041638,
                'file_name' => '20200922021914_577.jpg',
                'temp' => '0.699839856670075',
                'created_at' => '2020-09-22 02:19:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            8 => 
            array (
                'id_attachment' => 17533,
                'id_tabel' => 1041640,
                'file_name' => '20200922110956_577.jpg',
                'temp' => '0.4435649524667906',
                'created_at' => '2020-09-22 11:09:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            9 => 
            array (
                'id_attachment' => 17535,
                'id_tabel' => 1041642,
                'file_name' => '20200922111450_577.jpg',
                'temp' => '0.44082657013772497',
                'created_at' => '2020-09-22 11:14:50',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            10 => 
            array (
                'id_attachment' => 17538,
                'id_tabel' => 1041646,
                'file_name' => '20200923102540_577.jpg',
                'temp' => '0.359842848953813',
                'created_at' => '2020-09-23 22:25:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            11 => 
            array (
                'id_attachment' => 17539,
                'id_tabel' => 1041649,
                'file_name' => '20200923102645_577.jpg',
                'temp' => '0.7640250910519502',
                'created_at' => '2020-09-23 22:26:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            12 => 
            array (
                'id_attachment' => 17569,
                'id_tabel' => 1041659,
                'file_name' => '20200926120609_577.jpg',
                'temp' => '0.030577585336616808',
                'created_at' => '2020-09-26 00:06:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            13 => 
            array (
                'id_attachment' => 17570,
                'id_tabel' => 1041661,
                'file_name' => '20200926120743_577.jpg',
                'temp' => '0.1895495376137688',
                'created_at' => '2020-09-26 00:07:43',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            14 => 
            array (
                'id_attachment' => 17572,
                'id_tabel' => 1041663,
                'file_name' => '20200926121106_577.jpg',
                'temp' => '0.3446987344829071',
                'created_at' => '2020-09-26 00:11:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            15 => 
            array (
                'id_attachment' => 17575,
                'id_tabel' => 1041665,
                'file_name' => '20200926112205_577.jpg',
                'temp' => '0.6314377345403337',
                'created_at' => '2020-09-26 23:22:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            16 => 
            array (
                'id_attachment' => 17576,
                'id_tabel' => 1041667,
                'file_name' => '20200926112346_577.jpg',
                'temp' => '0.931804137669658',
                'created_at' => '2020-09-26 23:23:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            17 => 
            array (
                'id_attachment' => 17578,
                'id_tabel' => 1041669,
                'file_name' => '20200927104951_577.jpg',
                'temp' => '0.7272011958275866',
                'created_at' => '2020-09-27 22:49:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            18 => 
            array (
                'id_attachment' => 17580,
                'id_tabel' => 1041671,
                'file_name' => '20200928084304_577.jpeg',
                'temp' => '0.46412317486554944',
                'created_at' => '2020-09-28 08:43:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            19 => 
            array (
                'id_attachment' => 17589,
                'id_tabel' => 1041674,
                'file_name' => '20200929063210_577.jpg',
                'temp' => '0.21613147695474821',
                'created_at' => '2020-09-29 06:32:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            20 => 
            array (
                'id_attachment' => 17609,
                'id_tabel' => 1041681,
                'file_name' => '20200930075506_787.jpg',
                'temp' => '0.2078327009118246',
                'created_at' => '2020-09-30 07:55:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            21 => 
            array (
                'id_attachment' => 17613,
                'id_tabel' => 1041688,
                'file_name' => '20200930110834_577.jpg',
                'temp' => '0.5660004934375489',
                'created_at' => '2020-09-30 23:08:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            22 => 
            array (
                'id_attachment' => 17617,
                'id_tabel' => 1041694,
                'file_name' => '20201002082325_787.jpg',
                'temp' => '0.8560636575065845',
                'created_at' => '2020-10-02 08:23:25',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            23 => 
            array (
                'id_attachment' => 17618,
                'id_tabel' => 1041695,
                'file_name' => '20201002083508_787.jpg',
                'temp' => '0.2794898092231939',
                'created_at' => '2020-10-02 08:35:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            24 => 
            array (
                'id_attachment' => 17636,
                'id_tabel' => 1041703,
                'file_name' => '20201005102752_577.jpg',
                'temp' => '0.3009508686020881',
                'created_at' => '2020-10-05 10:27:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            25 => 
            array (
                'id_attachment' => 17638,
                'id_tabel' => 1041705,
                'file_name' => '20201005103313_577.jpg',
                'temp' => '0.3789729004022049',
                'created_at' => '2020-10-05 10:33:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            26 => 
            array (
                'id_attachment' => 17640,
                'id_tabel' => 1041707,
                'file_name' => '20201005103935_577.jpg',
                'temp' => '0.48975765622369893',
                'created_at' => '2020-10-05 10:39:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            27 => 
            array (
                'id_attachment' => 17643,
                'id_tabel' => 1041710,
                'file_name' => '20201005105142_577.jpg',
                'temp' => '0.8026868712406425',
                'created_at' => '2020-10-05 10:51:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            28 => 
            array (
                'id_attachment' => 17645,
                'id_tabel' => 1041712,
                'file_name' => '20201005105822_577.jpg',
                'temp' => '0.4172525865855734',
                'created_at' => '2020-10-05 10:58:22',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            29 => 
            array (
                'id_attachment' => 17647,
                'id_tabel' => 1041714,
                'file_name' => '20201005110459_577.jpg',
                'temp' => '0.3181142848831646',
                'created_at' => '2020-10-05 11:04:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            30 => 
            array (
                'id_attachment' => 17662,
                'id_tabel' => 1041718,
                'file_name' => '20201006082023_787.jpeg',
                'temp' => '0.289882036842938',
                'created_at' => '2020-10-06 08:20:23',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            31 => 
            array (
                'id_attachment' => 17713,
                'id_tabel' => 6,
                'file_name' => '20201006042529_apbd_2018.pdf',
                'temp' => '0.7875614510389574',
                'created_at' => '2020-10-06 16:25:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            32 => 
            array (
                'id_attachment' => 17727,
                'id_tabel' => 1041760,
                'file_name' => '20201008082644_787.jpg',
                'temp' => '0.5254026816441661',
                'created_at' => '2020-10-08 08:26:44',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            33 => 
            array (
                'id_attachment' => 17728,
                'id_tabel' => 1041761,
                'file_name' => '20201008084206_787.jpg',
                'temp' => '0.2047290050748667',
                'created_at' => '2020-10-08 08:42:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            34 => 
            array (
                'id_attachment' => 17729,
                'id_tabel' => 1041762,
                'file_name' => '20201008085557_787.jpg',
                'temp' => '0.4040649571857715',
                'created_at' => '2020-10-08 08:55:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            35 => 
            array (
                'id_attachment' => 17733,
                'id_tabel' => 1041764,
                'file_name' => '20201008093211_787.jpg',
                'temp' => '0.08280306100873869',
                'created_at' => '2020-10-08 09:32:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            36 => 
            array (
                'id_attachment' => 17760,
                'id_tabel' => 1041776,
                'file_name' => '20201013083426_787.jpg',
                'temp' => '0.9797399496599852',
                'created_at' => '2020-10-13 08:34:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            37 => 
            array (
                'id_attachment' => 17764,
                'id_tabel' => 1041777,
                'file_name' => '20201013085018_787.jpg',
                'temp' => '0.6333486300624849',
                'created_at' => '2020-10-13 08:50:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            38 => 
            array (
                'id_attachment' => 17766,
                'id_tabel' => 1041778,
                'file_name' => '20201013091554_787.jpg',
                'temp' => '0.2948175561962634',
                'created_at' => '2020-10-13 09:15:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            39 => 
            array (
                'id_attachment' => 17767,
                'id_tabel' => 1041779,
                'file_name' => '20201013092621_787.jpg',
                'temp' => '0.9538720277552994',
                'created_at' => '2020-10-13 09:26:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            40 => 
            array (
                'id_attachment' => 17768,
                'id_tabel' => 1041780,
                'file_name' => '20201013093657_787.jpg',
                'temp' => '0.15148017973924133',
                'created_at' => '2020-10-13 09:36:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            41 => 
            array (
                'id_attachment' => 17769,
                'id_tabel' => 1041781,
                'file_name' => '20201013094500_787.jpg',
                'temp' => '0.05245339295772067',
                'created_at' => '2020-10-13 09:45:00',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            42 => 
            array (
                'id_attachment' => 17770,
                'id_tabel' => 1041782,
                'file_name' => '20201013110840_787.jpg',
                'temp' => '0.8497428907401898',
                'created_at' => '2020-10-13 11:08:40',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            43 => 
            array (
                'id_attachment' => 17788,
                'id_tabel' => 1041788,
                'file_name' => '20201014081455_787.jpg',
                'temp' => '0.15638097228629189',
                'created_at' => '2020-10-14 08:14:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            44 => 
            array (
                'id_attachment' => 17830,
                'id_tabel' => 1041800,
                'file_name' => '20201020084046_787.jpg',
                'temp' => '0.7308189946828538',
                'created_at' => '2020-10-20 08:40:46',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            45 => 
            array (
                'id_attachment' => 17832,
                'id_tabel' => 1041801,
                'file_name' => '20201020085521_787.jpg',
                'temp' => '0.15091076823842098',
                'created_at' => '2020-10-20 08:55:21',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            46 => 
            array (
                'id_attachment' => 17844,
                'id_tabel' => 1041809,
                'file_name' => '20201022014647_787.jpg',
                'temp' => '0.998321646257629',
                'created_at' => '2020-10-22 13:46:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            47 => 
            array (
                'id_attachment' => 17878,
                'id_tabel' => 1041830,
                'file_name' => '20201103101447_787.jpg',
                'temp' => '0.9092346966081644',
                'created_at' => '2020-11-03 10:14:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            48 => 
            array (
                'id_attachment' => 17879,
                'id_tabel' => 1041831,
                'file_name' => '20201104121003_787.jpg',
                'temp' => '0.025857597119238962',
                'created_at' => '2020-11-04 12:10:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            49 => 
            array (
                'id_attachment' => 17880,
                'id_tabel' => 0,
                'file_name' => '20201104121056_787.jpg',
                'temp' => '0.9397366430798195',
                'created_at' => '2020-11-04 12:10:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            50 => 
            array (
                'id_attachment' => 17881,
                'id_tabel' => 1041832,
                'file_name' => '20201104122516_787.jpg',
                'temp' => '0.7131055309698207',
                'created_at' => '2020-11-04 12:25:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            51 => 
            array (
                'id_attachment' => 17892,
                'id_tabel' => 1041841,
                'file_name' => '20201109083741_787.jpg',
                'temp' => '0.48790404220786887',
                'created_at' => '2020-11-09 08:37:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            52 => 
            array (
                'id_attachment' => 17893,
                'id_tabel' => 1041842,
                'file_name' => '20201109115627_787.jpg',
                'temp' => '0.44530425721419986',
                'created_at' => '2020-11-09 11:56:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            53 => 
            array (
                'id_attachment' => 17895,
                'id_tabel' => 1041844,
                'file_name' => '20201110112333_.jpg',
                'temp' => '0.8074193018657687',
                'created_at' => '2020-11-10 11:23:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            54 => 
            array (
                'id_attachment' => 17896,
                'id_tabel' => 1041844,
                'file_name' => '20201110112402_.pdf',
                'temp' => '0.8074193018657687',
                'created_at' => '2020-11-10 11:24:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            55 => 
            array (
                'id_attachment' => 17897,
                'id_tabel' => 1041845,
                'file_name' => '20201111082155_787.jpg',
                'temp' => '0.5039825545353793',
                'created_at' => '2020-11-11 08:21:55',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            56 => 
            array (
                'id_attachment' => 17921,
                'id_tabel' => 1041850,
                'file_name' => '20201112100047_577.jpg',
                'temp' => '0.915984584144955',
                'created_at' => '2020-11-12 10:00:47',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            57 => 
            array (
                'id_attachment' => 17924,
                'id_tabel' => 1041852,
                'file_name' => '20201116035333_577.jpg',
                'temp' => '0.6280951615634165',
                'created_at' => '2020-11-16 15:53:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            58 => 
            array (
                'id_attachment' => 17931,
                'id_tabel' => 1041855,
                'file_name' => '20201118102530_577.jpg',
                'temp' => '0.977727287144033',
                'created_at' => '2020-11-18 10:25:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            59 => 
            array (
                'id_attachment' => 17938,
                'id_tabel' => 1041861,
                'file_name' => '20201119081951_787.jpg',
                'temp' => '0.9846588226414223',
                'created_at' => '2020-11-19 08:19:51',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            60 => 
            array (
                'id_attachment' => 17947,
                'id_tabel' => 1041866,
                'file_name' => '20201120023657_577.jpg',
                'temp' => '0.7209992289708529',
                'created_at' => '2020-11-20 14:36:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            61 => 
            array (
                'id_attachment' => 17949,
                'id_tabel' => 1041868,
                'file_name' => '20201120025312_577.jpg',
                'temp' => '0.6786888295077871',
                'created_at' => '2020-11-20 14:53:12',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            62 => 
            array (
                'id_attachment' => 17951,
                'id_tabel' => 1041870,
                'file_name' => '20201120030742_577.jpg',
                'temp' => '0.8645656461173623',
                'created_at' => '2020-11-20 15:07:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            63 => 
            array (
                'id_attachment' => 17964,
                'id_tabel' => 1041880,
                'file_name' => '20201124095739_577.jpg',
                'temp' => '0.056906654878733365',
                'created_at' => '2020-11-24 09:57:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            64 => 
            array (
                'id_attachment' => 17977,
                'id_tabel' => 1041891,
                'file_name' => '20201126040418_577.jpg',
                'temp' => '0.41139569982206226',
                'created_at' => '2020-11-26 16:04:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            65 => 
            array (
                'id_attachment' => 17979,
                'id_tabel' => 1041893,
                'file_name' => '20201127082109_787.jpg',
                'temp' => '0.6011398389507572',
                'created_at' => '2020-11-27 08:21:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            66 => 
            array (
                'id_attachment' => 17982,
                'id_tabel' => 1041896,
                'file_name' => '20201130080804_787.jpg',
                'temp' => '0.5159354772307725',
                'created_at' => '2020-11-30 08:08:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            67 => 
            array (
                'id_attachment' => 17985,
                'id_tabel' => 1041899,
                'file_name' => '20201201092009_577.jpg',
                'temp' => '0.8192109872934588',
                'created_at' => '2020-12-01 09:20:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            68 => 
            array (
                'id_attachment' => 17987,
                'id_tabel' => 1041902,
                'file_name' => '20201201103041_577.jpg',
                'temp' => '0.08769413779368973',
                'created_at' => '2020-12-01 10:30:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            69 => 
            array (
                'id_attachment' => 17993,
                'id_tabel' => 1041905,
                'file_name' => '20201201013939_577.jpg',
                'temp' => '0.4345830588332291',
                'created_at' => '2020-12-01 13:39:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            70 => 
            array (
                'id_attachment' => 18007,
                'id_tabel' => 1041909,
                'file_name' => '20201203081858_787.jpg',
                'temp' => '0.9623568247358465',
                'created_at' => '2020-12-03 08:18:58',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            71 => 
            array (
                'id_attachment' => 18016,
                'id_tabel' => 1041917,
                'file_name' => '20201204104841_577.jpg',
                'temp' => '0.25175946116558645',
                'created_at' => '2020-12-04 10:48:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            72 => 
            array (
                'id_attachment' => 18017,
                'id_tabel' => 1041918,
                'file_name' => '20201204105001_577.jpg',
                'temp' => '0.11971241114696762',
                'created_at' => '2020-12-04 10:50:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            73 => 
            array (
                'id_attachment' => 18019,
                'id_tabel' => 1041920,
                'file_name' => '20201204105348_577.jpg',
                'temp' => '0.9820166601516689',
                'created_at' => '2020-12-04 10:53:48',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            74 => 
            array (
                'id_attachment' => 18021,
                'id_tabel' => 1041922,
                'file_name' => '20201207082908_787.jpg',
                'temp' => '0.3208847789516984',
                'created_at' => '2020-12-07 08:29:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            75 => 
            array (
                'id_attachment' => 18038,
                'id_tabel' => 1041933,
                'file_name' => '20201216081717_787.jpg',
                'temp' => '0.6604055755610345',
                'created_at' => '2020-12-16 08:17:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            76 => 
            array (
                'id_attachment' => 18039,
                'id_tabel' => 1041934,
                'file_name' => '20201216082854_787.jpg',
                'temp' => '0.0395211834277549',
                'created_at' => '2020-12-16 08:28:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            77 => 
            array (
                'id_attachment' => 18042,
                'id_tabel' => 1041936,
                'file_name' => '20201218080707_787.jpg',
                'temp' => '0.43411082023081615',
                'created_at' => '2020-12-18 08:07:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            78 => 
            array (
                'id_attachment' => 18043,
                'id_tabel' => 1041937,
                'file_name' => '20201218082329_787.jpg',
                'temp' => '0.34254795040086594',
                'created_at' => '2020-12-18 08:23:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            79 => 
            array (
                'id_attachment' => 18044,
                'id_tabel' => 1041938,
                'file_name' => '20201218083433_787.jpg',
                'temp' => '0.6318844395957204',
                'created_at' => '2020-12-18 08:34:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            80 => 
            array (
                'id_attachment' => 18064,
                'id_tabel' => 0,
                'file_name' => '20201222120302_787.jpg',
                'temp' => '0.2502864452251714',
                'created_at' => '2020-12-22 12:03:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            81 => 
            array (
                'id_attachment' => 18065,
                'id_tabel' => 1041944,
                'file_name' => '20201222120506_787.jpg',
                'temp' => '0.40963859662089175',
                'created_at' => '2020-12-22 12:05:06',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            82 => 
            array (
                'id_attachment' => 18066,
                'id_tabel' => 1041944,
                'file_name' => '20201222120603_787.pdf',
                'temp' => '0.40963859662089175',
                'created_at' => '2020-12-22 12:06:03',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            83 => 
            array (
                'id_attachment' => 18067,
                'id_tabel' => 1041945,
                'file_name' => '20201222120804_787.jpg',
                'temp' => '0.12434173720282105',
                'created_at' => '2020-12-22 12:08:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            84 => 
            array (
                'id_attachment' => 18068,
                'id_tabel' => 1041945,
                'file_name' => '20201222120836_787.pdf',
                'temp' => '0.12434173720282105',
                'created_at' => '2020-12-22 12:08:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            85 => 
            array (
                'id_attachment' => 18069,
                'id_tabel' => 1041946,
                'file_name' => '20201222120945_787.jpg',
                'temp' => '0.177248984054321',
                'created_at' => '2020-12-22 12:09:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            86 => 
            array (
                'id_attachment' => 18070,
                'id_tabel' => 1041946,
                'file_name' => '20201222121017_787.pdf',
                'temp' => '0.177248984054321',
                'created_at' => '2020-12-22 12:10:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            87 => 
            array (
                'id_attachment' => 18075,
                'id_tabel' => 1041948,
                'file_name' => '20201222041641_787.jpg',
                'temp' => '0.40480412940897326',
                'created_at' => '2020-12-22 16:16:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            88 => 
            array (
                'id_attachment' => 18076,
                'id_tabel' => 1041948,
                'file_name' => '20201222041732_787.pdf',
                'temp' => '0.40480412940897326',
                'created_at' => '2020-12-22 16:17:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            89 => 
            array (
                'id_attachment' => 18082,
                'id_tabel' => 1041950,
                'file_name' => '20201228084914_787.jpg',
                'temp' => '0.3301751879090782',
                'created_at' => '2020-12-28 08:49:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            90 => 
            array (
                'id_attachment' => 18083,
                'id_tabel' => 1041951,
                'file_name' => '20201228090542_787.jpg',
                'temp' => '0.058288772499720976',
                'created_at' => '2020-12-28 09:05:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            91 => 
            array (
                'id_attachment' => 18086,
                'id_tabel' => 1041952,
                'file_name' => '20201228091449_787.jpg',
                'temp' => '0.6300385801929718',
                'created_at' => '2020-12-28 09:14:49',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            92 => 
            array (
                'id_attachment' => 18110,
                'id_tabel' => 1041968,
                'file_name' => '20210105080456_787.jpg',
                'temp' => '0.6481134188902091',
                'created_at' => '2021-01-05 08:04:56',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            93 => 
            array (
                'id_attachment' => 18112,
                'id_tabel' => 1041970,
                'file_name' => '20210105022731_577.jpg',
                'temp' => '0.2909674436883043',
                'created_at' => '2021-01-05 14:27:31',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            94 => 
            array (
                'id_attachment' => 18113,
                'id_tabel' => 1041971,
                'file_name' => '20210105034136_787.jpg',
                'temp' => '0.43372006866434454',
                'created_at' => '2021-01-05 15:41:36',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            95 => 
            array (
                'id_attachment' => 18124,
                'id_tabel' => 243,
                'file_name' => '20210111083028_536.jpg',
                'temp' => '0.47537680013995454',
                'created_at' => '2021-01-11 08:30:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            96 => 
            array (
                'id_attachment' => 18133,
                'id_tabel' => 0,
                'file_name' => '20210111032141_.jpg',
                'temp' => '0.3261553744994512',
                'created_at' => '2021-01-11 15:21:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            97 => 
            array (
                'id_attachment' => 18134,
                'id_tabel' => 0,
                'file_name' => '20210111032213_.jpg',
                'temp' => '0.3261553744994512',
                'created_at' => '2021-01-11 15:22:13',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            98 => 
            array (
                'id_attachment' => 18138,
                'id_tabel' => 1041982,
                'file_name' => '20210112013032_577.jpg',
                'temp' => '0.9291613650636845',
                'created_at' => '2021-01-12 13:30:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            99 => 
            array (
                'id_attachment' => 18142,
                'id_tabel' => 1041984,
                'file_name' => '20210112043754_577.jpg',
                'temp' => '0.7432206949807258',
                'created_at' => '2021-01-12 16:37:54',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            100 => 
            array (
                'id_attachment' => 18156,
                'id_tabel' => 1041995,
                'file_name' => '20210118081909_577.jpg',
                'temp' => '0.9097628746689479',
                'created_at' => '2021-01-18 08:19:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            101 => 
            array (
                'id_attachment' => 18195,
                'id_tabel' => 1042022,
                'file_name' => '20210125051739_577.jpg',
                'temp' => '0.7554818546144868',
                'created_at' => '2021-01-25 17:17:39',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            102 => 
            array (
                'id_attachment' => 18200,
                'id_tabel' => 1042026,
                'file_name' => '20210127085253_787.jpg',
                'temp' => '0.6978901317733728',
                'created_at' => '2021-01-27 08:52:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            103 => 
            array (
                'id_attachment' => 18204,
                'id_tabel' => 1042029,
                'file_name' => '20210129094614_787.jpg',
                'temp' => '0.7943395852776978',
                'created_at' => '2021-01-29 09:46:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            104 => 
            array (
                'id_attachment' => 18205,
                'id_tabel' => 1042030,
                'file_name' => '20210129095538_787.jpg',
                'temp' => '0.23019036763362077',
                'created_at' => '2021-01-29 09:55:38',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            105 => 
            array (
                'id_attachment' => 18206,
                'id_tabel' => 1042031,
                'file_name' => '20210129101245_787.jpg',
                'temp' => '0.15038068913033809',
                'created_at' => '2021-01-29 10:12:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            106 => 
            array (
                'id_attachment' => 18207,
                'id_tabel' => 1042032,
                'file_name' => '20210129102310_787.jpg',
                'temp' => '0.5678317469450993',
                'created_at' => '2021-01-29 10:23:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            107 => 
            array (
                'id_attachment' => 18231,
                'id_tabel' => 1042039,
                'file_name' => '20210203123852_577.jpg',
                'temp' => '0.1387790938948401',
                'created_at' => '2021-02-03 12:38:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            108 => 
            array (
                'id_attachment' => 18232,
                'id_tabel' => 1042040,
                'file_name' => '20210203124859_577.jpg',
                'temp' => '0.26512719163915155',
                'created_at' => '2021-02-03 12:48:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            109 => 
            array (
                'id_attachment' => 18234,
                'id_tabel' => 1042042,
                'file_name' => '20210204092835_787.jpg',
                'temp' => '0.36562050390335843',
                'created_at' => '2021-02-04 09:28:35',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            110 => 
            array (
                'id_attachment' => 18239,
                'id_tabel' => 1042046,
                'file_name' => '20210205010427_577.jpg',
                'temp' => '0.6863287869793906',
                'created_at' => '2021-02-05 13:04:27',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            111 => 
            array (
                'id_attachment' => 18263,
                'id_tabel' => 1042052,
                'file_name' => '20210209083609_577.jpg',
                'temp' => '0.3431088587275355',
                'created_at' => '2021-02-09 08:36:09',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            112 => 
            array (
                'id_attachment' => 18277,
                'id_tabel' => 1042058,
                'file_name' => '20210210115618_787.jpg',
                'temp' => '0.30690857320488285',
                'created_at' => '2021-02-10 11:56:18',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            113 => 
            array (
                'id_attachment' => 18315,
                'id_tabel' => 1042069,
                'file_name' => '20210216115611_577.jpg',
                'temp' => '0.10134386161522735',
                'created_at' => '2021-02-16 11:56:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            114 => 
            array (
                'id_attachment' => 18318,
                'id_tabel' => 1042072,
                'file_name' => '20210216040537_577.jpg',
                'temp' => '0.7640362775909246',
                'created_at' => '2021-02-16 16:05:37',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            115 => 
            array (
                'id_attachment' => 18320,
                'id_tabel' => 1042074,
                'file_name' => '20210218085952_577.jpg',
                'temp' => '0.7567462163573642',
                'created_at' => '2021-02-18 08:59:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            116 => 
            array (
                'id_attachment' => 18389,
                'id_tabel' => 1042095,
                'file_name' => '20210224011930_787.jpg',
                'temp' => '0.9321135947989159',
                'created_at' => '2021-02-24 13:19:30',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            117 => 
            array (
                'id_attachment' => 18401,
                'id_tabel' => 1042098,
                'file_name' => '20210224052014_577.jpg',
                'temp' => '0.8069331109279387',
                'created_at' => '2021-02-24 17:20:14',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            118 => 
            array (
                'id_attachment' => 18420,
                'id_tabel' => 1042106,
                'file_name' => '20210227073404_577.jpg',
                'temp' => '0.8952103254470138',
                'created_at' => '2021-02-27 19:34:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            119 => 
            array (
                'id_attachment' => 18463,
                'id_tabel' => 1042121,
                'file_name' => '20210303060524_577.jpg',
                'temp' => '0.746949558817539',
                'created_at' => '2021-03-03 18:05:24',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            120 => 
            array (
                'id_attachment' => 18465,
                'id_tabel' => 1042123,
                'file_name' => '20210303063401_577.jpg',
                'temp' => '0.44767034072949885',
                'created_at' => '2021-03-03 18:34:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            121 => 
            array (
                'id_attachment' => 18467,
                'id_tabel' => 1042126,
                'file_name' => '20210303081729_577.jpg',
                'temp' => '0.7814100004231976',
                'created_at' => '2021-03-03 20:17:29',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            122 => 
            array (
                'id_attachment' => 18494,
                'id_tabel' => 1042137,
                'file_name' => '20210304074908_577.jpg',
                'temp' => '0.6215860116091827',
                'created_at' => '2021-03-04 19:49:08',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            123 => 
            array (
                'id_attachment' => 18501,
                'id_tabel' => 1042140,
                'file_name' => '20210305084345_577.jpg',
                'temp' => '0.513289863765096',
                'created_at' => '2021-03-05 20:43:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            124 => 
            array (
                'id_attachment' => 18638,
                'id_tabel' => 1042187,
                'file_name' => '20210311111042_577.jpg',
                'temp' => '0.17445605224597793',
                'created_at' => '2021-03-11 11:10:42',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            125 => 
            array (
                'id_attachment' => 18650,
                'id_tabel' => 1042190,
                'file_name' => '20210312081834_787.jpg',
                'temp' => '0.10183522995664163',
                'created_at' => '2021-03-12 08:18:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            126 => 
            array (
                'id_attachment' => 18651,
                'id_tabel' => 1042191,
                'file_name' => '20210312083145_787.jpg',
                'temp' => '0.14016063207246177',
                'created_at' => '2021-03-12 08:31:45',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            127 => 
            array (
                'id_attachment' => 18833,
                'id_tabel' => 1042209,
                'file_name' => '20210315060357_577.jpg',
                'temp' => '0.6582635123396663',
                'created_at' => '2021-03-15 18:03:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            128 => 
            array (
                'id_attachment' => 18927,
                'id_tabel' => 1042239,
                'file_name' => '20210317090928_577.jpg',
                'temp' => '0.0755669250140436',
                'created_at' => '2021-03-17 09:09:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            129 => 
            array (
                'id_attachment' => 19003,
                'id_tabel' => 1042247,
                'file_name' => '20210318085502_787.jpg',
                'temp' => '0.5918600429070682',
                'created_at' => '2021-03-18 08:55:02',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            130 => 
            array (
                'id_attachment' => 19048,
                'id_tabel' => 1042250,
                'file_name' => '20210318073905_577.jpg',
                'temp' => '0.8315237679886096',
                'created_at' => '2021-03-18 19:39:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            131 => 
            array (
                'id_attachment' => 19117,
                'id_tabel' => 1042258,
                'file_name' => '20210323090757_577.jpg',
                'temp' => '0.7363388030006539',
                'created_at' => '2021-03-23 09:07:57',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            132 => 
            array (
                'id_attachment' => 19166,
                'id_tabel' => 1042266,
                'file_name' => '20210326083053_787.jpg',
                'temp' => '0.4264227859832026',
                'created_at' => '2021-03-26 08:30:53',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            133 => 
            array (
                'id_attachment' => 19170,
                'id_tabel' => 0,
                'file_name' => '20210326111152_.jpg',
                'temp' => '0.6557711495071288',
                'created_at' => '2021-03-26 11:11:52',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            134 => 
            array (
                'id_attachment' => 19234,
                'id_tabel' => 1042288,
                'file_name' => '20210329034219_577.jpg',
                'temp' => '0.6263924329038251',
                'created_at' => '2021-03-29 15:42:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            135 => 
            array (
                'id_attachment' => 19240,
                'id_tabel' => 1042293,
                'file_name' => '20210330082834_787.jpg',
                'temp' => '0.12410841146277396',
                'created_at' => '2021-03-30 08:28:34',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            136 => 
            array (
                'id_attachment' => 19256,
                'id_tabel' => 1042304,
                'file_name' => '20210331031132_577.jpg',
                'temp' => '0.0853907132869105',
                'created_at' => '2021-03-31 15:11:32',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            137 => 
            array (
                'id_attachment' => 19259,
                'id_tabel' => 1042305,
                'file_name' => '20210331043826_577.jpg',
                'temp' => '0.09691802119346704',
                'created_at' => '2021-03-31 16:38:26',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            138 => 
            array (
                'id_attachment' => 19261,
                'id_tabel' => 1042308,
                'file_name' => '20210331100459_577.jpg',
                'temp' => '0.25856750824511754',
                'created_at' => '2021-03-31 22:04:59',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            139 => 
            array (
                'id_attachment' => 19362,
                'id_tabel' => 1042345,
                'file_name' => 'diskominfowonosobo.jpg',
                'temp' => '0.8728981569366436',
                'created_at' => '2021-04-06 09:14:11',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            140 => 
            array (
                'id_attachment' => 19389,
                'id_tabel' => 1042350,
                'file_name' => 'diskominfowonosobo.jpg',
                'temp' => '0.4949691131253493',
                'created_at' => '2021-04-06 15:55:33',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            141 => 
            array (
                'id_attachment' => 19410,
                'id_tabel' => 1042359,
                'file_name' => '20210412100805_577.jpg',
                'temp' => '0.2731063463936809',
                'created_at' => '2021-04-12 10:08:05',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            142 => 
            array (
                'id_attachment' => 19412,
                'id_tabel' => 1042362,
                'file_name' => '20210412101217_577.jpg',
                'temp' => '0.6101726361912254',
                'created_at' => '2021-04-12 10:12:17',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            143 => 
            array (
                'id_attachment' => 19415,
                'id_tabel' => 1042363,
                'file_name' => '20210412033519_577.jpg',
                'temp' => '0.8704387433310692',
                'created_at' => '2021-04-12 15:35:19',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            144 => 
            array (
                'id_attachment' => 19417,
                'id_tabel' => 1042365,
                'file_name' => '20210412110716_577.jpg',
                'temp' => '0.7591748870962645',
                'created_at' => '2021-04-12 23:07:16',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            145 => 
            array (
                'id_attachment' => 19449,
                'id_tabel' => 1042378,
                'file_name' => '20210415034441_577.jpg',
                'temp' => '0.38349011583739423',
                'created_at' => '2021-04-15 15:44:41',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            146 => 
            array (
                'id_attachment' => 19501,
                'id_tabel' => 0,
                'file_name' => '20210426024804_.jpg',
                'temp' => '0.13615533100571198',
                'created_at' => '2021-04-26 14:48:04',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            147 => 
            array (
                'id_attachment' => 19503,
                'id_tabel' => 1042407,
                'file_name' => '20210426030307_577.jpg',
                'temp' => '0.4718174798177379',
                'created_at' => '2021-04-26 15:03:07',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            148 => 
            array (
                'id_attachment' => 19506,
                'id_tabel' => 1042396,
                'file_name' => '20210427084110_787.jpg',
                'temp' => '0.4725311319695289',
                'created_at' => '2021-04-27 08:41:10',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            149 => 
            array (
                'id_attachment' => 19519,
                'id_tabel' => 1042414,
                'file_name' => '20210428084101_577.jpg',
                'temp' => '0.7602617099296312',
                'created_at' => '2021-04-28 08:41:01',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            150 => 
            array (
                'id_attachment' => 19523,
                'id_tabel' => 1042418,
                'file_name' => '20210428015328_577.jpg',
                'temp' => '0.04605753234224985',
                'created_at' => '2021-04-28 13:53:28',
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            151 => 
            array (
                'id_attachment' => 19524,
                'id_tabel' => 1042397,
                'file_name' => '20210426030308_577.jpg',
                'temp' => '0.84364736743',
                'created_at' => NULL,
                'updated_at' => NULL,
                'delete_at' => NULL,
            ),
            152 => 
            array (
                'id_attachment' => 19525,
                'id_tabel' => 1042419,
                'file_name' => '20210504090339-1_577.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-04 09:03:39',
                'updated_at' => '2021-05-04 09:03:39',
                'delete_at' => NULL,
            ),
            153 => 
            array (
                'id_attachment' => 19526,
                'id_tabel' => 1042420,
                'file_name' => '20210504090833-1_577.png',
                'temp' => NULL,
                'created_at' => '2021-05-04 09:08:33',
                'updated_at' => '2021-05-04 09:08:33',
                'delete_at' => NULL,
            ),
            154 => 
            array (
                'id_attachment' => 19527,
                'id_tabel' => 1042421,
                'file_name' => '20210505031222-1_577.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-05 15:12:22',
                'updated_at' => '2021-05-05 15:12:22',
                'delete_at' => NULL,
            ),
            155 => 
            array (
                'id_attachment' => 19528,
                'id_tabel' => 1042422,
                'file_name' => '20210505031430-1_577.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-05 15:14:30',
                'updated_at' => '2021-05-05 15:14:30',
                'delete_at' => NULL,
            ),
            156 => 
            array (
                'id_attachment' => 19529,
                'id_tabel' => 1042423,
                'file_name' => '20210505031609-1_577.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-05 15:16:09',
                'updated_at' => '2021-05-05 15:16:09',
                'delete_at' => NULL,
            ),
            157 => 
            array (
                'id_attachment' => 19530,
                'id_tabel' => 1042424,
                'file_name' => '20210510083052-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-10 08:30:52',
                'updated_at' => '2021-05-10 08:30:52',
                'delete_at' => NULL,
            ),
            158 => 
            array (
                'id_attachment' => 19532,
                'id_tabel' => 1042425,
                'file_name' => '20210510083607-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-10 08:36:07',
                'updated_at' => '2021-05-10 08:36:07',
                'delete_at' => NULL,
            ),
            159 => 
            array (
                'id_attachment' => 19533,
                'id_tabel' => 1042426,
                'file_name' => 'diskominfo.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-10 08:53:05',
                'updated_at' => '2021-05-10 08:53:05',
                'delete_at' => NULL,
            ),
            160 => 
            array (
                'id_attachment' => 19534,
                'id_tabel' => 1042427,
                'file_name' => '20210510085648-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-10 08:56:48',
                'updated_at' => '2021-05-10 08:56:48',
                'delete_at' => NULL,
            ),
            161 => 
            array (
                'id_attachment' => 19535,
                'id_tabel' => 1042428,
                'file_name' => '20210510090418-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-10 09:04:19',
                'updated_at' => '2021-05-10 09:04:19',
                'delete_at' => NULL,
            ),
            162 => 
            array (
                'id_attachment' => 19536,
                'id_tabel' => 1042429,
                'file_name' => '20210510075617-1_577.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-10 19:56:17',
                'updated_at' => '2021-05-10 19:56:17',
                'delete_at' => NULL,
            ),
            163 => 
            array (
                'id_attachment' => 19545,
                'id_tabel' => 1042431,
                'file_name' => '20210518120814-1_577.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-18 12:08:14',
                'updated_at' => '2021-05-18 12:08:14',
                'delete_at' => NULL,
            ),
            164 => 
            array (
                'id_attachment' => 19546,
                'id_tabel' => 1042432,
                'file_name' => '20210518120954-1_577.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-18 12:09:54',
                'updated_at' => '2021-05-18 12:09:54',
                'delete_at' => NULL,
            ),
            165 => 
            array (
                'id_attachment' => 19547,
                'id_tabel' => 1042432,
                'file_name' => 'diskominfo.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-19 12:37:07',
                'updated_at' => '2021-05-19 12:37:07',
                'delete_at' => NULL,
            ),
            166 => 
            array (
                'id_attachment' => 19548,
                'id_tabel' => 1042433,
                'file_name' => 'diskominfo.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-19 12:41:33',
                'updated_at' => '2021-05-19 12:41:33',
                'delete_at' => NULL,
            ),
            167 => 
            array (
                'id_attachment' => 19551,
                'id_tabel' => 1042434,
                'file_name' => '20210519125834-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-19 12:58:34',
                'updated_at' => '2021-05-19 12:58:34',
                'delete_at' => NULL,
            ),
            168 => 
            array (
                'id_attachment' => 19552,
                'id_tabel' => 1042435,
                'file_name' => 'diskominfowonosobo.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-19 13:11:01',
                'updated_at' => '2021-05-19 13:11:01',
                'delete_at' => NULL,
            ),
            169 => 
            array (
                'id_attachment' => 19553,
                'id_tabel' => 1042432,
                'file_name' => '20210528021957-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-28 14:19:57',
                'updated_at' => '2021-05-28 14:19:57',
                'delete_at' => NULL,
            ),
            170 => 
            array (
                'id_attachment' => 19554,
                'id_tabel' => 1042433,
                'file_name' => 'diskominfowonosobo.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-28 14:24:30',
                'updated_at' => '2021-05-28 14:24:30',
                'delete_at' => NULL,
            ),
            171 => 
            array (
                'id_attachment' => 19555,
                'id_tabel' => 1042434,
                'file_name' => 'diskominfowonosobo.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-28 14:26:14',
                'updated_at' => '2021-05-28 14:26:14',
                'delete_at' => NULL,
            ),
            172 => 
            array (
                'id_attachment' => 19556,
                'id_tabel' => 1042435,
                'file_name' => 'diskominfowonosobo.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-28 14:28:30',
                'updated_at' => '2021-05-28 14:28:30',
                'delete_at' => NULL,
            ),
            173 => 
            array (
                'id_attachment' => 19557,
                'id_tabel' => 1042438,
                'file_name' => '20210528023225-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-28 14:32:25',
                'updated_at' => '2021-05-28 14:32:25',
                'delete_at' => NULL,
            ),
            174 => 
            array (
                'id_attachment' => 19562,
                'id_tabel' => 1042439,
                'file_name' => '20210528095206-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-28 21:52:06',
                'updated_at' => '2021-05-28 21:52:06',
                'delete_at' => NULL,
            ),
            175 => 
            array (
                'id_attachment' => 19563,
                'id_tabel' => 1042440,
                'file_name' => '20210528095725-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-28 21:57:25',
                'updated_at' => '2021-05-28 21:57:25',
                'delete_at' => NULL,
            ),
            176 => 
            array (
                'id_attachment' => 19564,
                'id_tabel' => 1042441,
                'file_name' => '20210528095901-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-28 21:59:01',
                'updated_at' => '2021-05-28 21:59:01',
                'delete_at' => NULL,
            ),
            177 => 
            array (
                'id_attachment' => 19565,
                'id_tabel' => 1042442,
                'file_name' => '20210528100036-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-28 22:00:36',
                'updated_at' => '2021-05-28 22:00:36',
                'delete_at' => NULL,
            ),
            178 => 
            array (
                'id_attachment' => 19566,
                'id_tabel' => 1042443,
                'file_name' => '20210531053915-1_1.jpg',
                'temp' => NULL,
                'created_at' => '2021-05-31 17:39:15',
                'updated_at' => '2021-05-31 17:39:15',
                'delete_at' => NULL,
            ),
        ));
        
        
    }
}
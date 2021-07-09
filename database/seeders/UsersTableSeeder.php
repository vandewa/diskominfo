<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Superadmin',
                'email' => 'superadmin@app.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$iaFDvfu0za8ldbEnp/gmTu0zcRayGRWrZuBjP9G2XWo.b.WUcSdXO',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-07-02 10:43:34',
                'updated_at' => '2021-07-02 10:43:34',
                'level' => 'admin',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Writer',
                'email' => 'writer@app.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$YujvtZQhnnooJelhiXGFyOOBhzQOn02gCw5KCOh74BJmpPkvcoa8S',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-07-02 10:43:34',
                'updated_at' => '2021-07-02 10:43:34',
                'level' => 'admin',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dc Team',
                'email' => 'dc_team@app.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZyjwouOUpBxn6HaLTZnlmuIOkj0q53mHNLj4UJ2eYd5zWqAb3XUoK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-07-02 10:43:34',
                'updated_at' => '2021-07-02 10:43:34',
                'level' => 'admin',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'DISKOMINFO',
                'email' => 'diskominfo@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$IGsnvcsQUY33mmsW1.Un2OEIj2V/0nhWL8/4TCm2XBp0D9IL5ok2W',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-03-06 14:56:44',
                'updated_at' => '2021-06-29 09:22:18',
                'level' => 'admin',
            ),
            4 => 
            array (
                'id' => 535,
                'name' => 'DISKOTIK',
                'email' => 'diskotik@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$iCfgfdxoY4r9p8qBB3iJ7OwTwzo0alVzvj5mgH1uvus.JL5PObF9q',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-04-05 09:41:36',
                'updated_at' => '2021-06-29 09:22:03',
                'level' => 'admin',
            ),
            5 => 
            array (
                'id' => 536,
                'name' => 'DISKOMINFO',
                'email' => 'diskominfoo@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cal9PCh8qa8iT0N4obZ4uusWXQmEANfzmq.uU8ZgIHILKmhb5Xdl6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-03-29 11:45:14',
                'updated_at' => '2021-06-29 09:22:29',
                'level' => 'admin',
            ),
            6 => 
            array (
                'id' => 546,
                'name' => 'SADDAM',
                'email' => 'saddam@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$M9Lcz8MNjwqREKOz1uT.Q.3BjxujtAUnyo9ntgmfbxSa5y8lP6jX.',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-04-05 09:42:10',
                'updated_at' => '2021-06-29 09:24:22',
                'level' => 'admin',
            ),
            7 => 
            array (
                'id' => 551,
                'name' => 'HUDA',
                'email' => 'huda@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$jjq3jBWRaqaYRUfsd2VNourlDUA/QnMHppVXPIZITU0mda70rn8/W',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-04-05 09:42:40',
                'updated_at' => '2021-06-29 09:23:42',
                'level' => 'admin',
            ),
            8 => 
            array (
                'id' => 577,
                'name' => 'ZAKI MUHAMMAD',
                'email' => 'zaki@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$b3sJHVSRkQllIHn2qf/J/uDNerqbnWw2XtruljDhr4GNt3acl3SOK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-03-25 07:54:21',
                'updated_at' => '2021-06-29 09:19:34',
                'level' => 'admin',
            ),
            9 => 
            array (
                'id' => 578,
                'name' => 'RATNA SULISTIYANI, S.Kom.MM',
                'email' => 'ratna@gmail.com',
                'nip' => '197601022002122007',
                'jabatan' => 'Kepala Seksi Tata Kelola Teknologi Informasi Dan Kemitraan Bidang Informatika Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '081392338000',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f01VR/SnioZy4BOPh0Zpuu/tqxCKnMRVEwMrZuHJO6eN9T0VwaNde',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-03-25 07:55:19',
                'updated_at' => '2021-07-05 15:09:20',
                'level' => 'admin',
            ),
            10 => 
            array (
                'id' => 581,
                'name' => 'ANITA MARTILOFA, A.Md',
                'email' => 'anitamartilofa@gmail.com',
                'nip' => '198211122005012014',
                'jabatan' => 'Pengelola Keamanan Sistem Informasi',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '085227783515',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1Cv3aeZCMLoP1HXG1mf5t.teldSUpG4HTug63pjBMDTzYb0IwnBKq',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-04-05 09:43:08',
                'updated_at' => '2021-07-05 14:56:55',
                'level' => 'superadmin',
            ),
            11 => 
            array (
                'id' => 589,
                'name' => 'SETO RITMA RUMEKSO',
                'email' => 'seto@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$7/vTJDdhNL/gLjSAwF28iu0BjY4c8qpA7VL/LURlkkIsQvuOyoaWe',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-04-05 09:43:55',
                'updated_at' => '2021-06-29 09:21:39',
                'level' => 'admin',
            ),
            12 => 
            array (
                'id' => 706,
                'name' => 'LAYLY',
                'email' => 'layly@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$IwuXSZdcq2KPsxVaySUbJOB0.Yxymtc5x2FAxKnl9.19I.DjXnL5e',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-04-05 09:44:19',
                'updated_at' => '2021-06-29 09:24:07',
                'level' => 'admin',
            ),
            13 => 
            array (
                'id' => 722,
                'name' => 'ILHAM',
                'email' => 'ilham@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$ttjTH3K2i.rtwVjbSHTJreKW6NqfV.haqjj3nMGkabxidkOUemk.u',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-04-05 09:44:45',
                'updated_at' => '2021-06-29 09:23:53',
                'level' => 'admin',
            ),
            14 => 
            array (
                'id' => 784,
                'name' => 'ANITA VIRA',
                'email' => 'vira@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$qSCElRL38B15sttyIdPvxeUngpnh.TBVnynAp.C25o0wEYvksO4qK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-04-05 09:45:05',
                'updated_at' => '2021-06-29 09:19:44',
                'level' => 'admin',
            ),
            15 => 
            array (
                'id' => 787,
                'name' => 'SADDAM',
                'email' => 'sadam@gmail.com',
                'nip' => NULL,
                'jabatan' => NULL,
                'opd' => NULL,
                'no_hp' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$t2NIAKUmStQrqzV9MhdCHuF49ye5G4aWQ4KI/mA6o0GXVdr9zVk1C',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-03-25 07:50:31',
                'updated_at' => '2021-06-29 09:24:34',
                'level' => 'admin',
            ),
            16 => 
            array (
                'id' => 790,
                'name' => 'EKO SURYANTORO, S.Sos., M.Si.',
                'email' => 'ekosuryantoro@gmail.com',
                'nip' => '196310261991031004',
                'jabatan' => 'Kepala Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '08122773313',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nbtTP.ERl4tHfJZEK2sfe.TsmgnLdOTxUTOJ.k8.KFbL4NWXY4PrW',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-28 21:39:56',
                'updated_at' => '2021-07-05 15:04:32',
                'level' => 'admin',
            ),
            17 => 
            array (
                'id' => 791,
                'name' => 'WINARNINGSIH, S.H.',
                'email' => 'winarningsih@gmail.com',
                'nip' => '196506041990032007',
                'jabatan' => 'Sekretaris Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '08122513172',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EugbCG74uK4R7W1u8t3oKOY21cAS0FfkuawwN4E8czKS1f176/wdS',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 07:57:15',
                'updated_at' => '2021-07-05 15:14:09',
                'level' => 'admin',
            ),
            18 => 
            array (
                'id' => 794,
                'name' => 'Drs. GANESWARA WIBAWA, M.M',
                'email' => 'Ganeswarawibawa@gmail.com',
                'nip' => '196801041992031008',
                'jabatan' => 'Kepala Seksi Pelayanan Informasi Publik Dan Pemberdayaan Komunikasi Sosial Bidang Informasi Dan Komunikasi Publik Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '085292151390',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p/A0pHPS9rwnbDOrNK96Yeq0f78Jphvz8tnjyCpCGPfLktqibUkim',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 07:58:13',
                'updated_at' => '2021-07-05 15:01:53',
                'level' => 'admin',
            ),
            19 => 
            array (
                'id' => 795,
                'name' => 'HAPIPI, S.Kom',
                'email' => 'hapipi@gmail.com',
                'nip' => '197607132003121007',
                'jabatan' => 'Kepala Bidang Informasi Dan Komunikasi Publik Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '085228496532',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8AxdrFYlIkPP6l2QrYSM2ebjCqgrFSm.wyVBV57KORh5U0ZRC9vBS',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:00:14',
                'updated_at' => '2021-07-05 15:06:31',
                'level' => 'admin',
            ),
            20 => 
            array (
                'id' => 796,
                'name' => 'WIBOWO MARGITO, S.Kom.',
                'email' => 'wibowomargito@gmail.com',
                'nip' => '196808122002121007',
                'jabatan' => 'Kepala Seksi Pengembangan Aplikasi Dan Telematika Bidang Informatika Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '0816337803',
                'email_verified_at' => NULL,
                'password' => '$2y$10$A32UFzc1Q/F/W8upvVNdluBxD1yP.CoIZX1iWgjhMc/eshxn7.IGC',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:01:10',
                'updated_at' => '2021-07-05 15:13:39',
                'level' => 'admin',
            ),
            21 => 
            array (
                'id' => 797,
                'name' => 'WAJIRAN, S.IP,MPH',
                'email' => 'wajiran@gmail.com',
                'nip' => '197007081991011001',
                'jabatan' => 'Kepala Seksi Teknik Komunikasi Jaringan Dan Persandian Bidang Informatika Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '085878337788',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4jeIp1WbDLnAz6G9ikxu4.TEN0HtWwze1tqvNcBt6TPl3k09vwmWy',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:01:57',
                'updated_at' => '2021-07-05 15:13:00',
                'level' => 'admin',
            ),
            22 => 
            array (
                'id' => 798,
                'name' => 'NOOR ABDILLAH, S.Kom.',
                'email' => 'noorabdillah@gmail.com',
                'nip' => '197111292002121004',
                'jabatan' => 'Kepala Sub Bagian Perencanaan, Evaluasi Dan Pelaporan Sekretariat Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '081327012727',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SCzpx8Q0c1ZC1LeZYwtF2OUW6VnJgi2YWNZJsmPIXhB6Jb4/bRDz.',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:02:53',
                'updated_at' => '2021-07-05 15:08:09',
                'level' => 'admin',
            ),
            23 => 
            array (
                'id' => 799,
                'name' => 'FAHRUDIN AZIS, S.Sn.',
                'email' => 'fahrudinazis@gmail.com',
                'nip' => '197710122006041007',
                'jabatan' => 'Kepala Seksi Pengembangan Sumber Daya Manusia Dan Kerjasama Media Bidang Informasi Dan Komunikasi Publik Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '085727244722',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rizngTW6hp5ExpR9ndrLpu/WIcyY1ysAG71dIjkBhoZA7bSQwN7ly',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:03:52',
                'updated_at' => '2021-07-05 15:05:07',
                'level' => 'admin',
            ),
            24 => 
            array (
                'id' => 800,
                'name' => 'PRIYO CAHYONO, SSTP',
                'email' => 'priyocahyono@gmail.com',
                'nip' => '198201112001121003',
                'jabatan' => 'Kepala Seksi Pengelolaan Informasi Publik Bidang Informasi Dan Komunikasi Publik Dinas Komunikasi Dan Informatika',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '081335982666',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KFh.821td1M2XW1DV8ai7eA11QBs.I6oEo/fXBUC90M.EobTd9GX.',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:04:36',
                'updated_at' => '2021-07-05 15:08:43',
                'level' => 'admin',
            ),
            25 => 
            array (
                'id' => 801,
                'name' => 'SUWARTI',
                'email' => 'suwarti@gmail.com',
                'nip' => '196701011989032018',
                'jabatan' => 'Pengadministrasi Keuangan',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '085325698383',
                'email_verified_at' => NULL,
                'password' => '$2y$10$z83oLxe4EwsNS3xu9HF7BuMPve7lxO2RwWQ91ZX/wCn/Z2JkPGTOW',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:06:12',
                'updated_at' => '2021-07-05 15:11:27',
                'level' => 'admin',
            ),
            26 => 
            array (
                'id' => 802,
                'name' => 'DANANG HARI PURNOMO, S.Kom',
                'email' => 'danangharipurnomo@gmail.com',
                'nip' => '197904282009031002',
                'jabatan' => 'Pranata Komputer Pertama',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '08522966966',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XunkV43q9l/9dgpiFk3l/OKm8hyha6Nb9CWuZ6orFXE/nT2Z7.d2m',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:06:57',
                'updated_at' => '2021-07-05 15:00:41',
                'level' => 'admin',
            ),
            27 => 
            array (
                'id' => 803,
                'name' => 'SETYO HARYANTO',
                'email' => 'setyoharyanto@gmail.com',
                'nip' => '197111162007011009',
                'jabatan' => 'Analis Organisasi',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '081327045321',
                'email_verified_at' => NULL,
                'password' => '$2y$10$itNC/TDsTYlRpLS9g1YO8.QQ6EDLNvbOmsnzEudwkIGkcNCQ.eiUa',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:08:19',
                'updated_at' => '2021-07-05 15:10:49',
                'level' => 'admin',
            ),
            28 => 
            array (
                'id' => 804,
                'name' => 'AGUNG WIBAWANTO',
                'email' => 'agungwibawanto@gmail.com',
                'nip' => '196910262007011009',
                'jabatan' => 'Analis Perencanaan Evaluasi Dan Pelaporan',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '081391642388',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zM2fwWQ/Xpa/RM0Gi.RIiuvxSXo61KT1K6q183yRbHy40641qJG/u',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:09:23',
                'updated_at' => '2021-07-05 14:56:09',
                'level' => 'admin',
            ),
            29 => 
            array (
                'id' => 805,
                'name' => 'DAMAR WISNU CANDRA PRABOWO, S.Kom',
                'email' => 'damar@gmail.com',
                'nip' => '199106252020121011',
                'jabatan' => 'Analis Sistem Informasi Dan Jaringan',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '085799208328',
                'email_verified_at' => NULL,
                'password' => '$2y$10$giN9PYkp7KiJ1E.ump7Xlepi7Cd7taC1ictP/osGGaGa.ukcolQHS',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:10:22',
                'updated_at' => '2021-07-05 14:59:45',
                'level' => 'superadmin',
            ),
            30 => 
            array (
                'id' => 806,
                'name' => 'ASEP GINANJAR PUTRA, S.Ds.',
                'email' => 'asepginanjar@gmail.com',
                'nip' => '199311292020121012',
                'jabatan' => 'Penyusun Bahan Informasi Dan Publikasi',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '082242751030',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4f3cyZ5PmyCeAdSjG/8HvunQre/Jc1wnhIdRNE.yog2pwTvh7Wa.2',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:11:08',
                'updated_at' => '2021-07-05 14:58:20',
                'level' => 'admin',
            ),
            31 => 
            array (
                'id' => 807,
                'name' => 'YUNI MUJI LESTARI, A.Md.',
                'email' => 'yunimujilestari@gmail.com',
                'nip' => '198306072011012018',
                'jabatan' => 'Pranata Komputer Pelaksana',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '081328114696',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZmdXrOZhQIzw8OCUG5FY9u9U6ih/CLJqPO77DXfDLtFZ7ddB6cJX6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:12:27',
                'updated_at' => '2021-07-05 15:14:59',
                'level' => 'admin',
            ),
            32 => 
            array (
                'id' => 808,
                'name' => 'RICHARD RIYANTO',
                'email' => 'richardriyanto@gmail.com',
                'nip' => '197507152007011016',
                'jabatan' => 'Operator Sandi Dan Telekomunikasi',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '081225437944',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Jx/HV0GWGJL22kf9UFYAQOTCrSD4aufK58sJLHTbAUMX8sXf1594y',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:13:19',
                'updated_at' => '2021-07-05 15:09:52',
                'level' => 'admin',
            ),
            33 => 
            array (
                'id' => 809,
                'name' => 'DWI PUJI HARYONO',
                'email' => 'dwipujiharyono@gmail.com',
                'nip' => '197403082009011003',
                'jabatan' => 'Pengadministrasi Analisis Dan Kemitraan Media',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '085227851848',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pihgdJjnl2/aJXJZe2lNE.H3qDz4ZLAOOeRdCEIXYkbjXv95ui2Aq',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:14:40',
                'updated_at' => '2021-07-05 15:07:18',
                'level' => 'admin',
            ),
            34 => 
            array (
                'id' => 810,
                'name' => 'USMAN RIFA`I',
                'email' => 'usmanrifai@gmail.com',
                'nip' => '197712072014061001',
                'jabatan' => 'Pengadministrasi Umum',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '082135269982',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fbJe4/HBiYV5uUHI.7Ke9OQBqURcEvO/NDbQ8WurqtMg2oKOrQhFa',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => 'kominfo.png',
                'created_at' => '2021-06-29 08:18:26',
                'updated_at' => '2021-07-05 15:11:56',
                'level' => 'admin',
            ),
            35 => 
            array (
                'id' => 1000,
                'name' => 'DEVAN DEWANANTA, S.Kom',
                'email' => 'devandewananta@gmail.com',
                'nip' => '199703032020121012',
                'jabatan' => 'Analis Sistem Informasi',
                'opd' => 'Dinas Komunikasi Dan Informatika',
                'no_hp' => '089604484626',
                'email_verified_at' => NULL,
                'password' => '$2y$10$S6dyiJmRRzhPN/j8Mhc/ae4RLaTIpVy0MNnubm0e1zhxBPMPO7TRq',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '8mQu02TZMW5d6XhLubrRzRdQllUKMsvAPmr4GKd6ynRXXv3PoLY9Bvgz5pw5',
                'current_team_id' => NULL,
                'profile_photo_path' => 'Devan Dewananta.jpg',
                'created_at' => '2021-02-25 07:58:46',
                'updated_at' => '2021-07-05 15:01:05',
                'level' => 'superadmin',
            ),
        ));
        
        
    }
}
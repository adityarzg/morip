<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function getDataPerkara()
    {
        $q = "SELECT DISTINCT 
        `perkara`.`nomor_perkara`, 
        `perkara`.`tanggal_pendaftaran`,

        `jenis_pihak`.`nama` AS `Jenis Pihak 1`,
        `perkara_pihak1`.`nama` AS `Pihak 1`, 
        `pihak`.`nomor_indentitas` AS `No ID Pihak 1`,
        `negara`.`nama` AS `Kewarganegaraan Pihak 1`,
        `pihak`.`pekerjaan` AS `Pekerjaan Pihak 1`,
        `perkara_pihak1`.`alamat` AS `Alamat Pihak 1`,
        `perkara`.`pengacara_pihak1` AS `Kuasa Hukum 1`,
        
        `jenis_pihak2`.`nama` AS `Jenis Pihak 2`,
        `perkara_pihak2`.`nama` AS `Pihak 2`,
        `perkara_pihak2`.`alamat` AS `Alamat Pihak 2`,

        `jenis_pihak3`.`nama` AS `Jenis Pihak 3`,
        `perkara_pihak3`.`nama` AS `Pihak 3`,
        `pihak_3`.`nomor_indentitas` AS `No ID Pihak 3`,
        `negara_pihak3`.`nama` AS `Kewarganegaraan Pihak 3`,
        `pihak_3`.`pekerjaan` AS `Pekerjaan Pihak 3`,
        `perkara_pihak3`.`alamat` AS `Alamat Pihak 3`,
        `perkara`.`pengacara_pihak3` AS `Kuasa Hukum 3`,

        `perkara`.`posita` AS `Posita`,
        `perkara`.`petitum` AS `Petitum`,
        
        `perkara_dismissal`.`hasil` AS `hasil`,
        `perkara_dismissal`.`tanggal_penetapan` AS `Tanggal Penetapan Dismissal`,
        `perkara_dismissal`.`amar` AS `Amar Penetapan Dismissal`,
        `perkara_dismissal`.`pemberitahuan_penggugat` AS `Tanggal Pemberitahuan Penetapan Dismissal`,

        `perkara_penetapan`.`jenis_acara` AS `Jenis Acara`,
        `perkara_penetapan`.`penetapan_majelis_hakim` AS `Tanggal Penetapan Majelis Hakim`,
        `perkara_penetapan`.`penetapan_panitera_pengganti` AS `Tanggal Penetapan Panitera Pengganti`,
        `perkara_penetapan`.`majelis_hakim_text` AS `Majelis Hakim`,
        `perkara_penetapan`.`panitera_pengganti_text` AS `Panitera Pengganti`,
        `perkara_persiapan`.`tanggal_penetapan_persiapan` AS `Tanggal Penetepan Hari Pemeriksaan Persiapan`,
        `perkara_persiapan_proses`.`tanggal_musyawarah` AS `Tanggal Pemeriksaan Persiapan`,
        `perkara_penetapan`.`penetapan_hari_sidang` AS `Tanggal Penetapan Hari Sidang`,
        `perkara_penetapan`.`sidang_pertama` AS `Tanggal Sidang`,
        
        `perkara_putusan`.`tanggal_putusan` AS `Tanggal Putusan`,
        `perkara_putusan`.`amar_putusan` AS `Amar Putusan`,
        `perkara_putusan`.`pemberitahuan_putusan` AS `Tanggal Pemberitahuan Putusan`,

        `perkara_banding`.`permohonan_banding` AS `Tanggal Akta Permohonan Banding`,
        `perkara_banding`.`putusan_banding` AS `Tanggal Putusan Banding`,

        `perkara_kasasi`.`permohonan_kasasi` AS `Tanggal Akta Permohonan Kasasi`,
        `perkara_banding`.`nomor_perkara_banding` AS `Nomor Perkara Banding`,
        `perkara_kasasi`.`putusan_kasasi` AS `Tanggal Putusan Kasasi`,

        `perkara_pk`.`permohonan_pk` AS `Tanggal Akta Permohonan Peninjauan Kembali`,
        `perkara_pk`.`putusan_pk` AS `Tanggal Putusan Peninjauan Kembali`,

        `perkara_eksekusi`.`permohonan_eksekusi` AS `Tanggal Permohonan Eksekusi`,
        `perkara_eksekusi`.`panggilan_parapihak` AS `Tanggal Panggilan Para Pihak`,
        `perkara_eksekusi`.`penetapan_ketua` AS `Tanggal Penetapan Eksekusi`,

        `perkara`.`tahapan_terakhir_text` AS `Tahapan Sidang`

        FROM `perkara`
        
        LEFT JOIN `perkara_pihak1` ON `perkara`.`perkara_id` = `perkara_pihak1`.`perkara_id`
        LEFT JOIN `perkara_pihak2` ON `perkara`.`perkara_id` = `perkara_pihak2`.`perkara_id`
        LEFT JOIN `perkara_pihak3` ON `perkara`.`perkara_id` = `perkara_pihak3`.`perkara_id`

        LEFT JOIN `pihak` ON `perkara_pihak1`.`pihak_id` = `pihak`.`id`
        LEFT JOIN `pihak` AS `pihak_2` ON `perkara_pihak2`.`pihak_id` = `pihak_2`.`id`
        LEFT JOIN `pihak` AS `pihak_3` ON `perkara_pihak3`.`pihak_id` = `pihak_3`.`id`

        LEFT JOIN `negara` ON `pihak`.`warga_negara_id` = `negara`.`id`
        LEFT JOIN `negara` AS `negara_pihak3` ON `pihak_3`.`warga_negara_id` = `negara_pihak3`.`id`

        LEFT JOIN `jenis_pihak` ON `perkara_pihak1`.`jenis_pihak_id` = `jenis_pihak`.`id` && `jenis_pihak`.`jenis_pengadilan` = 1
        LEFT JOIN `jenis_pihak` AS `jenis_pihak2` ON `perkara_pihak2`.`jenis_pihak_id` = `jenis_pihak2`.`id` && `jenis_pihak2`.`jenis_pengadilan` = 1
        LEFT JOIN `jenis_pihak` AS `jenis_pihak3` ON `perkara_pihak3`.`jenis_pihak_id` = `jenis_pihak3`.`id` && `jenis_pihak3`.`jenis_pengadilan` = 1

        LEFT JOIN `perkara_dismissal` ON `perkara`.`perkara_id` = `perkara_dismissal`.`perkara_id`
        LEFT JOIN `perkara_penetapan` ON `perkara`.`perkara_id` = `perkara_penetapan`.`perkara_id`
        LEFT JOIN `perkara_persiapan` ON `perkara`.`perkara_id` = `perkara_persiapan`.`perkara_id`
        LEFT JOIN `perkara_persiapan_proses` ON `perkara`.`perkara_id` = `perkara_persiapan_proses`.`perkara_id` && `perkara_persiapan_proses`.`urutan` = 1
        LEFT JOIN `perkara_putusan` ON `perkara`.`perkara_id` = `perkara_putusan`.`perkara_id`

        LEFT JOIN `perkara_banding` ON `perkara`.`perkara_id` = `perkara_banding`.`perkara_id`
        LEFT JOIN `perkara_kasasi` ON `perkara`.`perkara_id` = `perkara_kasasi`.`perkara_id`
        LEFT JOIN `perkara_pk` ON `perkara`.`perkara_id` = `perkara_pk`.`perkara_id`
        LEFT JOIN `perkara_eksekusi` ON `perkara`.`perkara_id` = `perkara_eksekusi`.`perkara_id`


        GROUP BY `perkara`.`nomor_perkara`
        ORDER BY `perkara`.`perkara_id` DESC";
        return $this->db->query($q)->result_array();
        //return var_dump($cek);
    }
}


// SELECT 
// jap.jenis_perkara_id, 
// jp.nama, 
// hit.sisa, 
// hit.masuk, 
// hit.dismissal, 
// hit.perlawanan, 
// hit.cabut, 
// hit.putusan, 
// hit.belumminutasi, 
// hit.banding, 
// hit.kasasi, 
// hit.pk, 
// hit.eksekusi 

// FROM jenis_alur_perkara AS jap 

// LEFT JOIN jenis_perkara AS jp ON jp.id=jap.jenis_perkara_id LEFT JOIN ( SELECT t.jenis_perkara_id, SUM(IF(LEFT(t.tanggal_pendaftaran,4)<'2022' AND (t.tanggal_putusan IS NULL OR LEFT(t.tanggal_putusan,4) >= '2022'),1,0)) AS sisa, SUM(IF(LEFT(t.tanggal_pendaftaran,4)='2022',1,0)) AS masuk, SUM(IF(LEFT(dis.tanggal_penetapan,4)='2022',1,0)) AS dismissal, SUM(IF(LEFT(t.tanggal_pendaftaran_verzet,4)='2022',1,0)) AS perlawanan, SUM(IF(t.tanggal_cabut IS NOT NULL AND LEFT(t.tanggal_cabut,4)='2022',1,0)) AS cabut, SUM(IF(t.tanggal_putusan IS NOT NULL AND LEFT(t.tanggal_putusan,4)='2022',1,0)) AS putusan, SUM(IF(LEFT(t.tanggal_pendaftaran,4)<='2022' AND LEFT(t.tanggal_minutasi,4)='2022',1,0)) AS belumminutasi, SUM(IF(LEFT(banding.permohonan_banding,4)='2022',1,0)) AS banding, SUM(IF(LEFT(kasasi.permohonan_kasasi,4)='2022',1,0)) AS kasasi, SUM(IF(LEFT(pk.permohonan_pk,4)='2022',1,0)) AS pk, SUM(IF(LEFT(eksekusi.permohonan_eksekusi,4),1,0)) AS eksekusi FROM v_perkara AS t LEFT JOIN perkara_dismissal AS dis ON dis.perkara_id=t.perkara_id LEFT JOIN perkara_banding AS banding ON banding.perkara_id=t.perkara_id LEFT JOIN perkara_kasasi AS kasasi ON kasasi.perkara_id=t.perkara_id LEFT JOIN perkara_pk AS pk ON pk.perkara_id=t.perkara_id LEFT JOIN perkara_eksekusi AS eksekusi ON eksekusi.perkara_id=t.perkara_id WHERE t.alur_perkara_id IN (9,10,11,12,13,14) GROUP BY jenis_perkara_id ) AS hit ON jap.jenis_perkara_id=hit.jenis_perkara_id WHERE jap.alur_perkara_id IN (9,10,11,12,13,14)
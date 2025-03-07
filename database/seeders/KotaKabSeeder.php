<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaKabSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        $kota = [
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1101",
                "nama_kab_kota" => "KAB ACEH SELATAN"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1102",
                "nama_kab_kota" => "KAB ACEH TENGGARA"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1103",
                "nama_kab_kota" => "KAB ACEH TIMUR"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1104",
                "nama_kab_kota" => "KAB ACEH TENGAH"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1105",
                "nama_kab_kota" => "KAB ACEH BARAT"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1106",
                "nama_kab_kota" => "KAB ACEH BESAR"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1107",
                "nama_kab_kota" => "KAB PIDIE"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1108",
                "nama_kab_kota" => "KAB ACEH UTARA"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1109",
                "nama_kab_kota" => "KAB SIMEULUE"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1110",
                "nama_kab_kota" => "KAB ACEH SINGKIL"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1111",
                "nama_kab_kota" => "KAB BIREUEN"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1112",
                "nama_kab_kota" => "KAB ACEH BARAT DAYA"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1113",
                "nama_kab_kota" => "KAB GAYO LUES"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1114",
                "nama_kab_kota" => "KAB ACEH JAYA"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1115",
                "nama_kab_kota" => "KAB NAGAN RAYA"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1116",
                "nama_kab_kota" => "KAB ACEH TAMIANG"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1117",
                "nama_kab_kota" => "KAB BENER MERIAH"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1118",
                "nama_kab_kota" => "KAB PIDIE JAYA"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1171",
                "nama_kab_kota" => "KOTA BANDA ACEH"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1172",
                "nama_kab_kota" => "KOTA SABANG"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1173",
                "nama_kab_kota" => "KOTA LHOKSEUMAWE"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1174",
                "nama_kab_kota" => "KOTA LANGSA"
            ],
            [
                "kode_provinsi" => "11",
                "kode_kab_kota" => "1175",
                "nama_kab_kota" => "KOTA SUBULUSSALAM"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1201",
                "nama_kab_kota" => "KAB TAPANULI TENGAH"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1202",
                "nama_kab_kota" => "KAB TAPANULI UTARA"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1203",
                "nama_kab_kota" => "KAB TAPANULI SELATAN"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1204",
                "nama_kab_kota" => "KAB NIAS"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1205",
                "nama_kab_kota" => "KAB LANGKAT"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1206",
                "nama_kab_kota" => "KAB KARO"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1207",
                "nama_kab_kota" => "KAB DELI SERDANG"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1208",
                "nama_kab_kota" => "KAB SIMALUNGUN"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1209",
                "nama_kab_kota" => "KAB ASAHAN"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1210",
                "nama_kab_kota" => "KAB LABUHANBATU"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1211",
                "nama_kab_kota" => "KAB DAIRI"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1212",
                "nama_kab_kota" => "KAB TOBA"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1213",
                "nama_kab_kota" => "KAB MANDAILING NATAL"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1214",
                "nama_kab_kota" => "KAB NIAS SELATAN"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1215",
                "nama_kab_kota" => "KAB PAKPAK BHARAT"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1216",
                "nama_kab_kota" => "KAB HUMBANG HASUNDUTAN"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1217",
                "nama_kab_kota" => "KAB SAMOSIR"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1218",
                "nama_kab_kota" => "KAB SERDANG BEDAGAI"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1219",
                "nama_kab_kota" => "KAB BATU BARA"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1220",
                "nama_kab_kota" => "KAB PADANG LAWAS UTARA"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1221",
                "nama_kab_kota" => "KAB PADANG LAWAS"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1222",
                "nama_kab_kota" => "KAB LABUHANBATU SELATAN"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1223",
                "nama_kab_kota" => "KAB LABUHANBATU UTARA"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1224",
                "nama_kab_kota" => "KAB NIAS UTARA"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1225",
                "nama_kab_kota" => "KAB NIAS BARAT"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1271",
                "nama_kab_kota" => "KOTA MEDAN"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1272",
                "nama_kab_kota" => "KOTA PEMATANGSIANTAR"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1273",
                "nama_kab_kota" => "KOTA SIBOLGA"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1274",
                "nama_kab_kota" => "KOTA TANJUNG BALAI"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1275",
                "nama_kab_kota" => "KOTA BINJAI"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1276",
                "nama_kab_kota" => "KOTA TEBING TINGGI"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1277",
                "nama_kab_kota" => "KOTA PADANG SIDEMPUAN"
            ],
            [
                "kode_provinsi" => "12",
                "kode_kab_kota" => "1278",
                "nama_kab_kota" => "KOTA GUNUNGSITOLI"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1301",
                "nama_kab_kota" => "KAB PESISIR SELATAN"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1302",
                "nama_kab_kota" => "KAB SOLOK"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1303",
                "nama_kab_kota" => "KAB SIJUNJUNG"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1304",
                "nama_kab_kota" => "KAB TANAH DATAR"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1305",
                "nama_kab_kota" => "KAB PADANG PARIAMAN"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1306",
                "nama_kab_kota" => "KAB AGAM"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1307",
                "nama_kab_kota" => "KAB LIMA PULUH KOTA"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1308",
                "nama_kab_kota" => "KAB PASAMAN"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1309",
                "nama_kab_kota" => "KAB KEPULAUAN MENTAWAI"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1310",
                "nama_kab_kota" => "KAB DHARMASRAYA"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1311",
                "nama_kab_kota" => "KAB SOLOK SELATAN"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1312",
                "nama_kab_kota" => "KAB PASAMAN BARAT"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1371",
                "nama_kab_kota" => "KOTA PADANG"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1372",
                "nama_kab_kota" => "KOTA SOLOK"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1373",
                "nama_kab_kota" => "KOTA SAWAHLUNTO"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1374",
                "nama_kab_kota" => "KOTA PADANG PANJANG"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1375",
                "nama_kab_kota" => "KOTA BUKITTINGGI"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1376",
                "nama_kab_kota" => "KOTA PAYAKUMBUH"
            ],
            [
                "kode_provinsi" => "13",
                "kode_kab_kota" => "1377",
                "nama_kab_kota" => "KOTA PARIAMAN"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1401",
                "nama_kab_kota" => "KAB KAMPAR"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1402",
                "nama_kab_kota" => "KAB INDRAGIRI HULU"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1403",
                "nama_kab_kota" => "KAB BENGKALIS"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1404",
                "nama_kab_kota" => "KAB INDRAGIRI HILIR"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1405",
                "nama_kab_kota" => "KAB  PELALAWAN"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1406",
                "nama_kab_kota" => "KAB  ROKAN HULU"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1407",
                "nama_kab_kota" => "KAB  ROKAN HILIR"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1408",
                "nama_kab_kota" => "KAB SIAK"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1409",
                "nama_kab_kota" => "KAB KUANTAN SINGINGI"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1410",
                "nama_kab_kota" => "KAB KEPULAUAN MERANTI"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1471",
                "nama_kab_kota" => "KOTA PEKANBARU"
            ],
            [
                "kode_provinsi" => "14",
                "kode_kab_kota" => "1472",
                "nama_kab_kota" => "KOTA DUMAI"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1501",
                "nama_kab_kota" => "KAB  KERINCI"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1502",
                "nama_kab_kota" => "KAB  MERANGIN"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1503",
                "nama_kab_kota" => "KAB SAROLANGUN"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1504",
                "nama_kab_kota" => "KAB BATANGHARI"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1505",
                "nama_kab_kota" => "KAB  MUARO JAMBI"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1506",
                "nama_kab_kota" => "KAB TANJUNG JABUNG BARAT"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1507",
                "nama_kab_kota" => "KAB TANJUNG JABUNG TIMUR"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1508",
                "nama_kab_kota" => "KAB BUNGO"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1509",
                "nama_kab_kota" => "KAB TEBO"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1571",
                "nama_kab_kota" => "KOTA JAMBI"
            ],
            [
                "kode_provinsi" => "15",
                "kode_kab_kota" => "1572",
                "nama_kab_kota" => "KOTA SUNGAI PENUH"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1601",
                "nama_kab_kota" => "KAB OGAN KOMERING ULU"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1602",
                "nama_kab_kota" => "KAB OGAN KOMERING ILIR"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1603",
                "nama_kab_kota" => "KAB MUARA ENIM"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1604",
                "nama_kab_kota" => "KAB LAHAT"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1605",
                "nama_kab_kota" => "KAB MUSI RAWAS"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1606",
                "nama_kab_kota" => "KAB MUSI BANYUASIN"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1607",
                "nama_kab_kota" => "KAB BANYUASIN"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1608",
                "nama_kab_kota" => "KAB OGAN KOMERING ULU TIMUR"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1609",
                "nama_kab_kota" => "KAB OGAN KOMERING ULU SELATAN"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1610",
                "nama_kab_kota" => "KAB OGAN ILIR"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1611",
                "nama_kab_kota" => "KAB EMPAT LAWANG"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1612",
                "nama_kab_kota" => "KAB PENUKAL ABAB LEMATANG ILIR"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1613",
                "nama_kab_kota" => "KAB MUSI RAWAS UTARA"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1671",
                "nama_kab_kota" => "KOTA PALEMBANG"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1672",
                "nama_kab_kota" => "KOTA PAGAR ALAM"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1673",
                "nama_kab_kota" => "KOTA LUBUK LINGGAU"
            ],
            [
                "kode_provinsi" => "16",
                "kode_kab_kota" => "1674",
                "nama_kab_kota" => "KOTA PRABUMULIH"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1701",
                "nama_kab_kota" => "KAB BENGKULU SELATAN"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1702",
                "nama_kab_kota" => "KAB REJANG LEBONG"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1703",
                "nama_kab_kota" => "KAB BENGKULU UTARA"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1704",
                "nama_kab_kota" => "KAB KAUR"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1705",
                "nama_kab_kota" => "KAB SELUMA"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1706",
                "nama_kab_kota" => "KAB MUKO MUKO"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1707",
                "nama_kab_kota" => "KAB LEBONG"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1708",
                "nama_kab_kota" => "KAB KEPAHIANG"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1709",
                "nama_kab_kota" => "KAB BENGKULU TENGAH"
            ],
            [
                "kode_provinsi" => "17",
                "kode_kab_kota" => "1771",
                "nama_kab_kota" => "KOTA BENGKULU"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1801",
                "nama_kab_kota" => "KAB LAMPUNG SELATAN"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1802",
                "nama_kab_kota" => "KAB LAMPUNG TENGAH"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1803",
                "nama_kab_kota" => "KAB LAMPUNG UTARA"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1804",
                "nama_kab_kota" => "KAB LAMPUNG BARAT"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1805",
                "nama_kab_kota" => "KAB TULANG BAWANG"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1806",
                "nama_kab_kota" => "KAB TANGGAMUS"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1807",
                "nama_kab_kota" => "KAB LAMPUNG TIMUR"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1808",
                "nama_kab_kota" => "KAB WAY KANAN"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1809",
                "nama_kab_kota" => "KAB PESAWARAN"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1810",
                "nama_kab_kota" => "KAB PRINGSEWU"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1811",
                "nama_kab_kota" => "KAB MESUJI"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1812",
                "nama_kab_kota" => "KAB TULANG BAWANG BARAT"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1813",
                "nama_kab_kota" => "KAB PESISIR BARAT"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1871",
                "nama_kab_kota" => "KOTA BANDAR LAMPUNG"
            ],
            [
                "kode_provinsi" => "18",
                "kode_kab_kota" => "1872",
                "nama_kab_kota" => "KOTA METRO"
            ],
            [
                "kode_provinsi" => "19",
                "kode_kab_kota" => "1901",
                "nama_kab_kota" => "KAB BANGKA"
            ],
            [
                "kode_provinsi" => "19",
                "kode_kab_kota" => "1902",
                "nama_kab_kota" => "KAB BELITUNG"
            ],
            [
                "kode_provinsi" => "19",
                "kode_kab_kota" => "1903",
                "nama_kab_kota" => "KAB BANGKA SELATAN"
            ],
            [
                "kode_provinsi" => "19",
                "kode_kab_kota" => "1904",
                "nama_kab_kota" => "KAB BANGKA TENGAH"
            ],
            [
                "kode_provinsi" => "19",
                "kode_kab_kota" => "1905",
                "nama_kab_kota" => "KAB BANGKA BARAT"
            ],
            [
                "kode_provinsi" => "19",
                "kode_kab_kota" => "1906",
                "nama_kab_kota" => "KAB BELITUNG TIMUR"
            ],
            [
                "kode_provinsi" => "19",
                "kode_kab_kota" => "1971",
                "nama_kab_kota" => "KOTA PANGKAL PINANG"
            ],
            [
                "kode_provinsi" => "21",
                "kode_kab_kota" => "2101",
                "nama_kab_kota" => "KAB BINTAN"
            ],
            [
                "kode_provinsi" => "21",
                "kode_kab_kota" => "2102",
                "nama_kab_kota" => "KAB KARIMUN"
            ],
            [
                "kode_provinsi" => "21",
                "kode_kab_kota" => "2103",
                "nama_kab_kota" => "KAB NATUNA"
            ],
            [
                "kode_provinsi" => "21",
                "kode_kab_kota" => "2104",
                "nama_kab_kota" => "KAB LINGGA"
            ],
            [
                "kode_provinsi" => "21",
                "kode_kab_kota" => "2105",
                "nama_kab_kota" => "KAB KEPULAUAN ANAMBAS"
            ],
            [
                "kode_provinsi" => "21",
                "kode_kab_kota" => "2171",
                "nama_kab_kota" => "KOTA BATAM"
            ],
            [
                "kode_provinsi" => "21",
                "kode_kab_kota" => "2172",
                "nama_kab_kota" => "KOTA TANJUNG PINANG"
            ],
            [
                "kode_provinsi" => "31",
                "kode_kab_kota" => "3101",
                "nama_kab_kota" => "KAB ADM KEP SERIBU"
            ],
            [
                "kode_provinsi" => "31",
                "kode_kab_kota" => "3171",
                "nama_kab_kota" => "KOTA ADM JAKARTA PUSAT"
            ],
            [
                "kode_provinsi" => "31",
                "kode_kab_kota" => "3172",
                "nama_kab_kota" => "KOTA ADM JAKARTA UTARA"
            ],
            [
                "kode_provinsi" => "31",
                "kode_kab_kota" => "3173",
                "nama_kab_kota" => "KOTA ADM JAKARTA BARAT"
            ],
            [
                "kode_provinsi" => "31",
                "kode_kab_kota" => "3174",
                "nama_kab_kota" => "KOTA ADM JAKARTA SELATAN"
            ],
            [
                "kode_provinsi" => "31",
                "kode_kab_kota" => "3175",
                "nama_kab_kota" => "KOTA ADM JAKARTA TIMUR"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3201",
                "nama_kab_kota" => "KAB BOGOR"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3202",
                "nama_kab_kota" => "KAB SUKABUMI"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3203",
                "nama_kab_kota" => "KAB CIANJUR"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3204",
                "nama_kab_kota" => "KAB BANDUNG"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3205",
                "nama_kab_kota" => "KAB GARUT"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3206",
                "nama_kab_kota" => "KAB TASIKMALAYA"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3207",
                "nama_kab_kota" => "KAB CIAMIS"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3208",
                "nama_kab_kota" => "KAB KUNINGAN"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3209",
                "nama_kab_kota" => "KAB CIREBON"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3210",
                "nama_kab_kota" => "KAB MAJALENGKA"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3211",
                "nama_kab_kota" => "KAB SUMEDANG"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3212",
                "nama_kab_kota" => "KAB INDRAMAYU"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3213",
                "nama_kab_kota" => "KAB SUBANG"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3214",
                "nama_kab_kota" => "KAB PURWAKARTA"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3215",
                "nama_kab_kota" => "KAB KARAWANG"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3216",
                "nama_kab_kota" => "KAB BEKASI"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3217",
                "nama_kab_kota" => "KAB BANDUNG BARAT"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3218",
                "nama_kab_kota" => "KAB PANGANDARAN"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3271",
                "nama_kab_kota" => "KOTA BOGOR"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3272",
                "nama_kab_kota" => "KOTA SUKABUMI"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3273",
                "nama_kab_kota" => "KOTA BANDUNG"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3274",
                "nama_kab_kota" => "KOTA CIREBON"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3275",
                "nama_kab_kota" => "KOTA BEKASI"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3276",
                "nama_kab_kota" => "KOTA DEPOK"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3277",
                "nama_kab_kota" => "KOTA CIMAHI"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3278",
                "nama_kab_kota" => "KOTA TASIKMALAYA"
            ],
            [
                "kode_provinsi" => "32",
                "kode_kab_kota" => "3279",
                "nama_kab_kota" => "KOTA BANJAR"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3301",
                "nama_kab_kota" => "KAB CILACAP"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3302",
                "nama_kab_kota" => "KAB BANYUMAS"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3303",
                "nama_kab_kota" => "KAB PURBALINGGA"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3304",
                "nama_kab_kota" => "KAB BANJARNEGARA"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3305",
                "nama_kab_kota" => "KAB KEBUMEN"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3306",
                "nama_kab_kota" => "KAB PURWOREJO"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3307",
                "nama_kab_kota" => "KAB WONOSOBO"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3308",
                "nama_kab_kota" => "KAB MAGELANG"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3309",
                "nama_kab_kota" => "KAB BOYOLALI"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3310",
                "nama_kab_kota" => "KAB KLATEN"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3311",
                "nama_kab_kota" => "KAB SUKOHARJO"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3312",
                "nama_kab_kota" => "KAB WONOGIRI"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3313",
                "nama_kab_kota" => "KAB KARANGANYAR"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3314",
                "nama_kab_kota" => "KAB SRAGEN"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3315",
                "nama_kab_kota" => "KAB GROBOGAN"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3316",
                "nama_kab_kota" => "KAB BLORA"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3317",
                "nama_kab_kota" => "KAB REMBANG"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3318",
                "nama_kab_kota" => "KAB PATI"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3319",
                "nama_kab_kota" => "KAB KUDUS"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3320",
                "nama_kab_kota" => "KAB JEPARA"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3321",
                "nama_kab_kota" => "KAB DEMAK"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3322",
                "nama_kab_kota" => "KAB SEMARANG"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3323",
                "nama_kab_kota" => "KAB TEMANGGUNG"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3324",
                "nama_kab_kota" => "KAB KENDAL"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3325",
                "nama_kab_kota" => "KAB BATANG"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3326",
                "nama_kab_kota" => "KAB PEKALONGAN"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3327",
                "nama_kab_kota" => "KAB PEMALANG"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3328",
                "nama_kab_kota" => "KAB TEGAL"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3329",
                "nama_kab_kota" => "KAB BREBES"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3371",
                "nama_kab_kota" => "KOTA MAGELANG"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3372",
                "nama_kab_kota" => "KOTA SURAKARTA"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3373",
                "nama_kab_kota" => "KOTA SALATIGA"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3374",
                "nama_kab_kota" => "KOTA SEMARANG"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3375",
                "nama_kab_kota" => "KOTA PEKALONGAN"
            ],
            [
                "kode_provinsi" => "33",
                "kode_kab_kota" => "3376",
                "nama_kab_kota" => "KOTA TEGAL"
            ],
            [
                "kode_provinsi" => "34",
                "kode_kab_kota" => "3401",
                "nama_kab_kota" => "KAB KULON PROGO"
            ],
            [
                "kode_provinsi" => "34",
                "kode_kab_kota" => "3402",
                "nama_kab_kota" => "KAB BANTUL"
            ],
            [
                "kode_provinsi" => "34",
                "kode_kab_kota" => "3403",
                "nama_kab_kota" => "KAB GUNUNGKIDUL"
            ],
            [
                "kode_provinsi" => "34",
                "kode_kab_kota" => "3404",
                "nama_kab_kota" => "KAB SLEMAN"
            ],
            [
                "kode_provinsi" => "34",
                "kode_kab_kota" => "3471",
                "nama_kab_kota" => "KOTA YOGYAKARTA"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3501",
                "nama_kab_kota" => "KAB PACITAN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3502",
                "nama_kab_kota" => "KAB PONOROGO"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3503",
                "nama_kab_kota" => "KAB TRENGGALEK"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3504",
                "nama_kab_kota" => "KAB TULUNGAGUNG"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3505",
                "nama_kab_kota" => "KAB BLITAR"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3506",
                "nama_kab_kota" => "KAB KEDIRI"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3507",
                "nama_kab_kota" => "KAB MALANG"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3508",
                "nama_kab_kota" => "KAB LUMAJANG"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3509",
                "nama_kab_kota" => "KAB JEMBER"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3510",
                "nama_kab_kota" => "KAB BANYUWANGI"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3511",
                "nama_kab_kota" => "KAB BONDOWOSO"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3512",
                "nama_kab_kota" => "KAB SITUBONDO"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3513",
                "nama_kab_kota" => "KAB PROBOLINGGO"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3514",
                "nama_kab_kota" => "KAB PASURUAN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3515",
                "nama_kab_kota" => "KAB SIDOARJO"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3516",
                "nama_kab_kota" => "KAB MOJOKERTO"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3517",
                "nama_kab_kota" => "KAB JOMBANG"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3518",
                "nama_kab_kota" => "KAB NGANJUK"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3519",
                "nama_kab_kota" => "KAB MADIUN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3520",
                "nama_kab_kota" => "KAB MAGETAN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3521",
                "nama_kab_kota" => "KAB NGAWI"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3522",
                "nama_kab_kota" => "KAB BOJONEGORO"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3523",
                "nama_kab_kota" => "KAB TUBAN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3524",
                "nama_kab_kota" => "KAB LAMONGAN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3525",
                "nama_kab_kota" => "KAB GRESIK"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3526",
                "nama_kab_kota" => "KAB BANGKALAN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3527",
                "nama_kab_kota" => "KAB SAMPANG"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3528",
                "nama_kab_kota" => "KAB PAMEKASAN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3529",
                "nama_kab_kota" => "KAB SUMENEP"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3571",
                "nama_kab_kota" => "KOTA KEDIRI"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3572",
                "nama_kab_kota" => "KOTA BLITAR"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3573",
                "nama_kab_kota" => "KOTA MALANG"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3574",
                "nama_kab_kota" => "KOTA PROBOLINGGO"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3575",
                "nama_kab_kota" => "KOTA PASURUAN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3576",
                "nama_kab_kota" => "KOTA MOJOKERTO"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3577",
                "nama_kab_kota" => "KOTA MADIUN"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3578",
                "nama_kab_kota" => "KOTA SURABAYA"
            ],
            [
                "kode_provinsi" => "35",
                "kode_kab_kota" => "3579",
                "nama_kab_kota" => "KOTA BATU"
            ],
            [
                "kode_provinsi" => "36",
                "kode_kab_kota" => "3601",
                "nama_kab_kota" => "KAB PANDEGLANG"
            ],
            [
                "kode_provinsi" => "36",
                "kode_kab_kota" => "3602",
                "nama_kab_kota" => "KAB LEBAK"
            ],
            [
                "kode_provinsi" => "36",
                "kode_kab_kota" => "3603",
                "nama_kab_kota" => "KAB TANGERANG"
            ],
            [
                "kode_provinsi" => "36",
                "kode_kab_kota" => "3604",
                "nama_kab_kota" => "KAB SERANG"
            ],
            [
                "kode_provinsi" => "36",
                "kode_kab_kota" => "3671",
                "nama_kab_kota" => "KOTA TANGERANG"
            ],
            [
                "kode_provinsi" => "36",
                "kode_kab_kota" => "3672",
                "nama_kab_kota" => "KOTA CILEGON"
            ],
            [
                "kode_provinsi" => "36",
                "kode_kab_kota" => "3673",
                "nama_kab_kota" => "KOTA SERANG"
            ],
            [
                "kode_provinsi" => "36",
                "kode_kab_kota" => "3674",
                "nama_kab_kota" => "KOTA TANGERANG SELATAN"
            ],
            [
                "kode_provinsi" => "51",
                "kode_kab_kota" => "5101",
                "nama_kab_kota" => "KAB JEMBRANA"
            ],
            [
                "kode_provinsi" => "51",
                "kode_kab_kota" => "5102",
                "nama_kab_kota" => "KAB TABANAN"
            ],
            [
                "kode_provinsi" => "51",
                "kode_kab_kota" => "5103",
                "nama_kab_kota" => "KAB BADUNG"
            ],
            [
                "kode_provinsi" => "51",
                "kode_kab_kota" => "5104",
                "nama_kab_kota" => "KAB GIANYAR"
            ],
            [
                "kode_provinsi" => "51",
                "kode_kab_kota" => "5105",
                "nama_kab_kota" => "KAB KLUNGKUNG"
            ],
            [
                "kode_provinsi" => "51",
                "kode_kab_kota" => "5106",
                "nama_kab_kota" => "KAB BANGLI"
            ],
            [
                "kode_provinsi" => "51",
                "kode_kab_kota" => "5107",
                "nama_kab_kota" => "KAB KARANGASEM"
            ],
            [
                "kode_provinsi" => "51",
                "kode_kab_kota" => "5108",
                "nama_kab_kota" => "KAB BULELENG"
            ],
            [
                "kode_provinsi" => "51",
                "kode_kab_kota" => "5171",
                "nama_kab_kota" => "KOTA DENPASAR"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5201",
                "nama_kab_kota" => "KAB LOMBOK BARAT"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5202",
                "nama_kab_kota" => "KAB LOMBOK TENGAH"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5203",
                "nama_kab_kota" => "KAB LOMBOK TIMUR"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5204",
                "nama_kab_kota" => "KAB SUMBAWA"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5205",
                "nama_kab_kota" => "KAB DOMPU"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5206",
                "nama_kab_kota" => "KAB BIMA"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5207",
                "nama_kab_kota" => "KAB SUMBAWA BARAT"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5208",
                "nama_kab_kota" => "KAB LOMBOK UTARA"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5271",
                "nama_kab_kota" => "KOTA MATARAM"
            ],
            [
                "kode_provinsi" => "52",
                "kode_kab_kota" => "5272",
                "nama_kab_kota" => "KOTA BIMA"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5301",
                "nama_kab_kota" => "KAB KUPANG"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5302",
                "nama_kab_kota" => "KAB TIMOR TENGAH SELATAN"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5303",
                "nama_kab_kota" => "KAB TIMOR TENGAH UTARA"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5304",
                "nama_kab_kota" => "KAB BELU"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5305",
                "nama_kab_kota" => "KAB ALOR"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5306",
                "nama_kab_kota" => "KAB FLORES TIMUR"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5307",
                "nama_kab_kota" => "KAB SIKKA"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5308",
                "nama_kab_kota" => "KAB ENDE"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5309",
                "nama_kab_kota" => "KAB NGADA"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5310",
                "nama_kab_kota" => "KAB MANGGARAI"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5311",
                "nama_kab_kota" => "KAB SUMBA TIMUR"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5312",
                "nama_kab_kota" => "KAB SUMBA BARAT"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5313",
                "nama_kab_kota" => "KAB LEMBATA"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5314",
                "nama_kab_kota" => "KAB ROTE NDAO"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5315",
                "nama_kab_kota" => "KAB MANGGARAI BARAT"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5316",
                "nama_kab_kota" => "KAB NAGEKEO"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5317",
                "nama_kab_kota" => "KAB SUMBA TENGAH"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5318",
                "nama_kab_kota" => "KAB SUMBA BARAT DAYA"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5319",
                "nama_kab_kota" => "KAB MANGGARAI TIMUR"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5320",
                "nama_kab_kota" => "KAB SABU RAIJUA"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5321",
                "nama_kab_kota" => "KAB MALAKA"
            ],
            [
                "kode_provinsi" => "53",
                "kode_kab_kota" => "5371",
                "nama_kab_kota" => "KOTA KUPANG"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6101",
                "nama_kab_kota" => "KAB SAMBAS"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6102",
                "nama_kab_kota" => "KAB MEMPAWAH"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6103",
                "nama_kab_kota" => "KAB SANGGAU"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6104",
                "nama_kab_kota" => "KAB KETAPANG"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6105",
                "nama_kab_kota" => "KAB SINTANG"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6106",
                "nama_kab_kota" => "KAB KAPUAS HULU"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6107",
                "nama_kab_kota" => "KAB BENGKAYANG"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6108",
                "nama_kab_kota" => "KAB LANDAK"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6109",
                "nama_kab_kota" => "KAB SEKADAU"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6110",
                "nama_kab_kota" => "KAB MELAWI"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6111",
                "nama_kab_kota" => "KAB KAYONG UTARA"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6112",
                "nama_kab_kota" => "KAB KUBU RAYA"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6171",
                "nama_kab_kota" => "KOTA PONTIANAK"
            ],
            [
                "kode_provinsi" => "61",
                "kode_kab_kota" => "6172",
                "nama_kab_kota" => "KOTA SINGKAWANG"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6201",
                "nama_kab_kota" => "KAB KOTAWARINGIN BARAT"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6202",
                "nama_kab_kota" => "KAB KOTAWARINGIN TIMUR"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6203",
                "nama_kab_kota" => "KAB KAPUAS"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6204",
                "nama_kab_kota" => "KAB BARITO SELATAN"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6205",
                "nama_kab_kota" => "KAB BARITO UTARA"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6206",
                "nama_kab_kota" => "KAB KATINGAN"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6207",
                "nama_kab_kota" => "KAB SERUYAN"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6208",
                "nama_kab_kota" => "KAB SUKAMARA"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6209",
                "nama_kab_kota" => "KAB LAMANDAU"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6210",
                "nama_kab_kota" => "KAB GUNUNG MAS"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6211",
                "nama_kab_kota" => "KAB PULANG PISAU"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6212",
                "nama_kab_kota" => "KAB MURUNG RAYA"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6213",
                "nama_kab_kota" => "KAB BARITO TIMUR"
            ],
            [
                "kode_provinsi" => "62",
                "kode_kab_kota" => "6271",
                "nama_kab_kota" => "KOTA PALANGKARAYA"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6301",
                "nama_kab_kota" => "KAB TANAH LAUT"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6302",
                "nama_kab_kota" => "KAB KOTABARU"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6303",
                "nama_kab_kota" => "KAB BANJAR"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6304",
                "nama_kab_kota" => "KAB BARITO KUALA"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6305",
                "nama_kab_kota" => "KAB TAPIN"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6306",
                "nama_kab_kota" => "KAB HULU SUNGAI SELATAN"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6307",
                "nama_kab_kota" => "KAB HULU SUNGAI TENGAH"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6308",
                "nama_kab_kota" => "KAB HULU SUNGAI UTARA"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6309",
                "nama_kab_kota" => "KAB TABALONG"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6310",
                "nama_kab_kota" => "KAB TANAH BUMBU"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6311",
                "nama_kab_kota" => "KAB BALANGAN"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6371",
                "nama_kab_kota" => "KOTA BANJARMASIN"
            ],
            [
                "kode_provinsi" => "63",
                "kode_kab_kota" => "6372",
                "nama_kab_kota" => "KOTA BANJARBARU"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6401",
                "nama_kab_kota" => "KAB PASER"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6402",
                "nama_kab_kota" => "KAB KUTAI KARTANEGARA"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6403",
                "nama_kab_kota" => "KAB BERAU"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6407",
                "nama_kab_kota" => "KAB KUTAI BARAT"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6408",
                "nama_kab_kota" => "KAB KUTAI TIMUR"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6409",
                "nama_kab_kota" => "KAB PENAJAM PASER UTARA"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6411",
                "nama_kab_kota" => "KAB MAHAKAM ULU"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6471",
                "nama_kab_kota" => "KOTA BALIKPAPAN"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6472",
                "nama_kab_kota" => "KOTA SAMARINDA"
            ],
            [
                "kode_provinsi" => "64",
                "kode_kab_kota" => "6474",
                "nama_kab_kota" => "KOTA BONTANG"
            ],
            [
                "kode_provinsi" => "65",
                "kode_kab_kota" => "6501",
                "nama_kab_kota" => "KAB BULUNGAN"
            ],
            [
                "kode_provinsi" => "65",
                "kode_kab_kota" => "6502",
                "nama_kab_kota" => "KAB MALINAU"
            ],
            [
                "kode_provinsi" => "65",
                "kode_kab_kota" => "6503",
                "nama_kab_kota" => "KAB NUNUKAN"
            ],
            [
                "kode_provinsi" => "65",
                "kode_kab_kota" => "6504",
                "nama_kab_kota" => "KAB TANA TIDUNG"
            ],
            [
                "kode_provinsi" => "65",
                "kode_kab_kota" => "6571",
                "nama_kab_kota" => "KOTA TARAKAN"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7101",
                "nama_kab_kota" => "KAB BOLAANG MONGONDOW"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7102",
                "nama_kab_kota" => "KAB MINAHASA"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7103",
                "nama_kab_kota" => "KAB KEPULAUAN SANGIHE"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7104",
                "nama_kab_kota" => "KAB KEPULAUAN TALAUD"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7105",
                "nama_kab_kota" => "KAB MINAHASA SELATAN"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7106",
                "nama_kab_kota" => "KAB MINAHASA UTARA"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7107",
                "nama_kab_kota" => "KAB MINAHASA TENGGARA"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7108",
                "nama_kab_kota" => "KAB BOLAANG MONGONDOW UTARA"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7109",
                "nama_kab_kota" => "KAB KEP SIAU TAGULANDANG BIARO"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7110",
                "nama_kab_kota" => "KAB BOLAANG MONGONDOW TIMUR"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7111",
                "nama_kab_kota" => "KAB BOLAANG MONGONDOW SELATAN"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7171",
                "nama_kab_kota" => "KOTA MANADO"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7172",
                "nama_kab_kota" => "KOTA BITUNG"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7173",
                "nama_kab_kota" => "KOTA TOMOHON"
            ],
            [
                "kode_provinsi" => "71",
                "kode_kab_kota" => "7174",
                "nama_kab_kota" => "KOTA KOTAMOBAGU"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7201",
                "nama_kab_kota" => "KAB BANGGAI"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7202",
                "nama_kab_kota" => "KAB POSO"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7203",
                "nama_kab_kota" => "KAB DONGGALA"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7204",
                "nama_kab_kota" => "KAB TOLI TOLI"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7205",
                "nama_kab_kota" => "KAB BUOL"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7206",
                "nama_kab_kota" => "KAB MOROWALI"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7207",
                "nama_kab_kota" => "KAB BANGGAI KEPULAUAN"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7208",
                "nama_kab_kota" => "KAB PARIGI MOUTONG"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7209",
                "nama_kab_kota" => "KAB TOJO UNA UNA"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7210",
                "nama_kab_kota" => "KAB SIGI"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7211",
                "nama_kab_kota" => "KAB BANGGAI LAUT"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7212",
                "nama_kab_kota" => "KAB MOROWALI UTARA"
            ],
            [
                "kode_provinsi" => "72",
                "kode_kab_kota" => "7271",
                "nama_kab_kota" => "KOTA PALU"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7301",
                "nama_kab_kota" => "KAB KEPULAUAN SELAYAR"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7302",
                "nama_kab_kota" => "KAB BULUKUMBA"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7303",
                "nama_kab_kota" => "KAB BANTAENG"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7304",
                "nama_kab_kota" => "KAB JENEPONTO"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7305",
                "nama_kab_kota" => "KAB TAKALAR"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7306",
                "nama_kab_kota" => "KAB GOWA"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7307",
                "nama_kab_kota" => "KAB SINJAI"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7308",
                "nama_kab_kota" => "KAB BONE"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7309",
                "nama_kab_kota" => "KAB MAROS"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7310",
                "nama_kab_kota" => "KAB PANGKAJENE DAN KEPULAUAN"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7311",
                "nama_kab_kota" => "KAB BARRU"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7312",
                "nama_kab_kota" => "KAB SOPPENG"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7313",
                "nama_kab_kota" => "KAB WAJO"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7314",
                "nama_kab_kota" => "KAB SIDENRENG RAPPANG"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7315",
                "nama_kab_kota" => "KAB PINRANG"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7316",
                "nama_kab_kota" => "KAB ENREKANG"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7317",
                "nama_kab_kota" => "KAB LUWU"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7318",
                "nama_kab_kota" => "KAB TANA TORAJA"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7322",
                "nama_kab_kota" => "KAB LUWU UTARA"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7324",
                "nama_kab_kota" => "KAB LUWU TIMUR"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7326",
                "nama_kab_kota" => "KAB TORAJA UTARA"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7371",
                "nama_kab_kota" => "KOTA MAKASSAR"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7372",
                "nama_kab_kota" => "KOTA PAREPARE"
            ],
            [
                "kode_provinsi" => "73",
                "kode_kab_kota" => "7373",
                "nama_kab_kota" => "KOTA PALOPO"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7401",
                "nama_kab_kota" => "KAB KOLAKA"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7402",
                "nama_kab_kota" => "KAB KONAWE"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7403",
                "nama_kab_kota" => "KAB MUNA"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7404",
                "nama_kab_kota" => "KAB BUTON"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7405",
                "nama_kab_kota" => "KAB KONAWE SELATAN"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7406",
                "nama_kab_kota" => "KAB BOMBANA"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7407",
                "nama_kab_kota" => "KAB WAKATOBI"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7408",
                "nama_kab_kota" => "KAB KOLAKA UTARA"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7409",
                "nama_kab_kota" => "KAB KONAWE UTARA"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7410",
                "nama_kab_kota" => "KAB BUTON UTARA"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7411",
                "nama_kab_kota" => "KAB KOLAKA TIMUR"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7412",
                "nama_kab_kota" => "KAB KONAWE KEPULAUAN"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7413",
                "nama_kab_kota" => "KAB MUNA BARAT"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7414",
                "nama_kab_kota" => "KAB BUTON TENGAH"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7415",
                "nama_kab_kota" => "KAB BUTON SELATAN"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7471",
                "nama_kab_kota" => "KOTA KENDARI"
            ],
            [
                "kode_provinsi" => "74",
                "kode_kab_kota" => "7472",
                "nama_kab_kota" => "KOTA BAU BAU"
            ],
            [
                "kode_provinsi" => "75",
                "kode_kab_kota" => "7501",
                "nama_kab_kota" => "KAB GORONTALO"
            ],
            [
                "kode_provinsi" => "75",
                "kode_kab_kota" => "7502",
                "nama_kab_kota" => "KAB BOALEMO"
            ],
            [
                "kode_provinsi" => "75",
                "kode_kab_kota" => "7503",
                "nama_kab_kota" => "KAB BONE BOLANGO"
            ],
            [
                "kode_provinsi" => "75",
                "kode_kab_kota" => "7504",
                "nama_kab_kota" => "KAB POHUWATO"
            ],
            [
                "kode_provinsi" => "75",
                "kode_kab_kota" => "7505",
                "nama_kab_kota" => "KAB GORONTALO UTARA"
            ],
            [
                "kode_provinsi" => "75",
                "kode_kab_kota" => "7571",
                "nama_kab_kota" => "KOTA GORONTALO"
            ],
            [
                "kode_provinsi" => "76",
                "kode_kab_kota" => "7601",
                "nama_kab_kota" => "KAB PASANGKAYU"
            ],
            [
                "kode_provinsi" => "76",
                "kode_kab_kota" => "7602",
                "nama_kab_kota" => "KAB MAMUJU"
            ],
            [
                "kode_provinsi" => "76",
                "kode_kab_kota" => "7603",
                "nama_kab_kota" => "KAB MAMASA"
            ],
            [
                "kode_provinsi" => "76",
                "kode_kab_kota" => "7604",
                "nama_kab_kota" => "KAB POLEWALI MANDAR"
            ],
            [
                "kode_provinsi" => "76",
                "kode_kab_kota" => "7605",
                "nama_kab_kota" => "KAB MAJENE"
            ],
            [
                "kode_provinsi" => "76",
                "kode_kab_kota" => "7606",
                "nama_kab_kota" => "KAB MAMUJU TENGAH"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8101",
                "nama_kab_kota" => "KAB MALUKU TENGAH"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8102",
                "nama_kab_kota" => "KAB MALUKU TENGGARA"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8103",
                "nama_kab_kota" => "KAB KEPULAUAN TANIMBAR"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8104",
                "nama_kab_kota" => "KAB BURU"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8105",
                "nama_kab_kota" => "KAB SERAM BAGIAN TIMUR"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8106",
                "nama_kab_kota" => "KAB SERAM BAGIAN BARAT"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8107",
                "nama_kab_kota" => "KAB KEPULAUAN ARU"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8108",
                "nama_kab_kota" => "KAB MALUKU BARAT DAYA"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8109",
                "nama_kab_kota" => "KAB BURU SELATAN"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8171",
                "nama_kab_kota" => "KOTA AMBON"
            ],
            [
                "kode_provinsi" => "81",
                "kode_kab_kota" => "8172",
                "nama_kab_kota" => "KOTA TUAL"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8201",
                "nama_kab_kota" => "KAB HALMAHERA BARAT"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8202",
                "nama_kab_kota" => "KAB HALMAHERA TENGAH"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8203",
                "nama_kab_kota" => "KAB HALMAHERA UTARA"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8204",
                "nama_kab_kota" => "KAB HALMAHERA SELATAN"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8205",
                "nama_kab_kota" => "KAB KEPULAUAN SULA"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8206",
                "nama_kab_kota" => "KAB HALMAHERA TIMUR"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8207",
                "nama_kab_kota" => "KAB PULAU MOROTAI"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8208",
                "nama_kab_kota" => "KAB PULAU TALIABU"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8271",
                "nama_kab_kota" => "KOTA TERNATE"
            ],
            [
                "kode_provinsi" => "82",
                "kode_kab_kota" => "8272",
                "nama_kab_kota" => "KOTA TIDORE KEPULAUAN"
            ],
            [
                "kode_provinsi" => "91",
                "kode_kab_kota" => "9103",
                "nama_kab_kota" => "KAB JAYAPURA"
            ],
            [
                "kode_provinsi" => "91",
                "kode_kab_kota" => "9105",
                "nama_kab_kota" => "KAB KEPULAUAN YAPEN"
            ],
            [
                "kode_provinsi" => "91",
                "kode_kab_kota" => "9106",
                "nama_kab_kota" => "KAB BIAK NUMFOR"
            ],
            [
                "kode_provinsi" => "91",
                "kode_kab_kota" => "9110",
                "nama_kab_kota" => "KAB SARMI"
            ],
            [
                "kode_provinsi" => "91",
                "kode_kab_kota" => "9111",
                "nama_kab_kota" => "KAB KEEROM"
            ],
            [
                "kode_provinsi" => "91",
                "kode_kab_kota" => "9115",
                "nama_kab_kota" => "KAB WAROPEN"
            ],
            [
                "kode_provinsi" => "91",
                "kode_kab_kota" => "9119",
                "nama_kab_kota" => "KAB SUPIORI"
            ],
            [
                "kode_provinsi" => "91",
                "kode_kab_kota" => "9120",
                "nama_kab_kota" => "KAB MAMBERAMO RAYA"
            ],
            [
                "kode_provinsi" => "91",
                "kode_kab_kota" => "9171",
                "nama_kab_kota" => "KOTA JAYAPURA"
            ],
            [
                "kode_provinsi" => "92",
                "kode_kab_kota" => "9202",
                "nama_kab_kota" => "KAB MANOKWARI"
            ],
            [
                "kode_provinsi" => "92",
                "kode_kab_kota" => "9203",
                "nama_kab_kota" => "KAB FAK FAK"
            ],
            [
                "kode_provinsi" => "92",
                "kode_kab_kota" => "9206",
                "nama_kab_kota" => "KAB TELUK BINTUNI"
            ],
            [
                "kode_provinsi" => "92",
                "kode_kab_kota" => "9207",
                "nama_kab_kota" => "KAB TELUK WONDAMA"
            ],
            [
                "kode_provinsi" => "92",
                "kode_kab_kota" => "9208",
                "nama_kab_kota" => "KAB KAIMANA"
            ],
            [
                "kode_provinsi" => "92",
                "kode_kab_kota" => "9211",
                "nama_kab_kota" => "KAB MANOKWARI SELATAN"
            ],
            [
                "kode_provinsi" => "92",
                "kode_kab_kota" => "9212",
                "nama_kab_kota" => "KAB PEGUNUNGAN ARFAK"
            ],
            [
                "kode_provinsi" => "93",
                "kode_kab_kota" => "9301",
                "nama_kab_kota" => "KAB MERAUKE"
            ],
            [
                "kode_provinsi" => "93",
                "kode_kab_kota" => "9302",
                "nama_kab_kota" => "KAB BOVEN DIGOEL"
            ],
            [
                "kode_provinsi" => "93",
                "kode_kab_kota" => "9303",
                "nama_kab_kota" => "KAB MAPPI"
            ],
            [
                "kode_provinsi" => "93",
                "kode_kab_kota" => "9304",
                "nama_kab_kota" => "KAB ASMAT"
            ],
            [
                "kode_provinsi" => "94",
                "kode_kab_kota" => "9401",
                "nama_kab_kota" => "KAB NABIRE"
            ],
            [
                "kode_provinsi" => "94",
                "kode_kab_kota" => "9402",
                "nama_kab_kota" => "KAB PUNCAK JAYA"
            ],
            [
                "kode_provinsi" => "94",
                "kode_kab_kota" => "9403",
                "nama_kab_kota" => "KAB PANIAI"
            ],
            [
                "kode_provinsi" => "94",
                "kode_kab_kota" => "9404",
                "nama_kab_kota" => "KAB MIMIKA"
            ],
            [
                "kode_provinsi" => "94",
                "kode_kab_kota" => "9405",
                "nama_kab_kota" => "KAB PUNCAK"
            ],
            [
                "kode_provinsi" => "94",
                "kode_kab_kota" => "9406",
                "nama_kab_kota" => "KAB DOGIYAI"
            ],
            [
                "kode_provinsi" => "94",
                "kode_kab_kota" => "9407",
                "nama_kab_kota" => "KAB INTAN JAYA"
            ],
            [
                "kode_provinsi" => "94",
                "kode_kab_kota" => "9408",
                "nama_kab_kota" => "KAB DEIYAI"
            ],
            [
                "kode_provinsi" => "95",
                "kode_kab_kota" => "9501",
                "nama_kab_kota" => "KAB JAYAWIJAYA"
            ],
            [
                "kode_provinsi" => "95",
                "kode_kab_kota" => "9502",
                "nama_kab_kota" => "KAB PEGUNUNGAN BINTANG"
            ],
            [
                "kode_provinsi" => "95",
                "kode_kab_kota" => "9503",
                "nama_kab_kota" => "KAB YAHUKIMO"
            ],
            [
                "kode_provinsi" => "95",
                "kode_kab_kota" => "9504",
                "nama_kab_kota" => "KAB TOLIKARA"
            ],
            [
                "kode_provinsi" => "95",
                "kode_kab_kota" => "9505",
                "nama_kab_kota" => "KAB MAMBERAMO TENGAH"
            ],
            [
                "kode_provinsi" => "95",
                "kode_kab_kota" => "9506",
                "nama_kab_kota" => "KAB YALIMO"
            ],
            [
                "kode_provinsi" => "95",
                "kode_kab_kota" => "9507",
                "nama_kab_kota" => "KAB LANNY JAYA"
            ],
            [
                "kode_provinsi" => "95",
                "kode_kab_kota" => "9508",
                "nama_kab_kota" => "KAB NDUGA"
            ],
            [
                "kode_provinsi" => "96",
                "kode_kab_kota" => "9601",
                "nama_kab_kota" => "KAB SORONG"
            ],
            [
                "kode_provinsi" => "96",
                "kode_kab_kota" => "9602",
                "nama_kab_kota" => "KAB SORONG SELATAN"
            ],
            [
                "kode_provinsi" => "96",
                "kode_kab_kota" => "9603",
                "nama_kab_kota" => "KAB RAJA AMPAT"
            ],
            [
                "kode_provinsi" => "96",
                "kode_kab_kota" => "9604",
                "nama_kab_kota" => "KAB TAMBRAUW"
            ],
            [
                "kode_provinsi" => "96",
                "kode_kab_kota" => "9605",
                "nama_kab_kota" => "KAB MAYBRAT"
            ],
            [
                "kode_provinsi" => "96",
                "kode_kab_kota" => "9671",
                "nama_kab_kota" => "KOTA SORONG"
            ]
        ];

        DB::table('mt_cities')->insert($kota);
    }
}

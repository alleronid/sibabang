<?php

namespace App\Services;

use App\Models\TrxPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionService{

    public function save(Request $request)
    {
        DB::beginTransaction();
        $name = self::generateRandomName();
        $data = new TrxPayment();
        $data->trx_id = self::noTrx($request->merchant_id);
        $data->amount = $request->amount;
        $data->method = $request->method;
        $data->fullname = $request->fullname ?? $name;
        $data->email = $request->email ?? self::generateRandomEmail($name);
        $data->phone_number = $request->phone_number ?? self::generatePhoneNumber();
        $data->merchant_id = $request->merchant_id;
        $data->company_id = Auth::user()->company_id;
        $data->save();
        DB::commit();
    }

    private function noTrx($merchantId){
        $year = date('Y');
        $Digityear = substr($year, 2,4);
        $month = date('m');
        $day = date('d');
        $rand= rand(0000,9999);
        $noTrx = "PAY{$merchantId}{$Digityear}{$month}{$day}{$rand}";

        $cek = TrxPayment::where('trx_id', $noTrx)->first();

        if($cek){
            self::noTrx($merchantId);
        }

        return $noTrx;
    }

    function generateRandomName() {
        $firstNames = [
            "Adi", "Budi", "Citra", "Dewi", "Eko", "Farah", "Gilang", "Hendra", "Indah", "Joko",
            "Kiki", "Lina", "Maya", "Nina", "Oscar", "Putra", "Qori", "Rina", "Santi", "Tono",
            "Udin", "Vina", "Wawan", "Xena", "Yusuf", "Zahra", "Andi", "Bayu", "Cindy", "Doni",
            "Elisa", "Fikri", "Gita", "Hadi", "Irma", "Johan", "Karina", "Lutfi", "Mira", "Nando",
            "Omar", "Pram", "Qisya", "Rafi", "Siska", "Teguh", "Umar", "Vito", "Wulan", "Xavier",
            "Yana", "Zulkifli", "Ayu", "Bagas", "Cahyo", "Damar", "Eris", "Fajar", "Galih", "Hanif",
            "Ilham", "Jihan", "Kamal", "Laras", "Mahmud", "Nadya", "Oki", "Putri", "Qomar", "Rendi",
            "Sudirman", "Tasya", "Ujang", "Veronica", "Wahyudi", "Xander", "Yuni", "Zainal", "Arif",
            "Bela", "Cahaya", "Dede", "Edi", "Febri", "Ganesha", "Habib", "Ira", "Jajang", "Kirana",
            "Lukman", "Mutiara", "Nabil", "Olga", "Pandu", "Qurrota", "Rizky", "Syifa", "Taufik", "Uci",
            "Vega", "Widya", "Xia", "Yanto", "Zahira", "Asih", "Bambang", "Cempaka", "Dina", "Endang",
            "Fitri", "Gilang", "Hana", "Irfan", "Junaidi", "Kartika", "Lestari", "Mei", "Naila", "Ovan",
            "Putera", "Qanita", "Ratu", "Sakti", "Tia", "Ujang", "Vino", "Windi", "Xaverius", "Yessi",
            "Zulkarnain"
        ];

        $lastNames = [
            "Saputra", "Wijaya", "Pratama", "Sari", "Santoso", "Permana", "Rahman", "Putri", "Kusuma", "Hartono",
            "Setiawan", "Ananda", "Cahyadi", "Darmawan", "Erlangga", "Fauzi", "Gunawan", "Hidayat", "Iskandar", "Jatmiko",
            "Kartono", "Lestari", "Mahendra", "Nugroho", "Octavian", "Pradana", "Qodri", "Rizal", "Saputri", "Taufik",
            "Utami", "Virdiansyah", "Wibowo", "Xaverius", "Yuliana", "Zainudin", "Alamsyah", "Bahari", "Cendana", "Dewantara",
            "Ekaputra", "Fathurrahman", "Gozali", "Handayani", "Indrawan", "Julianto", "Kencana", "Liman", "Mardani", "Nasywa",
            "Oktaviani", "Pangestu", "Qasim", "Rahayu", "Suharto", "Triana", "Umaro", "Vicky", "Wirasakti", "Xenos",
            "Yusman", "Zaenal", "Adityawarman", "Basuki", "Cakrawala", "Darmadi", "Endrawan", "Febrianto", "Gatot", "Hardiman",
            "Irwansyah", "Jatmiko", "Krisna", "Lukito", "Mulyono", "Nadim", "Okta", "Prasetyo", "Qadri", "Ramadhan",
            "Suhendi", "Tirta", "Utomo", "Virgiawan", "Widjaja", "Xavier", "Yusran", "Zulkarnain", "Aditama", "Bakri"
        ];

        $randomFirstName = $firstNames[array_rand($firstNames)];
        $randomLastName = $lastNames[array_rand($lastNames)];

        return "$randomFirstName $randomLastName";
    }

    function generateRandomEmail($name) {
        $domains = ["gmail.com", "yahoo.com", "outlook.com", "hotmail.com", "example.com"];
        $randomDomain = $domains[array_rand($domains)];
        $nameParts = explode(" ", strtolower($name));
        $email = $nameParts[0] . rand(100, 999) . "@" . $randomDomain;

        return $email;
    }

    function generatePhoneNumber($prefix = "+62") {
        $number = '';
        for ($i = 0; $i < 9; $i++) {
            $number .= rand(0, 9);
        }
        return "$prefix" . "8" . $number;
    }
}

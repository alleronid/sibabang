<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payments = [
            // Data Bank
            ['bank_name' => 'Bank Mandiri', 'type' => 'Bank'],
            ['bank_name' => 'Bank Rakyat Indonesia (BRI)', 'type' => 'Bank'],
            ['bank_name' => 'Bank Negara Indonesia (BNI)', 'type' => 'Bank'],
            ['bank_name' => 'Bank Tabungan Negara (BTN)', 'type' => 'Bank'],
            ['bank_name' => 'Bank Central Asia (BCA)', 'type' => 'Bank'],
            ['bank_name' => 'Bank CIMB Niaga', 'type' => 'Bank'],
            ['bank_name' => 'Bank Permata', 'type' => 'Bank'],
            ['bank_name' => 'Bank OCBC NISP', 'type' => 'Bank'],
            ['bank_name' => 'Bank Danamon', 'type' => 'Bank'],
            ['bank_name' => 'Bank Panin', 'type' => 'Bank'],
            ['bank_name' => 'Bank Maybank Indonesia', 'type' => 'Bank'],
            ['bank_name' => 'Bank Mega', 'type' => 'Bank'],
            ['bank_name' => 'Bank BTPN', 'type' => 'Bank'],
            ['bank_name' => 'Jenius', 'type' => 'Bank'],
            ['bank_name' => 'Blu by BCA Digital', 'type' => 'Bank'],
            ['bank_name' => 'SeaBank', 'type' => 'Bank'],

            // Data E-Wallet
            ['bank_name' => 'GoPay', 'type' => 'E-Wallet'],
            ['bank_name' => 'OVO', 'type' => 'E-Wallet'],
            ['bank_name' => 'DANA', 'type' => 'E-Wallet'],
            ['bank_name' => 'LinkAja', 'type' => 'E-Wallet'],
            ['bank_name' => 'ShopeePay', 'type' => 'E-Wallet'],
            ['bank_name' => 'Sakuku', 'type' => 'E-Wallet'],
            ['bank_name' => 'Jenius Pay', 'type' => 'E-Wallet'],
            ['bank_name' => 'i.saku', 'type' => 'E-Wallet'],
            ['bank_name' => 'Paytren', 'type' => 'E-Wallet'],
            ['bank_name' => 'SPinjam', 'type' => 'E-Wallet'],
            ['bank_name' => 'SPayLater', 'type' => 'E-Wallet'],
        ];

        DB::table('mt_banks')->insert($payments);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducaController extends Controller
{
    public function index()
    {
        return 'Hi! Selamat Datang di Website Laravel';
    }
    public function marbel()
    {
        return 'Ini adalah Halaman Game Kelereng Hehehe';
    }
    public function marbelFriends()
    {
        return 'Ini adalah Halaman Game Kelereng yang bisa dimainkan bersama Teman-Teman!';
    }
    public function riri()
    {
        return 'Ini adalah Halaman dari Buku Cerita Riri';
    }
    public function song()
    {
        return 'Ini adalah Lagu Anak-anak Kolak, selamat Mendengarkan :D';
    }
    public function berita($name = null)
    {
        return 'Ini adalah Halaman Berita dari Educa Studio';
    }
    public function berita2($name = 'educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19')
    {
        return 'Ini adalah Halaman Berita dari Educa Studio yang Berbagi pada Warga Terdampak Covid-19';
    }
    public function karir()
    {
        return 'Ini adalah Halaman Program Karir Educa Studio';
    }
    public function magang()
    {
        return 'Ini adalah Halaman Program Magang Educa Studio';
    }
    public function kunjungan()
    {
        return 'Ini adalah Halaman Program Kunjungan Industri Educa Studio';
    }
    public function about()
    {
        return ' Instagram    : @educaStud' . '<br>' .
            ' Facebook     : Educa Studio' . '<br>' .
            ' Whatsapp     : +6287345890765';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducaController extends Controller
{
    public function index()
    {
        return '<a href=https://www.educastudio.com>Menuju Ke HOME EDUCA STUDIO</a>';
    }
    public function marbel()
    {
        return '<a href=https://www.educastudio.com/category/marbel-edu-games>Ingin Bermain Marbel?</a>';
    }
    public function marbelFriends()
    {
        return '<a href=https://www.educastudio.com/category/marbel-and-friends-kids-games>Ingin Bermain Marbel bersama Teman?</a>';
    }
    public function riri()
    {
        return '<a href=https://www.educastudio.com/category/riri-story-books>Ayo Baca Buku Cerita Riri :D</a>';
    }
    public function song()
    {
        return '<a href=https://www.educastudio.com/category/kolak-kids-songs>Mari Mendengarkan Lagu Anak-anak dari Kolak!</a>';
    }
    public function berita($name = null)
    {
        return '<a href=https://www.educastudio.com/news>Baca Berita dari Educa Studio</a>';
    }
    public function berita2($name = 'educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19')
    {
        return '<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19>
        Educa Studio Berbagi Pada Warga Terdampak Covid-19</a>';
    }
    public function karir()
    {
        return '<a href=https://www.educastudio.com/program/karir>Program Karir Educa Studio</a>';
    }
    public function magang()
    {
        return '<a href=https://www.educastudio.com/program/magang>Program Magang Educa Studio</a>';
    }
    public function kunjungan()
    {
        return '<a href=https://www.educastudio.com/program/kunjungan-industri>Program Kunjungan Industri Educa Studio</a>';
    }
    public function about()
    {
        return '<a href=https://www.educastudio.com/about-us>Tentang Educa Studio</a>';
    }
}

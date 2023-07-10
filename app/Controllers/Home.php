<?php

namespace App\Controllers;

use App\Models\PaketModel;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$builder = $db->table('tbl_paket');
		$builder->select('*');
		$query = $builder->get();

		$data['title'] = 'Kursus Mengemudi Indera';
		$data['paket'] = $query->getResultArray();
		// dd($data);
		return view('frontend/index', $data);
	}

	public function tentang()
	{
		$data = [
			'title' => 'Tentang - Kursus Mengemudi Indera'
		];
		return view('frontend/pages/tentang', $data);
	}
	public function struktur()
	{
		$data = [
			'title' => 'Struktur - Kursus Mengemudi Indera'
		];
		return view('frontend/pages/struktur', $data);
	}
	public function visimisi()
	{
		$data = [
			'title' => 'Visi Misi - Kursus Mengemudi Indera'
		];
		return view('frontend/pages/visimisi', $data);
	}
	public function akreditasi()
	{
		$data = [
			'title' => 'Akreditasi & Perijinan - Kursus Mengemudi Indera'
		];
		return view('frontend/pages/akreditasi', $data);
	}
	public function sarana()
	{
		$data = [
			'title' => 'Sarana dan Prasarana - Kursus Mengemudi Indera'
		];
		return view('frontend/pages/sarana', $data);
	}

	public function whatsapp()
	{
		$data = [
			'title' => 'Whatsapp - Kursus Mengemudi Indera'
		];
		return view('frontend/pages/link', $data);
	}
}
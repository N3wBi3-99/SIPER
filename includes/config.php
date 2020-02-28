<?php
	// Penggunaan base_url pada php native
	function base_url($url = NULL){
		if ($url != NULL)
		{
			$baseurl = 'http://localhost/pkl/'.$url;
		}
		else	
		{
			$baseurl = 'http://localhost/pkl/';
		}
		
		return $baseurl;
	}

	function tgl_indo($tanggal, $cetak_hari = false)
	{
		$hari = array ( 1 =>    'Senin',
					'Selasa',
					'Rabu',
					'Kamis',
					'Jumat',
					'Sabtu',
					'Minggu'
				);
				
		$bulan = array (1 =>   'Januari',
					'Februari',
					'Maret',
					'April',
					'Mei',
					'Juni',
					'Juli',
					'Agustus',
					'September',
					'Oktober',
					'November',
					'Desember'
				);
		$split 	  = explode('-', $tanggal);
		$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
		
		if ($cetak_hari) {
			$num = date('N', strtotime($tanggal));
			return $hari[$num] . ', ' . $tgl_indo;
		}
		return $tgl_indo;
	}
	
	class database { // membuat koneksi ke database
		var $servername = "localhost";
		var $database = "db_pkl";
		var $username = "root";
		var $password = "";
		public $koneksi = "";

		function __construct()
		{
			$this->koneksi = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
			// mengecek koneksi
			if (mysqli_connect_errno()){
				echo "Koneksi database gagal : " . mysqli_connect_error();
			}
			//mysqli_close($conn);
		}   
	}

// validasi login

// validasi form
?>
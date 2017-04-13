<?php
if ( ! function_exists('acakPass')){
	function acakPass($string){
		$acak = '!@#$%12345_9876';
		$password = md5($acak.md5($acak.md5($string).$acak).$acak);
		return $password;
	}
}

if ( ! function_exists('readMore')){
	function readMore($string){
		return substr($string,0,150).' ...';
	}
}

if ( ! function_exists('formatRp')){
	function formatRp($nomimal){
		$angka = $nomimal;
		$jumlah_desimal = 0;
		$pemisah_desimal = ",";
		$pemisah_ribuan = ".";
		return "Rp ".number_format($angka, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan).",-";
	}
}
?>
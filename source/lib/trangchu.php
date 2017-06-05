<?php
function TinMoiNhat_MotTin()
{
	$query = "
				SELECT * FROM tin
				ORDER BY idTin DESC
				LIMIT 0,1
	";
	return mysql_query($query);
}

function TinMoiNhat_NamTin()
{
	$query = "
				SELECT * FROM tin
				ORDER BY idTin DESC
				LIMIT 1,5
	";
	return mysql_query($query);
}

function TinXemNhieuNhat()
{
	$query = "
				SELECT * FROM tin
				ORDER BY SoLanXem DESC
				LIMIT 0,6
	";
	return mysql_query($query);
}

function TinMoiNhat_TheoLoaiTin_MotTin($idLT)
{
	$query = "
				SELECT * FROM tin
				WHERE idLT=$idLT
				ORDER BY idTin DESC
				LIMIT 0,1
	";
	return mysql_query($query);
}

function TinMoiNhat_TheoLoaiTin_NamTin($idLT)
{
	$query = "
				SELECT * FROM tin
				WHERE idLT=$idLT
				ORDER BY idTin DESC
				LIMIT 1,5
	";
	return mysql_query($query);
}
function TenLoaiTin($idLT)
{
	$query= "SELECT Ten
			FROM loaitin
			WHERE idLT=$idLT
	";
	$loaitin= mysql_query($query);
	$row= mysql_fetch_array($loaitin);
	return $row['Ten'];
}

function QuangCao($vitri)
{
	$query= "
				SELECT *
				FROM quangcao
				WHERE vitri=$vitri
	";
	return mysql_query($query);
}

function DsTheLoai()
{
	$query = "
				SELECT * FROM theloai
	";
	return mysql_query($query);
}

function DsLoaiTin_Theo_TheLoai($idTL)
{
	$query = "
				SELECT * FROM loaitin
				WHERE idTL=$idTL
			";
	return mysql_query($query);	
}

function TinMoi_BenTrai($idTL)
{
	$query = "
				SELECT * FROM tin
				WHERE idTL=$idTL
				ORDER BY idTin DESC
				LIMIT 0,1
	";
	return mysql_query($query);
}

function TinMoi_BenPhai($idTL)
{
	$query = "
				SELECT * FROM tin
				WHERE idTL=$idTL
				ORDER BY idTin DESC
				LIMIT 1,2
	";
	return mysql_query($query);
}

function TinTheoLoaiTin($idLT){
	$query = "
				SELECT * from tin
				WHERE idLT = $idLT
				ORDER BY idTin DESC
	";
	return mysql_query($query);
}

function TinTheoLoaiTin_PhanTrang($idLT, $from, $sotin1trang){
	$query = "
				SELECT * from tin
				WHERE idLT = $idLT
				ORDER BY idTin DESC
				LIMIT $from, $sotin1trang
	";
	return mysql_query($query);
}

function ViTriDung($idLT)
{
	$query = "
				SELECT TenTL, Ten
				FROM theloai, loaitin
				WHERE theloai.idTL = loaitin.idTL
				AND idLT = $idLT
	";
	return mysql_query($query);
}

function ChiTietTin($idTin){
	$query = "
				SELECT * FROM tin
				WHERE idTin=$idTin
	";
	return mysql_query($query);
}

function TinCungLoaiTin($idTin,$idLT){
	$query = "
				SELECT * FROM tin
				WHERE idTin <> $idTin
				AND idLT = $idLT
				ORDER BY RAND()
				LIMIT 0,3
	";
	return mysql_query($query);
}

function CapNhatSoLanXem($idTin){
	$query = "
				UPDATE tin
				SET SoLanXem = SoLanXem + 1
				WHERE idTin = $idTin
	";
	mysql_query($query);
	}
	
function TimKiem($tukhoa){
	
		$query = "
				SELECT * FROM tin
				WHERE TieuDe REGEXP '$tukhoa'
				ORDER BY idTin DESC
		";
		return mysql_query($query);
}
?>
<?php
session_start();
require_once 'baglanti.php';


if (isset($_POST['ayarkaydet'])) {
	
	$uploads_dir ='../resimler/logo';
	@$tmp_name=$_FILES['logo']["tmp_name"];
	@$name=$_FILES['logo']["name"];

	$sayi1 = rand(1,9999);
	$sayi2 = rand(1,9999);
	$sayi3 = rand(1,9999);

	$sayilar = $sayi1.$sayi2.$sayi3;
	$resimyolu =$sayilar.$name;

	@move_uploaded_file($tmp_name,"$uploads_dir/$sayilar$name");
	
	$duzenle=$baglanti->prepare("UPDATE ayarlar SET

		baslik=:baslik,
		aciklama=:aciklama,
		anahtarkelime=:anahtarkelime,
		logo=:logo

		WHERE id=1 

		");

	$update=$duzenle->execute(['baslik'=>$_POST['baslik'], 'aciklama'=>$_POST['aciklama'], 'anahtarkelime'=>$_POST['anahtarkelime'], 'logo'=>$resimyolu]);


	if ($update) {
		
		$resimsil =$_POST['eskilogo'];
		unlink("../resimler/logo/$resimsil");

		header("Location:../ayarlar.php?yuklenme=basarili");
	}
	else{
		header("Location:../ayarlar.php?yuklenme=basarisiz");
	}

}


if (isset($_POST['iletisimkaydet'])) {

	$duzenle=$baglanti->prepare("UPDATE ayarlar SET 
	
	telefon=:telefon,
	email=:email,
	adres=:adres,
	mesai=:mesai


	WHERE id=1
	
	
	");

	$update=$duzenle->execute(['telefon'=>$_POST['telefon'], 'email'=>$_POST['email'], 'adres'=>$_POST['adres'], 'mesai'=>$_POST['mesai']]);


	if ($update) {
	header("Location:../iletisim.php?yuklenme=basarili");
	}
	else{
	header("Location:../iletisim.php?yuklenme=basarisiz");
	}



}


if(isset($_POST['sosyalmedyakaydet'])){
	
	$duzenle=$baglanti->prepare("UPDATE ayarlar SET
	
	
	facebook=:facebook,
	instagram=:instagram,
	youtube=:youtube,
	twitter=:twitter

	WHERE id=1

	");

	$update=$duzenle->execute(['facebook'=>$_POST['facebook'],'instagram'=>$_POST['instagram'], 'youtube'=>$_POST['youtube'], 'twitter'=>$_POST['twitter']]);

	
	if ($update) {
		header("Location:../sosyalmedya.php?yuklenme=basarili");
		}
		else{
		header("Location:../sosyalmedya.php?yuklenme=basarisiz");
		}
	

}


if (isset($_POST['hakkimizda_kaydet'])) {


	$uploads_dir ='../resimler/resim';
	@$tmp_name=$_FILES['resim']["tmp_name"];
	@$name=$_FILES['resim']["name"];

	$sayi1 = rand(1,9999);
	$sayi2 = rand(1,9999);
	$sayi3 = rand(1,9999);

	$sayilar = $sayi1.$sayi2.$sayi3;
	$resimyolu = $sayilar.$name;


	@move_uploaded_file($tmp_name,"$uploads_dir/$sayilar$name");
	

	
	$duzenle=$baglanti->prepare("UPDATE hakkimizda SET

		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_detay=:hakkimizda_detay,
		hakkimizda_vizyon=:hakkimizda_vizyon,
		hakkimizda_misyon=:hakkimizda_misyon,
		hakkimizda_resim=:hakkimizda_resim

		WHERE hakkimizda_id=1 

		");

	$update=$duzenle->execute([
		'hakkimizda_baslik'=>$_POST['baslik'],
		'hakkimizda_detay'=>$_POST['detay'],
		'hakkimizda_vizyon'=>$_POST['vizyon'],
		'hakkimizda_misyon'=>$_POST['misyon'],
		'hakkimizda_resim'=>$resimyolu]);


	if ($update) {


		$resimsil =$_POST['eskiresim'];
		unlink("../resimler/resim/$resimsil");		
		

		header("Location:../hakkimizda.php?yuklenme=basarili");
	}
	else{
		header("Location:../hakkimizda.php?yuklenme=basarisiz");
	}

}
	if (isset($_POST['girisyap'])) {

		$kadi =htmlspecialchars($_POST['kadi']);
		$sifre =htmlspecialchars($_POST['sifre']);
		$sifreguclu= md5($sifre);
		

		$kullanicisor =$baglanti->prepare("SELECT * FROM kullanici WHERE kullanici_adi=:kullanici_adi AND kullanici_sifre=:kullanici_sifre");
		$kullanicisor->execute(['kullanici_adi'=>$kadi , 'kullanici_sifre'=>$sifreguclu]);

		$var =$kullanicisor->rowCount();

		
		if($var > 0 ){

			
			$_SESSION['girisbelgesi']=$kadi;
			header("Location:../index?durum=hosgeldin");

		}
		
		else {
			header("Location:../login?durum=hata");
			
		}


	}


	if (isset($_POST['uyeler_kaydet'])) {

	
		$kadi =htmlspecialchars($_POST['kadi']);
		
		$sifre =htmlspecialchars($_POST['sifre']);
		$adsoyad =htmlspecialchars($_POST['adsoyad']);
		$sifreguclu= md5($sifre);

		$kullanicisor =$baglanti->prepare("SELECT * FROM kullanici WHERE kullanici_adi=:kullanici_adi");
		$kullanicisor->execute(['kullanici_adi'=>$kadi]);
		$var =$kullanicisor->rowCount();


		



		

		$uploads_dir ='../resimler/kullanici';
		@$tmp_name=$_FILES['resim']["tmp_name"];
		@$name=$_FILES['resim']["name"];

		$sayi1 = rand(1,9999);
		$sayi2 = rand(1,9999);
		$sayi3 = rand(1,9999);

		$sayilar = $sayi1.$sayi2.$sayi3;
		$resimyolu =$sayilar.$name;

		@move_uploaded_file($tmp_name,"$uploads_dir/$sayilar$name");

		
		
			


		$kullanicikaydet=$baglanti->prepare("INSERT into kullanici SET


		kullanici_adi=:kullanici_adi,
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_sifre=:kullanici_sifre,
		kullanici_yetki=:kullanici_yetki,
		kullanici_resim=:kullanici_resim

		

		");

		$insert=$kullanicikaydet->execute(['kullanici_adi'=>$kadi,'kullanici_adsoyad'=>$adsoyad, 'kullanici_sifre'=>$sifreguclu, 'kullanici_yetki'=>2, 'kullanici_resim'=>$resimyolu]);


		if ($insert) {
			header("Location:../uyeler-ekle.php?yuklenme=basarili");
			}
		else{
			header("Location:../uyeler-ekle.php?yuklenme=basarisiz");
			}

			if ($var > 0) {
			
				header("Location:../uyeler-ekle.php?yuklenme=kullanicivar");
			}
			else{
				
				echo "boyle bir kullanıc yok";
			}

	}

	if (isset($_GET['kullanicisil'])) {
		
		$kullanici_sil=$baglanti->prepare("DELETE  FROM kullanici where kullanici_id=:kullanici_id");


		$kullanici_sil->execute(['kullanici_id'=>$_GET['id']]);

		if ($kullanici_sil) {
			header("Location:../uyeler?durum=basarili");

		}

		else {
			header("Location:../uyeler?durum=basarisiz");
		}

	
	}




	if (isset($_POST['kategori_kaydet'])) {
		
		echo $_POST['kategori_durum'];




	}





?>
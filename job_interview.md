## 1.1 Latar Belakang

 dilihat dari apa yang terjadi saat ini, pola hidup orang orang didunia, semakin berkembangnya teknologi didunia, apa apa semakin mudah, orang orang bukannya memanfaatkan hal itu dengan baik, malah sebaliknya, semakin hidup dipermudah, semakin banyak orang orang yang menyia-nyiakan hal itu. pola hidup orang-orang saat ini tergolong tidak sehat, entah itu hidup boros, jarang olahraga dan masih banyak lagi, dan pola hidup yang tidak sehat dapat berdampak negatif pada kesehatan fisik dan mental. oleh karena itu, saya membuat website yang bertujuan untuk mengedukasi semua orang atau pengguna agar mereka mulai dengan perlahan menjalankan pla hidup yang sehat. good habits adalah website yang dibuat bertujuan untuk memberikan dampak baik untuk para pengguna, sehingga pengguna mendapatkan hidup yang teratur dan terstruktur, website ini memberikan edukasi dan menuntun pengguna agar pengguna perlahan bisa berubah menjadi lebih baik.  
## 1.2. Deksripsi Teknologi Informasi

website ini bertujuan untuk memberikan edukasi para pengguna agar perlahan mereka bisa menjalankan atau merubah pola hidup yang sehat dan lebih baik.

## 1.3. Branding


pada tahap ini saya akan mengeksplorasi branding dari produk yang saya buat.

-Merk : goodHABITS

-Tagline : Make your life better

-campaign : bagaimana membuat aplikasi/website yang penggunanya dapat menggunakan beberapa fitur yang dapat diakses oleh semua pengguna (ada beberapa fitur yang dapat diakses jika user sudah login), gunanya untuk mengedukasi pengguna agar memiliki pola hidup yang sehat.

-target user :
	
 *usia 10+ 
 
 *pengguna mendapatkan beberapa informasi mengenai pola hidup sehat, 
 
 *pengguna dapat mengeksplorasi beberapa cara agar memiliki pola hidup yang sehat, 
 
 *terdapat beberapa fitur yang bisa digunakan sebagai kebutuhan pengguna dalam proses merubah kebiasaan hidup,
  
-UX theme : 
  
  *simple
	
 *warna tidak mencolok
	
 *fitur mudah
	
 *to the point
 
-*tidak ada inspirasi desain, membuat sendiri

## 2. User Story

Sebagai | Saya ingin bisa | Sehingga | Prioritas
---|---|---|---
Pengguna | mengakses fitur atau menu dalam website | bisa menjalankan dam mengakses apa saja yang ada didalam beberapa fitur/menu tersebut | ⭐⭐⭐⭐⭐
Pengguna | Register | Bisa mendaftarkan akun dan biodata diri, agar dapat memasukan akun kedalam menu login | ⭐⭐⭐⭐⭐
Pengguna | Login | Bisa mengakses semua fitur yang tersedia pada website | ⭐⭐⭐⭐
Pengguna | Menjalankan beberapa fitur dan menggunakannya dengan baik  | sehingga | ⭐⭐⭐⭐
Pengguna | Mengakses menu utama | Membaca artikel atau beberapa cara yang disarankan agar memiliki pola hidup yang sehat | ⭐⭐⭐
Pengguna | Mengakses menu menabung | Pengguna dapat membuat daftar pemasukan dan pengeluaran harian agar tabungannya teratur dan terdata dengan baik | ⭐⭐⭐
Pengguna | Mengakses menu olahraga | Pengguna dapat melakukan olahraga harian secara teratur dan terstruktur | ⭐⭐⭐
Pengguna | Mengakses menu list harian | Pengguna dapat melakukan list harian atau mencatat kegiatan harian agar pengguna memiliki jadwal kegiatan yang terstruktur | ⭐⭐⭐
Pengguna | memasukan foto profil hingga data diri  | Pengguna dapat memasukan data diri dan foto profil sesuka hati pengguna | ⭐⭐
Pengguna | Mengubah foto profil hingga data diri | Pengguna dapat melakukan perubahan pada identitas diri dan foto profil tanpa adanya keterbatasan | ⭐⭐
Pengguna | Melihat menu saldo tabungan | Pengguna dapat mengetahui jumlah pemasukan dan pengeluaran| ⭐⭐
Pengguna | Memasuki halaman resep makanan | Pengguna dapat melihat beberapa menu mudah yang telah disarankan | ⭐

## 3. Struktur Data

Cara membuat aneka macam bentuk grafik menggunakan mermaid.js bisa lihat di [https://mermaid.js.org/syntax/entityRelationshipDiagram.html](https://mermaid.js.org/syntax/entityRelationshipDiagram.html) 

```mermaid
erDiagram
    Users ||--o{ Login : User_Login
    Login {
        int id_pengguna
	var username
	var email
	var password
    }
	Users ||--o{ Register : User_Register
	Register {
	id user
	var Username
	var Email
	var Password
	var Confirm_Password
	}
	Login ||--o{ Saldo_Tabungan : user-dapat-mengecek-saldo
	Saldo_Tabungan {
	int Saldo-tabungan
	var Riwayat-Menabung
	var Riwayat-pengeluaran
	}
	Login ||--o{ Profil : pengguna-dapat-mengisi-profil-setelah-login
	Profil {
	img foto-profil
	icon Social_media
	var username
	string pekerjaan
	}
	Profil ||--o{ Edit_Profil : Pengguna-dapat-mengedit-profil
	Edit_Profil{
	img ganti-foto-profil
	var ganti-username
	var tambah-pekerjaan
	var tambah-social-media
	}
	Register ||--o{ Login : User_login_Setelah_Register
    Users ||--o{  dapat-mengakses-beberapa-fitur-tetapi-tidak-bisa-menyimpan-data : User_tidak_Login
    Login ||--o{ AksesFitur : userDapatMengakses
	AksesFitur {
	int Tabungan
	var List_Kegiatan
	var workout
	var Menu_Utama
	}
	AksesFitur||--o{ Fitur_Tabungan: user_mengakses_fitur_yang_ada_dilaman_tabungan
	Fitur_Tabungan {
	datetime Tanggal_Menabung
	int jumlah-yang-ditabung
	Data Disimpan_didatabase
	}

	AksesFitur||--o{ List_Kegiatan : user-dapat-menambahkan-jenis-kegiatan
	List_Kegiatan {
	var Nama_kegiatan
	datetime Waktu_kegiatan
	check List_Check
	
	}
	AksesFitur||--o{ Workout : User-dapat-mengikuti-jadwal-workout-harian
	Workout {
	int rep
	int set
	Check Check
	Data Progres_disimpan
	}
	AksesFitur ||--o{ Menu_utama : User_dapat_membaca_dimenu_utama
	Menu_utama {
	string Artikel
	String Resep
	link Tabungan
	link List_Kegiatan
	}
	
```

## 4. Arsitektur Sistem

Masih pake mermaid.js juga bisa lihat flowchart di [https://mermaid.js.org/syntax/flowchart.html](https://mermaid.js.org/syntax/flowchart.html)

## 5. Teknologi, Library, dan Framework

bla bla bla

## 6. Desain User Experience dan User Interface

Bisa load image 
![Contoh](https://www.figma.com/file/eoIku4dRjOtSuh9BZlMG42/Untitled?type=design&node-id=0%3A1&mode=design&t=dGL6aNI2mYmfykS9-1)

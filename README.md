
Sprint 1
1. Integrasi dengan API province & city Rajaongkir (paket starter)
https://rajaongkir.com/dokumentasi/starter
2. Membuat artisan command​ yg melakukan fetching API data provinsi & kota dan data
disimpan ke dalam database.
3. Membuat REST API untuk pencarian provinsi & kota dengan endpoint berikut:
a. [GET] /search/provinces?id={province_id} <br>
b. [GET] /search/cities?id={city_id} <br>
<br><br>
cara menginstall<br>
1. clone repositori<br>
2. branch sprint1<br>
   -> buat database dengan nama 'dot_rajaongkir'<br>
   -> jalankan migration terlebih dahulu dengan cara 'php artisan migrate'<br>
   -> lalu jalankan aplikasi dg cara 'php artisan serve'<br>
3. setelah aplikasi berjalan arahkan ke<br>
   http://127.0.0.1:8000/get_city dan<br>
   http://127.0.0.1:8000/get_province<br>
   kedua api ini bertujuan untuk mengkonsum api dari rajaongkir lalu disimpan ke database<br>
5. kemudian cek di database apakah sudah masuk semua hasil pengambilan data<br>
6. untuk memanggil api province dengan id tertentu dapat dilakukan dengan memanggil<br>
   http://127.0.0.1:8000/search/provinces?id={province_id} , misalnya province_id = 1<br>
   http://127.0.0.1:8000/search/provinces?id=1<br>
6. untuk memanggil api city dengan id tertentu dapat dilakukan dengan memanggil<br>
   http://127.0.0.1:8000/search/provinces?id={city_id} , misalnya city_id = 1<br>
   http://127.0.0.1:8000/search/provinces?id=1<br>
   
atau dapat juga jalankan di insomnia dengan url dan param id yg sama

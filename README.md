
Sprint 1
1. Integrasi dengan API province & city Rajaongkir (paket starter)
https://rajaongkir.com/dokumentasi/starter
2. Membuat artisan command​ yg melakukan fetching API data provinsi & kota dan data
disimpan ke dalam database.
3. Membuat REST API untuk pencarian provinsi & kota dengan endpoint berikut:
a. [GET] /search/provinces?id={province_id}

b. [GET] /search/cities?id={city_id}
Data API pencarian ini mengambil dari database.


cara menginstall
1. clone repositori
2. branch sprint1
   -> buat database dengan nama 'dot_rajaongkir'
   -> jalankan migration terlebih dahulu dengan cara 'php artisan migrate'
   -> lalu jalankan aplikasi dg cara 'php artisan serve'
3. setelah aplikasi berjalan arahkan ke
   http://127.0.0.1:8000/get_city dan
   http://127.0.0.1:8000/get_province
   kedua api ini bertujuan untuk mengkonsum api dari rajaongkir lalu disimpan ke database
5. kemudian cek di database apakah sudah masuk semua hasil pengambilan data
6. untuk memanggil api province dengan id tertentu dapat dilakukan dengan memanggil
   http://127.0.0.1:8000/search/provinces?id={province_id} , misalnya province_id = 1
   http://127.0.0.1:8000/search/provinces?id=1
6. untuk memanggil api city dengan id tertentu dapat dilakukan dengan memanggil
   http://127.0.0.1:8000/search/provinces?id={city_id} , misalnya city_id = 1
   http://127.0.0.1:8000/search/provinces?id=1
   
atau dapat juga jalankan di insomnia dengan url dan param id yg sama

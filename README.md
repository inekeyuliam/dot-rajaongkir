
Sprint 2
- Membuat sumber data pencarian province & cities bisa melalui database​ atau direct API​ raja ongkir (swapable implementation). Proses swap implementasi dapat dilakukan melalui <br>
konfigurasi tanpa merubah source code yang sudah dibuat.<br>
- Menyediakan API login agar endpoint pencarian hanya bisa diakses oleh authorized user saja.<br>
- Membuat unit test / API test agar web service tetap reliable & maintainable<br>
<br><br><br>
cara menginstall<br>
1. clone repositori<br>
2. branch sprint2<br>
   -> buat database dengan nama 'dot_rajaongkir'<br>
   -> jalankan migration terlebih dahulu dengan cara 'php artisan migrate'<br>
   -> jalankan tinker terlebih dahulu 'php artisan tinker' <br>
   -> jalankan factory terlebih dahulu 'factory(App\User::class, 10)->create();' <br>
   -> catat email yang dihasilkan dari factory 
   -> lalu jalankan aplikasi dg cara 'php artisan serve'<br>
3. buka insomnia pilih GET dan masukan url http://127.0.0.1:8000/login dan <br>
   parameter JSON type misalnya.<br>
   {<br>
       "email": "tod28@example.org",<br>
       "password": "123"<br>
   } <br>
   maka kita akan mendapatkan api_token dari respons api login tersebut.<br>
5. tambah request baru di insomnia untuk memanggil search province <br>
6. untuk memanggil api province dengan id tertentu dapat dilakukan dengan memanggil<br>
   http://127.0.0.1:8000/search/provinces?id={province_id} , misalnya province_id = 1<br>
   http://127.0.0.1:8000/search/provinces?id=1<br>
   dan juga pada auth types masukan Bearer token dengan token yang didapatkan saat login tadi lalu jalankan<br>
6. untuk memanggil api city dengan id tertentu dapat dilakukan dengan memanggil<br>
   http://127.0.0.1:8000/search/provinces?id={city_id} , misalnya city_id = 1<br>
   http://127.0.0.1:8000/search/provinces?id=1<br>
   dan juga pada auth types masukan Bearer token dengan token yang didapatkan saat login tadi lalu jalankan<br>
7. UNIT TEST<br>
   1. jalankan php artisan test<br>
   2. semua test passed<br>

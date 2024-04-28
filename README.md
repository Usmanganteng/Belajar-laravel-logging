<b>requirement/persyaratan</b>
---
> #### Php versi 8
>> - Cara menginstal php dalam bahasa indonesia : https://youtu.be/Uw3ZGIMvIdA?si=mBVZ-lBnoCilASzo
>>- Cara menginstal php dalam bahasa inggris : https://youtu.be/MPRLUd8Pmyo?si=FqN54nVr4duH4Keg
---
> #### Laravel versi 9.1.10
>> - cara menginstal laravel yang versi yang sama 
```
   Composer Create-project laravel\laravel=v9.1.10 nama-folder
```
>> - Cara tahu laravel sekarang versi berapa : https://packagist.org/packages/laravel/laravel
---
<b>Materi/poin utama</b>
---
> #### Logging Configuration
> - Konfigurasi logging adalah proses menentukan bagaimana dan di mana pesan logging akan dicatat, termasuk tingkat logging, format, tujuan penyimpanan, rotasi log, dan filter pesan.
>
> #### Log Facade
> - Log Facade adalah fitur dalam kerangka kerja Laravel yang memungkinkan kamu untuk mencatat pesan log dengan mudah ke dalam berbagai saluran log yang telah dikonfigurasi. Ini membantu dalam memantau dan memecahkan masalah dalam aplikasi secara efisien.
> - contoh pesan dan code nya :
> ```
> // Menulis pesan log menggunakan Log Facade
> Log::info('This is an information message');
> Log::error('This is an error message');
> ```
> - ini link Log pesan : https://laravel.com/api/11.x/Illuminate/Support/Facades/Log.html
> #### Multiple Log Channel
> - Multiple Log Channel adalah kemampuan dalam Laravel yang memungkinkan kamu untuk mencatat pesan log ke beberapa saluran log secara bersamaan, memungkinkan pemantauan dan pemecahan masalah yang lebih efektif.
> - contoh code yang di gunakan di config/logging.php :
>  ```
>  'channels' => [
>   'stack' => [
>       'driver' => 'stack',
>       'channels' => ['daily', 'slack'],
>   ],
>  
>  'daily' => [
>       'driver' => 'daily',
>       'path' => storage_path('logs/laravel.log'),
>       'level' => 'debug',
>       'days' => 7,
>   ],
>
>   'slack' => [
>       'driver' => 'slack',
>       'url' => env('LOG_SLACK_WEBHOOK_URL'),
>       'username' => 'Laravel Log',
>       'emoji' => ':boom:',
>       'level' => 'critical',
>   ],
> ],
>  ```
> - penjelasan : Tambahkan channel log baru seperti 'daily' (untuk file log harian) dan 'slack' (untuk pesan Slack), serta gunakan 'stack' untuk mencatat pesan log ke beberapa tempat secara bersamaan. Sesuaikan konfigurasi sesuai kebutuhan aplikasi dan lingkungan pengembangan.
> #### Context
> - Context dalam logging adalah informasi tambahan yang disertakan bersama dengan pesan log untuk memberikan konteks atau detail lebih lanjut tentang peristiwa yang terjadi, membantu dalam pemecahan masalah dan pemantauan kinerja aplikasi.
> ####  Selected Channel
> - Selected Channel dalam logging Laravel adalah saluran log tertentu yang dipilih untuk menerima pesan log dari aplikasi. Ini memungkinkan pengguna untuk mengarahkan pesan log ke saluran yang sesuai dengan kebutuhan aplikasi, seperti file teks, sistem log, atau layanan pihak ketiga seperti Slack.
> - contoh code yang di gunakan di config/logging.php :
> ```
> 'channels' => [
>   'stack' => [
>       'driver' => 'stack',
>       'channels' => ['daily', 'slack'],
>   ],
>
>   'daily' => [
>       'driver' => 'daily',
>       'path' => storage_path('logs/laravel.log'),
>       'level' => 'debug',
>       'days' => 7,
>   ],
>
>   'slack' => [
>       'driver' => 'slack',
>       'url' => env('LOG_SLACK_WEBHOOK_URL'),
>       'username' => 'Laravel Log',
>       'emoji' => ':boom:',
>       'level' => 'critical',
>   ],
> ],
> ```
> - penjelasan : Contoh penggunaan Selected Channel dalam logging Laravel: kita dapat mengarahkan pesan log ke saluran yang sesuai dengan kebutuhan, seperti file harian atau Slack, untuk memantau dan memecahkan masalah aplikasi dengan lebih efektif.
> #### Handler
> - Handler dalam logging adalah bagian dari sistem yang menangkap pesan log dan mengirimkannya ke tujuan yang ditentukan, seperti file, sistem log, email, atau layanan pihak ketiga seperti Slack.
> #### Formatter
> - Formatter dalam logging mengatur format dari pesan log sebelum pesan tersebut disampaikan ke tujuan yang ditentukan, seperti file atau layanan pihak ketiga. Ini memungkinkan pengguna untuk mengatur tampilan pesan log sesuai kebutuhan aplikasi, seperti struktur, tata letak, dan informasi tambahan yang ingin disertakan.
---
  <b align = "center"><h3>TERIMA KASIH</h3></b>

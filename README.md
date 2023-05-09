# Laliga Official App

Laliga app adalah mini applikasi berbasis website untuk memonitoring score pada pertandingan sepak bola, kita juga bisa membuat dan sekaligus mengupdatenya langsung scorenya.

## Features

-   Form validation
-   Tambah data team sepak bola
-   Input data pertandingan sepak bola
-   Multiple input data team sepak bola ( opsional )
-   Monitoring score pertandingan sepak bola

## Preview

Preview homepage

![laliga](/public/assets/preview/preview.png)

## Halaman Teams

Preview teams

![laliga](/public/assets/preview/preview-teams.png)

Tambah data team

![laliga](/public/assets/preview/tambah-team.png)

Hapus data team jika tidak di butuhkan lagi

![laliga](/public/assets/preview/hapus-team.png)

Form validation ( +unique )

![laliga](/public/assets/preview/validation-team.png)

## Halaman Input Pertandingan

Preview pertandingan

![laliga](/public/assets/preview/preview-pertandingan.png)

Data yang di ambil di select sudah relasi ke data team

![laliga](/public/assets/preview/selecet-relasi-pertandingan.png)

Tambah data pertandingan ( single )

![laliga](/public/assets/preview/tambah-data-pertandingan.png)

Tambah data pertandingan ( multiple )

![laliga](/public/assets/preview/multiple-data-pertandingan.png)

![laliga](/public/assets/preview/multiple-data-pertandingan-success.png)

Hapus data team jika tidak di butuhkan lagi

![laliga](/public/assets/preview/hapus-pertandingan.png)

Form validation

![laliga](/public/assets/preview/validation-pertandingan.png)

## Halaman Monitoring Pertandingan

Preview monitoring

![laliga](/public/assets/preview/preview-monitoring.png)

Setting score pertandingan

![laliga](/public/assets/preview/setting-score.png)

![laliga](/public/assets/preview/update-score.png)

![laliga](/public/assets/preview/setting-score-2.png)

![laliga](/public/assets/preview/update-score-2.png)

### satset installation

```bash
git clone https://github.com/JfeStudio/laliga-app.git 'project'
cd project
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

## Authors

Laliga is created by [Maman](https://github.com/JfeStudio).

# Tubes CC Microservice (Gateway + Auth-Service + Project-Service)

## Deskripsi

Project ini merupakan implementasi arsitektur **Microservices** menggunakan framework **Laravel** dan **Docker Compose** sebagai bagian dari Tugas Besar Mata Kuliah Cloud Computing.

Aplikasi yang dibangun adalah **Restaurant Management System** yang memiliki tiga service utama, yaitu Gateway Service, Authentication Service, dan Project Service. Gateway bertindak sebagai pintu masuk seluruh request dari client, sedangkan Auth Service menangani autentikasi pengguna dan Project Service mengelola data kategori, menu, serta resep makanan.

Seluruh service berjalan pada container Docker yang saling terhubung melalui satu network sehingga dapat berkomunikasi menggunakan nama service masing-masing.

## Arsitektur
Proyek ini merupakan aplikasi microservice berbasis **Laravel** yang terdiri dari:
- **gateway**: UI (Blade) + reverse proxy sederhana ke API antar service.
- **auth-service**: autentikasi (login/register) via API.
- **project-service**: manajemen data (contoh: categories/menus/recipes) via API.

Semua service dijalankan dengan **Docker Compose** dalam network yang sama.

## Teknologi yang Digunakan

* Laravel 12
* PHP 8.x
* Docker
* Docker Compose
* SQLite
* REST API
* Bootstrap 5
* Blade Template Engine

## Arsitektur Sistem
           Browser
               │
               ▼
      Gateway Service
          │        │
          ▼        ▼
 Auth Service   Project Service
                    │
                    ▼
              SQLite Database

## Fitur

- Login dan Register
- Dashboard Admin
- Dashboard User
- Manajemen Categories
- Manajemen Menus
- Manajemen Recipes
- REST API Communication
- Dockerized Microservices

## Akses Aplikasi

Gateway

http://localhost:8000

Auth Service API

http://localhost:8001

Project Service API

http://localhost:8002

## Cara Jalankan (Docker Compose)
Pastikan Docker Desktop sudah aktif, lalu jalankan dari root repository ini:

```bash
docker compose up --build
```

## Port Service
Dari `docker-compose.yml`:
- **gateway**: http://localhost:8000
- **auth-service**: http://localhost:8001 (API)
- **project-service**: http://localhost:8002 (API)

> Catatan: gateway melakukan request internal ke service menggunakan nama host container `auth-service` dan `project-service`.

## Endpoint yang Dipakai Gateway
Berdasarkan `gateway/routes/web.php`, gateway memetakan:
- Halaman frontend:
  - `/` -> `welcome`
  - `/login-page` -> `login`
  - `/register-page` -> `register`
  - `/dashboard` -> `dashboard`
  - `/categories-page` -> `categories`
  - `/menus-page` -> `menus`
  - `/recipes-page` -> `recipes`
  - `/dashboard-user` -> `dashboard-user`

- API Auth (via gateway):
  - `POST /login` -> `http://auth-service:8000/api/login`
  - `POST /register` -> `http://auth-service:8000/api/register`

- API Project (via gateway):
  - `GET /project/categories` -> `http://project-service:8000/api/categories`
  - `GET /project/menus` -> `http://project-service:8000/api/menus`
  - `POST /project/menus` -> `http://project-service:8000/api/menus`
  - `PUT /project/menus/{id}` -> `http://project-service:8000/api/menus/{id}`
  - `DELETE /project/menus/{id}` -> `http://project-service:8000/api/menus/{id}`
  - `GET /project/recipes` -> `http://project-service:8000/api/recipes`
  - `POST /project/recipes` -> `http://project-service:8000/api/recipes`
  - `PUT /project/recipes/{id}` -> `http://project-service:8000/api/recipes/{id}`
  - `DELETE /project/recipes/{id}` -> `http://project-service:8000/api/recipes/{id}`

## Konfigurasi Database (SQLite)
Di `docker-compose.yml`, baik `auth-service` maupun `project-service` memakai:
- `DB_CONNECTION=sqlite`
- `DB_DATABASE=/app/database/database.sqlite`

## Stop Service
```bash
docker compose down
```

## Troubleshooting Singkat
- Pastikan port 8000/8001/8002 belum dipakai aplikasi lain.
- Jika database SQLite belum ada, pastikan migration/seed dijalankan sesuai kebutuhan service.

## Struktur Folder Utama
- `gateway/`
- `auth-service/`
- `project-service/`

## Referensi
- `docker-compose.yml`
- `gateway/routes/web.php`


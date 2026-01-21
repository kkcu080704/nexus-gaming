# 🎮 NEXUS GAMING: Next-Gen Review Portal

![Nexus Gaming Banner](https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=1200)

**Nexus Gaming** adalah platform ulasan video game modern yang dibangun dengan **Laravel 11** dan **Tailwind CSS**. Mengusung tema visual *Cyberpunk Glassmorphism*, aplikasi ini dirancang untuk memberikan pengalaman membaca yang imersif bagi para gamer.

Proyek ini dikembangkan sebagai Final Project (UAS) untuk mata kuliah Pemrograman Web Lanjut.

---

## ⚡ Key Features (Game Changer)

### 1. 🌈 Metascore RGB Glow System
Fitur visual unggulan dimana kartu game memancarkan cahaya neon (*Glow Effect*) yang berubah warna secara otomatis berdasarkan rating skor:
* **Gold Glow (⭐ 9-10):** Masterpiece.
* **Purple Glow (⭐ 7-8):** Great Game.
* **Cyan Glow (⭐ <7):** Average/Good.

### 2. 🕶️ Cyberpunk Dark Mode (UI/UX)
Antarmuka pengguna didesain sepenuhnya dalam mode gelap (*Dark Mode*) dengan aksen warna gradasi RGB (Cyan-Purple-Amber), efek kaca (*Glassmorphism*), dan tipografi modern yang nyaman di mata untuk sesi membaca jangka panjang.

### 3. 🛡️ Nexus Console (Admin Dashboard)
Dashboard manajemen konten yang terintegrasi, memungkinkan admin untuk:
* Menambah ulasan game baru.
* Mengedit skor rating (yang akan langsung mengubah warna Glow di halaman depan).
* Menghapus data game yang sudah usang.

---

## 🛠️ Tech Stack (Engine)

* **Framework:** Laravel 11.x
* **Auth:** Laravel Breeze
* **Styling:** Tailwind CSS v3.4
* **Database:** MySQL
* **Environment:** Laragon

---

## 🚀 Installation (Deploy Guide)

1.  **Clone Repository**
    ```bash
    git clone [https://github.com/username/nexus-gaming.git](https://github.com/username/nexus-gaming.git)
    cd nexus-gaming
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3.  **Setup Environment**
    * Copy `.env.example` to `.env`
    * Buat database: `nexus_gaming`
    * Konfigurasi DB di `.env`

4.  **Database Seeding (Inject Data)**
    Perintah ini akan mengisi database dengan sampel game (Elden Ring, Cyberpunk, dll) secara otomatis:
    ```bash
    php artisan key:generate
    php artisan migrate:fresh --seed
    ```

5.  **Run System**
    ```bash
    npm run build
    php artisan serve
    ```
    Akses Portal: `http://127.0.0.1:8000`

---

## 👤 PLAYER PROFILE (Identitas Pengembang)

| Attribute | Data |
| :--- | :--- |
| **Player Name** | Firyal |
| **Player ID (NPM)** | C2383207020 |
| **Guild (Kelas)** | Kelas PTI5A |
| **Server (Kampus)** | Universitas Muhammadiyah Tasikmalaya |
| **Quest Giver** | Alamsyah Firdaus, S.Pd., M.Kom |

---
*Nexus Gaming System v2.0 - Powered by Laravel.*

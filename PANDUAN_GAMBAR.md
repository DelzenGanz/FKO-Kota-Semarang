# 📸 Panduan Upload Gambar & Visual di Website FKO

## Daftar Lokasi Gambar yang Bisa Diganti

### 1. 🎯 Logo Navbar (PRIORITAS UTAMA)

**Lokasi File**: `/public/images/logo.png`

**Cara Ganti**:
1. Siapkan logo FKO Anda (format PNG, 400x400px, background transparan)
2. Upload/copy ke: `/Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO/public/images/logo.png`
3. Refresh browser

**Lihat panduan lengkap**: [panduan_logo.md](file:///Users/macbook2015pro/.gemini/antigravity/brain/1e2addd7-0cc0-4361-b0f5-2668cdbed842/panduan_logo.md)

---

### 2. 🖼️ Hero Section (Gambar Utama)

**Lokasi di Code**: [home.blade.php](file:///Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO/resources/views/home.blade.php) baris ~29

**Cara Mengganti dengan Foto Asli**:

1. **Siapkan foto** (contoh: foto kegiatan FKO, rapat koordinasi, dll)
   - Format: JPG atau PNG
   - Ukuran: 1200x800px (landscape)
   - Nama: `hero.jpg`

2. **Upload** ke folder:
   ```
   /Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO/public/images/hero.jpg
   ```

3. **Edit file** [home.blade.php](file:///Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO/resources/views/home.blade.php), ganti baris 29-50 dengan:

```blade
<div class="col-lg-5">
    <img src="{{ asset('images/hero.jpg') }}" 
         alt="Kegiatan FKO Semarang" 
         class="img-fluid rounded-4 shadow-lg">
</div>
```

---

### 3. 📰 Gambar Berita (News Section)

**Lokasi**: Section Berita menggunakan placeholder dari via.placeholder.com

**Cara Mengganti**:

1. **Siapkan 4 foto berita**:
   - `news1.jpg` - Foto pelantikan
   - `news2.jpg` - Foto workshop
   - `news3.jpg` - Foto baksos
   - `news4.jpg` - Foto lomba
   - Ukuran: 400x250px

2. **Upload ke**:
   ```
   /Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO/public/images/news/
   ```

3. **Edit** [HomeController.php](file:///Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO/app/Http/Controllers/HomeController.php) baris ~48-70:

**Ganti**:
```php
'image' => 'https://via.placeholder.com/400x250/8A6240/FFFFFF?text=Pelantikan+Pengurus'
```

**Dengan**:
```php
'image' => asset('images/news/news1.jpg')
```

Lakukan untuk semua 4 berita.

---

### 4. 🎨 Icon Program (Sudah OK)

Icon program sudah menggunakan **Bootstrap Icons** dan sudah sesuai:
- ✅ Rapat Koordinasi: Calendar icon
- ✅ Pelatihan Leadership: People icon  
- ✅ Bakti Sosial: Heart icon
- ✅ Kompetisi: Trophy icon

**Tidak perlu diganti**, sudah kontekstual!

---

## 📁 Struktur Folder Images yang Disarankan

```
public/
└── images/
    ├── logo.png                 # Logo navbar FKO
    ├── hero.jpg                 # Gambar hero section
    ├── about-bg.jpg            # (Opsional) Background about
    └── news/
        ├── news1.jpg           # Foto berita 1
        ├── news2.jpg           # Foto berita 2  
        ├── news3.jpg           # Foto berita 3
        └── news4.jpg           # Foto berita 4
```

---

## 🎯 Quick Commands untuk Upload

### Jika gambar ada di Desktop:

```bash
# Navigate ke project folder
cd /Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO

# Copy logo
cp ~/Desktop/logo_fko.png public/images/logo.png

# Copy hero image
cp ~/Desktop/hero_fko.jpg public/images/hero.jpg

# Buat folder news dan copy
mkdir -p public/images/news
cp ~/Desktop/berita1.jpg public/images/news/news1.jpg
cp ~/Desktop/berita2.jpg public/images/news/news2.jpg
# dst...
```

---

## 💡 Tips Optimasi Gambar

### Ukuran File
- Logo: < 200KB
- Hero: < 500KB
- News: < 300KB per foto

### Tools Compress Gambar
- Online: [TinyPNG.com](https://tinypng.com)
- Mac: ImageOptim (gratis)

### Format yang Disarankan
- **Logo**: PNG (transparan)
- **Foto**: JPG (kualitas 80-85%)
- **Ilustrasi**: SVG atau PNG

---

## ✅ Checklist Upload

- [ ] Upload logo.png (navbar)
- [ ] Upload hero.jpg (gambar utama)
- [ ] Upload 4 foto berita
- [ ] Test tampilan di browser
- [ ] Cek responsive (mobile view)

---

## 📞 File yang Perlu Diedit

| Gambar | File yang Diedit | Baris |
|--------|------------------|-------|
| Logo | [app.blade.php](file:///Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO/resources/views/layouts/app.blade.php) | ~44 |
| Hero | [home.blade.php](file:///Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO/resources/views/home.blade.php) | ~29 |
| News | [HomeController.php](file:///Applications/XAMPP/xamppfiles/htdocs/Organization-Profile-FKO/app/Http/Controllers/HomeController.php) | ~48 |

---

Semua sudah siap! Tinggal upload foto asli FKO Anda. 🎉

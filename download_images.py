#!/usr/bin/env python3
import urllib.request
import os
from pathlib import Path

# Create images directory if not exists
images_dir = Path("assets/images")
images_dir.mkdir(parents=True, exist_ok=True)

# Dictionary of images to download
# Using free stock photos from direct URLs
images = {
    # Hotel images
    "hotel-hero.jpg": "https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=1200&h=600&fit=crop",
    "hotel-room-1.jpg": "https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=400&h=300&fit=crop",
    "hotel-room-2.jpg": "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop",
    "hotel-room-3.jpg": "https://images.unsplash.com/photo-1566073771259-6a8506099945?w=400&h=300&fit=crop",
    "hotel-pool.jpg": "https://images.unsplash.com/photo-1576610616656-d3aa5d1f4534?w=400&h=300&fit=crop",
    "hotel-spa.jpg": "https://images.unsplash.com/photo-1515694346937-94d85e41e6f0?w=400&h=300&fit=crop",
    "hotel-restaurant.jpg": "https://images.unsplash.com/photo-1504674900769-8d194a93f7ef?w=400&h=300&fit=crop",
    "hotel-gym.jpg": "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=400&h=300&fit=crop",

    # Villa images
    "villa-hero.jpg": "https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=1200&h=600&fit=crop",
    "villa-1.jpg": "https://images.unsplash.com/photo-1570129477492-45ec003ff2ca?w=400&h=300&fit=crop",
    "villa-2.jpg": "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&h=300&fit=crop",
    "villa-3.jpg": "https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=400&h=300&fit=crop",
    "villa-4.jpg": "https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=400&h=300&fit=crop",

    # Interior design images
    "interior-hero.jpg": "https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=1200&h=600&fit=crop",
    "interior-1.jpg": "https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=400&h=300&fit=crop",
    "interior-2.jpg": "https://images.unsplash.com/photo-1598928506696-1f6d3e2c6e2e?w=400&h=300&fit=crop",
    "interior-3.jpg": "https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=400&h=300&fit=crop",

    # 3D Design images
    "3d-hero.jpg": "https://images.unsplash.com/photo-1561070791-2526d30994b5?w=1200&h=600&fit=crop",
    "3d-design-1.jpg": "https://images.unsplash.com/photo-1561070791-2526d30994b5?w=400&h=300&fit=crop",
    "3d-design-2.jpg": "https://images.unsplash.com/photo-1586717791821-3f44527f3e41?w=400&h=300&fit=crop",

    # E-commerce/Store images
    "store-hero.jpg": "https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=1200&h=600&fit=crop",
    "product-1.jpg": "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=300&fit=crop",
    "product-2.jpg": "https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400&h=300&fit=crop",
    "product-3.jpg": "https://images.unsplash.com/photo-1595409176971-86a2b9c9f1b1?w=400&h=300&fit=crop",
}

# Download images
print("🔍 Mengunduh gambar-gambar untuk portfolio website...")
print()

downloaded = 0
failed = 0

for filename, url in images.items():
    filepath = images_dir / filename
    try:
        print(f"⏳ Mengunduh: {filename}...", end=" ")
        urllib.request.urlretrieve(url, filepath)
        print(f"✅ Berhasil ({os.path.getsize(filepath) / 1024:.1f} KB)")
        downloaded += 1
    except Exception as e:
        print(f"❌ Gagal: {str(e)}")
        failed += 1

print()
print(f"📊 Hasil: {downloaded} gambar berhasil diunduh, {failed} gagal")
print(f"📁 Gambar tersimpan di: assets/images/")

#!/usr/bin/env python3
import urllib.request
import os
from pathlib import Path

# Create images directory if not exists
images_dir = Path("assets/images")
images_dir.mkdir(parents=True, exist_ok=True)

# Dictionary of missing images with alternative URLs
missing_images = {
    "hotel-restaurant.jpg": "https://images.unsplash.com/photo-1552566626-24694cb27c91?w=400&h=300&fit=crop",
    "villa-1.jpg": "https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=400&h=300&fit=crop",
    "interior-2.jpg": "https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=400&h=300&fit=crop",
    "3d-design-2.jpg": "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop",
    "product-3.jpg": "https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=400&h=300&fit=crop",
}

print("🔄 Mengunduh gambar yang belum berhasil...")
print()

downloaded = 0
failed = 0

for filename, url in missing_images.items():
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

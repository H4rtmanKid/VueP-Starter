# VueP-Starter ⚡️

Starter template สำหรับ Vue 3 + PHP-FPM + nginx บน Docker  
ปรับจูนมาให้พร้อมใช้งานจริงทั้ง dev และ production

## 📦 Stack
- Frontend: Vue 3 + Vite
- Backend: PHP 8.3 (FPM)
- Web Server: nginx
- Dev Environment: Docker Compose

## 🚀 วิธีใช้งาน

```bash
git clone https://github.com/yo-p/vuep-starter.git
cd vuep-starter
docker compose up -d --build
```
*npm run build (vue) ก่อน start project เพราะ nginx เสริฟไฟล์จาก frontend/dist


## ⚡️ เข้าใช้งาน

- Frontend: http://localhost:3000
- API: http://localhost:3000/api
- Static Uploads: http://localhost:3000/uploads

## 📁 Folder Structure

- frontend/ → Vue source code
- backend/ → PHP API + uploads
- config/nginx/ → nginx config
- config/php/ → Dockerfile + php.ini
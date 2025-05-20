
# 🌐 Laravel Portfolio Website

A personal portfolio project built with Laravel to showcase my technical skills, projects, and certifications. It features a public-facing website and a custom admin dashboard to manage content easily.

---


## 🧰 Features

- 🖼️ **About Me** section with image and CV
- 🧪 **Projects** section – Add, Edit, Delete
- 🏅 **Certificates** section – Add, Edit, Delete, View
- 💬 **Contact form** – Messages stored in DB and displayed in admin
- 🔐 **Admin authentication** – Secure login/logout using custom admin guard
- ⚙️ **Admin dashboard** – Clean UI to manage all portfolio content

---

## 🛠 Technologies Used

- **Frontend:** HTML, CSS, JavaScript, Bootstrap 5
- **Backend:** PHP (Laravel 10)
- **Database:** MySQL(via Laravel Eloquent ORM).
- **Authentication:** Laravel Guards (admin)
- **Version Control:** Git & GitHub

---

## 🚀 Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/SalamA98/laravel-portfolio.git
   cd laravel-portfolio
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```

3. Create `.env` file:
   ```bash
   cp .env.example .env
   ```

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

5. Setup the database:
   - Create a MySQL database (e.g., `portfolio`)
   - Update `.env` with DB credentials
   - Run migrations + seeders:
     ```bash
     php artisan migrate --seed
     ```

6. Create symbolic link for images (important!):
   ```bash
   php artisan storage:link
   ```

7. Run the application:
   ```bash
   php artisan serve
   ```

---

## 📁 Project Structure
```
├── app/Http/Controllers
├── resources/views
│   ├── admin/
│   ├── sections/
│   └── layout/
├── public/imgs
├── public/docs
├── routes/web.php
├── database/migrations
├── database/seeders
```

---


## 🚀 Usage Instructions

- **Public website:** [http://localhost:8000](http://localhost:8000)
- **Admin dashboard:** [http://localhost:8000/admin/login](http://localhost:8000/admin/login)

From the admin panel, you can:
- Edit "About Me"
- Manage projects and certificates
- View contact messages
- Update your password

---

## 🔮 Future Enhancements

- Add blog/articles section
- Implement dark/light theme toggle
- Integrate contact form with email notification
- Add multilingual support (EN/AR)
- Deploy on public hosting (e.g. Render, Vercel)

---

## 🤝 Credits

- Template: [Meyawo](https://bootstrapmade.com/meyawo-free-bootstrap-portfolio-template/)
- Developed by **Salam Arida**

---

## 📃 License

This project is for learning/demo purposes only.

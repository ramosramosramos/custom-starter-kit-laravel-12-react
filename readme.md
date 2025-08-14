
---

# Laravel 12 + React 19 Starter Kit

A **starter kit** built with **Laravel 12** and **React 19**.
I recommend using **[Laravel Herd](https://herd.laravel.com/windows)** to run this project for the best development experience.

---

## 🚀 Tech Stack

* **React**: 19
* **PHP**: 8.2 – 8.4
* **Laravel Wayfinder**: [GitHub Repo](https://github.com/laravel/wayfinder)
* **Tailwind CSS**: Latest (Tailwind 4 ready)
* **shadcn/ui**: [Docs](https://ui.shadcn.com/)
* **Inertia.js**: [Docs](https://inertiajs.com/)
* **Node.js**: 23.9.0
* **Composer**: 2.7.9 — [Download](https://getcomposer.org/)
* **AppServiceProvider Configurations**: [Reference](https://medium.com/@umeshp113/must-have-configurations-in-your-laravel-appserviceprovider-php-d9808668ed83)

---

## 🛠 Debugging Tools

* **React Scan**: [GitHub](https://github.com/aidenybai/react-scan)
* **Laravel Debugbar**: [GitHub](https://github.com/barryvdh/laravel-debugbar)
* **Log Viewer**: [Website](https://log-viewer.opcodes.io/)

  * *Tip*: Adjust permissions in the `logViewerRule` method inside `AppServiceProvider`.

---

## 📦 Installation & Setup

```bash
# Clone the repository
git clone https://github.com/ramosramosramos/custom-starter-kit-laravel-12-react.git

# Go into the project folder
cd custom-starter-kit-laravel-12-react

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Build frontend assets (development)
npm run dev

# Clear cache and optimize
php artisan optimize:clear
php artisan optimize

# Setup Laravel Wayfinder
php artisan wayfinder

# Start the Laravel server
php artisan serve
```

---

## 🔄 When Updating Backend Code

After making changes to backend code, run:

```bash
php artisan optimize:clear
php artisan optimize
php artisan wayfinder
```

> 💡 You can also stop the Node.js development server (`npm run dev`) to prevent asset watching if you only need backend changes.

---

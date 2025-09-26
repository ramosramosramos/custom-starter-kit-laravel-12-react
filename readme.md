
---

# Laravel 12 + React +InertiaJS Starter Kit

A **starter kit** built with **Laravel 12** and **React 19**.
For the best development experience, I recommend using **[Laravel Herd](https://herd.laravel.com/windows)**.

---

## 🚀 Tech Stack

* **React**: 19
* **PHP**: 8.2 – 8.4
* **Laravel Wayfinder**: [GitHub Repo](https://github.com/laravel/wayfinder)
* **Tailwind CSS**: Latest (Tailwind 4 ready)
* **shadcn/ui**: [Documentation](https://ui.shadcn.com/)
* **tweakcn for shadcn/ui theme**: [Documentation](https://tweakcn.com/editor/theme)
* **react-hot-toast**: [Documentation](https://www.npmjs.com/package/react-hot-toast)
* **Inertia.js**: [Documentation](https://inertiajs.com/)
* **Node.js**: 23.9.0
* **Composer**: 2.7.9 — [Download](https://getcomposer.org/)
* **AppServiceProvider Configurations**: [Reference](https://medium.com/@umeshp113/must-have-configurations-in-your-laravel-appserviceprovider-php-d9808668ed83)



---

## 🛠 Debugging Tools

* **React Scan** — [GitHub](https://github.com/aidenybai/react-scan)
* **Laravel Debugbar** — [GitHub](https://github.com/barryvdh/laravel-debugbar)
* **Log Viewer** — [Website](https://log-viewer.opcodes.io/)

Additional tools and references:

* **PHPStan** — [Getting Started](https://phpstan.org/user-guide/getting-started)
* **Larastan** — [GitHub](https://github.com/larastan/larastan)
* **Spatie Laravel Data (DTO)** — [Installation & Setup](https://spatie.be/docs/laravel-data/v4/installation-setup)
* **Laravel Actions** — [Introduction](https://www.laravelactions.com/)
* **Spatie Laravel Permission** — [Installation](https://spatie.be/docs/laravel-permission/v6/installation-laravel)
* **IDE Helper Generator for Laravel** — [Installation](https://github.com/barryvdh/laravel-ide-helper)
* **Laravel Backup** — [Installation](https://github.com/spatie/laravel-backup)
* **Laravel Chain Rule Validation by Kent Jerone Ramos** — [Github](https://github.com/ramosramosramos/laravel-chain-rule)

> **Tip:** You can adjust permissions in the `logViewerRule` method inside `AppServiceProvider`.

---



## 📦 Installation & Setup

```bash
# Clone the repository
git clone https://github.com/ramosramosramos/custom-starter-kit-laravel-12-react.git

# Enter the project folder
cd custom-starter-kit-laravel-12-react

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Copy environment file
cp .env.example .env   # On Windows use: copy .env.example .env

# Generate application key
php artisan key:generate

# (Optional) Configure your .env file for database, mail, etc.

# Run database migrations
php artisan migrate

# (Optional) Seed the database
php artisan db:seed

# Clear cache and optimize && Laravel Wayfinder
composer optimize

# Build frontend assets (development)
npm run dev
# Start the Laravel server
php artisan serve
# Start the workers
php artisan queue:work
```

---

## 🔄 Updating Backend Code

After making changes to backend code:

```bash
composer optimize
composer format app
```

💡 If you are only working on backend changes, you can stop the Node.js dev server (`npm run dev`) to avoid unnecessary asset watching.

---

## 🧩 Custom Validation Rules

This starter kit includes custom validation rules located in:

```
app/Http/Rules
```

You can use them like this:

```php
use App\Http\Rules\CommonArrayRule;
use App\Http\Rules\UserRule;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

public function rules(): array
{
    return [
        'first_name'      => UserRule::firstName(),
        'last_name'       => UserRule::lastName(),
        'middle_name'     => UserRule::middleName(),
        'phone_number'    => UserRule::nullablePhoneNumber(),
        'email'           => [...UserRule::email(), 'exists:users,email'],
        'username'        => UserRule::username(),
        'turnstile_token' => CommonArrayRule::longRequiredString(),
    ];
}
```

---

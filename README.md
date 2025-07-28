# Product Catalog & Cart API (Laravel 10)

This project includes:
- Product CRUD (with multiple images)
- Cart Management (add/update/delete/view)
- Checkout flow with payment method
- Admin Panel with Dashboard, Product List, Cart View, Order List

## 🚀 Tech Stack
- PHP 8.x
- Laravel 10
- MySQL 8+

- Ki Admin (admin template used for managing)

---

## 📦 Setup Instructions

### 1. Clone the Repository

```bash

git clone https://github.com/mehtabq24/mehtab-php-developer-task
cd mehtab-php-developer-task


# Install Dependencies

composer install
npm install && npm run build


# Configure Environment

cp .env.example .env
php artisan key:generate

# Run Migrations & Seeders

php artisan migrate --seed

# Imported DB 

database/db_backup.sql

# Serve Project

php artisan serve


# API Documentation

Import postman_collection.json into Postman.

Includes endpoints for:

Product List

Add to Cart

View Cart

Remove/Update Cart

Checkout

Order List (admin)


#  Folder Structure

app/
├── Http/
│   ├── Controllers/
│   │   ├── Api/
│   │   │   ├── ProductController.php
│   │   │   ├── CartController.php
│   │   │   ├── CheckoutController.php
│   │   └── Admin/
│   │       ├── DashboardController.php
│   │       OrderController.php
├── Models/
│   ├── Product.php
│   ├── ProductImage.php
│   ├── CartItem.php
│   ├── Order.php
│   ├── OrderItem.php
database/
├── migrations/
├── seeders/
├── db_backup.sql ✅
routes/
├── api.php ✅
├── web.php ✅
resources/
├── views/
│   └── admin/
│       ├── dashboard.blade.php
│       ├── orders/
│       │   ├── index.blade.php
│       │   └── show.blade.php


# API Documentation (Postman) Attach or include postman_collection.json with the following endpoints:

| Method | Endpoint             | Description           |
| ------ | -------------------- | --------------------- |
| GET    | `/api/products`      | List all products     |
| POST   | `/api/cart/add`      | Add to cart           |
| GET    | `/api/cart`          | View cart items       |
| POST   | `/api/cart/update`   | Update cart item      |
| DELETE | `/api/cart/remove`   | Remove item from cart |
| POST   | `/api/checkout`      | Place order           |


# DB Backup (db_backup.sql)

# Include a file named db_backup.sql in your root directory or database/ folder with a clean export of your database structure + sample data (products, users, orders).

mysqldump -u root -p mehtab-php-developer-task > db_backup.sql

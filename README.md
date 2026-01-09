# 🍛 Laravel - Restaurant Menu Platform

## Overview
Foodies is a modern restaurant management and ordering platform built with Laravel and Bootstrap. It provides an elegant interface for browsing meals, managing categories, and placing orders with add-on options.

<img width="1920" height="1080" alt="cover - Afresh" src="https://github.com/user-attachments/assets/d1a7d47c-3064-4f9c-884c-d1ec14a17136" />

## Features
- **Responsive Design**: Mobile-friendly interface that works seamlessly across all devices
- **Category Management**: Organize meals by categories (Breakfast, Lunch, Dinner, etc.)
- **Meal Browsing**: Display meals with images, descriptions, and pricing
- **Admin Dashboard**: Manage meals, categories, and orders (Coming soon)
- **Modern UI**: Clean, professional design with smooth animations and hover effects

## Tech Stack
- **Backend**: Laravel (PHP)
- **Frontend**: Bootstrap 5, Blade Templates
- **Database**: MySQL
- **Styling**: Custom CSS and BootStrap with responsive design

## Installation

### Prerequisites
- PHP 
- Composer
- MySQL

### Steps
1. Start the development server
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Project Structure
```
restaurant/
├── app/
│   ├── Http/Controllers/
│   │   ├── CategoryController.php
│   │   ├── MealController.php
│   │   └── HomeController.php
│   └── Models/
│       ├── Category.php
│       └── Meal.php
├── resources/
│   └── views/
│       ├── home.blade.php
│       ├── meals/
│       └── categories/
├── database/
│   └── migrations/
└── public/
    └── logo.png
```

## Database Schema

### Categories Table
- `id` (Primary Key)
- `name` (string)
- `slug` (string)
- `timestamps`

### Meals Table
- `id` (Primary Key)
- `category_id` (Foreign Key)
- `name` (string)
- `description` (text)
- `price` (decimal)
- `image` (string)
- `timestamps`

## Features in Development
- [ ] Shopping cart functionality
- [ ] User authentication & accounts
- [ ] Order management system
- [ ] Payment integration
- [ ] Admin panel
- [ ] Reviews & ratings

## Usage

### Browse Meals
1. Navigate to the home page
2. Select a category or view all meals
3. Browse available meals with descriptions and prices
4. Add extras/add-ons if desired
5. Click "Order Now"

### Admin Features
- Add/Edit/Delete categories
- Add/Edit/Delete meals
- Manage meal images
- View orders (Coming soon)


---

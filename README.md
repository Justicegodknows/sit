# About
This project is part of my continuing assessment. 
A scalable Laravel-based web application for hosting independent online stores, 
where customers can browse, buy, pay, and leave feedback about their shopping experiences.

# Features
- Multi-Store Marketplace: Independent vendors can manage their own stores and products.
- Customer Accounts: Registration, authentication, and profile management.
- Product Catalogue: Categories, tags, variants, inventory tracking, and product images.
- Shopping Cart: Multi-store cart with order splitting at checkout.
- Secure Checkout: Integrated payment gateways for seamless transactions.
- Order Management: Order history, status tracking, and shipment updates.
- Reviews & Comments: Customers can review products and stores, and leave threaded comments.
- Admin Panel: Manage users, stores, products, orders, payouts, and platform settings.
- Promotions: Store and global coupons/discounts.
- Payouts: Vendor commission calculations and payout tracking.
- Notifications: Email and in-app notifications for key events.
# Tech Stack
- Backend: Laravel (PHP)
- Database: MySQL or PostgreSQL
- Frontend: Blade, Vue.js (optional)
- Payments: Stripe, PayPal (configurable)
- Other: Docker (optional for local development), Redis (caching/queues)
- Getting Started
# Prerequisites
- PHP 8.1+
- Composer
- MySQL or PostgreSQL
- Node.js & npm (for frontend assets)
- [Optional] Docker & Docker Compose
# Database Model
The platform uses a robust, scalable database design to support multi-tenancy, order splitting, promotions, and feedback.
# Usage
- Register as a customer or apply to become a vendor/store owner.
- Store owners can create and manage their own stores, products, and promotions.
- Customers can browse stores, add products to cart (even from multiple stores), and checkout securely.
- After purchase, customers can leave reviews and comments on products and stores.
# Installation
 1. Clone the repository:
- git clone https://github.com/yourusername/multivendor-shop.git
    cd multivendor-shop
2. Install dependencies:
  -     composer install
    npm install && npm run dev
3. Copy .env and set up configuration:
-     cp .env.example .env
### Set your database, mail, and payment gateway credentials in `.env`.
4. Generate application key:
-     php artisan key:generate
5. Run migrations and seeders:
-    php artisan migrate --seed
6.Start the development server:
-     php artisan serve
 
# Simple Diagram
``````mermaid
erDiagram
    USER ||--o{ ORDER : places
    USER ||--o{ REVIEW : writes
    USER ||--o{ COMMENT : writes
    STORE ||--o{ PRODUCT : offers
    STORE ||--o{ ORDER : receives
    PRODUCT ||--o{ ORDER_ITEM : includes
    ORDER ||--o{ ORDER_ITEM : contains
    PRODUCT ||--o{ REVIEW : receives
    PRODUCT ||--o{ COMMENT : receives
    STORE ||--o{ REVIEW : receives
    STORE ||--o{ COMMENT : receives
``````

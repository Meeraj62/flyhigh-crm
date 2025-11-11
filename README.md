# FlyHigh CRM

A comprehensive education consultancy and CRM platform for managing students, university applications, consultations, and educational services.

## Features

- Multi-role system (Admin, Staff, Consultant, Student, Sub-agent)
- Full CRM for leads to enrollment workflow
- University, program, and scholarship management
- Course enrollment with LMS features
- Service orders with Kanban board
- Consultation booking with Zoom/Google Meet integration
- Multi-language, RTL support, multi-currency
- Payment gateway integrations (Stripe, PayPal)
- Notifications, email templates, automation rules
- Role-based access control
- Blog CMS and landing page builder
- Analytics and reporting

## Tech Stack

- **Backend**: Laravel 12 (PHP 8.4)
- **Frontend**: Livewire 3, Alpine.js, Tailwind CSS
- **Database**: PostgreSQL 16
- **Cache/Queue**: Redis 7
- **Container**: Docker & Docker Compose

## Quick Start

### Prerequisites

- Docker & Docker Compose
- Git

### Installation

```bash
git clone <repository-url>
cd flyhigh-crm
cp .env.example .env
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate --seed
docker-compose exec app php artisan storage:link
docker-compose exec app npm install
docker-compose exec app npm run build
```

### Access

- Application: http://localhost:8000
- Database: localhost:5432

### Default Credentials

All users have password: `password`

- Admin: admin@flyhigh.com
- Consultant: consultant@flyhigh.com
- Student: student@flyhigh.com
- Staff: staff@flyhigh.com

## Database Schema

### Core Tables

- **users** - Multi-role users with 2FA and social login
- **leads** - CRM leads with scoring and metadata
- **students** - Student profiles with documents
- **applications** - Student applications to programs
- **universities** - University profiles
- **programs** - Academic programs with fees
- **scholarships** - Scholarship management
- **service_orders** - Service orders with Kanban
- **appointments** - Consultation bookings
- **courses**, **lessons**, **quizzes**, **assignments** - LMS
- **events**, **blogs**, **landing_pages** - Content management
- **payments**, **invoices**, **transactions** - Financial tracking

## Development

### Running Tests

```bash
docker-compose exec app php artisan test
```

### Database Management

```bash
docker-compose exec app php artisan migrate:fresh --seed
```

### Clear Cache

```bash
docker-compose exec app php artisan optimize:clear
```

### Queue Worker

```bash
docker-compose exec app php artisan queue:work
```

## Deployment

See `SYSTEM_PROMPT.md` for comprehensive deployment documentation.

## Architecture

- **Models**: Eloquent ORM with relationships
- **Controllers**: RESTful API and web controllers
- **Livewire**: Reactive UI components
- **Migrations**: PostgreSQL schema with JSONB support
- **Seeders**: Demo data for all entities
- **Policies**: Role-based authorization
- **Jobs**: Async processing for emails and notifications
- **Events**: Domain events for automation

## Key Packages

- spatie/laravel-permission - Role-based access control
- spatie/laravel-activitylog - User activity tracking
- spatie/laravel-medialibrary - File management
- livewire/livewire - Reactive components
- laravel/sanctum - API authentication
- laravel/socialite - Social login
- maatwebsite/excel - Import/export
- intervention/image - Image processing
- barryvdh/laravel-dompdf - PDF generation

## License

Proprietary - All rights reserved

# FlyHigh CRM System Prompt

## System Overview

FlyHigh CRM is a comprehensive education consultancy and CRM platform built with Laravel 12, Livewire 3, Tailwind CSS, and PostgreSQL. It supports multi-user panels for Admin, Staff, Consultant, Student, and optional Sub-agent roles.

## Tech Stack

- **Backend**: Laravel 12.37.0 (PHP 8.4.14)
- **Frontend**: Livewire 3.6.4, Alpine.js, Tailwind CSS
- **Database**: PostgreSQL 16
- **Cache/Queue**: Redis 7
- **Packages**: Spatie Permission, Activity Log, Media Library, Laravel Sanctum, Socialite, Maatwebsite Excel, Intervention Image, Barryvdh DomPDF

## Core Features

### 1. User Management & Authentication
- Multi-role system: Admin, Staff, Consultant, Student, Sub-agent
- Email verification, password reset
- Two-factor authentication (2FA) support
- Social login providers (Google, Facebook)
- Role-based permissions with Spatie Permission
- User activity logs and audit trail
- Profile management with JSONB storage

### 2. CRM & Lead Management
- Lead capture with source tracking
- Lead status workflow (new, contacted, qualified, converted)
- Assignment to consultants
- Lead scoring system
- Custom fields with JSONB metadata
- Notes and timeline tracking
- Import/export CSV functionality
- Advanced filters and saved searches
- Auto reminders and scheduled follow-ups

### 3. Student & Application Management
- Student profiles with documents and academic history
- Visa information tracking
- Application records against universities and programs
- Application status workflow with configurable stages
- Document checklist with expiry tracking
- Student portal for status viewing
- Emergency contact management

### 4. University & Program Management
- University profiles with location, ranking, gallery
- Program/Course catalog with degree types
- Tuition fees with currency support
- Intake dates and requirements
- Subject taxonomy
- Scholarship management and search
- Featured and active status flags

### 5. Service Orders & Kanban
- Service catalog (Visa Support, Document Translation, SOP Writing)
- Order creation and tracking
- Kanban board for order stages
- Timeline and due date management
- Order histories, comments, attachments

### 6. Consultation & Appointments
- Consultant availability management
- Booking flow for students and leads
- Multiple meeting platforms (Zoom, Google Meet)
- Meeting link generation
- Appointment reminders via email and notification
- Rating and review system for consultants

### 7. LMS Features
- Course creation with lessons (video, text, quiz, assignment)
- Course enrollment and progress tracking
- Quiz system with passing scores
- Assignment submissions with scoring
- Certificate generation
- Payment checkout for paid courses

### 8. Events & Ticketing
- Event management with capacity limits
- Ticket booking system
- Event pricing and location tracking
- Banner and description management

### 9. Blog & Content Management
- Blog posts with categories and tags
- Featured images and excerpts
- Publish scheduling
- SEO-friendly slugs

### 10. Landing Page Builder
- Customizable sections with JSONB storage
- Custom CSS and JavaScript injection
- Publish status control

### 11. Payments & Invoicing
- Multi-gateway support (Stripe, PayPal)
- Payment tracking with transaction IDs
- Invoice generation with line items
- Transaction history
- Multi-currency support

### 12. Notifications & Automation
- Email and in-app notifications
- Email templates with variables
- Automation rules engine (triggers, conditions, actions)
- Scheduled tasks with Laravel Scheduler
- Auto reminders for documents, appointments, applications

### 13. Settings & Configuration
- Global application settings
- Theme color and layout customization
- Language and timezone settings
- Currency configuration
- Maintenance mode

### 14. Security Features
- Force SSL option
- Google reCAPTCHA v3 integration
- Rate limiting and brute force protection
- File upload validation
- Virus scanning hook support
- Activity logging

### 15. Analytics & Reporting
- Dashboard with KPIs
- Lead conversion reports
- Revenue by course
- Consultant performance metrics
- Export to CSV and PDF
- Google Analytics integration

### 16. Multi-Language & RTL Support
- Locale management
- RTL layout toggle
- Translation support

### 17. Storage Integration
- S3-compatible storage (AWS, Wasabi, Vultr, Local)
- Media library with Spatie
- Document management with expiry tracking

### 18. API
- RESTful JSON endpoints
- Laravel Sanctum authentication
- API token management

## Database Schema

### Core Tables
- `users` - Multi-role users with 2FA, social login, profiles
- `roles` & `permissions` - Spatie RBAC
- `leads` - CRM leads with scoring and metadata
- `students` - Student profiles with visa and academic data
- `applications` - Student applications to programs
- `universities` - University profiles
- `programs` - Academic programs with fees
- `scholarships` - Scholarship management
- `service_orders` - Service orders with Kanban
- `appointments` - Consultation bookings
- `courses`, `lessons`, `quizzes`, `assignments` - LMS
- `enrollments` - Course enrollments
- `events`, `event_tickets` - Event management
- `blogs`, `blog_categories` - Blog CMS
- `landing_pages` - Landing page builder
- `payments`, `invoices`, `transactions` - Payments
- `notifications` - In-app notifications
- `email_templates` - Email templates
- `automations` - Automation rules
- `settings` - Global settings
- `documents` - Polymorphic document storage
- `tags`, `taggables` - Tag system

### Key Relationships
- Users have roles, leads, appointments, enrollments
- Leads belong to users and assignees
- Students belong to users and have applications
- Applications link students to programs
- Programs belong to universities
- Courses have lessons, enrollments
- Service orders link users to services

## Livewire Components

### Dashboard
- `DashboardSummary` - KPI cards, charts, recent activity

### Leads
- `LeadsList` - Filterable lead list with pagination
- `LeadDetail` - Sidebar with notes, timeline, documents

### Service Orders
- `KanbanBoard` - Drag-and-drop order management

### Appointments
- `AppointmentCalendar` - Calendar view with booking

### Universities
- `UniversityCatalog` - Searchable university grid

### Additional Components (to be implemented)
- `CourseBuilder` - LMS course creation
- `NotificationsCenter` - Notification dropdown
- `SettingsProfile` - Profile management
- `SettingsTheme` - Theme customization
- `ReportsGenerator` - Report builder

## Authentication & Authorization

### Roles
- **Admin**: Full system access
- **Staff**: Manage leads, students, view analytics
- **Consultant**: Manage appointments, leads
- **Student**: Access portal, view applications
- **Sub-agent**: Limited partner access

### Permissions
- manage users, leads, students, universities, programs
- manage courses, appointments, services, payments
- manage settings, blog, view analytics

## File Structure

```
app/
  ├── Http/
  │   ├── Controllers/       # REST controllers
  │   └── Livewire/         # Livewire components
  ├── Models/               # Eloquent models
  └── Services/             # Business logic

database/
  ├── migrations/           # Database migrations
  ├── seeders/             # Database seeders
  └── factories/           # Model factories

resources/
  ├── views/
  │   ├── livewire/        # Livewire views
  │   ├── layouts/         # Blade layouts
  │   └── components/      # Blade components
  └── css/                 # Tailwind CSS

docker/
  └── nginx/               # Nginx configuration

routes/
  ├── web.php             # Web routes
  └── api.php             # API routes
```

## Deployment

### Docker Setup
```bash
docker-compose up -d
docker-compose exec app php artisan migrate --seed
docker-compose exec app php artisan storage:link
docker-compose exec app npm run build
```

### Production Checklist
- Set `APP_ENV=production`
- Set `APP_DEBUG=false`
- Generate `APP_KEY`
- Configure PostgreSQL connection
- Set up Redis for cache and queues
- Configure mail settings
- Set up queue worker
- Set up cron for scheduler
- Configure S3 storage
- Set up SSL certificate
- Configure payment gateways
- Set up Google Analytics
- Enable maintenance mode during updates

## Development Credentials

### Default Users (password: `password`)
- Admin: admin@flyhigh.com
- Consultant: consultant@flyhigh.com
- Student: student@flyhigh.com
- Staff: staff@flyhigh.com

### Database
- Database: flyhigh_crm
- User: flyhigh_user
- Password: flyhigh_password

## API Endpoints

### Authentication
- POST `/api/login` - User login
- POST `/api/register` - User registration
- POST `/api/logout` - User logout

### Leads
- GET `/api/leads` - List leads
- POST `/api/leads` - Create lead
- GET `/api/leads/{id}` - Get lead
- PUT `/api/leads/{id}` - Update lead
- DELETE `/api/leads/{id}` - Delete lead

### Students
- GET `/api/students` - List students
- GET `/api/students/{id}` - Get student

### Universities
- GET `/api/universities` - List universities
- GET `/api/universities/{slug}` - Get university

### Programs
- GET `/api/programs` - List programs
- GET `/api/programs/{slug}` - Get program

### Courses
- GET `/api/courses` - List courses
- POST `/api/courses/{id}/enroll` - Enroll in course

## Performance Optimization

- PostgreSQL indexes on frequently queried columns
- JSONB indexes for metadata queries
- Redis caching for heavy queries
- Eager loading to prevent N+1 queries
- Queue workers for async processing
- CDN for static assets
- Image optimization with Intervention

## Security Measures

- CSRF protection on all forms
- Input validation and sanitization
- Output escaping in Blade templates
- Role-based access control
- Rate limiting on auth and API endpoints
- Secure file upload validation
- SQL injection prevention with Eloquent
- XSS prevention with Blade escaping
- HTTPS enforcement in production
- Two-factor authentication support

## Testing

### Run Tests
```bash
php artisan test
```

### Test Coverage
- Unit tests for models and services
- Feature tests for auth, CRM, booking, payments
- API endpoint tests

## Maintenance

### Clear Cache
```bash
php artisan optimize:clear
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Database Maintenance
```bash
php artisan migrate:fresh --seed  # Reset database
php artisan db:seed               # Run seeders only
```

### Queue Management
```bash
php artisan queue:work            # Start queue worker
php artisan queue:restart         # Restart all workers
```

## Future Enhancements

- Advanced reporting with charts
- WhatsApp integration for notifications
- Mobile app with Flutter
- AI-powered lead scoring
- Automated document OCR
- Video consultation recording
- Commission tracking for sub-agents
- Multi-tenant architecture
- Advanced workflow automation
- Integration with university portals

## Support & Documentation

- GitHub: https://github.com/Meeraj62/flyhigh-crm
- Documentation: See README.md
- Issue Tracker: GitHub Issues

## License

Proprietary - All rights reserved

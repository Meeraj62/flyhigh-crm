# Role-Based Access Control Definition

## Roles & Capabilities

### 1. ADMIN (Super User)
**Full system access and management**
- ✅ Dashboard: View all statistics
- ✅ Leads: Full CRUD + assign to consultants
- ✅ Students: Full CRUD + manage applications
- ✅ Universities: Full CRUD
- ✅ Programs: Full CRUD
- ✅ Appointments: View all + manage
- ✅ Courses: Full CRUD
- ✅ Users: Full user management
- ✅ Settings: System configuration
- ✅ Reports: All reports and analytics

### 2. STAFF (Administrative Support)
**Day-to-day operations support**
- ✅ Dashboard: View general statistics
- ✅ Leads: Full CRUD (all leads)
- ✅ Students: Full CRUD (all students)
- ✅ Universities: View + Create
- ✅ Programs: View + Create
- ✅ Appointments: Full CRUD (all appointments)
- ✅ Courses: View only
- ❌ Users: Cannot manage users
- ❌ Settings: Cannot access settings
- ✅ Reports: Basic reports

### 3. CONSULTANT (Education Consultant)
**Client-facing role**
- ✅ Dashboard: View own statistics
- ✅ Leads: CRUD only assigned leads
- ✅ Students: CRUD only assigned students
- ✅ Universities: View only
- ✅ Programs: View only
- ✅ Appointments: CRUD only own appointments
- ✅ Courses: View only
- ❌ Users: Cannot manage users
- ❌ Settings: Cannot access settings
- ✅ Reports: Own performance reports

### 4. STUDENT (End User)
**Self-service portal**
- ✅ Dashboard: View own profile summary
- ❌ Leads: No access
- ✅ Students: View own profile only
- ✅ Universities: View only (browse)
- ✅ Programs: View only (browse)
- ✅ Appointments: View own appointments
- ✅ Courses: View enrolled courses
- ❌ Users: No access
- ❌ Settings: No access
- ✅ Reports: Own application status

## Implementation Notes
- Use Spatie Permission package (already installed)
- Implement middleware for route protection
- Add @can directives in views
- Filter data based on role (consultants see only their data)
- Different dashboard views per role

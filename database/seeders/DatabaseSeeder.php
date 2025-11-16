<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Lead;
use App\Models\University;
use App\Models\Program;
use App\Models\Course;
use App\Models\Service;
use App\Models\BlogCategory;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed roles and permissions using dedicated seeder
        $this->call(RolesAndPermissionsSeeder::class);

        $this->createUsers();
        $this->createUniversitiesAndPrograms();
        $this->createCourses();
        $this->createServices();
        $this->createLeads();
        $this->createBlogCategories();
        $this->createSettings();

        // Seed demo content (blog posts, etc.)
        $this->call(DemoContentSeeder::class);
    }

    private function createUsers()
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@flyhigh.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'is_active' => true,
        ]);
        $admin->assignRole('admin');

        $consultant = User::create([
            'name' => 'John Consultant',
            'email' => 'consultant@flyhigh.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'is_active' => true,
        ]);
        $consultant->assignRole('consultant');

        $student = User::create([
            'name' => 'Jane Student',
            'email' => 'student@flyhigh.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'is_active' => true,
        ]);
        $student->assignRole('student');

        $staff = User::create([
            'name' => 'Staff Member',
            'email' => 'staff@flyhigh.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'is_active' => true,
        ]);
        $staff->assignRole('staff');
    }

    private function createUniversitiesAndPrograms()
    {
        $universities = [
            ['name' => 'Harvard University', 'country' => 'USA', 'city' => 'Cambridge', 'slug' => 'harvard-university'],
            ['name' => 'Oxford University', 'country' => 'UK', 'city' => 'Oxford', 'slug' => 'oxford-university'],
            ['name' => 'MIT', 'country' => 'USA', 'city' => 'Cambridge', 'slug' => 'mit'],
        ];

        foreach ($universities as $uniData) {
            $uni = University::create(array_merge($uniData, [
                'description' => 'Top ranked university offering world-class education',
                'is_active' => true,
                'is_featured' => true,
            ]));

            Program::create([
                'university_id' => $uni->id,
                'title' => 'Master of Computer Science',
                'slug' => $uniData['slug'] . '-mcs',
                'description' => 'Advanced computer science program',
                'degree_type' => 'Masters',
                'duration' => '2 years',
                'tuition_fee' => 50000,
                'currency' => 'USD',
                'is_active' => true,
                'is_featured' => true,
            ]);
        }
    }

    private function createCourses()
    {
        $courses = [
            ['title' => 'IELTS Preparation', 'slug' => 'ielts-preparation', 'price' => 299],
            ['title' => 'TOEFL Mastery', 'slug' => 'toefl-mastery', 'price' => 349],
            ['title' => 'Study Abroad Essentials', 'slug' => 'study-abroad-essentials', 'price' => 199],
        ];

        foreach ($courses as $courseData) {
            Course::create(array_merge($courseData, [
                'description' => 'Comprehensive course for international students',
                'is_published' => true,
            ]));
        }
    }

    private function createServices()
    {
        $services = [
            ['name' => 'Visa Application Support', 'slug' => 'visa-application', 'price' => 500],
            ['name' => 'Document Translation', 'slug' => 'document-translation', 'price' => 50],
            ['name' => 'SOP Writing Assistance', 'slug' => 'sop-writing', 'price' => 200],
        ];

        foreach ($services as $serviceData) {
            Service::create(array_merge($serviceData, [
                'description' => 'Professional service for international students',
                'is_active' => true,
            ]));
        }
    }

    private function createLeads()
    {
        $consultant = User::whereHas('roles', fn($q) => $q->where('name', 'consultant'))->first();

        for ($i = 1; $i <= 10; $i++) {
            Lead::create([
                'first_name' => "Lead$i",
                'last_name' => "Test",
                'email' => "lead$i@example.com",
                'phone' => "+1234567890$i",
                'source' => ['website', 'referral', 'social_media'][array_rand(['website', 'referral', 'social_media'])],
                'status' => ['new', 'contacted', 'qualified', 'converted'][array_rand(['new', 'contacted', 'qualified', 'converted'])],
                'assigned_to' => $consultant?->id,
                'country' => 'USA',
                'score' => rand(0, 100),
            ]);
        }
    }

    private function createBlogCategories()
    {
        $categories = ['Study Abroad', 'Visa Tips', 'University Rankings', 'Student Life'];
        foreach ($categories as $category) {
            BlogCategory::create([
                'name' => $category,
                'slug' => strtolower(str_replace(' ', '-', $category)),
            ]);
        }
    }

    private function createSettings()
    {
        $settings = [
            ['key' => 'app_name', 'value' => 'FlyHigh CRM', 'type' => 'string'],
            ['key' => 'app_logo', 'value' => '/images/logo.png', 'type' => 'string'],
            ['key' => 'currency', 'value' => 'USD', 'type' => 'string'],
            ['key' => 'timezone', 'value' => 'UTC', 'type' => 'string'],
            ['key' => 'per_page', 'value' => '20', 'type' => 'integer'],
            ['key' => 'maintenance_mode', 'value' => '0', 'type' => 'boolean'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}

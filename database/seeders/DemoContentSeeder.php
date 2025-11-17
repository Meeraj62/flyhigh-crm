<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Database\Seeder;

class DemoContentSeeder extends Seeder
{
    public function run(): void
    {
        // Get the first user as author
        $author = User::first();

        if (!$author) {
            $this->command->warn('No users found. Please run DatabaseSeeder first.');
            return;
        }

        // Get blog categories
        $categories = \App\Models\BlogCategory::all();

        if ($categories->isEmpty()) {
            $this->command->warn('No blog categories found.');
            return;
        }

        // Create demo blog posts
        $blogPosts = [
            [
                'title' => 'Top 10 Universities for International Students in 2025',
                'slug' => 'top-10-universities-international-students-2025',
                'excerpt' => 'Discover the best universities around the world that welcome international students with open arms and offer exceptional educational opportunities.',
                'content' => "Choosing the right university is one of the most important decisions in your academic journey. Here are our top picks for 2025:\n\n1. Harvard University - USA\n2. University of Oxford - UK\n3. Stanford University - USA\n4. University of Cambridge - UK\n5. MIT - USA\n6. ETH Zurich - Switzerland\n7. National University of Singapore - Singapore\n8. University of Toronto - Canada\n9. University of Melbourne - Australia\n10. Technical University of Munich - Germany\n\nEach of these institutions offers world-class education, diverse student communities, and excellent support for international students.",
                'status' => 'published',
                'published_at' => now()->subDays(5),
                'is_featured' => true,
            ],
            [
                'title' => 'IELTS vs TOEFL: Which Test Should You Take?',
                'slug' => 'ielts-vs-toefl-which-test',
                'excerpt' => 'Confused about which English proficiency test to take? We break down the differences between IELTS and TOEFL to help you make an informed decision.',
                'content' => "Both IELTS and TOEFL are widely accepted English proficiency tests, but they have some key differences:\n\nIELTS:\n- Focuses on British English\n- Has a face-to-face speaking component\n- Scored on a 9-band scale\n- More popular in UK, Australia, and Canada\n\nTOEFL:\n- Focuses on American English\n- Entirely computer-based\n- Scored out of 120\n- Preferred by US universities\n\nThe best choice depends on your target country and personal preferences. Consider taking practice tests for both to see which format suits you better.",
                'status' => 'published',
                'published_at' => now()->subDays(12),
                'is_featured' => false,
            ],
            [
                'title' => 'Scholarship Opportunities for International Students',
                'slug' => 'scholarship-opportunities-international-students',
                'excerpt' => 'Funding your education abroad doesn\'t have to be a burden. Explore various scholarship opportunities available for international students.',
                'content' => "Studying abroad can be expensive, but numerous scholarships can help ease the financial burden:\n\n1. Government Scholarships\n- Fulbright Program (USA)\n- Chevening Scholarships (UK)\n- Australia Awards\n- DAAD Scholarships (Germany)\n\n2. University Scholarships\nMost top universities offer merit-based and need-based scholarships specifically for international students.\n\n3. Private Scholarships\nMany organizations and foundations provide scholarships based on academic excellence, leadership, or specific fields of study.\n\nTips for Success:\n- Start your search early\n- Apply to multiple scholarships\n- Tailor each application\n- Highlight your unique qualities\n- Meet all deadlines",
                'status' => 'published',
                'published_at' => now()->subDays(20),
                'is_featured' => true,
            ],
            [
                'title' => 'Student Visa Application: Complete Guide',
                'slug' => 'student-visa-application-complete-guide',
                'excerpt' => 'Navigate the student visa application process with confidence. Our comprehensive guide covers everything you need to know.',
                'content' => "Applying for a student visa can seem daunting, but with proper preparation, it's manageable:\n\nStep 1: Get Admitted\nFirst, secure admission to your chosen university.\n\nStep 2: Gather Documents\n- Valid passport\n- Admission letter\n- Financial proof\n- Academic transcripts\n- English proficiency scores\n- Passport photos\n\nStep 3: Fill Application\nComplete the visa application form accurately and honestly.\n\nStep 4: Pay Fees\nPay the required visa application fee.\n\nStep 5: Attend Interview\nPrepare for your visa interview by practicing common questions.\n\nStep 6: Wait for Decision\nProcessing times vary by country, typically 2-8 weeks.\n\nPro Tips:\n- Apply early\n- Be honest\n- Demonstrate strong ties to home country\n- Show financial stability\n- Practice interview questions",
                'status' => 'published',
                'published_at' => now()->subDays(30),
                'is_featured' => false,
            ],
            [
                'title' => 'Cost of Living for Students in Different Countries',
                'slug' => 'cost-of-living-students-different-countries',
                'excerpt' => 'Planning your budget is crucial. Learn about the average cost of living for students in popular study abroad destinations.',
                'content' => "Understanding the cost of living helps you budget effectively:\n\nUSA:\n- Tuition: $20,000-$50,000/year\n- Living: $10,000-$18,000/year\n- Total: $30,000-$68,000/year\n\nUK:\n- Tuition: £10,000-£30,000/year\n- Living: £9,000-£12,000/year\n- Total: £19,000-£42,000/year\n\nCanada:\n- Tuition: CAD 15,000-35,000/year\n- Living: CAD 10,000-15,000/year\n- Total: CAD 25,000-50,000/year\n\nAustralia:\n- Tuition: AUD 20,000-45,000/year\n- Living: AUD 18,000-25,000/year\n- Total: AUD 38,000-70,000/year\n\nGermany:\n- Tuition: €0-€20,000/year (many public universities are tuition-free)\n- Living: €10,000-€12,000/year\n- Total: €10,000-€32,000/year\n\nRemember to account for accommodation, food, transportation, books, and personal expenses.",
                'status' => 'published',
                'published_at' => now()->subDays(40),
                'is_featured' => false,
            ],
            [
                'title' => 'How to Choose the Right Program for Your Career Goals',
                'slug' => 'how-to-choose-right-program-career-goals',
                'excerpt' => 'Selecting the right academic program is crucial for your future career. Here\'s how to make an informed decision.',
                'content' => "Choosing the right program requires careful consideration:\n\n1. Assess Your Interests\nWhat subjects genuinely excite you? What problems do you want to solve?\n\n2. Research Career Paths\nInvestigate job prospects, salary ranges, and growth potential in your field of interest.\n\n3. Consider Program Reputation\nLook at university rankings, faculty expertise, and industry connections.\n\n4. Evaluate Curriculum\nEnsure the program offers courses aligned with your career goals.\n\n5. Check Accreditation\nVerify that the program is properly accredited in your field.\n\n6. Look at Alumni Success\nResearch where graduates from the program are working.\n\n7. Consider Location\nThink about internship opportunities and industry connections in the area.\n\n8. Factor in Cost\nBalance program quality with affordability and scholarship opportunities.\n\n9. Assess Support Services\nLook for programs offering career counseling, internships, and job placement assistance.\n\n10. Trust Your Instincts\nChoose a program where you feel you'll thrive academically and personally.",
                'status' => 'published',
                'published_at' => now()->subDays(50),
                'is_featured' => false,
            ],
        ];

        foreach ($blogPosts as $index => $postData) {
            BlogPost::create(array_merge($postData, [
                'user_id' => $author->id,
                'blog_category_id' => $categories->random()->id,
            ]));
        }

        $this->command->info('Demo blog posts created successfully!');
    }
}

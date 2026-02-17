<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        // Categories
        $industryNews = Category::create([
            'name' => 'Industry News',
            'description' => 'Latest news and trends in the equipment rental industry.',
        ]);

        $productUpdates = Category::create([
            'name' => 'Product Updates',
            'description' => 'New features, improvements, and updates to the EquipDash platform.',
        ]);

        $tipsGuides = Category::create([
            'name' => 'Tips & Guides',
            'description' => 'Practical advice and how-to guides for rental business owners.',
        ]);

        // Authors
        $sarah = Author::create([
            'name' => 'Sarah Johnson',
            'email' => 'sarah@equipdash.com',
            'bio' => 'Sarah is a rental industry expert with over 10 years of experience helping businesses scale their operations.',
        ]);

        $mike = Author::create([
            'name' => 'Mike Chen',
            'email' => 'mike@equipdash.com',
            'bio' => 'Mike is a product engineer at EquipDash who loves building tools that make rental management effortless.',
        ]);

        // Tags
        $tagRentalBusiness = Tag::create(['name' => 'Rental Business']);
        $tagTechnology = Tag::create(['name' => 'Technology']);
        $tagGrowth = Tag::create(['name' => 'Growth']);
        $tagCustomerExperience = Tag::create(['name' => 'Customer Experience']);
        $tagOperations = Tag::create(['name' => 'Operations']);

        // Blog posts
        $posts = [
            [
                'title' => 'How Equipment Rental Software Is Transforming the Industry in 2025',
                'excerpt' => 'Discover how modern rental management platforms are helping businesses streamline operations, reduce costs, and deliver better customer experiences.',
                'content' => '<p>The equipment rental industry is undergoing a significant transformation driven by technology. Modern rental management software has moved beyond simple booking systems to become comprehensive platforms that handle every aspect of a rental business.</p><h2>Streamlined Operations</h2><p>From automated inventory tracking to real-time availability updates, today\'s rental software eliminates the manual processes that slow businesses down. Operators can manage their entire fleet from a single dashboard, reducing errors and saving hours of administrative work each week.</p><h2>Better Customer Experiences</h2><p>Online booking portals, digital waivers, and automated communications mean customers can rent equipment on their own terms. Self-service options reduce friction while giving businesses the ability to serve more customers without adding staff.</p><h2>Data-Driven Decisions</h2><p>Analytics dashboards provide insights into utilization rates, revenue trends, and seasonal patterns. This data helps operators make smarter decisions about fleet expansion, pricing strategies, and marketing investments.</p>',
                'category_id' => $industryNews->id,
                'author_id' => $sarah->id,
                'tags' => [$tagRentalBusiness->id, $tagTechnology->id],
                'published_at' => now()->subDays(30),
                'read_time_minutes' => 5,
            ],
            [
                'title' => '5 Strategies to Grow Your Rental Business This Season',
                'excerpt' => 'Proven tactics to increase bookings, improve customer retention, and expand your rental operation during peak season.',
                'content' => '<p>Peak season is the make-or-break period for rental businesses. With the right strategies in place, you can maximize revenue and set your business up for long-term growth.</p><h2>1. Optimize Your Online Presence</h2><p>Most customers start their search online. Make sure your website is mobile-friendly, loads quickly, and makes it easy to browse inventory and book rentals. Invest in local SEO to appear in search results when customers look for rental services in your area.</p><h2>2. Implement Dynamic Pricing</h2><p>Adjust your pricing based on demand, season, and rental duration. Dynamic pricing helps you maximize revenue during peak times while keeping bookings flowing during slower periods.</p><h2>3. Build a Loyalty Program</h2><p>Repeat customers are your most valuable asset. Create a loyalty program that rewards frequent renters with discounts, priority booking, or exclusive access to new equipment.</p><h2>4. Expand Your Fleet Strategically</h2><p>Use data from your rental management software to identify which equipment types are most in demand. Invest in high-utilization categories and consider retiring underperforming assets.</p><h2>5. Partner with Local Businesses</h2><p>Form partnerships with hotels, tour operators, and event venues to create referral networks. Cross-promotion helps you reach new audiences without significant marketing spend.</p>',
                'category_id' => $tipsGuides->id,
                'author_id' => $sarah->id,
                'tags' => [$tagGrowth->id, $tagRentalBusiness->id],
                'published_at' => now()->subDays(22),
                'read_time_minutes' => 7,
            ],
            [
                'title' => 'Introducing EquipDash 2.0: A Complete Platform Redesign',
                'excerpt' => 'We have rebuilt EquipDash from the ground up with a new interface, faster performance, and powerful new features for rental businesses.',
                'content' => '<p>After months of development and feedback from hundreds of rental operators, we are thrilled to announce EquipDash 2.0 -- the most significant update in our platform\'s history.</p><h2>What\'s New</h2><p>The redesigned dashboard gives you a complete overview of your business at a glance. Track bookings, revenue, and equipment utilization from a single screen. The new interface is faster, cleaner, and designed for the way rental operators actually work.</p><h2>Smart Inventory Management</h2><p>Our new inventory system automatically tracks equipment condition, maintenance schedules, and availability. Set up alerts for upcoming maintenance, low stock, or high-demand periods so you\'re always prepared.</p><h2>Enhanced Booking Flow</h2><p>The customer-facing booking experience has been completely rebuilt. Customers can now browse your inventory with rich media, check real-time availability, and complete bookings in under two minutes.</p><h2>Advanced Reporting</h2><p>New reporting tools give you deeper insights into your business performance. Track revenue by category, analyze seasonal trends, and identify your most profitable equipment with customizable reports.</p>',
                'category_id' => $productUpdates->id,
                'author_id' => $mike->id,
                'tags' => [$tagTechnology->id],
                'published_at' => now()->subDays(15),
                'read_time_minutes' => 4,
            ],
            [
                'title' => 'The Complete Guide to Digital Waivers for Rental Businesses',
                'excerpt' => 'Learn how digital waivers save time, reduce liability, and improve the customer experience for equipment rental operations.',
                'content' => '<p>Paper waivers are a thing of the past. Digital waivers offer rental businesses a faster, more secure, and legally robust way to manage liability documentation.</p><h2>Why Switch to Digital Waivers?</h2><p>Digital waivers eliminate the hassle of paper forms, illegible signatures, and lost documents. Customers can sign waivers on their phone before they even arrive, reducing check-in times and getting them to their rental faster.</p><h2>Legal Considerations</h2><p>Electronic signatures are legally binding in all 50 states under the ESIGN Act. Digital waivers actually provide better legal protection than paper ones because they create timestamped, tamper-proof records that are easy to retrieve if needed.</p><h2>Implementation Tips</h2><p>When setting up digital waivers, make sure your forms are mobile-optimized and easy to read. Include clear language about risks and responsibilities. Send waiver links automatically when a booking is confirmed so customers can complete them ahead of time.</p><h2>Integrating with Your Workflow</h2><p>The best digital waiver solutions integrate directly with your rental management software. When a customer signs a waiver, it is automatically linked to their booking and stored securely in your system.</p>',
                'category_id' => $tipsGuides->id,
                'author_id' => $sarah->id,
                'tags' => [$tagCustomerExperience->id, $tagOperations->id],
                'published_at' => now()->subDays(10),
                'read_time_minutes' => 6,
            ],
            [
                'title' => 'How to Reduce Equipment Downtime and Maximize Utilization',
                'excerpt' => 'Practical tips for keeping your rental fleet in top condition and ensuring maximum availability during peak demand.',
                'content' => '<p>Equipment downtime is one of the biggest revenue killers for rental businesses. Every hour a piece of equipment sits idle due to maintenance issues is lost revenue. Here is how to minimize downtime and keep your fleet working.</p><h2>Preventive Maintenance Schedules</h2><p>Create a preventive maintenance schedule based on usage hours, not just calendar dates. Track equipment usage through your rental management software and set up automated maintenance alerts when equipment reaches service thresholds.</p><h2>Quick Turnaround Processes</h2><p>Develop efficient check-in and inspection processes so equipment can be cleaned, inspected, and made available for the next rental quickly. Standardized checklists ensure nothing is missed while keeping turnaround times short.</p><h2>Inventory Buffer Planning</h2><p>For your most popular equipment categories, maintain a small buffer of extra inventory to cover unexpected maintenance needs. This ensures you can always fulfill bookings even when a unit is out for repairs.</p><h2>Track and Analyze Downtime</h2><p>Use your rental software to track the reasons for equipment downtime. Over time, this data reveals patterns that help you make better purchasing decisions and identify equipment that may need to be retired.</p>',
                'category_id' => $tipsGuides->id,
                'author_id' => $mike->id,
                'tags' => [$tagOperations->id, $tagRentalBusiness->id],
                'published_at' => now()->subDays(5),
                'read_time_minutes' => 5,
            ],
            [
                'title' => 'Rental Industry Trends to Watch in the Coming Year',
                'excerpt' => 'From sustainability initiatives to AI-powered operations, here are the trends shaping the future of equipment rental.',
                'content' => '<p>The equipment rental industry continues to evolve rapidly. Staying ahead of emerging trends is essential for operators who want to remain competitive and grow their businesses.</p><h2>Sustainability and Green Rentals</h2><p>Customers increasingly prefer eco-friendly options. Rental businesses that offer electric or low-emission equipment, implement recycling programs, and reduce their environmental footprint will have a competitive advantage.</p><h2>AI and Automation</h2><p>Artificial intelligence is beginning to transform rental operations. From predictive maintenance that anticipates equipment failures to dynamic pricing algorithms that optimize revenue, AI tools are becoming accessible to businesses of all sizes.</p><h2>Experience-Based Rentals</h2><p>The line between equipment rental and experience delivery continues to blur. Successful operators are bundling equipment with guided experiences, lessons, and curated adventures to create higher-value offerings.</p><h2>Mobile-First Operations</h2><p>Both operators and customers expect to manage everything from their phones. Mobile-optimized booking flows, on-the-go fleet management, and real-time notifications are no longer optional features.</p><h2>Data-Driven Fleet Management</h2><p>Advanced analytics tools help operators understand exactly which equipment generates the most revenue, which items need replacement, and where to invest for growth. Data literacy is becoming a critical skill for rental business owners.</p>',
                'category_id' => $industryNews->id,
                'author_id' => $sarah->id,
                'tags' => [$tagTechnology->id, $tagGrowth->id, $tagRentalBusiness->id],
                'published_at' => now()->subDays(2),
                'read_time_minutes' => 6,
            ],
        ];

        foreach ($posts as $postData) {
            $tags = $postData['tags'];
            unset($postData['tags']);

            $postData['is_published'] = true;

            $post = Post::create($postData);
            $post->tags()->attach($tags);
        }
    }
}

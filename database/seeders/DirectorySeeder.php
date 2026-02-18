<?php

namespace Database\Seeders;

use App\Models\DirectoryListing;
use App\Models\DirectoryTaxonomy;
use Illuminate\Database\Seeder;

class DirectorySeeder extends Seeder
{
    public function run(): void
    {
        // Location taxonomies
        $newYork = DirectoryTaxonomy::create(['name' => 'New York', 'type' => 'location', 'sort_order' => 1]);
        $losAngeles = DirectoryTaxonomy::create(['name' => 'Los Angeles', 'type' => 'location', 'sort_order' => 2]);
        $miami = DirectoryTaxonomy::create(['name' => 'Miami', 'type' => 'location', 'sort_order' => 3]);
        $denver = DirectoryTaxonomy::create(['name' => 'Denver', 'type' => 'location', 'sort_order' => 4]);
        $seattle = DirectoryTaxonomy::create(['name' => 'Seattle', 'type' => 'location', 'sort_order' => 5]);

        // Experience taxonomies
        $guidedTours = DirectoryTaxonomy::create(['name' => 'Guided Tours', 'type' => 'experience', 'sort_order' => 1]);
        $selfGuided = DirectoryTaxonomy::create(['name' => 'Self-Guided', 'type' => 'experience', 'sort_order' => 2]);
        $groupActivities = DirectoryTaxonomy::create(['name' => 'Group Activities', 'type' => 'experience', 'sort_order' => 3]);
        $privateSessions = DirectoryTaxonomy::create(['name' => 'Private Sessions', 'type' => 'experience', 'sort_order' => 4]);

        // Rental taxonomies
        $equipment = DirectoryTaxonomy::create(['name' => 'Equipment', 'type' => 'rental', 'sort_order' => 1]);
        $vehicles = DirectoryTaxonomy::create(['name' => 'Vehicles', 'type' => 'rental', 'sort_order' => 2]);
        $watercraft = DirectoryTaxonomy::create(['name' => 'Watercraft', 'type' => 'rental', 'sort_order' => 3]);
        $winterSports = DirectoryTaxonomy::create(['name' => 'Winter Sports', 'type' => 'rental', 'sort_order' => 4]);

        // Directory listings
        $listings = [
            [
                'title' => 'Summit Gear Rentals',
                'description' => 'Premium outdoor equipment rentals for hiking, camping, and mountaineering. We carry top brands and offer expert advice to help you prepare for any adventure.',
                'address' => '450 Mountain View Drive, Denver, CO 80202',
                'website' => 'https://summitgearrentals.example.com',
                'taxonomies' => [$denver->id, $selfGuided->id, $equipment->id],
            ],
            [
                'title' => 'Coastal Kayak Adventures',
                'description' => 'Explore the beautiful Miami coastline with our fleet of kayaks, paddleboards, and small watercraft. Guided tours available daily for all skill levels.',
                'address' => '1200 Ocean Boulevard, Miami, FL 33139',
                'website' => 'https://coastalkayak.example.com',
                'taxonomies' => [$miami->id, $guidedTours->id, $watercraft->id],
            ],
            [
                'title' => 'NYC Bike Tours & Rentals',
                'description' => 'Discover New York City on two wheels. We offer daily bike rentals and guided cycling tours through Central Park, Brooklyn Bridge, and Manhattan neighborhoods.',
                'address' => '88 West Broadway, New York, NY 10007',
                'website' => 'https://nycbiketours.example.com',
                'taxonomies' => [$newYork->id, $guidedTours->id, $groupActivities->id, $vehicles->id],
            ],
            [
                'title' => 'Pacific Northwest Paddle Co.',
                'description' => 'Stand-up paddleboard and canoe rentals on Seattle\'s most scenic waterways. Private lessons and group outings available for corporate events and parties.',
                'address' => '3300 Lakeside Avenue, Seattle, WA 98144',
                'website' => 'https://pnwpaddle.example.com',
                'taxonomies' => [$seattle->id, $privateSessions->id, $groupActivities->id, $watercraft->id],
            ],
            [
                'title' => 'Rocky Mountain Ski & Board',
                'description' => 'Full-service ski and snowboard rental shop with the latest gear from top brands. Offering custom boot fitting, tuning services, and multi-day rental packages.',
                'address' => '7890 Ski Resort Road, Denver, CO 80424',
                'website' => 'https://rockymtnskiboard.example.com',
                'taxonomies' => [$denver->id, $selfGuided->id, $winterSports->id],
            ],
            [
                'title' => 'SoCal Surf Shack',
                'description' => 'Surfboard and wetsuit rentals on Venice Beach. We offer beginner surf lessons, private coaching, and board storage for local surfers.',
                'address' => '1500 Pacific Avenue, Los Angeles, CA 90291',
                'website' => 'https://socalsurfshack.example.com',
                'taxonomies' => [$losAngeles->id, $privateSessions->id, $equipment->id],
            ],
            [
                'title' => 'Harbor Boat Charters',
                'description' => 'Boat and yacht rentals in Miami Harbor. Choose from pontoon boats, fishing charters, and luxury yacht experiences for groups of all sizes.',
                'address' => '600 Harbor Drive, Miami, FL 33132',
                'website' => 'https://harborboatcharters.example.com',
                'taxonomies' => [$miami->id, $groupActivities->id, $watercraft->id],
            ],
            [
                'title' => 'Emerald City E-Bikes',
                'description' => 'Electric bike rentals for exploring Seattle and the surrounding trails. Self-guided tour maps included with every rental. Fleet of over 200 e-bikes.',
                'address' => '2100 Pike Street, Seattle, WA 98101',
                'website' => 'https://emeraldcityebikes.example.com',
                'taxonomies' => [$seattle->id, $selfGuided->id, $vehicles->id],
            ],
            [
                'title' => 'Adventure Awaits Kayaking',
                'description' => 'Paddle through the iconic waterways of New York with our premium kayak fleet. We offer sunrise and sunset tours, corporate team-building events, and weekend warrior packages.',
                'address' => '75 Riverside Drive, New York, NY 10024',
                'website' => 'https://adventureawaits.example.com',
                'taxonomies' => [$newYork->id, $guidedTours->id, $watercraft->id],
            ],
            [
                'title' => 'Mountain Peak Equipment',
                'description' => 'Your one-stop shop for high-altitude adventure gear. From crampons to climbing harnesses, we stock everything you need for Colorado\'s fourteeners and backcountry trails.',
                'address' => '1800 Summit Boulevard, Denver, CO 80301',
                'website' => 'https://mountainpeak.example.com',
                'taxonomies' => [$denver->id, $selfGuided->id, $equipment->id],
            ],
            [
                'title' => 'Sunset Beach Rentals',
                'description' => 'Beachfront rentals including surfboards, bodyboards, beach cruisers, and umbrellas. Located steps from the sand on Santa Monica Beach with all-day rental options.',
                'address' => '2400 Ocean Front Walk, Los Angeles, CA 90405',
                'website' => 'https://sunsetbeachrentals.example.com',
                'taxonomies' => [$losAngeles->id, $selfGuided->id, $equipment->id],
            ],
            [
                'title' => 'Everglades Airboat Tours',
                'description' => 'Experience the Florida Everglades like never before with our guided airboat tours. Spot alligators, exotic birds, and unique wildlife on our eco-friendly excursions.',
                'address' => '9500 Tamiami Trail, Miami, FL 33194',
                'website' => 'https://evergladesairboat.example.com',
                'taxonomies' => [$miami->id, $guidedTours->id, $groupActivities->id, $watercraft->id],
            ],
            [
                'title' => 'Puget Sound Sailing Co.',
                'description' => 'Charter sailboats and catamarans on Puget Sound. Private sailing lessons for beginners and advanced sailors, plus sunset dinner cruises every Friday and Saturday.',
                'address' => '1900 Alaskan Way, Seattle, WA 98101',
                'website' => 'https://pugetsoundsailing.example.com',
                'taxonomies' => [$seattle->id, $privateSessions->id, $watercraft->id],
            ],
            [
                'title' => 'Mile High Snowmobile Rentals',
                'description' => 'Explore Colorado\'s backcountry on our top-of-the-line snowmobiles. Guided trail rides and self-guided adventures available with all safety gear included.',
                'address' => '4200 Winter Park Drive, Denver, CO 80482',
                'website' => 'https://milehighsnowmobile.example.com',
                'taxonomies' => [$denver->id, $guidedTours->id, $winterSports->id, $vehicles->id],
            ],
            [
                'title' => 'Hollywood Hills Segway Tours',
                'description' => 'Glide through the Hollywood Hills and celebrity neighborhoods on our guided Segway tours. Perfect for tourists and locals looking for a unique LA experience.',
                'address' => '6801 Hollywood Boulevard, Los Angeles, CA 90028',
                'website' => 'https://hollywoodsegway.example.com',
                'taxonomies' => [$losAngeles->id, $guidedTours->id, $groupActivities->id, $vehicles->id],
            ],
            [
                'title' => 'Central Park Outdoor Adventures',
                'description' => 'Canoe, rowboat, and paddleboard rentals on Central Park Lake. We also offer nature walks, bird-watching tours, and outdoor fitness classes in the park.',
                'address' => '14 East 60th Street, New York, NY 10022',
                'website' => 'https://centralparkadventures.example.com',
                'taxonomies' => [$newYork->id, $groupActivities->id, $watercraft->id, $equipment->id],
            ],
            [
                'title' => 'Biscayne Bay Jet Ski Rentals',
                'description' => 'High-performance jet ski rentals on Biscayne Bay. Single and tandem options available with hourly and half-day packages. No experience necessary.',
                'address' => '300 Alton Road, Miami, FL 33139',
                'website' => 'https://biscaynejetski.example.com',
                'taxonomies' => [$miami->id, $selfGuided->id, $watercraft->id],
            ],
            [
                'title' => 'Cascade Mountain Bike Co.',
                'description' => 'Premium mountain bike rentals for the Cascade Range trail system. Full suspension and hardtail options with helmet and repair kit included. Trail maps provided.',
                'address' => '5500 Cascade Way, Seattle, WA 98188',
                'website' => 'https://cascademtb.example.com',
                'taxonomies' => [$seattle->id, $selfGuided->id, $vehicles->id, $equipment->id],
            ],
            [
                'title' => 'Malibu Surf School & Rentals',
                'description' => 'Learn to surf with certified instructors at Malibu\'s famous Surfrider Beach. Private and group lessons available daily, plus board and wetsuit rentals for experienced surfers.',
                'address' => '23000 Pacific Coast Highway, Los Angeles, CA 90265',
                'website' => 'https://malibusurfschool.example.com',
                'taxonomies' => [$losAngeles->id, $privateSessions->id, $groupActivities->id, $equipment->id],
            ],
            [
                'title' => 'Hudson Valley Hot Air Balloons',
                'description' => 'Soar above the stunning Hudson Valley in our hot air balloons. Sunrise and sunset flights available year-round. Private charter flights for special occasions.',
                'address' => '200 Hudson Terrace, New York, NY 10701',
                'website' => 'https://hudsonballoons.example.com',
                'taxonomies' => [$newYork->id, $privateSessions->id, $vehicles->id],
            ],
        ];

        foreach ($listings as $listingData) {
            $taxonomyIds = $listingData['taxonomies'];
            unset($listingData['taxonomies']);

            $listingData['is_published'] = true;
            $listingData['published_at'] = now();

            $listing = DirectoryListing::create($listingData);
            $listing->taxonomies()->attach($taxonomyIds);
        }
    }
}

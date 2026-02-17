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

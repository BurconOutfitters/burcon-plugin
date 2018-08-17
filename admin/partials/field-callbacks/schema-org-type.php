<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    Burcon_Outfitters_Plugin
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace CC_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'burcon-plugin' ),
	'Airline'     => __( 'Airline', 'burcon-plugin' ),
	'Corporation' => __( 'Corporation', 'burcon-plugin' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'burcon-plugin' ),
		'CollegeOrUniversity' => __( '— College or University', 'burcon-plugin' ),
		'ElementarySchool'    => __( '— Elementary School', 'burcon-plugin' ),
		'HighSchool'          => __( '— High School', 'burcon-plugin' ),
		'MiddleSchool'        => __( '— Middle School', 'burcon-plugin' ),
		'Preschool'           => __( '— Preschool', 'burcon-plugin' ),
		'School'              => __( '— School', 'burcon-plugin' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'burcon-plugin' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'burcon-plugin' ),
		'AnimalShelter' => __( '— Animal Shelter', 'burcon-plugin' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'burcon-plugin' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'burcon-plugin' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'burcon-plugin' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'burcon-plugin' ),
			'AutoRental'       => __( '—— Auto Rental', 'burcon-plugin' ),
			'AutoRepair'       => __( '—— Auto Repair', 'burcon-plugin' ),
			'AutoWash'         => __( '—— Auto Wash', 'burcon-plugin' ),
			'GasStation'       => __( '—— Gas Station', 'burcon-plugin' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'burcon-plugin' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'burcon-plugin' ),

		'ChildCare'            => __( '— Child Care', 'burcon-plugin' ),
		'Dentist'              => __( '— Dentist', 'burcon-plugin' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'burcon-plugin' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'burcon-plugin' ),
			'FireStation'   => __( '—— Fire Station', 'burcon-plugin' ),
			'Hospital'      => __( '—— Hospital', 'burcon-plugin' ),
			'PoliceStation' => __( '—— Police Station', 'burcon-plugin' ),

		'EmploymentAgency' => __( '— Employment Agency', 'burcon-plugin' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'burcon-plugin' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'burcon-plugin' ),
			'AmusementPark'      => __( '—— Amusement Park', 'burcon-plugin' ),
			'ArtGallery'         => __( '—— Art Gallery', 'burcon-plugin' ),
			'Casino'             => __( '—— Casino', 'burcon-plugin' ),
			'ComedyClub'         => __( '—— Comedy Club', 'burcon-plugin' ),
			'MovieTheater'       => __( '—— Movie Theater', 'burcon-plugin' ),
			'NightClub'          => __( '—— Night Club', 'burcon-plugin' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'burcon-plugin' ),
			'AccountingService' => __( '—— Accounting Service', 'burcon-plugin' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'burcon-plugin' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'burcon-plugin' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'burcon-plugin' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'burcon-plugin' ),
			'Bakery'             => __( '—— Bakery', 'burcon-plugin' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'burcon-plugin' ),
			'Brewery'            => __( '—— Brewery', 'burcon-plugin' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'burcon-plugin' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'burcon-plugin' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'burcon-plugin' ),
			'Restaurant'         => __( '—— Restaurant', 'burcon-plugin' ),
			'Winery'             => __( '—— Winery', 'burcon-plugin' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'burcon-plugin' ),
			'PostOffice' => __( '—— Post Office', 'burcon-plugin' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'burcon-plugin' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'burcon-plugin' ),
			'DaySpa'       => __( '—— Day Spa', 'burcon-plugin' ),
			'HairSalon'    => __( '—— Hair Salon', 'burcon-plugin' ),
			'HealthClub'   => __( '—— Health Club', 'burcon-plugin' ),
			'NailSalon'    => __( '—— Nail Salon', 'burcon-plugin' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'burcon-plugin' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'burcon-plugin' ),
			'Electrician'       => __( '—— Electrician', 'burcon-plugin' ),
			'GeneralContractor' => __( '—— General Contractor', 'burcon-plugin' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'burcon-plugin' ),
			'HousePainter'      => __( '—— House Painter', 'burcon-plugin' ),
			'Locksmith'         => __( '—— Locksmith', 'burcon-plugin' ),
			'MovingCompany'     => __( '—— MovingCompany', 'burcon-plugin' ),
			'Plumber'           => __( '—— Plumber', 'burcon-plugin' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'burcon-plugin' ),

		'InternetCafe' => __( '— Internet Cafe', 'burcon-plugin' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'burcon-plugin' ),
			'Attorney' => __( '—— Attorney', 'burcon-plugin' ),
			'Notary'   => __( '—— Notary', 'burcon-plugin' ),

		'Library' => __( '— Library', 'burcon-plugin' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'burcon-plugin' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'burcon-plugin' ),
			'Campground'      => __( '—— Campground', 'burcon-plugin' ),
			'Hostel'          => __( '—— Hostel', 'burcon-plugin' ),
			'Hotel'           => __( '—— Hotel', 'burcon-plugin' ),
			'Motel'           => __( '—— Motel', 'burcon-plugin' ),
			'Resort'          => __( '—— Resort', 'burcon-plugin' ),

		'ProfessionalService' => __( '— Professional Service', 'burcon-plugin' ),
		'RadioStation'        => __( '— Radio Station', 'burcon-plugin' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'burcon-plugin' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'burcon-plugin' ),
		'SelfStorage'         => __( '— Self Storage', 'burcon-plugin' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'burcon-plugin' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'burcon-plugin' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'burcon-plugin' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'burcon-plugin' ),
			'GolfCourse'         => __( '—— Golf Course', 'burcon-plugin' ),
			'HealthClub'         => __( '—— Health Club', 'burcon-plugin' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'burcon-plugin' ),
			'SkiResort'          => __( '—— Ski Resort', 'burcon-plugin' ),
			'SportsClub'         => __( '—— Sports Club', 'burcon-plugin' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'burcon-plugin' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'burcon-plugin' ),

		// Store types.
		'Store' => __( '— Store', 'burcon-plugin' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'burcon-plugin' ),
			'BikeStore'           => __( '—— Bike Store', 'burcon-plugin' ),
			'BookStore'           => __( '—— Book Store', 'burcon-plugin' ),
			'ClothingStore'       => __( '—— Clothing Store', 'burcon-plugin' ),
			'ComputerStore'       => __( '—— Computer Store', 'burcon-plugin' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'burcon-plugin' ),
			'DepartmentStore'     => __( '—— Department Store', 'burcon-plugin' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'burcon-plugin' ),
			'Florist'             => __( '—— Florist', 'burcon-plugin' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'burcon-plugin' ),
			'GardenStore'         => __( '—— Garden Store', 'burcon-plugin' ),
			'GroceryStore'        => __( '—— Grocery Store', 'burcon-plugin' ),
			'HardwareStore'       => __( '—— Hardware Store', 'burcon-plugin' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'burcon-plugin' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'burcon-plugin' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'burcon-plugin' ),
			'LiquorStore'         => __( '—— Liquor Store', 'burcon-plugin' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'burcon-plugin' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'burcon-plugin' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'burcon-plugin' ),
			'MusicStore'          => __( '—— Music Store', 'burcon-plugin' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'burcon-plugin' ),
			'OutletStore'         => __( '—— Outlet Store', 'burcon-plugin' ),
			'PawnShop'            => __( '—— Pawn Shop', 'burcon-plugin' ),
			'PetStore'            => __( '—— Pet Store', 'burcon-plugin' ),
			'ShoeStore'           => __( '—— Shoe Store', 'burcon-plugin' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'burcon-plugin' ),
			'TireShop'            => __( '—— Tire Shop', 'burcon-plugin' ),
			'ToyStore'            => __( '—— Toy Store', 'burcon-plugin' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'burcon-plugin' ),

		'TelevisionStation'        => __( '— Television Station', 'burcon-plugin' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'burcon-plugin' ),
		'TravelAgency'             => __( '— Travel Agency', 'burcon-plugin' ),

	'MedicalOrganization' => __( 'Medical Organization', 'burcon-plugin' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'burcon-plugin' ),
	'PerformingGroup'     => __( 'Performing Group', 'burcon-plugin' ),
	'SportsOrganization'  => __( 'Sports Organization', 'burcon-plugin' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'burcon-plugin' ) )
);
$html .= '</p>';

echo $html;
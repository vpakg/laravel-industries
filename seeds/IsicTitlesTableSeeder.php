<?php

class IsicTitlesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('isic_titles')->truncate();
        
		\DB::table('isic_titles')->insert(array (
			0 => 
			array (
				'id' => 1,
				'sort_order' => 20,
				'code' => 'A',
				'description' => 'Agriculture, forestry and fishing',
				'explanatory_note_inclusion' => 'This section includes the exploitation of vegetal and animal natural resources, comprising the activities of growing of crops, raising and breeding of animals, harvesting of timber and other plants, animals or animal products from a farm or their natural habitats.',
				'explanatory_note_exclusion' => '',
			),
			1 => 
			array (
				'id' => 2,
				'sort_order' => 30,
				'code' => '01',
				'description' => 'Crop and animal production, hunting and related service activities',
				'explanatory_note_inclusion' => 'This division includes two basic activities, namely the production of crop products and production of animal products, covering also the forms of organic agriculture, the growing of genetically modified crops and the raising of genetically modified animals. 

This division also includes service activities incidental to agriculture, as well as hunting, trapping and related activities.

Group 015 (Mixed farming) breaks with the usual principles for identifying main activity. It accepts that ma',
				'explanatory_note_exclusion' => '',
			),
			2 => 
			array (
				'id' => 3,
				'sort_order' => 40,
				'code' => '011',
				'description' => 'Growing of non-perennial crops',
				'explanatory_note_inclusion' => 'This group includes the growing of non-perennial crops, i.e. plants that do not last for more than two growing seasons. Included is the growing of these plants for the purpose of seed production.',
				'explanatory_note_exclusion' => '',
			),
			3 => 
			array (
				'id' => 4,
				'sort_order' => 50,
				'code' => '0111',
			'description' => 'Growing of cereals (except rice), leguminous crops and oil seeds',
				'explanatory_note_inclusion' => 'This class includes all forms of growing of cereals, leguminous crops and oil seeds in open fields, including those considered organic farming and the growing of genetically modified crops. The growing of these crops is often combined within agricultural units.

This class includes:
- growing of cereals such as:
* wheat
* grain maize
* sorghum
* barley
* rye
* oats
* millets
* other cereals n.e.c.
- growing of leguminous crops such as:
* beans
* broad beans
* chick peas
* cow pea',
				'explanatory_note_exclusion' => 'This class excludes:
- growing of maize for fodder, see 0119',
			),
			4 => 
			array (
				'id' => 5,
				'sort_order' => 60,
				'code' => '0112',
				'description' => 'Growing of rice',
				'explanatory_note_inclusion' => 'This class includes:
- growing of rice (including organic farming and the growing of genetically modified rice)',
				'explanatory_note_exclusion' => '',
			),
			5 => 
			array (
				'id' => 6,
				'sort_order' => 70,
				'code' => '0113',
				'description' => 'Growing of vegetables and melons, roots and tubers',
				'explanatory_note_inclusion' => 'This class includes:
- growing of leafy or stem vegetables such as:
* artichokes
* asparagus
* cabbages
* cauliflower and broccoli
* lettuce and chicory
* spinach
* other leafy or stem vegetables
- growing of fruit bearing vegetables such as:
* cucumbers and gherkins
* eggplants (aubergines)
* tomatoes
* watermelons
* cantaloupes
* other melons and fruit-bearing vegetables
- growing of root, bulb or tuberous vegetables such as:
* carrots
* turnips
* garlic
* onions (incl. sha',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of mushroom spawn, see 0130
- growing of chilies and peppers (capsicum spp.) and other spices and aromatic crops, see 0128',
				),
				6 => 
				array (
					'id' => 7,
					'sort_order' => 80,
					'code' => '0114',
					'description' => 'Growing of sugar cane',
					'explanatory_note_inclusion' => 'This class includes:
- growing of sugar cane',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of sugar beet, see 0113',
				),
				7 => 
				array (
					'id' => 8,
					'sort_order' => 90,
					'code' => '0115',
					'description' => 'Growing of tobacco',
					'explanatory_note_inclusion' => 'This class includes:
- growing of unmanufactured tobacco',
					'explanatory_note_exclusion' => '',
				),
				8 => 
				array (
					'id' => 9,
					'sort_order' => 110,
					'code' => '0116',
					'description' => 'Growing of fibre crops',
					'explanatory_note_inclusion' => 'This class includes:
- growing of cotton
- growing of jute, kenaf and other textile bast fibres
- growing of flax and true hemp
- growing of sisal and other textile fibre of the genus agave
- growing of abaca, ramie and other vegetable textile fibres
- growing of other fibre crops',
					'explanatory_note_exclusion' => '',
				),
				9 => 
				array (
					'id' => 10,
					'sort_order' => 130,
					'code' => '0119',
					'description' => 'Growing of other non-perennial crops',
					'explanatory_note_inclusion' => 'This class includes the growing of non-perennial crops not elsewhere classified.

This class includes:
- growing of swedes, mangolds, fodder roots, clover, alfalfa, sainfoin, maize and other grasses, forage kale and similar forage products 
- growing of beet seeds (excluding sugar beet seeds) and seeds of forage plants
- growing of flowers, including production of cut flowers and flower buds
- growing of flower seeds',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of sunflower seeds, see 0111
- growing of non-perennial spice, aromatic, drug and pharmaceutical crops, see 0128',
				),
				10 => 
				array (
					'id' => 11,
					'sort_order' => 140,
					'code' => '012',
					'description' => 'Growing of perennial crops',
					'explanatory_note_inclusion' => 'This group includes the growing of perennial crops, i.e. plants that lasts for more than two growing seasons, either dying back after each season or growing continuously. Included is the growing of these plants for the purpose of seed production.',
					'explanatory_note_exclusion' => '',
				),
				11 => 
				array (
					'id' => 12,
					'sort_order' => 150,
					'code' => '0121',
					'description' => 'Growing of grapes',
					'explanatory_note_inclusion' => 'This class includes:
- growing of wine grapes and table grapes in vineyards',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of wine, see 1102',
				),
				12 => 
				array (
					'id' => 13,
					'sort_order' => 160,
					'code' => '0122',
					'description' => 'Growing of tropical and subtropical fruits',
					'explanatory_note_inclusion' => 'This class includes:
- growing of tropical and subtropical fruits:
* avocados
* bananas and plantains
* dates
* figs
* mangoes
* papayas
* pineapples
* other tropical and subtropical fruits',
					'explanatory_note_exclusion' => '',
				),
				13 => 
				array (
					'id' => 14,
					'sort_order' => 170,
					'code' => '0123',
					'description' => 'Growing of citrus fruits',
					'explanatory_note_inclusion' => 'This class includes:
- growing of citrus fruits:
* grapefruit and pomelo
* lemons and limes
* oranges
* tangerines, mandarins and clementines
* other citrus fruits',
					'explanatory_note_exclusion' => '',
				),
				14 => 
				array (
					'id' => 15,
					'sort_order' => 180,
					'code' => '0124',
					'description' => 'Growing of pome fruits and stone fruits',
					'explanatory_note_inclusion' => 'This class includes:
- growing of pome fruits and stone fruits:
* apples
* apricots
* cherries and sour cherries
* peaches and nectarines
* pears and quinces
* plums and sloes
* other pome fruits and stone fruits',
					'explanatory_note_exclusion' => '',
				),
				15 => 
				array (
					'id' => 16,
					'sort_order' => 190,
					'code' => '0125',
					'description' => 'Growing of other tree and bush fruits and nuts',
					'explanatory_note_inclusion' => 'This class includes:
- growing of berries:
* blueberries
* currants
* gooseberries
* kiwi fruit
* raspberries
* strawberries
* other berries
- growing of fruit seeds
- growing of edible nuts:
* almonds
* cashew nuts
* chestnuts
* hazelnuts
* pistachios
* walnuts
* other nuts
- growing of other tree and bush fruits:
* locust beans',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of coconuts, see 0126',
				),
				16 => 
				array (
					'id' => 17,
					'sort_order' => 200,
					'code' => '0126',
					'description' => 'Growing of oleaginous fruits',
					'explanatory_note_inclusion' => 'This class includes:
- growing of oleaginous fruits:
* coconuts
* olives
* oil palms
* other oleaginous fruits',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of soya beans, groundnuts and other oil seeds, see 0111',
				),
				17 => 
				array (
					'id' => 18,
					'sort_order' => 210,
					'code' => '0127',
					'description' => 'Growing of beverage crops',
					'explanatory_note_inclusion' => 'This class includes:
- growing of beverage crops:
* coffee
* tea
* maté
* cocoa
* other beverage crops',
					'explanatory_note_exclusion' => '',
				),
				18 => 
				array (
					'id' => 19,
					'sort_order' => 220,
					'code' => '0128',
					'description' => 'Growing of spices, aromatic, drug and pharmaceutical crops',
					'explanatory_note_inclusion' => 'This class includes:
- growing of perennial and non-perennial spices and aromatic crops:
* pepper (piper spp.)
* chilies and peppers (capsicum spp.)
* nutmeg, mace and cardamoms
* anise, badian and fennel
* cinnamon (canella)
* cloves
* ginger
* vanilla
* hops
* other spices and aromatic crops
- growing of drug and narcotic crops
- growing of plants used primarily in perfumery, in pharmacy or for insecticidal, fungicidal or similar purposes',
					'explanatory_note_exclusion' => '',
				),
				19 => 
				array (
					'id' => 20,
					'sort_order' => 230,
					'code' => '0129',
					'description' => 'Growing of other perennial crops',
					'explanatory_note_inclusion' => 'This class includes:
- growing of rubber trees
- growing of Christmas trees
- growing of trees for extraction of sap
- growing of vegetable materials of a kind used primarily for plaiting',
					'explanatory_note_exclusion' => 'This class excludes:
- gathering of tree sap or rubber-like gums in the wild, see 0230',
				),
				20 => 
				array (
					'id' => 21,
					'sort_order' => 240,
					'code' => '013',
					'description' => 'Plant propagation',
					'explanatory_note_inclusion' => 'See class 0130.',
					'explanatory_note_exclusion' => '',
				),
				21 => 
				array (
					'id' => 22,
					'sort_order' => 250,
					'code' => '0130',
					'description' => 'Plant propagation',
					'explanatory_note_inclusion' => 'This class includes the production of all vegetative planting materials including cuttings, suckers and seedlings for direct plant propagation or to create plant grafting stock into which selected scion is grafted for eventual planting to produce crops.

This class includes:
- growing of plants for planting
- growing of plants for ornamental purposes, including turf for transplanting
- growing of live plants for bulbs, tubers and roots; cuttings and slips; mushroom spawn 
- operation of tr',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of plants for the purpose of seed production, see groups 011 and 012
- operation of forest tree nurseries, see 0210',
				),
				22 => 
				array (
					'id' => 23,
					'sort_order' => 260,
					'code' => '014',
					'description' => 'Animal production',
				'explanatory_note_inclusion' => 'This group includes raising (farming) and breeding of all animals, except aquatic animals.',
					'explanatory_note_exclusion' => 'This group excludes:
- breeding support services, such as stud services, see 0162
- farm animal boarding and care, see 0162
- production of hides and skins from slaughterhouses, see 1010',
				),
				23 => 
				array (
					'id' => 24,
					'sort_order' => 270,
					'code' => '0141',
					'description' => 'Raising of cattle and buffaloes',
					'explanatory_note_inclusion' => 'This class includes:
- raising and breeding of cattle and buffaloes
- production of raw cow milk from cows or buffaloes
- production of bovine semen',
					'explanatory_note_exclusion' => 'This class excludes:
- processing of milk, see 1050',
				),
				24 => 
				array (
					'id' => 25,
					'sort_order' => 280,
					'code' => '0142',
					'description' => 'Raising of horses and other equines',
					'explanatory_note_inclusion' => 'This class includes:
- raising and breeding of horses (including racing horses), asses, mules or hinnies',
					'explanatory_note_exclusion' => 'This class excludes:
- operation of racing and riding stables, see 9319',
				),
				25 => 
				array (
					'id' => 26,
					'sort_order' => 290,
					'code' => '0143',
					'description' => 'Raising of camels and camelids',
					'explanatory_note_inclusion' => 'This class includes:
- raising and breeding of camels (dromedary) and camelids',
					'explanatory_note_exclusion' => '',
				),
				26 => 
				array (
					'id' => 27,
					'sort_order' => 300,
					'code' => '0144',
					'description' => 'Raising of sheep and goats',
					'explanatory_note_inclusion' => 'This class includes:
- raising and breeding of sheep and goats
- production of raw sheep or goat milk
- production of raw wool',
					'explanatory_note_exclusion' => 'This class excludes:
- sheep shearing on a fee or contract basis, see 0162
- production of pulled wool, see 1010
- processing of milk, see 1050',
				),
				27 => 
				array (
					'id' => 28,
					'sort_order' => 310,
					'code' => '0145',
					'description' => 'Raising of swine/pigs',
					'explanatory_note_inclusion' => 'This class includes:
- raising and breeding of swine (pigs)',
					'explanatory_note_exclusion' => '',
				),
				28 => 
				array (
					'id' => 29,
					'sort_order' => 320,
					'code' => '0146',
					'description' => 'Raising of poultry',
					'explanatory_note_inclusion' => 'This class includes:
- raising and breeding of poultry:
* fowls of the species Gallus domesticus (chickens and capons), ducks, geese, turkeys and guinea fowls
- production of eggs
- operation of poultry hatcheries',
					'explanatory_note_exclusion' => 'This class excludes:
- production of feathers or down, see 1010',
				),
				29 => 
				array (
					'id' => 30,
					'sort_order' => 330,
					'code' => '0149',
					'description' => 'Raising of other animals',
					'explanatory_note_inclusion' => 'This class includes:
- raising and breeding of semi-domesticated or other live animals:
* ostriches and emus
* other birds (except poultry)
* insects
* rabbits and other fur animals
- production of fur skins, reptile or bird skins from ranching operation
- operation of worm farms, land mollusc farms, snail farms etc.
- raising of silk worms, production of silk worm cocoons
- bee-keeping and production of honey and beeswax
- raising and breeding of pet animals (except fish):
* cats and',
					'explanatory_note_exclusion' => 'This class excludes:
- production of hides and skins originating from hunting and trapping, see 0170
- operation of frog farms, crocodile farms, marine worm farms, see 0321, 0322
- operation of fish farms, see 0321, 0322
- training of pet animals, see 9609',
				),
				30 => 
				array (
					'id' => 31,
					'sort_order' => 340,
					'code' => '015',
					'description' => 'Mixed farming',
					'explanatory_note_inclusion' => 'See class 0150.',
					'explanatory_note_exclusion' => '',
				),
				31 => 
				array (
					'id' => 32,
					'sort_order' => 350,
					'code' => '0150',
					'description' => 'Mixed farming',
					'explanatory_note_inclusion' => 'This class includes the combined production of crops and animals without a specialized production of crops or animals. The size of the overall farming operation is not a determining factor. If either production of crops or animals in a given unit exceeds 66 per cent or more of standard gross margins, the combined activity should not be included here, but allocated to crop or animal farming.',
					'explanatory_note_exclusion' => 'This class excludes:
- mixed crop farming, see groups 011 and 012
- mixed animal farming, see group 014',
				),
				32 => 
				array (
					'id' => 33,
					'sort_order' => 360,
					'code' => '016',
					'description' => 'Support activities to agriculture and post-harvest crop activities',
				'explanatory_note_inclusion' => 'This group includes activities incidental to agricultural production and activities similar to agriculture not undertaken for production purposes (in the sense of harvesting agricultural products), done on a fee or contract basis. Also included are post-harvest crop activities, aimed at preparing agricultural products for the primary market.',
					'explanatory_note_exclusion' => '',
				),
				33 => 
				array (
					'id' => 34,
					'sort_order' => 370,
					'code' => '0161',
					'description' => 'Support activities for crop production',
					'explanatory_note_inclusion' => 'This class includes:
- agricultural activities on a fee or contract basis:
* preparation of fields
* establishing a crop
* treatment of crops
* crop spraying, including by air
* trimming of fruit trees and vines
* transplanting of rice, thinning of beets
* harvesting
* pest control (including rabbits) in connection with agriculture
- operation of agricultural irrigation equipment

This class also includes:
- provision of agricultural machinery with operators and crew
- maintenance ',
					'explanatory_note_exclusion' => 'This class excludes:
- post-harvest crop activities, see 0163
- activities of agronomists and agricultural economists, see 7490
- landscape architecture, see 7110
- landscape gardening, planting, see 8130
- maintenance of land to keep it in good ecological condition, see 8130
- organization of agricultural shows and fairs, see 8230',
				),
				34 => 
				array (
					'id' => 35,
					'sort_order' => 380,
					'code' => '0162',
					'description' => 'Support activities for animal production',
					'explanatory_note_inclusion' => 'This class includes:
- agricultural activities on a fee or contract basis:
* activities to promote propagation, growth and output of animals
* herd testing services, droving services, agistment services, poultry caponizing, coop cleaning etc.
* activities related to artificial insemination
* stud services
* sheep shearing
* farm animal boarding and care

This class also includes:
- activities of farriers',
					'explanatory_note_exclusion' => 'This class excludes:
- provision of space for animal boarding only, see 6810
- veterinary activities, see 7500
- vaccination of animals, see 7500
- renting of animals (e.g. herds), see 7730
- service activities to promote commercial hunting and trapping, see 9499
- pet boarding, see 9609',
				),
				35 => 
				array (
					'id' => 36,
					'sort_order' => 390,
					'code' => '0163',
					'description' => 'Post-harvest crop activities',
					'explanatory_note_inclusion' => 'This class includes:
- preparation of crops for primary markets, i.e. cleaning, trimming, grading, disinfecting 
- cotton ginning
- preparation of tobacco leaves
- preparation of cocoa beans
- waxing of fruit
- sun-drying of fruit and vegetables',
					'explanatory_note_exclusion' => 'This class excludes:
- preparation of agricultural products by the producer, see groups 011 and 012
- preserving of fruit and vegetables, including dehydration by artificial means, see 1030
- stemming and redrying of tobacco, see 1200
- marketing activities of commission merchants and cooperative associations, see division 46
- wholesale of agricultural raw materials, see 4620',
				),
				36 => 
				array (
					'id' => 37,
					'sort_order' => 400,
					'code' => '0164',
					'description' => 'Seed processing for propagation',
					'explanatory_note_inclusion' => 'This class includes all post-harvest activities aimed at improving the propagation quality of seed through the removal of non-seed materials, undersized, mechanically or insect-damaged and immature seeds as well as removing the seed moisture to a safe level for seed storage. This activity includes the drying, cleaning, grading and treating of seeds until they are marketed. The treatment of genetically modified seeds is included here.',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of seeds, see groups 011 and 012
- processing of seeds to obtain oil, see 1040
- research to develop or modify new forms of seeds, see 7210',
				),
				37 => 
				array (
					'id' => 38,
					'sort_order' => 410,
					'code' => '017',
					'description' => 'Hunting, trapping and related service activities',
					'explanatory_note_inclusion' => 'See class 0170.',
					'explanatory_note_exclusion' => '',
				),
				38 => 
				array (
					'id' => 39,
					'sort_order' => 420,
					'code' => '0170',
					'description' => 'Hunting, trapping and related service activities',
					'explanatory_note_inclusion' => 'This class includes:
- hunting and trapping on a commercial basis
- taking of animals (dead or alive) for food, fur, skin, or for use in research, in zoos or as pets
- production of fur skins, reptile or bird skins from hunting or trapping activities

This class also includes:
- land-based catching of sea mammals such as walrus and seal',
					'explanatory_note_exclusion' => 'This class excludes:
- production of fur skins, reptile or bird skins from ranching operations, see group 014
- raising of game animals on ranching operations, see 0149
- catching of whales, see 0311
- production of hides and skins originating from slaughterhouses, see 1010
- hunting for sport or recreation and related service activities, see 9319
- service activities to promote hunting and trapping, see 9499',
				),
				39 => 
				array (
					'id' => 40,
					'sort_order' => 430,
					'code' => '02',
					'description' => 'Forestry and logging',
				'explanatory_note_inclusion' => 'This division includes the production of roundwood for the forest-based manufacturing industries (ISIC divisions 16 and 17) as well as the extraction and gathering of wild growing non-wood forest products. Besides the production of timber, forestry activities result in products that undergo little processing, such as fire wood, charcoal, wood chips and roundwood used in an unprocessed form (e.g. pit-props, pulpwood etc.). These activities can be carried out in natural or planted forests.',
					'explanatory_note_exclusion' => '',
				),
				40 => 
				array (
					'id' => 41,
					'sort_order' => 440,
					'code' => '021',
					'description' => 'Silviculture and other forestry activities',
					'explanatory_note_inclusion' => 'See class 0210.',
					'explanatory_note_exclusion' => '',
				),
				41 => 
				array (
					'id' => 42,
					'sort_order' => 450,
					'code' => '0210',
					'description' => 'Silviculture and other forestry activities',
					'explanatory_note_inclusion' => 'This class includes:
- growing of standing timber: planting, replanting, transplanting, thinning and conserving of forests and timber tracts
- growing of coppice, pulpwood and fire wood
- operation of forest tree nurseries

These activities can be carried out in natural or planted forests.',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of Christmas trees, see 0129
- operation of tree nurseries, see 0130
- gathering of wild growing non-wood forest products, see 0230
- production of wood chips and particles, see 1610',
				),
				42 => 
				array (
					'id' => 43,
					'sort_order' => 460,
					'code' => '022',
					'description' => 'Logging',
					'explanatory_note_inclusion' => 'See class 0220.',
					'explanatory_note_exclusion' => '',
				),
				43 => 
				array (
					'id' => 44,
					'sort_order' => 470,
					'code' => '0220',
					'description' => 'Logging',
					'explanatory_note_inclusion' => 'This class includes:
- production of roundwood for forest-based manufacturing industries
- production of roundwood used in an unprocessed form such as pit-props, fence posts and utility poles
- gathering and production of fire wood
- production of charcoal in the forest (using traditional methods)

The output of this activity can take the form of logs, chips or fire wood.',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of Christmas trees, see 0129
- growing of standing timber: planting, replanting, transplanting, thinning and conserving of forests and timber tracts, see 0210
- gathering of wild growing non-wood forest products, see 0230
- production of wood chips and particles, not associated with logging, see 1610
- production of charcoal through distillation of wood, see 2011',
				),
				44 => 
				array (
					'id' => 45,
					'sort_order' => 480,
					'code' => '023',
					'description' => 'Gathering of non-wood forest products',
					'explanatory_note_inclusion' => 'See class 0230.',
					'explanatory_note_exclusion' => '',
				),
				45 => 
				array (
					'id' => 46,
					'sort_order' => 490,
					'code' => '0230',
					'description' => 'Gathering of non-wood forest products',
					'explanatory_note_inclusion' => 'This class includes the gathering of non-wood forest products and other plants growing in the wild.

This class includes:
- gathering of wild growing materials:
* mushrooms, truffles
* berries
* nuts
* balata and other rubber-like gums
* cork
* lac and resins
* balsams
* vegetable hair
* eelgrass
* acorns, horse chestnuts
* mosses and lichens',
					'explanatory_note_exclusion' => 'This class excludes:
- managed production of any of these products (except growing of cork trees), see division 01
- growing of mushrooms or truffles, see 0113
- growing of berries or nuts, see 0125
- gathering of fire wood, see 0220',
				),
				46 => 
				array (
					'id' => 47,
					'sort_order' => 500,
					'code' => '024',
					'description' => 'Support services to forestry',
					'explanatory_note_inclusion' => 'See class 0240.',
					'explanatory_note_exclusion' => '',
				),
				47 => 
				array (
					'id' => 48,
					'sort_order' => 510,
					'code' => '0240',
					'description' => 'Support services to forestry',
					'explanatory_note_inclusion' => 'This class includes carrying out part of the forestry operation on a fee or contract basis.

This class includes:
- forestry service activities:
* forestry inventories
* forest management consulting services
* timber evaluation
* forest fire fighting and protection
* forest pest control
- logging service activities:
* transport of logs within the forest',
					'explanatory_note_exclusion' => 'This class excludes:
- operation of forest tree nurseries, see 0210',
				),
				48 => 
				array (
					'id' => 49,
					'sort_order' => 520,
					'code' => '03',
					'description' => 'Fishing and aquaculture',
				'explanatory_note_inclusion' => 'This division includes capture fishery and aquaculture, covering the use of fishery resources from marine, brackish or freshwater environments, with the goal of capturing or gathering fish, crustaceans, molluscs and other marine organisms and products (e.g. aquatic plants, pearls, sponges etc).
Also included are activities that are normally integrated in the process of production for own account (e.g. seeding oysters for pearl production).

This division does not include building and repairin',
					'explanatory_note_exclusion' => '',
				),
				49 => 
				array (
					'id' => 50,
					'sort_order' => 530,
					'code' => '031',
					'description' => 'Fishing',
				'explanatory_note_inclusion' => 'This group includes capture fishery, i.e. the hunting, collecting and gathering activities directed at removing or collecting live wild aquatic organisms (predominantly fish, molluscs and crustaceans) including plants from the oceanic, coastal or inland waters for human consumption and other purposes by hand or more usually by various types of fishing gear such as nets, lines and stationary traps. Such activities can be conducted on the intertidal shoreline (e.g. collection of molluscs such as m',
					'explanatory_note_exclusion' => '',
				),
				50 => 
				array (
					'id' => 51,
					'sort_order' => 540,
					'code' => '0311',
					'description' => 'Marine fishing',
					'explanatory_note_inclusion' => 'This class includes:
- fishing on a commercial basis in ocean and coastal waters
- taking of marine crustaceans and molluscs
- whale catching
- taking of marine aquatic animals: turtles, sea squirts, tunicates, sea urchins etc.

This class also includes:
- activities of vessels engaged both in fishing and in processing and preserving of fish
- gathering of other marine organisms and materials: natural pearls, sponges, coral and algae',
					'explanatory_note_exclusion' => 'This class excludes:
- capturing of marine mammals, except whales, e.g. walruses, seals, see 0170
- processing of fish, crustaceans and molluscs on factory ships or in factories ashore, see 1020
- renting of pleasure boats with crew for sea and coastal water transport (e.g. for fishing cruises), see 5011
- fishing inspection, protection and patrol services, see 8423
- fishing practiced for sport or recreation and related services, see 9319
- operation of sport fishing preserves, see 9319',
				),
				51 => 
				array (
					'id' => 52,
					'sort_order' => 550,
					'code' => '0312',
					'description' => 'Freshwater fishing',
					'explanatory_note_inclusion' => 'This class includes:
- fishing on a commercial basis in inland waters
- taking of freshwater crustaceans and molluscs
- taking of freshwater aquatic animals

This class also includes:
- gathering of freshwater materials',
					'explanatory_note_exclusion' => 'This class excludes:
- processing of fish, crustaceans and molluscs, see 1020
- fishing inspection, protection and patrol services, see 8423
- fishing practiced for sport or recreation and related services, see 9319
- operation of sport fishing preserves, see 9319',
				),
				52 => 
				array (
					'id' => 53,
					'sort_order' => 560,
					'code' => '032',
					'description' => 'Aquaculture',
				'explanatory_note_inclusion' => 'This group includes aquaculture (or aquafarming), i.e. the production process involving the culturing or farming (including harvesting) of aquatic organisms (fish, molluscs, crustaceans, plants, crocodiles, alligators and amphibians) using techniques designed to increase the production of the organisms in question beyond the natural capacity of the environment (for example regular stocking, feeding and protection from predators). 
Culturing/farming refers to the rearing up to their juvenile and',
					'explanatory_note_exclusion' => '',
				),
				53 => 
				array (
					'id' => 54,
					'sort_order' => 570,
					'code' => '0321',
					'description' => 'Marine aquaculture',
					'explanatory_note_inclusion' => 'This class includes:
- fish farming in sea water including farming of marine ornamental fish
- production of bivalve spat (oyster mussel etc.), lobsterlings, shrimp post-larvae, fish fry and fingerlings
- growing of laver and other edible seaweeds
- culture of crustaceans, bivalves, other molluscs and other aquatic animals in sea water

This class also includes:
- aquaculture activities in brackish waters
- aquaculture activities in salt water filled tanks or reservoirs
- operation of f',
					'explanatory_note_exclusion' => 'This class excludes:
- frog farming, see 0322
- operation of sport fishing preserves, see 9319',
				),
				54 => 
				array (
					'id' => 55,
					'sort_order' => 580,
					'code' => '0322',
					'description' => 'Freshwater aquaculture',
					'explanatory_note_inclusion' => 'This class includes:
- fish farming in freshwater including farming of freshwater ornamental fish
- culture of freshwater crustaceans, bivalves, other molluscs and other aquatic animals
- operation of fish hatcheries (freshwater)
- farming of frogs',
					'explanatory_note_exclusion' => 'This class excludes:
- aquaculture activities in salt water filled tanks and reservoirs, see 0321
- operation of sport fishing preserves, see 9319',
				),
				55 => 
				array (
					'id' => 56,
					'sort_order' => 590,
					'code' => 'B',
					'description' => 'Mining and quarrying',
				'explanatory_note_inclusion' => 'This section includes the extraction of minerals occurring naturally as solids (coal and ores), liquids (petroleum) or gases (natural gas). Extraction can be achieved by different methods such as underground or surface mining, well operation, seabed mining etc.
This section also includes supplementary activities aimed at preparing the crude materials for marketing, for example, crushing, grinding, cleaning, drying, sorting, concentrating ores, liquefaction of natural gas and agglomeration of so',
					'explanatory_note_exclusion' => '',
				),
				56 => 
				array (
					'id' => 57,
					'sort_order' => 600,
					'code' => '05',
					'description' => 'Mining of coal and lignite',
				'explanatory_note_inclusion' => 'This division includes the extraction of solid mineral fuels includes through underground or open-cast mining and includes operations (e.g. grading, cleaning, compressing and other steps necessary for transportation etc.) leading to a marketable product. 

This division does not include coking (see 1910), services incidental to coal or lignite mining (see 0990) or the manufacture of briquettes (see 1920).',
					'explanatory_note_exclusion' => '',
				),
				57 => 
				array (
					'id' => 58,
					'sort_order' => 610,
					'code' => '051',
					'description' => 'Mining of hard coal',
					'explanatory_note_inclusion' => 'See class 0510.',
					'explanatory_note_exclusion' => '',
				),
				58 => 
				array (
					'id' => 59,
					'sort_order' => 620,
					'code' => '0510',
					'description' => 'Mining of hard coal',
					'explanatory_note_inclusion' => 'This class includes:
- mining of hard coal: underground or surface mining, including mining through liquefaction methods
- cleaning, sizing, grading, pulverizing, compressing etc. of coal to classify, improve quality or facilitate transport or storage

This class also includes:
- recovery of hard coal from culm banks',
					'explanatory_note_exclusion' => 'This class excludes:
- lignite mining, see 0520
- peat digging and agglomeration of peat, see 0892
- test drilling for coal mining, see 0990
- support activities for hard coal mining, see 0990
- coke ovens producing solid fuels, see 1910
- manufacture of hard coal briquettes, see 1920
- work performed to develop or prepare properties for coal mining, see 4312',
				),
				59 => 
				array (
					'id' => 60,
					'sort_order' => 630,
					'code' => '052',
					'description' => 'Mining of lignite',
					'explanatory_note_inclusion' => 'See class 0520.',
					'explanatory_note_exclusion' => '',
				),
				60 => 
				array (
					'id' => 61,
					'sort_order' => 640,
					'code' => '0520',
					'description' => 'Mining of lignite',
					'explanatory_note_inclusion' => 'This class includes:
- mining of lignite (brown coal): underground or surface mining, including mining through liquefaction methods
- washing, dehydrating, pulverizing, compressing of lignite to improve quality or facilitate transport or storage',
					'explanatory_note_exclusion' => 'This class excludes:
- hard coal mining, see 0510
- peat digging, see 0892
- test drilling for coal mining, see 0990
- support activities for lignite mining, see 0990
- manufacture of lignite fuel briquettes, see 1920
- work performed to develop or prepare properties for coal mining, see 4312',
				),
				61 => 
				array (
					'id' => 62,
					'sort_order' => 650,
					'code' => '06',
					'description' => 'Extraction of crude petroleum and natural gas',
					'explanatory_note_inclusion' => 'This division includes the production of crude petroleum, the mining and extraction of oil from oil shale and oil sands and the production of natural gas and recovery of hydrocarbon liquids. This includes the overall activities of operating and/or developing oil and gas field properties, including such activities as drilling, completing and equipping wells, operating separators, emulsion breakers, desilting equipment and field gathering lines for crude petroleum and all other activities in the p',
					'explanatory_note_exclusion' => '',
				),
				62 => 
				array (
					'id' => 63,
					'sort_order' => 660,
					'code' => '061',
					'description' => 'Extraction of crude petroleum',
					'explanatory_note_inclusion' => 'See class 0610.',
					'explanatory_note_exclusion' => '',
				),
				63 => 
				array (
					'id' => 64,
					'sort_order' => 670,
					'code' => '0610',
					'description' => 'Extraction of crude petroleum',
					'explanatory_note_inclusion' => 'This class includes:
- extraction of crude petroleum oils

This class also includes:
- extraction of bituminous or oil shale and tar sand
- production of crude petroleum from bituminous shale and sand
- processes to obtain crude oils: decantation, desalting, dehydration, stabilization etc.',
					'explanatory_note_exclusion' => 'This class excludes:
- support activities for oil and gas extraction, see 0910
- oil and gas exploration, see 0910
- manufacture of refined petroleum products, see 1920
- recovery of liquefied petroleum gases in the refining of petroleum, see 1920
- operation of pipelines, see 4930',
				),
				64 => 
				array (
					'id' => 65,
					'sort_order' => 680,
					'code' => '062',
					'description' => 'Extraction of natural gas',
					'explanatory_note_inclusion' => 'See class 0620.',
					'explanatory_note_exclusion' => '',
				),
				65 => 
				array (
					'id' => 66,
					'sort_order' => 690,
					'code' => '0620',
					'description' => 'Extraction of natural gas',
					'explanatory_note_inclusion' => 'This class includes:
- production of crude gaseous hydrocarbon (natural gas)
- extraction of condensates
- draining and separation of liquid hydrocarbon fractions
- gas desulphurization

This class also includes:
- mining of hydrocarbon liquids, obtained through liquefaction or pyrolysis',
					'explanatory_note_exclusion' => 'This class excludes:
- support activities for oil and gas extraction, see 0910
- oil and gas exploration, see 0910
- recovery of liquefied petroleum gases in the refining of petroleum, see 1920
- manufacture of industrial gases, see 2011
- operation of pipelines, see 4930',
				),
				66 => 
				array (
					'id' => 67,
					'sort_order' => 700,
					'code' => '07',
					'description' => 'Mining of metal ores',
				'explanatory_note_inclusion' => 'This division includes mining for metallic minerals (ores), performed through underground or open-cast extraction, seabed mining etc. Also included are ore dressing and beneficiating operations, such as crushing, grinding, washing, drying, sintering, calcining or leaching ore, gravity separation or flotation operations.

This division excludes manufacturing activities such as the roasting of iron pyrites (see class 2011), the production of aluminium oxide (see class 2420) and the operation of ',
					'explanatory_note_exclusion' => '',
				),
				67 => 
				array (
					'id' => 68,
					'sort_order' => 710,
					'code' => '071',
					'description' => 'Mining of iron ores',
					'explanatory_note_inclusion' => 'See class 0710.',
					'explanatory_note_exclusion' => '',
				),
				68 => 
				array (
					'id' => 69,
					'sort_order' => 720,
					'code' => '0710',
					'description' => 'Mining of iron ores',
					'explanatory_note_inclusion' => 'This class includes:
- mining of ores valued chiefly for iron content
- beneficiation and agglomeration of iron ores',
					'explanatory_note_exclusion' => 'This class excludes:
- extraction and preparation of pyrites and pyrrhotite (except roasting), see 0891',
				),
				69 => 
				array (
					'id' => 70,
					'sort_order' => 730,
					'code' => '072',
					'description' => 'Mining of non-ferrous metal ores',
					'explanatory_note_inclusion' => 'This group includes the mining of non-ferrous metal ores.',
					'explanatory_note_exclusion' => '',
				),
				70 => 
				array (
					'id' => 71,
					'sort_order' => 740,
					'code' => '0721',
					'description' => 'Mining of uranium and thorium ores',
					'explanatory_note_inclusion' => 'This class includes:
- mining of ores chiefly valued for uranium and thorium content: pitchblende etc.
- concentration of such ores
- production of yellowcake',
					'explanatory_note_exclusion' => 'This class excludes:
- enrichment of uranium and thorium ores, see 2011
- production of uranium metal from pitchblende or other ores, see 2420
- smelting and refining of uranium, see 2420',
				),
				71 => 
				array (
					'id' => 72,
					'sort_order' => 750,
					'code' => '0729',
					'description' => 'Mining of other non-ferrous metal ores',
					'explanatory_note_inclusion' => 'This class includes:
- mining and preparation of ores valued chiefly for non-ferrous metal content:
* aluminium (bauxite), copper, lead, zinc, tin, manganese, chrome, nickel, cobalt, molybdenum, tantalum, vanadium etc.
* precious metals: gold, silver, platinum',
					'explanatory_note_exclusion' => 'This class excludes:
- mining and preparation of uranium and thorium ores, see 0721
- production of aluminium oxide and mattes of nickel or of copper, see 2420',
				),
				72 => 
				array (
					'id' => 73,
					'sort_order' => 760,
					'code' => '08',
					'description' => 'Other mining and quarrying',
				'explanatory_note_inclusion' => 'This division includes extraction from a mine or quarry, but also dredging of alluvial deposits, rock crushing and the use of salt marshes. The products are used most notably in construction (e.g. sands, stones etc.), manufacture of materials (e.g. clay, gypsum, calcium etc.), manufacture of chemicals etc.
This division does not include processing (except crushing, grinding, cutting, cleaning, drying, sorting and mixing) of the minerals extracted.',
					'explanatory_note_exclusion' => '',
				),
				73 => 
				array (
					'id' => 74,
					'sort_order' => 770,
					'code' => '081',
					'description' => 'Quarrying of stone, sand and clay',
					'explanatory_note_inclusion' => 'See class 0810.',
					'explanatory_note_exclusion' => '',
				),
				74 => 
				array (
					'id' => 75,
					'sort_order' => 780,
					'code' => '0810',
					'description' => 'Quarrying of stone, sand and clay',
					'explanatory_note_inclusion' => 'This class includes:
- quarrying, rough trimming and sawing of monumental and building stone such as marble, granite, sandstone etc.
- quarrying, crushing and breaking of limestone
- mining of gypsum and anhydrite
- mining of chalk and uncalcined dolomite
- extraction and dredging of industrial sand, sand for construction and gravel
- breaking and crushing of stone and gravel 
- quarrying of sand
- mining of clays, refractory clays and kaolin',
					'explanatory_note_exclusion' => 'This class excludes:
- mining of bituminous sand, see 0610
- mining of chemical and fertilizer minerals, see 0891
- production of calcined dolomite, see 2394
- cutting, shaping and finishing of stone outside quarries, see 2396',
				),
				75 => 
				array (
					'id' => 76,
					'sort_order' => 790,
					'code' => '089',
					'description' => 'Mining and quarrying n.e.c.',
					'explanatory_note_inclusion' => '',
					'explanatory_note_exclusion' => '',
				),
				76 => 
				array (
					'id' => 77,
					'sort_order' => 800,
					'code' => '0891',
					'description' => 'Mining of chemical and fertilizer minerals',
					'explanatory_note_inclusion' => 'This class includes:
- mining of natural phosphates and natural potassium salts
- mining of native sulphur
- extraction and preparation of pyrites and pyrrhotite, except roasting
- mining of natural barium sulphate and carbonate (barytes and witherite), natural borates, natural magnesium sulphates (kieserite)
- mining of earth colours, fluorspar and other minerals valued chiefly as a source of chemicals

This class also includes:
- guano mining',
					'explanatory_note_exclusion' => 'This class excludes:
- extraction of salt, see 0893
- roasting of iron pyrites, see 2011
- manufacture of synthetic fertilizers and nitrogen compounds, see 2012',
				),
				77 => 
				array (
					'id' => 78,
					'sort_order' => 810,
					'code' => '0892',
					'description' => 'Extraction of peat',
					'explanatory_note_inclusion' => 'This class includes:
- peat digging
- peat agglomeration
- preparation of peat to improve quality or facilitate transport or storage',
					'explanatory_note_exclusion' => 'This class excludes:
- service activities incidental to peat mining, see 0990
- manufacture of articles of peat, see 2399',
				),
				78 => 
				array (
					'id' => 79,
					'sort_order' => 820,
					'code' => '0893',
					'description' => 'Extraction of salt',
					'explanatory_note_inclusion' => 'This class includes:
- extraction of salt from underground including by dissolving and pumping
- salt production by evaporation of sea water or other saline waters
- crushing, purification and refining of salt by the producer',
					'explanatory_note_exclusion' => 'This class excludes:
- processing of salt into food-grade salt, e.g. iodized salt, see 1079
- potable water production by evaporation of saline water, see 3600',
				),
				79 => 
				array (
					'id' => 80,
					'sort_order' => 830,
					'code' => '0899',
					'description' => 'Other mining and quarrying n.e.c.',
					'explanatory_note_inclusion' => 'This class includes:
- mining and quarrying of various minerals and materials:
* abrasive materials, asbestos, siliceous fossil meals, natural graphite, steatite (talc), feldspar etc.
* natural asphalt, asphaltites and asphaltic rock; natural solid bitumen
* gemstones, quartz, mica etc.',
					'explanatory_note_exclusion' => '',
				),
				80 => 
				array (
					'id' => 81,
					'sort_order' => 840,
					'code' => '09',
					'description' => 'Mining support service activities',
					'explanatory_note_inclusion' => 'This division includes specialized support services incidental to mining provided on a fee or contract basis. It includes exploration services through traditional prospecting methods such as taking core samples and making geological observations as well as drilling, test-drilling or redrilling for oil wells, metallic and non-metallic minerals. Other typical services cover building oil and gas well foundations, cementing oil and gas well casings, cleaning, bailing and swabbing oil and gas wells, ',
					'explanatory_note_exclusion' => '',
				),
				81 => 
				array (
					'id' => 82,
					'sort_order' => 850,
					'code' => '091',
					'description' => 'Support activities for petroleum and natural gas extraction',
					'explanatory_note_inclusion' => 'See class 0910.',
					'explanatory_note_exclusion' => '',
				),
				82 => 
				array (
					'id' => 83,
					'sort_order' => 860,
					'code' => '0910',
					'description' => 'Support activities for petroleum and natural gas extraction',
					'explanatory_note_inclusion' => 'This class includes:
- oil and gas extraction service activities provided on a fee or contract basis:
* exploration services in connection with petroleum or gas extraction, e.g. traditional prospecting methods, such as making geological observations at prospective sites
* directional drilling and redrilling; "spudding in"; derrick erection in situ, repairing and dismantling; cementing oil and gas well casings; pumping of wells; plugging and abandoning wells etc.
* liquefaction and regasifica',
					'explanatory_note_exclusion' => 'This class excludes:
- service activities performed by operators of oil or gas fields, see 0610, 0620
- specialized repair of mining machinery, see 3312
- liquefaction and regasification of natural gas for purpose of transport, done off the mine site, see 5221
- geophysical, geologic and seismic surveying, see 7110',
				),
				83 => 
				array (
					'id' => 84,
					'sort_order' => 870,
					'code' => '099',
					'description' => 'Support activities for other mining and quarrying',
					'explanatory_note_inclusion' => 'See class 0990.',
					'explanatory_note_exclusion' => '',
				),
				84 => 
				array (
					'id' => 85,
					'sort_order' => 880,
					'code' => '0990',
					'description' => 'Support activities for other mining and quarrying',
					'explanatory_note_inclusion' => 'This class includes:
- support services on a fee or contract basis, required for mining activities of divisions 05, 07 and 08
* exploration services, e.g. traditional prospecting methods, such as taking core samples and making geological observations at prospective sites
* draining and pumping services, on a fee or contract basis
* test drilling and test hole boring',
					'explanatory_note_exclusion' => 'This class excludes:
- operating mines or quarries on a contract or fee basis, see division 05, 07 or 08
- specialized repair of mining machinery, see 3312
- geophysical surveying services, on a contract or fee basis, see 7110',
				),
				85 => 
				array (
					'id' => 86,
					'sort_order' => 890,
					'code' => 'C',
					'description' => 'Manufacturing',
				'explanatory_note_inclusion' => 'This section includes the physical or chemical transformation of materials, substances, or components into new products, although this cannot be used as the single universal criterion for defining manufacturing (see remark on processing of waste below). The materials, substances, or components transformed are raw materials that are products of agriculture, forestry, fishing, mining or quarrying as well as products of other manufacturing activities. Substantial alteration, renovation or reconstru',
					'explanatory_note_exclusion' => '',
				),
				86 => 
				array (
					'id' => 87,
					'sort_order' => 900,
					'code' => '10',
					'description' => 'Manufacture of food products',
				'explanatory_note_inclusion' => 'This division includes the processing of the products of agriculture, forestry and fishing into food for humans or animals, and includes the production of various intermediate products that are not directly food products. The activity often generates associated products of greater or lesser value (for example, hides from slaughtering, or oilcake from oil production).
This division is organized by activities dealing with different kinds of products: meat, fish, fruit and vegetables, fats and oil',
					'explanatory_note_exclusion' => '',
				),
				87 => 
				array (
					'id' => 88,
					'sort_order' => 910,
					'code' => '101',
					'description' => 'Processing and preserving of meat',
					'explanatory_note_inclusion' => 'See class 1010.',
					'explanatory_note_exclusion' => '',
				),
				88 => 
				array (
					'id' => 89,
					'sort_order' => 920,
					'code' => '1010',
					'description' => 'Processing and preserving of meat',
					'explanatory_note_inclusion' => 'This class includes:
- operation of slaughterhouses engaged in killing, dressing or packing meat: beef, pork, poultry, lamb, rabbit, mutton, camel, etc.
- production of fresh, chilled or frozen meat, in carcasses
- production of fresh, chilled or frozen meat, in cuts
- production of fresh, chilled or frozen meat, in individual portions
- production of dried, salted or smoked meat
- production of meat products:
* sausages, salami, puddings, "andouillettes", saveloys, bolognas, pâtés, rille',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of prepared frozen meat and poultry dishes, see 1075
- manufacture of soup containing meat, see 1079
- wholesale trade of meat, see 4630
- packaging of meat, see 8292',
				),
				89 => 
				array (
					'id' => 90,
					'sort_order' => 930,
					'code' => '102',
					'description' => 'Processing and preserving of fish, crustaceans and molluscs',
					'explanatory_note_inclusion' => 'See class 1020.',
					'explanatory_note_exclusion' => '',
				),
				90 => 
				array (
					'id' => 91,
					'sort_order' => 940,
					'code' => '1020',
					'description' => 'Processing and preserving of fish, crustaceans and molluscs',
					'explanatory_note_inclusion' => 'This class includes:
- preparation and preservation of fish, crustaceans and molluscs: freezing, deep-freezing, drying, smoking, salting, immersing in brine, canning etc.
- production of fish, crustacean and mollusc products: cooked fish, fish fillets, roes, caviar, caviar substitutes etc.
- production of fishmeal for human consumption or animal feed
- production of meals and solubles from fish and other aquatic animals unfit for human consumption

This class also includes:
- activities o',
					'explanatory_note_exclusion' => 'This class excludes:
- processing of whales on land or specialized vessels, see 1010
- production of oils and fats from marine material, see 1040
- manufacture of prepared frozen fish dishes, see 1075
- manufacture of fish soups, see 1079',
				),
				91 => 
				array (
					'id' => 92,
					'sort_order' => 950,
					'code' => '103',
					'description' => 'Processing and preserving of fruit and vegetables',
					'explanatory_note_inclusion' => 'See class 1030.',
					'explanatory_note_exclusion' => '',
				),
				92 => 
				array (
					'id' => 93,
					'sort_order' => 960,
					'code' => '1030',
					'description' => 'Processing and preserving of fruit and vegetables',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of food consisting chiefly of fruit or vegetables, except ready-made dishes in frozen or canned form
- preserving of fruit, nuts or vegetables: freezing, drying, immersing in oil or in vinegar, canning etc.
- manufacture of fruit or vegetable food products
- manufacture of fruit or vegetable juices
- manufacture of jams, marmalades and table jellies
- processing and preserving of potatoes:
* manufacture of prepared frozen potatoes
* manufacture of dehyd',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of flour or meal of dried leguminous vegetables, see 1061
- preservation of fruit and nuts in sugar, see 1073
- manufacture of prepared vegetable dishes, see 1075
- manufacture of artificial concentrates, see 1079',
				),
				93 => 
				array (
					'id' => 94,
					'sort_order' => 970,
					'code' => '104',
					'description' => 'Manufacture of vegetable and animal oils and fats',
					'explanatory_note_inclusion' => 'See class 1040.',
					'explanatory_note_exclusion' => '',
				),
				94 => 
				array (
					'id' => 95,
					'sort_order' => 980,
					'code' => '1040',
					'description' => 'Manufacture of vegetable and animal oils and fats',
					'explanatory_note_inclusion' => 'This class includes the manufacture of crude and refined oils and fats from vegetable or animal materials, except rendering or refining of lard and other edible animal fats.

This class includes:
- manufacture of crude vegetable oils: olive oil, soya-bean oil, palm oil, sunflower-seed oil, cotton-seed oil, rape, colza or mustard oil, linseed oil etc.
- manufacture of non-defatted flour or meal of oilseeds, oil nuts or oil kernels
- manufacture of refined vegetable oils: olive oil, soya-bean',
					'explanatory_note_exclusion' => 'This class excludes:
- rendering and refining of lard and other edible animal fats, see 1010
- wet corn milling, see 1062
- production of essential oils, see 2029
- treatment of oil and fats by chemical processes, see 2029',
				),
				95 => 
				array (
					'id' => 96,
					'sort_order' => 990,
					'code' => '105',
					'description' => 'Manufacture of dairy products',
					'explanatory_note_inclusion' => 'See class 1050.',
					'explanatory_note_exclusion' => '',
				),
				96 => 
				array (
					'id' => 97,
					'sort_order' => 1000,
					'code' => '1050',
					'description' => 'Manufacture of dairy products',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of fresh liquid milk, pasteurized, sterilized, homogenized and/or ultra heat treated
- manufacture of milk-based drinks
- manufacture of cream from fresh liquid milk, pasteurized, sterilized, homogenized
- manufacture of dried or concentrated milk whether or not sweetened
- manufacture of milk or cream in solid form
- manufacture of butter
- manufacture of yoghurt
- manufacture of cheese and curd
- manufacture of whey
- manufacture of casein or lactos',
					'explanatory_note_exclusion' => 'This class excludes:
- production of raw milk (cattle), see 0141
- production of raw milk (camels, etc.), see 0143
- production of raw milk (sheep, goats, horses, asses, etc.), see 0144
- manufacture of non-dairy milk and cheese substitutes, see 1079
- activities of ice cream parlours, see 5610',
				),
				97 => 
				array (
					'id' => 98,
					'sort_order' => 1010,
					'code' => '106',
					'description' => 'Manufacture of grain mill products, starches and starch products',
					'explanatory_note_inclusion' => 'This group includes the milling of flour or meal from grains or vegetables, the milling, cleaning and polishing of rice, as well as the manufacture of flour mixes or doughs from these products. Also included in this group are the wet milling of corn and vegetables and the manufacture of starch and starch products.',
					'explanatory_note_exclusion' => '',
				),
				98 => 
				array (
					'id' => 99,
					'sort_order' => 1020,
					'code' => '1061',
					'description' => 'Manufacture of grain mill products',
					'explanatory_note_inclusion' => 'This class includes:
- grain milling: production of flour, groats, meal or pellets of wheat, rye, oats, maize (corn) or other cereal grains
- rice milling: production of husked, milled, polished, glazed, parboiled or converted rice; production of rice flour
- vegetable milling: production of flour or meal of dried leguminous vegetables, of roots or tubers, or of edible nuts
- manufacture of cereal breakfast foods
- manufacture of flour mixes and prepared blended flour and dough for bread, c',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of potato flour and meal, see 1030
- wet corn milling, see 1062',
				),
				99 => 
				array (
					'id' => 100,
					'sort_order' => 1030,
					'code' => '1062',
					'description' => 'Manufacture of starches and starch products',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of starches from rice, potatoes, maize etc.
- wet corn milling
- manufacture of glucose, glucose syrup, maltose, inulin etc.
- manufacture of gluten
- manufacture of tapioca and tapioca substitutes prepared from starch
- manufacture of corn oil',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of lactose (milk sugar), see 1050
- production of cane or beet sugar, see 1072',
				),
				100 => 
				array (
					'id' => 101,
					'sort_order' => 1040,
					'code' => '107',
					'description' => 'Manufacture of other food products',
					'explanatory_note_inclusion' => 'This group includes the production of a variety of food products not included in previous groups of this division. This includes the production of bakery products, sugar and confectionery, macaroni, noodles and similar products, prepared meals and dishes, coffee, tea and spices, as well as perishable and specialty food products.',
					'explanatory_note_exclusion' => '',
				),
				101 => 
				array (
					'id' => 102,
					'sort_order' => 1050,
					'code' => '1071',
					'description' => 'Manufacture of bakery products',
					'explanatory_note_inclusion' => 'This class includes the manufacture of fresh, frozen or dry bakery products.

This class includes:
- manufacture of bread and rolls
- manufacture of fresh pastry, cakes, pies, tarts etc.
- manufacture of rusks, biscuits and other "dry" bakery products
- manufacture of preserved pastry goods and cakes
- manufacture of snack products (cookies, crackers, pretzels etc.), whether sweet or salted
- manufacture of tortillas
- manufacture of frozen bakery products: pancakes, waffles, rolls etc.',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of farinaceous products (pastas), see 1074
- manufacture of potato snacks, see 1030
- heating up of bakery items for immediate consumption, see division 56',
				),
				102 => 
				array (
					'id' => 103,
					'sort_order' => 1060,
					'code' => '1072',
					'description' => 'Manufacture of sugar',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture or refining of sugar (sucrose) and sugar substitutes from the juice of cane, beet, maple and palm
- manufacture of sugar syrups
- manufacture of molasses
- production of maple syrup and sugar',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of glucose, glucose syrup, maltose, see 1062',
				),
				103 => 
				array (
					'id' => 104,
					'sort_order' => 1070,
					'code' => '1073',
					'description' => 'Manufacture of cocoa, chocolate and sugar confectionery',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of cocoa, cocoa butter, cocoa fat, cocoa oil
- manufacture of chocolate and chocolate confectionery
- manufacture of sugar confectionery: caramels, cachous, nougats, fondant, white chocolate
- manufacture of chewing gum
- preserving in sugar of fruit, nuts, fruit peels and other parts of plants
- manufacture of confectionery lozenges and pastilles',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of sucrose sugar, see 1072',
				),
				104 => 
				array (
					'id' => 105,
					'sort_order' => 1080,
					'code' => '1074',
					'description' => 'Manufacture of macaroni, noodles, couscous and similar farinaceous products',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of pastas such as macaroni and noodles, whether or not cooked or stuffed
- manufacture of couscous
- manufacture of canned or frozen pasta products',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of prepared couscous dishes, see 1075
- manufacture of soup containing pasta, see 1079',
				),
				105 => 
				array (
					'id' => 106,
					'sort_order' => 1090,
					'code' => '1075',
					'description' => 'Manufacture of prepared meals and dishes',
				'explanatory_note_inclusion' => 'This class includes the manufacture of ready-made (i.e. prepared, seasoned and cooked) meals and dishes. These dishes are processed to preserve them, such as in frozen or canned form, and are usually packaged and labeled for re-sale, i.e. this class does not include the preparation of meals for immediate consumption, such as in restaurants. To be considered a dish, these foods have to contain at least two distinct main ingredients (except seasonings etc.).

This class includes:
- manufacture ',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of fresh foods or foods with only one main ingredient, see division 10
- preparation of meals and dishes for immediate consumption, see division 56
- activities of food service contractors, see 5629',
				),
				106 => 
				array (
					'id' => 107,
					'sort_order' => 1100,
					'code' => '1079',
					'description' => 'Manufacture of other food products n.e.c.',
					'explanatory_note_inclusion' => 'This class includes:
- decaffeinating and roasting of coffee
- production of coffee products:
* ground coffee
* soluble coffee
* extracts and concentrates of coffee
- manufacture of coffee substitutes
- blending of tea and maté
- manufacture of extracts and preparations based on tea or maté
- manufacture of soups and broths
- manufacture of special foods, such as:
* infant formula
* follow up milks and other follow up foods
* baby foods
* foods containing homogenized ingredients
-',
					'explanatory_note_exclusion' => 'This class excludes:
- growing of spice crops, see 0128
- manufacture of inulin, see 1062
- manufacture of perishable prepared foods of fruit and vegetables (e.g. salads, peeled vegetables, bean curd), see 1030
- manufacture of frozen pizza, see 1075
- manufacture of spirits, beer, wine and soft drinks, see division 11
- preparation of botanical products for pharmaceutical use, see 2100',
				),
				107 => 
				array (
					'id' => 108,
					'sort_order' => 1110,
					'code' => '108',
					'description' => 'Manufacture of prepared animal feeds',
					'explanatory_note_inclusion' => 'See class 1080.',
					'explanatory_note_exclusion' => '',
				),
				108 => 
				array (
					'id' => 109,
					'sort_order' => 1120,
					'code' => '1080',
					'description' => 'Manufacture of prepared animal feeds',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of prepared feeds for pets, including dogs, cats, birds, fish etc.
- manufacture of prepared feeds for farm animals, including animal feed concentrates and feed supplements
- preparation of unmixed (single) feeds for farm animals

This class also includes:
- treatment of slaughter waste to produce animal feeds',
					'explanatory_note_exclusion' => 'This class excludes:
- production of fishmeal for animal feed, see 1020
- production of oilseed cake, see 1040
- activities resulting in by-products usable as animal feed without special treatment, e.g. oilseeds (see 1040), grain milling residues (see 1061) etc.',
				),
				109 => 
				array (
					'id' => 110,
					'sort_order' => 1130,
					'code' => '11',
					'description' => 'Manufacture of beverages',
					'explanatory_note_inclusion' => 'This division includes the manufacture of beverages, such as nonalcoholic beverages and mineral water, manufacture of alcoholic beverages mainly through fermentation, beer and wine, and the manufacture of distilled alcoholic beverages.

This division excludes the production of fruit and vegetable juices (see class 1030), the manufacture of milk-based drinks (see class 1050) and the manufacture of coffee, tea and maté products (see class 1079).',
					'explanatory_note_exclusion' => '',
				),
				110 => 
				array (
					'id' => 111,
					'sort_order' => 1140,
					'code' => '110',
					'description' => 'Manufacture of beverages',
					'explanatory_note_inclusion' => 'See division 11.',
					'explanatory_note_exclusion' => '',
				),
				111 => 
				array (
					'id' => 112,
					'sort_order' => 1150,
					'code' => '1101',
					'description' => 'Distilling, rectifying and blending of spirits',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of distilled, potable, alcoholic beverages: whisky, brandy, gin, liqueurs, "mixed drinks" etc.
- blending of distilled spirits
- production of neutral spirits',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of ethyl alcohol, see 2011
- manufacture of non-distilled alcoholic beverages, see 1102, 1103
- merely bottling and labeling, see 4630 (if performed as part of wholesale) and 8292 (if performed on a fee or contract basis)',
				),
				112 => 
				array (
					'id' => 113,
					'sort_order' => 1160,
					'code' => '1102',
					'description' => 'Manufacture of wines',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of wine
- manufacture of sparkling wine
- manufacture of wine from concentrated grape must
- manufacture of fermented but not distilled alcoholic beverages: sake, cider, perry, mead, other fruit wines and mixed beverages containing alcohol
- manufacture of vermouth and the like

This class also includes:
- blending of wine
- manufacture of low or non-alcoholic wine',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of vinegar, see 1079
- merely bottling and labeling, see 4630 (if performed as part of wholesale) and 8292 (if performed on a fee or contract basis)',
				),
				113 => 
				array (
					'id' => 114,
					'sort_order' => 1170,
					'code' => '1103',
					'description' => 'Manufacture of malt liquors and malt',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of malt liquors, such as beer, ale, porter and stout
- manufacture of malt

This class also includes:
- manufacture of low alcohol or non-alcoholic beer',
					'explanatory_note_exclusion' => '',
				),
				114 => 
				array (
					'id' => 115,
					'sort_order' => 1180,
					'code' => '1104',
					'description' => 'Manufacture of soft drinks; production of mineral waters and other bottled waters',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of non-alcoholic beverages, except non-alcoholic beer and wine
- production of natural mineral waters and other bottled waters
- manufacture of soft drinks:
* non-alcoholic flavoured and/or sweetened waters: lemonade, orangeade, cola, fruit drinks, tonic waters etc.',
					'explanatory_note_exclusion' => 'This class excludes:
- production of fruit and vegetable juice, see 1030
- manufacture of milk-based drinks, see 1050
- manufacture of coffee, tea and maté products, see 1079
- manufacture of alcohol-based drinks, see 1101, 1102, 1103
- manufacture of non-alcoholic wine, see 1102
- manufacture of non-alcoholic beer, see 1103
- merely bottling and labeling, see 4630 (if performed as part of wholesale) and 8292 (if performed on a fee or contract basis)',
				),
				115 => 
				array (
					'id' => 116,
					'sort_order' => 1190,
					'code' => '12',
					'description' => 'Manufacture of tobacco products',
					'explanatory_note_inclusion' => 'This division includes the processing of an agricultural product, tobacco, into a form suitable for final consumption.',
					'explanatory_note_exclusion' => '',
				),
				116 => 
				array (
					'id' => 117,
					'sort_order' => 1200,
					'code' => '120',
					'description' => 'Manufacture of tobacco products',
					'explanatory_note_inclusion' => 'See class 1200.',
					'explanatory_note_exclusion' => '',
				),
				117 => 
				array (
					'id' => 118,
					'sort_order' => 1210,
					'code' => '1200',
					'description' => 'Manufacture of tobacco products',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of tobacco products and products of tobacco substitutes: cigarettes, cigarette tobacco, cigars, pipe tobacco, chewing tobacco, snuff
- manufacture of "homogenized" or "reconstituted" tobacco

This class also includes:
- stemming and redrying of tobacco',
					'explanatory_note_exclusion' => 'This class excludes:
- growing or preliminary processing of tobacco, see 0115, 0163',
				),
				118 => 
				array (
					'id' => 119,
					'sort_order' => 1220,
					'code' => '13',
					'description' => 'Manufacture of textiles',
				'explanatory_note_inclusion' => 'This division includes preparation and spinning of textile fibres as well as textile weaving, finishing of textiles and wearing apparel, manufacture of made-up textile articles, except apparel (e.g. household linen, blankets, rugs, cordage etc.). Growing of natural fibres is covered under division 01, while manufacture of synthetic fibres is a chemical process classified in class 2030. Manufacture of wearing apparel is covered in division 14.',
					'explanatory_note_exclusion' => '',
				),
				119 => 
				array (
					'id' => 120,
					'sort_order' => 1230,
					'code' => '131',
					'description' => 'Spinning, weaving and finishing of textiles',
					'explanatory_note_inclusion' => 'This group includes the manufacture of textiles, including preparatory operations, the spinning of textile fibres and the weaving of textiles. This can be done from varying raw materials, such as silk, wool, other animal, vegetable or man-made fibres, paper or glass etc.
Also included in this group is the finishing of textiles and wearing apparel, i.e. bleaching, dyeing, dressing and similar activities.',
					'explanatory_note_exclusion' => '',
				),
				120 => 
				array (
					'id' => 121,
					'sort_order' => 1240,
					'code' => '1311',
					'description' => 'Preparation and spinning of textile fibres',
					'explanatory_note_inclusion' => 'This class includes:
- preparatory operations on textile fibres:
* reeling and washing of silk
* degreasing and carbonizing of wool and dyeing of wool fleece
* carding and combing of all kinds of animal, vegetable and man-made fibres
- spinning and manufacture of yarn or thread for weaving or sewing, for the trade or for further processing:
* texturizing, twisting, folding, cabling and dipping of synthetic or artificial filament yarns

This class also includes:
- manufacture of paper ya',
					'explanatory_note_exclusion' => 'This class excludes:
- preparatory operations carried out in combination with agriculture or farming, see division 01
- retting of plants bearing vegetable textile fibres (jute, flax, coir etc.), see 0116
- cotton ginning, see 0163
- manufacture of synthetic or artificial fibres and tows, manufacture of single yarns (including high-tenacity yarn and yarn for carpets) of synthetic or artificial fibres, see 2030
- manufacture of glass fibres, see 2310',
				),
				121 => 
				array (
					'id' => 122,
					'sort_order' => 1250,
					'code' => '1312',
					'description' => 'Weaving of textiles',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of broad woven cotton-type, woollen-type, worsted-type or silk-type fabrics, including from mixtures or artificial or synthetic yarns
- manufacture of other broad woven fabrics, using flax, ramie, hemp, jute, bast fibres and special yarns

This class also includes:
- manufacture of woven pile or chenille fabrics, terry towelling, gauze etc.
- manufacture of woven fabrics of glass fibres
- manufacture of woven fabrics of carbon and aramid threads
- manuf',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of knitted and crocheted fabrics, see 1391
- manufacture of textile floor coverings, see 1393
- manufacture of non-woven fabrics and felts, see 1399
- manufacture of narrow fabrics, see 1399',
				),
				122 => 
				array (
					'id' => 123,
					'sort_order' => 1260,
					'code' => '1313',
					'description' => 'Finishing of textiles',
					'explanatory_note_inclusion' => 'This class includes:
- bleaching and dyeing of textile fibres, yarns, fabrics and textile articles, including wearing apparel
- dressing, drying, steaming, shrinking, mending, Sanforizing, mercerizing of textiles and textile articles, including wearing apparel

This class also includes:
- bleaching of jeans
- pleating and similar work on textiles
- waterproofing, coating, rubberizing or impregnating of garments',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of textile fabric impregnated, coated, covered or laminated with rubber, where rubber is the chief constituent, see 2219',
				),
				123 => 
				array (
					'id' => 124,
					'sort_order' => 1270,
					'code' => '139',
					'description' => 'Manufacture of other textiles',
					'explanatory_note_inclusion' => 'This group includes the manufacture of products produced from textiles, except wearing apparel, such as made-up textile articles, carpets and rugs, rope, narrow woven fabrics, trimmings etc.',
					'explanatory_note_exclusion' => '',
				),
				124 => 
				array (
					'id' => 125,
					'sort_order' => 1280,
					'code' => '1391',
					'description' => 'Manufacture of knitted and crocheted fabrics',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture and processing of knitted or crocheted fabrics:
* pile and terry fabrics
* net and window furnishing type fabrics knitted on Raschel or similar machines
* other knitted or crocheted fabrics

This class also includes:
- manufacture of imitation fur by knitting',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of net and window furnishing type fabrics of lace knitted on Raschel or similar machines, see 1399
- manufacture of knitted and crocheted apparel, see 1430',
				),
				125 => 
				array (
					'id' => 126,
					'sort_order' => 1290,
					'code' => '1392',
					'description' => 'Manufacture of made-up textile articles, except apparel',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture, of made-up articles of any textile material, including of knitted or crocheted fabrics:
* blankets, including travelling rugs
* bed, table, toilet or kitchen linen
* quilts, eiderdowns, cushions, pouffes, pillows, sleeping bags etc.
- manufacture of made-up furnishing articles:
* curtains, valances, blinds, bedspreads, furniture or machine covers etc.
* tarpaulins, tents, camping goods, sails, sunblinds, loose covers for cars, machines or furniture etc.',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of textile articles for technical use, see 1399',
				),
				126 => 
				array (
					'id' => 127,
					'sort_order' => 1300,
					'code' => '1393',
					'description' => 'Manufacture of carpets and rugs',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of textile floor coverings:
* carpets, rugs and mats, tiles

This class also includes:
- manufacture of needle-loom felt floor coverings',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of mats and matting of plaiting materials, see 1629
- manufacture of floor coverings of cork, see 1629
- manufacture of resilient floor coverings, such as vinyl, linoleum, see 2220',
				),
				127 => 
				array (
					'id' => 128,
					'sort_order' => 1310,
					'code' => '1394',
					'description' => 'Manufacture of cordage, rope, twine and netting',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of twine, cordage, rope and cables of textile fibres or strip or the like, whether or not impregnated, coated, covered or sheathed with rubber or plastics
- manufacture of knotted netting of twine, cordage or rope
- manufacture of products of rope or netting: fishing nets, ships\' fenders, unloading cushions, loading slings, rope or cable fitted with metal rings etc.',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of hairnets, see 1410
- manufacture of wire rope, see 2599',
				),
				128 => 
				array (
					'id' => 129,
					'sort_order' => 1320,
					'code' => '1399',
					'description' => 'Manufacture of other textiles n.e.c.',
					'explanatory_note_inclusion' => 'This class includes all activities related to the manufacture of textiles or textile products, not specified elsewhere in division 13 or 14, involving a large number of processes and a great variety of goods produced.

This class includes:
- manufacture of narrow woven fabrics, including fabrics consisting of warp without weft assembled by means of an adhesive
- manufacture of labels, badges etc.
- manufacture of ornamental trimmings: braids, tassels, pompons etc.
- manufacture of felt
- ',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of needle-loom felt floor coverings, see 1393
- manufacture of textile wadding and articles of wadding: sanitary towels, tampons etc., see 1709
- manufacture of transmission or conveyor belts of textile fabric, yarn or cord impregnated, coated, covered or laminated with rubber, where rubber is the chief constituent, see 2219
- manufacture of plates or sheets of cellular rubber or plastic combined with textiles for reinforcing purposes only, see 2219, 2220
',
				),
				129 => 
				array (
					'id' => 130,
					'sort_order' => 1330,
					'code' => '14',
					'description' => 'Manufacture of wearing apparel',
				'explanatory_note_inclusion' => 'This division includes all tailoring (ready-to-wear or made-to-measure), in all materials (e.g. leather, fabric, knitted and crocheted fabrics etc.), of all items of clothing (e.g. outerwear, underwear for men, women or children; work, city or casual clothing etc.) and accessories. There is no distinction made between clothing for adults and clothing for children, or between modern and traditional clothing. Division 14 also includes the fur industry (fur skins and wearing apparel).',
					'explanatory_note_exclusion' => '',
				),
				130 => 
				array (
					'id' => 131,
					'sort_order' => 1340,
					'code' => '141',
					'description' => 'Manufacture of wearing apparel, except fur apparel',
					'explanatory_note_inclusion' => 'See class 1410.',
					'explanatory_note_exclusion' => '',
				),
				131 => 
				array (
					'id' => 132,
					'sort_order' => 1350,
					'code' => '1410',
					'description' => 'Manufacture of wearing apparel, except fur apparel',
				'explanatory_note_inclusion' => 'This class includes the manufacture of wearing apparel. The material used may be of any kind (see below for exceptions) and may be coated, impregnated or rubberized.

This class includes:
- manufacture of wearing apparel made of leather or composition leather, including leather industrial work accessories such as welder\'s leather aprons
- manufacture of work wear
- manufacture of other outerwear made of woven, knitted or crocheted fabric, non-wovens etc. for men, women and children:
* coat',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of wearing apparel of fur skins (except headgear), see 1420
- manufacture of footwear, see 1520
- manufacture of wearing apparel of rubber or plastics not assembled by stitching but merely sealed together, see 2219, 2220
- manufacture of leather sports gloves and sports headgear, see 3230
- manufacture of safety headgear (except sports headgear), see 3290
- manufacture of fire-resistant and protective safety clothing, see 3290
- repair of wearing apparel',
				),
				132 => 
				array (
					'id' => 133,
					'sort_order' => 1360,
					'code' => '142',
					'description' => 'Manufacture of articles of fur',
					'explanatory_note_inclusion' => 'See class 1420.',
					'explanatory_note_exclusion' => '',
				),
				133 => 
				array (
					'id' => 134,
					'sort_order' => 1370,
					'code' => '1420',
					'description' => 'Manufacture of articles of fur',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of articles made of fur skins:
* fur wearing apparel and clothing accessories
* assemblies of fur skins such as "dropped" fur skins, plates, mats, strips etc.
* diverse articles of fur skins: rugs, unstuffed pouffes, industrial polishing cloths',
					'explanatory_note_exclusion' => 'This class excludes:
- production of raw fur skins, see groups 014 and 017
- production of raw hides and skins, see 1010
- manufacture of imitation furs (long-hair cloth obtained by weaving or knitting), see 1312, 1391
- manufacture of fur hats, see 1410
- manufacture of apparel trimmed with fur, see 1410
- dressing and dyeing of fur, see 1511
- manufacture of boots or shoes containing fur parts, see 1520',
				),
				134 => 
				array (
					'id' => 135,
					'sort_order' => 1380,
					'code' => '143',
					'description' => 'Manufacture of knitted and crocheted apparel',
					'explanatory_note_inclusion' => 'See class 1430.',
					'explanatory_note_exclusion' => '',
				),
				135 => 
				array (
					'id' => 136,
					'sort_order' => 1390,
					'code' => '1430',
					'description' => 'Manufacture of knitted and crocheted apparel',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of knitted or crocheted wearing apparel and other made-up articles directly into shape: pullovers, cardigans, jerseys, waistcoats and similar articles
- manufacture of hosiery, including socks, tights and pantyhose',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of knitted and crocheted fabrics, see 1391',
				),
				136 => 
				array (
					'id' => 137,
					'sort_order' => 1400,
					'code' => '15',
					'description' => 'Manufacture of leather and related products',
				'explanatory_note_inclusion' => 'This division includes dressing and dyeing of fur and the transformation of hides into leather by tanning or curing and fabricating the leather into products for final consumption. It also includes the manufacture of similar products from other materials (imitation leathers or leather substitutes), such as rubber footwear, textile luggage etc. The products made from leather substitutes are included here, since they are made in ways similar to those in which leather products are made (e.g. luggag',
					'explanatory_note_exclusion' => '',
				),
				137 => 
				array (
					'id' => 138,
					'sort_order' => 1410,
					'code' => '151',
					'description' => 'Tanning and dressing of leather; manufacture of luggage, handbags, saddlery and harness; dressing and dyeing of fur',
					'explanatory_note_inclusion' => 'This group includes the manufacture of leather and fur and products thereof.',
					'explanatory_note_exclusion' => '',
				),
				138 => 
				array (
					'id' => 139,
					'sort_order' => 1420,
					'code' => '1511',
					'description' => 'Tanning and dressing of leather; dressing and dyeing of fur',
					'explanatory_note_inclusion' => 'This class includes:
- tanning, dyeing and dressing of hides and skins
- manufacture of chamois dressed, parchment dressed, patent or metallized leathers
- manufacture of composition leather
- scraping, shearing, plucking, currying, tanning, bleaching and dyeing of fur skins and hides with the hair on',
					'explanatory_note_exclusion' => 'This class excludes:
- production of hides and skins as part of ranching, see group 014
- production of hides and skins as part of slaughtering, see 1010
- manufacture of leather apparel, see 1410
- manufacture of imitation leather not based on natural leather, see 2219, 2220',
				),
				139 => 
				array (
					'id' => 140,
					'sort_order' => 1430,
					'code' => '1512',
					'description' => 'Manufacture of luggage, handbags and the like, saddlery and harness',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of luggage, handbags and the like, of leather, composition leather or any other material, such as plastic sheeting, textile materials, vulcanized fibre or paperboard, where the same technology is used as for leather
- manufacture of saddlery and harness
- manufacture of non-metallic watch bands (e.g. fabric, leather, plastic)
- manufacture of diverse articles of leather or composition leather: driving belts, packings etc.
- manufacture of shoe-lace, of lea',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of leather wearing apparel, see 1410
- manufacture of leather gloves and hats, see 1410
- manufacture of footwear, see 1520
- manufacture of saddles for bicycles, see 3092
- manufacture of precious metal watch bands, see 3211
- manufacture of non-precious metal watch bands, see 3212
- manufacture of linemen\'s safety belts and other belts for occupational use, see 3290',
				),
				140 => 
				array (
					'id' => 141,
					'sort_order' => 1440,
					'code' => '152',
					'description' => 'Manufacture of footwear',
					'explanatory_note_inclusion' => 'See class 1520.',
					'explanatory_note_exclusion' => '',
				),
				141 => 
				array (
					'id' => 142,
					'sort_order' => 1450,
					'code' => '1520',
					'description' => 'Manufacture of footwear',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of footwear for all purposes, of any material, by any process, including moulding (see below for exceptions)
- manufacture of leather parts of footwear: manufacture of uppers and parts of uppers, outer and inner soles, heels etc.
- manufacture of gaiters, leggings and similar articles',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of footwear of textile material without applied soles, see 1410
- manufacture of wooden shoe parts (e.g. heels and lasts), see 1629
- manufacture of rubber boot and shoe heels and soles and other rubber footwear parts, see 2219
- manufacture of plastic footwear parts, see 2220
- manufacture of ski-boots, see 3230
- manufacture of orthopedic shoes, see 3250',
				),
				142 => 
				array (
					'id' => 143,
					'sort_order' => 1460,
					'code' => '16',
					'description' => 'Manufacture of wood and of products of wood and cork, except furniture; manufacture of articles of straw and plaiting materials',
					'explanatory_note_inclusion' => 'This division includes the manufacture of wood products, such as lumber, plywood, veneers, wood containers, wood flooring, wood trusses, and prefabricated wood buildings. The production processes include sawing, planing, shaping, laminating, and assembling of wood products starting from logs that are cut into bolts, or lumber that may then be cut further, or shaped by lathes or other shaping tools. The lumber or other transformed wood shapes may also be subsequently planed or smoothed, and assem',
					'explanatory_note_exclusion' => '',
				),
				143 => 
				array (
					'id' => 144,
					'sort_order' => 1470,
					'code' => '161',
					'description' => 'Sawmilling and planing of wood',
					'explanatory_note_inclusion' => 'See class 1610.',
					'explanatory_note_exclusion' => '',
				),
				144 => 
				array (
					'id' => 145,
					'sort_order' => 1480,
					'code' => '1610',
					'description' => 'Sawmilling and planing of wood',
					'explanatory_note_inclusion' => 'This class includes:
- sawing, planing and machining of wood
- slicing, peeling or chipping logs
- manufacture of wooden railway sleepers
- manufacture of unassembled wooden flooring
- manufacture of wood wool, wood flour, chips, particles

This class also includes:
- drying of wood
- impregnation or chemical treatment of wood with preservatives or other materials',
					'explanatory_note_exclusion' => 'This class excludes:
- logging and production of wood in the rough, see 0220
- manufacture of veneer sheets thin enough for use in plywood, boards and panels, see 1621
- manufacture of shingles and shakes, beadings and mouldings, see 1622',
				),
				145 => 
				array (
					'id' => 146,
					'sort_order' => 1490,
					'code' => '162',
					'description' => 'Manufacture of products of wood, cork, straw and plaiting materials',
					'explanatory_note_inclusion' => 'This group includes the manufacture of products of wood, cork, straw or plaiting materials, including basic shapes as well as assembled products.',
					'explanatory_note_exclusion' => '',
				),
				146 => 
				array (
					'id' => 147,
					'sort_order' => 1500,
					'code' => '1621',
					'description' => 'Manufacture of veneer sheets and wood-based panels',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of veneer sheets thin enough to be used for veneering, making plywood or other purposes:
* smoothed, dyed, coated, impregnated, reinforced (with paper or fabric backing)
* made in the form of motifs
- manufacture of plywood, veneer panels and similar laminated wood boards and sheets
- manufacture of particle board and fibreboard
- manufacture of densified wood
- manufacture of glue laminated wood, laminated veneer wood',
					'explanatory_note_exclusion' => '',
				),
				147 => 
				array (
					'id' => 148,
					'sort_order' => 1510,
					'code' => '1622',
					'description' => 'Manufacture of builders\' carpentry and joinery',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of wooden goods intended to be used primarily in the construction industry:
* beams, rafters, roof struts
* glue-laminated or metal connected prefabricated wooden roof trusses
* doors, windows, shutters and their frames, whether or not containing metal fittings, such as hinges, locks etc.
* stairs, railings
* wooden beadings and mouldings, shingles and shakes
* parquet floor blocks, strips etc., assembled into panels
- manufacture of prefabricated build',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of unassembled wooden flooring, see 1610
- manufacture of kitchen cabinets, bookcases, wardrobes etc., see 3100
- manufacture of wood partitions, free standing, see 3100',
				),
				148 => 
				array (
					'id' => 149,
					'sort_order' => 1520,
					'code' => '1623',
					'description' => 'Manufacture of wooden containers',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of packing cases, boxes, crates, drums and similar packings of wood
- manufacture of pallets, box pallets and other load boards of wood
- manufacture of barrels, vats, tubs and other coopers\' products of wood
- manufacture of wooden cable-drums',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of luggage, see 1512
- manufacture of cases of plaiting material, see 1629',
				),
				149 => 
				array (
					'id' => 150,
					'sort_order' => 1530,
					'code' => '1629',
					'description' => 'Manufacture of other products of wood; manufacture of articles of cork, straw and plaiting materials',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of various wood products:
* wooden handles and bodies for tools, brooms, brushes
* wooden boot or shoe parts (e.g. heels)
* wooden boot or shoe lasts and trees
* wooden clothes hangers
* wooden mirror and picture frames
* wooden frames for artists\' canvases
* household utensils and kitchenware of wood
* wooden statuettes and ornaments, wood marquetry, inlaid wood
* wooden cases for jewellery, cutlery and similar articles
* wooden spools, cops, bobbin',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of mats or matting of textile materials, see 1392
- manufacture of luggage, see 1512
- manufacture of wooden footwear, see 1520
- manufacture of matches, see 2029
- manufacture of clock cases, see 2652
- manufacture of wooden spools and bobbins that are part of textile machinery, see 2826
- manufacture of furniture, see 3100
- manufacture of wooden toys, see 3240
- manufacture of cork life preservers, see 3290
- manufacture of brushes and brooms, see ',
				),
				150 => 
				array (
					'id' => 151,
					'sort_order' => 1540,
					'code' => '17',
					'description' => 'Manufacture of paper and paper products',
					'explanatory_note_inclusion' => 'This division includes the manufacture of pulp, paper and converted paper products. The manufacture of these products is grouped together because they constitute a series of vertically connected processes. More than one activity is often carried out in a single unit. There are essentially three activities: The manufacture of pulp involves separating the cellulose fibers from other impurities in wood or used paper. The manufacture of paper involves matting these fibers into a sheet. Converted pap',
					'explanatory_note_exclusion' => '',
				),
				151 => 
				array (
					'id' => 152,
					'sort_order' => 1550,
					'code' => '170',
					'description' => 'Manufacture of paper and paper products',
					'explanatory_note_inclusion' => 'See division 17.',
					'explanatory_note_exclusion' => '',
				),
				152 => 
				array (
					'id' => 153,
					'sort_order' => 1560,
					'code' => '1701',
					'description' => 'Manufacture of pulp, paper and paperboard',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of bleached, semi-bleached or unbleached paper pulp by mechanical, chemical (dissolving or non-dissolving) or semi-chemical processes
- manufacture of cotton-linters pulp
- removal of ink and manufacture of pulp from waste paper
- manufacture of paper and paperboard intended for further industrial processing

This class also includes:
- further processing of paper and paperboard:
* coating, covering and impregnating of paper and paperboard
* manufactur',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of corrugated paper and paperboard, see 1702
- manufacture of further-processed articles of paper, paperboard or pulp, see 1709
- manufacture of coated or impregnated paper, where the coating or impregnant is the main ingredient, see class in which the manufacture of the coating or impregnant is classified
- manufacture of abrasive paper, see 2399',
				),
				153 => 
				array (
					'id' => 154,
					'sort_order' => 1570,
					'code' => '1702',
					'description' => 'Manufacture of corrugated paper and paperboard and of containers of paper and paperboard',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of corrugated paper and paperboard
- manufacture of containers of corrugated paper or paperboard
- manufacture of folding paperboard containers
- manufacture of containers of solid board
- manufacture of other containers of paper and paperboard
- manufacture of sacks and bags of paper
- manufacture of office box files and similar articles',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of envelopes, see 1709
- manufacture of moulded or pressed articles of paper pulp (e.g. boxes for packing eggs, moulded pulp paper plates), see 1709',
				),
				154 => 
				array (
					'id' => 155,
					'sort_order' => 1580,
					'code' => '1709',
					'description' => 'Manufacture of other articles of paper and paperboard',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of household and personal hygiene paper and cellulose wadding products:
* cleansing tissues
* handkerchiefs, towels, serviettes
* toilet paper
* sanitary towels and tampons, napkins and napkin liners for babies
* cups, dishes and trays
- manufacture of textile wadding and articles of wadding: sanitary towels, tampons etc.
- manufacture of printing and writing paper ready for use
- manufacture of computer printout paper ready for use
- manufacture of s',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of paper or paperboard in bulk, see 1701
- printing on paper products, see 1811
- manufacture of playing cards, see 3240
- manufacture of games and toys of paper or paperboard, see 3240',
				),
				155 => 
				array (
					'id' => 156,
					'sort_order' => 1590,
					'code' => '18',
					'description' => 'Printing and reproduction of recorded media',
				'explanatory_note_inclusion' => 'This division includes printing of products, such as newspapers, books, periodicals, business forms, greeting cards, and other materials, and associated support activities, such as bookbinding, plate-making services, and data imaging. The support activities included here are an integral part of the printing industry, and a product (a printing plate, a bound book, or a computer disk or file) that is an integral part of the printing industry is almost always provided by these operations.
Processe',
					'explanatory_note_exclusion' => '',
				),
				156 => 
				array (
					'id' => 157,
					'sort_order' => 1600,
					'code' => '181',
					'description' => 'Printing and service activities related to printing',
					'explanatory_note_inclusion' => 'This group includes printing of products, such as newspapers, books, periodicals, business forms, greeting cards, and other materials, and associated support activities, such as bookbinding, plate-making services, and data imaging. Printing can be done using various techniques and on different materials.',
					'explanatory_note_exclusion' => '',
				),
				157 => 
				array (
					'id' => 158,
					'sort_order' => 1610,
					'code' => '1811',
					'description' => 'Printing',
					'explanatory_note_inclusion' => 'This class includes:
- printing of newspapers, magazines and other periodicals, books and brochures, music and music manuscripts, maps, atlases, posters, advertising catalogues, prospectuses and other printed advertising, postage stamps, taxation stamps, documents of title, cheques and other security papers, diaries, calendars, business forms and other commercial printed matter, personal stationery and other printed matter by letterpress, offset, photogravure, flexographic and other printing pr',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of paper articles, such as binders, see 1709
- publishing of printed matter, see group 581
- photocopying of documents, see 8219',
				),
				158 => 
				array (
					'id' => 159,
					'sort_order' => 1620,
					'code' => '1812',
					'description' => 'Service activities related to printing',
					'explanatory_note_inclusion' => 'This class includes:
- binding of printed sheets, e.g. into books, brochures, magazines, catalogues etc., by folding, assembling, stitching, glueing, collating, basting, adhesive binding, trimming, gold stamping
- composition, typesetting, phototypesetting, pre-press data input including scanning and optical character recognition, electronic make-up
- plate-making services including imagesetting and plate-setting (for the printing processes letterpress and offset)
- engraving or etching of c',
					'explanatory_note_exclusion' => '',
				),
				159 => 
				array (
					'id' => 160,
					'sort_order' => 1630,
					'code' => '182',
					'description' => 'Reproduction of recorded media',
					'explanatory_note_inclusion' => 'See class 1820.',
					'explanatory_note_exclusion' => '',
				),
				160 => 
				array (
					'id' => 161,
					'sort_order' => 1640,
					'code' => '1820',
					'description' => 'Reproduction of recorded media',
					'explanatory_note_inclusion' => 'This class includes:
- reproduction from master copies of gramophone records, compact discs and tapes with music or other sound recordings
- reproduction from master copies of records, compact discs and tapes with motion pictures and other video recordings
- reproduction from master copies of software and data on discs and tapes',
					'explanatory_note_exclusion' => 'This class excludes:
- reproduction of printed matter, see 1811
- publishing of software, see 5820
- production and distribution of motion pictures, video tapes and movies on DVD or similar media, see 5911, 5912, 5913
- reproduction of motion picture film for theatrical distribution, see 5912
- production of master copies for records or audio material, see 5920',
				),
				161 => 
				array (
					'id' => 162,
					'sort_order' => 1650,
					'code' => '19',
					'description' => 'Manufacture of coke and refined petroleum products',
				'explanatory_note_inclusion' => 'This division includes the transformation of crude petroleum and coal into usable products. The dominant process is petroleum refining, which involves the separation of crude petroleum into component products through such techniques as cracking and distillation. This division also includes the manufacture for own account of characteristic products (e.g. coke, butane, propane, petrol, kerosene, fuel oil etc.) as well as processing services (e.g. custom refining).
This division includes the manuf',
					'explanatory_note_exclusion' => '',
				),
				162 => 
				array (
					'id' => 163,
					'sort_order' => 1660,
					'code' => '191',
					'description' => 'Manufacture of coke oven products',
					'explanatory_note_inclusion' => 'See class 1910.',
					'explanatory_note_exclusion' => '',
				),
				163 => 
				array (
					'id' => 164,
					'sort_order' => 1670,
					'code' => '1910',
					'description' => 'Manufacture of coke oven products',
					'explanatory_note_inclusion' => 'This class includes:
- operation of coke ovens
- production of coke and semi-coke
- production of pitch and pitch coke
- production of coke oven gas
- production of crude coal and lignite tars
- agglomeration of coke',
					'explanatory_note_exclusion' => '',
				),
				164 => 
				array (
					'id' => 165,
					'sort_order' => 1680,
					'code' => '192',
					'description' => 'Manufacture of refined petroleum products',
					'explanatory_note_inclusion' => 'See class 1920.',
					'explanatory_note_exclusion' => '',
				),
				165 => 
				array (
					'id' => 166,
					'sort_order' => 1690,
					'code' => '1920',
					'description' => 'Manufacture of refined petroleum products',
					'explanatory_note_inclusion' => 'This class includes the manufacture of liquid or gaseous fuels or other products from crude petroleum, bituminous minerals or their fractionation products. Petroleum refining involves one or more of the following activities: fractionation, straight distillation of crude oil, and cracking.

This class includes:
- production of motor fuel: gasoline, kerosene etc.
- production of fuel: light, medium and heavy fuel oil, refinery gases such as ethane, propane, butane etc.
- manufacture of oil-ba',
					'explanatory_note_exclusion' => '',
				),
				166 => 
				array (
					'id' => 167,
					'sort_order' => 1700,
					'code' => '20',
					'description' => 'Manufacture of chemicals and chemical products',
					'explanatory_note_inclusion' => 'This division includes the transformation of organic and inorganic raw materials by a chemical process and the formation of products. It distinguishes the production of basic chemicals that constitute the first industry group from the production of intermediate and end products produced by further processing of basic chemicals that make up the remaining industry classes.',
					'explanatory_note_exclusion' => '',
				),
				167 => 
				array (
					'id' => 168,
					'sort_order' => 1710,
					'code' => '201',
					'description' => 'Manufacture of basic chemicals, fertilizers and nitrogen compounds, plastics and synthetic rubber in primary forms',
					'explanatory_note_inclusion' => 'This group includes the manufacture of basic chemical products, fertilizers and associated nitrogen compounds, as well as plastics and synthetic rubber in primary forms.',
					'explanatory_note_exclusion' => '',
				),
				168 => 
				array (
					'id' => 169,
					'sort_order' => 1720,
					'code' => '2011',
					'description' => 'Manufacture of basic chemicals',
					'explanatory_note_inclusion' => 'This class includes the manufacture of chemicals using basic processes, such as thermal cracking and distillation. The output of these processes are usually separate chemical elements or separate chemically defined compounds.

This class includes:
- manufacture of liquefied or compressed inorganic industrial or medical gases:
* elemental gases
* liquid or compressed air
* refrigerant gases
* mixed industrial gases
* inert gases such as carbon dioxide
* isolating gases
- manufacture of ',
					'explanatory_note_exclusion' => 'This class excludes:
- extraction of methane, ethane, butane or propane, see 0620
- manufacture of fuel gases such as ethane, butane or propane in a petroleum refinery, see 1920
- manufacture of nitrogenous fertilizers and nitrogen compounds, see 2012
- manufacture of ammonia, see 2012
- manufacture of ammonium chloride, see 2012
- manufacture of nitrites and nitrates of potassium, see 2012
- manufacture of ammonium carbonates, see 2012
- manufacture of plastics in primary forms, see 201',
				),
				169 => 
				array (
					'id' => 170,
					'sort_order' => 1730,
					'code' => '2012',
					'description' => 'Manufacture of fertilizers and nitrogen compounds',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of fertilizers:
* straight or complex nitrogenous, phosphatic or potassic fertilizers
* urea, crude natural phosphates and crude natural potassium salts
- manufacture of associated nitrogen products:
* nitric and sulphonitric acids, ammonia, ammonium chloride, ammonium carbonate, nitrites and nitrates of potassium

This class also includes:
- manufacture of potting soil with peat as main constituent
- manufacture of potting soil mixtures of natural soi',
					'explanatory_note_exclusion' => 'This class excludes:
- mining of guano, see 0891
- manufacture of agrochemical products, such as pesticides, see 2021
- operation of compost dumps, see 3821',
				),
				170 => 
				array (
					'id' => 171,
					'sort_order' => 1740,
					'code' => '2013',
					'description' => 'Manufacture of plastics and synthetic rubber in primary forms',
					'explanatory_note_inclusion' => 'This class includes the manufacture of resins, plastics materials and non-vulcanizable thermoplastic elastomers, the mixing and blending of resins on a custom basis, as well as the manufacture of non-customized synthetic resins.

This class includes:
- manufacture of plastics in primary forms:
* polymers, including those of ethylene, propylene, styrene, vinyl chloride, vinyl acetate and acrylics
* polyamides
* phenolic and epoxide resins and polyurethanes
* alkyd and polyester resins and ',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of artificial and synthetic fibres, filaments and yarn, see 2030
- shredding of plastic products, see 3830',
				),
				171 => 
				array (
					'id' => 172,
					'sort_order' => 1750,
					'code' => '202',
					'description' => 'Manufacture of other chemical products',
				'explanatory_note_inclusion' => 'This group includes the manufacture of chemical products other than basic chemicals and man-made fibres. This includes the manufacture of a variety of goods such as pesticides, paints and inks, soap, cleaning preparations, perfumes and toilet preparations, explosives and pyrotechnic products, chemical preparations for photographic uses (including film and sensitized paper), gelatins, composite diagnostic preparations etc.',
					'explanatory_note_exclusion' => '',
				),
				172 => 
				array (
					'id' => 173,
					'sort_order' => 1760,
					'code' => '2021',
					'description' => 'Manufacture of pesticides and other agrochemical products',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of insecticides, rodenticides, fungicides, herbicides
- manufacture of anti-sprouting products, plant growth regulators
- manufacture of disinfectants (for agricultural and other use)
- manufacture of other agrochemical products n.e.c.',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of fertilizers and nitrogen compounds, see 2012',
				),
				173 => 
				array (
					'id' => 174,
					'sort_order' => 1770,
					'code' => '2022',
					'description' => 'Manufacture of paints, varnishes and similar coatings, printing ink and mastics',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of paints and varnishes, enamels or lacquers
- manufacture of prepared pigments and dyes, opacifiers and colours
- manufacture of vitrifiable enamels and glazes and engobes and similar preparations
- manufacture of mastics
- manufacture of caulking compounds and similar non-refractory filling or surfacing preparations
- manufacture of organic composite solvents and thinners
- manufacture of prepared paint or varnish removers
- manufacture of printing in',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of dyestuffs and pigments, see 2011
- manufacture of writing and drawing ink, see 2029',
				),
				174 => 
				array (
					'id' => 175,
					'sort_order' => 1780,
					'code' => '2023',
					'description' => 'Manufacture of soap and detergents, cleaning and polishing preparations, perfumes and toilet preparations',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of organic surface-active agents
- manufacture of soap
- manufacture of paper, wadding, felt etc. coated or covered with soap or detergent
- manufacture of crude glycerol
- manufacture of surface-active preparations:
* washing powders in solid or liquid form and detergents
* dish-washing preparations
* textile softeners
- manufacture of cleaning and polishing products:
* preparations for perfuming or deodorizing rooms
* artificial waxes and prepared ',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of separate, chemically defined compounds, see 2011
- manufacture of glycerol, synthesized from petroleum products, see 2011
- extraction and refining of natural essential oils, see 2029',
				),
				175 => 
				array (
					'id' => 176,
					'sort_order' => 1790,
					'code' => '2029',
					'description' => 'Manufacture of other chemical products n.e.c.',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of propellant powders
- manufacture of explosives and pyrotechnic products, including percussion caps, detonators, signalling flares etc.
- manufacture of gelatine and its derivatives, glues and prepared adhesives, including rubber-based glues and adhesives
- manufacture of extracts of natural aromatic products
- manufacture of resinoids
- manufacture of aromatic distilled waters
- manufacture of mixtures of odoriferous products for the manufacture of pe',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of chemically defined products in bulk, see 2011
- manufacture of distilled water, see 2011
- manufacture of synthetic aromatic products, see 2011
- manufacture of printing ink, see 2022
- manufacture of perfumes and toilet preparations, see 2023
- manufacture of asphalt-based adhesives, see 2399',
				),
				176 => 
				array (
					'id' => 177,
					'sort_order' => 1800,
					'code' => '203',
					'description' => 'Manufacture of man-made fibres',
					'explanatory_note_inclusion' => 'See class 2030.',
					'explanatory_note_exclusion' => '',
				),
				177 => 
				array (
					'id' => 178,
					'sort_order' => 1810,
					'code' => '2030',
					'description' => 'Manufacture of man-made fibres',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of synthetic or artificial filament tow
- manufacture of synthetic or artificial staple fibres, not carded, combed or otherwise processed for spinning
- manufacture of synthetic or artificial filament yarn, including high-tenacity yarn
- manufacture of synthetic or artificial monofilament or strip',
					'explanatory_note_exclusion' => 'This class excludes:
- spinning of synthetic or artificial fibres, see 1311
- manufacture of yarns made of man-made staple, see 1311',
				),
				178 => 
				array (
					'id' => 179,
					'sort_order' => 1820,
					'code' => '21',
					'description' => 'Manufacture of basic pharmaceutical products and pharmaceutical preparations',
					'explanatory_note_inclusion' => 'This division includes the manufacture of basic pharmaceutical products and pharmaceutical preparations. This includes also the manufacture of medicinal chemical and botanical products.',
					'explanatory_note_exclusion' => '',
				),
				179 => 
				array (
					'id' => 180,
					'sort_order' => 1830,
					'code' => '210',
					'description' => 'Manufacture of pharmaceuticals, medicinal chemical and botanical products',
					'explanatory_note_inclusion' => 'See class 2100.',
					'explanatory_note_exclusion' => '',
				),
				180 => 
				array (
					'id' => 181,
					'sort_order' => 1840,
					'code' => '2100',
					'description' => 'Manufacture of pharmaceuticals, medicinal chemical and botanical products',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of medicinal active substances to be used for their pharmacological properties in the manufacture of medicaments: antibiotics, basic vitamins, salicylic and O-acetylsalicylic acids etc.
- processing of blood
- manufacture of medicaments:
* antisera and other blood fractions
* vaccines
* diverse medicaments, including homeopathic preparations
- manufacture of chemical contraceptive products for external use and hormonal contraceptive medicaments
- manufa',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of herb infusions (mint, vervain, chamomile etc.), see 1079
- manufacture of dental fillings and dental cement, see 3250
- manufacture of bone reconstruction cements, see 3250
- wholesale of pharmaceuticals, see 4649
- retail sale of pharmaceuticals, see 4772
- research and development for pharmaceuticals and biotech pharmaceuticals, see 7210
- packaging of pharmaceuticals, see 8292',
				),
				181 => 
				array (
					'id' => 182,
					'sort_order' => 1850,
					'code' => '22',
					'description' => 'Manufacture of rubber and plastics products',
					'explanatory_note_inclusion' => 'This division includes the manufacture of rubber and plastics products. 
This division is characterized by the raw materials used in the manufacturing process. However, this does not imply that the manufacture of all products made of these materials is classified here.',
					'explanatory_note_exclusion' => '',
				),
				182 => 
				array (
					'id' => 183,
					'sort_order' => 1860,
					'code' => '221',
					'description' => 'Manufacture of rubber products',
					'explanatory_note_inclusion' => 'This group includes the manufacture of rubber products.',
					'explanatory_note_exclusion' => '',
				),
				183 => 
				array (
					'id' => 184,
					'sort_order' => 1870,
					'code' => '2211',
					'description' => 'Manufacture of rubber tyres and tubes; retreading and rebuilding of rubber tyres',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of rubber tyres for vehicles, equipment, mobile machinery, aircraft, toy, furniture and other uses:
* pneumatic tyres
* solid or cushion tyres
- manufacture of inner tubes for tyres
- manufacture of interchangeable tyre treads, tyre flaps, "camelback" strips for retreading tyres etc.
- tyre rebuilding and retreading',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of tube repair materials, see 2219
- tyre and tube repair, fitting or replacement, see 4520',
				),
				184 => 
				array (
					'id' => 185,
					'sort_order' => 1880,
					'code' => '2219',
					'description' => 'Manufacture of other rubber products',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of other products of natural or synthetic rubber, unvulcanized, vulcanized or hardened:
* rubber plates, sheets, strip, rods, profile shapes
* tubes, pipes and hoses
* rubber conveyor or transmission belts or belting
* rubber hygienic articles: sheath contraceptives, teats, hot water bottles etc.
* rubber articles of apparel (if only sealed together, not sewn)
* rubber thread and rope
* rubberized yarn and fabrics
* rubber rings, fittings and seals
* ',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of tyre cord fabrics, see 1399
- manufacture of apparel of elastic fabrics, see 1410
- manufacture of rubber footwear, see 1520
- manufacture of glues and adhesives based on rubber, see 2029
- manufacture of "camelback" strips, see 2211
- manufacture of inflatable rafts and boats, see 3011, 3012
- manufacture of mattresses of uncovered cellular rubber, see 3100
- manufacture of rubber sports requisites, except apparel, see 3230
- manufacture of rubber ',
				),
				185 => 
				array (
					'id' => 186,
					'sort_order' => 1890,
					'code' => '222',
					'description' => 'Manufacture of plastics products',
					'explanatory_note_inclusion' => 'See class 2220.',
					'explanatory_note_exclusion' => '',
				),
				186 => 
				array (
					'id' => 187,
					'sort_order' => 1900,
					'code' => '2220',
					'description' => 'Manufacture of plastics products',
				'explanatory_note_inclusion' => 'This class includes the processing of new or spent (i.e. recycled) plastics resins into intermediate or final products, using such processes as compression molding, extrusion molding, injection molding, blow molding and casting. For most of these, the production process is such that a wide variety of products can be made.

This class includes:
- manufacture of semi-manufactures of plastic products:
* plastic plates, sheets, blocks, film, foil, strip etc. (whether self-adhesive or not)
- man',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of plastic luggage, see 1512
- manufacture of plastic footwear, see 1520
- manufacture of plastics in primary forms, see 2013
- manufacture of articles of synthetic or natural rubber, see group 221
- manufacture of plastic non current-carrying wiring devices (e.g. junction boxes, face plates), see 2733
- manufacture of plastic furniture, see 3100
- manufacture of mattresses of uncovered cellular plastic, see 3100
- manufacture of plastic sports requisit',
				),
				187 => 
				array (
					'id' => 188,
					'sort_order' => 1910,
					'code' => '23',
					'description' => 'Manufacture of other non-metallic mineral products',
				'explanatory_note_inclusion' => 'This division includes manufacturing activities related to a single substance of mineral origin. This division includes the manufacture of glass and glass products (e.g. flat glass, hollow glass, fibres, technical glassware etc.), ceramic products, tiles and baked clay products, and cement and plaster, from raw materials to finished articles. The manufacture of shaped and finished stone and other mineral products is also included in this division.',
					'explanatory_note_exclusion' => '',
				),
				188 => 
				array (
					'id' => 189,
					'sort_order' => 1920,
					'code' => '231',
					'description' => 'Manufacture of glass and glass products',
					'explanatory_note_inclusion' => 'See class 2310.',
					'explanatory_note_exclusion' => '',
				),
				189 => 
				array (
					'id' => 190,
					'sort_order' => 1930,
					'code' => '2310',
					'description' => 'Manufacture of glass and glass products',
					'explanatory_note_inclusion' => 'This class includes the manufacture of glass in all forms, made by any process and the manufacture of articles of glass.

This class includes:
- manufacture of flat glass, including wired, coloured or tinted flat glass
- manufacture of toughened or laminated flat glass
- manufacture of glass in rods or tubes
- manufacture of glass paving blocks
- manufacture of glass mirrors
- manufacture of multiple-walled insulating units of glass
- manufacture of bottles and other containers of glass',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of woven fabrics of glass yarn, see 1312
- manufacture of optical elements optically worked, see 2670
- manufacture of fiber optic cable for data transmission or live transmission of images, see 2731
- manufacture of glass toys, see 3240
- manufacture of syringes and other medical laboratory equipment, see 3250',
				),
				190 => 
				array (
					'id' => 191,
					'sort_order' => 1940,
					'code' => '239',
					'description' => 'Manufacture of non-metallic mineral products n.e.c.',
					'explanatory_note_inclusion' => 'This group includes the manufacture of intermediate and final products from mined or quarried non-metallic minerals, such as sand, gravel, stone or clay.',
					'explanatory_note_exclusion' => '',
				),
				191 => 
				array (
					'id' => 192,
					'sort_order' => 1950,
					'code' => '2391',
					'description' => 'Manufacture of refractory products',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of refractory mortars, concretes etc.
- manufacture of refractory ceramic goods:
* heat-insulating ceramic goods of siliceous fossil meals
* refractory bricks, blocks and tiles etc.
* retorts, crucibles, muffles, nozzles, tubes, pipes etc.

This class also includes:
- manufacture of refractory articles containing magnesite, dolomite or chromite',
					'explanatory_note_exclusion' => '',
				),
				192 => 
				array (
					'id' => 193,
					'sort_order' => 1960,
					'code' => '2392',
					'description' => 'Manufacture of clay building materials',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of non-refractory ceramic hearth or wall tiles, mosaic cubes etc.
- manufacture of non-refractory ceramic flags and paving
- manufacture of structural non-refractory clay building materials:
* manufacture of ceramic bricks, roofing tiles, chimney pots, pipes, conduits etc.
- manufacture of flooring blocks in baked clay
- manufacture of ceramic sanitary fixtures',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of artificial stone (e.g. cultured marble), see 2220
- manufacture of refractory ceramic products, see 2391',
				),
				193 => 
				array (
					'id' => 194,
					'sort_order' => 1970,
					'code' => '2393',
					'description' => 'Manufacture of other porcelain and ceramic products',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of ceramic tableware and other domestic or toilet articles
- manufacture of statuettes and other ornamental ceramic articles
- manufacture of electrical insulators and insulating fittings of ceramics
- manufacture of ceramic and ferrite magnets
- manufacture of ceramic laboratory, chemical and industrial products
- manufacture of ceramic pots, jars and similar articles of a kind used for conveyance or packing of goods
- manufacture of ceramic furniture
',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of artificial stone (e.g. cultured marble), see 2220
- manufacture of refractory ceramic goods, see 2391
- manufacture of ceramic building materials, see 2392
- manufacture of ceramic sanitary fixtures, see 2392
- manufacture of permanent metallic magnets, see 2599
- manufacture of imitation jewellery, see 3212
- manufacture of ceramic toys, see 3240
- manufacture of artificial teeth, see 3250',
				),
				194 => 
				array (
					'id' => 195,
					'sort_order' => 1980,
					'code' => '2394',
					'description' => 'Manufacture of cement, lime and plaster',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of clinkers and hydraulic cements, including Portland, aluminous cement, slag cement and superphosphate cements
- manufacture of quicklime, slaked lime and hydraulic lime
- manufacture of plasters of calcined gypsum or calcined sulphate
- manufacture of calcined dolomite',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of refractory mortars, concrete etc., see 2391
- manufacture of articles of cement, see 2395
- manufacture of articles of plaster, see 2395
- manufacture of ready-mixed and dry-mix concrete and mortars, see 2395
- manufacture of cements used in dentistry, see 3250',
				),
				195 => 
				array (
					'id' => 196,
					'sort_order' => 1990,
					'code' => '2395',
					'description' => 'Manufacture of articles of concrete, cement and plaster',
					'explanatory_note_inclusion' => 'This class includes:
- manufacture of precast concrete, cement or artificial stone articles for use in construction:
* tiles, flagstones, bricks, boards, sheets, panels, pipes, posts etc.
- manufacture of prefabricated structural components for buildings or civil engineering of cement, concrete or artificial stone
- manufacture of plaster articles for use in construction:
* boards, sheets, panels etc.
- manufacture of building materials of vegetable substances (wood wool, straw, reeds, rus',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of refractory cements and mortars, see 2391',
					),
					196 => 
					array (
						'id' => 197,
						'sort_order' => 2000,
						'code' => '2396',
						'description' => 'Cutting, shaping and finishing of stone',
						'explanatory_note_inclusion' => 'This class includes:
- cutting, shaping and finishing of stone for use in construction, in cemeteries, on roads, as roofing etc.
- manufacture of stone furniture',
						'explanatory_note_exclusion' => 'This class excludes:
- production of rough cut stone, i.e. quarrying activities, see 0810
- production of millstones, abrasive stones and similar products, see 2399
- activities of sculptors, see 9000',
					),
					197 => 
					array (
						'id' => 198,
						'sort_order' => 2010,
						'code' => '2399',
						'description' => 'Manufacture of other non-metallic mineral products n.e.c.',
						'explanatory_note_inclusion' => 'This class includes:
- manufacture of millstones, sharpening or polishing stones and natural or artificial abrasive products, including abrasive products on a soft base (e.g. sandpaper)
- manufacture of friction material and unmounted articles thereof with a base of mineral substances or of cellulose
- manufacture of mineral insulating materials:
* slag wool, rock wool and similar mineral wools; exfoliated vermiculite, expanded clays and similar heat-insulating, sound-insulating or sound-abs',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of glass wool and non-woven glass wool products, see 2310
- manufacture of carbon or graphite gaskets, see 2819',
					),
					198 => 
					array (
						'id' => 199,
						'sort_order' => 2020,
						'code' => '24',
						'description' => 'Manufacture of basic metals',
						'explanatory_note_inclusion' => 'This division includes the activities of smelting and/or refining ferrous and non-ferrous metals from ore, pig or scrap, using electrometallurgic and other process metallurgic techniques. This division also includes the manufacture of metal alloys and super-alloys by introducing other chemical elements to pure metals. The output of smelting and refining, usually in ingot form, is used in rolling, drawing and extruding operations to make products such as plate, sheet, strip, bars, rods, wire, tub',
						'explanatory_note_exclusion' => '',
					),
					199 => 
					array (
						'id' => 200,
						'sort_order' => 2030,
						'code' => '241',
						'description' => 'Manufacture of basic iron and steel',
						'explanatory_note_inclusion' => 'See class 2410.',
						'explanatory_note_exclusion' => '',
					),
					200 => 
					array (
						'id' => 201,
						'sort_order' => 2040,
						'code' => '2410',
						'description' => 'Manufacture of basic iron and steel',
						'explanatory_note_inclusion' => 'This class includes operations of conversion by reduction of iron ore in blast furnaces and oxygen converters or of ferrous waste and scrap in electric arc furnaces or by direct reduction of iron ore without fusion to obtain crude steel which is smelted and refined in a ladle furnace and then poured and solidified in a continuous caster in order to produce semi-finished flat or long products, which are used, after reheating, in rolling, drawing and extruding operations to manufacture finished pr',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of tubes, pipes and hollow profiles and of tube or pipe fittings of cast-iron, see 2431
- manufacture of seamless tubes and pipes of steel by centrifugal casting, see 2431
- manufacture of tube or pipe fittings of cast-steel, see 2431',
					),
					201 => 
					array (
						'id' => 202,
						'sort_order' => 2050,
						'code' => '242',
						'description' => 'Manufacture of basic precious and other non-ferrous metals',
						'explanatory_note_inclusion' => 'See class 2420.',
						'explanatory_note_exclusion' => '',
					),
					202 => 
					array (
						'id' => 203,
						'sort_order' => 2060,
						'code' => '2420',
						'description' => 'Manufacture of basic precious and other non-ferrous metals',
						'explanatory_note_inclusion' => 'This class includes:
- production of basic precious metals:
* production and refining of unwrought or wrought precious metals: gold, silver, platinum etc. from ore and scrap
- production of precious metal alloys
- production of precious metal semi-products
- production of silver rolled onto base metals
- production of gold rolled onto base metals or silver
- production of platinum and platinum group metals rolled onto gold, silver or base metals
- production of aluminium from alumina
- ',
						'explanatory_note_exclusion' => 'This class excludes:
- casting of non-ferrous metals, see 2432
- manufacture of precious metal jewellery, see 3211',
					),
					203 => 
					array (
						'id' => 204,
						'sort_order' => 2070,
						'code' => '243',
						'description' => 'Casting of metals',
						'explanatory_note_inclusion' => 'This group includes the manufacture of semi-finished products and various castings by a casting process.',
						'explanatory_note_exclusion' => 'This group excludes:
- manufacture of finished cast products such as:
* boilers and radiators, see 2512
* cast household items, see 2599',
					),
					204 => 
					array (
						'id' => 205,
						'sort_order' => 2080,
						'code' => '2431',
						'description' => 'Casting of iron and steel',
						'explanatory_note_inclusion' => 'This class includes the casting of iron and steel, i.e. the activities of iron and steel foundries.

This class includes:
- casting of semi-finished iron products
- casting of grey iron castings
- casting of spheroidal graphite iron castings
- casting of malleable cast-iron products
- casting of semi-finished steel products
- casting of steel castings
- manufacture of tubes, pipes and hollow profiles and of tube or pipe fittings of cast-iron
- manufacture of seamless tubes and pipes of',
						'explanatory_note_exclusion' => '',
					),
					205 => 
					array (
						'id' => 206,
						'sort_order' => 2090,
						'code' => '2432',
						'description' => 'Casting of non-ferrous metals',
						'explanatory_note_inclusion' => 'This class includes:
- casting of semi-finished products of aluminium, magnesium, titanium, zinc etc.
- casting of light metal castings
- casting of heavy metal castings
- casting of precious metal castings
- die-casting of non-ferrous metal castings',
						'explanatory_note_exclusion' => '',
					),
					206 => 
					array (
						'id' => 207,
						'sort_order' => 2100,
						'code' => '25',
						'description' => 'Manufacture of fabricated metal products, except machinery and equipment',
					'explanatory_note_inclusion' => 'This division includes the manufacture of "pure" metal products (such as parts, containers and structures), usually with a static, immovable function, as opposed to the following divisions 26-30, which cover the manufacture of combinations or assemblies of such metal products (sometimes with other materials) into more complex units that, unless they are purely electrical, electronic or optical, work with moving parts.
The manufacture of weapons and ammunition is also included in this division.',
						'explanatory_note_exclusion' => '',
					),
					207 => 
					array (
						'id' => 208,
						'sort_order' => 2110,
						'code' => '251',
						'description' => 'Manufacture of structural metal products, tanks, reservoirs and steam generators',
					'explanatory_note_inclusion' => 'This group includes the manufacture of structural metal products (such as metal frameworks or parts for construction), as well as metal container-type objects (such as reservoirs, tanks, central heating boilers) and steam generators.',
						'explanatory_note_exclusion' => '',
					),
					208 => 
					array (
						'id' => 209,
						'sort_order' => 2120,
						'code' => '2511',
						'description' => 'Manufacture of structural metal products',
						'explanatory_note_inclusion' => 'This class includes:
- manufacture of metal frameworks or skeletons for construction and parts thereof (towers, masts, trusses, bridges etc.)
- manufacture of industrial frameworks in metal (frameworks for blast furnaces, lifting and handling equipment etc.)
- manufacture of prefabricated buildings mainly of metal:
* site huts, modular exhibition elements etc.
- manufacture of metal doors, windows and their frames, shutters and gates
- metal room partitions for floor attachment',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of parts for marine or power boilers, see 2513
- manufacture of assembled railway track fixtures, see 2599
- manufacture of sections of ships, see 3011',
					),
					209 => 
					array (
						'id' => 210,
						'sort_order' => 2130,
						'code' => '2512',
						'description' => 'Manufacture of tanks, reservoirs and containers of metal',
						'explanatory_note_inclusion' => 'This class includes:
- manufacture of reservoirs, tanks and similar containers of metal, of types normally installed as fixtures for storage or manufacturing use
- manufacture of metal containers for compressed or liquefied gas
- manufacture of central heating boilers and radiators',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of metal casks, drums, cans, pails, boxes etc. of a kind normally used for carrying and packing of goods, see 2599
- manufacture of transport containers, see 2920
- manufacture of tanks (armored military vehicles), see 3040',
					),
					210 => 
					array (
						'id' => 211,
						'sort_order' => 2140,
						'code' => '2513',
						'description' => 'Manufacture of steam generators, except central heating hot water boilers',
						'explanatory_note_inclusion' => 'This class includes:
- manufacture of steam or other vapour generators
- manufacture of auxiliary plant for use with steam generators:
* condensers, economizers, superheaters, steam collectors and accumulators
- manufacture of nuclear reactors, except isotope separators
- manufacture of parts for marine or power boilers',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of central heating hot-water boilers and radiators, see 2512
- manufacture of boiler-turbine sets, see 2811
- manufacture of isotope separators, see 2829',
					),
					211 => 
					array (
						'id' => 212,
						'sort_order' => 2150,
						'code' => '252',
						'description' => 'Manufacture of weapons and ammunition',
						'explanatory_note_inclusion' => 'See class 2520.',
						'explanatory_note_exclusion' => '',
					),
					212 => 
					array (
						'id' => 213,
						'sort_order' => 2160,
						'code' => '2520',
						'description' => 'Manufacture of weapons and ammunition',
						'explanatory_note_inclusion' => 'This class includes:
- manufacture of heavy weapons (artillery, mobile guns, rocket launchers, torpedo tubes, heavy machine guns)
- manufacture of small arms (revolvers, shotguns, light machine guns)
- manufacture of air or gas guns and pistols
- manufacture of war ammunition

This class also includes:
- manufacture of hunting, sporting or protective firearms and ammunition
- manufacture of explosive devices such as bombs, mines and torpedoes',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of percussion caps, detonators or signalling flares, see 2029
- manufacture of cutlasses, swords, bayonets etc., see 2593
- manufacture of armoured vehicles for the transport of banknotes or valuables, see 2910
- manufacture of space vehicles, see 3030
- manufacture of tanks and other fighting vehicles, see 3040',
					),
					213 => 
					array (
						'id' => 214,
						'sort_order' => 2170,
						'code' => '259',
						'description' => 'Manufacture of other fabricated metal products; metalworking service activities',
						'explanatory_note_inclusion' => 'This group includes general activities for the treatment of metal, such as forging or pressing, plating, coating, engraving, boring, polishing, welding etc., which are typically carried out on a fee or contract basis. This group also includes the manufacture of a variety of metal products, such as cutlery; metal hand tools and general hardware; cans and buckets; nails, bolts and nuts; metal household articles; metal fixtures; ships propellers and anchors; assembled railway track fixtures etc. fo',
						'explanatory_note_exclusion' => '',
					),
					214 => 
					array (
						'id' => 215,
						'sort_order' => 2180,
						'code' => '2591',
						'description' => 'Forging, pressing, stamping and roll-forming of metal; powder metallurgy',
						'explanatory_note_inclusion' => 'This class includes:
- forging, pressing, stamping and roll-forming of metal
- powder metallurgy: production of metal objects directly from metal powders by heat treatment (sintering) or under pressure',
						'explanatory_note_exclusion' => 'This class excludes:
- production of metal powder, see 2410, 2420',
					),
					215 => 
					array (
						'id' => 216,
						'sort_order' => 2190,
						'code' => '2592',
						'description' => 'Treatment and coating of metals; machining',
						'explanatory_note_inclusion' => 'This class includes:
- plating, anodizing etc. of metals
- heat treatment of metals
- deburring, sandblasting, tumbling, cleaning of metals
- colouring and engraving of metals
- non-metallic coating of metals:
* plasticizing, enamelling, lacquering etc.
- hardening, buffing of metals
- boring, turning, milling, eroding, planing, lapping, broaching, levelling, sawing, grinding, sharpening, polishing, welding, splicing etc. of metalwork pieces
- cutting of and writing on metals by means o',
						'explanatory_note_exclusion' => 'This class excludes:
- activities of farriers, see 0162
- rolling precious metals onto base metals or other metals, see 2420',
					),
					216 => 
					array (
						'id' => 217,
						'sort_order' => 2200,
						'code' => '2593',
						'description' => 'Manufacture of cutlery, hand tools and general hardware',
						'explanatory_note_inclusion' => 'This class includes:
- manufacture of domestic cutlery such as knives, forks, spoons etc.
- manufacture of other articles of cutlery:
* cleavers and choppers
* razors and razor blades
* scissors and hair clippers
- manufacture of knives and cutting blades for machines or for mechanical appliances
- manufacture of hand tools such as pliers, screwdrivers etc.
- manufacture of non-power-driven agricultural hand tools
- manufacture of saws and saw blades, including circular saw blades and c',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of hollowware (pots, kettles etc.), dinnerware (bowls, platters etc.) or flatware (plates, saucers etc.), see 2599
- manufacture of power-driven hand tools, see 2818
- manufacture of ingot moulds, see 2823
- manufacture of cutlery of precious metal, see 3211',
					),
					217 => 
					array (
						'id' => 218,
						'sort_order' => 2210,
						'code' => '2599',
						'description' => 'Manufacture of other fabricated metal products n.e.c.',
						'explanatory_note_inclusion' => 'This class includes:
- manufacture of pails, cans, drums, buckets, boxes
- manufacture of tins and cans for food products, collapsible tubes and boxes
- manufacture of metallic closures
- manufacture of metal cable, plaited bands and similar articles
- manufacture of uninsulated metal cable or insulated cable not capable of being used as a conductor of electricity
- manufacture of articles made of wire: barbed wire, wire fencing, grill, netting, cloth etc.
- manufacture of nails and pins',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of ceramic and ferrite magnets, see 2393
- manufacture of tanks and reservoirs, see 2512
- manufacture of swords, bayonets, see 2593
- manufacture of clock or watch springs, see 2652
- manufacture of wire and cable for electricity transmission, see 2732
- manufacture of power transmission chain, see 2814
- manufacture of shopping carts, see 3099
- manufacture of metal furniture, see 3100
- manufacture of sports goods, see 3230
- manufacture of games a',
					),
					218 => 
					array (
						'id' => 219,
						'sort_order' => 2220,
						'code' => '26',
						'description' => 'Manufacture of computer, electronic and optical products',
						'explanatory_note_inclusion' => 'This division includes the manufacture of computers, computer peripherals, communications equipment, and similar electronic products, as well as the manufacture of components for such products. Production processes of this division are characterized by the design and use of integrated circuits and the application of highly specialized miniaturization technologies.
The division also contains the manufacture of consumer electronics, measuring, testing, navigating, and control equipment, irradiati',
						'explanatory_note_exclusion' => '',
					),
					219 => 
					array (
						'id' => 220,
						'sort_order' => 2230,
						'code' => '261',
						'description' => 'Manufacture of electronic components and boards',
						'explanatory_note_inclusion' => 'See class 2610.',
						'explanatory_note_exclusion' => '',
					),
					220 => 
					array (
						'id' => 221,
						'sort_order' => 2240,
						'code' => '2610',
						'description' => 'Manufacture of electronic components and boards',
						'explanatory_note_inclusion' => 'This class includes the manufacture of semiconductors and other components for electronic applications. 

This class includes:
- manufacture of capacitors, electronic
- manufacture of resistors, electronic
- manufacture of microprocessors
- manufacture of bare printed circuit boards 
- manufacture of electron tubes
- manufacture of electronic connectors
- manufacture of integrated circuits (analog, digital or hybrid)
- manufacture of diodes, transistors and related discrete devices
- ',
						'explanatory_note_exclusion' => 'This class excludes:
- printing of smart cards, see 1811
- manufacture of modems (carrier equipment), see 2630
- manufacture of computer and television displays, see 2620, 2640
- manufacture of X-ray tubes and similar irradiation devices, see 2660
- manufacture of optical equipment and instruments, see 2670
- manufacture of similar devices for electrical applications, see division 27
- manufacture of lighting ballasts, see 2710
- manufacture of electrical relays, see 2710
- manufacture ',
					),
					221 => 
					array (
						'id' => 222,
						'sort_order' => 2250,
						'code' => '262',
						'description' => 'Manufacture of computers and peripheral equipment',
						'explanatory_note_inclusion' => 'See class 2620.',
						'explanatory_note_exclusion' => '',
					),
					222 => 
					array (
						'id' => 223,
						'sort_order' => 2260,
						'code' => '2620',
						'description' => 'Manufacture of computers and peripheral equipment',
					'explanatory_note_inclusion' => 'This class includes the manufacture and/or assembly of electronic computers, such as mainframes, desktop computers, laptops and computer servers; and computer peripheral equipment, such as storage devices and input/output devices (printers, monitors, keyboards). Computers can be analog, digital, or hybrid. Digital computers, the most common type, are devices that do all of the following: (1) store the processing program or programs and the data immediately necessary for the execution of the prog',
						'explanatory_note_exclusion' => 'This class excludes:
- reproduction of recorded media (computer media, sound, video, etc.), see 1820
- manufacture of electronic components and electronic assemblies used in computers and peripherals, see 2610
- manufacture of internal/external computer modems, see 2610
- manufacture of interface cards, modules and assemblies, see 2610
- manufacture of modems, carrier equipment, see 2630
- manufacture of digital communication switches, data communications equipment (e.g. bridges, routers, ',
						),
						223 => 
						array (
							'id' => 224,
							'sort_order' => 2270,
							'code' => '263',
							'description' => 'Manufacture of communication equipment',
							'explanatory_note_inclusion' => 'See class 2630.',
							'explanatory_note_exclusion' => '',
						),
						224 => 
						array (
							'id' => 225,
							'sort_order' => 2280,
							'code' => '2630',
							'description' => 'Manufacture of communication equipment',
							'explanatory_note_inclusion' => 'This class includes the manufacture of telephone and data communications equipment used to move signals electronically over wires or through the air such as radio and television broadcast and wireless communications equipment.

This class includes:
- manufacture of central office switching equipment
- manufacture of cordless telephones
- manufacture of private branch exchange (PBX) equipment
- manufacture of telephone and facsimile equipment, including telephone answering machines
- manuf',
							'explanatory_note_exclusion' => 'This class excludes:
- manufacture of computers and computer peripheral equipment, see 2620
- manufacture of consumer audio and video equipment, see 2640
- manufacture of electronic components and subassemblies used in communications equipment, see 2610
- manufacture of internal/external computer modems (PC-type), see 2610
- manufacture of electronic scoreboards, see 2790
- manufacture of traffic lights, see 2790',
						),
						225 => 
						array (
							'id' => 226,
							'sort_order' => 2290,
							'code' => '264',
							'description' => 'Manufacture of consumer electronics',
							'explanatory_note_inclusion' => 'See class 2640.',
							'explanatory_note_exclusion' => '',
						),
						226 => 
						array (
							'id' => 227,
							'sort_order' => 2300,
							'code' => '2640',
							'description' => 'Manufacture of consumer electronics',
							'explanatory_note_inclusion' => 'This class includes the manufacture of electronic audio and video equipment for home entertainment, motor vehicle, public address systems and musical instrument amplification. 

This class includes:
- manufacture of video cassette recorders and duplicating equipment
- manufacture of televisions
- manufacture of television monitors and displays
- manufacture of audio recording and duplicating systems
- manufacture of stereo equipment
- manufacture of radio receivers
- manufacture of spea',
							'explanatory_note_exclusion' => 'This class excludes:
- reproduction of recorded media (computer media, sound, video, etc.), see 1820
- manufacture of computer peripheral devices and computer monitors, see 2620
- manufacture of telephone answering machines, see 2630
- manufacture of paging equipment, see 2630
- manufacture of remote control devices (radio and infrared), see 2630
- manufacture of broadcast studio equipment such as reproduction equipment, transmitting and receiving antennas, commercial video cameras, see 26',
						),
						227 => 
						array (
							'id' => 228,
							'sort_order' => 2310,
							'code' => '265',
							'description' => 'Manufacture of measuring, testing, navigating and control equipment; watches and clocks',
							'explanatory_note_inclusion' => 'This group includes the manufacture of measuring, testing, navigating and control equipment for various industrial and non-industrial purposes, including time-based measuring devices such as watches and clocks and related devices.',
							'explanatory_note_exclusion' => '',
						),
						228 => 
						array (
							'id' => 229,
							'sort_order' => 2320,
							'code' => '2651',
							'description' => 'Manufacture of measuring, testing, navigating and control equipment',
							'explanatory_note_inclusion' => 'This class includes the manufacture of search, detection, navigation, guidance, aeronautical and nautical systems and instruments; automatic controls and regulators for applications, such as heating, air-conditioning, refrigeration and appliances; instruments and devices for measuring, displaying, indicating, recording, transmitting and controlling industrial process variables, such as temperature, humidity, pressure, vacuum, combustion, flow, level, viscosity, density, acidity, concentration an',
							'explanatory_note_exclusion' => 'This class excludes:
- manufacture of telephone answering machines, see 2630
- manufacture of irradiation equipment, see 2660
- manufacture of optical measuring and checking devices and instruments (e.g. fire control equipment, photographic light meters, range finders), see 2670
- manufacture of optical positioning equipment, see 2670
- manufacture of dictating machines, see 2817
- manufacture of levels, tape measures and similar hand tools, machinists’ precision tools, see 2819
- manufac',
						),
						229 => 
						array (
							'id' => 230,
							'sort_order' => 2330,
							'code' => '2652',
							'description' => 'Manufacture of watches and clocks',
							'explanatory_note_inclusion' => 'This class includes the manufacture of watches, clocks and timing mechanisms and parts thereof.

This class includes:
- manufacture of watches and clocks of all kinds, including instrument panel clocks
- manufacture of watch and clock cases, including cases of precious metals
- manufacture of time-recording equipment and equipment for measuring, recording and otherwise displaying intervals of time with a watch or clock movement or with synchronous motor, such as:
* parking meters
* time c',
							'explanatory_note_exclusion' => 'This class excludes:
- manufacture of non-metal watch bands (textile, leather, plastic), see 1512
- manufacture of watch bands of precious metal, see 3211
- manufacture of watch bands of non-precious metal, see 3212',
						),
						230 => 
						array (
							'id' => 231,
							'sort_order' => 2340,
							'code' => '266',
							'description' => 'Manufacture of irradiation, electromedical and electrotherapeutic equipment',
							'explanatory_note_inclusion' => 'See class 2660.',
							'explanatory_note_exclusion' => '',
						),
						231 => 
						array (
							'id' => 232,
							'sort_order' => 2350,
							'code' => '2660',
							'description' => 'Manufacture of irradiation, electromedical and electrotherapeutic equipment',
							'explanatory_note_inclusion' => 'This class includes:
- manufacture of irradiation apparatus and tubes (e.g. industrial, medical diagnostic, medical therapeutic, research, scientific):
* beta-, gamma, X-ray or other radiation equipment
- manufacture of CT scanners
- manufacture of PET scanners
- manufacture of magnetic resonance imaging (MRI) equipment
- manufacture of medical ultrasound equipment
- manufacture of electrocardiographs
- manufacture of electromedical endoscopic equipment
- manufacture of medical laser eq',
							'explanatory_note_exclusion' => 'This class excludes:
- manufacture of laboratory analytical instruments (e.g. blood analysis equipment), see 2651
- manufacture of tanning beds, see 2790',
						),
						232 => 
						array (
							'id' => 233,
							'sort_order' => 2360,
							'code' => '267',
							'description' => 'Manufacture of optical instruments and photographic equipment',
							'explanatory_note_inclusion' => 'See class 2670.',
							'explanatory_note_exclusion' => '',
						),
						233 => 
						array (
							'id' => 234,
							'sort_order' => 2370,
							'code' => '2670',
							'description' => 'Manufacture of optical instruments and photographic equipment',
						'explanatory_note_inclusion' => 'This class includes the manufacture of optical instruments and lenses, such as binoculars, microscopes (except electron, proton), telescopes, prisms and lenses (except ophthalmic); the coating or polishing of lenses (except ophthalmic); the mounting of lenses (except ophthalmic) and the manufacture of photographic equipment such as cameras and light meters.

This class includes:
- manufacture of lenses and prisms
- manufacture of optical microscopes, binoculars and telescopes
- manufacture ',
							'explanatory_note_exclusion' => 'This class excludes:
- manufacture of computer projectors, see 2620
- manufacture of commercial TV and video cameras, see 2630
- manufacture of household-type video cameras, see 2640
- manufacture of electron and proton microscopes, see 2651
- manufacture of complete equipment using laser components, see manufacturing class by type of machinery (e.g. medical laser equipment, see 2660)
- manufacture of photocopy machinery, see 2817
- manufacture of ophthalmic goods, see 3250',
						),
						234 => 
						array (
							'id' => 235,
							'sort_order' => 2380,
							'code' => '268',
							'description' => 'Manufacture of magnetic and optical media',
							'explanatory_note_inclusion' => 'See class 2680.',
							'explanatory_note_exclusion' => '',
						),
						235 => 
						array (
							'id' => 236,
							'sort_order' => 2390,
							'code' => '2680',
							'description' => 'Manufacture of magnetic and optical media',
							'explanatory_note_inclusion' => 'This class includes the manufacture of magnetic and optical recording media.

This class includes:
- manufacture of blank magnetic audio and video tapes
- manufacture of blank magnetic audio and video cassettes
- manufacture of blank diskettes
- manufacture of blank optical discs
- manufacture of hard drive media',
							'explanatory_note_exclusion' => 'This class excludes:
- reproduction of recorded media (computer media, sound, video, etc.), see 1820',
						),
						236 => 
						array (
							'id' => 237,
							'sort_order' => 2400,
							'code' => '27',
							'description' => 'Manufacture of electrical equipment',
							'explanatory_note_inclusion' => 'This division includes the manufacture of products that generate, distribute and use electrical power. Also included is the manufacture of electrical lighting, signalling equipment and electric household appliances.

This division excludes the manufacture of electronic products (see division 26).',
							'explanatory_note_exclusion' => '',
						),
						237 => 
						array (
							'id' => 238,
							'sort_order' => 2410,
							'code' => '271',
							'description' => 'Manufacture of electric motors, generators, transformers and electricity distribution and control apparatus',
							'explanatory_note_inclusion' => 'See class 2710.',
							'explanatory_note_exclusion' => '',
						),
						238 => 
						array (
							'id' => 239,
							'sort_order' => 2420,
							'code' => '2710',
							'description' => 'Manufacture of electric motors, generators, transformers and electricity distribution and control apparatus',
							'explanatory_note_inclusion' => 'This class includes the manufacture of power, distribution and specialty transformers; electric motors, generators and motor generator sets; switchgear and switchboard apparatus; relays and industrial controls. The electrical equipment manufactured in this class is for distribution level voltages.

This class includes:
- manufacture of distribution transformers, electric
- manufacture of arc-welding transformers
- manufacture of fluorescent ballasts (i.e. transformers)
- manufacture of sub',
							'explanatory_note_exclusion' => 'This class excludes:
- manufacture of electronic component-type transformers and switches, see 2610
- manufacture of environmental controls and industrial process control instruments, see 2651
- manufacture of switches for electrical circuits, such as pushbutton and snap switches, see 2733
- manufacture of electric welding and soldering equipment, see 2790
- manufacture of solid state inverters, rectifiers and converters, see 2790
- manufacture of turbine-generator sets, see 2811
- manufa',
						),
						239 => 
						array (
							'id' => 240,
							'sort_order' => 2430,
							'code' => '272',
							'description' => 'Manufacture of batteries and accumulators',
							'explanatory_note_inclusion' => 'See class 2720.',
							'explanatory_note_exclusion' => '',
						),
						240 => 
						array (
							'id' => 241,
							'sort_order' => 2440,
							'code' => '2720',
							'description' => 'Manufacture of batteries and accumulators',
							'explanatory_note_inclusion' => 'This class includes the manufacture of non-rechargeable and rechargeable batteries.

This class includes:
- manufacture of primary cells and primary batteries 
* cells containing manganese dioxide, mercuric dioxide, silver oxide etc.
- manufacture of electric accumulators, including parts thereof:
* separators, containers, covers
- manufacture of lead acid batteries
- manufacture of NiCad batteries
- manufacture of NiMH batteries
- manufacture of lithium batteries
- manufacture of dry',
							'explanatory_note_exclusion' => '',
						),
						241 => 
						array (
							'id' => 242,
							'sort_order' => 2450,
							'code' => '273',
							'description' => 'Manufacture of wiring and wiring devices',
							'explanatory_note_inclusion' => 'This group includes the manufacture of current-carrying wiring devices and non current-carrying wiring devices for wiring electrical circuits regardless of material. This group also includes the insulating of wire and the manufacture of fiber optic cables.',
							'explanatory_note_exclusion' => '',
						),
						242 => 
						array (
							'id' => 243,
							'sort_order' => 2460,
							'code' => '2731',
							'description' => 'Manufacture of fibre optic cables',
							'explanatory_note_inclusion' => 'This class includes:
- manufacture of fiber optic cable for data transmission or live transmission of images',
							'explanatory_note_exclusion' => 'This class excludes:
- manufacture of glass fibres or strand, see 2310
- manufacture of optical cable sets or assemblies with connectors or other attachments, see depending on application, e.g. 2610',
						),
						243 => 
						array (
							'id' => 244,
							'sort_order' => 2470,
							'code' => '2732',
							'description' => 'Manufacture of other electronic and electric wires and cables',
							'explanatory_note_inclusion' => 'This class includes:
- manufacture of insulated wire and cable, made of steel, copper, aluminium',
							'explanatory_note_exclusion' => 'This class excludes:
- manufacture (drawing) of wire, see 2410, 2420
- manufacture of computer cables, printer cables, USB cables and similar cable sets or assemblies, see 2610
- manufacture of extension cords, see 2790
- manufacture of cable sets, wiring harnesses and similar cable sets or assemblies for automotive applications, see 2930',
						),
						244 => 
						array (
							'id' => 245,
							'sort_order' => 2480,
							'code' => '2733',
							'description' => 'Manufacture of wiring devices',
							'explanatory_note_inclusion' => 'This class includes the manufacture of current-carrying and non current-carrying wiring devices for electrical circuits regardless of material.

This class includes:
- manufacture of bus bars, electrical conductors (except switchgear-type) 
- manufacture of GFCI (ground fault circuit interrupters) 
- manufacture of lamp holders 
- manufacture of lightning arrestors and coils
- manufacture of switches for electrical wiring (e.g. pressure, pushbutton, snap, tumbler switches) 
- manufacture',
							'explanatory_note_exclusion' => 'This class excludes:
- manufacture of ceramic insulators, see 2393
- manufacture of electronic component-type connectors, sockets and switches, see 2610',
						),
						245 => 
						array (
							'id' => 246,
							'sort_order' => 2490,
							'code' => '274',
							'description' => 'Manufacture of electric lighting equipment',
							'explanatory_note_inclusion' => 'See class 2740.',
							'explanatory_note_exclusion' => '',
						),
						246 => 
						array (
							'id' => 247,
							'sort_order' => 2500,
							'code' => '2740',
							'description' => 'Manufacture of electric lighting equipment',
						'explanatory_note_inclusion' => 'This class includes the manufacture of electric light bulbs and tubes and parts and components thereof (except glass blanks for electric light bulbs), electric lighting fixtures and lighting fixture components (except current-carrying wiring devices).

This class includes:
- manufacture of discharge, incandescent, fluorescent, ultra-violet, infra-red etc. lamps, fixtures and bulbs
- manufacture of ceiling lighting fixtures
- manufacture of chandeliers
- manufacture of table lamps (i.e. lig',
								'explanatory_note_exclusion' => 'This class excludes:
- manufacture of glassware and glass parts for lighting fixtures, see 2310
- manufacture of current-carrying wiring devices for lighting fixtures, see 2733
- manufacture of ceiling fans or bath fans with integrated lighting fixtures, see 2750
- manufacture of electrical signalling equipment such as traffic lights and pedestrian signalling equipment, see 2790',
							),
							247 => 
							array (
								'id' => 248,
								'sort_order' => 2510,
								'code' => '275',
								'description' => 'Manufacture of domestic appliances',
								'explanatory_note_inclusion' => 'See class 2750.',
								'explanatory_note_exclusion' => '',
							),
							248 => 
							array (
								'id' => 249,
								'sort_order' => 2520,
								'code' => '2750',
								'description' => 'Manufacture of domestic appliances',
								'explanatory_note_inclusion' => 'This class includes the manufacture of small electric appliances and electric housewares, household-type fans, household-type vacuum cleaners, electric household-type floor care machines, household-type cooking appliances, household-type laundry equipment, household-type refrigerators, upright and chest freezers and other electrical and non-electrical household appliances, such as dishwashers, water heaters and garbage disposal units. This class includes the manufacture of appliances with electr',
								'explanatory_note_exclusion' => 'This class excludes:
- manufacture of commercial and industrial refrigerators and freezers, room air-conditioners, attic fans, permanent mount space heaters and commercial ventilation and exhaust fans, commercial-type cooking equipment; commercial-type laundry, dry-cleaning and pressing equipment; commercial, industrial and institutional vacuum cleaners, see division 28
- manufacture of household-type sewing machines, see 2826
- installation of central vacuum cleaning systems, 4329',
							),
							249 => 
							array (
								'id' => 250,
								'sort_order' => 2530,
								'code' => '279',
								'description' => 'Manufacture of other electrical equipment',
								'explanatory_note_inclusion' => 'See class 2790.',
								'explanatory_note_exclusion' => '',
							),
							250 => 
							array (
								'id' => 251,
								'sort_order' => 2540,
								'code' => '2790',
								'description' => 'Manufacture of other electrical equipment',
								'explanatory_note_inclusion' => 'This class includes the manufacture of miscellaneous electrical equipment other than motors, generators and transformers, batteries and accumulators, wires and wiring devices, lighting equipment or domestic appliances.

This class includes:
- manufacture of battery chargers, solid-state
- manufacture of door opening and closing devices, electrical
- manufacture of electric bells
- manufacture of ultrasonic cleaning machines (except laboratory and dental)
- manufacture of tanning beds
- m',
								'explanatory_note_exclusion' => 'This class excludes:
- manufacture of non-electrical signs, see class according to material (plastic signs 2220, metal signs 2599)
- manufacture of porcelain electrical insulators, see 2393
- manufacture of carbon and graphite fibers and products (except electrodes and electrical applications), see 2399
- manufacture of electronic component-type rectifiers, voltage regulating integrated circuits, power converting integrated circuits, electronic capacitors, electronic resistors and similar de',
							),
							251 => 
							array (
								'id' => 252,
								'sort_order' => 2550,
								'code' => '28',
								'description' => 'Manufacture of machinery and equipment n.e.c.',
							'explanatory_note_inclusion' => 'This division includes the manufacture of machinery and equipment that act independently on materials either mechanically or thermally or perform operations on materials (such as handling, spraying, weighing or packing), including their mechanical components that produce and apply force, and any specially manufactured primary parts. This includes the manufacture of fixed and mobile or hand-held devices, regardless of whether they are designed for industrial, building and civil engineering, agric',
								'explanatory_note_exclusion' => '',
							),
							252 => 
							array (
								'id' => 253,
								'sort_order' => 2560,
								'code' => '281',
								'description' => 'Manufacture of general-purpose machinery',
								'explanatory_note_inclusion' => 'This group includes the manufacture of general-purpose machinery, i.e. machinery that is being used in a wide range of ISIC industries. This can include the manufacture of components used in the manufacture of a variety of other machinery or the manufacture of machinery that support the operation of other businesses.',
								'explanatory_note_exclusion' => '',
							),
							253 => 
							array (
								'id' => 254,
								'sort_order' => 2570,
								'code' => '2811',
								'description' => 'Manufacture of engines and turbines, except aircraft, vehicle and cycle engines',
								'explanatory_note_inclusion' => 'This class includes:
- manufacture of internal combustion piston engines, except motor vehicle, aircraft and cycle propulsion engines:
* marine engines
* railway engines
- manufacture of pistons, piston rings, carburetors and such for all internal combustion engines, diesel engines etc.
- manufacture of inlet and exhaust valves of internal combustion engines
- manufacture of turbines and parts thereof:
* steam turbines and other vapour turbines
* hydraulic turbines, waterwheels and regul',
								'explanatory_note_exclusion' => 'This class excludes:
- manufacture of electric generators (except turbine generator sets), see 2710
- manufacture of prime mover generator sets (except turbine generator sets), see 2710
- manufacture of electrical equipment and components of internal combustion engines, see 2790
- manufacture of motor vehicle, aircraft or cycle propulsion engines, see 2910, 3030, 3091
- manufacture of turbojets and turbo propellers, see 3030',
							),
							254 => 
							array (
								'id' => 255,
								'sort_order' => 2580,
								'code' => '2812',
								'description' => 'Manufacture of fluid power equipment',
								'explanatory_note_inclusion' => 'This class includes:
- manufacture of hydraulic and pneumatic components (including hydraulic pumps, hydraulic motors, hydraulic and pneumatic cylinders, hydraulic and pneumatic valves, hydraulic and pneumatic hose and fittings)
- manufacture of air preparation equipment for use in pneumatic systems
- manufacture of fluid power systems
- manufacture of hydraulic transmission equipment',
								'explanatory_note_exclusion' => 'This class excludes:
- manufacture of compressors, see 2813
- manufacture of pumps and valves for non-fluid power applications, see 2813
- manufacture of mechanical transmission equipment, see 2814',
							),
							255 => 
							array (
								'id' => 256,
								'sort_order' => 2590,
								'code' => '2813',
								'description' => 'Manufacture of other pumps, compressors, taps and valves',
								'explanatory_note_inclusion' => 'This class includes:
- manufacture of air or vacuum pumps, air or other gas compressors
- manufacture of pumps for liquids whether or not fitted with a measuring device
- manufacture of pumps designed for fitting to internal combustion engines: oil, water and fuel pumps for motor vehicles etc.

This class also includes:
- manufacture of industrial taps and valves, including regulating valves and intake taps
- manufacture of sanitary taps and valves
- manufacture of heating taps and valve',
								'explanatory_note_exclusion' => 'This class excludes:
- manufacture of valves of unhardened vulcanized rubber, glass or of ceramic materials, see 2219, 2310 or 2393
- manufacture of hydraulic transmission equipment, see 2812
- manufacture of inlet and exhaust valves of internal combustion engines, see 2811',
							),
							256 => 
							array (
								'id' => 257,
								'sort_order' => 2600,
								'code' => '2814',
								'description' => 'Manufacture of bearings, gears, gearing and driving elements',
								'explanatory_note_inclusion' => 'This class includes:
- manufacture of ball and roller bearings and parts thereof
- manufacture of mechanical power transmission equipment:
* transmission shafts and cranks: camshafts, crankshafts, cranks etc.
* bearing housings and plain shaft bearings
- manufacture of gears, gearing and gear boxes and other speed changers
- manufacture of clutches and shaft couplings
- manufacture of flywheels and pulleys
- manufacture of articulated link chain
- manufacture of power transmission chain',
								'explanatory_note_exclusion' => 'This class excludes:
- manufacture of other chain, see 2599
- manufacture of (electromagnetic) clutches, see 2930
- manufacture of sub-assemblies of power transmission equipment identifiable as parts of vehicles or aircraft, see divisions 29 and 30',
							),
							257 => 
							array (
								'id' => 258,
								'sort_order' => 2610,
								'code' => '2815',
								'description' => 'Manufacture of ovens, furnaces and furnace burners',
								'explanatory_note_inclusion' => 'This class includes:
- manufacture of electrical and other industrial and laboratory furnaces and ovens, including incinerators
- manufacture of burners
- manufacture of permanent mount electric space heaters, electric swimming pool heaters
- manufacture of permanent mount non-electric household heating equipment, such as solar heating, steam heating, oil heat and similar furnaces and heating equipment
- manufacture of electric household-type furnaces (electric forced air furnaces, heat pum',
									'explanatory_note_exclusion' => 'This class excludes:
- manufacture of household ovens, see 2750
- manufacture of agricultural dryers, see 2825
- manufacture of bakery ovens, see 2825
- manufacture of dryers for wood, paper pulp, paper or paperboard, see 2829
- manufacture of medical, surgical or laboratory sterilizers, see 3250
- manufacture of (dental) laboratory furnaces, see 3250',
								),
								258 => 
								array (
									'id' => 259,
									'sort_order' => 2620,
									'code' => '2816',
									'description' => 'Manufacture of lifting and handling equipment',
									'explanatory_note_inclusion' => 'This class includes:
- manufacture of hand-operated or power-driven lifting, handling, loading or unloading machinery:
* pulley tackle and hoists, winches, capstans and jacks
* derricks, cranes, mobile lifting frames, straddle carriers etc.
* works trucks, whether or not fitted with lifting or handling equipment, whether or not self-propelled, of the type used in factories (including hand trucks and wheelbarrows)
* mechanical manipulators and industrial robots specifically designed for lift',
									'explanatory_note_exclusion' => 'This class excludes:
- manufacture of continuous-action elevators and conveyors for underground use, see 2824
- manufacture of mechanical shovels, excavators and shovel loaders, see 2824
- manufacture of industrial robots for multiple uses, see 2829
- manufacture of crane-lorries, floating cranes, railway cranes, see 2910, 3011, 3020
- installation of lifts and elevators, see 4329',
								),
								259 => 
								array (
									'id' => 260,
									'sort_order' => 2630,
									'code' => '2817',
								'description' => 'Manufacture of office machinery and equipment (except computers and peripheral equipment)',
									'explanatory_note_inclusion' => 'This class includes:
- manufacture of calculating machines
- manufacture of adding machines, cash registers
- manufacture of calculators, electronic or not
- manufacture of postage meters, mail handling machines (envelope stuffing, sealing and addressing machinery; opening, sorting, scanning), collating machinery
- manufacture of typewriters
- manufacture of stenography machines
- manufacture of office-type binding equipment (i.e. plastic or tape binding) 
- manufacture of cheque writing',
									'explanatory_note_exclusion' => 'This class excludes:
- manufacture of computers and peripheral equipment, see 2620',
								),
								260 => 
								array (
									'id' => 261,
									'sort_order' => 2640,
									'code' => '2818',
									'description' => 'Manufacture of power-driven hand tools',
									'explanatory_note_inclusion' => 'This class includes:
- manufacture of hand tools, with self-contained electric or non-electric motor or pneumatic drive, such as:
* circular or reciprocating saws
* drills and hammer drills
* hand held power sanders
* pneumatic nailers
* buffers
* routers
* grinders
* staplers
* pneumatic rivet guns
* planers
* shears and nibblers
* impact wrenches
* powder actuated nailers',
									'explanatory_note_exclusion' => 'This class excludes:
- manufacture of electrical hand-held soldering and welding equipment, see 2790',
								),
								261 => 
								array (
									'id' => 262,
									'sort_order' => 2650,
									'code' => '2819',
									'description' => 'Manufacture of other general-purpose machinery',
									'explanatory_note_inclusion' => 'This class includes:
- manufacture of industrial refrigerating or freezing equipment, including assemblies of major components
- manufacture of air-conditioning machines, including for motor vehicles
- manufacture of non-domestic fans
- manufacture of weighing machinery (other than sensitive laboratory balances):
* household and shop scales, platform scales, scales for continuous weighing, weighbridges, weights etc.
- manufacture of filtering or purifying machinery and apparatus for liquid',
									'explanatory_note_exclusion' => 'This class excludes:
- manufacture of sensitive (laboratory-type) balances, see 2651
- manufacture of domestic refrigerating or freezing equipment, see 2750
- manufacture of domestic fans, see 2750
- manufacture of electrical welding and soldering equipment, see 2790
- manufacture of agricultural spraying machinery, see 2821
- manufacture of metal or glass rolling machinery and cylinders thereof, see 2823, 2829
- manufacture of agricultural dryers, see 2825
- manufacture of machinery for',
								),
								262 => 
								array (
									'id' => 263,
									'sort_order' => 2660,
									'code' => '282',
									'description' => 'Manufacture of special-purpose machinery',
								'explanatory_note_inclusion' => 'This group includes the manufacture of special-purpose machinery, i.e. machinery for exclusive use in an ISIC industry or a small cluster of ISIC industries. While most of these are used in other manufacturing processes, such as food manufacturing or textile manufacturing, this group also includes the manufacture of machinery specific for other (non-manufacturing industries), such as aircraft launching gear or amusement park equipment.',
									'explanatory_note_exclusion' => '',
								),
								263 => 
								array (
									'id' => 264,
									'sort_order' => 2670,
									'code' => '2821',
									'description' => 'Manufacture of agricultural and forestry machinery',
									'explanatory_note_inclusion' => 'This class includes:
- manufacture of tractors used in agriculture and forestry
- manufacture of walking (pedestrian-controlled) tractors
- manufacture of mowers, including lawnmowers
- manufacture of agricultural self-loading or self-unloading trailers or semi-trailers
- manufacture of agricultural machinery for soil preparation, planting or fertilizing:
* ploughs, manure spreaders, seeders, harrows etc.
- manufacture of harvesting or threshing machinery:
* harvesters, threshers, sorter',
									'explanatory_note_exclusion' => 'This class excludes:
- manufacture of non-power-driven agricultural hand tools, see 2593
- manufacture of conveyors for farm use, see 2816
- manufacture of power-driven hand tools, see 2818
- manufacture of cream separators, see 2825
- manufacture of machinery to clean, sort or grade seed, grain or dried leguminous vegetables, see 2825
- manufacture of road tractors for semi-trailers, see 2910
- manufacture of road trailers or semi-trailers, see 2920',
								),
								264 => 
								array (
									'id' => 265,
									'sort_order' => 2680,
									'code' => '2822',
									'description' => 'Manufacture of metal-forming machinery and machine tools',
									'explanatory_note_inclusion' => 'This class includes:
- manufacture of machine tools for working metals and other materials (wood, bone, stone, hard rubber, hard plastics, cold glass etc.), including those using a laser beam, ultrasonic waves, plasma arc, magnetic pulse etc.
- manufacture of machine tools for turning, drilling, milling, shaping, planing, boring, grinding etc.
- manufacture of stamping or pressing machine tools
- manufacture of punch presses, hydraulic presses, hydraulic brakes, drop hammers, forging machine',
									'explanatory_note_exclusion' => 'This class excludes:
- manufacture of interchangeable tools for hand tools or machine tools (drills, punches, dies, taps, milling cutters, turning tools, saw blades, cutting knives etc.), see 2593
- manufacture of electric hand held soldering irons and soldering guns, see 2790
- manufacture of power-driven hand tools, see 2818
- manufacture of machinery used in metal mills or foundries, see 2823
- manufacture of machinery for mining and quarrying, see 2824',
								),
								265 => 
								array (
									'id' => 266,
									'sort_order' => 2690,
									'code' => '2823',
									'description' => 'Manufacture of machinery for metallurgy',
									'explanatory_note_inclusion' => 'This class includes:
- manufacture of machines and equipment for handling hot metals:
* converters, ingot moulds, ladles, casting machines
- manufacture of metal-rolling mills and rolls for such mills',
									'explanatory_note_exclusion' => 'This class excludes:
- manufacture of draw-benches, see 2822
- manufacture of moulding boxes and moulds (except ingot moulds), see 2593
- manufacture of machines for forming foundry moulds, see 2829',
								),
								266 => 
								array (
									'id' => 267,
									'sort_order' => 2700,
									'code' => '2824',
									'description' => 'Manufacture of machinery for mining, quarrying and construction',
									'explanatory_note_inclusion' => 'This class includes:
- manufacture of continuous-action elevators and conveyors for underground use
- manufacture of boring, cutting, sinking and tunnelling machinery (whether or not for underground use)
- manufacture of machinery for treating minerals by screening, sorting, separating, washing, crushing etc.
- manufacture of concrete and mortar mixers
- manufacture of earth-moving machinery:
* bulldozers, angle-dozers, graders, scrapers, levellers, mechanical shovels, shovel loaders etc.',
									'explanatory_note_exclusion' => 'This class excludes:
- manufacture of lifting and handling equipment, see 2816
- manufacture of other tractors, see 2821, 2910
- manufacture of machine tools for working stone, including machines for splitting or clearing stone, see 2822
- manufacture of concrete-mixer lorries, see 2910
- manufacture of mining locomotives and mining rail cars, see 3020',
								),
								267 => 
								array (
									'id' => 268,
									'sort_order' => 2710,
									'code' => '2825',
									'description' => 'Manufacture of machinery for food, beverage and tobacco processing',
									'explanatory_note_inclusion' => 'This class includes:
- manufacture of agricultural dryers
- manufacture of machinery for the dairy industry:
* cream separators
* milk processing machinery (e.g. homogenizers)
* milk converting machinery (e.g. butter chums, butter workers and moulding machines)
* cheese-making machines (e.g. homogenizers, moulders, presses) etc.
- manufacture of machinery for the grain milling industry:
* machinery to clean, sort or grade seeds, grain or dried leguminous vegetables (winnowers, sieving be',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of food and milk irradiation equipment, see 2660
- manufacture of packing, wrapping and weighing machinery, see 2819
- manufacture of cleaning, sorting or grading machinery for eggs, fruit or other crops (except seeds, grains and dried leguminous vegetables), see 2821',
									),
									268 => 
									array (
										'id' => 269,
										'sort_order' => 2720,
										'code' => '2826',
										'description' => 'Manufacture of machinery for textile, apparel and leather production',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of textile machinery:
* machines for preparing, producing, extruding, drawing, texturing or cutting man-made textile fibres, materials or yarns
* machines for preparing textile fibres: cotton gins, bale breakers, garnetters, cotton spreaders, wool scourers, wool carbonizers, combs, carders, roving frames etc.
* spinning machines
* machines for preparing textile yarns: reelers, warpers and related machines
* weaving machines (looms), including hand looms
',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of paper or paperboard cards for use on jacquard machines, see 1709
- manufacture of domestic washing and drying machines, see 2750
- manufacture of calendering machines, see 2819
- manufacture of machines used in bookbinding, see 2829',
									),
									269 => 
									array (
										'id' => 270,
										'sort_order' => 2730,
										'code' => '2829',
										'description' => 'Manufacture of other special-purpose machinery',
										'explanatory_note_inclusion' => 'This class includes the manufacture of special-purpose machinery not elsewhere classified.

This class includes:
- manufacture of machinery for making paper pulp
- manufacture of paper and paperboard making machinery
- manufacture of dryers for wood, paper pulp, paper or paperboard
- manufacture of machinery producing articles of paper or paperboard
- manufacture of machinery for working soft rubber or plastics or for the manufacture of products of these materials:
* extruders, moulders,',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of household appliances, see 2750
- manufacture of photocopy machines etc., see 2817
- manufacture of machinery or equipment to work hard rubber, hard plastics or cold glass, see 2822
- manufacture of ingot moulds, see 2823
- manufacture of textile printing machinery, see 2826',
									),
									270 => 
									array (
										'id' => 271,
										'sort_order' => 2740,
										'code' => '29',
										'description' => 'Manufacture of motor vehicles, trailers and semi-trailers',
										'explanatory_note_inclusion' => 'This division includes the manufacture of motor vehicles for transporting passengers or freight. The manufacture of various parts and accessories, as well as the manufacture of trailers and semi-trailers, is included here.
The maintenance and repair of vehicles produced in this division are classified in 4520.',
										'explanatory_note_exclusion' => '',
									),
									271 => 
									array (
										'id' => 272,
										'sort_order' => 2750,
										'code' => '291',
										'description' => 'Manufacture of motor vehicles',
										'explanatory_note_inclusion' => 'See class 2910.',
										'explanatory_note_exclusion' => '',
									),
									272 => 
									array (
										'id' => 273,
										'sort_order' => 2760,
										'code' => '2910',
										'description' => 'Manufacture of motor vehicles',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of passenger cars
- manufacture of commercial vehicles:
* vans, lorries, over-the-road tractors for semi-trailers etc.
- manufacture of buses, trolley-buses and coaches
- manufacture of motor vehicle engines
- manufacture of chassis fitted with engines
- manufacture of other motor vehicles:
* snowmobiles, golf carts, amphibious vehicles
* fire engines, street sweepers, travelling libraries, armoured cars etc.
* concrete-mixer lorries
- ATVs, go-carts',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of lighting equipment for motor vehicles, see 2740
- manufacture of pistons, piston rings and carburetors, see 2811
- manufacture of agricultural tractors, see 2821
- manufacture of tractors used in construction or mining, see 2824
- manufacture of off-road dumping trucks, see 2824
- manufacture of bodies for motor vehicles, see 2920
- manufacture of electrical parts for motor vehicles, see 2930
- manufacture of parts and accessories for motor vehicles,',
									),
									273 => 
									array (
										'id' => 274,
										'sort_order' => 2770,
										'code' => '292',
									'description' => 'Manufacture of bodies (coachwork) for motor vehicles; manufacture of trailers and semi-trailers',
										'explanatory_note_inclusion' => 'See class 2920.',
										'explanatory_note_exclusion' => '',
									),
									274 => 
									array (
										'id' => 275,
										'sort_order' => 2780,
										'code' => '2920',
									'description' => 'Manufacture of bodies (coachwork) for motor vehicles; manufacture of trailers and semi-trailers',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of bodies, including cabs for motor vehicles
- outfitting of all types of motor vehicles, trailers and semi-trailers
- manufacture of trailers and semi-trailers:
* for transport of goods: tankers, removal trailers etc.
* for transport of passengers: caravan trailers etc.
- manufacture of containers for carriage by one or more modes of transport',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of trailers and semi-trailers specially designed for use in agriculture, see 2821
- manufacture of parts and accessories of bodies for motor vehicles, see 2930
- manufacture of vehicles drawn by animals, see 3099',
									),
									275 => 
									array (
										'id' => 276,
										'sort_order' => 2790,
										'code' => '293',
										'description' => 'Manufacture of parts and accessories for motor vehicles',
										'explanatory_note_inclusion' => 'See class 2930.',
										'explanatory_note_exclusion' => '',
									),
									276 => 
									array (
										'id' => 277,
										'sort_order' => 2800,
										'code' => '2930',
										'description' => 'Manufacture of parts and accessories for motor vehicles',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of diverse parts and accessories for motor vehicles:
* brakes, gearboxes, axles, road wheels, suspension shock absorbers, radiators, silencers, exhaust pipes, catalytic converters, clutches, steering wheels, steering columns and steering boxes
- manufacture of parts and accessories of bodies for motor vehicles:
* safety belts, airbags, doors, bumpers
- manufacture of car seats
- manufacture of motor vehicle electrical equipment, such as generators, altern',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of tyres, see 2211
- manufacture of rubber hoses and belts and other rubber products, see 2219
- manufacture of plastic hoses and belts and other plastic products, see 2220
- manufacture of batteries for vehicles, see 2720
- manufacture of lighting equipment for motor vehicles, see 2740
- manufacture of pistons, piston rings and carburetors, see 2811
- manufacture of pumps for motor vehicles and engines, see 2813
- maintenance, repair and alteration of ',
									),
									277 => 
									array (
										'id' => 278,
										'sort_order' => 2810,
										'code' => '30',
										'description' => 'Manufacture of other transport equipment',
										'explanatory_note_inclusion' => 'This division includes the manufacture of transportation equipment such as ship building and boat manufacturing, the manufacture of railroad rolling stock and locomotives, air and spacecraft and the manufacture of parts thereof.',
										'explanatory_note_exclusion' => '',
									),
									278 => 
									array (
										'id' => 279,
										'sort_order' => 2820,
										'code' => '301',
										'description' => 'Building of ships and boats',
										'explanatory_note_inclusion' => 'This group includes the building of ships, boats and other floating structures for transportation and other commercial purposes, as well as for sports and recreational purposes.',
										'explanatory_note_exclusion' => '',
									),
									279 => 
									array (
										'id' => 280,
										'sort_order' => 2830,
										'code' => '3011',
										'description' => 'Building of ships and floating structures',
										'explanatory_note_inclusion' => 'This class includes the building of ships, except vessels for sports or recreation, and the construction of floating structures.

This class includes:
- building of commercial vessels:
* passenger vessels, ferry boats, cargo ships, tankers, tugs etc.
- building of warships
- building of fishing boats and fish-processing factory vessels

This class also includes:
- building of hovercraft (except recreation-type hovercraft)
- construction of drilling platforms, floating or submersible
-',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of parts of vessels, other than major hull assemblies:
* manufacture of sails, see 1392
* manufacture of ships\' propellers, see 2599
* manufacture of iron or steel anchors, see 2599
* manufacture of marine engines, see 2811
- manufacture of navigational instruments, see 2651
- manufacture of lighting equipment for ships, see 2740
- manufacture of amphibious motor vehicles, see 2910
- manufacture of inflatable boats or rafts for recreation, see 3012
- ',
									),
									280 => 
									array (
										'id' => 281,
										'sort_order' => 2840,
										'code' => '3012',
										'description' => 'Building of pleasure and sporting boats',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of inflatable boats and rafts
- building of sailboats with or without auxiliary motor
- building of motor boats
- building of recreation-type hovercraft
- manufacture of personal watercraft
- manufacture of other pleasure and sporting boats:
* canoes, kayaks, rowing boats, skiffs',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of parts of pleasure and sporting boats:
* manufacture of sails, see 1392
* manufacture of iron or steel anchors, see 2599
* manufacture of marine engines, see 2811
- manufacture of sailboards and surfboards, see 3230
- maintenance, repair or alteration of pleasure boats, see 3315',
									),
									281 => 
									array (
										'id' => 282,
										'sort_order' => 2850,
										'code' => '302',
										'description' => 'Manufacture of railway locomotives and rolling stock',
										'explanatory_note_inclusion' => 'See class 3020.',
										'explanatory_note_exclusion' => '',
									),
									282 => 
									array (
										'id' => 283,
										'sort_order' => 2860,
										'code' => '3020',
										'description' => 'Manufacture of railway locomotives and rolling stock',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of electric, diesel, steam and other rail locomotives
- manufacture of self-propelled railway or tramway coaches, vans and trucks, maintenance or service vehicles
- manufacture of railway or tramway rolling stock, not self-propelled:
* passenger coaches, goods vans, tank wagons, self-discharging vans and wagons, workshop vans, crane vans, tenders etc.
- manufacture of specialized parts of railway or tramway locomotives or of rolling stock:
* bogies, axles',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of unassembled rails, see 2410
- manufacture of assembled railway track fixtures, see 2599
- manufacture of electric motors, see 2710
- manufacture of electrical signalling, safety or traffic-control equipment, see 2790
- manufacture of engines and turbines, see 2811',
									),
									283 => 
									array (
										'id' => 284,
										'sort_order' => 2870,
										'code' => '303',
										'description' => 'Manufacture of air and spacecraft and related machinery',
										'explanatory_note_inclusion' => 'See class 3030.',
										'explanatory_note_exclusion' => '',
									),
									284 => 
									array (
										'id' => 285,
										'sort_order' => 2880,
										'code' => '3030',
										'description' => 'Manufacture of air and spacecraft and related machinery',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of airplanes for the transport of goods or passengers, for use by the defence forces, for sport or other purposes
- manufacture of helicopters
- manufacture of gliders, hang-gliders
- manufacture of dirigibles and hot air balloons
- manufacture of parts and accessories of the aircraft of this class:
* major assemblies such as fuselages, wings, doors, control surfaces, landing gear, fuel tanks, nacelles etc.
* airscrews, helicopter rotors and propelled ro',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of parachutes, see 1392
- manufacture of military ordinance and ammunition, see 2520
- manufacture of telecommunication equipment for satellites, see 2630
- manufacture of aircraft instrumentation and aeronautical instruments, see 2651
- manufacture of air navigation systems, see 2651
- manufacture of lighting equipment for aircraft, see 2740
- manufacture of ignition parts and other electrical parts for internal combustion engines, see 2790
- manufactu',
									),
									285 => 
									array (
										'id' => 286,
										'sort_order' => 2890,
										'code' => '304',
										'description' => 'Manufacture of military fighting vehicles',
										'explanatory_note_inclusion' => 'See class 3040.',
										'explanatory_note_exclusion' => '',
									),
									286 => 
									array (
										'id' => 287,
										'sort_order' => 2900,
										'code' => '3040',
										'description' => 'Manufacture of military fighting vehicles',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of tanks
- manufacture of armored amphibious military vehicles
- manufacture of other military fighting vehicles',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of weapons and ammunitions, see 2520',
									),
									287 => 
									array (
										'id' => 288,
										'sort_order' => 2910,
										'code' => '309',
										'description' => 'Manufacture of transport equipment n.e.c.',
										'explanatory_note_inclusion' => 'This group includes the manufacture of transport equipment other than motor vehicles and rail, water, air or space transport equipment and military vehicles.',
										'explanatory_note_exclusion' => '',
									),
									288 => 
									array (
										'id' => 289,
										'sort_order' => 2920,
										'code' => '3091',
										'description' => 'Manufacture of motorcycles',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of motorcycles, mopeds and cycles fitted with an auxiliary engine
- manufacture of engines for motorcycles
- manufacture of sidecars
- manufacture of parts and accessories for motorcycles',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of bicycles, see 3092
- manufacture of invalid carriages, see 3092',
									),
									289 => 
									array (
										'id' => 290,
										'sort_order' => 2930,
										'code' => '3092',
										'description' => 'Manufacture of bicycles and invalid carriages',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of non-motorized bicycles and other cycles, including (delivery) tricycles, tandems, children\'s bicycles and tricycles
- manufacture of parts and accessories of bicycles
- manufacture of invalid carriages with or without motor
- manufacture of parts and accessories of invalid carriages
- manufacture of baby carriages',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of bicycles with auxiliary motor, see 3091
- manufacture of wheeled toys designed to be ridden, including plastic bicycles and tricycles, see 3240',
									),
									290 => 
									array (
										'id' => 291,
										'sort_order' => 2940,
										'code' => '3099',
										'description' => 'Manufacture of other transport equipment n.e.c.',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of hand-propelled vehicles: luggage trucks, handcarts, sledges, shopping carts etc.
- manufacture of vehicles drawn by animals: sulkies, donkey-carts, hearses etc.',
										'explanatory_note_exclusion' => 'This class excludes:
- works trucks, whether or not fitted with lifting or handling equipment, whether or not self-propelled, of the type used in factories (including hand trucks and wheelbarrows), see 2816
- decorative restaurant carts, such as a desert cart, food wagons, see 3100',
									),
									291 => 
									array (
										'id' => 292,
										'sort_order' => 2950,
										'code' => '31',
										'description' => 'Manufacture of furniture',
										'explanatory_note_inclusion' => 'This division includes the manufacture of furniture and related products of any material except stone, concrete and ceramic. The processes used in the manufacture of furniture are standard methods of forming materials and assembling components, including cutting, moulding and laminating. The design of the article, for both aesthetic and functional qualities, is an important aspect of the production process.

Some of the processes used in furniture manufacturing are similar to processes that ar',
										'explanatory_note_exclusion' => '',
									),
									292 => 
									array (
										'id' => 293,
										'sort_order' => 2960,
										'code' => '310',
										'description' => 'Manufacture of furniture',
										'explanatory_note_inclusion' => 'See class 3100.',
										'explanatory_note_exclusion' => '',
									),
									293 => 
									array (
										'id' => 294,
										'sort_order' => 2970,
										'code' => '3100',
										'description' => 'Manufacture of furniture',
									'explanatory_note_inclusion' => 'This class includes the manufacture of furniture of any kind, any material (except stone, concrete or ceramic) for any place and various purposes.

This class includes:
- manufacture of chairs and seats for offices, workrooms, hotels, restaurants, public and domestic premises
- manufacture of chairs and seats for theatres, cinemas and the like
- manufacture of sofas, sofa beds and sofa sets
- manufacture of garden chairs and seats
- manufacture of special furniture for shops: counters, di',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of pillows, pouffes, cushions, quilts and eiderdowns, see 1392
- manufacture of inflatable rubber mattresses, see 2219
- manufacture of furniture of ceramics, concrete and stone, see 2393, 2395, 2396
- manufacture of lighting fittings or lamps, see 2740
- blackboards, see 2817
- manufacture of car seats, railway seats, aircraft seats, see 2930, 3020, 3030
- modular furniture attachment and installation, partition installation, laboratory equipment furnit',
									),
									294 => 
									array (
										'id' => 295,
										'sort_order' => 2980,
										'code' => '32',
										'description' => 'Other manufacturing',
										'explanatory_note_inclusion' => 'This division includes the manufacture of a variety of goods not covered in other parts of the classification. Since this is a residual division, production processes, input materials and use of the produced goods can vary widely and usual criteria for grouping classes into divisions have not been applied here.',
										'explanatory_note_exclusion' => '',
									),
									295 => 
									array (
										'id' => 296,
										'sort_order' => 2990,
										'code' => '321',
										'description' => 'Manufacture of jewellery, bijouterie and related articles',
										'explanatory_note_inclusion' => 'This group includes the manufacture of jewellery and imitation jewellery articles.',
										'explanatory_note_exclusion' => '',
									),
									296 => 
									array (
										'id' => 297,
										'sort_order' => 3000,
										'code' => '3211',
										'description' => 'Manufacture of jewellery and related articles',
										'explanatory_note_inclusion' => 'This class includes:
- production of worked pearls
- production of precious and semi-precious stones in the worked state, including the working of industrial quality stones and synthetic or reconstructed precious or semi-precious stones
- working of diamonds
- manufacture of jewellery of precious metal or of base metals clad with precious metals, or precious or semi-precious stones, or of combinations of precious metal and precious or semi-precious stones or of other materials
- manufacture',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of non-metal watch bands (fabric, leather, plastic etc.), see 1512
- manufacture of articles of base metal plated with precious metal (except imitation jewellery), see division 25
- manufacture of watchcases, see 2652
- manufacture of (non-precious) metal watch bands, see 3212
- manufacture of imitation jewellery, see 3212',
									),
									297 => 
									array (
										'id' => 298,
										'sort_order' => 3010,
										'code' => '3212',
										'description' => 'Manufacture of imitation jewellery and related articles',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of costume or imitation jewellery:
* rings, bracelets, necklaces, and similar articles of jewellery made from base metals plated with precious metals
* jewellery containing imitation stones such as imitation gems stones, imitation diamonds, and similar
- manufacture of metal watch bands (except precious metal)',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of jewellery made from precious metals or clad with precious metals, see 3211
- manufacture of jewellery containing genuine gem stones, see 3211
- manufacture of precious metal watch bands, see 3211',
									),
									298 => 
									array (
										'id' => 299,
										'sort_order' => 3020,
										'code' => '322',
										'description' => 'Manufacture of musical instruments',
										'explanatory_note_inclusion' => 'See class 3220.',
										'explanatory_note_exclusion' => '',
									),
									299 => 
									array (
										'id' => 300,
										'sort_order' => 3030,
										'code' => '3220',
										'description' => 'Manufacture of musical instruments',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of stringed instruments
- manufacture of keyboard stringed instruments, including automatic pianos
- manufacture of keyboard pipe organs, including harmoniums and similar keyboard instruments with free metal reeds
- manufacture of accordions and similar instruments, including mouth organs
- manufacture of wind instruments
- manufacture of percussion musical instruments
- manufacture of musical instruments, the sound of which is produced electronically
-',
										'explanatory_note_exclusion' => 'This class excludes:
- reproduction of pre-recorded sound and video tapes and discs, see 1820
- manufacture of microphones, amplifiers, loudspeakers, headphones and similar components, see 2640
- manufacture of record players, tape recorders and the like, see 2640
- manufacture of toy musical instruments, see 3240
- restoring of organs and other historic musical instruments, see 3319
- publishing of pre-recorded sound and video tapes and discs, see 5920
- piano tuning, see 9529',
									),
									300 => 
									array (
										'id' => 301,
										'sort_order' => 3040,
										'code' => '323',
										'description' => 'Manufacture of sports goods',
										'explanatory_note_inclusion' => 'See class 3230.',
										'explanatory_note_exclusion' => '',
									),
									301 => 
									array (
										'id' => 302,
										'sort_order' => 3050,
										'code' => '3230',
										'description' => 'Manufacture of sports goods',
									'explanatory_note_inclusion' => 'This class includes the manufacture of sporting and athletic goods (except apparel and footwear).

This class includes:
- manufacture of articles and equipment for sports, outdoor and indoor games, of any material:
* hard, soft and inflatable balls
* rackets, bats and clubs
* skis, bindings and poles
* ski-boots
* sailboards and surfboards
* requisites for sport fishing, including landing nets
* requisites for hunting, mountain climbing etc.
* leather sports gloves and sports headgear',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of boat sails, see 1392
- manufacture of sports apparel, see 1410
- manufacture of saddlery and harness, see 1512
- manufacture of whips and riding crops, see 1512
- manufacture of sports footwear, see 1520
- manufacture of sporting weapons and ammunition, see 2520
- manufacture of metal weights as used for weightlifting, see 2599
- manufacture of automatic bowling alley equipment (e.g. pin-setters), see 2829
- manufacture of sports vehicles other than',
									),
									302 => 
									array (
										'id' => 303,
										'sort_order' => 3060,
										'code' => '324',
										'description' => 'Manufacture of games and toys',
										'explanatory_note_inclusion' => 'See class 3240.',
										'explanatory_note_exclusion' => '',
									),
									303 => 
									array (
										'id' => 304,
										'sort_order' => 3070,
										'code' => '3240',
										'description' => 'Manufacture of games and toys',
									'explanatory_note_inclusion' => 'This class includes the manufacture of dolls, toys and games (including electronic games), scale models and children\'s vehicles (except metal bicycles and tricycles).

This class includes:
- manufacture of dolls and doll garments, parts and accessories
- manufacture of action figures
- manufacture of toy animals
- manufacture of toy musical instruments
- manufacture of playing cards
- manufacture of board games and similar games
- manufacture of electronic games: chess etc.
- manufactu',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of video game consoles, see 2640
- manufacture of bicycles, see 3092
- writing and publishing of software for video game consoles, see 5820, 6201',
									),
									304 => 
									array (
										'id' => 305,
										'sort_order' => 3080,
										'code' => '325',
										'description' => 'Manufacture of medical and dental instruments and supplies',
										'explanatory_note_inclusion' => 'See class 3250.',
										'explanatory_note_exclusion' => '',
									),
									305 => 
									array (
										'id' => 306,
										'sort_order' => 3090,
										'code' => '3250',
										'description' => 'Manufacture of medical and dental instruments and supplies',
										'explanatory_note_inclusion' => 'This class includes the manufacture of laboratory apparatus, surgical and medical instruments, surgical appliances and supplies, dental equipment and supplies, orthodontic goods, dentures and orthodontic appliances. Included is the manufacture of medical, dental and similar furniture, where the additional specific functions determine the purpose of the product, such as dentist\'s chairs with built-in hydraulic functions.

This class includes:
- manufacture of surgical drapes and sterile string',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of denture adhesives, see 2023
- manufacture of medical impregnated wadding, dressings etc., see 2100
- manufacture of electromedical and electrotherapeutic equipment, see 2660
- manufacture of wheelchairs, see 3092',
									),
									306 => 
									array (
										'id' => 307,
										'sort_order' => 3100,
										'code' => '329',
										'description' => 'Other manufacturing n.e.c.',
										'explanatory_note_inclusion' => 'See class 3290.',
										'explanatory_note_exclusion' => '',
									),
									307 => 
									array (
										'id' => 308,
										'sort_order' => 3110,
										'code' => '3290',
										'description' => 'Other manufacturing n.e.c.',
										'explanatory_note_inclusion' => 'This class includes:
- manufacture of protective safety equipment
* manufacture of fire-resistant and protective safety clothing
* manufacture of linemen\'s safety belts and other belts for occupational use
* manufacture of cork life preservers
* manufacture of plastics hard hats and other personal safety equipment of plastics (e.g. athletic helmets)
* manufacture of fire-fighting protection suits
* manufacture of metal safety headgear and other metal personal safety devices
* manufacture',
										'explanatory_note_exclusion' => 'This class excludes:
- manufacture of lighter wicks, see 1399
- manufacture of workwear and service apparel (e.g. laboratory coats, work overalls, uniforms), see 1410
- manufacture of paper novelties, see 1709
- manufacture of plastic novelties, see 2220',
									),
									308 => 
									array (
										'id' => 309,
										'sort_order' => 3120,
										'code' => '33',
										'description' => 'Repair and installation of machinery and equipment',
									'explanatory_note_inclusion' => 'This division includes the specialized repair of goods produced in the manufacturing sector with the aim to restore machinery, equipment and other products to working order. The provision of general or routine maintenance (i.e. servicing) on such products to ensure they work efficiently and to prevent breakdown and unnecessary repairs is included. 

This division does only include specialized repair and maintenance activities. A substantial amount of repair is also done by manufacturers of mac',
										'explanatory_note_exclusion' => '',
									),
									309 => 
									array (
										'id' => 310,
										'sort_order' => 3130,
										'code' => '331',
										'description' => 'Repair of fabricated metal products, machinery and equipment',
									'explanatory_note_inclusion' => 'This group includes the specialized repair of goods produced in the manufacturing sector with the aim to restore these metal products, machinery, equipment and other products to working order. The provision of general or routine maintenance (i.e. servicing) on such products to ensure they work efficiently and to prevent breakdown and unnecessary repairs is included.',
										'explanatory_note_exclusion' => 'This group excludes:
- rebuilding or remanufacturing of machinery and equipment, see corresponding class in divisions 25-31 
- cleaning of industrial machinery, see 8129
- repair and maintenance of computers and communications equipment, see group 951
- repair and maintenance of household goods, see group 952',
									),
									310 => 
									array (
										'id' => 311,
										'sort_order' => 3140,
										'code' => '3311',
										'description' => 'Repair of fabricated metal products',
										'explanatory_note_inclusion' => 'This class includes the repair and maintenance of fabricated metal products of division 25.

This class includes:
- repair of metal tanks, reservoirs and containers
- repair and maintenance for pipes and pipelines
- mobile welding repair
- repair of steel shipping drums
- repair and maintenance of steam or other vapour generators
- repair and maintenance of auxiliary plant for use with steam generators:
* condensers, economizers, superheaters, steam collectors and accumulators
- repair',
										'explanatory_note_exclusion' => 'This class excludes:
- repair of central heating systems etc., see 4322
- repair of mechanical locking devices, safes etc., see 8020',
									),
									311 => 
									array (
										'id' => 312,
										'sort_order' => 3150,
										'code' => '3312',
										'description' => 'Repair of machinery',
									'explanatory_note_inclusion' => 'This class includes the repair and maintenance of industrial machinery and equipment like sharpening or installing commercial and industrial machinery blades and saws; the provision of welding (e.g. automotive, general) repair services; the repair of agricultural and other heavy and industrial machinery and equipment (e.g. forklifts and other materials handling equipment, machine tools, commercial refrigeration equipment, construction equipment and mining machinery), comprising machinery and equ',
										'explanatory_note_exclusion' => 'This class excludes: 
- installation, repair and maintenance of furnaces and other heating equipment, see 4322
- installation, repair and maintenance of elevators and escalators, see 4329',
									),
									312 => 
									array (
										'id' => 313,
										'sort_order' => 3160,
										'code' => '3313',
										'description' => 'Repair of electronic and optical equipment',
										'explanatory_note_inclusion' => 'This class includes the repair and maintenance of goods produced in groups 265, 266 and 267, except those that are considered household goods.

This class includes:
- repair and maintenance of the measuring, testing, navigating and control equipment of group 265, such as: 
* aircraft engine instruments
* automotive emissions testing equipment
* meteorological instruments
* physical, electrical and chemical properties testing and inspection equipment
* surveying instruments
* radiation d',
										'explanatory_note_exclusion' => 'This class excludes:
- repair and maintenance of photocopy machines, see 3312
- repair and maintenance of computers and peripheral equipment, see 9511
- repair and maintenance of computer projectors, see 9511
- repair and maintenance of communication equipment, see 9512
- repair and maintenance of commercial TV and video cameras, see 9512
- repair of household-type video cameras, see 9521
- repair of watches and clocks, see 9529',
									),
									313 => 
									array (
										'id' => 314,
										'sort_order' => 3170,
										'code' => '3314',
										'description' => 'Repair of electrical equipment',
									'explanatory_note_inclusion' => 'This class includes the repair and maintenance of goods of division 27, except those in class 2750 (domestic appliances).

This class includes:
- repair and maintenance of power, distribution, and specialty transformers
- repair and maintenance of electric motors, generators, and motor generator sets
- repair and maintenance of switchgear and switchboard apparatus
- repair and maintenance of relays and industrial controls
- repair and maintenance of primary and storage batteries
- repair',
										'explanatory_note_exclusion' => 'This class excludes:
- repair and maintenance of computers and peripheral computer equipment, see 9511
- repair and maintenance of telecommunications equipment, see 9512
- repair and maintenance of consumer electronics, see 9521
- repair of watches and clocks, see 9529',
									),
									314 => 
									array (
										'id' => 315,
										'sort_order' => 3180,
										'code' => '3315',
										'description' => 'Repair of transport equipment, except motor vehicles',
										'explanatory_note_inclusion' => 'This class includes the repair and maintenance of transport equipment of division 30, except motorcycles and bicycles. However, the factory rebuilding or overhaul of ships, locomotives, railroad cars and aircraft is classified in division 30.

This class includes:
- repair and routine maintenance of ships
- repair and maintenance of pleasure boats
- repair and maintenance of locomotives and railroad cars (except factory rebuilding or factory conversion)
- repair and maintenance of aircraft',
										'explanatory_note_exclusion' => 'This class excludes:
- factory rebuilding of ships, see 3011
- factory rebuilding of locomotives and railroad cars, see 3020
- factory rebuilding of aircraft, see 3030
- repair of ship or rail engines, see 3312
- ship scaling, dismantling, see 3830
- repair and maintenance of motorcycles, see 4540
- repair of bicycles and invalid carriages, see 9529',
									),
									315 => 
									array (
										'id' => 316,
										'sort_order' => 3190,
										'code' => '3319',
										'description' => 'Repair of other equipment',
										'explanatory_note_inclusion' => 'This class includes the repair and maintenance of equipment not covered in other groups of this division.

This class includes:
- repair of fishing nets, including mending
- repair or ropes, riggings, canvas and tarps
- repair of fertilizer and chemical storage bags
- repair or reconditioning of wooden pallets, shipping drums or barrels, and similar items
- repair of pinball machines and other coin-operated games
- restoring of organs and other historical musical instruments',
										'explanatory_note_exclusion' => 'This class excludes:
- repair of household and office type furniture, furniture restoration, see 9524
- repair of bicycles and invalid carriages, see 9529
- repair and alteration of clothing, see 9529',
									),
									316 => 
									array (
										'id' => 317,
										'sort_order' => 3200,
										'code' => '332',
										'description' => 'Installation of industrial machinery and equipment',
										'explanatory_note_inclusion' => 'See class 3320.',
										'explanatory_note_exclusion' => '',
									),
									317 => 
									array (
										'id' => 318,
										'sort_order' => 3210,
										'code' => '3320',
										'description' => 'Installation of industrial machinery and equipment',
										'explanatory_note_inclusion' => 'This class includes the specialized installation of machinery. However, the installation of equipment that forms an integral part of buildings or similar structures, such as installation of escalators, electrical wiring, burglar alarm systems or air-conditioning systems, is classified as construction.

This class includes:
- installation of industrial machinery in industrial plant
- installation of industrial process control equipment
- installation of other industrial equipment, e.g.:
* c',
										'explanatory_note_exclusion' => 'This class excludes:
- installation of electrical wiring, burglar alarm systems, see 4321
- installation of air-conditioning systems, see 4322
- installation of elevators, escalators, automated doors, vacuum cleaning systems etc., see 4329
- installation of doors, staircases, shop fittings, furniture etc., see 4330
- installation (setting-up) of personal computers, see 6209',
									),
									318 => 
									array (
										'id' => 319,
										'sort_order' => 3220,
										'code' => 'D',
										'description' => 'Electricity, gas, steam and air conditioning supply',
									'explanatory_note_inclusion' => 'This section includes the activity of providing electric power, natural gas, steam, hot water and the like through a permanent infrastructure (network) of lines, mains and pipes. The dimension of the network is not decisive; also included are the distribution of electricity, gas, steam, hot water and the like in industrial parks or residential buildings.
This section therefore includes the operation of electric and gas utilities, which generate, control and distribute electric power or gas. Als',
										'explanatory_note_exclusion' => '',
									),
									319 => 
									array (
										'id' => 320,
										'sort_order' => 3230,
										'code' => '35',
										'description' => 'Electricity, gas, steam and air conditioning supply',
										'explanatory_note_inclusion' => 'See section D.',
										'explanatory_note_exclusion' => '',
									),
									320 => 
									array (
										'id' => 321,
										'sort_order' => 3240,
										'code' => '351',
										'description' => 'Electric power generation, transmission and distribution',
										'explanatory_note_inclusion' => 'See class 3510.',
										'explanatory_note_exclusion' => '',
									),
									321 => 
									array (
										'id' => 322,
										'sort_order' => 3250,
										'code' => '3510',
										'description' => 'Electric power generation, transmission and distribution',
										'explanatory_note_inclusion' => 'This class includes the generation of bulk electric power, transmission from generating facilities to distribution centers and distribution to end users. 

This class includes:
- operation of generation facilities that produce electric energy, including thermal, nuclear, hydroelectric, gas turbine, diesel and renewable 
- operation of transmission systems that convey the electricity from the generation facility to the distribution system
- operation of distribution systems (i.e. consisting ',
											'explanatory_note_exclusion' => 'This class excludes:
- production of electricity through incineration of waste, see 3821',
										),
										322 => 
										array (
											'id' => 323,
											'sort_order' => 3260,
											'code' => '352',
											'description' => 'Manufacture of gas; distribution of gaseous fuels through mains',
											'explanatory_note_inclusion' => 'See class 3520.',
											'explanatory_note_exclusion' => '',
										),
										323 => 
										array (
											'id' => 324,
											'sort_order' => 3270,
											'code' => '3520',
											'description' => 'Manufacture of gas; distribution of gaseous fuels through mains',
											'explanatory_note_inclusion' => 'This class includes the manufacture of gas and the distribution of natural or synthetic gas to the consumer through a system of mains. Gas marketers or brokers, which arrange the sale of natural gas over distribution systems operated by others, are included. 
The separate operation of gas pipelines, typically done over long distances, connecting producers with distributors of gas, or between urban centers, is excluded from this class and classified with other pipeline transport activities.

T',
											'explanatory_note_exclusion' => 'This class excludes:
- operation of coke ovens, see 1910
- manufacture of refined petroleum products, see 1920
- manufacture of industrial gases, see 2011
- wholesale of gaseous fuels, see 4661
- retail sale of bottled gas, see 4773
- direct selling of fuel, see 4799
- (long-distance) transportation of gases by pipelines, see 4930',
										),
										324 => 
										array (
											'id' => 325,
											'sort_order' => 3280,
											'code' => '353',
											'description' => 'Steam and air conditioning supply',
											'explanatory_note_inclusion' => 'See class 3530.',
											'explanatory_note_exclusion' => '',
										),
										325 => 
										array (
											'id' => 326,
											'sort_order' => 3290,
											'code' => '3530',
											'description' => 'Steam and air conditioning supply',
											'explanatory_note_inclusion' => 'This class includes:
- production, collection and distribution of steam and hot water for heating, power and other purposes
- production and distribution of cooled air
- production and distribution of chilled water for cooling purposes
- production of ice, including ice for food and non-food (e.g. cooling) purposes',
											'explanatory_note_exclusion' => '',
										),
										326 => 
										array (
											'id' => 327,
											'sort_order' => 3300,
											'code' => 'E',
											'description' => 'Water supply; sewerage, waste management and remediation activities',
										'explanatory_note_inclusion' => 'This section includes activities related to the management (including collection, treatment and disposal) of various forms of waste, such as solid or non-solid industrial or household waste, as well as contaminated sites. The output of the waste or sewage treatment process can either be disposed of or become an input into other production processes. Activities of water supply are also grouped in this section, since they are often carried out in connection with, or by units also engaged in, the t',
											'explanatory_note_exclusion' => '',
										),
										327 => 
										array (
											'id' => 328,
											'sort_order' => 3310,
											'code' => '36',
											'description' => 'Water collection, treatment and supply',
											'explanatory_note_inclusion' => 'This division includes the collection, treatment and distribution of water for domestic and industrial needs. Collection of water from various sources, as well as distribution by various means is included.',
											'explanatory_note_exclusion' => '',
										),
										328 => 
										array (
											'id' => 329,
											'sort_order' => 3320,
											'code' => '360',
											'description' => 'Water collection, treatment and supply',
											'explanatory_note_inclusion' => 'See class 3600.',
											'explanatory_note_exclusion' => '',
										),
										329 => 
										array (
											'id' => 330,
											'sort_order' => 3330,
											'code' => '3600',
											'description' => 'Water collection, treatment and supply',
											'explanatory_note_inclusion' => 'This class includes water collection, treatment and distribution activities for domestic and industrial needs. Collection of water from various sources, as well as distribution by various means is included.
The operation of irrigation canals is also included; however the provision of irrigation services through sprinklers, and similar agricultural support services, is not included.

This class includes:
- collection of water from rivers, lakes, wells etc.
- collection of rain water
- purif',
											'explanatory_note_exclusion' => 'This class excludes:
- operation of irrigation equipment for agricultural purposes, see 0161
- treatment of wastewater in order to prevent pollution, see 3700
- (long-distance) transport of water via pipelines, see 4930',
										),
										330 => 
										array (
											'id' => 331,
											'sort_order' => 3340,
											'code' => '37',
											'description' => 'Sewerage',
											'explanatory_note_inclusion' => 'This division includes the operation of sewer systems or sewage treatment facilities that collect, treat, and dispose of sewage.',
											'explanatory_note_exclusion' => '',
										),
										331 => 
										array (
											'id' => 332,
											'sort_order' => 3350,
											'code' => '370',
											'description' => 'Sewerage',
											'explanatory_note_inclusion' => 'See class 3700.',
											'explanatory_note_exclusion' => '',
										),
										332 => 
										array (
											'id' => 333,
											'sort_order' => 3360,
											'code' => '3700',
											'description' => 'Sewerage',
											'explanatory_note_inclusion' => 'This class includes:
- operation of sewer systems or sewer treatment facilities
- collecting and transporting of human or industrial wastewater from one or several users, as well as rain water by means of sewerage networks, collectors, tanks and other means of transport (sewage vehicles etc.) 
- emptying and cleaning of cesspools and septic tanks, sinks and pits from sewage; servicing of chemical toilets
- treatment of wastewater (including human and industrial wastewater, water from swimmin',
												'explanatory_note_exclusion' => '',
											),
											333 => 
											array (
												'id' => 334,
												'sort_order' => 3370,
												'code' => '38',
												'description' => 'Waste collection, treatment and disposal activities; materials recovery',
											'explanatory_note_inclusion' => 'This division includes the collection, treatment, and disposal of waste materials. This also includes local hauling of waste materials and the operation of materials recovery facilities (i.e. those that sort recoverable materials from a waste stream).',
												'explanatory_note_exclusion' => '',
											),
											334 => 
											array (
												'id' => 335,
												'sort_order' => 3380,
												'code' => '381',
												'description' => 'Waste collection',
												'explanatory_note_inclusion' => 'This group includes the collection of waste from households and businesses by means of refuse bins, wheeled bins, containers, etc. It includes collection of non-hazardous and hazardous waste e.g. waste from households, used batteries, used cooking oils and fats, waste oil from ships and used oil from garages, as well as construction and demolition waste.',
												'explanatory_note_exclusion' => '',
											),
											335 => 
											array (
												'id' => 336,
												'sort_order' => 3390,
												'code' => '3811',
												'description' => 'Collection of non-hazardous waste',
												'explanatory_note_inclusion' => 'This class includes:
- collection of non-hazardous solid waste (i.e. garbage) within a local area, such as collection of waste from households and businesses by means of refuse bins, wheeled bins, containers etc may include mixed recoverable materials
- collection of recyclable materials
- collection of used cooking oils and fats
- collection of refuse in litter-bins in public places

This class also includes:
- collection of construction and demolition waste
- collection and removal of ',
												'explanatory_note_exclusion' => 'This class excludes:
- collection of hazardous waste, see 3812
- operation of landfills for the disposal of non-hazardous waste, see 3821
- operation of facilities where commingled recoverable materials such as paper, plastics, etc. are sorted into distinct categories, see 3830',
											),
											336 => 
											array (
												'id' => 337,
												'sort_order' => 3400,
												'code' => '3812',
												'description' => 'Collection of hazardous waste',
												'explanatory_note_inclusion' => 'This class includes the collection of solid and non-solid hazardous waste, i.e. explosive, oxidizing, flammable, toxic, irritant, carcinogenic, corrosive, infectious and other substances and preparations harmful for human health and environment. It may also entail identification, treatment, packaging and labeling of waste for the purposes of transport.

This class includes:
- collection of hazardous waste, such as:
* used oil from shipment or garages
* bio-hazardous waste
* used batteries',
												'explanatory_note_exclusion' => 'This class excludes:
- remediation and clean up of contaminated buildings, mine sites, soil, ground water, e.g. asbestos removal, see 3900',
											),
											337 => 
											array (
												'id' => 338,
												'sort_order' => 3410,
												'code' => '382',
												'description' => 'Waste treatment and disposal',
												'explanatory_note_inclusion' => 'This group includes the disposal and treatment prior to disposal of various forms of waste by different means, such as waste treatment of organic waste with the aim of disposal; treatment and disposal of toxic live or dead animals and other contaminated waste; treatment and disposal of transition radioactive waste from hospitals, etc.; dumping of refuse on land or in water; burial or ploughing-under of refuse; disposal of used goods such as refrigerators to eliminate harmful waste; disposal of w',
												'explanatory_note_exclusion' => 'This group excludes:
- treatment and disposal of wastewater, see 3700',
											),
											338 => 
											array (
												'id' => 339,
												'sort_order' => 3420,
												'code' => '3821',
												'description' => 'Treatment and disposal of non-hazardous waste',
												'explanatory_note_inclusion' => 'This class includes the disposal, treatment prior to disposal and other treatment of solid or non-solid non-hazardous waste.

This class includes:
- operation of landfills for the disposal of non-hazardous waste
- disposal of non-hazardous waste by combustion or incineration or other methods, with or without the resulting production of electricity or steam, substitute fuels, biogas, ashes or other by-products for further use etc.
- treatment of organic waste for disposal
- production of co',
												'explanatory_note_exclusion' => 'This class excludes:
- incineration and combustion of hazardous waste, see 3822
- operation of facilities where commingled recoverable materials such as paper, plastics, used beverage cans and metals, are sorted into distinct categories, see 3830
- decontamination, clean up of land, water; toxic material abatement, see 3900',
											),
											339 => 
											array (
												'id' => 340,
												'sort_order' => 3430,
												'code' => '3822',
												'description' => 'Treatment and disposal of hazardous waste',
												'explanatory_note_inclusion' => 'This class includes the disposal and treatment prior to disposal of solid or non-solid hazardous waste, including waste that is explosive, oxidizing, flammable, toxic, irritant, carcinogenic, corrosive or infectious and other substances and preparations harmful for human health and environment.

This class includes:
- operation of facilities for treatment of hazardous waste
- treatment and disposal of toxic live or dead animals and other contaminated waste
- incineration of hazardous waste',
												'explanatory_note_exclusion' => 'This class excludes:
- incineration of non-hazardous waste, see 3821
- decontamination, clean up of land, water; toxic material abatement, see 3900
- reprocessing of nuclear fuels, see 2011',
											),
											340 => 
											array (
												'id' => 341,
												'sort_order' => 3440,
												'code' => '383',
												'description' => 'Materials recovery',
												'explanatory_note_inclusion' => 'See class 3830.',
												'explanatory_note_exclusion' => '',
											),
											341 => 
											array (
												'id' => 342,
												'sort_order' => 3450,
												'code' => '3830',
												'description' => 'Materials recovery',
												'explanatory_note_inclusion' => 'This class includes:
- processing of metal and non-metal waste and scrap and other articles into secondary raw materials, usually involving a mechanical or chemical transformation process
- recovery of materials from waste streams in the form of:
* separating and sorting recoverable materials from non-hazardous waste streams (i.e. garbage)
* separating and sorting of commingled recoverable materials, such as paper, plastics, used beverage cans and metals, into distinct categories

Examples',
												'explanatory_note_exclusion' => 'This class excludes:
- manufacture of new final products from (whether or not self-produced) secondary raw materials, such as spinning yarn from garnetted stock, making pulp from paper waste, retreading tyres or production of metal from metal scrap, see corresponding classes in section C (Manufacturing)
- reprocessing of nuclear fuels, see 2011
- remelting ferrous waste and scrap, see 2410
- treatment and disposal of non-hazardous waste, see 3821
- treatment of organic waste for disposal, s',
											),
											342 => 
											array (
												'id' => 343,
												'sort_order' => 3460,
												'code' => '39',
												'description' => 'Remediation activities and other waste management services',
												'explanatory_note_inclusion' => 'This division includes the provision of remediation services, i.e. the cleanup of contaminated buildings and sites, soil, surface or ground water.',
												'explanatory_note_exclusion' => '',
											),
											343 => 
											array (
												'id' => 344,
												'sort_order' => 3470,
												'code' => '390',
												'description' => 'Remediation activities and other waste management services',
												'explanatory_note_inclusion' => 'See class 3900.',
												'explanatory_note_exclusion' => '',
											),
											344 => 
											array (
												'id' => 345,
												'sort_order' => 3480,
												'code' => '3900',
												'description' => 'Remediation activities and other waste management services',
												'explanatory_note_inclusion' => 'This class includes:
- decontamination of soils and groundwater at the place of pollution, either in situ or ex situ, using e.g. mechanical, chemical or biological methods
- decontamination of industrial plants or sites, including nuclear plants and sites
- decontamination and cleaning up of surface water following accidental pollution, e.g. through collection of pollutants or through application of chemicals
- cleaning up of oil spills and other pollutions on land, in surface water, in ocea',
												'explanatory_note_exclusion' => 'This class excludes:
- treatment and disposal of non-hazardous waste, see 3821
- treatment and disposal of hazardous waste, see 3822
- outdoor sweeping and watering of streets etc., see 8129',
											),
											345 => 
											array (
												'id' => 346,
												'sort_order' => 3490,
												'code' => 'F',
												'description' => 'Construction',
												'explanatory_note_inclusion' => 'This section includes general construction and specialized construction activities for buildings and civil engineering works. It includes new work, repair, additions and alterations, the erection of prefabricated buildings or structures on the site and also construction of a temporary nature. 

General construction is the construction of entire dwellings, office buildings, stores and other public and utility buildings, farm buildings etc., or the construction of civil engineering works such as',
												'explanatory_note_exclusion' => '',
											),
											346 => 
											array (
												'id' => 347,
												'sort_order' => 3500,
												'code' => '41',
												'description' => 'Construction of buildings',
												'explanatory_note_inclusion' => 'This division includes general construction of buildings of all kinds. It includes new work, repair, additions and alterations, the erection of pre-fabricated buildings or structures on the site and also construction of temporary nature. 

Included is the construction of entire dwellings, office buildings, stores and other public and utility buildings, farm buildings, etc.',
												'explanatory_note_exclusion' => '',
											),
											347 => 
											array (
												'id' => 348,
												'sort_order' => 3510,
												'code' => '410',
												'description' => 'Construction of buildings',
												'explanatory_note_inclusion' => 'See class 4100.',
												'explanatory_note_exclusion' => '',
											),
											348 => 
											array (
												'id' => 349,
												'sort_order' => 3520,
												'code' => '4100',
												'description' => 'Construction of buildings',
												'explanatory_note_inclusion' => 'This class includes the construction of complete residential or non-residential buildings, on own account for sale or on a fee or contract basis. Outsourcing parts or even the whole construction process is possible. If only specialized parts of the construction process are carried out, the activity is classified in division 43.

This class includes:
- construction of all types of residential buildings:
* single-family houses
* multi-family buildings, including high-rise buildings
- constru',
												'explanatory_note_exclusion' => 'This class excludes:
- erection of complete prefabricated constructions from self-manufactured parts not of concrete, see divisions 16 and 25
- construction of industrial facilities, except buildings, see 4290
- architectural and engineering activities, see 7110
- project management activities related to construction, see 7110',
											),
											349 => 
											array (
												'id' => 350,
												'sort_order' => 3530,
												'code' => '42',
												'description' => 'Civil engineering',
												'explanatory_note_inclusion' => 'This division includes general construction for civil engineering objects. It includes new work, repair, additions and alterations, the erection of pre-fabricated structures on the site and also construction of temporary nature.

Included is the construction of heavy constructions such as motorways, streets, bridges, tunnels, railways, airfields, harbours and other water projects, irrigation systems, sewerage systems, industrial facilities, pipelines and electric lines, outdoor sports faciliti',
												'explanatory_note_exclusion' => '',
											),
											350 => 
											array (
												'id' => 351,
												'sort_order' => 3540,
												'code' => '421',
												'description' => 'Construction of roads and railways',
												'explanatory_note_inclusion' => 'See class 4210.',
												'explanatory_note_exclusion' => '',
											),
											351 => 
											array (
												'id' => 352,
												'sort_order' => 3550,
												'code' => '4210',
												'description' => 'Construction of roads and railways',
												'explanatory_note_inclusion' => 'This class includes:
- construction of motorways, streets, roads, other vehicular and pedestrian ways
- surface work on streets, roads, highways, bridges or tunnels:
* asphalt paving of roads
* road painting and other marking
* installation of crash barriers, traffic signs and the like
- construction of bridges, including those for elevated highways 
- construction of tunnels
- construction of railways and subways
- construction of airfield runways',
												'explanatory_note_exclusion' => 'This class excludes:
- installation of street lighting and electrical signals, see 4321
- architectural and engineering activities, see 7110
- project management activities related to civil engineering works, see 7110',
											),
											352 => 
											array (
												'id' => 353,
												'sort_order' => 3560,
												'code' => '422',
												'description' => 'Construction of utility projects',
												'explanatory_note_inclusion' => 'See class 4220.',
												'explanatory_note_exclusion' => '',
											),
											353 => 
											array (
												'id' => 354,
												'sort_order' => 3570,
												'code' => '4220',
												'description' => 'Construction of utility projects',
												'explanatory_note_inclusion' => 'This class includes the construction of distribution lines and related buildings and structures that are integral part of these systems.

This class includes:
- construction of civil engineering constructions for:
* long-distance pipelines, communication and power lines
* urban pipelines, urban communication and power lines; ancillary urban works
* water main and line construction
* irrigation systems (canals)
* reservoirs
- construction of:
* sewer systems, including repair
* sewage ',
												'explanatory_note_exclusion' => 'This class excludes:
- project management activities related to civil engineering works, see 7110',
											),
											354 => 
											array (
												'id' => 355,
												'sort_order' => 3580,
												'code' => '429',
												'description' => 'Construction of other civil engineering projects',
												'explanatory_note_inclusion' => 'See class 4290.',
												'explanatory_note_exclusion' => '',
											),
											355 => 
											array (
												'id' => 356,
												'sort_order' => 3590,
												'code' => '4290',
												'description' => 'Construction of other civil engineering projects',
												'explanatory_note_inclusion' => 'This class includes:
- construction of industrial facilities, except buildings, such as:
* refineries
* chemical plants
- construction of:
* waterways, harbour and river works, pleasure ports (marinas), locks, etc.
* dams and dykes
- dredging of waterways
- construction work, other than buildings, such as:
* outdoor sports facilities

This class also includes:
- land subdivision with land improvement (e.g. adding of roads, utility infrastructure etc.)',
												'explanatory_note_exclusion' => 'This class excludes:
- project management activities related to civil engineering works, see 7110',
											),
											356 => 
											array (
												'id' => 357,
												'sort_order' => 3600,
												'code' => '43',
												'description' => 'Specialized construction activities',
											'explanatory_note_inclusion' => 'This division includes specialized construction activities (special trades), i.e. the construction of parts of buildings and civil engineering works without responsibility for the entire project. These activities are usually specialized in one aspect common to different structures, requiring specialized skills or equipment, such as pile driving, foundation work, carcass work, concrete work, brick laying, stone setting, scaffolding, roof covering, etc. The erection of steel structures is included',
												'explanatory_note_exclusion' => '',
											),
											357 => 
											array (
												'id' => 358,
												'sort_order' => 3610,
												'code' => '431',
												'description' => 'Demolition and site preparation',
												'explanatory_note_inclusion' => 'This group includes activities of preparing a site for subsequent construction activities, including the removal of previously existing structures.',
												'explanatory_note_exclusion' => '',
											),
											358 => 
											array (
												'id' => 359,
												'sort_order' => 3620,
												'code' => '4311',
												'description' => 'Demolition',
												'explanatory_note_inclusion' => 'This class includes:
- demolition or wrecking of buildings and other structures',
												'explanatory_note_exclusion' => '',
											),
											359 => 
											array (
												'id' => 360,
												'sort_order' => 3630,
												'code' => '4312',
												'description' => 'Site preparation',
												'explanatory_note_inclusion' => 'This class includes the preparation of sites for subsequent construction activities.

This class includes:
- clearing of building sites
- earth moving: excavation, landfill, levelling and grading of construction sites, trench digging, rock removal, blasting, etc.
- drilling, boring and core sampling for construction, geophysical, geological or similar purposes

This class also includes:
- site preparation for mining:
* overburden removal and other development and preparation of mineral ',
												'explanatory_note_exclusion' => 'This class excludes:
- drilling of production oil or gas wells, see 0610, 0620
- test drilling and test hole boring for mining operations (other than oil and gas extraction), see 0990
- decontamination of soil, see 3900
- water well drilling, see 4220
- shaft sinking, see 4390
- oil and gas field exploration, geophysical, geological and seismic surveying, see 7110',
											),
											360 => 
											array (
												'id' => 361,
												'sort_order' => 3640,
												'code' => '432',
												'description' => 'Electrical, plumbing and other construction installation activities',
											'explanatory_note_inclusion' => 'This group includes installation activities that support the functioning of a building as such, including installation of electrical systems, plumbing (water, gas and sewage systems), heat and air-conditioning systems, elevators etc.',
												'explanatory_note_exclusion' => '',
											),
											361 => 
											array (
												'id' => 362,
												'sort_order' => 3650,
												'code' => '4321',
												'description' => 'Electrical installation',
												'explanatory_note_inclusion' => 'This class includes the installation of electrical systems in all kinds of buildings and civil engineering structures.

This class includes:
- installation of:
* electrical wiring and fittings
* telecommunications wiring
* computer network and cable television wiring, including fibre optic
* satellite dishes
* lighting systems
* fire alarms
* burglar alarm systems
* street lighting and electrical signals
* airport runway lighting

This class also includes:
- connecting of electric',
												'explanatory_note_exclusion' => 'This class excludes:
- construction of communications and power transmission lines, see 4220
- monitoring or remote monitoring of electronic security alarm systems, such as burglar and fire alarms, including their maintenance, see 8020',
											),
											362 => 
											array (
												'id' => 363,
												'sort_order' => 3660,
												'code' => '4322',
												'description' => 'Plumbing, heat and air-conditioning installation',
												'explanatory_note_inclusion' => 'This class includes the installation of plumbing, heating and air-conditioning systems, including additions, alterations, maintenance and repair.

This class includes:
- installation in buildings or other construction projects of:
* heating systems (electric, gas and oil)
* furnaces, cooling towers
* non-electric solar energy collectors
* plumbing and sanitary equipment
* ventilation, refrigeration or air-conditioning equipment and ducts
* gas fittings
* steam piping
* fire sprinkler ',
												'explanatory_note_exclusion' => 'This class excludes:
- installation of electric baseboard heating, see 4321',
											),
											363 => 
											array (
												'id' => 364,
												'sort_order' => 3670,
												'code' => '4329',
												'description' => 'Other construction installation',
												'explanatory_note_inclusion' => 'This class includes the installation of equipment other than electrical, plumbing, heating and air-conditioning systems or industrial machinery in buildings and civil engineering structures, including maintenance and repair.

This class includes:
- installation in buildings or other construction projects of:
* elevators, escalators
* automated and revolving doors
* lightning conductors
* vacuum cleaning systems
* thermal, sound or vibration insulation',
												'explanatory_note_exclusion' => 'This class excludes:
- installation of industrial machinery, see 3320',
											),
											364 => 
											array (
												'id' => 365,
												'sort_order' => 3680,
												'code' => '433',
												'description' => 'Building completion and finishing',
												'explanatory_note_inclusion' => 'See class 4330.',
												'explanatory_note_exclusion' => '',
											),
											365 => 
											array (
												'id' => 366,
												'sort_order' => 3690,
												'code' => '4330',
												'description' => 'Building completion and finishing',
												'explanatory_note_inclusion' => 'This class includes:
- application in buildings or other construction projects of interior and exterior plaster or stucco, including related lathing materials
- installation of doors (except automated and revolving), windows, door and window frames, of wood or other materials
- installation of fitted kitchens, staircases, shop fittings and the like
- installation of furniture
- interior completion such as ceilings, wooden wall coverings, movable partitions, etc.
- laying, tiling, hanging o',
												'explanatory_note_exclusion' => 'This class excludes:
- painting of roads, see 4210
- installation of automated and revolving doors, see 4329
- general interior cleaning of buildings and other structures, see 8121
- specialized interior and exterior cleaning of buildings, see 8129
- activities of interior decoration designers, see 7410
- assembly of self-standing furniture, see 9524',
											),
											366 => 
											array (
												'id' => 367,
												'sort_order' => 3700,
												'code' => '439',
												'description' => 'Other specialized construction activities',
												'explanatory_note_inclusion' => 'See class 4390.',
												'explanatory_note_exclusion' => '',
											),
											367 => 
											array (
												'id' => 368,
												'sort_order' => 3710,
												'code' => '4390',
												'description' => 'Other specialized construction activities',
												'explanatory_note_inclusion' => 'This class includes:
- construction activities specializing in one aspect common to different kind of structures, requiring specialized skill or equipment:
* construction of foundations, including pile driving
* damp proofing and water proofing works
* de-humidification of buildings
* shaft sinking
* erection of non-self-manufactured steel elements
* steel bending
* bricklaying and stone setting
* roof covering for residential buildings
* scaffolds and work platform erecting and disman',
												'explanatory_note_exclusion' => 'This class excludes:
- renting of construction machinery and equipment without operator, see 7730',
											),
											368 => 
											array (
												'id' => 369,
												'sort_order' => 3720,
												'code' => 'G',
												'description' => 'Wholesale and retail trade; repair of motor vehicles and motorcycles',
											'explanatory_note_inclusion' => 'This section includes wholesale and retail sale (i.e. sale without transformation) of any type of goods and the rendering of services incidental to the sale of these goods. Wholesaling and retailing are the final steps in the distribution of goods. Goods bought and sold are also referred to as merchandise.

Also included in this section are the repair of motor vehicles and motorcycles.

Sale without transformation is considered to include the usual operations (or manipulations) associated wi',
												'explanatory_note_exclusion' => '',
											),
											369 => 
											array (
												'id' => 370,
												'sort_order' => 3730,
												'code' => '45',
												'description' => 'Wholesale and retail trade and repair of motor vehicles and motorcycles',
											'explanatory_note_inclusion' => 'This division includes all activities (except manufacture and renting) related to motor vehicles and motorcycles, including lorries and trucks, such as the wholesale and retail sale of new and second-hand vehicles, the repair and maintenance of vehicles and the wholesale and retail sale of parts and accessories for motor vehicles and motorcycles. Also included are activities of commission agents involved in wholesale or retail sale of vehicles.
This division also includes activities such as was',
												'explanatory_note_exclusion' => '',
											),
											370 => 
											array (
												'id' => 371,
												'sort_order' => 3740,
												'code' => '451',
												'description' => 'Sale of motor vehicles',
												'explanatory_note_inclusion' => 'See class 4510.',
												'explanatory_note_exclusion' => '',
											),
											371 => 
											array (
												'id' => 372,
												'sort_order' => 3750,
												'code' => '4510',
												'description' => 'Sale of motor vehicles',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale and retail sale of new and used vehicles:
* passenger motor vehicles, including specialized passenger motor vehicles such as ambulances and minibuses, etc.
* lorries, trailers and semi-trailers
* camping vehicles such as caravans and motor homes

This class also includes:
- wholesale and retail sale of off-road motor vehicles (jeeps, etc.)
- wholesale and retail sale by commission agents
- car auctions',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale and retail sale of parts and accessories for motor vehicles, see 4530
- renting of motor vehicles with driver, see 4922
- renting of trucks with driver, see 4923
- renting of motor vehicles and trucks without driver, see 7710',
											),
											372 => 
											array (
												'id' => 373,
												'sort_order' => 3760,
												'code' => '452',
												'description' => 'Maintenance and repair of motor vehicles',
												'explanatory_note_inclusion' => 'See class 4520.',
												'explanatory_note_exclusion' => '',
											),
											373 => 
											array (
												'id' => 374,
												'sort_order' => 3770,
												'code' => '4520',
												'description' => 'Maintenance and repair of motor vehicles',
												'explanatory_note_inclusion' => 'This class includes:
- maintenance and repair of motor vehicles:
* mechanical repairs
* electrical repairs
* electronic injection systems repair
* ordinary servicing
* bodywork repair
* repair of motor vehicle parts
* washing, polishing, etc.
* spraying and painting
* repair of screens and windows
* repair of motor vehicle seats
- tyre and tube repair, fitting or replacement
- anti-rust treatment
- installation of parts and accessories not as part of the manufacturing process',
												'explanatory_note_exclusion' => 'This class excludes:
- retreading and rebuilding of tyres, see 2211',
											),
											374 => 
											array (
												'id' => 375,
												'sort_order' => 3780,
												'code' => '453',
												'description' => 'Sale of motor vehicle parts and accessories',
												'explanatory_note_inclusion' => 'See class 4530.',
												'explanatory_note_exclusion' => '',
											),
											375 => 
											array (
												'id' => 376,
												'sort_order' => 3790,
												'code' => '4530',
												'description' => 'Sale of motor vehicle parts and accessories',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale and retail sale of all kinds of parts, components, supplies, tools and accessories for motor vehicles, such as:
* rubber tires and inner tubes for tires
* spark plugs, batteries, lighting equipment and electrical parts',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of automotive fuel, see 4730',
											),
											376 => 
											array (
												'id' => 377,
												'sort_order' => 3800,
												'code' => '454',
												'description' => 'Sale, maintenance and repair of motorcycles and related parts and accessories',
												'explanatory_note_inclusion' => 'See class 4540.',
												'explanatory_note_exclusion' => '',
											),
											377 => 
											array (
												'id' => 378,
												'sort_order' => 3810,
												'code' => '4540',
												'description' => 'Sale, maintenance and repair of motorcycles and related parts and accessories',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale and retail sale of motorcycles, including mopeds
- wholesale and retail sale of parts and accessories for motorcycles (including by commission agents and mail order houses)
- maintenance and repair of motorcycles',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale of bicycles and related parts and accessories, see 4649
- retail sale of bicycles and related parts and accessories, see 4763
- renting of motorcycles, see 7730
- repair and maintenance of bicycles, see 9529',
											),
											378 => 
											array (
												'id' => 379,
												'sort_order' => 3820,
												'code' => '46',
												'description' => 'Wholesale trade, except of motor vehicles and motorcycles',
											'explanatory_note_inclusion' => 'This division includes wholesale trade on own account or on a fee or contract basis (commission trade) related to domestic wholesale trade as well as international wholesale trade (import/export).

Wholesale is the resale (sale without transformation) of new and used goods to retailers, business-to-business trade, such as to industrial, commercial, institutional or professional users, or resale to other wholesalers, or involves acting as an agent or broker in buying goods for, or selling goods',
												'explanatory_note_exclusion' => '',
											),
											379 => 
											array (
												'id' => 380,
												'sort_order' => 3830,
												'code' => '461',
												'description' => 'Wholesale on a fee or contract basis',
												'explanatory_note_inclusion' => 'See class 4610.',
												'explanatory_note_exclusion' => '',
											),
											380 => 
											array (
												'id' => 381,
												'sort_order' => 3840,
												'code' => '4610',
												'description' => 'Wholesale on a fee or contract basis',
												'explanatory_note_inclusion' => 'This class includes:
- activities of commission agents and all other wholesalers who trade on behalf and on the account of others
- activities of those involved in bringing sellers and buyers together or undertaking commercial transactions on behalf of a principal, including on the internet
- such agents involved in the sale of:
* agricultural raw materials, live animals, textile raw materials and semi-finished goods
* fuels, ores, metals and industrial chemicals, including fertilizers
* f',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale trade in own name, see groups 462 to 469
- activities of commission agents for motor vehicles, see 4510
- auctions of motor vehicles, see 4510
- retail sale by non-store commission agents, see 4799
- activities of insurance agents, see 6622
- activities of real estate agents, see 6820',
											),
											381 => 
											array (
												'id' => 382,
												'sort_order' => 3850,
												'code' => '462',
												'description' => 'Wholesale of agricultural raw materials and live animals',
												'explanatory_note_inclusion' => 'See class 4620.',
												'explanatory_note_exclusion' => '',
											),
											382 => 
											array (
												'id' => 383,
												'sort_order' => 3860,
												'code' => '4620',
												'description' => 'Wholesale of agricultural raw materials and live animals',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of grains and seeds
- wholesale of oleaginous fruits
- wholesale of flowers and plants
- wholesale of unmanufactured tobacco
- wholesale of live animals
- wholesale of hides and skins
- wholesale of leather
- wholesale of agricultural material, waste, residues and by-products used for animal feed',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale of textile fibres, see 4669',
											),
											383 => 
											array (
												'id' => 384,
												'sort_order' => 3870,
												'code' => '463',
												'description' => 'Wholesale of food, beverages and tobacco',
												'explanatory_note_inclusion' => 'See class 4630.',
												'explanatory_note_exclusion' => '',
											),
											384 => 
											array (
												'id' => 385,
												'sort_order' => 3880,
												'code' => '4630',
												'description' => 'Wholesale of food, beverages and tobacco',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of fruit and vegetables
- wholesale of dairy products
- wholesale of eggs and egg products
- wholesale of edible oils and fats of animal or vegetable origin
- wholesale of meat and meat products
- wholesale of fishery products
- wholesale of sugar, chocolate and sugar confectionery
- wholesale of bakery products
- wholesale of beverages
- wholesale of coffee, tea, cocoa and spices
- wholesale of tobacco products

This class also includes:
- buying o',
												'explanatory_note_exclusion' => 'This class excludes:
- blending of wine or distilled spirits, see 1101, 1102',
											),
											385 => 
											array (
												'id' => 386,
												'sort_order' => 3890,
												'code' => '464',
												'description' => 'Wholesale of household goods',
												'explanatory_note_inclusion' => 'This group includes the wholesale of household goods, including textiles.',
												'explanatory_note_exclusion' => '',
											),
											386 => 
											array (
												'id' => 387,
												'sort_order' => 3900,
												'code' => '4641',
												'description' => 'Wholesale of textiles, clothing and footwear',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of yarn
- wholesale of fabrics
- wholesale of household linen etc.
- wholesale of haberdashery: needles, sewing thread etc.
- wholesale of clothing, including sports clothes
- wholesale of clothing accessories such as gloves, ties and braces
- wholesale of footwear
- wholesale of fur articles
- wholesale of umbrellas',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale of jewellery and leather goods, see 4649
- wholesale of textile fibres, see 4669',
											),
											387 => 
											array (
												'id' => 388,
												'sort_order' => 3910,
												'code' => '4649',
												'description' => 'Wholesale of other household goods',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of household furniture
- wholesale of household appliances
- wholesale of consumer electronics:
* radio and TV equipment
* CD and DVD players and recorders
* stereo equipment
* video game consoles
- wholesale of lighting equipment
- wholesale of cutlery
- wholesale of china and glassware
- wholesale of woodenware, wickerwork and corkware etc.
- wholesale of pharmaceutical and medical goods
- wholesale of perfumeries, cosmetics and soaps
- wholesale ',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale of blank audio and video tapes, CDs, DVDs, see 4652
- wholesale of radio and TV broadcasting equipment, see 4652
- wholesale of office furniture, see 4659',
											),
											388 => 
											array (
												'id' => 389,
												'sort_order' => 3920,
												'code' => '465',
												'description' => 'Wholesale of machinery, equipment and supplies',
												'explanatory_note_inclusion' => 'This group includes the wholesale of computers, telecommunications equipment, specialized machinery for all kinds of industries and general-purpose machinery.',
												'explanatory_note_exclusion' => '',
											),
											389 => 
											array (
												'id' => 390,
												'sort_order' => 3930,
												'code' => '4651',
												'description' => 'Wholesale of computers, computer peripheral equipment and software',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of computers and computer peripheral equipment
- wholesale of software',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale of electronic parts, see 4652
- wholesale of office machinery and equipment, (except computers and peripheral equipment), see 4659
- wholesale of computer-controlled machinery, see 4659',
											),
											390 => 
											array (
												'id' => 391,
												'sort_order' => 3940,
												'code' => '4652',
												'description' => 'Wholesale of electronic and telecommunications equipment and parts',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of electronic valves and tubes
- wholesale of semiconductor devices
- wholesale of microchips and integrated circuits
- wholesale of printed circuits
- wholesale of blank audio and video tapes and diskettes, magnetic and optical disks (CDs, DVDs)
- wholesale of telephone and communications equipment',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale of recorded audio and video tapes, CDs, DVDs, see 4649
- wholesale of consumer electronics, see 4649
- wholesale of computers and computer peripheral equipment, see 4651',
											),
											391 => 
											array (
												'id' => 392,
												'sort_order' => 3950,
												'code' => '4653',
												'description' => 'Wholesale of agricultural machinery, equipment and supplies',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of agricultural machinery and equipment:
* ploughs, manure spreaders, seeders
* harvesters
* threshers
* milking machines
* poultry-keeping machines, bee-keeping machines
* tractors used in agriculture and forestry

This class also includes:
- lawn mowers however operated',
												'explanatory_note_exclusion' => '',
											),
											392 => 
											array (
												'id' => 393,
												'sort_order' => 3960,
												'code' => '4659',
												'description' => 'Wholesale of other machinery and equipment',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of office machinery and equipment, except computers and computer peripheral equipment
- wholesale of office furniture
- wholesale of transport equipment except motor vehicles, motorcycles and bicycles
- wholesale of production-line robots
- wholesale of wires and switches and other installation equipment for industrial use
- wholesale of other electrical material such as electrical motors, transformers
- wholesale of machine tools of any type and for any m',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale of motor vehicles, trailers and caravans, see 4510
- wholesale of motor vehicle parts, see 4530
- wholesale of motorcycles, see 4540
- wholesale of bicycles, see 4649
- wholesale of computers and peripheral equipment, see 4651
- wholesale of electronic parts and telephone and communications equipment, see 4652',
											),
											393 => 
											array (
												'id' => 394,
												'sort_order' => 3970,
												'code' => '466',
												'description' => 'Other specialized wholesale',
												'explanatory_note_inclusion' => 'This group includes other specialized wholesale activities not classified in other groups of this division. This includes the wholesale of intermediate products, except agricultural, typically not for household use.',
												'explanatory_note_exclusion' => '',
											),
											394 => 
											array (
												'id' => 395,
												'sort_order' => 3980,
												'code' => '4661',
												'description' => 'Wholesale of solid, liquid and gaseous fuels and related products',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of fuels, greases, lubricants, oils such as:
* charcoal, coal, coke, fuel wood, naphtha
* crude petroleum, crude oil, diesel fuel, gasoline, fuel oil, heating oil, kerosene
* liquefied petroleum gases, butane and propane gas
* lubricating oils and greases, refined petroleum products',
												'explanatory_note_exclusion' => '',
											),
											395 => 
											array (
												'id' => 396,
												'sort_order' => 3990,
												'code' => '4662',
												'description' => 'Wholesale of metals and metal ores',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of ferrous and non-ferrous metal ores
- wholesale of ferrous and non-ferrous metals in primary forms
- wholesale of ferrous and non-ferrous semi-finished metal products n.e.c.
- wholesale of gold and other precious metals',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale of metal scrap, see 4669',
											),
											396 => 
											array (
												'id' => 397,
												'sort_order' => 4000,
												'code' => '4663',
												'description' => 'Wholesale of construction materials, hardware, plumbing and heating equipment and supplies',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of wood in the rough
- wholesale of products of primary processing of wood
- wholesale of paint and varnish
- wholesale of construction materials:
* sand, gravel
- wholesale of wallpaper and floor coverings
- wholesale of flat glass
- wholesale of hardware and locks
- wholesale of fittings and fixtures
- wholesale of hot water heaters
- wholesale of sanitary equipment:
* baths, washbasins, toilets and other sanitary porcelain
- wholesale of sanitary ',
												'explanatory_note_exclusion' => '',
											),
											397 => 
											array (
												'id' => 398,
												'sort_order' => 4010,
												'code' => '4669',
												'description' => 'Wholesale of waste and scrap and other products n.e.c.',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of industrial chemicals:
* aniline, printing ink, essential oils, industrial gases, chemical glues, colouring matter, synthetic resin, methanol, paraffin, scents and flavourings, soda, industrial salt, acids and sulphurs, starch derivates etc.
- wholesale of fertilizers and agrochemical products
- wholesale of plastic materials in primary forms
- wholesale of rubber
- wholesale of textile fibres etc.
- wholesale of paper in bulk
- wholesale of precious st',
												'explanatory_note_exclusion' => 'This class excludes:
- collection of household and industrial waste, see group 381
- treatment of waste, not for a further use in an industrial manufacturing process, but with the aim of disposal, see group 382
- processing of waste and scrap and other articles into secondary raw material when a real transformation process is required (the resulting secondary raw material is fit for direct use in an industrial manufacturing process, but is not a final product), see 3830
- dismantling of auto',
											),
											398 => 
											array (
												'id' => 399,
												'sort_order' => 4020,
												'code' => '469',
												'description' => 'Non-specialized wholesale trade',
												'explanatory_note_inclusion' => 'See class 4690.',
												'explanatory_note_exclusion' => '',
											),
											399 => 
											array (
												'id' => 400,
												'sort_order' => 4030,
												'code' => '4690',
												'description' => 'Non-specialized wholesale trade',
												'explanatory_note_inclusion' => 'This class includes:
- wholesale of a variety of goods without any particular specialization',
												'explanatory_note_exclusion' => '',
											),
											400 => 
											array (
												'id' => 401,
												'sort_order' => 4040,
												'code' => '47',
												'description' => 'Retail trade, except of motor vehicles and motorcycles',
											'explanatory_note_inclusion' => 'This division includes the resale (sale without transformation) of new and used goods mainly to the general public for personal or household consumption or utilization, by shops, department stores, stalls, mail-order houses, hawkers and peddlers, consumer cooperatives etc.

Retail trade is classified first by type of sale outlet (retail trade in stores: groups 471 to 477; retail trade not in stores: groups 478 and 479). Retail trade in stores includes the retail sale of used goods (class 4774)',
												'explanatory_note_exclusion' => '',
											),
											401 => 
											array (
												'id' => 402,
												'sort_order' => 4050,
												'code' => '471',
												'description' => 'Retail sale in non-specialized stores',
											'explanatory_note_inclusion' => 'This group includes the retail sale of a variety of product lines in the same unit (non-specialized stores), such as supermarkets or department stores.',
												'explanatory_note_exclusion' => '',
											),
											402 => 
											array (
												'id' => 403,
												'sort_order' => 4060,
												'code' => '4711',
												'description' => 'Retail sale in non-specialized stores with food, beverages or tobacco predominating',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of a large variety of goods of which, however, food products, beverages or tobacco should be predominant, such as:
* retail sale activities of general stores that have, apart from their main sales of food products, beverages or tobacco, several other types of goods such as wearing apparel, furniture, appliances, hardware, cosmetics etc.',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of fuel in combination with food, beverages etc., with fuel sales dominating, see 4730',
											),
											403 => 
											array (
												'id' => 404,
												'sort_order' => 4070,
												'code' => '4719',
												'description' => 'Other retail sale in non-specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of a large variety of goods of which food products, beverages or tobacco are not predominant, such as:
* retail sale activities of department stores carrying a general line of goods, including wearing apparel, furniture, appliances, hardware, cosmetics, jewellery, toys, sports goods etc.',
												'explanatory_note_exclusion' => '',
											),
											404 => 
											array (
												'id' => 405,
												'sort_order' => 4080,
												'code' => '472',
												'description' => 'Retail sale of food, beverages and tobacco in specialized stores',
												'explanatory_note_inclusion' => 'This group includes retail sale in stores specialized in selling food, beverage or tobacco products.',
												'explanatory_note_exclusion' => '',
											),
											405 => 
											array (
												'id' => 406,
												'sort_order' => 4090,
												'code' => '4721',
												'description' => 'Retail sale of food in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of any the following types of goods:
* fresh or preserved fruit and vegetables
* dairy products and eggs
* meat and meat products (including poultry)
* fish, other seafood and products thereof
* bakery products
* sugar confectionery
* other food products',
												'explanatory_note_exclusion' => 'This class excludes:
- manufacturing of bakery products, i.e. baking on premises, see 1071',
											),
											406 => 
											array (
												'id' => 407,
												'sort_order' => 4100,
												'code' => '4722',
												'description' => 'Retail sale of beverages in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of beverages (not for consumption on the premises):
* alcoholic beverages
* non-alcoholic beverages',
												'explanatory_note_exclusion' => '',
											),
											407 => 
											array (
												'id' => 408,
												'sort_order' => 4110,
												'code' => '4723',
												'description' => 'Retail sale of tobacco products in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of tobacco
- retail sale of tobacco products',
												'explanatory_note_exclusion' => '',
											),
											408 => 
											array (
												'id' => 409,
												'sort_order' => 4120,
												'code' => '473',
												'description' => 'Retail sale of automotive fuel in specialized stores',
												'explanatory_note_inclusion' => 'See class 4730.',
												'explanatory_note_exclusion' => '',
											),
											409 => 
											array (
												'id' => 410,
												'sort_order' => 4130,
												'code' => '4730',
												'description' => 'Retail sale of automotive fuel in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of fuel for motor vehicles and motorcycles

This class also includes:
- retail sale of lubricating products and cooling products for motor vehicles',
												'explanatory_note_exclusion' => 'This class excludes:
- wholesale of fuels, see 4661
- retail sale of fuel in combination with food, beverages etc., with food and beverage sales dominating, see 4711
- retail sale of liquefied petroleum gas for cooking or heating, see 4773',
											),
											410 => 
											array (
												'id' => 411,
												'sort_order' => 4140,
												'code' => '474',
												'description' => 'Retail sale of information and communications equipment in specialized stores',
												'explanatory_note_inclusion' => 'This group includes the retail sale of information and communications equipment, such as computers and peripheral equipment, telecommunications equipment and consumer electronics, by specialized stores.',
												'explanatory_note_exclusion' => '',
											),
											411 => 
											array (
												'id' => 412,
												'sort_order' => 4150,
												'code' => '4741',
												'description' => 'Retail sale of computers, peripheral units, software and telecommunications equipment in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of computers
- retail sale of computer peripheral equipment
- retail sale of video game consoles
- retail sale of non-customized software, including video games
- retail sale of telecommunication equipment',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of blank tapes and disks, see 4762',
											),
											412 => 
											array (
												'id' => 413,
												'sort_order' => 4160,
												'code' => '4742',
												'description' => 'Retail sale of audio and video equipment in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of radio and television equipment
- retail sale of stereo equipment
- retail sale of CD and DVD players and recorders',
												'explanatory_note_exclusion' => '',
											),
											413 => 
											array (
												'id' => 414,
												'sort_order' => 4170,
												'code' => '475',
												'description' => 'Retail sale of other household equipment in specialized stores',
												'explanatory_note_inclusion' => 'This group includes the retail sale of household equipment, such as textiles, hardware, carpets, electrical appliances or furniture, in specialized stores.',
												'explanatory_note_exclusion' => '',
											),
											414 => 
											array (
												'id' => 415,
												'sort_order' => 4180,
												'code' => '4751',
												'description' => 'Retail sale of textiles in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of fabrics
- retail sale of knitting yarn
- retail sale of basic materials for rug, tapestry or embroidery making
- retail sale of textiles
- retail sale of haberdashery: needles, sewing thread etc.',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of clothing, see 4771',
											),
											415 => 
											array (
												'id' => 416,
												'sort_order' => 4190,
												'code' => '4752',
												'description' => 'Retail sale of hardware, paints and glass in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of hardware
- retail sale of paints, varnishes and lacquers
- retail sale of flat glass
- retail sale of other building material such as bricks, wood, sanitary equipment
- retail sale of do-it-yourself material and equipment

This class also includes:
- retail sale of lawnmowers, however operated
- retail sale of saunas',
												'explanatory_note_exclusion' => '',
											),
											416 => 
											array (
												'id' => 417,
												'sort_order' => 4200,
												'code' => '4753',
												'description' => 'Retail sale of carpets, rugs, wall and floor coverings in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of carpets and rugs
- retail sale of curtains and net curtains
- retail sale of wallpaper and floor coverings',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of cork floor tiles, see 4752',
											),
											417 => 
											array (
												'id' => 418,
												'sort_order' => 4210,
												'code' => '4759',
												'description' => 'Retail sale of electrical household appliances, furniture, lighting equipment and other household articles in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of household furniture
- retail sale of articles for lighting
- retail sale of household utensils and cutlery, crockery, glassware, china and pottery
- retail sale of wooden, cork and wickerwork goods
- retail sale of household appliances
- retail sale of musical instruments and scores
- retail sale of security systems, such as locking devices, safes, and vaults, without installation or maintenance services
- retail sale of household articles and equipm',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of antiques, see 4774',
											),
											418 => 
											array (
												'id' => 419,
												'sort_order' => 4220,
												'code' => '476',
												'description' => 'Retail sale of cultural and recreation goods in specialized stores',
												'explanatory_note_inclusion' => 'This group includes the retail sale in specialized stores of cultural and recreation goods, such as books, newspapers, music and video recordings, sporting equipment, games and toys.',
												'explanatory_note_exclusion' => '',
											),
											419 => 
											array (
												'id' => 420,
												'sort_order' => 4230,
												'code' => '4761',
												'description' => 'Retail sale of books, newspapers and stationary in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of books of all kinds
- retail sale of newspapers and stationery

This class also includes:
- retail sale of office supplies such as pens, pencils, paper etc.',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of second-hand or antique books, see 4774',
											),
											420 => 
											array (
												'id' => 421,
												'sort_order' => 4240,
												'code' => '4762',
												'description' => 'Retail sale of music and video recordings in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of musical records, audio tapes, compact discs and cassettes
- retail sale of video tapes and DVDs

This class also includes:
- retail sale of blank tapes and discs',
												'explanatory_note_exclusion' => '',
											),
											421 => 
											array (
												'id' => 422,
												'sort_order' => 4250,
												'code' => '4763',
												'description' => 'Retail sale of sporting equipment in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of sports goods, fishing gear, camping goods, boats and bicycles',
												'explanatory_note_exclusion' => '',
											),
											422 => 
											array (
												'id' => 423,
												'sort_order' => 4260,
												'code' => '4764',
												'description' => 'Retail sale of games and toys in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of games and toys, made of all materials',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of video game consoles, see 4741
- retail sale of non-customized software, including video games, see 4741',
											),
											423 => 
											array (
												'id' => 424,
												'sort_order' => 4270,
												'code' => '477',
												'description' => 'Retail sale of other goods in specialized stores',
												'explanatory_note_inclusion' => 'This group includes the sale in specialized stores carrying a particular line of products not included in other parts of the classification, such as clothing, footwear and leather articles, pharmaceutical and medical goods, watches, souvenirs, cleaning materials, weapons, flowers and pets and others. Also included is the retail sale of used goods in specialized stores.',
												'explanatory_note_exclusion' => '',
											),
											424 => 
											array (
												'id' => 425,
												'sort_order' => 4280,
												'code' => '4771',
												'description' => 'Retail sale of clothing, footwear and leather articles in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of articles of clothing
- retail sale of articles of fur
- retail sale of clothing accessories such as gloves, ties, braces etc.
- retail sale of umbrellas
- retail sale of footwear
- retail sale of leather goods
- retail sale of travel accessories of leather and leather substitutes',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of textiles, see 4751',
											),
											425 => 
											array (
												'id' => 426,
												'sort_order' => 4290,
												'code' => '4772',
												'description' => 'Retail sale of pharmaceutical and medical goods, cosmetic and toilet articles in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of pharmaceuticals
- retail sale of medical and orthopaedic goods
- retail sale of perfumery and cosmetic articles',
												'explanatory_note_exclusion' => '',
											),
											426 => 
											array (
												'id' => 427,
												'sort_order' => 4300,
												'code' => '4773',
												'description' => 'Other retail sale of new goods in specialized stores',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of photographic, optical and precision equipment
- activities of opticians
- retail sale of watches, clocks and jewellery
- retail sale of flowers, plants, seeds, fertilizers, pet animals and pet food
- retail sale of souvenirs, craftwork and religious articles
- activities of commercial art galleries
- retail sale of household fuel oil, bottled gas, coal and fuel wood
- retail sale of cleaning materials
- retail sale of weapons and ammunition
- retai',
												'explanatory_note_exclusion' => '',
											),
											427 => 
											array (
												'id' => 428,
												'sort_order' => 4310,
												'code' => '4774',
												'description' => 'Retail sale of second-hand goods',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of second-hand books
- retail sale of other second-hand goods
- retail sale of antiques
- activities of auctioning houses (retail)',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of second-hand motor vehicles, see 4510
- activities of Internet auctions and other non-store auctions (retail), see 4791, 4799
- activities of pawn shops, see 6492',
											),
											428 => 
											array (
												'id' => 429,
												'sort_order' => 4320,
												'code' => '478',
												'description' => 'Retail sale via stalls and markets',
												'explanatory_note_inclusion' => 'This group includes the retail sale of any kind of new or second hand product in a usually movable stall either along a public road or at a fixed marketplace.',
												'explanatory_note_exclusion' => '',
											),
											429 => 
											array (
												'id' => 430,
												'sort_order' => 4330,
												'code' => '4781',
												'description' => 'Retail sale via stalls and markets of food, beverages and tobacco products',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of food, beverages and tobacco products via stalls or markets',
												'explanatory_note_exclusion' => 'This class excludes:
- retail sale of prepared food for immediate consumption (mobile food vendors), see 5610',
											),
											430 => 
											array (
												'id' => 431,
												'sort_order' => 4340,
												'code' => '4782',
												'description' => 'Retail sale via stalls and markets of textiles, clothing and footwear',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of textiles, clothing and footwear via stalls or markets',
												'explanatory_note_exclusion' => '',
											),
											431 => 
											array (
												'id' => 432,
												'sort_order' => 4350,
												'code' => '4789',
												'description' => 'Retail sale via stalls and markets of other goods',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of other goods via stalls or markets, such as:
* carpets and rugs
* books
* games and toys
* household appliances and consumer electronics
* music and video recordings',
												'explanatory_note_exclusion' => '',
											),
											432 => 
											array (
												'id' => 433,
												'sort_order' => 4360,
												'code' => '479',
												'description' => 'Retail trade not in stores, stalls or markets',
												'explanatory_note_inclusion' => 'This group includes retail sale activities by mail order houses, over the Internet, through door-to-door sales, vending machines etc.',
												'explanatory_note_exclusion' => '',
											),
											433 => 
											array (
												'id' => 434,
												'sort_order' => 4370,
												'code' => '4791',
												'description' => 'Retail sale via mail order houses or via Internet',
											'explanatory_note_inclusion' => 'This class includes retail sale activities via mail order houses or via Internet, i.e. retail sale activities where the buyer makes his choice on the basis of advertisements, catalogues, information provided on a website, models or any other means of advertising and places his order by mail, phone or over the Internet (usually through special means provided by a website). The products purchased can be either directly downloaded from the Internet or physically delivered to the customer.

This c',
												'explanatory_note_exclusion' => '',
											),
											434 => 
											array (
												'id' => 435,
												'sort_order' => 4380,
												'code' => '4799',
												'description' => 'Other retail sale not in stores, stalls or markets',
												'explanatory_note_inclusion' => 'This class includes:
- retail sale of any kind of product in any way that is not included in previous classes:
* by direct sales or door-to-door sales persons
* through vending machines etc.
- direct selling of fuel (heating oil, fire wood etc.), delivered directly to the customers premises
- activities of non-store auctions (retail)
- retail sale by (non-store) commission agents',
												'explanatory_note_exclusion' => 'This class excludes:
- delivery of products by stores, see groups 471-477',
											),
											435 => 
											array (
												'id' => 436,
												'sort_order' => 4390,
												'code' => 'H',
												'description' => 'Transportation and storage',
												'explanatory_note_inclusion' => 'This section includes the provision of passenger or freight transport, whether scheduled or not, by rail, pipeline, road, water or air and associated activities such as terminal and parking facilities, cargo handling, storage etc. Included in this section is the renting of transport equipment with driver or operator. Also included are postal and courier activities.

This section excludes maintenance and repair of motor vehicles and other transportation equipment (see classes 4520 and 3315, res',
													'explanatory_note_exclusion' => '',
												),
												436 => 
												array (
													'id' => 437,
													'sort_order' => 4400,
													'code' => '49',
													'description' => 'Land transport and transport via pipelines',
													'explanatory_note_inclusion' => 'This division includes the transport of passengers and freight via road and rail, as well as freight transport via pipelines.',
													'explanatory_note_exclusion' => '',
												),
												437 => 
												array (
													'id' => 438,
													'sort_order' => 4410,
													'code' => '491',
													'description' => 'Transport via railways',
													'explanatory_note_inclusion' => 'This group includes rail transportation of passengers and/or freight using railroad rolling stock on mainline networks, usually spread over an extensive geographic area. Freight rail transport over short-line freight railroads is included here.',
													'explanatory_note_exclusion' => 'This group excludes:
- urban and suburban passenger land transport, see 4921
- related activities such as switching and shunting, see 5221 
- operation of railroad infrastructure, see 5221',
												),
												438 => 
												array (
													'id' => 439,
													'sort_order' => 4420,
													'code' => '4911',
													'description' => 'Passenger rail transport, interurban',
													'explanatory_note_inclusion' => 'This class includes:
- passenger transport by inter-urban railways 
- operation of sleeping cars or dining cars as an integrated operation of railway companies',
													'explanatory_note_exclusion' => 'This class excludes:
- passenger transport by urban and suburban transit systems, see 4921
- passenger terminal activities, see 5221
- operation of sleeping cars or dining cars when operated by separate units, see 5590, 5610',
												),
												439 => 
												array (
													'id' => 440,
													'sort_order' => 4430,
													'code' => '4912',
													'description' => 'Freight rail transport',
													'explanatory_note_inclusion' => 'This class includes:
- freight transport on mainline rail networks as well as short-line freight railroads',
													'explanatory_note_exclusion' => 'This class excludes:
- storage and warehousing, see 5210
- freight terminal activities, see 5221
- cargo handling, see 5224',
												),
												440 => 
												array (
													'id' => 441,
													'sort_order' => 4440,
													'code' => '492',
													'description' => 'Other land transport',
													'explanatory_note_inclusion' => 'This group includes all land-based transport activities other than rail transport. However, rail transport as part of urban or suburban transport systems is included here.',
													'explanatory_note_exclusion' => '',
												),
												441 => 
												array (
													'id' => 442,
													'sort_order' => 4450,
													'code' => '4921',
													'description' => 'Urban and suburban passenger land transport',
													'explanatory_note_inclusion' => 'This class includes:
- land transport of passengers by urban or suburban transport systems. This may include different modes of land transport, such as by motorbus, tramway, streetcar, trolley bus, underground and elevated railways etc. The transport is carried out on scheduled routes normally following a fixed time schedule, entailing the picking up and setting down of passengers at normally fixed stops.

This class also includes:
- town-to-airport or town-to-station lines
- operation of f',
													'explanatory_note_exclusion' => 'This class excludes:
- passenger transport by inter-urban railways, see 4911',
												),
												442 => 
												array (
													'id' => 443,
													'sort_order' => 4460,
													'code' => '4922',
													'description' => 'Other passenger land transport',
													'explanatory_note_inclusion' => 'This class includes:
- other passenger road transport:
* scheduled long-distance bus services
* charters, excursions and other occasional coach services
* taxi operation
* airport shuttles
- operation of telfers (téléphériques), funiculars, ski and cable lifts if not part of urban or suburban transit systems

This class also includes:
- other renting of private cars with driver
- operation of school buses and buses for transport of employees
- passenger transport by man- or animal-dra',
													'explanatory_note_exclusion' => 'This class excludes:
- ambulance transport, see 8690',
												),
												443 => 
												array (
													'id' => 444,
													'sort_order' => 4470,
													'code' => '4923',
													'description' => 'Freight transport by road',
													'explanatory_note_inclusion' => 'This class includes:
- all freight transport operations by road:
* logging haulage
* stock haulage
* refrigerated haulage
* heavy haulage
* bulk haulage, including haulage in tanker trucks
* haulage of automobiles
* transport of waste and waste materials, without collection or disposal

This class also includes:
- furniture removal
- renting of trucks with driver
- freight transport by man or animal-drawn vehicles',
													'explanatory_note_exclusion' => 'This class excludes:
- log hauling within the forest, as part of logging operations, see 0240
- distribution of water by trucks, see 3600
- operation of terminal facilities for handling freight, see 5221
- crating and packing services for transport, see 5229
- post and courier activities, see 5310, 5320
- waste transport as integrated part of waste collection activities, see 3811, 3812',
												),
												444 => 
												array (
													'id' => 445,
													'sort_order' => 4480,
													'code' => '493',
													'description' => 'Transport via pipeline',
													'explanatory_note_inclusion' => 'See class 4930.',
													'explanatory_note_exclusion' => '',
												),
												445 => 
												array (
													'id' => 446,
													'sort_order' => 4490,
													'code' => '4930',
													'description' => 'Transport via pipeline',
													'explanatory_note_inclusion' => 'This class includes:
- transport of gases, liquids, water, slurry and other commodities via pipelines

This class also includes:
- operation of pump stations',
													'explanatory_note_exclusion' => 'This class excludes:
- distribution of natural or manufactured gas, water or steam, see 3520, 3530, 3600
- transport of water, liquids etc. by trucks, see 4923',
												),
												446 => 
												array (
													'id' => 447,
													'sort_order' => 4500,
													'code' => '50',
													'description' => 'Water transport',
													'explanatory_note_inclusion' => 'This division includes the transport of passengers or freight over water, whether scheduled or not. Also included are the operation of towing or pushing boats, excursion, cruise or sightseeing boats, ferries, water taxis etc. Although the location is an indicator for the separation between sea and inland water transport, the deciding factor is the type of vessel used. All transport on sea-going vessels is classified in group 501, while transport using other vessels is classified in group 502.
',
													'explanatory_note_exclusion' => '',
												),
												447 => 
												array (
													'id' => 448,
													'sort_order' => 4510,
													'code' => '501',
													'description' => 'Sea and coastal water transport',
													'explanatory_note_inclusion' => 'This group includes the transport of passengers or freight on vessels designed for operating on sea or coastal waters. Also included is the transport of passengers or freight on great lakes etc. when similar types of vessels are used.',
													'explanatory_note_exclusion' => '',
												),
												448 => 
												array (
													'id' => 449,
													'sort_order' => 4520,
													'code' => '5011',
													'description' => 'Sea and coastal passenger water transport',
													'explanatory_note_inclusion' => 'This class includes:
- transport of passengers over seas and coastal waters, whether scheduled or not:
* operation of excursion, cruise or sightseeing boats
* operation of ferries, water taxis etc.

This class also includes:
- renting of pleasure boats with crew for sea and coastal water transport (e.g. for fishing cruises)',
													'explanatory_note_exclusion' => 'This class excludes:
- restaurant and bar activities on board ships, when provided by separate units, see 5610, 5630
- operation of "floating casinos", see 9200',
												),
												449 => 
												array (
													'id' => 450,
													'sort_order' => 4530,
													'code' => '5012',
													'description' => 'Sea and coastal freight water transport',
													'explanatory_note_inclusion' => 'This class includes:
- transport of freight over seas and coastal waters, whether scheduled or not
- transport by towing or pushing of barges, oil rigs etc.',
													'explanatory_note_exclusion' => 'This class excludes:
- storage of freight, see 5210
- harbour operation and other auxiliary activities such as docking, pilotage, lighterage, vessel salvage, see 5222
- cargo handling, see 5224',
												),
												450 => 
												array (
													'id' => 451,
													'sort_order' => 4540,
													'code' => '502',
													'description' => 'Inland water transport',
													'explanatory_note_inclusion' => 'This group includes the transport of passengers or freight on inland waters, involving vessels that are not suitable for sea transport.',
													'explanatory_note_exclusion' => '',
												),
												451 => 
												array (
													'id' => 452,
													'sort_order' => 4550,
													'code' => '5021',
													'description' => 'Inland passenger water transport',
													'explanatory_note_inclusion' => 'This class includes:
- transport of passenger via rivers, canals, lakes and other inland waterways, including inside harbours and ports

This class also includes:
- renting of pleasure boats with crew for inland water transport',
													'explanatory_note_exclusion' => '',
												),
												452 => 
												array (
													'id' => 453,
													'sort_order' => 4560,
													'code' => '5022',
													'description' => 'Inland freight water transport',
													'explanatory_note_inclusion' => 'This class includes:
- transport of freight via rivers, canals, lakes and other inland waterways, including inside harbours and ports',
													'explanatory_note_exclusion' => '',
												),
												453 => 
												array (
													'id' => 454,
													'sort_order' => 4570,
													'code' => '51',
													'description' => 'Air transport',
													'explanatory_note_inclusion' => 'This division includes the transport of passengers or freight by air or via space.

This division excludes the repair of aircraft or aircraft engines (see class 3315) and support activities, such as the operation of airports, (see class 5223). This division also excludes activities that make use of aircraft, but not for the purpose of transportation, such as crop spraying (see class 0161), aerial advertising (see class 7310) or aerial photography (see class 7420).',
													'explanatory_note_exclusion' => '',
												),
												454 => 
												array (
													'id' => 455,
													'sort_order' => 4580,
													'code' => '511',
													'description' => 'Passenger air transport',
													'explanatory_note_inclusion' => 'See class 5110.',
													'explanatory_note_exclusion' => '',
												),
												455 => 
												array (
													'id' => 456,
													'sort_order' => 4590,
													'code' => '5110',
													'description' => 'Passenger air transport',
													'explanatory_note_inclusion' => 'This class includes:
- transport of passengers by air over regular routes and on regular schedules
- charter flights for passengers
- scenic and sightseeing flights

This class also includes:
- renting of air-transport equipment with operator for the purpose of passenger transportation
- general aviation activities, such as:
* transport of passengers by aero clubs for instruction or pleasure',
													'explanatory_note_exclusion' => '',
												),
												456 => 
												array (
													'id' => 457,
													'sort_order' => 4600,
													'code' => '512',
													'description' => 'Freight air transport',
													'explanatory_note_inclusion' => 'See class 5120.',
													'explanatory_note_exclusion' => '',
												),
												457 => 
												array (
													'id' => 458,
													'sort_order' => 4610,
													'code' => '5120',
													'description' => 'Freight air transport',
													'explanatory_note_inclusion' => 'This class includes:
- transport freight by air over regular routes and on regular schedules
- non-scheduled transport of freight by air
- launching of satellites and space vehicles
- space transport

This class also includes:
- renting of air-transport equipment with operator for the purpose of freight transportation',
													'explanatory_note_exclusion' => '',
												),
												458 => 
												array (
													'id' => 459,
													'sort_order' => 4620,
													'code' => '52',
													'description' => 'Warehousing and support activities for transportation',
												'explanatory_note_inclusion' => 'This division includes warehousing and support activities for transportation, such as operating of transport infrastructure (e.g. airports, harbours, tunnels, bridges, etc.), the activities of transport agencies and cargo handling.',
													'explanatory_note_exclusion' => '',
												),
												459 => 
												array (
													'id' => 460,
													'sort_order' => 4630,
													'code' => '521',
													'description' => 'Warehousing and storage',
													'explanatory_note_inclusion' => 'See class 5210.',
													'explanatory_note_exclusion' => '',
												),
												460 => 
												array (
													'id' => 461,
													'sort_order' => 4640,
													'code' => '5210',
													'description' => 'Warehousing and storage',
													'explanatory_note_inclusion' => 'This class includes:
- operation of storage and warehouse facilities for all kind of goods:
* operation of grain silos, general merchandise warehouses, refrigerated warehouses, storage tanks etc.

This class also includes:
- storage of goods in foreign trade zones
- blast freezing',
													'explanatory_note_exclusion' => 'This class excludes:
- parking facilities for motor vehicles, see 5221
- operation of self storage facilities, see 6810
- renting of vacant space, see 6810',
												),
												461 => 
												array (
													'id' => 462,
													'sort_order' => 4650,
													'code' => '522',
													'description' => 'Support activities for transportation',
													'explanatory_note_inclusion' => 'This group includes activities supporting the transport of passengers or freight, such as operation of parts of the transport infrastructure or activities related to handling freight immediately before or after transport or between transport segments. The operation and maintenance of all transport facilities is included.',
													'explanatory_note_exclusion' => '',
												),
												462 => 
												array (
													'id' => 463,
													'sort_order' => 4660,
													'code' => '5221',
													'description' => 'Service activities incidental to land transportation',
													'explanatory_note_inclusion' => 'This class includes:
- activities related to land transport of passengers, animals or freight:
* operation of terminal facilities such as railway stations, bus stations, stations for the handling of goods
* operation of railroad infrastructure
* operation of roads, bridges, tunnels, car parks or garages, bicycle parkings
- switching and shunting
- towing and road side assistance

This class also includes:
- liquefaction of gas for transportation purposes',
													'explanatory_note_exclusion' => 'This class excludes:
- cargo handling, see 5224',
												),
												463 => 
												array (
													'id' => 464,
													'sort_order' => 4670,
													'code' => '5222',
													'description' => 'Service activities incidental to water transportation',
													'explanatory_note_inclusion' => 'This class includes:
- activities related to water transport of passengers, animals or freight:
* operation of terminal facilities such as harbours and piers
* operation of waterway locks etc.
* navigation, pilotage and berthing activities
* lighterage, salvage activities
* lighthouse activities',
													'explanatory_note_exclusion' => 'This class excludes:
- cargo handling, see 5224
- operation of marinas, see 9329',
												),
												464 => 
												array (
													'id' => 465,
													'sort_order' => 4680,
													'code' => '5223',
													'description' => 'Service activities incidental to air transportation',
													'explanatory_note_inclusion' => 'This class includes:
- activities related to air transport of passengers, animals or freight:
* operation of terminal facilities such as airway terminals etc.
* airport and air-traffic-control activities
* ground service activities on airfields etc.

This class also includes:
- firefighting and fire-prevention services at airports',
													'explanatory_note_exclusion' => 'This class excludes:
- cargo handling, see 5224
- operation of flying schools, see 8530, 8549',
												),
												465 => 
												array (
													'id' => 466,
													'sort_order' => 4690,
													'code' => '5224',
													'description' => 'Cargo handling',
													'explanatory_note_inclusion' => 'This class includes:
- loading and unloading of goods or passengers\' luggage irrespective of the mode of transport used for transportation
- stevedoring
- loading and unloading of freight railway cars',
													'explanatory_note_exclusion' => 'This class excludes:
- operation of terminal facilities, see 5221, 5222 and 5223',
												),
												466 => 
												array (
													'id' => 467,
													'sort_order' => 4700,
													'code' => '5229',
													'description' => 'Other transportation support activities',
													'explanatory_note_inclusion' => 'This class includes:
- forwarding of freight
- arranging or organizing of transport operations by rail, road, sea or air
- organization of group and individual consignments (including pickup and delivery of goods and grouping of consignments)
- logistics activities, i.e. planning, designing and supporting operations of transportation, warehousing and distribution
- issue and procurement of transport documents and waybills
- activities of customs agents
- activities of sea-freight forwarde',
													'explanatory_note_exclusion' => 'This class excludes:
- courier activities, see 5320
- provision of motor, marine, aviation and transport insurance, see 6512
- activities of travel agencies, see 7911
- activities of tour operators, see 7912
- tourist assistance activities, see 7990',
												),
												467 => 
												array (
													'id' => 468,
													'sort_order' => 4710,
													'code' => '53',
													'description' => 'Postal and courier activities',
													'explanatory_note_inclusion' => 'This division includes postal and courier activities, such as pickup, transport and delivery of letters and parcels under various arrangements. Local delivery and messenger services are also included.',
													'explanatory_note_exclusion' => '',
												),
												468 => 
												array (
													'id' => 469,
													'sort_order' => 4720,
													'code' => '531',
													'description' => 'Postal activities',
													'explanatory_note_inclusion' => 'See class 5310.',
													'explanatory_note_exclusion' => '',
												),
												469 => 
												array (
													'id' => 470,
													'sort_order' => 4730,
													'code' => '5310',
													'description' => 'Postal activities',
												'explanatory_note_inclusion' => 'This class includes the activities of postal services operating under a universal service obligation. The activities include use of the universal service infrastructure, including retail locations, sorting and processing facilities, and carrier routes to pickup and deliver the mail. The delivery can include letter-post, i.e. letters, postcards, printed papers (newspaper, periodicals, advertising items, etc.), small packets, goods or documents. Also included are other services necessary to suppor',
													'explanatory_note_exclusion' => 'This class excludes:
- postal giro, postal savings activities and money order activities, see 6419',
												),
												470 => 
												array (
													'id' => 471,
													'sort_order' => 4740,
													'code' => '532',
													'description' => 'Courier activities',
													'explanatory_note_inclusion' => 'See class 5320.',
													'explanatory_note_exclusion' => '',
												),
												471 => 
												array (
													'id' => 472,
													'sort_order' => 4750,
													'code' => '5320',
													'description' => 'Courier activities',
													'explanatory_note_inclusion' => 'This class includes courier activities not operating under a universal service obligation.

This class includes:
- pickup, sorting, transport and delivery (domestic or international) of letter-post and (mail-type) parcels and packages by firms not operating under a universal service obligation. One or more modes of transport may be involved and the activity may be carried out with either self-owned (private) transport or via public transport.
- distribution and delivery of mail and parcels
',
													'explanatory_note_exclusion' => 'This class excludes:
- transport of freight, see (according to mode of transport) 4912, 4923, 5012, 5022, 5120',
												),
												472 => 
												array (
													'id' => 473,
													'sort_order' => 4760,
													'code' => 'I',
													'description' => 'Accommodation and food service activities',
													'explanatory_note_inclusion' => 'This section includes the provision of short-stay accommodation for visitors and other travellers and the provision of complete meals and drinks fit for immediate consumption. The amount and type of supplementary services provided within this section can vary widely.

This section excludes the provision of long-term accommodation as primary residences, which is classified in Real estate activities (section L). Also excluded is the preparation of food or drinks that are either not fit for immed',
													'explanatory_note_exclusion' => '',
												),
												473 => 
												array (
													'id' => 474,
													'sort_order' => 4770,
													'code' => '55',
													'description' => 'Accommodation',
													'explanatory_note_inclusion' => 'This division includes the provision of short-stay accommodation for visitors and other travellers. Also included is the provision of longer-term accommodation for students, workers and similar individuals. Some units may provide only accommodation while others provide a combination of accommodation, meals and/or recreational facilities. 

This division excludes activities related to the provision of long-term primary residences in facilities such as apartments typically leased on a monthly or',
													'explanatory_note_exclusion' => '',
												),
												474 => 
												array (
													'id' => 475,
													'sort_order' => 4780,
													'code' => '551',
													'description' => 'Short term accommodation activities',
													'explanatory_note_inclusion' => 'See class 5510.',
													'explanatory_note_exclusion' => '',
												),
												475 => 
												array (
													'id' => 476,
													'sort_order' => 4790,
													'code' => '5510',
													'description' => 'Short term accommodation activities',
													'explanatory_note_inclusion' => 'This class includes the provision of accommodation, typically on a daily or weekly basis, principally for short stay by visitors. This includes the provision of furnished accommodation in guest rooms and suites or complete self-contained units with kitchens, with or without daily or other regular housekeeping services, and may often include a range of additional services such as food and beverage services, parking, laundry services, swimming pools and exercise rooms, recreational facilities and ',
													'explanatory_note_exclusion' => 'This class excludes:
- provision of homes and furnished or unfurnished flats or apartments for more permanent use, typically on a monthly or annual basis, see division 68',
												),
												476 => 
												array (
													'id' => 477,
													'sort_order' => 4800,
													'code' => '552',
													'description' => 'Camping grounds, recreational vehicle parks and trailer parks',
													'explanatory_note_inclusion' => 'See class 5520.',
													'explanatory_note_exclusion' => '',
												),
												477 => 
												array (
													'id' => 478,
													'sort_order' => 4810,
													'code' => '5520',
													'description' => 'Camping grounds, recreational vehicle parks and trailer parks',
													'explanatory_note_inclusion' => 'This class includes:
- provision of accommodation in campgrounds, trailer parks, recreational camps and fishing and hunting camps for short stay visitors
- provision of space and facilities for recreational vehicles

This class also includes accommodation provided by:
- protective shelters or plain bivouac facilities for placing tents and/or sleeping bags',
													'explanatory_note_exclusion' => '',
												),
												478 => 
												array (
													'id' => 479,
													'sort_order' => 4820,
													'code' => '559',
													'description' => 'Other accommodation',
													'explanatory_note_inclusion' => 'See class 5590.',
													'explanatory_note_exclusion' => '',
												),
												479 => 
												array (
													'id' => 480,
													'sort_order' => 4830,
													'code' => '5590',
													'description' => 'Other accommodation',
												'explanatory_note_inclusion' => 'This class includes the provision of temporary or longer-term accommodation in single or shared rooms or dormitories for students, migrant (seasonal) workers and other individuals. 

This class includes accommodation provided by:
- student residences
- school dormitories
- workers hostels 
- rooming and boarding houses
- railway sleeping cars',
													'explanatory_note_exclusion' => '',
												),
												480 => 
												array (
													'id' => 481,
													'sort_order' => 4840,
													'code' => '56',
													'description' => 'Food and beverage service activities',
													'explanatory_note_inclusion' => 'This division includes food and beverage serving activities providing complete meals or drinks fit for immediate consumption, whether in traditional restaurants, self-service or take-away restaurants, whether as permanent or temporary stands with or without seating. Decisive is the fact that meals fit for immediate consumption are offered, not the kind of facility providing them.

Excluded is the production of meals not fit for immediate consumption or not planned to be consumed immediately or',
													'explanatory_note_exclusion' => '',
												),
												481 => 
												array (
													'id' => 482,
													'sort_order' => 4850,
													'code' => '561',
													'description' => 'Restaurants and mobile food service activities',
													'explanatory_note_inclusion' => 'See class 5610.',
													'explanatory_note_exclusion' => '',
												),
												482 => 
												array (
													'id' => 483,
													'sort_order' => 4860,
													'code' => '5610',
													'description' => 'Restaurants and mobile food service activities',
													'explanatory_note_inclusion' => 'This class includes the provision of food services to customers, whether they are served while seated or serve themselves from a display of items, whether they eat the prepared meals on the premises, take them out or have them delivered. This includes the preparation and serving of meals for immediate consumption from motorized vehicles or non-motorized carts.

This class includes activities of:
- restaurants
- cafeterias
- fast-food restaurants
- pizza delivery
- take-out eating places
',
													'explanatory_note_exclusion' => 'This class excludes:
- concession operation of eating facilities, see 5629',
												),
												483 => 
												array (
													'id' => 484,
													'sort_order' => 4870,
													'code' => '562',
													'description' => 'Event catering and other food service activities',
													'explanatory_note_inclusion' => 'This group includes catering activities for individual events or for a specified period of time and the operation of food concessions, such as at sports or similar facilities.',
													'explanatory_note_exclusion' => '',
												),
												484 => 
												array (
													'id' => 485,
													'sort_order' => 4880,
													'code' => '5621',
													'description' => 'Event catering',
													'explanatory_note_inclusion' => 'This class includes the provision of food services based on contractual arrangements with the customer, at the location specified by the customer, for a specific event.

This class includes:
- event catering',
													'explanatory_note_exclusion' => 'This class excludes:
- manufacture of perishable food items for resale, see 1079
- retail sale of perishable food items, see division 47',
												),
												485 => 
												array (
													'id' => 486,
													'sort_order' => 4890,
													'code' => '5629',
													'description' => 'Other food service activities',
													'explanatory_note_inclusion' => 'This class includes industrial catering, i.e. the provision of food services based on contractual arrangements with the customer, for a specific period of time. 
Also included is the operation of food concessions at sports and similar facilities. The food is often prepared in a central unit.

This class includes:
- activities of food service contractors (e.g. for transportation companies)
- operation of food concessions at sports and similar facilities
- operation of canteens or cafeterias',
													'explanatory_note_exclusion' => 'This class excludes:
- manufacture of perishable food items for resale, see 1079
- retail sale of perishable food items, see division 47',
												),
												486 => 
												array (
													'id' => 487,
													'sort_order' => 4930,
													'code' => '563',
													'description' => 'Beverage serving activities',
													'explanatory_note_inclusion' => 'See class 5630.',
													'explanatory_note_exclusion' => '',
												),
												487 => 
												array (
													'id' => 488,
													'sort_order' => 4940,
													'code' => '5630',
													'description' => 'Beverage serving activities',
													'explanatory_note_inclusion' => 'This class includes the preparation and serving of beverages for immediate consumption on the premises.

This class includes activities of:
- bars
- taverns
- cocktail lounges
- discotheques (with beverage serving predominant)
- beer parlors and pubs
- coffee shops
- fruit juice bars
- mobile beverage vendors',
													'explanatory_note_exclusion' => 'This class excludes:
- reselling packaged/prepared beverages, see 4711, 4722, 4781, 4799
- operation of discotheques and dance floors without beverage serving, see 9329',
												),
												488 => 
												array (
													'id' => 489,
													'sort_order' => 4950,
													'code' => 'J',
													'description' => 'Information and communication',
													'explanatory_note_inclusion' => 'This section includes the production and distribution of information and cultural products, the provision of the means to transmit or distribute these products, as well as data or communications, information technology activities and the processing of data and other information service activities.

The main components of this section are publishing activities (division 58), including software publishing, motion picture and sound recording activities (division 59), radio and TV broadcasting and',
													'explanatory_note_exclusion' => '',
												),
												489 => 
												array (
													'id' => 490,
													'sort_order' => 4960,
													'code' => '58',
													'description' => 'Publishing activities',
													'explanatory_note_inclusion' => 'This division includes the publishing of books, brochures, leaflets, dictionaries, encyclopaedias, atlases, maps and charts; publishing of newspapers, journals and periodicals; directory and mailing list and other publishing, as well as software publishing.

Publishing includes the acquisition of copyrights to content (information products) and making this content available to the general public by engaging in (or arranging for) the reproduction and distribution of this content in various form',
													'explanatory_note_exclusion' => '',
												),
												490 => 
												array (
													'id' => 491,
													'sort_order' => 4970,
													'code' => '581',
													'description' => 'Publishing of books, periodicals and other publishing activities',
													'explanatory_note_inclusion' => 'This group includes activities of publishing books, newspapers, magazines and other periodicals, directories and mailing lists, and other works such as photos, engravings, postcards, timetables, forms, posters and reproductions of works of art. These works are characterized by the intellectual creativity required in their development and are usually protected by copyright.',
													'explanatory_note_exclusion' => '',
												),
												491 => 
												array (
													'id' => 492,
													'sort_order' => 4980,
													'code' => '5811',
													'description' => 'Book publishing',
												'explanatory_note_inclusion' => 'This class includes the activities of publishing books in print, electronic (CD, electronic displays etc.) or audio form or on the Internet.

This class includes:
- publishing of books, brochures, leaflets and similar publications, including publishing of dictionaries and encyclopedias
- publishing of atlases, maps and charts
- publishing of audio books
- publishing of encyclopedias etc. on CD-ROM',
													'explanatory_note_exclusion' => 'This class excludes:
- production of globes, see 3290
- publishing of advertising material, see 5819
- publishing of music and sheet books, see 5920
- activities of independent authors, see 9000',
												),
												492 => 
												array (
													'id' => 493,
													'sort_order' => 4990,
													'code' => '5812',
													'description' => 'Publishing of directories and mailing lists',
												'explanatory_note_inclusion' => 'This class includes the publishing of lists of facts/information (databases) that are protected in their form, but not in their content. These lists can be published in printed or electronic form.

This class includes:
- publishing of mailing lists
- publishing of telephone books
- publishing of other directories and compilations, such as case law, pharmaceutical compendia etc.',
													'explanatory_note_exclusion' => '',
												),
												493 => 
												array (
													'id' => 494,
													'sort_order' => 5000,
													'code' => '5813',
													'description' => 'Publishing of newspapers, journals and periodicals',
													'explanatory_note_inclusion' => 'This class includes:
- publishing of newspapers, including advertising newspapers
- publishing of periodicals and other journals, including publishing of radio and television schedules

Publishing can be done in print or electronic form, including on the Internet.',
													'explanatory_note_exclusion' => '',
												),
												494 => 
												array (
													'id' => 495,
													'sort_order' => 5010,
													'code' => '5819',
													'description' => 'Other publishing activities',
													'explanatory_note_inclusion' => 'This class includes:
- publishing (including on-line) of:
* catalogs
* photos, engravings and postcards
* greeting cards
* forms
* posters, reproduction of works of art
* advertising material
* other printed matter
- on-line publishing of statistics or other information',
													'explanatory_note_exclusion' => 'This class excludes:
- retail sale of software, see 4741
- publishing of advertising newspapers, see 5813
- on-line provision of software (application hosting and application service provisioning), see 6311',
												),
												495 => 
												array (
													'id' => 496,
													'sort_order' => 5020,
													'code' => '582',
													'description' => 'Software publishing',
													'explanatory_note_inclusion' => 'See class 5820.',
													'explanatory_note_exclusion' => '',
												),
												496 => 
												array (
													'id' => 497,
													'sort_order' => 5030,
													'code' => '5820',
													'description' => 'Software publishing',
													'explanatory_note_inclusion' => 'This class includes:
- publishing of ready-made (non-customized) software:
* operating systems
* business and other applications
* computer games for all platforms',
													'explanatory_note_exclusion' => 'This class excludes:
- reproduction of software, see 1820 
- retail sale of non-customized software, see 4741
- production of software not associated with publishing, see 6201
- on-line provision of software (application hosting and application service provisioning), see 6311',
												),
												497 => 
												array (
													'id' => 498,
													'sort_order' => 5040,
													'code' => '59',
													'description' => 'Motion picture, video and television programme production, sound recording and music publishing activities',
													'explanatory_note_inclusion' => 'This division includes production of theatrical and non-theatrical motion pictures whether on film, videotape or disc for direct projection in theatres or for broadcasting on television; supporting activities such as film editing, cutting, dubbing etc.; distribution of motion pictures and other film productions to other industries; as well as motion picture or other film productions projection. Also included is the buying and selling of distribution rights for motion pictures or other film produ',
													'explanatory_note_exclusion' => '',
												),
												498 => 
												array (
													'id' => 499,
													'sort_order' => 5050,
													'code' => '591',
													'description' => 'Motion picture, video and television programme activities',
												'explanatory_note_inclusion' => 'This group includes production of theatrical and non-theatrical motion pictures whether on film, videotape, DVD or other media, including digital distribution, for direct projection in theatres or for broadcasting on television; supporting activities such as film editing, cutting, dubbing etc.; distribution of motion pictures or other film productions (video tapes, DVDs, etc) to other industries; as well as their projection. Buying and selling of motion picture or any other film production distr',
													'explanatory_note_exclusion' => '',
												),
												499 => 
												array (
													'id' => 500,
													'sort_order' => 5060,
													'code' => '5911',
													'description' => 'Motion picture, video and television programme production activities',
													'explanatory_note_inclusion' => 'This class includes:
- production of motion pictures, videos, television programmes or television commercials',
													'explanatory_note_exclusion' => 'This class excludes:
- film duplicating (except reproduction of motion picture film for theatrical distribution) as well as reproduction of audio and video tapes, CDs or DVDs from master copies, see 1820
- wholesale of recorded video tapes, CDs, DVDs, see 4649
- retail trade of video tapes, CDs, DVDs, see 4762
- post-production activities, see 5912
- reproduction of motion picture film for theatrical distribution, see 5912
- sound recording and recording of books on tape, see 5920
- creat',
												),
											));
		\DB::table('isic_titles')->insert(array (
			0 => 
			array (
				'id' => 501,
				'sort_order' => 5070,
				'code' => '5912',
				'description' => 'Motion picture, video and television programme post-production activities',
				'explanatory_note_inclusion' => 'This class includes:
- post-production activities such as:
* editing, titling, subtitling, credits
* closed captioning
* computer-produced graphics, animation and special effects
* film/tape transfers
- activities of motion picture film laboratories and activities of special laboratories for animated films:
* developing and processing motion picture film
* reproduction of motion picture film for theatrical distribution

This class also includes:
- activities of stock footage film libr',
				'explanatory_note_exclusion' => 'This class excludes:
- film duplicating (except reproduction of motion picture film for theatrical distribution) as well as reproduction of audio and video tapes, CDs or DVDs from master copies, see 1820
- wholesale of recorded video tapes, CDs, DVDs, see 4649
- retail trade of video tapes, CDs, DVDs, see 4762
- film processing other than for the motion picture industry, see 7420
- renting of video tapes, DVDs to the general public, see 7722
- activities of own account actors, cartoonists,',
			),
			1 => 
			array (
				'id' => 502,
				'sort_order' => 5080,
				'code' => '5913',
				'description' => 'Motion picture, video and television programme distribution activities',
				'explanatory_note_inclusion' => 'This class includes:
- distributing film, video tapes, DVDs and similar productions to motion picture theatres, television networks and stations and exhibitors

This class also includes:
- acquiring film, video tape and DVD distribution rights',
				'explanatory_note_exclusion' => 'This class excludes:
- film duplicating (except reproduction of motion picture film for theatrical distribution) as well as reproduction of audio and video tapes, CDs or DVDs from master copies, see 1820
- reproduction of motion picture film for theatrical distribution, see 5912',
			),
			2 => 
			array (
				'id' => 503,
				'sort_order' => 5090,
				'code' => '5914',
				'description' => 'Motion picture projection activities',
				'explanatory_note_inclusion' => 'This class includes:
- motion picture or videotape projection in cinemas, in the open air or in other projection facilities
- activities of cine-clubs',
				'explanatory_note_exclusion' => '',
			),
			3 => 
			array (
				'id' => 504,
				'sort_order' => 5100,
				'code' => '592',
				'description' => 'Sound recording and music publishing activities',
				'explanatory_note_inclusion' => 'See class 5920.',
				'explanatory_note_exclusion' => '',
			),
			4 => 
			array (
				'id' => 505,
				'sort_order' => 5110,
				'code' => '5920',
				'description' => 'Sound recording and music publishing activities',
				'explanatory_note_inclusion' => 'This class includes:
- production of original (sound) master recordings, such as tapes, CDs
- sound recording service activities in a studio or elsewhere, including the production of taped (i.e. non-live) radio programming, audio for film, television etc.
- music publishing, i.e. activities of:
* acquiring and registering copyrights for musical compositions
* promoting, authorizing and using these compositions in recordings, radio, television, motion pictures, live performances, print and o',
				'explanatory_note_exclusion' => 'This class excludes:
- reproduction from master copies of music or other sound recordings, see 1820
- wholesale of recorded audio tapes and disks, see 4649',
			),
			5 => 
			array (
				'id' => 506,
				'sort_order' => 5120,
				'code' => '60',
				'description' => 'Programming and broadcasting activities',
				'explanatory_note_inclusion' => 'This division includes the activities of creating content or acquiring the right to distribute content and subsequently broadcasting that content, such as radio, television and data programs of entertainment, news, talk, and the like. Also included is data broadcasting, typically integrated with radio or TV broadcasting. The broadcasting can be performed using different technologies, over-the-air, via satellite, via a cable network or via Internet. This division also includes the production of p',
				'explanatory_note_exclusion' => '',
			),
			6 => 
			array (
				'id' => 507,
				'sort_order' => 5130,
				'code' => '601',
				'description' => 'Radio broadcasting',
				'explanatory_note_inclusion' => 'See class 6010.',
				'explanatory_note_exclusion' => '',
			),
			7 => 
			array (
				'id' => 508,
				'sort_order' => 5140,
				'code' => '6010',
				'description' => 'Radio broadcasting',
				'explanatory_note_inclusion' => 'This class includes:
- broadcasting audio signals through radio broadcasting studios and facilities for the transmission of aural programming to the public, to affiliates or to subscribers

This class also includes:
- activities of radio networks, i.e. assembling and transmitting aural programming to the affiliates or subscribers via over-the-air broadcasts, cable or satellite
- radio broadcasting activities over the Internet (Internet radio stations)
- data broadcasting integrated with ra',
				'explanatory_note_exclusion' => 'This class excludes:
- production of taped radio programming, see 5920',
			),
			8 => 
			array (
				'id' => 509,
				'sort_order' => 5150,
				'code' => '602',
				'description' => 'Television programming and broadcasting activities',
				'explanatory_note_inclusion' => 'See class 6020.',
				'explanatory_note_exclusion' => '',
			),
			9 => 
			array (
				'id' => 510,
				'sort_order' => 5160,
				'code' => '6020',
				'description' => 'Television programming and broadcasting activities',
				'explanatory_note_inclusion' => 'This class includes:
- creation of a complete television channel programme, from purchased programme components (e.g. movies, documentaries etc.), self produced programme components (e.g. local news, live reports) or a combination thereof

This complete television programme can be either broadcast by the producing unit or produced for transmission by third party distributors, such as cable companies or satellite television providers.
The programming may be of a general or specialized nature ',
				'explanatory_note_exclusion' => 'This class excludes:
- production of television programme elements (e.g. movies, documentaries, commercials), see 5911
- assembly of a package of channels and distribution of that package via cable or satellite to viewers, see division 61',
			),
			10 => 
			array (
				'id' => 511,
				'sort_order' => 5180,
				'code' => '61',
				'description' => 'Telecommunications',
				'explanatory_note_inclusion' => 'This division includes the activities of providing telecommunications and related service activities, i.e. transmitting voice, data, text, sound and video. The transmission facilities that carry out these activities may be based on a single technology or a combination of technologies. The commonality of activities classified in this division is the transmission of content, without being involved in its creation. The breakdown in this division is based on the type of infrastructure operated.
In ',
				'explanatory_note_exclusion' => '',
			),
			11 => 
			array (
				'id' => 512,
				'sort_order' => 5190,
				'code' => '611',
				'description' => 'Wired telecommunications activities',
				'explanatory_note_inclusion' => 'See class 6110.',
				'explanatory_note_exclusion' => '',
			),
			12 => 
			array (
				'id' => 513,
				'sort_order' => 5200,
				'code' => '6110',
				'description' => 'Wired telecommunications activities',
				'explanatory_note_inclusion' => 'This class includes:
- operating, maintaining or providing access to facilities for the transmission of voice, data, text, sound and video using a wired telecommunications infrastructure, including:
* operating and maintaining switching and transmission facilities to provide point-to-point communications via landlines, microwave or a combination of landlines and satellite linkups
* operating of cable distribution systems (e.g. for distribution of data and television signals)
* furnishing tel',
				'explanatory_note_exclusion' => 'This class excludes:
- telecommunications resellers, see 6190',
			),
			13 => 
			array (
				'id' => 514,
				'sort_order' => 5210,
				'code' => '612',
				'description' => 'Wireless telecommunications activities',
				'explanatory_note_inclusion' => 'See class 6120.',
				'explanatory_note_exclusion' => '',
			),
			14 => 
			array (
				'id' => 515,
				'sort_order' => 5220,
				'code' => '6120',
				'description' => 'Wireless telecommunications activities',
				'explanatory_note_inclusion' => 'This class includes:
- operating, maintaining or providing access to facilities for the transmission of voice, data, text, sound, and video using a wireless telecommunications infrastructure
- maintaining and operating paging as well as cellular and other wireless telecommunications networks

The transmission facilities provide omni-directional transmission via airwaves and may be based on a single technology or a combination of technologies.

This class also includes:
- purchasing access',
				'explanatory_note_exclusion' => 'This class excludes:
- telecommunications resellers, see 6190',
			),
			15 => 
			array (
				'id' => 516,
				'sort_order' => 5230,
				'code' => '613',
				'description' => 'Satellite telecommunications activities',
				'explanatory_note_inclusion' => 'See class 6130.',
				'explanatory_note_exclusion' => '',
			),
			16 => 
			array (
				'id' => 517,
				'sort_order' => 5240,
				'code' => '6130',
				'description' => 'Satellite telecommunications activities',
				'explanatory_note_inclusion' => 'This class includes:
- operating, maintaining or providing access to facilities for the transmission of voice, data, text, sound and video using a satellite telecommunications infrastructure
- delivery of visual, aural or textual programming received from cable networks, local television stations or radio networks to consumers via direct-to-home satellite systems (The units classified here do not generally originate programming material.)

This class also includes:
- provision of Internet a',
				'explanatory_note_exclusion' => 'This class excludes:
- telecommunications resellers, see 6190',
			),
			17 => 
			array (
				'id' => 518,
				'sort_order' => 5250,
				'code' => '619',
				'description' => 'Other telecommunications activities',
				'explanatory_note_inclusion' => 'See class 6190.',
				'explanatory_note_exclusion' => '',
			),
			18 => 
			array (
				'id' => 519,
				'sort_order' => 5260,
				'code' => '6190',
				'description' => 'Other telecommunications activities',
				'explanatory_note_inclusion' => 'This class includes:
- provision of specialized telecommunications applications, such as satellite tracking, communications telemetry, and radar station operations
- operation of satellite terminal stations and associated facilities operationally connected with one or more terrestrial communications systems and capable of transmitting telecommunications to or receiving telecommunications from satellite systems
- provision of Internet access over networks between the client and the ISP not own',
				'explanatory_note_exclusion' => 'This class excludes:
- provision of Internet access by operators of telecommunications infrastructure, see 6110, 6120, 6130',
			),
			19 => 
			array (
				'id' => 520,
				'sort_order' => 5270,
				'code' => '62',
				'description' => 'Computer programming, consultancy and related activities',
				'explanatory_note_inclusion' => 'This division includes the following activities of providing expertise in the field of information technologies: writing, modifying, testing and supporting software; planning and designing computer systems that integrate computer hardware, software and communication technologies; on-site management and operation of clients\' computer systems and/or data processing facilities; and other professional and technical computer-related activities.',
				'explanatory_note_exclusion' => '',
			),
			20 => 
			array (
				'id' => 521,
				'sort_order' => 5280,
				'code' => '620',
				'description' => 'Computer programming, consultancy and related activities',
				'explanatory_note_inclusion' => 'See division 62.',
				'explanatory_note_exclusion' => '',
			),
			21 => 
			array (
				'id' => 522,
				'sort_order' => 5290,
				'code' => '6201',
				'description' => 'Computer programming activities',
				'explanatory_note_inclusion' => 'This class includes the writing, modifying, testing and supporting of software.

This class includes:
- designing the structure and content of, and/or writing the computer code necessary to create and implement:
* systems software (including updates and patches)
* software applications (including updates and patches)
* databases
* web pages
- customizing of software, i.e. modifying and configuring an existing application so that it is functional within the clients\' information system env',
				'explanatory_note_exclusion' => 'This class excludes:
- publishing packaged software, see 5820
- planning and designing computer systems that integrate computer hardware, software and communication technologies, even though providing software might be an integral part, see 6202',
			),
			22 => 
			array (
				'id' => 523,
				'sort_order' => 5300,
				'code' => '6202',
				'description' => 'Computer consultancy and computer facilities management activities',
				'explanatory_note_inclusion' => 'This class includes:
- planning and designing of computer systems that integrate computer hardware, software and communication technologies

The units classified in this class may provide the hardware and software components of the system as part of their integrated services or these components may be provided by third parties or vendors. The units classified in this class often install the system and train and support the users of the system.

This class also includes:
- provision of on-s',
				'explanatory_note_exclusion' => 'This class excludes:
- separate sale of computer hardware or software, see 4651, 4741
- separate installation of mainframe and similar computers, see 3320
- separate installation (setting-up) of personal computers, see 6209
- separate software installation, see 6209',
			),
			23 => 
			array (
				'id' => 524,
				'sort_order' => 5310,
				'code' => '6209',
				'description' => 'Other information technology and computer service activities',
				'explanatory_note_inclusion' => 'This class includes other information technology and computer related activities not elsewhere classified, such as:
- computer disaster recovery
- installation (setting-up) of personal computers
- software installation',
				'explanatory_note_exclusion' => 'This class excludes:
- installation of mainframe and similar computers, see 3320
- computer programming, see 6201
- computer consultancy, see 6202
- computer facilities management, see 6202
- data processing and hosting, see 6311',
			),
			24 => 
			array (
				'id' => 525,
				'sort_order' => 5320,
				'code' => '63',
				'description' => 'Information service activities',
				'explanatory_note_inclusion' => 'This division includes the activities of web search portals, data processing and hosting activities, as well as other activities that primarily supply information.',
				'explanatory_note_exclusion' => '',
			),
			25 => 
			array (
				'id' => 526,
				'sort_order' => 5330,
				'code' => '631',
				'description' => 'Data processing, hosting and related activities; web portals',
				'explanatory_note_inclusion' => 'This group includes the provision of infrastructure for hosting, data processing services and related activities, as well as the provision of search facilities and other portals for the Internet.',
				'explanatory_note_exclusion' => '',
			),
			26 => 
			array (
				'id' => 527,
				'sort_order' => 5340,
				'code' => '6311',
				'description' => 'Data processing, hosting and related activities',
				'explanatory_note_inclusion' => 'This class includes:
- provision of infrastructure for hosting, data processing services and related activities
- specialized hosting activities such as:
* Web hosting
* streaming services
* application hosting
- application service provisioning
- general time-share provision of mainframe facilities to clients
- data processing activities:
* complete processing of data supplied by clients
* generation of specialized reports from data supplied by clients
- provision of data entry servi',
				'explanatory_note_exclusion' => '',
			),
			27 => 
			array (
				'id' => 528,
				'sort_order' => 5350,
				'code' => '6312',
				'description' => 'Web portals',
				'explanatory_note_inclusion' => 'This class includes:
- operation of web sites that use a search engine to generate and maintain extensive databases of Internet addresses and content in an easily searchable format
- operation of other websites that act as portals to the Internet, such as media sites providing periodically updated content',
				'explanatory_note_exclusion' => '',
			),
			28 => 
			array (
				'id' => 529,
				'sort_order' => 5360,
				'code' => '639',
				'description' => 'Other information service activities',
				'explanatory_note_inclusion' => 'This group includes the activities of news agencies and all other remaining information service activities.',
				'explanatory_note_exclusion' => 'This group excludes:
- activities of libraries and archives, see 9101',
			),
			29 => 
			array (
				'id' => 530,
				'sort_order' => 5370,
				'code' => '6391',
				'description' => 'News agency activities',
				'explanatory_note_inclusion' => 'This class includes:
- news syndicate and news agency activities furnishing news, pictures and features to the media',
				'explanatory_note_exclusion' => 'This class excludes:
- activities of independent photojournalists, see 7420
- activities of independent journalists, see 9000',
			),
			30 => 
			array (
				'id' => 531,
				'sort_order' => 5380,
				'code' => '6399',
				'description' => 'Other information service activities n.e.c.',
				'explanatory_note_inclusion' => 'This class includes other information service activities not elsewhere classified, such as:
- telephone based information services
- information search services on a contract or fee basis
- news clipping services, press clipping services, etc.',
				'explanatory_note_exclusion' => 'This class excludes:
- activities of call centers, see 8220',
			),
			31 => 
			array (
				'id' => 532,
				'sort_order' => 5390,
				'code' => 'K',
				'description' => 'Financial and insurance activities',
				'explanatory_note_inclusion' => 'This section includes financial service activities, including insurance, reinsurance and pension funding activities and activities to support financial services.
This section also includes the activities of holding assets, such as activities of holding companies and the activities of trusts, funds and similar financial entities.',
				'explanatory_note_exclusion' => '',
			),
			32 => 
			array (
				'id' => 533,
				'sort_order' => 5400,
				'code' => '64',
				'description' => 'Financial service activities, except insurance and pension funding',
				'explanatory_note_inclusion' => 'This division includes the activities of obtaining and redistributing funds other than for the purpose of insurance or pension funding or compulsory social security.
Note: National institutional arrangements are likely to play a significant role in determining the classification within this division.',
				'explanatory_note_exclusion' => '',
			),
			33 => 
			array (
				'id' => 534,
				'sort_order' => 5410,
				'code' => '641',
				'description' => 'Monetary intermediation',
				'explanatory_note_inclusion' => 'This group includes the obtaining of funds in the form of transferable deposits, i.e. funds that are fixed in money terms, obtained on a day-to-day basis and, apart from central banking, obtained from non-financial sources.',
				'explanatory_note_exclusion' => '',
			),
			34 => 
			array (
				'id' => 535,
				'sort_order' => 5420,
				'code' => '6411',
				'description' => 'Central banking',
				'explanatory_note_inclusion' => 'This class includes:
- issuing and managing the country\'s currency
- monitoring and control of the money supply
- taking deposits that are used for clearance between financial institutions
- supervising banking operations
- holding the country\'s international reserves
- acting as banker to the government

The activities of central banks will vary for institutional reasons.',
				'explanatory_note_exclusion' => '',
			),
			35 => 
			array (
				'id' => 536,
				'sort_order' => 5430,
				'code' => '6419',
				'description' => 'Other monetary intermediation',
				'explanatory_note_inclusion' => 'This class includes the receiving of deposits and/or close substitutes for deposits and extending of credit or lending funds. The granting of credit can take a variety of forms, such as loans, mortgages, credit cards etc. These activities are generally carried out by monetary institutions other than central banks, such as:
- banks
- savings banks
- credit unions

This class also includes:
- postal giro and postal savings bank activities
- credit granting for house purchase by specialized ',
				'explanatory_note_exclusion' => 'This class excludes:
- credit granting for house purchase by specialized non-depository institutions, see 6492
- credit card transaction processing and settlement activities, see 6619',
			),
			36 => 
			array (
				'id' => 537,
				'sort_order' => 5440,
				'code' => '642',
				'description' => 'Activities of holding companies',
				'explanatory_note_inclusion' => 'See class 6420.',
				'explanatory_note_exclusion' => '',
			),
			37 => 
			array (
				'id' => 538,
				'sort_order' => 5450,
				'code' => '6420',
				'description' => 'Activities of holding companies',
			'explanatory_note_inclusion' => 'This class includes the activities of holding companies, i.e. units that hold the assets (owning controlling-levels of equity) of a group of subsidiary corporations and whose principal activity is owning the group. The holding companies in this class do not provide any other service to the businesses in which the equity is held, i.e. they do not administer or manage other units.',
				'explanatory_note_exclusion' => 'This class excludes:
- active management of companies and enterprises, strategic planning and decision making of the company, see 7010',
			),
			38 => 
			array (
				'id' => 539,
				'sort_order' => 5460,
				'code' => '643',
				'description' => 'Trusts, funds and similar financial entities',
				'explanatory_note_inclusion' => 'See class 6430.',
				'explanatory_note_exclusion' => '',
			),
			39 => 
			array (
				'id' => 540,
				'sort_order' => 5470,
				'code' => '6430',
				'description' => 'Trusts, funds and similar financial entities',
				'explanatory_note_inclusion' => 'This class includes legal entities organized to pool securities or other financial assets, without managing, on behalf of shareholders or beneficiaries. The portfolios are customized to achieve specific investment characteristics, such as diversification, risk, rate of return and price volatility. These entities earn interest, dividends and other property income, but have little or no employment and no revenue from the sale of services.

This class includes:
- open-end investment funds
- clo',
				'explanatory_note_exclusion' => 'This class excludes:
- funds and trusts that earn revenue from the sale of goods or services, see ISIC class according to their principal activity
- activities of holding companies, see 6420
- pension funding, see 6530
- management of funds, see 6630',
			),
			40 => 
			array (
				'id' => 541,
				'sort_order' => 5480,
				'code' => '649',
				'description' => 'Other financial service activities, except insurance and pension funding activities',
				'explanatory_note_inclusion' => 'This group includes financial service activities other than those conducted by monetary institutions.',
				'explanatory_note_exclusion' => 'This group excludes:
- insurance and pension funding activities, see division 65',
			),
			41 => 
			array (
				'id' => 542,
				'sort_order' => 5490,
				'code' => '6491',
				'description' => 'Financial leasing',
				'explanatory_note_inclusion' => 'This class includes:
- leasing where the term approximately covers the expected life of the asset and the lessee acquires substantially all the benefits of its use and takes all the risks associated with its ownership. The ownership of the asset may or may not eventually be transferred. Such leases cover all or virtually all costs including interest.',
				'explanatory_note_exclusion' => 'This class excludes:
- operational leasing, see division 77, according to type of goods leased',
			),
			42 => 
			array (
				'id' => 543,
				'sort_order' => 5500,
				'code' => '6492',
				'description' => 'Other credit granting',
				'explanatory_note_inclusion' => 'This class includes:
- financial service activities primarily concerned with making loans by institutions not involved in monetary intermediation, where the granting of credit can take a variety of forms, such as loans, mortgages, credit cards etc., providing the following types of services:
* granting of consumer credit
* international trade financing
* provision of long-term finance to industry by industrial banks
* money lending outside the banking system
* credit granting for house pur',
				'explanatory_note_exclusion' => 'This class excludes:
- credit granting for house purchase by specialized institutions that also take deposits, see 6419
- operational leasing, see division 77, according to type of goods leased
- grant-giving activities by membership organizations, see 9499',
			),
			43 => 
			array (
				'id' => 544,
				'sort_order' => 5510,
				'code' => '6499',
				'description' => 'Other financial service activities, except insurance and pension funding activities, n.e.c.',
				'explanatory_note_inclusion' => 'This class includes:
- other financial service activities primarily concerned with distributing funds other than by making loans:
* factoring activities
* writing of swaps, options and other hedging arrangements
* activities of viatical settlement companies
- own-account investment activities, such as by venture capital companies, investment clubs etc.',
				'explanatory_note_exclusion' => 'This class excludes:
- financial leasing, see 6491
- security dealing on behalf of others, see 6612
- trade, leasing and renting of real estate property, see division 68
- bill collection without debt buying up, see 8291
- grant-giving activities by membership organizations, see 9499',
			),
			44 => 
			array (
				'id' => 545,
				'sort_order' => 5520,
				'code' => '65',
				'description' => 'Insurance, reinsurance and pension funding, except compulsory social security',
				'explanatory_note_inclusion' => 'This division includes the underwriting annuities and insurance policies and investing premiums to build up a portfolio of financial assets to be used against future claims. Provision of direct insurance and reinsurance are included.',
				'explanatory_note_exclusion' => '',
			),
			45 => 
			array (
				'id' => 546,
				'sort_order' => 5530,
				'code' => '651',
				'description' => 'Insurance',
				'explanatory_note_inclusion' => 'This group includes life insurance and life reinsurance with or without a substantial savings element and other non-life insurance.',
				'explanatory_note_exclusion' => '',
			),
			46 => 
			array (
				'id' => 547,
				'sort_order' => 5540,
				'code' => '6511',
				'description' => 'Life insurance',
				'explanatory_note_inclusion' => 'This class includes:
- underwriting annuities and life insurance policies, disability income insurance policies, and accidental death and dismemberment insurance policies (with or without a substantial savings element).',
				'explanatory_note_exclusion' => '',
			),
			47 => 
			array (
				'id' => 548,
				'sort_order' => 5550,
				'code' => '6512',
				'description' => 'Non-life insurance',
				'explanatory_note_inclusion' => 'This class includes:
- provision of insurance services other than life insurance:
* accident and fire insurance
* health insurance
* travel insurance
* property insurance
* motor, marine, aviation and transport insurance
* pecuniary loss and liability insurance',
				'explanatory_note_exclusion' => '',
			),
			48 => 
			array (
				'id' => 549,
				'sort_order' => 5560,
				'code' => '652',
				'description' => 'Reinsurance',
				'explanatory_note_inclusion' => 'See class 6520.',
				'explanatory_note_exclusion' => '',
			),
			49 => 
			array (
				'id' => 550,
				'sort_order' => 5570,
				'code' => '6520',
				'description' => 'Reinsurance',
				'explanatory_note_inclusion' => 'This class includes:
- activities of assuming all or part of the risk associated with existing insurance policies originally underwritten by other insurance carriers',
				'explanatory_note_exclusion' => '',
			),
			50 => 
			array (
				'id' => 551,
				'sort_order' => 5580,
				'code' => '653',
				'description' => 'Pension funding',
				'explanatory_note_inclusion' => 'See class 6530.',
				'explanatory_note_exclusion' => '',
			),
			51 => 
			array (
				'id' => 552,
				'sort_order' => 5590,
				'code' => '6530',
				'description' => 'Pension funding',
			'explanatory_note_inclusion' => 'This class includes legal entities (i.e. funds, plans and/or programmes) organized to provide retirement income benefits exclusively for the sponsor\'s employees or members. This includes pension plans with defined benefits, as well as individual plans where benefits are simply defined through the member\'s contribution.

This class includes:
- employee benefit plans
- pension funds and plans
- retirement plans',
				'explanatory_note_exclusion' => 'This class excludes:
- management of pension funds, see 6630
- compulsory social security schemes, see 8430',
			),
			52 => 
			array (
				'id' => 553,
				'sort_order' => 5600,
				'code' => '66',
				'description' => 'Activities auxiliary to financial service and insurance activities',
				'explanatory_note_inclusion' => 'This division includes the provision of services involved in or closely related to financial service activities, but not themselves providing financial services. The primary breakdown of this division is according to the type of financial transaction or funding served.',
				'explanatory_note_exclusion' => '',
			),
			53 => 
			array (
				'id' => 554,
				'sort_order' => 5610,
				'code' => '661',
				'description' => 'Activities auxiliary to financial service activities, except insurance and pension funding',
				'explanatory_note_inclusion' => 'This group includes the furnishing of physical or electronic marketplaces for the purpose of facilitating the buying and selling of stocks, stock options, bonds or commodity contracts.',
				'explanatory_note_exclusion' => '',
			),
			54 => 
			array (
				'id' => 555,
				'sort_order' => 5620,
				'code' => '6611',
				'description' => 'Administration of financial markets',
				'explanatory_note_inclusion' => 'This class includes:
- operation and supervision of financial markets other than by public authorities, such as:
* commodity contracts exchanges
* futures commodity contracts exchanges
* securities exchanges
* stock exchanges
* stock or commodity options exchanges',
				'explanatory_note_exclusion' => '',
			),
			55 => 
			array (
				'id' => 556,
				'sort_order' => 5630,
				'code' => '6612',
				'description' => 'Security and commodity contracts brokerage',
				'explanatory_note_inclusion' => 'This class includes:
- dealing in financial markets on behalf of others (e.g. stock broking) and related activities
- securities brokerage
- commodity contracts brokerage 
- activities of bureaux de change etc.',
				'explanatory_note_exclusion' => 'This class excludes:
- dealing in markets on own account, see 6499
- portfolio management, on a fee or contract basis, see 6630',
			),
			56 => 
			array (
				'id' => 557,
				'sort_order' => 5640,
				'code' => '6619',
				'description' => 'Other activities auxiliary to financial service activities',
				'explanatory_note_inclusion' => 'This class includes activities auxiliary to financial service activities not elsewhere classified, such as:
- financial transaction processing and settlement activities, including for credit card transactions
- investment advisory services 
- activities of mortgage advisers and brokers

This class also includes:
- trustee, fiduciary and custody services on a fee or contract basis',
				'explanatory_note_exclusion' => 'This class excludes:
- activities of insurance agents and brokers, see 6622
- management of funds, see 6630',
			),
			57 => 
			array (
				'id' => 558,
				'sort_order' => 5650,
				'code' => '662',
				'description' => 'Activities auxiliary to insurance and pension funding',
			'explanatory_note_inclusion' => 'This group includes acting as agent (i.e. broker) in selling annuities and insurance policies or providing other employee benefits and insurance and pension related services such as claims adjustment and third party administration.',
				'explanatory_note_exclusion' => '',
			),
			58 => 
			array (
				'id' => 559,
				'sort_order' => 5660,
				'code' => '6621',
				'description' => 'Risk and damage evaluation',
				'explanatory_note_inclusion' => 'This class includes the provision of administration services of insurance, such as assessing and settling insurance claims.

This class includes:
- assessing insurance claims
* claims adjusting
* risk assessing
* risk and damage evaluation
* average and loss adjusting
- settling insurance claims',
				'explanatory_note_exclusion' => 'This class excludes:
- appraisal of real estate, see 6820
- appraisal for other purposes, see 7490
- investigation activities, see 8030',
			),
			59 => 
			array (
				'id' => 560,
				'sort_order' => 5670,
				'code' => '6622',
				'description' => 'Activities of insurance agents and brokers',
				'explanatory_note_inclusion' => 'This class includes:
- activities of insurance agents and brokers (insurance intermediaries) in selling, negotiating or soliciting of annuities and insurance and reinsurance policies',
				'explanatory_note_exclusion' => '',
			),
			60 => 
			array (
				'id' => 561,
				'sort_order' => 5680,
				'code' => '6629',
				'description' => 'Other activities auxiliary to insurance and pension funding',
				'explanatory_note_inclusion' => 'This class includes:
- activities involved in or closely related to insurance and pension funding (except claims adjusting and activities of insurance agents):
* salvage administration
* actuarial services',
				'explanatory_note_exclusion' => 'This class excludes:
- marine salvage activities, see 5222',
			),
			61 => 
			array (
				'id' => 562,
				'sort_order' => 5690,
				'code' => '663',
				'description' => 'Fund management activities',
				'explanatory_note_inclusion' => 'See class 6630.',
				'explanatory_note_exclusion' => '',
			),
			62 => 
			array (
				'id' => 563,
				'sort_order' => 5700,
				'code' => '6630',
				'description' => 'Fund management activities',
				'explanatory_note_inclusion' => 'This class includes portfolio and fund management activities on a fee or contract basis, for individuals, businesses and others.

This class includes:
- management of pension funds
- management of mutual funds
- management of other investment funds',
				'explanatory_note_exclusion' => '',
			),
			63 => 
			array (
				'id' => 564,
				'sort_order' => 5710,
				'code' => 'L',
				'description' => 'Real estate activities',
				'explanatory_note_inclusion' => 'This section includes acting as lessors, agents and/or brokers in one or more of the following: selling or buying real estate, renting real estate, providing other real estate services such as appraising real estate or acting as real estate escrow agents. Activities in this section may be carried out on own or leased property and may be done on a fee or contract basis. Also included is the building of structures, combined with maintaining ownership or leasing of such structures.

This section ',
				'explanatory_note_exclusion' => '',
			),
			64 => 
			array (
				'id' => 565,
				'sort_order' => 5720,
				'code' => '68',
				'description' => 'Real estate activities',
				'explanatory_note_inclusion' => 'See section L.',
				'explanatory_note_exclusion' => '',
			),
			65 => 
			array (
				'id' => 566,
				'sort_order' => 5730,
				'code' => '681',
				'description' => 'Real estate activities with own or leased property',
				'explanatory_note_inclusion' => 'See class 6810.',
				'explanatory_note_exclusion' => '',
			),
			66 => 
			array (
				'id' => 567,
				'sort_order' => 5740,
				'code' => '6810',
				'description' => 'Real estate activities with own or leased property',
				'explanatory_note_inclusion' => 'This class includes:
- buying, selling, renting and operating of self-owned or leased real estate, such as:
* apartment buildings and dwellings
* non-residential buildings, including exhibition halls, self-storage facilities, malls and shopping centers
* land
- provision of homes and furnished or unfurnished flats or apartments for more permanent use, typically on a monthly or annual basis

This class also includes:
- development of building projects for own operation, i.e. for renting o',
				'explanatory_note_exclusion' => 'This class excludes:
- development of building projects for sale, see 4100
- subdividing and improving of land, see 4290
- operation of hotels, suite hotels and similar accommodation, see 5510
- operation of campgrounds, trailer parks and similar accommodation, see 5520
- operation of workers hostels, rooming houses and similar accommodation, see 5590',
			),
			67 => 
			array (
				'id' => 568,
				'sort_order' => 5750,
				'code' => '682',
				'description' => 'Real estate activities on a fee or contract basis',
				'explanatory_note_inclusion' => 'See class 6820.',
				'explanatory_note_exclusion' => '',
			),
			68 => 
			array (
				'id' => 569,
				'sort_order' => 5760,
				'code' => '6820',
				'description' => 'Real estate activities on a fee or contract basis',
				'explanatory_note_inclusion' => 'This class includes the provision of real estate activities on a fee or contract basis including real estate related services.

This class includes:
- activities of real estate agents and brokers
- intermediation in buying, selling and renting of real estate on a fee or contract basis
- management of real estate on a fee or contract basis
- appraisal services for real estate
- activities of real estate escrow agents',
				'explanatory_note_exclusion' => 'This class excludes:
- legal activities, see 6910
- facilities support services, see 8110
- management of facilities, such as military bases, prisons and other facilities (except computer facilities management), see 8110',
			),
			69 => 
			array (
				'id' => 570,
				'sort_order' => 5770,
				'code' => 'M',
				'description' => 'Professional, scientific and technical activities',
				'explanatory_note_inclusion' => 'This section includes specialized professional, scientific and technical activities. These activities require a high degree of training, and make specialized knowledge and skills available to users.',
				'explanatory_note_exclusion' => '',
			),
			70 => 
			array (
				'id' => 571,
				'sort_order' => 5780,
				'code' => '69',
				'description' => 'Legal and accounting activities',
				'explanatory_note_inclusion' => 'This division includes legal representation of one party\'s interest against another party, whether or not before courts or other judicial bodies by, or under supervision of, persons who are members of the bar, such as advice and representation in civil cases, advice and representation in criminal actions, advice and representation in connection with labour disputes. It also includes preparation of legal documents such as articles of incorporation, partnership agreements or similar documents in c',
				'explanatory_note_exclusion' => '',
			),
			71 => 
			array (
				'id' => 572,
				'sort_order' => 5790,
				'code' => '691',
				'description' => 'Legal activities',
				'explanatory_note_inclusion' => 'See class 6910.',
				'explanatory_note_exclusion' => '',
			),
			72 => 
			array (
				'id' => 573,
				'sort_order' => 5800,
				'code' => '6910',
				'description' => 'Legal activities',
				'explanatory_note_inclusion' => 'This class includes:
- legal representation of one party\'s interest against another party, whether or not before courts or other judicial bodies by, or under supervision of, persons who are members of the bar:
* advice and representation in civil cases
* advice and representation in criminal cases
* advice and representation in connection with labour disputes
- general counselling and advising, preparation of legal documents:
* articles of incorporation, partnership agreements or similar d',
				'explanatory_note_exclusion' => 'This class excludes:
- law court activities, see 8423',
			),
			73 => 
			array (
				'id' => 574,
				'sort_order' => 5810,
				'code' => '692',
				'description' => 'Accounting, bookkeeping and auditing activities; tax consultancy',
				'explanatory_note_inclusion' => 'See class 6920.',
				'explanatory_note_exclusion' => '',
			),
			74 => 
			array (
				'id' => 575,
				'sort_order' => 5820,
				'code' => '6920',
				'description' => 'Accounting, bookkeeping and auditing activities; tax consultancy',
				'explanatory_note_inclusion' => 'This class includes:
- recording of commercial transactions from businesses or others
- preparation or auditing of financial accounts
- examination of accounts and certification of their accuracy
- preparation of personal and business income tax returns
- advisory activities and representation on behalf of clients before tax authorities',
				'explanatory_note_exclusion' => 'This class excludes:
- data-processing and tabulation activities, see 6311
- management consultancy activities, such as design of accounting systems, cost accounting programmes, budgetary control procedures, see 7020
- bill collection, see 8291',
			),
			75 => 
			array (
				'id' => 576,
				'sort_order' => 5830,
				'code' => '70',
				'description' => 'Activities of head offices; management consultancy activities',
				'explanatory_note_inclusion' => 'This division includes the provision of advice and assistance to businesses and other organizations on management issues, such as strategic and organizational planning; financial planning and budgeting; marketing objectives and policies; human resource policies, practices, and planning; production scheduling; and control planning. It also includes the overseeing and managing of other units of the same company or enterprise, i.e. the activities of head offices.',
				'explanatory_note_exclusion' => '',
			),
			76 => 
			array (
				'id' => 577,
				'sort_order' => 5840,
				'code' => '701',
				'description' => 'Activities of head offices',
				'explanatory_note_inclusion' => 'See class 7010.',
				'explanatory_note_exclusion' => '',
			),
			77 => 
			array (
				'id' => 578,
				'sort_order' => 5850,
				'code' => '7010',
				'description' => 'Activities of head offices',
				'explanatory_note_inclusion' => 'This class includes the overseeing and managing of other units of the company or enterprise; undertaking the strategic or organizational planning and decision making role of the company or enterprise; exercising operational control and manage the day-to-day operations of their related units.

This class includes activities of:
- head offices
- centralized administrative offices
- corporate offices
- district and regional offices
- subsidiary management offices',
				'explanatory_note_exclusion' => 'This class excludes:
- activities of holding companies, not engaged in managing, see 6420',
			),
			78 => 
			array (
				'id' => 579,
				'sort_order' => 5860,
				'code' => '702',
				'description' => 'Management consultancy activities',
				'explanatory_note_inclusion' => 'See class 7020.',
				'explanatory_note_exclusion' => '',
			),
			79 => 
			array (
				'id' => 580,
				'sort_order' => 5870,
				'code' => '7020',
				'description' => 'Management consultancy activities',
				'explanatory_note_inclusion' => 'This class includes the provision of advice, guidance and operational assistance to businesses and other organizations on management issues, such as strategic and organizational planning; decision areas that are financial in nature; marketing objectives and policies; human resource policies, practices and planning; production scheduling and control planning.

This provision of business services may include advice, guidance or operational assistance to businesses and the public service regardin',
				'explanatory_note_exclusion' => 'This class excludes:
- design of computer software for accounting systems, see 6201
- legal advice and representation, see 6910
- accounting, bookkeeping and auditing activities, tax consulting, see 6920
- architectural, engineering and other technical advisory activities, see 7110, 7490
- advertising activities, see 7310
- market research and public opinion polling, see 7320
- executive placement or search consulting services, see 7810
- educational consulting activities, see 8550',
			),
			80 => 
			array (
				'id' => 581,
				'sort_order' => 5880,
				'code' => '71',
				'description' => 'Architectural and engineering activities; technical testing and analysis',
				'explanatory_note_inclusion' => 'This division includes the provision of architectural services, engineering services, drafting services, building inspection services and surveying and mapping services. It also includes the performance of physical, chemical, and other analytical testing services.',
				'explanatory_note_exclusion' => '',
			),
			81 => 
			array (
				'id' => 582,
				'sort_order' => 5890,
				'code' => '711',
				'description' => 'Architectural and engineering activities and related technical consultancy',
				'explanatory_note_inclusion' => 'See class 7110.',
				'explanatory_note_exclusion' => '',
			),
			82 => 
			array (
				'id' => 583,
				'sort_order' => 5900,
				'code' => '7110',
				'description' => 'Architectural and engineering activities and related technical consultancy',
				'explanatory_note_inclusion' => 'This class includes the provision of architectural services, engineering services, drafting services, building inspection services and surveying and mapping services and the like.

This class includes:
- architectural consulting activities:
* building design and drafting
* town and city planning and landscape architecture
- engineering design (i.e. applying physical laws and principles of engineering in the design of machines, materials, instruments, structures, processes and systems) and ',
				'explanatory_note_exclusion' => 'This class excludes:
- test drilling in connection with mining operations, see 0910, 0990
- development or publishing of associated software, see 5820, 6201
- activities of computer consultants, see 6202, 6209
- technical testing, see 7120
- research and development activities related to engineering, see 7210
- industrial design, see 7410
- interior decorating, see 7410
- aerial photography, see 7420',
			),
			83 => 
			array (
				'id' => 584,
				'sort_order' => 5910,
				'code' => '712',
				'description' => 'Technical testing and analysis',
				'explanatory_note_inclusion' => 'See class 7120.',
				'explanatory_note_exclusion' => '',
			),
			84 => 
			array (
				'id' => 585,
				'sort_order' => 5920,
				'code' => '7120',
				'description' => 'Technical testing and analysis',
				'explanatory_note_inclusion' => 'This class includes:
- performance of physical, chemical and other analytical testing of all types of materials and products (see below for exceptions):
* acoustics and vibration testing
* testing of composition and purity of minerals etc.
* testing activities in the field of food hygiene, including veterinary testing and control in relation to food production
* testing of physical characteristics and performance of materials, such as strength, thickness, durability, radioactivity etc.
* q',
				'explanatory_note_exclusion' => 'This class excludes:
- testing of animal specimens, see 7500
- medical laboratory testing, see 8690',
			),
			85 => 
			array (
				'id' => 586,
				'sort_order' => 5930,
				'code' => '72',
				'description' => 'Scientific research and development',
			'explanatory_note_inclusion' => 'This division includes the activities of three types of research and development: 1) basic research: experimental or theoretical work undertaken primarily to acquire new knowledge of the underlying foundations of phenomena and observable facts, without particular application or use in view, 2) applied research: original investigation undertaken in order to acquire new knowledge, directed primarily towards a specific practical aim or objective and 3) experimental development: systematic work, dra',
			'explanatory_note_exclusion' => '',
		),
		86 => 
		array (
			'id' => 587,
			'sort_order' => 5940,
			'code' => '721',
			'description' => 'Research and experimental development on natural sciences and engineering',
			'explanatory_note_inclusion' => 'See class 7210.',
			'explanatory_note_exclusion' => '',
		),
		87 => 
		array (
			'id' => 588,
			'sort_order' => 5960,
			'code' => '7210',
			'description' => 'Research and experimental development on natural sciences and engineering',
			'explanatory_note_inclusion' => 'This class includes:
- research and experimental development on natural science and engineering:
* research and development on natural sciences
* research and development on engineering and technology
* research and development on medical sciences
* research and development on biotechnology
* research and development on agricultural sciences
* interdisciplinary research and development, predominantly on natural sciences and engineering',
			'explanatory_note_exclusion' => '',
		),
		88 => 
		array (
			'id' => 589,
			'sort_order' => 5970,
			'code' => '722',
			'description' => 'Research and experimental development on social sciences and humanities',
			'explanatory_note_inclusion' => 'See class 7220.',
			'explanatory_note_exclusion' => '',
		),
		89 => 
		array (
			'id' => 590,
			'sort_order' => 5980,
			'code' => '7220',
			'description' => 'Research and experimental development on social sciences and humanities',
			'explanatory_note_inclusion' => 'This class includes:
- research and development on social sciences
- research and development on humanities
- interdisciplinary research and development, predominantly on social sciences and humanities',
			'explanatory_note_exclusion' => 'This class excludes:
- market research, see 7320',
		),
		90 => 
		array (
			'id' => 591,
			'sort_order' => 5990,
			'code' => '73',
			'description' => 'Advertising and market research',
			'explanatory_note_inclusion' => 'This division includes the creation of advertising campaigns and placement of such advertising in periodicals, newspapers, radio and television, or other media as well as the design of display structures and sites.',
			'explanatory_note_exclusion' => '',
		),
		91 => 
		array (
			'id' => 592,
			'sort_order' => 6000,
			'code' => '731',
			'description' => 'Advertising',
			'explanatory_note_inclusion' => 'See class 7310.',
			'explanatory_note_exclusion' => '',
		),
		92 => 
		array (
			'id' => 593,
			'sort_order' => 6010,
			'code' => '7310',
			'description' => 'Advertising',
		'explanatory_note_inclusion' => 'This class includes the provision of a full range of advertising services (i.e. through in-house capabilities or subcontracting), including advice, creative services, production of advertising material, media planning and buying.

This class includes:
- creation and realization of advertising campaigns:
* creating and placing advertising in newspapers, periodicals, radio, television, the Internet and other media
* creating and placing of outdoor advertising, e.g. billboards, panels, bulleti',
			'explanatory_note_exclusion' => 'This class excludes:
- publishing of advertising material, see 5819
- production of commercial messages for radio, television and film, see 5911
- public-relations activities, see 7020
- market research, see 7320
- graphic design activities, see 7410
- advertising photography, see 7420
- convention and trade show organizers, see 8230
- mailing activities, see 8219',
		),
		93 => 
		array (
			'id' => 594,
			'sort_order' => 6020,
			'code' => '732',
			'description' => 'Market research and public opinion polling',
			'explanatory_note_inclusion' => 'See class 7320.',
			'explanatory_note_exclusion' => '',
		),
		94 => 
		array (
			'id' => 595,
			'sort_order' => 6030,
			'code' => '7320',
			'description' => 'Market research and public opinion polling',
			'explanatory_note_inclusion' => 'This class includes:
- investigation into market potential, acceptance and familiarity of products and buying habits of consumers for the purpose of sales promotion and development of new products, including statistical analyses of the results
- investigation into collective opinions of the public about political, economic and social issues and statistical analysis thereof',
			'explanatory_note_exclusion' => '',
		),
		95 => 
		array (
			'id' => 596,
			'sort_order' => 6040,
			'code' => '74',
			'description' => 'Other professional, scientific and technical activities',
		'explanatory_note_inclusion' => 'This division includes the provision of professional scientific and technical services (except legal and accounting activities; architecture and engineering activities; technical testing and analysis; management and management consultancy activities; research and development and advertising activities).',
			'explanatory_note_exclusion' => '',
		),
		96 => 
		array (
			'id' => 597,
			'sort_order' => 6050,
			'code' => '741',
			'description' => 'Specialized design activities',
			'explanatory_note_inclusion' => 'See class 7410.',
			'explanatory_note_exclusion' => '',
		),
		97 => 
		array (
			'id' => 598,
			'sort_order' => 6060,
			'code' => '7410',
			'description' => 'Specialized design activities',
			'explanatory_note_inclusion' => 'This class includes:
- fashion design related to textiles, wearing apparel, shoes, jewelry, furniture and other interior decoration and other fashion goods as well as other personal or household goods
- industrial design, i.e. creating and developing designs and specifications that optimize the use, value and appearance of products, including the determination of the materials, construction, mechanism, shape, colour and surface finishes of the product, taking into consideration human character',
			'explanatory_note_exclusion' => 'This class excludes:
- design and programming of web pages, see 6201
- architectural design, see 7110
- engineering design, i.e. applying physical laws and principles of engineering in the design of machines, materials, instruments, structures, processes and systems, see 7110
- theatrical stage-set design, see 9000',
		),
		98 => 
		array (
			'id' => 599,
			'sort_order' => 6070,
			'code' => '742',
			'description' => 'Photographic activities',
			'explanatory_note_inclusion' => 'See class 7420.',
			'explanatory_note_exclusion' => '',
		),
		99 => 
		array (
			'id' => 600,
			'sort_order' => 6080,
			'code' => '7420',
			'description' => 'Photographic activities',
			'explanatory_note_inclusion' => 'This class includes:
- commercial and consumer photograph production:
* portrait photography for passports, schools, weddings etc.
* photography for commercials, publishers, fashion, real estate or tourism purposes
* aerial photography 
* videotaping of events: weddings, meetings etc.
- film processing:
* developing, printing and enlarging from client-taken negatives or cine-films
* film developing and photo printing laboratories 
* one hour photo shops (not part of camera stores)
* mo',
			'explanatory_note_exclusion' => 'This class excludes:
- processing motion picture film related to the motion picture and television industries, see 5912
- cartographic and spatial information activities, see 7110',
		),
		100 => 
		array (
			'id' => 601,
			'sort_order' => 6090,
			'code' => '749',
			'description' => 'Other professional, scientific and technical activities n.e.c.',
			'explanatory_note_inclusion' => 'See class 7490.',
			'explanatory_note_exclusion' => '',
		),
		101 => 
		array (
			'id' => 602,
			'sort_order' => 6100,
			'code' => '7490',
			'description' => 'Other professional, scientific and technical activities n.e.c.',
			'explanatory_note_inclusion' => 'This class includes a great variety of service activities generally delivered to commercial clients. It includes those activities for which more advanced professional, scientific and technical skill levels are required, but does not include ongoing, routine business functions that are generally of short duration.

This class includes:
- translation and interpretation activities
- business brokerage activities, i.e. arranging for the purchase and sale of small and medium-sized businesses, inc',
			'explanatory_note_exclusion' => 'This class excludes:
- wholesale of used motor vehicles by auctioning, see 4510
- online auction activities (retail), see 4791
- activities of auctioning houses (retail), see 4799
- activities of real estate brokers, see 6820
- bookkeeping activities, see 6920
- activities of management consultants, see 7020
- activities of architecture and engineering consultants, see 7110
- engineering design activities, see 7110
- display of advertisement and other advertising design, see 7310
- cre',
		),
		102 => 
		array (
			'id' => 603,
			'sort_order' => 6110,
			'code' => '75',
			'description' => 'Veterinary activities',
			'explanatory_note_inclusion' => 'This division includes the provision of animal health care and control activities for farm animals or pet animals. These activities are carried out by qualified veterinarians in veterinary hospitals as well as when visiting farms, kennels or homes, in own consulting and surgery rooms or elsewhere. It also includes animal ambulance activities.',
			'explanatory_note_exclusion' => '',
		),
		103 => 
		array (
			'id' => 604,
			'sort_order' => 6120,
			'code' => '750',
			'description' => 'Veterinary activities',
			'explanatory_note_inclusion' => 'See class 7500.',
			'explanatory_note_exclusion' => '',
		),
		104 => 
		array (
			'id' => 605,
			'sort_order' => 6130,
			'code' => '7500',
			'description' => 'Veterinary activities',
			'explanatory_note_inclusion' => 'This class includes:
- animal health care and control activities for farm animals
- animal health care and control activities for pet animals
These activities are carried out by qualified veterinarians when working in veterinary hospitals as well as when visiting farms, kennels or homes, in own consulting and surgery rooms or elsewhere.

This class also includes:
- activities of veterinary assistants or other auxiliary veterinary personnel
- clinico-pathological and other diagnostic activ',
			'explanatory_note_exclusion' => 'This class excludes:
- farm animal boarding activities without health care, see 0162
- sheep shearing, see 0162
- herd testing services, droving services, agistment services, poultry caponizing, see 0162
- activities related to artificial insemination, see 0162
- pet animal boarding activities without health care, see 9609',
		),
		105 => 
		array (
			'id' => 606,
			'sort_order' => 6140,
			'code' => 'N',
			'description' => 'Administrative and support service activities',
			'explanatory_note_inclusion' => 'This section includes a variety of activities that support general business operations. These activities differ from those in section M, since their primary purpose is not the transfer of specialized knowledge.',
			'explanatory_note_exclusion' => '',
		),
		106 => 
		array (
			'id' => 607,
			'sort_order' => 6150,
			'code' => '77',
			'description' => 'Rental and leasing activities',
		'explanatory_note_inclusion' => 'This division includes the renting and leasing of tangible and non-financial intangible assets, including a wide array of tangible goods, such as automobiles, computers, consumer goods and industrial machinery and equipment to customers in return for a periodic rental or lease payment. It is subdivided into: (1) the renting of motor vehicles, (2) the renting of recreational and sports equipment and personal and household equipment, (3) the leasing of other machinery and equipment of the kind oft',
			'explanatory_note_exclusion' => '',
		),
		107 => 
		array (
			'id' => 608,
			'sort_order' => 6160,
			'code' => '771',
			'description' => 'Renting and leasing of motor vehicles',
			'explanatory_note_inclusion' => 'See class 7710.',
			'explanatory_note_exclusion' => '',
		),
		108 => 
		array (
			'id' => 609,
			'sort_order' => 6170,
			'code' => '7710',
			'description' => 'Renting and leasing of motor vehicles',
			'explanatory_note_inclusion' => 'This class includes:
- renting and operational leasing of the following types of vehicles:
* passenger cars (without drivers)
* trucks, utility trailers and recreational vehicles',
			'explanatory_note_exclusion' => 'This class excludes:
- renting or leasing of vehicles or trucks with driver, see 4922, 4923
- financial leasing, see 6491',
		),
		109 => 
		array (
			'id' => 610,
			'sort_order' => 6180,
			'code' => '772',
			'description' => 'Renting and leasing of personal and household goods',
			'explanatory_note_inclusion' => 'This group includes the renting of personal and household goods as well as renting of recreational and sports equipment and video tapes. Activities generally include short-term renting of goods although in some instances, the goods may be leased for longer periods of time.',
			'explanatory_note_exclusion' => '',
		),
		110 => 
		array (
			'id' => 611,
			'sort_order' => 6190,
			'code' => '7721',
			'description' => 'Renting and leasing of recreational and sports goods',
			'explanatory_note_inclusion' => 'This class includes:
- renting of recreational and sports equipment:
* pleasure boats, canoes, sailboats, 
* bicycles
* beach chairs and umbrellas
* other sports equipment
* skis',
			'explanatory_note_exclusion' => 'This class excludes:
- renting of video tapes and disks, see 7722
- renting of other personal and household goods n.e.c., see 7729
- renting of leisure and pleasure equipment as an integral part of recreational facilities, see 9329',
		),
		111 => 
		array (
			'id' => 612,
			'sort_order' => 6200,
			'code' => '7722',
			'description' => 'Renting of video tapes and disks',
			'explanatory_note_inclusion' => 'This class includes:
- renting of video tapes, records, CDs, DVDs etc.',
			'explanatory_note_exclusion' => '',
		),
		112 => 
		array (
			'id' => 613,
			'sort_order' => 6210,
			'code' => '7729',
			'description' => 'Renting and leasing of other personal and household goods',
			'explanatory_note_inclusion' => 'This class includes:
- renting of all kinds of household or personal goods, to households or industries (except recreational and sports equipment):
* textiles, wearing apparel and footwear
* furniture, pottery and glass, kitchen and tableware, electrical appliances and house wares
* jewellery, musical instruments, scenery and costumes
* books, journals and magazines
* machinery and equipment used by amateurs or as a hobby e.g. tools for home repairs
* flowers and plants
* electronic equi',
			'explanatory_note_exclusion' => 'This class excludes:
- renting of cars, trucks, trailers and recreational vehicles without driver, see 7710
- renting of recreational and sports goods, see 7721
- renting of video tapes and disks, see 7722
- renting of motorcycles and caravans without driver, see 7730
- renting of office furniture, see 7730
- provision of linen, work uniforms and related items by laundries, see 9601',
		),
		113 => 
		array (
			'id' => 614,
			'sort_order' => 6220,
			'code' => '773',
			'description' => 'Renting and leasing of other machinery, equipment and tangible goods',
			'explanatory_note_inclusion' => 'See class 7730.',
			'explanatory_note_exclusion' => '',
		),
		114 => 
		array (
			'id' => 615,
			'sort_order' => 6230,
			'code' => '7730',
			'description' => 'Renting and leasing of other machinery, equipment and tangible goods',
			'explanatory_note_inclusion' => 'This class includes:
- renting and operational leasing, without operator, of other machinery and equipment that are generally used as capital goods by industries:
* engines and turbines
* machine tools
* mining and oilfield equipment
* professional radio, television and communication equipment
* motion picture production equipment
* measuring and controlling equipment
* other scientific, commercial and industrial machinery
- renting and operational leasing of land-transport equipment (o',
				'explanatory_note_exclusion' => 'This class excludes:
- renting of agricultural and forestry machinery or equipment with operator, see 0161, 0240
- renting of construction and civil engineering machinery or equipment with operator, see division 43
- renting of water-transport equipment with operator, see division 50
- renting of air-transport equipment with operator, see division 51
- financial leasing, see 6491
- renting of pleasure boats, see 7721
- renting of bicycles, see 7721',
			),
			115 => 
			array (
				'id' => 616,
				'sort_order' => 6240,
				'code' => '774',
				'description' => 'Leasing of intellectual property and similar products, except copyrighted works',
				'explanatory_note_inclusion' => 'See class 7740.',
				'explanatory_note_exclusion' => '',
			),
			116 => 
			array (
				'id' => 617,
				'sort_order' => 6250,
				'code' => '7740',
				'description' => 'Leasing of intellectual property and similar products, except copyrighted works',
			'explanatory_note_inclusion' => 'This class includes the activities of allowing others to use intellectual property products and similar products for which a royalty payment or licensing fee is paid to the owner of the product (i.e. the asset holder). The leasing of these products can take various forms, such as permission for reproduction, use in subsequent processes or products, operating businesses under a franchise etc. The current owners may or may not have created these products.

This class includes:
- leasing of inte',
				'explanatory_note_exclusion' => 'This class excludes:
- acquisition of rights and publishing, see divisions 58 and 59
- producing, reproducing and distributing copyrighted works (books, software, film), see divisions 58 and 59
- leasing of real estate, see group 681
- leasing of tangible products (assets), see groups 771, 772, 773
- renting of video tapes and disks, see 7722
- renting of books, see 7729',
			),
			117 => 
			array (
				'id' => 618,
				'sort_order' => 6260,
				'code' => '78',
				'description' => 'Employment activities',
				'explanatory_note_inclusion' => 'This division includes activities of listing employment vacancies and referring or placing applicants for employment, where the individuals referred or placed are not employees of the employment agencies, supplying workers to clients\' businesses for limited periods of time to supplement the working force of the client, and the activities of providing human resources and human resource management services for others on a contract or fee basis. This division also includes executive search and plac',
				'explanatory_note_exclusion' => '',
			),
			118 => 
			array (
				'id' => 619,
				'sort_order' => 6270,
				'code' => '781',
				'description' => 'Activities of employment placement agencies',
				'explanatory_note_inclusion' => 'See class 7810.',
				'explanatory_note_exclusion' => '',
			),
			119 => 
			array (
				'id' => 620,
				'sort_order' => 6280,
				'code' => '7810',
				'description' => 'Activities of employment placement agencies',
				'explanatory_note_inclusion' => 'This class includes listing employment vacancies and referring or placing applicants for employment, where the individuals referred or placed are not employees of the employment agencies.

This class includes:
- personnel search, selection referral and placement activities, including executive placement and search activities
- activities of casting agencies and bureaus, such as theatrical casting agencies
- activities of on-line employment placement agencies',
				'explanatory_note_exclusion' => 'This class excludes:
- activities of personal theatrical or artistic agents or agencies, see 7490',
			),
			120 => 
			array (
				'id' => 621,
				'sort_order' => 6290,
				'code' => '782',
				'description' => 'Temporary employment agency activities',
				'explanatory_note_inclusion' => 'See class 7820.',
				'explanatory_note_exclusion' => '',
			),
			121 => 
			array (
				'id' => 622,
				'sort_order' => 6300,
				'code' => '7820',
				'description' => 'Temporary employment agency activities',
				'explanatory_note_inclusion' => 'This class includes:
- supplying workers to clients\' businesses for limited periods of time to temporarily replace or supplement the working force of the client, where the individuals provided are employees of the temporary help service unit

Units classified here do not provide direct supervision of their employees at the clients\' work sites.',
				'explanatory_note_exclusion' => '',
			),
			122 => 
			array (
				'id' => 623,
				'sort_order' => 6310,
				'code' => '783',
				'description' => 'Other human resources provision',
				'explanatory_note_inclusion' => 'See class 7830.',
				'explanatory_note_exclusion' => '',
			),
			123 => 
			array (
				'id' => 624,
				'sort_order' => 6320,
				'code' => '7830',
				'description' => 'Other human resources provision',
				'explanatory_note_inclusion' => 'This class includes:
- provision of human resources for client businesses

This provision of human resources is typically done on a long-term or permanent basis and the units classified here may perform a wide range of human resource and personnel management duties associated with this provision.
The units classified here represent the employer of record for the employees on matters relating to payroll, taxes, and other fiscal and human resource issues, but they are not responsible for direc',
				'explanatory_note_exclusion' => 'This class excludes:
- provision of human resources functions together with supervision or running of the business, see the class in the respective economic activity of that business
- provision of human resources to temporarily replace or supplement the workforce of the client, see 7820',
			),
			124 => 
			array (
				'id' => 625,
				'sort_order' => 6330,
				'code' => '79',
				'description' => 'Travel agency, tour operator, reservation service and related activities',
				'explanatory_note_inclusion' => 'This division includes the activity of selling travel, tour, transportation and accommodation services to the general public and commercial clients and the activity of arranging and assembling tours that are sold through travel agencies or directly by agents such as tour operators, as well as other travel-related services including reservation services. The activities of tourist guides and tourism promotion activities are also included.',
				'explanatory_note_exclusion' => '',
			),
			125 => 
			array (
				'id' => 626,
				'sort_order' => 6340,
				'code' => '791',
				'description' => 'Travel agency and tour operator activities',
				'explanatory_note_inclusion' => 'This group includes the activities of agencies, primarily engaged in selling travel, tour, transportation and accommodation services to the general public and commercial clients and the activity of arranging and assembling tours that are sold through travel agencies or directly by agents such as tour operators.',
				'explanatory_note_exclusion' => '',
			),
			126 => 
			array (
				'id' => 627,
				'sort_order' => 6350,
				'code' => '7911',
				'description' => 'Travel agency activities',
				'explanatory_note_inclusion' => 'This class includes:
- activities of agencies primarily engaged in selling travel, tour, transportation and accommodation services to the general public and commercial clients',
				'explanatory_note_exclusion' => '',
			),
			127 => 
			array (
				'id' => 628,
				'sort_order' => 6360,
				'code' => '7912',
				'description' => 'Tour operator activities',
				'explanatory_note_inclusion' => 'This class includes:
- arranging and assembling tours that are sold through travel agencies or directly by tour operators. The tours may include any or all of the following:
* transportation
* accommodation
* food
* visits to museums, historical or cultural sites, theatrical, musical or sporting events',
				'explanatory_note_exclusion' => '',
			),
			128 => 
			array (
				'id' => 629,
				'sort_order' => 6370,
				'code' => '799',
				'description' => 'Other reservation service and related activities',
				'explanatory_note_inclusion' => 'See class 7990.',
				'explanatory_note_exclusion' => '',
			),
			129 => 
			array (
				'id' => 630,
				'sort_order' => 6380,
				'code' => '7990',
				'description' => 'Other reservation service and related activities',
				'explanatory_note_inclusion' => 'This class includes:
- provision of other travel-related reservation services:
* reservations for transportation, hotels, restaurants, car rentals, entertainment and sport etc.
- provision of time-share exchange services
- ticket sales activities for theatrical, sports and other amusement and entertainment events
- provision of visitor assistance services:
* provision of travel information to visitors
* activities of tourist guides
- tourism promotion activities',
				'explanatory_note_exclusion' => 'This class excludes:
- activities of travel agencies and tour operators, see 7911, 7912
- organization and management of events such as meetings, conventions and conferences, see 8230',
			),
			130 => 
			array (
				'id' => 631,
				'sort_order' => 6390,
				'code' => '80',
				'description' => 'Security and investigation activities',
				'explanatory_note_inclusion' => 'This division includes security-related services such as: investigation and detective services; guard and patrol services; picking up and delivering money, receipts, or other valuable items with personnel and equipment to protect such properties while in transit; operation of electronic security alarm systems, such as burglar and fire alarms, where the activity focuses on remote monitoring these systems, but often involves also sale, installation and repair services. If the latter components are',
				'explanatory_note_exclusion' => '',
			),
			131 => 
			array (
				'id' => 632,
				'sort_order' => 6400,
				'code' => '801',
				'description' => 'Private security activities',
				'explanatory_note_inclusion' => 'See class 8010.',
				'explanatory_note_exclusion' => '',
			),
			132 => 
			array (
				'id' => 633,
				'sort_order' => 6410,
				'code' => '8010',
				'description' => 'Private security activities',
				'explanatory_note_inclusion' => 'This class includes the provision of one or more of the following: guard and patrol services, picking up and delivering money, receipts or other valuable items with personnel and equipment to protect such properties while in transit.

This class includes:
- armored car services
- bodyguard services
- polygraph services
- fingerprinting services
- security guard services',
				'explanatory_note_exclusion' => 'This class excludes:
- public order and safety activities, see 8423',
			),
			133 => 
			array (
				'id' => 634,
				'sort_order' => 6420,
				'code' => '802',
				'description' => 'Security systems service activities',
				'explanatory_note_inclusion' => 'See class 8020.',
				'explanatory_note_exclusion' => '',
			),
			134 => 
			array (
				'id' => 635,
				'sort_order' => 6430,
				'code' => '8020',
				'description' => 'Security systems service activities',
				'explanatory_note_inclusion' => 'This class includes:
- monitoring or remote monitoring of electronic security alarm systems, such as burglar and fire alarms, including their maintenance
- installing, repairing, rebuilding, and adjusting mechanical or electronic locking devices, safes and security vaults

The units carrying out these activities may also engage in selling such security systems, mechanical or electronic locking devices, safes and security vaults.',
				'explanatory_note_exclusion' => 'This class excludes:
- installation of security systems, such as burglar and fire alarms, without later monitoring, see 4321
- selling security systems, mechanical or electronic locking devices, safes and security vaults, without monitoring, installation or maintenance services, see 4759
- security consultants, see 7490
- public order and safety activities, see 8423
- providing key duplication services, see 9529',
			),
			135 => 
			array (
				'id' => 636,
				'sort_order' => 6440,
				'code' => '803',
				'description' => 'Investigation activities',
				'explanatory_note_inclusion' => 'See class 8030.',
				'explanatory_note_exclusion' => '',
			),
			136 => 
			array (
				'id' => 637,
				'sort_order' => 6450,
				'code' => '8030',
				'description' => 'Investigation activities',
				'explanatory_note_inclusion' => 'This class includes:
- investigation and detective service activities
- activities of all private investigators, independent of the type of client or purpose of investigation',
				'explanatory_note_exclusion' => '',
			),
			137 => 
			array (
				'id' => 638,
				'sort_order' => 6460,
				'code' => '81',
				'description' => 'Services to buildings and landscape activities',
				'explanatory_note_inclusion' => 'This division includes the provision of a number of general support services, such as the provision of a combination of support services within a client\'s facilities, the interior and exterior cleaning of buildings of all types, cleaning of industrial machinery, cleaning of trains, buses, planes, etc., cleaning of the inside of road and sea tankers, disinfecting and exterminating activities for buildings, ships, trains, etc., bottle cleaning, street sweeping, snow and ice removal, provision of l',
				'explanatory_note_exclusion' => '',
			),
			138 => 
			array (
				'id' => 639,
				'sort_order' => 6470,
				'code' => '811',
				'description' => 'Combined facilities support activities',
				'explanatory_note_inclusion' => 'See class 8110.',
				'explanatory_note_exclusion' => '',
			),
			139 => 
			array (
				'id' => 640,
				'sort_order' => 6480,
				'code' => '8110',
				'description' => 'Combined facilities support activities',
				'explanatory_note_inclusion' => 'This class includes:
- provision of a combination of support services within a client\'s facility, such as general interior cleaning, maintenance, trash disposal, guard and security, mail routing, reception, laundry and related services to support operations within facilities

Units classified here provide operating staff to carry out these support activities, but are not involved with or responsible for the core business or activities of the client.',
				'explanatory_note_exclusion' => 'This class excludes:
- provision of only one of the support services (e.g. general interior cleaning services) or addressing only a single function (e.g. heating), see the appropriate class according to the service provided
- provision of management and operating staff for the complete operation of a client\'s establishment, such as a hotel, restaurant, mine, or hospital, see the class of the unit operated
- provision of on site management and operation of a client\'s computer systems and/or da',
			),
			140 => 
			array (
				'id' => 641,
				'sort_order' => 6490,
				'code' => '812',
				'description' => 'Cleaning activities',
				'explanatory_note_inclusion' => 'This group includes the activities of general interior cleaning of all types of buildings, exterior cleaning of buildings, specialized cleaning activities for buildings or other specialized cleaning activities, cleaning of industrial machinery, cleaning of the inside of road and sea tankers, disinfecting and extermination activities for buildings and industrial machinery, bottle cleaning, street sweeping, snow and ice removal.',
				'explanatory_note_exclusion' => 'This group excludes:
- agricultural pest control, see 0161
- cleaning of new buildings immediately after construction, 4330
- steam-cleaning, sand blasting and similar activities for building exteriors, see 4390
- carpet and rug shampooing, drapery and curtain cleaning, see 9601',
			),
			141 => 
			array (
				'id' => 642,
				'sort_order' => 6500,
				'code' => '8121',
				'description' => 'General cleaning of buildings',
				'explanatory_note_inclusion' => 'This class includes:
- general (non-specialized) cleaning of all types of buildings, such as:
* offices 
* houses or apartments
* factories 
* shops 
* institutions
- general (non-specialized) cleaning of other business and professional premises and multiunit residential buildings

These activities cover mostly interior cleaning although they may include the cleaning of associated exterior areas such as windows or passageways.',
				'explanatory_note_exclusion' => 'This class excludes:
- specialized interior cleaning activities, such as chimney cleaning, cleaning of fireplaces, stoves, furnaces, incinerators, boilers, ventilation ducts, exhaust units, see 8129',
			),
			142 => 
			array (
				'id' => 643,
				'sort_order' => 6510,
				'code' => '8129',
				'description' => 'Other building and industrial cleaning activities',
				'explanatory_note_inclusion' => 'This class includes:
- exterior cleaning of buildings of all types, including offices, factories, shops, institutions and other business and professional premises and multiunit residential buildings
- specialized cleaning activities for buildings such as window cleaning, chimney cleaning and cleaning of fireplaces, stoves, furnaces, incinerators, boilers, ventilation ducts and exhaust units
- swimming pool cleaning and maintenance services
- cleaning of industrial machinery
- bottle cleanin',
				'explanatory_note_exclusion' => 'This class excludes:
- agriculture pest control, see 0161
- cleaning of sewers and drains, see 3700
- automobile cleaning, car wash, see 4520',
			),
			143 => 
			array (
				'id' => 644,
				'sort_order' => 6520,
				'code' => '813',
				'description' => 'Landscape care and maintenance service activities',
				'explanatory_note_inclusion' => 'See class 8130.',
				'explanatory_note_exclusion' => '',
			),
			144 => 
			array (
				'id' => 645,
				'sort_order' => 6530,
				'code' => '8130',
				'description' => 'Landscape care and maintenance service activities',
				'explanatory_note_inclusion' => 'This class includes:
- planting, care and maintenance of:
* parks and gardens for:
** private and public housing
** public and semi-public buildings (schools, hospitals, administrative buildings, church buildings etc.)
** municipal grounds (parks, green areas, cemeteries etc.)
** highway greenery (roads, train lines and tramlines, waterways, ports)
** industrial and commercial buildings
* greenery for:
** buildings (roof gardens, façade greenery, indoor gardens)
** sports grounds (e.g.',
					'explanatory_note_exclusion' => 'This class excludes:
- commercial production and planting for commercial production of plants, trees, see divisions 01 and 02
- tree nurseries (except forest tree nurseries), see 0130
- maintenance of land to keep it in good condition for agricultural use, see 0161
- construction activities for landscaping purposes, see section F
- landscape design and architecture activities, see 7110
- operation of botanical gardens, see 9103',
				),
				145 => 
				array (
					'id' => 646,
					'sort_order' => 6540,
					'code' => '82',
					'description' => 'Office administrative, office support and other business support activities',
					'explanatory_note_inclusion' => 'This division includes the provision of a range of day-to-day office administrative services, as well as ongoing routine business support functions for others, on a contract or fee basis.
This division also includes all support service activities typically provided to businesses not elsewhere classified.
Units classified in this division do not provide operating staff to carry out the complete operations of a business.',
					'explanatory_note_exclusion' => '',
				),
				146 => 
				array (
					'id' => 647,
					'sort_order' => 6550,
					'code' => '821',
					'description' => 'Office administrative and support activities',
					'explanatory_note_inclusion' => 'This group includes the provision of a range of day-to-day office administrative services, such as financial planning, billing and record keeping, personnel and physical distribution and logistics for others on a contract or fee basis.
This group includes also support activities for others on a contract or fee basis, that are ongoing routine business support functions that businesses and organizations traditionally do for themselves.
Units classified in this group do not provide operating staf',
					'explanatory_note_exclusion' => '',
				),
				147 => 
				array (
					'id' => 648,
					'sort_order' => 6560,
					'code' => '8211',
					'description' => 'Combined office administrative service activities',
					'explanatory_note_inclusion' => 'This class includes:
- provision of a combination of day-to-day office administrative services, such as reception, financial planning, billing and record keeping, personnel and physical distribution (mail services) and logistics for others on a contract or fee basis.',
					'explanatory_note_exclusion' => 'This class excludes:
- provision of operating staff to carry out the complete operations of a business, see class according to the business/activity performed
- provision of only one particular aspect of these activities, see class according to that particular activity',
				),
				148 => 
				array (
					'id' => 649,
					'sort_order' => 6570,
					'code' => '8219',
					'description' => 'Photocopying, document preparation and other specialized office support activities',
					'explanatory_note_inclusion' => 'This class includes a variety of copying, document preparation and specialized office support activities. The document copying/printing activities included here cover only short-run type printing activities.

This class includes:
- document preparation
- document editing or proofreading 
- typing, word processing, or desktop publishing 
- secretarial support services
- transcription of documents, and other secretarial services
- letter or resume writing 
- provision of mailbox rental an',
					'explanatory_note_exclusion' => 'This class excludes:
- printing of documents (offset printing, quick printing etc.), see 1811
- direct mail advertising, see 7310
- specialized stenotype services such as court reporting, see 8299
- public stenography services, see 8299',
				),
				149 => 
				array (
					'id' => 650,
					'sort_order' => 6580,
					'code' => '822',
					'description' => 'Activities of call centres',
					'explanatory_note_inclusion' => 'See class 8220.',
					'explanatory_note_exclusion' => '',
				),
				150 => 
				array (
					'id' => 651,
					'sort_order' => 6590,
					'code' => '8220',
					'description' => 'Activities of call centres',
					'explanatory_note_inclusion' => 'This class includes: 
- activities of inbound call centres, answering calls from clients by using human operators, automatic call distribution, computer telephone integration, interactive voice response systems or similar methods to receive orders, provide product information, deal with customer requests for assistance or address customer complaints 
- activities of outbound call centers using similar methods to sell or market goods or services to potential customers, undertake market research',
					'explanatory_note_exclusion' => '',
				),
				151 => 
				array (
					'id' => 652,
					'sort_order' => 6600,
					'code' => '823',
					'description' => 'Organization of conventions and trade shows',
					'explanatory_note_inclusion' => 'See class 8230.',
					'explanatory_note_exclusion' => '',
				),
				152 => 
				array (
					'id' => 653,
					'sort_order' => 6610,
					'code' => '8230',
					'description' => 'Organization of conventions and trade shows',
					'explanatory_note_inclusion' => 'This class includes:
- organization, promotion and/or management of events, such as business and trade shows, conventions, conferences and meetings, whether or not including the management and provision of the staff to operate the facilities in which these events take place',
					'explanatory_note_exclusion' => '',
				),
				153 => 
				array (
					'id' => 654,
					'sort_order' => 6620,
					'code' => '829',
					'description' => 'Business support service activities n.e.c.',
					'explanatory_note_inclusion' => 'This group includes the activities of collection agencies, credit bureaus and all support activities typically provided to businesses not elsewhere classified.',
					'explanatory_note_exclusion' => '',
				),
				154 => 
				array (
					'id' => 655,
					'sort_order' => 6630,
					'code' => '8291',
					'description' => 'Activities of collection agencies and credit bureaus',
					'explanatory_note_inclusion' => 'This class includes:
- collection of payments for claims and remittance of payments collected to the clients, such as bill or debt collection services
- compiling of information, such as credit and employment histories on individuals and credit histories on businesses and providing the information to financial institutions, retailers and others who have a need to evaluate the creditworthiness of these persons and businesses',
					'explanatory_note_exclusion' => '',
				),
				155 => 
				array (
					'id' => 656,
					'sort_order' => 6640,
					'code' => '8292',
					'description' => 'Packaging activities',
					'explanatory_note_inclusion' => 'This class includes:
- packaging activities on a fee or contract basis, whether or not these involve an automated process:
* bottling of liquids, including beverages and food
* packaging of solids (blister packaging, foil-covered etc.)
* security packaging of pharmaceutical preparations
* labeling, stamping and imprinting
* parcel-packing and gift-wrapping',
					'explanatory_note_exclusion' => 'This class excludes:
- manufacture of soft drinks and production of mineral water, see 1104
- packaging activities incidental to transport, see 5229',
				),
				156 => 
				array (
					'id' => 657,
					'sort_order' => 6650,
					'code' => '8299',
					'description' => 'Other business support service activities n.e.c.',
					'explanatory_note_inclusion' => 'This class includes:
- providing verbatim reporting and stenotype recording of live legal proceedings and transcribing subsequent recorded materials, such as:
* court reporting or stenotype recording services
* public stenography services
- real-time (i.e. simultaneous) closed captioning of live television performances of meetings, conferences 
- address bar coding services
- bar code imprinting services
- fundraising organization services on a contract or fee basis
- mail presorting ser',
					'explanatory_note_exclusion' => 'This class excludes:
- provision of document transcription services, see 8219
- providing film or tape captioning or subtitling services, see 5912',
				),
				157 => 
				array (
					'id' => 658,
					'sort_order' => 6660,
					'code' => 'O',
					'description' => 'Public administration and defence; compulsory social security',
					'explanatory_note_inclusion' => 'This section includes activities of a governmental nature, normally carried out by the public administration. This includes the enactment and judicial interpretation of laws and their pursuant regulation, as well as the administration of programmes based on them, legislative activities, taxation, national defence, public order and safety, immigration services, foreign affairs and the administration of government programmes. This section also includes compulsory social security activities.

The',
					'explanatory_note_exclusion' => '',
				),
				158 => 
				array (
					'id' => 659,
					'sort_order' => 6670,
					'code' => '84',
					'description' => 'Public administration and defence; compulsory social security',
					'explanatory_note_inclusion' => 'See section O.',
					'explanatory_note_exclusion' => '',
				),
				159 => 
				array (
					'id' => 660,
					'sort_order' => 6680,
					'code' => '841',
					'description' => 'Administration of the State and the economic and social policy of the community',
				'explanatory_note_inclusion' => 'This group includes general administration (e.g. executive, legislative, financial administration etc. at all levels of government) and supervision in the field of social and economic life.',
					'explanatory_note_exclusion' => '',
				),
				160 => 
				array (
					'id' => 661,
					'sort_order' => 6690,
					'code' => '8411',
					'description' => 'General public administration activities',
					'explanatory_note_inclusion' => 'This class includes:
- executive and legislative administration of central, regional and local bodies
- administration and supervision of fiscal affairs:
* operation of taxation schemes
* duty/tax collection on goods and tax violation investigation
* customs administration
- budget implementation and management of public funds and public debt:
* raising and receiving of moneys and control of their disbursement
- administration of overall (civil) R&D policy and associated funds
- adminis',
					'explanatory_note_exclusion' => 'This class excludes:
- operation of government owned or occupied buildings, see 6810, 6820
- administration of R&D policies intended to increase personal well-being and of associated funds, see 8412
- administration of R&D policies intended to improve economic performance and competitiveness, see 8413
- administration of defence-related R&D policies and of associated funds, see 8422
- operation of government archives, see 9101',
				),
				161 => 
				array (
					'id' => 662,
					'sort_order' => 6700,
					'code' => '8412',
					'description' => 'Regulation of the activities of providing health care, education, cultural services and other social services, excluding social security',
					'explanatory_note_inclusion' => 'This class includes:
- public administration of programmes aimed to increase personal well-being:
* health
* education
* culture
* sport
* recreation
* environment
* housing
* social services
- public administration of R&D policies and associated funds for these areas

This class also includes: 
- sponsoring of recreational and cultural activities
- distribution of public grants to artists
- administration of potable water supply programmes
- administration of waste collection an',
					'explanatory_note_exclusion' => 'This class excludes: 
- sewage, refuse disposal and remediation activities, see divisions 37, 38, 39
- compulsory social security activities, see 8430
- education activities, see division 85
- human health-related activities, see division 86
- activities of libraries and archives (private, public or government operated), see 9101
- operation of museums and other cultural institutions, see 9102
- sporting or other recreational activities, see division 93',
				),
				162 => 
				array (
					'id' => 663,
					'sort_order' => 6710,
					'code' => '8413',
					'description' => 'Regulation of and contribution to more efficient operation of businesses',
					'explanatory_note_inclusion' => 'This class includes:
- public administration and regulation, including subsidy allocation, for different economic sectors: 
* agriculture
* land use
* energy and mining resources
* infrastructure
* transport
* communication
* hotels and tourism
* wholesale and retail trade
- administration of R&D policies and associated funds to improve economic performance
- administration of general labour affairs
- implementation of regional development policy measures, e.g. to reduce unemployment',
					'explanatory_note_exclusion' => 'This class excludes:
- research and experimental development activities, see division 72',
				),
				163 => 
				array (
					'id' => 664,
					'sort_order' => 6730,
					'code' => '842',
					'description' => 'Provision of services to the community as a whole',
					'explanatory_note_inclusion' => 'This group includes foreign affairs, defence and public order and safety activities.',
					'explanatory_note_exclusion' => '',
				),
				164 => 
				array (
					'id' => 665,
					'sort_order' => 6740,
					'code' => '8421',
					'description' => 'Foreign affairs',
					'explanatory_note_inclusion' => 'This class includes:
- administration and operation of the ministry of foreign affairs and diplomatic and consular missions stationed abroad or at offices of international organizations
- administration, operation and support for information and cultural services intended for distribution beyond national boundaries
- aid to foreign countries, whether or not routed through international organizations
- provision of military aid to foreign countries
- management of foreign trade, internationa',
					'explanatory_note_exclusion' => 'This class excludes:
- international disaster or conflict refugee services, see 8890',
				),
				165 => 
				array (
					'id' => 666,
					'sort_order' => 6750,
					'code' => '8422',
					'description' => 'Defence activities',
					'explanatory_note_inclusion' => 'This class includes:
- administration, supervision and operation of military defence affairs and land, sea, air and space defence forces such as:
* combat forces of army, navy and air force
* engineering, transport, communications, intelligence, material, personnel and other non-combat forces and commands
* reserve and auxiliary forces of the defence establishment
* military logistics (provision of equipment, structures, supplies etc.)
* health activities for military personnel in the fiel',
					'explanatory_note_exclusion' => 'This class excludes:
- research and experimental development activities, see division 72
- provision of military aid to foreign countries, see 8421
- activities of military tribunals, see 8423 
- provision of supplies for domestic emergency use in case of peacetime disasters, see 8423 
- educational activities of military schools, colleges and academies, see 8530
- activities of military hospitals, see 8610',
				),
				166 => 
				array (
					'id' => 667,
					'sort_order' => 6760,
					'code' => '8423',
					'description' => 'Public order and safety activities',
					'explanatory_note_inclusion' => 'This class includes:
- administration and operation of regular and auxiliary police forces supported by public authorities and of port, border, coastguards and other special police forces, including traffic regulation, alien registration, maintenance of arrest records
- firefighting and fire prevention:
* administration and operation of regular and auxiliary fire brigades in fire prevention, firefighting, rescue of persons and animals, assistance in civic disasters, floods, road accidents etc',
					'explanatory_note_exclusion' => 'This class excludes:
- forestry fire-protection and fire-fighting services, see 0240
- oil and gas field fire fighting, see 0910
- firefighting and fire-prevention services at airports provided by non-specialized units, see 5223
- advice and representation in civil, criminal and other cases, see 6910
- operation of police laboratories, see 7120
- administration and operation of military armed forces, see 8422
- activities of prison schools, see division 85
- activities of prison hospital',
				),
				167 => 
				array (
					'id' => 668,
					'sort_order' => 6770,
					'code' => '843',
					'description' => 'Compulsory social security activities',
					'explanatory_note_inclusion' => 'See class 8430.',
					'explanatory_note_exclusion' => '',
				),
				168 => 
				array (
					'id' => 669,
					'sort_order' => 6780,
					'code' => '8430',
					'description' => 'Compulsory social security activities',
					'explanatory_note_inclusion' => 'This class includes:
- funding and administration of government-provided social security programmes:
* sickness, work-accident and unemployment insurance
* retirement pensions
* programmes covering losses of income due to maternity, temporary disablement, widowhood etc.',
					'explanatory_note_exclusion' => 'This class excludes:
- non-compulsory social security, see 6530
- provision of welfare services and social work (without accommodation), see 8810, 8890',
				),
				169 => 
				array (
					'id' => 670,
					'sort_order' => 6790,
					'code' => 'P',
					'description' => 'Education',
					'explanatory_note_inclusion' => 'This section includes education at any level or for any profession, oral or written as well as by radio and television or other means of communication. It includes education by the different institutions in the regular school system at its different levels as well as adult education, literacy programmes etc. Also included are military schools and academies, prison schools etc. at their respective levels. The section includes public as well as private education.

For each level of initial educa',
					'explanatory_note_exclusion' => '',
				),
				170 => 
				array (
					'id' => 671,
					'sort_order' => 6800,
					'code' => '85',
					'description' => 'Education',
					'explanatory_note_inclusion' => 'See section P.',
					'explanatory_note_exclusion' => '',
				),
				171 => 
				array (
					'id' => 672,
					'sort_order' => 6810,
					'code' => '851',
					'description' => 'Pre-primary and primary education',
					'explanatory_note_inclusion' => 'See class 8510.',
					'explanatory_note_exclusion' => '',
				),
				172 => 
				array (
					'id' => 673,
					'sort_order' => 6820,
					'code' => '8510',
					'description' => 'Pre-primary and primary education',
					'explanatory_note_inclusion' => 'This class includes the provision of instruction designed primarily to introduce very young children to a school-type environment and instruction that gives students a sound basic education in reading, writing and mathematics along with an elementary understanding of other subjects such as history, geography, natural science, social science, art and music. Such education is generally provided for children, however the provision of literacy programmes within or outside the school system, which ar',
					'explanatory_note_exclusion' => 'This class excludes:
- adult education as defined in group 854
- child day-care activities, see 8890',
				),
				173 => 
				array (
					'id' => 674,
					'sort_order' => 6830,
					'code' => '852',
					'description' => 'Secondary education',
					'explanatory_note_inclusion' => 'This group includes the provision of general secondary and technical and vocational secondary education.',
					'explanatory_note_exclusion' => '',
				),
				174 => 
				array (
					'id' => 675,
					'sort_order' => 6840,
					'code' => '8521',
					'description' => 'General secondary education',
					'explanatory_note_inclusion' => 'This class includes provision of the type of education that lays the foundation for lifelong learning and human development and is capable of furthering education opportunities. Such units provide programmes that are usually on a more subject-oriented pattern using more specialized teachers, and more often employ several teachers conducting classes in their field of specialization. Education can be provided in classrooms or through radio, television broadcast, Internet, correspondence or at home',
					'explanatory_note_exclusion' => 'This class excludes:
- adult education as defined in group 854',
				),
				175 => 
				array (
					'id' => 676,
					'sort_order' => 6850,
					'code' => '8522',
					'description' => 'Technical and vocational secondary education',
					'explanatory_note_inclusion' => 'This class includes education typically emphasizing subject-matter specialization and instruction in both theoretical background and practical skills generally associated with present or prospective employment. The aim of a programme can vary from preparation for a general field of employment to a very specific job. Instruction may be provided in diverse settings, such as the unit\'s or client\'s training facilities, educational institutions, the workplace, or the home, and through correspondence,',
					'explanatory_note_exclusion' => 'This class excludes:
- technical and vocational education at post-secondary and university levels, see 8530
- adult education as defined in group 854
- performing art instruction for recreation, hobby and self-development purposes, see 8542
- automobile driving schools not intended for occupational drivers, see 8549
- job training forming part of social work activities without accommodation, see 8810, 8890',
				),
				176 => 
				array (
					'id' => 677,
					'sort_order' => 6860,
					'code' => '853',
					'description' => 'Higher education',
					'explanatory_note_inclusion' => 'See class 8530.',
					'explanatory_note_exclusion' => '',
				),
				177 => 
				array (
					'id' => 678,
					'sort_order' => 6870,
					'code' => '8530',
					'description' => 'Higher education',
					'explanatory_note_inclusion' => 'This class includes the provision of post-secondary non-tertiary and tertiary education, including granting of degrees at baccalaureate, graduate or post-graduate level. The requirement for admission is at least a high school diploma or equivalent general academic training. Education can be provided in classrooms or through radio, television broadcast, Internet or correspondence.

This class includes:
- post-secondary non-tertiary education
- first stage of tertiary education (not leading to',
						'explanatory_note_exclusion' => 'This class excludes:
- adult education as defined in group 854',
					),
					178 => 
					array (
						'id' => 679,
						'sort_order' => 6880,
						'code' => '854',
						'description' => 'Other education',
						'explanatory_note_inclusion' => 'This group includes general continuing education and continuing vocational education and training for any profession. Instruction may be oral or written and may be provided in classrooms or by radio, television, Internet, correspondence or other means of communication. This group also includes the provision of instruction in athletic activities to groups or individuals, foreign language instruction, instruction in the arts, drama or music or other instruction or specialized training, not compara',
						'explanatory_note_exclusion' => 'This group excludes:
- provision of primary education, secondary education or higher education, see groups 851, 852, 853',
					),
					179 => 
					array (
						'id' => 680,
						'sort_order' => 6890,
						'code' => '8541',
						'description' => 'Sports and recreation education',
						'explanatory_note_inclusion' => 'This class includes the provision of instruction in athletic activities to groups or individuals, such as by camps and schools. Overnight and day sports instruction camps are also included. This class does not include activities of academic schools, colleges and universities. Instruction may be provided in diverse settings, such as the unit\'s or client\'s training facilities, educational institutions or by other means. Instruction provided in this class is formally organized.

This class includ',
						'explanatory_note_exclusion' => 'This class excludes:
- cultural education, see 8542',
					),
					180 => 
					array (
						'id' => 681,
						'sort_order' => 6900,
						'code' => '8542',
						'description' => 'Cultural education',
						'explanatory_note_inclusion' => 'This class includes provision of instruction in the arts, drama and music. Units giving this type of instructions might be named "schools", "studios", "classes" etc. They provide formally organized instruction, mainly for hobby, recreational or self-development purposes, but such instruction does not lead to a professional diploma, baccalaureate or graduate degree.

This class includes:
- piano teachers and other music instruction
- art instruction
- dance instruction and dance studios
- d',
						'explanatory_note_exclusion' => '',
					),
					181 => 
					array (
						'id' => 682,
						'sort_order' => 6910,
						'code' => '8549',
						'description' => 'Other education n.e.c.',
						'explanatory_note_inclusion' => 'This class includes the provision of instruction and specialized training, generally for adults, not comparable to the general education in groups 851-853. This class does not include activities of academic schools, colleges, and universities. Instruction may be provided in diverse settings, such as the unit\'s or client\'s training facilities, educational institutions, the workplace, or the home, and through correspondence, radio, television, Internet, in classrooms or by other means. Such instru',
						'explanatory_note_exclusion' => 'This class excludes:
- adult literacy programmes see 8510
- general secondary education, see 8521
- driving schools for occupational drivers, see 8522
- higher education, see 8530
- cultural education, see 8542',
					),
					182 => 
					array (
						'id' => 683,
						'sort_order' => 6920,
						'code' => '855',
						'description' => 'Educational support activities',
						'explanatory_note_inclusion' => 'See class 8550.',
						'explanatory_note_exclusion' => '',
					),
					183 => 
					array (
						'id' => 684,
						'sort_order' => 6930,
						'code' => '8550',
						'description' => 'Educational support activities',
						'explanatory_note_inclusion' => 'This class includes:
- provision of non-instructional services that support educational processes or systems:
* educational consulting
* educational guidance counseling services
* educational testing evaluation services
* educational testing services
* organization of student exchange programs',
						'explanatory_note_exclusion' => 'This class excludes:
- research and experimental development on social sciences and humanities, see 7220',
					),
					184 => 
					array (
						'id' => 685,
						'sort_order' => 6940,
						'code' => 'Q',
						'description' => 'Human health and social work activities',
						'explanatory_note_inclusion' => 'This section includes the provision of health and social work activities. Activities include a wide range of activities, starting from health care provided by trained medical professionals in hospitals and other facilities, over residential care activities that still involve a degree of health care activities to social work activities without any involvement of health care professionals.',
						'explanatory_note_exclusion' => '',
					),
					185 => 
					array (
						'id' => 686,
						'sort_order' => 6950,
						'code' => '86',
						'description' => 'Human health activities',
						'explanatory_note_inclusion' => 'This division includes activities of short- or long-term hospitals, general or specialty medical, surgical, psychiatric and substance abuse hospitals, sanatoria, preventoria, medical nursing homes, asylums, mental hospital institutions, rehabilitation centres, leprosaria and other human health institutions which have accommodation facilities and which engage in providing diagnostic and medical treatment to inpatients with any of a wide variety of medical conditions. It also includes medical cons',
						'explanatory_note_exclusion' => '',
					),
					186 => 
					array (
						'id' => 687,
						'sort_order' => 6960,
						'code' => '861',
						'description' => 'Hospital activities',
						'explanatory_note_inclusion' => 'See class 8610.',
						'explanatory_note_exclusion' => '',
					),
					187 => 
					array (
						'id' => 688,
						'sort_order' => 6970,
						'code' => '8610',
						'description' => 'Hospital activities',
						'explanatory_note_inclusion' => 'This class includes:
- short- or long-term hospital activities, i.e. medical, diagnostic and treatment activities, of general hospitals (e.g. community and regional hospitals, hospitals of non-profit organizations, university hospitals, military-base and prison hospitals) and specialized hospitals (e.g. mental health and substance abuse hospitals, hospitals for infectious diseases, maternity hospitals, specialized sanatoriums)
The activities are chiefly directed to inpatients, are carried out ',
						'explanatory_note_exclusion' => 'This class excludes:
- laboratory testing and inspection of all types of materials and products, except medical, see 7120
- veterinary activities, see 7500
- health activities for military personnel in the field, see 8422
- dental practice activities of a general or specialized nature, e.g. dentistry, endodontic and pediatric dentistry; oral pathology, orthodontic activities, see 8620
- private consultants\' services to inpatients, see 8620
- medical laboratory testing, see 8690
- ambulanc',
					),
					188 => 
					array (
						'id' => 689,
						'sort_order' => 6980,
						'code' => '862',
						'description' => 'Medical and dental practice activities',
						'explanatory_note_inclusion' => 'See class 8620.',
						'explanatory_note_exclusion' => '',
					),
					189 => 
					array (
						'id' => 690,
						'sort_order' => 6990,
						'code' => '8620',
						'description' => 'Medical and dental practice activities',
						'explanatory_note_inclusion' => 'This class includes:
- medical consultation and treatment in the field of general and specialized medicine by general practitioners and medical specialists and surgeons
- dental practice activities of a general or specialized nature, e.g. dentistry, endodontic and pediatric dentistry; oral pathology 
- orthodontic activities
- family planning centres providing medical treatment, such as sterilization and termination of pregnancy, without accommodation
These activities can be carried out in ',
						'explanatory_note_exclusion' => 'This class excludes:
- production of artificial teeth, denture and prosthetic appliances by dental laboratories, see 3250
- inpatient hospital activities, see 8610
- paramedical activities such as those of midwives, nurses and physiotherapists, see 8690',
					),
					190 => 
					array (
						'id' => 691,
						'sort_order' => 7000,
						'code' => '869',
						'description' => 'Other human health activities',
						'explanatory_note_inclusion' => 'See class 8690.',
						'explanatory_note_exclusion' => '',
					),
					191 => 
					array (
						'id' => 692,
						'sort_order' => 7010,
						'code' => '8690',
						'description' => 'Other human health activities',
						'explanatory_note_inclusion' => 'This class includes:
- activities for human health not performed by hospitals or by medical doctors or dentists:
* activities of nurses, midwives, physiotherapists or other paramedical practitioners in the field of optometry, hydrotherapy, medical massage, occupational therapy, speech therapy, chiropody, homeopathy, chiropractice, acupuncture etc.
These activities may be carried out in health clinics such as those attached to firms, schools, homes for the aged, labour organizations and frater',
						'explanatory_note_exclusion' => 'This class excludes:
- production of artificial teeth, denture and prosthetic appliances by dental laboratories, see 3250
- transfer of patients, with neither equipment for lifesaving nor medical personnel, see divisions 49, 50, 51
- non-medical laboratory testing, see 7120
- testing activities in the field of food hygiene, see 7120
- hospital activities, see 8610
- medical and dental practice activities, see 8620
- nursing care facilities, see 8710',
					),
					192 => 
					array (
						'id' => 693,
						'sort_order' => 7020,
						'code' => '87',
						'description' => 'Residential care activities',
						'explanatory_note_inclusion' => 'This division includes the provision of residential care combined with either nursing, supervisory or other types of care as required by the residents. Facilities are a significant part of the production process and the care provided is a mix of health and social services with the health services being largely some level of nursing services.',
						'explanatory_note_exclusion' => '',
					),
					193 => 
					array (
						'id' => 694,
						'sort_order' => 7030,
						'code' => '871',
						'description' => 'Residential nursing care facilities',
						'explanatory_note_inclusion' => 'See class 8710.',
						'explanatory_note_exclusion' => '',
					),
					194 => 
					array (
						'id' => 695,
						'sort_order' => 7040,
						'code' => '8710',
						'description' => 'Residential nursing care facilities',
						'explanatory_note_inclusion' => 'This class includes:
- activities of:
* homes for the elderly with nursing care
* convalescent homes
* rest homes with nursing care
* nursing care facilities
* nursing homes',
						'explanatory_note_exclusion' => 'This class excludes:
- in-home services provided by health care professionals, see division 86
- activities of homes for the elderly without or with minimal nursing care, see 8730
- social work activities with accommodation, such as orphanages, children\'s boarding homes and hostels, temporary homeless shelters, see 8790',
					),
					195 => 
					array (
						'id' => 696,
						'sort_order' => 7050,
						'code' => '872',
						'description' => 'Residential care activities for mental retardation, mental health and substance abuse',
						'explanatory_note_inclusion' => 'See class 8720.',
						'explanatory_note_exclusion' => '',
					),
					196 => 
					array (
						'id' => 697,
						'sort_order' => 7060,
						'code' => '8720',
						'description' => 'Residential care activities for mental retardation, mental health and substance abuse',
					'explanatory_note_inclusion' => 'This class includes the provision of residential care (but not licensed hospital care) to people with mental retardation, mental illness, or substance abuse problems. Facilities provide room, board, protective supervision and counselling and some health care. It also includes provision of residential care and treatment for patients with mental health and substance abuse illnesses.

This class includes:
- activities of:
* facilities for treatment of alcoholism and drug addiction
* psychiatri',
						'explanatory_note_exclusion' => 'This class excludes:
- social work activities with accommodation, such as temporary homeless shelters, see 8790',
					),
					197 => 
					array (
						'id' => 698,
						'sort_order' => 7070,
						'code' => '873',
						'description' => 'Residential care activities for the elderly and disabled',
						'explanatory_note_inclusion' => 'See class 8730.',
						'explanatory_note_exclusion' => '',
					),
					198 => 
					array (
						'id' => 699,
						'sort_order' => 7080,
						'code' => '8730',
						'description' => 'Residential care activities for the elderly and disabled',
						'explanatory_note_inclusion' => 'This class includes the provision of residential and personal care services for the elderly and disabled who are unable to fully care for themselves and/or who do not desire to live independently. The care typically includes room, board, supervision, and assistance in daily living, such as housekeeping services. In some instances these units provide skilled nursing care for residents in separate on-site facilities.

This class includes:
- activities of:
* assisted-living facilities
* contin',
						'explanatory_note_exclusion' => 'This class excludes:
- activities of homes for the elderly with nursing care, see 8710
- social work activities with accommodation where medical treatment or accommodation are not important elements, see 8790',
					),
					199 => 
					array (
						'id' => 700,
						'sort_order' => 7090,
						'code' => '879',
						'description' => 'Other residential care activities',
						'explanatory_note_inclusion' => 'See class 8790.',
						'explanatory_note_exclusion' => '',
					),
					200 => 
					array (
						'id' => 701,
						'sort_order' => 7100,
						'code' => '8790',
						'description' => 'Other residential care activities',
						'explanatory_note_inclusion' => 'This class includes the provision of residential and personal care services for persons, except the elderly and disabled, who are unable to fully care for themselves or who do not desire to live independently.

This class includes:
- activities provided on a round-the-clock basis directed to provide social assistance to children and special categories of persons with some limits on ability for self-care, but where medical treatment or education are not important elements:
* orphanages
* chi',
						'explanatory_note_exclusion' => 'This class excludes:
- funding and administration of compulsory social security programmes, see 8430
- activities of nursing care facilities, see 8710
- residential care activities for mental retardation, mental health and substance abuse, see 8720
- residential care activities for the elderly or disabled, see 8730
- adoption activities, see 8890
- short-term shelter activities for disaster victims, see 8890',
					),
					201 => 
					array (
						'id' => 702,
						'sort_order' => 7110,
						'code' => '88',
						'description' => 'Social work activities without accommodation',
						'explanatory_note_inclusion' => 'This division includes the provision of a variety of social assistance services directly to clients. The activities in this division do not include accommodation services, except on a temporary basis.',
						'explanatory_note_exclusion' => '',
					),
					202 => 
					array (
						'id' => 703,
						'sort_order' => 7120,
						'code' => '881',
						'description' => 'Social work activities without accommodation for the elderly and disabled',
						'explanatory_note_inclusion' => 'See class 8810.',
						'explanatory_note_exclusion' => '',
					),
					203 => 
					array (
						'id' => 704,
						'sort_order' => 7130,
						'code' => '8810',
						'description' => 'Social work activities without accommodation for the elderly and disabled',
						'explanatory_note_inclusion' => 'This class includes:
- social, counselling, welfare, referral and similar services which are aimed at the elderly and disabled in their homes or elsewhere and carried out by public or by private organizations, national or local self-help organizations and by specialists providing counselling services:
* visiting of the elderly and disabled
* day-care activities for the elderly or for handicapped adults
* vocational rehabilitation and habilitation activities for disabled persons provided that',
						'explanatory_note_exclusion' => 'This class excludes:
- funding and administration of compulsory social security programmes, see 8430
- activities similar to those described in this class, but including accommodation, see 8730
- day-care activities for handicapped children, see 8890',
					),
					204 => 
					array (
						'id' => 705,
						'sort_order' => 7140,
						'code' => '889',
						'description' => 'Other social work activities without accommodation',
						'explanatory_note_inclusion' => 'See class 8890.',
						'explanatory_note_exclusion' => '',
					),
					205 => 
					array (
						'id' => 706,
						'sort_order' => 7150,
						'code' => '8890',
						'description' => 'Other social work activities without accommodation',
						'explanatory_note_inclusion' => 'This class includes:
- social, counselling, welfare, refugee, referral and similar services which are delivered to individuals and families in their homes or elsewhere and carried out by public or by private organizations, disaster relief organizations and national or local self-help organizations and by specialists providing counselling services:
* welfare and guidance activities for children and adolescents
* adoption activities, activities for the prevention of cruelty to children and othe',
						'explanatory_note_exclusion' => 'This class excludes:
- funding and administration of compulsory social security programmes, see 8430
- activities similar to those described in this class, but including accommodation, see 8790',
					),
					206 => 
					array (
						'id' => 707,
						'sort_order' => 7160,
						'code' => 'R',
						'description' => 'Arts, entertainment and recreation',
						'explanatory_note_inclusion' => 'This section includes a wide range of activities to meet varied cultural, entertainment and recreational interests of the general public, including live performances, operation of museum sites, gambling, sports and recreation activities.',
						'explanatory_note_exclusion' => '',
					),
					207 => 
					array (
						'id' => 708,
						'sort_order' => 7170,
						'code' => '90',
						'description' => 'Creative, arts and entertainment activities',
						'explanatory_note_inclusion' => 'See class 9000.',
						'explanatory_note_exclusion' => '',
					),
					208 => 
					array (
						'id' => 709,
						'sort_order' => 7180,
						'code' => '900',
						'description' => 'Creative, arts and entertainment activities',
						'explanatory_note_inclusion' => 'See class 9000.',
						'explanatory_note_exclusion' => '',
					),
					209 => 
					array (
						'id' => 710,
						'sort_order' => 7190,
						'code' => '9000',
						'description' => 'Creative, arts and entertainment activities',
						'explanatory_note_inclusion' => 'This class includes the operation of facilities and provision of services to meet the cultural and entertainment interests of their customers. This includes the production and promotion of, and participation in, live performances, events or exhibits intended for public viewing; the provision of artistic, creative or technical skills for the production of artistic products and live performances.

This class includes:
- production of live theatrical presentations, concerts and opera or dance pr',
						'explanatory_note_exclusion' => 'This class excludes:
- restoring of stained glass windows, see 2310
- manufacture of statues, other than artistic originals, see 2396
- restoring of organs and other historical musical instruments, see 3319
- restoring of historical sites and buildings, see 4100
- motion picture and video production, see 5911, 5912
- operation of cinemas, see 5914
- activities of personal theatrical or artistic agents or agencies, see 7490
- casting activities, see 7810
- activities of ticket agencies, ',
					),
					210 => 
					array (
						'id' => 711,
						'sort_order' => 7200,
						'code' => '91',
						'description' => 'Libraries, archives, museums and other cultural activities',
					'explanatory_note_inclusion' => 'This division includes activities of libraries and archives; the operation of museums of all kinds, botanical and zoological gardens; the operation of historical sites and nature reserves activities. It also includes the preservation and exhibition of objects, sites and natural wonders of historical, cultural or educational interest (e.g. world heritage sites, etc).

This division excludes sports, amusement and recreation activities, such as the operation of bathing beaches and recreation park',
						'explanatory_note_exclusion' => '',
					),
					211 => 
					array (
						'id' => 712,
						'sort_order' => 7210,
						'code' => '910',
						'description' => 'Libraries, archives, museums and other cultural activities',
						'explanatory_note_inclusion' => 'See division 91.',
						'explanatory_note_exclusion' => '',
					),
					212 => 
					array (
						'id' => 713,
						'sort_order' => 7215,
						'code' => '9101',
						'description' => 'Library and archives activities',
						'explanatory_note_inclusion' => 'This class includes:
- documentation and information activities of libraries of all kinds, reading, listening and viewing rooms, public archives providing service to the general public or to a special clientele, such as students, scientists, staff, members as well as operation of government archives:
* organization of a collection, whether specialized or not
* cataloguing collections
* lending and storage of books, maps, periodicals, films, records, tapes, works of art etc.
* retrieval acti',
						'explanatory_note_exclusion' => '',
					),
					213 => 
					array (
						'id' => 714,
						'sort_order' => 7220,
						'code' => '9102',
						'description' => 'Museums activities and operation of historical sites and buildings',
						'explanatory_note_inclusion' => 'This class includes:
- operation of museums of all kinds:
* art museums, museums of jewellery, furniture, costumes, ceramics, silverware
* natural history, science and technological museums, historical museums, including military museums
* other specialized museums
* open-air museums
- operation of historical sites and buildings',
						'explanatory_note_exclusion' => 'This class excludes:
- renovation and restoration of historical sites and buildings, see section F
- restoration of works of art and museum collection objects, see 9000
- activities of libraries and archives, see 9101',
					),
					214 => 
					array (
						'id' => 715,
						'sort_order' => 7230,
						'code' => '9103',
						'description' => 'Botanical and zoological gardens and nature reserves activities',
						'explanatory_note_inclusion' => 'This class includes:
- operation of botanical and zoological gardens, including children\'s zoos
- operation of nature reserves, including wildlife preservation, etc.',
						'explanatory_note_exclusion' => 'This class excludes:
- landscape and gardening services, see 8130
- operation of sport fishing and hunting preserves, see 9319',
					),
					215 => 
					array (
						'id' => 716,
						'sort_order' => 7240,
						'code' => '92',
						'description' => 'Gambling and betting activities',
						'explanatory_note_inclusion' => 'This division includes the operation of gambling facilities such as casinos, bingo halls and video gaming terminals and the provision of gambling services, such as lotteries and off-track betting.',
						'explanatory_note_exclusion' => '',
					),
					216 => 
					array (
						'id' => 717,
						'sort_order' => 7250,
						'code' => '920',
						'description' => 'Gambling and betting activities',
						'explanatory_note_inclusion' => 'See class 9200.',
						'explanatory_note_exclusion' => '',
					),
					217 => 
					array (
						'id' => 718,
						'sort_order' => 7260,
						'code' => '9200',
						'description' => 'Gambling and betting activities',
						'explanatory_note_inclusion' => 'This class includes:
- bookmaking and other betting operations
- off-track betting
- operation of casinos, including "floating casinos"
- sale of lottery tickets
- operation (exploitation) of coin-operated gambling machines
- operation of virtual gambling web sites',
						'explanatory_note_exclusion' => 'This class excludes:
- operation (exploitation) of coin-operated games, see 9329',
					),
					218 => 
					array (
						'id' => 719,
						'sort_order' => 7270,
						'code' => '93',
						'description' => 'Sports activities and amusement and recreation activities',
					'explanatory_note_inclusion' => 'This division includes the provision of recreational, amusement and sports activities (except museums activities, preservation of historical sites, botanical and zoological gardens and nature reserves activities; and gambling and betting activities).

Excluded from this division are dramatic arts, music and other arts and entertainment such as the production of live theatrical presentations, concerts and opera or dance productions and other stage productions, see division 90.',
						'explanatory_note_exclusion' => '',
					),
					219 => 
					array (
						'id' => 720,
						'sort_order' => 7280,
						'code' => '931',
						'description' => 'Sports activities',
						'explanatory_note_inclusion' => 'This group includes the operation of sports facilities; activities of sports teams or clubs primarily participating in live sports events before a paying audience; independent athletes engaged in participating in live sporting or racing events before a paying audience; owners of racing participants such as cars, dogs, horses, etc. primarily engaged in entering them in racing events or other spectator sports events; sports trainers providing specialized services to support participants in sports ',
						'explanatory_note_exclusion' => '',
					),
					220 => 
					array (
						'id' => 721,
						'sort_order' => 7290,
						'code' => '9311',
						'description' => 'Operation of sports facilities',
						'explanatory_note_inclusion' => 'This class includes:
- operation of facilities for indoor or outdoor sports events (open, closed or covered, with or without spectator seating):
* football, hockey, cricket, baseball, jai-alai stadiums
* racetracks for auto, dog, horse races
* swimming pools and stadiums
* track and field stadiums
* winter sports arenas and stadiums
* ice-hockey arenas
* boxing arenas
* golf courses
* bowling lanes
* fitness centers
- organization and operation of outdoor or indoor sports events for ',
						'explanatory_note_exclusion' => 'This class excludes:
- renting of recreation and sports equipment, see 7721
- operation of ski hills, see 9329
- park and beach activities, see 9329',
					),
					221 => 
					array (
						'id' => 722,
						'sort_order' => 7300,
						'code' => '9312',
						'description' => 'Activities of sports clubs',
						'explanatory_note_inclusion' => 'This class includes the activities of sports clubs, which, whether professional, semi-professional or amateur clubs, give their members the opportunity to engage in sporting activities.

This class includes:
- operation of sports clubs:
* football clubs
* bowling clubs
* swimming clubs
* golf clubs
* boxing clubs
* body-building clubs
* winter sports clubs
* chess clubs
* track and field clubs
* shooting clubs, etc.',
						'explanatory_note_exclusion' => 'This class excludes:
- sports instruction by individual teachers, trainers, see 8541
- operation of sports facilities, see 9311
- organization and operation of outdoor or indoor sports events for professionals or amateurs by sports clubs with their own facilities, see 9311',
					),
					222 => 
					array (
						'id' => 723,
						'sort_order' => 7310,
						'code' => '9319',
						'description' => 'Other sports activities',
						'explanatory_note_inclusion' => 'This class includes:
- activities of producers or promoters of sports events, with or without facilities
- activities of individual own-account sportsmen and athletes, referees, judges, timekeepers etc.
- activities of sports leagues and regulating bodies
- activities related to promotion of sporting events
- activities of racing stables, kennels and garages
- operation of sport fishing and hunting preserves
- activities of mountain guides
- support activities for sport or recreational h',
						'explanatory_note_exclusion' => 'This class excludes:
- breeding of racing horses, see 0142
- renting of sports equipment, see 7721
- activities of sport and game schools, see 8541
- activities of sports instructors, teachers, coaches, see 8541
- organization and operation of outdoor or indoor sports events for professionals or amateurs by sports clubs with/without own facilities, see 9311, 9312
- park and beach activities, see 9329',
					),
					223 => 
					array (
						'id' => 724,
						'sort_order' => 7320,
						'code' => '932',
						'description' => 'Other amusement and recreation activities',
						'explanatory_note_inclusion' => 'This group includes the activities of a wide range of units that operate facilities or provide services to meet the varied recreational interests of their patrons, including the operation of a variety of attractions, such as mechanical rides, water rides, games, shows, theme exhibits and picnic grounds.',
						'explanatory_note_exclusion' => 'This group excludes:
- sports activities, see group 931
- dramatic arts, music and other arts and entertainment activities, see 9000',
					),
					224 => 
					array (
						'id' => 725,
						'sort_order' => 7330,
						'code' => '9321',
						'description' => 'Activities of amusement parks and theme parks',
						'explanatory_note_inclusion' => 'This class includes:
- activities of amusement parks or theme parks, including the operation of a variety of attractions, such as mechanical rides, water rides, games, shows, theme exhibits and picnic grounds',
						'explanatory_note_exclusion' => '',
					),
					225 => 
					array (
						'id' => 726,
						'sort_order' => 7340,
						'code' => '9329',
						'description' => 'Other amusement and recreation activities n.e.c.',
						'explanatory_note_inclusion' => 'This class includes:
- activities of recreation parks, beaches, including renting of facilities such as bathhouses, lockers, chairs etc.
- operation of recreational transport facilities, e.g. marinas
- operation of ski hills
- renting of leisure and pleasure equipment as an integral part of recreational facilities
- operation of fairs and shows of a recreational nature
- operation of discotheques and dance floors
- operation (exploitation) of coin-operated games
- other amusement and rec',
						'explanatory_note_exclusion' => 'This class excludes:
- fishing cruises, see 5011, 5021
- provision of space and facilities for short stay by visitors in recreational parks and forests and campgrounds, see 5520
- beverage serving activities of discotheques, see 5630
- trailer parks, campgrounds, recreational camps, hunting and fishing camps, campsites and campgrounds, see 5520
- separate renting of leisure and pleasure equipment, see 7721
- operation (exploitation) of coin-operated gambling machines, see 9200
- activitie',
					),
					226 => 
					array (
						'id' => 727,
						'sort_order' => 7350,
						'code' => 'S',
						'description' => 'Other service activities',
					'explanatory_note_inclusion' => 'This section (as a residual category) includes the activities of membership organizations, the repair of computers and personal and household goods and a variety of personal service activities not covered elsewhere in the classification.',
						'explanatory_note_exclusion' => '',
					),
					227 => 
					array (
						'id' => 728,
						'sort_order' => 7360,
						'code' => '94',
						'description' => 'Activities of membership organizations',
					'explanatory_note_inclusion' => 'This division includes activities of organizations representing interests of special groups or promoting ideas to the general public. These organizations usually have a constituency of members, but their activities may involve and benefit non-members as well. The primary breakdown of this division is determined by the purpose that these organizations serve, namely interests of employers, self-employed individuals and the scientific community (group 941), interests of employees (group 942) or pro',
						'explanatory_note_exclusion' => '',
					),
					228 => 
					array (
						'id' => 729,
						'sort_order' => 7370,
						'code' => '941',
						'description' => 'Activities of business, employers and professional membership organizations',
						'explanatory_note_inclusion' => 'This group includes the activities of units that promote the interests of the members of business and employers organizations. In the case of professional membership organizations, it also includes the activities of promoting the professional interests of members of the profession.',
						'explanatory_note_exclusion' => '',
					),
					229 => 
					array (
						'id' => 730,
						'sort_order' => 7380,
						'code' => '9411',
						'description' => 'Activities of business and employers membership organizations',
						'explanatory_note_inclusion' => 'This class includes:
- activities of organizations whose members\' interests centre on the development and prosperity of enterprises in a particular line of business or trade, including farming, or on the economic growth and climate of a particular geographical area or political subdivision without regard for the line of business.
- activities of federations of such associations
- activities of chambers of commerce, guilds and similar organizations
- dissemination of information, representati',
						'explanatory_note_exclusion' => 'This class excludes:
- activities of trade unions, see 9420',
					),
					230 => 
					array (
						'id' => 731,
						'sort_order' => 7390,
						'code' => '9412',
						'description' => 'Activities of professional membership organizations',
						'explanatory_note_inclusion' => 'This class includes:
- activities of organizations whose members\' interests centre chiefly on a particular scientific discipline, professional practice or technical field, such as medical associations, legal associations, accounting associations, engineering associations, architects associations etc.
- activities of associations of specialists engaged in cultural activities, such as associations of writers, painters, performers of various kinds, journalists etc.
- dissemination of information',
						'explanatory_note_exclusion' => 'This class excludes:
- education provided by these organizations, see division 85',
					),
					231 => 
					array (
						'id' => 732,
						'sort_order' => 7400,
						'code' => '942',
						'description' => 'Activities of trade unions',
						'explanatory_note_inclusion' => 'See class 9420.',
						'explanatory_note_exclusion' => '',
					),
					232 => 
					array (
						'id' => 733,
						'sort_order' => 7410,
						'code' => '9420',
						'description' => 'Activities of trade unions',
						'explanatory_note_inclusion' => 'This class includes:
- promoting of the interests of organized labor and union employees

This class also includes:
- activities of associations whose members are employees interested chiefly in the representation of their views concerning the salary and work situation, and in concerted action through organization
- activities of single plant unions, of unions composed of affiliated branches and of labour organizations composed of affiliated unions on the basis of trade, region, organizatio',
						'explanatory_note_exclusion' => 'This class excludes:
- education provided by such organizations, see division 85',
					),
					233 => 
					array (
						'id' => 734,
						'sort_order' => 7420,
						'code' => '949',
						'description' => 'Activities of other membership organizations',
					'explanatory_note_inclusion' => 'This group includes the activities of units (except business and employers organizations, professional organizations, trade unions) that promote the interests of their members.',
						'explanatory_note_exclusion' => '',
					),
					234 => 
					array (
						'id' => 735,
						'sort_order' => 7430,
						'code' => '9491',
						'description' => 'Activities of religious organizations',
						'explanatory_note_inclusion' => 'This class includes:
- activities of religious organizations or individuals providing services directly to worshippers in churches, mosques, temples, synagogues or other places
- activities of organizations providing monastery and convent services
- religious retreat activities

This class also includes:
- religious funeral service activities',
						'explanatory_note_exclusion' => 'This class excludes:
- education provided by such organizations, see division 85
- health activities by such organizations, see division 86
- social work activities by such organizations, see divisions 87 and 88',
					),
					235 => 
					array (
						'id' => 736,
						'sort_order' => 7440,
						'code' => '9492',
						'description' => 'Activities of political organizations',
						'explanatory_note_inclusion' => 'This class includes:
- activities of political organizations and auxiliary organizations such as young people\'s auxiliaries associated with a political party. These organizations chiefly engage in influencing decision-taking in public governing bodies by placing members of the party or those sympathetic to the party in political office and involve the dissemination of information, public relations, fund-raising etc.',
						'explanatory_note_exclusion' => '',
					),
					236 => 
					array (
						'id' => 737,
						'sort_order' => 7450,
						'code' => '9499',
						'description' => 'Activities of other membership organizations n.e.c.',
						'explanatory_note_inclusion' => 'This class includes:
- activities of organizations not directly affiliated to a political party furthering a public cause or issue by means of public education, political influence, fund-raising etc.:
* citizens initiative or protest movements
* environmental and ecological movements
* organizations supporting community and educational facilities n.e.c.
* organizations for the protection and betterment of special groups, e.g. ethnic and minority groups
* associations for patriotic purposes',
						'explanatory_note_exclusion' => 'This class excludes:
- activities of professional artistic groups or organizations, see 9000
- activities of sports clubs, see 9312
- activities of professional membership associations, see 9412',
					),
					237 => 
					array (
						'id' => 738,
						'sort_order' => 7460,
						'code' => '95',
						'description' => 'Repair of computers and personal and household goods',
						'explanatory_note_inclusion' => 'This division includes the repair and maintenance of computers peripheral equipment such as desktops, laptops, computer terminals, storage devices and printers. It also includes the repair of communications equipment such as fax machines, two-way radios and consumer electronics such as radios and TVs, home and garden equipment such as lawn-mowers and blowers, footwear and leather goods, furniture and home furnishings, clothing and clothing accessories, sporting goods, musical instruments, hobby ',
						'explanatory_note_exclusion' => '',
					),
					238 => 
					array (
						'id' => 739,
						'sort_order' => 7470,
						'code' => '951',
						'description' => 'Repair of computers and communication equipment',
						'explanatory_note_inclusion' => 'This group includes the repair and maintenance of computers and peripheral equipment and communications equipment.',
						'explanatory_note_exclusion' => '',
					),
					239 => 
					array (
						'id' => 740,
						'sort_order' => 7480,
						'code' => '9511',
						'description' => 'Repair of computers and peripheral equipment',
						'explanatory_note_inclusion' => 'This class includes the repair of electronic equipment, such as computers and computing machinery and peripheral equipment.

This class includes:
- repair and maintenance of:
* desktop computers
* laptop computers
* magnetic disk drives, flash drives and other storage devices
* optical disk drives (CD-RW, CD-ROM, DVD-ROM, DVD-RW)
* printers
* monitors
* keyboards
* mice, joysticks and trackball accessories
* internal and external computer modems
* dedicated computer terminals
* com',
						'explanatory_note_exclusion' => 'This class excludes:
- repair and maintenance of carrier equipment modems, see 9512',
					),
					240 => 
					array (
						'id' => 741,
						'sort_order' => 7490,
						'code' => '9512',
						'description' => 'Repair of communication equipment',
						'explanatory_note_inclusion' => 'This class includes:
- repair and maintenance of communications equipment such as:
* cordless telephones
* cellular phones
* carrier equipment modems
* fax machines
* communications transmission equipment (e.g. routers, bridges, modems)
* two-way radios
* commercial TV and video cameras',
						'explanatory_note_exclusion' => '',
					),
					241 => 
					array (
						'id' => 742,
						'sort_order' => 7500,
						'code' => '952',
						'description' => 'Repair of personal and household goods',
						'explanatory_note_inclusion' => 'This group includes the repair and servicing of personal and household goods.',
						'explanatory_note_exclusion' => '',
					),
					242 => 
					array (
						'id' => 743,
						'sort_order' => 7510,
						'code' => '9521',
						'description' => 'Repair of consumer electronics',
						'explanatory_note_inclusion' => 'This class includes:
- repair and maintenance of consumer electronics:
* television, radio receivers
* video cassette recorders (VCR)
* CD players
* household-type video cameras',
						'explanatory_note_exclusion' => '',
					),
					243 => 
					array (
						'id' => 744,
						'sort_order' => 7520,
						'code' => '9522',
						'description' => 'Repair of household appliances and home and garden equipment',
						'explanatory_note_inclusion' => 'This class includes:
- repair and servicing of household appliances
* refrigerators, stoves, washing machines, clothes dryers, room air conditioners, etc.
- repair and servicing of home and garden equipment
* lawnmowers, edgers, snow- and leaf- blowers, trimmers, etc.',
						'explanatory_note_exclusion' => 'This class excludes:
- repair of hand held power tools, see 3312
- repair of central air conditioning systems, see 4322',
					),
					244 => 
					array (
						'id' => 745,
						'sort_order' => 7530,
						'code' => '9523',
						'description' => 'Repair of footwear and leather goods',
						'explanatory_note_inclusion' => 'This class includes:
- repair and maintenance of footwear:
* shoes, boots etc.
- fitting of heels
- repair and maintenance of leather goods:
* luggage and the like',
						'explanatory_note_exclusion' => '',
					),
					245 => 
					array (
						'id' => 746,
						'sort_order' => 7540,
						'code' => '9524',
						'description' => 'Repair of furniture and home furnishings',
						'explanatory_note_inclusion' => 'This class includes:
- reupholstering, refinishing, repairing and restoring of furniture and home furnishings including office furniture
- assembly of self-standing furniture',
						'explanatory_note_exclusion' => 'This class excludes:
- installation of fitted kitchens, shop fittings and the like, see 4330',
					),
					246 => 
					array (
						'id' => 747,
						'sort_order' => 7550,
						'code' => '9529',
						'description' => 'Repair of other personal and household goods',
						'explanatory_note_inclusion' => 'This class includes:
- repair of bicycles
- repair and alteration of clothing
- repair and alteration of jewellery
- repair of watches, clocks and their parts such as watchcases and housings of all materials; movements, chronometers, etc.
- repair of sporting goods (except sporting guns)
- repair of books
- repair of musical instruments
- repair of toys and similar articles
- repair of other personal and household goods
- piano-tuning',
						'explanatory_note_exclusion' => 'This class excludes:
- industrial engraving of metals, see 2592
- repair of sporting and recreational guns, see 3311
- repair of hand held power tools, see 3312
- repair of time clocks, time/date stamps, time locks and similar time recording devices, see 3313',
					),
					247 => 
					array (
						'id' => 748,
						'sort_order' => 7560,
						'code' => '96',
						'description' => 'Other personal service activities',
					'explanatory_note_inclusion' => 'This division includes all service activities not mentioned elsewhere in the classification. Notably it includes types of services such as washing and (dry-)cleaning of textiles and fur products, hairdressing and other beauty treatment, funeral and related activities.',
						'explanatory_note_exclusion' => '',
					),
					248 => 
					array (
						'id' => 749,
						'sort_order' => 7570,
						'code' => '960',
						'description' => 'Other personal service activities',
						'explanatory_note_inclusion' => 'See division 96.',
						'explanatory_note_exclusion' => '',
					),
					249 => 
					array (
						'id' => 750,
						'sort_order' => 7580,
						'code' => '9601',
					'description' => 'Washing and (dry-) cleaning of textile and fur products',
						'explanatory_note_inclusion' => 'This class includes:
- laundering and dry-cleaning, pressing etc., of all kinds of clothing (including fur) and textiles, provided by mechanical equipment, by hand or by self-service coin-operated machines, whether for the general public or for industrial or commercial clients
- laundry collection and delivery
- carpet and rug shampooing and drapery and curtain cleaning, whether on clients\' premises or not
- provision of linens, work uniforms and related items by laundries
- diaper supply s',
						'explanatory_note_exclusion' => 'This class excludes:
- renting of clothing other than work uniforms, even if cleaning of these goods is an integral part of the activity, see 7730
- repair and alteration of clothing etc., as an independent activity, see 9529',
					),
					250 => 
					array (
						'id' => 751,
						'sort_order' => 7590,
						'code' => '9602',
						'description' => 'Hairdressing and other beauty treatment',
						'explanatory_note_inclusion' => 'This class includes:
- hair washing, trimming and cutting, setting, dyeing, tinting, waving, straightening and similar activities for men and women
- shaving and beard trimming
- facial massage, manicure and pedicure, make-up etc.',
						'explanatory_note_exclusion' => 'This class excludes:
- manufacture of wigs, see 3290',
					),
					251 => 
					array (
						'id' => 752,
						'sort_order' => 7600,
						'code' => '9603',
						'description' => 'Funeral and related activities',
						'explanatory_note_inclusion' => 'This class includes:
- burial and incineration of human or animal corpses and related activities:
* preparing the dead for burial or cremation and embalming and morticians\' services
* providing burial or cremation services
* rental of equipped space in funeral parlours
- rental or sale of graves
- maintenance of graves and mausoleums',
						'explanatory_note_exclusion' => 'This class excludes:
- religious funeral service activities, see 9491',
					),
					252 => 
					array (
						'id' => 753,
						'sort_order' => 7610,
						'code' => '9609',
						'description' => 'Other personal service activities n.e.c.',
						'explanatory_note_inclusion' => 'This class includes:
- activities of Turkish baths, sauna and steam baths, solariums, reducing and slendering salons, massage salons etc.
- astrological and spiritualists\' activities
- social activities such as escort services, dating services, services of marriage bureaux
- pet care services such as boarding, grooming, sitting and training pets
- genealogical organizations
- shoe shiners, porters, valet car parkers etc.
- concession operation of coin-operated personal service machines (p',
							'explanatory_note_exclusion' => 'This class excludes:
- veterinary activities, see 7500
- activities of fitness centers, see 9311',
						),
						253 => 
						array (
							'id' => 754,
							'sort_order' => 7620,
							'code' => 'T',
							'description' => 'Activities of households as employers; undifferentiated goods- and services-producing activities of households for own use',
							'explanatory_note_inclusion' => '',
							'explanatory_note_exclusion' => '',
						),
						254 => 
						array (
							'id' => 755,
							'sort_order' => 7630,
							'code' => '97',
							'description' => 'Activities of households as employers of domestic personnel',
							'explanatory_note_inclusion' => 'See class 9700.',
							'explanatory_note_exclusion' => '',
						),
						255 => 
						array (
							'id' => 756,
							'sort_order' => 7640,
							'code' => '970',
							'description' => 'Activities of households as employers of domestic personnel',
							'explanatory_note_inclusion' => 'See class 9700.',
							'explanatory_note_exclusion' => '',
						),
						256 => 
						array (
							'id' => 757,
							'sort_order' => 7650,
							'code' => '9700',
							'description' => 'Activities of households as employers of domestic personnel',
							'explanatory_note_inclusion' => 'This class includes:
- activities of households as employers of domestic personnel such as maids, cooks, waiters, valets, butlers, laundresses, gardeners, gatekeepers, stable-lads, chauffeurs, caretakers, governesses, babysitters, tutors, secretaries etc. 
It allows the domestic personnel employed to state the activity of their employer in censuses or studies, even though the employer is an individual. The product produced by this activity is consumed by the employing household.',
							'explanatory_note_exclusion' => 'This class excludes:
- provision of services such as cooking, gardening etc. by independent service providers (companies or individuals), see ISIC class according to type of service',
						),
						257 => 
						array (
							'id' => 758,
							'sort_order' => 7660,
							'code' => '98',
							'description' => 'Undifferentiated goods- and services-producing activities of private households for own use',
							'explanatory_note_inclusion' => 'This division includes the undifferentiated subsistence goods-producing and services-producing activities of households. 
Households should be classified here only if it is impossible to identify a primary activity for the subsistence activities of the household. If the household engages in market activities, it should be classified according to the primary market activity carried out.',
							'explanatory_note_exclusion' => '',
						),
						258 => 
						array (
							'id' => 759,
							'sort_order' => 7670,
							'code' => '981',
							'description' => 'Undifferentiated goods-producing activities of private households for own use',
							'explanatory_note_inclusion' => 'See class 9810.',
							'explanatory_note_exclusion' => '',
						),
						259 => 
						array (
							'id' => 760,
							'sort_order' => 7680,
							'code' => '9810',
							'description' => 'Undifferentiated goods-producing activities of private households for own use',
							'explanatory_note_inclusion' => 'This class includes:
- undifferentiated subsistence goods-producing activities of households, i.e., the activities of households that are engaged in a variety of activities that produce goods for their own subsistence. These activities include hunting and gathering, farming, the production of shelter and clothing and other goods produced by the household for its own subsistence.

If households are also engaged in the production of marketed goods, they are classified to the appropriate goods-p',
							'explanatory_note_exclusion' => '',
						),
						260 => 
						array (
							'id' => 761,
							'sort_order' => 7690,
							'code' => '982',
							'description' => 'Undifferentiated service-producing activities of private households for own use',
							'explanatory_note_inclusion' => 'See class 9820.',
							'explanatory_note_exclusion' => '',
						),
						261 => 
						array (
							'id' => 762,
							'sort_order' => 7700,
							'code' => '9820',
							'description' => 'Undifferentiated service-producing activities of private households for own use',
							'explanatory_note_inclusion' => 'This class includes:
- undifferentiated subsistence services-producing activities of households, i.e. the activities of households that are engaged in a variety of activities that produce services for their own subsistence. These activities include cooking, teaching, caring for household members and other services produced by the household for its own subsistence.

If households are also engaged in the production of multiple goods for subsistence purposes, they are classified to the undiffere',
							'explanatory_note_exclusion' => '',
						),
						262 => 
						array (
							'id' => 763,
							'sort_order' => 7710,
							'code' => 'U',
							'description' => 'Activities of extraterritorial organizations and bodies',
							'explanatory_note_inclusion' => 'See class 9900.',
							'explanatory_note_exclusion' => '',
						),
						263 => 
						array (
							'id' => 764,
							'sort_order' => 7720,
							'code' => '99',
							'description' => 'Activities of extraterritorial organizations and bodies',
							'explanatory_note_inclusion' => 'See class 9900.',
							'explanatory_note_exclusion' => '',
						),
						264 => 
						array (
							'id' => 765,
							'sort_order' => 7730,
							'code' => '990',
							'description' => 'Activities of extraterritorial organizations and bodies',
							'explanatory_note_inclusion' => 'See class 9900.',
							'explanatory_note_exclusion' => '',
						),
						265 => 
						array (
							'id' => 766,
							'sort_order' => 7740,
							'code' => '9900',
							'description' => 'Activities of extraterritorial organizations and bodies',
							'explanatory_note_inclusion' => 'This class includes:
- activities of international organizations such as the United Nations and the specialized agencies of the United Nations system, regional bodies etc., the International Monetary Fund, the World Bank, the World Customs Organization, the Organisation for Economic Co-operation and Development, the Organization of Petroleum Exporting Countries, the European Communities, the European Free Trade Association etc.

This class also includes:
- activities of diplomatic and consul',
							'explanatory_note_exclusion' => '',
						),
					));
	}

}

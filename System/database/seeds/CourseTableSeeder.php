<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CourseTableSeeder extends Seeder {
	 
	public function run()
	{
		DB::table('courses')->delete();
		DB::table('courses')->insert(array(
			/*['courseNum' => '',
			 'courseTitle' => '',
			 'classification' => 'Undergraduate',
			 'semOffered' => '',
			 'prerequisite' => '',
			 'numOfUnits' => '']*/

		/* UNDERGRADUATE COURSES */

			// BIOLOGY (26)

			['courseNum' => 'BIO 1',
			 'courseTitle' => 'General Biology I',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 2',
			 'courseTitle' => 'General Biology II',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 3',
			 'courseTitle' => 'Biodiversity',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '5'],

			['courseNum' => 'BIO 30',
			 'courseTitle' => 'Genetics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 2 or BIO 3 or BOT 1 & ZOO 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 70',
			 'courseTitle' => 'Earth’s Processes and Biological Systems',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 2 or BIO 3 or BOT 1 & ZOO 1 and CHEM 15 or CHEM 16',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 101',
			 'courseTitle' => 'Introductory Molecular Biology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 30 and CHEM 160 or CHEM 161',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 102',
			 'courseTitle' => 'Cytology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 30',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 120',
			 'courseTitle' => 'Cell Biology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 30 and CHEM 160',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 121',
			 'courseTitle' => 'Developmental Cell Biology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. BIO 120 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 130a',
			 'courseTitle' => 'Advanced Genetics I',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 30',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 130b',
			 'courseTitle' => 'Advanced Genetics II',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 30',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 131',
			 'courseTitle' => 'Cytogenetics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR. BIO 30',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 137',
			 'courseTitle' => 'Insect Genetics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ENT 101 and BIO 30 or COI and CHEM 40',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 138',
			 'courseTitle' => 'Molecular Genetics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. BIO 101',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 139',
			 'courseTitle' => 'Human Genetics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. BIO 130a',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 140',
			 'courseTitle' => ' Evolutionary Biology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 30',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 142',
			 'courseTitle' => 'Principles of Systematic Biology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. BIO 2 or BIO 3 or BOT 1 and ZOO 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 150',
			 'courseTitle' => 'Principles of Ecology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 2 or BIO 3 or BOT 1 and ZOO 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 151',
			 'courseTitle' => 'Environmental Management',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 150 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 159',
			 'courseTitle' => 'Conservation Biology in the Tropics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR. BIO 150 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 180',
			 'courseTitle' => 'Biological Microtechnique',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2,S',
			 'prerequisite' => 'PR. BOT 3, ZOO 3, and CHEM 40',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 190',
			 'courseTitle' => 'Special Problems',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2,S',
			 'prerequisite' => '',
			 'numOfUnits' => '1-3'],

			['courseNum' => 'BIO 191',
			 'courseTitle' => 'Special Topics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '',
			 'prerequisite' => '',
			 'numOfUnits' => '1-3'],

			['courseNum' => 'BIO 192',
			 'courseTitle' => 'Museum Herbarium Curatorship',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR. ZOO 140 and BOT 140',
			 'numOfUnits' => '3'],

			['courseNum' => 'BIO 199',
			 'courseTitle' => 'Undergraduate Seminar in Biology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => ''],

			['courseNum' => 'BIO 200',
			 'courseTitle' => 'Undergraduate Thesis in Biology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2,S',
			 'prerequisite' => '',
			 'numOfUnits' => ''],




			// BOTANY (20)

			['courseNum' => 'BOT 1',
			 'courseTitle' => 'Introduction to Plant Science',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],
			
			['courseNum' => 'BOT 3',
			 'courseTitle' => 'Intermediate Botany',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR BIO 2 or BIO 3 or BOT 1 and ZOO 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 11',
			 'courseTitle' => 'Veterinary Botany',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 20',
			 'courseTitle' => 'Elementary Plant Physiology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR BOT 1 or BIO 2 or BIO 3 and CHEM 16 or CHEM 15',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 101',
			 'courseTitle' => 'Phycology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR BOT 1 or BIO 2 or BIO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 110',
			 'courseTitle' => 'Morphology and Anatomy of Plants',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR BOT 1 or BIO 3 or COI',
			 'numOfUnits' => '3'],
			
			['courseNum' => 'BOT 111',
			 'courseTitle' => 'Bryophytes and Vascular Cryptogams',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 120',
			 'courseTitle' => 'Advanced Plant Physiology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR BOT 20 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 131',
			 'courseTitle' => 'Inorganic Plant Nutrition',
			 'classification' => 'Undergraduate',
			 'semOffered' => '',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 132',
			 'courseTitle' => 'Plant Growth',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR BOT 20',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 140',
			 'courseTitle' => 'Systematics of the Spermatophytes',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR COI',
			 'numOfUnits' => '3'],
			
			['courseNum' => 'BOT 141',
			 'courseTitle' => 'Systematics of the Filicinae',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 142',
			 'courseTitle' => 'Economic Botany',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 150',
			 'courseTitle' => 'Plant Ecology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR BOT 3 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 152',
			 'courseTitle' => 'Phytogeography',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR BOT 150 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 160',
			 'courseTitle' => 'Field Botany',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR BOT 150 or COI',
			 'numOfUnits' => '3'],
			
			['courseNum' => 'BOT 161',
			 'courseTitle' => ' Introduction to Palynology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR BOT 140 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 191',
			 'courseTitle' => 'Special Topics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '',
			 'prerequisite' => '',
			 'numOfUnits' => '1-3'],

			['courseNum' => 'BOT 192',
			 'courseTitle' => 'Plant Histochemistry',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR CHEM 40 or COI and BOT 110',
			 'numOfUnits' => '3'],

			['courseNum' => 'BOT 195',
			 'courseTitle' => 'Plant Microtechnique',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2,S',
			 'prerequisite' => 'PR BOT 110 or COI',
			 'numOfUnits' => '3'],



			// NATURAL SCIENCE (NASC) (7)

			['courseNum' => 'NASC 1 (MST)',
			 'courseTitle' => 'The Material Universe',
			 'classification' => 'Undergraduate',
			 'semOffered' => '',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],
			
			['courseNum' => 'NASC 2 (MST)',
			 'courseTitle' => 'The Living Planet',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'NASC 3 (MST)',
			 'courseTitle' => 'Physics in Everyday Life',
			 'classification' => 'Undergraduate',
			 'semOffered' => '',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'NASC 4 (MST)',
			 'courseTitle' => 'The World of Life',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'NASC 5 (MST)',
			 'courseTitle' => 'Environmental Biology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'NASC 8 (MST)',
			 'courseTitle' => '',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'NASC 9 (MST)',
			 'courseTitle' => '',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],



			// MICROBIOLOGY (12)

			['courseNum' => 'MCB 1',
			 'courseTitle' => 'General Microbiology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 101',
			 'courseTitle' => 'Microbial Identification Techniques',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. MCB 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 102',
			 'courseTitle' => 'General Virology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 103',
			 'courseTitle' => 'Introductory Medical Microbiology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. MCB 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 120',
			 'courseTitle' => 'Microbial Physiology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. MCB 1 and CHEM 160',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 130',
			 'courseTitle' => 'Microbial Genetics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. MCB 101 and BIO 101 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 150',
			 'courseTitle' => 'Microbial Ecology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. MCB 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 160',
			 'courseTitle' => 'Industrial Microbiology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. MCB 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 160.1',
			 'courseTitle' => 'Industrial Microbiology Laboratory',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. MCB 101 and MCB 160',
			 'numOfUnits' => '2'],

			['courseNum' => 'MCB 180',
			 'courseTitle' => 'Introductory Food Microbiology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. MCB 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 181',
			 'courseTitle' => 'Dairy Microbiology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR. MCB 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'MCB 198',
			 'courseTitle' => 'Microbiology Practicum',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2,S',
			 'prerequisite' => 'PR. MCB 101 and MCB 180',
			 'numOfUnits' => '3'],



			// WILDLIFE (3)

			['courseNum' => 'WLDL 101',
			 'courseTitle' => 'Introduction to Philippine Wildlife',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR BOT 1 and ZOO1 or BIO 2 or BIO 3.',
			 'numOfUnits' => '3'],

			['courseNum' => 'WLDL 155',
			 'courseTitle' => 'Wildlife Ecology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '',
			 'prerequisite' => 'PR WLDL 101',
			 'numOfUnits' => '3'],

			['courseNum' => 'WLDL 198',
			 'courseTitle' => 'Field Practicum',
			 'classification' => 'Undergraduate',
			 'semOffered' => 'S',
			 'prerequisite' => 'PR WLDL 105 or WLDL 155',
			 'numOfUnits' => '3'],



			 // ZOOLOGY

			['courseNum' => 'ZOO 1',
			 'courseTitle' => 'General Zoology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 2',
			 'courseTitle' => 'Intermediate Zoology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. BIO 2 or BIO 3 or ZOO 1',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 3',
			 'courseTitle' => 'Fundamentals of Zoology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '5'],

			['courseNum' => 'ZOO 91',
			 'courseTitle' => 'Zoological Techniques',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 1 or BIO 2 or BIO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 113',
			 'courseTitle' => 'Comparative Vertebrate Anatomy',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 1 or BIO 2 or BIO 3',
			 'numOfUnits' => '5'],

			['courseNum' => 'ZOO 115',
			 'courseTitle' => 'Animal Histology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 113',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 117',
			 'courseTitle' => 'Developmental Zoology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 1 or ZOO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 122',
			 'courseTitle' => 'Animal Behavior',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. ZOO 1 or ZOO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 140',
			 'courseTitle' => 'Animal Taxonomy',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 1 or BIO 2 or BIO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 142',
			 'courseTitle' => 'Invertebrate Zoology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 145',
			 'courseTitle' => 'Herpetology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. ZOO 140',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 146',
			 'courseTitle' => 'Ornithology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR. ZOO 140 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 148',
			 'courseTitle' => 'Mammalogy',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR. ZOO 140 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 149',
			 'courseTitle' => 'Biology of Marine Mammals',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. ZOO 3 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 150',
			 'courseTitle' => 'Animal Ecology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 1 or BIO 2 or BIO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 151',
			 'courseTitle' => 'Marine Zoology',
			 'classification' => 'Undergraduate',
			 'semOffered' => 'S',
			 'prerequisite' => 'PR. ZOO 140 and ZOO 150',
			 'numOfUnits' => '5'],

			['courseNum' => 'ZOO 152',
			 'courseTitle' => 'Freshwater Zoology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 140 and ZOO 150',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 155',
			 'courseTitle' => 'General Limnology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 160',
			 'courseTitle' => 'General Malacology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. ZOO 142 and ZOO 150',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 170',
			 'courseTitle' => 'Principles of Nematology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1',
			 'prerequisite' => 'PR. ZOO 1 or BIO 2 or BIO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 173',
			 'courseTitle' => 'Introduction to Parasitology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 1 or BIO 2 or BIO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 174',
			 'courseTitle' => 'Vertebrate Parasitology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR. ZOO 173',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 177',
			 'courseTitle' => 'Vertebrate Pests',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 1 or BIO 2 or BIO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 180',
			 'courseTitle' => 'Ichthyology',
			 'classification' => 'Undergraduate',
			 'semOffered' => '2',
			 'prerequisite' => 'PR. ZOO 1 or BIO 3',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 185',
			 'courseTitle' => 'Introduction to Aquaculture',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => 'PR. ZOO 1 or BOT 1 or BIO 3 or COI',
			 'numOfUnits' => '3'],

			['courseNum' => 'ZOO 191',
			 'courseTitle' => 'Special Topics',
			 'classification' => 'Undergraduate',
			 'semOffered' => '1,2',
			 'prerequisite' => '',
			 'numOfUnits' => '1-3']
		));
	}
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\Province;

class ProvinceSeederTable extends Seeder
{
    /**Province::truncatProvince::truncate();
		Province::insert([e();
		Province::insert([
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::truncate();
		Province::insert([
		      	[
		      		'name' => 'ACEH',
		      		'name' => 'DKI JAKARTA',
					'latitude' => '5.276281',
					'longitude' => '95.725866' 
		      	],
		       	[
		       		'name' => 'SUMATERA UTARA',
		       		'latitude' => null,
		       		'longitude' => null
		       	],
		       	[
		       		'name' => 'SUMATERA BARAT',
		       		'latitude' => null,
		       		'longitude' => null
		       	],
				[
					'name' => 'RIAU',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'JAMBI',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'SUMATERA SELATAN',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'BENGKULU',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'LAMPUNG',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'KEPULAUAN BANGKA BELITUNG',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'KEPULAUAN RIAU',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'DKI JAKARTA',
					'latitude' => '-6.156563',
					'longitude' => '106.856935'
				],
				[
					'name' => 'JAWA BARAT',
					'latitude' => '-6.923893',
					'longitude' => '107.615348'
				],
				[
					'name' => 'JAWA TENGAH',
					'latitude' => '-7.249743', 
					'longitude' => '110.135208'
				],
				[
					'name' => 'DI YOGYAKARTA',
					'latitude' => '-7.923188', 
					'longitude' => '110.447682' 
				],
				[
					'name' => 'JAWA TIMUR',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'BANTEN',
					'latitude' => null,
					'longitude' => null
				], 
				[
					'name' => 'BALI',
					'latitude' => '-8.312976', 
					'longitude' => '115.272104'
				], 
				[
					'name' => 'NUSA TENGGARA BARAT',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'NUSA TENGGARA TIMUR',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'KALIMANTAN BARAT',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'KALIMANTAN TENGAH',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'KALIMANTAN SELATAN',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'KALIMANTAN TIMUR',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'KALIMANTAN UTARA',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'SULAWESI UTARA',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'SULAWESI TENGAH',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'SULAWESI SELATAN',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'SULAWESI TENGGARA',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'GORONTALO',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'SULAWESI BARAT',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'MALUKU',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'MALUKU UTARA',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'PAPUA BARAT',
					'latitude' => null,
					'longitude' => null
				],
				[
					'name' => 'PAPUA',
					'latitude' => null,
					'longitude' => null
				]

		]);
    }
}

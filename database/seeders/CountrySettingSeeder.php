<?php

namespace Database\Seeders;

use App\Models\CountrySetting;
use Illuminate\Database\Seeder;

class CountrySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CountrySetting::insert([
            [
                'country_name'   => 'Tajikistan',
                'country_alpha2' => 'TJ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.201',
                'updated_at'     => '2020-03-12 08:05:36.201'
            ],
            [
                'country_name'   => 'Jamaica',
                'country_alpha2' => 'JM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.204',
                'updated_at'     => '2020-03-12 08:05:36.204'
            ],
            [
                'country_name'   => 'Haiti',
                'country_alpha2' => 'HT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.206',
                'updated_at'     => '2020-03-12 08:05:36.206'
            ],
            [
                'country_name'   => 'Sao Tome and Principe',
                'country_alpha2' => 'ST',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.208',
                'updated_at'     => '2020-03-12 08:05:36.208'
            ],
            [
                'country_name'   => 'Montserrat',
                'country_alpha2' => 'MS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.209',
                'updated_at'     => '2020-03-12 08:05:36.209'
            ],
            [
                'country_name'   => 'United Arab Emirates',
                'country_alpha2' => 'AE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.211',
                'updated_at'     => '2020-03-12 08:05:36.211'
            ],
            [
                'country_name'   => 'Pakistan',
                'country_alpha2' => 'PK',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.213',
                'updated_at'     => '2020-03-12 08:05:36.213'
            ],
            [
                'country_name'   => 'Netherlands',
                'country_alpha2' => 'NL',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.215',
                'updated_at'     => '2020-03-12 08:05:36.215'
            ],
            [
                'country_name'   => 'Luxembourg',
                'country_alpha2' => 'LU',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.217',
                'updated_at'     => '2020-03-12 08:05:36.217'
            ],
            [
                'country_name'   => 'Belize',
                'country_alpha2' => 'BZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.219',
                'updated_at'     => '2020-03-12 08:05:36.219'
            ],
            [
                'country_name'   => 'Iran (Islamic Republic of)',
                'country_alpha2' => 'IR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.221',
                'updated_at'     => '2020-03-12 08:05:36.221'
            ],
            [
                'country_name'   => 'Bolivia (Plurinational State of)',
                'country_alpha2' => 'BO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.223',
                'updated_at'     => '2020-03-12 08:05:36.223'
            ],
            [
                'country_name'   => 'Uruguay',
                'country_alpha2' => 'UY',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.225',
                'updated_at'     => '2020-03-12 08:05:36.225'
            ],
            [
                'country_name'   => 'Ghana',
                'country_alpha2' => 'GH',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.227',
                'updated_at'     => '2020-03-12 08:05:36.227'
            ],
            [
                'country_name'   => 'Saudi Arabia',
                'country_alpha2' => 'SA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.229',
                'updated_at'     => '2020-03-12 08:05:36.229'
            ],
            [
                'country_name'   => "Côte d''Ivoire",
                'country_alpha2' => 'CI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.231',
                'updated_at'     => '2020-03-12 08:05:36.231'
            ],
            [
                'country_name'   => 'Saint Martin (French part)',
                'country_alpha2' => 'MF',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.232',
                'updated_at'     => '2020-03-12 08:05:36.232'
            ],
            [
                'country_name'   => 'French Southern Territories',
                'country_alpha2' => 'TF',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.234',
                'updated_at'     => '2020-03-12 08:05:36.234'
            ],
            [
                'country_name'   => 'Anguilla',
                'country_alpha2' => 'AI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.236',
                'updated_at'     => '2020-03-12 08:05:36.236'
            ],
            [
                'country_name'   => 'Qatar',
                'country_alpha2' => 'QA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.238',
                'updated_at'     => '2020-03-12 08:05:36.238'
            ],
            [
                'country_name'   => 'Sint Maarten (Dutch part)',
                'country_alpha2' => 'SX',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.240',
                'updated_at'     => '2020-03-12 08:05:36.240'
            ],
            [
                'country_name'   => 'Libya',
                'country_alpha2' => 'LY',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.241',
                'updated_at'     => '2020-03-12 08:05:36.241'
            ],
            [
                'country_name'   => 'Bouvet Island',
                'country_alpha2' => 'BV',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.243',
                'updated_at'     => '2020-03-12 08:05:36.243'
            ],
            [
                'country_name'   => 'Papua New Guinea',
                'country_alpha2' => 'PG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.245',
                'updated_at'     => '2020-03-12 08:05:36.245'
            ],
            [
                'country_name'   => 'Kyrgyzstan',
                'country_alpha2' => 'KG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.247',
                'updated_at'     => '2020-03-12 08:05:36.247'
            ],
            [
                'country_name'   => 'Equatorial Guinea',
                'country_alpha2' => 'GQ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.251',
                'updated_at'     => '2020-03-12 08:05:36.251'
            ],
            [
                'country_name'   => 'Western Sahara',
                'country_alpha2' => 'EH',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.254',
                'updated_at'     => '2020-03-12 08:05:36.254'
            ],
            [
                'country_name'   => 'Niue',
                'country_alpha2' => 'NU',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.256',
                'updated_at'     => '2020-03-12 08:05:36.256'
            ],
            [
                'country_name'   => 'Puerto Rico',
                'country_alpha2' => 'PR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.258',
                'updated_at'     => '2020-03-12 08:05:36.258'
            ],
            [
                'country_name'   => 'Grenada',
                'country_alpha2' => 'GD',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.259',
                'updated_at'     => '2020-03-12 08:05:36.259'
            ],
            [
                'country_name'   => 'Korea (Republic of)',
                'country_alpha2' => 'KR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.261',
                'updated_at'     => '2020-03-12 08:05:36.261'
            ],
            [
                'country_name'   => 'Heard Island and McDonald Islands',
                'country_alpha2' => 'HM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.263',
                'updated_at'     => '2020-03-12 08:05:36.263'
            ],
            [
                'country_name'   => 'San Marino',
                'country_alpha2' => 'SM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.265',
                'updated_at'     => '2020-03-12 08:05:36.265'
            ],
            [
                'country_name'   => 'Sierra Leone',
                'country_alpha2' => 'SL',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.266',
                'updated_at'     => '2020-03-12 08:05:36.266'
            ],
            [
                'country_name'   => 'Congo (Democratic Republic of the)',
                'country_alpha2' => 'CD',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.268',
                'updated_at'     => '2020-03-12 08:05:36.268'
            ],
            [
                'country_name'   => 'North Macedonia',
                'country_alpha2' => 'MK',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.270',
                'updated_at'     => '2020-03-12 08:05:36.270'
            ],
            [
                'country_name'   => 'Turkey',
                'country_alpha2' => 'TR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.272',
                'updated_at'     => '2020-03-12 08:05:36.272'
            ],
            [
                'country_name'   => 'Algeria',
                'country_alpha2' => 'DZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.273',
                'updated_at'     => '2020-03-12 08:05:36.273'
            ],
            [
                'country_name'   => 'Georgia',
                'country_alpha2' => 'GE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.275',
                'updated_at'     => '2020-03-12 08:05:36.275'
            ],
            [
                'country_name'   => 'Palestine, State of',
                'country_alpha2' => 'PS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.277',
                'updated_at'     => '2020-03-12 08:05:36.277'
            ],
            [
                'country_name'   => 'Barbados',
                'country_alpha2' => 'BB',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.278',
                'updated_at'     => '2020-03-12 08:05:36.278'
            ],
            [
                'country_name'   => 'Ukraine',
                'country_alpha2' => 'UA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.281',
                'updated_at'     => '2020-03-12 08:05:36.281'
            ],
            [
                'country_name'   => 'Guadeloupe',
                'country_alpha2' => 'GP',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.283',
                'updated_at'     => '2020-03-12 08:05:36.283'
            ],
            [
                'country_name'   => 'French Polynesia',
                'country_alpha2' => 'PF',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.286',
                'updated_at'     => '2020-03-12 08:05:36.286'
            ],
            [
                'country_name'   => 'Namibia',
                'country_alpha2' => 'NA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.289',
                'updated_at'     => '2020-03-12 08:05:36.289'
            ],
            [
                'country_name'   => 'Botswana',
                'country_alpha2' => 'BW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.292',
                'updated_at'     => '2020-03-12 08:05:36.292'
            ],
            [
                'country_name'   => 'Syrian Arab Republic',
                'country_alpha2' => 'SY',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.295',
                'updated_at'     => '2020-03-12 08:05:36.295'
            ],
            [
                'country_name'   => 'Togo',
                'country_alpha2' => 'TG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.296',
                'updated_at'     => '2020-03-12 08:05:36.296'
            ],
            [
                'country_name'   => 'Dominican Republic',
                'country_alpha2' => 'DO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.298',
                'updated_at'     => '2020-03-12 08:05:36.298'
            ],
            [
                'country_name'   => 'Antarctica',
                'country_alpha2' => 'AQ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.300',
                'updated_at'     => '2020-03-12 08:05:36.300'
            ],
            [
                'country_name'   => 'Switzerland',
                'country_alpha2' => 'CH',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.302',
                'updated_at'     => '2020-03-12 08:05:36.302'
            ],
            [
                'country_name'   => 'Madagascar',
                'country_alpha2' => 'MG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.304',
                'updated_at'     => '2020-03-12 08:05:36.304'
            ],
            [
                'country_name'   => 'Faroe Islands',
                'country_alpha2' => 'FO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.306',
                'updated_at'     => '2020-03-12 08:05:36.306'
            ],
            [
                'country_name'   => 'Virgin Islands (British)',
                'country_alpha2' => 'VG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.308',
                'updated_at'     => '2020-03-12 08:05:36.308'
            ],
            [
                'country_name'   => 'Gibraltar',
                'country_alpha2' => 'GI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.309',
                'updated_at'     => '2020-03-12 08:05:36.309'
            ],
            [
                'country_name'   => 'Brunei Darussalam',
                'country_alpha2' => 'BN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.311',
                'updated_at'     => '2020-03-12 08:05:36.311'
            ],
            [
                'country_name'   => "Lao People''s Democratic Republic",
                'country_alpha2' => 'LA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.313',
                'updated_at'     => '2020-03-12 08:05:36.313'
            ],
            [
                'country_name'   => 'Iceland',
                'country_alpha2' => 'IS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.315',
                'updated_at'     => '2020-03-12 08:05:36.315'
            ],
            [
                'country_name'   => 'Estonia',
                'country_alpha2' => 'EE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.317',
                'updated_at'     => '2020-03-12 08:05:36.317'
            ],
            [
                'country_name'   => 'United States Minor Outlying Islands',
                'country_alpha2' => 'UM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.319',
                'updated_at'     => '2020-03-12 08:05:36.319'
            ],
            [
                'country_name'   => 'Lithuania',
                'country_alpha2' => 'LT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.321',
                'updated_at'     => '2020-03-12 08:05:36.321'
            ],
            [
                'country_name'   => 'Serbia',
                'country_alpha2' => 'RS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.322',
                'updated_at'     => '2020-03-12 08:05:36.322'
            ],
            [
                'country_name'   => 'Mauritania',
                'country_alpha2' => 'MR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.324',
                'updated_at'     => '2020-03-12 08:05:36.324'
            ],
            [
                'country_name'   => 'Andorra',
                'country_alpha2' => 'AD',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.326',
                'updated_at'     => '2020-03-12 08:05:36.326'
            ],
            [
                'country_name'   => 'Hungary',
                'country_alpha2' => 'HU',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.327',
                'updated_at'     => '2020-03-12 08:05:36.327'
            ],
            [
                'country_name'   => 'Tokelau',
                'country_alpha2' => 'TK',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.329',
                'updated_at'     => '2020-03-12 08:05:36.329'
            ],
            [
                'country_name'   => 'Malaysia',
                'country_alpha2' => 'MY',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.331',
                'updated_at'     => '2020-03-12 08:05:36.331'
            ],
            [
                'country_name'   => 'Angola',
                'country_alpha2' => 'AO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.332',
                'updated_at'     => '2020-03-12 08:05:36.332'
            ],
            [
                'country_name'   => 'Cabo Verde',
                'country_alpha2' => 'CV',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.334',
                'updated_at'     => '2020-03-12 08:05:36.334'
            ],
            [
                'country_name'   => 'Norfolk Island',
                'country_alpha2' => 'NF',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.336',
                'updated_at'     => '2020-03-12 08:05:36.336'
            ],
            [
                'country_name'   => 'Panama',
                'country_alpha2' => 'PA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.337',
                'updated_at'     => '2020-03-12 08:05:36.337'
            ],
            [
                'country_name'   => 'Guinea-Bissau',
                'country_alpha2' => 'GW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.339',
                'updated_at'     => '2020-03-12 08:05:36.339'
            ],
            [
                'country_name'   => 'Belgium',
                'country_alpha2' => 'BE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.341',
                'updated_at'     => '2020-03-12 08:05:36.341'
            ],
            [
                'country_name'   => 'Portugal',
                'country_alpha2' => 'PT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.342',
                'updated_at'     => '2020-03-12 08:05:36.342'
            ],
            [
                'country_name'   => 'United Kingdom of Great Britain and Northern Ireland',
                'country_alpha2' => 'GB',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.344',
                'updated_at'     => '2020-03-12 08:05:36.344'
            ],
            [
                'country_name'   => 'Isle of Man',
                'country_alpha2' => 'IM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.346',
                'updated_at'     => '2020-03-12 08:05:36.346'
            ],
            [
                'country_name'   => 'United States of America',
                'country_alpha2' => 'US',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.347',
                'updated_at'     => '2020-03-12 08:05:36.347'
            ],
            [
                'country_name'   => 'Yemen',
                'country_alpha2' => 'YE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.349',
                'updated_at'     => '2020-03-12 08:05:36.349'
            ],
            [
                'country_name'   => 'Hong Kong',
                'country_alpha2' => 'HK',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.350',
                'updated_at'     => '2020-03-12 08:05:36.350'
            ],
            [
                'country_name'   => 'Azerbaijan',
                'country_alpha2' => 'AZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.352',
                'updated_at'     => '2020-03-12 08:05:36.352'
            ],
            [
                'country_name'   => 'Cocos (Keeling) Islands',
                'country_alpha2' => 'CC',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.354',
                'updated_at'     => '2020-03-12 08:05:36.354'
            ],
            [
                'country_name'   => 'Mali',
                'country_alpha2' => 'ML',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.355',
                'updated_at'     => '2020-03-12 08:05:36.355'
            ],
            [
                'country_name'   => 'Slovakia',
                'country_alpha2' => 'SK',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.357',
                'updated_at'     => '2020-03-12 08:05:36.357'
            ],
            [
                'country_name'   => 'Vanuatu',
                'country_alpha2' => 'VU',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.359',
                'updated_at'     => '2020-03-12 08:05:36.359'
            ],
            [
                'country_name'   => 'Timor-Leste',
                'country_alpha2' => 'TL',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.360',
                'updated_at'     => '2020-03-12 08:05:36.360'
            ],
            [
                'country_name'   => 'Croatia',
                'country_alpha2' => 'HR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.362',
                'updated_at'     => '2020-03-12 08:05:36.362'
            ],
            [
                'country_name'   => 'Suriname',
                'country_alpha2' => 'SR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.364',
                'updated_at'     => '2020-03-12 08:05:36.364'
            ],
            [
                'country_name'   => 'Mauritius',
                'country_alpha2' => 'MU',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.366',
                'updated_at'     => '2020-03-12 08:05:36.366'
            ],
            [
                'country_name'   => 'Czech Republic',
                'country_alpha2' => 'CZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.367',
                'updated_at'     => '2020-03-12 08:05:36.367'
            ],
            [
                'country_name'   => 'Saint Pierre and Miquelon',
                'country_alpha2' => 'PM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.369',
                'updated_at'     => '2020-03-12 08:05:36.369'
            ],
            [
                'country_name'   => 'Lesotho',
                'country_alpha2' => 'LS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.371',
                'updated_at'     => '2020-03-12 08:05:36.371'
            ],
            [
                'country_name'   => 'Samoa',
                'country_alpha2' => 'WS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.372',
                'updated_at'     => '2020-03-12 08:05:36.372'
            ],
            [
                'country_name'   => 'Comoros',
                'country_alpha2' => 'KM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.374',
                'updated_at'     => '2020-03-12 08:05:36.374'
            ],
            [
                'country_name'   => 'Italy',
                'country_alpha2' => 'IT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.375',
                'updated_at'     => '2020-03-12 08:05:36.375'
            ],
            [
                'country_name'   => 'Burundi',
                'country_alpha2' => 'BI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.377',
                'updated_at'     => '2020-03-12 08:05:36.377'
            ],
            [
                'country_name'   => 'Wallis and Futuna',
                'country_alpha2' => 'WF',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.379',
                'updated_at'     => '2020-03-12 08:05:36.379'
            ],
            [
                'country_name'   => 'Guinea',
                'country_alpha2' => 'GN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.380',
                'updated_at'     => '2020-03-12 08:05:36.380'
            ],
            [
                'country_name'   => 'Singapore',
                'country_alpha2' => 'SG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.382',
                'updated_at'     => '2020-03-12 08:05:36.382'
            ],
            [
                'country_name'   => 'Colombia',
                'country_alpha2' => 'CO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.384',
                'updated_at'     => '2020-03-12 08:05:36.384'
            ],
            [
                'country_name'   => 'China',
                'country_alpha2' => 'CN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.385',
                'updated_at'     => '2020-03-12 08:05:36.385'
            ],
            [
                'country_name'   => 'Aruba',
                'country_alpha2' => 'AW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.387',
                'updated_at'     => '2020-03-12 08:05:36.387'
            ],
            [
                'country_name'   => 'Morocco',
                'country_alpha2' => 'MA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.389',
                'updated_at'     => '2020-03-12 08:05:36.389'
            ],
            [
                'country_name'   => 'Finland',
                'country_alpha2' => 'FI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.390',
                'updated_at'     => '2020-03-12 08:05:36.390'
            ],
            [
                'country_name'   => 'Holy See',
                'country_alpha2' => 'VA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.392',
                'updated_at'     => '2020-03-12 08:05:36.392'
            ],
            [
                'country_name'   => 'Zimbabwe',
                'country_alpha2' => 'ZW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.393',
                'updated_at'     => '2020-03-12 08:05:36.393'
            ],
            [
                'country_name'   => 'Cayman Islands',
                'country_alpha2' => 'KY',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.395',
                'updated_at'     => '2020-03-12 08:05:36.395'
            ],
            [
                'country_name'   => 'Bahrain',
                'country_alpha2' => 'BH',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.397',
                'updated_at'     => '2020-03-12 08:05:36.397'
            ],
            [
                'country_name'   => 'Paraguay',
                'country_alpha2' => 'PY',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.399',
                'updated_at'     => '2020-03-12 08:05:36.399'
            ],
            [
                'country_name'   => 'Ecuador',
                'country_alpha2' => 'EC',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.400',
                'updated_at'     => '2020-03-12 08:05:36.400'
            ],
            [
                'country_name'   => 'Liberia',
                'country_alpha2' => 'LR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.402',
                'updated_at'     => '2020-03-12 08:05:36.402'
            ],
            [
                'country_name'   => 'Russian Federation',
                'country_alpha2' => 'RU',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.404',
                'updated_at'     => '2020-03-12 08:05:36.404'
            ],
            [
                'country_name'   => 'Poland',
                'country_alpha2' => 'PL',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.406',
                'updated_at'     => '2020-03-12 08:05:36.406'
            ],
            [
                'country_name'   => 'Oman',
                'country_alpha2' => 'OM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.407',
                'updated_at'     => '2020-03-12 08:05:36.407'
            ],
            [
                'country_name'   => 'Malta',
                'country_alpha2' => 'MT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.409',
                'updated_at'     => '2020-03-12 08:05:36.409'
            ],
            [
                'country_name'   => 'South Sudan',
                'country_alpha2' => 'SS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.411',
                'updated_at'     => '2020-03-12 08:05:36.411'
            ],
            [
                'country_name'   => 'Germany',
                'country_alpha2' => 'DE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.412',
                'updated_at'     => '2020-03-12 08:05:36.412'
            ],
            [
                'country_name'   => 'Turkmenistan',
                'country_alpha2' => 'TM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.414',
                'updated_at'     => '2020-03-12 08:05:36.414'
            ],
            [
                'country_name'   => 'Svalbard and Jan Mayen',
                'country_alpha2' => 'SJ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.416',
                'updated_at'     => '2020-03-12 08:05:36.416'
            ],
            [
                'country_name'   => 'Myanmar',
                'country_alpha2' => 'MM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.418',
                'updated_at'     => '2020-03-12 08:05:36.418'
            ],
            [
                'country_name'   => 'Trinidad and Tobago',
                'country_alpha2' => 'TT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.420',
                'updated_at'     => '2020-03-12 08:05:36.420'
            ],
            [
                'country_name'   => 'Israel',
                'country_alpha2' => 'IL',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.422',
                'updated_at'     => '2020-03-12 08:05:36.422'
            ],
            [
                'country_name'   => 'Bangladesh',
                'country_alpha2' => 'BD',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.423',
                'updated_at'     => '2020-03-12 08:05:36.423'
            ],
            [
                'country_name'   => 'Nauru',
                'country_alpha2' => 'NR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.425',
                'updated_at'     => '2020-03-12 08:05:36.425'
            ],
            [
                'country_name'   => 'Sri Lanka',
                'country_alpha2' => 'LK',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.427',
                'updated_at'     => '2020-03-12 08:05:36.427'
            ],
            [
                'country_name'   => 'Uganda',
                'country_alpha2' => 'UG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.429',
                'updated_at'     => '2020-03-12 08:05:36.429'
            ],
            [
                'country_name'   => 'Nigeria',
                'country_alpha2' => 'NG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.431',
                'updated_at'     => '2020-03-12 08:05:36.431'
            ],
            [
                'country_name'   => 'Bonaire, Sint Eustatius and Saba',
                'country_alpha2' => 'BQ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.433',
                'updated_at'     => '2020-03-12 08:05:36.433'
            ],
            [
                'country_name'   => 'Mexico',
                'country_alpha2' => 'MX',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.434',
                'updated_at'     => '2020-03-12 08:05:36.434'
            ],
            [
                'country_name'   => 'Curaçao',
                'country_alpha2' => 'CW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.436',
                'updated_at'     => '2020-03-12 08:05:36.436'
            ],
            [
                'country_name'   => 'Slovenia',
                'country_alpha2' => 'SI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.438',
                'updated_at'     => '2020-03-12 08:05:36.438'
            ],
            [
                'country_name'   => 'Mongolia',
                'country_alpha2' => 'MN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.440',
                'updated_at'     => '2020-03-12 08:05:36.440'
            ],
            [
                'country_name'   => 'Canada',
                'country_alpha2' => 'CA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.442',
                'updated_at'     => '2020-03-12 08:05:36.442'
            ],
            [
                'country_name'   => 'Åland Islands',
                'country_alpha2' => 'AX',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.444',
                'updated_at'     => '2020-03-12 08:05:36.444'
            ],
            [
                'country_name'   => 'Viet Nam',
                'country_alpha2' => 'VN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.445',
                'updated_at'     => '2020-03-12 08:05:36.445'
            ],
            [
                'country_name'   => 'Taiwan, Province of China',
                'country_alpha2' => 'TW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.447',
                'updated_at'     => '2020-03-12 08:05:36.447'
            ],
            [
                'country_name'   => 'Japan',
                'country_alpha2' => 'JP',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.449',
                'updated_at'     => '2020-03-12 08:05:36.449'
            ],
            [
                'country_name'   => 'British Indian Ocean Territory',
                'country_alpha2' => 'IO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.450',
                'updated_at'     => '2020-03-12 08:05:36.450'
            ],
            [
                'country_name'   => 'Romania',
                'country_alpha2' => 'RO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.452',
                'updated_at'     => '2020-03-12 08:05:36.452'
            ],
            [
                'country_name'   => 'Bulgaria',
                'country_alpha2' => 'BG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.454',
                'updated_at'     => '2020-03-12 08:05:36.454'
            ],
            [
                'country_name'   => 'Guam',
                'country_alpha2' => 'GU',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.455',
                'updated_at'     => '2020-03-12 08:05:36.455'
            ],
            [
                'country_name'   => 'Brazil',
                'country_alpha2' => 'BR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.457',
                'updated_at'     => '2020-03-12 08:05:36.457'
            ],
            [
                'country_name'   => 'Armenia',
                'country_alpha2' => 'AM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.459',
                'updated_at'     => '2020-03-12 08:05:36.459'
            ],
            [
                'country_name'   => 'Zambia',
                'country_alpha2' => 'ZM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.461',
                'updated_at'     => '2020-03-12 08:05:36.461'
            ],
            [
                'country_name'   => 'Djibouti',
                'country_alpha2' => 'DJ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.462',
                'updated_at'     => '2020-03-12 08:05:36.462'
            ],
            [
                'country_name'   => 'Jersey',
                'country_alpha2' => 'JE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.464',
                'updated_at'     => '2020-03-12 08:05:36.464'
            ],
            [
                'country_name'   => 'Austria',
                'country_alpha2' => 'AT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.466',
                'updated_at'     => '2020-03-12 08:05:36.466'
            ],
            [
                'country_name'   => 'Cameroon',
                'country_alpha2' => 'CM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.467',
                'updated_at'     => '2020-03-12 08:05:36.467'
            ],
            [
                'country_name'   => 'Sweden',
                'country_alpha2' => 'SE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.469',
                'updated_at'     => '2020-03-12 08:05:36.469'
            ],
            [
                'country_name'   => 'Fiji',
                'country_alpha2' => 'FJ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.471',
                'updated_at'     => '2020-03-12 08:05:36.471'
            ],
            [
                'country_name'   => 'Kazakhstan',
                'country_alpha2' => 'KZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.472',
                'updated_at'     => '2020-03-12 08:05:36.472'
            ],
            [
                'country_name'   => 'Greenland',
                'country_alpha2' => 'GL',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.474',
                'updated_at'     => '2020-03-12 08:05:36.474'
            ],
            [
                'country_name'   => 'Guyana',
                'country_alpha2' => 'GY',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.476',
                'updated_at'     => '2020-03-12 08:05:36.476'
            ],
            [
                'country_name'   => 'Christmas Island',
                'country_alpha2' => 'CX',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.477',
                'updated_at'     => '2020-03-12 08:05:36.477'
            ],
            [
                'country_name'   => 'Malawi',
                'country_alpha2' => 'MW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.479',
                'updated_at'     => '2020-03-12 08:05:36.479'
            ],
            [
                'country_name'   => 'Tunisia',
                'country_alpha2' => 'TN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.481',
                'updated_at'     => '2020-03-12 08:05:36.481'
            ],
            [
                'country_name'   => 'South Africa',
                'country_alpha2' => 'ZA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.482',
                'updated_at'     => '2020-03-12 08:05:36.482'
            ],
            [
                'country_name'   => 'Tonga',
                'country_alpha2' => 'TO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.484',
                'updated_at'     => '2020-03-12 08:05:36.484'
            ],
            [
                'country_name'   => 'Cyprus',
                'country_alpha2' => 'CY',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.486',
                'updated_at'     => '2020-03-12 08:05:36.486'
            ],
            [
                'country_name'   => 'Maldives',
                'country_alpha2' => 'MV',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.487',
                'updated_at'     => '2020-03-12 08:05:36.487'
            ],
            [
                'country_name'   => 'Pitcairn',
                'country_alpha2' => 'PN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.489',
                'updated_at'     => '2020-03-12 08:05:36.489'
            ],
            [
                'country_name'   => 'Rwanda',
                'country_alpha2' => 'RW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.491',
                'updated_at'     => '2020-03-12 08:05:36.491'
            ],
            [
                'country_name'   => 'Nicaragua',
                'country_alpha2' => 'NI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.493',
                'updated_at'     => '2020-03-12 08:05:36.493'
            ],
            [
                'country_name'   => 'Saint Kitts and Nevis',
                'country_alpha2' => 'KN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.494',
                'updated_at'     => '2020-03-12 08:05:36.494'
            ],
            [
                'country_name'   => 'Benin',
                'country_alpha2' => 'BJ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.496',
                'updated_at'     => '2020-03-12 08:05:36.496'
            ],
            [
                'country_name'   => 'Ethiopia',
                'country_alpha2' => 'ET',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.498',
                'updated_at'     => '2020-03-12 08:05:36.498'
            ],
            [
                'country_name'   => 'Gambia',
                'country_alpha2' => 'GM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.499',
                'updated_at'     => '2020-03-12 08:05:36.499'
            ],
            [
                'country_name'   => 'Tanzania, United Republic of',
                'country_alpha2' => 'TZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.501',
                'updated_at'     => '2020-03-12 08:05:36.501'
            ],
            [
                'country_name'   => 'Saint Vincent and the Grenadines',
                'country_alpha2' => 'VC',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.503',
                'updated_at'     => '2020-03-12 08:05:36.503'
            ],
            [
                'country_name'   => 'Falkland Islands (Malvinas)',
                'country_alpha2' => 'FK',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.505',
                'updated_at'     => '2020-03-12 08:05:36.505'
            ],
            [
                'country_name'   => 'Sudan',
                'country_alpha2' => 'SD',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.506',
                'updated_at'     => '2020-03-12 08:05:36.506'
            ],
            [
                'country_name'   => 'Monaco',
                'country_alpha2' => 'MC',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.508',
                'updated_at'     => '2020-03-12 08:05:36.508'
            ],
            [
                'country_name'   => 'Australia',
                'country_alpha2' => 'AU',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.510',
                'updated_at'     => '2020-03-12 08:05:36.510'
            ],
            [
                'country_name'   => 'Chile',
                'country_alpha2' => 'CL',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.511',
                'updated_at'     => '2020-03-12 08:05:36.511'
            ],
            [
                'country_name'   => 'Denmark',
                'country_alpha2' => 'DK',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.513',
                'updated_at'     => '2020-03-12 08:05:36.513'
            ],
            [
                'country_name'   => 'France',
                'country_alpha2' => 'FR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.515',
                'updated_at'     => '2020-03-12 08:05:36.515'
            ],
            [
                'country_name'   => 'Turks and Caicos Islands',
                'country_alpha2' => 'TC',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.517',
                'updated_at'     => '2020-03-12 08:05:36.517'
            ],
            [
                'country_name'   => 'Cuba',
                'country_alpha2' => 'CU',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.519',
                'updated_at'     => '2020-03-12 08:05:36.519'
            ],
            [
                'country_name'   => 'Albania',
                'country_alpha2' => 'AL',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.520',
                'updated_at'     => '2020-03-12 08:05:36.520'
            ],
            [
                'country_name'   => 'Mozambique',
                'country_alpha2' => 'MZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.522',
                'updated_at'     => '2020-03-12 08:05:36.522'
            ],
            [
                'country_name'   => 'Bahamas',
                'country_alpha2' => 'BS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.524',
                'updated_at'     => '2020-03-12 08:05:36.524'
            ],
            [
                'country_name'   => 'Niger',
                'country_alpha2' => 'NE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.525',
                'updated_at'     => '2020-03-12 08:05:36.525'
            ],
            [
                'country_name'   => 'Guatemala',
                'country_alpha2' => 'GT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.527',
                'updated_at'     => '2020-03-12 08:05:36.527'
            ],
            [
                'country_name'   => 'Liechtenstein',
                'country_alpha2' => 'LI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.529',
                'updated_at'     => '2020-03-12 08:05:36.529'
            ],
            [
                'country_name'   => 'Nepal',
                'country_alpha2' => 'NP',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.530',
                'updated_at'     => '2020-03-12 08:05:36.530'
            ],
            [
                'country_name'   => 'Burkina Faso',
                'country_alpha2' => 'BF',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.532',
                'updated_at'     => '2020-03-12 08:05:36.532'
            ],
            [
                'country_name'   => 'Palau',
                'country_alpha2' => 'PW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.533',
                'updated_at'     => '2020-03-12 08:05:36.533'
            ],
            [
                'country_name'   => 'Kuwait',
                'country_alpha2' => 'KW',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.535',
                'updated_at'     => '2020-03-12 08:05:36.535'
            ],
            [
                'country_name'   => 'India',
                'country_alpha2' => 'IN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.537',
                'updated_at'     => '2020-03-12 08:05:36.537'
            ],
            [
                'country_name'   => 'Gabon',
                'country_alpha2' => 'GA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.538',
                'updated_at'     => '2020-03-12 08:05:36.538'
            ],
            [
                'country_name'   => 'Tuvalu',
                'country_alpha2' => 'TV',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.540',
                'updated_at'     => '2020-03-12 08:05:36.540'
            ],
            [
                'country_name'   => 'Macao',
                'country_alpha2' => 'MO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.541',
                'updated_at'     => '2020-03-12 08:05:36.541'
            ],
            [
                'country_name'   => 'Saint Helena, Ascension and Tristan da Cunha',
                'country_alpha2' => 'SH',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.543',
                'updated_at'     => '2020-03-12 08:05:36.543'
            ],
            [
                'country_name'   => 'Moldova (Republic of)',
                'country_alpha2' => 'MD',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.544',
                'updated_at'     => '2020-03-12 08:05:36.544'
            ],
            [
                'country_name'   => 'Cook Islands',
                'country_alpha2' => 'CK',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.546',
                'updated_at'     => '2020-03-12 08:05:36.546'
            ],
            [
                'country_name'   => 'Argentina',
                'country_alpha2' => 'AR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.548',
                'updated_at'     => '2020-03-12 08:05:36.548'
            ],
            [
                'country_name'   => 'Seychelles',
                'country_alpha2' => 'SC',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.550',
                'updated_at'     => '2020-03-12 08:05:36.550'
            ],
            [
                'country_name'   => 'Ireland',
                'country_alpha2' => 'IE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.551',
                'updated_at'     => '2020-03-12 08:05:36.551'
            ],
            [
                'country_name'   => 'Spain',
                'country_alpha2' => 'ES',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.553',
                'updated_at'     => '2020-03-12 08:05:36.553'
            ],
            [
                'country_name'   => 'Lebanon',
                'country_alpha2' => 'LB',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.555',
                'updated_at'     => '2020-03-12 08:05:36.555'
            ],
            [
                'country_name'   => 'Bermuda',
                'country_alpha2' => 'BM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.556',
                'updated_at'     => '2020-03-12 08:05:36.556'
            ],
            [
                'country_name'   => 'Réunion',
                'country_alpha2' => 'RE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.558',
                'updated_at'     => '2020-03-12 08:05:36.558'
            ],
            [
                'country_name'   => 'Kiribati',
                'country_alpha2' => 'KI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.560',
                'updated_at'     => '2020-03-12 08:05:36.560'
            ],
            [
                'country_name'   => 'Antigua and Barbuda',
                'country_alpha2' => 'AG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.561',
                'updated_at'     => '2020-03-12 08:05:36.561'
            ],
            [
                'country_name'   => 'Martinique',
                'country_alpha2' => 'MQ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.563',
                'updated_at'     => '2020-03-12 08:05:36.563'
            ],
            [
                'country_name'   => 'El Salvador',
                'country_alpha2' => 'SV',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.565',
                'updated_at'     => '2020-03-12 08:05:36.565'
            ],
            [
                'country_name'   => 'Jordan',
                'country_alpha2' => 'JO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.566',
                'updated_at'     => '2020-03-12 08:05:36.566'
            ],
            [
                'country_name'   => 'Thailand',
                'country_alpha2' => 'TH',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.568',
                'updated_at'     => '2020-03-12 08:05:36.568'
            ],
            [
                'country_name'   => 'Somalia',
                'country_alpha2' => 'SO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.570',
                'updated_at'     => '2020-03-12 08:05:36.570'
            ],
            [
                'country_name'   => 'Marshall Islands',
                'country_alpha2' => 'MH',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.572',
                'updated_at'     => '2020-03-12 08:05:36.572'
            ],
            [
                'country_name'   => 'Congo',
                'country_alpha2' => 'CG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.573',
                'updated_at'     => '2020-03-12 08:05:36.573'
            ],
            [
                'country_name'   => "Korea (Democratic People''s Republic of)",
                'country_alpha2' => 'KP',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.575',
                'updated_at'     => '2020-03-12 08:05:36.575'
            ],
            [
                'country_name'   => 'French Guiana',
                'country_alpha2' => 'GF',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.576',
                'updated_at'     => '2020-03-12 08:05:36.576'
            ],
            [
                'country_name'   => 'Bosnia and Herzegovina',
                'country_alpha2' => 'BA',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.578',
                'updated_at'     => '2020-03-12 08:05:36.578'
            ],
            [
                'country_name'   => 'Mayotte',
                'country_alpha2' => 'YT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.580',
                'updated_at'     => '2020-03-12 08:05:36.580'
            ],
            [
                'country_name'   => 'South Georgia and the South Sandwich Islands',
                'country_alpha2' => 'GS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.581',
                'updated_at'     => '2020-03-12 08:05:36.581'
            ],
            [
                'country_name'   => 'Kenya',
                'country_alpha2' => 'KE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.583',
                'updated_at'     => '2020-03-12 08:05:36.583'
            ],
            [
                'country_name'   => 'Peru',
                'country_alpha2' => 'PE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.601',
                'updated_at'     => '2020-03-12 08:05:36.601'
            ],
            [
                'country_name'   => 'Bhutan',
                'country_alpha2' => 'BT',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.603',
                'updated_at'     => '2020-03-12 08:05:36.603'
            ],
            [
                'country_name'   => 'eSwatini',
                'country_alpha2' => 'SZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.604',
                'updated_at'     => '2020-03-12 08:05:36.604'
            ],
            [
                'country_name'   => 'Costa Rica',
                'country_alpha2' => 'CR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.606',
                'updated_at'     => '2020-03-12 08:05:36.606'
            ],
            [
                'country_name'   => 'Chad',
                'country_alpha2' => 'TD',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.608',
                'updated_at'     => '2020-03-12 08:05:36.608'
            ],
            [
                'country_name'   => 'Dominica',
                'country_alpha2' => 'DM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.610',
                'updated_at'     => '2020-03-12 08:05:36.610'
            ],
            [
                'country_name'   => 'New Caledonia',
                'country_alpha2' => 'NC',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.611',
                'updated_at'     => '2020-03-12 08:05:36.611'
            ],
            [
                'country_name'   => 'Greece',
                'country_alpha2' => 'GR',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.613',
                'updated_at'     => '2020-03-12 08:05:36.613'
            ],
            [
                'country_name'   => 'Guernsey',
                'country_alpha2' => 'GG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.614',
                'updated_at'     => '2020-03-12 08:05:36.614'
            ],
            [
                'country_name'   => 'Honduras',
                'country_alpha2' => 'HN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.616',
                'updated_at'     => '2020-03-12 08:05:36.616'
            ],
            [
                'country_name'   => 'Virgin Islands (U.S.)',
                'country_alpha2' => 'VI',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.618',
                'updated_at'     => '2020-03-12 08:05:36.618'
            ],
            [
                'country_name'   => 'Central African Republic',
                'country_alpha2' => 'CF',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.620',
                'updated_at'     => '2020-03-12 08:05:36.620'
            ],
            [
                'country_name'   => 'Senegal',
                'country_alpha2' => 'SN',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.628',
                'updated_at'     => '2020-03-12 08:05:36.628'
            ],
            [
                'country_name'   => 'Afghanistan',
                'country_alpha2' => 'AF',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.630',
                'updated_at'     => '2020-03-12 08:05:36.630'
            ],
            [
                'country_name'   => 'Northern Mariana Islands',
                'country_alpha2' => 'MP',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.631',
                'updated_at'     => '2020-03-12 08:05:36.631'
            ],
            [
                'country_name'   => 'Philippines',
                'country_alpha2' => 'PH',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.633',
                'updated_at'     => '2020-03-12 08:05:36.633'
            ],
            [
                'country_name'   => 'Belarus',
                'country_alpha2' => 'BY',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.635',
                'updated_at'     => '2020-03-12 08:05:36.635'
            ],
            [
                'country_name'   => 'Latvia',
                'country_alpha2' => 'LV',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.636',
                'updated_at'     => '2020-03-12 08:05:36.636'
            ],
            [
                'country_name'   => 'Norway',
                'country_alpha2' => 'NO',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.638',
                'updated_at'     => '2020-03-12 08:05:36.638'
            ],
            [
                'country_name'   => 'Egypt',
                'country_alpha2' => 'EG',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.640',
                'updated_at'     => '2020-03-12 08:05:36.640'
            ],
            [
                'country_name'   => 'Cambodia',
                'country_alpha2' => 'KH',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.641',
                'updated_at'     => '2020-03-12 08:05:36.641'
            ],
            [
                'country_name'   => 'Iraq',
                'country_alpha2' => 'IQ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.643',
                'updated_at'     => '2020-03-12 08:05:36.643'
            ],
            [
                'country_name'   => 'Saint Lucia',
                'country_alpha2' => 'LC',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.645',
                'updated_at'     => '2020-03-12 08:05:36.645'
            ],
            [
                'country_name'   => 'New Zealand',
                'country_alpha2' => 'NZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.647',
                'updated_at'     => '2020-03-12 08:05:36.647'
            ],
            [
                'country_name'   => 'Saint Barthélemy',
                'country_alpha2' => 'BL',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.648',
                'updated_at'     => '2020-03-12 08:05:36.648'
            ],
            [
                'country_name'   => 'Uzbekistan',
                'country_alpha2' => 'UZ',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.650',
                'updated_at'     => '2020-03-12 08:05:36.650'
            ],
            [
                'country_name'   => 'Indonesia',
                'country_alpha2' => 'ID',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.652',
                'updated_at'     => '2020-03-12 08:05:36.652'
            ],
            [
                'country_name'   => 'Eritrea',
                'country_alpha2' => 'ER',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.661',
                'updated_at'     => '2020-03-12 08:05:36.661'
            ],
            [
                'country_name'   => 'Venezuela (Bolivarian Republic of)',
                'country_alpha2' => 'VE',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.662',
                'updated_at'     => '2020-03-12 08:05:36.662'
            ],
            [
                'country_name'   => 'Micronesia (Federated States of)',
                'country_alpha2' => 'FM',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.664',
                'updated_at'     => '2020-03-12 08:05:36.664'
            ],
            [
                'country_name'   => 'Solomon Islands',
                'country_alpha2' => 'SB',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.666',
                'updated_at'     => '2020-03-12 08:05:36.666'
            ],
            [
                'country_name'   => 'Montenegro',
                'country_alpha2' => 'ME',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.668',
                'updated_at'     => '2020-03-12 08:05:36.668'
            ],
            [
                'country_name'   => 'American Samoa',
                'country_alpha2' => 'AS',
                'taxable'        => false,
                'created_at'     => '2020-03-12 08:05:36.670',
                'updated_at'     => '2020-03-12 08:05:36.670'
            ]
        ]);
    }
}

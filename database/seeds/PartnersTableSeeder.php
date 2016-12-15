<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('partners')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'name' => 'CA Technologies',
             'url' => 'http://www.ca.com/',
             'logo_url' => 'ca_technologies.png',
             'description' => 'CA Technologies, formerly known as Computer Associates International, Inc. and CA, Inc., is an American multinational publicly held corporation headquartered in New York City. It ranks as one of the largest independent software corporations in the world. The company creates systems software (and previously applications software) that runs in mainframe, distributed computing, virtual machine and cloud computing environments.',
             'founded_year' => 1976,
             'headquarters_city' => 'New York',
             'headquarters_country' => 'USA',
             'annual_revenue' => 'US$ 4.515 billion (2014)',
             'number_of_employees' => 11500,

             'partner_portal_url' => 'https://partnerportal.ca.com',
             'training_portal_url' => 'https://ca.webinfinity.com/explore/477933',
             'partner_agreements' => 'Global Resale Agreement, Global NDA, Local Participation Agreement in Sweden',
             'partner_tier' => 'Global Platinum Partner'
         ]);

         DB::table('partners')->insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'name' => 'Cisco',
                'url' => 'http://www.cisco.com/',
                'logo_url' => 'cisco.png',
                'description' => 'Cisco Systems, Inc. (known as Cisco) is an American multinational technology conglomerate headquartered in San José, California, that develops, manufactures, and sells networking hardware, telecommunications equipment, and other high-technology services and products. Through its numerous acquired subsidiaries, such as OpenDNS, Cisco Meraki, and Cisco Jasper, Cisco specializes into specific tech markets, such as Internet of Things (IoT), domain security, and energy management.',
                'founded_year' => 1984,
                'headquarters_city' => 'San Jose',
                'headquarters_country' => 'USA',
                'annual_revenue' => 'US$49.24 billion (2016)',
                'number_of_employees' => 71883,

                'partner_portal_url' => 'http://www.cisco.com/c/en/us/partners.html',
                'training_portal_url' => 'https://salesconnect.cisco.com/',
                'partner_agreements' => 'Global Resale Agreement, Global NDA, Local Participation Agreement in Sweden',
                'partner_tier' => 'Global Premier Partner, Platinum Partner in Brazil'
            ]);

            DB::table('partners')->insert([
                   'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                   'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                   'name' => 'Blue Prism',
                   'url' => 'http://www.blueprism.com/',
                   'logo_url' => 'blueprism.png',
                   'description' => 'Blue Prism was formed by a group of process automation experts in 2001. Blue Prism® invented the term Robotic Process Automation. Their software platform enables business operations to be agile and cost effective through rapid automation of manual, rules based, back office administrative processes, reducing cost and improving accuracy by creating a “virtual workforce”.',
                   'founded_year' => 2001,
                   'headquarters_city' => 'London',
                   'headquarters_country' => 'United Kingdom',
                   'annual_revenue' => 'H1\'16: £14.8 million',
                   'number_of_employees' => 120,

                   'partner_portal_url' => 'https://portal.blueprism.com/',
                   'training_portal_url' => 'https://blue-prism.docebosaas.com/',
                   'partner_agreements' => 'Global VAR, NDA (IGATE)',
                   'partner_tier' => 'Partner Tier status to be finalized soon'
               ]);

               DB::table('partners')->insert([
                      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                      'name' => 'Software AG',
                      'url' => 'http://www.softwareag.com/',
                      'logo_url' => 'softwareag.jpg',
                      'description' => 'Founded in 1969, Software AG is an enterprise software company with over 10,000 enterprise customers in over 70 countries. The company is the second largest software vendor in Germany, the seventh largest in Europe[2] and among the top 25 globally[citation needed]. Software AG is traded on the Frankfurt Stock Exchange under the symbol “SOW” and part of the technology index TecDAX.',
                      'founded_year' => 1969,
                      'headquarters_city' => 'Darmstadt',
                      'headquarters_country' => 'Germany',
                      'annual_revenue' => '€857.8 million (2014)',
                      'number_of_employees' => 4421,

                      'partner_portal_url' => 'https://empower.softwareag.com',
                      'training_portal_url' => 'http://knowledge.softwareag.com/',
                      'partner_agreements' => 'Global Strategic Partner Agreement, Local Agreements in China and Brazil',
                      'partner_tier' => 'to be clarified'
                  ]);

                  DB::table('partners')->insert([
                         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                         'name' => 'Lenovo',
                         'url' => 'http://www.lenovo.com/',
                         'logo_url' => 'lenovo.jpg',
                         'description' => 'Lenovo Group Ltd. is a Chinese multinational technology company with headquarters in Beijing, China, and Morrisville, United States. It designs, develops, manufactures and sells personal computers, tablet computers, smartphones, workstations, servers, electronic storage devices, IT management software, and smart televisions. In 2015, Lenovo was the world\'s largest personal computer vendor by unit sales.',
                         'founded_year' => 1984,
                         'headquarters_city' => 'Beijing and Morrisville',
                         'headquarters_country' => 'China and United States',
                         'annual_revenue' => 'US$ 44.91 billion (2016)',
                         'number_of_employees' => 60000,

                         'partner_portal_url' => 'http://www.lenovopartner.com/',
                         'training_portal_url' => 'http://ap.lenovopartner.com/',
                         'partner_agreements' => 'Global Srategic Agreement, NDA, local in Europe and USA',
                         'partner_tier' => 'Platinum in all countries'
                     ]);

                     DB::table('partners')->insert([
                            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                            'name' => 'Sitecore',
                            'url' => 'http://www.sitecore.net/',
                            'logo_url' => 'sitecore.png',
                            'description' => 'Sitecore is a customer experience management company that provides web content management and multichannel marketing automation software. In 1998 in University of Copenhagen alumni Thomas Albert, Jakob Christensen, Peter Christensen, Ole Sas Thrane, and current Sitecore CEO Michael Seifert cofounded Pentia A/S, a systems integration company that focused on implementing websites built on Microsoft technologies. In 2001, Sitecore was spun off as a separate business entity that initially sold content management systems in the Danish market to IT departments.',
                            'founded_year' => 2001,
                            'headquarters_city' => 'Copenhagen',
                            'headquarters_country' => 'Denmark',
                            'annual_revenue' => 'n/a',
                            'number_of_employees' => 1000,

                            'partner_portal_url' => 'http://spn.sitecore.net/default.aspx',
                            'training_portal_url' => 'https://dev.sitecore.net/',
                            'partner_agreements' => 'Global Strategic Partner Agreement, Local Agreements in China and Brazil',
                            'partner_tier' => 'Local Tier in each geography based on skills and projects'
                        ]);

    }
}

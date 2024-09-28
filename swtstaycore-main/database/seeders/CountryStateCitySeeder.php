<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountryStateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nigeria = Country::create([
            'name' => 'Nigeria',
            'iso2' => 'NG',
            'iso3' => 'NGA',
            'phone_code' => '234',
            'capital' => 'Abuja',
            'currency' => 'Naira',
            'currency_code' => 'NGN',
            'currency_symbol' => '₦',
            'tld' => '.ng',
            'native' => 'Nigerian',
            'region' => 'Africa',
            'subregion' => 'Western Africa',
            'active' => true
        ]);

        $data = [
            "Abia" => ["Aba", "Umuahia", "Ohafia", "Arochukwu", "Bende", "Isiala Ngwa", "Isuikwuato", "Ukwa", "Ugwunagbo"],
            "Adamawa" => ["Yola", "Mubi", "Jimeta", "Numan", "Ganye", "Michika", "Gombi", "Toungo", "Lamurde"],
            "Akwa Ibom" => ["Uyo", "Eket", "Ikot Ekpene", "Oron", "Abak", "Ikot Abasi", "Itu", "Etinan", "Onna", "Mkpat Enin"],
            "Anambra" => ["Awka", "Onitsha", "Nnewi", "Ekwulobia", "Aguata", "Ihiala", "Ogidi", "Otuocha"],
            "Bauchi" => ["Bauchi", "Azare", "Misau", "Jama'are", "Ningi", "Darazo", "Katagum", "Tafawa Balewa"],
            "Bayelsa" => ["Yenagoa", "Brass", "Ogbia", "Nembe", "Sagbama", "Ekeremor", "Kolokuma-Opokuma"],
            "Benue" => ["Makurdi", "Gboko", "Otukpo", "Katsina-Ala", "Vandeikya", "Adikpo", "Igumale"],
            "Borno" => ["Maiduguri", "Biu", "Bama", "Monguno", "Dikwa", "Ngala", "Gwoza", "Kukawa", "Chibok"],
            "Cross River" => ["Calabar", "Ogoja", "Ugep", "Ikom", "Obudu", "Obubra", "Akamkpa", "Biase", "Yakurr"],
            "Delta" => ["Asaba", "Warri", "Sapele", "Ughelli", "Oghara", "Ozoro", "Agbor", "Kwale", "Oleh"],
            "Ebonyi" => ["Abakaliki", "Afikpo", "Onueke", "Edda", "Ikwo", "Izzi", "Ohaozara", "Ishielu", "Ezza"],
            "Edo" => ["Benin City", "Auchi", "Ekpoma", "Uromi", "Irrua", "Sabongida-Ora", "Igarra", "Ubiaja"],
            "Ekiti" => ["Ado Ekiti", "Ikere Ekiti", "Ilawe Ekiti", "Oye Ekiti", "Iyin Ekiti", "Ijero Ekiti", "Ikole Ekiti", "Aramoko Ekiti"],
            "Enugu" => ["Enugu", "Nsukka", "Awgu", "Oji River", "Udi", "Ezeagu", "Agbani", "9th Mile Corner", "Emene"],
            "Gombe" => ["Gombe", "Kumo", "Billiri", "Dukku", "Deba", "Bajoga", "Nafada", "Kaltungo"],
            "Imo" => ["Owerri", "Orlu", "Okigwe", "Mbaise", "Oguta", "Nkwerre", "Mbano", "Ngor Okpala", "Obowo"],
            "Jigawa" => ["Dutse", "Hadejia", "Birnin Kudu", "Gumel", "Kazaure", "Ringim", "Gwaram", "Guri", "Roni"],
            "Kaduna" => ["Kaduna", "Zaria", "Kafanchan", "Kagoro", "Saminaka", "Kujama", "Soba", "Kwoi", "Birnin Gwari"],
            "Kano" => ["Kano", "Wudil", "Rano", "Gaya", "Bichi", "Dambatta", "Gezawa", "Karaye", "Bunkure"],
            "Katsina" => ["Katsina", "Daura", "Funtua", "Malumfashi", "Dutsin-Ma", "Kankia", "Jibia", "Bakori", "Kankara"],
            "Kebbi" => ["Birnin Kebbi", "Argungu", "Yauri", "Zuru", "Koko", "Bagudo", "Jega", "Bunza", "Maiyama"],
            "Kogi" => ["Lokoja", "Okene", "Idah", "Kabba", "Anyigba", "Dekina", "Ajaokuta", "Egbe", "Isanlu"],
            "Kwara" => ["Ilorin", "Offa", "Jebba", "Omu-Aran", "Patigi", "Kaiama", "Bode Saadu", "Lafiagi", "Share"],
            "Lagos" => ["Lagos", "Ikeja", "Epe", "Badagry", "Ikorodu", "Somolu", "Mushin", "Oshodi", "Yaba"],
            "Nasarawa" => ["Lafia", "Keffi", "Akwanga", "Karu", "Nasarawa", "Doma", "Wamba", "Awe", "Toto"],
            "Niger" => ["Minna", "Suleja", "Kontagora", "Bida", "New Bussa", "Agaie", "Lapai", "Mokwa", "Wushishi"],
            "Ogun" => ["Abeokuta", "Ijebu Ode", "Sagamu", "Ilaro", "Ota", "Ago Iwoye", "Ijebu Igbo", "Imeko", "Ifo"],
            "Ondo" => ["Akure", "Ondo", "Owo", "Ikare", "Oka Akoko", "Igbokoda", "Okitipupa", "Ile-Oluji", "Idanre"],
            "Osun" => ["Osogbo", "Ile Ife", "Ilesa", "Ede", "Ikirun", "Iwo", "Ejigbo", "Modakeke", "Oshogbo"],
            "Oyo" => ["Ibadan", "Ogbomosho", "Oyo", "Iseyin", "Saki", "Igboho", "Igbo Ora", "Fiditi", "Kisi"],
            "Plateau" => ["Jos", "Barkin Ladi", "Pankshin", "Shendam", "Mangu", "Langtang", "Riyom", "Bokkos", "Kwalla"],
            "Rivers" => ["Port Harcourt", "Bonny", "Omoku", "Ahoada", "Bori", "Elele", "Oyigbo", "Okrika", "Opobo"],
            "Sokoto" => ["Sokoto", "Tambuwal", "Wamako", "Gwadabawa", "Goronyo", "Bodinga", "Illela", "Rabah", "Gada"],
            "Taraba" => ["Jalingo", "Wukari", "Sardauna", "Bali", "Takum", "Zing", "Ibi", "Gashaka", "Gassol"],
            "Yobe" => ["Damaturu", "Potiskum", "Gashua", "Nguru", "Geidam", "Buni Yadi", "Gujba", "Goniri", "Machina"],
            "Zamfara" => ["Gusau", "Kaura Namoda", "Anka", "Talata Mafara", "Maru", "Shinkafi", "Bakura", "Zurmi", "Gummi"],
            "FCT" => ["Abuja", "Gwagwalada", "Kuje", "Kwali", "Bwari", "Abaji"]
        ];
        foreach ($data as $stateName => $cities) {
            $state = $nigeria->states()->create(['name' => $stateName]);

            foreach ($cities as $cityName) {
                $state->cities()->create(['name' => $cityName]);
            }
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            "aa" => [
                "name" => "Afar",
                "native" => "Afar"
            ],
            "ab" => [
                "name" => "Abkhazian",
                "native" => "Аҧсуа"
            ],
            "af" => [
                "name" => "Afrikaans",
                "native" => "Afrikaans"
            ],
            "ak" => [
                "name" => "Akan",
                "native" => "Akana"
            ],
            "am" => [
                "name" => "Amharic",
                "native" => "አማርኛ"
            ],
            "an" => [
                "name" => "Aragonese",
                "native" => "Aragonés"
            ],
            "as" => [
                "name" => "Assamese",
                "native" => "অসমীয়া"
            ],
            "av" => [
                "name" => "Avar",
                "native" => "Авар"
            ],
            "ay" => [
                "name" => "Aymara",
                "native" => "Aymar"
            ],
            "az" => [
                "name" => "Azerbaijani",
                "native" => "Azərbaycanca"
            ],
            "ba" => [
                "name" => "Bashkir",
                "native" => "Башҡорт"
            ],
            "be" => [
                "name" => "Belarusian",
                "native" => "Беларуская"
            ],
            "bg" => [
                "name" => "Bulgarian",
                "native" => "Български"
            ],
            "bh" => [
                "name" => "Bihari",
                "native" => "भोजपुरी"
            ],
            "bi" => [
                "name" => "Bislama",
                "native" => "Bislama"
            ],
            "bm" => [
                "name" => "Bambara",
                "native" => "Bamanankan"
            ],
            "bn" => [
                "name" => "Bengali",
                "native" => "বাংলা"
            ],
            "bo" => [
                "name" => "Tibetan",
                "native" => "བོད་ཡིག"
            ],
            "br" => [
                "name" => "Breton",
                "native" => "Brezhoneg"
            ],
            "bs" => [
                "name" => "Bosnian",
                "native" => "Bosanski"
            ],
            "ca" => [
                "name" => "Catalan",
                "native" => "Català"
            ],
            "ce" => [
                "name" => "Chechen",
                "native" => "Нохчийн"
            ],
            "ch" => [
                "name" => "Chamorro",
                "native" => "Chamoru"
            ],
            "co" => [
                "name" => "Corsican",
                "native" => "Corsu"
            ],
            "cr" => [
                "name" => "Cree",
                "native" => "Nehiyaw"
            ],
            "cs" => [
                "name" => "Czech",
                "native" => "Čeština"
            ],
            "cv" => [
                "name" => "Chuvash",
                "native" => "Чăваш"
            ],
            "cy" => [
                "name" => "Welsh",
                "native" => "Cymraeg"
            ],
            "da" => [
                "name" => "Danish",
                "native" => "Dansk"
            ],
            "de" => [
                "name" => "German",
                "native" => "Deutsch"
            ],
            "dz" => [
                "name" => "Dzongkha",
                "native" => "ཇོང་ཁ"
            ],
            "ee" => [
                "name" => "Ewe",
                "native" => "Ɛʋɛ"
            ],
            "el" => [
                "name" => "Greek",
                "native" => "Ελληνικά"
            ],
            "en" => [
                "name" => "English",
                "native" => "English"
            ],
            "eo" => [
                "name" => "Esperanto",
                "native" => "Esperanto"
            ],
            "es" => [
                "name" => "Spanish",
                "native" => "Español"
            ],
            "et" => [
                "name" => "Estonian",
                "native" => "Eesti"
            ],
            "eu" => [
                "name" => "Basque",
                "native" => "Euskara"
            ],
            "ff" => [
                "name" => "Peul",
                "native" => "Fulfulde"
            ],
            "fi" => [
                "name" => "Finnish",
                "native" => "Suomi"
            ],
            "fj" => [
                "name" => "Fijian",
                "native" => "Na Vosa Vakaviti"
            ],
            "fo" => [
                "name" => "Faroese",
                "native" => "Føroyskt"
            ],
            "fr" => [
                "name" => "French",
                "native" => "Français"
            ],
            "fy" => [
                "name" => "West Frisian",
                "native" => "Frysk"
            ],
            "ga" => [
                "name" => "Irish",
                "native" => "Gaeilge"
            ],
            "gd" => [
                "name" => "Scottish Gaelic",
                "native" => "Gàidhlig"
            ],
            "gl" => [
                "name" => "Galician",
                "native" => "Galego"
            ],
            "gn" => [
                "name" => "Guarani",
                "native" => "Avañe'ẽ"
            ],
            "gu" => [
                "name" => "Gujarati",
                "native" => "ગુજરાતી"
            ],
            "gv" => [
                "name" => "Manx",
                "native" => "Gaelg"
            ],
            "hi" => [
                "name" => "Hindi",
                "native" => "हिन्दी"
            ],
            "ho" => [
                "name" => "Hiri Motu",
                "native" => "Hiri Motu"
            ],
            "hr" => [
                "name" => "Croatian",
                "native" => "Hrvatski"
            ],
            "ht" => [
                "name" => "Haitian",
                "native" => "Krèyol ayisyen"
            ],
            "hu" => [
                "name" => "Hungarian",
                "native" => "Magyar"
            ],
            "hy" => [
                "name" => "Armenian",
                "native" => "Հայերեն"
            ],
            "hz" => [
                "name" => "Herero",
                "native" => "Otsiherero"
            ],
            "ia" => [
                "name" => "Interlingua",
                "native" => "Interlingua"
            ],
            "id" => [
                "name" => "Indonesian",
                "native" => "Bahasa Indonesia"
            ],
            "ie" => [
                "name" => "Interlingue",
                "native" => "Interlingue"
            ],
            "ig" => [
                "name" => "Igbo",
                "native" => "Igbo"
            ],
            "ii" => [
                "name" => "Sichuan Yi",
                "native" => "ꆇꉙ"
            ],
            "ik" => [
                "name" => "Inupiak",
                "native" => "Iñupiak"
            ],
            "io" => [
                "name" => "Ido",
                "native" => "Ido"
            ],
            "is" => [
                "name" => "Icelandic",
                "native" => "Íslenska"
            ],
            "it" => [
                "name" => "Italian",
                "native" => "Italiano"
            ],
            "iu" => [
                "name" => "Inuktitut",
                "native" => "ᐃᓄᒃᑎᑐᑦ"
            ],
            "ja" => [
                "name" => "Japanese",
                "native" => "日本語"
            ],
            "jv" => [
                "name" => "Javanese",
                "native" => "Basa Jawa"
            ],
            "ka" => [
                "name" => "Georgian",
                "native" => "ქართული"
            ],
            "kg" => [
                "name" => "Kongo",
                "native" => "KiKongo"
            ],
            "ki" => [
                "name" => "Kikuyu",
                "native" => "Gĩkũyũ"
            ],
            "kj" => [
                "name" => "Kuanyama",
                "native" => "Kuanyama"
            ],
            "kk" => [
                "name" => "Kazakh",
                "native" => "Қазақша"
            ],
            "kl" => [
                "name" => "Greenlandic",
                "native" => "Kalaallisut"
            ],
            "km" => [
                "name" => "Cambodian",
                "native" => "ភាសាខ្មែរ"
            ],
            "kn" => [
                "name" => "Kannada",
                "native" => "ಕನ್ನಡ"
            ],
            "ko" => [
                "name" => "Korean",
                "native" => "한국어"
            ],
            "kr" => [
                "name" => "Kanuri",
                "native" => "Kanuri"
            ],
            "kv" => [
                "name" => "Komi",
                "native" => "Коми"
            ],
            "kw" => [
                "name" => "Cornish",
                "native" => "Kernewek"
            ],
            "ky" => [
                "name" => "Kyrgyz",
                "native" => "Кыргызча"
            ],
            "la" => [
                "name" => "Latin",
                "native" => "Latina"
            ],
            "lb" => [
                "name" => "Luxembourgish",
                "native" => "Lëtzebuergesch"
            ],
            "lg" => [
                "name" => "Ganda",
                "native" => "Luganda"
            ],
            "li" => [
                "name" => "Limburgian",
                "native" => "Limburgs"
            ],
            "ln" => [
                "name" => "Lingala",
                "native" => "Lingála"
            ],
            "lo" => [
                "name" => "Laotian",
                "native" => "ລາວ"
            ],
            "lt" => [
                "name" => "Lithuanian",
                "native" => "Lietuvių"
            ],
            "lu" => [
                "name" => "Luba-Katanga",
                "native" => "Tshiluba"
            ],
            "lv" => [
                "name" => "Latvian",
                "native" => "Latviešu"
            ],
            "mg" => [
                "name" => "Malagasy",
                "native" => "Malagasy"
            ],
            "mh" => [
                "name" => "Marshallese",
                "native" => "Kajin Majel"
            ],
            "mi" => [
                "name" => "Maori",
                "native" => "Māori"
            ],
            "mk" => [
                "name" => "Macedonian",
                "native" => "Македонски"
            ],
            "ml" => [
                "name" => "Malayalam",
                "native" => "മലയാളം"
            ],
            "mn" => [
                "name" => "Mongolian",
                "native" => "Монгол"
            ],
            "mo" => [
                "name" => "Moldovan",
                "native" => "Moldovenească"
            ],
            "mr" => [
                "name" => "Marathi",
                "native" => "मराठी"
            ],
            "ms" => [
                "name" => "Malay",
                "native" => "Bahasa Melayu"
            ],
            "mt" => [
                "name" => "Maltese",
                "native" => "bil-Malti"
            ],
            "my" => [
                "name" => "Burmese",
                "native" => "မြန်မာစာ"
            ],
            "na" => [
                "name" => "Nauruan",
                "native" => "Dorerin Naoero"
            ],
            "nb" => [
                "name" => "Norwegian Bokmål",
                "native" => "Norsk bokmål"
            ],
            "nd" => [
                "name" => "North Ndebele",
                "native" => "Sindebele"
            ],
            "ne" => [
                "name" => "Nepali",
                "native" => "नेपाली"
            ],
            "ng" => [
                "name" => "Ndonga",
                "native" => "Oshiwambo"
            ],
            "nl" => [
                "name" => "Dutch",
                "native" => "Nederlands"
            ],
            "nn" => [
                "name" => "Norwegian Nynorsk",
                "native" => "Norsk nynorsk"
            ],
            "no" => [
                "name" => "Norwegian",
                "native" => "Norsk"
            ],
            "nr" => [
                "name" => "South Ndebele",
                "native" => "isiNdebele"
            ],
            "nv" => [
                "name" => "Navajo",
                "native" => "Diné bizaad"
            ],
            "ny" => [
                "name" => "Chichewa",
                "native" => "Chi-Chewa"
            ],
            "oc" => [
                "name" => "Occitan",
                "native" => "Occitan"
            ],
            "oj" => [
                "name" => "Ojibwa",
                "native" => "ᐊᓂᔑᓈᐯᒧᐎᓐ"
            ],
            "om" => [
                "name" => "Oromo",
                "native" => "Oromoo"
            ],
            "or" => [
                "name" => "Oriya",
                "native" => "ଓଡ଼ିଆ"
            ],
            "os" => [
                "name" => "Ossetian",
                "native" => "Иронау"
            ],
            "pa" => [
                "name" => "Panjabi",
                "native" => "ਪੰਜਾਬੀ"
            ],
            "pi" => [
                "name" => "Pali",
                "native" => "Pāli"
            ],
            "pl" => [
                "name" => "Polish",
                "native" => "Polski"
            ],
            "pt" => [
                "name" => "Portuguese",
                "native" => "Português"
            ],
            "qu" => [
                "name" => "Quechua",
                "native" => "Runa Simi"
            ],
            "rm" => [
                "name" => "Raeto Romance",
                "native" => "Rumantsch"
            ],
            "rn" => [
                "name" => "Kirundi",
                "native" => "Kirundi"
            ],
            "ro" => [
                "name" => "Romanian",
                "native" => "Română"
            ],
            "ru" => [
                "name" => "Russian",
                "native" => "Русский"
            ],
            "rw" => [
                "name" => "Rwandi",
                "native" => "Kinyarwandi"
            ],
            "sa" => [
                "name" => "Sanskrit",
                "native" => "संस्कृतम्"
            ],
            "sc" => [
                "name" => "Sardinian",
                "native" => "Sardu"
            ],
            "sd" => [
                "name" => "Sindhi",
                "native" => "सिनधि"
            ],
            "se" => [
                "name" => "Northern Sami",
                "native" => "Sámegiella"
            ],
            "sg" => [
                "name" => "Sango",
                "native" => "Sängö"
            ],
            "sh" => [
                "name" => "Serbo-Croatian",
                "native" => "Srpskohrvatski"
            ],
            "si" => [
                "name" => "Sinhalese",
                "native" => "සිංහල"
            ],
            "sk" => [
                "name" => "Slovak",
                "native" => "Slovenčina"
            ],
            "sl" => [
                "name" => "Slovenian",
                "native" => "Slovenščina"
            ],
            "sm" => [
                "name" => "Samoan",
                "native" => "Gagana Samoa"
            ],
            "sn" => [
                "name" => "Shona",
                "native" => "chiShona"
            ],
            "so" => [
                "name" => "Somalia",
                "native" => "Soomaaliga"
            ],
            "sq" => [
                "name" => "Albanian",
                "native" => "Shqip"
            ],
            "sr" => [
                "name" => "Serbian",
                "native" => "Српски"
            ],
            "ss" => [
                "name" => "Swati",
                "native" => "SiSwati"
            ],
            "st" => [
                "name" => "Southern Sotho",
                "native" => "Sesotho"
            ],
            "su" => [
                "name" => "Sundanese",
                "native" => "Basa Sunda"
            ],
            "sv" => [
                "name" => "Swedish",
                "native" => "Svenska"
            ],
            "sw" => [
                "name" => "Swahili",
                "native" => "Kiswahili"
            ],
            "ta" => [
                "name" => "Tamil",
                "native" => "தமிழ்"
            ],
            "te" => [
                "name" => "Telugu",
                "native" => "తెలుగు"
            ],
            "tg" => [
                "name" => "Tajik",
                "native" => "Тоҷикӣ"
            ],
            "th" => [
                "name" => "Thai",
                "native" => "ไทย"
            ],
            "ti" => [
                "name" => "Tigrinya",
                "native" => "ትግርኛ"
            ],
            "tk" => [
                "name" => "Turkmen",
                "native" => "Туркмен"
            ],
            "tl" => [
                "name" => "Tagalog",
                "native" => "Tagalog"
            ],
            "tn" => [
                "name" => "Tswana",
                "native" => "Setswana"
            ],
            "to" => [
                "name" => "Tonga",
                "native" => "Lea Faka-Tonga"
            ],
            "tr" => [
                "name" => "Turkish",
                "native" => "Türkçe"
            ],
            "ts" => [
                "name" => "Tsonga",
                "native" => "Xitsonga"
            ],
            "tt" => [
                "name" => "Tatar",
                "native" => "Tatarça"
            ],
            "tw" => [
                "name" => "Twi",
                "native" => "Twi"
            ],
            "ty" => [
                "name" => "Tahitian",
                "native" => "Reo Mā`ohi"
            ],
            "ug" => [
                "name" => "Uyghur",
                "native" => "Uyƣurqə"
            ],
            "uk" => [
                "name" => "Ukrainian",
                "native" => "Українська"
            ],
            "uz" => [
                "name" => "Uzbek",
                "native" => "Ўзбек"
            ],
            "ve" => [
                "name" => "Venda",
                "native" => "Tshivenḓa"
            ],
            "vi" => [
                "name" => "Vietnamese",
                "native" => "Tiếng Việt"
            ],
            "vo" => [
                "name" => "Volapük",
                "native" => "Volapük"
            ],
            "wa" => [
                "name" => "Walloon",
                "native" => "Walon"
            ],
            "wo" => [
                "name" => "Wolof",
                "native" => "Wollof"
            ],
            "xh" => [
                "name" => "Xhosa",
                "native" => "isiXhosa"
            ],
            "yo" => [
                "name" => "Yoruba",
                "native" => "Yorùbá"
            ],
            "za" => [
                "name" => "Zhuang",
                "native" => "Cuengh"
            ],
            "zh" => [
                "name" => "Chinese",
                "native" => "中文"
            ],
            "zu" => [
                "name" => "Zulu",
                "native" => "isiZulu"
            ]
        ];

        $languagesCollection = collect($languages)->map(function ($item, $key) {
            $item['code'] = $key;
            return $item;
        });

        DB::table('languages')->insert($languagesCollection->toArray());
    }
}

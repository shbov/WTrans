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
            "ab" => [
                "name" => "Abkhaz",
                "original_name" => "аҧсуа"
            ],
            "aa" => [
                "name" => "Afar",
                "original_name" => "Afaraf"
            ],
            "af" => [
                "name" => "Afrikaans",
                "original_name" => "Afrikaans"
            ],
            "ak" => [
                "name" => "Akan",
                "original_name" => "Akan"
            ],
            "sq" => [
                "name" => "Albanian",
                "original_name" => "Shqip"
            ],
            "am" => [
                "name" => "Amharic",
                "original_name" => "አማርኛ"
            ],
            "ar" => [
                "name" => "Arabic",
                "original_name" => "العربية"
            ],
            "an" => [
                "name" => "Aragonese",
                "original_name" => "Aragonés"
            ],
            "hy" => [
                "name" => "Armenian",
                "original_name" => "Հայերեն"
            ],
            "as" => [
                "name" => "Assamese",
                "original_name" => "অসমীয়া"
            ],
            "av" => [
                "name" => "Avaric",
                "original_name" => "авар мацӀ, магӀарул мацӀ"
            ],
            "ae" => [
                "name" => "Avestan",
                "original_name" => "avesta"
            ],
            "ay" => [
                "name" => "Aymara",
                "original_name" => "aymar aru"
            ],
            "az" => [
                "name" => "Azerbaijani",
                "original_name" => "azərbaycan dili"
            ],
            "bm" => [
                "name" => "Bambara",
                "original_name" => "bamanankan"
            ],
            "ba" => [
                "name" => "Bashkir",
                "original_name" => "башҡорт теле"
            ],
            "eu" => [
                "name" => "Basque",
                "original_name" => "euskara, euskera"
            ],
            "be" => [
                "name" => "Belarusian",
                "original_name" => "Беларуская"
            ],
            "bn" => [
                "name" => "Bengali",
                "original_name" => "বাংলা"
            ],
            "bh" => [
                "name" => "Bihari",
                "original_name" => "भोजपुरी"
            ],
            "bi" => [
                "name" => "Bislama",
                "original_name" => "Bislama"
            ],
            "bs" => [
                "name" => "Bosnian",
                "original_name" => "bosanski jezik"
            ],
            "br" => [
                "name" => "Breton",
                "original_name" => "brezhoneg"
            ],
            "bg" => [
                "name" => "Bulgarian",
                "original_name" => "български език"
            ],
            "my" => [
                "name" => "Burmese",
                "original_name" => "ဗမာစာ"
            ],
            "ca" => [
                "name" => "Catalan; Valencian",
                "original_name" => "Català"
            ],
            "ch" => [
                "name" => "Chamorro",
                "original_name" => "Chamoru"
            ],
            "ce" => [
                "name" => "Chechen",
                "original_name" => "нохчийн мотт"
            ],
            "ny" => [
                "name" => "Chichewa; Chewa; Nyanja",
                "original_name" => "chiCheŵa, chinyanja"
            ],
            "zh" => [
                "name" => "Chinese",
                "original_name" => "中文 (Zhōngwén), 汉语, 漢語"
            ],
            "cv" => [
                "name" => "Chuvash",
                "original_name" => "чӑваш чӗлхи"
            ],
            "kw" => [
                "name" => "Cornish",
                "original_name" => "Kernewek"
            ],
            "co" => [
                "name" => "Corsican",
                "original_name" => "corsu, lingua corsa"
            ],
            "cr" => [
                "name" => "Cree",
                "original_name" => "ᓀᐦᐃᔭᐍᐏᐣ"
            ],
            "hr" => [
                "name" => "Croatian",
                "original_name" => "hrvatski"
            ],
            "cs" => [
                "name" => "Czech",
                "original_name" => "česky, čeština"
            ],
            "da" => [
                "name" => "Danish",
                "original_name" => "dansk"
            ],
            "dv" => [
                "name" => "Divehi; Dhivehi; Maldivian;",
                "original_name" => "ދިވެހި"
            ],
            "nl" => [
                "name" => "Dutch",
                "original_name" => "Nederlands, Vlaams"
            ],
            "en" => [
                "name" => "English",
                "original_name" => "English"
            ],
            "eo" => [
                "name" => "Esperanto",
                "original_name" => "Esperanto"
            ],
            "et" => [
                "name" => "Estonian",
                "original_name" => "eesti, eesti keel"
            ],
            "ee" => [
                "name" => "Ewe",
                "original_name" => "Eʋegbe"
            ],
            "fo" => [
                "name" => "Faroese",
                "original_name" => "føroyskt"
            ],
            "fj" => [
                "name" => "Fijian",
                "original_name" => "vosa Vakaviti"
            ],
            "fi" => [
                "name" => "Finnish",
                "original_name" => "suomi, suomen kieli"
            ],
            "fr" => [
                "name" => "French",
                "original_name" => "français, langue française"
            ],
            "ff" => [
                "name" => "Fula; Fulah; Pulaar; Pular",
                "original_name" => "Fulfulde, Pulaar, Pular"
            ],
            "gl" => [
                "name" => "Galician",
                "original_name" => "Galego"
            ],
            "ka" => [
                "name" => "Georgian",
                "original_name" => "ქართული"
            ],
            "de" => [
                "name" => "German",
                "original_name" => "Deutsch"
            ],
            "el" => [
                "name" => "Greek, Modern",
                "original_name" => "Ελληνικά"
            ],
            "gn" => [
                "name" => "Guaraní",
                "original_name" => "Avañeẽ"
            ],
            "gu" => [
                "name" => "Gujarati",
                "original_name" => "ગુજરાતી"
            ],
            "ht" => [
                "name" => "Haitian; Haitian Creole",
                "original_name" => "Kreyòl ayisyen"
            ],
            "ha" => [
                "name" => "Hausa",
                "original_name" => "Hausa, هَوُسَ"
            ],
            "he" => [
                "name" => "Hebrew",
                "original_name" => "עברית"
            ],
            "iw" => [
                "name" => "Hebrew",
                "original_name" => "עברית"
            ],
            "hz" => [
                "name" => "Herero",
                "original_name" => "Otjiherero"
            ],
            "hi" => [
                "name" => "Hindi",
                "original_name" => "हिन्दी, हिंदी"
            ],
            "ho" => [
                "name" => "Hiri Motu",
                "original_name" => "Hiri Motu"
            ],
            "hu" => [
                "name" => "Hungarian",
                "original_name" => "Magyar"
            ],
            "ia" => [
                "name" => "Interlingua",
                "original_name" => "Interlingua"
            ],
            "id" => [
                "name" => "Indonesian",
                "original_name" => "Bahasa Indonesia"
            ],
            "ie" => [
                "name" => "Interlingue",
                "original_name" => "Originally called Occidental; then Interlingue after WWII"
            ],
            "ga" => [
                "name" => "Irish",
                "original_name" => "Gaeilge"
            ],
            "ig" => [
                "name" => "Igbo",
                "original_name" => "Asụsụ Igbo"
            ],
            "ik" => [
                "name" => "Inupiaq",
                "original_name" => "Iñupiaq, Iñupiatun"
            ],
            "io" => [
                "name" => "Ido",
                "original_name" => "Ido"
            ],
            "is" => [
                "name" => "Icelandic",
                "original_name" => "Íslenska"
            ],
            "it" => [
                "name" => "Italian",
                "original_name" => "Italiano"
            ],
            "iu" => [
                "name" => "Inuktitut",
                "original_name" => "ᐃᓄᒃᑎᑐᑦ"
            ],
            "ja" => [
                "name" => "Japanese",
                "original_name" => "日本語 (にほんご／にっぽんご)"
            ],
            "jv" => [
                "name" => "Javanese",
                "original_name" => "basa Jawa"
            ],
            "kl" => [
                "name" => "Kalaallisut, Greenlandic",
                "original_name" => "kalaallisut, kalaallit oqaasii"
            ],
            "kn" => [
                "name" => "Kannada",
                "original_name" => "ಕನ್ನಡ"
            ],
            "kr" => [
                "name" => "Kanuri",
                "original_name" => "Kanuri"
            ],
            "ks" => [
                "name" => "Kashmiri",
                "original_name" => "कश्मीरी, كشميري‎"
            ],
            "kk" => [
                "name" => "Kazakh",
                "original_name" => "Қазақ тілі"
            ],
            "km" => [
                "name" => "Khmer",
                "original_name" => "ភាសាខ្មែរ"
            ],
            "ki" => [
                "name" => "Kikuyu, Gikuyu",
                "original_name" => "Gĩkũyũ"
            ],
            "rw" => [
                "name" => "Kinyarwanda",
                "original_name" => "Ikinyarwanda"
            ],
            "ky" => [
                "name" => "Kirghiz, Kyrgyz",
                "original_name" => "кыргыз тили"
            ],
            "kv" => [
                "name" => "Komi",
                "original_name" => "коми кыв"
            ],
            "kg" => [
                "name" => "Kongo",
                "original_name" => "KiKongo"
            ],
            "ko" => [
                "name" => "Korean",
                "original_name" => "한국어 (韓國語), 조선말 (朝鮮語)"
            ],
            "ku" => [
                "name" => "Kurdish",
                "original_name" => "Kurdî, كوردی‎"
            ],
            "kj" => [
                "name" => "Kwanyama, Kuanyama",
                "original_name" => "Kuanyama"
            ],
            "la" => [
                "name" => "Latin",
                "original_name" => "latine, lingua latina"
            ],
            "lb" => [
                "name" => "Luxembourgish, Letzeburgesch",
                "original_name" => "Lëtzebuergesch"
            ],
            "lg" => [
                "name" => "Luganda",
                "original_name" => "Luganda"
            ],
            "li" => [
                "name" => "Limburgish, Limburgan, Limburger",
                "original_name" => "Limburgs"
            ],
            "ln" => [
                "name" => "Lingala",
                "original_name" => "Lingála"
            ],
            "lo" => [
                "name" => "Lao",
                "original_name" => "ພາສາລາວ"
            ],
            "lt" => [
                "name" => "Lithuanian",
                "original_name" => "lietuvių kalba"
            ],
            "lu" => [
                "name" => "Luba-Katanga",
                "original_name" => ""
            ],
            "lv" => [
                "name" => "Latvian",
                "original_name" => "latviešu valoda"
            ],
            "gv" => [
                "name" => "Manx",
                "original_name" => "Gaelg, Gailck"
            ],
            "mk" => [
                "name" => "Macedonian",
                "original_name" => "македонски јазик"
            ],
            "mg" => [
                "name" => "Malagasy",
                "original_name" => "Malagasy fiteny"
            ],
            "ms" => [
                "name" => "Malay",
                "original_name" => "bahasa Melayu, بهاس ملايو‎"
            ],
            "ml" => [
                "name" => "Malayalam",
                "original_name" => "മലയാളം"
            ],
            "mt" => [
                "name" => "Maltese",
                "original_name" => "Malti"
            ],
            "mi" => [
                "name" => "Māori",
                "original_name" => "te reo Māori"
            ],
            "mr" => [
                "name" => "Marathi (Marāṭhī)",
                "original_name" => "मराठी"
            ],
            "mh" => [
                "name" => "Marshallese",
                "original_name" => "Kajin M̧ajeļ"
            ],
            "mn" => [
                "name" => "Mongolian",
                "original_name" => "монгол"
            ],
            "na" => [
                "name" => "Nauru",
                "original_name" => "Ekakairũ Naoero"
            ],
            "nv" => [
                "name" => "Navajo, Navaho",
                "original_name" => "Diné bizaad, Dinékʼehǰí"
            ],
            "nb" => [
                "name" => "Norwegian Bokmål",
                "original_name" => "Norsk bokmål"
            ],
            "nd" => [
                "name" => "North Ndebele",
                "original_name" => "isiNdebele"
            ],
            "ne" => [
                "name" => "Nepali",
                "original_name" => "नेपाली"
            ],
            "ng" => [
                "name" => "Ndonga",
                "original_name" => "Owambo"
            ],
            "nn" => [
                "name" => "Norwegian Nynorsk",
                "original_name" => "Norsk nynorsk"
            ],
            "no" => [
                "name" => "Norwegian",
                "original_name" => "Norsk"
            ],
            "ii" => [
                "name" => "Nuosu",
                "original_name" => "ꆈꌠ꒿ Nuosuhxop"
            ],
            "nr" => [
                "name" => "South Ndebele",
                "original_name" => "isiNdebele"
            ],
            "oc" => [
                "name" => "Occitan",
                "original_name" => "Occitan"
            ],
            "oj" => [
                "name" => "Ojibwe, Ojibwa",
                "original_name" => "ᐊᓂᔑᓈᐯᒧᐎᓐ"
            ],
            "cu" => [
                "name" => "Old Church Slavonic, Church Slavic, Church Slavonic, Old Bulgarian, Old Slavonic",
                "original_name" => "ѩзыкъ словѣньскъ"
            ],
            "om" => [
                "name" => "Oromo",
                "original_name" => "Afaan Oromoo"
            ],
            "or" => [
                "name" => "Oriya",
                "original_name" => "ଓଡ଼ିଆ"
            ],
            "os" => [
                "name" => "Ossetian, Ossetic",
                "original_name" => "ирон æвзаг"
            ],
            "pa" => [
                "name" => "Panjabi, Punjabi",
                "original_name" => "ਪੰਜਾਬੀ, پنجابی‎"
            ],
            "pi" => [
                "name" => "Pāli",
                "original_name" => "पाऴि"
            ],
            "fa" => [
                "name" => "Persian",
                "original_name" => "فارسی"
            ],
            "pl" => [
                "name" => "Polish",
                "original_name" => "polski"
            ],
            "ps" => [
                "name" => "Pashto, Pushto",
                "original_name" => "پښتو"
            ],
            "pt" => [
                "name" => "Portuguese",
                "original_name" => "Português"
            ],
            "qu" => [
                "name" => "Quechua",
                "original_name" => "Runa Simi, Kichwa"
            ],
            "rm" => [
                "name" => "Romansh",
                "original_name" => "rumantsch grischun"
            ],
            "rn" => [
                "name" => "Kirundi",
                "original_name" => "kiRundi"
            ],
            "ro" => [
                "name" => "Romanian, Moldavian, Moldovan",
                "original_name" => "română"
            ],
            "ru" => [
                "name" => "Russian",
                "original_name" => "русский язык"
            ],
            "sa" => [
                "name" => "Sanskrit (Saṁskṛta)",
                "original_name" => "संस्कृतम्"
            ],
            "sc" => [
                "name" => "Sardinian",
                "original_name" => "sardu"
            ],
            "sd" => [
                "name" => "Sindhi",
                "original_name" => "सिन्धी, سنڌي، سندھی‎"
            ],
            "se" => [
                "name" => "Northern Sami",
                "original_name" => "Davvisámegiella"
            ],
            "sm" => [
                "name" => "Samoan",
                "original_name" => "gagana faa Samoa"
            ],
            "sg" => [
                "name" => "Sango",
                "original_name" => "yângâ tî sängö"
            ],
            "sr" => [
                "name" => "Serbian",
                "original_name" => "српски језик"
            ],
            "gd" => [
                "name" => "Scottish Gaelic; Gaelic",
                "original_name" => "Gàidhlig"
            ],
            "sn" => [
                "name" => "Shona",
                "original_name" => "chiShona"
            ],
            "si" => [
                "name" => "Sinhala, Sinhalese",
                "original_name" => "සිංහල"
            ],
            "sk" => [
                "name" => "Slovak",
                "original_name" => "slovenčina"
            ],
            "sl" => [
                "name" => "Slovene",
                "original_name" => "slovenščina"
            ],
            "so" => [
                "name" => "Somali",
                "original_name" => "Soomaaliga, af Soomaali"
            ],
            "st" => [
                "name" => "Southern Sotho",
                "original_name" => "Sesotho"
            ],
            "es" => [
                "name" => "Spanish; Castilian",
                "original_name" => "español, castellano"
            ],
            "su" => [
                "name" => "Sundanese",
                "original_name" => "Basa Sunda"
            ],
            "sw" => [
                "name" => "Swahili",
                "original_name" => "Kiswahili"
            ],
            "ss" => [
                "name" => "Swati",
                "original_name" => "SiSwati"
            ],
            "sv" => [
                "name" => "Swedish",
                "original_name" => "svenska"
            ],
            "ta" => [
                "name" => "Tamil",
                "original_name" => "தமிழ்"
            ],
            "te" => [
                "name" => "Telugu",
                "original_name" => "తెలుగు"
            ],
            "tg" => [
                "name" => "Tajik",
                "original_name" => "тоҷикӣ, toğikī, تاجیکی‎"
            ],
            "th" => [
                "name" => "Thai",
                "original_name" => "ไทย"
            ],
            "ti" => [
                "name" => "Tigrinya",
                "original_name" => "ትግርኛ"
            ],
            "bo" => [
                "name" => "Tibetan Standard, Tibetan, Central",
                "original_name" => "བོད་ཡིག"
            ],
            "tk" => [
                "name" => "Turkmen",
                "original_name" => "Türkmen, Түркмен"
            ],
            "tl" => [
                "name" => "Tagalog",
                "original_name" => "Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔"
            ],
            "tn" => [
                "name" => "Tswana",
                "original_name" => "Setswana"
            ],
            "to" => [
                "name" => "Tonga (Tonga Islands)",
                "original_name" => "faka Tonga"
            ],
            "tr" => [
                "name" => "Turkish",
                "original_name" => "Türkçe"
            ],
            "ts" => [
                "name" => "Tsonga",
                "original_name" => "Xitsonga"
            ],
            "tt" => [
                "name" => "Tatar",
                "original_name" => "татарча, tatarça, تاتارچا‎"
            ],
            "tw" => [
                "name" => "Twi",
                "original_name" => "Twi"
            ],
            "ty" => [
                "name" => "Tahitian",
                "original_name" => "Reo Tahiti"
            ],
            "ug" => [
                "name" => "Uighur, Uyghur",
                "original_name" => "Uyƣurqə, ئۇيغۇرچە‎"
            ],
            "uk" => [
                "name" => "Ukrainian",
                "original_name" => "українська"
            ],
            "ur" => [
                "name" => "Urdu",
                "original_name" => "اردو"
            ],
            "uz" => [
                "name" => "Uzbek",
                "original_name" => "zbek, Ўзбек, أۇزبېك‎"
            ],
            "ve" => [
                "name" => "Venda",
                "original_name" => "Tshivenḓa"
            ],
            "vi" => [
                "name" => "Vietnamese",
                "original_name" => "Tiếng Việt"
            ],
            "vo" => [
                "name" => "Volapük",
                "original_name" => "Volapük"
            ],
            "wa" => [
                "name" => "Walloon",
                "original_name" => "Walon"
            ],
            "cy" => [
                "name" => "Welsh",
                "original_name" => "Cymraeg"
            ],
            "wo" => [
                "name" => "Wolof",
                "original_name" => "Wollof"
            ],
            "fy" => [
                "name" => "Western Frisian",
                "original_name" => "Frysk"
            ],
            "xh" => [
                "name" => "Xhosa",
                "original_name" => "isiXhosa"
            ],
            "yi" => [
                "name" => "Yiddish",
                "original_name" => "ייִדיש"
            ],
            "yo" => [
                "name" => "Yoruba",
                "original_name" => "Yorùbá"
            ],
            "za" => [
                "name" => "Zhuang, Chuang",
                "original_name" => "Saɯ cueŋƅ, Saw cuengh"
            ]
        ];


        DB::table('languages')->insert($languages);
    }
}

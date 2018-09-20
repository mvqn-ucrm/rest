# Currency
`GET /currencies`


## Basic Usage

**/currencies**
```php
<?php

use MVQN\REST\UCRM\Endpoints\Currency;
use MVQN\REST\UCRM\Endpoints\Collections\CurrencyCollection;

/** @var CurrencyCollection $currencies */
$currencies = Currency::get();
echo $currencies;
```
```json
[{"id":1,"name":"Afghanis","code":"AFN","symbol":"؋"},{"id":2,"name":"Baht","code":"THB","symbol":"฿"},{"id":3,"name":"Balboa","code":"PAB","symbol":"B/."},{"id":4,"name":"Bolivares Fuertes","code":"VEF","symbol":"Bs"},{"id":5,"name":"Bolivianos","code":"BOB","symbol":"$b"},{"id":6,"name":"Cedis","code":"GHC","symbol":"¢"},{"id":7,"name":"Colón","code":"CRC","symbol":"₡"},{"id":8,"name":"Colones","code":"SVC","symbol":"$"},{"id":9,"name":"Convertible Marka","code":"BAM","symbol":"KM"},{"id":10,"name":"Cordobas","code":"NIO","symbol":"C$"},{"id":11,"name":"Denars","code":"MKD","symbol":"ден"},{"id":12,"name":"Dinars","code":"RSD","symbol":"Дин."},{"id":13,"name":"Dollars","code":"AUD","symbol":"$"},{"id":14,"name":"Dollars","code":"BBD","symbol":"$"},{"id":15,"name":"Dollars","code":"BMD","symbol":"$"},{"id":16,"name":"Dollars","code":"BND","symbol":"$"},{"id":17,"name":"Dollars","code":"BSD","symbol":"$"},{"id":18,"name":"Dollars","code":"BZD","symbol":"BZ$"},{"id":19,"name":"Dollars","code":"CAD","symbol":"$"},{"id":20,"name":"Dollars","code":"FJD","symbol":"$"},{"id":21,"name":"Dollars","code":"GYD","symbol":"$"},{"id":22,"name":"Dollars","code":"HKD","symbol":"$"},{"id":23,"name":"Dollars","code":"JMD","symbol":"J$"},{"id":24,"name":"Dollars","code":"KYD","symbol":"$"},{"id":25,"name":"Dollars","code":"LRD","symbol":"$"},{"id":26,"name":"Dollars","code":"NAD","symbol":"$"},{"id":27,"name":"Dollars","code":"NZD","symbol":"$"},{"id":28,"name":"Dollars","code":"SBD","symbol":"$"},{"id":29,"name":"Dollars","code":"SGD","symbol":"$"},{"id":30,"name":"Dollars","code":"SRD","symbol":"$"},{"id":31,"name":"Dollars","code":"TTD","symbol":"TT$"},{"id":32,"name":"Dollars","code":"TVD","symbol":"$"},{"id":33,"name":"Dollars","code":"USD","symbol":"$"},{"id":34,"name":"Dollars","code":"XCD","symbol":"$"},{"id":35,"name":"Dong","code":"VND","symbol":"₫"},{"id":36,"name":"Euro","code":"EUR","symbol":"€"},{"id":37,"name":"Forint","code":"HUF","symbol":"Ft"},{"id":38,"name":"Guarani","code":"PYG","symbol":"Gs"},{"id":39,"name":"Guilders","code":"ANG","symbol":"ƒ"},{"id":40,"name":"Guilders","code":"AWG","symbol":"ƒ"},{"id":41,"name":"Hryvnia","code":"UAH","symbol":"₴"},{"id":42,"name":"Kips","code":"LAK","symbol":"₭"},{"id":43,"name":"Koruny","code":"CZK","symbol":"Kč"},{"id":44,"name":"Krone","code":"NOK","symbol":"kr"},{"id":45,"name":"Kroner","code":"DKK","symbol":"kr"},{"id":46,"name":"Kronor","code":"SEK","symbol":"kr"},{"id":47,"name":"Kronur","code":"ISK","symbol":"kr"},{"id":48,"name":"Kuna","code":"HRK","symbol":"kn"},{"id":49,"name":"Lati","code":"LVL","symbol":"Ls"},{"id":50,"name":"Leke","code":"ALL","symbol":"Lek"},{"id":51,"name":"Lempiras","code":"HNL","symbol":"L"},{"id":52,"name":"Leva","code":"BGN","symbol":"лв"},{"id":53,"name":"Lira","code":"TRY","symbol":"TL"},{"id":54,"name":"Liras","code":"TRL","symbol":"£"},{"id":55,"name":"Litai","code":"LTL","symbol":"Lt"},{"id":56,"name":"Meticais","code":"MZN","symbol":"MT"},{"id":57,"name":"Nairas","code":"NGN","symbol":"₦"},{"id":58,"name":"New Dollars","code":"TWD","symbol":"NT$"},{"id":59,"name":"New Lei","code":"RON","symbol":"lei"},{"id":60,"name":"New Manats","code":"AZN","symbol":"ман"},{"id":61,"name":"New Shekels","code":"ILS","symbol":"₪"},{"id":62,"name":"Nuevos Soles","code":"PEN","symbol":"S/."},{"id":63,"name":"Pesos","code":"ARS","symbol":"$"},{"id":64,"name":"Pesos","code":"CLP","symbol":"$"},{"id":65,"name":"Pesos","code":"COP","symbol":"$"},{"id":66,"name":"Pesos","code":"CUP","symbol":"₱"},{"id":67,"name":"Pesos","code":"DOP","symbol":"RD$"},{"id":68,"name":"Pesos","code":"MXN","symbol":"$"},{"id":69,"name":"Pesos","code":"PHP","symbol":"Php"},{"id":70,"name":"Pesos","code":"UYU","symbol":"$U"},{"id":71,"name":"Pounds","code":"EGP","symbol":"£"},{"id":72,"name":"Pounds","code":"FKP","symbol":"£"},{"id":73,"name":"Pounds","code":"GBP","symbol":"£"},{"id":74,"name":"Pounds","code":"GGP","symbol":"£"},{"id":75,"name":"Pounds","code":"GIP","symbol":"£"},{"id":76,"name":"Pounds","code":"IMP","symbol":"£"},{"id":77,"name":"Pounds","code":"JEP","symbol":"£"},{"id":78,"name":"Pounds","code":"LBP","symbol":"£"},{"id":79,"name":"Pounds","code":"SHP","symbol":"£"},{"id":80,"name":"Pounds","code":"SYP","symbol":"£"},{"id":81,"name":"Pulas","code":"BWP","symbol":"P"},{"id":82,"name":"Quetzales","code":"GTQ","symbol":"Q"},{"id":83,"name":"Rand","code":"ZAR","symbol":"R"},{"id":84,"name":"Reais","code":"BRL","symbol":"R$"},{"id":85,"name":"Rials","code":"IRR","symbol":"﷼"},{"id":86,"name":"Rials","code":"OMR","symbol":"﷼"},{"id":87,"name":"Rials","code":"QAR","symbol":"﷼"},{"id":88,"name":"Rials","code":"YER","symbol":"﷼"},{"id":89,"name":"Riels","code":"KHR","symbol":"៛"},{"id":90,"name":"Ringgits","code":"MYR","symbol":"RM"},{"id":91,"name":"Riyals","code":"SAR","symbol":"﷼"},{"id":92,"name":"Rubles","code":"BYN","symbol":"p."},{"id":93,"name":"Rubles","code":"RUB","symbol":"руб"},{"id":94,"name":"Rupees","code":"INR","symbol":"Rp"},{"id":95,"name":"Rupees","code":"LKR","symbol":"₨"},{"id":96,"name":"Rupees","code":"MUR","symbol":"₨"},{"id":97,"name":"Rupees","code":"NPR","symbol":"₨"},{"id":98,"name":"Rupees","code":"PKR","symbol":"₨"},{"id":99,"name":"Rupees","code":"SCR","symbol":"₨"},{"id":100,"name":"Rupiahs","code":"IDR","symbol":"Rp"},{"id":101,"name":"Shillings","code":"SOS","symbol":"S"},{"id":102,"name":"Soms","code":"KGS","symbol":"лв"},{"id":103,"name":"Sums","code":"UZS","symbol":"лв"},{"id":104,"name":"Switzerland Francs","code":"CHF","symbol":"CHF"},{"id":105,"name":"Tenge","code":"KZT","symbol":"лв"},{"id":106,"name":"Tugriks","code":"MNT","symbol":"₮"},{"id":107,"name":"Won","code":"KPW","symbol":"₩"},{"id":108,"name":"Won","code":"KRW","symbol":"₩"},{"id":109,"name":"Yen","code":"JPY","symbol":"¥"},{"id":110,"name":"Yuan Renminbi","code":"CNY","symbol":"¥"},{"id":111,"name":"Zimbabwe Dollars","code":"ZWD","symbol":"Z$"},{"id":112,"name":"Zlotych","code":"PLN","symbol":"zł"},{"id":113,"name":"Angolan Kwanza","code":"AOA","symbol":"Kz"},{"id":114,"name":"Kenyan shilling","code":"KES","symbol":"KSh"},{"id":115,"name":"Vanuatu vatu","code":"VUV","symbol":"VT"},{"id":116,"name":"Papua New Guinean kina","code":"PGK","symbol":"K"},{"id":117,"name":"Swazi lilangeni","code":"SZL","symbol":"L"},{"id":118,"name":"Sierra Leonean leone","code":"SLL","symbol":"Le"},{"id":119,"name":"Central African CFA franc","code":"XAF","symbol":"FCFA"},{"id":120,"name":"West African CFA franc","code":"XOF","symbol":"CFA"},{"id":121,"name":"Bangladeshi taka","code":"BDT","symbol":"৳"},{"id":1000,"name":"Algerian Dinar","code":"DZD","symbol":"دج"},{"id":1001,"name":"Moroccan Dirham","code":"MAD","symbol":"دم"},{"id":1002,"name":"Tanzanian shilling","code":"TZS","symbol":"TSh"},{"id":1033,"name":"Emirati dirham","code":"AED","symbol":"د.إ"},{"id":1034,"name":"Burundian franc","code":"BIF","symbol":"FBu"},{"id":1035,"name":"Congolese franc","code":"CDF","symbol":"FC"},{"id":1036,"name":"Cape Verde escudo","code":"CVE","symbol":"$"},{"id":1037,"name":"Djiboutian franc","code":"DJF","symbol":"Fdj"},{"id":1038,"name":"Ethiopian birr","code":"ETB","symbol":"Br"},{"id":1039,"name":"Georgian lari","code":"GEL","symbol":"₾"},{"id":1040,"name":"Ghanaian cedi","code":"GHS","symbol":"GH₵"},{"id":1041,"name":"Gambian dalasi","code":"GMD","symbol":"D"},{"id":1042,"name":"Guinean franc","code":"GNF","symbol":"FG"},{"id":1043,"name":"Haitian gourde","code":"HTG","symbol":"G"},{"id":1044,"name":"Comoro franc","code":"KMF","symbol":"CF"},{"id":1045,"name":"Lesotho loti","code":"LSL","symbol":"L"},{"id":1046,"name":"Moldovan leu","code":"MDL","symbol":"L"},{"id":1047,"name":"Malagasy ariary","code":"MGA","symbol":"Ar"},{"id":1048,"name":"Myanmar kyat","code":"MMK","symbol":"K"},{"id":1049,"name":"Macanese pataca","code":"MOP","symbol":"MOP$"},{"id":1050,"name":"Maldivian rufiyaa","code":"MVR","symbol":"Rf"},{"id":1051,"name":"Malawian kwacha","code":"MWK","symbol":"K"},{"id":1052,"name":"Rwandan franc","code":"RWF","symbol":"FRw"},{"id":1053,"name":"Tajikistani somoni","code":"TJS","symbol":"SM"},{"id":1054,"name":"Tongan paʻanga","code":"TOP","symbol":"T$"},{"id":1055,"name":"Ugandan shilling","code":"UGX","symbol":"USh"},{"id":1056,"name":"Venezuelan bolívar","code":"VEB","symbol":"USh"},{"id":1057,"name":"Samoan tala","code":"WST","symbol":"WS$"},{"id":1058,"name":"CFP franc","code":"XPF","symbol":"CFP"},{"id":1059,"name":"Zambian kwacha","code":"ZMW","symbol":"ZK"},{"id":1060,"name":"Venezuelan bolívar soberano","code":"VES","symbol":"Bs.S."}]
```

**/currencies/:id**
```php
<?php

use MVQN\REST\UCRM\Endpoints\Currency;

/** @var Currency $currency */
$currency = Currency::getById(33);
echo $currency;
```
```json
{"id":33,"name":"Dollars","code":"USD","symbol":"$"}
```


## Helper Methods

**Country::getByName(string $name)**
```php
<?php

use MVQN\REST\UCRM\Endpoints\Currency;
use MVQN\REST\UCRM\Endpoints\Collections\CurrencyCollection;

/** @var CurrencyCollection $currencies */
$currencies = Currency::getByName("Dollars");
echo $currencies."\n";

$currency = $currencies->where("code", "USD")->first();
echo $currencies;
```
```json
[{"id":13,"name":"Dollars","code":"AUD","symbol":"$"},{"id":14,"name":"Dollars","code":"BBD","symbol":"$"},{"id":15,"name":"Dollars","code":"BMD","symbol":"$"},{"id":16,"name":"Dollars","code":"BND","symbol":"$"},{"id":17,"name":"Dollars","code":"BSD","symbol":"$"},{"id":18,"name":"Dollars","code":"BZD","symbol":"BZ$"},{"id":19,"name":"Dollars","code":"CAD","symbol":"$"},{"id":20,"name":"Dollars","code":"FJD","symbol":"$"},{"id":21,"name":"Dollars","code":"GYD","symbol":"$"},{"id":22,"name":"Dollars","code":"HKD","symbol":"$"},{"id":23,"name":"Dollars","code":"JMD","symbol":"J$"},{"id":24,"name":"Dollars","code":"KYD","symbol":"$"},{"id":25,"name":"Dollars","code":"LRD","symbol":"$"},{"id":26,"name":"Dollars","code":"NAD","symbol":"$"},{"id":27,"name":"Dollars","code":"NZD","symbol":"$"},{"id":28,"name":"Dollars","code":"SBD","symbol":"$"},{"id":29,"name":"Dollars","code":"SGD","symbol":"$"},{"id":30,"name":"Dollars","code":"SRD","symbol":"$"},{"id":31,"name":"Dollars","code":"TTD","symbol":"TT$"},{"id":32,"name":"Dollars","code":"TVD","symbol":"$"},{"id":33,"name":"Dollars","code":"USD","symbol":"$"},{"id":34,"name":"Dollars","code":"XCD","symbol":"$"}]
```
```json
{"id":33,"name":"Dollars","code":"USD","symbol":"$"}
```

**Country::getByCode(string $code)**
```php
<?php

use MVQN\REST\UCRM\Endpoints\Currency;

/** @var Currency $currency */
$currency = Currency::getByCode("USD");
echo $currency;
```
```json
{"id":33,"name":"Dollars","code":"USD","symbol":"$"}
```

**Country::getBySymbol(string $symbol)**
```php
<?php

use MVQN\REST\UCRM\Endpoints\Currency;

/** @var Currency $currency */
$currency = Currency::getBySymbol("$")->where("code", "USD")->first();
echo $currency;
```
```json
{"id":33,"name":"Dollars","code":"USD","symbol":"$"}
```
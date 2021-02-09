var country_arr = new Array("Alberta", "British Columbia", "Manitoba", "New Brunswich", "Newfoundland and Labrador", "Northwest Territories", "Nova Scotia", "Nunavut", "Ontaria", "Prince Edward Island", "Quebec", "Saskatchewan", "Yukon");

// States
var s_a = [];
s_a[0] = "";
s_a[1] = "Airdrie|rande Prairie|Red Deer|Beaumont|Hanna|St. Albert|Bonnyville|Hinton|Spruce Grove|Brazeau|Irricana|Strathcona County|Breton|Lacombe|Strathmore|Calgary|Leduc|Sylvan Lake|Camrose|Lethbridge|Swan Hills|Canmore|McLennan|Taber|Didzbury|Medicine Hat|Turner Valley|Drayton Valley|Olds|Vermillion|Edmonton|Onoway|Wood Buffalo|Ft. Saskatchewan|Provost";
s_a[2] = "Burnaby|Lumby|Port Moody|Cache Creek|Maple Ridge|Prince George|Castlegar|Merritt|Prince Rupert|Chemainus|Mission|Richmond|Chilliwack|Nanaimo|Saanich|Clearwater|Nelson|Sooke|Colwood|New Westminster|Sparwood|Coquitlam|North Cowichan|Surrey|Cranbrook|North Vancouver|Terrace|Dawson Creek|North Vancouver|Tumbler|Delta|Osoyoos|Vancouver|Fernie|Parksville|Vancouver|Invermere|Peace River|Vernon|Kamloops|Penticton|Victoria|Kaslo|Port Alberni|Whistler|Langley|Port Hardy";
s_a[3] = "Birtle|Flin Flon|Swan River|Brandon|Snow Lake|The Pas|Cranberry Portage|Steinbach|Thompson|Dauphin|Stonewall|Winnipeg";
s_a[4] = "Cap-Pele|Miramichi|Saint John|Fredericton|Moncton|Saint Stephen|Grand Bay-Westfield|Oromocto|Shippagan|Grand Falls|Port Elgin|Sussex|Memramcook|Sackville|Tracadie-Sheila";
s_a[5] = "Hay River|Mount Pearl |St. John\'s";
s_a[6] = "Corner Brook|Inuvik|YellowKnife";
s_a[7] = "Amherst|Hants County|Pictou|Annapolis|Inverness County|Pictou County|Argyle|Kentville|Queens|Baddeck|County of Kings|Richmond|Bridgewater|Lunenburg|Shelburne|Cape Breton|Lunenburg County|Stellarton|Chester|Mahone Bay|Truro|Cumberland County|New Glasgow|Windsor|East Hants|New Minas|Yarmouth|Halifax|Parrsboro";
s_a[8] = "Iqaluit";
s_a[9] = "Ajax|Halton|Peterborough|Atikokan|Halton Hills|Pickering|Barrie|Hamilton|Port Bruce|Belleville|Hamilton-Wentworth|Port Burwell|Blandford-Blenheim|Hearst|Port Colborne|Blind River|Huntsville|Port Hope|Brampton|Ingersoll|Prince Edward|Brant|James|Quinte West|Brantford|Kanata|Renfrew|Brock|Kincardine|Richmond Hill|Brockville|King|Sarnia|Burlington|Kingston|Sault Ste. Marie|Caledon|Kirkland Lake|Scarborough|Cambridge|Kitchener|Scugog|Chatham-Kent|Larder Lake|Souix Lookout CoC|Sioux Lookout|Chesterville|Leamington|Smiths Falls|Clarington|Lennox-Addington|South-West Oxford|Cobourg|Lincoln|St. Catharines|Cochrane|Lindsay|St. Thomas|Collingwood|London|Stoney Creek|Cornwall|Loyalist Township|Stratford|Cumberland|Markham|Sudbury|Deep River|Metro Toronto|Temagami|Dundas|Merrickville|Thorold|Durham|Milton|Thunder Bay|Dymond|Nepean|Tillsonburg|Ear Falls|Newmarket|Timmins|East Gwillimbury|Niagara|Toronto|East Zorra-Tavistock|Niagara Falls|Uxbridge|Elgin|Niagara-on-the-Lake|Vaughan|Elliot Lake|North Bay|Wainfleet|Flamborough|North Dorchester|Wasaga Beach|Fort Erie|North Dumfries|Waterloo|Fort Frances|North York|Waterloo (Region)|Gananoque|Norwich|Welland|Georgina|Oakville|Wellesley|Glanbrook|Orangeville|West Carleton|Gloucester|Orillia|West Lincoln|Goulbourn|Osgoode|Whitby|Gravenhurst|Oshawa|Wilmot|Grimsby|Ottawa|Windsor|Guelph|Ottawa-Carleton|Woolwich|Haldimand-Norfork|Owen Sound|York|Oxford";
s_a[10] = "Alberton|Montague|Stratford|Charlottetown|Souris|Summerside|Cornwall";
s_a[11] = "Acton Vale|Alma|Amos|Amqui|Asbestos|Baie-Comeau|Baie-d\'Urfé|Baie-Saint-Paul|Barkmere|Beaconsfield|Beauceville|Beauharnois|Beaupré|Bécancour|Bedford|Belleterre|Beloeil|Berthierville|Blainville|Bois-des-Filion|Boisbriand|Bonaventure|Boucherville|Brome Lake|Bromont|Brossard|Brownsburg-Chatham|Candiac|Cap-Chat|Cap-Santé|Carignan|Carleton-sur-Mer|Causapscal|Chambly|Chandler|Chapais|Charlemagne|Château-Richer|Châteauguay|Chibougamau|Clermont|Coaticook|Contrecoeur|Cookshire-Eaton|Coteau-du-Lac|Côte Saint-Luc|Cowansville|Danville|Daveluyville|Dégelis|Delson|Desbiens|Deux-Montagnes|Disraeli|Dolbeau-Mistassini|Dollard-des-Ormeaux|Donnacona|Dorval|Drummondville|Dunham|Duparquet|East Angus|Estérel|Farnham|Fermont|Forestville|Fossambault-sur-le-Lac|Gaspé|Gatineau|Gracefield|Granby|Grande-Rivière|Hampstead|Hudson|Huntingdon|Joliette|Kingsey Falls|Kirkland|L\'Ancienne-Lorette|L\'Assomption|L\'Épiphanie|L\'Île-Cadieux|L\'Île-Dorval|L\'Île-Perrot|La Malbaie|La Pocatière|La Prairie|La Sarre|La Tuque|Lac-Delage|Lac-Mégantic|Lac-Saint-Joseph|Lac-Sergent|Lachute|Laval|Lavaltrie|Lebel-sur-Quévillon|Léry|Lévis|Longueuil|Lorraine|Louiseville|Macamic|Magog|Malartic|Maniwaki|Marieville|Mascouche|Matagami|Matane|Mercier|Métabetchouan–Lac-à-la-Croix|Métis-sur-Mer|Mirabel|Mont-Joli|Mont-Laurier|Mont-Saint-Hilaire|Mont-Tremblant|Montmagny|Montreal|Montreal West (Montréal-Ouest)|Montréal-Est|Mount Royal (Mont-Royal)|Murdochville|Neuville|New Richmond|Nicolet|Normandin|Notre-Dame-de-l\'Île-Perrot|Notre-Dame-des-Prairies|Otterburn Park|Paspébiac|Percé|Pincourt|Plessisville|Pohénégamook|Pointe-Claire|Pont-Rouge|Port-Cartier|Portneuf|Prévost|Princeville|Quebec City|Repentigny|Richelieu|Richmond|Rimouski|Rivière-du-Loup|Rivière-Rouge|Roberval|Rosemère|Rouyn-Noranda|Saguenay|Saint-Augustin-de-Desmaures|Saint-Basile|Saint-Basile-le-Grand|Saint-Bruno-de-Montarville|Saint-Césaire|Saint-Colomban|Saint-Constant|Saint-Eustache|Saint-Félicien|Saint-Gabriel|Saint-Georges|Saint-Hyacinthe|Saint-Jean-sur-Richelieu|Saint-Jérôme|Saint-Joseph-de-Beauce|Saint-Joseph-de-Sorel|Saint-Lambert|Saint-Lazare|Saint-Lin-Laurentides|Saint-Marc-des-Carrières|Saint-Ours|Saint-Pamphile|Saint-Pascal|Saint-Pie|Saint-Raymond|Saint-Rémi|Saint-Sauveur|Saint-Tite|Sainte-Adèle|Sainte-Agathe-des-Monts|Sainte-Anne-de-Beaupré|Sainte-Anne-de-Bellevue|Sainte-Anne-des-Monts|Sainte-Anne-des-Plaines|Sainte-Catherine|Sainte-Catherine-de-la-Jacques-Cartier|Sainte-Julie|Sainte-Marguerite-du-Lac-Masson|Sainte-Marie|Sainte-Marthe-sur-le-Lac|Sainte-Thérèse|Salaberry-de-Valleyfield|Schefferville|Scotstown|Senneterre|Sept-Îles|Shawinigan|Sherbrooke|Sorel-Tracy|Stanstead|Sutton|Témiscaming|Témiscouata-sur-le-Lac|Terrebonne|Thetford Mines|Thurso|Trois-Pistoles|Trois-Rivières|Val-d\'Or|Valcourt|Varennes|Vaudreuil-Dorion|Victoriaville|Ville-Marie|Warwick|Waterloo|Waterville|Westmount|Windsor";
s_a[12] = "Avonlea|Melfort|Swift Current|Colonsay|Nipawin|Tisdale|Craik|Prince Albert|Unity|Creighton|Regina|Weyburn|Eastend|Saskatoon|Wynyard|Esterhazy|Shell Lake|Yorkton|Gravelbourg";
s_a[13] = "Whitehorse|Dawson City|Faro|Watson Lake";


populateCountries("province", "city");

function populateStates(countryElementId, stateElementId) {
	
    "use strict";
	var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select City', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    "use strict";
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Province', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }
}
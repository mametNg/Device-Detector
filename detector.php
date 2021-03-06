<?php

/*
* Device Detector
* Author      : Rahmat Hidayat (Mamet Nugraha)
* License     : https://w3llsquad.or.id
* Version     : 1.1
* Last Update : 26-11-2020
* Contact     -
* Whatsapp    : https://w3llsquad.or.id/s/Wod2c0b
* Facebook    : https://facebook.com/mametdongonew
* Instagram   : https://instagram.com/mamet_nugraha06/
* 
* 
* Messages    : I strongly forbid changing and deleting script code or author names, if you do that you are not a programmer. And you are only a recorder (Ccripts Kidding).
* Please respect us for making this tool
*/

function detector($user="")
{
	// List of detected operating systems
	$os = array("AIX", "Android", "AmigaOS", "Apple TV", "Arch Linux", "BackTrack", "Bada", "BeOS", "BlackBerry OS", "BlackBerry Tablet OS", "Brew", "CentOS", "Chrome OS", "CyanogenMod", "Debian", "DragonFly", "Fedora", "Firefox OS", "Fire OS", "FreeBSD", "Gentoo", "Google TV", "HP-UX", "Haiku OS", "IRIX", "Inferno", "KaiOS", "Knoppix", "Kubuntu", "GNU/Linux", "Lubuntu", "VectorLinux", "Mac", "Maemo", "Mandriva", "MeeGo", "MocorDroid", "Mint", "MildWild", "MorphOS", "NetBSD", "MTK / Nucleus", "Nintendo", "Nintendo Mobile", "OS/2", "OSF1", "OpenBSD", "Ordissimo", "PlayStation Portable", "PlayStation", "Red Hat", "RISC OS", "Remix OS", "RazoDroiD", "Sabayon", "SUSE", "Sailfish OS", "Slackware", "Solaris", "Syllable", "Symbian", "Symbian OS", "Symbian OS Series 40", "Symbian OS Series 60", "Symbian^3", "ThreadX", "Tizen", "TmaxOS", "Ubuntu", "WebTV", "Windows", "Windows CE", "Windows IoT", "Windows Mobile", "Windows Phone", "Windows RT", "Xbox", "Xubuntu", "YunOs", "iOS", "palmOS", "webOS", "Linux x86_64", "Linux i686");

	// List of detected browsers
	$browse = array("115 Browser", "2345 Browser", "360 Phone Browser", "360 Browser", "Avant Browser", "ABrowse", "ANT Fresco", "ANTGalio", "Aloha Browser", "Aloha Browser Lite", "Amaya", "Amigo", "Android Browser", "AOL Desktop", "AOL Shield", "Arora", "Arctic Fox", "Amiga Voyager", "Amiga Aweb", "Atom", "Atomic Web Browser", "Avast Secure Browser", "AVG Secure Browser", "Beaker Browser", "Beamrise", "BlackBerry Browser", "Baidu Browser", "Baidu Spark", "Basilisk", "Beonex", "BlackHawk", "Bunjalloo", "B-Line", "Brave", "BriskBard", "BrowseX", "Camino", "CCleaner", "Centaury", "Coc Coc", "Colibri", "Comodo Dragon", "Coast", "Charon", "CM Browser", "Chrome Frame", "Headless Chrome", "Chrome", "Chrome Mobile iOS", "Conkeror", "Chrome Mobile", "CoolNovo", "CometBird", "COS Browser", "ChromePlus", "Chromium", "Cyberfox", "Cheshire", "Crusta", "Cunaguaro", "Chrome Webview", "dbrowser", "Deepnet Explorer", "Delta Browser", "Dolphin", "Dorado", "Dooble", "Dillo", "DuckDuckGo Privacy Browser", "Ecosia", "Epic", "Elinks", "Element Browser", "Elements Browser", "eZ Browser", "EUI Browser", "GNOME Web", "Espial TV Browser", "Falkon", "Faux Browser", "Firefox Mobile iOS", "Firebird", "Fluid", "Fennec", "Firefox", "Firefox Focus", "Firefox Reality", "Firefox Rocket", "Flock", "Firefox Mobile", "Fireweb", "Fireweb Navigator", "FreeU", "Galeon", "Glass Browser", "Google Earth", "Hawk Turbo Browser", "hola! Browser", "HotJava", "Huawei Browser", "IBrowse", "iCab", "iCab Mobile", "Iridium", "Iron Mobile", "IceCat", "IceDragon", "Isivioo", "Iceweasel", "Internet Explorer", "IE Mobile", "Iron", "Jasmine", "Jig Browser", "Jig Browser Plus", "Jio Browser", "K.Browser", "Kindle Browser", "K-meleon", "Konqueror", "Kapiko", "Kinza", "Kiwi", "Kylo", "Kazehakase", "Cheetah Browser", "LieBaoFast", "LG Browser", "Light", "Links", "Lovense Browser", "LuaKit", "Lulumi", "Lunascape", "Lunascape Lite", "Lynx", "mCent", "MicroB", "NCSA Mosaic", "Meizu Browser", "Mercury", "Mobile Safari", "Midori", "Mobicip", "MIUI Browser", "Mobile Silk", "Minimo", "Mint Browser", "Maxthon", "Mypal", "Nokia Browser", "Nokia OSS Browser", "Nokia Ovi Browser", "Nox Browser", "NetSurf", "NetFront", "NetFront Life", "NetPositive", "Netscape", "NTENT Browser", "Oculus Browser", "Opera Mini iOS", "Obigo", "Odyssey Web Browser", "Off By One", "OhHai Browser", "ONE Browser", "Opera GX", "Opera Neon", "Opera Devices", "Opera Mini", "Opera Mobile", "Opera", "Opera Next", "Opera Touch", "Ordissimo", "Oregano", "Origin In-Game Overlay", "Origyn Web Browser", "Openwave Mobile Browser", "OmniWeb", "Otter Browser", "Palm Blazer", "Pale Moon", "Polypane", "Oppo Browser", "Palm Pre", "Puffin", "Palm WebPro", "Palmscape", "Phoenix", "Polaris", "Polarity", "Microsoft Edge", "QQ Browser Mini", "QQ Browser", "Qutebrowser", "QupZilla", "Qwant Mobile", "QtWebEngine", "Realme Browser", "Rekonq", "RockMelt", "Samsung Browser", "Sailfish Browser", "SEMC-Browser", "Sogou Explorer", "Safari", "Safe Exam Browser", "SalamWeb", "Shiira", "SimpleBrowser", "Sizzy", "Skyfire", "Seraphic Sraf", "Sleipnir", "Snowshoe", "Sogou Mobile Browser", "Splash", "Sputnik Browser", "Sunrise", "SuperBird", "Super Fast Browser", "surf", "START Internet Browser", "Steam In-Game Overlay", "Streamy", "Swiftfox", "Seznam Browser", "t-online.de Browser", "Tao Browser", "TenFourFox", "Tenta Browser", "Tizen Browser", "Tungsten", "ToGate", "TweakStyle", "TV Bro", "UBrowser", "UC Browser", "UC Browser Mini", "UC Browser Turbo", "Uzbl", "Vivaldi", "vivo Browser", "Vision Mobile Browser", "VMware AirWatch", "Wear Internet Browser", "Web Explorer", "WebPositive", "Waterfox", "Whale Browser", "wOSBrowser", "WeTab Browser", "Yahoo! Japan Browser", "Yandex Browser", "Yandex Browser Lite", "Xiino", "Xvast, Zvu");



	// List of detected bots
	$bot = array("baiduspider", "Sogou Orion spider", "sogou-test-spider", "sogou", "360Spider", "Aboundexbot", "Acoon", "AddThis.com", "ADMantX", "aHrefs Bot", "Alexa Crawler", "Alexa Site Audit", "Alexa", "Amazon Route53 Health Check", "Amorank Spider", "Analytics SEO Crawler", "ApacheBench", "Applebot", "Arachni", "archive.org bot", "Ask Jeeves", "AspiegelBot", "Awario", "Awario", "Backlink-Check.de", "BacklinkCrawler", "Baidu Spider", "BazQux Reader", "BingBot", "BitlyBot", "Blekkobot", "BLEXBot Crawler", "Bloglovin", "Blogtrottr", "BoardReader", "BoardReader Blog Indexer", "Bountii Bot", "BrandVerity", "Browsershots", "BUbiNG", "Buck", "Butterfly Robot", "Bytespider", "CareerBot", "Castro 2", "Catchpoint", "CATExplorador", "ccBot crawler", "Charlotte", "Cliqzbot", "CloudFlare Always Online", "CloudFlare AMP Fetcher", "Collectd", "CommaFeed", "CSS Certificate Spider", "Cốc Cốc Bot", "Datadog Agent", "Datanyze", "Dataprovider", "Daum", "Dazoobot", "Discobot", "Domain Re-Animator Bot", "DotBot", "DuckDuckGo", "DuckDuckGo Bot", "Easou Spider", "eCairn-Grabber", "EMail Exractor", "EmailWolf", "Embedly", "evc-batch", "ExaBot", "ExactSeek Crawler", "Ezooms", "eZ Publish Link Validator", "Facebook External Hit", "Feedbin", "FeedBurner", "Feedly", "Feedspot", "Feed Wrangler", "Fever", "Findxbot", "Flipboard", "FreshRSS", "Generic Bot", "Generic Bot", "Genieo Web filter", "Gigablast", "Gigabot", "Gluten Free Crawler", "Gmail Image Proxy", "Googlebot", "Google Cloud Scheduler", "Google Favicon", "Google PageSpeed Insights", "Google Partner Monitoring", "Google Search Console", "Google Stackdriver Monitoring", "Google Structured Data Testing Tool", "Grapeshot", "GTmetrix", "Heritrix", "Heureka Feed", "HTTPMon", "HubPages", "HubSpot", "ICC-Crawler", "ichiro", "IDG/IT", "IIS Site Analysis", "Inktomi Slurp", "inoreader", "IP-Guide Crawler", "IPS Agent", "Kaspersky", "Kouio", "Larbin web crawler", "LCC", "Let's Encrypt Validation", "Lighthouse", "Linkdex Bot", "LinkedIn Bot", "LTX71", "Lycos", "Magpie-Crawler", "MagpieRSS", "Mail.Ru Bot", "masscan", "Mastodon Bot", "Meanpath Bot", "MetaInspector", "MetaJobBot", "Mixrank Bot", "MJ12 Bot", "Mnogosearch", "MojeekBot", "Monitor.Us", "Munin", "Nagios check_http", "NalezenCzBot", "nbertaupete95", "Netcraft Survey Bot", "netEstate", "NetLyzer FastProbe", "NetResearchServer", "Netvibes", "NewsBlur", "NewsGator", "NLCrawler", "Nmap", "Nutch-based Bot", "Nuzzel", "oBot", "Octopus", "Omgili bot", "Openindex Spider", "OpenLinkProfiler", "OpenWebSpider", "Orange Bot", "Outbrain", "PagePeeker", "PaperLiBot", "Phantomas", "PHP Server Monitor", "Picsearch bot", "Pingdom Bot", "Pinterest", "PocketParser", "Pompos", "PritTorrent", "QuerySeekerSpider", "Quora Link Preview", "Qwantify", "Rainmeter", "RamblerMail Image Proxy", "Reddit Bot", "Riddler", "Rogerbot", "ROI Hunter", "RSSRadio Bot", "SafeDNSBot", "Scooter", "ScoutJet", "Scrapy", "Screaming Frog SEO Spider", "ScreenerBot", "Semrush Bot", "Sensika Bot", "Sentry Bot", "SEOENGBot", "SEOkicks-Robot", "Seoscanners.net", "Server Density", "Seznam Bot", "Seznam Email Proxy", "Seznam Zbozi.cz", "ShopAlike", "Shopify Partner", "ShopWiki", "SilverReader", "SimplePie", "SISTRIX Crawler", "SISTRIX Optimizer", "Site24x7 Website Monitoring", "Siteimprove", "SiteSucker", "Sixy.ch", "Skype URI Preview", "Slackbot", "SMTBot", "Snapchat Proxy", "Sogou Spider", "Soso Spider", "Sparkler", "Speedy", "Spinn3r", "Spotify", "Sputnik Bot", "sqlmap", "SSL Labs", "Startpagina Linkchecker", "StatusCake", "Superfeedr Bot", "Survey Bot", "Tarmot Gezgin", "TelegramBot", "The Knowledge AI", "theoldreader", "TinEye Crawler", "Tiny Tiny RSS", "TLSProbe", "TraceMyFile", "Trendiction Bot", "TurnitinBot", "TweetedTimes Bot", "Tweetmeme Bot", "Twingly Recon", "Twitterbot", "UkrNet Mail Proxy", "UniversalFeedParser", "Uptimebot", "Uptime Robot", "URLAppendBot", "Vagabondo", "Visual Site Mapper Crawler", "VK Share Button", "W3C CSS Validator", "W3C I18N Checker", "W3C Link Checker", "W3C Markup Validation Service", "W3C MobileOK Checker", "W3C Unified Validator", "Wappalyzer", "WebbCrawler", "Weborama", "WebPageTest", "WebSitePulse", "WebThumbnail", "WeSEE:Search", "WikiDo", "Willow Internet Crawler", "WooRank", "WordPress", "Wotbox", "XenForo", "YaCy", "Yahoo! Cache System", "Yahoo! Japan BRW", "Yahoo! Link Preview", "Yahoo! Slurp", "Yahoo Gemini", "Yandex Bot", "Yeti/Naverbot", "Yottaa Site Monitor", "Youdao Bot", "Yourls", "Yunyun Bot", "Zao", "Ze List", "zgrab", "Zookabot", "ZumBot", "Bingbot", "Exabot", "abot", "dbot", "ebot", "hbot", "lbot", "mbot", "nbot", "obot", "pbot", "rbot", "sbot", "tbot", "vbot", "ybot", "zbot", "crawl", "slurp", "seek", "avg", "avira", "bitdefender", "kaspersky", "sophos", "virustotal", "virus", "accoona", "acoon", "adressendeutschland", "ah-ha.com", "ahoy", "altavista", "ananzi", "anthill", "appie", "arachnophilia", "arale", "araneo", "aranha", "architext", "aretha", "arks", "asterias", "atlocal", "atn", "atomz", "augurfind", "backrub", "bannana_bot", "baypup", "bdfetch", "big brother", "biglotron", "bjaaland", "blackwidow", "blaiz", "blog", "blo.", "bloodhound", "boitho", "booch", "bradley", "butterfly", "calif", "cassandra", "ccubee", "cfetch", "charlotte", "churl", "cienciaficcion", "cmc", "collective", "comagent", "combine", "computingsite", "csci", "curl", "cusco", "daumoa", "deepindex", "delorie", "depspid", "deweb", "die blinde kuh", "digger", "ditto", "dmoz", "docomo", "download express", "dtaagent", "dwcp", "ebiness", "ebingbong", "e-collector", "ejupiter", "emacs-w3 search engine", "esther", "evliya celebi", "ezresult", "falcon", "felix ide", "ferret", "fetchrover", "fido", "findlinks", "fireball", "fish search", "fouineur", "funnelweb", "gazz", "gcreep", "genieknows", "getterroboplus", "geturl", "glx", "goforit", "golem", "grabber", "grapnel", "gralon", "griffon", "gromit", "grub", "gulliver", "hamahakki", "harvest", "havindex", "helix", "heritrix", "hku www octopus", "homerweb", "htdig", "html index", "html_analyzer", "htmlgobble", "hubater", "hyper-decontextualizer", "ia_archiver", "ibm_planetwide", "ichiro", "iconsurf", "iltrovatore", "image.kapsi.net", "imagelock", "incywincy", "indexer", "infobee", "informant", "ingrid", "inktomisearch.com", "inspector web", "intelliagent", "internet shinchakubin", "ip3000", "iron33", "israeli-search", "ivia", "jack", "jakarta", "javabee", "jetbot", "jumpstation", "katipo", "kdd-explorer", "kilroy", "knowledge", "kototoi", "kretrieve", "labelgrabber", "lachesis", "larbin", "legs", "libwww", "linkalarm", "link validator", "linkscan", "lockon", "lwp", "lycos", "magpie", "mantraagent", "mapoftheinternet", "marvin/", "mattie", "mediafox", "mediapartners", "mercator", "merzscope", "microsoft url control", "minirank", "miva", "mj12", "mnogosearch", "moget", "monster", "moose", "motor", "multitext", "muncher", "muscatferret", "mwd.search", "myweb", "najdi", "nameprotect", "nationaldirectory", "nazilla", "ncsa beta", "nec-meshexplorer", "nederland.zoek", "netcarta webmap engine", "netmechanic", "netresearchserver", "netscoop", "newscan-online", "nhse", "nokia6682/", "nomad", "noyona", "siteexplorer", "nutch", "nzexplorer", "objectssearch", "occam", "omni", "open text", "openfind", "openintelligencedata", "orb search", "osis-project", "pack rat", "pageboy", "pagebull", "page_verifier", "panscient", "parasite", "partnersite", "patric", "pear.", "pegasus", "peregrinator", "pgp key agent", "phantom", "phpdig", "picosearch", "piltdownman", "pimptrain", "pinpoint", "pioneer", "piranha", "plumtreewebaccessor", "pogodak", "poirot", "pompos", "poppelsdorf", "poppi", "popular iconoclast", "psycheclone", "publisher", "python", "rambler", "raven search", "roach", "road runner", "roadhouse", "robbie", "robofox", "robozilla", "rules", "salty", "sbider", "scooter", "scoutjet", "scrubby", "search.", "searchprocess", "semanticdiscovery", "senrigan", "sg-scout", "shai'hulud", "shark", "shopwiki", "sidewinder", "sift", "silk", "simmany", "site searcher", "site valet", "sitetech-rover", "skymob.com", "sleek", "smartwit", "sna-", "snappy", "snooper", "sohu", "speedfind", "sphere", "sphider", "spinner", "spyder", "steeler/", "suke", "suntek", "supersnooper", "surfnomore", "sven", "sygol", "szukacz", "tach black widow", "tarantula", "templeton", "/teoma", "t-h-u-n-d-e-r-s-t-o-n-e", "theophrastus", "titan", "titin", "tkwww", "toutatis", "t-rex", "tutorgig", "twiceler", "twisted", "ucsd", "udmsearch", "url check", "updated", "vagabondo", "valkyrie", "verticrawl", "victoria", "vision-search", "volcano", "voyager/", "voyager-hc", "w3c_validator", "w3m2", "w3mir", "walker", "wallpaper", "wanderer", "wauuu", "wavefire", "web core", "web hopper", "web wombat", "webbandit", "webcatcher", "webcopy", "webfoot", "weblayers", "weblinker", "weblog monitor", "webmirror", "webmonkey", "webquest", "webreaper", "websitepulse", "websnarf", "webstolperer", "webvac", "webwalk", "webwatch", "webwombat", "webzinger", "wget", "whizbang", "whowhere", "wild ferret", "worldlight", "wwwc", "wwwster", "xenu", "xget", "xift", "xirq", "YandexBot", "yandex", "yanga", "yeti", "yodao", "zao/", "zippp", "zyborg", "proximic", "googlebot", "cliqzbot", "a6-indexer", "ahrefsbot", "genieo", "bomborabot", "ccbot", "urlappendbot", "domainappender", "msnbot-media", "antivirus", "youdaobot", "mj12bot", "linkdexbot", "go-http-client", "presto", "bingpreview", "go-http-client", "go-http-client/1.1", "trident", "unchaos", "dreampassport", "privoxy", "zipcommander", "neofonie", "abacho", "acoi", "adaxas", "agada", "aladin", "alkaline", "amibot", "anonymizer", "aplix", "aspseek", "avant", "baboom", "anzwers", "anzwerscrawl", "crawlconvera", "del.icio.us", "camehttps", "annotate", "wapproxy", "translate", "feedfetcher", "ask24", "asked", "askaboutoil", "fangcrawl", "amzn_assoc", "bingpreview", "dr.web", "drweb", "bilbo", "exabot", "externalhit", "okhttp", "simplepie", "pipes", "antivirus", "ruby", "avast", "firebird", "scmguard", "adsbot", "weblight", "favicon", "analytics", "insights", "headless", "github", "node", "agusescan", "zteopen", "majestic12", "simplepie", "samsung-sgh-e250", "docomo/2.0 n905i", "sitelockspider", "okhttp/2.5.0", "ips-agent", "uptimerobot", "fm scene", "prevx", "above", "google", "phantomjs", "lighthouse", "reverseshorturl", "samsung-sgh-e250", "softlayer", "amazonaws", "cyveillance", "crawler", "gsa-crawler", "phishtank", "dreamhost", "netpilot", "calyxinstitute", "tor-exit", "apache-httpclient", "lssrocketcrawler", "urlredirectresolver", "jetbrains", "spam", "windows 95", "windows 98", "acunetix", "netsparker", "007ac9", "008", "feedfetcher", "192.comagent", "200pleasebot", "360spider", "4seohuntbot", "50.nu", "a6-indexer", "admantx", "amznkassocbot", "aboundexbot", "aboutusbot", "abrave spider", "accelobot", "acoonbot", "addthis.com", "adsbot-google", "ahrefsbot", "alexabot", "amagit.com", "antbot", "apercite", "aportworm", "ebay", "cl0na", "jabber", "ebay", "arabot", "hotmail!", "msn!", "baidu", "outlook!", "outlook", "msn", "duckduckbot", "hotmail", "googletranslate", "proxy", "dalvik", "quicklook", "seamonkey", "sylera", "safebrowsing", "safesurfingwidget", "preview", "whatsapp", "telegram", "instagram", "icoreservice", "untrusted", "phantomjs", "applebot", "metauri.com", "twitterbot", "r6_feedfetcher", "netcraftsurveyagent", "sogou web spider", "bingbot", "yahoo! slurp", "facebot", "facebookexternalhit", "printfulbot", "msnbot", "unwindfetchor", "urlresolver", "butterfly", "tweetmemebot", "paperlibot", "ezooms", "searchmetricsbot", "picsearch", "tweetedtimes bot", "queryseekerspider", "showyoubot", "woriobot", "merlinkbot", "bazquxbot", "kraken", "sistrix crawler", "r6_commentreader", "magpie-crawler", "grapeshotcrawler", "percolatecrawler", "maxpointcrawler", "netseer crawler", "grokkit-crawler", "smxcrawler", "pulsecrawler", "y!j-brw", "80legs.com/webcrawler", "mediapartners-google", "spinn3r", "inagist", "python-urllib", "ning", "tencenttraveler", "feedfetcher-google", "mon.itor.us", "spider", "spbot", "feedly", "java", "kbot", "bot.", "bot/", "_bot", ".bot", "/bot", "-bot", ":bot", "(bot", "bot");

	// List of detected browser engines
	$engine = array('WebKit', 'Blink', 'Trident', 'Text-based', 'Dillo', 'iCab', 'Elektra', 'Presto', 'Gecko', 'KHTML', 'NetFront', 'Edge', 'NetSurf', 'Servo');

	// List of detected libraries
	$libraries = array('aiohttp', 'curl', 'Faraday', 'Go-http-client', 'Google HTTP Java Client', 'Guzzle (PHP HTTP Client)', 'HTTPie', 'HTTP_Request2', 'Java', 'libdnf', 'Mechanize', 'OkHttp', 'Perl', 'Python Requests', 'Python urllib', 'REST Client for Ruby', 'RestSharp', 'urlgrabber (yum)', 'Wget', 'WWW-Mechanize');

	// List of detected media players
	$players = array('Audacious', 'Banshee', 'Boxee', 'Clementine', 'Deezer', 'FlyCast', 'Foobar2000', 'Google Podcasts', 'iTunes', 'Kodi', 'MediaMonkey', 'Miro', 'mpv', 'Music Player Daemon', 'NexPlayer', 'Nightingale', 'QuickTime', 'Songbird', 'Stagefright', 'SubStream', 'VLC', 'Winamp', 'Windows Media Player', 'XBMC');

	// List of detected mobile apps
	$apps = array('AndroidDownloadManager', 'AntennaPod', 'Apple News', 'Baidu Box App', 'BeyondPod', 'BingWebApp', 'bPod', 'CastBox', 'Castro', 'Castro 2', 'CrosswalkApp', 'DoggCatcher', 'douban App', 'Facebook', 'Facebook Messenger', 'FeedR', 'Flipboard App', 'Google Go', 'Google Play Newsstand', 'Google Plus', 'Google Search App', 'iCatcher', 'Instacast', 'Instagram App', 'Line', 'NewsArticle App', 'Overcast', 'Pinterest', 'Player FM', 'Pocket Casts', 'Podcast & Radio Addict', 'Podcast Republic', 'Podcasts', 'Podcat', 'Podcatcher Deluxe', 'Podkicker', 'RSSRadio', 'Sina Weibo', 'SogouSearch App', 'tieba', 'WeChat', 'WhatsApp', 'Yahoo! Japan', 'Yelp Mobile', 'YouTube');

	// List of detected PIMs (personal information manager)
	$imanager = array('Airmail', 'Barca', 'DAVdroid', 'Lotus Notes', 'MailBar', 'Microsoft Outlook', 'Outlook Express', 'Postbox', 'SeaMonkey', 'The Bat!', 'Thunderbird');

	// List of detected feed readers
	$readers = array('Akregator', 'Apple PubSub', 'BashPodder', 'Breaker', 'Downcast', 'FeedDemon', 'Feeddler RSS Reader', 'gPodder', 'JetBrains Omea Reader', 'Liferea', 'NetNewsWire', 'Newsbeuter', 'NewsBlur', 'NewsBlur Mobile App', 'PritTorrent', 'Pulp', 'QuiteRSS', 'ReadKit', 'Reeder', 'RSS Bandit', 'RSS Junkie', 'RSSOwl', 'Stringer');

	// List of brands with detected devices
	$devices = array('3Q', '4Good', 'Acer', 'Advan', 'Advance', 'AGM', 'Ainol', 'Airness', 'Airties', 'AIS', 'Aiwa', 'Akai', 'Alba', 'Alcatel', 'AllCall', 'Allview', 'Allwinner', 'Altech UEC', 'altron', 'Amazon', 'AMGOO', 'Amoi', 'ANS', 'Archos', 'Arian Space', 'Ark', 'Arnova', 'ARRIS', 'Ask', 'Assistant', 'Asus', 'Audiovox', 'AVH', 'Avvio', 'Axxion', 'Azumi Mobile', 'BangOlufsen', 'Barnes & Noble', 'BBK', 'BDF', 'Becker', 'Beeline', 'Beetel', 'BenQ', 'BenQ-Siemens', 'BGH', 'Bird', 'Bitel', 'Black Fox', 'Blackview', 'Blaupunkt', 'Blu', 'Bluboo', 'Bluegood', 'Bmobile', 'bogo', 'Boway', 'bq', 'Bravis', 'Brondi', 'Bush', 'CAGI', 'Capitel', 'Captiva', 'Carrefour', 'Casio', 'Casper', 'Cat', 'Celkon', 'Changhong', 'Cherry Mobile', 'China Mobile', 'Clarmin', 'CnM', 'Coby Kyros', 'Comio', 'Compal', 'Compaq', 'ComTrade Tesla', 'Concord', 'ConCorde', 'Condor', 'Coolpad', 'Cowon', 'CreNova', 'Crescent', 'Cricket', 'Crius Mea', 'Crosscall', 'Cube', 'CUBOT', 'CVTE', 'Cyrus', 'Danew', 'Datang', 'Datsun', 'Dbtel', 'Dell', 'Denver', 'Desay', 'DEXP', 'Dialog', 'Dicam', 'Digi', 'Digicel', 'Digiland', 'Digma', 'DMM', 'DNS', 'DoCoMo', 'Doogee', 'Doov', 'Dopod', 'Doro', 'Dune HD', 'E-Boda', 'E-tel', 'Easypix', 'EBEST', 'Echo Mobiles', 'ECS', 'EE', 'EKO', 'Eks Mobility', 'Elenberg', 'Elephone', 'Energizer', 'Energy Sistem', 'Ergo', 'Ericsson', 'Ericy', 'Essential', 'Essentielb', 'Eton', 'eTouch', 'Etuline', 'Eurostar', 'Evercoss', 'Evertek', 'Evolio', 'Evolveo', 'EvroMedia', 'Explay', 'Extrem', 'Ezio', 'Ezze', 'Fairphone', 'Famoco', 'Fengxiang', 'FiGO', 'FinePower', 'Fly', 'FNB', 'Fondi', 'FORME', 'Forstar', 'Foxconn', 'Freetel', 'Fujitsu', 'G-TiDE', 'Garmin-Asus', 'Gateway', 'Gemini', 'General Mobile', 'Geotel', 'Ghia', 'Gigabyte', 'Gigaset', 'Ginzzu', 'Gionee', 'GOCLEVER', 'Goly', 'GoMobile', 'Google', 'Gradiente', 'Grape', 'Grundig', 'Hafury', 'Haier', 'HannSpree', 'Hasee', 'Hi-Level', 'Highscreen', 'Hisense', 'Hoffmann', 'Homtom', 'Hoozo', 'Hosin', 'HP', 'HTC', 'Huawei', 'Humax', 'Hyrican', 'Hyundai', 'i-Joy', 'i-mate', 'i-mobile', 'iBall', 'iBerry', 'IconBIT', 'iHunt', 'Ikea', 'iKoMo', 'iLA', 'IMO Mobile', 'Impression', 'iNew', 'Infinix', 'InFocus', 'Inkti', 'InnJoo', 'Innostream', 'Inoi', 'INQ', 'Insignia', 'Intek', 'Intex', 'Inverto', 'iOcean', 'iPro', 'Irbis', 'iRola', 'iTel', 'iView', 'iZotron', 'JAY-Tech', 'Jiayu', 'Jolla', 'Just5', 'K-Touch', 'Kaan', 'Kalley', 'Karbonn', 'Kazam', 'KDDI', 'Kempler & Strauss', 'Keneksi', 'Kiano', 'Kingsun', 'Kocaso', 'Kodak', 'Kogan', 'Komu', 'Konka', 'Konrow', 'Koobee', 'KOPO', 'Koridy', 'KRONO', 'Krüger&Matz', 'KT-Tech', 'Kumai', 'Kyocera', 'LAIQ', 'Land Rover', 'Landvo', 'Lanix', 'Lark', 'Lava', 'LCT', 'Leagoo', 'Ledstar', 'LeEco', 'Lemhoov', 'Lenco', 'Lenovo', 'Leotec', 'Le Pan', 'Lephone', 'Lexand', 'Lexibook', 'LG', 'Lingwin', 'Loewe', 'Logicom', 'Lumus', 'LYF', 'M.T.T.', 'M4tel', 'Majestic', 'Manta Multimedia', 'Masstel', 'Maxwest', 'Maze', 'Mecer', 'Mecool', 'Mediacom', 'MediaTek', 'Medion', 'MEEG', 'MegaFon', 'Meitu', 'Meizu', 'Memup', 'Metz', 'MEU', 'MicroMax', 'Microsoft', 'Mio', 'Miray', 'Mitsubishi', 'MIXC', 'MLLED', 'Mobicel', 'Mobiistar', 'Mobiola', 'Mobistel', 'Modecom', 'Mofut', 'Motorola', 'Movic', 'Mpman', 'MSI', 'MTC', 'MTN', 'MYFON', 'MyPhone', 'Myria', 'MyWigo', 'Navon', 'NEC', 'Neffos', 'Netgear', 'NeuImage', 'Newgen', 'NEXBOX', 'Nexian', 'Nextbit', 'NextBook', 'NGM', 'Nikon', 'Nintendo', 'NOA', 'Noain', 'Nobby', 'Noblex', 'Nokia', 'Nomi', 'Nous', 'NUU Mobile', 'Nvidia', 'NYX Mobile', 'O+', 'O2', 'Odys', 'Onda', 'OnePlus', 'OPPO', 'Opsson', 'Orange', 'Ordissimo', 'Ouki', 'OUYA', 'Overmax', 'Oysters', 'Palm', 'Panacom', 'Panasonic', 'Pantech', 'PCBOX', 'PCD', 'PCD Argentina', 'PEAQ', 'Pentagram', 'Philips', 'phoneOne', 'Pioneer', 'Pixus', 'Ployer', 'Plum', 'Point of View', 'Polaroid', 'PolyPad', 'Polytron', 'Pomp', 'Positivo', 'PPTV', 'Prestigio', 'Primepad', 'ProScan', 'PULID', 'Q-Touch', 'Qilive', 'QMobile', 'Qtek', 'Quantum', 'Quechua', 'R-TV', 'Ramos', 'RCA Tablets', 'Readboy', 'Rikomagic', 'RIM', 'Rinno', 'Ritmix', 'Riviera', 'Roadrover', 'Rokit', 'Roku', 'Rombica', 'Ross&Moor', 'Rover', 'RoverPad', 'RT Project', 'Safaricom', 'Sagem', 'Samsung', 'Sanei', 'Santin BiTBiZ', 'Sanyo', 'Savio', 'Sega', 'Selevision', 'Selfix', 'Sencor', 'Sendo', 'Senseit', 'Senwa', 'SFR', 'Sharp', 'Shuttle', 'Siemens', 'Sigma', 'Silent Circle', 'Simbans', 'Sky', 'Skyworth', 'Smart', 'Smartfren', 'Smartisan', 'Softbank', 'Sonim', 'Sony', 'Sony Ericsson', 'Spice', 'Star', 'Starway', 'STF Mobile', 'STK', 'Stonex', 'Storex', 'Sumvision', 'SunVan', 'SuperSonic', 'Supra', 'SWISSMOBILITY', 'Symphony', 'Syrox', 'T-Mobile', 'TB Touch', 'TCL', 'TechniSat', 'TechnoTrend', 'TechPad', 'Teclast', 'Tecno Mobile', 'Telefunken', 'Telego', 'Telenor', 'Telit', 'Tesco', 'Tesla', 'teXet', 'ThL', 'Thomson', 'TIANYU', 'Timovi', 'TiPhone', 'Tolino', 'Tooky', 'Top House', 'Toplux', 'Toshiba', 'Touchmate', 'TrekStor', 'Trevi', 'True', 'Tunisie Telecom', 'Turbo', 'Turbo-X', 'TVC', 'U.S. Cellular', 'Uhappy', 'Ulefone', 'UMIDIGI', 'Unimax', 'Uniscope', 'Unknown', 'Unnecto', 'Unonu', 'Unowhy', 'UTOK', 'UTStarcom', 'Vastking', 'Venso', 'Verizon', 'Vernee', 'Vertex', 'Vertu', 'Verykool', 'Vestel', 'VGO TEL', 'Videocon', 'Videoweb', 'ViewSonic', 'Vinsoc', 'Vitelcom', 'Vivax', 'Vivo', 'Vizio', 'VK Mobile', 'Vodafone', 'Vonino', 'Vorago', 'Voto', 'Voxtel', 'Vulcan', 'Walton', 'Web TV', 'Weimei', 'WellcoM', 'Wexler', 'Wiko', 'Wileyfox', 'Wink', 'Wolder', 'Wolfgang', 'Wonu', 'Woo', 'Woxter', 'X-TIGI', 'X-View', 'Xiaolajiao', 'Xiaomi', 'Xion', 'Xolo', 'Yandex', 'Yarvik', 'Yes', 'Yezz', 'Ytone', 'Yu', 'Yuandao', 'Yusun', 'Zeemi', 'Zen', 'Zenek', 'Zonda', 'Zopo', 'ZTE', 'Zuum', 'Zync', 'ZYQ', 'öwn','Apple', 'Obi');
	// List of detected platform devices




	$bro_ = "";
	$c_bro[] = "";
	foreach ($browse as $browse) {

		if (strpos(strtolower($user), strtolower($browse)) || strpos(strtolower($user), strtolower($browse)."/")) {
			$c_bro[] = count($browse);
			$exp = explode($browse, $user);
			$vers = explode(".", str_replace("/", "", $exp[1]));

			foreach ($engine as $engine) {
				if (strpos(strtolower($user), strtolower($engine))) {
					break;
				}
			}

			$bro_ = array(
				'name' => $browse,
				'version' => trim($vers[0]),
				'engine' => $engine,
			);

			break;
		}
	}

	if (array_sum($c_bro) == "0") {
		$msi = 'MSIE';

		if (strpos(strtolower($user), strtolower($msi))) {

			$exp = explode($msi, $user);
			$vers = explode(".", $exp[1]);

			foreach ($engine as $engine) {
				if (strpos(strtolower($user), strtolower($engine))) {
					break;
				}
			}

			$bro_ = array(
				'name' => 'Internet Explorer',
				'version' => trim($vers[0]),
				'engine' => $engine,
			);
		}
	}


	$os_ = "";
	foreach ($os as $os) {
		if (strpos(strtolower($user), strtolower($os))) {

			$exp = explode($os, $user);
			$vers = explode(";", $exp[1]);
			$vers = explode("(", str_replace("NT", "", $vers[0]));
			$vers = explode(")", str_replace("/", "", trim($vers[0])));
			$vers = explode(" ", $vers[0]);
			$version = $vers[0];
			if (isset($vers[1])) {
				$version = $vers[0];
			}


			$platform = "";
			if (strtolower($os) == "windows") {
				$exp = explode(";", $user);
				$platform = $exp['1'];
			}

			$os_ = array(
				'name' => $os,
				'version' => trim($version),
				'platform' => trim($platform),
			);
			break;
		}
	}

	$dev_ = "";
	foreach ($devices as $devices) {
		if (strpos(strtolower($user), strtolower($devices))) {
			$exp = explode(")", $user);
			$exp = explode(";", $exp[0]);
			$model = $exp;
			$max = count($exp)-1;
			if (strpos(strtolower($user), 'redmi')) {
				$devices = "Xiaomi";
			}

			$model = trim(str_replace(strtolower($devices." "), "", strtolower($model[$max])));
			$model = explode("build/", $model);
			$model = trim($model[0]);
			$dev_ = array(
				'brand' => $devices,
				'model' => ucwords($model),
			);
			break;
		}
	}


	$bot_ = "";
	foreach ($bot as $bot) {
		if (strpos(strtolower($user), strtolower($bot))) {

			$url = "";
			if (strpos(strtolower($user), strtolower("https://"))) {
				$exp = explode("https://", $user);
				$exp = explode(" ", str_replace(")", "", $exp[1]));
				$url = "https://".$exp[0];
			} else if (strpos(strtolower($user), strtolower("http://"))) {
				$exp = explode("http://", $user);
				$exp = explode(" ", str_replace(")", "", $exp[1]));
				$url = "http://".$exp[0];
			}

			$bot_ = array(
				'name' => $bot,
				'category' => "Search bot",
				'url' => trim($url),
			);
			break;
		}
	}


	$data['browse'] = $bro_;
	$data['os'] = $os_;
	$data['device'] = $dev_;
	$data['bot'] = $bot_;

	return $data;
}

?>
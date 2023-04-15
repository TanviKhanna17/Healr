<!DOCTYPE html>
<html>
<head>
    
    <link href='maps.js'>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bing Maps Api</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='maps.css'>
</head>
<body>
    <header>
        <h1>Bing Maps Api</h1>
    </header>
    <main>
        <div class="options">
            <input class="search_input" placeholder="Search">
            <button class="search_btn">Search</button>
        </div>
        <div id="map"></div>

    </main>
    <footer>
        <p class="copyright">2022 - LC Codes</p>
    </footer>
    <script src="maps.js"></script>
    <script src='http://www.bing.com/api/maps/mapcontrol?callback=getMap' async></script>
    
</body>
</html>

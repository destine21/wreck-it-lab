//while sleep 10; do phantomjs --ignore-ssl-errors=true --local-to-remote-url-access=true --web-security=false --ssl-protocol=any /var/www/html/ch10/admin_auto_run.js; done;

var page = require('webpage').create();
var host = "127.0.0.1";
var url = "http://"+host+"/ch10/fakebook.php";
var timeout = 2000;
phantom.addCookie({
    'name': 'Flag',
    'value': 'flag{F4k3Bo0k_1s_Not_Fac3B0ok}',
    'domain': host,
    'path': '/',
    'httponly': false
});
page.onNavigationRequested = function(url, type, willNavigate, main) {
    // console.log("[URL] URL="+url);  
    console.log("[ADMIN] Checking Fakebook page");  
};
page.settings.resourceTimeout = timeout;
page.onResourceTimeout = function(e) {
    setTimeout(function(){
        console.log("[INFO] Timeout")
        phantom.exit();
    }, 1);
};
page.open(url, function(status) {
    console.log("[INFO] rendered page");
    setTimeout(function(){
        phantom.exit();
    }, 1);
});
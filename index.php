<?php

echo "Welcome to my website counter! ";

system("python display.cgi");

system("python count.cgi");

function browser() {
    $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
    
    if(preg_match('/(chromium)[ \/]([\w.]+)/', $ua))
            $browser = 'Chromium.';
    elseif(preg_match('/(chrome)[ \/]([\w.]+)/', $ua))
            $browser = 'Chrome. Smart guy.';
    elseif(preg_match('/(safari)[ \/]([\w.]+)/', $ua))
            $browser = 'Safari. Meh.';
    elseif(preg_match('/(opera)[ \/]([\w.]+)/', $ua))
            $browser = 'Opera. Get Chrome.';
    elseif(preg_match('/(msie)[ \/]([\w.]+)/', $ua))
            $browser = 'Internet Explorer. Get Chrome.';
    elseif(preg_match('/(mozilla)[ \/]([\w.]+)/', $ua))
            $browser = 'Mozilla Firefox. Get Chrome.';

    preg_match('/('.$browser.')[ \/]([\w]+)/', $ua, $version);

    print "The browser that you are using is $browser";
}

browser();

?>

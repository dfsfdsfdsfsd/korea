<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = 'n572ad';


$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>




<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>ingenstans</title><meta name="author" content="ingenstans"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://ingenstans.appspot.com/"/>
<meta property="og:site_name" content="ingenstans"/>
<meta property="og:title" content="Showcasing Incredible Properties"/>
<meta property="og:description" content="We make real estate a breeze!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/47213"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="ingenstans"/>
<meta name="twitter:description" content="Showcasing Incredible Properties"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/47213"/>
<meta name="twitter:image:alt" content="ingenstans"/>
<meta name="theme-color" content="#e4dcd4"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright (c) 2011 by Sorkin Type Co (www.sorkintype.com eben@eyebytes.com), with Reserved Font Name "Fjalla"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Fjalla One';
  font-style: normal;
  font-weight: 400;
  src: local('Fjalla One'), local('FjallaOne-Regular'), url(https://img1.wsimg.com/gfonts/s/fjallaone/v7/Yq6R-LCAWCX3-6Ky7FAFrO96kjouQb5-6g.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Fjalla One';
  font-style: normal;
  font-weight: 400;
  src: local('Fjalla One'), local('FjallaOne-Regular'), url(https://img1.wsimg.com/gfonts/s/fjallaone/v7/Yq6R-LCAWCX3-6Ky7FAFrOF6kjouQb4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2010, 2012, 2014 Adobe Systems Incorporated (http://www.adobe.com/), with Reserved Font Name Source.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidh18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkido18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidg18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidv18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidj18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidi18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkids18S0xR41.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7qsDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7jsDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7rsDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7ksDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7osDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7psDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7nsDJB9cme.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdh18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdo18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdg18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdv18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdj18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdi18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSds18S0xR41.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmhdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwkxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmRdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdu3cOWxw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNa7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qPK7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNK7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qO67lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qN67lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNq7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7lujVj9w.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmhdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwkxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmRdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlxdu3cOWxw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/be010f16-1c4a-4b81-b69f-59afdfb6eca3/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/be010f16-1c4a-4b81-b69f-59afdfb6eca3/gpub/1e2837e0225e0782/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-m{padding-top:40px}}@media (max-width: 767px){.x .c1-n{padding-bottom:40px}}@media (max-width: 767px){.x .c1-1c{width:100%}}@media (max-width: 767px){.x .c1-2r{padding-left:24px}}@media (max-width: 767px){.x .c1-2s{padding-right:24px}}@media (max-width: 767px){.x .c1-4l > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-4m  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-7n{display:flex}}@media (max-width: 767px){.x .c1-7o{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/be010f16-1c4a-4b81-b69f-59afdfb6eca3/gpub/74107360822db24/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/be010f16-1c4a-4b81-b69f-59afdfb6eca3/gpub/aca35de62ef9689c/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-17{width:1160px}}@media (min-width: 1280px){.x .c1-27{font-size:32px}}@media (min-width: 1280px){.x .c1-3a{font-size:44px}}@media (min-width: 1280px){.x .c1-3m{font-size:22px}}@media (min-width: 1280px){.x .c1-7i{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-18{width:1280px}}@media (min-width: 1536px){.x .c1-28{font-size:36px}}@media (min-width: 1536px){.x .c1-3b{font-size:48px}}@media (min-width: 1536px){.x .c1-3n{font-size:24px}}@media (min-width: 1536px){.x .c1-7j{font-size:16px}}</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-fjalla-one" context="[object Object]"><div id="layout-be-010-f-16-1-c-4-a-4-b-81-b-69-f-59-afdfb-6-eca-3" class="layout layout-layout layout-layout-layout-12 locale-en-US lang-en"><div data-ux="Page" id="page-1163" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="b72f58c7-5daf-4ab9-962a-bfc90e5a43ee" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-o c1-b c1-c c1-d c1-p c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-12 c1-d c1-13 c1-14 c1-15 c1-16 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-19 c1-1a c1-1b c1-u c1-c c1-1c c1-1d c1-d c1-1e c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="8799db7d-f0f2-4fa4-b15f-cc64114d2ea8" title="ingenstans" href="/" class="x-el x-el-a c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-1p c1-b c1-1q c1-c c1-1r c1-1s c1-1t c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.1165.click,click"><div id="bs-1"><h3 typography="HeadingEpsilon" data-ux="LogoHeading" id="logo-container-1166" logoText="ingenstans" class="x-el x-el-h3 c1-1 c1-19 c1-1i c1-1j c1-1u c1-1v c1-1w c1-1x c1-1y c1-u c1-1z c1-1b c1-20 c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-1f c1-19 c1-1a c1-4 c1-21 c1-29 c1-1r c1-2a c1-1b c1-23 c1-26 c1-27 c1-28 x-d-ux x-d-aid x-d-route">ingenstans</span></h3></div></a></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-2b c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg1167" role="img" data-guac-image="loading" data-ux="Background" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="none" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-2c c1-2d c1-2e c1-2f c1-2g c1-v c1-w c1-2h c1-2i c1-2j c1-2k c1-b c1-c c1-d c1-2l c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht"><div data-ux="Block" id="header_parallax1168" class="x-el x-el-div c1-1 c1-2 c1-4 c1-11 c1-2m c1-x c1-w c1-y c1-1x c1-1y c1-b c1-c c1-d c1-2n c1-25 c1-2o c1-e c1-f c1-g x-d-ux"><div id="bs-2"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1v c1-1w c1-s c1-t c1-u c1-2p c1-2q c1-b c1-c c1-1c c1-2r c1-2s c1-m c1-12 c1-d c1-13 c1-2o c1-16 c1-2t c1-2u c1-2v c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-v c1-y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-y c1-x c1-z c1-10 c1-2w c1-2x c1-1z c1-2y c1-b c1-c c1-4 c1-2z c1-30 c1-31 c1-d c1-32 c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1v c1-1w c1-33 c1-34 c1-u c1-35 c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-19 c1-1i c1-1j c1-1u c1-1v c1-1w c1-1x c1-1y c1-u c1-2m c1-1b c1-36 c1-37 c1-22 c1-38 c1-p c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route">Showcasing Incredible Properties</h1><div id="bs-3"><div data-ux="Element" id="tagline-container-1169" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1u c1-o c1-b c1-c c1-d c1-3c c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-19 c1-1i c1-1j c1-1u c1-1v c1-1w c1-1x c1-1y c1-3d c1-u c1-1a c1-4 c1-c c1-1b c1-36 c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Showcasing Incredible Properties</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-1169" class="x-el x-el-span c1-19 c1-3e c1-3f c1-2m c1-3g c1-3h c1-3i c1-37 c1-1b c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-size x-d-scaler-id">Showcasing Incredible Properties</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-1169" class="x-el x-el-span c1-19 c1-3e c1-3f c1-2m c1-3g c1-3h c1-3i c1-21 c1-1b c1-23 c1-26 c1-27 c1-28 x-d-ux x-d-size x-d-scaler-id">Showcasing Incredible Properties</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-1169" class="x-el x-el-span c1-19 c1-3e c1-3f c1-2m c1-3g c1-3h c1-3i c1-3j c1-1b c1-3k c1-3l c1-3m c1-3n x-d-ux x-d-size x-d-scaler-id">Showcasing Incredible Properties</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-1u c1-1x c1-3o c1-u c1-3p c1-3q c1-3r c1-3s c1-b c1-36 c1-3j c1-22 c1-3k c1-3l c1-3m c1-3n x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>We make real estate a breeze!</span></p></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-u c1-3y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-4" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c1-3z c1-19 c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 c1-1a c1-1z c1-1h c1-1l c1-1j c1-1i c1-u c1-4 c1-46 c1-b c1-47 c1-3u c1-2g c1-c c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-tccl">Book Online</a></div></div></div></div></div></div><div data-ux="Block" id="header_parallax1170" class="x-el x-el-div c1-1 c1-2 c1-4 c1-11 c1-v c1-x c1-w c1-y c1-1x c1-1y c1-b c1-c c1-d c1-2n c1-25 c1-3c c1-e c1-f c1-g x-d-ux"><div id="bs-5"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1v c1-1w c1-s c1-t c1-u c1-2p c1-2q c1-b c1-c c1-1c c1-2r c1-2s c1-m c1-12 c1-d c1-13 c1-2o c1-16 c1-2t c1-2u c1-2v c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-v c1-y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-y c1-x c1-z c1-10 c1-2w c1-2x c1-1z c1-2y c1-b c1-c c1-4 c1-2z c1-30 c1-31 c1-d c1-32 c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1v c1-1w c1-33 c1-34 c1-u c1-35 c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-19 c1-1i c1-1j c1-1u c1-1v c1-1w c1-1x c1-1y c1-u c1-2m c1-1b c1-36 c1-37 c1-22 c1-38 c1-p c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route">Showcasing Incredible Properties</h1><div id="bs-6"><div data-ux="Element" id="tagline-container-1171" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1u c1-o c1-b c1-c c1-d c1-3c c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-19 c1-1i c1-1j c1-1u c1-1v c1-1w c1-1x c1-1y c1-3d c1-u c1-1a c1-4 c1-c c1-1b c1-36 c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Showcasing Incredible Properties</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-1171" class="x-el x-el-span c1-19 c1-3e c1-3f c1-2m c1-3g c1-3h c1-3i c1-37 c1-1b c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-size x-d-scaler-id">Showcasing Incredible Properties</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-1171" class="x-el x-el-span c1-19 c1-3e c1-3f c1-2m c1-3g c1-3h c1-3i c1-21 c1-1b c1-23 c1-26 c1-27 c1-28 x-d-ux x-d-size x-d-scaler-id">Showcasing Incredible Properties</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-1171" class="x-el x-el-span c1-19 c1-3e c1-3f c1-2m c1-3g c1-3h c1-3i c1-3j c1-1b c1-3k c1-3l c1-3m c1-3n x-d-ux x-d-size x-d-scaler-id">Showcasing Incredible Properties</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-1u c1-1x c1-3o c1-u c1-3p c1-3q c1-3r c1-3s c1-b c1-36 c1-3j c1-22 c1-3k c1-3l c1-3m c1-3n x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>We make real estate a breeze!</span></p></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-u c1-3y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-7" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c1-3z c1-19 c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 c1-1a c1-1z c1-1h c1-1l c1-1j c1-1i c1-u c1-4 c1-46 c1-b c1-47 c1-3u c1-2g c1-c c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-tccl">Book Online</a></div></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/47213/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg1167'),{"shouldMarkVisuallyComplete":true})</script></div></div></div></section> </div></div></div></div><div id="dcc11ee9-e387-400c-8ac2-50075efa3d17" class="widget widget-about widget-about-about-6"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-19 c1-1i c1-1j c1-4c c1-q c1-1w c1-1x c1-4d c1-k c1-1z c1-1b c1-37 c1-20 c1-22 c1-38 c1-24 c1-2t c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-19 c1-1b c1-37 c1-38 c1-39 c1-3a c1-3b x-d-ux">Our Services</span><div data-ux="Block" class="x-el x-el-div c1-19 c1-4 c1-4e c1-1b c1-37 c1-38 c1-39 c1-3a c1-3b x-d-ux"><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-19 c1-4f c1-4g c1-4h c1-4i c1-1y c1-4j c1-1a c1-1b c1-37 c1-38 c1-39 c1-3a c1-3b x-d-ux"/></div></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-1z c1-2i c1-4k c1-1v c1-1w c1-b c1-c c1-4l c1-4m c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-v c1-4p c1-4q c1-4r c1-1x c1-4s c1-4t c1-4u c1-b c1-c c1-4v c1-4w c1-4x c1-4y c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4p c1-11 c1-4z c1-50 c1-u c1-51 c1-52 c1-53 c1-54 c1-v c1-55 c1-4k c1-b c1-c c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-d c1-5c c1-5d c1-e c1-f c1-g x-d-ux"><div id="guacBg1172" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/0" index="0" treatmentData="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-v c1-w c1-x c1-1z c1-2i c1-4 c1-5e c1-5f c1-5g c1-5h c1-2d c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-4f c1-11 c1-b c1-c c1-4l c1-4m c1-d c1-5o c1-5p c1-5q c1-5r c1-5s c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-5t c1-2d c1-2e c1-2f c1-2g c1-2j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h3 c1-1 c1-19 c1-1i c1-1j c1-5u c1-1v c1-1w c1-1x c1-1y c1-1b c1-5v c1-21 c1-22 c1-23 c1-26 c1-27 c1-28 x-d-ux x-d-aid x-d-field-id x-d-field-route">Got Questions?</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-5u c1-1x c1-1y c1-11 c1-2g c1-b c1-5v c1-3j c1-22 c1-3k c1-3l c1-3m c1-3n x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-5w c1-5x c1-b c1-3j c1-3k c1-3l c1-3m c1-3n x-d-ux">You probably have questions. When is the best time to buy or sell? How much house can I afford? How much is my house worth? It might seem intimidating, but our experienced group is here to help!&nbsp;</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4p c1-11 c1-4z c1-50 c1-u c1-51 c1-52 c1-53 c1-54 c1-v c1-55 c1-4k c1-b c1-c c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-d c1-5c c1-5d c1-e c1-f c1-g x-d-ux"><div id="guacBg1173" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/1" index="1" treatmentData="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-v c1-w c1-x c1-1z c1-2i c1-4 c1-5e c1-5f c1-5g c1-5h c1-2d c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-4f c1-11 c1-b c1-c c1-4l c1-4m c1-d c1-5o c1-5p c1-5q c1-5r c1-5s c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-5t c1-2d c1-2e c1-2f c1-2g c1-2j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h3 c1-1 c1-19 c1-1i c1-1j c1-5u c1-1v c1-1w c1-1x c1-1y c1-1b c1-5v c1-21 c1-22 c1-23 c1-26 c1-27 c1-28 x-d-ux x-d-aid x-d-field-id x-d-field-route">The Right Price, Always</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-5u c1-1x c1-1y c1-11 c1-2g c1-b c1-5v c1-3j c1-22 c1-3k c1-3l c1-3m c1-3n x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-5w c1-5x c1-b c1-3j c1-3k c1-3l c1-3m c1-3n x-d-ux">Looking for large or small, condo or family home, fixer-uppers, or luxury? We will find it and get it for you at the price that's right. We can also help with staging, flipping, building, and more.&nbsp;</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4p c1-11 c1-4z c1-50 c1-u c1-51 c1-52 c1-53 c1-54 c1-v c1-55 c1-4k c1-b c1-c c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-d c1-5c c1-5d c1-e c1-f c1-g x-d-ux"><div id="guacBg1174" role="img" data-ux="ContentCard" overlay="accent" data-field-id="cards" data-field-route="/card/2" index="2" treatmentData="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-v c1-w c1-x c1-1z c1-2i c1-4 c1-5e c1-5f c1-5g c1-5h c1-2d c1-5i c1-5j c1-5k c1-5l c1-5m c1-5n c1-5y c1-11 c1-b c1-c c1-4l c1-4m c1-d c1-5z c1-5p c1-60 c1-5r c1-61 c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-5t c1-2d c1-2e c1-2f c1-2g c1-2j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h3 c1-1 c1-19 c1-1i c1-1j c1-5u c1-1v c1-1w c1-1x c1-1y c1-1b c1-5v c1-21 c1-22 c1-23 c1-26 c1-27 c1-28 x-d-ux x-d-aid x-d-field-id x-d-field-route">The Services You Need</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-5u c1-1x c1-1y c1-11 c1-2g c1-b c1-5v c1-3j c1-22 c1-3k c1-3l c1-3m c1-3n x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-5w c1-5x c1-b c1-3j c1-3k c1-3l c1-3m c1-3n x-d-ux">If you have questions about credit or legal matters, buying or selling, you can trust us to find you what you need fast. We'll make sure you feel confident and educated every step of the way. &nbsp;<br>
</span></p></div></div></div></div></div></section> </div></div></div><div id="02943f55-0d17-4389-9133-d692605ff3b8" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-62 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-62 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-19 c1-1i c1-1j c1-1u c1-1v c1-1w c1-63 c1-64 c1-1z c1-1b c1-65 c1-37 c1-22 c1-38 c1-2n c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route">Subscribe</h2><div><div id="02943f55-0d17-4389-9133-d692605ff3b8-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-v c1-4p c1-4q c1-4r c1-1x c1-4s c1-1y c1-4u c1-b c1-c c1-4v c1-4w c1-66 c1-4y c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4p c1-11 c1-4z c1-67 c1-u c1-51 c1-52 c1-53 c1-54 c1-b c1-c c1-68 c1-69 c1-6a c1-58 c1-6b c1-5a c1-6c c1-d c1-6d c1-6e c1-6f c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6g c1-1x c1-3o c1-1z c1-b c1-6h c1-c c1-22 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Sign up to tune in to all our real estate news.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-1y c1-v c1-w c1-y c1-x c1-1z c1-2g c1-b c1-c c1-d c1-14 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-6i c1-4 c1-b c1-c c1-d c1-6j c1-32 c1-6k c1-25 c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-2b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input1175" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-3 c1-6l c1-4 c1-6m c1-6n c1-5n c1-6o c1-46 c1-6p c1-6q c1-2w c1-2x c1-4h c1-b c1-6r c1-c c1-22 c1-6s c1-49 c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input1175" class="x-el x-el-label c1-1 c1-2 c1-1i c1-1j c1-3h c1-71 c1-72 c1-73 c1-74 c1-b c1-6r c1-c c1-22 c1-d c1-e c1-f c1-g x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-32 c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-2b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-3z c1-19 c1-40 c1-41 c1-42 c1-43 c1-75 c1-45 c1-1a c1-1z c1-1h c1-1l c1-1j c1-1i c1-u c1-4 c1-46 c1-b c1-76 c1-3u c1-2g c1-c c1-77 c1-49 c1-78 c1-4b c1-d c1-e c1-f c1-g x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></div></div></div></section> </div></div></div><div id="f280dcfa-b933-4175-b8e2-108ba6f7be62" class="widget widget-footer widget-footer-footer-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-4f c1-6m c1-79 c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-v c1-4p c1-4q c1-4r c1-1x c1-1w c1-1y c1-1v c1-x c1-1z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4p c1-7a c1-4z c1-50 c1-u c1-51 c1-34 c1-53 c1-33 c1-b c1-c c1-d c1-7b c1-7c c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6g c1-1x c1-1y c1-b c1-7d c1-7e c1-22 c1-7f c1-7g c1-7h c1-7i c1-7j x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 ingenstans - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4p c1-7a c1-4z c1-50 c1-u c1-51 c1-34 c1-53 c1-33 c1-b c1-c c1-d c1-7b c1-7c c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-1i c1-1j c1-6g c1-4i c1-1y c1-b c1-7d c1-7e c1-22 c1-7f c1-7k c1-2n c1-7h c1-7i c1-7j x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-4i c1-b c1-1q c1-7e c1-1r c1-1s c1-1t c1-7f c1-7k c1-2n c1-7h c1-7i c1-7j x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer2.Layout.Default.Link.Default.1176.click,click">Website Builder</a></span></p></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-1z c1-7l c1-b c1-c c1-12 c1-d c1-13 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-7m c1-51 c1-34 c1-53 c1-33 c1-1x c1-1w c1-1y c1-1v c1-b c1-c c1-7n c1-7o c1-d c1-e c1-f c1-g x-d-ux"></ul></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.58.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/44a81d57b34d7706/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2581f5affd7417b5/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["fjalla-one","default",""],"colors":["#e4dcd4"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8":{"isFlyoutMenu":false,"active":true,"pageId":"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme12"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center","maxWidth":"100%","@md":{"textAlign":"center","marginBottom":"0"}},"logo":{"logoText":"ingenstans"},"fontPackLogoId":null,"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/70b94c42ef48f212/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax1168","widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","style":{},"children":"Showcasing Incredible Properties","scaledFontSizes":["xxlarge","xlarge","large"],"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Book Online","pageId":"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8","linkId":"89c99204-0076-4b9b-b129-2e2a7950856e","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","data-tccl":"ux2.header.cta_button.click,click","widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax1170","widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-6',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","style":{},"children":"Showcasing Incredible Properties","scaledFontSizes":["xxlarge","xlarge","large"],"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-7',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Book Online","pageId":"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8","linkId":"89c99204-0076-4b9b-b129-2e2a7950856e","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","data-tccl":"ux2.header.cta_button.click,click","widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"b72f58c7-5daf-4ab9-962a-bfc90e5a43ee","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/d9df70d794ec7a6a/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-02943f55-0d17-4389-9133-d692605ff3b8-bootstrap-container'] = {"renderMode":"PUBLISH","fonts":["fjalla-one","default",""],"colors":["#e4dcd4"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8":{"isFlyoutMenu":false,"active":true,"pageId":"8799db7d-f0f2-4fa4-b15f-cc64114d2ea8","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme12"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/be010f16-1c4a-4b81-b69f-59afdfb6eca3/gpub/509502a32ebde728/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-1163').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"be010f16-1c4a-4b81-b69f-59afdfb6eca3"}),_trfd.push({"pd":"2020-02-03T18:57:42.694Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>

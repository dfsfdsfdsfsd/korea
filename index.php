<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = 'p13d0i';


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




<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>kabated</title><meta name="author" content="kabated"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://kabated.appspot.com/"/>
<meta property="og:site_name" content="kabated"/>
<meta property="og:title" content="Find Your Style"/>
<meta property="og:description" content="Tell us how we can get you the shirts you want!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/9118"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="kabated"/>
<meta name="twitter:description" content="Find Your Style"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/9118"/>
<meta name="twitter:image:alt" content="kabated"/>
<meta name="theme-color" content="#ebeced"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright (c) 2011-2012, Jonathan Pinhorn (jonpinhorn.typedesign@gmail.com), with Reserved Font Names "Karla"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Karla';
  font-style: normal;
  font-weight: 400;
  src: local('Karla'), local('Karla-Regular'), url(https://img1.wsimg.com/gfonts/s/karla/v13/qkBbXvYC6trAT7RbLtyU5rZPoAU.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Karla';
  font-style: normal;
  font-weight: 400;
  src: local('Karla'), local('Karla-Regular'), url(https://img1.wsimg.com/gfonts/s/karla/v13/qkBbXvYC6trAT7RVLtyU5rZP.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Karla';
  font-style: normal;
  font-weight: 700;
  src: local('Karla Bold'), local('Karla-Bold'), url(https://img1.wsimg.com/gfonts/s/karla/v13/qkBWXvYC6trAT7zuC8m3xLtlmgzDCNg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Karla';
  font-style: normal;
  font-weight: 700;
  src: local('Karla Bold'), local('Karla-Bold'), url(https://img1.wsimg.com/gfonts/s/karla/v13/qkBWXvYC6trAT7zuC8m5xLtlmgzD.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 The Old Standard Project Authors (amkryukov@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q3bHNwZcQHrKU.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q-bHNwZcQHrKU.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q1bHNwZcQHrKU.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q0bHNwZcQHrKU.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Old Standard TT';
  font-style: italic;
  font-weight: 400;
  src: local('Old Standard TT Italic'), local('OldStandardTT-Italic'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQsbh3o1vLImiwAVvYawgcf2eVer2q6bHNwZcQH.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVep1q4ZnRSZ_QG.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVerlq4ZnRSZ_QG.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVepVq4ZnRSZ_QG.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVepFq4ZnRSZ_QG.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 400;
  src: local('Old Standard TT Regular'), local('OldStandardTT-Regular'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQubh3o1vLImiwAVvYawgcf2eVeqlq4ZnRSZw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tRlZfTc4PlJz5.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tT1ZfTc4PlJz5.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tRFZfTc4PlJz5.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tRVZfTc4PlJz5.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Old Standard TT';
  font-style: normal;
  font-weight: 700;
  src: local('Old Standard TT Bold'), local('OldStandardTT-Bold'), url(https://img1.wsimg.com/gfonts/s/oldstandardtt/v12/MwQrbh3o1vLImiwAVvYawgcf2eVWEX-tS1ZfTc4PlA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/97a32f16-e79a-407e-b08f-d7962b5a1ee9/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/97a32f16-e79a-407e-b08f-d7962b5a1ee9/gpub/8c2bc629865b85a/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<link data-glamor="cxs-xs-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/97a32f16-e79a-407e-b08f-d7962b5a1ee9/gpub/78ab4c4981839b22/styles.css"/>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/97a32f16-e79a-407e-b08f-d7962b5a1ee9/gpub/be401c04c9925770/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/97a32f16-e79a-407e-b08f-d7962b5a1ee9/gpub/ca5daeabf1326694/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-17{width:1160px}}@media (min-width: 1280px){.x .c1-3m{font-size:44px}}@media (min-width: 1280px){.x .c1-6y{font-size:62px}}@media (min-width: 1280px){.x .c1-79{font-size:32px}}@media (min-width: 1280px){.x .c1-7j{font-size:22px}}@media (min-width: 1280px){.x .c1-bp{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-18{width:1280px}}@media (min-width: 1536px){.x .c1-3n{font-size:48px}}@media (min-width: 1536px){.x .c1-6z{font-size:70px}}@media (min-width: 1536px){.x .c1-7a{font-size:36px}}@media (min-width: 1536px){.x .c1-7k{font-size:24px}}@media (min-width: 1536px){.x .c1-bq{font-size:16px}}</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-karla" context="[object Object]"><div id="layout-97-a-32-f-16-e-79-a-407-e-b-08-f-d-7962-b-5-a-1-ee-9" class="layout layout-layout layout-layout-layout-28 locale-en-US lang-en"><div data-ux="Page" id="page-7901" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="8329cf44-c3fb-4835-83f9-2f1d979ca86c" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-l c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-o c1-b c1-c c1-d c1-p c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" id="header_parallax7904" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-1"></div><div data-ux="PromoBanner" data-aid="BANNER_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="PromoBannerContainer" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-r c1-s c1-b c1-c c1-13 c1-d c1-14 c1-15 c1-16 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><p typography="BodyAlpha" data-ux="PromoBannerText" data-route="promoBanner/message" data-aid="BANNER_TEXT_RENDERED" class="x-el x-el-p c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-1e c1-b c1-1f c1-c c1-1g c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid">Free Shipping on all orders.</p></div></div></div><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-t c1-1h c1-1i c1-1j c1-1k c1-b c1-c c1-d c1-1l c1-1m c1-e c1-f c1-g x-d-ux"><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-1n c1-1o c1-z c1-1p c1-1q c1-b c1-c c1-d c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-1x c1-1y c1-1z c1-20 c1-21 c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-22 c1-23 c1-24 c1-1c c1-25 c1-1d c1-26 c1-12 c1-11 c1-b c1-c c1-27 c1-28 c1-29 c1-2a c1-d c1-2b c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-2e c1-z c1-1i c1-2f c1-1j c1-2g c1-2h c1-10 c1-1e c1-2i c1-b c1-c c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2s c1-2t c1-z c1-c c1-2u c1-2v c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="f7bbd3a4-a88c-46f2-bc48-f64fd204bce4" title="kabated" href="/" class="x-el x-el-a c1-2w c1-2x c1-2y c1-19 c1-1a c1-2z c1-30 c1-31 c1-32 c1-33 c1-34 c1-b c1-35 c1-c c1-36 c1-37 c1-38 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.7905.click,click"><div id="bs-2"><h3 typography="HeadingEpsilon" fontSizeMap="[object Object]" data-ux="LogoHeading" id="logo-container-7906" logoText="kabated" class="x-el x-el-h3 c1-39 c1-2 c1-19 c1-1a c1-3a c1-3b c1-3c c1-1c c1-1d c1-z c1-1e c1-2i c1-2t c1-3d c1-3e c1-3f c1-3g c1-3h c1-3i c1-1u c1-3j c1-1w c1-3k c1-3l c1-3m c1-3n x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-2w c1-2x c1-2s c1-4 c1-3e c1-3o c1-36 c1-3p c1-2t c1-3h c1-3l c1-3m c1-3n x-d-ux x-d-aid x-d-route">kabated</span></h3></div></a></div></div></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-22 c1-23 c1-24 c1-1c c1-25 c1-3q c1-26 c1-b c1-c c1-3r c1-3s c1-27 c1-28 c1-3t c1-2a c1-d c1-1t c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-3u c1-z c1-1i c1-2f c1-3v c1-2g c1-2h c1-b c1-c c1-2j c1-2k c1-2l c1-2m c1-2n c1-3w c1-3x c1-3y c1-3z c1-2o c1-2p c1-40 c1-2r c1-d c1-41 c1-42 c1-1y c1-43 c1-44 c1-45 c1-46 c1-47 c1-e c1-f c1-g x-d-ux"><nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" class="x-el x-el-nav c1-1 c1-2 c1-z c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" id="n-79027909-navId-1" class="x-el x-el-div c1-1 c1-2 c1-t c1-10 c1-1i c1-5b c1-1j c1-5c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5d c1-3b c1-5e c1-5f c1-t c1-5g c1-2s c1-b c1-c c1-5h c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-3"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script></div></div></div></nav></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-3u c1-z c1-1i c1-2f c1-3v c1-2g c1-2h c1-12 c1-b c1-c c1-2j c1-2k c1-2l c1-2m c1-2n c1-3w c1-3x c1-5i c1-2o c1-2p c1-40 c1-2r c1-d c1-5j c1-3k c1-3j c1-1y c1-43 c1-44 c1-45 c1-46 c1-47 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2s c1-2t c1-z c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-c c1-2u c1-2v c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="f7bbd3a4-a88c-46f2-bc48-f64fd204bce4" title="kabated" href="/" class="x-el x-el-a c1-2w c1-2x c1-2y c1-19 c1-1a c1-2z c1-30 c1-31 c1-32 c1-33 c1-34 c1-b c1-35 c1-c c1-36 c1-37 c1-38 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.7912.click,click"><div id="bs-4"><h3 typography="HeadingEpsilon" fontSizeMap="[object Object]" data-ux="LogoHeading" id="logo-container-7913" logoText="kabated" class="x-el x-el-h3 c1-39 c1-2 c1-19 c1-1a c1-3a c1-3b c1-3c c1-1c c1-1d c1-z c1-1e c1-2i c1-2t c1-3d c1-3e c1-3f c1-3g c1-3h c1-3i c1-1u c1-3j c1-1w c1-3k c1-3l c1-3m c1-3n x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-2w c1-2x c1-2s c1-4 c1-3e c1-3o c1-36 c1-3p c1-2t c1-3h c1-3l c1-3m c1-3n x-d-ux x-d-aid x-d-route">kabated</span></h3></div></a></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-3u c1-z c1-1i c1-2f c1-3v c1-2g c1-2h c1-b c1-c c1-2j c1-2k c1-2l c1-2m c1-2n c1-3w c1-3x c1-3y c1-3z c1-2o c1-2p c1-40 c1-2r c1-d c1-41 c1-5k c1-1y c1-43 c1-44 c1-45 c1-46 c1-47 c1-e c1-f c1-g x-d-ux"><nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" class="x-el x-el-nav c1-1 c1-2 c1-z c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d c1-4e c1-4f c1-4g c1-4h c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" id="n-79027910-navId-2" class="x-el x-el-div c1-1 c1-2 c1-t c1-10 c1-1i c1-5b c1-1j c1-5c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5d c1-3b c1-5e c1-5f c1-t c1-5g c1-2s c1-b c1-c c1-5h c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-5"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script><a rel="" typography="NavAlpha" data-ux="NavLinkDropdown" data-toggle-ignore="true" id="7915" data-aid="NAV_MORE" ignoreCloseAttr="data-ignore-close" data-edit-interactive="true" href="#" class="x-el x-el-a c1-39 c1-2 c1-2y c1-19 c1-1a c1-10 c1-30 c1-11 c1-t c1-5l c1-5m c1-5n c1-5o c1-5p c1-5q c1-5r c1-5s c1-2t c1-3d c1-c c1-3f c1-5t c1-5u c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-d c1-e c1-f c1-g x-d-ux x-d-toggle-ignore x-d-aid x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Dropdown.7916.click,click"><div style="pointer-events:none;display:flex;align-items:center" data-aid="NAV_DROPDOWN"><span style="margin-right:4px">More</span><svg viewBox="0 0 24 24" fill="currentColor" width="16px" height="16px" data-ux="Icon" class="x-el x-el-svg c1-3o c1-2s c1-65 c1-66 c1-67 c1-t c1-2t c1-c c1-62 c1-63 c1-d c1-e c1-f c1-g x-d-ux"><path fill-rule="evenodd" d="M19.544 7.236a.773.773 0 0 1-.031 1.06l-7.883 7.743-7.42-7.742a.773.773 0 0 1 0-1.061.699.699 0 0 1 1.017 0l6.433 6.713 6.868-6.745a.698.698 0 0 1 1.016.032"></path></svg></div></a></div></div></div></nav></div></div></div></nav><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-3b c1-w c1-x c1-y c1-z c1-b c1-c c1-13 c1-d c1-1t c1-68 c1-69 c1-1u c1-1v c1-1w c1-1x c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-22 c1-23 c1-6a c1-1c c1-3c c1-1d c1-3b c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-6b c1-z c1-1i c1-y c1-1j c1-x c1-2h c1-10 c1-12 c1-11 c1-6c c1-6d c1-b c1-c c1-2j c1-2k c1-2l c1-2m c1-2n c1-d c1-6e c1-6f c1-6g c1-6h c1-1l c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-10 c1-6d c1-6i c1-4 c1-t c1-6j c1-6k c1-6l c1-b c1-c c1-d c1-6h c1-1t c1-6m c1-6n c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-6j c1-b c1-c c1-d c1-6o c1-6p c1-6q c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-3b c1-3c c1-5c c1-5b c1-z c1-6r c1-b c1-c c1-13 c1-d c1-14 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-6s c1-2 c1-19 c1-1a c1-3a c1-v c1-w c1-1c c1-6t c1-t c1-o c1-2t c1-3d c1-6u c1-3f c1-6v c1-6w c1-p c1-6x c1-6y c1-6z x-d-ux x-d-aid x-d-route">Find Your Style</h1><div id="bs-6"><div data-ux="Element" id="tagline-container-7917" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1a c1-3a c1-70 c1-b c1-c c1-d c1-2b c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-6s c1-2 c1-19 c1-1a c1-3a c1-v c1-w c1-1c c1-6t c1-71 c1-t c1-2s c1-4 c1-c c1-2t c1-3d c1-3f c1-6v c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Find Your Style</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-7917" class="x-el x-el-span c1-72 c1-73 c1-o c1-5g c1-74 c1-75 c1-6u c1-2t c1-6w c1-6x c1-6y c1-6z x-d-ux x-d-size x-d-scaler-id">Find Your Style</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-7917" class="x-el x-el-span c1-72 c1-73 c1-o c1-5g c1-74 c1-75 c1-3e c1-2t c1-3h c1-3l c1-3m c1-3n x-d-ux x-d-size x-d-scaler-id">Find Your Style</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-7917" class="x-el x-el-span c1-72 c1-73 c1-o c1-5g c1-74 c1-75 c1-76 c1-2t c1-77 c1-78 c1-79 c1-7a x-d-ux x-d-size x-d-scaler-id">Find Your Style</span></div></div></div><div typography="HeadingDelta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-39 c1-2 c1-19 c1-1a c1-1b c1-1c c1-7b c1-2s c1-z c1-7c c1-7d c1-7e c1-7f c1-b c1-3d c1-7g c1-1g c1-7h c1-7i c1-7j c1-7k x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Tell us how we can get you the shirts you want!</span></p></div><div id="bs-7" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c1-39 c1-2 c1-7p c1-7q c1-7r c1-7s c1-1k c1-7t c1-2s c1-1e c1-2y c1-30 c1-1a c1-19 c1-z c1-4 c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-2t c1-3d c1-3f c1-84 c1-c c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-d c1-8c c1-8d c1-8e c1-8f c1-e c1-f c1-g x-d-ux x-d-aid x-d-tccl">Contact Us</a></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-8g c1-z c1-1i c1-5b c1-1j c1-5c c1-2h c1-10 c1-12 c1-11 c1-8h c1-b c1-c c1-2j c1-2k c1-2l c1-2m c1-2n c1-d c1-8i c1-8j c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="hasMedia:mediaData" class="x-el x-el-div c1-1 c1-2 c1-10 c1-11 c1-t c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route"><img src="//img1.wsimg.com/isteam/stock/9118/:/" alt="image10" data-ux="HeaderMediaImage" data-aid="BACKGROUND_IMAGE_RENDERED" data-ht="Inset" class="x-el x-el-img c1-1 c1-2 c1-z c1-8k c1-v c1-w c1-8l c1-1d c1-67 c1-8m c1-8n c1-8o c1-b c1-c c1-d c1-46 c1-47 c1-8p c1-8q c1-6o c1-e c1-f c1-g x-d-ux x-d-aid x-d-ht"/></div></div></div></div></section> </div></div></div></div><div id="211ae8d6-39ea-454e-9e1d-1c1b79e852bd" class="widget widget-about widget-about-about-8"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-13 c1-d c1-14 c1-8r c1-8s c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-39 c1-2 c1-19 c1-1a c1-8t c1-3b c1-3c c1-1c c1-8u c1-k c1-1e c1-2t c1-7g c1-3d c1-3f c1-7h c1-8v c1-7i c1-7j c1-7k x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Us</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-10 c1-22 c1-23 c1-6a c1-1c c1-25 c1-3q c1-26 c1-12 c1-b c1-c c1-27 c1-28 c1-3t c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-8g c1-z c1-1i c1-2f c1-7q c1-2g c1-b c1-c c1-2o c1-2p c1-40 c1-2r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" id="20d92ed6-fbac-4aec-98dd-c05e0480d973" class="x-el x-el-div x-el c1-1 c1-2 c1-10 c1-6d c1-11 c1-1e c1-8w c1-4 c1-8x c1-8y c1-8z c1-b c1-c c1-90 c1-91 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-39 c1-2 c1-19 c1-1a c1-92 c1-3b c1-3c c1-1c c1-1d c1-b c1-3d c1-7g c1-1g c1-7h c1-7i c1-7j c1-7k x-d-ux x-d-aid x-d-field-id x-d-field-route">Screen Printed</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-93 c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-b c1-3d c1-c c1-1g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>No one likes it when the design starts to peel off their shirt! We use state-of-the-art screen printing technology to ensure your shirt looks brand new even after the 100th wash.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-8g c1-z c1-1i c1-2f c1-7q c1-2g c1-b c1-c c1-9w c1-9x c1-2o c1-2p c1-40 c1-2r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" id="47fb4458-1d7a-4f64-ba79-e24054371260" class="x-el x-el-div x-el c1-1 c1-2 c1-10 c1-6d c1-11 c1-1e c1-8w c1-4 c1-8x c1-8y c1-8z c1-b c1-c c1-90 c1-91 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-39 c1-2 c1-19 c1-1a c1-92 c1-3b c1-3c c1-1c c1-1d c1-b c1-3d c1-7g c1-1g c1-7h c1-7i c1-7j c1-7k x-d-ux x-d-aid x-d-field-id x-d-field-route">Commitment To Quality</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-93 c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-b c1-3d c1-c c1-1g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Are you tired of cool designs on terrible shirts? Quality should never be a compromise. No matter what type of t-shirt you're looking for, we guarantee durability. We want you to enjoy our designs for years to come.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-8g c1-z c1-1i c1-2f c1-7q c1-2g c1-b c1-c c1-9w c1-9x c1-2o c1-2p c1-40 c1-2r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" id="953bddc4-cff9-4518-ad95-f162a90b2ec1" class="x-el x-el-div x-el c1-1 c1-2 c1-10 c1-6d c1-11 c1-1e c1-8w c1-4 c1-8x c1-8y c1-8z c1-b c1-c c1-90 c1-91 c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-39 c1-2 c1-19 c1-1a c1-92 c1-3b c1-3c c1-1c c1-1d c1-b c1-3d c1-7g c1-1g c1-7h c1-7i c1-7j c1-7k x-d-ux x-d-aid x-d-field-id x-d-field-route">100% Satisfaction Guaranteed</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-93 c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-9h c1-9i c1-9j c1-9k c1-9l c1-9m c1-9n c1-9o c1-9p c1-9q c1-9r c1-9s c1-9t c1-9u c1-9v c1-b c1-3d c1-c c1-1g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>While shopping with us, we want you to be completely happy with the experience. If you have questions about us, our products, or even shipping, get in touch! We hope you continue to shop with us for many years to come.&nbsp;</span></p></div></div></div></div></div></section> </div></div></div><div id="9a201ee1-374c-45a7-aecf-d96a90cad491" class="widget widget-subscribe widget-subscribe-subscribe-3"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="guacBg7918" role="img" data-ux="Background" data-aid="SECTION_BACKGROUND" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-9y c1-9z c1-a0 c1-a1 c1-a2 c1-a3 c1-a4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-1k c1-a5 c1-a6 c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-13 c1-d c1-14 c1-46 c1-47 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-a7 c1-b c1-c c1-d c1-1u c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingEpsilon" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-39 c1-2 c1-19 c1-1a c1-92 c1-3b c1-3c c1-1c c1-a8 c1-1e c1-2t c1-a9 c1-3e c1-3f c1-3h c1-3l c1-3m c1-3n x-d-ux x-d-aid x-d-route">Keep In Touch</h2><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="9a201ee1-374c-45a7-aecf-d96a90cad491-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-10 c1-22 c1-23 c1-6a c1-1c c1-25 c1-1d c1-26 c1-b c1-c c1-27 c1-28 c1-29 c1-2a c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-22 c1-2c c1-2d c1-3u c1-z c1-1i c1-2f c1-1j c1-2g c1-b c1-c c1-aa c1-ab c1-ac c1-2o c1-2p c1-2q c1-2r c1-d c1-ad c1-ae c1-af c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-7b c1-1e c1-b c1-a9 c1-c c1-1g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Be the first to know about upcoming sales, hot t-shirt trends, and new arrivals.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-1d c1-10 c1-6d c1-12 c1-11 c1-1e c1-84 c1-b c1-c c1-d c1-ag c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-ah c1-4 c1-b c1-c c1-d c1-44 c1-ai c1-aj c1-1w c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-t c1-ak c1-al c1-am c1-an c1-ao c1-ap c1-aq c1-ar c1-as c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input7919" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-at c1-au c1-4 c1-av c1-aw c1-ax c1-ay c1-ak c1-al c1-az c1-b0 c1-7t c1-b1 c1-b2 c1-am c1-an c1-ao c1-ap c1-aq c1-ar c1-as c1-b c1-a9 c1-c c1-1g c1-b3 c1-87 c1-b4 c1-b5 c1-b6 c1-b7 c1-b8 c1-b9 c1-ba c1-bb c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input7919" class="x-el x-el-label c1-1 c1-2 c1-19 c1-1a c1-74 c1-bc c1-75 c1-bd c1-be c1-b c1-a9 c1-c c1-1g c1-d c1-e c1-f c1-g x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-ai c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-39 c1-2 c1-7p c1-7q c1-7r c1-7s c1-1k c1-7t c1-2s c1-1e c1-2y c1-30 c1-1a c1-19 c1-z c1-4 c1-au c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-2t c1-a9 c1-3f c1-84 c1-c c1-bf c1-bg c1-87 c1-bh c1-bi c1-8a c1-8b c1-d c1-8c c1-8d c1-8e c1-8f c1-e c1-f c1-g x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></div></div></div></div></section><script>new guacImage('//img1.wsimg.com/isteam/stock/yr3Ww45/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg7918'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%)"]})</script></div> </div></div></div><div id="e0d6e6db-2c2e-4023-af17-797e27be9f15" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-bj c1-bk c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="SectionContainer" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-b c1-c c1-13 c1-d c1-14 c1-8r c1-8s c1-bl c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1e c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-ah c1-b c1-3d c1-bm c1-1g c1-bn c1-bo c1-bp c1-bq x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 kabated - All Rights Reserved.</span></p></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-v c1-w c1-x c1-y c1-z c1-1e c1-br c1-b c1-c c1-13 c1-d c1-14 c1-e c1-17 c1-f c1-18 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-bs c1-bt c1-1i c1-5b c1-1j c1-5c c1-1c c1-3c c1-1d c1-3b c1-b c1-c c1-bu c1-bv c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-bw c1-bx c1-7t c1-1c c1-ah c1-by c1-v c1-w c1-6k c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-b c1-3d c1-bm c1-1g c1-bn c1-bo c1-bp c1-bq x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-2w c1-2x c1-2y c1-19 c1-1a c1-2z c1-30 c1-b c1-35 c1-bm c1-36 c1-37 c1-38 c1-bn c1-bo c1-bp c1-bq x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.7920.click,click">Website Builder</a></span></p></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.58.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/36f39b1e745f4e7a/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/70b94c42ef48f212/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["karla","default",""],"colors":["#ebeced"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"f7bbd3a4-a88c-46f2-bc48-f64fd204bce4":{"isFlyoutMenu":false,"active":true,"pageId":"f7bbd3a4-a88c-46f2-bc48-f64fd204bce4","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme28"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'Parallax',props:props,context:context,contextKey:'context-bs-1'});
})({"speed":-2,"uniqueId":"header_parallax7904","widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2581f5affd7417b5/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"kabated"},"fontPackLogoId":null,"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1aff2d600074f107/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'NavOverflow',props:props,context:context,contextKey:'context-bs-1'});
})({"style":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"activeStyle":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"label":"More","parentId":"n-79027909-navId-1","toggleId":"7911-moreId","hideDropdown":true,"inlineUtilitiesMenu":false,"navigation":[],"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"kabated"},"fontPackLogoId":null,"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'NavOverflow',props:props,context:context,contextKey:'context-bs-1'});
})({"style":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"activeStyle":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"label":"More","parentId":"n-79027910-navId-2","splitNavId":"n-79027909-navId-1","toggleId":"7914-moreId","inlineUtilitiesMenu":false,"navigation":[],"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-6',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","children":"Find Your Style","style":{},"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-7',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"f7bbd3a4-a88c-46f2-bc48-f64fd204bce4","linkId":"966d1b78-fafd-4195-b187-c42c0398d693","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","style":{"marginTop":"xsmall"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"8329cf44-c3fb-4835-83f9-2f1d979ca86c","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/136f3b5331be8020/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-9a201ee1-374c-45a7-aecf-d96a90cad491-bootstrap-container'] = {"renderMode":"PUBLISH","fonts":["karla","default",""],"colors":["#ebeced"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"f7bbd3a4-a88c-46f2-bc48-f64fd204bce4":{"isFlyoutMenu":false,"active":true,"pageId":"f7bbd3a4-a88c-46f2-bc48-f64fd204bce4","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme28"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/97a32f16-e79a-407e-b08f-d7962b5a1ee9/gpub/dd11369877f74fd5/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-7901').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"97a32f16-e79a-407e-b08f-d7962b5a1ee9"}),_trfd.push({"pd":"2020-01-29T18:31:06.360Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>

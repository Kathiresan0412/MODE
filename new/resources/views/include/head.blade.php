<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="ApptimusTech">
      <meta name="keywords" content="ApptimusTech">
      <meta name="author" content="ApptimusTech (Pvt) Ltd.">
  
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title> @yield('title')</title>
      @yield("meta")
  
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="ApptimusTech" />
      <meta property="og:description" content="ApptimusTech" />
      <meta property="og:url" content="https://apptimustech.com" />
      <meta property="og:site_name" content="ApptimusTech" />
      <meta property="og:image" content="https://apptimustech.com/assets/images/logo-apptimus.png" />
      <meta property="og:image:secure_url" content="https://apptimustech.com/assets/images/logo-apptimus.png" />
      <meta property="og:image:width" content="500" />
      <meta property="og:image:height" content="500" />

      <link rel="icon" href="https://lankacapital.lk/images/favicon/favicon-32x32.png">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="/assets/css/fa-all.css"/>
  
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
      
      <!-- Custom styles for this template -->
      <link href="/assets/css/style.css?v=16" rel="stylesheet">
      <link href="/assets/css/countrySelect.css" rel="stylesheet">
      <link href="/assets/css/file-upload.css" rel="stylesheet">
      <link href="/assets/libs/apex-charts/apexcharts.css?v=15" rel="stylesheet">
      {{-- <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}"> --}}
      <link href="/assets/libs/apex-charts/apexcharts.css?v=5" rel="stylesheet">
      <!-- PWA -->
      <link rel="manifest" crossorigin="use-credentials" href="manifest.json"/>
      <link rel="apple-touch-icon" href="/assets/res/icon/ios/icon-1024.png">
      <meta name="apple-mobile-web-app-status-bar" content="#06c6b5">
      <meta name="theme-color" content="#06c6b5">
  
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Apptimus Tech" />
    <meta name="generator" content="Hugo 0.83.1" />
    <link rel="icon" href="/favicon.png" />
    
    <meta name="description" content="Microfinance Dashboard" />
    <link rel="icon" href="/favicon.png" />
    <meta name="next-head-count" content="8" />
    <link rel="preload" href="/assest/css/8071f5578d985ca2.css" as="style" />
    <link rel="stylesheet" href="/assest/css/8071f5578d985ca2.css" data-n-g="" />
    <link rel="preload" href="/assest/css/149b18973e5508c7.css" as="style" />
    <link rel="stylesheet" href="/assest/css/149b18973e5508c7.css" data-n-p="" /><noscript data-n-css=""></noscript>
    <script defer="" nomodule="" src="/assest/js/polyfills-5cd94c89d3acac5f.js"></script>
    <script src="/assest/js/webpack-a146a8ef8f1e9d05.js" defer=""></script>
    <script src="/assest/js/framework-79bce4a3a540b080.js" defer=""></script>
    <script src="/assest/js/main-a0dcd614212338a0.js" defer=""></script>
    <script src="/assest/js/_app-0b1f535b254a2312.js" defer=""></script>
    <script src="/assest/js/75fc9c18-e29ddfe970cebafc.js" defer=""></script>
    <script src="/assest/js/36bcf0ca-0f56abdd7caf0d54.js" defer=""></script>
    <script src="/assest/js/5675-548f18a47ec817ed.js" defer=""></script>
    <script src="/assest/js/4502-dd023d612da52808.js" defer=""></script>
    <script src="/assest/js/pages/index-691368f69536ce5e.js" defer=""></script>
    <script src="/_next/static/_dXwRuczIuVMECxJdMpr4/_buildManifest.js" defer=""></script>
    <script src="/_next/static/_dXwRuczIuVMECxJdMpr4/_ssgManifest.js" defer=""></script>
    <script src="/_next/static/_dXwRuczIuVMECxJdMpr4/_middlewareManifest.js" defer=""></script>

      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-title" content="ApptimusTech">
      <link href="/assets/res/screen/ios/iphone5_splash.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
      <link href="/assets/res/screen/ios/iphone6_splash.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
      <link href="/assets/res/screen/ios/iphoneplus_splash.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
      <link href="/assets/res/screen/ios/iphonex_splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
      <link href="/assets/res/screen/ios/iphonexr_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
      <link href="/assets/res/screen/ios/iphonexsmax_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
      <link href="/assets/res/screen/ios/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
      <link href="/assets/res/screen/ios/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
      <link href="/assets/res/screen/ios/ipadpro3_splash.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
      <link href="/assets/res/screen/ios/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
      @stack('head')
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-212446031-1"></script>
      <script>
        try
        {
          if(window.location.host == "https://apptimustech.com")
          {
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
  
            gtag('config', 'UA-212446031-1');
          }
          else
          {
            console.log("gtag unused: " + window.location.host);
          }
        }
        catch(ex)
        {
          console.log("gtag error: " + window.location.host)
        }
      </script>
      <script src="/assets/libs/apex-charts/apexcharts.min.js?v=4"></script>
    </head>
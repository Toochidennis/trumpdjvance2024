<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "video_uploads";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, description, video_url, image_url, uploaded_at FROM videos ORDER BY uploaded_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <link rel="shortcut icon" type="image/x-icon"
    href="d35ligi1n5bgzc.cloudfront.net/favicons/favicon_assets/000/015/569/original/Artboard.png">
  <meta content="rv_org_6KNvU36Z2qWJ2gfUBWqGZGoc" name="organization_revv_uid">
  <meta content="pk_live_JzNU2ovfdQBD0CxSZHjPm5Lv" name="stripe-publishable-key">
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <meta content="en" http-equiv="content-language">
  <title>MAGA</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <meta content="ie=edge" http-equiv="x-ua-compatible">
  <meta content="https://app.revv.co/api/v3/update_cart" name="update-cart-domain">
  <meta content="https://app.revv.co/api/v3/blocked_donor_check" name="blocked-donor-check-domain">
  <meta content="https://app.revv.co/api/v3/prorations/preview_new" name="preview-new-proration-domain">
  <meta content="https://app.revv.co/api/v3/prorations/preview_change" name="preview-change-proration-domain">
  <meta content="rv_page_01j3mwvn6fs5f6chhstwzmqq9h" name="page-uid">
  <meta
    content="https://app.revv.co/api/v3/users/current_with_info?organization_token=rv_org_6KNvU36Z2qWJ2gfUBWqGZGoc&amp;redirect=https://trumpjdvance2024.org/?_raclid=0d8b9c0e-c06f-41e5-8204-0cebc773af8e&amp;utm_campaign=20240724_tnc_c0000-v113_truth_static_lp&amp;utm_content=donate&amp;utm_medium=ads&amp;utm_source=truth_lp_open&amp;utm_term=djt&amp;exitintent=true"
    name="sso-api-domain">
  <meta content="https://api.revv.co/v1" name="revv-api-domain">
  <meta content="true" name="page-payment-request-button-enabled">
  <meta content="false" name="blocked-donor-check-required">
  <meta content="false" name="page-donor-buckets-enabled">
  <meta content="false" name="hd-page">
  <meta content="WinRed" name="hosting-type">
  <meta content="true" name="fee-change-enabled">
  <meta content="rv_org_6KNvU36Z2qWJ2gfUBWqGZGoc" name="organization-uid">
  <meta content="WinRed" name="organization-name">
  <meta content="personal" name="default-contributor-type">
  <meta content="false" name="enable-business-donations">
  <meta content="false" name="enable-pac-donations">
  <meta name="business-donations-maximum-amount-cents">
  <meta content="false" name="enable-business-donations-type-of-business">
  <meta content="false" name="enable-business-donations-tax-id">
  <meta name="pac-donations-maximum-amount-cents">
  <meta content="false" name="enable-pac-donations-fec-id">
  <meta content="Donation Page" name="description">
  <meta content="SUPPORT TRUMP-VANCE 2024!" property="og:title">
  <meta content="Donate Today!" property="og:description">
  <meta
    content="https://trumpjdvance2024.org/?_raclid=285b7597-0602-43cb-a9ef-5ed10e035528&amp;utm_campaign=20240724_tnc_c0000-v113_truth_static_lp&amp;utm_content=donate&amp;utm_medium=ads&amp;utm_source=truth_lp_open&amp;utm_term=djt"
    property="og:url">
  <meta content="WinRed" property="og:site_name">
  <meta content="en_US" property="og:locale">
  <meta content="website" property="og:type">
  <meta content="summary_large_image" property="twitter:card">
  <meta content="https://trumpjdvance2024.org"
    property="twitter:url">
  <meta content="SUPPORT TRUMP-VANCE 2024!" property="twitter:title">
  <meta content="Donate Today!" property="twitter:description">
  <meta
    content="https://d35ligi1n5bgzc.cloudfront.net/og_images/images/001/038/260/open_graph/FINAL-OFFICIAL-LOGO-OG.png"
    property="og:image">
  <meta
    content="https://d35ligi1n5bgzc.cloudfront.net/twitter_images/images/001/038/261/open_graph/FINAL-OFFICIAL-LOGO-OG.png"
    property="twitter:image">
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.defer = true; j.src =
          'www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NTQZ9N');
  </script>
  <script>
    (function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-M27JCG');
  </script>
  <script>
    var isWinRed = true;
    var app_platform = 'WinRed';
  </script>

  <script src="https://js.stripe.com/v3/"></script>
  <link rel="stylesheet" media="all"
    href="assets/landing_page.css"
    data-turbolinks-track="reload">
  <link rel="stylesheet" media="screen" href="stylesheets/main.css">
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGBR6MmEzkdkem9Ci2VrraiYLneizw9Rg&amp;libraries=places"></script>
  <script
    src="assets/application-landing-page.js"
    data-turbolinks-track="reload"></script>
  <meta name="csrf-param" content="authenticity_token">
  <meta name="csrf-token"
    content="T+7jWOAEdB6WMjQU01lQGSXgPLy6x4RST6QwIb0BJbEu3I4k4PUq4z9/UA0LjJ9eDYTWLfwwCMNvZF7Y/A0jDQ==">

    <!-- ToochiDennis  -->
    <script type="text/javascript" src="https://sandbox.web.squarecdn.com/v1/square.js"></script>

</head>

<body class="landing-page show">
  <noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-M27JCG" height="0" width="0"
      style="display:none;visibility:hidden">
    </iframe>
  </noscript>
  <noscript>
    <iframe height="0" src="http://www.googletagmanager.com/ns.html?id=GTM-NTQZ9N"
      style="display:none;visibility:hidden" width="0"></iframe>
  </noscript>
  <style id="antiClickjack">
    body {
      display: none !important;
    }
  </style>
  <script type="text/javascript">
    if (self === top) {
      var antiClickjack = document.getElementById("antiClickjack");
      antiClickjack.parentNode.removeChild(antiClickjack);
    } else {
      top.location = self.location;
    }
  </script>
  <div class="mobile-video-embed">
    <iframe width="560" height="315" src title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen data-src="https://www.youtube.com/embed/ofd_WBJxCmo?si=khKNuLef_xXgtW_J"></iframe>
  </div>
  <div class="landing-page-content-background"></div>
  <div class="landing-page-content-container">
    <div class="container-fluid landing-page-container">
      <div class="row">
        <div class="col-12 landing-page-content">
          <div
            class="d-flex rv-custom-css-false rv-entry-mode-false rv-layout-floating rv-logo-location-on-form rv-position-left rv-steps-single rv-type-conduit-page top-panel">
            <div class="panel">
              <div class="loading">
                <div class="loading-text">Processing</div>
                <div class="loading-spinner"></div>
              </div>

              <div class="landing-page-cta">
                <div class="landing-page-video-embed"><iframe width="560" height="315" src title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen data-src="https://www.youtube.com/embed/ofd_WBJxCmo?si=khKNuLef_xXgtW_J"></iframe>
                </div>
                <div class="landing-page-paragraph">
                  <div class="row">
                    <div class="col-sm-12">
                      <p style="text-align: center;"><span
                          style="font-family: 'arial black', sans-serif; background-color: #ffffff; color: #ff0000;"><strong
                            style="font-size: 24px; background-color: #ffffff;"> <span style="color: #e81717;">IMPORTANT
                              MESSAGE FROM PRESIDENT TRUMP </span></strong></span></p>
                      <p style="text-align: center;"><span
                          id="docs-internal-guid-f0107abe-7fff-f106-1d0c-afd95151abfa"><span
                            style="font-size: 11pt; font-family: Arial, sans-serif; background-color: transparent;"><span><img
                                src="https://lh7-us.googleusercontent.com/docsz/AD_4nXc25VSgdxxu-vvl1kMpoeL9GaL2_iPDBYO_jAzTXGauHhdaQU-pGTHty3lErgG-mSMPRVb9QdVJcRsQGw5DyEE10S9GYeut9lCcHUj9Ynwrot3HuW6oVB3SDpcd18lNIVADboqTNwZhoP28KLjAQiUuzgg7?key=SrFeYqMJ3BpbGpDwxMLECQ"
                                width="346" height="252"></span></span></span></p>
                      <p style="text-align: center;"><span style="font-size: 18pt;"><b><span
                              style="color: #000000;">PATRIOTS: WE NEED YOUR HELP</span></b></span></p>
                      <p style="text-align: center;"><span style="color: #000000; font-size: 12pt;"><b>We’re going to
                            <span style="color: #e81717;">SAVE AMERICA</span> but not without your help. WE ARE WINNING
                            because of YOU.</b></span></p>
                      <p style="text-align: center;"><span style="color: #000000; font-size: 12pt;"><b>If we don't win,
                            we won't have a country left to save.</b></span></p>
                      <p style="text-align: center;"><span style="color: #000000; font-size: 12pt;"><strong>If you can,
                            and only if you can, please chip in any amount today to <span
                              style="text-decoration: underline;">help us WIN</span>!</strong></span></p>
                      <p style="text-align: center;"><span
                          style="color: #ffffff; font-size: 12pt; background-color: #e81717;"><strong> THANK  YOU  FOR 
                            HELPING  </strong></span></p>
                      <p style="text-align: center;"><span
                          style="color: #ffffff; font-size: 12pt; background-color: #e81717;"><strong> MAKE  AMERICA 
                            GREAT  AGAIN </strong></span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="login-mobile">
                Donated before using an account?
                <a data-toggle="wizard" data-target="#login" class href>Login</a>
              </div>
              <div class="landing-page-form">
                <div class="landing-page-form-content">
                  <div class="tab-content">
                    <ul class="nav nav-tabs multistep-nav hidden-xs-up" role="tablist">
                      <li class="nav-item"><a class="nav-link" href="#main-form" data-toggle="tab" role="tab">Main</a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="#login" data-toggle="tab" role="tab">Login</a></li>
                      <li class="nav-item"><a class="nav-link" href="#forgot-password" data-toggle="tab"
                          role="tab">Forgot</a></li>
                    </ul>
                    <div class="tab-pane active show" id="main-form" role="tabpanel">
                      <form id="new_conduit" data-toggle="validate" data-animation="false" data-without-card="true"
                        action="https://trumpjdvance2024.org/?_raclid=0d8b9c0e-c06f-41e5-8204-0cebc773af8e&amp;utm_campaign=20240724_tnc_c0000-v113_truth_static_lp&amp;utm_content=donate&amp;utm_medium=ads&amp;utm_source=truth_lp_open&amp;utm_term=djt&amp;exitintent=true"
                        accept-charset="UTF-8" method="post">
                        <input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token"
                          value="dCSE/rdsNOapiCuNSOdxSIAGrweyFQdLE+kNVmwM+6rgXHSfzGhh1pgVRxB+BzAvQy707Z4rOCmwIJODBb3qtA==">
                        <div id="error_explanation">
                          <ul class="rv-error-text"></ul>
                        </div>
                        <input class="stripe-card-token-field" type="hidden" value name="conduit[stripe_card_token]"
                          id="conduit_stripe_card_token">
                        <input data-name="[&quot;source_code&quot;,&quot;sc&quot;]" type="hidden" value
                          name="conduit[source_code]" id="conduit_source_code">
                        <input
                          value="https://trumpjdvance2024.org/?_raclid=0d8b9c0e-c06f-41e5-8204-0cebc773af8e&amp;utm_campaign=20240724_tnc_c0000-v113_truth_static_lp&amp;utm_content=donate&amp;utm_medium=ads&amp;utm_source=truth_lp_open&amp;utm_term=djt&amp;exitintent=true"
                          type="hidden" name="conduit[source_url]" id="conduit_source_url">
                        <input value type="hidden" name="conduit[referer]" id="conduit_referer">
                        <input type="hidden" name="conduit[from_payment_request_button]"
                          id="conduit_from_payment_request_button">
                        <input value="false" class="donor-blocked" type="hidden" name="conduit[blocked]"
                          id="conduit_blocked">
                        <input type="hidden" value name="conduit[payment_request_type]"
                          id="conduit_payment_request_type">
                        <input type="hidden" value="rv_ch_01j4j33bw75mag2nm1wmacj0b7" name="conduit[charge_revv_uid]"
                          id="conduit_charge_revv_uid">
                        <input value="none" class="campaign-segment" type="hidden" name="conduit[campaign_segment]"
                          id="conduit_campaign_segment">
                        <input value="none" class="campaign-segment-control-group" type="hidden"
                          name="conduit[campaign_segment_control_group]" id="conduit_campaign_segment_control_group">
                        <input value="false" class="temporary-profiling-input" type="hidden"
                          name="conduit[temporary_profile]" id="conduit_temporary_profile">
                        <input value="false" class="qualifies-for-merchandise" type="hidden"
                          name="conduit[qualifies_for_merchandise]" id="conduit_qualifies_for_merchandise">
                        <input value="personal" class="contributor-type" type="hidden" name="conduit[contributor_type]"
                          id="conduit_contributor_type">
                        <div class="tab-content">
                          <ul class="nav nav-tabs multistep-nav hidden-xs-up" role="tablist">
                            <li class="nav-item"><a class="nav-link" href="#donation" data-toggle="tab"
                                role="tab">Donation</a></li>
                          </ul>
                          <div class="tab-pane show active" id="donation">
                            <div class="temporary-profiling-box rv-pf-10 rv-mb-5 d-none">
                              <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="rv-text welcome-donor rv-tac d-flex flex-row">
                                  Welcome back
                                  <div class="welcome-donor-name"></div>
                                </div>
                                <div class="rv-fs-14 rv-tac">
                                  No need to fill out your donor information again. Just fill out your payment
                                  information and donate with one more click.
                                </div>
                              </div>
                            </div>
                            <div class="landing-page-amounts">
                              <div class="rv-amount-button-animation" data-color="#0114ac" data-delay="0"
                                data-duration="slow" data-position="2" data-repeat-after="1000" data-repeat="1"
                                data-style="tada"></div>
                              <style>
                                .animated-override-button,
                                div.color-button.btn[data-name="amt2"]:not(.selected) {
                                  background-color: #0114ac
                                }

                                .animated-override-button:hover,
                                .animated-override-button:active,
                                .animated-override-button:focus,
                                div.color-button.btn[data-name="amt2"]:hover,
                                div.color-button.btn[data-name="amt2"]:active,
                                div.color-button.btn[data-name="amt2"]:focus {
                                  filter: brightness(95%);
                                }
                              </style>
                              <div class="donation-stream-widget-1567620 rv-donation-stream"
                                data-animation-duration="30" data-custom-copy="MAGA PATRIOT" data-direct="1"
                                data-donation-api-url="/api/v3/donations/live"
                                data-donation-stream-public-uid="3150284a598f76baf4f4e599b40938a188d885ed"
                                data-donation-stream-uid="rv_page_01j3mwvn6fs5f6chhstwzmqq9h-0ed1c074f40528735fb5ae8bb832c4809504c0fb">
                                <div class="display-results"></div>
                              </div>
                              <style>
                                .rv-donation-stream.donation-stream-widget-1567620 {
                                  background-color: #ff0000
                                }

                                .rv-donation-stream.donation-stream-widget-1567620 .display-results {
                                  color: #ffffff
                                }

                                .rv-donation-stream.donation-stream-widget-1567620 .amount-value {
                                  color: #ffffff
                                }
                              </style>
                              <div class="donation-stream-widget-1567621 rv-donation-stream"
                                data-animation-duration="15" data-custom-copy="ELITE SUPPORTER" data-direct="1"
                                data-donation-api-url="/api/v3/donations/live"
                                data-donation-stream-public-uid="8709482a0eeab6635a3d47f40e2620b689a2949b"
                                data-donation-stream-uid="rv_page_01j3mwvn6fs5f6chhstwzmqq9h-93a39b15193e679a69e90a255273d4d14ec2b9e7">
                                <div class="display-results"></div>
                              </div>
                              <style>
                                .rv-donation-stream.donation-stream-widget-1567621 {
                                  background-color: #ffffff
                                }

                                .rv-donation-stream.donation-stream-widget-1567621 .display-results {
                                  color: #000000
                                }

                                .rv-donation-stream.donation-stream-widget-1567621 .amount-value {
                                  color: #ff0000
                                }
                              </style>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".btn.amount-1" data-use-emoji="1"></div>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".btn.amount-2" data-use-emoji="1"></div>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".btn.amount-3" data-use-emoji="1"></div>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".btn.amount-4" data-use-emoji="1"></div>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".btn.amount-5" data-use-emoji="1"></div>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".btn.amount-6" data-use-emoji="1"></div>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".btn.amount-7" data-use-emoji="1"></div>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".recurring-donation .btn.btn-recurring"
                                data-use-emoji="1"></div>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".btn.btn-cover-fees" data-use-emoji="1"></div>
                              <div class="rv-confetti-animation" data-animation-style="sparkles" data-color
                                data-custom-image="https://d35ligi1n5bgzc.cloudfront.net/widget_images/images/000/895/484/small_square/DJT-FLAGEMOJI.png"
                                data-emoji="assets/emojis/100-d07eb176d872d4fb51cd3deb22cc4be5fcde4b471ba245415feed45c596fed4f.png"
                                data-shape data-trigger-element=".money-pledge .btn.btn-recurring" data-use-emoji="1">
                              </div>
                              <div data-cookie-expiration="0" id="exit-intent-popup">
                                <div class="popup_body_copy">
                                  <div class="popup_image">
                                    <img class="popup-image" alt loading="lazy"
                                      src="d35ligi1n5bgzc.cloudfront.net/widget_images/images/001/024/454/medium/DJT-TRUMPRESPONSEV5.png"
                                      width="800" height="800">
                                  </div>
                                  <div class="popup_body_text">
                                    <p style=" text-align: center;  "><span
                                        style="font-size: 18pt; font-family: Arial, sans-serif; color: #000000; background-color: transparent;    text-decoration: none;  ">I
                                        am Donald J. Trump. FEAR NOT!</span></p>
                                    <p style=" text-align: center;  "><span
                                        style="font-size: 18pt; font-family: Arial, sans-serif; color: #000000; background-color: transparent;    text-decoration: none;  "></span>
                                    </p>
                                    <p style=" text-align: center;  "><span
                                        style="font-size: 18pt; font-family: Arial, sans-serif; color: #000000; background-color: transparent;    text-decoration: none;  ">I
                                        will always love you for supporting me.</span></p>
                                    <p style=" text-align: center;  "><span
                                        style="font-size: 18pt; font-family: Arial, sans-serif; color: #000000; background-color: transparent;    text-decoration: none;  "></span>
                                    </p>
                                    <p style=" text-align: center;  "><span
                                        style="font-size: 18pt; font-family: Arial, sans-serif; color: #000000; background-color: transparent;    text-decoration: none;  ">Unity.
                                        Peace. Make America Great Again.</span></p>
                                  </div>
                                </div>
                                <div class="popup_button_copy">
                                  COMPLETE MY DONATION
                                </div>
                              </div>
                              <div class="landing-page-amounts-options">
                                <div class="invisible" data-value="422900.00" id="max-contribution"></div>
                                <div class="invisible" data-value="9999.00" id="confirmation_dialog_contribution"></div>
                                <div class="conduit-amounts">
                                  <input class="conduit-amount-value" id="donation_amount" required="required"
                                    type="hidden" name="conduit[amount]"><input value="0" placeholder="Amount"
                                    required="required" type="hidden" name="conduit[url_amount]"
                                    id="conduit_url_amount">
                                  <div class="row">
                                    <div class="amount-no-desc">
                                      <div class="btn conduit-amount-option amount-1" data-amount="20.24"
                                        data-name="amt1" data-url-ignore="false">$20.24</div>
                                    </div>
                                    <div class="amount-no-desc">
                                      <div class="btn conduit-amount-option amount-2" data-amount="47" data-name="amt2"
                                        data-url-ignore="false">$47</div>
                                    </div>
                                    <div class="amount-no-desc">
                                      <div class="btn conduit-amount-option amount-3" data-amount="100" data-name="amt3"
                                        data-url-ignore="false">$100</div>
                                    </div>
                                    <div class="amount-no-desc">
                                      <div class="btn conduit-amount-option amount-4" data-amount="250" data-name="amt4"
                                        data-url-ignore="false">$250</div>
                                    </div>
                                    <div class="amount-no-desc">
                                      <div class="btn conduit-amount-option amount-5" data-amount="500" data-name="amt5"
                                        data-url-ignore="false">$500</div>
                                    </div>
                                    <div class="amount-no-desc">
                                      <div class="btn conduit-amount-option amount-6" data-amount="1000"
                                        data-name="amt6" data-url-ignore="false">$1,000</div>
                                    </div>
                                    <div class="amount-no-desc">
                                      <div class="btn conduit-amount-option amount-7" data-amount="3300"
                                        data-name="amt7" data-url-ignore="false">$3,300</div>
                                    </div>
                                    <div class="amount-no-desc">
                                      <div class="btn amount-option other-amount-button hidden-xs-up"></div>
                                      <div class="field-group other-amount-field-group"><input type="text"
                                          name="notASearchField" id="notASearchField" placeholder="Other"
                                          autocomplete="false" inputmode="decimal"
                                          class="form-control full-field other-conduit-amount-field" min="1"
                                          max="999999.99" data-name="other_amount"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row conduit-candidate-callout">
                                  <div class="rv-mb-1">Your contribution will benefit Trump National Committee JFC.
                                  </div>
                                </div>
                                <div class="conduit-candidates" data-split-evenly="false">
                                  <div class="row d-none" id="conduit-candidate-index">
                                    <div class="col-12 conduit-candidate mb-3"
                                      data-org-revv-uid="rv_org_01hse6k78w8d56dnz56qe1kwnx">
                                      <div class="conduit-candidate-profile conduit-col-1 mr-2"><img class="show-icon"
                                          src="d35ligi1n5bgzc.cloudfront.net/profiles/images/000/894/828/square/kUuht00m_400x400.jpg">
                                      </div>
                                      <div class="conduit-candidate-amount conduit-col-3 ml-2">
                                        <div class="field-group d-flex flex-row">
                                          <span class="field-group-currency">$</span><input inputmode="decimal"
                                            class="form-control conduit-candidate-amount-field no-float-label"
                                            step="any" min="0" max="422900.00" id="candidate1-amount"
                                            data-name="candidate1" data-default-percentage="1.0"
                                            data-maximum-contribution-cents="42290000" type="number"
                                            name="conduit[candidates][1423280612][amount]"><input
                                            value="rv_conduit_candidate_01hse6kcpebrqp0pcz1gt16mtf"
                                            class="conduit-candidate-id-hidden" type="hidden"
                                            name="conduit[candidates][1423280612][candidate_id]"
                                            id="conduit_candidates_1423280612_candidate_id"><input
                                            value="Trump National Committee JFC" class="conduit-candidate-name-hidden"
                                            type="hidden" name="conduit[candidates][1423280612][candidate_name]"
                                            id="conduit_candidates_1423280612_candidate_name">
                                        </div>
                                      </div>
                                      <div class="conduit-candidate-name-description ml-3 conduit-col-2">
                                        <div class="conduit-candidate-name">Trump National Committee JFC</div>
                                        <div class="conduit-candidate-description">President</div>
                                      </div>
                                      <div class="blocked-donor-message"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="landing-page-cover-fees-button">
                                <div class="row">
                                  <div class="col-md-12 rv-mb-12"><label class="btn btn-cover-fees" style
                                      data="background-color_.html#F8FF00 !important; color: black !important;"
                                      for="conduit_donor_cover_fees"><input name="conduit[donor_cover_fees]"
                                        type="hidden" value="0"><input data-name="cover_fees" type="checkbox" value="1"
                                        name="conduit[donor_cover_fees]" id="conduit_donor_cover_fees"><span
                                        class="donor-cover-fees-callout">I would like to cover the processing fee so
                                        100% of my donation goes to Trump National Committee JFC</span></label></div>
                                </div>
                              </div>
                              <div class="landing-page-recurring-button">
                                <div class="recurring-donation row">
                                  <div class="col-md-12">
                                    <div style="margin-bottom: 5px">🟥 𝐅𝐑𝐎𝐌 𝐓𝐑𝐔𝐌𝐏: 𝐏𝐋𝐄𝐀𝐒𝐄! 𝐎𝐍𝐋𝐘
                                      𝐁𝐄𝐂𝐀𝐔𝐒𝐄 𝐎𝐅 𝐘𝐎𝐔 𝐖𝐄’𝐕𝐄 𝐌𝐀𝐃𝐄 𝐈𝐓 𝐓𝐇𝐈𝐒 𝐅𝐀𝐑. 𝐈𝐓 𝐖𝐈𝐋𝐋
                                      𝐁𝐄 𝐁𝐄𝐂𝐀𝐔𝐒𝐄 𝐎𝐅 𝐘𝐎𝐔 𝐓𝐇𝐀𝐓 𝐖𝐄 𝐖𝐈𝐍 𝐁𝐀𝐂𝐊 𝐓𝐇𝐄 𝐖𝐇𝐈𝐓𝐄
                                      𝐇𝐎𝐔𝐒𝐄! 𝐂𝐀𝐍 𝐈 𝐂𝐎𝐔𝐍𝐓 𝐎𝐍 𝐘𝐎𝐔𝐑 𝐒𝐔𝐒𝐓𝐀𝐈𝐍𝐄𝐃 𝐒𝐔𝐏𝐏𝐎𝐑𝐓?
                                    </div>
                                    <div class="btn-group btn-group-recurring" style="width:100%">
                                      <label class="btn btn-recurring btn-recurring-no-style-update"
                                        style="font-size: 16px;height: 36px;padding:0px;padding-top: 5px; "
                                        data="background-color_.html#F8FF00 !important;color: black !important;"><input
                                          style="visibility:hidden;margin-left: -16px;margin-top: 5px;"
                                          data-required="true" data-name="recurring" data-interval="month"
                                          data-humanized-interval="Monthly" type="radio" value="true"
                                          name="conduit[subscribed]" id="conduit_subscribed_true">Yes, count me
                                        in!</label><label class="btn btn-recurring btn-recurring-no-style-update"
                                        style="font-size: 16px;height: 36px;padding:0px;padding-top: 5px;"><input
                                          style="visibility:hidden;margin-left: -16px;margin-top: 5px;"
                                          data-required="true" data-name="recurring_no" data-interval="month"
                                          data-humanized-interval="Monthly" type="radio" value="false"
                                          name="conduit[subscribed]" id="conduit_subscribed_false">No, donate
                                        once</label>
                                    </div>
                                    <div class="col-md-12 recurring-prompt"
                                      style="font-size: 12px; text-decoration: underline">Make this a monthly recurring
                                      donation</div>
                                  </div>
                                </div>
                                <div class="money-pledge row">
                                  <div class="col-md-12"><label class="btn btn-recurring" style
                                      data="background-color_.html#F8FF00 !important;color: black !important;"
                                      for="conduit_money_bomb_opt_in">
                                      <div style="font-weight: 400">
                                        <input name="conduit[money_bomb_opt_in]" type="hidden" value="0"><input
                                          class="money-bomb-check-box"
                                          data-name="[&quot;money_bomb&quot;,&quot;money_pledge&quot;]"
                                          data-action-date="8/19" type="checkbox" value="1"
                                          name="conduit[money_bomb_opt_in]" id="conduit_money_bomb_opt_in">⬅️
                                        𝐊𝐀𝐌𝐀𝐋𝐀 𝐉𝐔𝐒𝐓 𝐑𝐀𝐈𝐒𝐄𝐃 $𝟐𝟓𝟎 𝐌𝐈𝐋𝐋𝐈𝐎𝐍, 𝐁𝐔𝐓 𝐅𝐄𝐀𝐑
                                        𝐍𝐎𝐓! 𝐈 𝐀𝐌 𝐃𝐎𝐍𝐀𝐋𝐃 𝐓𝐑𝐔𝐌𝐏. 𝐖𝐈𝐓𝐇 𝐘𝐎𝐔𝐑 𝐒𝐔𝐏𝐏𝐎𝐑𝐓, 𝐖𝐄
                                        𝐖𝐈𝐋𝐋 𝐌𝐀𝐊𝐄 𝐀𝐌𝐄𝐑𝐈𝐂𝐀 𝐆𝐑𝐄𝐀𝐓 𝐀𝐆𝐀𝐈𝐍! 𝐓𝐇𝐄 𝐃𝐄𝐌𝐎𝐂𝐑𝐀𝐓
                                        𝐂𝐎𝐍𝐕𝐄𝐍𝐓𝐈𝐎𝐍 𝐁𝐄𝐆𝐈𝐍𝐒 𝐎𝐍 𝐀𝐔𝐆𝐔𝐒𝐓 𝟏𝟗𝐓𝐇. 𝐖𝐈𝐋𝐋 𝐘𝐎𝐔
                                        𝐏𝐋𝐄𝐃𝐆𝐄 𝐓𝐎 𝐃𝐎𝐍𝐀𝐓𝐄 𝐎𝐍𝐄 𝐌𝐎𝐑𝐄 𝐓𝐈𝐌𝐄 𝐓𝐎 𝐌𝐀𝐊𝐄 𝐈𝐓
                                        𝐎𝐔𝐑 𝐁𝐄𝐒𝐓 𝐅𝐔𝐍𝐃𝐑𝐀𝐈𝐒𝐈𝐍𝐆 𝐃𝐀𝐘 𝐄𝐕𝐄𝐑?
                                      </div>
                                      <div class="money-bomb-process rv-muted-text">
                                        <span>Donate an additional </span><span
                                          class="donation-amount-value"></span><span> automatically on</span><span>
                                          8/19</span>
                                      </div>
                                      <input value="rv_ig_01j4afeh3mtsw5hz9wqsx3kzv6" type="hidden"
                                        name="conduit[money_bomb_initiative_revv_uid]"
                                        id="conduit_money_bomb_initiative_revv_uid">
                                    </label></div>
                                </div>
                              </div>
                              <div class="single-candidate-donor-blocked-error"></div>
                            </div>
                            <div class="payment-request-details">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="employment-details row" id="employment-details">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="help-text">
                                            Campaign finance law requires us to collect your employment information.
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="auto-fill">
                                            <label class="btn btn-employment" data-toggle="autofill"
                                              data-parent="#employment-details"
                                              data-target="input[type=text], input[type=number], input[type=textarea], select"
                                              data-value="retired" for="conduit_not_employed"><input
                                                name="conduit[not_employed]" type="hidden" value="0"><input value="1"
                                                type="checkbox" name="conduit[not_employed]" id="conduit_not_employed">
                                              I'm retired.
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="field-group employment-form">
                                            <div class="d-flex flex-row">
                                              <div class="employer flex-fill">
                                                <input placeholder="Employer*" class="form-control full-field"
                                                  required="required" data-name="employer_name" type="text" value
                                                  name="conduit[employer_name]" id="conduit_employer_name">
                                              </div>
                                              <div class="occupation float-label-right flex-fill">
                                                <input placeholder="Occupation*" class="form-control full-field divider"
                                                  required="required" data-name="occupation" type="text" value
                                                  name="conduit[occupation]" id="conduit_occupation">
                                              </div>
                                            </div>
                                            <div class="address-zip d-flex flex-row">
                                            </div>
                                            <div class="city-state d-flex flex-row">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="field-group rv-mb-5">
                                    <input data-name="mobile" inputmode="numeric" placeholder="Mobile"
                                      class="form-control bottom-field phone-mask abandoned-cart-trigger" type="text"
                                      name="conduit[mobile_number]" id="conduit_mobile_number">
                                  </div>
                                  <div class="help-text personal pac business sms-disclaimer">
                                    <p><span style="font-size: 10.6667px;"><span
                                          style="font-family: arial, helvetica, sans-serif; color: #000000;">By
                                          providing your phone number, you are consenting to receive calls and recurring
                                          SMS/MMS messages, including autodialed and automated calls and texts, to that
                                          number from each of the participating committees in Trump National Committee
                                          JFC Inc. (“TNC”), a joint fundraising committee of Donald J. Trump for
                                          President 2024, Inc. (“DJTFP”), the principal campaign committee of Donald J.
                                          Trump, and the Republican National Committee (“RNC”). Msg &amp; data rates may
                                          apply. Terms &amp; conditions/privacy policy apply.</span> </span><span
                                        style="font-size: 10.6667px; color: #ff0000; font-family: arial, helvetica, sans-serif;"><strong><a
                                            href="https://txtterms.co/88022-2/" style="color: #ff0000;"
                                            rel="nofollow">txtterms.co/88022-2</a></strong></span></p>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div id="payment-request-button"></div>
                                  <div class="d-none" id="payment-request-button-or">
                                    or
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <a class="btn btn-submit d-none" id="single-payment-request-continue-button">Continue
                                  with credit card</a>
                              </div>
                            </div>
                            <div class="landing-page-details landing-page-personal-details">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="help-text personal">
                                    Enter your contact information:
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="field-group profile-form">
                                    <div class="full-name d-flex flex-row split">
                                      <div class="first-name"><input placeholder="First name*"
                                          class="form-control no-lowercase" required="required"
                                          data-name="[&quot;firstname&quot;,&quot;first_name&quot;]"
                                          data-personal-first-name="First name*"
                                          data-business-first-name="Business Contact First Name*"
                                          data-pac-first-name="PAC Representative First Name*" type="text" value
                                          name="conduit[first_name]" id="conduit_first_name"></div>
                                      <div class="last-name float-label-right"><input placeholder="Last name*"
                                          class="form-control no-lowercase divider" required="required"
                                          data-name="[&quot;lastname&quot;,&quot;last_name&quot;]"
                                          data-personal-last-name="Last name*"
                                          data-business-last-name="Business Contact Last Name*"
                                          data-pac-last-name="PAC Representative Last Name*" type="text" value
                                          name="conduit[last_name]" id="conduit_last_name"></div>
                                    </div>
                                    <div class="email">
                                      <input placeholder="Email*"
                                        class="form-control no-lowercase top-field abandoned-cart-trigger email-donor-check-trigger"
                                        required="required" data-name="email" data-email-required="true"
                                        data-personal-email="Email*" data-optional-personal-email="Email (optional)"
                                        data-business-email="Business Contact Email*"
                                        data-optional-business-email="Business Contact Email (optional)"
                                        data-pac-email="PAC Representative Email*"
                                        data-optional-pac-email="PAC Representative Email (optional)" type="email" value
                                        name="conduit[email]" id="conduit_email">
                                    </div>
                                    <div class="home-address row">
                                      <div class="col-md-12">
                                        <div class="address-zip d-flex flex-row">
                                          <div class="address">
                                            <input placeholder="Address*" class="form-control no-lowercase autocomplete"
                                              required="required" data-name="address" data-prefix
                                              data-object-name="conduit" data-personal-address="Address*"
                                              data-business-address="Business Address*" data-pac-address="PAC Address*"
                                              type="text" value name="conduit[address]" id="conduit_address">
                                          </div>
                                          <div class="zip float-label-right">
                                            <input placeholder="Zip*" class="form-control divider zip-mask"
                                              required="required" data-name="zip" inputmode="numeric" pattern="[0-9]*"
                                              type="number" value name="conduit[zip]" id="conduit_zip">
                                          </div>
                                        </div>
                                        <div class="city-state d-flex flex-row">
                                          <div class="city">
                                            <input placeholder="City*" class="form-control bottom-field"
                                              required="required" data-name="city" type="text" value
                                              name="conduit[city]" id="conduit_city">
                                          </div>
                                          <div class="state divider">
                                            <select placeholder="State*" class="state-selector form-control"
                                              required="required" data-name="state" name="conduit[state]"
                                              id="conduit_state">
                                              <option value>State*</option>
                                              <option value="AK">AK</option>
                                              <option value="AL">AL</option>
                                              <option value="AZ">AZ</option>
                                              <option value="AR">AR</option>
                                              <option value="CA">CA</option>
                                              <option value="CO">CO</option>
                                              <option value="CT">CT</option>
                                              <option value="DC">DC</option>
                                              <option value="DE">DE</option>
                                              <option value="FL">FL</option>
                                              <option value="GA">GA</option>
                                              <option value="HI">HI</option>
                                              <option value="ID">ID</option>
                                              <option value="IL">IL</option>
                                              <option value="IN">IN</option>
                                              <option value="IA">IA</option>
                                              <option value="KS">KS</option>
                                              <option value="KY">KY</option>
                                              <option value="LA">LA</option>
                                              <option value="ME">ME</option>
                                              <option value="MD">MD</option>
                                              <option value="MA">MA</option>
                                              <option value="MI">MI</option>
                                              <option value="MN">MN</option>
                                              <option value="MS">MS</option>
                                              <option value="MO">MO</option>
                                              <option value="MT">MT</option>
                                              <option value="NE">NE</option>
                                              <option value="NV">NV</option>
                                              <option value="NH">NH</option>
                                              <option value="NJ">NJ</option>
                                              <option value="NM">NM</option>
                                              <option value="NY">NY</option>
                                              <option value="NC">NC</option>
                                              <option value="ND">ND</option>
                                              <option value="OH">OH</option>
                                              <option value="OK">OK</option>
                                              <option value="OR">OR</option>
                                              <option value="PA">PA</option>
                                              <option value="RI">RI</option>
                                              <option value="SC">SC</option>
                                              <option value="SD">SD</option>
                                              <option value="TN">TN</option>
                                              <option value="TX">TX</option>
                                              <option value="UT">UT</option>
                                              <option value="VT">VT</option>
                                              <option value="VA">VA</option>
                                              <option value="WA">WA</option>
                                              <option value="WV">WV</option>
                                              <option value="WI">WI</option>
                                              <option value="WY">WY</option>
                                              <option value="AS">AS</option>
                                              <option value="GU">GU</option>
                                              <option value="MP">MP</option>
                                              <option value="PR">PR</option>
                                              <option value="VI">VI</option>
                                              <option value="AA">AA</option>
                                              <option value="AE">AE</option>
                                              <option value="AP">AP</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="phone-line">
                                      <input data-name="mobile" inputmode="numeric" placeholder="Mobile"
                                        class="form-control bottom-field phone-mask abandoned-cart-trigger" type="text"
                                        name="conduit[mobile_number]" id="conduit_mobile_number">
                                    </div>
                                  </div>
                                  <div class="help-text personal pac business sms-disclaimer">
                                    <p><span style="font-size: 10.6667px;"><span
                                          style="font-family: arial, helvetica, sans-serif; color: #000000;">By
                                          providing your phone number, you are consenting to receive calls and recurring
                                          SMS/MMS messages, including autodialed and automated calls and texts, to that
                                          number from each of the participating committees in Trump National Committee
                                          JFC Inc. (“TNC”), a joint fundraising committee of Donald J. Trump for
                                          President 2024, Inc. (“DJTFP”), the principal campaign committee of Donald J.
                                          Trump, and the Republican National Committee (“RNC”). Msg &amp; data rates may
                                          apply. Terms &amp; conditions/privacy policy apply.</span> </span><span
                                        style="font-size: 10.6667px; color: #ff0000; font-family: arial, helvetica, sans-serif;"><strong><a
                                            href="https://txtterms.co/88022-2/" style="color: #ff0000;"
                                            rel="nofollow">txtterms.co/88022-2</a></strong></span></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="landing-page-details landing-page-employment-details">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="employment-details row" id="employment-details">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="help-text">
                                            Campaign finance law requires us to collect your employment information.
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="auto-fill">
                                            <label class="btn btn-employment" data-toggle="autofill"
                                              data-parent="#employment-details"
                                              data-target="input[type=text], input[type=number], input[type=textarea], select"
                                              data-value="retired" for="conduit_not_employed"><input
                                                name="conduit[not_employed]" type="hidden" value="0"><input value="1"
                                                type="checkbox" name="conduit[not_employed]" id="conduit_not_employed">
                                              I'm retired.
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="field-group employment-form">
                                            <div class="d-flex flex-row">
                                              <div class="employer flex-fill">
                                                <input placeholder="Employer*" class="form-control full-field"
                                                  required="required" data-name="employer_name" type="text" value
                                                  name="conduit[employer_name]" id="conduit_employer_name">
                                              </div>
                                              <div class="occupation float-label-right flex-fill">
                                                <input placeholder="Occupation*" class="form-control full-field divider"
                                                  required="required" data-name="occupation" type="text" value
                                                  name="conduit[occupation]" id="conduit_occupation">
                                              </div>
                                            </div>
                                            <div class="address-zip d-flex flex-row">
                                            </div>
                                            <div class="city-state d-flex flex-row">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="landing-page-details landing-page-payment-details">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="help-text">
                                    Enter your payment details:
                                  </div>
                                  <div class="field-group payment-details">
                                    <div class="credit-card form-control full-field">
                                      <div id="card-element"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <input data-name="bundler_id" type="hidden" name="conduit[bundler_id]"
                              id="conduit_bundler_id">
                            <div class="landing-page-details landing-page-password-details">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="collapse" id="about-your-account">
                                    <div class="row">
                                      <div class="about-your-account-logo-col">
                                        <div class="about-your-account-logo-wrapper">
                                          <img class="about-your-account-logo" title="WinRed"
                                            src="assets/win-red-mark-small.png">
                                        </div>
                                      </div>
                                      <div class="col">
                                        <div class="about-your-account-text-wrapper">
                                          <div class="help-text">
                                            <strong>
                                              Create an Account
                                            </strong>
                                            <button aria-label="Close" class="close about-your-account-close"
                                              data-target="#about-your-account" data-toggle="collapse" type="button">
                                              <span aria-hidden="true">×</span>
                                            </button>
                                            <br>Save your info to make paying easier.<br>View your donation
                                            history.<br>It's free and secure.
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="help-text">
                                    Enter a password to create <a data-toggle="collapse"
                                      data-target="#about-your-account" href="#">an account</a> (optional):
                                  </div>
                                  <div class="field-group password-details">
                                    <input placeholder="Set Password (Min. 8 characters)"
                                      class="form-control full-field" type="password" name="conduit[password]"
                                      id="conduit_password">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="landing-page-details landing-page-submit-button">
                              <div class="row">
                                <div class="col-md-12">
                                  <input type="submit" name="commit" value="Donate" class="btn btn-submit"
                                    id="donate-btn" data-disable-with="Donate">
                                </div>
                              </div>
                            </div>
                            <div class="landing-page-legal">
                              By clicking "Donate" I accept WinRed's <a target="_blank"
                                href="https://winred.com/terms/donor-terms/">terms of use</a> and <a target="_blank"
                                href="https://winred.com/privacy">privacy policy</a>.
                            </div>
                            <div class="rv-fs-14 rv-mt-15 rv-tac d-none welcome-donor-reset-box">
                              <a class="welcome-donor-reset" href="#" onclick="App.resetForm();">Reset form</a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane" id="login" role="tabpanel">
                      <div class="row login-details">
                        <div class="col-md-12">
                          <form data-toggle="validate" data-name="user-login" action="https://app.revv.co/api/v3/login"
                            accept-charset="UTF-8" method="post">
                            <input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token"
                              value="xoFZmTZ903NnB4HQUA51SCkTlpdl1syN3Px/lTiU6WlgiGBGH80L8V//0++MnO7VaFps91N0I/0PZ2S+FIwz8A=="><input
                              value="https://trumpjdvance2024.org/?_raclid=0d8b9c0e-c06f-41e5-8204-0cebc773af8e&amp;utm_campaign=20240724_tnc_c0000-v113_truth_static_lp&amp;utm_content=donate&amp;utm_medium=ads&amp;utm_source=truth_lp_open&amp;utm_term=djt&amp;exitintent=true"
                              type="hidden" name="user[source_url]" id="user_source_url">
                            <div id="error_explanation">
                              <ul class="rv-error-text"></ul>
                            </div>
                            <div class="help-text">Log into your account by entering your email and password:</div>
                            <div class="field-group login-form">
                              <input value="true" type="hidden" name="user[redirect]" id="user_redirect">
                              <div class="email"><input placeholder="Email*" class="form-control top-field"
                                  required="required" id="user_login_email" type="email" name="user[email]"></div>
                              <div class="password"><input placeholder="Password" class="form-control bottom-field"
                                  required="required" type="password" name="user[password]" id="user_password"></div>
                            </div>
                            <div class="btn-forgot-password">
                              <a data-toggle="wizard" data-target="#forgot-password" class href>Forgot your
                                password?</a>
                            </div>
                            <input type="submit" name="commit" value="Login" class="btn btn-submit btn-login"
                              data-disable-with="Login">
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="forgot-password" role="tabpanel">
                      <div class="row login-details">
                        <div class="col-md-12">
                          <form data-toggle="validate" action="https://trumpjdvance2024.org/users/password"
                            accept-charset="UTF-8" method="post">
                            <input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token"
                              value="3JKE876DVjwtYHD4fHDKi9ug56I0AZ4Mnk32LGYdeDBt5DCrySW5AWdrt+DsDr0PolHXDKc+sE9GhwM4lyhYcA=="><input
                              type="hidden" name="win_red_request" id="win_red_request" value="true">
                            <div class="help-text">Enter your email address to receive reset password instructions:
                            </div>
                            <div class="field-group login-form">
                              <div class="email"><input placeholder="Email*" class="form-control full-field"
                                  required="required" type="email" name="user[email]" id="user_email"></div>
                            </div>
                            <input type="submit" name="commit" value="Reset password" class="btn btn-submit"
                              data-disable-with="Reset password">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="landing-page-form-footer">
                  <div class="footer-total">
                    <div class="row">
                      <div class="col">
                        <div class="donation-amount-label"></div>
                        <a data-toggle="wizard" data-target="#main-form #donation" class="back-button" href>Back</a>
                      </div>
                      <div class="col rv-tar">
                        <span class="donation-amount-value">
                        </span>
                        <span class="donation-intervals first-interval">
                          now
                        </span>
                        <div class="additional-recurring-total donation-intervals rv-tar" style="display: none">
                          +
                          <span class="donation-amount-value"></span>
                          <span class="second-interval"></span>
                        </div>
                        <div class="money-bomb-total donation-intervals rv-tar" style="display: none"></div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-login">
                    Donated before using an account?
                    <a data-toggle="wizard" data-target="#login" class href>Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="landing-page-footer">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <div class="long-disclaimer">
                  <div class="global">
                    <p class="xmsonormal"
                      style="     color: #a1a4a8; font-family: 'helvetica neue', Helvetica, Arial, 'lucida grande', sans-serif; font-size: 15px; background-color: #f9fafb; text-align: center;">
                      <span style="   color: #ff0000;"><a href="https://www.donaldjtrump.com/join" rel="nofollow"
                          style="   background-color: transparent; color: #ff0000;   "><span
                            style="   font-size: 10pt;"><span>Interested in volunteering? Click here to sign up
                              today.</span></span></a></span></p>
                    <p class="xmsonormal"
                      style="     color: #a1a4a8; font-family: 'helvetica neue', Helvetica, Arial, 'lucida grande', sans-serif; font-size: 15px; background-color: #f9fafb; text-align: center;">
                      <span style="   color: #ff0000;"><a
                          href="https://secure.winred.com/save-america-joint-fundraising-committee/storefront/"
                          rel="nofollow" style="   background-color: transparent; color: #ff0000;   "><span
                            style="   font-size: 10pt;"><span>Don't forget to visit the Official Trump Store by clicking
                              here to get the latest MAGA gear! </span></span></a></span></p>
                    <p class="xmsonormal"
                      style="     color: #a1a4a8; font-family: 'helvetica neue', Helvetica, Arial, 'lucida grande', sans-serif; font-size: 15px; background-color: #f9fafb; text-align: center;">
                      <span style="   color: #ff0000;"><a href="https://swampthevoteusa.com/" rel="nofollow"
                          style="   background-color: transparent; color: #ff0000;   "><span
                            style="   font-size: 10pt;"><span>Do you have a plan to vote? Check your voter registration
                              status, request a ballot, and pledge to vote by clicking HERE!</span></span></a></span>
                    </p>
                    <p style="text-align: center;"><span
                        style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><span></span></span></p>
                    <p class="xmsonormal"
                      style="     color: #a1a4a8; font-family: 'helvetica neue', Helvetica, Arial, 'lucida grande', sans-serif; font-size: 15px; background-color: #f9fafb; text-align: center;">
                      <span style="   color: #ff0000;"><a
                          href="https://cdn.donaldjtrump.com/djtweb24/general/TNC_Contributor_Form.pdf" rel="nofollow"
                          style="   background-color: transparent; color: #ff0000;   "><span
                            style="   font-size: 10pt;"><span>Want to donate by mail? Click here to print out a donation
                              form that you can send to our address.</span></span></a></span></p>
                    <p style="text-align: center;"><span style="font-size: 13.3333px;"><span style="color: #000000;">By
                          providing your phone number, you are consenting to receive calls and recurring SMS/MMS
                          messages, </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">including autodialed and automated calls and texts, to that number
                          from each of the participating </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">committees in Trump National Committee JFC, Inc. (“TNC”), a joint
                          fundraising committee composed of </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">and authorized by Donald J. Trump for President 2024, Inc. (“DJTFP”),
                          the principal campaign </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">committee of Donald J. Trump, and the Republican National Committee
                          (“RNC”). Msg &amp; data rates may </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">apply. Terms &amp; conditions/privacy policy apply. </span><span
                          style="color: #ff0000;"><a href="https://txtterms.co/88022-2/" style="color: #ff0000;"
                            rel="nofollow">txtterms.co/88022-2</a></span></span></p>
                    <p style="text-align: center;"><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">Contributions or gifts to TNC are not tax deductible. All
                          contributions are subject to the limits and </span></span><span
                        style="font-size: 13.3333px;"><span style="color: #000000;">prohibitions of the Federal Election
                          Campaign Act. Contributions from corporations, foreign nationals </span></span><span
                        style="font-size: 13.3333px;"><span style="color: #000000;">(i.e., without “green cards”),
                          federal government contractors, and other federally impermissible sources </span></span><span
                        style="font-size: 13.3333px;"><span style="color: #000000;">are strictly prohibited.
                          Contributions made in the name of, or refunded by, any other person are
                          unlawful.</span></span></p>
                    <p style="text-align: center;"><span style="font-size: 13.3333px;"><span style="color: #000000;">By
                          contributing you understand and acknowledge that the recipient committees may use your
                          contributed </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">funds for any reason, as determined in their sole discretion,
                          consistent with their obligations under federal </span></span><span
                        style="font-size: 13.3333px;"><span style="color: #000000;">election law. No statement contained
                          in any solicitation should be reasonably understood or construed as </span></span><span
                        style="font-size: 13.3333px;"><span style="color: #000000;">a promise, earmark, or other
                          designation to make any specific use of funds you contribute.</span></span></p>
                    <p style="text-align: center;"><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">Contributions to TNC are subject to federal contribution limits and
                          source prohibitions. Contributions </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">from corporations, foreign nationals (i.e., without “green cards”),
                          federal government contractors, and </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">other federally impermissible sources are prohibited. Contributions
                          made in the name of, or refunded by, </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">any other person are prohibited by law.</span></span></p>
                    <p style="text-align: center;"><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">Contributions to TNC from individuals (multicandidate PACs) will be
                          allocated according to the </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">following formula:</span></span></p>
                    <p style="text-align: center;"><span style="font-size: 13.3333px;"><span style="color: #000000;">1.
                          90% to DJTFP, which will designate the funds first to its general election account and then to
                        </span></span><span style="font-size: 13.3333px;"><span style="color: #000000;">its recount
                          account, up to a maximum of $3,300 ($5,000) per election; and</span></span></p>
                    <p style="text-align: center;"><span style="font-size: 13.3333px;"><span style="color: #000000;">2.
                          10% to the RNC, up to a maximum of $413,000 ($150,000) per year.</span></span></p>
                    <p style="text-align: center;"><span style="font-size: 13.3333px;"><span style="color: #000000;">Any
                          contribution exceeding the legal amount that may be contributed to any committee will be
                          distributed </span></span><span style="font-size: 13.3333px;"><span style="color: #000000;">to
                          the remaining participating committee to the extent permitted by federal law and according to
                          the </span></span><span style="font-size: 13.3333px;"><span style="color: #000000;">allocation
                          method set forth above. Any contribution that would cause a contributor to exceed any
                        </span></span><span style="font-size: 13.3333px;"><span style="color: #000000;">applicable
                          federal contribution limit or otherwise not be permissible under FECA and FEC regulations
                        </span></span><span style="font-size: 13.3333px;"><span style="color: #000000;">will be refunded
                          to the contributor. Contributors may specify a different allocation than the one set forth
                        </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">above.</span></span></p>
                    <p style="text-align: center;"><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">Federal law requires us to use our best efforts to collect and report
                          the name, mailing address, occupation, </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">and name of employer of each individual whose aggregate contributions
                          exceed $200 in an election cycle </span></span><span style="font-size: 13.3333px;"><span
                          style="color: #000000;">or calendar year, as applicable.</span></span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="long-disclaimer"></div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="short-disclaimer">
                  <p style="text-align: center;"><span
                      style="color: #1d1c1d; font-family: Slack-Lato, Slack-Fractions, appleLogo, sans-serif; font-size: 15px; text-align: left;">Paid
                      for by Trump National Committee JFC Inc., a joint fundraising committee composed of and authorized
                      by Donald J. Trump for President 2024, Inc. and the Republican National Committee.</span></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="long-disclaimer">
                  <p style="text-align: center;"><strong>Contributions to WinRed are not deductible as charitable
                      donations for federal income tax purposes.</strong></p>
                  <p><strong>Contribution rules</strong></p>
                  <ul>
                    <li>I am a U.S. citizen or lawfully admitted permanent resident (i.e., green card holder).</li>
                    <li>This contribution is made from my own funds, and funds are not being provided to me by another
                      person or entity for the purpose of making this contribution.</li>
                    <li>I am making this contribution with my own personal credit card and not with a corporate or
                      business credit card or a card issued to another person.</li>
                    <li>I am at least eighteen years old. I am not, nor am I making this contribution on behalf of, a
                      corporation, labor organization, national bank, foreign national without a green card, a federal
                      contractor, or any other federally impermissible source.</li>
                  </ul>
                  <div id="nominee-fund-disclaimer">
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="short-disclaimer">
                  <p style="text-align: center;"><strong style="text-align: center;">Paid for by WinRed. Not authorized
                      by any candidate or candidate’s committee. WinRed.com</strong></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="d-flex flex-row justify-content-center">
                  <div class="powered-by-win-red">
                    <a target="_blank" title="WinRed is Conservatives' #1 Fundraising Platform"
                      alt="WinRed is Conservatives' #1 Fundraising Platform" href="https://winred.com/">Powered by
                      <img title="WinRed fundraising platform logo" alt="WinRed fundraising platform logo"
                        class="powered-by-win-red-logo"
                        src="https://trumpjdvance2024.org/assets/win-red-full-red.svg">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="d-flex flex-row justify-content-center">
                  <div class="disclaimer-terms">
                    <a class target="_blank" href="https://winred.com/terms/donor-terms/">Terms of Use</a>
                    <a class target="_blank" href="https://winred.com/privacy">Privacy Policy</a>
                    <a class target="_blank" href="https://winred.com/about-our-ads/">About Our Ads</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row rv-mt-10">
              <div class="col-12">
                <div class="d-flex flex-row justify-content-center">
                  <div class="disclaimer-terms">
                    <a class target="_blank" href="https://winred.com/support/">Questions about your charge? Go to our
                      Support Center</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'8ae97a511ed65352',t:'MTcyMjg4OTEyMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='scripts/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"8ae97a511ed65352","version":"2024.7.0","serverTiming":{"name":{"cfL4":true}},"token":"7b4337af52254273ac9f7352314779f6","b":1}'
    crossorigin="anonymous"></script>
</body>

</html>
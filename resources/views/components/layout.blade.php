<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    {{--SEO--}}
    <meta name="title" content="Hypedeck Digital - Leading Digital Marketing Agency">
    <meta name="description" content="Hypedeck Digital is a top digital marketing agency offering bespoke services such as social media management, lead generation, and e-commerce campaigns to boost your brand's visibility and drive conversions.">
    <meta name="keywords" content="digital marketing, social media management, lead generation, e-commerce marketing, content creation, online marketing, digital campaigns, marketing strategies, SEO, paid media ads, audience targeting">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Hypedeck Digital">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Hypedeck Digital - Empowering Brands through Digital Marketing">
    <meta property="og:description" content="Boost your business with Hypedeck Digital's expert digital marketing services. From content creation to lead generation, we help brands succeed.">
    <meta property="og:url" content="https://hypedeckdigital.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://hypedeckdigital.com/assets/preview-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hypedeck Digital - Leading Digital Marketing Agency">
    <meta name="twitter:description" content="Grow your business with our tailored digital marketing solutions, from social media management to e-commerce campaigns.">
    <meta name="twitter:image" content="https://hypedeckdigital.com/assets/preview-image.png">

    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resource/js/app.js'])
</head>
<body>
<header>
    <x-header></x-header>
</header>

<main>
    <x-webcontent/>
    <x-footer></x-footer>
</main>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <x-header></x-header>
    </header>

    <main class="overflow-hidden">
        <x-main.webcontent />
        <x-main.oursolution />
        <x-main.satisfiedcustomers />
        <x-main.fivestep />
        <x-main.cusreview />
        <x-main.pricing />
        <x-main.faq />
        <x-main.aboutus />
        <x-main.toolsandteam />
        <x-main.successstories />
        <x-main.getintouch />
        <x-main.footer />
    </main>

    <!-- JS Scripts -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="resources/js/app.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init({
                duration: 700
            });
            openFirstFAQ();
        });

        function openAnsSection(val) {
            var allParas = document.querySelectorAll('[id^="para"]');
            var allSvgs = document.querySelectorAll('[id^="path"]');
            var allFaqs = document.querySelectorAll('[id^="faq"]');

            allParas.forEach((para, index) => {
                if (para.id !== "para" + val) {
                    para.classList.add("hidden");
                    para.classList.remove("block");
                    allSvgs[index].classList.add("block");
                    allSvgs[index].classList.remove("hidden");
                    allFaqs[index].classList.add("bg-white", "text-[#012F6A]");
                    allFaqs[index].classList.remove("bg-[#1764DF]", "text-white");
                }
            });

            var p = document.getElementById("para" + val);
            var svg = document.getElementById("path" + val);
            var faq = document.getElementById("faq" + val);

            if (p.classList.contains("hidden")) {
                p.classList.remove("hidden");
                p.classList.add("block");
                svg.classList.remove("block");
                svg.classList.add("hidden");
                faq.classList.remove("bg-white", "text-[#012F6A]");
                faq.classList.add("bg-[#1764DF]", "text-white");
            }
        }

        function openFirstFAQ() {
            openAnsSection(1);
        }
    </script>
</body>

</html>

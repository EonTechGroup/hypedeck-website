<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resource/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <x-header></x-header>
    </header>

    <main>
        <x-webcontent />
        <x-footer></x-footer>
    </main>
</body>
<script>
    function openAnsSection(val) {
        // Close all other open FAQs
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

        // Toggle the clicked FAQ
        var p = document.getElementById("para" + val);
        var svg = document.getElementById("path" + val);
        var faq = document.getElementById("faq" + val);

        if (p.classList.contains("hidden")) {
            // Show answer section and apply active styles
            p.classList.remove("hidden");
            p.classList.add("block");
            svg.classList.remove("block");
            svg.classList.add("hidden");
            faq.classList.remove("bg-white", "text-[#012F6A]");
            faq.classList.add("bg-[#1764DF]", "text-white");
        }
    }

    function openFirstFAQ() {
        openAnsSection(1); // Assuming the first FAQ has val=1
    }

    // Call openFirstFAQ when the page loads
    window.onload = openFirstFAQ;
</script>

</html>

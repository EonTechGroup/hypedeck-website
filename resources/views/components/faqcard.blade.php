@props([
    'paragraph' => 'Important metrics include website traffic, conversion rates, click through
        rates (CTR), engagement rates, return on investment (ROI), and
        customer acquisition cost (CAC).',
    'topic' => 'What are the key metrics to measure in digital marketing?',
    'icon' => 'images/faq-icon.webp',
    'iconHover' => 'images/faq-hover.webp',
])

<section
    class="flex flex-col items-start p-7 space-y-4 h-[13rem] bg-white text-[#012F6A] rounded-3xl shadow-lg hover:bg-[#1764DF] hover:text-white hover:shadow-[#90bafd] relative group">
    <div class="flex items-center gap-3">
        <div
            class="w-14 h-14 flex shadow justify-center items-center rounded-full bg-[#EFF4FF] group-hover:bg-[#2E79F2] relative">
            <div
                class="w-8 h-8 bg-[url(../../public/images/faq-icon.webp)] bg-cover bg-center group-hover:bg-[url(../../public/images/faq-hover.webp)]">
            </div>
        </div>
        <h1 class="text-[1.3rem] font-bold text-left w-2/3">{{ $topic }}</h1>
    </div>
    <p class="text-pretty text-[1.1rem] absolute top-[5.5rem] w-11/12">{{ $paragraph }}</p>
</section>

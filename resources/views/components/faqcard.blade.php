@props([
    'paragraph' => 'Important metrics include website traffic, conversion rates, click through
        rates (CTR), engagement rates, return on investment (ROI), and
        customer acquisition cost (CAC).',
    'topic' => 'What are the key metrics to measure in digital marketing?',
    'icon' => 'images/faq-icon.webp',
    'iconHover' => 'images/faq-hover.webp',
])

<section
    class="flex flex-col items-start p-4 sm:p-6 md:p-7 space-y-4 h-[14.5rem] sm:h-[13rem] bg-white text-[#012F6A] rounded-2xl sm:rounded-3xl shadow-lg hover:bg-[#1764DF] hover:text-white hover:shadow-[#90bafd] relative group">
    <div class="flex items-center gap-3">
        <div
            class="w-12 h-12 sm:w-13 sm:h-13 md:w-14 md:h-14 flex shadow justify-center items-center rounded-full bg-[#EFF4FF] group-hover:bg-[#2E79F2] relative">
            <div
                class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 bg-[url(../../public/images/faq-icon.webp)] bg-cover bg-center group-hover:bg-[url(../../public/images/faq-hover.webp)]">
            </div>
        </div>
        <h1
            class="text-[1rem] sm:text-[1.2rem] md:text-[1.3rem] lg:text-[1rem] xl:text-[1.3rem] font-bold text-pretty sm:text-left flex-1 flex sm:flex-none w-2/3">
            {{ $topic }}</h1>
    </div>
    <p
        class="text-pretty text-[0.95rem] sm:text-[1.1rem] lg:text-[1rem] xl:text-[1.1rem] absolute top-[5rem] md:top-[5.5rem] w-11/12">
        {{ $paragraph }}</p>
</section>

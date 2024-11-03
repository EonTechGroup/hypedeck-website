@props([
    'paragraph' => 'Attracting and engaging potential
        customers to gather contact
        information and convert them into
        sales opportunities.',
    'topic' => 'Social Media Management',
    'aos',
    'aosDelay' => "",
])

<div
    class="solutionCard w-11/12 h-[18rem] sm:h-[16.5rem] py-8 px-6 md:px-5 space-y-6 sm:space-y-3 md:space-y-4 lg:space-y-6 lg:py-8 lg:px-6 sm:w-8/12 md:w-[31%] md:h-[18.5rem] lg:w-[18rem] lg:h-[21rem] bg-white xl:w-[22rem] xl:h-[24rem] xl:py-10 xl:px-8 flex flex-col xl:space-y-8 rounded-3xl shadow-lg hover:bg-[#1764DF] hover:shadow-[#90bafd] group hover:scale-105 duration-300" data-aos="{{ $aos }}" data-aos-delay="{{ $aosDelay }}">
    <div class="flex justify-between">
        <div
            class="w-16 h-16 sm:w-[4.5rem] sm:h-[4.5rem] md:w-14 md:h-14 lg:w-16 lg:h-16 xl:w-20 xl:h-20 flex justify-center items-center rounded-full bg-[#EFF4FF] group-hover:bg-[#2E79F2] relative">
            <div
                class="w-6 h-6 sm:w-8 sm:h-8 md:w-6 md:h-6 lg:w-8 lg:h-8 xl:w-10 xl:h-10 bg-[url(../../public/images/solution.webp)] bg-cover bg-center group-hover:bg-[url(../../public/images/solutionHover.webp)]">
            </div>
        </div>
        <div
            class="w-8 h-8 sm:w-9 sm:h-9 md:w-8 md:h-8 xl:w-10 xl:h-10 flex justify-center items-center rounded-full invisible cursor-pointer bg-[#EFF4FF] group-hover:bg-[#2E79F2] group-hover:visible relative bottom-4 left-2 lg:bottom-3 lg:left-1">
            <img class="w-6 h-6 sm:w-7 sm:h-7 md:w-6 md:h-6 lg:w-5 lg:h-5 xl:w-6 xl:h-6" src="{{ asset('images/arrow.webp') }}" />
        </div>
    </div>
    <h1 class="text-[1.13rem] sm:text-[1.4rem] md:text-[1.2rem] lg:text-[1.2rem] xl:text-2xl font-semibold text-left text-[#012F6A] group-hover:text-white">{{ $topic }}</h1>
    <p class="text-pretty text-[1rem] sm:text-[1.15rem] md:text-[0.9rem] lg:text-[1.03rem] xl:text-[1.2rem] text-[#012F6A] group-hover:text-white">{{ $paragraph }}</p>
</div>

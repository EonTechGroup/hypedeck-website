@props(['paragraph' => '', 'topic' => 'Social Media Management', 'price' => '18,000', 'list' => [], 'aos', 'aosDuration' => ""])

<div
    class="w-[95%] sm:w-[80%] lg:h-[36rem] xl:w-[27%] h-[29rem] sm:h-[28rem] xl:h-[38rem] rounded-[1.5rem] md:rounded-[1.2rem] xl:rounded-[2rem] shadow-2xl lg:shadow-xl relative hover:lg:-translate-y-5 transition duration-1000 ease-in-out bg-white p-5 md:p-4 lg:p-6 xl:p-9 flex flex-col items-start text-[#012F6A] space-y-3 lg:space-y-8" data-aos="{{ $aos }}" data-aos-easing="ease-in-sine" data-aos-duration="{{ $aosDuration }}">
    <h1 class="text-[1.1rem] sm:text-[1.24rem] md:text-[1rem] lg:text-[1.2rem] xl:text-2xl font-bold">
        {{ $topic }}</h1>
    @if (!empty($paragraph))
        <p class="text-pretty font-semibold text-[0.95rem] md:text-[0.85rem] lg:text-[1rem]">{{ $paragraph }}</p>
    @endif

    <div class="flex flex-col gap-1 lg:gap-2 w-full font-semibold {{ empty($paragraph) ? 'mt-8' : 'absolute top-[10rem] lg:top-[11rem] lg:left-9 left-5' }}">
        @foreach ($list as $item)
            <div class="flex items-start gap-2">
                <img class="w-2 lg:w-3 xl:w-4 h-2 lg:h-3 xl:h-4" src="{{ asset('images/correct-icon.webp') }}" />
                <span class="relative bottom-1 xl:bottom-1 text-[0.85rem] md:text-[0.75rem] lg:text-[0.9rem] xl:text-[1rem] w-[87%] sm:w-10/12 lg:w-[82.4%] xl:w-11/12">{{ $item }}</span>
            </div>
        @endforeach
    </div>

    <h1 class="text-2xl xl:text-3xl font-bold absolute left-5 lg:left-6 xl:left-9 bottom-3 lg:bottom-5 xl:bottom-12 text-[#1764DF]">{{ $price }} LKR <span
            class="text-[0.8rem] xl:text-[0.9rem] font-semibold text-[#012F6A]">upwards</span></h1>
</div>

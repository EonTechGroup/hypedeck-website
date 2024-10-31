@props(['paragraph' => '', 'topic' => 'Social Media Management', 'price' => '18,000', 'list' => []])

<div
    class="w-[27%] h-[38rem] rounded-[2rem] shadow-xl relative hover:bottom-5 bg-white p-9 flex flex-col items-start text-[#012F6A] space-y-8">
    <h1 class="text-[1.13rem] sm:text-[1.4rem] md:text-[1.2rem] lg:text-[1.2rem] xl:text-2xl font-bold">
        {{ $topic }}</h1>
    @if (!empty($paragraph))
        <p class="text-pretty font-semibold">{{ $paragraph }}</p>
    @endif

    <div class="flex flex-col space-y-2 w-full font-semibold {{ empty($paragraph) ? 'mt-8' : 'absolute top-[11rem] left-9' }}">
        @foreach ($list as $item)
            <div class="flex items-start space-x-2">
                <img class="w-4 h-4" src="{{ asset('images/correct-icon.webp') }}" />
                <span class="relative bottom-1">{{ $item }}</span>
            </div>
        @endforeach
    </div>

    <h1 class="text-3xl font-bold absolute left-9 bottom-12 text-[#1764DF]">{{ $price }} LKR <span
            class="text-[0.9rem] font-semibold text-[#012F6A]">upwards</span></h1>
</div>

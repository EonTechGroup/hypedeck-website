@props([
    'paragraph' => 'Without Socialy, we would not be able to support
                    our customers in real-time with the efficiency that
                    we do now. The integration with our app makes
                    the process seamless for our customers.',
    'name' => 'Alina Joo',
    'proPic' => 'card-pro-pic',
])

<div class=" h-full mx-5 md:mx-2 lg:mx-2 xl:mx-5 my-9">
    <div class="h-72 w-full p-3 shadow-lg shadow-slate-300 rounded-2xl flex items-center flex-col bg-white">
        <img class="rounded-full h-[5.5rem] md:h-[5rem] xl:h-[5.5rem] w-[5.5rem] md:w-[5rem] xl:w-[5.5rem] relative bottom-12 shadow-black"
            src="{{ asset('images/' . $proPic . '.webp') }}" />

        <div class="relative bottom-5 space-y-4 md:space-y-2 xl:space-y-4 flex items-center flex-col">
            <span class=" text-pretty text-[1.1rem] font-bold text-[#012F6A]">{{ $name }}</span>
            <p
                class="text-[#012F6A] text-[0.83rem] md:text-[0.8rem] xl:text-[0.85rem] lg:text-[0.8rem] text-center w-[94%] leading-6">
                {{ $paragraph }}
            </p>
            <img class="w-20" src="{{ asset('images/card-stars.png') }}" />
        </div>

    </div>
</div>

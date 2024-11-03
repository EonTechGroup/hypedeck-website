@props([
    'paragraph' => 'Without Socialy, we would not be able to support
                    our customers in real-time with the efficiency that
                    we do now. The integration with our app makes
                    the process seamless for our customers.',
    'name' => 'Alina Joo',
    'proPic' => 'proPic',
])

<div class="mx-1 md:mx-2 my-9">
    <div
        class="h-[27rem] lg:h-[33rem] xl:h-[27rem] w-full px-3 shadow-lg shadow-slate-300 rounded-xl md:rounded-2xl flex items-center flex-col bg-white relative">
        <img class="rounded-full h-[4.5rem] xl:h-[5.5rem] shadow-black bg-center bg-cover bg-no-repeat relative bottom-6"
                src="{{ asset('images/reviews/' . $proPic . '.webp') }}" />
        <div class="gap-2 md:gap-2 xl:gap-4 flex items-center flex-col">
            <span class=" text-pretty text-[1rem] sm:text-[1.1rem] font-bold text-[#012F6A]">{{ $name }}</span>
            <p
                class="text-[#012F6A] text-[0.8rem] md:text-[0.8rem] xl:text-[0.85rem] lg:text-[0.8rem] text-center w-full  md:leading-6">
                {!! $paragraph !!}
            </p>
            <img class="w-[4.3rem] sm:w-[6.5rem] absolute bottom-5" src="{{ asset('images/card-stars.webp') }}" />
        </div>

    </div>
</div>

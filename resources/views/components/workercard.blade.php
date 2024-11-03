@props([
    'position' => 'Director',
    'image' => 'proPic',
    'name' => 'Kavindu Karunarathna',
])

<section
    class="workerCard flex flex-col items-center h-[11rem] sm:h-[13rem] md:h-[15rem] md:w-[14rem] lg:h-[14rem] xl:h-[13rem] xl:w-[12rem] relative shadow-lg rounded-[0.65rem] lg:rounded-xl hover:scale-105 hover:shadow-2xl duration-500 overflow-hidden">
    <div class="w-full h-full bg-cover bg-center relative flex flex-col justify-end"
        style="background-image: url('{{ asset('images/team/' . $image . '.webp') }}');">
        <div class="w-full flex flex-col items-center bg-[#1764DF] text-white leading-[0.9rem] py-1">
            <h1 class="font-bold text-[0.75rem]">{{ $name }}</h1>
            <p class="text-[0.7rem]">( {{ $position }} )</p>
        </div>
    </div>

</section>

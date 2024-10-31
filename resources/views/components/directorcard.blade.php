@props([
    'position' => 'Director',
    'img',
    'name' => 'Kavindu Karunarathna',
])

<section class="flex flex-col items-center w-[14.5rem] h-[14.5rem] relative shadow-lg rounded-xl hover:scale-105 hover:shadow-2xl duration-500 overflow-hidden">
    <div class="bg-[url(../../public/{{ $img }})] bg-cover bg-center w-full h-[80%]"></div>
    <div class="w-full flex flex-col flex-1 items-center bg-[#1764DF] text-white justify-center leading-4">
        <h1 class="font-bold text-[0.9rem] m-0">{{ $name }}</h1>
        <p class="text-[0.7rem] m-0">( {{ $position }} )</p>
    </div>
</section>
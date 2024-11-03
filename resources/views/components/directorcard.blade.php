<style>
    @media (min-width: 450px) and (max-width: 640px) {
    .directorCard {
        width: 13rem;
        height: 14rem;
    }
}
</style>

@props([
    'position' => 'Director',
    'image' => 'proPic',
    'name' => 'Kavindu Karunarathna',
])

<section
    class="flex flex-col items-center w-[14.5rem] h-[15rem] xl:w-[15.5rem] xl:h-[16rem] relative shadow-lg rounded-xl hover:scale-105 hover:shadow-2xl duration-500 overflow-hidden directorCard">
    <div class="w-full h-full bg-cover bg-center flex flex-col justify-end"
        style="background-image: url('{{ asset('images/team/' . $image . '.webp') }}');">
        <div class="w-full flex flex-col items-center bg-[#1764DF] text-white py-2 leading-4">
            <h1 class="font-bold text-[0.9rem] m-0">{{ $name }}</h1>
            <p class="text-[0.7rem] m-0">( {{ $position }} )</p>
        </div>
    </div>
</section>

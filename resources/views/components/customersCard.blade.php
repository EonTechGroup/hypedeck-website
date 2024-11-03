@props(['img' => 'eontech', 'bgSize' => 'bg-contain'])

<div class="flex justify-items-center">
    <div class="h-[10rem] w-[10rem] sm:h-[7rem] sm:w-[7rem] md:h-[7rem] md:w-[7rem] {{ $bgSize }} bg-center bg-no-repeat customerCard" style="background-image: url('{{ asset('images/clients/' . $img . '.webp') }}');">
    </div>
</div>

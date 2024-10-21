<section class="flex-1">
    <div class="relative">
        <div class="absolute inset-0 opacity-[0.5]"
            style="background: url('{{ asset('images/bgbody.webp') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        </div>

        <div class="relative py-5 md:py-24 flex flex-col items-center space-y-6 sm:space-y-24 mb-[1rem]">
            <span
                class="text-[1.35rem] md:text-4xl font-bold bg-gradient-to-r from-[#012F6A] from-40% to-[#1764DF] to-100% bg-clip-text text-transparent">
                It Was Great Experience
            </span>

            <div class="responsive w-[100%]">
                <x-feedbackcard name="Yuraj" />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
                <x-feedbackcard />
            </div>
        </div>

        <div class="relative py-5 md:py-24 flex flex-row justify-center">
            <div class="flex flex-col space-y-6 w-4/12">
                <span class="text-[1.8rem] md:text-4xl font-bold text-[#012F6A]">Trusted By 100+ Happy</span>
                <span
                    class="text-[1.8rem] md:text-4xl font-bold bg-gradient-to-r from-[#012F6A] from-40% to-[#1764DF] to-100% bg-clip-text text-transparent">Clients</span>
                <p class="w-10/12 text-[1rem] text-[#012F6A]">Our reputation for reliability and quality is affirmed by
                    the numerous satisfied customers who place their trust in us. Their ongoing support and positive
                    feedback are a testament to our commitment to excellence.</p>
            </div>
            <div class="w-6/12">
                <x-reviewcard />
            </div>
        </div>
    </div>
</section>

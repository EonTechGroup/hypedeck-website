<style>
    @media (min-width: 450px) and (max-width: 640px) {
    .teamGrid {
        grid-template-columns: repeat(3, 1fr);
    }
    .directorGrid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<section class="flex flex-col flex-1">
    <div
        class="flex flex-col items-center text-[#012F6A] relative pt-[22rem] sm:pt-[14rem] lg:pt-[16rem] pb-[5rem] lg:pb-[7rem] gap-8 lg:gap-12">
        <h1
            class="text-[1.35rem] sm:text-[2rem] md:text-3xl lg:text-4xl font-bold bg-gradient-to-r from-[#012F6A] from-40% to-[#1764DF] to-100% bg-clip-text text-transparent" data-aos="zoom-in">
            About us</h1>
        <p
            class="text-[1.1rem] lg:text-[1.3rem] font-semibold leading-[2rem] lg:leading-[2.1rem] lg:tracking-wide text-center w-11/12 lg:w-full" data-aos="fade-up">
            Founded by
            visionary Mr. Kavindu Karunarathna, our agency embarked on a journey three years ago, specializing,<br
                class="hidden lg:block">
            in social media management. Today, we offer over 10 bespoke services, having collaborated<br
                class="hidden lg:block">
            with 100+ brands globally. Our passion for innovation drives us to craft impactful<br
                class="hidden lg:block">
            digital narratives that redefine success.</p>
    </div>
    <div
        class="flex flex-col items-center bg-gradient-to-r from-[#012F6A] from-40% to-[#1764DF] to-100% relative px-3 lg:px-[3rem] xl:px-[6rem]">
        <div
            class="flex flex-col gap-6 lg:gap-2 lg:flex-row lg:justify-between items-center text-white relative bottom-[3rem] lg:bottom-[4rem] w-full mb-[6rem]">
            <p
                class="text-[1.1rem] lg:text-[1.5rem] xl:text-[2rem] font-semibold italic leading-[2.4rem] lg:leading-[2.8rem] tracking-wide text-pretty relative flex flex-col text-left sm:w-9/12 lg:w-fit" data-aos="fade-right">
                <img src="{{ asset('images/blue-quote.webp') }}" alt="aboutus"
                    class="h-[2.5rem] xl:h-[4rem] mb-4 self-start">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Having collaborated with 100+ <br
                    class="hidden lg:block">brands globally. Our
                passion for <br class="hidden lg:block">innovation drives us to
                craft <br class="hidden lg:block">impactful digital narratives <br class="hidden lg:block">that redefine
                success.
                <img src="{{ asset('images/white-quote.webp') }}" alt="aboutus"
                    class="h-[2.5rem] xl:h-[4rem] self-end">
            </p>
            <div class="bg-cover bg-center rounded-3xl w-full lg:w-[55%] h-[22rem] relative overflow-hidden"
                style="background-image: url('{{ asset('images/about-pic.webp') }}');" data-aos="fade-up">
                <div class="absolute w-full h-full opacity-[0.4] z-10 inset-0 bg-[#1764DF]"></div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:justify-between items-center w-full xl:ps-12 gap-16 lg:gap-0">
            <div
                class="text-white font-bold text-[3rem] xl:text-[4rem] flex flex-col lg:flex-row items-center gap-10 lg:gap-0" data-aos="zoom-in">
                <h1 class="leading-[3.5rem] lg:leading-[5rem] tracking-wide text-center lg:text-left">Meet Our<br>Team
                </h1>
                <img src="{{ asset('images/curvedArrow.webp') }}" alt="aboutus"
                    class="h-[5rem] lg:h-[7.5rem] xl:h-[10rem] relative lg:top-[4rem] lg:right-[3rem] rotate-90 lg:rotate-0">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 relative gap-5 sm:gap-6 md:gap-10 lg:gap-12 directorGrid" data-aos="fade-up" data-aos-easing="ease-in-sine">
                <x-directorcard name="Kavindu Karunarathna" position="Director" image="Kavindu" />
                <x-directorcard name="Ariyarathna" position="Director" image="Ariyarathna_Director" />
            </div>
        </div>
        <div
            class="grid grid-cols-2 w-full h-full sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-5 sm:gap-9 md:gap-12 lg:gap-16 xl:gap-7 relative top-[2rem] sm:top-[2rem] md:top-[3rem] lg:top-[6rem] teamGrid md:place-items-center" data-aos="fade-up" data-aos-easing="ease-in-sine">
            <x-workercard name="Gayantha" position="Junior Executive" image="Gayantha_Junior executive" />
            <x-workercard name="Thisal" position="Junior Executive" image="Thisal_Junior executive" />
            <x-workercard name="Kishor" position="Designer" image="Kishor_Designer" />
            <x-workercard name="Apeksha" position="Content Writer" image="Apeksha_Content writer" />
            <x-workercard name="Chamathya" position="Content Writing" image="Chamathya_Content writing" />
            <x-workercard name="Isurika" position="Proof-Reading" image="Isurika_Proofreading (2)" />
            <x-workercard name="Sampath" position="Senior Media Buyer" image="Sampath_Senior media buyer" />
            <x-workercard name="Manoj" position="Media Buyer" image="Manoj_media buyer" />
            <x-workercard name="Nadini" position="Operations" image="Nadini_ Operations" />
            <x-workercard name="Sajan" position="Finance" image="Sajan_Finance" />
            <x-workercard name="Avishka" position="Web Developer" image="Avishka_Web developer" />
            <x-workercard name="Kavindu Karunarathna" position="Director" image="Avishka_Web developer" />
        </div>
    </div>

</section>

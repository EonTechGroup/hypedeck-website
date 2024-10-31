<section class="flex flex-col flex-1">
    <div class="flex flex-col items-center text-[#012F6A] relative pt-[16rem] pb-[7rem] gap-y-12">
        <h1
            class="text-[1.35rem] sm:text-[2rem] md:text-3xl lg:text-4xl font-bold bg-gradient-to-r from-[#012F6A] from-40% to-[#1764DF] to-100% bg-clip-text text-transparent">
            About us</h1>
        <p class="text-[1.3rem] font-semibold leading-[2.1rem] tracking-wide text-center">Founded by
            visionary Mr. Kavindu Karunarathna, our agency embarked on a journey three years ago, specializing,<br>
            in social media management. Today, we offer over 10 bespoke services, having collaborated<br>
            with 100+ brands globally. Our passion for innovation drives us to craft impactful<br>
            digital narratives that redefine success.</p>
    </div>
    <div
        class="flex flex-col items-center bg-gradient-to-r from-[#012F6A] from-40% to-[#1764DF] to-100% relative px-[6rem]">
        <div class="flex justify-between items-center text-white relative bottom-[4rem] w-full mb-[6rem]">
            <p
                class="text-[2rem] font-semibold italic leading-[2.8rem] tracking-wide text-pretty relative flex flex-col text-left">
                <img src="{{ asset('images/blue-quote.webp') }}" alt="aboutus" class="h-[4rem] mb-4 self-start">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Having collaborated with 100+<br>brands globally. Our
                passion for<br>innovation drives us to
                craft<br>impactful digital narratives<br>that redefine success.
                <img src="{{ asset('images/white-quote.webp') }}" alt="aboutus" class="h-[4rem] self-end">
            </p>
            <div class="bg-[url(../../public/images/about-pic.webp)] bg-cover bg-center rounded-3xl w-[55%] h-[22rem]">
            </div>
        </div>
        <div class="flex justify-between items-center w-full ps-12 relative">
            <div class="text-white font-bold text-[4rem] flex items-center">
                <h1 class="leading-[5rem] tracking-wide">Meet Our<br>Team</h1>
                <img src="{{ asset('images/curvedArrow.webp') }}" alt="aboutus"
                    class="h-[10rem] relative top-[4rem] right-[3rem]">
            </div>
            <div class="flex items-center relative gap-12">
                <x-directorcard name="Kavindu Karunarathna" position="Director" img="images/proPic.webp" />
                <x-directorcard name="Kavindu Karunarathna" position="Director" img="images/proPic.webp" />
            </div>
        </div>
        <div class="grid grid-cols-6 gap-5 w-full relative top-[6rem]">
            <x-workercard name="Kavindu Karunarathna" position="Director" img="images/proPic.webp" />
            <x-workercard name="Kavindu Karunarathna" position="Director" img="images/proPic.webp" />
            <x-workercard name="Kavindu Karunarathna" position="Director" img="images/proPic.webp" />
            <x-workercard name="Kavindu Karunarathna" position="Director" img="images/proPic.webp" />
            <x-workercard name="Kavindu Karunarathna" position="Director" img="images/proPic.webp" />
            <x-workercard name="Kavindu Karunarathna" position="Director" img="images/proPic.webp" />
        </div>
    </div>

</section>

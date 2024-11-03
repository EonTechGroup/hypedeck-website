<section class="h-[102vh]">
    <div class="relative sm:px-24 px-5"
        style="background: url('{{ asset('images/home-image.webp') }}'); background-repeat: no-repeat; height:100%; width: auto; background-size: cover; background-position: center">
        <div class="font-sans text-white pt-32 sm:block flex flex-col sm:text-left text-center ">
            <div class="font-sans font-normal xl:text-6xl lg:text-5xl sm:text-4xl text-2xl sm:pb-5 pb-3">
                Struggling to find
            </div>
            <div class="font-sans font-black xl:text-6xl lg:text-5xl sm:text-4xl text-2xl">
                Leads / E-Commerce Sales?
            </div>
            <div>
                <div class="font-sans font-medium xl:text-4xl lg:text-3xl sm:text-2xl text-xl sm:py-10 py-4">
                    We got you covered
                </div>
                <p class="font-sans font-normal xl:text-xl lg:text-lg sm:text-base text-sm">
                    With successfully completing 200+ Digital marketing campaigns <br>
                    we have tailored marketing strategies which suit your exact marketing need.. <br>
                    From social media management to web development
                    we provide 10+ <br> customized digital services.
                </p>
            </div>
            <div class="mt-14 flex flex-row flex-start justify-center sm:justify-start">
                <button
                    class="bg-[#1764DF] text-white xl:p-4 lg:p-2 p-1 rounded-full font-sans font-medium xl:text-xl lg:text-lg text-base xl:h-16 lg:h-14 h-12 xl:w-72 lg:w-64 w-56">Book
                    Free Consultation</button>
                <a class="xl:h-16 lg:h-14 h-12 xl:w-16 lg:w-14 w-12 bg-[#1764DF] flex justify-center items-center rounded-full ml-2.5"
                    href="">
                    <img class="lx:h-7 lg:h-6 h-5" src="{{ asset('images/next.webp') }}" alt="next-image">
                </a>
            </div>
        </div>
        <div class="absolute inset-x-0 2xl:bottom-10 xl:bottom-12 md:bottom-10 bottom-10 flex justify-center">
            <a class="sm:h-20 sm:w-20 h-16 w-16 bg-[#1764DF] flex justify-center items-center rounded-full border-[6px] border-white"
                href="#services">
                <img class="h-8 rotate-90" src="{{ asset('images/next.webp') }}" alt="next-image">
            </a>
        </div>
    </div>
</section>

<section id="services" class="lg:h-[180px] sm:h-[140px] h-[100px] w-full bg-white mt-10">
    <div class="flex justify-center flex-wrap">
        <div class="sm:mx-14 mx-5 w-full h-auto bg-white rounded-[30px] drop-shadow-2xl font-sans">
            <div class="flex flex-row items-center justify-between">
                <div
                    class="max-w-[620px] sm:pl-10 px-4 space-y-6 py-5 sm:text-left text-center sm:inline flex items-center flex-col">
                    <img class="w-24" src="{{ asset('images/logo.webp') }}" alt="hypedeck-logo">
                    <div class="font-bold lg:text-4xl text-2xl text-[#012F6A]">Empowering marketing artistry <br>
                        through technology</div>
                    <div class="font-normal xl:text-xl lg:text-lg sm:text-base text-[#012F6A]">
                        Our mission is to revolutionize marketing through cutting-edge technology,
                        empowering brands to unleash their creativity and achieve unparalleled success in the digital
                        landscape.
                    </div>
                </div>
                <div class="lg:w-[428px] lg:h-[350px] h-[250px] w-[328px] md:flex hidden justify-center items-center"
                    style="background-image: url('{{ asset('images/bg-img.webp') }}'); background-repeat: no-repeat; background-size: cover; background-position: center">
                    <img class="w-[141px] h-[141px]" src="{{ asset('images/marketing.webp') }}" alt="marketing-image">
                </div>
            </div>
        </div>
    </div>
</section>

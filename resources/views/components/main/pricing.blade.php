<section class="flex flex-col justify-center text-white relative">
    <div
        class="flex flex-col items-center py-10 px-3 lg:px-4 sm:py-16 md:py-16 w-full h-[30rem] bg-cover bg-center z-10" style="background-image: url('{{ asset('images/bg-pricing.webp') }}');">
        <span class="text-[1.35rem] sm:text-[2rem] md:text-3xl lg:text-3xl xl:text-4xl font-bold mb-4 md:mb-6 text-center leading-[2rem] sm:leading-[2.7rem] md:leading-[3rem] xl:leading-[3rem]" data-aos="zoom-in" data-aos-easing="ease-in-sine">Transparent And
            Straightforward <br class="hidden sm:block">Pricing You Can Trust</span>
        <span class="text-[0.93rem] sm:text-[1.1rem] md:text-[1.2rem] lg:text-xl text-center mb-5 sm:mb-8 md:mb-10 lg:mb-0" data-aos="fade-up" data-aos-easing="ease-in-sine">We are ready to provide a customized package
            to cater your exact marketing needs.</span>
        <div class="flex flex-col md:flex-row gap-6 md:gap-4 lg:gap-6 w-full sm:w-7/12 md:w-full items-center md:justify-center md:items-center lg:mt-16 xl:mt-20 text-black">
            <x-pricingcard aos="fade-right" topic="Social Media Management" price="18,000"
                paragraph="For businesses to cultivate brand visibility, engage with audiences, and drive sales."
                :list="[
                    'Marketing Strategy',
                    'Content Creation',
                    'Multiple Platform Management',
                    'Paid Media Ads For Awareness',
                    'Reporting',
                ]" />
            <x-pricingcard aos="fade-up" topic="Lead Generation" price="20,000"
                paragraph="To Attract and engage potential customers to convert their interest into actionable sales leads for businesses."
                :list="[
                    'Business model research.',
                    'Lead generation strategy development.',
                    'Development of creative assets.',
                    'Campaign scheduling and testing.',
                    'Scaling campaigns.',
                    'Data collection and Reporting and follow up.',
                    'Consultation for Lead nurturing.',
                ]" />
            <x-pricingcard aos="fade-left" topic="E Commerce Campaigns" price="30,000" :list="[
                'Product / Audience / Competitor analysis.',
                'Identification of marketing angles and suitable platforms to start ads.',
                'Budget planning for different digital marketing activities',
                'Setting up digital assets ( creatives , catalogs , analytics etc )',
                'Setting up paid ads and launching other digital activities.',
                'Identification on improvements of the sales funnel.',
                'Campaign optimization',
                'Data collection and reporting.',
            ]" />
        </div>
    </div>
    <div class="bg-white h-[74rem] sm:h-[76rem] md:h-[18rem] lg:h-[28rem] xl:h-[30rem] w-full"></div>
</section>

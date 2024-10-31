<section class="flex flex-col justify-center text-white relative">
    <div
        class="flex flex-col items-center xl:py-16 w-full h-[30rem] bg-[url(../../public/images/bg-pricing.webp)] bg-cover bg-center z-10">
        <span class="text-[1.35rem] sm:text-[2rem] md:text-3xl lg:text-3xl xl:text-4xl font-bold mb-2">Transparent And
            Straightforward</span>
        <span class="text-[1.35rem] sm:text-[2rem] md:text-3xl lg:text-3xl xl:text-4xl font-bold mb-8">Pricing You Can
            Trust</span>
        <span class="text-[1.35rem] sm:text-[2rem] md:text-3xl lg:text-xl">We are ready to provide a customized package
            to cater your exact marketing needs.</span>
        <div class="flex xl:space-x-6 w-full justify-center xl:mt-20 text-black">
            <x-pricingcard topic="Social Media Management" price="18,000"
                paragraph="For businesses to cultivate brand visibility, engage with audiences, and drive sales."
                :list="[
                    'Marketing Strategy',
                    'Content Creation',
                    'Multiple Platform Management',
                    'Paid Media Ads For Awareness',
                    'Reporting',
                ]" />
            <x-pricingcard topic="Lead Generation" price="20,000"
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
            <x-pricingcard topic="E Commerce Campaigns" price="30,000" :list="[
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
    <div class="bg-white h-[31rem] w-full border"></div>
</section>

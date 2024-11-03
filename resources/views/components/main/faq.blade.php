<section class="bg-[#EFF4FF] flex flex-col items-center py-10 w-full h-[85rem] sm:h-[75rem] md:h-[78rem] lg:h-[48rem] relative">
    <div class="grid gap-5 md:gap-4 grid-cols-1 lg:grid-cols-2 w-[92%]">
        <x-faqcard aos="fade-up" aosDuration="700" topic='How do I create a successful digital marketing strategy?'
            paragraph="A successful strategy involves understanding your audience, setting clear goals, choosing the right channels." />
        <x-faqcard aos="fade-up" aosDuration="800" topic='What are the key metrics to measure in digital marketing?'
            paragraph="Important metrics include website traffic, conversion rates, click through rates (CTR), engagement rates, return on investment (ROI), and customer acquisition cost (CAC)." />
        <x-faqcard aos="fade-up" aosDuration="900" topic='What is content marketing, and why is it important?'
            paragraph="Content marketing involves creating and sharing valuable content to attract and engage a target audience, building trust and driving profitable customer actions." />
        <x-faqcard aos="fade-up" aosDuration="1000" topic='How can I measure the ROI of my digital marketing campaigns?'
            paragraph="Measure ROI by comparing the revenue generated from digital marketing efforts to the cost of those efforts, using metrics like conversion tracking, sales data, and marketing spend." />
    </div>

    <div
        class="w-11/12 rounded-3xl bg-cover bg-center mt-[6rem] md:mt-[8rem] flex flex-col items-center p-6 md:p-8 text-white gap-y-6 z-10 shadow-xl hover:shadow-2xl hover:shadow-[#727272] duration-500 shadow-[#b8b8b8]" style="background-image: url('{{ asset('images/bg-faq.webp') }}');" data-aos="flip-down">
        <div class="flex flex-col items-center font-bold text-pretty sm:text-center text-[2.1rem] md:text-[2.2rem]">
            <h1>Ready To Explore The Endless Opportunities <br class="hidden lg:block">In The Digital World?</h1>
        </div>
        <div class="flex flex-col items-center text-pretty sm:text-center text-[1.2rem] md:text-[1.3rem]">
            <h1>Click the “Book Free Consultation” Button below to sign up for a <br class="hidden lg:block">Free consultation session.</h1>
        </div>
        <button class="px-7 py-3 md:px-8 md:py-4 rounded-[0.8rem] text-[0.9rem] md:text-[1rem] md:rounded-[0.9rem] bg-gradient-to-r from-[#1764DF] from-20% to-[#CE8E31] to-100% shadow-xl md:shadow-lg hover:shadow-xl hover:scale-105 duration-500 cursor-pointer">
            <a href="#" >Book Free Consultation</a>
        </button>
    </div>
</section>

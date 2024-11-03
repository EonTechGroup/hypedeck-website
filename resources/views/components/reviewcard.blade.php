<style>
    .bg-gradient-opacity {
        background: linear-gradient(to top, rgba(23, 100, 223, 1) 13%, rgba(23, 100, 223, 0) 100%);
    }

    @media (min-width: 1024px) {
        #card-1.hovered {
            width: 50vw;
            z-index: 10;
        }

        #card-1.hovered #number-1,
        #card-1.hovered #lastText-1 {
            display: block;
        }

        #card-1.hovered #text-1 {
            transform: rotate(-0deg);
            bottom: 0;
            right: 0;
            transition: all 0.5s ease-in-out;
        }

        #card-1 {
            width: 7vw;
            z-index: 0;
        }

        #card-1 #number-1,
        #card-1 #lastText-1 {
            display: none;
        }

        #card-1 #text-1 {
            bottom: 32px;
            right: 32px;
            transform: rotate(-90deg);
            transition: all 0.5s ease-in-out;
        }
    }
</style>

<div id="card-container" class="flex flex-col lg:flex-row justify-center gap-4 md:gap-6">
    <div id="card-1"
        class="relative h-[40vh] lg:h-[50vh] w-full lg:w-[7vw] transition-all duration-500 ease-in-out rounded-xl p-5 flex flex-col justify-end bg-cover bg-center group hover:lg:w-[50vw] lg:hovered overflow-hidden"
        style="background-image: url('{{ asset('images/done-projects.webp') }}');">
        <div class="flex justify-between items-center text-white z-20">
            <h2 id="number-1" class="text-[2.5rem] font-bold block lg:hidden group-hover:lg:block">200 +</h2>
            <div class="flex flex-col items-start">
                <span id="text-1" class="text-2xl relative font-medium">Projects</span>
                <span id="lastText-1" class="text-2xl block lg:hidden group-hover:lg:block font-medium">Done</span>
            </div>
        </div>
        <div class="absolute w-full h-full bg-gradient-opacity z-10 inset-0 rounded-xl"></div>
    </div>
    <div id="card-2"
        class="relative h-[40vh] lg:h-[50vh] w-full lg:w-[7vw] transition-all duration-500 ease-in-out rounded-xl p-5 flex flex-col justify-end bg-cover bg-center group hover:lg:w-[50vw] z-0 hover:z-10 overflow-hidden"
        style="background-image: url('{{ asset('images/resource-persons.webp') }}');">
        <div class="flex justify-between items-center text-white z-20">
            <h2 id="number-2" class="text-[2.5rem] font-bold block lg:hidden group-hover:lg:block">20 +</h2>
            <div class="flex flex-col items-start">
                <span
                    class="text-2xl transform group-hover:lg:rotate-0 lg:-rotate-90 transition-transform duration-500 relative lg:bottom-8 lg:right-8 group-hover:lg:bottom-0 group-hover:lg:right-0 font-medium">Resource</span>
                <span id="lastText-2" class="text-2xl block lg:hidden group-hover:lg:block font-medium">Persons</span>
            </div>
        </div>
        <div class="absolute w-full h-full bg-gradient-opacity z-10 inset-0 rounded-xl"></div>
    </div>
    <div id="card-3"
        class="relative h-[40vh] lg:h-[50vh] w-full lg:w-[7vw] transition-all duration-500 ease-in-out rounded-xl p-5 flex flex-col justify-end bg-cover bg-center group hover:lg:w-[50vw] z-0 hover:z-10 overflow-hidden"
        style="background-image: url('{{ asset('images/satisfied-clients.webp') }}');">
        <div class="flex justify-between items-center text-white z-20">
            <h2 id="number-3" class="text-[2.5rem] font-bold block lg:hidden group-hover:lg:block">100 +</h2>
            <div class="flex flex-col items-start">
                <span
                    class="text-2xl transform group-hover:lg:rotate-0 lg:-rotate-90 transition-transform duration-500 relative lg:bottom-8 lg:right-8 group-hover:lg:right-0 group-hover:lg:bottom-0 font-medium">Satisfied</span>
                <span id="lastText-3" class="text-2xl block lg:hidden group-hover:lg:block font-medium">Client</span>
            </div>
        </div>
        <div class="absolute w-full h-full bg-gradient-opacity z-10 inset-0 rounded-xl"></div>
    </div>
    <div id="card-4"
        class="relative h-[40vh] lg:h-[50vh] w-full lg:w-[7vw] transition-all duration-500 ease-in-out rounded-xl p-5 flex flex-col justify-end bg-cover bg-center group hover:lg:w-[50vw] z-0 hover:z-10 overflow-hidden"
        style="background-image: url('{{ asset('images/ongoing-projects.webp') }}');">
        <div class="flex justify-between items-center text-white z-20">
            <h2 id="number-4" class="text-[2.5rem] font-bold block lg:hidden group-hover:lg:block">50 +</h2>
            <div class="flex flex-col items-start">
                <span
                    class="text-2xl transform group-hover:lg:rotate-0 lg:-rotate-90 transition-transform duration-500 relative lg:bottom-8 lg:right-8 group-hover:lg:right-0 group-hover:lg:bottom-0 font-medium">Ongoing</span>
                <span id="lastText-4" class="text-2xl block lg:hidden group-hover:lg:block font-medium">Projects</span>
            </div>
        </div>
        <div class="absolute w-full h-full bg-gradient-opacity z-10 inset-0 rounded-xl"></div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const card1 = document.getElementById("card-1");
        const otherCards = document.querySelectorAll(
            "#card-container > div:not(#card-1)"
        );

        card1.classList.add("hovered");

        otherCards.forEach((card) => {
            card.addEventListener("mouseover", function() {
                card1.classList.remove("hovered");
            });

            card.addEventListener("mouseout", function() {
                if (!Array.from(otherCards).some((c) => c.matches(":hover"))) {
                    card1.classList.add("hovered");
                }
            });
        });
    });
</script>

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-screen flex justify-center sticky top-4">
        <div class="w-11/12 navbar bg-base-100 border-[1px] border-[#ffffff1a] p-4 my-4 rounded-full">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-6 z-[1] p-2 shadow bg-base-100 rounded-box w-52 md:w-96 border-[1px] border-[#ffffff1a]">
                        <li class="hover:text-green-primary"><a href="#about">Learn About kunciKas</a></li>
                        <li class="hover:text-green-primary"><a href="#features">Features</a></li>
                        <li class="hover:text-green-primary"><a href="#testimonials">Testimonials</a></li>
                    </ul>
                </div>
                <a href="/" class="btn text-xl lg:text-4xl text-green-primary">kunciKas</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li class="hover:text-green-primary"><a href="#about">Learn About kunciKas</a></li>
                    <li class="hover:text-green-primary"><a href="#features">Features</a></li>
                    <li class="hover:text-green-primary"><a href="#testimonials">Testimonials</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a href={{ route('registerPage') }}>
                    <x-button class="btn md:w-full w-24 btn-primary justify-center">
                        <span class="hidden md:block">Launch the App</span>
                        <span class="md:hidden">Launch</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 hidden md:block">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                        </svg>
                    </x-button>
                </a>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:mx-9">
        <div class="px-4 md:p-11 md:mt-11">
            <div class="w-full flex flex-col-reverse md:flex-row md:justify-between items-center">
                <div class="w-full md:w-1/2 flex flex-col gap-2">
                    <span
                        class="text-3xl md:text-5xl lg:text-7xl bg-gradient-to-r from-slate-400 to-white text-transparent bg-clip-text">The
                        simple App
                        For Managing Income and
                        Expenses</span>
                    <p>
                        Simplify your financial tracking and take control of your finances effortlessly with Kuncikas.
                        Whether
                        you're a freelancer, small business owner, or just want to stay on top of your personal
                        finances,
                        Kuncikas has you covered.
                    </p>
                    <a href={{ route('register') }} class="w-36 my-7">
                        <x-button class="btn btn-primary justify-center">Sign Up</x-button>
                    </a>
                </div>
                <img src="{{ asset('coworking-e-wallet-with-virtual-credit-cards.gif') }}"
                    alt="virtual-credit-cards-icon" class="w-[200px] md:w-[350px] lg:w-[500px]">
            </div>
        </div>
        <div id="about" class="my-4 px-4 md:p-11 flex justify-center">
            <div
                class="md:w-3/4 border-[1px] border-[#ffffff1a] md:p-4 my-4 rounded-md md:hover:border-green-primary hover:shadow-inner">
                <h2
                    class="text-3xl md:text-5xl bg-gradient-to-r from-slate-400 to-white text-transparent bg-clip-text mb-3">
                    About
                </h2>
                <p>Your go-to solution for hassle-free bookkeeping. Say goodbye to complex spreadsheets
                    and
                    overwhelming financial software. With Kuncikas, managing your income, expenses, and more is as easy
                    as a
                    few
                    taps on your phone or clicks on your computer.</p>
            </div>
        </div>
        <div id="features" class="px-4 md:p-11">
            <h2
                class="text-3xl md:text-5xl bg-gradient-to-r from-slate-400 to-white text-transparent bg-clip-text mb-7">
                Features
            </h2>
            <div class="lg:-mt-9 flex flex-col-reverse md:items-center md:flex-row md:justify-between ">
                <ul class="flex flex-col gap-4 list-image-[url(checkmark.png)]">
                    <li class="flex gap-4 items-center md:gap-2 ">
                        <div
                            class="p-4 w-14 h-14 bg-green-primary flex items-center justify-center rounded-md lg:rounded-full text-black text-xl lg:text-2xl font-bold">
                            1
                        </div>
                        <div>
                            <h2 class="font-bold">Effortless Tracking:</h2>
                            <p>Record your income and expenses effortlessly, anytime, anywhere.</p>
                        </div>
                    </li>
                    <li class="flex gap-4 items-center md:gap-2 ">
                        <div
                            class="p-4 w-14 h-14 bg-green-primary flex items-center justify-center rounded-md lg:rounded-full text-black text-xl lg:text-2xl font-bold">
                            2</div>
                        <div>
                            <h2 class="font-bold">Custom Categories:</h2>
                            <p>Tailor your financial categories to suit your needs, making organization a breeze.</p>
                        </div>
                    </li>
                    <li class="flex gap-4 items-center md:gap-2 ">
                        <div
                            class="p-4 w-14 h-14 bg-green-primary flex items-center justify-center rounded-md lg:rounded-full text-black text-xl lg:text-2xl font-bold">
                            3</div>
                        <div>
                            <h2 class="font-bold">Smart Insights:</h2>
                            <p>Gain valuable insights into your spending habits and financial trends with our intuitive
                                reporting
                                tools.</p>
                        </div>
                    </li>
                    <li class="flex gap-4 items-center md:gap-2 ">
                        <div
                            class="p-4 w-14 h-14 bg-green-primary flex items-center justify-center rounded-md lg:rounded-full text-black text-xl lg:text-2xl font-bold">
                            4</div>
                        <div>
                            <h2 class="font-bold">Secure Backup:</h2>
                            <p>Rest easy knowing your financial data is securely backed up in the cloud.</p>
                        </div>
                    </li>
                </ul>
                <img src="{{ asset('coworking-office-employees-doing-financial-market-analysis.png') }}"
                    alt="employee-doing-financial-icon" class="w-[200px] md:w-[350px] lg:w-[500px]">
            </div>
        </div>
        <div id="testimonials" class="my-11 px-4 md:p-11 flex flex-col md:flex-row items-center gap-2">
            <div class="h-fit md:h-60 w-full md:w-[33%] md:mb-7">
                <h2
                    class="text-3xl md:text-5xl lg:text-7xl bg-gradient-to-r from-slate-400 to-white text-transparent bg-clip-text">
                    What
                    People
                    Said About kuncikas
                </h2>
            </div>
            <div
                class="h-60 md:h-fit w-full md:w-[33%] border-[1px] border-[#ffffff1a] p-4 md:p-6 md:my-4 rounded-md hover:border-green-primary hover:shadow-inner">
                <span class="text-2xl font-bold">"</span>
                <p>
                    Since using Kuncikas, I've saved countless hours on bookkeeping. It's intuitive, user-friendly, and
                    has
                    transformed the way I manage my finances.
                </p>
                <span class="text-md font-bold">~ Sarah, Small Business Owner</span>
            </div>
            <div
                class="h-60 md:h-fit w-full md:w-[33%] border-[1px] border-[#ffffff1a] p-4 md:p-6 md:my-4 rounded-md hover:border-green-primary hover:shadow-inner">
                <span class="text-2xl font-bold">"</span>
                <p>
                    As a freelancer, staying on top of my finances is crucial. Kuncikas has made it incredibly easy to
                    track
                    my
                    income and expenses, allowing me to focus on growing my business.
                </p>
                <span class="text-md font-bold">~ John, Freelancer</span>
            </div>
        </div>
        <footer class="mb-7 px-4 md:p-11 flex flex-col md:flex-row gap-2 md:items-center">
            <div class="flex flex-col">
                <span>Join thousands of satisfied users and experience the simplicity of Kuncikas for yourself.</span>
                <span>&copy;2024, Made With Love by <a href="https://github.com/takachan0012/183-Jujun-Junaedi"
                        class="hover:text-green-primary underline">takadotdev</a></span>
            </div>
            <a href={{ route('register') }}>
                <x-button class="btn btn-primary w-32 justify-center">Sign Up
                    Now!</x-button>
            </a>
        </footer>
    </div>
</x-layout>

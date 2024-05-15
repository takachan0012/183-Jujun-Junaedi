<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-screen flex justify-center sticky top-4">
        <nav class="w-11/12 flex border-[1px] border-[#ffffff1a] p-4 my-4 rounded-full  bg-[#171212]">
            <div class="pl-4 w-1/4 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-green-primary">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>
                <h1 class="text-4xl font-bold text-green-primary">
                    kunciKas
                </h1>
            </div>
            <ul class="w-1/2 flex items-center gap-4">
                <li class="hover:text-green-primary"><a href="#about">Learn About kunciKas</a></li>
                <li class="hover:text-green-primary"><a href="#features">Features</a></li>
                <li class="hover:text-green-primary"><a href="#testimonials">Testimonials</a></li>
            </ul>
            <div class="w-1/4">
                <a href={{ route('register') }}>
                    <x-button class="btn btn-primary justify-center">
                        <span>Launch the App</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                        </svg>
                    </x-button>
                </a>
            </div>
        </nav>
    </div>
    <div class="p-11 my-11">
        <div class="flex justify-between items-center">
            <div class="w-1/2 flex flex-col gap-2">
                <span class="text-7xl bg-gradient-to-r from-slate-400 to-white text-transparent bg-clip-text">The
                    simple App
                    For Managing Income and
                    Expenses</span>
                <p>
                    Simplify your financial tracking and take control of your finances effortlessly with Kuncikas.
                    Whether
                    you're a freelancer, small business owner, or just want to stay on top of your personal finances,
                    Kuncikas has you covered.
                </p>
                <p>
                    Ready to take control of your finances? Sign up for Kuncikas today and start simplifying your
                    bookkeeping journey.
                </p>
                <a href={{ route('register') }} class="w-36 my-7">
                    <x-button class="btn btn-primary justify-center">Sign Up</x-button>
                </a>
            </div>
            <img src="{{ asset('coworking-e-wallet-with-virtual-credit-cards.gif') }}" alt="virtual-credit-cards-icon"
                class="w-[500px]">
        </div>
    </div>
    <div id="about" class="p-11 flex justify-center">
        <div
            class="w-1/2 border-[1px] border-[#ffffff1a] p-4 my-4 rounded-md hover:border-green-primary hover:shadow-inner">
            <h2 class="text-5xl bg-gradient-to-r from-slate-400 to-white text-transparent bg-clip-text mb-3">About</h2>
            <p>Your go-to solution for hassle-free bookkeeping. Say goodbye to complex spreadsheets
                and
                overwhelming financial software. With Kuncikas, managing your income, expenses, and more is as easy as a
                few
                taps on your phone or clicks on your computer.</p>
        </div>
    </div>
    <div id="features" class="p-11">
        <h2 class="text-5xl bg-gradient-to-r from-slate-400 to-white text-transparent bg-clip-text mb-7">Features</h2>
        <div class="flex justify-evenly">
            <ul class="flex flex-col gap-4">
                <li class="flex items-center gap-2 ">
                    <div
                        class="w-16 h-16 bg-green-primary flex items-center justify-center rounded-full text-black text-2xl font-bold">
                        1</div>
                    <div>
                        <h2 class="font-bold">Effortless Tracking:</h2>
                        <p>Record your income and expenses effortlessly, anytime, anywhere.</p>
                    </div>
                </li>
                <li class="flex items-center gap-2 ">
                    <div
                        class="w-16 h-16 bg-green-primary flex items-center justify-center rounded-full text-black text-2xl font-bold">
                        2</div>
                    <div>
                        <h2 class="font-bold">Custom Categories:</h2>
                        <p>Tailor your financial categories to suit your needs, making organization a breeze.</p>
                    </div>
                </li>
                <li class="flex items-center gap-2 ">
                    <div
                        class="w-16 h-16 bg-green-primary flex items-center justify-center rounded-full text-black text-2xl font-bold">
                        3</div>
                    <div>
                        <h2 class="font-bold">Smart Insights:</h2>
                        <p>Gain valuable insights into your spending habits and financial trends with our intuitive
                            reporting
                            tools.</p>
                    </div>
                </li>
                <li class="flex items-center gap-2 ">
                    <div
                        class="w-16 h-16 bg-green-primary flex items-center justify-center rounded-full text-black text-2xl font-bold">
                        4</div>
                    <div>
                        <h2 class="font-bold">Secure Backup:</h2>
                        <p>Rest easy knowing your financial data is securely backed up in the cloud.</p>
                    </div>
                </li>
            </ul>
            <img src="{{ asset('coworking-office-employees-doing-financial-market-analysis.png') }}"
                alt="employee-doing-financial-icon">
        </div>
    </div>
    <div id="testimonials" class="p-11 flex items-center gap-2">
        <div class="h-60 w-[33%]">
            <h2 class="text-5xl bg-gradient-to-r from-slate-400 to-white text-transparent bg-clip-text mb-7">What People
                Said About kuncikas
            </h2>
        </div>
        <div class="h-60 w-[33%] border-[1px] border-[#ffffff1a] p-4 my-4 rounded-md">
            <span class="text-2xl font-bold">"</span>
            <p>
                Since using Kuncikas, I've saved countless hours on bookkeeping. It's intuitive, user-friendly, and has
                transformed the way I manage my finances.
            </p>
            <span class="text-md font-bold">~ Sarah, Small Business Owner</span>
        </div>
        <div class="h-60 w-[33%] border-[1px] border-[#ffffff1a] p-4 my-4 rounded-md">
            <span class="text-2xl font-bold">"</span>
            <p>
                As a freelancer, staying on top of my finances is crucial. Kuncikas has made it incredibly easy to track
                my
                income and expenses, allowing me to focus on growing my business.
            </p>
            <span class="text-md font-bold">~ John, Freelancer</span>
        </div>
    </div>
    <footer class="p-11 flex gap-2 items-center">
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
</x-layout>

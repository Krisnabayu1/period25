<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class=" bg-gradient-to-l from-sky-500 to-pink-600">
    <!-- Navbar Start -->
    <nav class="fixed top-0 left-0 bg-gradient-to-l from-sky-600 to-pink-700 w-full shadow">
        <div class="container m-auto flex justify-between items-center text-gray-700">
            <img src="{{asset ('image/4.png') }}" alt="5png" class=" pl-10 py-0 w-[350px] h-[70px]" />

            <ul class="hidden md:flex items-center pr-10 text-base font-semibold cursor-pointer">
                <a class="hover:bg-gradient-to-r from-sky-500 to-pink-600 py-4 px-6 text-white text-lg"> Home</a>
                <a href="/members" class=" hover:bg-gradient-to-r from-sky-500 to-pink-600 py-4 px-6 text-lg text-white"> Member</a>
                <a href="/kloters" class=" hover:bg-gradient-to-r from-sky-500 to-pink-600 py-4 px-6 text-lg text-white"> Kloter</a>

                <a href="/tutors" class="hover:bg-gradient-to-r from-sky-500 to-pink-600 py-4 px-6 text- text-white"> Tutor</a>
            </ul>
            <button class="block md:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-gradient-to-r from-sky-500 to-pink-600 group">
                <div class="w-5 h-1 bg-white mb-1"></div>
                <div class="w-5 h-1 bg-white mb-1"></div>
                <div class="w-5 h-1 bg-white"></div>
                <div class="absolute top-0 -right-full opacity-0 h-screen w-8/12  bg-gradient-to-br from-sky-500 to-pink-600 border transform
                group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
                    <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-10">
                        <a href="/home" class=" hover:bg-sky-700 py-4 px-6 w-full font-semibold text-lg text-white">Home</a>
                        <a href="/members" class=" hover:bg-sky-700 py-4 px-6 w-full font-semibold text-lg text-white">Member</a>
                        <a href="/kloters" class=" hover:bg-sky-700 py-4 px-6 w-full font-semibold text-lg text-white">Kloter</a>
                        <a href="/tutors" class=" hover:bg-sky-700 py-4 px-6 w-full font-semibold text-lg text-white">Tutor</a>

                    </ul>
                </div>
            </button>
        </div>

    </nav>
    <!-- Navbar End-->

    <!-- Hero Section Start -->

    <section id="home" class="scroll-pt-28 mb-20">

        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h2 class="font-extrabold text-yellow-400  text-6xl mx-10 mb-3 mt-24 max-w-md">The English Course You Can Trust </h2>
                    <span class="block font-bold text-white text-2xl mx-10 mt-1 lg:text-3xl">Wellcome To <span class=" text-yellow-400 text-4xl">Global English Classroom</span></span>

                    <p class="text-3xl font-bold text-slate-100 mb-10 leading-relaxed mx-10"> Visit Yout Class <span class="text-yellow-400 text-5xl"> Now!</span><br></p>
                    <a href="/members" class="text-2xl font-bold text-black bg-yellow-600 mx-5 text-center 
                py-3 px-8 rounded-full hover:shadow-lg hover:bg-yellow-500 ml-5 transition duration-300 ease-in-out ">Lihat Kelasku</a>

                </div>
                <div class=" w-full pt-32 self-end px-4 lg:w-1/2">
                    <div class=" relative mt-10 lg:mt-10 lg:right-0 "></div>
                    <img src="{{asset ('image/3.png') }}" alt="5png" class="max-w-full mx-auto w-[700px] h-[670px]" />
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <footer class="text-muted py-5">
        <div class="container">

            <p class="mb-1 font-serif font-semibold text-gray-300"> &copy; GE | Global English Pare 2022</p>
            <p class="mb-1 font-serif font-semibold text-gray-300">Aplikasi Ini di Buat Oleh Mr.Rizal Dan Amik Taruna Team </p>
            <p class="mb-1 font-serif font-semibold text-gray-300"><a href="https://globalenglish.co.id/">Go To Website</a> </p>
        </div>
    </footer>

    <script src="COBA/js/script.js"></script>
</body>

</html>
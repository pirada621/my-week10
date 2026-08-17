<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ยินดีต้อนรับสู่ Pirada Studio</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Vite Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Prompt', 'Outfit', sans-serif;
        }

        @keyframes float-1 {

            0%,
            100% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.95);
            }
        }

        @keyframes float-2 {

            0%,
            100% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(-40px, 30px) scale(0.9);
            }

            66% {
                transform: translate(30px, -20px) scale(1.1);
            }
        }

        .animate-blob-1 {
            animation: float-1 12s ease-in-out infinite;
        }

        .animate-blob-2 {
            animation: float-2 15s ease-in-out infinite;
        }

        .animate-spin-slow {
            animation: spin 8s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body
    class="relative min-h-screen bg-gradient-to-tr from-pink-50 via-purple-50 to-blue-50 text-slate-800 overflow-x-hidden">

    <!-- Ambient background blobs -->
    <div
        class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] rounded-full bg-pink-200/40 blur-3xl -z-10 animate-blob-1">
    </div>
    <div
        class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] rounded-full bg-blue-200/40 blur-3xl -z-10 animate-blob-2">
    </div>
    <div
        class="absolute top-[40%] right-[10%] w-[400px] h-[400px] rounded-full bg-purple-200/30 blur-3xl -z-10 animate-blob-1">
    </div>

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 backdrop-blur-md bg-white/70 border-b border-white/30 transition-all duration-300">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/"
                class="flex items-center space-x-2 text-xl font-bold tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600 hover:opacity-90 transition-opacity">
                <span>Pirada ✨</span>
            </a>

            <div class="hidden md:flex items-center space-x-8">
                <a href="/"
                    class="font-medium text-purple-600 border-b-2 border-purple-500/80 px-1 py-1">หน้าแรก</a>
                <a href="/about"
                    class="font-medium text-slate-600 hover:text-purple-600 transition-colors duration-200 px-1 py-1 border-b-2 border-transparent hover:border-purple-300">เกี่ยวกับเรา</a>
                <a href="/blog"
                    class="font-medium text-slate-600 hover:text-purple-600 transition-colors duration-200 px-1 py-1 border-b-2 border-transparent hover:border-purple-300">บทความ</a>
                <a href="/workshop"
                    class="font-medium text-slate-600 hover:text-purple-600 transition-colors duration-200 px-1 py-1 border-b-2 border-transparent hover:border-purple-300">เวิร์คช็อป</a>
            </div>

            <div class="flex items-center">
                <span id="time-greeting"
                    class="hidden sm:inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold bg-white/80 border border-purple-100 text-purple-700 shadow-sm">
                    กำลังโหลด...
                </span>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6 pt-12 pb-24 relative">
        <!-- Hero Section -->
        <section class="text-center py-16 md:py-24">
            <div
                class="inline-flex items-center space-x-2 bg-pink-100/60 border border-pink-200/50 px-4 py-1.5 rounded-full text-pink-700 font-medium text-sm mb-6 animate-pulse">
                <span>✨ ยินดีต้อนรับสู่โลกพาสเทลแสนหวาน</span>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-slate-800 leading-tight">
                ยินดีต้อนรับสู่เว็บไซต์ของ <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500">Pirada</span>
            </h1>

            <p class="mt-6 text-lg md:text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                เราแชร์บทความ ความรู้ และเรื่องราวดี ๆ ที่จะเติมเต็มแรงบันดาลใจในทุกวันของคุณ
                มาร่วมเดินทางและเติบโตไปด้วยกันในพื้นที่สร้างสรรค์แห่งนี้
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/blog"
                    class="w-full sm:w-auto px-8 py-3.5 rounded-2xl bg-gradient-to-r from-pink-400 to-purple-400 text-white font-medium shadow-lg shadow-purple-200/50 hover:shadow-xl hover:shadow-purple-300/60 hover:-translate-y-0.5 transition-all duration-300">
                    อ่านบทความทั้งหมด
                </a>
                <a href="/about"
                    class="w-full sm:w-auto px-8 py-3.5 rounded-2xl bg-white/80 backdrop-blur-sm border border-slate-200/60 text-slate-700 font-medium hover:bg-slate-50 hover:-translate-y-0.5 transition-all duration-300">
                    เรียนรู้เกี่ยวกับเรา
                </a>
            </div>
        </section>

        <!-- Feature Cards -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <!-- Card 1: About Us -->
            <a href="/about"
                class="group relative overflow-hidden bg-rose-50/70 border border-rose-100/80 rounded-3xl p-8 hover:shadow-xl hover:shadow-rose-100/40 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                <div
                    class="absolute top-0 right-0 w-24 h-24 bg-rose-200/20 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500">
                </div>
                <div>
                    <div
                        class="w-12 h-12 rounded-2xl bg-rose-100 flex items-center justify-center text-rose-600 mb-6 group-hover:rotate-6 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800">เกี่ยวกับเรา</h3>
                    <p class="mt-3 text-slate-600 leading-relaxed text-sm">
                        ทำความรู้จักกับตัวตน ความฝัน และเป้าหมายของเราในการแบ่งปันประสบการณ์และสร้างสรรค์ผลงานชิ้นสำคัญ
                    </p>
                </div>
                <div class="mt-8 flex items-center text-rose-600 font-semibold text-sm">
                    <span>อ่านเพิ่มเติม</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>

            <!-- Card 2: Blog -->
            <a href="/blog"
                class="group relative overflow-hidden bg-indigo-50/70 border border-indigo-100/80 rounded-3xl p-8 hover:shadow-xl hover:shadow-indigo-100/40 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                <div
                    class="absolute top-0 right-0 w-24 h-24 bg-indigo-200/20 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500">
                </div>
                <div>
                    <div
                        class="w-12 h-12 rounded-2xl bg-indigo-100 flex items-center justify-center text-indigo-600 mb-6 group-hover:rotate-6 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800">บทความแสนสนุก</h3>
                    <p class="mt-3 text-slate-600 leading-relaxed text-sm">
                        คอลเลกชันงานเขียนที่รวมความรู้ เทคนิค ความคิดสร้างสรรค์
                        และแรงบันดาลใจที่คัดสรรมาเพื่อคุณโดยเฉพาะ
                    </p>
                </div>
                <div class="mt-8 flex items-center text-indigo-600 font-semibold text-sm">
                    <span>เยี่ยมชมบล็อก</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>

            <!-- Card 3: Magic Generator -->
            <div
                class="group relative overflow-hidden bg-emerald-50/70 border border-emerald-100/80 rounded-3xl p-8 hover:shadow-xl hover:shadow-emerald-100/40 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                <div
                    class="absolute top-0 right-0 w-24 h-24 bg-emerald-200/20 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500">
                </div>
                <div>
                    <div
                        class="w-12 h-12 rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-600 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-spin-slow" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800">คำคมบันดาลใจวันนี้</h3>
                    <p id="quote-box"
                        class="mt-3 text-emerald-700 italic font-medium leading-relaxed text-sm transition-all duration-300">
                        "ความสำเร็จเริ่มต้นจากการลงมือทำสิ่งเล็กๆ ในทุกวัน"
                    </p>
                </div>
                <div class="mt-8">
                    <button onclick="generateQuote()"
                        class="cursor-pointer inline-flex items-center justify-center px-4 py-2 bg-emerald-100 hover:bg-emerald-200/80 text-emerald-800 font-semibold text-xs rounded-xl transition-colors duration-200">
                        <span>รับคำคมใหม่ ✨</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Newsletter section -->
        <section
            class="mt-16 bg-white/60 backdrop-blur-sm border border-purple-100 rounded-3xl p-8 md:p-12 text-center relative overflow-hidden">
            <div class="absolute -top-12 -left-12 w-32 h-32 bg-purple-200/20 rounded-full blur-xl"></div>
            <div class="absolute -bottom-12 -right-12 w-32 h-32 bg-pink-200/20 rounded-full blur-xl"></div>

            <h3 class="text-2xl font-bold text-slate-800">ร่วมรับข่าวสารและบทความใหม่ ๆ</h3>
            <p class="mt-3 text-slate-600 max-w-lg mx-auto text-sm md:text-base">
                กรอกอีเมลของคุณเพื่อรับการแจ้งเตือนบทความใหม่และข่าวสารอัปเดตพิเศษก่อนใคร ส่งตรงถึงกล่องข้อความของคุณ
            </p>

            <form onsubmit="event.preventDefault(); alert('ขอบคุณที่ติดตามเรา! ✨');"
                class="mt-8 max-w-md mx-auto flex flex-col sm:flex-row gap-3">
                <input type="email" placeholder="ที่อยู่อีเมลของคุณ" required
                    class="flex-1 px-5 py-3 rounded-2xl bg-white/90 border border-slate-200 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent text-sm transition-all duration-200">
                <button type="submit"
                    class="cursor-pointer px-6 py-3 rounded-2xl bg-purple-500 hover:bg-purple-600 text-white font-medium text-sm transition-colors duration-200 shadow-md shadow-purple-100">
                    ติดตามข่าวสาร
                </button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-purple-100/50 bg-white/40 py-8 text-center text-sm text-slate-500">
        <p>© 2026 Pirada Studio. สรรค์สร้างด้วยความรักและสีพาสเทล 🌸</p>
    </footer>

    <!-- Interactive JS Scripts -->
    <script>
        // Quotes array for dynamic greeting
        const quotes = [
            "\"ความสำเร็จเริ่มต้นจากการลงมือทำสิ่งเล็กๆ ในทุกวัน\"",
            "\"เชื่อมั่นในตัวเอง แล้วคุณจะทำได้ทุกสิ่งอย่างที่หวัง\"",
            "\"ทุกวันที่ตื่นขึ้นมา คือโอกาสใหม่ในการสร้างสรรค์สิ่งดีๆ\"",
            "\"สีพาสเทลช่วยให้ใจบาง และใจที่บางคือใจที่พร้อมเปิดรับไอเดียใหม่ๆ ✨\"",
            "\"จงมีความสุขกับสิ่งเล็กๆ น้อยๆ รอบตัวคุณในวันธรรมดานี้\"",
            "\"ก้าวเล็กๆ ในแต่ละวัน จะพาเราไปสู่อนาคตที่ยิ่งใหญ่\"",
            "\"ความลับของชีวิต คือการเรียนรู้และเพลิดเพลินกับระหว่างการเดินทาง\""
        ];

        function generateQuote() {
            const quoteBox = document.getElementById('quote-box');
            let randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
            // Avoid getting the same quote
            while (quoteBox.innerText === randomQuote) {
                randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
            }
            quoteBox.style.opacity = '0';
            setTimeout(() => {
                quoteBox.innerText = randomQuote;
                quoteBox.style.opacity = '1';
            }, 200);
        }

        // Time-based greeting script
        document.addEventListener('DOMContentLoaded', () => {
            const greetingElement = document.getElementById('time-greeting');
            const hour = new Date().getHours();
            let greeting = "";

            if (hour >= 5 && hour < 12) {
                greeting = "อรุณสวัสดิ์ยามเช้า 🌸";
            } else if (hour >= 12 && hour < 17) {
                greeting = "สวัสดีตอนบ่าย ☀️";
            } else if (hour >= 17 && hour < 22) {
                greeting = "สวัสดีตอนเย็น 🌅";
            } else {
                greeting = "ราตรีสวัสดิ์ยามค่ำคืน 🌙";
            }

            if (greetingElement) {
                greetingElement.innerText = greeting;
            }
        });
    </script>
</body>

</html>

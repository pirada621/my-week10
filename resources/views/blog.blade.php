<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บทความแสนสนุก | Pirada Studio</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Prompt', 'Outfit', sans-serif;
        }

        @keyframes float-1 {
            0%, 100% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.95); }
        }

        .animate-blob-1 {
            animation: float-1 12s ease-in-out infinite;
        }
    </style>
</head>

<body class="relative min-h-screen bg-gradient-to-tr from-pink-50 via-purple-50 to-blue-50 text-slate-800 overflow-x-hidden">

    <!-- Ambient background blobs -->
    <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] rounded-full bg-pink-200/30 blur-3xl -z-10 animate-blob-1"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] rounded-full bg-blue-200/30 blur-3xl -z-10 animate-blob-1"></div>

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 backdrop-blur-md bg-white/70 border-b border-white/30 transition-all duration-300">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center space-x-2 text-xl font-bold tracking-wide text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">
                <span>Pirada ✨</span>
            </a>
            
            <div class="flex items-center space-x-8">
                <a href="/" class="font-medium text-slate-600 hover:text-purple-600 transition-colors duration-200 px-1 py-1 border-b-2 border-transparent hover:border-purple-300">หน้าแรก</a>
                <a href="/about" class="font-medium text-slate-600 hover:text-purple-600 transition-colors duration-200 px-1 py-1 border-b-2 border-transparent hover:border-purple-300">เกี่ยวกับเรา</a>
                <a href="/blog" class="font-medium text-purple-600 border-b-2 border-purple-500/80 px-1 py-1">บทความ</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-6 py-16 relative">
        <div class="text-center mb-16">
            <div class="inline-flex items-center space-x-2 bg-indigo-100/60 border border-indigo-200/50 px-4 py-1.5 rounded-full text-indigo-700 font-medium text-sm mb-4">
                <span>📚 Enjoy Reading</span>
            </div>
            <h1 class="text-3xl md:text-5xl font-bold text-slate-800 leading-tight">
                บทความแสนสนุกจาก <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-indigo-500">Pirada Blog</span>
            </h1>
            <p class="mt-4 text-slate-600 max-w-xl mx-auto">
                คลังบทความและเรื่องเล่าสนุก ๆ ที่เราตั้งใจคัดสรรและเรียบเรียงขึ้นเพื่อส่งต่อความรู้สึกดี ๆ สาระ และความรู้ให้กับผู้อ่านทุกวัน
            </p>
        </div>

        <!-- Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Article 1: Pastel Pink Theme -->
            <article class="group bg-white/60 backdrop-blur-md border border-rose-100/60 rounded-3xl overflow-hidden hover:shadow-xl hover:shadow-rose-100/30 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Card Top Pastel Accent Banner -->
                    <div class="h-32 bg-gradient-to-r from-pink-200 to-rose-200 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl">🌸</span>
                        <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between text-xs font-semibold text-rose-600 mb-3">
                            <span class="bg-rose-100/60 px-3 py-1 rounded-full">LIFESTYLE</span>
                            <span>อ่าน 5 นาที</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 group-hover:text-rose-600 transition-colors">
                            แต่งบ้านโทนพาสเทลให้น่าอยู่แบบมินิมอล
                        </h3>
                        <p class="mt-3 text-slate-600 text-sm leading-relaxed">
                            แนะนำไอเดียการเลือกสีทาบ้าน เฟอร์นิเจอร์ และของตกแต่งโทนสีพาสเทลหวานละมุน เพื่อเปลี่ยนห้องทำงานหรือห้องนอนเดิม ๆ ให้กลายเป็นพื้นที่พักผ่อนที่แสนผ่อนคลายในทุก ๆ วัน
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <button onclick="alert('กำลังพัฒนาระบบอ่านบทความตัวเต็ม... 🌸')" class="cursor-pointer w-full py-2.5 rounded-xl bg-rose-50 text-rose-600 font-semibold text-sm hover:bg-rose-100 transition-colors">
                        เริ่มอ่านบทความ
                    </button>
                </div>
            </article>

            <!-- Article 2: Pastel Indigo Theme -->
            <article class="group bg-white/60 backdrop-blur-md border border-indigo-100/60 rounded-3xl overflow-hidden hover:shadow-xl hover:shadow-indigo-100/30 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Card Top Pastel Accent Banner -->
                    <div class="h-32 bg-gradient-to-r from-indigo-200 to-purple-200 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl">🧠</span>
                        <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between text-xs font-semibold text-indigo-600 mb-3">
                            <span class="bg-indigo-100/60 px-3 py-1 rounded-full">PSYCHOLOGY</span>
                            <span>อ่าน 3 นาที</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 group-hover:text-indigo-600 transition-colors">
                            พลังแห่งสีพาสเทลกับการบำบัดจิตใจ
                        </h3>
                        <p class="mt-3 text-slate-600 text-sm leading-relaxed">
                            มารู้จักผลวิจัยเกี่ยวกับการรับรู้ของสมองต่อสีสันต่าง ๆ โดยเฉพาะโทนสีพาสเทล (Soft colors) ที่ช่วยลดระดับความเครียด ช่วยชะลออารมณ์ และทำให้ผู้อยู่อาศัยรู้สึกสงบและมีสมาธิมากขึ้น
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <button onclick="alert('กำลังพัฒนาระบบอ่านบทความตัวเต็ม... 🧠')" class="cursor-pointer w-full py-2.5 rounded-xl bg-indigo-50 text-indigo-600 font-semibold text-sm hover:bg-indigo-100 transition-colors">
                        เริ่มอ่านบทความ
                    </button>
                </div>
            </article>

            <!-- Article 3: Pastel Mint Theme -->
            <article class="group bg-white/60 backdrop-blur-md border border-emerald-100/60 rounded-3xl overflow-hidden hover:shadow-xl hover:shadow-emerald-100/30 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Card Top Pastel Accent Banner -->
                    <div class="h-32 bg-gradient-to-r from-emerald-200 to-teal-200 flex items-center justify-center relative overflow-hidden">
                        <span class="text-4xl">💻</span>
                        <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between text-xs font-semibold text-emerald-700 mb-3">
                            <span class="bg-emerald-100/60 px-3 py-1 rounded-full">TECH & CODE</span>
                            <span>อ่าน 8 นาที</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 group-hover:text-emerald-700 transition-colors">
                            เริ่มเขียนเว็บบล็อกแรกของคุณด้วย Laravel
                        </h3>
                        <p class="mt-3 text-slate-600 text-sm leading-relaxed">
                            เจาะลึกขั้นตอนพื้นฐานในการติดตั้งและสร้างหน้าเว็บบล็อกสวย ๆ ด้วย Laravel Framework พร้อมระบบ Routing และการดึงข้อมูลมาแสดงผลสำหรับผู้เริ่มต้นเขียนโปรแกรม
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <button onclick="alert('กำลังพัฒนาระบบอ่านบทความตัวเต็ม... 💻')" class="cursor-pointer w-full py-2.5 rounded-xl bg-emerald-50 text-emerald-700 font-semibold text-sm hover:bg-emerald-100 transition-colors">
                        เริ่มอ่านบทความ
                    </button>
                </div>
            </article>
        </div>

        <div class="mt-16 text-center">
            <a href="/" class="inline-flex items-center px-6 py-3 rounded-2xl bg-white/80 border border-slate-200 text-slate-700 font-semibold hover:bg-slate-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                กลับหน้าหลัก
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-purple-100/50 bg-white/40 py-8 text-center text-sm text-slate-500">
        <p>© 2026 Pirada Studio. สรรค์สร้างด้วยความรักและสีพาสเทล 🌸</p>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เกี่ยวกับเรา | Pirada Studio</title>
    
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
                <a href="/about" class="font-medium text-purple-600 border-b-2 border-purple-500/80 px-1 py-1">เกี่ยวกับเรา</a>
                <a href="/blog" class="font-medium text-slate-600 hover:text-purple-600 transition-colors duration-200 px-1 py-1 border-b-2 border-transparent hover:border-purple-300">บทความ</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-16 relative">
        <div class="bg-white/60 backdrop-blur-md border border-white/40 rounded-3xl p-8 md:p-12 shadow-xl shadow-purple-100/20">
            <div class="inline-flex items-center space-x-2 bg-rose-100/60 border border-rose-200/50 px-4 py-1.5 rounded-full text-rose-700 font-medium text-sm mb-6">
                <span>🌸 Our Story</span>
            </div>

            <h1 class="text-3xl md:text-4xl font-bold text-slate-800">
                เกี่ยวกับเรา <span class="text-transparent bg-clip-text bg-gradient-to-r from-rose-500 to-purple-500">Pirada Studio</span>
            </h1>

            <div class="mt-8 space-y-6 text-slate-600 leading-relaxed">
                <p>
                    ยินดีต้อนรับสู่มุมเล็ก ๆ ของพวกเรา! **Pirada Studio** ก่อตั้งขึ้นด้วยความตั้งใจที่จะสร้างพื้นที่แบ่งปันพลังบวก แรงบันดาลใจ และความรู้ที่มีประโยชน์ในหลากหลายด้าน ไม่ว่าจะเป็นไลฟ์สไตล์ เทคโนโลยี เทคนิคการทำงาน หรือเรื่องเล่าที่ชวนให้ยิ้มได้ในวันเหนื่อยล้า
                </p>
                <p>
                    เราเชื่อว่าความสุขเริ่มต้นได้ง่าย ๆ จากสิ่งรอบตัว และการเรียนรู้ที่ไม่มีวันสิ้นสุด ความอบอุ่นและสีสันพาสเทลบนเว็บไซต์นี้ สะท้อนความตั้งใจที่จะทำให้ทุกครั้งที่คุณแวะมาเยี่ยมเยียน รู้สึกผ่อนคลายและได้พลังงานดี ๆ กลับไปเสมอ
                </p>
            </div>

            <!-- Vision and Mission Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
                <div class="p-6 rounded-2xl bg-rose-50/50 border border-rose-100/50">
                    <h3 class="text-lg font-bold text-rose-700 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        ภารกิจของเรา
                    </h3>
                    <p class="mt-2 text-slate-600 text-sm leading-relaxed">
                        สรรค์สร้างเนื้อหาที่มีคุณภาพ ส่งต่อแนวคิดเชิงบวก และสร้างคอมมูนิตี้ที่เปิดกว้างสำหรับทุกคน
                    </p>
                </div>
                <div class="p-6 rounded-2xl bg-indigo-50/50 border border-indigo-100/50">
                    <h3 class="text-lg font-bold text-indigo-700 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        วิสัยทัศน์
                    </h3>
                    <p class="mt-2 text-slate-600 text-sm leading-relaxed">
                        เป็นพื้นที่ออนไลน์ที่สร้างความอบอุ่นใจ เป็นเพื่อนร่วมทางในทุกจังหวะชีวิตของผู้อ่าน
                    </p>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-purple-100 flex justify-between items-center">
                <a href="/" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    กลับสู่หน้าแรก
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-purple-100/50 bg-white/40 py-8 text-center text-sm text-slate-500">
        <p>© 2026 Pirada Studio. สรรค์สร้างด้วยความรักและสีพาสเทล 🌸</p>
    </footer>
</body>

</html>

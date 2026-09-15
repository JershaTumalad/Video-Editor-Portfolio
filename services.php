<?php require_once 'header.php'; ?>

    <!-- space para sa mga video or content -->
    <main class="max-w-5xl mx-auto px-4 py-12 flex-grow">
        <h1 class="text-3xl font-bold text-center mb-2">My Editing Services & Work Showcase</h1>
        <p class="text-slate-600 text-center mb-8 max-w-xl mx-auto">
            Specializing in AI-generated UGC, Talking Head avatars, short-form editing, and dynamic captions.
        </p>


        <!-- Academic & Client Disclaimer Notice -->
        <div class="bg-indigo-50 border border-indigo-200 text-indigo-800 rounded-lg p-4 mb-10 text-sm max-w-3xl mx-auto flex items-start gap-3">
            <span class="text-xl">ℹ️</span>
            <div>
                <strong class="font-semibold">Academic Demo & Client Privacy Note:</strong>
                <p class="text-xs text-indigo-700 mt-1">
                    Some AI UGC and Talking Head sample videos below use temporary placeholder media pending final client consent for public distribution. Designed exclusively for academic evaluation.
                </p>
            </div>
        </div>

        <!-- Vids-->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- grid grid-cols-1 md:grid-cols-3 = 1 column sa phone, 3 columns sa desktop -->
        <!--gumamit ng grid para maayos yung layout gamit man yung phone or desktop-->

            <!-- 1: AI Talking Heads -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition">
            <!-- Video Container / Embed Placeholder -->
                <div class="bg-slate-900 h-48 flex items-center justify-center text-white relative">
                    <span class="text-4xl">🤖</span>
                    <span class="absolute top-3 right-3 bg-indigo-600 text-xs px-2 py-1 rounded font-medium">AI Avatar</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">AI Talking Heads</h3>
                    <p class="text-slate-600 text-sm mb-4">AI-generated talking head videos built using Gemini for scripting, ChatGPT for visual asset generation, YouTube AI for animation, and CapCut for final assembly.</p>
                    <span class="inline-block bg-slate-100 text-slate-700 text-xs px-2.5 py-1 rounded font-medium">Gemini Scripting • ChatGPT Visuals • CapCut Editing</span>
                </div>
            </div>

            <!-- 2: AI UGC Content -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition">
                <div class="bg-slate-900 h-48 flex items-center justify-center text-white relative">
                    <span class="text-4xl">📱</span>
                    <span class="absolute top-3 right-3 bg-indigo-600 text-xs px-2 py-1 rounded font-medium">Shorts / TikTok</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">AI UGC Ad Edits</h3>
                    <p class="text-slate-600 text-sm mb-4">Short-form UGC promotional edits created with AI-assisted scripts and imagery, refined in CapCut with fast-paced cuts for TikTok and Reels.</p>
                    <span class="inline-block bg-slate-100 text-slate-700 text-xs px-2.5 py-1 rounded font-medium">AI UGC • Short-Form Ads • CapCut Pacing</span>
                </div>
            </div>

            <!-- 3: Dynamic Captioning & Visual FX -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-md transition">
                <div class="bg-slate-900 h-48 flex items-center justify-center text-white relative">
                    <span class="text-4xl">🎬</span>
                    <span class="absolute top-3 right-3 bg-indigo-600 text-xs px-2 py-1 rounded font-medium">Post-Production</span>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-lg text-slate-900 mb-1">Engaging Shorts Styling</h3>
                    <p class="text-slate-600 text-sm mb-4">Clean video packaging utilizing CapCut’s built-in auto-captioning tools combined with free stock SFX to maintain viewer engagement.</p>
                    <span class="inline-block bg-slate-100 text-slate-700 text-xs px-2.5 py-1 rounded font-medium">CapCut Auto-Captions • Free SFX Packaging • Reels / Shorts</span>
                </div>
            </div>

        </div>

    </main>

    <!-- footer-->
   <?php require_once 'footer.php'; ?>
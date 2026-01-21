<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nexus Gaming - Review Portal</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,600,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#050505] text-gray-200 font-sans antialiased selection:bg-purple-500 selection:text-white">
    
    <div class="fixed top-0 left-0 right-0 h-1 bg-gradient-to-r from-cyan-500 via-purple-500 to-amber-500 z-50 shadow-[0_0_20px_rgba(168,85,247,0.5)]"></div>

    <nav class="fixed top-0 w-full bg-[#050505]/80 backdrop-blur-md border-b border-white/5 z-40">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-gradient-to-br from-cyan-500 to-purple-600 rounded-lg animate-pulse"></div>
                <h1 class="text-2xl font-black tracking-tighter italic text-white">
                    NEXUS<span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-400">GAMING</span>
                </h1>
            </div>

            <div class="flex gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-6 py-2 rounded-full border border-purple-500/30 text-purple-400 hover:bg-purple-500 hover:text-white transition text-[10px] font-black uppercase tracking-widest shadow-[0_0_15px_rgba(168,85,247,0.2)]">
                            Console Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-6 py-2 rounded-full bg-white text-black hover:bg-cyan-400 hover:text-black transition text-[10px] font-black uppercase tracking-widest">
                            Login Admin
                        </a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <header class="pt-40 pb-20 px-6 text-center relative overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-purple-600/20 blur-[120px] rounded-full -z-10 pointer-events-none"></div>

        <h2 class="text-cyan-400 font-black tracking-[0.3em] uppercase text-xs mb-6 animate-pulse">Welcome to the Next Level</h2>
        <p class="text-5xl md:text-7xl font-black italic text-white mb-8 leading-tight">
            THE ULTIMATE <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-purple-500 to-amber-500">GAME INTELLIGENCE</span>
        </p>
    </header>

    <main class="max-w-7xl mx-auto px-6 pb-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <div class="group relative bg-[#111111]/60 backdrop-blur-xl rounded-3xl overflow-hidden border transition-all duration-500 hover:-translate-y-2 {{ $post->glow_color }}">
                
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ $post->gambar }}" alt="{{ $post->judul }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 opacity-80 group-hover:opacity-100">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-transparent to-transparent"></div>

                    <div class="absolute top-4 right-4 bg-black/80 backdrop-blur-md px-3 py-1 rounded-lg border border-white/10 shadow-lg flex items-center gap-1">
                        <span class="text-xs">⭐</span>
                        <span class="text-sm font-black text-white italic">{{ $post->rating }}/10</span>
                    </div>
                </div>

                <div class="p-8 relative">
                    <div class="flex gap-3 mb-4">
                        <span class="px-2 py-1 rounded bg-white/5 text-[9px] font-black uppercase tracking-widest text-cyan-400 border border-cyan-400/20">
                            {{ $post->platform }}
                        </span>
                        <span class="px-2 py-1 rounded bg-white/5 text-[9px] font-black uppercase tracking-widest text-purple-400 border border-purple-400/20">
                            {{ $post->genre }}
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold text-white leading-tight mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-white group-hover:to-gray-400 transition-colors">
                        {{ $post->judul }}
                    </h3>

                    <p class="text-gray-400 text-sm mb-6 leading-relaxed line-clamp-3">
                        "{{ $post->analisis_singkat }}"
                    </p>

                    <div class="flex items-center justify-between border-t border-white/5 pt-6">
                        <a href="{{ route('game.show', $post->slug) }}" class="text-[10px] font-black uppercase tracking-widest text-white hover:text-cyan-400 transition flex items-center gap-2 group/btn">
                            Read Full Review <span class="group-hover/btn:translate-x-1 transition-transform">→</span>
                        </a>
                        <span class="text-[10px] text-gray-600 font-mono uppercase">{{ $post->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="border-t border-white/5 bg-black py-12 text-center">
        <p class="text-gray-600 text-[10px] font-black uppercase tracking-[0.5em]">Nexus Gaming Systems © 2026</p>
    </footer>

</body>
</html>
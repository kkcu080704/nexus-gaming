<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $post->judul }} - Nexus Review</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.bunny.net/css?family=inter:400,600,800&display=swap" rel="stylesheet" />
</head>
<body class="bg-[#050505] text-gray-200 font-sans antialiased selection:bg-cyan-500 selection:text-black">

    <div class="fixed top-0 w-full h-1 bg-gradient-to-r from-cyan-500 via-purple-500 to-amber-500 z-50"></div>

    <nav class="fixed top-0 w-full bg-[#050505]/90 backdrop-blur-md z-40 border-b border-white/5">
        <div class="max-w-4xl mx-auto px-6 h-20 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white font-black italic tracking-tighter hover:text-cyan-400 transition">
                &larr; BACK TO NEXUS
            </a>
            <div class="bg-white/10 px-4 py-1 rounded-full border border-white/10 text-[10px] font-bold uppercase tracking-widest text-gray-400">
                Reading Mode
            </div>
        </div>
    </nav>

    <article class="pt-32 pb-24 max-w-4xl mx-auto px-6">
        
        <div class="text-center mb-12">
            <div class="flex justify-center gap-4 mb-6">
                <span class="px-3 py-1 bg-purple-500/20 text-purple-400 border border-purple-500/50 rounded text-[10px] font-black uppercase tracking-widest">
                    {{ $post->platform }}
                </span>
                <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 border border-cyan-500/50 rounded text-[10px] font-black uppercase tracking-widest">
                    {{ $post->genre }}
                </span>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-black italic text-white leading-tight mb-8">
                {{ $post->judul }}
            </h1>

            <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-[0_0_50px_rgba(168,85,247,0.15)] group">
                <img src="{{ $post->gambar }}" class="w-full h-auto object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-transparent"></div>
                
                <div class="absolute bottom-6 right-6 bg-black/80 backdrop-blur-xl px-6 py-3 rounded-2xl border border-white/20 shadow-2xl">
                    <p class="text-[10px] text-gray-400 font-black uppercase tracking-widest text-center mb-1">Metascore</p>
                    <p class="text-4xl font-black italic text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">
                        {{ $post->rating }}<span class="text-lg text-gray-600">/10</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
            <div class="md:col-span-3 space-y-8">
                <div class="border-l-2 border-purple-500 pl-4">
                    <p class="text-[10px] font-black uppercase text-gray-500 tracking-widest mb-1">Release Date</p>
                    <p class="text-white font-bold">{{ $post->created_at->format('d M Y') }}</p>
                </div>
                <div class="border-l-2 border-cyan-500 pl-4">
                    <p class="text-[10px] font-black uppercase text-gray-500 tracking-widest mb-1">Reviewer</p>
                    <p class="text-white font-bold">Nexus Editor</p>
                </div>
            </div>

            <div class="md:col-span-9">
                <div class="prose prose-invert prose-lg max-w-none 
                    prose-headings:font-black prose-headings:italic prose-headings:text-white
                    prose-p:text-gray-400 prose-p:leading-relaxed
                    prose-strong:text-cyan-400">
                    
                    <p class="text-xl text-white font-medium italic border-l-4 border-purple-500 pl-6 mb-10 leading-relaxed">
                        "{{ $post->analisis_singkat }}"
                    </p>

                    {!! $post->konten !!}
                </div>

                <div class="mt-16 pt-10 border-t border-white/10 flex justify-between items-center">
                    <p class="text-gray-600 text-xs">Share this review:</p>
                    <div class="flex gap-4">
                        <button class="w-10 h-10 rounded-full bg-white/5 hover:bg-cyan-500 hover:text-black transition flex items-center justify-center">
                            🔗
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </article>

</body>
</html>
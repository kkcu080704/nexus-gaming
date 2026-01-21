<x-app-layout>
    <div class="h-1 w-full bg-gradient-to-r from-cyan-500 via-purple-500 to-amber-500"></div>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-black italic text-2xl text-white tracking-tighter uppercase">
                NEXUS<span class="text-purple-500">CONSOLE</span> <span class="text-gray-600 text-sm font-medium ml-2">v2.0</span>
            </h2>
            <a href="{{ route('admin.game.create') }}" class="relative group px-6 py-2 bg-white text-black font-black text-xs uppercase tracking-widest rounded-full hover:bg-purple-500 hover:text-white transition-all duration-300 shadow-[0_0_15px_rgba(255,255,255,0.2)] hover:shadow-[0_0_20px_rgba(168,85,247,0.5)]">
                + New Game Review
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-[#050505] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="mb-8 p-4 bg-purple-500/10 border border-purple-500/50 text-purple-400 font-bold rounded-2xl flex items-center gap-3 backdrop-blur-md">
                    <span class="animate-pulse">👾</span> {{ session('success') }}
                </div>
            @endif

            <div class="bg-[#111111]/80 backdrop-blur-2xl overflow-hidden shadow-2xl border border-white/5 rounded-3xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-white/[0.02] border-b border-white/5">
                                <th class="px-8 py-6 text-gray-500 text-[10px] font-black uppercase tracking-[0.2em]">Game Title</th>
                                <th class="px-8 py-6 text-gray-500 text-[10px] font-black uppercase tracking-[0.2em]">Info</th>
                                <th class="px-8 py-6 text-gray-500 text-[10px] font-black uppercase tracking-[0.2em] text-center">Metascore</th>
                                <th class="px-8 py-6 text-gray-500 text-[10px] font-black uppercase tracking-[0.2em] text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/[0.03]">
                            @forelse($posts as $post)
                                <tr class="hover:bg-white/[0.02] transition-all group">
                                    <td class="px-8 py-6">
                                        <div class="text-white font-bold text-lg group-hover:text-purple-400 transition">{{ $post->judul }}</div>
                                        <div class="text-gray-600 text-[10px] uppercase font-bold mt-1 tracking-tighter italic">ID: {{ $post->slug }}</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col gap-1">
                                            <span class="text-cyan-400 text-[10px] font-black uppercase tracking-widest">{{ $post->platform }}</span>
                                            <span class="text-gray-500 text-[10px] font-bold">{{ $post->genre }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 text-center">
                                        @php
                                            $glow = 'shadow-[0_0_15px_rgba(34,211,238,0.4)] text-cyan-400 border-cyan-400/30';
                                            if($post->rating >= 9) $glow = 'shadow-[0_0_15px_rgba(251,191,36,0.4)] text-amber-400 border-amber-400/30';
                                            elseif($post->rating >= 7) $glow = 'shadow-[0_0_15px_rgba(168,85,247,0.4)] text-purple-400 border-purple-500/30';
                                        @endphp
                                        <div class="inline-block bg-black border {{ $glow }} px-4 py-1.5 rounded-lg font-black italic text-sm">
                                            ⭐ {{ $post->rating }}/10
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="flex justify-end items-center gap-6">
                                            <a href="{{ route('admin.game.edit', $post->id) }}" class="text-white/50 hover:text-cyan-400 font-black text-[10px] uppercase tracking-widest transition-all">
                                                Modify
                                            </a>
                                            <form action="{{ route('admin.game.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Initiate deletion of this game data?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-white/50 hover:text-red-500 font-black text-[10px] uppercase tracking-widest transition-all">
                                                    Terminate
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-8 py-24 text-center">
                                        <div class="text-4xl mb-4">🛸</div>
                                        <p class="text-gray-600 font-black uppercase tracking-[0.3em] text-xs">No Data Detected in Nexus Database.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-[9px] text-gray-800 font-black uppercase tracking-[0.8em]">Nexus Gaming Authority • Secured Access</p>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <div class="py-12 bg-[#050505] min-h-screen text-white">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 border-l-4 border-purple-500 pl-4">
                <h2 class="font-black italic text-3xl uppercase tracking-tighter">Initialize New Review</h2>
                <p class="text-gray-500 text-sm tracking-widest uppercase">Enter Game Data into Nexus Core</p>
            </div>

            <div class="bg-[#111111] p-8 border border-white/10 rounded-3xl shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/20 blur-3xl rounded-full pointer-events-none"></div>

                <form action="{{ route('admin.game.store') }}" method="POST" class="space-y-6 relative z-10">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-cyan-400 text-[10px] font-black uppercase tracking-widest mb-2">Game Title</label>
                            <input type="text" name="judul" class="w-full bg-black border-white/10 rounded-xl text-white focus:border-cyan-400 focus:ring-0 transition" placeholder="e.g. Cyberpunk 2077" required>
                        </div>
                        
                        <div>
                            <label class="block text-cyan-400 text-[10px] font-black uppercase tracking-widest mb-2">Platform</label>
                            <input type="text" name="platform" class="w-full bg-black border-white/10 rounded-xl text-white focus:border-cyan-400 focus:ring-0 transition" placeholder="PC / PS5 / Xbox" required>
                        </div>

                        <div>
                            <label class="block text-purple-400 text-[10px] font-black uppercase tracking-widest mb-2">Genre</label>
                            <input type="text" name="genre" class="w-full bg-black border-white/10 rounded-xl text-white focus:border-purple-500 focus:ring-0 transition" placeholder="Action RPG" required>
                        </div>

                        <div>
                            <label class="block text-amber-400 text-[10px] font-black uppercase tracking-widest mb-2">Metascore (1-10)</label>
                            <input type="number" name="rating" min="1" max="10" class="w-full bg-black border-white/10 rounded-xl text-white focus:border-amber-400 focus:ring-0 transition" placeholder="Score 1-10" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-[10px] font-black uppercase tracking-widest mb-2">Cover Image URL</label>
                        <input type="url" name="gambar" class="w-full bg-black border-white/10 rounded-xl text-gray-300 focus:border-white focus:ring-0 transition" placeholder="https://..." required>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-[10px] font-black uppercase tracking-widest mb-2">Short Brief (Overview)</label>
                        <textarea name="analisis_singkat" rows="2" class="w-full bg-black border-white/10 rounded-xl text-gray-300 focus:border-white focus:ring-0 transition" required></textarea>
                    </div>

                    <div>
                        <label class="block text-gray-400 text-[10px] font-black uppercase tracking-widest mb-2">Full Analysis Content</label>
                        <textarea name="konten" rows="6" class="w-full bg-black border-white/10 rounded-xl text-gray-300 focus:border-white focus:ring-0 transition" required></textarea>
                    </div>

                    <div class="flex justify-end gap-6 pt-6 border-t border-white/5">
                        <a href="{{ route('dashboard') }}" class="px-6 py-3 text-gray-500 text-xs font-black uppercase tracking-widest hover:text-white transition">Cancel</a>
                        <button type="submit" class="px-8 py-3 bg-gradient-to-r from-cyan-500 to-purple-600 rounded-xl text-white font-black text-xs uppercase tracking-widest hover:shadow-[0_0_20px_rgba(168,85,247,0.5)] transition transform hover:scale-105">
                            Upload to Nexus
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
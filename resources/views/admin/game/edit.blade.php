<x-app-layout>
    <div class="py-12 bg-[#050505] min-h-screen text-white">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 border-l-4 border-amber-400 pl-4">
                <h2 class="font-black italic text-3xl uppercase tracking-tighter text-amber-400">Modify Data</h2>
                <p class="text-gray-500 text-sm tracking-widest uppercase">Editing: {{ $post->judul }}</p>
            </div>

            <div class="bg-[#111111] p-8 border border-amber-400/30 rounded-3xl shadow-2xl relative">
                <form action="{{ route('admin.game.update', $post->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-gray-500 text-[10px] font-black uppercase tracking-widest mb-2">Game Title</label>
                            <input type="text" name="judul" value="{{ $post->judul }}" class="w-full bg-black border-white/10 rounded-xl text-white focus:border-amber-400 focus:ring-0" required>
                        </div>
                        <div>
                            <label class="block text-gray-500 text-[10px] font-black uppercase tracking-widest mb-2">Platform</label>
                            <input type="text" name="platform" value="{{ $post->platform }}" class="w-full bg-black border-white/10 rounded-xl text-white focus:border-amber-400 focus:ring-0" required>
                        </div>
                        <div>
                            <label class="block text-gray-500 text-[10px] font-black uppercase tracking-widest mb-2">Genre</label>
                            <input type="text" name="genre" value="{{ $post->genre }}" class="w-full bg-black border-white/10 rounded-xl text-white focus:border-amber-400 focus:ring-0" required>
                        </div>
                        <div>
                            <label class="block text-amber-400 text-[10px] font-black uppercase tracking-widest mb-2">Metascore (Current: {{ $post->rating }})</label>
                            <input type="number" name="rating" value="{{ $post->rating }}" min="1" max="10" class="w-full bg-black border-white/10 rounded-xl text-white focus:border-amber-400 focus:ring-0" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-500 text-[10px] font-black uppercase tracking-widest mb-2">Cover Image URL</label>
                        <input type="url" name="gambar" value="{{ $post->gambar }}" class="w-full bg-black border-white/10 rounded-xl text-gray-300 focus:border-amber-400 focus:ring-0" required>
                    </div>

                    <div>
                        <label class="block text-gray-500 text-[10px] font-black uppercase tracking-widest mb-2">Short Brief</label>
                        <textarea name="analisis_singkat" rows="2" class="w-full bg-black border-white/10 rounded-xl text-gray-300 focus:border-amber-400 focus:ring-0" required>{{ $post->analisis_singkat }}</textarea>
                    </div>

                    <div>
                        <label class="block text-gray-500 text-[10px] font-black uppercase tracking-widest mb-2">Content</label>
                        <textarea name="konten" rows="6" class="w-full bg-black border-white/10 rounded-xl text-gray-300 focus:border-amber-400 focus:ring-0" required>{{ $post->konten }}</textarea>
                    </div>

                    <div class="flex justify-end gap-6 pt-6">
                        <a href="{{ route('dashboard') }}" class="px-6 py-3 text-gray-500 text-xs font-black uppercase tracking-widest hover:text-white">Abort</a>
                        <button type="submit" class="px-8 py-3 bg-amber-500 text-black rounded-xl font-black text-xs uppercase tracking-widest hover:bg-white transition shadow-[0_0_20px_rgba(245,158,11,0.5)]">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
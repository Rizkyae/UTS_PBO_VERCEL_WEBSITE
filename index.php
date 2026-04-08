<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD POLIJE - Bisnis Digital</title>
    
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-image: 
                linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(30, 58, 138, 0.85) 50%, rgba(0, 0, 0, 0.95) 100%),
                url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }
        
        .glass-panel {
            background: rgba(15, 23, 42, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), inset 0 1px 1px rgba(255, 255, 255, 0.1);
        }

        .glass-card {
            background: linear-gradient(145deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.01) 100%);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .glass-card:hover {
            transform: translateY(-5px);
            border-color: rgba(250, 204, 21, 0.3);
            box-shadow: 0 10px 30px -10px rgba(250, 204, 21, 0.2);
        }

        .modern-input {
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }
        
        .modern-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.3);
            background: rgba(0, 0, 0, 0.6);
        }

        .glow-text-polije {
            background: linear-gradient(to right, #60a5fa, #facc15);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 30px rgba(96, 165, 250, 0.3);
        }

        /* Menyembunyikan konten tab yang tidak aktif */
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="text-slate-200 antialiased py-10">

    <div class="max-w-6xl mx-auto px-6 relative z-10">
        
        <header class="mb-12 text-center">
            <div class="bg-animate"></div> 
            <div class="inline-block mb-3 px-4 py-1 rounded-full border border-blue-500/30 bg-blue-500/10 text-blue-300 text-sm font-semibold tracking-widest uppercase">
                Politeknik Negeri Jember
            </div>
            <h1 class="text-6xl font-extrabold glow-text-polije mb-3 tracking-tight">
                SIAKAD <span class="text-white">V2.0</span>
            </h1>
            <p class="text-slate-400 font-light text-lg">Sistem Informasi Akademik • Bisnis Digital</p>
        </header>

        <nav class="flex flex-wrap justify-center gap-4 mb-10" id="nav-tabs">
            <button onclick="switchTab('mahasiswa')" id="btn-mahasiswa" class="px-7 py-3.5 rounded-2xl font-semibold text-sm tracking-wide transition-all duration-300 bg-blue-600 text-white shadow-[0_0_25px_rgba(37,99,235,0.6)] scale-105">👨‍🎓 Manajemen Mahasiswa</button>
            <button onclick="switchTab('matakuliah')" id="btn-matakuliah" class="px-7 py-3.5 rounded-2xl font-semibold text-sm tracking-wide transition-all duration-300 glass-panel text-slate-300 hover:bg-white/10 hover:text-white">📚 Mata Kuliah</button>
            <button onclick="switchTab('nilai')" id="btn-nilai" class="px-7 py-3.5 rounded-2xl font-semibold text-sm tracking-wide transition-all duration-300 glass-panel text-slate-300 hover:bg-white/10 hover:text-white">📝 Input Nilai</button>
            <button onclick="switchTab('laporan')" id="btn-laporan" class="px-7 py-3.5 rounded-2xl font-semibold text-sm tracking-wide transition-all duration-300 glass-panel text-slate-300 hover:bg-white/10 hover:text-white">🖨️ Cetak KHS & IPK</button>
        </nav>

        <main class="glass-panel rounded-[2rem] p-10">
            
            <div id="tab-mahasiswa" class="tab-content active">
                <div class="flex items-center justify-between mb-8 border-b border-white/10 pb-4">
                    <h2 class="text-3xl font-bold text-blue-400">Database Mahasiswa</h2>
                    <span class="text-sm bg-blue-500/20 text-blue-300 py-1 px-3 rounded-lg border border-blue-500/30">Frontend UI Only</span>
                </div>
                
                <form onsubmit="event.preventDefault(); alert('Ini versi HTML Statis, proses simpan data membutuhkan JavaScript LocalStorage atau Backend API.');" class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                    <input type="text" name="nim" placeholder="NIM (Misal: E322...)" required class="modern-input rounded-xl p-4">
                    <input type="text" name="nama" placeholder="Nama Lengkap" required class="modern-input rounded-xl p-4">
                    <input type="email" name="email" placeholder="Email Mahasiswa" required class="modern-input rounded-xl p-4">
                    <input type="text" name="jurusan" placeholder="Program Studi" value="Bisnis Digital" required class="modern-input rounded-xl p-4">
                    <button type="submit" class="col-span-1 md:col-span-2 bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-bold py-4 rounded-xl shadow-[0_0_20px_rgba(37,99,235,0.3)] transition-all">
                        + Daftarkan Mahasiswa Baru
                    </button>
                </form>

                <h3 class="text-xl font-semibold mb-6 text-slate-300">Contoh Tampilan Data Mahasiswa:</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="mahasiswa-list">
                    <div class="glass-card p-5 rounded-2xl flex flex-col justify-between relative group">
                        <button onclick="alert('Fungsi hapus dinonaktifkan di versi statis')" class="absolute top-4 right-4 text-slate-500 hover:text-red-500 transition-colors" title="Hapus Mahasiswa">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                        <div class="pr-6">
                            <span class="text-xs font-bold text-amber-400 tracking-wider mb-1 block">E32240001</span>
                            <h4 class="text-lg font-bold text-white mb-2">Contoh Nama Mahasiswa</h4>
                        </div>
                        <div class="mt-4 flex justify-between items-center border-t border-white/10 pt-4">
                            <span class="text-sm text-slate-400">Mahasiswa</span>
                            <span class="h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_8px_rgba(52,211,153,0.8)]"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-matakuliah" class="tab-content">
                <h2 class="text-3xl font-bold mb-8 text-amber-400 border-b border-white/10 pb-4">Kurikulum Mata Kuliah</h2>
                <form onsubmit="event.preventDefault();" class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <input type="text" name="kode" placeholder="Kode MK (Contoh: BD101)" required class="modern-input rounded-xl p-4 focus:border-amber-500">
                    <input type="text" name="nama_mk" placeholder="Nama Mata Kuliah" required class="modern-input rounded-xl p-4 focus:border-amber-500">
                    <input type="number" name="sks" placeholder="Jumlah SKS" required min="1" max="6" class="modern-input rounded-xl p-4 focus:border-amber-500">
                    <button type="submit" class="col-span-1 md:col-span-3 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-400 hover:to-orange-400 text-slate-900 font-bold py-4 rounded-xl shadow-[0_0_20px_rgba(245,158,11,0.3)] transition-all">
                        + Tambah Mata Kuliah
                    </button>
                </form>

                <h3 class="text-xl font-semibold mb-6 text-slate-300">Contoh Tampilan Mata Kuliah:</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="glass-card p-5 rounded-2xl flex items-center justify-between relative group">
                        <div class="pr-10">
                            <h4 class="font-bold text-xl text-amber-300">BD101</h4>
                            <p class="text-slate-300 mt-1">Pengantar Bisnis Digital</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-black/50 px-4 py-2 rounded-lg border border-white/10">
                                <span class="text-lg font-bold text-white">3</span>
                                <span class="text-xs text-slate-400 ml-1">SKS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-nilai" class="tab-content">
                <h2 class="text-3xl font-bold mb-8 text-indigo-400 border-b border-white/10 pb-4">Sistem Input Nilai</h2>
                <form onsubmit="event.preventDefault();" class="space-y-6 max-w-2xl mx-auto glass-card p-8 rounded-3xl">
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Pilih Mahasiswa</label>
                        <select name="nim" required class="w-full modern-input rounded-xl p-4 appearance-none focus:border-indigo-500">
                            <option value="e1" class="bg-slate-900">E32240001 - Contoh Mahasiswa</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Pilih Mata Kuliah</label>
                        <select name="kode_mk" required class="w-full modern-input rounded-xl p-4 appearance-none focus:border-indigo-500">
                            <option value="mk1" class="bg-slate-900">BD101 - Pengantar Bisnis Digital (3 SKS)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-300 mb-2">Nilai Akhir (0-100)</label>
                        <input type="number" name="nilai" required min="0" max="100" placeholder="Contoh: 85" class="w-full modern-input rounded-xl p-4 focus:border-indigo-500 text-2xl font-bold text-center">
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-bold py-4 rounded-xl shadow-[0_0_20px_rgba(99,102,241,0.4)] transition-all mt-4">
                        Simpan Nilai
                    </button>
                </form>
            </div>

            <div id="tab-laporan" class="tab-content">
                <h2 class="text-3xl font-bold mb-8 text-emerald-400 border-b border-white/10 pb-4">Generate KHS & Transkrip</h2>
                <div class='text-center py-20'>
                    <p class='text-slate-500 text-lg'>Tampilan Statis: Data KHS akan dirender oleh JavaScript/Backend di sini.</p>
                </div>
            </div>

        </main>
        
        <footer class="mt-12 text-center text-sm text-slate-500">
            <p>&copy; 2026 SIAKAD V2.0 - Politeknik Negeri Jember. All rights reserved.</p>
        </footer>
    </div>

    <script>
        function switchTab(tabId) {
            // Sembunyikan semua tab content
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Reset style semua tombol navigasi
            const buttons = document.querySelectorAll('#nav-tabs button');
            buttons.forEach(btn => {
                btn.className = 'px-7 py-3.5 rounded-2xl font-semibold text-sm tracking-wide transition-all duration-300 glass-panel text-slate-300 hover:bg-white/10 hover:text-white';
            });

            // Tampilkan tab yang dipilih
            document.getElementById('tab-' + tabId).classList.add('active');

            // Beri style aktif pada tombol yang ditekan berdasarkan tab
            const activeBtn = document.getElementById('btn-' + tabId);
            if(tabId === 'mahasiswa') {
                activeBtn.className = 'px-7 py-3.5 rounded-2xl font-semibold text-sm tracking-wide transition-all duration-300 bg-blue-600 text-white shadow-[0_0_25px_rgba(37,99,235,0.6)] scale-105';
            } else if(tabId === 'matakuliah') {
                activeBtn.className = 'px-7 py-3.5 rounded-2xl font-semibold text-sm tracking-wide transition-all duration-300 bg-amber-500 text-slate-900 shadow-[0_0_25px_rgba(245,158,11,0.6)] scale-105';
            } else if(tabId === 'nilai') {
                activeBtn.className = 'px-7 py-3.5 rounded-2xl font-semibold text-sm tracking-wide transition-all duration-300 bg-indigo-500 text-white shadow-[0_0_25px_rgba(99,102,241,0.6)] scale-105';
            } else if(tabId === 'laporan') {
                activeBtn.className = 'px-7 py-3.5 rounded-2xl font-semibold text-sm tracking-wide transition-all duration-300 bg-emerald-500 text-white shadow-[0_0_25px_rgba(16,185,129,0.6)] scale-105';
            }
        }
    </script>
</body>
</html>

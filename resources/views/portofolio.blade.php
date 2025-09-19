<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bahtera Creative - Portofolio</title>
	<!-- Tailwind CDN -->
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
	<style>
		body { font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; }
	</style>
</head>
<body class="bg-black text-white">
	<!-- NAVBAR (same as home) -->
	<header class="w-full">
		<div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
			<div class="h-10 flex items-center">
				<img src="{{ asset('img/logo-bahtera.png') }}" alt="Bahtera Creative" class="h-12 w-auto">
			</div>
			<button id="mobileMenuBtn" aria-label="Menu" class="text-white/90 hover:text-white">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
				</svg>
			</button>
		</div>
	</header>

	<!-- Mobile Drawer & Overlay -->
	<div id="mobileOverlay" class="fixed inset-0 bg-black/50 hidden z-40"></div>
	<aside id="mobileDrawer" class="fixed top-0 right-0 h-full w-72 max-w-[85vw] bg-white text-black shadow-xl transform translate-x-full transition-transform duration-300 z-50">
		<div class="flex items-center gap-3 px-6" style="height:64px;">
			<button id="mobileCloseBtn" aria-label="Tutup" class="p-1">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
				</svg>
			</button>
			<h3 class="text-xl font-semibold">Menu</h3>
		</div>
		<nav class="px-6 pb-6">
			<ul class="space-y-6">
				<li><a href="/" class="block font-medium text-base">Home</a></li>
				<li><a href="/about" class="block font-medium text-base">About</a></li>
				<li><a href="/#layanan" class="block font-medium text-base">Layanan Kami</a></li>
				<li><a href="/portofolio" class="block font-medium text-base">Portofolio</a></li>
				<li><a href="#footer" class="block font-medium text-base">Kontak</a></li>
			</ul>
		</nav>
	</aside>

	<script>
		(function(){
			var btn = document.getElementById('mobileMenuBtn');
			var drawer = document.getElementById('mobileDrawer');
			var overlay = document.getElementById('mobileOverlay');
			var closeBtn = document.getElementById('mobileCloseBtn');
			function openDrawer(){
				drawer.classList.remove('translate-x-full');
				overlay.classList.remove('hidden');
			}
			function closeDrawer(){
				drawer.classList.add('translate-x-full');
				overlay.classList.add('hidden');
			}
			if(btn){ btn.addEventListener('click', openDrawer); }
			if(closeBtn){ closeBtn.addEventListener('click', closeDrawer); }
			if(overlay){ overlay.addEventListener('click', closeDrawer); }
			Array.from(document.querySelectorAll('#mobileDrawer a')).forEach(function(a){
				a.addEventListener('click', closeDrawer);
			});
		})();
	</script>

	<!-- PAGE HEADER -->
	<section class="relative">
		<div class="relative max-w-7xl mx-auto px-6 pt-10 pb-10 md:pt-14 md:pb-12 flex flex-col items-center text-center">
			<h1 class="text-2xl md:text-3xl font-extrabold">Our
				<span class="block">Project Showcases</span>
			</h1>
			<!-- Filter chips -->
			<div class="mt-6 flex flex-wrap items-center justify-center gap-3">
				<button class="filter-btn px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-sm hover:bg-white/15" data-filter="all">All</button>
				<button class="filter-btn px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-sm hover:bg-white/15" data-filter="logo">Logo</button>
				<button class="filter-btn px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-sm hover:bg-white/15" data-filter="poster">Poster</button>
				<button class="filter-btn px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-sm hover:bg-white/15" data-filter="social-media">Social Media</button>
			</div>
		</div>
	</section>

	<!-- LIST PORTFOLIO -->
	<section>
		<div class="max-w-7xl mx-auto px-6 pb-16 md:pb-20 space-y-8">
			<!-- Card 1 -->
			<article class="rounded-lg overflow-hidden shadow-[0_2px_0_0_rgba(255,255,255,0.06)] bg-[#151515]" data-category="logo">
				<div class="grid md:grid-cols-[1fr_1fr]">
					<div class="relative min-h-[180px] h-full">
						<img src="{{ asset('img/portfolio1.png') }}" alt="Project 1" class="w-full h-full object-cover">
					</div>
					<div class="bg-white/10 p-6">
						<h3 class="text-base md:text-lg font-semibold">Title</h3>
						<p class="text-sm mt-2 text-white/80">bla bla bla ble ble ble</p>
					</div>
				</div>
			</article>

			<!-- Card 2 -->
			<article class="rounded-lg overflow-hidden shadow-[0_2px_0_0_rgba(255,255,255,0.06)] bg-[#151515]" data-category="poster">
				<div class="grid md:grid-cols-[1fr_1fr]">
					<div class="bg-white/10 p-6 order-2 md:order-1">
						<h3 class="text-base md:text-lg font-semibold">Title</h3>
						<p class="text-sm mt-2 text-white/80">bla bla bla ble ble ble</p>
					</div>
					<div class="order-1 md:order-2 p-0 flex items-center justify-center min-h-[180px]">
						<img src="{{ asset('img/portfolio2.png') }}" alt="Project 2" class="w-full object-cover">
					</div>
				</div>
			</article>

			<!-- Card 3 -->
			<article class="rounded-lg overflow-hidden shadow-[0_2px_0_0_rgba(255,255,255,0.06)] bg-[#151515]" data-category="social-media">
				<div class="grid md:grid-cols-[1fr_1fr]">
					<div class="p-0 flex items-center justify-center min-h-[180px]">
						<img src="{{ asset('img/portfolio3.png') }}" alt="Project 3" class="w-full object-cover">
					</div>
					<div class="bg-white/10 p-6">
						<h3 class="text-base md:text-lg font-semibold">Title</h3>
						<p class="text-sm mt-2 text-white/80">bla bla bla ble ble ble</p>
					</div>
				</div>
			</article>
		</div>
	</section>

	<!-- FOOTER (same as home) -->
	<footer id="footer" class="bg-[#0f0f0f] border-t border-white/10">
		<div class="max-w-7xl mx-auto px-6 py-12 md:py-16">
			<div class="grid md:grid-cols-[auto_1fr] gap-10 md:gap-16 items-start">
				<div class="space-y-4">
					<img src="{{ asset('img/logo-bahtera.png') }}" alt="Bahtera Creative" class="h-12 w-auto">
				</div>
				<div class="grid sm:grid-cols-2 gap-y-6 gap-x-10">
					<div>
						<p class="text-white/60">Lokasi</p>
						<p class="mt-1">Ploso Kuning II, Minomartani, Kec. Ngaglik,<br>Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
					</div>
					<div>
						<p class="text-white/60">Nomor</p>
						<p class="mt-1">01929129139291</p>
					</div>
					<div>
						<p class="text-white/60">Email</p>
						<p class="mt-1">bahteradinawa03@gmail.com</p>
					</div>
					<div>
						<p class="text-white/60">Sosial Media</p>
						<div class="mt-2 flex items-center gap-4">
							<img src="{{ asset('img/wa.png') }}" alt="WhatsApp" class="h-6 w-6 object-contain">
							<img src="{{ asset('img/ig.png') }}" alt="Instagram" class="h-6 w-6 object-contain">
							<img src="{{ asset('img/tt.png') }}" alt="TikTok" class="h-6 w-6 object-contain">
						</div>
					</div>
				</div>
			</div>
			<hr class="mt-10 border-white/10">
			<p class="text-center text-white/40 text-sm mt-6">© {{ date('Y') }} Bahtera Creative</p>
		</div>
	</footer>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const buttons = document.querySelectorAll(".filter-btn");
			const cards = document.querySelectorAll("article[data-category]");

			buttons.forEach(btn => {
				btn.addEventListener("click", () => {
					const filter = btn.getAttribute("data-filter");

					cards.forEach(card => {
						const category = card.getAttribute("data-category");
						if (filter === "all" || category === filter) {
							card.style.display = "block"; // tampilkan
						} else {
							card.style.display = "none"; // sembunyikan
						}
					});

					// highlight tombol aktif
					buttons.forEach(b => b.classList.remove("bg-white/30"));
					btn.classList.add("bg-white/30");
				});
			});
		});
	</script>
</body>
</html>

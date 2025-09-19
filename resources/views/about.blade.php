<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bahtera Creative - About</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
	<style>
		body { font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; }
		.reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s ease; }
  		.reveal.active { opacity: 1; transform: translateY(0); }
	</style>
</head>
<body class="bg-black text-white">
	<!-- NAVBAR -->
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
			function openDrawer(){ drawer.classList.remove('translate-x-full'); overlay.classList.remove('hidden'); }
			function closeDrawer(){ drawer.classList.add('translate-x-full'); overlay.classList.add('hidden'); }
			if(btn){ btn.addEventListener('click', openDrawer); }
			if(closeBtn){ closeBtn.addEventListener('click', closeDrawer); }
			if(overlay){ overlay.addEventListener('click', closeDrawer); }
		})();
	</script>

	<!-- HEADER -->
	<section class="relative">
		<div class="relative max-w-7xl mx-auto px-6 pt-12 pb-6 md:pt-16 md:pb-8 text-center">
			<h1 class="text-3xl md:text-4xl font-extrabold">About</h1>
		</div>
	</section>

	<!-- PROFIL BISNIS -->
	<section id="profil">
		<div class="max-w-7xl mx-auto px-6 py-14 md:py-20 grid md:grid-cols-2 gap-10 md:gap-16 items-center reveal">
			<div>
				<h2 class="text-2xl md:text-3xl font-extrabold mb-5">Profil Bisnis</h2>
				<p class="text-sm md:text-base leading-6 md:leading-7 text-white/85">
					Bahtera Creative adalah sebuah agency yang berada di Kota Sleman kami menyukai produk UMKM dan Branding. Pengalaman kami dalam jasa branding seperti pembuatan logo, packaging, content sosial media dan jasa konsultasi mengenai branding sebuah perusahaan atau produk ukm telah menimbulkan rasa ingin mengembangkan dan membantu ukm yang belum tau akan branding secara digital. Tim creative kami selalu mencari ide yang terbaik sehingga banyak perusahaan dan sektor ukm yang terbantu dan berhasil mencapai hasil yang diinginkan setelah kami bantu dalam hal rebranding.
				</p>
			</div>
			<div class="flex justify-center">
				<!-- Gambar profil, ganti file ini di public/img/profil-bisnis.png -->
				<img src="{{ asset('img/bahtera.png') }}" alt="Profil Bisnis" class="w-[340px] h-[420px] object-cover bg-white/5 rounded">
			</div>
		</div>
	</section>

	<!-- TEAM SLIDER -->
	<section>
		<div class="relative max-w-7xl mx-auto px-6 pt-12 pb-6 md:pt-16 md:pb-8 text-center reveal">
			<h1 class="text-3xl md:text-4xl font-extrabold">Team</h1>
		</div>
		<div class="max-w-7xl mx-auto px-6 pb-16 md:pb-20 reveal">
			<div class="overflow-x-hidden py-6 md:py-8">
				<!-- Track -->
				<div id="teamTrack" class="grid grid-flow-col auto-cols-[100%] md:auto-cols-[31.333%] gap-8">
					
					<!-- Card 1 -->
					<div class="team-card rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden grid grid-rows-[auto_1fr]">
						<div class="bg-black h-[200px] md:h-[200px] flex items-center justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
						</div>
						<div class="bg-[#d9d9d9] p-6 h-full text-black">
							<h3 class="text-2xl md:text-3xl font-extrabold">Name 1</h3>
							<p class="text-black/70 font-semibold">Position</p>
							<p class="text-sm mt-3 text-black/70 leading-6">Description Description Description</p>
						</div>
					</div>

					<!-- Card 2 -->
					<div class="team-card rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden grid grid-rows-[auto_1fr]">
						<div class="bg-black h-[200px] flex items-center justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
						</div>
						<div class="bg-[#d9d9d9] p-6 h-full text-black">
							<h3 class="text-2xl md:text-3xl font-extrabold">Name 2</h3>
							<p class="text-black/70 font-semibold">Position</p>
							<p class="text-sm mt-3 text-black/70 leading-6">Description Description Description</p>
						</div>
					</div>

					<!-- Card 3 -->
					<div class="team-card rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden grid grid-rows-[auto_1fr]">
						<div class="bg-black h-[200px] flex items-center justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
						</div>
						<div class="bg-[#d9d9d9] p-6 h-full text-black">
							<h3 class="text-2xl md:text-3xl font-extrabold">Name 3</h3>
							<p class="text-black/70 font-semibold">Position</p>
							<p class="text-sm mt-3 text-black/70 leading-6">Description Description Description</p>
						</div>
					</div>

					<!-- Card 4 -->
					<div class="team-card rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden grid grid-rows-[auto_1fr]">
						<div class="bg-black h-[200px] flex items-center justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
						</div>
						<div class="bg-[#d9d9d9] p-6 h-full text-black">
							<h3 class="text-2xl md:text-3xl font-extrabold">Name 4</h3>
							<p class="text-black/70 font-semibold">Position</p>
							<p class="text-sm mt-3 text-black/70 leading-6">Description Description Description</p>
						</div>
					</div>

					<!-- Card 5 -->
					<div class="team-card rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden grid grid-rows-[auto_1fr]">
						<div class="bg-black h-[200px] flex items-center justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white/80" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
						</div>
						<div class="bg-[#d9d9d9] p-6 h-full text-black">
							<h3 class="text-2xl md:text-3xl font-extrabold">Name 5</h3>
							<p class="text-black/70 font-semibold">Position</p>
							<p class="text-sm mt-3 text-black/70 leading-6">Description Description Description</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<script>
		(function(){
			var track = document.getElementById('teamTrack');
			var interval = null;

			function getShift(){
				var first = track.children[0];
				if(!first) return 0;
				var rect = first.getBoundingClientRect();
				var style = window.getComputedStyle(track);
				var gap = parseFloat(style.columnGap || style.gap || '0') || 0;
				return rect.width + gap;
			}

			function step(){
				var shift = getShift();
				track.style.transition = 'transform 600ms ease';
				track.style.transform = 'translateX(' + (-shift) + 'px)';
				var onEnd = function(){
					track.style.transition = 'none';
					track.style.transform = 'translateX(0)';
					if(track.children.length){ track.appendChild(track.children[0]); }
					track.removeEventListener('transitionend', onEnd);
				};
				track.addEventListener('transitionend', onEnd);
			}

			function start(){ stop(); interval = setInterval(step, 2500); }
			function stop(){ if(interval){ clearInterval(interval); interval = null; } }

			var wrapper = track.parentElement;
			wrapper.addEventListener('mouseenter', stop);
			wrapper.addEventListener('mouseleave', start);

			start();
		})();
	</script>

	<!-- FOOTER -->
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
							<a href="#" target="_blank"><img src="{{ asset('img/wa.png') }}" alt="WhatsApp" class="h-6 w-6 object-contain"></a>
							<a href="#" target="_blank"><img src="{{ asset('img/ig.png') }}" alt="Instagram" class="h-6 w-6 object-contain"></a>
							<a href="#" target="_blank"><img src="{{ asset('img/tt.png') }}" alt="TikTok" class="h-6 w-6 object-contain"></a>
						</div>
					</div>
				</div>
			</div>
			<hr class="mt-10 border-white/10">
			<p class="text-center text-white/40 text-sm mt-6">© {{ date('Y') }} Bahtera Creative</p>
		</div>
	</footer>

	<script>
		document.addEventListener("DOMContentLoaded", () => {
			const reveals = document.querySelectorAll(".reveal");
			const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
				entry.target.classList.add("active");
				observer.unobserve(entry.target); // animasi hanya sekali
				}
			});
			}, { threshold: 0.15 });

			reveals.forEach(r => observer.observe(r));
		});
	</script>

</body>
</html>



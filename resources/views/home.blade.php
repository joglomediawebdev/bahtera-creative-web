<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bahtera Creative - Home</title>
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
	<!-- NAVBAR -->
	<header class="w-full">
		<div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
			<!-- Logo kiri -->
			<div class="h-10 flex items-center">
				<img src="{{ asset('img/logo-bahtera.png') }}" alt="Bahtera Creative" class="h-12 w-auto">
			</div>
			<!-- Hamburger kanan -->
			<button id="mobileMenuBtn" aria-label="Menu" class="text-white/90 hover:text-white">
				<!-- Icon hamburger -->
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
				<li><a href="#" class="block font-medium text-base">Home</a></li>
				<li><a href="#profil" class="block font-medium text-base">About</a></li>
				<li><a href="#layanan" class="block font-medium text-base">Layanan Kami</a></li>
				<li><a href="#portofolio" class="block font-medium text-base">Portofolio</a></li>
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
			// close on link click
			Array.from(document.querySelectorAll('#mobileDrawer a')).forEach(function(a){
				a.addEventListener('click', closeDrawer);
			});
		})();
	</script>

	<!-- HERO / WELCOME -->
	<section class="relative">
		<div class="relative max-w-7xl mx-auto px-6 pt-16 pb-24 md:pt-24 md:pb-32 flex flex-col items-center text-center">
			<!-- Background splash behind text -->
			<img src="{{ asset('img/abstract_splash.png') }}" alt="Welcome Graphic" class="pointer-events-none select-none absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 w-[860px] max-w-[92vw] -z-10" draggable="false">
			<h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold">Welcome to Bahtera Creative</h1>
			<p class="mt-3 md:mt-4 text-white/80 max-w-2xl">Bersama kami menuju branding yang kuat dan berkesan.</p>
			<a href="#layanan" class="mt-8 inline-flex items-center justify-center rounded-full border border-white/30 bg-white/10 hover:bg-white/20 transition px-6 py-3 text-sm md:text-base">Layanan Kami</a>
		</div>
		<!-- garis dekorasi tipis di kanan bawah hero (opsional) -->
		<div class="absolute right-0 bottom-0 w-48 h-px bg-white/10"></div>
	</section>

	<!-- PROFIL BISNIS -->
	<section id="profil" class="bg-[#181818]">
		<div class="max-w-7xl mx-auto px-6 py-14 md:py-20 grid md:grid-cols-2 gap-10 md:gap-16 items-center">
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

	<!-- LAYANAN -->
	<section id="layanan" class="bg-[#111111]">
		<div class="max-w-7xl mx-auto px-6 py-16 md:py-20">
			<h2 class="text-center text-2xl md:text-3xl font-extrabold">Layanan Bahtera Creative</h2>
			<div class="mt-12 grid md:grid-cols-3 gap-10 md:gap-12">
				<!-- Item 1 -->
				<div class="text-center">
					<img src="{{ asset('img/brand.png') }}" alt="Brand Identity" class="w-30 h-23 mx-auto object-contain">
					<h3 class="mt-6 text-xl font-semibold">Brand Identity</h3>
					<p class="mt-3 text-white/85 text-sm leading-6 max-w-xs mx-auto">Layanan brand identity meliputi desain logo, strategi branding, dan kebutuhan branding untuk membuat identitas bisnis menjadi unik yang mempresentasikan value dan nilai bisnismu.</p>
				</div>
				<!-- Item 2 -->
				<div class="text-center">
					<img src="{{ asset('img/socialmedia.png') }}" alt="Social Management" class="w-30 h-23 mx-auto object-contain">
					<h3 class="mt-6 text-xl font-semibold">Social Mangement</h3>
					<p class="mt-3 text-white/85 text-sm leading-6 max-w-xs mx-auto">kami juga melayani jasa pengelolaan akun sosial media Anda untuk meningkatkan bisnis anda di era digital dan dunia online saat ini.</p>
				</div>
				<!-- Item 3 -->
				<div class="text-center">
					<img src="{{ asset('img/graphicdesign.png') }}" alt="Design Graphic" class="w-30 h-23 mx-auto object-contain">
					<h3 class="mt-6 text-xl font-semibold">Design Graphic</h3>
					<p class="mt-3 text-white/85 text-sm leading-6 max-w-xs mx-auto">kami juga melayani desain grafis dari desain poster, desain banner, desain packaging dan keperluan desain grafis lainnya.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- OUR CLIENT (terpisah, bg sama dengan profil) -->
	<section id="client" class="bg-[#181818]">
		<div class="max-w-7xl mx-auto px-6 py-16 md:py-20">
			<h3 class="text-center text-2xl font-semibold">Our Client</h3>
			<div class="mt-10 grid grid-cols-3 gap-6 max-w-xl mx-auto">
				<img src="{{ asset('img/bag.png') }}" alt="Client 1" class="h-12 md:h-14 object-contain mx-auto">
				<img src="{{ asset('img/trolly.png') }}" alt="Client 2" class="h-12 md:h-14 object-contain mx-auto">
				<img src="{{ asset('img/camera.png') }}" alt="Client 3" class="h-12 md:h-14 object-contain mx-auto">
			</div>
		</div>
	</section>

	<!-- PORTOFOLIO -->
	<section id="portofolio" class="bg-[#111111] border-t border-white/10">
		<div class="max-w-7xl mx-auto px-6 py-16 md:py-20">
			<h2 class="text-center text-2xl md:text-3xl font-extrabold">Portofolio Bahtera Creative</h2>
			<div class="mt-12 grid md:grid-cols-2 gap-8">
				<!-- besar kiri -->
				<img src="{{ asset('img/portfolio1.png') }}" alt="Portofolio 1" class="w-full h-full object-cover rounded">
				<!-- dua kecil kanan -->
				<div class="grid gap-8">
					<img src="{{ asset('img/portfolio2.png') }}" alt="Portofolio 2" class="w-full aspect-[4/3] object-cover rounded">
					<img src="{{ asset('img/portfolio3.png') }}" alt="Portofolio 3" class="w-full aspect-[4/3] object-cover rounded">
				</div>
			</div>
			<div class="mt-10 flex">
				<a href="#" class="mx-auto inline-flex items-center justify-center rounded-full border border-white/30 bg-white/10 hover:bg-white/20 transition px-6 py-3 text-sm md:text-base">Lihat Selengkapnya</a>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer class="bg-[#0f0f0f] border-t border-white/10">
		<div class="max-w-7xl mx-auto px-6 py-12 md:py-16">
			<div class="grid md:grid-cols-[auto_1fr] gap-10 md:gap-16 items-start">
				<!-- Logo kiri -->
				<div class="space-y-4">
					<img src="{{ asset('img/logo-bahtera.png') }}" alt="Bahtera Creative" class="h-12 w-auto">
				</div>
				<!-- Detail kanan -->
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
</body>
</html>

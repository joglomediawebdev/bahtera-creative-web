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
			<h1 class="text-3xl md:text-4xl font-extrabold">Teams</h1>
		</div>
	</section>

    <!-- TEAM SLIDER -->
    <section>
        <div class="max-w-7xl mx-auto px-6 pb-16 md:pb-20">
            <div class="overflow-x-hidden py-6 md:py-8">
				<div id="teamTrack" class="flex gap-0 md:gap-8 transition-transform duration-500">
					<!-- Slide 1 -->
                    <div class="team-slide min-w-full grid md:grid-cols-3 items-center md:items-start gap-6 md:gap-8 px-4 md:px-8">
                        <div class="team-card h-[360px] md:h-[400px] rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden transform origin-center transition-transform duration-500 ease-out grid grid-rows-[auto_1fr]">
                            <div class="bg-black h-[160px] md:h-[200px] flex items-center justify-center">
								<!-- avatar icon -->
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-12 h-12 text-white/80"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
							</div>
                            <div class="bg-[#d9d9d9] p-6 h-full text-black">
                                <h3 class="text-2xl md:text-3xl font-extrabold">Name</h3>
                                <p class="text-black/70 font-semibold">Position</p>
                                <p class="text-sm mt-3 text-black/70 leading-6">Description Description Description Description Description</p>
							</div>
						</div>
                        <div class="team-card h-[400px] rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden hidden md:block transform origin-center transition-transform duration-500 ease-out grid grid-rows-[auto_1fr]">
                            <div class="bg-black h-[200px] flex items-center justify-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-12 h-12 text-white/80"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
							</div>
                            <div class="bg-[#d9d9d9] p-6 h-full text-black">
                                <h3 class="text-2xl md:text-3xl font-extrabold">Name</h3>
                                <p class="text-black/70 font-semibold">Position</p>
                                <p class="text-sm mt-3 text-black/70 leading-6">Description Description Description Description Description</p>
							</div>
						</div>
                        <div class="team-card h-[400px] rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden hidden md:block transform origin-center transition-transform duration-500 ease-out grid grid-rows-[auto_1fr]">
                            <div class="bg-black h-[200px] flex items-center justify-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-12 h-12 text-white/80"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
							</div>
                            <div class="bg-[#d9d9d9] p-6 h-full text-black">
                                <h3 class="text-2xl md:text-3xl font-extrabold">Name</h3>
                                <p class="text-black/70 font-semibold">Position</p>
                                <p class="text-sm mt-3 text-black/70 leading-6">Description Description Description Description Description</p>
							</div>
						</div>
					</div>

					<!-- Slide 2 -->
                    <div class="team-slide min-w-full grid md:grid-cols-3 items-center md:items-start gap-6 md:gap-8 px-4 md:px-8">
                        <div class="team-card h-[360px] md:h-[400px] rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden transform origin-center transition-transform duration-500 ease-out grid grid-rows-[auto_1fr]">
                            <div class="bg-black h-[160px] md:h-[200px] flex items-center justify-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-12 h-12 text-white/80"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
							</div>
                            <div class="bg-[#d9d9d9] p-6 h-full text-black">
                                <h3 class="text-2xl md:text-3xl font-extrabold">Name</h3>
                                <p class="text-black/70 font-semibold">Position</p>
                                <p class="text-sm mt-3 text-black/70 leading-6">Description Description Description Description Description</p>
							</div>
						</div>
                        <div class="team-card h-[400px] rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden hidden md:block transform origin-center transition-transform duration-500 ease-out grid grid-rows-[auto_1fr]">
                            <div class="bg-black h-[200px] flex items-center justify-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-12 h-12 text-white/80"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
							</div>
                            <div class="bg-[#d9d9d9] p-6 h-full text-black">
                                <h3 class="text-2xl md:text-3xl font-extrabold">Name</h3>
                                <p class="text-black/70 font-semibold">Position</p>
                                <p class="text-sm mt-3 text-black/70 leading-6">Description Description Description Description Description</p>
							</div>
						</div>
                        <div class="team-card h-[400px] rounded-xl border border-white/20 ring-1 ring-white/20 shadow-xl shadow-black/40 overflow-hidden hidden md:block transform origin-center transition-transform duration-500 ease-out grid grid-rows-[auto_1fr]">
                            <div class="bg-black h-[200px] flex items-center justify-center">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-12 h-12 text-white/80"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 19.5a7.5 7.5 0 1 1 15 0v.75H4.5v-.75Z"/></svg>
							</div>
                            <div class="bg-[#d9d9d9] p-6 h-full text-black">
                                <h3 class="text-2xl md:text-3xl font-extrabold">Name</h3>
                                <p class="text-black/70 font-semibold">Position</p>
                                <p class="text-sm mt-3 text-black/70 leading-6">Description Description Description Description Description</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Dots -->
			<div class="mt-6 flex items-center justify-center gap-3">
				<button class="team-dot w-2.5 h-2.5 rounded-full bg-white/40" aria-label="Slide 1"></button>
				<button class="team-dot w-2.5 h-2.5 rounded-full bg-white/20" aria-label="Slide 2"></button>
			</div>
		</div>
	</section>

	<script>
		(function(){
			var track = document.getElementById('teamTrack');
			var dots = Array.from(document.querySelectorAll('.team-dot'));
			var cards = Array.from(document.querySelectorAll('.team-card'));
			var active = 0;
			var timer = null;

			function applyScale(){
				cards.forEach(function(card){
					card.style.transform = (window.innerWidth >= 768 ? 'scale(0.96)' : 'scale(1)');
					card.style.boxShadow = 'none';
					card.style.borderColor = 'rgba(255,255,255,0.2)';
				});
				var startIndex = active * 3; // 3 cards per slide pada layar md ke atas
				var targetIndex = startIndex + (window.innerWidth >= 768 ? 1 : 0);
				if(cards[targetIndex]){
					cards[targetIndex].style.transform = (window.innerWidth >= 768 ? 'scale(1.05)' : 'scale(1.02)');
					cards[targetIndex].style.boxShadow = '0 10px 30px rgba(0,0,0,0.35)';
					cards[targetIndex].style.borderColor = 'rgba(255,255,255,0.35)';
				}
			}

			function update(){
				track.style.transform = 'translateX(' + (-active * 100) + '%)';
				dots.forEach(function(d,i){ d.className = 'team-dot w-2.5 h-2.5 rounded-full ' + (i===active ? 'bg-white' : 'bg-white/30'); });
				applyScale();
			}

			function next(){ active = (active + 1) % dots.length; update(); }
			function start(){ stop(); timer = setInterval(next, 2000); }
			function stop(){ if(timer){ clearInterval(timer); timer = null; } }

			dots.forEach(function(d,i){ d.addEventListener('click', function(){ active = i; update(); start(); }); });
			var sliderRoot = track.parentElement; // overflow-hidden wrapper
			sliderRoot.addEventListener('mouseenter', stop);
			sliderRoot.addEventListener('mouseleave', start);

			update();
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

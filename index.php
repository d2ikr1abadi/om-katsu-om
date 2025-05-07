<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE YUMMY KATSU</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'katsu-primary': '#92400e',
                        'katsu-secondary': '#d97706'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-amber-50 font-sans">
    <!-- Navigation -->
    <nav class="bg-katsu-primary text-white shadow-lg">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <img src="img/icon2.png" alt="THE YUMMY KATSU Logo" class="h-20">
            <div class="hidden md:flex space-x-4">
                <a href="#" class="px-4 py-2 bg-katsu-secondary rounded-lg font-bold">Beranda</a>
                <a href="menu.php" class="px-4 py-2 hover:bg-amber-700 rounded-lg">Menu</a>
                <a href="about.php" class="px-4 py-2 hover:bg-amber-700 rounded-lg">Tentang</a>
            </div>
        </div>
    </div>
</nav>


    <!-- Hero Section -->
    <section class="bg-katsu-secondary text-white py-20 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">THE YUMMY KATSU</h2>
        <p class="text-xl">Chicken Katsu Ekonomis<br>Pas di kantong, pas di perut</p>
    </section>

    <!-- Popular Menu -->
    <section class="py-16 container mx-auto px-4">
        <h2 class="text-3xl font-bold text-katsu-primary mb-12 text-center">Menu Populer</h2>
        
        <div class="grid gap-8 md:grid-cols-3">
    <!-- Menu Item 1 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all hover:shadow-xl hover:-translate-y-1">
        <img src="img/element3.jpg" alt="Dm Katsu" class="w-full h-48 object-cover">
        <div class="p-6">
            <p class="text-lg font-bold text-katsu-secondary">Rp 25.000</p>
        </div>
    </div>

    <!-- Menu Item 2 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all hover:shadow-xl hover:-translate-y-1">
        <img src="img/element3.jpg" alt="Snip Katsu" class="w-full h-48 object-cover">
        <div class="p-6">
            <p class="text-lg font-bold text-katsu-secondary">Rp 30.000</p>
        </div>
    </div>

    <!-- Menu Item 3 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all hover:shadow-xl hover:-translate-y-1">
        <img src="img/element3.jpg" alt="Om Katsu" class="w-full h-48 object-cover">
        <div class="p-6">
            <p class="text-lg font-bold text-katsu-secondary">Rp 35.000</p>
        </div>
    </div>
</div>

    </section>
    <div class="container mx-auto px-6 py-24">
  <h2 id="kontak" class="text-3xl font-extrabold text-center text-katsu-primary mb-12">Info katsu</h2>
  
  <div class="grid md:grid-cols-2 gap-12 items-start">
    <!-- Kontak Info -->
    <div class="bg-white p-8 rounded-xl shadow-lg">
      <h3 class="text-2xl font-semibold text-katsu-secondary mb-6">Kontak Kami</h3>
      <ul class="text-gray-700 space-y-4 text-base leading-relaxed">
        <li>
          📍 <span class="font-medium">Alamat:</span> Jl Pakis Daleman Km 04, Bentangan, Wonosari, Klaten, Jawa Tengah, 57473
        </li>
        <li>
          ✉️ <span class="font-medium">Email:</span> <a href="mailto:info@aerostreet.co.id" class="text-blue-600 hover:underline">@aerostreet.co.id</a>
        </li>
        <li>
          📞 <span class="font-medium">Telepon:</span> (+62) xxx-xxxx-xxxx
        </li>
        <li>
          📸 <span class="font-medium">Instagram:</span> <a href="#" class="text-pink-600 hover:underline">@aerostreet</a>
        </li>
        <li>
          👍 <span class="font-medium">Facebook:</span> <a href="#" class="text-blue-700 hover:underline">aerostreet</a>
        </li>
      </ul>
    </div>

    <!-- Google Maps -->
    <div class="rounded-xl overflow-hidden shadow-lg h-[400px]">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.865191236309!2d109.38085178957634!3d-6.906719275371973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fdb33bf656baf%3A0x9d97605a0532c7cc!2sSMK%20Negeri%201%20Pemalang!5e0!3m2!1sid!2sid!4v1739425707077!5m2!1sid!2sid"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </div>
</div>

</body>
</html>
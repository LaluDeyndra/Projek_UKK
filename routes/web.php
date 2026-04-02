<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-service', function () {
    return view('terms-of-service');
})->name('terms-of-service');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/monitoring', function () {
    return view('monitoring');
})->name('monitoring');

$encyclopediaData = [
    'polar-bear' => [
        'slug' => 'polar-bear',
        'badge' => 'Ursus maritimus',
        'name_id' => 'Beruang Kutub',
        'name_en' => 'Polar Bear',
        // Ganti URL ini dengan 'img/encyclopedia/polar-bear.jpg' nanti!
        'image' => 'img/encyclopedia/polar-bear.jpg',
        'short_id' => 'Penguasa lautan es, mamalia darat karnivora terbesar di bumi.',
        'short_en' => 'The ruler of the sea ice, the largest terrestrial carnivore on earth.',
        'habitat_id' => 'Lingkungan berlapis es di Lingkaran Arktik (Kutub Utara), mencakup laut es, pulau-pulau terpencil, dan garis pantai pesisir.',
        'habitat_en' => 'Ice-covered environments in the Arctic Circle (North Pole), including sea ice, remote islands, and coastal shorelines.',
        'diet_id' => 'Karnivora utama. Berburu secara eksklusif memakan anjing laut cincin dan anjing laut berjanggut yang ditangkap dari atas lapisan es laut.',
        'diet_en' => 'Apex carnivore. Hunts almost exclusively for ringed and bearded seals caught from the surface of sea ice.',
        'fact_id' => 'Beruang kutub sebenarnya memiliki kulit berwarna hitam pekat di balik bulu putihnya, yang berfungsi menyerap dan menahan panas dari radiasi matahari di tengah suhu minus.',
        'fact_en' => 'Polar bears actually have pitch-black skin beneath their white fur, which serves to absorb and retain heat from solar radiation in sub-zero temperatures.',
        'source' => 'World Wildlife Fund (WWF)'
    ],
    'reindeer' => [
        'slug' => 'reindeer',
        'badge' => 'Rangifer tarandus',
        'name_id' => 'Rusa Kutub (Karibu)',
        'name_en' => 'Reindeer (Caribou)',
        // Ganti URL ini!
        'image' => 'img/encyclopedia/reindeer2.jpg',
        'short_id' => 'Penjelajah tundra abadi dengan tanduk megah pada jantan dan betina.',
        'short_en' => 'Eternal tundra wanderers with magnificent antlers on both males and females.',
        'habitat_id' => 'Daerah Tundra Arktik, hutan boreal (Taiga), dan pegunungan dingin melintasi belahan bumi utara (Skandinavia, Rusia, Kanada).',
        'habitat_en' => 'Arctic Tundra regions, boreal forests (Taiga), and cold mountain ranges across the northern hemisphere (Scandinavia, Russia, Canada).',
        'diet_id' => 'Herbivora. Memakan lumut mematikan (lichen) di musim dingin yang mereka gali menggunakan kuku unik berbentuk seperti sekop salju.',
        'diet_en' => 'Herbivore. Graze on deadly lichens during winter, which they dig up using unique, snow-shovel-like hooves.',
        'fact_id' => 'Hidung rusa kutub memiliki rongga turbinat khusus yang memanaskan udara Arktik yang super dingin sebelum masuk ke paru-paru mereka, mencegah mereka mati kedinginan dari dalam.',
        'fact_en' => 'Reindeer noses have special turbinate bones that warm the super-cold Arctic air before it enters their lungs, preventing them from freezing from the inside.',
        'source' => 'National Geographic'
    ],
    'seal' => [
        'slug' => 'seal',
        'badge' => 'Phocidae',
        'name_id' => 'Anjing Laut Arktik',
        'name_en' => 'Arctic Seal',
        // Ganti URL ini!
        'image' => 'img/encyclopedia/seal.jpeg',
        'short_id' => 'Penyelam ahli berdarah panas yang menaklukkan perairan beku.',
        'short_en' => 'Warm-blooded master divers conquering the frozen waters.',
        'habitat_id' => 'Sebagian besar waktu dihabiskan di perairan beku Samudra Arktik, namun mereka sering naik ke atas es untuk beristirahat, berkembang biak, dan membesarkan anak.',
        'habitat_en' => 'Most time is spent in the frozen waters of the Arctic Ocean, rising onto the sea ice to rest, breed, and raise pups.',
        'diet_id' => 'Karnivora laut laut. Menu utama meliputi berbagai ikan air dingin, krill punggung es, cumi-cumi, dan krustasea kecil.',
        'diet_en' => 'Marine carnivore. Primary menu includes various cold-water fish, ice krill, squids, and small crustaceans.',
        'fact_id' => 'Mereka memiliki sistem peredaran darah sirkuit pendek (sistem cerdas) yang dengan sengaja menghentikan aliran darah ke kulit saat menyelam, menjaga darah hangat murni untuk organ vital.',
        'fact_en' => 'They possess a short-circuit circulatory system that intentionally stops blood flow to outer skin while diving, keeping warm blood strictly for vital organs.',
        'source' => 'NOAA Fisheries'
    ]
];

Route::get('/encyclopedia', function () use ($encyclopediaData) {
    return view('encyclopedia', ['animals' => $encyclopediaData]);
})->name('encyclopedia');

Route::get('/encyclopedia/{slug}', function ($slug) use ($encyclopediaData) {
    if (!array_key_exists($slug, $encyclopediaData)) {
        abort(404);
    }
    return view('encyclopedia-show', ['animal' => $encyclopediaData[$slug]]);
})->name('encyclopedia.show');

Route::get('/sitemap.xml', function () use ($encyclopediaData) {
    return response()->view('sitemap', [
        'encyclopediaData' => $encyclopediaData
    ])->header('Content-Type', 'text/xml');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// AI Assistant Route
Route::post('/ai/chat', [AiController::class, 'chat'])->name('ai.chat');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

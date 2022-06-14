
@extends('main')


@section('container')
    <div class="container">
        <article class="mb-5">
            <h2>{{ $desk->title }}</h2>

            <p>By. Basunandra Dewangga in <a class="text-decoration-none", href="/categories/{{ $desk->category->slug }}">{{ $desk->category->name }}</a></p>

            {!! $desk->body !!}
        </article>

        <a class="text-decoration-none" href="/deskripsi">Back</a>
    </div>

   
@endsection

<!-- Deskripsi::create([
    'title' => 'What Is Erigo',
    'category_id' => 1,
    'slug' => 'what-is-erigo',
    'excerpt' => 'ERIGO adalah fashion brand yang didirikan Muhammad Sadad pada tahun 2011 lalu. Brand lokal ini',
    'body' => 'ERIGO adalah fashion brand yang didirikan Muhammad Sadad pada tahun 2011 lalu. Brand lokal ini berfokus pada streetwear fashion yang dapat digunakan pria dan wanita di Indonesia maupun global. ERIGO berhasil menjadi lokal brand yang laris di pasaran bahkan mulai mendunia.'
])

Deskripsi::create([
    'title' => 'Erigo Center',
    'category_id' => 3,
    'slug' => 'erigo-center',
    'excerpt' => 'Erigo adalah teman travelling anak muda Indonesia yang memberikan rasa nyaman dan  membuat mereka percaya diri dalam',
    'body' => 'Erigo adalah teman travelling anak muda Indonesia yang memberikan rasa nyaman dan  membuat mereka percaya diri dalam perjalanan.  Travelling bagi brand ini adalah melakukan semua hal yang kita suka. Mulai dari menjelajah  tempat-tempat wisata, tradisional, pergi bersama teman, hingga berbelanja.  Erigo menghadirkan produk yang membuat orang yang memakai akan merasa nyaman,  selalu update dengan trend fashion, dan bisa didapatkan dengan harga yang terjangkau.  Target pasar Erigo adalah anak-anak muda yang mencari sesuatu yang trendy dan Erigo  membuat mereka merasa spesial.  Erigo memiliki tujuan untuk membawa brand produk lokal ke kancah Internasional agar  nantinya merek pakaian asal Indonesia bisa bersaing di pasar global.'
])

Deskripsi::create([
    'title' => 'Erigo Step To Success',
    'category_id' => 2,
    'slug' => 'erigo-step-to-success',
    'excerpt' => 'Bagi yang tidak terlalu menyukai dunia fashion atau acuh tak acuh terhadap style berpenampilan, belum tentu mengenal brand ini.',
    'body' => '<p>Bagi yang tidak terlalu menyukai dunia fashion atau acuh tak acuh terhadap style berpenampilan, belum tentu mengenal brand ini. Erigo memang baru dicetuskan pada tahun 2013, dan mengalami banyak liku-liku saat pertama kali dibangun.</p><p>Namun, di tahun 2015 brand Erigo mulai menunjukkan benih kesuksesannya. Produk ini mulai dikenal di pasaran, khususnya di beberapa wilayah Indonesia seperti Medan dan Palembang.Namun produk Erigo lebih banyak ditemui di media online karena pemiliknya pertama kali memasarkan produk tersebut melalui Instagram dan media online lainnya.</p><p>Muhammad Sadad, yakni pendiri dan pencetus Erigo telah melalui banyak hal sebelum ia dapat menikmati hasil jerih payah usahanya.Usaha sukses yang dilakukan Sadad tidak didapatkan secara tiba-tiba, melainkan melalui proses lama dan dalam kurun waktu bertahun-tahun.Bahkan ia sering menemui kegagalan dan kerugian saat sedang berproses membangun usaha yang diimpikannya sejak dulu.Keberanian menjalankan usahanya tidak datang dalam waktu singkat. Keraguan sering ia hadapi, tetapi usaha tersebut merupakan hal yang sangat ia impikan, hingga hal ini membuatnya berani mengambil langkah penuh risiko.</p>'
])


Deskripsi::create([
    'title' => 'Erigo Store',
    'category_id' => 3,
    'slug' => 'erigo-store',
    'excerpt' => 'Erigo merupakan brand fashion pria dan wanita buatan asli Indonesia. Brand ini didirikan oleh Muhammad Sadad pada',
    'body' => 'Erigo merupakan brand fashion pria dan wanita buatan asli Indonesia. Brand ini didirikan oleh Muhammad Sadad pada tahun 2010 dan kini telah terkenal di seluruh Indonesia. Produk Erigo sendiri terdiri atas kaos, kemeja, jaket, celana, dan tas yang dibuat dengan material berkualitas terbaik dan desain yang unik. Dengan mengusung semangat anak muda, brand Erigo ingin mendorong anak muda untuk memiliki hasrat eksplorasi yang tinggi. Mau beli produk Erigo untuk aktivitas sehari-hari atau traveling? Cek dulu informasi lengkap serta harga produk Erigo di sini :'
]) -->





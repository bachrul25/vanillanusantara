<div>
    <!-- Company Introduction -->
    <section class="mb-5">
        <h1 class="mb-3">Tentang Vanilla Nusantara</h1>
        <p>
            Vanilla Nusantara adalah produsen dan eksportir <strong>Vanilla Planifolia</strong> premium dari Indonesia. Kami berkomitmen
            menyediakan vanilla berkualitas tinggi untuk kebutuhan kuliner, industri makanan dan minuman, serta parfum. Dengan
            penerapan pertanian berkelanjutan, setiap biji vanilla dipanen, dikeringkan, dan diproses dengan cermat untuk menjaga
            rasa serta aroma alami.
        </p>
    </section>

    <!-- Grade Listing -->
    <section class="mb-5">
        <h2 class="mb-4">Kelas Produk</h2>
        <div class="row">
            @foreach($grades as $grade)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        @if($grade->image)
                            <img src="{{ asset($grade->image) }}" class="card-img-top" alt="Grade {{ $grade->grade }} image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Grade {{ $grade->grade }}</h5>
                            @if($grade->length_min && $grade->length_max)
                                <p class="card-text"><strong>Panjang:</strong> {{ $grade->length_min }}–{{ $grade->length_max }} cm</p>
                            @endif
                            @if($grade->moisture_min && $grade->moisture_max)
                                <p class="card-text"><strong>Kadar Air:</strong> {{ $grade->moisture_min }}–{{ $grade->moisture_max }}%</p>
                            @endif
                            <p class="card-text">{{ $grade->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Contact Information -->
    <section>
        <h2 class="mb-3">Kontak & Informasi</h2>
        <p><strong>Website:</strong> <a href="https://www.vanillanusantaraglobal.com" target="_blank">www.vanillanusantaraglobal.com</a></p>
        <p><strong>Email:</strong> <a href="mailto:vanillanusantara26@gmail.com">vanillanusantara26@gmail.com</a></p>
        <p><strong>Instagram:</strong> <a href="https://instagram.com/vanillanusantaraofficial" target="_blank">@vanillanusantaraofficial</a></p>
        <p><strong>Telepon:</strong> <a href="tel:+6287874588706">0878 7458 8706</a></p>
    </section>
</div>

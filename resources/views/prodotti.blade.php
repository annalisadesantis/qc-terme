@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "products | QC Terme Spas and Resorts")
{{-- contenuti --}}
@section("content")
    <section id="prodotti">
        <div class="container">
            <div class="testo">
                <h1>
                    QC Terme products
                </h1>
                <p>
                    I nostri centri e termali sono luoghi in cui le persone si prendono del tempo per se stesse, curando il proprio spirito e il proprio corpo.  I prodotti delle linee QC Terme Cosmetics e Fragrances si rivolgono a chi desidera prendersi cura di sé e dell'ambiente in cui vive, in modo naturale, alla ricerca di una bellezza autentica e di sensazioni uniche, giorno dopo giorno.
                </p>
            </div>
            <div class="contenuto-home">
                @foreach ($prodotti as $prodotto)
                    <div class="card-container">
                        <div class="card">
                            <img src="{{ $prodotto['src']}}" alt="{{ $prodotto['titolo']}}">
                        </div>
                        <h4>
                            {{ $prodotto['titolo']}}
                            <i class="fas fa-ellipsis-h"></i>
                        </h4>
                        <p>
                            {{ $prodotto['descrizione']}}
                        </p>
                        <a href="#">
                            scopri di più
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

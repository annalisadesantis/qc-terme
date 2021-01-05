@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Centri benessere, terme, Spa hotel e resorts | QC Terme")
{{-- contenuti --}}
@section("content")
    <section id="home">
        <div class="sfondo">
            <img src="../image/slide_natale2020.webp" alt="sfondo-home">
        </div>
        <div class="container">
            <div class="testo">
                <h1>
                    Una favola senza tempo
                </h1>
                <p>
                    Quante volte siamo corsi a leggere l’ultima riga di una fiaba? È proprio lì, nella gioia del lieto fine, che è custodito l’incanto di un nuovo inizio, perché i sogni continuano a vivere al di là del tempo.
                </p>
                <p>
                    Per Natale fai avverare i desideri di chi ami, donandovi l'opportunità di condividere l'emozione unica di una giornata, un soggiorno o un trattamento rigenerante.
                </p>
                <p>
                    Abbiamo esteso la validità di tutti i nostri regali di benessere a 24 mesi dalla data di acquisto. Perché la magia delle grandi storie non finisce mai.
                </p>
                <p>
                    Che la tua favola abbia inizio.
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
                        <h2>
                            {{ $prodotto['titolo2']}}
                        </h2>
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

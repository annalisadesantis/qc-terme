@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Stores | QC Terme Spas and Resorts")
{{-- contenuti --}}
@section("content")
    <section id="store">
        <div class="container">
            <div class="testo">
                <h1>
                    QC Terme stores
                </h1>
                <p>
                    Nei QC Terme stores puoi acquistare e regalare i QC Pass, validi per ingressi e massaggi in tutte le nostre spa e centri benessere, i cassetti dei desideri per soggiornare negli hotel di QC Terme spas and resorts e gli esclusivi prodotti della linea QC Terme cosmetics and fragrances per il corpo e per l'ambiente.
                </p>
            </div>
            <div class="contenuto-destinazioni">
                @foreach ($stores as $store)
                    <div class="card-container">
                        <div class="card">
                            <img src="{{ $store['src']}}" alt="{{ $store['citta']}}">
                        </div>
                        <h4>
                            {{ $store['citta']}}
                            <i class="fas fa-ellipsis-h"></i>
                        </h4>
                        <h2>
                            {{ $store['luogo']}}
                        </h2>
                        <h4>
                            {{ $store['apertura']}}
                        </h4>
                        <p>
                            {{ $store['via']}}
                        </p>
                        <h4>
                            {{ $store['sito']}}
                        </h4>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

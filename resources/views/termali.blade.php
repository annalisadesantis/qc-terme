@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Terme e centri benessere con SPA | QC Terme")
{{-- contenuti --}}
@section("content")
    <section id="termali">
        <div class="container">
            <div class="testo">
                <h1>
                    Il benessere italiano
                </h1>
                <p>
                    Le terme dell'antica Roma erano luoghi di benessere, aggregazione e vita sociale. Uno stile di vita che affidava all'acqua e alla bellezza il recupero del benessere fisico e la rigenerazione dello spirito. QC Terme continua la tradizione di Roma imperiale con i propri 4 centri termali e 6 centri benessere, regalando emozioni uniche e senza tempo.
                </p>
            </div>
            <h2>
                Centri termali
            </h2>
            <div class="contenuto-destinazioni">
                @foreach ($termali as $terme)
                    <div class="card-container">
                        <div class="card">
                            <img src="{{ $terme['src']}}" alt="{{ $terme['titolo']}}">
                        </div>
                        <h4>
                            {{ $terme['titolo']}}
                            <i class="fas fa-ellipsis-h"></i>
                        </h4>
                        <h2>
                            {{ $terme['luogo']}}
                        </h2>
                        <h3>
                            {{ $terme['luogo2']}}
                        </h3>
                    </div>
                @endforeach
            </div>
            <h2>
                Centri benessere
            </h2>
            <div class="contenuto-destinazioni">
                @foreach ($benesseri as $benessere)
                    <div class="card-container">
                        <div class="card">
                            <img src="{{ $benessere['src']}}" alt="{{ $benessere['titolo']}}">
                        </div>
                        <h4>
                            {{ $benessere['titolo']}}
                            <i class="fas fa-ellipsis-h"></i>
                        </h4>
                        <h2>
                            {{ $benessere['luogo']}}
                        </h2>
                        <h3>
                            {{ $benessere['luogo2']}}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Migliori località termali: destinazioni del benessere | QC Terme")
{{-- contenuti --}}
@section("content")
    <section id="destinazioni">
        <div class="container">
            <div class="testo">
                <h1>
                    Le destinazioni del benessere
                </h1>
                <p>
                    Luoghi e atmosfere uniche in cui concedersi il tempo di un'esperienza di benessere totale. La sensazione magica e indimenticabile che donano i centri termali e i centri benessere. Hotel e resort dal fascino unico e inimitabile. Per rinascere con l'acqua, nel corpo e nello spirito.
                </p>
            </div>
            <div class="contenuto-destinazioni">
                @foreach ($destinazioni as $destinazione)
                    <div class="card-container">
                        <div class="card">
                            <img src="{{ $destinazione['src']}}" alt="{{ $destinazione['titolo']}}">
                        </div>
                        <h4>
                            {{ $destinazione['titolo']}}
                            <i class="fas fa-ellipsis-h"></i>
                        </h4>
                        <h2>
                            {{ $destinazione['luogo']}}
                        </h2>
                        <h3>
                            {{ $destinazione['luogo2']}}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

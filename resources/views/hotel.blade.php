@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "Wellness hotel con SPA e terme benessere | QC Terme")
{{-- contenuti --}}
@section("content")
    <section id="hotel">
        <div class="container">
            <div class="testo">
                <h1>
                    Gli hotel del benessere
                </h1>
                <p>
                    Ospitalità da sogno in luoghi affascinanti e atmosfere uniche, attenzione al dettaglio e cura dell'ospite. Per continuare ad offrire la migliore esperienza di benessere abbiamo messo a punto QC Care, un innovativo protocollo di sicurezza, integrato da nuove modalità di check-in, check-out, pagamento e prenotazione dei servizi on-line, per vivere il soggiorno al massimo del relax.
                </p>
            </div>
            <div class="contenuto-destinazioni">
                @foreach ($hotels as $hotel)
                    <div class="card-container">
                        <div class="card">
                            <img src="{{ $hotel['src']}}" alt="{{ $hotel['titolo']}}">
                        </div>
                        <h4>
                            {{ $hotel['luogo']}}
                            <i class="fas fa-ellipsis-h"></i>
                        </h4>
                        <h2>
                            {{ $hotel['titolo']}}
                        </h2>
                        <h3>
                            {{ $hotel['titolo2']}}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

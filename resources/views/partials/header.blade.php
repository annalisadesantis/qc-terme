<header id="root">
    <div class="container">
        <div class="header-box" v-if="headerBox">
            <div class="menu">
                <a href="#" @click="tendina()">
                    <i class="fas fa-bars"></i>
                    <span>
                        Menu
                    </span>
                </a>
            </div>
            <div class="logo">

            </div>
            <div class="prenota">
                <span>
                    Prenota | Regala
                </span>
            </div>
        </div>
    </div>
    <div class="hamburger-menu" v-if="active">
        <div class="ita-descrizione">
            <div class="row-chiusura">
                <a href="#" @click="tendina()">
                    <i class="fas fa-times"></i>
                </a>
                <a href="#">
                    Italiano
                </a>
            </div>
            <div class="testo-italiano">
                <p>
                    QC Terme spas and resorts, la più importante ed innovativa realtà nel settore del benessere, del termalismo e dell’ospitalità alberghiera, regala esperienze che migliorano la qualità di vita e donano attimi di gratificazione, vitalità, spensieratezza e gioia. Centri benessere e centri termali, hotel di charme a Bormio, Pré Saint Didier, Milano, Torino, Monte Bianco, Roma, San Pellegrino, Dolomiti e Chamonix.
                </p>
            </div>
        </div>
        <div class="voci-menu">
            <div class="logo">

            </div>
            <div class="menu-principale">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('destinazioni') }}">
                            Destinazioni
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('termali') }}">
                            Centri termali e centri benessere
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('hotel') }}">
                            wellness hotel
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('prodotti') }}">
                            products
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('store') }}">
                            stores
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            shop online
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

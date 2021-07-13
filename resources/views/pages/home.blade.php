@extends('layouts.main-layout')

@section('home-content')

    <div class="container-home">
        <div class="head-title">
            <span>
                Uso creativo dello spazio.
            </span>
    
        </div>

        <div class="tabs">
            <div class="active"><a href="">5 posti</a></div>
            <div class="inactive"><a href="">3 posti</a></div>
            <div class="inactive"><a href="">2 posti</a></div>
        </div>
        <div class="tabs-content">
            <div class="tabs-description">
                <span class="tabs-title">
                    450 <br>
                    LITRI
                </span>
                <span class="description">
                    Nuova Mini Countryman è realizzata per ogni <br>
                    tipo di viaggio in città e in campagna. 3 sedili <br>
                    posteriori sono ribaltabili per dare la <br>
                    possibilità di ampliare il vano bagaglio <br>
                    aumentare lo spazio per le gambe, così potrai <br>
                    sfruttare fino a L.390 litri di capacità per <br>
                    portare con te tutto ciò che ti serve per le tue <br>
                    avventure.

                </span>

            </div>
            <div class="img-container">

            </div>
        </div>

        <div class="support-container">
            <div class="support-element-container">
                {{-- HEAD --}}
                <div class="support-head-title">
                    <span>Come ti supportiamo</span>
                </div>
                <div class="left-right">

                    {{-- LEFT --}}
                    <div class="support-text-left">
                        <div class="support-head-text">
                            <span>
                                Programmi di protezione <br>
                                dell'host

                            </span>
                        </div>
                        <div class="support-body-text">
                            <span>
                                Per ricevere il supporto necessario nel raro caso di <br class="disappear">
                                un incidente, la maggior parte delle prenotazioni  <br class="disappear">
                                AirBnb include un'assicurazione contro i danni <br class="disappear">
                                all'alloggio e un'assicurazione di responsabilità <br class="disappear">
                                civile per un importo massimo di un milione di <br class="disappear">
                                dollari. <span class="int-point">?</span> 

                            </span>
                        </div>
                        <div class="support-link-text">
                            <a href="">Come ti proteggiamo quando svolgi l'attività di host</a> 
                        </div>
                    </div>
                    {{-- RIGHT --}}
                    <div class="support-text-right">
                        <div class="support-head-text">
                            <span>
                                Linee guida sulla sicurezza per <br>
                                l'emergenza COVID-19

                            </span>
                        </div>
                        <div class="support-body-text">
                            <span>
                                Per contribuire a proteggere la salute della nostra <br class="disappear">
                                community, abbiamo collaborato con esperti allo <br class="disappear">
                                scopo di creare linee guida di sicurezza per tutti, <br class="disappear">
                                oltre a un processo di pulizia per gli host.

                            </span>
                        </div>
                        <div class="support-link-text">
                            <a href="">Scopri il processo avanzato di pulizia</a> 
                        </div>
                    </div>
                </div>
            </div>
            {{-- CARD --}}
            <div class="support-card-container">
                <div class="support-card">
                    <div class="support-card-title">
                        <span>
                            Aggiungi le date per conoscere <br>
                            i prezzi
                        </span>
                    </div>
                    <div class="check-in-check-out">
                        <div class="check-in">
                            <div>
                                <span class="check-title">
                                    Check in
                                </span>

                            </div>

                            <div>
                                <span class="check-date">
                                    Aggiungi una data
                                </span>
                            </div>
                        </div>
                        <div class="check-out">
                            <div>
                                <span class="check-title">
                                    Check out
                                </span>

                            </div>

                            <div>
                                <span class="check-date">
                                    Aggiungi una data
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="ospiti">

                        <div>
                            <span class="ospiti-title">
                                Ospiti
                            </span>

                        </div>

                        <div>
                            <span class="ospiti-number">
                                1 ospite
                            </span>
                        </div>

                    </div>
                    <div class="support-card-button">
                        <a href="">
                            Controlla la disponibilità
                        </a>
                    </div>

                </div>

            </div>
        </div>        
    </div>

    
@endsection
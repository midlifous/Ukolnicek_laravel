<x-guest-layout>


    <main>
        <header>
            <a id="knizka">
                <i class="fa-solid fa-book-bookmark fa-4x"></i>
            </a><!--
            <div class="progress">
                <div class="progress-bar">25%</div>
               </div> -->
            <a href="" id="blbnicek">Blbníček</a>
            
            <nav>
            @guest
                @include('layouts/include/nav')

             @else
                 @livewire('navigation-menu')
            @endguest
               
            </nav>
        </header>
    

        <section id="prvni">
            
            <!-- <div id="poznamka">
            <p>Tvoje poznamky: :)</p>
            <div>
                <p>pokus</p>
                <input placeholder="zadej poznámku" type="text">
                <button>zapsat</button>
            </div>
            </div> --> 
            <!--
            <h1>tvoje úkoly</h1>
            <div id="ukoly">
                <ul id="in0"><li><p>Vynést odpadky <button onclick="smazat(0)">odstranit úkol</button></p></li></ul>
                <ul id="in1"><li><p>Uklidit pokoj <button onclick="smazat(1)">odstranit úkol</button></p></li></ul>
                <ul id="in2"><li><p>Dělat wtv<button onclick="smazat(2)">odstranit úkol</button></p></li></ul>
                <ul id="in3"><li><p id="rada">Pokus<button onclick="smazat(3)">odstranit úkol</button></p></li></ul>
            </div>
        <div id="input">   
        <input id="vstup" placeholder="zadej úkol" type="text"> 
        <button onclick="pridat()">zapsat</button>
        </div>-->
        <div id="ukoly">
        @foreach ($Ukoly as $ukol)
            <ul><li><p>{{$ukol->nazev}}</p><x-button onClick="smazat({{ $ukol->id }})">Odstranit</x-button></li></ul>
                
            @endforeach 
            </div>       
        
        

       
        
            
        </section>
          
    
    </main>
</x-guest-layout>


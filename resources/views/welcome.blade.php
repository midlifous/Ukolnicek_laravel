<x-guest-layout>
@vite(['resources/js/app.js'])

    <main>
 
        <header>
            <a id="knizka">
                <i class="fa-solid fa-book-bookmark fa-4x"></i>
            </a>
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
            
         
        <div id="ukoly">
        @foreach ($Ukoly as $ukol)
            <ul><li><p>{{$ukol->nazev}}</p> <form action="{{route('smazUkol',['id' => $ukol->id])}}" method="post">
                        @csrf
                        <x-button @click="smazat(['id' => $ukol->id])">Smazat úkol</x-button>
                        
                        
             </form></li></ul>
                
            @endforeach 
            </div>       
           
        

       
        
            
        </section>
          
    
    </main>
</x-guest-layout>


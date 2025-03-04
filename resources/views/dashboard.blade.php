<x-app-layout>
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
       <form action="{{route('pridatUkol')}}" method="post" enctype="multipart/form-data" >
    
        <div>
            
            <x-input name="ukol-name" id="ukol-name" required  placeholder="zadejte úkol"/>
            <x-input-error for="ukol-name" />
        
            <br>
            <x-button>
                Pridej Úkol
            </x-button>
        </div>
        <br>

        @csrf
        @if(Session::has("message"))
        <p>{{ Session::get("message")}}</p>
    @endif

       </form>
    </section>
    
    </main>


    
</x-app-layout>

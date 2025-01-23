<x-app-layout>

    <section class="bg-white">
        @if(Session::has("message"))
            <p>{{ Session::get("message")}}</p>
        @endif

        <form action="{{route('pridaniTypu')}}" method="POST">
            @csrf
            <div style="padding: 10px">
                <label for="nazev">Název</label>
                <input type="text" name="nazev" placeholder="Napište úkol" id="nazev">
            </div>
               <div style="padding: 10px">
            <x-button>Přidat</x-button>
    </div>
        </form>
    </section>


</x-app-layout>

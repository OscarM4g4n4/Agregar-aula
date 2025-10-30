<x-mi-layout>
    <h1>Detalles del Edificio: {{ $edificio->nombre }}</h1>
    <p><strong>Número de Pisos:</strong> {{ $edificio->niveles }}</p>

    <ul>
        @foreach ($edificio->aulas as $aula)
            <li>
                Número: {{ $aula->numero }} || Capacidad: {{ $aula->capacidad }}
                <a href="{{ route('aula.edit', $aula->id) }}" class="btn btn-warning btn-sm">Editar</a>
            </li>
        @endforeach
    </ul>
<form action="{{ route('EdificioController') }}" method="POST">
     @csrf
     <label class="form-label" for="numero">Título:</label>
    <input name ='numero' type="text">
    <label class="form-label" for="numero">capacidad:</label>
    <input name ='capacidad' type="text">
 <button type="submit">Guardar</button>


</form>
</x-mi-layout> 
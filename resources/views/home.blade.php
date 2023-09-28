@extends('layouts.public')

@section('content')
    <div class="container">
        <table>
            <tr>
              <th>Compagnia</th>
              <th>Stazione di partenza</th>
              <th>Orario di partenza</th>
              <th>Orario di arrivo</th>
              <th>Data di partenza</th>
              <th>Codice treno</th>
              <th>Carrozza N°</th>
            </tr>
            @foreach ($trains as $train)
            <tr>
              <td>{{ $train->azienda }}</td>
              <td>{{ $train->stazione_di_partenza }}</td>
              <td>{{ $train->orario_di_partenza }}</td>
              <td>{{ $train->orario_di_arrivo }}</td>
              <td>{{ $train->data_di_partenza }}</td>
              <td>{{ $train->codice_treno}}</td>
              <td>{{ $train->numero_carrozze }}</td>

            </tr>
           
            @endforeach
          </table> 
       
    </div>
</div>
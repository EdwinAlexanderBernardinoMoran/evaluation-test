@csrf
<label for="" class="uppercase text-gray-700 text-xs">Nombre Del Proyecto</label>
<span class="text-xs text-red-600">@error('name') {{$message}} @enderror</span>
<input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{ old('name', $finance->name) }}">

<label for="" class="uppercase text-gray-700 text-xs">Fuente De Fondos</label>
<span class="text-xs text-red-600">@error('sourceFunds') {{$message}} @enderror</span>
<input type="text" name="sourceFunds" class="rounded border-gray-200 w-full mb-4" value="{{ old('sourceFunds', $finance->sourceFunds) }}">

<label for="" class="uppercase text-gray-700 text-xs">Monto Planificado</label>
<span class="text-xs text-red-600">@error('plannedAmount') {{$message}} @enderror</span>
<input type="number" name="plannedAmount" class="rounded border-gray-200 w-full mb-4" value="{{ old('plannedAmount', $finance->plannedAmount) }}">

<label for="" class="uppercase text-gray-700 text-xs">Monto Patrocinado</label>
<span class="text-xs text-red-600">@error('sponsoredAmount') {{$message}} @enderror</span>
<input type="number" name="sponsoredAmount" class="rounded border-gray-200 w-full mb-4" value="{{ old('sponsoredAmount', $finance->sponsoredAmount) }}">

<label for="" class="uppercase text-gray-700 text-xs">Monto De Fondos Propios</label>
<span class="text-xs text-red-600">@error('AmountOwnFunds') {{$message}} @enderror</span>
<input type="number" name="AmountOwnFunds" class="rounded border-gray-200 w-full mb-4" value="{{ old('AmountOwnFunds', $finance->AmountOwnFunds) }}">

<div class="flex justify-between items-center">
    <a href="{{ route('finances.index')}}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>

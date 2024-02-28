<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Finanzas') }}
            <a href="{{ route('finances.create') }}" class="text-xs bg-gray-800 text-white rounded px-2 py-1">Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-center mb-7 text-lg">Listado De Finanzas</h1>
                    <table class="mb-4 m-auto text-left">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">NOMBRE DEL PROYECTO</th>
                            <th class="text-center">FUENTE DE FONDOS</th>
                            <th class="text-center">MONTO PLANIFICADO</th>
                            <th class="text-center">MONTO PATROCINADO</th>
                            <th class="text-center">MONTO FONDOS PROPIOS</th>
                            <th class="text-center">ACCIONES</th>
                        </tr>
                        @foreach ($finances as $finance)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4 font-semibold">{{ $finance->id }}</td>
                            <td class="px-6 py-4 text-center">{{ $finance->name }}</td>
                            <td class="px-6 py-4 text-center">{{ $finance->sourceFunds }}</td>
                            <td class="px-6 py-4 text-center">{{ $finance->plannedAmount }}</td>
                            <td class="px-6 py-4 text-center">{{ $finance->sponsoredAmount }}</td>
                            <td class="px-6 py-4 text-center">{{ $finance->AmountOwnFunds }}</td>
                            {{-- <td class="px-6 py-4">{{ $finance->published_at }}</td> --}}
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-between">
                                    <a href="{{ route('finances.edit', $finance->id) }}" class="text-indigo-600 px-10">Editar</a>

                                    <form action="{{ route('finances.destroy', $finance->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar" class="bg-gray-800 text-white rounded px-4 py-2" onclick="return confirm('Desea eliminar?')">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $finances->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD DIRECCIÓN</title>
</head>
<body>
    <main>
        <div class="bg-[#7ea3ca]">

            <h1 class="text-3xl font-bold text-center text-white">Crud Dirección</h1>
        </div>

        <div class="mt-5 mx-auto max-w-2xl">
            <button
                type="button"
                class="block mx-auto bg-[#325b87] text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
            >
            Agregar nuevo Directivo
            </button>
        </div>

        <div class="mt-5 mx-20 overflow-auto h-250 border-separate border border-gray-300 bg-gray-200 rounded-t-lg items-center">
            <table class="w-full table-auto bg-gray-200 rounded-t-lg">
                <thead class="text-center text-white bg-[#325b87]">
                    <tr>
                            <th class="p-2">ID</th>
                            <th class="p-2">Nomina</th>
                            <th class="p-2">Directivo</th>
                            <th class="p-2">Carrera</th>
                            <th class="p-2">Estatus</th>
                            <th class="p-2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center bg-white">
                    @foreach(range(1, 10) as $index)
                        <tr>
                            <td>{{ $index }}</td>
                            <td>Nomina {{ $index }}</td>
                            <td>Directivo {{ $index }}</td>
                            <td>Tecnológias de la Información</td>
                            <td>Activo</td>
                            <td class="pt-2 flex justify-center space-x-10">
                                <button
                                    type="button"
                                    class="bg-red-700 text-white px-4 py-2 rounded-full hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300"
                                >
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button
                                    type="button"
                                    class="bg-yellow-400 text-white px-4 py-2 rounded-full hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300"
                                >
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    
</body>
</html>

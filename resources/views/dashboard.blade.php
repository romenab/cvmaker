<x-app-layout>
    <div class="container mx-auto py-5 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <div class="w-full md:w-1/2 p-8">
                <h3 class="text-4xl font-bold text-gray-800 mb-9 ">
                    If you're ready to create a CV,<br>click here to get started!
                </h3>
                <form action="/create" method="GET">
                    @csrf
                    <button type="submit"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-xl px-20 py-5 text-center me-2 mb-2">
                        CREATE
                    </button>
                </form>
            </div>
            <div class="w-full md:w-1/3 relative overflow-hidden">
                <img src="{{ asset('images/image2.jpg') }}" alt="CV Example" class="w-full h-auto object-cover">
            </div>
        </div>

        <div class="mt-10">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                <tr class="text-center ">
                    <th class="p-4"><span>#</span></th>
                    <th class="p-4"><span>Name</span></th>
                    <th class="p-4"><span>Created At</span></th>
                    <th class="p-4"><span>Actions</span></th>
                </tr>
                </thead>
                <tbody>
                @if($cvs && count($cvs) > 0)
                    @foreach($cvs as $index => $cv)
                        <tr class="text-center">
                            <td class="p-4">{{ $index + 1 }}</td>
                            <td class="p-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $cv->full_name }}</td>
                            <td class="p-4">{{ $cv->created_at->format('d/m/Y') }}</td>
                            <td class="p-4">
                                <form action="{{ route('cv.display', $cv->cv_id) }}" method="GET">
                                    @csrf
                                    <button type="submit"
                                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-10 py-2.5 text-center">
                                        VIEW
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="p-4 text-center text-gray-500">No CVs available</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>


<x-app-layout>
    <div class="bg-gray-200 flex flex-col items-center justify-center min-h-screen py-12">
        <div
            class="bg-white w-full max-w-[794px] lg:w-3/4 xl:w-2/3 shadow-xl rounded-lg grid grid-cols-1 lg:grid-cols-2">
            <div class="bg-gray-800 text-white p-10 rounded-l-lg">
                <div class="mb-6">
                    <h2 class="text-4xl font-bold mb-2">{{ $cv->full_name }}</h2>
                    <p class="text-xl">{{ $cv->job_title }}</p>
                </div>

                <h3 class="text-2xl font-bold text-center mb-1">Profile</h3>
                <hr class="border-t-1 border-white mb-4">

                <ul class="space-y-2">
                    <li class="flex items-center italic"><i class="material-icons mr-2">email</i> {{ $cv->email }}</li>
                    <li class="flex items-center"><i class="material-icons mr-2">phone</i> {{ $cv->phone }}</li>
                    <li class="flex items-center"><i class="material-icons mr-2">location_on</i>{{ $cv->address }}</li>
                    <li class="flex items-center"><i
                            class="material-icons mr-2">calendar_today</i>{{ $cv->date_of_birth }}</li>
                    @if($cv->linkedin)
                        <li class="flex items-center italic"><i class="material-icons mr-2">business</i>{{ $cv->linkedin }}
                        </li>
                    @endif
                    @if($cv->github)
                        <li class="flex items-center italic"><i class="material-icons mr-2">code</i>{{ $cv->github }}</li>
                    @endif
                </ul>

                <h3 class="text-2xl font-bold text-center mb-1 mt-5">About</h3>
                <hr class="border-t-1 border-white mb-4">

                <p class="mb-8">{{ $cv->about }}</p>
                <h3 class="text-2xl font-bold text-center mb-1">Skills</h3>
                <hr class="border-t-1 border-white mb-4">

                <p class="mb-8">{{ $cv->skills }}</p>
                <h3 class="text-2xl font-bold text-center mb-1">Education</h3>
                <hr class="border-t-1 border-white mb-4">

                <p class="mb-1"><strong>{{ $cv->diploma }}</strong></p>
                <p class="mb-1 italic">{{ $cv->school }}</p>
                <p class="mb-8">{{ $cv->graduation_year }}, {{ $cv->school_address }}</p>
            </div>

            <div class="bg-white p-10 mt-16 rounded-r-lg">
                <h3 class="text-2xl font-bold text-center text-black mb-1">Experience</h3>
                <hr class="border-t-1 border-black mb-4">

                <p class="text-black mb-8">{{ $cv->experience }}</p>

                @if($cv->experience_job_title)
                    <h3 class="text-2xl font-bold text-center text-black mb-1">Work Experience</h3>
                    <hr class="border-t-1 border-black mb-4">

                    <p class="text-black mb-1"><strong>{{ $cv->experience_job_title }}</strong></p>
                    <p class="text-black mb-1">{{ $cv->experience_company }}</p>
                    <p class="text-black mb-8">{{ $cv->experience_duration }}</p>
                @endif

                <h3 class="text-2xl font-bold text-center text-black mb-1">Interests</h3>
                <hr class="border-t-1 border-black mb-4">

                <p class="text-black mb-8">{{ $cv->interests }}</p>

                <h3 class="text-2xl font-bold text-center text-black mb-1">Languages</h3>
                <hr class="border-t-1 border-black mb-4">

                <p class="text-black mb-8">{{ $cv->languages }}</p>

                @if($cv->certifications)
                    <h3 class="text-2xl font-bold text-center text-black mb-1">Certifications</h3>
                    <hr class="border-t-1 border-black mb-4">

                    <p class="text-black mb-8">{{ $cv->certifications }}</p>
                @endif

                @if($cv->reference_name)
                    <h3 class="text-2xl font-bold text-center text-black mb-1">References</h3>
                    <hr class="border-t-1 border-black mb-4">

                    <ul class="text-black mb-8 space-y-1">
                        <li><b>{{ $cv->reference_name }}</b>,<i> {{ $cv->reference_job_title }}</i></li>
                        <li>{{ $cv->reference_phone }}</li>
                    </ul>
                @endif
            </div>
        </div>
        <div class="flex justify-end space-x-4 mt-10">
            <form action="{{ route('cv.update', $cv->cv_id)}}" method="get">
                @csrf
                <button type="submit"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-xl px-10 py-2.5 text-center">
                    UPDATE
                </button>
            </form>
            <form action="{{ route('cv.destroy', $cv->cv_id) }}" method="post">
                @csrf
                <button type="submit"
                        class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-xl px-10 py-2.5 text-center">
                    DELETE
                </button>
            </form>
        </div>
    </div>
</x-app-layout>




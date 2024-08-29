<x-app-layout>

    <div class="py-12 bg-gray-200">
        <form action="/store" method="post" class="max-w-6xl mx-auto sm:px-6 lg:px-8 flex flex-wrap gap-8">
            @csrf
            <div class="flex-1 w-full md:w-1/2 space-y-8">
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Profile</h2>
                    <div>
                        <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name <span
                                class="text-red-500">*</span></label>
                        @if ($errors->has('full_name'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('full_name') }}</span>
                        @endif
                        <input name="full_name" id="full_name" type="text" value="{{ old('full_name') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="John Doe"/>
                    </div>
                    <div>
                        <label for="job_title" class="block text-sm font-medium text-gray-700">Job Title</label>
                        @if ($errors->has('job_title'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('job_title') }}</span>
                        @endif
                        <input name="job_title" id="job_title" type="text" value="{{ old('job_title') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Software Engineer"/>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email <span
                                class="text-red-500">*</span></label>
                        @if ($errors->has('email'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('email') }}</span>
                        @endif
                        <input name="email" id="email" type="email" value="{{ old('email') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="john.doe@example.com"/>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number <span
                                class="text-red-500">*</span></label>
                        @if ($errors->has('phone'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('phone') }}</span>
                        @endif
                        <input name="phone" id="phone" type="tel" value="{{ old('phone') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="+371 23456789"/>
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Address <span
                                class="text-red-500">*</span></label>
                        @if ($errors->has('address'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('address') }}</span>
                        @endif
                        <input name="address" id="address" type="text" value="{{ old('address') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Riga, Latvia"/>
                    </div>
                    <div>
                        <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date Of Birth <span
                                class="text-red-500">*</span></label>
                        @if ($errors->has('date_of_birth'))
                            <span
                                class="text-danger text-red-600 font-bold">{{ $errors->first('date_of_birth') }}</span>
                        @endif
                        <input name="date_of_birth" id="date_of_birth" type="date" value="{{ old('date_of_birth') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"/>
                    </div>
                    <div>
                        <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn</label>
                        @if ($errors->has('linkedin'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('linkedin') }}</span>
                        @endif
                        <input name="linkedin" id="linkedin" type="url" value="{{ old('linkedin') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="https://www.linkedin.com/in/johndoe"/>
                    </div>
                    <div>
                        <label for="github" class="block text-sm font-medium text-gray-700">Github</label>
                        @if ($errors->has('github'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('github') }}</span>
                        @endif
                        <input name="github" id="github" type="url" value="{{ old('github') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="https://github.com/johndoe"/>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Skills <span class="text-red-500">*</span></h2>
                    <div>
                        @if ($errors->has('skills'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('skills') }}</span>
                        @endif
                        <textarea name="skills" id="skills" rows="4"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="PHP, design...">{{ old('skills') }}</textarea>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Certifications</h2>
                    <div>
                        @if ($errors->has('certifications'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('skills') }}</span>
                        @endif
                        <textarea name="certifications" id="certifications" rows="4"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Programming certification...">{{ old('certifications') }}</textarea>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Languages <span class="text-red-500">*</span></h2>
                    <div>
                        @if ($errors->has('languages'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('languages') }}</span>
                        @endif
                        <textarea name="languages" id="languages" rows="4"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Latvian, English...">{{ old('languages') }}</textarea>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Interests <span class="text-red-500">*</span></h2>
                    <div>
                        @if ($errors->has('interests'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('interests') }}</span>
                        @endif
                        <textarea name="interests" id="interests" rows="4"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Travel, music...">{{ old('interests') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="flex-1 w-full md:w-1/2 space-y-8">

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">About <span class="text-red-500">*</span></h2>
                    <div>
                        @if ($errors->has('about'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('about') }}</span>
                        @endif
                        <textarea name="about" id="about" rows="5"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Tell more about yourself...">{{ old('about') }}</textarea>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Education</h2>
                    <div>
                        <label for="diploma" class="block text-sm font-medium text-gray-700">Diploma <span
                                class="text-red-500">*</span></label>
                        @if ($errors->has('diploma'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('diploma') }}</span>
                        @endif
                        <input name="diploma" id="diploma" type="text" value="{{ old('diploma') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Bachelor's Degree"/>
                    </div>
                    <div>
                        <label for="school" class="block text-sm font-medium text-gray-700">School <span
                                class="text-red-500">*</span></label>
                        @if ($errors->has('school'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('school') }}</span>
                        @endif
                        <input name="school" id="school" type="text" value="{{ old('school') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="University of Latvia"/>
                    </div>
                    <div>
                        <label for="graduation_year" class="block text-sm font-medium text-gray-700">Graduation Year
                            <span class="text-red-500">*</span></label>
                        @if ($errors->has('graduation_year'))
                            <span
                                class="text-danger text-red-600 font-bold">{{ $errors->first('graduation_year') }}</span>
                        @endif
                        <input name="graduation_year" id="graduation_year" type="number"
                               value="{{ old('graduation_year') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                               placeholder="2024" min="1900" max="2050"/>
                    </div>
                    <div>
                        <label for="school_address" class="block text-sm font-medium text-gray-700">Address <span
                                class="text-red-500">*</span></label>
                        @if ($errors->has('school_address'))
                            <span
                                class="text-danger text-red-600 font-bold">{{ $errors->first('school_address') }}</span>
                        @endif
                        <input name="school_address" id="school_address" type="text" value="{{ old('school_address') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Riga, Latvia"/>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">References</h2>
                    <div>
                        <label for="reference_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        @if ($errors->has('reference_name'))
                            <span
                                class="text-danger text-red-600 font-bold">{{ $errors->first('reference_name') }}</span>
                        @endif
                        <input name="reference_name" id="reference_name" type="text" value="{{ old('reference_name') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="John Doe"/>
                    </div>
                    <div>
                        <label for="reference_job_title" class="block text-sm font-medium text-gray-700">Job
                            Title</label>
                        @if ($errors->has('reference_job_title'))
                            <span
                                class="text-danger text-red-600 font-bold">{{ $errors->first('reference_job_title') }}</span>
                        @endif
                        <input name="reference_job_title" id="reference_job_title" type="text"
                               value="{{ old('reference_job_title') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Mentor"/>
                    </div>
                    <div>
                        <label for="reference_phone" class="block text-sm font-medium text-gray-700">Phone
                            Number</label>
                        @if ($errors->has('reference_phone'))
                            <span
                                class="text-danger text-red-600 font-bold">{{ $errors->first('reference_phone') }}</span>
                        @endif
                        <input name="reference_phone" id="reference_phone" type="tel"
                               value="{{ old('reference_phone') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="+371 23456789"/>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Work Experience</h2>
                    <div>
                        <label for="experience_job_title" class="block text-sm font-medium text-gray-700">Job
                            Title</label>
                        @if ($errors->has('experience_job_title'))
                            <span
                                class="text-danger text-red-600 font-bold">{{ $errors->first('experience_job_title') }}</span>
                        @endif
                        <input type="text" name="experience_job_title" id="experience_job_title"
                               value="{{ old('experience_job_title') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Software Developer"/>
                    </div>
                    <div>
                        <label for="experience_company" class="block text-sm font-medium text-gray-700">Company
                            Name</label>
                        @if ($errors->has('experience_company'))
                            <span
                                class="text-danger text-red-600 font-bold">{{ $errors->first('experience_company') }}</span>
                        @endif
                        <input type="text" name="experience_company" id="experience_company"
                               value="{{ old('experience_company') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="XYZ"/>
                    </div>
                    <div>
                        <label for="experience_duration"
                               class="block text-sm font-medium text-gray-700">Duration</label>
                        @if ($errors->has('experience_duration'))
                            <span
                                class="text-danger text-red-600 font-bold">{{ $errors->first('experience_duration') }}</span>
                        @endif
                        <input type="text" name="experience_duration" id="experience_duration"
                               value="{{ old('experience_duration') }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Jan 2020 - Dec 2021"/>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Experience <span class="text-red-500">*</span>
                    </h2>
                    <div>
                        @if ($errors->has('experience'))
                            <span class="text-danger text-red-600 font-bold">{{ $errors->first('experience') }}</span>
                        @endif
                        <textarea name="experience" id="experience" rows="5"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Describe your experience here...">{{ old('experience') }}</textarea>
                    </div>
                </div>

                <div class="w-full mt-8 flex justify-end">
                    <button type="submit"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-xl px-10 py-2.5 text-center">
                        Save
                    </button>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>

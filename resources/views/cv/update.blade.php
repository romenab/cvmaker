<x-app-layout>

    <div class="py-12 bg-gray-200">
        <form action="{{ route('cv.update', $cv->cv_id)}}" method="post"
              class="max-w-6xl mx-auto sm:px-6 lg:px-8 flex flex-wrap gap-8">
            @csrf
            <div class="flex-1 w-full md:w-1/2 space-y-8">
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Profile</h2>
                    <div>
                        <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name <span
                                class="text-red-500">*</span></label>
                        <input name="full_name" id="full_name" type="text" value="{{ $cv->full_name  }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="John Doe" required/>
                    </div>
                    <div>
                        <label for="job_title" class="block text-sm font-medium text-gray-700">Job Title</label>
                        <input name="job_title" id="job_title" type="text" value="{{ $cv->job_title  }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Software Engineer"/>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email <span
                                class="text-red-500">*</span></label>
                        <input name="email" id="email" type="email" value="{{ $cv->email  }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="john.doe@example.com" required/>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number <span
                                class="text-red-500">*</span></label>
                        <input name="phone" id="phone" type="tel" value="{{ $cv->phone  }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="+371 23456789" required/>
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Address <span
                                class="text-red-500">*</span></label>
                        <input name="address" id="address" type="text" value="{{ $cv->address }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Riga, Latvia" required/>
                    </div>
                    <div>
                        <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date Of Birth <span
                                class="text-red-500">*</span></label>
                        <input name="date_of_birth" id="date_of_birth" type="date" value="{{ $cv->date_of_birth }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               required/>
                    </div>
                    <div>
                        <label for="linkedin" class="block text-sm font-medium text-gray-700">LinkedIn</label>
                        <input name="linkedin" id="linkedin" type="url" value="{{ $cv->linkedin }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="https://www.linkedin.com/in/johndoe"/>
                    </div>
                    <div>
                        <label for="github" class="block text-sm font-medium text-gray-700">Github</label>
                        <input name="github" id="github" type="url" value="{{ $cv->github }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="https://github.com/johndoe"/>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Skills <span class="text-red-500">*</span></h2>
                    <div>
                        <textarea name="skills" id="skills" rows="4"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="PHP, design..." required>{{ $cv->skills }}</textarea>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Certifications</h2>
                    <div>
                        <textarea name="certifications" id="certifications" rows="4"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Programming certification...">{{ $cv->certifications }}</textarea>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Languages <span class="text-red-500">*</span></h2>
                    <div>
                        <textarea name="languages" id="languages" rows="4"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Latvian, English..." required>{{ $cv->languages }}</textarea>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Interests <span class="text-red-500">*</span></h2>
                    <div>
                        <textarea name="interests" id="interests" rows="4"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Travel, music..." required>{{ $cv->interests }}</textarea>
                    </div>
                </div>

            </div>

            <div class="flex-1 w-full md:w-1/2 space-y-8">

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">About <span class="text-red-500">*</span></h2>
                    <div>
                        <textarea name="about" id="about" rows="5"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Explain how you can be a value to the company..."
                                  required>{{ $cv->about }}</textarea>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Education</h2>
                    <div>
                        <label for="diploma" class="block text-sm font-medium text-gray-700">Diploma <span
                                class="text-red-500">*</span></label>
                        <input name="diploma" id="diploma" type="text" value="{{ $cv->diploma }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Bachelor's Degree" required/>
                    </div>
                    <div>
                        <label for="school" class="block text-sm font-medium text-gray-700">School <span
                                class="text-red-500">*</span></label>
                        <input name="school" id="school" type="text" value="{{ $cv->school }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="University of Latvia" required/>
                    </div>
                    <div>
                        <label for="graduation_year" class="block text-sm font-medium text-gray-700">Graduation Year
                            <span class="text-red-500">*</span></label>
                        <input name="graduation_year" id="graduation_year" type="number"
                               value="{{ $cv->graduation_year }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                               placeholder="2024" min="1900" max="2050" required/>
                    </div>
                    <div>
                        <label for="school_address" class="block text-sm font-medium text-gray-700">Address <span
                                class="text-red-500">*</span></label>
                        <input name="school_address" id="school_address" type="text" value="{{ $cv->school_address }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Riga, Latvia" required/>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">References</h2>
                    <div>
                        <label for="reference_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input name="reference_name" id="reference_name" type="text" value="{{ $cv->reference_name }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="John Doe"/>
                    </div>
                    <div>
                        <label for="reference_job_title" class="block text-sm font-medium text-gray-700">Job
                            Title</label>
                        <input name="reference_job_title" id="reference_job_title" type="text"
                               value="{{ $cv->reference_job_title }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Mentor"/>
                    </div>
                    <div>
                        <label for="reference_phone" class="block text-sm font-medium text-gray-700">Phone
                            Number</label>
                        <input name="reference_phone" id="reference_phone" type="tel" value="{{ $cv->reference_phone }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="+371 23456789"/>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Work Experience</h2>
                    <div>
                        <label for="experience_job_title" class="block text-sm font-medium text-gray-700">Job
                            Title</label>
                        <input type="text" name="experience_job_title" id="experience_job_title"
                               value="{{ $cv->experience_job_title }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Software Developer"/>
                    </div>
                    <div>
                        <label for="experience_company" class="block text-sm font-medium text-gray-700">Company
                            Name</label>
                        <input type="text" name="experience_company" id="experience_company"
                               value="{{ $cv->experience_company }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="XYZ"/>
                    </div>
                    <div>
                        <label for="experience_duration"
                               class="block text-sm font-medium text-gray-700">Duration</label>
                        <input type="text" name="experience_duration" id="experience_duration"
                               value="{{ $cv->experience_duration }}"
                               class="mt-2 mb-3 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                               placeholder="Jan 2020 - Dec 2021"/>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Experience <span class="text-red-500">*</span>
                    </h2>
                    <div>
                        <textarea name="experience" id="experience" rows="5"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                  placeholder="Describe your experience here..."
                                  required>{{ $cv->experience }}</textarea>
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

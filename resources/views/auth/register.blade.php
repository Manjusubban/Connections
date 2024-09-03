<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

         {{-- user_name --}}
         <div class="mt-4">
            <label for="user_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> User Name </label>
            <input id="user_name" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="user_name" value="{{ old('user_name') }}">
        </div>
        @error('user_name')
            <span class="text-red-600">{{ $message }}</span>
        @enderror


            {{--   Profile Created by --}}
        <div class="mt-4">
            <label for="profile" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Profile Created by</label>
            <input id="profile"  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full  " type="text" name="profile" value="{{ old('profile') }}">
        </div>
        @error('profile')
        <span class="text-red-600">{{ $message }}</span>
        @enderror

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"   required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- date of birth --}}

        <div class="mt-4">
            <label for="dob" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> DOB </label>
            <input id="dob" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="date" name="dob" value="{{ old('dob') }}">
        </div>


         {{-- Gender --}}

         <div class="mt-4">
            <label for="gender" class="block font-medium text-sm text-gray-700 dark:text-gray-300">   Gender </label>
            <input id="gender" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="gender" value="{{ old('gender') }}">
        </div>
        @error('gender')
        <span class="text-red-600">{{ $message }}</span>
        @enderror



        {{-- Marital Status --}}

        <div class="mt-4">
            <label for="status" class="block font-medium text-sm text-gray-700 dark:text-gray-300">  Marital Status </label>
        <input id="status" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="status" value="{{ old('status') }}">
        </div>
        @error('status')
        <span class="text-red-600">{{ $message }}</span>
        @enderror



         {{-- Religion --}}

         <div class="mt-4">
            <label for="religion" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> Religion </label>
            <input id="religion" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="religion" value="{{ old('religion') }}">
        </div>
        @error('religion')
        <span class="text-red-600">{{ $message }}</span>
        @enderror


      {{-- Caste --}}

      <div class="mt-4">
        <label for="caste" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> Caste </label>
        <input id="caste" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="caste" value="{{ old('caste') }}">
    </div>



        {{-- Sub Caste --}}

        <div class="mt-4">
            <label for="sub_caste" class="block font-medium text-sm text-gray-700 dark:text-gray-300">  Sub Caste </label>
            <input id="sub_caste" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="sub_caste" value="{{ old('sub_caste') }}">
        </div>



         {{-- Mother Tongue --}}

         <div class="mt-4">
            <label for="lang" class="block font-medium text-sm text-gray-700 dark:text-gray-300">  Mother Tongue </label>
            <input id="lang" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="lang" value="{{ old('lang') }}">
        </div>



        {{--  Occupation --}}
        <div class="mt-4">
            <label for="occupation" class="block font-medium text-sm text-gray-700 dark:text-gray-300">  Occupation</label>
            <input id="occupation" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="number" name="occupation" value="{{ old('occupation') }}">
        </div>



        {{--  Mothly Income --}}

        <div class="mt-4">
            <label for="income" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> Mothly Income </label>
            <input id="income" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="income" value="{{ old('income') }}">
        </div>


        {{--   Mobile Number --}}

        <div class="mt-4">
            <label for="m_number" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Mobile Number</label>
            <input id="m_number" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="number" name="m_number" value="{{ old('m_number') }}">
        </div>
        @error('m_number')
        <span class="text-red-600">{{ $message }}</span>
        @enderror



        {{--   Whatsapp Number --}}
        <div class="mt-4">
            <label for="w_numer" class="block font-medium text-sm text-gray-700 dark:text-gray-300">WhatsApp Number</label>
            <input id="w_numer"  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full  " type="number" name="w_numer" value="{{ old('w_numer') }}">
        </div>
        @error('w_numer')
        <span class="text-red-600">{{ $message }}</span>
        @enderror


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')


        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

          {{-- user_name --}}
          <div class="mt-4">
            <label for="user_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> User Name </label>
            <input id="user_name" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="user_name" value="{{ old('user_name',$user->user_name) }}">
        </div>
        @error('user_name')
            <span class="text-red-600">{{ $message }}</span>
        @enderror


            {{--   Profile Created by --}}
        <div class="mt-4">
            <label for="profile" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Profile Created by</label>
            <input id="profile"  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full  " type="text" name="profile" value="{{ old('profile',$user->profile_created_by) }}">
        </div>
        @error('profile')
        <span class="text-red-600">{{ $message }}</span>
        @enderror

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />




            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>


        {{-- date of birth --}}

        <div class="mt-4">
            <label for="dob" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> DOB </label>
            <input id="dob" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="date" name="dob" value="{{ old('dob',$user->date_of_birth) }}">
        </div>


         {{-- Gender --}}

         <div class="mt-4">
            <label for="gender" class="block font-medium text-sm text-gray-700 dark:text-gray-300">   Gender </label>
            <input id="gender" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="gender" value="{{ old('gender',$user->gender) }}">
        </div>
        @error('gender')
        <span class="text-red-600">{{ $message }}</span>
        @enderror



        {{-- Marital Status --}}

        <div class="mt-4">
            <label for="status" class="block font-medium text-sm text-gray-700 dark:text-gray-300">  Marital Status </label>
        <input id="status" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="status" value="{{ old('status',$user->marital_status) }}">
        </div>
        @error('status')
        <span class="text-red-600">{{ $message }}</span>
        @enderror



         {{-- Religion --}}

         <div class="mt-4">
            <label for="religion" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> Religion </label>
            <input id="religion" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="religion" value="{{ old('religion',$user->religion) }}">
        </div>
        @error('religion')
        <span class="text-red-600">{{ $message }}</span>
        @enderror


      {{-- Caste --}}

      <div class="mt-4">
        <label for="caste" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> Caste </label>
        <input id="caste" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="caste" value="{{ old('caste',$user->caste) }}">
    </div>



        {{-- Sub Caste --}}

        <div class="mt-4">
            <label for="sub_caste" class="block font-medium text-sm text-gray-700 dark:text-gray-300">  Sub Caste </label>
            <input id="sub_caste" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="sub_caste" value="{{ old('sub_caste',$user->sub_caste) }}">
        </div>



         {{-- Mother Tongue --}}

         <div class="mt-4">
            <label for="lang" class="block font-medium text-sm text-gray-700 dark:text-gray-300">  Mother Tongue </label>
            <input id="lang" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="lang" value="{{ old('lang',$user->mother_tongue) }}">
        </div>



        {{--  Occupation --}}
        <div class="mt-4">
            <label for="occupation" class="block font-medium text-sm text-gray-700 dark:text-gray-300">  Occupation</label>
            <input id="occupation" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="occupation" value="{{ old('occupation',$user->occupation) }}">
        </div>



        {{--  Mothly Income --}}

        <div class="mt-4">
            <label for="income" class="block font-medium text-sm text-gray-700 dark:text-gray-300"> Mothly Income </label>
            <input id="income" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="text" name="income" value="{{ old('income',$user->monthly_income) }}">
        </div>


        {{--   Mobile Number --}}

        <div class="mt-4">
            <label for="m_number" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Mobile Number</label>
            <input id="m_number" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" type="number" name="m_number" value="{{ old('m_number',$user->mobile_number) }}">
        </div>
        @error('m_number')
        <span class="text-red-600">{{ $message }}</span>
        @enderror



        {{--   Whatsapp Number --}}
        <div class="mt-4">
            <label for="w_numer" class="block font-medium text-sm text-gray-700 dark:text-gray-300">WhatsApp Number</label>
            <input id="w_numer"  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full  " type="number" name="w_numer" value="{{ old('w_numer',$user->whatsapp_number) }}">
        </div>
        @error('w_numer')
        <span class="text-red-600">{{ $message }}</span>
        @enderror


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

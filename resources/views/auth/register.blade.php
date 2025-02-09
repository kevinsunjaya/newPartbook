<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Company -->
            <div class="mt-4">
                <x-label for="company" :value="__('Company')" />

                <x-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required />
            </div>

            <!-- Company Type-->
            <div class="flex justify-start mt-1">
                <div class="form-check form-check-inline mr-2">
                    <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 align-top bg-no-repeat bg-center bg-contain float-left mr-1 cursor-pointer" type="radio" name="company_type" id="company_factory" value="F" required>
                    <label class="form-check-label inline-block font-medium text-sm text-gray-700 mr-2" for="company_factory">Factory</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 align-top bg-no-repeat bg-center bg-contain float-left mr-1 cursor-pointer" type="radio" name="company_type" id="company_vendor" value="V" >
                    <label class="form-check-label inline-block font-medium text-sm text-gray-700" for="company_vendor">Vendor</label>
                </div>
            </div>
            
            <!-- Company Category -->
            <div class="mt-4">
                <x-label for="company_category" :value="__('Factory Category ( Jika anda Pabrik di isi
                guna menampilkan data part  lebih akurat) ')" />
                <select name="company_category" id="company_category" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                    <option disabled="disabled" selected="selected" value="">Select Factory Category</option>
                    <option value="0">Garment</option>
                    <option value="1">Bra - Under ware</option>
                    <option value="2">Bag Production</option>
                    <option value="3">Shoes Production</option>
                </select>
            </div>

            <!-- Company Address -->
            <div class="mt-4">
                <x-label for="company_address" :value="__('Company Address')" />


                <x-input id="company_address" class="block mt-1 w-full" type="text" name="company_address" :value="old('company_address')" required />
            </div class="mt-4">

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

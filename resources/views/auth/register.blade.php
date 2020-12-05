@component('components.master')
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-300">
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-md w-full max-w-md">
            <div class="font-medium self-center text-xl sm:text-2xl uppercase text-gray-800">Register New Account</div>
            <div class="mt-10">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                            Username
                        </label>

                        <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username"
                            autocomplete="username" autofocus value="{{ old('username') }}" required>

                        @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                            Name
                        </label>

                        <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
                            value="{{ old('name') }}" required>

                        @error('name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                            Email
                        </label>

                        <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email"
                            value="{{ old('email') }}" autocomplete="email" required>

                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                            Password
                        </label>

                        <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password"
                            autocomplete="new-password">

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">
                            Password Confirmation
                        </label>

                        <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation"
                            id="password_confirmation" autocomplete="new-password">

                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            <div class="flex justify-center items-center mt-6"><span class="mr-2">Already have an account?</span>
                <a href="/login" class="inline-flex items-center font-bold text-blue-500 hover:text-blue-700 text-center">
                    Login
                </a>
            </div>
        </div>
    </div>
@endcomponent

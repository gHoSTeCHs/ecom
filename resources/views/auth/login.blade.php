<x-layout>
    <section class="bg-bg-sec">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-10">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <h3 class="font-extrabold text-primary text-2xl uppercase">Shop.co</h3>
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Login
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="/login">
                        @csrf
                        <x-forms.input label="Email" name="email" type="email" placeholder="email@gmail.com" required/>
                        <x-forms.input label="Password" name="password" type="password" placeholder="********"
                                       required/>
                        <button type="submit" class="p-2 bg-primary rounded-md text-white">
                            Login
                        </button>
                        <div class="space-y-1.5">
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Not a user? <a href="/register"
                                               class="font-medium text-primary-600 hover:underline dark:text-primary-500">Signup</a>
                            </p>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Forgot your password? <a href="/forgot-password"
                                                         class="font-medium text-primary-600 hover:underline dark:text-primary-500">Reset
                                    password</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>



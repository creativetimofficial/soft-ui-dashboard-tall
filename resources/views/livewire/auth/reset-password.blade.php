<main class="mt-0 transition-all duration-200 ease-soft-in-out">
    <section>
        <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
            <div class="container z-10">
                <div class="flex flex-wrap mt-0 -mx-3">
                    <div
                        class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                        <div
                            class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                            <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                                <h3 class="relative z-10 font-bold text-transparent bg-gradient-cyan bg-clip-text">
                                    Reset password</h3>
                                <p class="mb-0">Here you can reset your password! <br />Enter your email and your new
                                    password below!</p>
                            </div>

                            <div class="flex-auto p-6">

                                @if (Session::has('email'))
                                <div id="alert"
                                    class="relative p-4 pr-12 mb-4 text-white border border-solid rounded-lg bg-gradient-dark-gray border-slate-100">
                                    {{ Session::get('email') }}
                                    <button type="button" onclick="alertClose()"
                                        class="box-content absolute top-0 right-0 p-2 text-white bg-transparent border-0 rounded w-4-em h-4-em text-size-sm z-2">
                                        <span aria-hidden="true" class="text-center cursor-pointer">&#10005;</span>
                                    </button>
                                </div>

                                @endif

                                <form wire:submit.prevent="resetPassword">

                                    <label for="email"
                                        class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Email</label>
                                    <div class="mb-4">
                                        <input wire:model.lazy="email" type="email"
                                            class="
                                            focus:shadow-soft-primary-outline text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                                            required autofocus />
                                        @error('email')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <label for="password"
                                        class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Password</label>
                                    <div class="mb-4">
                                        <input wire:model.lazy="password" type="password" id="password"
                                            class="
                                            focus:shadow-soft-primary-outline text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            placeholder="New password" aria-label="Password"
                                            aria-describedby="password-addon" required />
                                        @error('password')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <label for="passwordConfirmation"
                                        class="mb-2 ml-1 font-bold text-size-xs text-slate-700">Password
                                        confirmation</label>
                                    <div class="mb-4">
                                        <input wire:model.lazy="passwordConfirmation" type="password"
                                            id="passwordConfirmation"
                                            class="
                                            focus:shadow-soft-primary-outline text-size-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                            placeholder="Confirm new password" aria-label="Password"
                                            aria-describedby="password-addon" required />
                                        @error('passwordConfirmation')
                                        <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="text-center">
                                        <button type="submit"
                                            class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-gradient-cyan hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                            Reset password</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                        <div
                            class="absolute top-0 hidden w-3/5 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                            <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10"
                                style="background-image: url('../assets/img/curved-images/curved6.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function alertClose() {
            document.getElementById("alert").style.display = "none";
        }
    </script>
</main>
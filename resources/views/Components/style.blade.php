<section class="container">
    <div class="bg-bg-sec p-5 rounded-xl">
        <h1 class="uppercase font-bold text-3xl text-center mt-6">Browse by style</h1>
        <div class="grid grid-cols-1 gap-4 py-4">
            <div class="rounded-xl p-4 h-[190px] bg-no-repeat bg-cover"
                 style="background-image: url('{{ Vite::asset('resources/images/casual.png') }}')">
                <h1 class="text-2xl font-bold text-primary">Casual</h1>
            </div>

            <div class="rounded-xl p-4 h-[190px] bg-no-repeat bg-cover"
                 style="background-image: url('{{ Vite::asset('resources/images/formal.png') }}')">
                <h1 class="text-2xl font-bold text-primary">Formal</h1>
            </div>

            <div class="rounded-xl p-4 h-[190px] bg-no-repeat bg-cover"
                 style="background-image: url('{{ Vite::asset('resources/images/party.png') }}')">
                <h1 class="text-2xl font-bold text-primary">Party</h1>
            </div>

            <div class="rounded-xl p-4 h-[190px] bg-no-repeat bg-cover"
                 style="background-image: url('{{ Vite::asset('resources/images/gym.png') }}')">
                <h1 class="text-2xl font-bold text-primary">Gym</h1>
            </div>

        </div>

    </div>
</section>

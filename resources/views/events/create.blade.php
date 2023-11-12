<x-app-layout>
    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8" style="max-height: 85.5vh; overflow-y: auto;">
            <div class="backdrop-blur-3xl overflow-hidden shadow-md sm:rounded-lg">
                <x-group-menu  :group="$group" />
                <div class="p-6 backdrop-blur-3xl">
                    <h1 class="text-2xl text-stone-100 font-semibold mb-4">{{ $group->name }} - Crea Evento</h1>
                    <form method="POST" action="{{ route('events.store', ['group' => $group]) }}" class="space-y-4">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-stone-100">Titolo<span class="font-bold text-base text-red-600">*</span></label>
                            <x-text-input type="text" name="title" class="block bg-stone-300 border-stone-600 focus:border-stone-700 focus:ring-stone-700 shadow-md w-full" id="title" required></x-text-input>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-stone-100">Descrizione<span class="font-bold text-base text-red-600">*</span></label></label>
                            <textarea name="description" id="description" rows="2" class="block mt-1 w-full border bg-stone-300 border-stone-600 focus:border-stone-700 focus:ring-stone-700 rounded-md shadow-md" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="date" class="block text-stone-100">Data e ora<span class="font-bold text-base text-red-600">*</span></label>
                            <x-text-input type="datetime-local" name="date" class="block bg-stone-300 border-stone-600 focus:border-stone-700 focus:ring-stone-700 shadow-md w-full" id="date" min="{{ now()->toDateString() . 'T' . now()->format('H:i') }}" required></x-text-input>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button type="submit">Pianifica Evento</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

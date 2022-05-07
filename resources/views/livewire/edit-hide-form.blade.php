<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container bg-white border-b border-gray-200 shadow-lg mx-auto justify-center px-4 py-2 ">
            <section id="contact-us">

                <div>
                    <label for="name" value="{{ __('Título') }}" />
                    <input id="slug-source" class="block mt-1 mb-2 w-full" wire:model="post.name"
                        type="text" name="name" required autofocus autocomplete="name" />
                </div>

                <br>

                <div>
                    <label for="tags" value="{{ __('Etiquetas') }}" />

                    @foreach ($tags as $tag)
                        <label for="taggs"
                            class="relative flex-inline items-center isolate p-2 mr-4 mb-2 rounded-2xl">
                            <input wire:model="taggs" value="{{ $tag->id }}" type="checkbox" class="relative
                            peer z-20 text-blue-600 rounded-md focus:ring-0" />
                            <span class="ml-1 relative z-20">{{ $tag->name }}</span>
                        </label>
                    @endforeach
                </div>

                <br>

                <button wire:click="save">
                    Actualizar
                </button>
            </section>
        </div>
    </div>
</div>

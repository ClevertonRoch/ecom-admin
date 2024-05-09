<x-app_layout>

    <x-title-header name="header">
        Editar usuário
    </x-title-header>


    <form method="POST" action="{{ route('users.update',$user) }}" method="post">
        @csrf
        @method('PUT')
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name ?? old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email ?? old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="status" :value="__('Status')" />
            <x-select-input name="status">
                @foreach ($status as $sta)
                    <option value="{{ $sta }}">{{ $sta }}</option>
                @endforeach
            </x-select-input>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>

        <div class="flex items-center mt-4 justify-between">
            <x-link-red href="#">Deletar</x-link-red>
            <x-button-blue>Salvar</x-button-blue>
        </div>
    </form>
</x-app_layout>

<div>
    <div class="mt-4 sm:flex sm:items-center">
        <x-section-title title="Create new post" description='' />
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-button color='primary' x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'showCreateModalPost')">{{ __('New Post') }}
            </x-button>
        </div>
        <x-modal name="showCreateModalPost" :show="$errors->isNotEmpty()" focusable>
            <form wire:submit="#" class="p-6">
                <h2 class="text-lg font-medium text-dark-900 dark:text-dark-100">
                    {{ __('Create new Post') }}
                </h2>
                <x-input wire:model="title" name="title" type="text" class="block w-3/4"
                    placeholder="{{ __('title') }}" />
                <x-input-error :messages="$errors->get('title')" />

                <x-textarea wire:model="title" name="title" type="text" class="block w-3/4"
                    placeholder="{{ __('body') }}"></x-textarea>
                <x-input-error :messages="$errors->get('body')" />

                <x-input-file name="image" />


                <x-switch name="active">Aktive</x-switch>
                <x-switch name="featured">Featured</x-switch>

                <div class="flex justify-end mt-3">
                    <x-button color='primary' class="ms-3">
                        {{ __('Submit') }}
                    </x-button>
                </div>
            </form>
        </x-modal>
    </div>

    <div class="flex flex-col mt-3">
        <x-table>
            <x-table.thead>
                <tr>
                    <x-table.th>Name</x-table.th>
                    <x-table.th> Age</x-table.th>
                    <x-table.th>Address</x-table.th>
                    <x-table.th>Action</x-table.th>
                </tr>
            </x-table.thead>
            <x-table.tbody class="divide-y divide-dark-200 dark:divide-dark-700">
                <tr>
                    <x-table.td>John Brown</x-table.td>
                    <x-table.td>45</x-table.td>
                    <x-table.td>NewYork No. 1 Lake Park</x-table.td>
                    <x-table.td> button</x-table.td>
                </tr>
            </x-table.tbody>
        </x-table>
    </div>
</div>

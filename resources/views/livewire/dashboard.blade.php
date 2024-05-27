<div>
    <div class="grid gap-4 pt-4 sm:grid-cols-2 lg:grid-cols-4 sm:gap-6">
        <x-stats title='total user' total='30' graph='30' tooltip='Ini total user saat ini' />
        <x-stats title='Ini title' total='30.89' />
        <x-stats title='Ini title' total='30.89' />
        <x-stats title='Ini title' total='30.89' />
    </div>

    <div class="my-2">
        <x-select :options="$options" />
    </div>
    <x-selectmultiple :options="$options" />

    <div class="py-4">
        <x-button>Button</x-button>
        <x-button color='danger'>Button</x-button>
        <x-button color='success'>Button</x-button>
        <x-button color='info'>Button</x-button>
        <x-button color='warning'>Button</x-button>
        <x-button color='secondary'>Button</x-button>
        <x-button color='transparent'>Button</x-button>
    </div>

    <x-input />
    <x-textarea></x-textarea>

    <div class="mt-4 sm:flex sm:items-center">
        <x-section-title title="User" description='lorem ipsum asasa sasasas' />
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-button color="primary">Add User</x-button>
        </div>
    </div>

    <div class="flex flex-col mt-6">
        <x-table>
            <x-table.thead>
                <tr>
                    <x-table.th>Name</x-table.th>
                    <x-table.th> Age</x-table.th>
                    <x-table.th>Address</x-table.th>
                    <x-table.th>Action</x-table.th>
                </tr>
            </x-table.thead>
            <x-table.tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                <tr>
                    <x-table.td>John Brown</x-table.td>
                    <x-table.td>45</x-table.td>
                    <x-table.td>NewYork No. 1 Lake Park</x-table.td>
                    <x-table.td> button</x-table.td>
                </tr>
            </x-table.tbody>
        </x-table>
    </div>

    <div class="pt-4">
        <x-card>
            <x-slot name="header">
                <x-slot name="title">title</x-slot>
                <x-slot name="description">Lorem ipsum bla l</x-slot>
            </x-slot>
            <x-slot name="content">

            </x-slot>
            <x-slot name="footer">
                footer
            </x-slot>
        </x-card>
    </div>

    <x-button color='info' x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'c')">{{ __('Delete Account') }}
    </x-button>

    <x-modal name="c" focusable>
        <div class="p-6">
            <x-input></x-input>
        </div>
    </x-modal>
</div>

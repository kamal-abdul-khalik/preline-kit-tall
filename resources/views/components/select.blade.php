@props([
    'options' => [],
    'defaultOption' => 'Choose',
    'class' => 'hidden',
])

<select
    data-hs-select='{
    "placeholder": "Select option...",
    "toggleTag": "<button type=\"button\"></button>",
    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-dark-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-dark-900 dark:border-dark-700 dark:text-dark-400 hover:bg-dark-50 dark:hover:bg-dark-800",
    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-dark-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-dark-100 [&::-webkit-scrollbar-thumb]:bg-dark-300 dark:[&::-webkit-scrollbar-track]:bg-dark-700 dark:[&::-webkit-scrollbar-thumb]:bg-dark-500 dark:bg-dark-900 dark:border-dark-700",
    "optionClasses": "py-2 px-4 w-full text-sm text-dark-800 cursor-pointer hover:bg-dark-100 rounded-lg focus:outline-none focus:bg-dark-100 dark:bg-dark-900 dark:hover:bg-dark-800 dark:text-dark-200 dark:focus:bg-dark-800",
    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
    "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-dark-500 dark:text-dark-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
  }'
    {{ $attributes->merge(['class' => $class]) }}>
    <option value="">{{ $defaultOption }}</option>
    @foreach ($options as $option)
        <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
    @endforeach
</select>

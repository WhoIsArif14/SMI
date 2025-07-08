@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-blue-200 dark:border-blue-700 dark:bg-slate-800 dark:text-blue-100 bg-blue-50/50 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-blue-500 dark:focus:ring-blue-400 rounded-lg shadow-sm backdrop-blur-sm transition-all duration-300 hover:shadow-md focus:shadow-lg placeholder-blue-400 dark:placeholder-blue-500']) }}>

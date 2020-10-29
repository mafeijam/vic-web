<a
  href="{{ route('page', ['locale' => $locale, 'page' => request()->route('page')]) }}"
  class="{{ app()->isLocale($locale) ? 'text-white' : 'text-gray-500' }} inline-block"
>
  {{ $text }}
</a>

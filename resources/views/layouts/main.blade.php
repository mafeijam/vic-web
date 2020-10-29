<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'JW' }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK:wght@400;500;700&family=Noto+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
  </head>
  <body class="font-sans antialiased text-gray-900">
    <div class="min-h-screen bg-gray-100">
      <div class="w-full bg-blue-900 py-2">
        <div class="h-full container mx-auto flex items-center justify-between">
          <div class="flex items-center justify-between space-x-6">
            <div class="bg-green-700 text-white px-2 py-1 rounded-sm">@lang('menu.open_account')</div>

            <x-drop-down>
              <x-slot name="trigger">
                <button class="bg-red-700 text-white px-2 py-1 rounded-sm focus:outline-none">@lang('menu.login')</button>
              </x-slot>
              <a href="" class="block px-4 py-1 hover:bg-blue-100 text-sm">網上交易</a>
              <a href="" class="block px-4 py-1 hover:bg-blue-100 text-sm">查閱結單</a>
            </x-drop-down>

            <x-drop-down>
              <x-slot name="trigger">
                <button class="bg-white text-gray-700 px-2 py-1 rounded-sm focus:outline-none">@lang('menu.quick')</button>
              </x-slot>
              <a href="" class="block px-4 py-1 hover:bg-blue-100 text-sm">下載</a>
              <a href="" class="block px-4 py-1 hover:bg-blue-100 text-sm">FAQ</a>
              <a href="" class="block px-4 py-1 hover:bg-blue-100 text-sm">文件</a>
            </x-drop-down>

          </div>
          <div class="flex items-center justify-between space-x-3">
            <x-locale-link locale="tc" text="繁" />
            <x-locale-link locale="sc" text="簡" />
            <x-locale-link locale="en" text="EN" />
          </div>
        </div>
      </div>

      <div class="w-full bg-white">
        <nav class="container mx-auto flex items-center justify-between">
          <div class="w-24 h-12 bg-green-700 my-3 p-3 text-white">LOGO</div>
          <div class="space-x-6">
            <x-nav-link page="" text="{{ __('menu.home') }}" />
            <x-nav-link page="about" text="{{ __('menu.about') }}" />
            <x-nav-link page="contact" text="{{ __('menu.contact') }}" />
          </div>
        </nav>
      </div>
      <div class="w-full flex" style="height: 2px">
        <div class="w-1/3 h-full bg-red-700"></div>
        <div class="w-2/3 h-full bg-blue-700"></div>
      </div>


      <!-- Page Content -->
      <main>
        {{ $slot }}
      </main>
    </div>
  </body>
</html>

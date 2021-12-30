<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ \Osiset\ShopifyApp\Util::getShopifyConfig('app_name') }}</title>
        <!-- <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}" /> -->
        <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="https://unpkg.com/turbolinks" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        @yield('styles')
    </head>

    <body>
        <div class="app-wrapper">
            <div class="app-content">
                <main role="main">
                    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
                        @include("partials.header")
                        <div class="app-main">
                            @yield('content')
                        </div>
                    </div>
                </main>
            </div>
        </div>

        @if(\Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_enabled'))
            <script src="https://unpkg.com/@shopify/app-bridge{{ \Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_version') ? '@'.config('shopify-app.appbridge_version') : '' }}"></script>
            <script src="https://unpkg.com/@shopify/app-bridge-utils{{ \Osiset\ShopifyApp\Util::getShopifyConfig('appbridge_version') ? '@'.config('shopify-app.appbridge_version') : '' }}"></script>
            <script
                @if(\Osiset\ShopifyApp\Util::getShopifyConfig('turbo_enabled'))
                    data-turbolinks-eval="false"
                @endif
            >
                var AppBridge = window['app-bridge'];
                var actions = AppBridge.actions;
                var utils = window['app-bridge-utils'];
                var createApp = AppBridge.default;
                var app = createApp({
                    apiKey: "{{ \Osiset\ShopifyApp\Util::getShopifyConfig('api_key', $shopDomain ?? Auth::user()->name ) }}",
                    shopOrigin: "{{ $shopDomain ?? Auth::user()->name }}",
                    host: "{{ \Request::get('host') }}",
                    forceRedirect: true,
                });
            </script>

            @include('shopify-app::partials.token_handler')
            @include('shopify-app::partials.flash_messages')
        @endif

        @yield('scripts')
    </body>
</html>

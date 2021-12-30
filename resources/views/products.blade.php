@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <!-- <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p> -->
    
                <div class="app-main__inner">
                    <div class="row">
                        products
                       
                    </div>
                </div>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Products' });
    </script>
@endsection
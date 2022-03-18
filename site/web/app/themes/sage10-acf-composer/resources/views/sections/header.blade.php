<header x-data="{scrolAtTop: true}" class="bg-white">
    <div class="w-full bg-white"
        :class="{ 'fixed top-0 z-20 shadow-lg border-b-4 border-blue-900': !scrolAtTop }"
        @scroll.window="scrolAtTop = (window.pageYOffset > 500) ? false : true"
    >
       @include('partials.navigation')
    </div>
</header>
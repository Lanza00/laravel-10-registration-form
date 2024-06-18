<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <h1>This is dashboard for login user <br><br>
                        Name: {{ Auth::user()->name }} <br>
                        Email: {{ Auth::user()->email }} <br>
                        Company Name:
                        @if(Auth::user()->company)  {{ Auth::user()->company->company_name }}
                        @else
                            N/A (No company associated)
                        @endif
                    </h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

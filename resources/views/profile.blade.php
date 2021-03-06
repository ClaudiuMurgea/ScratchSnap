<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {!! Form::open(['url' => '/profileCreate', 'method' => 'POST']) !!}
                        <div>
                            {{ Form::label('title', 'Title') }}
                        </div>
                        <div>
                            {{ Form::text('title', '', ['placeholder' => 'Title', 'class' => 'rounded-md']) }}
                        </div>
                        <div>
                            {{ Form::label('body', 'Body') }}
                        </div>
                        <div>
                            {{ Form::textarea('body', '', ['placeholder' => 'Body Text', 'class' => 'rounded-md']) }}
                        </div>
                        {{ Form::submit('Submit' , ['class' => 'text-green-500']) }}
                        
                    {!! Form::close() !!}
                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ auth()->user()->name }}" autofocus />
                                </div>  
                                <div>
                                    <x-label for="email" :value="__('Email')"/>
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ auth()->user()->email }}" autofocus/>
                                </div> 
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="new_password" :value="__('Password')" />
                                    <x-input id="new_password" class="block mt-1 w-full" 
                                    type="password" name="new_password" autocomplete="new-password" />
                                </div>
                          
                                <div class="mt-4">
                                    <x-label for="confirm_password" :value="__('Confirm Password')" />
                                    <x-input id="confirm_password" class="block mt-1 w-full"
                                    type="password" name="confirm_password" autocomplete="confirm-password" />
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-3">
                                    {{ __('Update') }}
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

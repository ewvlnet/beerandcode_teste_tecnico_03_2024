<x-profile-layout>
    <x-slot name="title">{{ __('Edit User') }}</x-slot>

    <div class="container-xxl flex-grow-1 container-p-y">
        <header class="col-md-6 px-0"><h4 class="fw-bold py-3"><span
                    class="text-muted fw-light">My Data /</span> {{ Str::limit($user->name, 100) }}</h4>
        </header>
        <x-shared.flash-msg/>

        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="card-body">

                            <div class="row">
                                <p class="px-4">Your Profile is:.
                                    <strong>{{$user->profiles->pluck('name')->implode(', ')}}</strong> <br>
                                    <small class="text-danger">*If you want to change your password, fill in the
                                        password field</small>
                                </p>
                                <hr class="mb-4">
                            </div>

                            <form action="{{ route('profile.mydata.update', $user) }}" class="form" id="formData"
                                  method="POST">
                                @csrf @method('PUT')
                                <div class="row px-3">

                                    <div class="mb-3 col-md-6">
                                        <x-shared.form.input label="{{__('Name')}}" name="name"
                                                             value="{{ old('name', $user->name ?? '') }}"
                                                             placeholder="{{__('Name user')}}" required="on"/>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <x-shared.form.input label="{{__('Email')}}" name="email" type="email"
                                                             value="{{ old('email', $user->email ?? '') }}"
                                                             placeholder="{{__('Email user')}}" required="on"/>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <x-shared.form.input label="{{__('Password')}}" name="password" type="password"
                                                             placeholder="{{__('Password user')}}"/>
                                    </div>
                                </div>
                                <div class="row px-3 mt-3">
                                    <div class="d-grid gap-2 col-md-6">
                                        <button type="submit"
                                                class="w-100 btn btn-primary btn-lg">{{__('Save')}}</button>
                                    </div>
                                </div>
                            </form>
                            {{--end cardbody--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="css"> {{-- css --}}</x-slot>
    <x-slot name="js"> {{-- js --}}</x-slot>
</x-profile-layout>

@extends('layouts.web')
@section('content')
<b-container fluid>
    <b-row align-v="center" align-h="center" class="h-75">
        <b-col cols="10" sm="8" md="6" lg="4" xl="3">
            <b-link href="/" class="big-logo">EFFLUX</b-link>
            <b-card class="elevation-3" no-body>
                <b-form action="{{ route('register') }}" method="POST">
                    @csrf
                    <b-card-body>
                        <b-form-group id="name">
                            <b-input required autofocus name="name" placeholder="Your Name"></b-input>
                        </b-form-group>
                        <b-form-group id="email">
                            <b-input required type="email" 
                                name="email" placeholder="Enter email"
                                @error('email') class="is-invalid" @enderror></b-input>
                            @error('email') <b-form-invalid-feedback>{{ $message }}</b-form-invalid-feedback> @enderror
                        </b-form-group>
                        <b-form-group id="password">
                            <b-input required type="password" 
                                name="password" placeholder="password"
                                @error('password') class="is-invalid" @enderror></b-input>
                        </b-form-group>
                        <b-form-group id="password-confirm">
                            <b-input required type="password" 
                                name="password_confirmation" placeholder="password"
                                @error('password') class="is-invalid" @enderror></b-input>
                            @error('password') <b-form-invalid-feedback>{{ $message }}</b-form-invalid-feedback> @enderror
                        </b-form-group>
                    </b-card-body>
                    <b-card-footer>
                        <b-row>
                            <b-col cols="auto" class="mr-auto">
                                <b-form-group id="terms">
                                    <b-checkbox name="terms" class="text-muted mt-1 ml-3">
                                        <small>I agree to the <a href="#">terms</a></small>
                                    </b-checkbox>
                                </b-form-group>
                            </b-col>
                            <b-col cols="auto" class="ml-auto">
                                <b-btn type="submit" variant="success" class="px-3 btn-sm">Register</b-btn>
                            </b-col>
                        </b-row>
                    </b-card-footer>
                </b-form>
            </b-card>
            <b-row>
                <b-col cols="auto" class="mx-auto">
                    <b-btn href="{{ route('login') }}" variant="outline-primary" size="sm">Go Back</b-btn>
                </b-col>
            </b-row>
        </b-col>
    </b-row>
</b-container>
@endsection

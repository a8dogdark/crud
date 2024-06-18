@extends('layout.frontlayout')

@section('titulo','Registro de Usuarios')

@section('content')
    <div class="main__log">
        <form class="form">

            <p class="form__title">Login</p>
            
            <div class="form__inputs">

                <label class="form__label">
                    <input type="email" placeholder=" " class="form__input">
                    <span class="form__text">Ingresa tu Email</span>
                </label>

                <label class="form__label">
                    <input type="password" placeholder=" " class="form__input">
                    <span class="form__text">Ingresa tu Password</span>
                </label>

            </div>
            <input type="submit" value="Login" class="form__submit">
        </form>
    </div>
@endsection
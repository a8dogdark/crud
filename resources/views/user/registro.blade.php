@extends('layout.frontlayout')

@section('titulo','Registro de Usuarios')

@section('content')
    <div class="main__log">
        <form class="form">

            <p class="form__title">Registro</p>
            
            <div class="form__inputs">

                <label class="form__label">
                    <input type="text" placeholder=" " class="form__input">
                    <span class="form__text">Ingresa tu Nick</span>
                </label>

                <label class="form__label">
                    <input type="email" placeholder=" " class="form__input">
                    <span class="form__text">Ingresa tu Email</span>
                </label>

                <label class="form__label">
                    <input type="password" placeholder=" " class="form__input">
                    <span class="form__text">Ingresa tu Password</span>
                </label>

                <label class="form__label">
                    <input type="password" placeholder=" " class="form__input">
                    <span class="form__text">Repite tu Password</span>
                </label>

            </div>
            <input type="submit" value="Registrar" class="form__submit">
        </form>
    </div>
@endsection
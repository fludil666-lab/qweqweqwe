@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Подтверждение почты</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Новая ссылка для подтверждения отправлена на ваш email.
                        </div>
                    @endif

                    Перед продолжением проверьте почту и перейдите по ссылке подтверждения.
                    Если письмо не пришло,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">нажмите здесь, чтобы отправить повторно</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

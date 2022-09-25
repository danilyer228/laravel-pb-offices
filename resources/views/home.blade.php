@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card align-content-center">
                    <button class="btn btn-success load-button">Загрузить</button>
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Название отделения</th>
                            <th scope="col">Город</th>
                            <th scope="col">Адрес</th>
                            <th scope="col">Индекс</th>
                            <th scope="col">Телефон</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.school')

@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Darsliklar</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Darslik nomi</th>
                                        <th>Darslik fayli</th>
                                        <th>Darslik uchun ssilka</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($documents as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td><a class="btn btn-info" href="{{ $item->file !='' ? '/documents/'.$item->file : '#' }}">Yuklab olish</a></td>
                                        <td><a href="{{ $item->link }}"> Darslikni ko'rish </a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection

@extends('layouts.school')
@section('title')
    Kurs rejalari
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h4> {{ $course->name }} kurs rejalari </h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped " id="example1_wrapper">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Reja sarlavhasi</th>
                                    <th>Reja davomiyligi</th>
                                    <th>Reja mavzulari</th>
                                    <th>Reja tartib raqami</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($course->plans as $plan)
                                <tr>
                                    <td>{{ $loop->iteration  }}</td>
                                    <td>{{ $plan->title }}</td>
                                    <td>{{ $plan->duration }} oy </td>
                                    <td>{!! $plan->description !!}</td>
                                    <td>{{ $plan->order }}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(function () {
      $("#example1_wrapper").dataTable();
    })
</script>
@endsection

<!-- resources/views/klasemen/show.blade.php -->

{{-- @extends('layouts.admin')

@section('content') --}}
    <h2>Detail Klasemen</h2>

    <h3>Grup {{ $klasemen->group }}</h3>

    <table>
        <thead>
            <tr>
                <th>Peringkat</th>
                <th>Nama Tim</th>
                <th>Main</th>
                <th>Menang</th>
                <th>Seri</th>
                <th>Kalah</th>
                <th>GM</th>
                <th>GK</th>
                <th>GD</th>
                <th>Point</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $klasemen->rank }}</td>
                <td>{{ $klasemen->team_name }}</td>
                <td>{{ $klasemen->played }}</td>
                <td>{{ $klasemen->won }}</td>
                <td>{{ $klasemen->drawn }}</td>
                <td>{{ $klasemen->lost }}</td>
                <td>{{ $klasemen->goals_for }}</td>
                <td>{{ $klasemen->goals_against }}</td>
                <td>{{ $klasemen->goal_difference }}</td>
                <td>{{ $klasemen->points }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('group-klasemens.index') }}">Kembali ke Daftar Klasemen</a>
{{-- @endsection --}}

@extends('admin.template')
@section('content')
<div class="mt-5">
    <h3>Data Project</h3>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Tambah Project</a>
    <a href="{{ route('projects.cetakPdf') }}" class="btn btn-danger mb-3" target="_blank">Cetak PDF</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="tabel_project">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Deskripsi</th>
                        <th>Teknologi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('bootstrap-5.3.8-dist/images/' . $project->image) }}"
                                alt="{{ $project->title }}" width="100">
                        </td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->teknologi }}</td>
                        <td>{{ $project->status }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                            <a href="{{ route('projects.cetakPdfById', $project->id) }}"
                                class="btn btn-sm btn-secondary" target="_blank">Cetak PDF</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#tabel_project').DataTable();
});
</script>
@endsection

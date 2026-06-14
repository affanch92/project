@extends('admin.template')
@section('content')
<div class="mt-5">
    <h3>Data User</h3>
    <button id="btnAdd" class="btn btn-primary mb-3">Tambah User</button>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="tabel_user">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#tabel_user').DataTable({
        ajax: {
            url: '{{ route("users.list") }}',
            dataSrc: 'data',
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + API_TOKEN
            }
        },
        columns: [{
                data: null,
                render: function(data, type, row, meta) {
                    return meta.row + 1;
                }
            },
            {
                data: 'name'
            },
            {
                data: 'email'
            },
            {
                data: 'phone'
            },
            {
                data: 'address'
            },
            {
                data: 'role'
            },
            {
                data: null,
                render: function(data, type, row) {
                    return `
                        <button class="btn btn-sm btn-warning edit-btn" data-id="${row.id}">Edit</button>
                        <button class="btn btn-sm btn-danger delete-btn" data-id="${row.id}">Delete</button>
                    `;
                }
            }
        ],
        initComplete: function(settings, json) {
            if (json.message) {
                toastr.success(json.message);
            }
        },
        error: function(xhr, error, thrown) {
            toastr.error('Gagal memuat data user.');
        }
    });
});
</script>
@endsection

@extends('layouts.app')

@section('content')
    <!-- Kontainer Utama -->
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-success">Kontak Wisata Alam</h1>
        <p class="text-center mb-5">Kami senang mendengar pengalaman Anda! Silakan tinggalkan pesan atau pertanyaan mengenai wisata alam kami di sini.</p>

        <!-- Tombol Tambah Kontak -->
        <div class="mb-4 text-end">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addContactModal">
                <i class="bi bi-plus-circle"></i> Tambah Kontak
            </button>
        </div>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Tabel Kontak -->
        <table class="table table-bordered table-striped table-hover">
            <thead class="bg-success text-white">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ Str::limit($contact->message, 50) }}</td>
                    <td>
                        <!-- Tombol Edit Kontak -->
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editContactModal" onclick="editContact({{ $contact->id }})">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                
                        <!-- Tombol Hapus Kontak -->
                        <form action="{{ url('/kontak/' . $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" onclick="setDeleteAction('{{ url('/kontak/' . $contact->id) }}')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal untuk Tambah Kontak -->
    <div class="modal fade" id="addContactModal" tabindex="-1" aria-labelledby="addContactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="addContactModalLabel">Tambah Kontak Wisata Alam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/kontak') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="addName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="addName" name="name" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="addEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="addEmail" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="addPhone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="addPhone" name="phone" placeholder="Masukkan Nomor Telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="addMessage" class="form-label">Pesan</label>
                            <textarea class="form-control" id="addMessage" name="message" rows="4" placeholder="Tuliskan Pesan Anda" required></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Tambah Kontak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Edit Kontak -->
    <div class="modal fade" id="editContactModal" tabindex="-1" aria-labelledby="editContactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="editContactModalLabel">Edit Kontak Wisata Alam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" action="">
                        @csrf
                        @method('PUT') <!-- Pastikan menggunakan metode PUT -->
                        <div class="mb-3">
                            <label for="editName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="editName" name="name" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="editPhone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="editPhone" name="phone" placeholder="Masukkan Nomor Telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="editMessage" class="form-label">Pesan</label>
                            <textarea class="form-control" id="editMessage" name="message" rows="4" placeholder="Tuliskan Pesan Anda" required></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus kontak ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form id="deleteForm" method="POST" action="" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function editContact(id) {
            fetch(`/kontak/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('editName').value = data.name;
                    document.getElementById('editEmail').value = data.email;
                    document.getElementById('editPhone').value = data.phone;
                    document.getElementById('editMessage').value = data.message;
                    document.getElementById('editForm').action = `/kontak/${id}`;
                });
        }

        function setDeleteAction(url) {
            document.getElementById('deleteForm').action = url;
        }
    </script>
@endsection

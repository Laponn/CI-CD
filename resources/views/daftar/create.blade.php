<x-layout>
    <div class="container">
        <div class="row p-lg-3">
            <div class="col">
                <form action="{{ route('admin.fal') }}" method="POST">
                    @csrf
                    <h1>Registrasi Mahasiswa</h1>
                     <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" 
                               value="{{ old('nim') }}" id="nim" name="nim" 
                               required pattern="[0-9]{5,12}" 
                               title="NIM harus 5-12 digit angka"
                               placeholder="NIM harus 5-12 digit angka">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" 
                               value="{{ old('nama') }}" id="nama" name="nama" 
                               required minlength="3">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" 
                               value="{{ old('email') }}" id="email" name="email" 
                               required>
                    </div>
                   <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" 
                               id="password" name="password" 
                               required minlength="6">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button> 
                </form>
            </div>
        </div>
    </div>
    <script>

    </script>
</x-layout>
<form action="{{ @route('spp.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nominal SPP</label>
        <input type="number" name="nominal" class="form-control @error('nominal')is-invalid @enderror form-input"
            placeholder="Masukkan Nominal SSP Anda">

        @error('nominal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label>golongan</label>
        <select name="golongan" class="form-control form-input @error('golongan')is-invalid @enderror">
            <option value="">-- Pilih golongan --</option>
            <option value="X" {{ old('golongan') == 'X' ? 'selected' : ''}}>X</option>
            <option value="XI" {{ old('golongan') == 'XI' ? 'selected' : '' }}>XI</option>
            <option value="XII" {{ old('golongan')  == 'XII' ? 'selected' : ''}}>XII</option>
        </select>
        @error('golongan')
            <div class="invalid-feedbabck">
                {{ $message }}
            </div>
        @enderror
    </div<
    <div class="modal-footer px-3">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"
            class="btn  btn-success">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
</form>

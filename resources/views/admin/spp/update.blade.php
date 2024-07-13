<form method="POST" id="editForm">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nominal SPP</label>
        <input value="{{ $item->nominal }}" type="number" name="nominal" id="edit_nominal"
            class="form-control @error('nominal')is-invalid @enderror form-input"
            placeholder="Masukkan Nominal SPP Anda">
        @error('nominal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label>Golongan</label>
        <select name="golongan" class="form-control form-input @error('golongan')is-invalid @enderror">
            @if ($item->golongan)
                <option value="{{ $item->golongan }}">{{ $item->golongan }}</option>
            @endif
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
    </div>
    <div class="modal-footer px-3">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"
            class="btn btn-success">Batal</button>
        <button type="submit" class="btn btn-primary">Edit Data</button>
    </div>
</form>

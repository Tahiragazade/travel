<form method="POST" action="/regions/store">
    @csrf


    <label for="name">Bölgənin Adı</label>

    <input id="name" type="text" name="name" class="@error('name') is-invalid @enderror">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
        Ləğv Et
    </button>
    <button type="submit" class="btn btn-primary"> Yadda Saxla</button>
</form>
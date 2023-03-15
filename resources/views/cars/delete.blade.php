
<form action="{{ route('cars.delete', $car->id) }}" method="post">
    <div class="modal-body">
@csrf
@method('DELETE')
<h5 class="text-center"> {{ $car->name }} maşını silməyə əminsiniz mi ?</h5>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ləğv Et</button>
    <button type="submit" class="btn btn-danger">Bəli Sil</button>
</div>
</form>
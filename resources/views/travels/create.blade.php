<form method="POST" action="/travels/store">
    @csrf
    <input type="hidden" name="customer_id" value="{{$customer->id}}">
    <div class="form-row">
        <div class="form-group col-md-12">
            <label >{{$customer->name.' '.$customer->surname }}</label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputState">Rayonu seçin</label>
            <select id="inputState" name="region_id" class="form-control">
                <option selected>Choose...</option>
                @foreach($regions as $region)
                    <option value="{{$region->id}}">{{$region->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="start_date">Gediş Tarixi</label>
            <input id="start_date" type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror">
            @error('start_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="duration">Müddət</label>
            <input id="duration" type="text" name="duration" class="form-control @error('duration') is-invalid @enderror">
            @error('duration')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="distance">Məsafə</label>
            <input id="distance" type="text" name="distance" class="form-control @error('distance') is-invalid @enderror">
            @error('distance')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>



    </div>

    <button type="submit" class="btn btn-primary">Yadda Saxla</button>
</form>
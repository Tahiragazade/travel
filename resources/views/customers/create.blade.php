<form method="POST" action="/customers/store">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Adı</label>
            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="surname">Soyadı</label>
            <input id="surname" type="text" name="surname" class="form-control @error('surname') is-invalid @enderror">
            @error('surname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="age">Yaşı</label>
            <input id="age" type="text" name="age" class="form-control @error('age') is-invalid @enderror">
            @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="surname">Cinsiyyət</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Kişi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="inlineRadio2" value="female">
                <label class="form-check-label" for="inlineRadio2">Qadın</label>
            </div>

            @error('gender')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="phone">Telefon</label>
            <input id="phone" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Avtomobil Markası</label>
            <select id="inputState" name="car_id" class="form-control">
                <option selected>Choose...</option>
                @foreach($cars as $car)
                <option value="{{$car->id}}">{{$car->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Avtomobil İli</label>
            <select id="inputState" name="car_year" class="form-control">
                <option selected>Choose...</option>
                @for($year = (int)date('Y'); 1900 <= $year; $year--)
                    <option value="{{$year}}">{{$year}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Avtomobil Rəngi</label>
            <select id="inputState" name="car_color_id" class="form-control">
                <option selected>Choose...</option>
                @foreach($colors as $color)
                    <option value="{{$color->id}}">{{$color->name}}</option>
                @endforeach
            </select>
        </div>


    </div>

    <button type="submit" class="btn btn-primary">Yadda Saxla</button>
</form>
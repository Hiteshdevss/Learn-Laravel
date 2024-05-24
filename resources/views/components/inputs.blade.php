<div>
    <div class="mb-3">
        <label>{{$label}}</label>
        <input type="{{$type}}" class="form-control" name="{{$name}}" id="name" aria-describedby="emailHelp" value="{{old('name')}}"/>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        <span class="text-danger">
            {{--@error('name')
            {{$message}}                        
            @enderror--}}
        </span>
    </div> 
</div>
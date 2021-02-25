<form action="{{route('cliente.solicitud')}}" method="GET">
    
    @csrf

    <label for="national_id">national id:</label><br/>
    <input type="text" name="national_id" />

    @error('national_id')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <button type="submit">buscar cliente</button>
</form>
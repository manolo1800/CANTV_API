<h1>crear nuevo cliente</h1>

<form action="{{route('cliente.crear')}}" method="POST">
    
    @csrf


    <label for="national_id">national id:</label><br/>
    <input type="text" name="national_id" />

    @error('national_id')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="first_name"> first name:</label><br/>
    <input type="text" name="first_name" />

    @error('first_name')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="last_name">last name</label><br/>
    <input type="text" name="last_name" />

    @error('last_name')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="mari_id">mari id:</label><br/>
    <input type="text" name="mari_id" />

    @error('mari_id')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="nac_id">nacid:</label><br/>
    <input type="number" name="nac_id" />

    @error('nac_id')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="sex_id">sex:</label><br/>
    <select name="sex_id">
        <option value="0">male</option>
        <option value="1" selected>female</option>
    </select>

    @error('sex_id')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="prof_id">prof id:</label><br/>
    <input type="number" name="prof_id" />

    @error('prof_id')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="ctv_birthdate">ctv birthdate:</label><br/>
    <input type="text" name="ctv_birthdate" placeholder="año-mes-dia" />

    @error('ctv_birthdate')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="salutation_cd">salutation cd:</label><br/>
    <input type="text" name="salutation_cd" />

    @error('salutation_cd')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="phone">phone:</label><br/>
    <input type="text" name="phone" />

    @error('phone')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="email_addr">email addr:</label><br/>
    <input type="email" name="email_addr" />

    @error('email_addr')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="ctv_lgr_nacimiento">ctv lgr nacimiento:</label><br/>
    <input type="text" name="ctv_lgr_nacimiento" />

    @error('ctv_lgr_nacimiento')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="postal">postal:</label><br/>
    <input type="text" name="postal" />

    @error('postal')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="nied_id">nied id:</label><br/>
    <input type="number" name="nied_id" />

    @error('nied_id')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="cata_id">cota id:</label><br/>
    <input type="number" name="cata_id" />

    @error('cata_id')
        <br/>
            <small>*{{$message}}</small>
        

    @enderror<br/><br/>

    <label for="parr_id">parr id</label><br/>
    <input type="number" name="parr_id" />

    @error('parr_id')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="address1">addres1:</label><br/>
    <input type="text" name="address1" />

    @error('address1')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="address2">addres2:</label><br/>
    <input type="text" name="address2" />

    @error('address2')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <label for="address3">addres3</label><br/>
    <input type="text" name="address3" />

    @error('address3')
        <br/>
            <small>*{{$message}}</small>
        
    @enderror<br/><br/>

    <button type="submit">crear cliente</button>
</form>
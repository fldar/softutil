<div class="container">
   <div class="tow">
     <h3>Anagrama</h3>
     <h4>*não utilizar palavras com letras repetidas por enquanto, está dando timeout*</h4>
   </div>
 <form class="form-inline" action="{{route('anagram.resolver')}}">
   {{ csrf_field() }}
     <div class="form-group mx-sm-3 mb-2">
       <input type="text" class="form-control" id="anagrama" placeholder="ABC..." name="anagrama">
     </div>
     <button type="submit" class="btn btn-primary mb-2">Resolver</button>
 </form>
</div>

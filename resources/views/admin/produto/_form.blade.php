
<div class="input-field">
    <input type="text", name='nome', value="{{isset($registro->nome) ? $registro->nome : ""}}">
    <label>Nome</label>

<div class="input-field">
    <input type="text", name='preco', value="{{isset($registro->preco) ? $registro->preco : ""}}">
    <label>Preço</label>

</div>

<div class="row">
    <label>
        <input type="checkbox" checked="checked" name="status" {{@isset($registro->status) && ($registro->status == 'Em estoque' ? 'check' : '') 
            
        @endisset}} value="true" />
        <span>Status</span>
      </label>
    </p>
    <br><br>
</div>
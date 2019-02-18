
<form method="post">
    {{csrf_field()}}
    <input type="text" name="input">
    <input type="text" name="input2">
    <select name="select">
        <option value="+">Additon(+)</option>
        <option value="-">Additon(-)</option>
        <option value="*">Additon(*)</option>
        <option value="/">Additon(/)</option>
    </select>
    <input type="submit" value="Ket Qua">
</form>
{{$resul}}

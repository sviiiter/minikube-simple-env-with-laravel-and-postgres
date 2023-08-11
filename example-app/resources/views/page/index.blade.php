<?php
    /* @var \App\Models\FirstPageData[] $models */
?>

<form method="POST" action="/page">
    @csrf
    <label>
        <input type="text" name="data_field">
    </label>
    <input type="submit" value="Apply" />
</form>

@if(!$models)
    No rows here
@endif



@foreach ($models as $model)
    <p>This is page's model {{ $model->id }}</p>
@endforeach


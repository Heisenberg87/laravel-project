<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Title'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body',null, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
</div>
<div class="form-group">
    {{Form::file('cover_image')}}

</div>
<div class="form-group">
    {{Form::submit($button_name, ['class' => 'btn btn-primary'])}}
</div>
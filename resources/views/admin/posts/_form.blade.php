<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('title', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Body', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::textarea('body', null, ['class' => 'form-control', 'required']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('body') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    {!! Form::label('category_id', 'Category', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        <select class="form-control" name="category_id" id="category">
            <option value="">select category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->categories }}
                </option>
            @endforeach
        </select>

        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>

        @empty($post)
        <script type="text/javascript">
           document.getElementById('category_id').value='{{$post->Category->categories}}'
        </script>  
        @endempty
    </div>
</div>

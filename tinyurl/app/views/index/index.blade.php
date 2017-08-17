<html>
<body>

    <form method='POST' action="{{URL::to('/make-url')}}">
        <input name='url' />
        <button type='submit'>Make URL</button>
    </form>
@if ($errors->first('url'))
<p>{{{$errors->first('url')}}}
@endif

</body>
</html>

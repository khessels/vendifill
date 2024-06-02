<form action="{{ route('post.language.switch') }}" method="POST">
    @csrf
    <select name="language" onchange="this.form.submit()">
        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : ''}}>{{__('english')}}</option>
        <option value="es" {{ app()->getLocale() === 'es' ? 'selected' : ''}}>{{__('spanish')}}</option>
    </select>
</form>

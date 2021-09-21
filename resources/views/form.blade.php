<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="sms-payload">
    <button type="submit">Подтвердить</button>
</form>

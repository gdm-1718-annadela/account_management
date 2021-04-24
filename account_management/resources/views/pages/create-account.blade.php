<h1>Add Account</h1>
{{--<form action="{{route('updateExpense', $expense->id)}}" method="post">--}}
<form action="{{route('saveAccount')}}" method="post">
    @csrf
    <label>Name of your account</label>
    <input type="text" name="name" value="zichtrekeningen">
    <label>Describe what this account is about</label>
    <textarea  name="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Blandit massa enim nec dui nunc mattis enim.</textarea>
    <label>How much is currently on it?</label>
    <input type="text" name="amount" value="1000">
    <button type="submit">Add account</button>
</form>

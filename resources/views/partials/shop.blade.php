<div class="panel panel-default">
    <div class="panel-heading">Potions</div>
    <div class="panel-body">
        <form action="{{ url('/potion') }}" method="POST" id="potions-form">
            {{ csrf_field() }}
            <input type="hidden" name="potion_id">
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($potions as $potion)
                    <tr>
                        <td>
                            <img src="/img/items/{{ $potion->icon }}" alt="">
                        </td>
                        <td>{{ $potion->name }}</td>
                        <td><span class="label label-warning">{{ $potion->price }} gold</span></td>
                        <td>
                            <button onClick="setPotion({{ $potion->id }})" class="btn btn-primary">Buy</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
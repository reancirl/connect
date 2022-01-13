@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Edit Menu - {{ $data->name }}
            <a class="btn btn-primary btn-sm" href="{{ url()->previous() }}">Back</a>
        </h3>
        <hr>

        <form action="" method="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Main Title</th>
                        <th>Sub Menu Title</th>
                        <th>Type</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    @foreach ($data->items as $d)
                        <tr>
                            <td>
                                <input type="text" value="{{ $d->title }}" class="form-control bg-white">
                            </td>
                            <td>
                                <input type="text" value="------" class="form-control text-center" readonly>
                            </td>
                            <td>
                                <input type="text" value="{{ $d->link }}" class="form-control bg-white">
                            </td>
                            <td>
                                <button class="btn btn-success btn-sm add_sub_menu" type="button">Add Sub Menu</button>

                                <button class="btn btn-danger btn-sm" type="button">Delete</button>
                            </td>
                        </tr>
                        @foreach ($d->sub_menu as $sub_menu)
                            <tr>
                                <td>
                                    <input type="text" value="------" class="form-control text-center" readonly>
                                </td>
                                <td>
                                    <input type="text" value="{{ $sub_menu->title }}" class="form-control bg-white">
                                </td>
                                <td>
                                    <input type="text" value="{{ $sub_menu->link }}" class="form-control bg-white">
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-center">
                            <button class="btn btn-success add_item" type="button">Add Item</button>
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
    $('.add_item').click(function(e) {
        var tbody = $('#tbody');
        var tr = $('<tr><td><input type="text" value="" class="form-control bg-white"></td>')
        tr.append('<td><input type="text" value="------" class="form-control text-center" readonly></td>')
        tr.append('<td><input type="text" value="" class="form-control bg-white"></td>')
        tr.append('<td><button class="btn btn-success btn-sm add_sub_menu" type="button">Add Sub Menu</button><button class="btn btn-danger btn-sm" type="button">Delete</button></td></tr>')
        tbody.append(tr);
    })

    $(document).on('click','.add_sub_menu',function(e) {
        var tbody = $('#tbody');
        var tr = $('<tr><td><input type="text" value="------" class="form-control text-center" readonly></td>')
        tr.append('<td><input type="text" value="" class="form-control bg-white"></td')
        tr.append('<td><input type="text" value="" class="form-control bg-white"></td>')
        tr.append('<td><button class="btn btn-danger btn-sm" type="button">Delete</button></td></tr>')
        tbody.append(tr);
    })

    $(document).on('click','.btn-danger',function(e) {
        $(this).closest($('tr')).remove();
    })
</script>
@endsection
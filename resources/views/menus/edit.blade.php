@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>
            Edit Menu - {{ $data->name }}
            <a class="btn btn-primary btn-sm" href="{{ url()->previous() }}">Back</a>
        </h3>
        <hr>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Main Title</th>
                    <th>Sub Menu Title</th>
                    <th>Type</th>
                    <th>Hierarchy</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
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
                            <select name="" id="" class="form-control bg-white">
                                <option value="0">0</option>
                                <option value="{{ $d->hierarchy }}">{{ $d->hierarchy }}</option>
                            </select>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm">Add Sub Menu</button>

                            <button class="btn btn-danger btn-sm">Delete</button>
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
                                <select name="" id="" class="form-control bg-white">
                                    <option value="0">0</option>
                                    <option value="{{ $d->hierarchy }}">{{ $d->hierarchy }}</option>
                                </select>
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
                        <button class="btn btn-success">Add Item</button>
                        <button class="btn btn-primary">Save Changes</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

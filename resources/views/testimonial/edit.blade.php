@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">

        <div class="panel-body">
                    <form method="post" action="{{url('banner')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <P><input type="hidden" name="id" value="{{ $banners->id}}"></P>
                        <P><input type="hidden" name="form" value="edit"></P>
                        <p><input type="file" name="uploadpic" value="Choose files"></p>
                        <P><textarea name="description" cols="20" rows="4">{{ $banners->description_1}}</textarea></p>
                        <P><textarea name="description" cols="20" rows="4">{{ $banners->description_2}}</textarea></p>
                        <p><input type="radio" name="align" value="left"> Left <input type="radio" name="align" value="right"> Right</p>
                        <input type="submit" name="submit" value="Update">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </form>
                </div>
    </div>
</div>
@endsection

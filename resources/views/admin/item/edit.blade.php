@php
$title = '商品編集';
@endphp
@extends('layouts.admin')
@section('content')
<section>
    <form action="{{ route('admin.item.update', ['id' => 1]) }}" method="post">
        @csrf
        <button class="btn btn-primary">{{__('Update')}}</button>
        <button class="btn btn-primary">{{__('Delete')}}</button>
        <a href="{{ route('admin.item.index') }}" class="btn btn-outline-primary">{{ __('Back') }}</a>
    </form>
</section>
@endsection


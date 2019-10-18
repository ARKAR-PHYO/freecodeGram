@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.frgn4-1.fna.fbcdn.net/vp/cdff01280deb2376f200dbb25db1cb0b/5E2B1838/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.frgn4-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user-> username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>224</strong> posts</div>
                <div class="pr-5"><strong>31.8k</strong> followers</div>
                <div class="pr-5"><strong>232k</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->desctiption }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.frgn4-1.fna.fbcdn.net/vp/18c6f497032cf9bcc6fa400153df0b63/5E406581/t51.2885-15/e35/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.frgn4-1.fna.fbcdn.net&amp;_nc_cat=107" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.frgn4-1.fna.fbcdn.net/vp/18c6f497032cf9bcc6fa400153df0b63/5E406581/t51.2885-15/e35/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.frgn4-1.fna.fbcdn.net&amp;_nc_cat=107" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.frgn4-1.fna.fbcdn.net/vp/18c6f497032cf9bcc6fa400153df0b63/5E406581/t51.2885-15/e35/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.frgn4-1.fna.fbcdn.net&amp;_nc_cat=107" class="w-100">
        </div>
    </div>
</div>
@endsection

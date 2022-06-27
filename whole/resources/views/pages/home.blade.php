@extends('layouts.app')

@section('header')
    <div class="header">
    <h1>Welcome to my first Laravel Project!</h1>
    </div>
@endsection
@section('api_add')
    <div class="api-func">
        <div class="top" onclick="func_add();">Add</div>
        <div class="func">
            <label>
                title:
                <input type="text" id="add_title">
            </label>
            <br>
            <label>
                priority(1-3):
                <input type="text" id="add_priority">
            </label>
            <br>
            <label>
                done(1/0): 
                <input type="text" id="add_done">
            </label>
        </div>
    </div>
@endsection
@section('api_index')
    <div class="api-func">
        <div class="top" onclick="func_index();">Find one</div>
        <div class="func">
            <label>
                id of the specific item:
                <input type="text" id="item_id">
            </label>
            <br>
            <label>
                Info:
                <textarea rows="10" id="info"></textarea>
            </label>
        </div>
    </div>
@endsection
@section('api_update')
    <div class="api-func">
        <div class="top" onclick="func_update();">Update</div>
        <div class="func">
            <label>
                item to be updated:
                <input type="text" id="item_id_u">
            </label>
            <br>
            <label>
                done(0/1):
                <input type="text" id="done">
            </label>
        </div>
    </div>
@endsection
@section('api_display_all')
    <div class="api-func">
        <div class="top" onclick="func_display_all();">Display All</div>
        <div class="func">
            <textarea rows="10" id="response"></textarea>
        </div>
    </div>
@endsection
@section('api_destroy')
    <div class="api-func">
        <div class="top" onclick="func_destroy();">Delete</div>
        <div class="func">
            <label>
                item to be deleted:
                <input type="text" id="item_id_d">
            </label>
            <br>
        </div>
    </div>
@endsection
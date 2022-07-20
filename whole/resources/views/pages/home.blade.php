@extends('layouts.app')

@section('header')
    <div class="header">
    <h1>Welcome to my first Laravel Project!</h1>
    </div>
@endsection
@section('body')
<section>
  <p>Add a new one: </p>
  <a href="/adding">
    <button>Add</button>  
  </a>
</section>
<table>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Priority</th>
      <th>Done</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Func</th>
    </tr>

    @php $json = App\Http\Controllers\TodoController:: index();
         $json =  substr($json, stripos($json,'{'));
         $obj = json_decode($json);
         $arr = $obj->data;
         foreach ($arr as $item) {
          echo" 
            <tr>
              <td>$item->id</td>
              <td>$item->title</td>
              <td>$item->priority</td>
              <td>$item->done</td>
              <td>$item->created_at</td>
              <td>$item->updated_at</td>
              <td>
              <form method='get'>
                <button onclick='del();' type='submit' name='id' value ='$item->id'>Delete</button>
              </form>  
              </td>
            </tr>";
         }
    @endphp
  </table>
  <script>
    function del(){
      @php 
      if(!empty($_GET['id'])){
        App\Http\Controllers\TodoController:: destroy($_GET['id']);
      }
      @endphp
    }
  </script>
@endsection
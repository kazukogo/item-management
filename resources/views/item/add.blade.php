@extends('adminlte::page')

@section('title', 'アニマル占いの登録')

@section('content_header')
<table>
 <h2>アニマル占い</h2>   
<table border="1">
<tr>
<td width="200"></td>
<td width="100"></td>
<td width="200"></td>
</tr> 

<tr>
<th>アニマル名</th> <th>種類</th> <th>一言でいうと</th> 
</tr>
<tr>
<td>ペガサス</td> <th>Aタイプ</th> <td>自由</td> 
</tr>
<tr>
<td>コアラ</td> <th>Bタイプ</th> <td>温和</td> 
</tr>
<tr>
<td>タイガ－</td> <th>Cタイプ</th> <td>勇猛</td> 
</tr>
<tr>
<td>ゾウ</td> <th>Dタイプ</th> <td>落ち着いている</td> 
</tr>
<tr>
<td>チ－タ</td> <th>Cタイプ</th> <td>賢い</td> 
</tr>
<tr>
<td>ヘビ</td> <th>Cタイプ</th> <td>金運強い</td> 
</tr>
</table>
<br>
<h3>あなたの占ってみたいアニマルの登録</h3>
       
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">動物の名前</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前">
                        </div>

                        <div class="form-group">
                            <label for="type">種類</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="種別">
                        </div>

                        <div class="form-group">
                            <label for="detail">一言でいうと</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="一言でいうと">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
                <td>
                        <!-- TODO: 削除ボタン -->
                        
                    </td>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop

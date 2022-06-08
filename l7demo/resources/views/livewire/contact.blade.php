<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    
        <div class="title">  CRUD 聯絡人資訊</div>
    
    <!-- 查詢顯示資料 -->
        <table class="table table-bordered table-condensed">
            <tr>
                <th>編號</th>
                <th>名稱</th>
                <th>電話</th>
                <th>按鈕</th>
            </tr>
    <!-- 傳入 $data -->
            @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->phone}}</td>
                    <td width="100">
                        <button wire:click="edit({{$row->id}})" class="btn btn-xs btn-warning">編輯</button>
                        <button wire:click="destroy({{$row->id}})" class="btn btn-xs btn-danger">刪除</button>
                    </td>
                </tr>
            @endforeach
        </table>
    



</div>

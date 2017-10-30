<form action="postThem" method="post">
    {{csrf_field()}}
    <input type="text" name="txtTieuDe">
    <select name="sel">
        <option value="sel-1">ádvsd</option>
        <option value="sel-2">22222</option>
    </select>
    <button name="btn">Thêm</button>
</form>
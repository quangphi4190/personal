<form method="POST" action="{{ route('users.reset-password',$user->id)  }}">
    <input hidden name="id" value="{{$user->id}}"/>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Đặt lại mật khẩu: <b>{{$user->name}}</b></h4>
    </div>
    <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label lh-30">Mật khẩu</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Lưu</button>
        <button type="button" class="btn btn-default ml-24" data-dismiss="modal">Đóng</button>
    </div>
</form>
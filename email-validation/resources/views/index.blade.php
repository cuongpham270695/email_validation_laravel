<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="post" action="{{route('checkEmail')}}">
        @csrf
        <lable for="email-input">Email:</lable>
        <input type="text" id="email-input" placeholder="Nhập email của bạn" name="email">
        <input type="submit" value="check">
    </form>
    @if(isset($isEmail))
        Kết quả: {{$isEmail? 'Đúng định dạng Email' : 'Sai định dạng Email'}}
    @endif
</div>

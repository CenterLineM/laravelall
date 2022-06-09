<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<style>
    div {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  width: 400px;
}
li {
  transition: 0.3s;
  width: 200px;
  border: 1px solid #f24;
  list-style-type: none;
  text-align: center;
  padding: 10px;
  cursor: pointer;
  &+li {
    margin-top: 10px;
  }
  &:hover {
    background-color: rgba(#f24,0.04);
  }
  &.active {
    background-color: #f24;
    color: #fff;
  }
  label {
    width: 100%;
    display: block;
  }
}

button {
  margin: 0 auto;
}
input {
  display: none;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>

<body class="antialiased">
<form onsubmit="return showChecked()">
{{-- 不用layout也可以 --}}
    <div>
      <h5>選擇飲料(單選)</h5>
      <ul class="btn single">
        <li><label for="single-1">奶茶</label></li>
        <li><label for="single-2">豆漿</label></li>
        <li><label for="single-3">果汁</label></li>
        <li><label for="single-4">咖啡</label></li>
      </ul>
   
      <input type="radio" name="single" id="single-1" value="奶茶">
      <input type="radio" name="single" id="single-2" value="豆漿">
      <input type="radio" name="single" id="single-3" value="果汁">
      <input type="radio" name="single" id="single-4" value="咖啡">
      
      <button type="submit" value="確認送出">確認送出</button>
      
      <div id="result"></div>
    </div>
    
  </form>
  <footer>

    </footer>
    <script type="text/javascript">
        $('.single li').click(function(){
                $(this).addClass('active').siblings('.active').removeClass('active');
        });
      
      $('.multi li').click(function(){
                $(this).toggleClass('active');
            });
      
      function showChecked() {
                $('#result').html('目前所選：' + $('input[name=single]:checked').val());
                return false;
        }
          </script>
</body>
</html>

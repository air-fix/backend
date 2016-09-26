<!DOCTYPE html>
<html>
<head>
    <title>Demo</title>
    <script type="text/javascript" src="{{asset('../resources/views/style/js/jquery-3.1.0.min.js')}}"></script>
</head>
<body>
<p>计数器演示</p>
<button type="button" onclick="changeit()">请点击此按钮</button>

<script>
    function changeit(){
        $.ajax({
            type: 'POST',
            url: "{{url('order')}}",
            data: {'_token':'{{csrf_token()}}',
                   'building':'西11',
                   'room':'130',
                   'name':'小明',
                   'contact':'电脑问题',
                   'description':'上不了网',
            },
        });
    }
</script>
</body>
</html>
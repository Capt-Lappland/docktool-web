<html lang="zh-CN">
<head>
    <title>Docktool Info</title>

    <script src = "https://code.jquery.com/jquery-3.7.1.min.js">
    </script>

    <script>
        function getMessage(){
            $.ajax({
                type:'get',
                url:'/getmsg',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data){
                    dataF = ""
                    data.forEach(function(item, index, arr){
                        dataF = dataF + "<p>" + " [" + item.time + "] " + item.msg + "</p>"
                    });
                    $("#msg").html(dataF);
                }
            });
        }
        setInterval(function () {
            getMessage()
        },5000)
        getMessage()
    </script>
</head>

<body>
<div id = 'msg'>1</div>
</body>

</html>

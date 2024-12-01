<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<input type="text" id='lele'>
<a href="javascript:void(0)" onclick="hello()">click</a>


<script>
    function hello(){
    var wtf = jQuery('#lele').val()
    
        jQuery.ajax({
            url:'getpractice.php',
            type:'POST',

        data:'wtf='+wtf,
        // data:{wtf:wtf},
        success:function(local){
          alert(local);
        }
        });
    }
</script>



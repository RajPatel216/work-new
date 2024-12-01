<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<input type="text" name="bkl" id="bkl">
<a href="javascript:void(0)" onclick="click_here()">Click Here</a>

<script>
    function click_here(){
        var bkl =jQuery('#bkl').val();

        jQuery.ajax({
            url: 'echo.php',
            type: 'POST',
            // data: { bkl: parseInt(bkl) + 10  },
            // or
            // data:'bkl='+bkl,
            success:function(result){
                alert(result);
            }
        });
        // alert('a');
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <input type="text" name="bkl" id="bkl"> -->
<!-- <a href="javascript:void(0)" onclick="click_here()">Click Here</a> -->

<script>
    get1();
    get2();
    function get1(){
        var bkl =jQuery('#bkl1').val();
        jQuery.ajax({
            url: 'get1.php',
            type: 'POST',
            async:false;
            success:function(result){
                // alert(result);
                console.log(result);
            } }); }

    function get2(){
        var bkl =jQuery('#bkl2').val();
        jQuery.ajax({
            url: 'get2.php',
            type: 'POST',
            success:function(result){
                // alert(result);
                console.log(result);
            }
        });
      
    }
</script>

</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>


    <script>
        $(".delete").click(function()
        {

          var item_id = $(this).attr("data-id");//[city_id]
          var table = $(this).attr("data-table");//cites
          var field = $(this).attr("data-field"); //city_id

            $.ajax({
              type:"GET",
              url:"<?php  echo BLA . 'cities/delete.php'?>",
              data:{item_id:item_id,table:table,field:field},
              dataType:"JSON",
              success:function(data)
              {
                   console.log(data.message);
                  if(data.message == "success")
                  {
                    alert("Deleted Success");
                  }
                  else 
                  {
                     alert("Error");
                  }
                  
              }
            })

        });
    </script>


  </body>
</html>
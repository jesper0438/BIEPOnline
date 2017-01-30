<div class="modal fade" id="bookOut" tabindex="-1" role="dialog" aria-labelledby="booksout">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="bookOut">Een ogenblik geduld alstublieft...</h4>
      </div>
      <div class="modal-body">
        Boek wordt uitgegeven <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
        @include('widgets.progress', array('animated'=> true, 'class'=>'success', 'value'=>'80'))
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="bookIn" tabindex="-1" role="dialog" aria-labelledby="booksin">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="bookIn">Een ogenblik geduld alstublieft...</h4>
      </div>
      <div class="modal-body">
        Boek wordt ingenomen <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
        @include('widgets.progress', array('animated'=> true, 'class'=>'success', 'value'=>'80'))
      </div>
    </div>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
     $('#bookOut').on('show.bs.modal', function(){
        var bookOut = $(this);
        clearTimeout(bookOut.data('hideInterval'));
        bookOut.data('hideInterval', setTimeout(function(){
            bookOut.modal('hide');
        }, 1500));
    });
});
</script>
<script type="text/javascript">
$(function(){
     $('#bookIn').on('show.bs.modal', function(){
        var bookIn = $(this);
        clearTimeout(bookIn.data('hideInterval'));
        bookIn.data('hideInterval', setTimeout(function(){
            bookIn.modal('hide');
        }, 1500));
    });
});
</script>
<script type="text/javascript">
$(function(){
       $('#bookOut').on('shown.bs.modal', function(){
         $('.alert').show()
    });
});
</script>
<script type="text/javascript">
$(function(){
       $('#bookIn').on('shown.bs.modal', function(){
         $('.alert').show()
    });
});
</script>
<script>
$(function() {
   $(document).on('click', '.alert-close', function() {
       $(this).parent().hide();
   })
});
</script>

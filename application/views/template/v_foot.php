<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/owl-carousel/owl.carousel.min.js')?>"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.0/dist/sweetalert2.js"></script>

<script>
  const successData = $('.success-data').data('success');
  const errorData 	= $('.error-data').data('error');
  const warningData = $('.warning-data').data('warning');

  if(successData){
    setTimeout(function(){
      Swal.fire({
        title: 'Success!',
        text: successData,
        icon: 'success',
        confirmButtonColor: '#88619A',
        confirmButtonText: 'OK'
      }).then((result) =>{
        if (result.value){
          document.location.href = href;
        }
      })
    }, 1800);
  }
  else if(errorData){
    Swal.fire({
      title: 'Failed!',
      text: errorData,
      icon: 'error',
      confirmButtonColor: '#88619A',
      confirmButtonText: 'OK'
    }).then((result) =>{
      if (result.value){
        document.location.href = href;
      }
    })
  }
  else if(warningData){
    setTimeout(function(){
      Swal.fire({
        title: 'Warning!',
        text: warningData,
        icon: 'warning',
        confirmButtonColor: '#88619A',
        confirmButtonText: 'OK'
      }).then((result) =>{
        if (result.value){
          document.location.href = href;
        }
      })
    }, 1800);
  }
</script>

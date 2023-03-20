<div id="xqkeji-form">
  <h5 class="card-header bg-info">
<span style="margin-right:1rem;cursor:pointer;" onclick="location.href='<?=$this->url('admin')?>';"><i class="fa fa-reply" ></i></span>
  <?=$pageTitle?>
  </h5>
  <div id="xqkeji-form-body">
    <?php
	  $this->outputFlash();
	  echo $form;
	?>
  </div>
</div>





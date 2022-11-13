<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card bg-cyan text-white rounded-3" style="background: #f1f2f3;">
                                    <div class="card-body">
                                        <form class="mt-4" id="submit-loan"
                                            action=""
                                            method="post">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-dark" for="typeName">Nhập Email</label>
                                                <input type="email" id="name" class="form-control form-control-lg"
                                                    siez="17" placeholder="Nhập email để xem sách đã mượn" name="email"/>
                                            </div>
                                        </form>
                                        <button type="button" class="btn btn--solid btn--primary btn-block btn-lg show-detail" form="submit-loan">
                                            <div class="d-flex justify-content-between">
                                                <span>Xem</span>
                                            </div>
                                        </button>

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-8">
                                <h5 class="mb-3"><a href="/tra-cuu" class="text-body"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Trở Về</a></h5>
                                <hr>
                                <div id="result-list">

                                </div>
                                <div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function(){
  $(".show-detail").click(function(){
    var id = $("#name").val();
    $.ajax({url: "http://<?php echo $_SERVER['HTTP_HOST']?>/src/Controllers/loan.php?action=lichsu&id="+id, success: function(result){
      $("#result-list").html(result);
    }});
  });
});
</script>